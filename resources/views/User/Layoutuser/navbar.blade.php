<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            Multimedia <span>Interaktif</span>
            <p class="mb-0">
                Pembelajaran materi sistem pernapasan
            </p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="{{ $title == 'Beranda' ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="{{ $title == 'Materi' ? 'active' : '' }}" href="/materi">Materi</a>
                </li>
                <li class="nav-item">
                    <a class="{{ $title == 'Video' ? 'active' : '' }}" href="/video">Video</a>
                </li>
                <li class="nav-item">
                    <a class="{{ $title == 'Evaluasi' ? 'active' : '' }}" href="/evaluasi">Evaluasi</a>
                </li>
                <li class="nav-item">
                    <a class="{{ $title == 'Daftar Pustaka' ? 'active' : '' }}" href="/daftarpustaka">Daftar Pustaka</a>
                </li>
                <li class="nav-item">
                    <a class="{{ $title == 'Profile' ? 'active' : '' }}" href="/profile">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
