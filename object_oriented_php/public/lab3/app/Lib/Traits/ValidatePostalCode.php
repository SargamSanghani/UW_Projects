<?php 

namespace App\Lib\Traits;

trait ValidatePostalCode {

    /**
     * Validating postal code
     *
     * @param string $param
     * @return void
     */
    public function validatePostalCode(string $param) {
        if(!preg_match("/[a-zA-Z]\d[a-zA-Z][\s]\d[a-zA-Z]\d/", $this->array[$param])) {
            $this->errors[$param][] = 'Postal code must be valid';
        }
    }

}