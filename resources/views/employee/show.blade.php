@forelse($table_employee as $row)
	<h1>Employee : {{ $row->employee_id }} </h1>
	<div>
		<strong>name : </strong>
		<span>{{ $row->name }} </span>
	</div>
	<div>
		<strong>age : </strong>
		<span>{{ $row->age }}</span>
	</div>
	<div>
		<strong>address : </strong>
		<span>{{ $row->address }}</span>
	</div>
	<div>
		<strong>salary : </strong>
		<span>{{ $row->salary }}</span>
	</div>
	<div>
		<strong>position_id : </strong>
		<span>{{ $row->position_id }}</span>
	</div>
	<div><a href= 'http://127.0.0.1:9080/laravel_project/public'>back to employee</a></div>
@empty
	<div>This Employee "id" does not exist</div>
@endforelse