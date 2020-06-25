@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
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
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
