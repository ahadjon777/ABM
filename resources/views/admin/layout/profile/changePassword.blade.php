@extends('admin.master.main')
@section('content')

<div class="container">
    <div class="container mt-5 bg-label-light">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link " href="{{route('admin.profile')}}" id="account"><i class="bx bx-user me-1"></i> Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('admin.notification')}}" id="notification"><i class="bx bx-bell me-1"></i>Change Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.connection')}}" id="connection"><i class="bx bx-link-alt me-1"></i> Connections </a>
            </li>
        </ul>
{{--        @dd(session('message'))--}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Chnage Password') }}</div>

                        <form action="{{route('admin.change_password')}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label for="oldPasswordInput" class="form-label">Old Password</label>
                                    <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                           placeholder="Old Password">
                                    @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="newPasswordInput" class="form-label">New Password</label>
                                    <input name="password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                           placeholder="New Password">
                                    @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                    <input name="password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                           placeholder="Confirm New Password">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button class="btn btn-success">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
