@extends('layout.master')
@section('judul')
Halaman Edit Kategori
@endsection 

@section('content')
<form action="/kategori/{{ $kategori->id }}" method="POST">
  @csrf
  @method('put')
    <div class="mb-3">
      <label>Nama Kategori</label>
      <input type="text" value="{{ $kategori->nama }}" class="form-control" name="nama">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection