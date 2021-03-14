<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Libros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button class="btn btn-primary"><a href="{{ route('alquiler.create') }}">Crear alquiler</a></button><br>
                    @if ($usuarios)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Lector</th>
                                    <th>Libro</th>
                                    <th>Fecha Alquiler</th>
                                    <th>Gestión</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                @foreach ($usuario->libro as $libro)
                                        <tr>
                                            <td>{{ $usuario->name }}</td>
                                            <td>{{ $libro->nombre }}</td>
                                            <td>{{ $libro->pivot->fecha }}</td>
                                            <td>
                                                <button class="btn btn-warning"><a href="{{ url("/alquiler/edit/$usuario->id/$libro->id") }}">Editar</a></button>
                                                <button class="btn btn-danger"><a href="{{ url("/alquiler/destroy/$usuario->id/$libro->id") }}">Eliminar</a></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                @endforeach
                            </tbody>
                        </table>
                        {{ $usuarios->links() }}

                    @else
                        <h2>No hay alquileres</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
