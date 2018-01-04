@extends('layouts.main')

@section('content')
	<form action="/e" class="form" method="POST">
		{{ csrf_field() }}
		<input type="submit" class="form__submit" value="Exit">
	</form>
	<table>
		<tr>
			<th>Ссылка: </th>
			<th>Редирект: </th>
			<th>Клики: </th>
		</tr>
		@foreach($links as $link)
			<tr>
				<td>http://allttrg.ru/{{$link->screenname}}</td>
				<td>{{$link->link}}</td>
				<td>{{$link->clicks}}</td>
			</tr>
		@endforeach
	</table>
@endsection