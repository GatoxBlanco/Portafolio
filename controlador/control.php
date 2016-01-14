<?php 
/**
* CONTROL GENERAL ACA VAMOS A TENER TODO EL CONTROL 
* DE LAS INTERFAZ Y TODO LO DEMAS.
*/
require("analytics.php");
class Control_General{
	
	function f_control_general($ruta,$para){
		//ENCABRZADO
		$Datos_ruta=array('ruta' => $ruta);
		$VistaEncabezado = file_get_contents($ruta."vista/encabezado.html");
		foreach($Datos_ruta as $claveEncabezado => $valorEncabezado) {
			$VistaEncabezado =str_replace('{'.$claveEncabezado.'}',$valorEncabezado, $VistaEncabezado);
		}echo $VistaEncabezado;	
		if ($para=="yo") {
			$VistaYo = file_get_contents($ruta."vista/yo.html");
			foreach($Datos_ruta as $claveYo => $valorYo) {
				$VistaYo =str_replace('{'.$claveYo.'}',$valorYo, $VistaYo);
			}echo $VistaYo;	
		}elseif ($para=="portafolio") {
			echo file_get_contents($ruta."vista/portafolio.html");
		}elseif ($para=="servicio") {
			echo file_get_contents($ruta."vista/servicio.html");
		}elseif ($para=="plan_basico") {
			echo file_get_contents($ruta."vista/plan-basico.html");
		}elseif ($para=="portafolio_canamelar") {
			echo file_get_contents($ruta."vista/portafolio_canamelar.html");
		}
		$VistaFooter = file_get_contents($ruta."vista/pie_pagina.html");
		foreach($Datos_ruta as $claveFooter => $valorFooter) {
			$VistaFooter =str_replace('{'.$claveFooter.'}',$valorFooter, $VistaFooter);
		}echo $VistaFooter;			
	}
}
?>