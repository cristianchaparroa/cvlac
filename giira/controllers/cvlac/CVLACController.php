<?php
/**
 * @file CVLACController.php
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once( '../../core/business/IndividualCVLACScraper.php' );
require_once( '../../../core/view/Template.php' );

/**
 * Si el código ha sudo obtenido entonces.
 ***/
if (isset(   $_GET['code'] )){
	$code = $_GET['code'];
	if( $code !=null ){
		setcookie( 'code', htmlentities($code));
	}
}
if (isset($_COOKIE['code']))
{
		$code = htmlentities($_COOKIE['code']); 
		$scraper = new IndividualCVLACScraper( $code );
		$template = new Template( '../../templates/cvlac/cvlacView.php' , array(
			'navbar' => new Template('../../templates/cvlac/navbar.php',array()),
			'titulo' =>  'Hoja de vida',
			'nombres' => new Template(  '../../templates/GenericTable.php', array(
				'id'     => 'nombres',
				'titulo' => '',
				'items'  => array( 'Nombre' 			  => $scraper->getNombre(), 
								   'Nombre en citaciones' => $scraper->getNombreCitaciones(), 
								   'Nacionalidad' 		  => $scraper->getNacionalidad() )
			)),
			'formacionAcademica' => new Template( '../../templates/GenericView.php', array(
				'id'     => 'formacion-academica',
				'titulo' => 'Formación Académica',
				'items'  => $scraper->getFormacionAcademica()
			)),
			'formacionComplementaria' => new Template( '../../templates/GenericView.php', array(
				'id'     => 'formacion-complementaria',
				'titulo' => 'Formación complementaria',
				'items'  => $scraper->getFormacioncomplementaria()
			)),
			'experienciaProfesional' => new Template( '../../templates/GenericView.php',array(
				'id'     => 'experiencia-profesional',
				'titulo' => 'Experiencia profesional',
				'items'  => $scraper->getExperienciaProfesional()
			)),
			'areasActuacion' => new Template( '../../templates/GenericView.php', array(
				'id'     => 'areas-actuacion',
				'titulo' => 'Áreas de actuación',
				'items'  => $scraper->getAreasActuacion()
			)),
			'lineasInvestigacion' => new Template( '../../templates/GenericView.php' ,array(
				'id'     => 'lineas-investigacion',
				'titulo' => 'Líneas de investigación',
				'items'  => $scraper->getLineasInvestigacion()
			)),
			'reconocimientos' => new Template( '../../templates/GenericView.php', array(
				'id'     => 'reconocimientos',
				'titulo' => 'Reconocimientos',
				'items'  => $scraper->getReconocimientos()
			)),

			'trabajosDirigidos' => new Template( '../../templates/GenericView.php',array(
				'id'     => 'trabajos-dirigidos-tutorias',
				'titulo' => 'Trabajos dirigidos/tutorias',
				'items'  => $scraper->getTrabajosDirigidosTutorias()
			)),
			'edicionesRevisiones' => new Template('../../templates/GenericView.php',array(
				'id'     => 'ediciones-revisiones',
				'titulo' => 'Ediciones  ó Revisiones',
				'items'  => $scraper->getEdicionesRevisiones()
			)),
		    'redesConocimientoEspecializado' => new Template('../../templates/GenericView.php',array(
		    	'id'     => 'redees-conocimiento-especializado',
				'titulo' => 'Redes de conocimiento especializado',
				'items'  => $scraper->redesConocimientoEspecializado()
		    )),
		    'articulos' => new Template('../../templates/GenericView.php',array(
		    	'id'     => 'articulos',
				'titulo' => 'Artículos',
				'items'  => $scraper->getArticulos() 
		    )),
		    'libros' => new Template('../../templates/GenericView.php',array(
		    	'id'     => 'libros',
				'titulo' => 'Libros',
				'items'  => $scraper->getLibros()
		    )),
		    'capituloslibros' => new Template('../../templates/GenericView.php',array(
		    	'id'     => 'capitulos-libros',
				'titulo' => 'Capítulos de libros',
				'items'  => $scraper->getCapitulosLibros()
		    )),
		    'trabajosEventos' => new Template('../../templates/GenericView.php',array(
		    	'id'     => 'trabajos-eventos',
				'titulo' => 'Trabajos en eventos(Capítulos de memoria)',
				'items'  => $scraper->getCapitulosMemoria()
		    )),
		    'softwares' => new Template('../../templates/GenericView.php',array(
		    	'id'     => 'softwares',
				'titulo' => 'Softwares',
				'items'  => $scraper->getSoftwares()
		    )),
		    'proyectos' => new Template('../../templates/GenericView.php',array(
		    	'id'     => 'proyectos',
				'titulo' => 'Proyectos',
				'items'  => $scraper->getProyectos()
		    )),
			
		));
		$template->render();
	}
else{
	header("index.php");
}