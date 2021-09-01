@extends('admin.layouts.app')
   
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
    <!-- Card header -->
    <div class="card-body">
        <div class="row">
        <div class="col-6">
            <h3 class="mb-0">Tabel Profile</h3>
        </div>
        <div class="col-6 text-right">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('profiles.edit', "1") }}">Perbarui Profile</a>
            </div>
            </div>
        </div>
    </div>
    <!-- Light table -->
    <div class="card-body">
        <form>
            <div class="col">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Sejarah</label>
                  <textarea class="form-control"  rows="5" disabled>{{ $profile->history }}</textarea>
                </div>
                <div class="row">
                  <div class="col">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Visi</label>
                  <textarea class="form-control" rows="5" disabled>{{ $profile->vision }}</textarea>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Misi</label>
                  <textarea class="form-control"  rows="5" disabled>{{ $profile->mission }}</textarea>
                </div>
              </div>
              </div>
            </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">Submit</a>
              </div>
            </div>
        </form>
    </div>
    <!-- Card footer -->
    <div class="card-footer py-4">
        <nav aria-label="...">
        <ul class="pagination justify-content-end mb-0">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            </li>
            <li class="page-item active">
            <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
            </li>
        </ul>
        </nav>
    </div>
@endsection