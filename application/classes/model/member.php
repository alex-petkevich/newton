<?php defined('SYSPATH') or die('No direct access allowed.');
class Model_Member extends ORM {

    protected $_belongs_to = array(
        'type' => array(
            'model' => 'membertype',
            'foreign_key' => 'type_id',
        ),
        'country' => array(
            'model' => 'country',
            'foreign_key' => 'country_id',
        ),
        'region' => array(
            'model' => 'region',
            'foreign_key' => 'region_id',
        ),
    );

    protected $_validation_required = TRUE;

    public function rules()
    {
        if (!$this->_validation_required)
            return array();
        else
            return array(
                'firstname' => array(
                    array('not_empty'),
                    array('max_length', array(':value', 200)),
                ),
                'lastname' => array(
                    array('not_empty'),
                    array('max_length', array(':value', 200)),
                ),
                'gender' => array(
                    array('not_empty'),
                    array('max_length', array(':value', 1)),
                ),
                'added' => array(
                    array('not_empty'),
                    array('date'),
                ),
                'country_id' => array(
                    array('not_empty'),
                ),
                'zip' => array(
                    array('not_empty'),
                ),
                'address1' => array(
                    array('not_empty'),
                ),
                'birthdate' => array(
                    array('not_empty'),
                    array('date'),
                ),
            );
    }

    public function validation_required($required = TRUE)
    {
        if ($required === NULL)
        {
            // work as getter
            return $this->_validation_required;
        }

        // set value
        $this->_validation_required = (bool)$required;
        return $this;
    }
    
    public function filters()
    {
        return array();
    }

    public function update_member($values, $expected = NULL)
    {
        return $this->values($values, $expected)->save();
    }



}