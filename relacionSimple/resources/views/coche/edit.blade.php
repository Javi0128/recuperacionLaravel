<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Coche') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url("/coche/update/$coche->id") }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Marca</label>
                            <input type="text" class="form-control" name="marca" value="{{ $coche->marca }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Modelo</label>
                            <input type="text" class="form-control" name="modelo" value="{{ $coche->modelo }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Año</label>
                            <input type="number" class="form-control" name="year" value="{{ $coche->year }}" required>
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Guardar Edición</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
