
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
 
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
<body class="container" >
    <div class="row">
        <div class="col-12">
            <h2>Comfirmation de la demande de partenariat</h2>
            <p style="margin-top: 2rem" >
                Bonjour <i>{{ $name }}</i>. <br>
                Vous faites maintenant partie de nos partenaires, afin de pouvoir accéder à notre plateforme immobilier.
                Veillez, nous contactez en cas d'autres préoccupations. <br>
            </p>
            <a href="{{ route('users.home') }}">
                <button type="" class="btn btn-secondary" style="margin-top: 15px " >cliquer ici</button>
            </a>

        </div>
    </div>
</body>
</html>
