@extends('dashboard.layouts.main')
@section('content')
    
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">User Detail</h1>
        </div>
    
        <div class="table-responsive">
            <table class="table table-sm">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Roles</td>
                        <td>{{ $user->is_admin == '0' ? 'User':'Admin' }}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{ $user->address1 }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ $user->no_hp }}</td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>{{ $user->city }}</td>
                    </tr>
                    <tr>
                        <td>Province</td>
                        <td>{{ $user->province }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="/dashboard/users" class="btn btn-secondary btn-sm">Back</a>
        <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
        <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
@endsection