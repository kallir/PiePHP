{{Welcome ho}}

@if(count($records) === 1)
	I have one record!
@elseif(count($records) > 1)
	I have multiple records!
@else
	I don't have any records!
@endif

@foreach($bleh as $blu)
<p>This is user {{ $user->id }}</p>
@endforeach

@isset($records)
<!-- records is defined and is not NULL -->
@endisset

@empty($records)
<!-- records is "empty" -->
@endempty
