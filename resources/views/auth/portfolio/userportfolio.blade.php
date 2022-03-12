@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5 mb-2">
	<div class="row mt-4">
		<div class="col-md-4 text-center">
			<h3 class="text-success">{{ __('Profile Picture') }}</h3>
			<img src="{{ asset('public/images/'. $data->image)}}" class="img-fluid rounded img-center im" style="margin-top: 100px;">
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header text-center text-success">{{ __('My Portfolio') }}</div>
				<div class="card-body">
					<form method="POST" action="">
						@csrf
						<div class="form-group row">
							<lable class="col-md-4 col-form-label text-md-right" for="title">{{ __('Title')}}</lable>
							<div class="col-md-6">
								<input id="title" class="form-control" type="text" value="{{ $data->title }}">
							</div>
						</div>

						<div class="form-group row">
							<lable class="col-md-4 col-form-label text-md-right" for="des">{{ __('Description')}}</lable>
							<div class="col-md-6">
								<input type="text" id="des" class="form-control" value="{{ $data->description }}">
							</div>
						</div>
						<!-- <div class="form-group row">
							<lable class="col-md-4 col-form-label text-md-right" for="img">{{ __('Profile Picture')}}</lable>
							<div class="col-md-6">
								<img src="{{ asset('public/images/'. $data->image)}}" height="70px" width="80px" class="rounded img-fluid">
							</div>
						</div> -->

						<div class="form-group row">
							<lable class="col-md-4 col-form-label text-md-right" for="sum">{{ __('Summary')}}</lable>
							<div class="col-md-6">
								<textarea rows="5" id="sum" class="form-control" >{{ $data->summary }}</textarea>
							</div>
						</div>

						<div class="form-group row">
							<lable class="col-md-4 col-form-label text-md-right" for="clinentname">{{ __('ClientName')}}</lable>
							<div class="col-md-6">
								<input type="text" class="form-control" value="{{ $data->client_name }}" id="clientname">
							</div>
						</div>

						<div class="form-group row mb-0">
							<lable class="col-md-4 col-form-label text-md-right" for="clientreview">{{ __('Client Review')}}</lable>
							<div class="col-md-6">
								<textarea rows="5" class="form-control" id="clientreview">{{ $data->client_review }}</textarea>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="row justify-content-center"> -->		
</div>
@endsection