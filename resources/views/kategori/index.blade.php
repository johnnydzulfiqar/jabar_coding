@extends('layout.master')
@section('judul')
    Judul
@endsection
@section('content')

  <div class="page-content fade-in-up">
      <div class="ibox">
          <div class="ibox-head">
            <a href="/kategori/create/" class="btn btn-success">Tambah Kategori</a>
              <div class="ibox-title">Data Table</div>
          </div>
          <div class="ibox-body">
              <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Action</th>
                          
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    @forelse ($kategori as $key=>$item)
                      <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $item->nama }}</td>
                          <td>@auth
                            <form action="/kategori/{{  $item->id }}" method="POST">
                              @csrf
                              @method('delete')
                              <a href="/kategori/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                              @if ($user_id = Auth::user()->id === $item->users_id)
                              <a href="/kategori/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                              <input type="submit" class="btn btn-danger btn-sm" value="delete">
                            </form>
                              @else
                 <h5>Tidak bisa CRUD anda bukan user pemilik post ini</h5>
                              @endif
                            @endauth
                      </td>
                        
                    
                    @empty
                    
                       @endforelse
                      
                      
                  </tbody>
              </table>
          </div>

          </div>
     

 @endsection