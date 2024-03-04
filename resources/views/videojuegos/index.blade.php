<x-app-layout>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Titulo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Año
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre de la desarrolladora
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre de la distribuidora
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videojuegos as $videojuego)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{route("videojuegos.show", $videojuego)}}">{{$videojuego->titulo}}</a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$videojuego->anyo}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$videojuego->desarrolladora->nombre}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$videojuego->distribuidora->nombre}}
                        </th>
                        <td class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <a href="{{route("videojuegos.edit", $videojuego)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            <form method="POST" action="{{route("videojuegos.destroy", $videojuego)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                @csrf
                                @method('DELETE')
                                <button>Borrar</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <a href="{{route("videojuegos.create")}}">Crear</a>
</x-app-layout>
