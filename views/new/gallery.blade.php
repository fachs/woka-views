@extends('layout/new/main')

@section('container')
<div class="row bar flex">
	<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
		<i class="bi bi-check-circle"></i>
		<b>1. </b>
		&nbsp;Gambaran
	</div>
	<div class="col-lg-1 col-sm-1 flex">
		<b><i class="bi bi-chevron-double-right"></i></b>
	</div>
	<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
		<i class="bi bi-check-circle"></i>
		<b>2. </b>
		&nbsp;Harga
	</div>
	<div class="col-lg-1 col-sm-1 flex">
		<b><i class="bi bi-chevron-double-right"></i></b>
	</div>
	<div class="col-lg col-sm-12 flex" style="color: #1778B0;">
		<i class="bi bi-check-circle"></i>
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
				<div class="row mt-3">
					<p><b>Berikan foto contoh hasil pekerjaan anda</b></p>
					<div class="col-lg col-sm-12">
						<label for="image">
							<!-- blm ada di database-->
							<input type="file" name="image" id="image" style="display:none;" />
							<img src="{{asset('img/')}}/foto.png" style="border: 1px solid rgb(105, 158, 182); border-radius: 10px; cursor: pointer;" />
						</label>
					</div>
					<div class="col-lg col-sm-12">
						<div class="file-box">

						</div>
					</div>
					<div class="col-lg col-sm-12">
						<div class="file-box">

						</div>
					</div>
				</div>
				<div class="row mt-5">
					<p><b>Berikan video contoh hasil pekerjaan anda</b></p>
					<div class="col-lg-3 col-sm-12">
						<label for="image">
							<!-- blm ada di database-->
							<input type="file" name="image" id="image" style="display:none;" />
							<img src="{{asset('img/')}}/video.png" style="border: 1px solid rgb(105, 158, 182); border-radius: 10px; cursor: pointer;" />
						</label>
					</div>
					<div class="col-lg col-sm-12">
						<p>Durasi video tidak boleh lebih dari 75 detik dan harus dibawah 50 MB</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row btn-area mt-5 mb-5 flex">
		<div class="col-lg col-sm-12">
			<form>
				@csrf
				<button class="btn btn-batal" formaction="{{ url('/new/description') }}">Kembali</button>
				<button class="btn btn-pesan float-end" formaction="{{ url('/new/done') }}">Simpan & Lanjutkan</button>
			</form>
		</div>
	</div>
</div>
@endsection