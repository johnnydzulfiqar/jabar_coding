@extends('layout.master')
@section('judul')
    Judul
@endsection
@section('content')
<form action="/profile/{{ $profile->id }}" method="POST">
  @csrf
  @method('put')
  <div class="mb-3">
    <label>Nama</label>
    <input type="text" value="{{ $profile->users->name }}" class="form-control" disabled>
  </div>
  
  <div class="mb-3">
    <label>Biodata</label>
    <input type="text" value="{{ $profile->bio }}" class="form-control" name="bio">
  </div>
  @error('bio')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="mb-3">
    <label>Email</label>
    <input type="text" value="{{ $profile->users->email }}" class="form-control" disabled>
  </div>
    <div class="mb-3">
      <label>Umur</label>
      <input type="number" value="{{ $profile->umur }}" class="form-control" name="umur">
    </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="mb-3">
      <label>Alamat</label>
      <input type="text" value="{{ $profile->alamat }}" class="form-control" name="alamat">
    </div>
    @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection