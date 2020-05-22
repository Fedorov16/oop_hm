<?php

	class Product 
	{
		public function getAll() {
			$products_query = DB::connect();
			$query=(new Select('products'))
				->joins([['LEFT', 'categories', 'product_category_id', 'category_id']])
				-> build();
			$get_products = $products_query->query($query);
			$result = $get_products->fetchAll();
			return $result;
		}
		
		public function getProductById($id){
			$product_query = DB::connect();
			$query=(new Select('products'))
				->joins([['LEFT', 'categories', 'product_category_id', 'category_id']])
				->where ("WHERE product_id = '$id'")
				->build();
			$getProductById = $product_query->query($query);
			$result = $getProductById->fetch();
			return $result;
		}

		public function updateProduct($product){

			$product_query = DB::connect();
			$query = (new Update('products'))
					->set([	'product_name' => $_POST['product_name'],
							'product_desc' => $_POST['product_desc'],
							'product_price' => $_POST['product_price'],
							'product_category_id' => $_POST['product_category_id']
							])
					->where("product_id = $product[product_id]")
					->build();
			$updateProduct = $product_query->query($query);
			return;
		}

		public function AddProduct(){

			$product_query = DB::connect();
			$query = (new InsertInto('products'))
			->set([	'product_name' => $_POST['product_name'],
					'product_desc' => $_POST['product_desc'],
					'product_price' => $_POST['product_price'],
					'product_category_id' => $_POST['product_category_id']
					])
			->build();
			$NewProducts = $product_query->query($query);
			return;
	}
	public function deleteProduct($id){

		$product_query = DB::connect();
		$query = (new Delete('products'))
				
				->where("product_id = $id")
				->build();
		$DeleteProduct = $product_query->query($query);
		return;
	}
}