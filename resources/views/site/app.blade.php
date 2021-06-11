  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
		<link rel="stylesheet" href="{{asset ('site/css/tema.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41763002-30"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-41763002-30');
    </script>

    <script src="https://www.google.com/recaptcha/api.js"></script>


        
		<title>Promaxi - Clínica Odontológica</title>

        <link rel="icon" type="image/png" href="{{ asset('site/images/favicon.png') }}">
    </head>

    <body>

    <div class="page-wraper">
            @include('site.layout.header')

            <div class="page-content">
                @yield('content')

            </div>
            @include('site.layout.footer')
        </div>
        <script src="{{asset ('site/js/tema.js')}}"></script>
</body>
