<?php
use App\Engine\Storage;

$router = Storage::get('Router');

$router->get('/api/file/list', 'FileController@all');
$router->get('/api/file', 'FileController@get');
$router->post('/api/file', 'FileController@add');
$router->put('/api/file', 'FileController@update');
$router->delete('/api/file', 'FileController@delete');