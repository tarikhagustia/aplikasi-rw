<form class="form-inline mr-auto" action="{{ route('dashboard') }}">
  <ul class="navbar-nav mr-3">
    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
  </ul>
{{--  <div class="search-element">--}}
{{--    <input class="form-control" value="{{ Request::get('query') }}" name="query" type="search" placeholder="Search" aria-label="Search" data-width="250">--}}
{{--    <button class="btn" type="submit"><i class="fas fa-search"></i></button>--}}
{{--    <div class="search-backdrop"></div>--}}
{{--    --}}{{-- @include('user.partials.searchhistory') --}}
{{--  </div>--}}
</form>
<ul class="navbar-nav navbar-right">

</ul>
