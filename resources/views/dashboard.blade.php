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
                <div class="card-header">
                    <h2>Contracts</h2>
                </div>
                <div class="card-body content-datatable">                
                    <table class="data-table stripe hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contracts as $contract)                                
                                <tr>
                                    <td>{{$contract->name}}</td>
                                    <td class="text-center">{{$contract->date}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('/contracts/'.$contract->id) }}" class="py-1 px-2 bg-blue-500 text-sm text-white rounded-md">Rates</a>
                                    </td>
                                </tr>                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
