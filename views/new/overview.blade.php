@extends('layout/new/main')

@section('container')

<div class="row bar flex">
	<div class="col-lg col-sm-12 flex">
		<b>1. </b>
		&nbsp;Gambaran
	</div>
	<div class="col-lg-1 col-sm-1 flex">
		<b><i class="bi bi-chevron-double-right"></i></b>
	</div>
	<div class="col-lg col-sm-12 flex">
		<b>2. </b>
		&nbsp;Harga
	</div>
	<div class="col-lg-1 col-sm-1 flex">
		<b><i class="bi bi-chevron-double-right"></i></b>
	</div>
	<div class="col-lg col-sm-12 flex">
		<b>3. </b>
		&nbsp;Deskripsi
	</div>
	<div class="col-lg-1 col-sm-1 flex">
		<b><i class="bi bi-chevron-double-right"></i></b>
	</div>
	<div class="col-lg col-sm-12 flex">
		<b>4. </b>
		&nbsp;Galeri
	</div>
	<div class="col-lg-1 col-sm-1 flex">
		<b><i class="bi bi-chevron-double-right"></i></b>
	</div>
	<div class="col-lg col-sm-12 flex">
		<b>5. </b>
		&nbsp;Selesai
	</div>
</div>

<div class="container mt-5">
	<div class="row flex">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-4 col-sm-12">
						<label class="flex">Judul jasa</label>
					</div>
					<div class="col-lg col-sm-12">
						<textarea class="form-control" name="" id=""></textarea>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-lg-4 col-sm-12">
						<label class="flex">Kategori</label>
					</div>
					<div class="col-lg col-sm-12">
						<select class="form-control">
							<option value="Pilih">Pilih</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row btn-area mt-5 mb-5 flex">
		<div class="col-lg col-sm-12">
			<form>
				@csrf
				<button class="btn btn-batal" formaction="{{url('/pesanan')}}">Kembali</button>
				<button class="btn btn-pesan float-end" formaction="{{url('/new/pricing')}}">Simpan & Lanjutkan</button>
			</form>
		</div>
	</div>
</div>
@endsection