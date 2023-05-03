<?php
class Calculator{
    public function factorial($number)
    {
        if (!is_numeric($number) || $number < 0 || is_float($number) || false || is_string($number)) {
            return null;
        } elseif ($number < 2) {
            return 1;
        } else {
            $x = 1;
            for ($i = 1; $i <= $number; $i++) {
                $x *= $i;
            }
            return $x;  
        }
    }
    
}
?>