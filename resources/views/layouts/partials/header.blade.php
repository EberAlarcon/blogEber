<header>
    <h1>Eber BLOGS</h1>
    <nav>
        <ul>
            {{-- Una clase donde estara un condicional ternary que indique que si estamos en la ruta se active --}}
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Inicio</a>
                {{-- Para marcar en que navegacion me encuentro --}}
                {{-- @dump(request()->routeIs('home')) --}}
            </li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Curso</a>  
            </li>
            <li><a href="{{route('nosotros')}}"class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Sobre Nosotros</a>   
            </li>
            <li><a href="{{route('contactanos.index')}}"class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contáctanos</a>   
            </li>
        </ul>
    </nav>
</header>