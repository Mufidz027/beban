	<p>
		<!-- <div class="form-group">
	<	label for="" class="control-label">Harga</label>
		<h5> -->
		{{$produk->harga}}<!-- </h5> -->
		</div>
		Stok : {{$produk->stok}} |
		Berat : {{$produk->berat}} kg|
		Seller : {{$produk->seller->username}} |  
		tanggal prodak : {{$produk->created_at->diffForHumans()}}
	</p>
	