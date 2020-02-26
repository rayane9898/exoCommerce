@include('components/naviguation')

    <section class="container">

        <div class="text-center my-5">
    
          <a class="text-center" href="{{route("ajoutLegume")}}"><button type="button" class="btn btn-outline-primary">Ajouter</button></a>


    
    
        </div>
        @if (count($legumes)==0)
            <h1>Il n'y a pas de légumes</h1>
        @endif
        <table class="table table-primary">
            <thead>
                <tr>
                    <th colspan="6">
                        <h3 class="text-center">Tableau dynamique de legumes</h3>
                    </th>
                </tr>
    
              <tr>
              <th>Nom</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>Ajouter</th>
                <th>Supprimer</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($legumes as $legume)
                <tr>
                  <td>{{$legume->nom}}</td>
                  <td>{{$legume->quantite}}</td>
                  <td>{{$legume->prix}}</td>
                <td> <a href="{{route("editLegume", $legume->id)}}"><button type="button" class="btn btn-success">Modifier</button></a></td>
                <td>
                <a href="{{route("deleteLegume", $legume->id)}}"><button type="button" class="btn btn-danger">Supprimer</button></a>
                </td>
                </tr>
                @endforeach
 
            </tbody>
          </table>
    </section>