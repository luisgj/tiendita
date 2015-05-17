<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('EstablishmentTableSeeder');
        $this->call('ProductTableSeeder');
	}

}

class EstablishmentTableSeeder extends Seeder {
 
    public function run(){
 
        DB::table('establishments')->insert(array(
                'name' => 'La costeña',
                'lat' => '19.41287',
                'lng' => '-99.177918' 
        ));
        DB::table('establishments')->insert(array(
                'name' => 'Los portrillos II',
                'lat' => '19.41199',
                'lng' => '-99.18386'

        ));
    }
}

class ProductTableSeeder extends Seeder{

	public function run(){

		DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'coca cola',
                'price' => '18.00',
                'url' => '/res/img/coca.jpg'
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'Bonafont',
                'price' => '10.00',
                'url' => '/res/img/bonafont.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'chokis',
                'price' => '12.00',
                'url' => '/res/img/chokis.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));
        DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'doritos',
                'price' => '11.00',
                'url' => '/res/img/doritos.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'emperador',
                'price' => '9.00',
                'url' => '/res/img/emperador.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '2',
                'name' => 'paquetaxo',
                'price' => '12.50',
                'url' => '/res/img/paquetaxo.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '2',
                'name' => 'sandwich',
                'price' => '14.00',
                'url' => '/res/img/sandwich.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '2',
                'name' => 'zucaritas',
                'price' => '11.50',
                'url' => '/res/img/zucaritas.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));
	}
}