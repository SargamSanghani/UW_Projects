<?php 

namespace App\Lib\Traits;

trait ValidateName {

    /**
     * Validating first name / last name
     *
     * @param string $param
     * @return void
     */
    public function validateName(string $param) {
        if(!preg_match('/^[A-z0-9\s\-\,\']{1,32}$/', $this->array[$param])) {
            $this->errors[$param][] = ucfirst(str_replace('_', ' ', $param)) . ' contains invalid characters';
        }
    }

}