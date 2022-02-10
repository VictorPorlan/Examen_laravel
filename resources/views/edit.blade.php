<h1>Editar publicacion</h1>
<form method="post" action="{{ route('publicaciones.update', $post->id) }}">
    @csrf
    @method('patch')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    @endif
    <label>
        {{ __('title') }}
        <input type="text" name="titulo" value="{{ old('titulo', $post->titulo) }}"><br>
    </label>
    <label>

        <input type="checkbox" name="caducable" checked={{ old('caducable', $post->caducable) == true }} />
        <label>Caducable</label> <br>
    </label>
    <label>
        <input type="checkbox" name="comentable" checked={{ old('comentable', $post->comentable) == true }} />
        <label>Comentable</label> <br>
    </label>
    <label>
        {{ __('extract') }}
        <input type="text" name="extracto" value="{{ old('extracto', $post->extracto) }}" /><br>
    </label>
    <label>
        {{ __('content') }}
        <textarea name="contenido" value="{{ old('contenido', $post->contendio) }}"></textarea><br>
    </label>
    <label>
        Acceso
    </label>
    <select name="acceso">
        <option value="Privado" selected={{ old('acceso') == 'Privado' }}>Privado</option>
        <option value="Publico" selected={{ old('acceso') == 'Public' }}>Publico</option>
    </select><br>
    <button>Editar</button>
</form>
