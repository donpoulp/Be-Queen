@extends('admin.partials.main-layout')

@section('content-header')
    <!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->

    <div class="container-fluid mt-5">
        <div class="container-fluid mb-4">
            <a href="{{-- {{ route('') }} --}}" class="btn btn-success">Nouveaux Porte Bagage</a>
        </div>
        @if (isset($message))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
        <h1 class="mb-4">Liste des Porte Bagage Personalisable</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Volume</th>
                    <th>Prix</th>
                    <th>Image</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portebagages  as $portebagage)
                    <tr class="p-3">
                        <td>{{ $portebagage->id }}</td>
                        <td>{{ $portebagage->name }}</td>
                        <td>{{ $portebagage->volume}}</td>
                        <td>{{ $portebagage->price}}€</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $portebagage->image) }}" alt="{{ $portebagage->name }}"
                                class="img-fluid" width="100">
                        </td>
                        
                        <td>{{ $portebagage->stock }}</td>

                        <td>
                            <div class="p-2" role="group" aria-label="Actions">
                                <a href="  {{-- {{ route('getOneProduct', $product->id) }} --}} " class="btn btn-warning ">Modifier</a>
                                <form action=" {{ route('deletePorteBagage', $portebagage->id) }} " method="POST" style="display:inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger ">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row (main row) -->
@endsection
