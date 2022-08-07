@extends('layout.master')
@section('judul')
    Halaman show kategori
@endsection
@section('title')
    Halaman show kategori
@endsection
@section('content')
    <h1>{{$kategori->nama}}</h1>
    <p>{{$kategori->deskripsi}}</p>
@endsection