<?
Route::set('backend', 'backend(/<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'directory'  => 'backend',
    ));

Route::set('default', '(<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'controller' => 'default',
        'action'     => 'default',
    ));

Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'message' => '.+'))
    ->defaults(array(
        'controller' => 'error'
    ));