@extends('layouts.guru')

@section('title', 'Dashboard')

@section('content')
    <div class="page-inner">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4><i class="fas fa-book-open me-2"></i>Manajemen Modul Ajar</h4>
            <a href="#" class="btn btn-primary btn-round"><i class="fas fa-plus me-2"></i> Tambah Modul</a>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Cari modul ajar..." />
            </div>
            <div class="col-md-6 text-end">
                <div class="btn-group">
                    <button class="btn btn-outline-secondary">Filter</button>
                    <button class="btn btn-outline-secondary">Urutkan</button>
                </div>
            </div>
        </div>

        <div class="table-responsive shadow-sm">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Judul Modul</th>
                        <th>Fase</th>
                        <th>Mata Pelajaran</th>
                        <th>Jenis</th>
                        <th>Status</th>
                        <th>CP & P5</th>
                        <th>Terakhir Diupdate</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Matematika: Trigonometri Dasar</td>
                        <td>Fase D - Kelas 7</td>
                        <td>Matematika</td>
                        <td><span class="badge bg-info">Reguler</span></td>
                        <td><span class="badge bg-success">Published</span></td>
                        <td>
                            <small>CP 4.1</small><br>
                            <span class="badge bg-primary">Bernalar Kritis</span>
                        </td>
                        <td>14 Jun 2024</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="far fa-eye"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-secondary"><i class="far fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IPA: Sistem Reproduksi Manusia</td>
                        <td>Fase E - Kelas 10</td>
                        <td>IPA</td>
                        <td><span class="badge bg-info">Reguler</span></td>
                        <td><span class="badge bg-warning text-dark">Draft</span></td>
                        <td>
                            <small>CP 3.3</small><br>
                            <span class="badge bg-warning">Mandiri</span>
                        </td>
                        <td>12 Jun 2024</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="far fa-eye"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-secondary"><i class="far fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- Tambah baris lain di sini -->
                </tbody>
            </table>
        </div>

        <div class="mt-3 d-flex justify-content-center">
            <!-- Paginate jika datanya banyak -->
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection