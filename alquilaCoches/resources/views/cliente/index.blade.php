<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">KM</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>

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
                                    <td>{{$coche->marca}}</td>
                                    <td>{{$coche->modelo}}</td>
                                    <td>{{$coche->km}}</td>
                                    <td>{{$coche->pivot->fecha_alquiler}}</td>
                                    <td>
                                    @if ($cerrado)
                                        <p class="badge bg-success">Abierto</p>
                                    @else
                                        <p class="badge bg-danger">Cerrado</p>
                                    @endif
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
