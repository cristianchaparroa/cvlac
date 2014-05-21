<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once('core/view/Template.php');
$titulo = 'Grupo de Investigación en Interconexión de Redes Académicas';

$lorem = 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna';
$template = new Template( 'templates/indexView.php', array(
	'head' => new Template( 'templates/head.php', array( 'titulo' => $titulo )),
	'titulo' => $titulo,
	'navbar' => new Template( 'templates/navbar.php', array() ),
	'giira'  => new Template( 'templates/grupo.php', array( 'nombre' =>'GIIRA',  'descripcion' => 'Grupo giira '. $lorem , 'url'=> 'giira/index.php' )),
	'quinoa' => new Template( 'templates/grupo.php', array( 'nombre' =>'QUINOA', 'descripcion' => 'Grupo Quinoa '. $lorem, 'url'=> '#')),
	'gitud'  => new Template( 'templates/grupo.php', array( 'nombre' =>'GITUD',  'descripcion' => 'Grupo GITUD '. $lorem,  'url'=> '#')) 
));
$template->render();