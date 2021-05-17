@extends('layouts.learners')

@section('title')
Detail Kelas
@endsection

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Detail Kelas</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Kelas</li>
                    <li class="breadcrumb-item active">Detail Kelas</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9 xl-60">
            <div class="blog-single">
                <div class="blog-box blog-details"><img class="img-fluid w-100"
                        src="{{ asset('backend/images/faq/learning-1.png') }}" alt="blog-main">
                    <div class="blog-details">
                        <ul class="blog-social">
                            <li>25 July 2018</li>
                            <li><i class="icofont icofont-user"></i>Mark <span>Jecno </span></li>
                            <li><i class="icofont icofont-users"></i>02<span>Pendaftar</span></li>
                        </ul>
                        <h4>
                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                            necessary, making this the first true generator on the
                            Internet.
                        </h4>
                        <div class="single-blog-content-top">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                                over the years, sometimes by accident, sometimes on purpose (injected humour and the
                                like</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 xl-40">
            <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link ps-0" data-bs-toggle="collapse"
                                        data-bs-target="#collapseicon2" aria-expanded="true"
                                        aria-controls="collapseicon2">Kelas Lainya</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2"
                                data-bs-parent="#accordion">
                                <div class="upcoming-course card-body">
                                    <div class="media">
                                        <div class="media-body"><span class="f-w-600">UX Development</span><span
                                                class="d-block">Course By <a href="#"> Lorem ipsum</a></span><span
                                                class="d-block"><i class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star-half-o font-warning"></i></span></div>
                                        <div>
                                            <h5 class="mb-0 font-primary">18</h5><span class="d-block">Dec</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body"><span class="f-w-600">Business Analyst</span><span
                                                class="d-block">Course By <a href="#">Lorem ipsum </a></span><span
                                                class="d-block"><i class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i></span></div>
                                        <div>
                                            <h5 class="mb-0 font-primary">28</h5><span class="d-block">Dec</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body"><span class="f-w-600">Web Development</span><span
                                                class="d-block">Course By <a href="#">Lorem ipsum </a></span><span
                                                class="d-block"><i class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star font-warning"></i><i
                                                    class="fa fa-star-o font-warning"></i></span></div>
                                        <div>
                                            <h5 class="mb-0 font-primary">5</h5><span class="d-block">Jan</span>
                                        </div>
                                    </div>
                                </div>
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