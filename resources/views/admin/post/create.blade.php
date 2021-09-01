@extends('admin.layouts.app')
  
@section('content')      
@if ($errors->any())
    <div class="card-body">
      <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    </div>
@endif

  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">Tambah Artikel</h3>
        </div>
        <div class="col-4 text-right">
          <a href="{{ route('posts.index') }}" class="btn btn-md btn-primary">Kembali</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="pl-lg-4">
           
            <div class="row-6">
                    <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Judul</label>
                          <input name="title" type="text" class="form-control" placeholder="Masukkan Judul">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label">Deskripsi</label>
                          <textarea name="description" rows="4" class="form-control" placeholder="Masukkan Deskripsi ..."></textarea>
                        </div>
                      </div>
            </div>

            <div class="row-6">
                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Upload Gambar</label>
                      <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input">
                        <label class="custom-file-label" for="custom-file"></label>
                      </div>
                    </div>
                  </div>
                </div>
                
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">Pilih Kategori</label>
                      <select name="tag" class="form-control form-control-md">
                        @foreach ($tags as $tag => $value)
                            <option value="{{ $value -> name }}"
                            {{-- @if ($tag == old('tag', $model->option))
                                selected="selected"
                            @endif --}}
                            >{{ $value -> name }}</option>
                        @endforeach
                      </select>

                      {{-- <select name="tag" class="form-control form-control-md">
                          @foreach ($tags as $tag)
                              <option value="{{ $tag->name }}">{{ $tag->name }}</option>          
                          @endforeach
                      </select>  --}}

                    </div>
                  </div>

            </div>
        
          
          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>


@endsection