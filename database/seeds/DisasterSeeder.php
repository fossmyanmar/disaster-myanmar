<?php

use Illuminate\Database\Seeder;
use Disaster\DisasterLib\Models\State;
use Disaster\DisasterLib\Models\City;
use Disaster\DisasterLib\Models\Village;
use Disaster\DisasterLib\Models\Ngo;

class DisasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//State Seeder
    	DB::table('states')->delete();
    	$yangon = State::create ([
    		'name'		=> 'Yangon',
    		'mm_name' 	=> 'ရန်ကုန်',
    		'lat'		=> '16.903821',
    		'lng' 		=> '96.1695098',
    		]);

    	$mandalay = State::create([
    		'name'		=> 'Mandalay',
    		'mm_name' 	=> 'မန္တလေး',
    		'lat'		=> '21.9403599',
    		'lng' 		=> '96.0758242',
    		]);

    	$rakhine = State::create([
    		'name'		=> 'Rakhine',
    		'mm_name' 	=> 'ရခိုင်',
    		'lat'		=> '19.4183961',
    		'lng' 		=> '93.5491945',
    		]);

    	//City Seeder
    	DB::table('cities')->delete();
    	$thandwe = City::create([
    		'name'		=> 'Thandwe',
    		'mm_name' 	=> 'သံတွဲ',
    		'lat'		=> '18.4644309',
    		'lng' 		=> '94.3389504',
    		'state_id'	=> $rakhine->id
    		]);

    	$toungap = City::create([
    		'name'      => 'Taungup',
    		'mm_name'   => 'တောင်ကုတ်',
    		'lat'       => '18.849151',
    		'lng'       => '94.2408084',
    		'state_id'  => $rakhine->id
    		]);

    	//Village Seeder
    	DB::table('villages')->delete();
    	$antaw = Village::create([
    		'name'		=> 'Anntaw',
    		'mm_name' 	=> 'အံတော်',
    		'lat'		=> '18.4704059',
    		'lng' 		=> '94.3555405',
    		'city_id'		=> $thandwe->id
    		]);    	

    	//Ngo Seeder
    	DB::table('ngos')->delete();
    	$yangon = Ngo::create ([
    		'name'      => 'Online Volunteers of Disasters Recovery for Myanmar (OVDR4MM)',
    		'founder'   => 'Foundar Name',
    		'phone'		=> '09421730187',
    		'state_id'      => $rakhine->id,
    		'city_id'		=> $thandwe->id
    		]); 
    }
}
