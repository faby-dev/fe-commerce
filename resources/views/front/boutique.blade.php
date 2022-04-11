@extends("layouts/app")
@section("content")
    <div class="container">
        <div class="row">
            <h1 class="text-center text-uppercase">listes des Produits</h1>
            @foreach($produits as $produit)
                <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                    <div class="card" style="width: 18rem;">
                        <img class="img-fluid card-img-top" src="{{ $produit->images }}" alt="Generic placeholder image"/>
                        <div class="card-body">
                            <h5 class="card-title">{{ $produit->titre }}</h5>
                            <p class="card-text">{{ $produit->extrait }}</p>
                            <a href="{{ route("Affiche_Produits", $produit->id) }}" class="btn btn-dark">Affiche Détail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row my-3">
            <div class="d-flex justify-content-center">
                {{ $produits->appends(['sort' => 'science-stream'])->links() }}
            </div>
        </div>
    </div>
@endsection
