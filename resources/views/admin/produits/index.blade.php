@extends("layouts.app")
@section("content")
    <div class="container">
        <h1 class="text-center text-uppercase">list des produits</h1>
        <div class="row">
            <a href="{{ route("admin.produits.create") }}" class="btn btn-dark text-right">Ajoutes des Produits</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">tire</th>
                <th scope="col">Prix</th>
                <th scope="col">quantite</th>
                <th scope="col">extrait</th>
                <th scope="col">images</th>
                <th scope="col">ispublished</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produits as $produit)

                <tr>
                    <td scope="col">{{ $produit->titre }}</td>
                    <td scope="col">{{ $produit->prix }}</td>
                    <td scope="col">{{ $produit->quantite }}</td>
                    <td scope="col">{{ $produit->extrait }}</td>
                    <td scope="col">{{ $produit->images }}</td>
                    <td scope="col">{{ $produit->ispublished == 1? "oui": "nom" }}</td>
                    <td scope="col">action</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>{{ $produits->appends(['sort' => 'science-stream'])->links() }}</td>
                </tr>
            </tfoot>

        </table>
    </div>
@endsection
