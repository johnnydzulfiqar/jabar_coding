@extends('layout.master')
@section('judul')
    Judul
@endsection
@section('content')
<script src="https://cdn.tiny.cloud/1/upxaregv0mqj4ych36rin5hliss0jtoszl46zs5jpruc5hh1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<form action="/tanya" method="POST" enctype="multipart/form-data">
    @csrf
    <textarea name="pertanyaan" id="pertanyaan">
        
      </textarea>
      <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
        });
      </script>
    <div class="form-group">
        <label for="body">Pilih Kategori</label>
        <select name="kategori_id" id="" class="form-control">
            <option value="">Pilih Cast</option>
            @foreach ($kategori as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
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
        @error('gambar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>  
 @endsection