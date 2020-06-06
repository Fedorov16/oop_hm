<?php

	$routes = [
		"ProductsController" => [
			"products/list" => "index",
			"products/view/([0-9]+)" => "view/$1",
			"products/sale" => "indexSale",
		],

		"ProductsProxyController" => [
			"products/add" => "add",
			"products/edit/([0-9]+)" => "edit/$1",
			"products/delete/([0-9]+)" => "delete/$1",
			"products/addSale/([0-9]+)" => "addSale/$1",
		],

		"CategoriesController" => [
			"categories/list" => "index",
			"categories/add" => "add",
			"categories/view/([0-9]+)" => "view/$1",
			"categories/edit/([0-9]+)" => "edit/$1",
			"categories/delete/([0-9]+)" => "delete/$1"
		],

		"UsersController" => [
			"register" => "reg",
			"ajax/check_if_login_exists" => "ajaxCheckIfLoginExists",
			"auth" => "auth",
			"out" => "out"
		],

		"CartsController" => [
			"cart" =>"index"
		],

		"NewsController" => [
			"news/list" => "index"
		],

		"NewsProxyController" => [
			"news/add" => "add"
		],

	];