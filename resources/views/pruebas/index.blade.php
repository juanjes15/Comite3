<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Prueba') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('pruebas.store') }}">
                        @csrf

                        <div>
                            <x-label for="pru_tipo" value="{{ __('Tipo de Prueba') }}" />
                            <x-input id="pru_tipo" class="block mt-1 w-full" type="text" name="pru_tipo"
                                :value="old('pru_tipo')" required autofocus />
                        </div>

                        <div>
                            <x-label for="pru_descripcion" value="{{ __('Descripción') }}" />
                            <x-input id="pru_descripcion" class="block mt-1 w-full" type="text" name="pru_descripcion"
                                :value="old('pru_descripcion')" required />
                        </div>

                        <div>
                            <x-label for="pru_fecha" value="{{ __('Fecha') }}" />
                            <x-input id="pru_fecha" class="block mt-1 w-full" type="date" name="pru_fecha"
                                :value="old('pru_fecha')" required />
                        </div>

                        <div>
                            <x-label for="pru_url" value="{{ __('URL') }}" />
                            <x-input id="pru_url" class="block mt-1 w-full" type="url" name="pru_url"
                                :value="old('pru_url')" required />
                        </div>

                        <div>
                            <x-label for="sol_id" value="{{ __('ID de Solicitud de Comité') }}" />
                            <x-input id="sol_id" class="block mt-1 w-full" type="number" name="sol_id"
                                :value="old('sol_id')" required />
                        </div>

                        <div class="flex mt-4">
                            <x-button>
                                {{ __('Crear') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
