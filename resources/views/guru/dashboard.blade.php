@extends('layouts.guru')

@section('title', 'Dashboard')

@section('content')
		<div class="page-inner">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
				<div>
					<h3 class="fw-bold mb-3">Dashboard</h3>
					<h6 class="op-7 mb-2">Ringkasan aktivitas mengajar Anda</h6>
				</div>
				<div class="ms-md-auto py-2 py-md-0">
					<a href="#" class="btn btn-info btn-round me-2">Buat Modul Ajar</a>
					<a href="#" class="btn btn-primary btn-round">Tambah Jurnal</a>
				</div>
			</div>
			
			<!-- Stats Cards -->
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-primary card-round">
						<div class="card-body ">
							<div class="row align-items-center">
								<div class="col-icon">
									<div class="icon-big text-center">
										<i class="fas fa-chalkboard-teacher"></i>
									</div>
								</div>
								<div class="col col-stats ms-3 ms-sm-0">
									<div class="numbers">
										<p class="card-category">Total Kelas</p>
										<h4 class="card-title">27</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-info card-round">
						<div class="card-body">
							<div class="row align-items-center">
								<div class="col-icon">
									<div class="icon-big text-center">
										<i class="fas fa-book"></i>
									</div>
								</div>
								<div class="col col-stats ms-3 ms-sm-0">
									<div class="numbers">
										<p class="card-category">Jurnal Hari Ini</p>
										<h4 class="card-title">3</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-success card-round">
						<div class="card-body">
							<div class="row align-items-center">
								<div class="col-icon">
									<div class="icon-big text-center">
										<i class="fas fa-tasks"></i>
									</div>
								</div>
								<div class="col col-stats ms-3 ms-sm-0">
									<div class="numbers">
										<p class="card-category">Tugas Diberikan</p>
										<h4 class="card-title">5</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-secondary card-round">
						<div class="card-body">
							<div class="row align-items-center">
								<div class="col-icon">
									<div class="icon-big text-center">
										<i class="far fa-file-alt"></i>
									</div>
								</div>
								<div class="col col-stats ms-3 ms-sm-0">
									<div class="numbers">
										<p class="card-category">Modul Ajar Dibuat</p>
										<h4 class="card-title">10</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-8">
					<div class="card card-round">
						<div class="card-header">
							<div class="card-head-row">
								<div class="card-title">Jadwal Hari Ini</div>
								<div class="card-tools">
									<a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-sm table-head-bg-info table-hover">
									<thead>
										<tr>
											<th>Waktu</th>
											<th>Kelas</th>
											<th>Mata Pelajaran</th>
											<th>Materi</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>07:30 - 09:00</td>
											<td>X IPA 1</td>
											<td>Matematika</td>
											<td>Trigonometri Dasar</td>
											<td><span class="badge bg-success">Selesai</span></td>
										</tr>
										<tr>
											<td>09:30 - 11:00</td>
											<td>X IPA 2</td>
											<td>Matematika</td>
											<td>Trigonometri Dasar</td>
											<td><span class="badge bg-warning text-dark">Berlangsung</span></td>
										</tr>
										<tr>
											<td>13:00 - 14:30</td>
											<td>X IPA 3</td>
											<td>Matematika</td>
											<td>Trigonometri Dasar</td>
											<td><span class="badge bg-light text-dark">Akan Datang</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-round">
						<div class="card-header">
							<div class="card-head-row">
								<div class="card-title">Aktivitas Terakhir</div>
							</div>
						</div>
						<div class="card-body pb-0">
							<ul class="timeline">
								<li class="timeline-inverted">
									<div class="timeline-badge info">
									<i class="fas fa-book"></i>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h5 class="timeline-title">Menambahkan jurnal mengajar</h5>
										</div>
										<div class="timeline-body">
											<p>Kelas X IPA 1 - Trigonometri Dasar</p>
										</div>
										<small class="text-muted">10 menit yang lalu</small>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge info">
									<i class="fas fa-file-alt"></i>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h5 class="timeline-title">Mengupload Modul Ajar</h5>
										</div>
										<div class="timeline-body">
											<p>Modul Ajar Matematika Kelas X - Pertemuan 12</p>
										</div>
										<small class="text-muted">Kemarin, 09:18</small>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge info">
									<i class="fas fa-tasks"></i>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h5 class="timeline-title">Memberikan tugas</h5>
										</div>
										<div class="timeline-body">
											<p>Tugas Matematika Kelas X IPA 2</p>
										</div>
										<small class="text-muted">Senin, 11:35</small>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection