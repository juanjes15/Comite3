<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Solicitud de Comité') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                     <!-- Agrega el código para mostrar el mensaje de éxito -->
                     @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('solicitud_comites.store') }}">
                        @csrf

                        <div>
                            <x-label for="sol_fecha" value="{{ __('Fecha') }}" />
                            <x-input id="sol_fecha" class="block mt-1 w-full" type="date" name="sol_fecha"
                                :value="old('sol_fecha')" required autofocus />
                        </div>

                        <div>
                            <x-label for="sol_lugar" value="{{ __('Lugar') }}" />
                            <x-input id="sol_lugar" class="block mt-1 w-full" type="text" name="sol_lugar"
                                :value="old('sol_lugar')" required />
                        </div>

                        <div>
                            <x-label for="sol_asunto" value="{{ __('Asunto') }}" />
                            <x-input id="sol_asunto" class="block mt-1 w-full" type="text" name="sol_asunto"
                                :value="old('sol_asunto')" required />
                        </div>

                        <div>
                            <x-label for="sol_motivo" value="{{ __('Motivo') }}" />
                            <x-input id="sol_motivo" class="block mt-1 w-full" type="text" name="sol_motivo"
                                :value="old('sol_motivo')" required />
                        </div>

                        <div>
                            <x-label for="sol_estado" value="{{ __('Estado') }}" />
                            <x-input id="sol_estado" class="block mt-1 w-full" type="text" name="sol_estado"
                                :value="old('sol_estado')" required />
                        </div>

                        <div>
                            <x-label for="ins_id" value="{{ __('ID de Instructor') }}" />
                            <x-input id="ins_id" class="block mt-1 w-full" type="number" name="ins_id"
                                :value="old('ins_id')" required />
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
