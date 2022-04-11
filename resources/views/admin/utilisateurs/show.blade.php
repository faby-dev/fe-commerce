@extends("layouts/app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-uppercase">Information utilisateurs</h1>
                <p>Nom : {{ $user->name }}</p>
                <p>Prénom : {{ $user->firstname }}</p>
                <p>Adresse : {{ $user->adresse }}</p>
                <p>Email : {{ $user->email }}</p>
                <p>roles : {{ $user->role }}</p>
                <a class="btn btn-dark" href="#">Gerer Utilisateurs</a>
            </div>
        </div>
    </div>
@endsection
