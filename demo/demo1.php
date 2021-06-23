<?php
//sau khi tach bien//

class FizzBuzz
{
    public $status1;

    public function __construct(int $number)
    {
        $isFizz = $number % 3 == 0;
        $isBuzz = $number % 5 == 0;

        if ($isFizz && $isBuzz) {
            $this->status = "FizzBuzz";
        } elseif ($isFizz) {
            $this->status = "Fizz";
        } elseif ($isBuzz) {
            $this->status = "Buzz";
        } else {
            $this->status = $number . "";
        }
    }
}



