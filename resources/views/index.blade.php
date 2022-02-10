<h1>Publicaciones</h1>
<ul>
    @forelse ($publicaciones as $publicacionItem)
        <li>
            <h3>{{ $publicacionItem->titulo }}:<h3>
            <small>Extracto: {{ $publicacionItem->extracto }}</small><br>
            <small>Contendio: {{ $publicacionItem->contenido }}</small><br>
        </li>
    @empty

    @endforelse

</ul>