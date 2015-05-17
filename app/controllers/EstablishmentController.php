<?php 
class EstablishmentController extends BaseController{

	public function listEstablishment($lat = null, $lng = null){

		//$establishments = DB::table('establishments')->select('name', 'lat', 'lng')->get();
		$establishments = Establishment::all()->toJson();

		return $establishments;
	
	}
}