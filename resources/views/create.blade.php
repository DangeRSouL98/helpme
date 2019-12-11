@extends('layout.template')
@section('content')

<form action="{{url('product')}}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="text" name="name"/>
    {{$errors->first('name')}}
    <label>Deskripsi</label>
    <input type="text" name="description"/>
    {{$errors->first('description')}}
    <label>Harga</label>
    <input type="text" name="price"/>
    {{$errors->first('price')}}
    <button type="submit">Save</button>
</form>

@endsection
