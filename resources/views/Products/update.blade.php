@extends('layout.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-2">
                <div class="card-header">{{ __('Update Products') }}</div>


                <form action="{{route('products.update', $product->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                autocomplete="name" autofocus>

                        </div>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group row">
                        <label for="reference" class="col-md-4 col-form-label text-md-right">{{ __('Referencia') }}</label>

                        <div class="col-md-6">
                            <input id="reference" type="text" class="form-control" name="reference" value="{{ old('reference') }}"
                                autocomplete="reference" autofocus>

                        </div>
                    </div>
                    @error('refencia')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                        <div class="col-md-6">
                            <input id="price" type="number" class="form-control " name="price"
                                value="{{ old('price') }}">

                        </div>
                    </div>
                    @error('precio')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="form-group row">
                        <label for="weight"
                            class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>

                        <div class="col-md-6">
                            <input id="weight" type="text" class="form-control " name="weight"
                                value="{{ old('weight') }}" autocomplete="weight">

                        </div>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group row">
                        <label for="weight"
                            class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                        <div class="col-md-6">
                            <input id="category" type="text" class="form-control " name="category"
                                value="{{ old('category') }}" autocomplete="category">

                        </div>
                    </div>
                    @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="form-group row">
                        <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('stock') }}</label>

                        <div class="col-md-6">
                            <input id="stock" type="number" class="form-control " name="stock"
                                value="{{ old('stock') }}">
                        </div>
                    </div>
                    @error('stock')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Enviar') }}
                            </button>
                            <a href="{{route('products.index')}}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
You have unread notifications