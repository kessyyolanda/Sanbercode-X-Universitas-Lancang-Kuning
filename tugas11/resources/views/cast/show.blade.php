@extends('layouts.master')

@section('title')
    Detail Cast
@endsection

@section('content')
    <p>{{$cast->nama}}</p>
    <p>{{$cast->umur}}</p>
    <p>{{$cast->bio}}</p>

    <a href="/cast" class="btn btn-sm btn-secondary">Kembali</a>
@endsection