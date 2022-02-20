<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alfred</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
            background-color: #636b6f;
            color: #fff;
            font-family: 'Lato', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            }
            iframe {
            border: 0;
            height: 100vh;
            }
        </style>
    </head>
    <body>
        <iframe allow="microphone;" width="100%" height="800"
            src="https://console.dialogflow.com/api-client/demo/embedded/82ec1f94-60db-479b-be98-0e3efb2e8607">
        </iframe>
    </body>
</html>
