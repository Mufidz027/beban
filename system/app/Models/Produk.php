<?php

namespace App\Models;

use App\Models\User;


class Produk extends Model{
	protected $table = 'produk';

	protected $cast = [
		'created_at' => 'date time',
		'updated_at' => 'date time',
		'berat' => 'decimal:2'

	];

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	
}