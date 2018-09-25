@forelse($table_position as $row)
	<h1>Position : {{ $row->position_id }} </h1>
	<div>
		<strong>position_id : </strong>
		<span>{{ $row->position_id }}</span>
	</div>
    <div>
		<strong>position_name : </strong>
		<span>{{ $row->position_name }}</span>
	</div>
	<div><a href= 'http://127.0.0.1:9080/laravel_project/public'>back to employee</a></div>
@empty
	<div>This Employee "id" does not exist</div>
@endforelse