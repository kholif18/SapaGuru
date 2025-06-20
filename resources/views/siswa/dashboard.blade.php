@extends('layouts.siswa')

@section('title', 'Dashboard')

@section('content')
    <div class="page-inner">
        <div class="dashboard-container">
        <div class="dashboard-header">
            <div class="user-info">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Foto Profil" class="user-avatar">
                <div class="user-details">
                    <h2>Rizky Maulana</h2>
                    <p>Kelas XII IPA 1 | NIS: 12345</p>
                    <p><i class="fas fa-star text-warning"></i> 450 Poin Prestasi</p>
                </div>
            </div>
            <div class="date-info">
                <h3>Selasa, 19 Maret 2024</h3>
                <p>Semester Genap 2023/2024 | Hari ke-78</p>
            </div>
        </div>

        <!-- Statistik Cepat -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon text-primary">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="stat-value">3</div>
                <div class="stat-label">Tugas Aktif</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon text-success">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-value">94%</div>
                <div class="stat-label">Kehadiran</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon text-info">
                    <i class="fas fa-book"></i>
                </div>
                <div class="stat-value">7</div>
                <div class="stat-label">Mata Pelajaran</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon text-warning">
                    <i class="fas fa-award"></i>
                </div>
                <div class="stat-value">5</div>
                <div class="stat-label">Pencapaian</div>
            </div>
        </div>

        <div class="dashboard-grid">
            <!-- Jadwal Hari Ini -->
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-calendar-day text-primary"></i> Jadwal Hari Ini</h3>
                    <span class="icon">📅</span>
                </div>
                <div class="card-body">
                    <div class="schedule-item">
                        <div class="schedule-title">Matematika</div>
                        <div class="schedule-meta">
                            <span>07:00 - 08:30</span>
                            <span>Ruang 201</span>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-title">Fisika</div>
                        <div class="schedule-meta">
                            <span>08:30 - 10:00</span>
                            <span>Lab. Fisika</span>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-title">Bahasa Inggris</div>
                        <div class="schedule-meta">
                            <span>10:30 - 12:00</span>
                            <span>Ruang 105</span>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 10%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="view-all">
                        <a href="#" class="text-primary">Lihat Jadwal Lengkap <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Tugas Mendekati Tenggat -->
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-exclamation-circle text-danger"></i> Tugas Mendekati Tenggat</h3>
                    <span class="icon">📝</span>
                </div>
                <div class="card-body">
                    <div class="task-item">
                        <div class="task-title">Laporan Praktikum Fisika</div>
                        <div class="task-meta">
                            <span class="priority-high">Tinggi</span>
                            <span>Batas: Besok, 20 Mar</span>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 90%; background-color: #F25961;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="task-item">
                        <div class="task-title">Tugas Matematika - Integral</div>
                        <div class="task-meta">
                            <span class="priority-medium">Sedang</span>
                            <span>Batas: 22 Mar</span>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 65%; background-color: #FFAD46;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="task-item">
                        <div class="task-title">Resume Buku Bahasa Indonesia</div>
                        <div class="task-meta">
                            <span class="priority-low">Rendah</span>
                            <span>Batas: 25 Mar</span>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 40%; background-color: #31CE36;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="view-all">
                        <a href="#" class="text-primary">Lihat Semua Tugas <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Kehadiran -->
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-user-check text-success"></i> Kehadiran</h3>
                    <span class="icon">✅</span>
                </div>
                <div class="card-body">
                    <div class="attendance-item">
                        <div class="task-title">Minggu Ini</div>
                        <div class="task-meta">
                            <span>Hadir: 4 dari 5 hari</span>
                            <span class="attendance-status present">80%</span>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 80%; background-color: #31CE36;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="attendance-item">
                        <div class="task-title">Hari Ini</div>
                        <div class="task-meta">
                            <span>Status: </span>
                            <span class="attendance-status present">Hadir</span>
                        </div>
                    </div>
                    <div class="attendance-item">
                        <div class="task-title">Kemarin</div>
                        <div class="task-meta">
                            <span>Status: </span>
                            <span class="attendance-status late">Terlambat 15 menit</span>
                        </div>
                    </div>
                    
                    <div class="attendance-chart">
                        <div class="chart-bar">
                            <div class="chart-bar-fill" style="height: 70%"></div>
                            <div class="chart-bar-label">Sen</div>
                        </div>
                        <div class="chart-bar">
                            <div class="chart-bar-fill" style="height: 90%"></div>
                            <div class="chart-bar-label">Sel</div>
                        </div>
                        <div class="chart-bar">
                            <div class="chart-bar-fill" style="height: 60%"></div>
                            <div class="chart-bar-label">Rab</div>
                        </div>
                        <div class="chart-bar">
                            <div class="chart-bar-fill" style="height: 100%"></div>
                            <div class="chart-bar-label">Kam</div>
                        </div>
                        <div class="chart-bar">
                            <div class="chart-bar-fill" style="height: 80%"></div>
                            <div class="chart-bar-label">Jum</div>
                        </div>
                    </div>
                    <div class="chart-title">Kehadiran Minggu Ini</div>
                    
                    <div class="view-all">
                        <a href="#" class="text-primary">Riwayat Lengkap <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Pengumuman -->
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-bullhorn text-info"></i> Pengumuman Terbaru</h3>
                    <span class="icon">📢</span>
                </div>
                <div class="card-body">
                    <div class="announcement-item">
                        <div class="announcement-title">Ujian Tengah Semester</div>
                        <div class="announcement-meta">
                            <span><i class="far fa-clock"></i> 18 Mar 2024</span>
                            <span class="badge badge-primary">Penting</span>
                        </div>
                        <p>UTS akan dilaksanakan pada tanggal 1-8 April 2024. Silahkan periksa jadwal di portal siswa...</p>
                    </div>
                    <div class="announcement-item">
                        <div class="announcement-title">Study Tour ke Museum Nasional</div>
                        <div class="announcement-meta">
                            <span><i class="far fa-clock"></i> 15 Mar 2024</span>
                            <span class="badge badge-success">Informasi</span>
                        </div>
                        <p>Study tour akan dilaksanakan pada 25 Maret. Daftarkan diri ke wali kelas sebelum tanggal 22 Maret...</p>
                    </div>
                    <div class="announcement-item">
                        <div class="announcement-title">Perubahan Jadwal Pelajaran</div>
                        <div class="announcement-meta">
                            <span><i class="far fa-clock"></i> 14 Mar 2024</span>
                            <span class="badge badge-warning">Perubahan</span>
                        </div>
                        <p>Jadwal pelajaran hari Jumat akan mengalami perubahan mulai minggu depan. Silahkan cek jadwal terbaru...</p>
                    </div>
                    <div class="view-all">
                        <a href="#" class="text-primary">Lihat Semua Pengumuman <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notifikasi -->
    <div class="notification" id="notification">
        <i class="fas fa-bell"></i> &nbsp; Anda memiliki 2 tugas yang mendekati tenggat waktu!
        <span class="close" onclick="closeNotification()">×</span>
    </div>

    <script>
        // Tampilkan notifikasi setelah halaman dimuat
        window.onload = function() {
            setTimeout(function() {
                document.getElementById('notification').classList.add('show');
            }, 1500);
            
            // Animasikan chart bar
            animateChartBars();
        };

        // Fungsi untuk menutup notifikasi
        function closeNotification() {
            document.getElementById('notification').classList.remove('show');
        }

        // Tutup notifikasi secara otomatis setelah 5 detik
        setTimeout(function() {
            closeNotification();
        }, 8000);

        // Animasi chart bar
        function animateChartBars() {
            const bars = document.querySelectorAll('.chart-bar-fill');
            bars.forEach(bar => {
                const height = bar.style.height;
                bar.style.height = '0%';
                setTimeout(() => {
                    bar.style.height = height;
                }, 300);
            });
        }
    </script>
    </div>
@endsection