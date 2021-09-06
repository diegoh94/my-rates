<form action="/contracts" method="POST" enctype="multipart/form-data">
	@csrf
	<div>
	    @if (session('notification'))
	      <div class="bg-green-400 mx-3 py-2 text-white my-4">
	        <p>{{ session('notification') }}</p>
	      </div>
	    @endif

	    @if (session('error'))
	      <div class="bg-red-400 mx-3 py-2 text-white my-4">
	        <p>{{ session('error') }}</p>
	      </div>
	    @endif

	    @if ($errors->any())
	      <div class="bg-red-400 mx-3 py-2 text-white my-4">
	      	<ul>
	      	@foreach ($errors->all() as $error)
		        <li>{{ $error }}</li>
	        @endforeach
	        </ul>
	      </div>
	    @endif

	    <div>
	        <label for="name">Nombre</label>
	        <input id="name" name="name" type="text" value="{{old('name')}}" 
	        zminlength="2" maxlength="255" placeholder="Nombre de la ruta" required>
	        @error('name')
	            <p class="error">{{$message}}</p>
	        @enderror
	    </div>
	    <div>
	        <label for="date">Fecha</label>
	        <input id="date" name="date" type="date" value="{{old('date')}}" min="{{date('Y-m-d')}}" required>
	        @error('date')
	            <p class="error">{{$message}}</p>
	        @enderror
	    </div>
	    <div>
	        <label for="file">Archivo</label>
	        <input id="file" name="file" type="file" value="{{old('file')}}" accept=".xlsx,.xls,.csv" required>
	        @error('file')
	            <p class="error">{{$message}}</p>
	        @enderror
	    </div>
	    <button type="submit">Guardar</button>
	</div>
</form>