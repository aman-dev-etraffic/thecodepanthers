@extends('layouts.admin')

@section('content')
<div class="section_update">
<div class="container pt-6">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header bg-dark text-center"><h2 class="text-white">{{ __('Update Form') }}</h2></div>
				<div class="card-body">
					<form method="POST" action="{{ route('update_form',[$data->id]) }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
						<lable for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</lable>

						<div class="col-md-6">
						<input type="text" id="title" name="title" class="form-control" value="{{ $data->title }}">
						</div>
						</div>

						<div class="form-group row">
							<lable for="lnadescriptionme" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</lable>

							<div class="col-md-6">
								<input type="text" name="description" id="description" class="form-control" value="{{ $data->description}}">
							</div>
						</div>

						<div class="form-group row">
							<lable for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image')}}</lable>
							<div class="col-md-6">
								<input id="image" type="file" class="form-control" name="image" value="{{ $data->image }}">
							</div>
						</div>

						<div class="form-group row">
							<lable for="summary" class="col-md-4 col-form-label text-md-right">{{ __('Summary') }}</lable>

							<div class="col-md-6">
								<input type="text" id="summary" class="form-control" name="summary" value="{{ $data->summary }}">
							</div>
						</div>

						<div class="form-group row">
							<lable for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</lable>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="clientname" value="{{ $data->client_name }}">
							</div>
						</div>

						<div class="form-group row">
							<lable for="review" class="col-md-4 col-form-label text-md-right">{{ __('Review')}}</lable>

							<div class="col-md-6">
								<input id="review" type="text" class="form-control" name="clientreview" value="{{ $data->client_review }}">
							</div>
						</div>
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection('content')