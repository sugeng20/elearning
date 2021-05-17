@extends('layouts.learners')

@section('title')
Kelas
@endsection

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>List Kelas</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Kelas</li>
                    <li class="breadcrumb-item active">List Kelas</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-4 col-sm-6 box-col-4">

                    <div class="card">
                        <div class="blog-box blog-grid text-center product-box">
                            <a href="{{ route('class.show', 1) }}">
                                <div class="product-img"><img class="img-fluid top-radius-blog"
                                        src="{{ asset('backend/images/faq/3.jpg') }}" alt="">
                                    <div class="product-hover">

                                    </div>
                                </div>
                            </a>
                            <div class="blog-details-main">
                                <ul class="blog-social">
                                    <li>29 Mei 2021</li>
                                    <li>by: Admin</li>
                                    <li>0 Pendaftar</li>
                                </ul>
                                <hr>
                                <a href="{{ route('class.show', 1) }}">
                                    <h6 class="blog-bottom-details">Kelas Web Programming
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-sm-6 box-col-4">

                    <div class="card">
                        <div class="blog-box blog-grid text-center product-box">
                            <a href="{{ route('class.show', 1) }}">
                                <div class="product-img"><img class="img-fluid top-radius-blog"
                                        src="{{ asset('backend/images/faq/3.jpg') }}" alt="">
                                    <div class="product-hover">

                                    </div>
                                </div>
                            </a>
                            <div class="blog-details-main">
                                <ul class="blog-social">
                                    <li>29 Mei 2021</li>
                                    <li>by: Admin</li>
                                    <li>0 Pendaftar</li>
                                </ul>
                                <hr>
                                <a href="{{ route('class.show', 1) }}">
                                    <h6 class="blog-bottom-details">Kelas TIK
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-sm-6 box-col-4">

                    <div class="card">
                        <div class="blog-box blog-grid text-center product-box">
                            <a href="{{ route('class.show', 1) }}">
                                <div class="product-img"><img class="img-fluid top-radius-blog"
                                        src="{{ asset('backend/images/faq/3.jpg') }}" alt="">
                                    <div class="product-hover">

                                    </div>
                                </div>
                            </a>
                            <div class="blog-details-main">
                                <ul class="blog-social">
                                    <li>29 Mei 2021</li>
                                    <li>by: Admin</li>
                                    <li>0 Pendaftar</li>
                                </ul>
                                <hr>
                                <a href="{{ route('class.show', 1) }}">
                                    <h6 class="blog-bottom-details">Kelas Bahasa Jepang
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection