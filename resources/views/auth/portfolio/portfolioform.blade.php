@extends('layouts.app')

@section('content')
<div class="section_portfolio">
<div class="container pt-6">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header bg-dark text-center"><h2 class="text-white">{{ __('Add Portfolio')}}</h2></div>
				<div class="card-body">
					<form method="POST" action="{{ route('portfolio-form') }}" enctype="multipart/form-data">
						@csrf

						<div class="form-group row">
							<lable for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</lable>

							<div class="col-md-6">
								<input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ old('title')}}" required>

                             @error('title')
                             <span class="invalid-feedback" role="alert">
                             	<strong>{{ $message }}</strong>
                             </span>
                             @enderror

							</div>
						</div>

						<div class="form-group row">
							<label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

							<div class="col-md-6">
								<textarea rows="5" id="description" name="description" class="form-control @error('description') is-invalid @enderror" required>{{ old('description') }}</textarea>

								@error('description')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror

							</div>
						</div>

						<div class="form-group row">
							<lable for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Photo') }}</lable>

							<div class="col-md-6">
								<input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" required>

								@error('image')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror

							</div>
						</div>
                        
                        <div class="form-group row">
                        	<label class="col-md-4 col-form-label text-md-right" for="Summary">{{ __('Summary')}}</label>

                        	<div class="col-md-6">
                        		<textarea rows="5" id="summary" name="summary" class="form-control @error('summary') is-invalid @enderror" required>{{ old('summary') }}</textarea>

                        		@error('summary')
                        		<span class="invalid-feedback" role="alert">
                        			<strong>{{ $message }}</strong>
                        		</span>
                        		@enderror

                        	</div>
                        </div>

                        <div class="form-group row">
                        	<lable for="clientname" class="col-md-4 col-form-label text-md-right">{{ __('Client Name') }}</lable>

                        	<div class="col-md-6">
                        		<input type="text" id="clientname" name="clientname" class="form-control @error('clientname') is-invalid @enderror" value="{{ old('clientname')}}" required> 

                        		@error('clientname')
                        		<span class="invalid-feedback" role="alert">
                        			<strong>{{ $message }}</strong>
                        		</span>
                        		@enderror
                        	</div>
                        </div>

                        <div class="form-group row">
                        	<label for="review" class="col-md-4 col-form-label text-md-right">{{ __('Client Review') }}</label>

                        	<div class="col-md-6">
                        		<textarea rows="5" id="review" name="clientreview" class="form-control @error('review') is-invalid @enderror" required>{{ old('review')}}</textarea>
                        	</div>
                        </div>

                        <div class="form-group row">
                        	<div class="col-md-6 offset-md-4">
                        		<button type="submit" name="submit" class="btn btn-primary">
                        			{{ __('Submit') }}
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
@endsection