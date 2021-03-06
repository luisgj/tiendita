<?php
class ProductsController extends BaseController
{
    public function addBarcode(){
        $client = new GuzzleHttp\Client;

        $response = $client->get('https://api.idolondemand.com/1/api/sync/recognizebarcodes/v1?apikey=3be2a192-6df5-4878-9d83-df0abd6fcea4&url=https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Flndg%2Fbarcode2.jpg');

        $json = $response->json();

        return Response::json(array('codigo' => $json['barcode'][0]['text']));
    }

    public function add(){
        $data = Input::all();
       // return Response::json(array('exito' => $data));

        $product = new Product(array(
            'id_establishment' => 1,
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price']
        ));

        if($product->save()){
           return Response::json(array('exito' => true));
        } else {
           return Response::jason(array('fallo' => true));
        }

    }
    public function listProducts(){
        $products = Product::all()->toJson();
        return $products;
    }
}