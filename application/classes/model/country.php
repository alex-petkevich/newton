<?
class Model_Country extends ORM {
    
    protected $_table_name = 'countries';
    protected $_primary_key = 'id';

    protected $_has_many = array(
        'regions' => array(
            'model' => 'region',
            'foreign_key' => 'country_id',
        ),
    );

}
