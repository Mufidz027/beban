<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class Produk extends Model{

	  use ProdukAttributes, ProdukRelations;
	

	protected $table= 'produk';
	protected $cast = [
		'created_at' => 'date time',
		'updated_at' => 'date time',
		'berat' => 'decimal:2'

	];

}