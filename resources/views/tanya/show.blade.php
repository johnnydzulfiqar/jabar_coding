@extends('layout.master')
@section('judul')
Halaman tanya
@endsection 

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <h3>{{ $tanya->pertanyaan }}</h3>
        <img src="{{ asset('gambar/'. $tanya->gambar) }}" width="480px" height="240px" alt="...">
        <div class="card-body">
          
          <p class="card-text">{{ $tanya->kategori->nama }}</p>
          <p class="card-text">Yang Bertanya : {{ $tanya->user->name }}</p>
         <a href="/tanya" class="btn btn-info btn-sm">Kembali</a>
        </div>
    </div>
    <h1>List Jawaban</h1>
        @forelse ($tanya->jawab as $item)
            
       
        <div class="card" style="width: 18rem;">
            
            <div class="card-body">
              <h1 class="card title">User : {{ $item->user->name }}</h1>
            
                  
          
              <p class="card-text">Jawaban : {{ $item->jawaban }}</p>
              @auth
              @if ($user_id = Auth::user()->id === $item->users_id)
              <form action="/jawab/{{  $item->id }}" method="POST">
                @csrf
               @method('delete')
               <a href="/jawab/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
               <input type="submit" class="btn btn-danger btn-sm" value="delete">
               </form>
              @else
                 <h5>Tidak bisa CRUD anda bukan user pemilik post ini</h5>
              @endif
               
              @endauth     
            </div>
          </div>
        @empty
            <h1>Belum ada Jawaban</h1>
        @endforelse
    @auth
    <form action="/jawab" method="POST" class="mt-2">
        @csrf
        <input type="hidden" value="{{ $tanya->id }}" name="tanya_id">
        <div class="mb-3">
            <label>Jawaban</label>
            <input type="text" class="form-control" name="jawaban">
          </div>
          @error('jawaban')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
       
        <input type="submit" value="tambah">
    </form>
    @endauth

@endsection 