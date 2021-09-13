@extends('admin.layouts.app')

     
@section('content')
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Tabel Potensi</h3>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('potens.create') }}"> Tambah Potensi</a>
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                <thead class="thead-light text-center">
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($potencys as $potency)
                    <tr>
                        <td width="10px">{{ ++$i }}</td>
                        <td>{{ $potency->name }}</td>
                        <td class="text-center"><img src="/image/{{ $potency->image }}" width="150px"></td>
                        <td width="20px">
                            <form action="{{ route('potens.destroy',$potency->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('potens.show',$potency->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('potens.edit',$potency->id) }}">Edit</a>
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
           
    
    
      {!! $potencys->links() !!}
        
@endsection