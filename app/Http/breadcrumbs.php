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

// Index > Villages
Breadcrumbs::register('admin.villages', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.index');
	$breadcrumbs->push('<i class="fa fa-map-marker"></i> Villages', route('villages.index'));
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
