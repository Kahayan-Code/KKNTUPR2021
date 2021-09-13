@extends('admin.layouts.app')
     
@section('content')
   
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <h2>Dashboard</h2>

        
@endsection