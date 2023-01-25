<div>
    <form class="p-4" wire:submit.prevent="save">
        <div class="mb-4">
            <input wire:model="task.title" class="p-2 bg-gray-200 w-full" type="text" placeholder="Tarea...">

            @error('task.title')
                <div class="mt-1 mb-3 text-red-500 text-sm text-center uppercase">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit"
            class="bg-teal-500 text-black font-bold w-full rounded shadow p-2
        hover:bg-teal-300">Guardar</button>
    </form>

    @if (session()->has('message'))
        <h3 class="bg-purple-500 mb-4 p-3 text-sm text-center text-yellow-400 font-bold uppercase rounded">
            {{ session('message') }}</h3>
    @endif

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
