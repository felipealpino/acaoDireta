<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@indexColaboradores');

$router->get('/signin', 'LoginController@signin');
$router->post('/signin', 'LoginController@signinAction');

$router->get('/colaboradores', 'HomeController@indexColaboradores');
$router->post('/colaboradores/end', 'ColaboradoresController@finishPonto');
$router->post('/colaboradores/start', 'ColaboradoresController@startPonto');

$router->post('/usuarios/relatorio', 'UsuariosController@gerarRelatorio');

$router->get('/usuarios', 'HomeController@indexUsuarios');

$router->get('/cadastro_user', 'LoginController@signup_user');
$router->post('/cadastro_user',  'LoginController@signup_user_action');


$router->get('/cadastro_colaborador', 'LoginController@signup_colaborador');
$router->post('/cadastro_colaborador', 'LoginController@signup_colaborador_action');


$router->get('/sair', 'LoginController@logout');