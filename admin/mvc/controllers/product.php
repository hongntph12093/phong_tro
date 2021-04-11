<?php
	class product extends controller{
		function listAll() {
			$result = $this->model("productModel");
			$result->get_product_district();
			// echo "cascs";
		}
	}
?>