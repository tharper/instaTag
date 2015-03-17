@extends('app')

@section('content')
	
	<h1>Instagram Search</h1>
	@if (Session::get('notification'))
    <div class="alert alert-info">{{ Session::get('notification') }}</div>
	@endif
	<form class="form-horizontal" role="form" method="POST" action="/search">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<label class="col-md-4 control-label">Search Tag</label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="tag" value="">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary" style="margin-right: 15px;">SEARCH</button>
				</div>
			</div>
	</form>
	@if (isset($data))
	<? //print_r($data); ?>
	<ul class="grid">
	@foreach ($data as $photo)
	<li>
    	<a href="{{$photo['link']}}"><img class="media" src="{{$photo['images']['standard_resolution']['url']}}" width="300px"></a>
        <h3 style="text-align:center"><a href="https://instagram.com/{{$photo['user']['username']}}">{{$photo['user']['username']}}</a></h3>
    </li>
	@endforeach
	</ul>
	@endif
@endsection


