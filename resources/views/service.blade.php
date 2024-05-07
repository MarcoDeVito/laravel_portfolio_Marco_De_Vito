<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servizi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-primary-subtle">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom shadow-sm">
        <a href="{{ route('homepage') }}"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4 ms-4">Portfolio</span>
        </a>

        <ul class="nav nav-pills me-3">
            <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('aboutus') }}" class="nav-link">Chi Siamo</a></li>
            <li class="nav-item "><a href="{{ route('service') }}" class="nav-link active">Servizi</a></li>

        </ul>
    </header>

    <h1 class="my-4 mx-3">Servizi</h1>
    <ul>
        <div class="d-flex flex-wrap">
            @foreach ($servizi as $element)
                <div class="card mx-5 my-3 bg-info-subtle" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $element['name'] }}</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic minima itaque
                            velit quod ad tempora quisquam, modi quasi sunt .</p>
                        <a href="{{ route('detail', ['service' => $element['uri'], 'name' => $element['name']]) }}"
                            class="btn btn-primary">Vedi dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>


    </ul>

    <footer class="w-100">
        <ul class="nav justify-content-center border-bottom shadow-sm pb-3 mb-3">
            <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link px-2 text-body-secondary">Home</a>
            </li>
            <li class="nav-item"><a href="{{ route('aboutus') }}" class="nav-link px-2 text-body-secondary">Chi
                    Siamo</a></li>
            <li class="nav-item"><a href="{{ route('service') }}" class="nav-link px-2 text-body-secondary">Servizi</a>
            </li>
        </ul>
        <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>
