<?php 
class ConektaController extends BaseController{
	public function creditCart(){
		return View::make('checkout.index');
	}
}
