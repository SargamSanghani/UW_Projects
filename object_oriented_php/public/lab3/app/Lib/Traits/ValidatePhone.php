<?php 

namespace App\Lib\Traits;

trait ValidatePhone {

    /**
     * Validating phone number
     *
     * @param string $param
     * @return void
     */
    public function validatePhone(string $param) {
        if(!preg_match('/\d{3}-\d{3}-\d{4}/', $this->array[$param])) {
            $this->errors[$param][] = 'Phone number must be valid. Format: xxx-xxx-xxxx';
        }
    }

}