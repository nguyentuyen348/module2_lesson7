

<?php
/* code smell
ten goi khong the hien duoc ro nghia:*/
$d;
/*ten goi tot,ro nghia*/
$elapsedTimeInDays;
$daysSinceCreation;
$daysSinceModification;
$fileAgeInDays;

/*ten kho cho viec phat am*/
class DtaRcrd102 {
    private $genymdhms;
    private $modymdhms;
    private $pszqint = "102";
};
/*co the sua thanh:*/
class Customer
{
    private $generationTimestamp;
    private $modificationTimestamp;
    private $recordId = "102";
}

/*su dung ten viet tat*/
class ani {
    function setName($name) {
        $this->name = $name;
    }
}
/*tên gọi tốt:*/
class animal {
function setName($name) {
        $this->name = $name;
    }
}

/*dat ten hằng*/
$ROLE_ADMIN = 1;


/*thuc hanh doi ten bien va tach hang*/

/*Biến a: firstOperand - toán hạng đầu tiên

Biến b: secondOperand - toán hạng thứ hai

Biến o: operator - toán tử*/
class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator): float|int
    {
        switch ($operator) {
            case '+':
                return $firstOperand + $secondOperand;
            case '-':
                return $firstOperand - $secondOperand;
            case '*':
                return $firstOperand * $secondOperand;
            case '/':
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by 0";
                }
            default:
                return "Unsupported operation";
        }
    }
}




/*sau khi tach hang:*/
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator1
{
    public function calculate($firstOperand, $secondOperand, $operator): float|int
    {
        switch ($operator) {
            case ADDITION:
                return $firstOperand + $secondOperand;
            case SUBTRACTION:
                return $firstOperand - $secondOperand;
            case MULTIPLICATION:
                return $firstOperand * $secondOperand;
            case DIVISION:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by 0";
                }
            default:
                return "Unsupported operation";
        }
    }
}
//khi chua tach bien//
class FizzBuzz
{
    public $status;


    public function __construct($number)
    {
        if ($number % 3 == 0 && $number % 5 == 0) {
            $this->status = "FizzBuzz";
        } elseif ($number % 3 == 0) {
            $this->status = "Fizz";
        } elseif ($number % 5 == 0) {
            $this->status = "Buzz";
        } else {
            $this->status = $number . "";
        }
    }

    public function __toString()
    {
        return $this->status;
    }
}