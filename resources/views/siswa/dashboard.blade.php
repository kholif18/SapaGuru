@extends('layouts.siswa')

@section('title', 'Dashboard')

@section('content')
    <div class="welcome-banner">
        <h2>Selamat Pagi, Andi!</h2>
        <p>Kelas XII IPA 2 | Absensi: Hadir</p>
    </div>
    
    <div class="quick-stats">
        <div class="stat-card">
            <h3>Tugas</h3>
            <p>3</p>
        </div>
        <div class="stat-card">
            <h3>Nilai</h3>
            <p>87.5</p>
        </div>
        <div class="stat-card">
            <h3>Kehadiran</h3>
            <p>95%</p>
        </div>
        <div class="stat-card">
            <h3>Pesan</h3>
            <p>2</p>
        </div>
    </div>
    
    <div class="main-menu">
        <div class="menu-grid">
            <a href="#" class="menu-item">
                <div class="menu-icon"><i class="fas fa-book"></i></div>
                <div class="menu-title">Pelajaran</div>
            </a>
            <a href="#" class="menu-item">
                <div class="menu-icon"><i class="fas fa-tasks"></i></div>
                <div class="menu-title">Tugas</div>
            </a>
            <a href="#" class="menu-item">
                <div class="menu-icon"><i class="fas fa-chart-line"></i></div>
                <div class="menu-title">Nilai</div>
            </a>
            <a href="#" class="menu-item">
                <div class="menu-icon"><i class="fas fa-calendar-alt"></i></div>
                <div class="menu-title">Jadwal</div>
            </a>
            <a href="#" class="menu-item">
                <div class="menu-icon"><i class="fas fa-user-friends"></i></div>
                <div class="menu-title">Guru</div>
            </a>
            <a href="#" class="menu-item">
                <div class="menu-icon"><i class="fas fa-envelope"></i></div>
                <div class="menu-title">Pesan</div>
            </a>
        </div>
    </div>
    
    <div class="upcoming-events">
        <h3 class="section-title"><i class="fas fa-calendar-day"></i> Agenda Terdekat</h3>
        
        <div class="event-item">
            <div class="event-date">
                <div class="day">15</div>
                <div class="month">Jun</div>
            </div>
            <div class="event-details">
                <h4>Ujian Matematika</h4>
                <p>08:00 - 10:00 | Ruang 12</p>
            </div>
        </div>
        
        <div class="event-item">
            <div class="event-date">
                <div class="day">18</div>
                <div class="month">Jun</div>
            </div>
            <div class="event-details">
                <h4>Pengumpulan Tugas Fisika</h4>
                <p>Deadline 23:59</p>
            </div>
        </div>
        
        <div class="event-item">
            <div class="event-date">
                <div class="day">20</div>
                <div class="month">Jun</div>
            </div>
            <div class="event-details">
                <h4>Kegiatan OSIS</h4>
                <p>13:00 - 15:00 | Aula</p>
            </div>
        </div>
    </div>
    
@endsection