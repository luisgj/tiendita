<?php 
class EstablishmentController extends BaseController{

	public function listEstablishment($lat = null, $lng = null){

		return Response::json(array('name' => 'La costeñita', 'state' => 'CA'));
	
	}
}