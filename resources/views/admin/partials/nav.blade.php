<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{ route('admin-home') }}">Marimo Books</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"><i class="fa fa-dashboard"></i> Dashboard</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('gender') }}">Generos</a></li>
        <li><a href="{{ route('author') }}">Autores</a></li>
        <li><a href="{{ route('book') }}">Libros</a></li>
        <li><a href="{{ route('editorial') }}">Editoriales</a></li>
        <li><a href="{{ route('user') }}">Usuarios</a></li>
        <li><a href="{{ route('order') }}">Pedidos</a></li>
        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="fa fa-user"></i> {{ Auth::user()->username }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu"  role="menu">
            <li><a href=" {{ route('home') }}">Tienda</a></li>
            <li><a href=" {{ route('logout') }}">Cerrar Sesión</a></li>
          </ul>

        </li>
      </ul>
    </div>
  </div>
</nav>
