@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            <ul class="my-0">
                                @foreach ($errors->all() as $error )
                                    <li>{{ $error }}</li>

                                @endforeach
                            </ul>

                        </div>

                    @endif

                    {{ __('You are logged in!') }}

                    <p>This is your application dashboard.</p>
                    @canany(['create-role', 'edit-role', 'delete-role'])
                        <a class="btn btn-primary" href="{{ route('admin.roles.index') }}">
                            <i class="bi bi-person-fill-gear"></i> Manage Roles</a>
                    @endcanany
                    @canany(['create-user', 'edit-user', 'delete-user'])
                        <a class="btn btn-success" href="{{ route('admin.users.index') }}">
                            <i class="bi bi-people"></i> Manage Users</a>
                    @endcanany
                    @canany(['create-product', 'edit-product', 'delete-product'])
                        <a class="btn btn-warning" href="{{ route('admin.products.index') }}">
                            <i class="bi bi-bag"></i> Manage Products</a>
                    @endcanany
                    @canany(['create-option', 'edit-option', 'delete-option'])
                    <a class="btn btn-danger" href="{{ route('admin.options.updateoptions.index') }}">
                        <i class="bi bi-bag"></i> Manage Option</a>
                @endcanany
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
