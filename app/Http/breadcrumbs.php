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

// Index > Ngos > Add
Breadcrumbs::register('admin.ngos.add', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.ngos');
	$breadcrumbs->push('<i class="fa fa-plus"></i> Add', route('ngos.create'));
});
