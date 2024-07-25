@extends('admin.partials.main-layout')

@section('content-header')
    <!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->
    <div class="row">
        <div class="container-fluid">
            <div class="container-fluid">
                <a href="{{ route('wheelCustom') }}" class="btn btn-primary">Retour</a>
             </div>
        </div>
        <div class="container mt-5">
            <h2 class="mb-4">Ajouter une Roue</h2>
            <form action="{{ route('newWheel') }}" method="POST" enctype="multipart/form-data" class="border p-4 rounded">
                @csrf
                <div class="form-group row">
                    <label for="productName" class="col-sm-2 col-form-label">Nom de la Roue :</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" id="productName" name="name" placeholder="Entrez le nom du produit">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productColor" class="col-sm-2 col-form-label">Couleur :</label>
                    <div class="col-sm-4">
                        <input type="color" class="form-control form-control-sm" id="productColor" name="color" placeholder="Entrez la couleur du produit" value="{{ old('color') }}">
                        @error('color') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productPrice" class="col-sm-2 col-form-label">Prix :</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control form-control-sm" id="productPrice" name="price" placeholder="Entrez le prix du produit">
                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productImage" class="col-sm-2 col-form-label">Image :</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" id="productImage" name="image">
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productStock" class="col-sm-2 col-form-label">Stock :</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" id="stock" name="stock" placeholder="Entrez le stock du produit">
                        @error('stock') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success">Ajouter le produit</button>
            </form>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection