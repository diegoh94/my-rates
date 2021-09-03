<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="container-cards">
        <div class="card">
            <div class="content-card">
                <div class="card-header">
                    <h2>Registro de tarifas por ruta</h2>
                </div>
                <div class="card-body mx-2">
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
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content-card">
                <div class="card-header">
                    <h2>Tarifas registradas</h2>
                </div>
                <div class="card-body overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Origen</th>
                                <th>Destino</th>                                
                                <th>Tarifa 20</th>
                                <th>Tarifa 40</th>
                                <th>Tarifa 40 HC</th>
                                <th>Moneda</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contracts as $contract)
                                
                                <tr>
                                    <td>{{$contract->name}}</td>
                                    <td>{{$contract->date}}</td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
