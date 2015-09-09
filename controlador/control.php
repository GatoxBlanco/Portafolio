<?php 
/**
* 
* extends AnotherClass ---> POR SI HAY QUE LLAMAR ALGO DE BD
*/
class control {
	
	function estructura($ruta,$que_es){
		
		$Datos=array('ruta' => $ruta);
		$Vista= file_get_contents($ruta."vista/estructura/encabezado.html");
		foreach($Datos as $clave => $valor) {
			$Vista =str_replace('{'.$clave.'}',$valor, $Vista);
		}echo $Vista;
		
		if ($que_es=="index") {
			//index

		}elseif($que_es=="yo"){
			echo file_get_contents($ruta."vista/yo.html");
		}elseif($que_es=="portafolio"){
			echo file_get_contents($ruta."vista/portafolio.html");
		}elseif($que_es=="servicio"){
			echo file_get_contents($ruta."vista/servicio.html");
		}elseif($que_es=="servicio_plan_basico"){
			echo file_get_contents($ruta."vista/plan-basico.html");
		}

		/** PARA EL PIE DE PAGINA **/
		$Datos_pie=array('ruta' => $ruta);
		$Vista_pie_pagina= file_get_contents($ruta."vista/estructura/pie-pagina.html");
		foreach($Datos_pie as $clave_pie => $valor_pie) {
			$Vista_pie_pagina =str_replace('{'.$clave_pie.'}',$valor_pie, $Vista_pie_pagina);
		}echo $Vista_pie_pagina;			
	}
}
?>