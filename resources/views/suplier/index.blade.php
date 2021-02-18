@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto mb-2">
                    
                    <a href="{{ route('suplier.create') }}" class="btn btn-info mr-2">Tambah Data Barang Baru</a>
                </div>
                <form action="" method="GET">
                    <div class="row">
                       <div class="col-md-4">
                           <div class="form-group">
                                <input type="date" name="" class="form-control" id="">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <input type="date" name="" class="form-control" id="">
                         </div>
                     </div>
                     <div>
                       <button class="btn btn-info"> Cari data </button>
                     </div>
                    </div>                 
                </form>
            </div>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Nama Supplier</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach($supliers as $suplier)
                        <tr>
                            <td>{{$suplier->name}}</td>
                            <td>{{$suplier->alamat}}</td>
                            <td>{{$suplier->email}}</td>
                            <td>{{$suplier->phone}}</td>

                            <td>
                            <form action="{{ route('suplier.delete', $suplier->id) }}" method="post">
                            @csrf
                            
                            @method('DELETE')
                            <a href="{{ route('suplier.edit', $suplier->id) }}" class="btn btn-outline-warning" btn-sm>Edit</a>
                            <button class="btn btn-outline-danger" btn-sm>Delete</button>
                            </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
          
        </div>
    </div>
</div>

@endsection