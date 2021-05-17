@extends('layouts.auth')

@section('title')
Daftar
@endsection

@section('content')
<div>
    <div><a class="logo" href="index.html"><img class="img-fluid for-light"
                src="{{ asset('backend/images/logo/login.png') }}" alt="looginpage"><img class="img-fluid for-dark"
                src="{{ asset('backend/images/logo/logo_dark.png') }}" alt="looginpage"></a></div>
    <div class="login-main">
        <form class="theme-form" action="{{ route('biodata.create') }}">
            <h4>Buat Akun Kamu</h4>
            <p>Masukkan detail pribadi Anda untuk membuat akun</p>
            <div class="form-group">
                <label class="col-form-label pt-0">Nama Kamu</label>
                <input class="form-control" type="text" required="" placeholder="example: Default">
            </div>
            <div class="form-group">
                <label class="col-form-label pt-0">Username</label>
                <input class="form-control" type="text" required="" placeholder="example: default">
            </div>
            <div class="form-group">
                <label class="col-form-label">Alamat Email</label>
                <input class="form-control" type="email" required="" placeholder="example: default@gmail.com">
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
                <input class="form-control" type="password" name="password" required="" placeholder="*********">
                <div class="show-hide"><span class="show"></span></div>
            </div>
            <div class="form-group mb-0">
                <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy
                            Policy</a></label>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Buat Akun</button>
            </div>
            <p class="mt-4 mb-0">Sudah punya akun?<a class="ms-2" href="{{ url('/login') }}">Masuk</a></p>
        </form>
    </div>
</div>
@endsection