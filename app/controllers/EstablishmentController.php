<?php 
class EstablishmentController extends BaseController{

	public function listEstablishment($lat = null, $lng = null){

		$cadena = 'https://maps.googleapis.com/maps/api/place/search/json?location=19.4120378,-99.1807376&radius=1000&types=establishment&name=tienda&sensor=true&key=AIzaSyA-3AeUCw0jWwicQTQYZteo9x-4P9URB4g';

		// $json = file_get_contents($cadena);
		// echo '<pre>';
		// print_r($json);
		// die();

		$establishments = Establishment::all()->toJson();

		return $establishments;
		//return $json;
	}
}