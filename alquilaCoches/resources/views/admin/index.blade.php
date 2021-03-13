<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button class="btn btn-primary"><a href="{{ route('alquiler.crear') }}">Crear Alquiler</a></button>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">KM</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Administración</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($usuarios as $usuario)

                            {{ $usuario->name }} <br>

                            @foreach ($usuario->coche as $coche)
                                <tr class=
                                @php
                                    $cerrado = true;
                                @endphp
                                    @if($coche->pivot->fecha_alquiler < today())
                                        @php
                                            echo 'table-danger';
                                            $cerrado = false;
                                        @endphp
                                    @else
                                        @php
                                            echo 'table-success';
                                        @endphp
                                    @endif>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$coche->marca}}</td>
                                    <td>{{$coche->modelo}}</td>
                                    <td>{{$coche->km}}</td>
                                    <td>{{$coche->pivot->fecha_alquiler}}</td>
                                    @if ($cerrado)
                                    <td>
                                        <p class="badge bg-success">Abierto</p>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning"><a href="{{ url("/alquiler/editar/$usuario->id/$coche->id") }}">Editar</a></button>
                                        <button class="btn btn-danger"><a href="{{ url("/alquiler/eliminar/$usuario->id/$coche->id") }}">Eliminar</a></button>
                                    </td>
                                    @else
                                        <td>
                                            <p class="badge bg-danger">Cerrado</p>
                                        </td>
                                        <td></td>
                                    @endif
                                </tr>
                            @endforeach

                          @endforeach
                        </tbody>
                      </table>
                      {{ $usuarios->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
