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
    		'state_id'	=> $rakhine->id,
    		'is_district'    => true
    		]);

    	$toungap = City::create([
    		'name'      => 'Taungup',
    		'mm_name'   => 'တောင်ကုတ်',
    		'lat'       => '18.849151',
    		'lng'       => '94.2408084',
    		'state_id'  => $rakhine->id,
    		'district_id' => $thandwe->id
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
    	$seven_day = Ngo::create ([
    		'name'      => '7day',
    		'phone'   => '0973224541, 0973032006',
    		'state_id'      => $yangon->id,
    		'type'	=> 'donation_group',
    		'email' => 'flood@7daydaily.com',
    		'facebook' => 'https://www.facebook.com/7daynews', 
    		'website' => 'www.7daydaily.com'
    		]); 

    	$white_mind = Ngo::create([
    		'name'  => 'အဖြူရောင်စိတ်ထား (MYiD)',
    		'type' => 'donation_group',
    		'email' => 'contact@myidgroup.org',
    		'facebook' => 'www.facebook.com/myidgroup',
    		'phone' => '09451239666',
    		]);
    }
}
