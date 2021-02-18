@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto">
                    <a href="{{route('profil.create')}}" class="btn btn-info">Tambah Profil Baru</a>
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
                            <th>Name</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Usia</th>
                            <th>Hobi</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach($profils as $profil)
                        <tr>
                            <td>{{$profil->name}}</td>
                            <td>{{$profil->tempat_lahir}}</td>
                            <td>{{$profil->tanggal_lahir}}</td>
                            <td>{{$profil->jenis_kelamin}}</td>
                            <td>{{$profil->usia}}</td>
                            <td>{{$profil->hobi}}</td>

                            <td>
                                <form action="{{ route('profil.delete', $profil->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-warning" btn-sm>Edit</a>
                                    <a href="{{ route('profil.show', $profil->id) }}" class="btn btn-primary" btn-sm>Edit</a>
                                    <button class="btn btn-danger" btn-sm>Delete</button>
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