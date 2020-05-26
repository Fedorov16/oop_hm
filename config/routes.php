<?php

	$routes = array(
		"ProductsController" => array(
			"products/list" => "index",
			"products/view/([0-9]+)" => "view/$1"
		),

		"ProductsProxyController" => array(
			"products/add" => "add",
			"products/edit/([0-9]+)" => "edit/$1",
			"products/delete/([0-9]+)" => "delete/$1"
		),

		"CategoriesController" => array(
			"categories/list" => "index",
			"categories/add" => "add",
			"categories/view" => "view",
			"categories/edit/([0-9]+)" => "edit/$1",
			"categories/delete/([0-9]+)" => "delete/$1"
		),

		"UsersController" => array(
			"register" => "reg",
			"ajax/check_if_login_exists" => "ajaxCheckIfLoginExists",
			"auth" => "auth",
			"out" => "out"
		),

		"CartsController" => array(
			"cart" =>"index"
		)
		
	);