<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('font/iconsmind-s/css/iconsminds.css') }}">
        <link rel="stylesheet" href="{{ asset('font/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.rtl.only.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-float-label.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}" defer></script>
        <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('js/dore.script.js') }}" defer></script>
        <script src="{{ asset('js/scripts.js') }}" defer></script>

    </head>
    <body class="background show-spinner no-footer">

            {{ $slot }}

            <script type="text/javascript">
        function mostrarPassword(){
                var cambio = document.getElementById("password");
                if(cambio.type == "password"){
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                }else{
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
            } 
            
            $(document).ready(function () {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function () {
                $('#password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
        </script>
    </body>
</html>
