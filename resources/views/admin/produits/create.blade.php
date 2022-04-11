@extends("layouts.app")
@section("content")
    <div class="container">
        <h1 class="text-center">Cree un Produits</h1>
        <form action="{{ route('admin.produits.store') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <!--titre-->
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="titre">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <!--prix-->
            <div class="form-group">
                <label for="exampleInputEmail1">prix</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="prix">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <!--Extrait-->
            <div class="form-group">
                <label for="extrait">Petit Extrait</label>
                <input type="text" class="form-control" id="extrait" aria-describedby="emailHelp" placeholder="Enter email" name="extrait">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <!--quantite-->
            <div class="form-group">
                <label for="exampleInputEmail1">Quantité: </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="quantite">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <!--description-->
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description: </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <!--images-->
            <div class="form-group">
                <label for="exampleInputEmail1">image</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="image">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
                <!--publish-->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="publish" id="publish" >
                <label class="form-check-label" for="remember">
                    publier
                </label>
            </div>
            <button type="submit" class="btn btn-dark mt-3">Enregistre</button>

        </form>
    </div>
@endsection
