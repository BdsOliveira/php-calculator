<?php

interface BasicOperaration {
    public function calculate(): float;
    public function getSecondNumber(): float;
}

class Subtract implements BasicOperaration {

    public function __construct(
        private ?float $firstNumber,
        private ?float $secondNumber,
    ) {
    }

    public function calculate(): float
    {
        return $this->firstNumber - $this->secondNumber;
    }

    public function getSecondNumber(): float
    {
        return $this->secondNumber;
    }
}

class Multiply implements BasicOperaration {

    public function __construct(
        private ?float $firstNumber,
        private ?float $secondNumber,
    ) {
    }

    public function calculate(): float
    {
        return $this->firstNumber * $this->secondNumber;
    }

    public function getSecondNumber(): float
    {
        return $this->secondNumber;
    }
}

class Divide implements BasicOperaration {

    public function __construct(
        private ?float $firstNumber,
        private ?float $secondNumber,
    ) {
    }

    public function calculate(): float 
    {
        if ($this->secondNumber == 0) return 0;
        return $this->firstNumber / $this->secondNumber;
    }

    public function getSecondNumber(): float
    {
        return $this->secondNumber;
    }
}

$firstNumber = $_POST['first_number'];
$secondNumber = $_POST['second_number'];
$operation = $_POST['operation'];

switch ($operation) {
    case 'add':
        $result = new Sum(firstNumber: $firstNumber, secondNumber: $secondNumber); // Named Params in PHP 8.0
        break;
    case 'sub':
        $result = new Subtract(firstNumber: $firstNumber, secondNumber: $secondNumber);
        break;
    case 'mult':
        $result = new Multiply(firstNumber: $firstNumber, secondNumber: $secondNumber);
        break;
    case 'divi':
        $result = new Divide(firstNumber: $firstNumber, secondNumber: $secondNumber);
        break;
    default:
        $result = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP Simple Calculador</title>
</head>
<body>
    <div class="flex justify-center h-screen">
        <div class="p-5 grid content-center w-1/3 bg-blue-500 text-white">
            <div class="text-xl m-1 text-center">
                <?php if ($operation == 'divi' && $result->getSecondNumber() == 0) {
                    echo 'Hey! You can\'t divide by zero!';
                } elseif (!is_null($result)) {
                    echo "Awesome! Your result is: " . number_format($result->calculate() ?? 0, 2);
                } else {
                    echo "Choose an valid operator and make your calc";
                }?>
            </div>
        </div>
        <div class="p-5 grid content-between w-2/3">
            <div class="text-blue-500">
                <div class="text-2xl md:text-6xl m-1 text-center">
                    The Amazing PHP Calculator
                </div>
                <div class="text-center text-xl md:text-2xl">
                    Calculate anything you want
                </div>
            </div>
            <div class="text-xl m-1">
            <form action="index.php" method="post" class="p-5 grid content-between">
                <div>
                    First Number: <input
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                    type="number" step=".01" name="first_number" required/>
                </div>
                <div class="class">
                    Choose the kind of operation do you want:
                    <select name="operation" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="add">Sum values</option>
                        <option value="sub">Subtract values</option>
                        <option value="mult">Multiply values</option>
                        <option value="divi">Divide values</option>
                    </select>
                </div>
                <div>
                    Second Number: <input 
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                    type="number" step=".01" name="second_number" required/>
                </div>
                <div>
                    <input type="submit" 
                    class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:cursor-pointer my-5"
                    value="Calculate" />
                </div>
            </form>
            </div>
            <div class="text-md text-center text-gray-700">
                * This is a experimental feature, do not use it in production
            </div>
        </div>
    </div>
</body>
</html>