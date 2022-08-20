<?php 

// Sargam Sanghani
// sargam.sanghani@gmail.com

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

    /**
     * Checking if the values of passed array are there in the post list or not
     *
     * @param array $params - array of keys to be required
     * @return void
     */
    public function checkRequired(array $params) {
        foreach ($params as $key) {
            if (empty($this->array[$key])) {
                $this->errors[$key][] = ucfirst(str_replace('_', ' ', $key)) . ' is a required field.';
            }
        }
    }

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


    // UTILITY FUNCTIONS **************************

    public function errors() {
        return $this->errors;
    }
    
}