@php
    $query = \App\Announcement::whereDate('published_on', '<=', \Carbon\Carbon::now())->whereDate('published_to', '>=', \Carbon\Carbon::now())->get();
@endphp

@foreach($query as $r)
    <div class="alert alert-danger">
        <h6>{{ $r->title }}</h6>
        <p>{!! $r->description !!}</p>
    </div>
@endforeach
