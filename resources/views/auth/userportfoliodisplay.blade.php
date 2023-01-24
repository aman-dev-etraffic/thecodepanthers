@extends('layouts.admin')

@section('content')

<div class="container mt-5">
	<h2 class="text-center text-primary">User Portfolio Data</h2>
	<table class="table table-bordered mt-5 table-hover">
		<thead>
			<th>{{ __('Serial Number') }}</th>
			<th>{{ __('Customer Id') }}</th>
			<th>{{ __('Title') }}</th>
			<th>{{ __('Description') }}</th>
			<th>{{ __('Image') }}</th>
			<th>{{ __('Summary') }}</th>
			<th>{{ __('Client Name') }}</th>
			<th>{{ __('Client Review') }}</th>
			<th>{{ __('Approved') }}</th>
			<th>{{ __('Action')}}</th>
		</thead>

		<tbody>
			
			@foreach( $data as $userdata)
			<tr>
				<td> {{ $loop->iteration }}</td>
				<!-- <td> {{ $userdata->id }} </td> -->
				<td> {{ $userdata->customer_id }} </td>
				<td> {{ $userdata->title }} </td>
				<td> {{ $userdata->description }} </td>
				<td><img src="{{ asset('images/'.$userdata->image)}}" width="80" height="80"></td>
				<td> {{ $userdata->summary }} </td>
				<td> {{ $userdata->client_name }} </td>
				<td> {{ $userdata->client_review }} </td>
				<td class="userapproved">  
					@if( $userdata->approved == '1' )
						{{ __('Approved')}}
					@else
						{{ __('Pending')}}
					@endif	
					 </td>
						
				<td>
					<button class="btn btn-info userapprove" data_id="{{ $userdata->id , $userdata->customer_id }}">{{__('Approved')}}</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection