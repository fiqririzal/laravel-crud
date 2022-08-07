@extends('layout.master')
@section('judul')
    Halaman List kategori
@endsection
@section('title')
    Halaman list kategori
@endsection
@section('content')
<a href="/kategori/create" class="btn btn-primary my-3">Tambah Kategori</a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @forelse ($kategori as $key => $item)
         <tr>
            <td>{{$key * 1}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->deskripsi}}</td>
            <td>
                <form action="/kategori/{{$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="/kategori/{{$item->id}}" class="btn btn-info btn-sm">detail</a>
                    <a href="/kategori/{{$item->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="delete">
                </form>
            </td>
         </tr>
     @empty
         <h1>Data Kosong</h1>
     @endforelse
    </tbody>
  </table>
@endsection