<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once( '../core/view/Template.php' );
require_once( 'core/business/PageCVLACScraper.php' );
$scraper = new PageCVLACScraper();


$titulo = 'Grupo de Investigación en Interconexión de Redes Académicas';
$template = new Template( 'templates/page/index.php', array(
	'titulo' => $titulo,
	'navbar' => new Template('templates/page/navbar.php',array()),
	'head'  => new Template( '../templates/head.php',array( 'titulo' => $titulo ) ),
	'datosbasicos' => new Template( 'templates/page/datosbasicos.php',array( 
		'fechaFormacion'		 => $scraper->extraerFechaFormacion(),
		'ubicacion'     		 => $scraper->departamentoCidudad(),
		'lider'         		 => $scraper->extraerLider(),
		'informacionCertificada' => $scraper->isInformacionCertificada(),
		'web'                    => $scraper->extraerEmail(),
		'email'					 => $scraper->paginaWeb(),
		'clasificacion'			 => $scraper->extraerClasificacion(),
		'areaconocimiento'		 => $scraper->areaConocimiento(),
		'pn'					 => $scraper->programaNacionalCT(),
		'pn2' 					 => $scraper->programaNacionalCTS(),
	)),
	'instituciones' => new Template( 'templates/GenericView.php',array(
		'id'     => 'instituciones',
		'titulo' => 'Instituciones',
		'items'  => $scraper->obtenerInstituciones(),
	)),
	'lineasInvestigacion' => new  Template( 'templates/GenericView.php',array(
		'id' 	 => 'lineasInvestigacion',
		'titulo' => 'Líneas de investigación declaradas por el grupo',
		'items'	 => $scraper->lineasInvestigacion(),
	)),
	'integrantes' => new Template( 'templates/page/Integrantes.php', array(
		'titulo' 	  => 'Integrantes',
		'integrantes' => $scraper->obtenerIntegrantes(),
	)),
	'produccion' => new Template( 'templates/GenericView.php',array(
		'id' 	 => 'producion',
		'titulo' => 'Producción',
		'items'  => $scraper->obtenerProduccion(),
	)),
	'memorias' => new Template( 'templates/GenericView.php',array(
		'id'     => 'memorias',
		'titulo' => 'Trabajos en eventos ',
		'items'  => $scraper->obtenerMemorias()
	)), 
	'librosPublicados' => new Template( 'templates/GenericView.php', array(
		'id'     => 'librosPublicados',
		'titulo' => 'Libros Publicados',
		'items'  => $scraper->librosPublicados()
	)),
	'capitulosLibrosPublicados' =>	 new Template( 'templates/GenericView.php',array(
		'id' => 'capitulosLibrosPublicados',
		'titulo' => 'Capítulos de Libro Publicados',
		'items' => $scraper->capitulosLibrosPublicados()
	)),
	'otrosArticulosPublicados' => new Template( 'templates/GenericView.php',array(
		'id'     => 'otrosArticulosPublicados',
		'titulo' => 'Otros artículos publicados',
		'items'  => $scraper->otrosArticulosPublicados() 
	)),
	'redes' => new Template( 'templates/GenericView.php', array(
		'id'     => 'redes',
		'titulo' => 'Redes',
		'items'  => $scraper->obtenerRedes()
	)),
	'softwares' => new Template( 'templates/GenericView.php',array(
		'id'     => 'softwares',
		'titulo' => 'softwares',
		'items'  => $scraper->obtenerSoftwares()
	))

));
$template->render();

