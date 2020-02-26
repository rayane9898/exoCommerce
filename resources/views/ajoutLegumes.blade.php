<link rel="stylesheet" href="{{asset("css/app.css")}}">
@include('components/naviguation')

<form action="{{route("saveLegume")}}" method="POST">
    @csrf
    <section class="text-center">
        <div class="container">
            <h3 class="text-center my-3">Ajoute un légume</h3>

            <input name="nom" class="form-control form-control-lg my-3" type="text" placeholder="nom">
            <input name="quantite" class="form-control form-control-lg my-3" type="text" placeholder="quantite">
        
            <input name="prix" class="form-control form-control-lg my-3" type="text" placeholder="prix">
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary">Ajouter</button>

            </div>
        </section>




</form>