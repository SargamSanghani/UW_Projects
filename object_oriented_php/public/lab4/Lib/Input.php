<?php

class Input {

    /**
     * a function for getting request data if exists
     *
     * @param string|null $param
     * @return void
     */
    static function request(string $param = null) {
        
        if (isset($_REQUEST[$param])) {
            return $_REQUEST[$param];
        } else if ($param == null){
            return $_REQUEST;
        } else {
            return null;
        }

    }

    /**
     * a function for getting post data if exists
     *
     * @param string|null $param
     * @return void
     */
    static function post(string $param = null) {
        
        if (isset($_POST[$param])) {
            return $_POST[$param];
        } else if ($param == null){
            return $_POST;
        } else {
            return null;
        }

    }

    /**
     * a function for getting get data if exists
     *
     * @param string|null $param
     * @return void
     */
    static function get(string $param = null) {
        
        if (isset($_GET[$param])) {
            return $_GET[$param];
        } else if ($param == null){
            return $_GET;
        } else {
            return null;
        }

    }

    /**
     * a function for getting cookie data if exists
     *
     * @param string|null $param
     * @return void
     */
    static function cookie(string $param = null) {
        
        if (isset($_COOKIE[$param])) {
            return $_COOKIE[$param];
        } else if ($param == null){
            return $_COOKIE;
        } else {
            return null;
        }

    }
}
