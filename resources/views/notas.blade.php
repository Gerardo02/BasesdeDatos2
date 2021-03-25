<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notas</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item active">
                        <a href="/notas" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item ">
                        <a href="/agregar" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="content">
            <div class="cards">
                @forelse ($notas as $nota)
                <div class="card card-small">
                    <div class="card-body">
                        <h4>{{ $nota->titulo }}</h4>
                        <p>
                            {!! $nota->contenido !!}
                        </p>
                    </div>
                    
                    <footer class="card-footer">
                    <form method="POST" action="{{ url("notas/{$nota->id}") }}">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('notas.edit', ['id' => $nota->id]) }}" class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>       
                        <a class="action-link action-delete">
                            <i class="icon icon-trash">
                                <button type="submit"></button>
                            </i>
                        </a>
                        
                    </form>   
                        
                        
                    </footer>
                </div>
                @empty
                    <p>No hay registros que mostrar en este momento<a href="/agregar">Agregar nota</a></p>
                @endforelse
            </div>     
        </main>
        <footer class="foot">
            <div class="ad">
                <p>
                    Esta aplicación es desarrollada en el cursos de IPM
                    <a href="https://mawe.mx">Primeros pasos con Laravel </a>.
                </p>
            </div>
            <div class="license">
                <p>© 2021 Derechos Reservados - MAWE TECNOLOGIAS</p>
            </div>
        </footer>
    </div>
</body>
</html>
