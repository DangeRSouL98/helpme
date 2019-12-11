@extends('layout.template')
@section('content')
<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a href="{{url('product/'.$product->id.'/edit')}}">Edit</a>
                <form action="{{url('product/'.$product->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection