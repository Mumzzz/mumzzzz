@extends('template.main')
@section('konten')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Kategori Table</div>
            <a href="{{route ('kategori.create')}}"><button class="btn btn-primary btn-xs float-right">Tambah Costumer</button></a>

        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama customer</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Email</th>
                        <th scope="col">Hp</th>
                        <th scope="col">Perusahaan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no =1;
                    @endphp
                    @foreach($data as $item)
                    <tr>
                        <td>{{$no}}</td>
                        <td><a href="{{route('kategori.show',$item->id)}}">{{$item->Nama_customer}}</a></td>
                        <td>{{$item->Alamat}}</td>
                        <td>{{$item->Kota}}</td>
                        <td>{{$item->Email}}</td>
                        <td>{{$item->Hp}}</td>
                        <td>{{$item->Perusahaan}}</td>
                    </tr>
                    @php
                    $no++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection