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
    $breadcrumbs->push('Setting', route('admin.setting'));
});
