<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Auth_Role extends ORM {
   
   protected $_has_many = array(
      'roles'  => array(
         'model' => 'Menu',
         'through' => 'roles_menu', 
         'far_key' => 'menu_id'
      ),
   );
   
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                array('max_length', array(':value', 32)),
                array(array($this, 'unique'), array('name', ':value')),
            ),
            'description' => array(
                array('max_length', array(':value', 255)),
            ),
           
        );
    }

    public function filters()
    {
        return array();
    }

    public function labels()
    {
        return array(
            'name'         => 'name',
            'description'            => 'description',
        );
    }

    public function unique_key_exists($value, $field = NULL)
    {
        if ($field === NULL)
        {
            // Automatically determine field by looking at the value
            $field = $this->unique_key($value);
        }

        return (bool) DB::select(array('COUNT("*")', 'total_count'))
            ->from($this->_table_name)
            ->where($field, '=', $value)
            ->where($this->_primary_key, '!=', $this->pk())
            ->execute($this->_db)
            ->get('total_count');
    }

    /**
     * Allows a model use both email and username as unique identifiers for login
     *
     * @param   string  unique value
     * @return  string  field name
     */
    public function unique_key($value)
    {
        return $value;
    }


    /**
     * Create a new role
     *
     * @param array $values
     * @param array $expected
     * @throws ORM_Validation_Exception
     */
    public function create_role($values, $expected)
    {
        // Validation for passwords
        return $this->values($values, $expected)->create();
    }

    /**
     * Update an existing role
     *
     * @param array $values
     * @param array $expected
     * @throws ORM_Validation_Exception
     */
    public function update_role($values, $expected = NULL)
    {
        return $this->values($values, $expected)->update();
    }

} // End Auth User Model