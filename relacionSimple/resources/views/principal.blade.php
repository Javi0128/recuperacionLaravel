<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coches') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($user->tipo === 'admin')
                        <button class="btn btn-primary"><a href="{{ route('coche.add') }}">Añadir Coche</a></button>
                    @endif
                    <table class="table text-center">
                        <thead>
                          <tr>
                            @if ($user->tipo == 'admin')
                                <th scope="col">ID</th>
                                <th scope="col">Conductor</th>
                            @endif
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Año</th>
                            @if ($user->tipo == 'admin')
                                <th scope="col">Gestión</th>
                            @endif
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($todos as $coche)
                                <tr>
                                    @if ($user->tipo == 'admin')
                                        <th scope="row">{{ $coche->id }}</th>
                                        <td>{{ $coche->user->name }}</td>
                                    @endif
                                    <td>{{ $coche->marca }}</td>
                                    <td>{{ $coche->modelo }}</td>
                                    <td>{{ $coche->year }}</td>
                                    @if ($user->tipo == 'admin')
                                        <td><button class="btn btn-warning"><a href="{{ url("/coche/edit/$coche->id") }}">Editar</a></button>
                                            <button class="btn btn-danger"><a href="{{ url("/coche/destroy/$coche->id") }}">Eliminar</a></button></td>
                                    @endif
                                </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
