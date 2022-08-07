@extends('layout.master')
@section('judul')
    Input data
@endsection
@section('title')
    Input data
@endsection
@section('content')
<form action="/kategori" method="POST">
    @csrf
    <div class="form-group">
      <label>Nama Kategori</label>
      <input type="text" class="form-control" name="nama">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Deskripsi Kategori</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection