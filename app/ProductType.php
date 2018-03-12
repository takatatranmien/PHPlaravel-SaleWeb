<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model {
	protected $table = "type_products";

	public function product() {
		return $this->hasMany("App\Product", "id_type", "id"); // id o day la id cua bang ProductType (vi ham hasMany no the). 
																// id_type la khoa ngoai trong bang Product
	}
}
