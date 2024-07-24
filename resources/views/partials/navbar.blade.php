<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Inicio</a></th>
        <th scope="col" class="{{ setActivo('servicios') }}"><a href="{{ route('servicios') }}">Personas</a></th>
        <th scope="col" class="{{ setActivo('contacto') }}"><a href="{{ route('contacto') }}">Contacto</a></th>
        @guest
            <th><a href="{{ route('login') }}">Login</a></th>
        @else
            <th>
                <a href="#" onclick="event.preventDefault(); document.getElementById('Logout-form').submit();">Cerrar Sesión</a>
            </th>
        @endguest

        </tr>
</thead>

<form id="Logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>