<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear ficha') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('fichas.store') }}">
                        @csrf
                        <div>
                            <x-label for="fic_inicioLectiva" value="{{ __('Inicio Etapa Lectiva') }}" />
                            <x-input id="fic_inicioLectiva" class="block mt-1 w-full" type="date" name="fic_inicioLectiva"
                                :value="old('fic_inicioLectiva')" required autofocus autocomplete="fic_inicioLectiva" />
                        </div>
                        <div>
                            <x-label for="fic_finLectiva" value="{{ __('Fin Etapa Lectiva') }}" />
                            <x-input id="fic_finLectiva" class="block mt-1 w-full" type="date" name="fic_finLectiva"
                                :value="old('fic_finLectiva')" required autofocus autocomplete="fic_finLectiva" />
                        </div>
                        <div>
                            <x-label for="fic_inicioProductiva" value="{{ __('Inicio Etapa Productiva') }}" />
                            <x-input id="fic_inicioProductiva" class="block mt-1 w-full" type="date" name="fic_inicioProductiva"
                                :value="old('fic_inicioProductiva')" required autofocus autocomplete="fic_inicioProductiva" />
                        </div>
                        <div>
                            <x-label for="fic_finProductiva" value="{{ __('Fin Etapa Productiva') }}" />
                            <x-input id="fic_finProductiva" class="block mt-1 w-full" type="date" name="fic_finProductiva"
                                :value="old('fic_finProductiva')" required autofocus autocomplete="fic_finProductiva" />
                        </div>
                        <div>
                            <x-label for="fic_modalidad" value="{{ __('Modalidad') }}" />
                            <x-input id="fic_modalidad" class="block mt-1 w-full" type="text" name="fic_modalidad"
                                :value="old('fic_modalidad')" required autofocus autocomplete="fic_modalidad" />
                        </div>
                        <div>
                            <x-label for="fic_jornada" value="{{ __('Jornada') }}" />
                            <x-input id="fic_jornada" class="block mt-1 w-full" type="text" name="fic_jornada"
                                :value="old('fic_jornada')" required autofocus autocomplete="fic_jornada" />
                        </div>
                        <div>
                            <x-label for="pro_id" value="{{ __('ID Programa (temporal)') }}" />
                            <x-input id="pro_id" class="block mt-1 w-full" type="number" name="pro_id"
                                :value="old('pro_id')" required autofocus autocomplete="pro_id" />
                        </div>
                        <div class="flex mt-4">
                            <x-button>
                                {{ __('Crear') }}
                            </x-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
