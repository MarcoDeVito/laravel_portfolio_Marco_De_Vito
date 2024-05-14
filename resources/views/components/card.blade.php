<div>
    <div class="card mx-5 my-3 bg-info-subtle" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $element['name'] }}</h5>
            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic minima itaque
                velit quod ad tempora quisquam, modi quasi sunt .</p>
            <a href="{{ route('detail', ['service' => $element['uri']]) }}" class="btn btn-primary">Vedi
                dettagli</a>
                {{$slot}}
        </div>
    </div>
</div>
