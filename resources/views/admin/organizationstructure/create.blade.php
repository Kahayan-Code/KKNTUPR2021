@extends('admin.layouts.app')
  
@section('content')
<div class="card">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Struktur Organisasi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orgs.index') }}"> Kembali</a>
        </div>
    </div>
</div>
      
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('orgs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Posisi :</strong>
                <input type="text" name="position" class="form-control" placeholder="Posisi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"></div>
                <strong>Gambar :</strong>
                <input type="file" name="image" class="form-control" placeholder="Gambar">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection