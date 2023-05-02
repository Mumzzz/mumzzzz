@extends('template.main')
@section('konten')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Elements</div>
        </div>
        <form action="{{ route('kategori.store') }}" method="post">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Nama custumer</span>
                                </div>
                                <input name="nama_custumer" type="text" class="form-control {{ $errors->first('nama_custumer') ? "is-invalid":""}}" placeholder="Masukan Nama" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Alamat</span>
                                </div>
                                <input name="alamat" type="text" class="form-control {{ $errors->first('alamat') ? "is-invalid":""}}" placeholder="Msukan Alamat" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Kota</span>
                                </div>
                                <input name="kota" type="text" class="form-control {{ $errors->first('kota') ? "is-invalid":""}}" placeholder="Masukan Nama Kota " aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                </div>
                                <input name="email" type="email" class="form-control {{ $errors->first('email') ? "is-invalid":""}}" placeholder="Masukan Email" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Hp</span>
                                </div>
                                <input name="hp" type="number" class="form-control {{ $errors->first('hp') ? "is-invalid":""}}" placeholder="Nomer Hp" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Perusahaan</span>
                                </div>
                                <input name="perusahaan" type="text" class="form-control {{ $errors->first('perusahaan') ? "is-invalid":""}}" placeholder="Nama Perusahaan" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection