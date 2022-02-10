<h1>Crear nueva publicacion</h1>
<form method="post" action="{{ route('publicaciones.store') }}">
        @csrf
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    @endif
    <label>
        Titulo
        <input type="text" name="titulo" value="{{ old('titulo') }}"><br>
    </label>
    <label>
        <input type="checkbox" name="caducable" checked={{ old('caducable') == true }} /> <label>Caducable</label> <br>
    </label>
    <label>
        <input type="checkbox" name="comentable" checked={{ old('comentable')==true }} /> <label>Comentable</label> <br>
    </label>
    <label>
        Extracto
        <input type="text" name="extracto" value="{{ old('extracto') }}" /><br>
    </label>
    <label>
        Contenido
        <textarea name="contenido" value="{{ old('contenido') }}"></textarea><br>
    </label>
    <label>
        Acceso
    </label>
    <select name="acceso">
        <option value="Privado" selected={{ old('acceso') == 'Privado' }}>Privado</option>
        <option value="Publico" selected={{ old('acceso') == 'Public' }}>Publico</option>
    </select><br>
    <button>Crear</button>
</form>
