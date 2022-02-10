<h1>Publicaciones</h1>
<ul>
    @forelse ($publicaciones as $publicacionItem)
        <li>
            <h3>{{ $publicacionItem->Title }}:<h3>
            <small>Color: {{ var_dump($publicacionItem->extracto) }}</small><br>
            <small>Descripción: {{ var_dump($publicacionItem->contenido) }}</small><br>
        </li>
    @empty

    @endforelse

</ul>