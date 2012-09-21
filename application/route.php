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

