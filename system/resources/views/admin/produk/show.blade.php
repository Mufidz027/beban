@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data Produk
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>
							<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<h3>{{$produk->nama_produk}}</h3>
							</div>
							
									<p>
										<!-- <div class="form-group">
									<	label for="" class="control-label">Harga</label>
		<h5> -->
										{{$produk->harga}}<!-- </h5> -->
										</div>
										Stok : {{$produk->stok}} |
										Berat : {{$produk->berat}} kg|
										Seller : {{$produk->seller->nama}} |  
										tanggal prodak : {{$produk->created_at->diffForHumans()}}
									</p>
							<p>
								{!! nl2br($produk->deskripsi) !!}
							</p>
							<p>
								<img style="width:40%" src="{{url("public/$produk->foto")}}" >
							</p>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection