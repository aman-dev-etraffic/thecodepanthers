@extends('layouts.admin')

@section('content')
<div class="section_myportfolio">
<h2 class="text-center mt-5 text-primary">My Portfolio</h2>
<div class="container mt-5 ajaxGet">
     @if($data->count() == 0)
          <div class="container">
               <div class="row col-md-12 justify-content-center">
                    <h2 class="text-center text-danger mt-5">You have not entered any portfolio.
                         Click on button to enter portfolio.</h2>
               </div>
               <div class="row col-md-12 justify-content-center">
                    <a href="{{ url('/portfolio-form')}}" class="btn btn-info mt-5" role="button">{{ __('Add Portfolio') }}</a>
               </div>

             </div>
     @else
     <table class="table table-bordered mt-5 table-hover bg-light">
          <thead>
               <tr> 
               	<th>{{ __('Serial No')}}</th>               
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Image') }}</th>
                    <th>{{ __('Summary') }}</th>
                    <th>{{ __(' Name') }}</th>
                    <th>{{ __(' Review') }}</th>
                    <th>{{ __(' Approved') }}</th>
                    <th>{{ __('Action')}}</th>                                    
               </tr>
          </thead>
          <tbody>
               @foreach($data as $users)
               <tr class="parent_table_tr">  
               		<td>{{ $loop->iteration}}</td>
                    <td>{{ $users->title }}</td>
                    <td>{{ $users->description }}</td>
                    <td><img src="{{ url('images/'. $users->image)}}" height="70px" width="80px" class="rounded img-fluid"></td>
                    <td>{{ $users->summary }}</td>
                    <td>{{ $users->client_name }}</td>
                    <td>{{ $users->client_review }}</td>
                    <td> 
                         @if($users->approved == '0')
                         {{ __('Your portfolio not approved')}}
                         @else
                         {{ __('Approved') }}
                         @endif

                    </td>
                    <td>
                         <a href="{{ url('/edit-form' , $users->id) }}"class="btn btn-success" role="button">{{ __('Edit') }}</a>
                         <a onclick="return confirm('Are you sure? You want to delete.')" href="{{ url('/user/delete' , $users->id) }}" class="btn btn-danger" role="button">{{ __('Delete') }}</a>
                         <a href=" {{ url('/portfolio-form') }} " class="btn btn-primary" role="button">{{ __('Add New Portfolio') }}</a>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>	
     @endif
</div>
</div>
@endsection
