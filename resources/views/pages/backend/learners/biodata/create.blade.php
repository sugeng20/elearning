<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Biodata</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/scrollbar.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('backend/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/responsive.css') }}">
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="{{ url('/learners/dashboard') }}"><img class="img-fluid"
                                src="{{ asset('backend/images/logo/logo.png') }}" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"> </i><span
                                    class="badge rounded-pill badge-secondary">4 </span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li><i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span
                                            class="pull-right">10 min.</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span></p>
                                </li>
                                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                            </ul>
                        </li>
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10"
                                    src="{{ asset('backend/images/dashboard/profile.jpg') }}" alt="">
                                <div class="media-body"><span>Sugeng</span>
                                    <p class="mb-0 font-roboto">Peserta <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>Akun </span></a></li>
                                <li><a href="#"><i data-feather="log-in"> </i><span>Keluar</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">Sugeng</div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                                src="{{ asset('backend/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark"
                                src="{{ asset('backend/images/logo/logo_dark.png') }}" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                                src="{{ asset('backend/images/logo/logo-icon.png') }}" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                            src="{{ asset('backend/images/logo/logo-icon.png') }}" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                            aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav"
                                        href="{{ url('/learners/dashboard') }}">
                                        <i data-feather="home"> </i>
                                        <span>Dashboard</span></a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav"
                                        href="{{ url('/learners/biodata') }}">
                                        <i data-feather="user"> </i>
                                        <span>Biodata</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Buat Biodata</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Biodata</li>
                                    <li class="breadcrumb-item active"> Buat</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="f1" method="post">
                                        <div class="f1-steps">
                                            <div class="f1-progress">
                                                <div class="f1-progress-line" data-now-value="16.66"
                                                    data-number-of-steps="3"></div>
                                            </div>
                                            <div class="f1-step active">
                                                <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                                <p>Pribadi</p>
                                            </div>
                                            <div class="f1-step">
                                                <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                                <p>Pendidikan</p>
                                            </div>
                                            <div class="f1-step">
                                                <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                                                <p>Alamat</p>
                                            </div>
                                        </div>
                                        <fieldset>
                                            <div class="mb-2">
                                                <label for="f1-first-name">Nama Depan</label>
                                                <input class="form-control" id="f1-first-name" type="text"
                                                    name="f1-first-name" placeholder="Masukan nama depan" required="">
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">Nama Belakang</label>
                                                <input class="f1-last-name form-control" id="f1-last-name" type="text"
                                                    name="f1-last-name" placeholder="Masukan nama belakang" required="">
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">Email</label>
                                                <input class="f1-last-name form-control" id="f1-last-name" type="text"
                                                    name="f1-last-name" placeholder="Masukan Email kamu" required="">
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">Username</label>
                                                <input class="f1-last-name form-control" id="f1-last-name" type="text"
                                                    name="f1-last-name" placeholder="" value="sugeng20" readonly>
                                            </div>

                                            <div class="f1-buttons">
                                                <button class="btn btn-primary btn-next" type="button">Next</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="mb-2">
                                                <label for="f1-last-name">No Hp</label>
                                                <input class="f1-last-name form-control" id="f1-last-name" type="text"
                                                    name="f1-last-name" placeholder="Masukan No HP Kamu" required="">
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">Umur</label>
                                                <input class="f1-last-name form-control" id="f1-last-name" type="number"
                                                    name="f1-last-name" placeholder="Berapa Umur Kamu" required="">
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">Status Pendidikan</label>
                                                <select name="status_pendidikan" id="status_pendidikan"
                                                    class="form-control" required>
                                                    <option value="">- Pilih Status Pendidikan -</option>
                                                    <option value="PAUD/TK">PAUD/TK</option>
                                                    <option value="SD/MI">SD/MI</option>
                                                    <option value="SMP/MTs">SMP/MTs</option>
                                                    <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                                    <option value="Mahasiswa">Mahasiswa</option>
                                                    <option value="Masyarakat Umum">Masyarakat Umum</option>
                                                </select>
                                            </div>
                                            <div class="f1-buttons">
                                                <button class="btn btn-primary btn-previous"
                                                    type="button">Previous</button>
                                                <button class="btn btn-primary btn-next" type="button">Next</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="mb-2">
                                                <label for="f1-last-name">Provinsi</label>
                                                <select name="provinsi" id="provinsi" class="form-control" required>
                                                    <option value="">- Pilih Provinsi -</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">Kabupaten</label>
                                                <select name="kabupaten" id="kabupaten" class="form-control" required>
                                                    <option value="">- Pilih Kabupaten -</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">Kecamatan</label>
                                                <select name="kecamatan" id="kecamatan" class="form-control" required>
                                                    <option value="">- Pilih Kecamatan -</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">Desa/Keluarahan</label>
                                                <select name="desa_kelurahan" id="desa_kelurahan" class="form-control"
                                                    required>
                                                    <option value="">- Pilih Desa/Keluarahan -</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">RT/RW</label>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input class="f1-last-name form-control" id="f1-last-name"
                                                            type="text" name="f1-last-name" placeholder="RT"
                                                            required="">
                                                    </div>
                                                    <div class="col-6">
                                                        <input class="f1-last-name form-control" id="f1-last-name"
                                                            type="text" name="f1-last-name" placeholder="RW"
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="f1-last-name">No Rumah/Blok/Gg</label>
                                                <textarea name="alamat" id="alamat" cols="30" rows="2"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="f1-buttons">
                                                <button class="btn btn-primary btn-previous"
                                                    type="button">Previous</button>
                                                <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright <?= date('Y') ?> © by <a href="https://itgenic.co.id">Itgenic</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('backend/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('backend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('backend/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('backend/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('backend/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('backend/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('backend/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('backend/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('backend/js/form-wizard/form-wizard-three.js') }}"></script>
    <script src="{{ asset('backend/js/form-wizard/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('backend/js/tooltip-init.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('backend/js/script.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>