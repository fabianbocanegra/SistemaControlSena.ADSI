<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link fs-4" href="{{route('fichas.listado')}}">Fichas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-4" href="{{route('aprendices.listado')}}">Aprendices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-4" href="{{route('instructores.listado')}}">Instructores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-4" href="{{route('programas.listado')}}">Programas</a>
      </li>
    </ul>
  </div>
</nav>
