@extends('layout.master')
@section('judul')
    Judul
@endsection
@section('content')
<form action="/tanya/{{ $tanya->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="pertanyaan">Pertanyaan</label>
        <input type="text" value="{{ $tanya->pertanyaan }}" class="form-control" name="pertanyaan" id="pertanyaan">
        @error('pertanyaan')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Pilih Kategori</label>
        <select name="kategori_id" class="form-control">
            <option value="">Pilih Cast</option>
            @foreach ($kategori as $item)
                @if ($item->id === $tanya->kategori_id)
                <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                @else
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endif
                
            @endforeach
        </select>
        @error('kategori_id')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar">
            
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>  
 @endsection