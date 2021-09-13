@extends('admin.layouts.app')
  
@section('content')

<div class="card-body">
    <div class="row">
        <div class="col-6">
            <div class="pull-left">
                <h2>Tambah Kategori</h2>
            </div>
        </div>
        <div class = "col-6 text-right">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tags.index') }}"> Kembali</a>
            </div>
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
     
<form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="name" class="form-control" placeholder="Judul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection