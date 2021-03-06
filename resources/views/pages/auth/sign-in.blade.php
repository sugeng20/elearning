@extends('layouts.auth')

@section('title')
Masuk
@endsection

@section('content')
<div>
    <div><a class="logo text-start" href="{{ url('/') }}"><img class="img-fluid for-light"
                src="{{ asset('backend/images/logo/login.png') }}" alt="looginpage"><img class="img-fluid for-dark"
                src="{{ asset('backend/images/logo/logo_dark.png') }}" alt="looginpage"></a></div>
    <div class="login-main">
        <form class="theme-form needs-validation" novalidate="">
            <h4>Masuk ke akun</h4>
            <p>Masukkan email & kata sandi Anda untuk login</p>
            <div class="form-group">
                <label class="col-form-label">Username atau Password</label>
                <input class="form-control" type="email" required="" placeholder="Masukan Username atau Password">
                <div class="invalid-feedback">Mohon masukan username atau password</div>
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
                <input class="form-control" type="password" name="password" required="" placeholder="*********">
                <div class="invalid-feedback">Mohon masukan kata sandi</div>
                <div class="show-hide"><span class="show"> </span></div>
            </div>
            <div class="form-group mb-0">
                <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Ingat kata sandi</label>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Masuk</button>
            </div>
            <p class="mt-4 mb-0">Belum punya akun?<a class="ms-2" href="{{ url('/sign-up') }}">Buat
                    Akun</a>
            </p>
            <script>
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
                        
            </script>
        </form>
    </div>
</div>
@endsection