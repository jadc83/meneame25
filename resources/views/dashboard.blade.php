<x-app-layout>
    <x-slot name="header">
        <div class="mx-auto h-7">
            <x-primary-button class=" bg-orange-600">Crear noticia</x-primary-button>
        </div>
    </x-slot>

        @foreach ($noticias as $noticia)
            <div class="shadow-2xl bg-white w-2/4 border border-black  mx-auto rounded-xl p-2 mt-2">

                <div class="flex">
                    <h1 class="text-xl p-2">{{ $noticia->titulo }}</h1>
                </div>

                <div class="bg-white rounded-xl">
                    <p class="p-2">{{ $noticia->contenido }}</p>
                </div>
                <div class="text-xs p-4">
                    Publicado por: {{$noticia->user->name}} |
                                   {{$noticia->created_at->format('d-m-Y')}} |
                                   {{ $noticia->categoria->denominacion }}
                </div>
            </div>
            @endforeach
    </div>
</x-app-layout>
