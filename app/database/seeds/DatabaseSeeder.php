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
                'lat' => '19.4120362',
                'lng' => '-99.18064319999996' 
        ));
        DB::table('establishments')->insert(array(
                'name' => 'Los portrillos II',
                'lat' => '19.40782666962928',
                'lng' => '99.17729580314938'

        ));
    }
}

class ProductTableSeeder extends Seeder{

	public function run(){

		DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'coca cola',
                'price' => '18.00',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'papel de baño',
                'price' => '44.00',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'sabritas',
                'price' => '12.00',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));
        DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'pepsi',
                'price' => '11.00',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '1',
                'name' => 'doritos',
                'price' => '9.00',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '2',
                'name' => 'coca cola',
                'price' => '18.50',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '2',
                'name' => 'papel de baño',
                'price' => '42.50',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '2',
                'name' => 'sabritas',
                'price' => '11.50',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));
        DB::table('products')->insert(array(
                'id_establishment' => '2',
                'name' => 'pepsi',
                'price' => '11.00',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));

        DB::table('products')->insert(array(
                'id_establishment' => '2',
                'name' => 'doritos',
                'price' => '12.00',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ));
	}
}