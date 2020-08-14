<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue JS Multiple Image Upload Using vue-dropzone Example - Tutsmake.com</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
            <multiple-image-component></multiple-image-component>
        </div>
        <script src="{{asset('js/app.js')}}" ></script>
    </body>
</html>