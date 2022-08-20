<?php 

namespace App\Lib\Traits;

trait CheckRequired {

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

}