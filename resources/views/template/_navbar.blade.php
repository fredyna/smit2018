{{--  Nav  --}}
<nav class="px-nav px-nav-left">
    <button type="button" class="px-nav-toggle" data-toggle="px-nav">
        <span class="px-nav-toggle-arrow"></span>
        <span class="navbar-toggle-icon"></span>
        <span class="px-nav-toggle-label font-size-11">HIDE MENU</span>
    </button>

    <ul class="px-nav-content">
        <li class="px-nav-box p-a-3 b-b-1" id="demo-px-nav-box">
        <i class="fa fa-user fa-4x pull-xs-left" style="width: 54px; height: 54px; margin-left: 10px;"></i>
        <div class="font-size-16"><span class="font-weight-light">Welcome, </span><strong>Admin</strong></div>
        </li>

        <li class="px-nav-item active">
        <a href="javascript:void(0)"><i class="px-nav-icon ion-home"></i><span class="px-nav-label"> BERANDA</span></a>
        </li>
        <li class="px-nav-item">
            <a href="javascript:void(0)"><i class="px-nav-icon ion-person"></i><span class="px-nav-label">KELOLA USER</span></a>
        </li>
        <li class="px-nav-item px-nav-dropdown">
        <a href="javascript:void(0)"><i class="px-nav-icon fa fa-hourglass-half"></i><span class="px-nav-label">KELOLA ACARA</a>

        <ul class="px-nav-dropdown-menu">
            <li class="px-nav-item"><a href="javascript:void(0)"><span class="px-nav-label">DAFTAR ACARA</span></a></li>
            <li class="px-nav-item"><a href="javascript:void(0)"><span class="px-nav-label">DATA PESERTA</span></a></li>
        </ul>
        </li>
        <li class="px-nav-item px-nav-dropdown">
        <a href="javascript:void(0)"><i class="px-nav-icon fa fa-youtube-play"></i><span class="px-nav-label">KELOLA TUTORIAL</a>

        <ul class="px-nav-dropdown-menu">
            <li class="px-nav-item"><a href="javascript:void(0)"><span class="px-nav-label">KATEGORI TUTORIAL</span></a></li>
            <li class="px-nav-item"><a href="javascript:void(0)"><span class="px-nav-label">DAFTAR TUTORIAL</span></a></li>
        </ul>
        </li>
        <li class="px-nav-item px-nav-dropdown">
        <a href="javascript:void(0)"><i class="px-nav-icon ion-ios-paper"></i><span class="px-nav-label">KELOLA ARTIKEL</a>

        <ul class="px-nav-dropdown-menu">
            <li class="px-nav-item"><a href="javascript:void(0)"><span class="px-nav-label">KATEGORI ARTIKEL</span></a></li>
            <li class="px-nav-item"><a href="javascript:void(0)"><span class="px-nav-label">DAFTAR ARTIKEL</span></a></li>
        </ul>
        </li>
        <li class="px-nav-item px-nav-dropdown">
        <a href="javascript:void(0)"><i class="px-nav-icon ion-gear-b"></i><span class="px-nav-label"> PROFIL USER</a>

        <ul class="px-nav-dropdown-menu">
            <li class="px-nav-item"><a href="javascript:void(0)"><span class="px-nav-label">DATA USER</span></a></li>
            <li class="px-nav-item"><a href="javascript:void(0)"><span class="px-nav-label">PASSWORD USER</span></a></li>
        </ul>
        </li>
    </ul>
</nav>

{{--  Navbar   --}}
<nav class="navbar px-navbar">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">
        <b>KOMUNITAS SMIT</b>
        </a>
    </div>

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

    <div class="collapse navbar-collapse" id="px-navbar-collapse">

        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user fa-2x px-navbar-image"></i>
            <span class="hidden-md">Admin</span>
            </a>
            <ul class="dropdown-menu">
            <li><a href="pages-profile-v2.html"><span class="label label-warning pull-xs-right"><i class="fa fa-asterisk"></i></span>Profile</a></li>
            <li class="divider"></li>
            <li><a href="pages-signin-v1.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
            </ul>
        </li>
        </ul>
    </div>
</nav>
    