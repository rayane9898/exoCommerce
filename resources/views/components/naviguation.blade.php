<link rel="stylesheet" href="{{asset("css/app.css")}}">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route("welcome")}}">Marché</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="{{route("welcome")}}">Fruits</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route("legumes")}}">Légumes</a>
        </li>

            
      </ul>
    </div>
  </nav>