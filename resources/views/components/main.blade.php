<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{$title ?? 'Undefined'}} - Portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="/css/styles.css" rel="stylesheet" />
    </head>

    <body class="bg-primary-subtle">
        <!-- Responsive navbar-->
        <x-navbar />

        <!-- Header-->
        {{ $slot }}
       

       
       <x-footer/>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
      
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>

    </html>

</div>
