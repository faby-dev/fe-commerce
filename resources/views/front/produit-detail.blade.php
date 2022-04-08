@extends("layouts/app")
@section("content")
    <div class="container">

        <div class="row">
            <div class="col-12 my-3">
                <img src="{{ $produit->images }}" alt="sary" class="img-fluid w-100">
            </div>
            <div class="col-12">
                <h1 class="text-center text-uppercase">{{ $produit->titre }}</h1>
                <p class="text-justify">{{ $produit->description }}</p>
                <p><span class="text-decoration-underline">Prix:</span> {{ $produit->prix }} $</p>
                <a class="btn btn-dark" href="#">Commander</a>
            </div>
        </div>
    </div>
@endsection
