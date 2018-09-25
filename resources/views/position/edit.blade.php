@forelse($table_position as $row)
<h1>Edit Position : {{ $row->position_name }}</h1>
	<form action="{{ url('/') }}/position/{{ $row->position_id }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
    	<div>
    		<strong>Position_name : </strong>
    		<input name="position_name" value="{{ $row->position_name }}" placeholder="position_name here..." >
    	</div>
    	<div>
			<a href="{{ url('/') }}/position">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty
	<h1>This position id does not exist</h1>
@endforelse
