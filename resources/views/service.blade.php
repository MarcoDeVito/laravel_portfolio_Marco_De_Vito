<x-main>
    <x-slot name="title">Servizi</x-slot>
    <section class="my-5">
        <h1 class="my-4 mx-5">Servizi</h1>
        <div class="d-flex flex-wrap justify-content-center ">
            @foreach ($servizi as $element)
                <x-card :element="$element" />
            @endforeach
        </div>
    </section>
</x-main>
