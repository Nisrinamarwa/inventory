@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('suplier.update', $suplier->id)}}" method="post">
                                @csrf
                                @method('PATCH')
                             
                                <div class="form-group">
                                    <label for="kode_barang">Nama Suplier</label>
                                    <input type="text" name="Nama Suplier" id="Nama Suplier" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama_barang">Alamat</label>
                                    <input type="text" name="Alamat" id="Alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama_barang">Email</label>
                                    <input type="text" name="Email" id="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama_barang">Phone</label>
                                    <input type="text" name="Phone" id="Phone" class="form-control">
                                </div>
                                <div>
                                    <button class="btn btn-outline-info btn-block">Simpan</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection