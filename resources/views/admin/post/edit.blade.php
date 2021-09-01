@extends('admin.layouts.app')
     
@section('content')
    <div class="card-body">
    <div class="form-group">
        <div class = "row">
        <div class="col-6">
            <div class="pull-left">
                <h2>Edit Artikel</h2>
            </div>
        </div>
        <div class="col-6 text-right">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Kembali</a>
            </div>
        </div>
        </div>
    </div>
    </div>
     
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
    
    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
        <div class ="container">
         <div class="row">
            <div class="col">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input type="file" name="image" class="form-control" placeholder="gambar">
                    <img src="/image/{{ $post->image }}" width="300px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Deskripsi">{{ $post->description }}</textarea>
                </div> 
            </div>
            <div class="col">    
                <strong>Kategori :</strong>
                <select class="form-control form-control-sm">
                 @foreach ($tags as $tag)
                    <option>{{ $tag->name }}</option>          
                 @endforeach
                </select>
            </div>
        </div>  
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
     
    </form>
@endsection