<div>
    <form class="p-4">
        <div class="mb-4">
            <input class="p-2 bg-gray-200 w-full" type="text" name="text" placeholder="Tarea...">
        </div>
        <button type="submit"
            class="bg-teal-500 text-black font-bold w-full rounded shadow p-2
        hover:bg-teal-300">Guardar</button>
    </form>

    <table class="shadow-md">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                <th class="py-3 px-6 text-left text-center">Terminada</th>
                <th class="py-3 px-6 text-left text-center">Tarea</th>
                <th class="py-3 px-6 text-left text-center">&nbsp;</th>
            </tr>
        </thead>

        <tbody class="text-gray-600">
            @forelse ($tasks as $task)
                <tr class="border-b border-gray-200">
                    <td class="px-4 py-2 text-center"><input type="checkbox"></td>
                    <td class="px-4 py-2 text-center">{{ $task->title }}</td>
                    <td class="px-4 py-2 text-center">
                        <button type="button"
                            class="bg-yellow-400 hover:bg-yellow-600 hover:text-white px-2 py-1 text-black text-xs rounded">Editar</button>
                        <button type="button"
                            class="bg-red-500 hover:bg-red-800 px-2 py-1 text-white text-xs rounded">Eliminar</button>
                    </td>
                </tr>

            @empty
                <h2>No hay tareas nuevas</h2>
            @endforelse
        </tbody>
    </table>
</div>
