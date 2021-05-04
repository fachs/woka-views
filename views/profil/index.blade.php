@extends('layout/search/main')

@section('container')
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-5 col-sm-12">
				<div class="row ms-3 me-3">
					<div class="box">
						<p style="text-align: right;"><i class="bi bi-pencil-fill"></i></p>
						<img src="{{ asset('img/') }}/profile.PNG" width="30%" class="rounded-circle flex mb-3" alt="">
						<p style="text-align: center;"><b>Dono Cassano</b></p>
						<p style="text-align: center;">Cirebon, Jawa Barat</p>
						<p style="text-align: center;">Member sejak 2021</p>
					</div>
				</div>
				<div class="row mt-5 mb-5 ms-3 me-3">
					<div class="box">
						<h6><b>Kotak Masuk</b></h6>
						<div class="row mt-4">
							<div class="col-lg-2">
								<img src="{{ asset('img/') }}/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<p>
									<b>Karen</b> mengirim anda sebuah pesan singkat
									<br>
									<span style="color: #b5b5b5;">
										Mar 01
									</span>
								</p>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-2">
								<img src="{{ asset('img/') }}/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<p>
									<b>Ulrich</b> mengirim anda sebuah pesan singkat
									<br>
									<span style="color: #b5b5b5;">
										Mar 02
									</span>
								</p>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-2">
								<img src="{{ asset('img/') }}/profile.PNG" class="rounded-circle" width="50px" alt="">
							</div>
							<div class="col-lg">
								<p>
									<b>Luigi</b> mengirim anda sebuah pesan singkat
									<br>
									<span style="color: #b5b5b5;">
										Mar 03
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg col-sm-12">
				<div class="box">
					<h6 style="text-align: center;"><b>Riwayat Pemesanan</b></h6>
					<div class="row mt-5 ms-3 me-3">
						<div class="col-lg-4 col-sm-2">
							<img src="{{ asset('img/') }}/Chainsaw-Wood-Cutting-Tools.jpg" width="150px" class="rounded" alt="">
						</div>
						<div class="col-lg col-sm">
							<p style="font-size: 14px;">
								<b>Jasa tebang pohon</b> <br>
								3x Pohon Sedang <br>
								No. 2021039124560
							</p>
						</div>
						<div class="col-lg col-sm">
							<button class="btn btn-status1 float-end"  style="font-size: 14px;" disabled>Sedang diproses</button>
							<br><br>
							<button class="btn btn-selesai float-end"  style="font-size: 14px;" disabled>Selesai</button>
						</div>
					</div>
					<div class="row mt-4 ms-3 me-3">
						<div class="col-lg-4 col-sm-2">
							<img src="{{ asset('img/') }}/Chainsaw-Wood-Cutting-Tools.jpg" width="150px" class="rounded" alt="">
						</div>
						<div class="col-lg col-sm">
							<p style="font-size: 14px;">
								<b>Jasa tebang pohon</b> <br>
								3x Pohon Sedang <br>
								No. 2021039124560
							</p>
						</div>
						<div class="col-lg col-sm">
							<button class="btn btn-status2 float-end" style="font-size: 14px;" disabled>Selesai dikerjakan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection