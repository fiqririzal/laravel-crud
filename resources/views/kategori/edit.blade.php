@extends('layout.master')
@section('judul')
    Halaman Edit
@endsection
@section('title')
    Halaman Edit
@endsection
@section('content')
<form action="/kategori/{{$kategori->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Nama Kategori</label>
      <input type="text" value="{{$kategori->nama}}" class="form-control" name="nama">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Deskripsi Kategori</label>
        <textarea name="deskripsi" class="form-control">{{$kategori->deskripsi}}</textarea>
    </div>
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection