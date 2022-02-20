<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,600;0,900;1,400&display=swap"
            rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    </head>
    <body>

        <nav class="navbar navbar-light bg-transparent border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand text-bold" href="{{ url('/') }}">{{ config('app.name') }}</a>
            </div>
        </nav>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">APP</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Cadastrar</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <df-messenger intent="WELCOME" chat-title="Bicheiro" agent-id="82ec1f94-60db-479b-be98-0e3efb2e8607"
                language-code="pt-br"></df-messenger>

            </div>
        </div>
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>

        <script src="{{ asset("/js/manifest.js") }}"></script>
        <script src="{{ asset("/js/vendor.js") }}"></script>
        <script src="{{ asset("/js/app.js") }}"></script>

    </body>
</html>
