<?php 

namespace App\Lib\Traits;

trait CheckMaxLength {

    /**
     * Checking if the string exceeds maximum length
     *
     * @param string $param
     * @param integer $length
     * @return void
     */
    public function checkMaxLength(string $param, int $length) {
        if (strlen($this->array[$param]) > $length) {
            $this->errors[$param][] = 'Maximum length of ' . ucfirst(str_replace('_', ' ', $param)) . ' should not exceed ' . $length;
        }
    }

}