<div>
    <section class="flex flex-col items-center space-y-4 py-12">
        <h1 class="text-3xl font-bold uppercase">
            {{ $welcome }}
        </h1>

        @if (session()->has('message'))
            <h3 class="bg-purple-500 p-3 w-1/3 text-sm text-center text-yellow-400 font-bold uppercase rounded">
                {{ session('message') }}</h3>
        @endif

        <!--Livewire Componente-->
        <livewire:task />
        <!--Livewire Componente-->
    </section>
</div>
