<form action="/contracts" method="POST" enctype="multipart/form-data">
	@csrf
	<div>
	    @if (session('notification'))
	      <div class="bg-green-400 mx-3 py-2 text-white my-4">
	        <p>{{ session('notification') }}</p>
	      </div>
	    @endif
	    <div>
	        <label for="name">Nombre</label>
	        <input id="name" name="name" type="text" value="{{old('name')}}" placeholder="Nombre de la ruta">
	        @error('name')
	            <p class="error">{{$message}}</p>
	        @enderror
	    </div>
	    <div>
	        <label for="date">Fecha</label>
	        <input id="date" name="date" type="date" value="{{old('date')}}" required>
	        @error('date')
	            <p class="error">{{$message}}</p>
	        @enderror
	    </div>
	    <div>
	        <label for="file">Archivo</label>
	        <input id="file" name="file" type="file" value="{{old('file')}}" required>
	        @error('file')
	            <p class="error">{{$message}}</p>
	        @enderror
	    </div>
	    <button type="submit">Guardar</button>
	</div>
</form>