@extends('admin.layouts.app')

     
@section('content')
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Tabel Demografi</h3>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('demos.create') }}"> Tambah Demografi</a>
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                <thead class="thead-light text-center">
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Total</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($demographys as $demography)
                    <tr>
                        <td width="10px"></td>{{ ++$i }}</td>
                        <td>{{ $demography->name }}</td>
                        <td>{{ $demography->total }}</td>
                        <td class="text-center"><img src="/image/{{ $demography->image }}" width="150px"></td>
                        <td width="20px">
                            <form action="{{ route('demos.destroy',$demography->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('demos.show',$demography->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('demos.edit',$demography->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                    
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
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