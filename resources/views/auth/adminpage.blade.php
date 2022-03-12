@extends('layouts.admin')

@section('content')
<h2 class="text-center mt-4 text-primary">Admin Dashboard</h2>
<div class="container-fluid mt-5 ajaxGet">
     <table class="table table-bordered mt-5 table-hover">
          <thead>
               <tr>
                    <th>{{ __('Serial No') }}</th>
                    <th>{{ __('Firstname') }}</th>
                    <th>{{ __('Lastname') }}</th>
                    <th>{{ __('E-mail') }}</th>
                    <th>{{ __('Saveddetails') }}</th>
                    <th>{{ __('Completeprofile') }}</th>
                    <th>{{ __('Approved') }}</th>
                    <th>{{ __('Roles') }}</th>
                    <th class="text-center">{{ __('Actions') }}</th>
                    <!-- <th>Delete</th> -->
               </tr>
          </thead>
          <tbody>
               @foreach($user as $users)
               <tr class="parent_table_tr">  
                    <td>{{ $loop->iteration }}</td>    
                    <!-- <td>{{$users->id}}</td> -->

                    <td>{{ $users->firstname }}</td>
                    <td>{{ $users->lastname }}</td>
                    <td>{{ $users->email }}</td>
                    <td> 
                         @if($users->saveddetails == '1' )
                              {{ __('Yes') }}
                         @else
                              {{ __('Pending') }}
                         @endif
                    </td>
                    <td>
                         @if($users->completeprofile == '1' )
                              {{ __('Yes') }}
                         @else
                              {{ __('Pending') }}
                         @endif
                    </td>
                    <td class="approved">
                         @if($users->approved == '1' )
                              {{ __('Approved') }}
                         @else
                              {{ __('Pending') }}
                         @endif
                    </td>
                    <td>{{ $users->roles }}</td>
                    <td>
                         <!-- <a href="{{ url('/edit-form' , $users->id) }}"class="btn btn-success" role="button">{{ __('Edit') }}</a> -->
                         <a onclick="return confirm('Are you sure? You want to delete.')" href="{{ url('/delete' , $users->id) }}" class="btn btn-danger" role="button">{{ __('Delete') }}</a>

                         @if($users->approved != '1' )  
                         <button class="btn btn-primary approve" data-id="{{ $users->id }}">{{ __('Approved') }}</button>
                         @endif
                         <a href="{{ url('/admin/user-portfolio-display' , $users->id ) }}" class="btn btn-success" role="button">{{ __('User Portfolio')}}</a>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>	
</div>
@endsection
