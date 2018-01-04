@extends('layouts.main')

@section('content')
<form action="/l" class="form" method="POST">
	<input type="text" class="form__input" name="password">
	{{ csrf_field() }}
	<input type="submit" class="form__submit" value="Login">
</form>
@endsection