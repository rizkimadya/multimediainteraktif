 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
     <div class="container-fluid">
         <!-- Toggler -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
             aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <!-- Brand -->
         <a class="navbar-brand pt-0 " href="#">
             <img src="{{ asset('assets/img/logodashboard.png') }}" class="navbar-brand-img" alt="...">
         </a>
         <!-- User -->
         <ul class="nav align-items-center d-md-none">
             <li class="nav-item dropdown">
                 <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">
                     <div class="media align-items-center">
                         <span class="avatar avatar-sm rounded-circle">
                             <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-1-800x800.jpg') }}">
                         </span>
                     </div>
                 </a>
                 <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                     <div class=" dropdown-header noti-title">
                         <h6 class="text-overflow m-0">Welcome!</h6>
                     </div>
                     <a href="#" class="dropdown-item">
                         <i class="ni ni-single-02"></i>
                         <span>Profile Saya</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="{{ route('logout') }}" class="dropdown-item">
                         <i class="ni ni-user-run"></i>
                         <span>Logout</span>
                     </a>
                 </div>
             </li>
         </ul>
         <!-- Collapse -->
         <div class="collapse navbar-collapse" id="sidenav-collapse-main">
             <!-- Collapse header -->
             <div class="navbar-collapse-header d-md-none">
                 <div class="row">
                     <div class="col-6 collapse-brand">
                         <a href="#">
                             <img src="{{ asset('assets/img/logodashboard.png') }}" class="navbar-brand-img"
                                 alt="...">
                         </a>
                     </div>
                     <div class="col-6 collapse-close">
                         <button type="button" class="navbar-toggler" data-toggle="collapse"
                             data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                             aria-label="Toggle sidenav">
                             <span></span>
                             <span></span>
                         </button>
                     </div>
                 </div>
             </div>

             <!-- Navigation -->
             <ul class="navbar-nav">
                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" href="/dashboard">
                         <i class="ni ni-tv-2 text-primary mb-1"></i> Dashboard
                     </a>
                 </li>
                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Materi' ? 'active' : '' }}" href="{{ route('materi.index') }}">
                         <i class="fas fa-chart-bar text-danger"></i> Materi
                     </a>
                 </li>
                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Video Materi' ? 'active' : '' }}"
                         href="{{ route('video.index') }}">
                         <i class="ni ni-camera-compact text-warning mb-1"></i> Video
                     </a>
                 </li>
                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Evaluasi Materi' ? 'active' : '' }}"
                         href="{{ route('evaluasi.index') }}">
                         <i class="ni ni-chart-pie-35 text-yellow mb-1"></i> Evaluasi
                     </a>
                 </li>
                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Daftar Pustaka' ? 'active' : '' }}"
                         href="{{ route('dapus.index') }}">
                         <i class="ni ni-single-copy-04 mb-1 text-info"></i> Daftar Pustaka
                     </a>
                 </li>
                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Data Guru' ? 'active' : '' }}"
                         href="{{ route('dataguru.index') }}" {{ auth()->user()->roles == 'user' ? 'hidden' : '' }}>
                         <i class="ni ni-single-02 mb-1 text-success"></i> Data Guru
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
