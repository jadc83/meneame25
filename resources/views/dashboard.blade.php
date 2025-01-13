<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meneame 2024/25') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($noticias as $noticia)
                    <div class="bg-white shadow-2xl">
                        <h1 class="text-xl p-2">
                            {{$noticia->titulo}}
                        </h1>
                    </div>

                    <div class="text-xs p-4">
                        Publicado por: {{$noticia->user_id}}
                        Publicado el: {{$noticia->created_at->format('d-m-Y')}}
                    </div>
                        <p class="p-2">{{$noticia->contenido}}</p>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
