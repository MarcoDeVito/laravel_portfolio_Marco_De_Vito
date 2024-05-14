<x-main>
    <x-slot name="title">{{ $service['name']}} </x-slot>
    <div class="container-fluid text-center ">
        <div class="row justify-content-center ">
            <div class="col-12 ">
                <main class="my-4 mx-3 mb-5">
                    <h1>{{ $service['name'] }}</h1>
                    <img src="{{ $service['img'] }}" alt="immagine servizio di {{ $service['name'] }}"
                        class="my-3 img-fluid ">

                    <h2>In {{ $service['tempo_di_realizzazione'] }}, a soli {{ $service['costo'] }}€</h2>
                </main>
            </div>
        </div>
    </div>

</x-main>
