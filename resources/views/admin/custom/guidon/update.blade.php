@extends('admin.partials.main-layout')

@section('content-header')
    <!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->
    <div class="row">
        <div class="container-fluid">
            <div class="container-fluid">
                <a href="{{ route('guidon') }}" class="btn btn-primary">Retour</a>
             </div>
        </div>
        <div class="container mt-5">
            <h2 class="mb-4">Modifier un moyen de propulsion</h2>
            <form action="{{ route('updatepoigne', $handle->id) }}" method="POST" enctype="multipart/form-data" class="border p-4 rounded">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="productName" class="col-sm-2 col-form-label">Nom  :</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" id="productName" name="name" value="{{$handle->name}}"">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productName" class="col-sm-2 col-form-label">color:</label>
                    <div class="col-sm-4">
                        <input type="color" class="form-control form-control-sm" id="color" name="color" value="{{$handle->color}}"">
                        @error('color') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productColor" class="col-sm-2 col-form-label">Material :</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" id="material" name="material" value="{{$handle->material}}"">
                        @error('material') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productPrice" class="col-sm-2 col-form-label">Prix :</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control form-control-sm" id="productPrice" name="price" value="{{ $handle->price }}" placeholder="Entrez le prix du produit">
                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productImage" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-7">
                    <input type="file" class="form-control-file" id="productImage" name="image" accept=".png, .jpg, .jpeg, .webp" onchange="previewImage(this)">
                </div>
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('{{url('/img/default.jpg') }}'); width: 100px; height: 100px; background-size: cover; background-position: center;"></div>
                </div>
                <div class="form-group row">
                    <label for="productStock" class="col-sm-2 col-form-label">Stock :</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" id="stock" name="stock"  value="{{$handle->stock}}"">
                        @error('stock') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success">Ajouter le produit</button>
            </form>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection

<script type="text/javascript">
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').style.backgroundImage = 'url(' + e.target.result + ')';
                document.getElementById('imagePreview').style.display = 'none';
                document.getElementById('imagePreview').style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


<style>
    .avatar-preview {
        position: relative;
        max-width: 205px;
    }
    .avatar-preview > div {
        width: 100%;
        height: 100%;
        border-radius: 3%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>