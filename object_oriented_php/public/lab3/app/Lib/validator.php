<?php 

// Sargam Sanghani
// sargam.sanghani@gmail.com

namespace App\Lib;

class Validator {
    
    /**
     * Array of key/value pairs for validation
     *
     * @var array
     */
    private $array;

    /**
     * Array for the error list
     *
     * @var array
     */
    private $errors = [];

    /**
     * @param array $array - array of values to be validated
     */
    public function __construct(array $array) {
        $this->array = $array;
    }

    use Traits\CheckRequired;

    use Traits\ValidateEmail;

    use Traits\ValidatePhone;

    use Traits\ValidateName;

    use Traits\ValidatePostalCode;

    use Traits\CheckMinLength;

    use Traits\CheckMaxLength;


    // UTILITY FUNCTIONS **************************

    public function errors() {
        return $this->errors;
    }
    
}