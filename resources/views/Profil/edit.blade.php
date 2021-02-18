@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                        <from action="{{route('profil.update', $profil->id)}}" method="post">
                            @csrf
                                @method('PATCH')
                            
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="usia">usia</label>
                                <input type="text" name="usia" id="usia" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="hobi">Hobi</label>
                                <input type="text" name="hobi" id="hobi" value="" class="form-control">
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