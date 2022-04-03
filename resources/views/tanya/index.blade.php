@extends('layout.master')
@section('judul')
    Judul
@endsection
@section('content')
@auth
    

<a class="btn btn-primary" href="/tanya/create" role="button">Buat Pertanyaan baru</a>
@endauth
@forelse ($tanya as $item)
<div class="card" style="width: 18rem;">
    <img src="{{ asset('gambar/'. $item->gambar) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ Str::limit($item->pertanyaan,20) }}</h5>
      <span class="badge badge-success">{{ $item->kategori->nama }}</span>
      <p class="card-text">User yang bertanya : {{ $item->user->name }}</p>
     
        @auth
        @if ($user_id = Auth::user()->id === $item->users_id)
        <form action="/tanya/{{  $item->id }}" method="POST">
          @csrf
         @method('delete')
         <a href="/tanya/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
         <input type="submit" class="btn btn-danger btn-sm" value="delete">
         </form>
        @else
           <h5>Tidak bisa CRUD anda bukan user pemilik post ini</h5>
        @endif
         
        @endauth                              
        <a href="/tanya/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                            
    </div>
    
  </div>
              
               
                                    
                @empty
                                        
             @endforelse
          
 @endsection