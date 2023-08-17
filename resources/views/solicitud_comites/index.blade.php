<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Solicitudes comites') }}
        </h2>
        <div class="p-4">
            <form action="{{ route('solicitud_comites.index') }}" method="GET">
                <input type="text" name="busqueda" placeholder="Buscar solicitud comite...">
                <button type="submit">Buscar</button>
            </form>
        </div>   
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @can('administrar solicitudes')
                        <x-link href="{{ route('solicitud_comites.create') }}" class="m-4">Añadir Solicitud</x-link>
                    @endcan
                    <div class="p-4">
                        <form action="{{ route('solicitud_comites.create') }}" method="GET">
                            <div class="flex mt-4">
                                <x-button>
                                    {{ __('Crear solicitud') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Fecha Solicitud
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Lugar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Asunto
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Motivo
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Estado
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Instructor
                                </th>
                                @can('administrar comites')
                                    <th scope="col" class="px-6 py-3">
                                        Opciones
                                    </th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($solicitudes as $solicitud)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $solicitud->sol_fecha }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $solicitud->sol_lugar }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $solicitud->sol_asunto }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $solicitud->sol_motivo }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $solicitud->sol_estado }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        @foreach ($instructores as $instructor)
                                            @if ($instructor->id == $solicitud->ins_id)
                                                {{ $instructor->ins_nombres }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-link href="{{ route('solicitud_comites.edit', $solicitud) }}">Editar</x-link>
                                        <form method="POST" action="{{ route('solicitud_comites.destroy', $solicitud) }}"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button type="submit" onclick="return confirm('¿Está seguro?')">
                                                Eliminar
                                            </x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                        No se encontraron solicitudes de comité.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
