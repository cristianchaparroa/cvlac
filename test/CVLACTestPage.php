<?php



require_once( 'core/PageCVLACScraper.php' );

$scraper = new PageCVLACScraper();
$value = $scraper->extraerClasificacion();
//$value = $scraper->areaConocimiento();
//$value = $scraper->programaNacionaCT();
//$value = $scraper->programaNacionaCTS();
//$value = $scraper->extraerEmail();
//$value = $scraper->isInformacionCertificada();
//$value = $scraper->paginaWeb();
//$value = $scraper->extraerLider();
//$value = $scraper->departamentoCidudad();
//$value = $scraper->extraerFechaFormacion();
echo $value;

//$arreglo = $scraper->obtenerInstituciones();
//$arreglo = $scraper->librosPublicados();
//$arreglo = $scraper->capitulosLibrosPublicados();
//$arreglo = $scraper->otrosArticulosPublicados();
//$arreglo = $scraper->obtenerSoftwares();
//$arreglo = $scraper->obtenerRedes();
//$arreglo = $scraper->lineasInvestigacion();
//$arreglo = $scraper->obtenerProduccion();
//$arreglo = $scraper->obtenerMemorias();
//$arreglo = $scraper->obtenerEventos();

/*foreach( $arreglo as $i ){
	echo $i . '<br><br>';
}
*/


/*
$query = '/html/body/table[1]/tr[2]/td[2]';
$listaNodos = $xpath->query( $query );
foreach( $listaNodos as $nodo ){
	echo $nodo->nodeValue;
}*/