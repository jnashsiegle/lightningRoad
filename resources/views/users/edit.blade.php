@extends('adminMaster')
@section('title', 'Edit a user')
@section('content')

	<div class = "container col-md-6 col-md-offset-3">
		<div class = "well well bs-component">
			<form class = "form-horizontal" method="post" action="{{action('UsersController@update', $user->id) }}">

			@include('partials.alerts.errors')

			<div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
              </div> <!-- end .flash-message -->
		
		{!! csrf_field() !!} 
			<fieldset>
				<legend>Edit user</legend>
					<div class = "form-group">
						<label for = "name" class = "col-lg-2 control-label">Name</label>
							<div class = "col-lg-10">
							<input type = "text" class = "form-control" id = "name" placeholder = "name" name = "name" value = "{!! $user->name !!}">
							</div>
					</div>
					<div class = "form-group">
					<label for "email" class = "col-lg-2 control-label">Email</label>
						<div class = "col-lg-10">
						<input type = "email" class = "form-control" id = "email" placeholder = "email" name = "email" value = "{{ $user->email }}">
						</div>
					</div>		
					<hr>
					<div class = "form-group">
						<div class = "col-lg-10 col-lg-offset-2">
						{{ method_field('PATCH') }}
							<a class = "btn btn-default btn-close" href = "{{ route('users.index') }}">Cancel</a>
							<button type = "submit" class = "btn btn-primary">Update</button>
						</div>
					</div>
				</fieldset>
			</form>			
		</div>
	</div>
@endsection