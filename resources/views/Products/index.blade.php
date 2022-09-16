@extends('layout.app');

@section('content')

<div>
<a href="{{ route('products.create') }}" class="btn btn-primary">Crear producto</a>
</div>

<table class="table table-dark">
    <thead>
        <tr>
            <td>

            </td>
        </tr>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Referencia</th>
            <th scope="col">Precio</th>
            <th scope="col">Peso</th>
            <th scope="col">Categoria</th>
            <th scope="col">Stock</th>
        </tr>
    </thead>
    <tbody>
       
        @forelse ($products as $product)
        
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->reference}}</td>
            <td>${{$product->price}}</td>
            <td>{{$product->weight}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->stock}}</td>

            <td>
                <form action="{{ route('products.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button value="Delete" class="btn btn-outline-secondary" type="submit" id="button-addon1">
                        Eliminar

                    </button>

                </form>
            </td>

            <td>
                <a class="btn btn-outline-secondary" href="">Edit</a>
            </td>

        </tr>
        @empty
        No hay productos
        @endforelse
    </tbody>
</table>


@endsection