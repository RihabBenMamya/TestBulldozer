@extends('layouts.app')

@section('content')
<div class="container">
	<h1>{{ __('Log Activity') }}</h1>
	<table class="table table-bordered">
		<tr>
			<th>{{ __('No') }}</th>
			<th>{{ __('Access time') }}</th>
			<th>{{ __('URL') }}</th>
			<th>{{ __('User') }}</th>
			<th>{{ __('Ip') }}</th>
			<th>{{ __('Country') }}</th>
			<th width="300px">{{ __('User Agent') }}</th>
			
		</tr>
		@if($logs->count())
			@foreach($logs as $key => $log)
			<tr>
				<td>{{ ++$key }}</td>
				<td><label class="label label-info">{{ $log->created_at }}</label></td>
				<td class="text-success">{{ $log->url }}</td>
				<td>{{ $log->user_id }}</td>
				<td class="text-warning">{{ $log->ip }}</td>
				<td class="text-warning">{{ $log->pays }}</td>
				<td class="text-danger">{{ $log->agent }}</td>
				
				
			</tr>
			@endforeach
		@endif
	</table>
</div>

@endsection