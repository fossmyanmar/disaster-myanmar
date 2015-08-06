<?php

/*
 * Backend Breadcrumbs
 */

// Index > Setting
Breadcrumbs::register('admin.index', function($breadcrumbs)
{
    $breadcrumbs->push('<i class="fa fa-home"></i>', route('admin.index'));
});

Breadcrumbs::register('admin.setting', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push('<i class="fa fa-cog"></i> Setting', route('admin.setting'));
});

Breadcrumbs::register('admin.states', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push('<i class="fa fa-globe"></i> States', route('states.index'));
});

Breadcrumbs::register('admin.cities', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push('<i class="fa fa-map-marker"></i> Cities', route('cities.index'));
});

Breadcrumbs::register('admin.villages', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push('<i class="fa fa-map-marker"></i> Villages', route('villages.index'));
});

Breadcrumbs::register('admin.ngos', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push('<i class="fa fa-group"></i> NGO', route('ngos.index'));
});
