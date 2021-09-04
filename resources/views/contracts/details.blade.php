<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Importación de datos') }}
        </h2>
    </x-slot>

    <div class="container-cards">
        <div class="card">
            <div class="content-card">
                <div class="card-header">
                    <h2>Contract Rate Registration</h2>
                </div>
                <div class="card-body mx-2">
                    @include('includes.create-form')
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content-card">
                <div class="card-header flex justify-between">
                    <h2 class="">Contracts / {{ $contract->name }}</h2>
                    <a class="py-1 px-2 bg-gray-400 text-white rounded-md" href="{{ url('/dashboard') }}">Volver</a>
                </div>
                <div class="card-body content-datatable">                
                    <table class="data-table stripe hover">
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
                            @foreach($contract->rates as $rate)                                
                                <tr>
                                    <td>{{$contract->name}}</td>
                                    <td>{{$contract->date}}</td>
                                    <td>{{$rate->origin}}</td>
                                    <td>{{$rate->destination}}</td>
                                    <td>{{$rate->twenty}}</td>
                                    <td>{{$rate->forty}}</td>
                                    <td>{{$rate->fortyhc}}</td>
                                    <td>{{$rate->currency}}</td>
                                </tr>                                
                            @endforeach
                        </tbody>                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
