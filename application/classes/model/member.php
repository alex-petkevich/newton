<?php defined('SYSPATH') or die('No direct access allowed.');
class Model_Member extends ORM {
    public function rules()
    {
        return array(
            'firstname' => array(
                array('not_empty'),
                array('max_length', array(':value', 32)),
            ),
            'lastname' => array(
                array('not_empty'),
                array('max_length', array(':value', 32)),
            ),
            'added' => array(
                array('not_empty'),
                array('max_length', array(':value', 32)),
            ),
        );
    }
    public function filters()
    {
        return array();
    }
    
}