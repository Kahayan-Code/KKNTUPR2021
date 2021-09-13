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
                <h3 class="mb-0">Tabel Artikel</h3>
            </div>
            <div class="col-6 text-right">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('posts.create') }}"> Tambah Artikel</a>
                </div>
                </div>
            </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                <thead class="thead-light text-center">
                    <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Deskirpsi</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <?php $i = 0 ?>
                    @foreach ($posts as $post)
                    
                    <tr>
                        <td width="10px">{{ ++$i }}</td>
                        <td class="text-center"><img src="/image/{{ $post->image }}" width="150px"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->tag }}</td>
                        <td width="20px">
                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
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
      {{-- {!! $posts->links() !!} --}}
        
@endsection