@extends('admin.partials.main-layout')
 
@section('content-header')
<!-- /.content-header -->
@endsection
@section('body')
<!-- Main row -->
<div class="row">
    <div class="container-fluid">
        <a href="{{ route('wheelCustom') }}" class="btn btn-primary">Retour</a>
    </div>
    <div class="container mt-5">
        <h1 class="mb-4">Modifier une Roue</h1>

        <form action="{{ route('updateWheel', $wheel->id) }}" method="POST" enctype="multipart/form-data" class="border p-4 rounded">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="productName" class="col-sm-2 col-form-label">Nom du produit :</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-sm" id="productName" name="name" value="{{ $wheel->name }}" placeholder="Entrez le nom du produit">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="productColor" class="col-sm-2 col-form-label">Couleur :</label>
                <div class="col-sm-4">
                    <input type="color" class="form-control form-control-sm" id="productColor" name="color" value="{{ $wheel->color }}" placeholder="Entrez la couleur du produit">
                    @error('color') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="productPrice" class="col-sm-2 col-form-label">Prix :</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control form-control-sm" id="productPrice" name="price" value="{{ $wheel->price }}" placeholder="Entrez le prix du produit">
                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="productImage" class="col-sm-2 col-form-label">Image :</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-sm" id="productImage" name="image" value="{{ $wheel->image }}" placeholder="Entrez l'URL de l'image">
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="productStock" class="col-sm-2 col-form-label">Stock :</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-sm" id="stock" name="stock" value="{{ $wheel->stock }}" placeholder="Entrez le stock du produit">
                    @error('stock') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-success">Mettre à jour le produit</button>
        </form>
    </div>
</div>
<!-- /.row (main row) -->
@endsection
