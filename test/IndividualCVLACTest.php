<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$urlBase = 'scienti1.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000292915';


require_once ( '../core/business/IndividualCVLACScraper.php' );
$cvlacScraper = new IndividualCVLACScraper( $urlBase );
echo $cvlacScraper->getNombre();
//$array = $cvlacScraper->getFormacioncomplementaria();
//$array = $cvlacScraper->getExperienciaProfesional();
//$array = $cvlacScraper->getAreasActuacion();
//$array = $cvlacScraper->getLineasInvestigacion();
//$array = $cvlacScraper->getReconocimientos();
//$array = $cvlacScraper->getTrabajosDirigidosTutorias();
//$array = $cvlacScraper->getEdicionesRevisiones();
//$array = $cvlacScraper->getEventosCientificos(); //#Revisar
//$array = $cvlacScraper->redesConocimientoEspecializado();
//$array = $cvlacScraper->getArticulos();
//$array = $cvlacScraper->getLibros();
//$array = $cvlacScraper->getCapitulosLibros();
//$array = $cvlacScraper->getCapitulosMemoria();
//$array = $cvlacScraper->getSoftwares();
//$array = $cvlacScraper->getProyectos();
/*
foreach( $array as $elemento  )
{
	echo $elemento ;
}*/
/*
$query = '/html/body/div/div[3]/table/tr[4]/td/table';
$listaNodos = $xpath->query( $query );
$items =  array();
foreach( $listaNodos as $element )
{
    $nodeList =  $element->getElementsByTagName( 'td' );
    foreach( $nodeList as $node ){
    	$doc = new DOMDocument();
        $doc->appendChild($doc->importNode($node, true));
        $value =  $doc->saveHTML() ;
        $value = str_replace('<li>&nbsp;</li>', '', $value );
        $items[] = $value ; 
        echo $value . '<br><br>';
    }
}*/
/*