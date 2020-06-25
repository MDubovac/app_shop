@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">

        @if(@auth()->user()->isAdmin())
        <div class="col-md-4">
            <h4>Admin Dashboard</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('products.index')}}">Products</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('users.index')}}">Users</a>
                    </li>
                </ul>
            </div>
        @endif
        <div class="col-md-8">
            <h2>All Users</h2>
            <table class="table table-hover table-bordered">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection