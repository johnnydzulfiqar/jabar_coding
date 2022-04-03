@extends('layout.master')
@section('judul')
    Judul
@endsection
@section('content')
<form action="/jawab/{{ $jawab->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="pertanyaan">Jawaban</label>
        <input type="text" value="{{ $jawab->jawaban }}" class="form-control" name="jawaban" id="jawaban">
        @error('jawaban')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
  
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>  
 @endsection