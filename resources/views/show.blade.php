<h3>{{ $post->titulo }}:<h3>
    <small>Extracto: {{ $post->extracto }}</small><br>
    <small>Contenido: {{ $post->contenido }}</small><br>
    
    <form method="post" action="{{ route('publicaciones.destroy', $post->id) }}">
        @method('delete')
        @csrf
        <button>Eliminar</button>
    </form>