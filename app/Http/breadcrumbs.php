<?php

/*
 * Backend Breadcrumbs
 */

// Index 
Breadcrumbs::register('admin.index', function($breadcrumbs)
{
	$breadcrumbs->push('<i class="fa fa-home"></i>', route('admin.index'));
});

// Index > Setting
Breadcrumbs::register('admin.setting', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.index');
	$breadcrumbs->push('<i class="fa fa-cog"></i> Setting', route('admin.setting'));
});

// Index > States
Breadcrumbs::register('admin.states', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.index');
	$breadcrumbs->push('<i class="fa fa-globe"></i> States', route('states.index'));
});

// Index > Cities
Breadcrumbs::register('admin.cities', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.index');
	$breadcrumbs->push('<i class="fa fa-map-marker"></i> Cities', route('cities.index'));
});

// Index > Cities > Create
Breadcrumbs::register('admin.cities.add', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.cities');
	$breadcrumbs->push('<i class="fa fa-plus"></i> Add', route('cities.create'));
});

// Index > Cities > Detail
Breadcrumbs::register('admin.cities.show', function($breadcrumbs, $city)
{
	$breadcrumbs->parent('admin.cities');
	$breadcrumbs->push($city->mm_name ? $city->mm_name : $city->name, route('cities.show', ['id'=>$city->id]));
});


// Index > Villages
Breadcrumbs::register('admin.villages', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.index');
	$breadcrumbs->push('<i class="fa fa-map-marker"></i> Villages', route('villages.index'));
});

// Index > Villages
Breadcrumbs::register('admin.villages.add', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.villages');
	$breadcrumbs->push('<i class="fa fa-plus"></i> Add', route('villages.create'));
});

// Index > Ngos
Breadcrumbs::register('admin.ngos', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.index');
	$breadcrumbs->push('<i class="fa fa-group"></i> NGO', route('ngos.index'));
});

Breadcrumbs::register('admin.ngos.show', function($breadcrumbs, $ngo)
{
	$breadcrumbs->parent('admin.ngos');
	$breadcrumbs->push($ngo->mm_name ? $ngo->mm_name : $ngo->name, route('ngos.show', ['id'=>$ngo->id]));
});

// Index > Ngos > Add
Breadcrumbs::register('admin.ngos.add', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.ngos');
	$breadcrumbs->push('<i class="fa fa-plus"></i> Add', route('ngos.create'));
});



// FORNTEND 
// Index
Breadcrumbs::register('frontend.index', function($breadcrumbs)
{
	$breadcrumbs->push('<i class="fa fa-home"></i>', route('frontend.index'));
});
//Index > Add Donation
Breadcrumbs::register('donation.add', function($breadcrumbs)
{
	$breadcrumbs->parent('frontend.index');
	$breadcrumbs->push('<i class="fa fa-plus"></i> Add Donation', route('donation.add'));
});
// Index > ngo list
Breadcrumbs::register('ngos.list', function($breadcrumbs)
{
	$breadcrumbs->parent('frontend.index');
	$breadcrumbs->push('<i class="fa fa-users"></i> NGOs', route('frontend.index'));
});
//Index > Ngo List > Ngo register
Breadcrumbs::register('ngos.register', function($breadcrumbs)
{
	$breadcrumbs->parent('ngos.list');
	$breadcrumbs->push('<i class="fa fa-pencil"></i> Register', route('ngo.register'));
});
//Index > Ngo List > Ngo Login
Breadcrumbs::register('ngos.login', function($breadcrumbs)
{
	$breadcrumbs->parent('ngos.list');
	$breadcrumbs->push('<i class="fa fa-sign-in"></i> Login', route('ngo.login'));
});
