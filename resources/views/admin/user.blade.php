@extends('admin.partials.main-layout')

@section('content-header')
    
@endsection

@section('body')

    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(isset($message))
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                @endif
    
                <!-- Ajout de la classe table-responsive -->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Mail</th>
                            {{-- <th scope="col">Mot De Passe</th> --}}
                            <th scope="col">Civilité</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                {{-- <td>{{$user->password}}</td> --}}
                                <td>{{$user->civility}}</td>
                                <td>{{$user->adress}}</td>
                                <td>{{$user->city}}</td>
                                <td>
                                    <a type="button" href="{{ route('userEdit', $user->id) }}" class="btn btn-primary mb-3">Modifier</a>
                                    <a type="button" href="{{ route('userDelete', $user->id) }}" class="btn btn-danger mb-3">Supprimer</a>
                                </td>
                            </tr>
                        @endforeach
                        <a type="button" href="{{ route('userPost') }}" class="btn btn-success mb-3">Créer un User</a>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection
