@extends('layout.master')
@section('judul')
Halaman Detail Kategori
@endsection 

@section('content')

<h1> {{ $kategori->nama }} </h1>
<div class="row">
@forelse ($kategori->tanya as $item)
<div class="col-4">
    <div class="card">
      <img src="{{ asset('gambar/'. $item->gambar) }}" class="card-img-top mt-3" alt="...">
      <div class="card-body">
        <h3>{{ $item->pertanyaan }}</h3>
        <p class="card-text">{{ Str::limit($item->body,20) }}</p>
       
        <a href="/tanya/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
        </div>
    </div>
</div>
@empty
    <h1>Tidak Post Di Cast Ini</h1>
@endforelse
</div>
@endsection