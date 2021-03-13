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
                    <form action="{{ url("alquiler/guardarEdicion/$alquiler->user_id/$alquiler->coche_id") }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Usuario</label>
                          <select name="usuario" class="form-select">
                              @foreach ($usuarios as $usuario)
                                  <option {{ ($usuario->id == $alquiler->user_id ? 'selected' : '') }} value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                              @endforeach
                          </select>
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Coche</label>
                          <select name="coche" class="form-select">
                              @foreach ($coches as $coche)
                                  <option {{ ($coche->id == $alquiler->coche_id ? 'selected' : '') }} value="{{ $coche->id }}">{{ $coche->marca }} {{ $coche->modelo }}</option>
                              @endforeach
                          </select>
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Fecha</label>
                          <input type="date" class="form-control" name="fecha">
                        </div>
                        <button type="submit" class="btn btn-primary">Editar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
