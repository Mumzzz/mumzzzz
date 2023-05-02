@extends('template.main')
@section('konten')
<div class="container-fluid mt-2">
    <div class="card">
        <div class="card-header">
            <center>
                <h4>Nama Customer :&nbsp; {{ $show['Nama_customer']}}</h4>
                <h4>Alamat :&nbsp; {{ $show['Alamat']}}</h4>
                <h4>Asal Kota :&nbsp; {{ $show['Kota']}}</h4>
                <h4>Nama Email :&nbsp; {{ $show['Email']}}</h4>
                <h4>Nomer Hp :&nbsp; {{ $show['Hp']}}</h4>
                <h4>Nama Perusahaan :&nbsp; {{ $show['Perusahaan']}}</h4>
            </center>
        </div>

    </div>
</div>
@endsection