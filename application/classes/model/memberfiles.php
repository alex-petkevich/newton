<?
    class Model_Memberfiles extends ORM {

        protected $_table_name = 'members_files';
        protected $_primary_key = 'id';
        
        protected $_belongs_to = array(
            'member' => array(
                'model' => 'member',
                'foreign_key' => 'member_id',
            ),
        );

        const  TYPE_AVATAR =    'avatar';
        const  TYPE_FILE =      'file';



    }
