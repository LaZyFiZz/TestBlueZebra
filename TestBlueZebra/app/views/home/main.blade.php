<div class="panel-heading">
	<h3 class="panel-title">Chandra</h3>
	<span class="pull-right">
		<i class="fa fa-fw fa-times removepanel clickable"></i>
		<i class="fa fa-fw fa-chevron-up clickable"></i>
	</span>
</div>
<div class="panel-body">
	<table id="bluezebra" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Lastname</th>
				<th>Firstname</th>
				<th>Email</th>
				<th>Birthday</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr id="{{$user->id}}">
					<td>{{$user->lastname}}</td>
					<td>{{$user->firstname}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->birthday}}</td>
					<td><i id="update" class="fa fa-fw fa-paint-brush"></i><i id="delete" class="glyphicon glyphicon-trash"></i></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>