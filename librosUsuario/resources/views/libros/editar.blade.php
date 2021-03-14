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
                    <form action="{{ url("alquiler/$alquiler") }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                            <select name="usuario" class="form-select" required>
                                @foreach ($usuarios as $usuario)
                                    <option {{ ($usuario->id === $alquiler->user_id) ? 'selected' : '' }} value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Libro</label>
                            <select name="libro" class="form-select" required>
                                @foreach ($libros as $libro)
                                    <option {{ ($libro->id === $alquiler->libro_id) ? 'selected' : '' }} value="{{ $libro->id }}">{{ $libro->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Fecha</label>
                            <input type="date" class="form-control" name="fecha">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Confirmar Edición De Alquiler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
