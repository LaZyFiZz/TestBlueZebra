@if(!empty($user->id))
	{{ Form::open(array('url' => 'home/'.$user->id, 'method' => 'put', 'class' => 'form-horizontal')) }}
@else
	{{ Form::open(array('url' => 'home', 'method' => 'post', 'class' => 'form-horizontal')) }}
@endif

		<div class="form-group">
			{{ Form::label('Firstname', 'Prénom :', ['class' => 'control-label col-sm-4']) }}
			<div class="col-sm-4">
				{{ Form::text('firstname', !empty($user->id) ? $user->firstname : '', ['class' => 'form-control']); }}
			</div>
		</div>
		
		<div class="form-group">
			{{ Form::label('Lastname', 'Nom :', ['class' => 'control-label col-sm-4']) }}
			<div class="col-sm-4">
				{{ Form::text('lastname', !empty($user->id) ? $user->lastname : '', ['class' => 'form-control']); }}
			</div>
		</div>
		
		<div class="form-group">
			{{ Form::label('Email', 'Email :', ['class' => 'control-label col-sm-4']) }}
			<div class="col-sm-4">
				{{ Form::email('email', !empty($user->id) ? $user->email : '', ['class' => 'form-control']); }}
			</div>
		</div>
		
		<div class="form-group">
			{{ Form::label('Birthday', 'Date de naissance :', ['class' => 'control-label col-sm-4']) }}
			<div class="col-sm-4">
				{{ Form::text('birthday', !empty($user->id) ? $user->birthday : '', ['id' => 'birthday', 'class' => 'form-control']); }}
			</div>
		</div>
		
		<div class="form-group form-actions">
			<div class="col-md-8 col-md-offset-4">
				@if(!empty($user->id))
					{{ Form::submit('Modifier', ['id' => 'submit', 'class' => 'btn btn-effect-ripple btn-primary']); }}
				@else
					{{ Form::submit('Ajouter', ['id' => 'submit', 'class' => 'btn btn-effect-ripple btn-primary']); }}
				@endif
			</div>
		</div>

{{ Form::close() }}