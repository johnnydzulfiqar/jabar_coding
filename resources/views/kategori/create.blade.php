@extends('layout.master')
@section('judul')
    Judul
@endsection
@section('content')
<form action="/kategori" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Pertanyaan</label>
        <input type="text" class="form-control" name="nama" id="nama">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>  
 @endsection