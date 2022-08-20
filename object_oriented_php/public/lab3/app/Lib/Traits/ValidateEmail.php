<?php 

namespace App\Lib\Traits;

trait ValidateEmail {

    /**
     * Validate email address
     *
     * @param string $param
     * @return void
     */
    public function validateEmail(string $param) {
        if(!filter_var($this->array[$param], FILTER_VALIDATE_EMAIL)) {
            $this->errors[$param][] = 'Email must be a valid email';
        }
    }

}