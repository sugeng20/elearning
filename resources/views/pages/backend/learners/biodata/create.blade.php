@extends('layouts.learners')

@section('title')
Buat Biodata
@endsection

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Buat Biodata</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a>
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
                                <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
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
                                <input class="form-control" id="f1-first-name" type="text" name="f1-first-name"
                                    placeholder="Masukan nama depan" required="">
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
                                <select name="status_pendidikan" id="status_pendidikan" class="form-control" required>
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
                                <button class="btn btn-primary btn-previous" type="button">Previous</button>
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
                                <select name="desa_kelurahan" id="desa_kelurahan" class="form-control" required>
                                    <option value="">- Pilih Desa/Keluarahan -</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="f1-last-name">RT/RW</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input class="f1-last-name form-control" id="f1-last-name" type="text"
                                            name="f1-last-name" placeholder="RT" required="">
                                    </div>
                                    <div class="col-6">
                                        <input class="f1-last-name form-control" id="f1-last-name" type="text"
                                            name="f1-last-name" placeholder="RW" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="f1-last-name">No Rumah/Blok/Gg</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                            <div class="f1-buttons">
                                <button class="btn btn-primary btn-previous" type="button">Previous</button>
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
@endsection