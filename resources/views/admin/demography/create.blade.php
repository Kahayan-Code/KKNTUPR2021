@extends('admin.layouts.app')
  
@section('content')
      
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
     
{{-- <form action="{{ route('demographys.store') }}" method="POST" enctype="multipart/form-data">
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
                <strong>Total :</strong>
                <input type="text" name="total" class="form-control" placeholder="Total">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong>
                <input type="file" name="image" class="form-control" placeholder="gambar">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form> --}}


<div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">Tambah Demografi Desa</h3>
        </div>
        <div class="col-4 text-right">
          <a href="#!" class="btn btn-sm btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form>
          <div class="col">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Nama</label>
                <input type="text" class="form-control" placeholder="Username" value="Nama">
              </div>
              <div class="form-group">
                <label class="form-control-label" for="input-username">Jumlah</label>
                <input type="text" class="form-control" placeholder="Username" value="Jumlah">
              </div>
              <div class="form-group">
                <label class="form-control-label" for="input-username">Upload Gambar</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" lang="en">
                  <label class="custom-file-label" for="customFileLang">Select file</label>
              </div>
              </div>
          </div>
          
            <div class="col text-right">
              <a href="#!" class="btn btn-sm btn-primary">Submit</a>
            </div>
          </div>
      </form>
    </div>
  </div>
@endsection