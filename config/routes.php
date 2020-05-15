<?php

	$routes = array(
		"ProductsController" => array(
			"products/list" => "index",
			"products/add" => "add",
			"products/view/([0-9]+)" => "view/$1",
			"products/edit/([0-9]+)" => "edit/$1",
			"products/delete/([0-9]+)" => "delete/$1"
		),

		"CategoriesController" => array(
			"categories/list" => "index",
			"categories/add" => "add",
			"categories/view/([0-9]+)" => "view/$1",
			"categories/edit/([0-9]+)" => "edit/$1",
			"categories/delete/([0-9]+)" => "delete/$1"
		),

		"UsersController" => array(
			"register" => "reg",
			"auth" => "auth"
		)
		
	);