@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                        <from action="" method="post">
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <input type="text" name="kode_barang" id="kode_barang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Suplier</label>
                                <select name="" id="" class="form-control">
                                
                                    <option value="">Pilih suplier</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" name="quantity" id="quantity" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-outline-info btn-block">Simpan</button>
                            </div>
                        </from>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection