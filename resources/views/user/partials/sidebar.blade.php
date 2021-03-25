<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    RW01
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">
        <img src="{{asset('assets/img/logo-icon.png')}}" width="50">
    </a>
  </div>
  <ul class="sidebar-menu">
      <li class="{{ Request::route()->getName() == 'dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fa fa-columns"></i> <span>Beranda</span></a></li>
      <li class="{{ Request::route()->getName() == 'penduduk.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('penduduk.index') }}"><i class="fa fa-users"></i> <span>Data Penduduk</span></a></li>
      <li class="{{ Request::route()->getName() == 'bantuan.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('bantuan.index') }}"><i class="fa fa-box"></i> <span>Data Bantuan</span></a></li>
      <li class="{{ Request::route()->getName() == 'backup.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('backup.index') }}"><i class="fa fa-users"></i> <span>Backup / Restore</span></a></li>
    </ul>
</aside>
