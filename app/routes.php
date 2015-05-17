<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/checkout', 'ConektaController@creditCart');

Route::get('/geolocate/establishment/{lat}/{lng}', 
	array('as'   => 'listEstablishment', 
		 'uses'  => 'EstablishmentController@listEstablishment'
));

Route::get('/geolocate/establishment/products/list', 'ProductsController@listProducts');

Route::get('/geolocate', function(){
    $config = array();
	$config['zoom'] = '19';
	$config['places'] = TRUE;
	//$config['placesTypes'] = 'establishment';
	$config['placesLocation'] = '19.4120362, -99.18064319999996';
	$config['placesRadius'] = 100; 
    $config['center'] = 'auto';
    $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';

    Gmaps::initialize($config);

    // set up the marker ready for positioning
    // once we know the users location

    $marker = array();
    Gmaps::add_marker($marker);

    $marker = array();
	$marker['position'] = '19.4120362, -99.18064319999996';
	$marker['infowindow_content'] = '1 - Hello World!';
	$marker['animation'] = 'DROP';
	$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=T|9999FF|000000';
	Gmaps::add_marker($marker);

    $map = Gmaps::create_map();
    echo '<html><head><script type="text/javascript">var centreGot = false;</script>'.$map['js']."</head><body>".$map['html']."</body></html>";
});

Route::get('/addProduct', function()
{
    return View::make('productAdd');
});


Route::get('/productAdd', 'ProductsController@add');
