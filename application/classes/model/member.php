<?php defined('SYSPATH') or die('No direct access allowed.');
class Model_Member extends ORM {

    protected $_belongs_to = array(
        'type' => array(
            'model' => 'membertype',
            'foreign_key' => 'type_id',
        ),
    );

    public function rules()
    {
        return array(
            'firstname' => array(
                array('not_empty'),
                array('max_length', array(':value', 200)),
            ),
            'lastname' => array(
                array('not_empty'),
                array('max_length', array(':value', 200)),
            ),
            'added' => array(
                array('not_empty'),
                array('date'),
            ),
        );
    }
    public function filters()
    {
        return array();
    }

    public function update_member($values, $expected = NULL)
    {
        return $this->values($values, $expected)->update();
    }



}