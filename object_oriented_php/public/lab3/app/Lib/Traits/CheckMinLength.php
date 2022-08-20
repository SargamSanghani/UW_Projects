<?php 

namespace App\Lib\Traits;

trait CheckMinLength {

    /**
     * Checking if the string has minimum length
     *
     * @param string $param
     * @param integer $length
     * @return void
     */
    public function checkMinLength(string $param, int $length) {
        if (strlen($this->array[$param]) < $length) {
            $this->errors[$param][] = 'Minimum length of ' . ucfirst(str_replace('_', ' ', $param)) . ' should be ' . $length;
        }
    }

}