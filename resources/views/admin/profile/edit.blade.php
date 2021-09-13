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

    <div class="card-body">
        <form action="{{ route('profiles.update',$profile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Sejarah</label>
                  <textarea name="history" class="form-control" rows="5">{{ $profile->history }}</textarea>
                </div>
                <div class="row">
                  <div class="col">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Visi</label>
                  <textarea name="vision" class="form-control" rows="5">{{ $profile->vision }}</textarea>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Misi</label>
                  <textarea name="mission" class="form-control"  rows="5">{{ $profile->mission }}</textarea>
                </div>
              </div>
              </div>
            </div>
              <div class="col text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
        </form>
    </div>
@endsection