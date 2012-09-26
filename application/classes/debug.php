<?php defined('SYSPATH') or die('No direct script access.');

class Debug extends Kohana_Debug {
    
    public static function dump($value, $length = 128, $level_recursion = 10) {
        echo parent::dump($value,$length,$level_recursion);
        exit;
    }
    
    public static function vars() {
        $variables = func_get_args();
        echo parent::vars($variables);
        exit;
    }
}
