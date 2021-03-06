@extends("layouts.app")
@section("content")
    <div class="container">
        <h1 class="text-center text-uppercase">list des produits</h1>
        <div class="row my-3">
            <div class="col-9"></div>
            <div class="cols-3">
                <a href="{{ route("admin.produits.create") }}" class="btn btn-dark text-right">Ajoutes des Produits</a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">tire</th>
                <th scope="col">Prix</th>
                <th scope="col">quantite</th>
                <th scope="col">extrait</th>
                <th scope="col">images</th>
                <th scope="col">publier</th>
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
                    <td scope="col">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route("admin.produits.show", $produit->id) }}" class="btn btn-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                                </svg>
                            </a>
                            <a href="{{ route("admin.produits.edit", $produit->id) }}" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>
                            <a href="{{ route("admin.produits.destroy", $produit->id) }}" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td rowspan="7">{{ $produits->appends(['sort' => 'science-stream'])->links() }}</td>
                </tr>
            </tfoot>

        </table>
    </div>
@endsection
