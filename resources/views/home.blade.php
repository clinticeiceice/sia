
@extends('layouts.app')

@section('content')
{{-- @include('layouts.nav') --}}
<div class="container">

    <div class="row justify-content-center">
        
        <div class="col-md-8">
            {{-- WEATHER UPDATES --}}
            <div class="card bg-white mb-3 shadow">
                <div class="card-header">
                    <h6 class="fw-bold">Show weather details for:</h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('show') }}" class="btn btn-primary">Manila</a>
                    <a href="{{ route('show1') }}" class="btn btn-primary">Cebu</a>
                </div>
            </div>
            {{-- TABLE LIST OF USERS --}}
            <div class="card bg-white shadow">
                <div class="card-header">{{ __('List of users') }}</div>

                <div class="card-body table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($isAdmin)
                         <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->user_type }}</td>
                                    <td>
                                        <a href="{{ route('edit', $user) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <label for="delete{{ $user->id }}" class="btn btn-danger delete-btn">Delete</label>
                                            {{-- DELETION CONFIRMATION --}}
                                            <input type="checkbox" id="delete{{ $user->id }}" class="delete-checkbox">
                                            <div class="confirm-popup">
                                                <p class="text text-dark">Are you sure you want to delete this user?</p>
                                                <button type="submit" class="btn btn-danger confirm-delete">Yes</button>
                                                <label for="delete{{ $user->id }}" class="btn btn-secondary cancel-delete">No</label>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                    @else
                        <p>You do not have permission to view the user table!</p>
                    @endif
                    <a href="/send-email">Send Email</a>
                <div>
                    {{-- <h6>Show weather details for:</h6>

                    <a href="{{ route('show') }}" class="btn btn-primary">Manila</a>
                    <a href="{{ route('show1') }}" class="btn btn-primary">Cebu</a> --}}
                        
                    <p>
                            You are logged in as: {{Auth::user()->user_type}}
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- UPDATE USER SUCCESS MESSAGE SWEET ALERT --}}
@if(Session::has('success_message'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Successfully Updated!",
            icon: "success"
        });
    </script>
@endif
{{-- DELETE STATUS SESSION SWEET ALERT --}}
@if(Session::has('delete_message'))
    <script>
        Swal.fire({
            title: "Success",
            text: "Successfully Deleted User!",
            icon: "success"
        });
    </script>
@endif


@endsection
