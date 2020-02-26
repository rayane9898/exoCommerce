<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>

    @include('components/naviguation')

    <section class="container">
        <h1 class="text-center my-5">Inscris-toi vite à la scéance d'information  😎💻</h1>


        <div class="text-center my-5">
    
        <a class="text-center" href="{{route("ajoutFruits")}}"><button type="button" class="btn btn-outline-primary">Ajouter</button></a>


    
    
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
                <th>Ajouter</th>
                <th>Supprimer</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($fruits as $fruit)
                <tr>
                <td>{{$fruit->nom}}</td>
                <td>{{$fruit->quantite}}</td>
                <td>{{$fruit->prix}}</td>
                <td> <a href="{{route("edit", $fruit->id)}}"><button type="button" class="btn btn-success">Modifier</button></a></td>
                <td>
                <a href="{{route("delete", $fruit->id)}}"><button type="button" class="btn btn-danger">Supprimer</button></a>
                </td>
                </tr>

                    
                @endforeach
 
            </tbody>
          </table>
    </section>
</body>
</html>