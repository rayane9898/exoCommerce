@include('components/naviguation')
    <section class="container">

        <div class="text-center my-5">
    
        <a class="text-center" href="#"><button type="button" class="btn btn-outline-primary">Ajouter</button></a>
    
    
        </div>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th colspan="6">
                        <h3 class="text-center">Tableau dynamique de fruits</h3>
                    </th>
                </tr>
    
              <tr>
                <th>Nom</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($fruits as $fruit)
                <tr>
                <td>{{$fruit->nom}}</td>
                <td>{{$fruit->quantite}}</td>
                <td>{{$fruit->prix}}</td>
                <td> <a href="{{route("edit", $fruit->id)}}"><button type="button" class="btn btn-danger">Modifier</button></a></td>
                </tr>
                    
                @endforeach
 
            </tbody>
          </table>
    </section>