<link rel="stylesheet" href="{{asset("css/app.css")}}">
@include('components/naviguation')


<form action="{{route("updateFruit",$fruit->id)}}" method="POST">
    @csrf
    <section class="text-center">
        <div class="container">
            <h3 class="text-center my-3">Modifie un fruit</h3>

            <input value="{{$fruit->nom}}" name="nom" class="form-control form-control-lg my-3" type="text" placeholder="nom">
            <input value="{{$fruit->quantite}}" name="quantite" class="form-control form-control-lg my-3" type="text" placeholder="quantite">
        
            <input value="{{$fruit->prix}}" name="prix" class="form-control form-control-lg my-3" type="text" placeholder="prix">
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-danger">Modifier</button>
            </div>
        </section>
</form>