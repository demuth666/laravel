<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href={{asset('css/index.css');}}>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body>
   
    @include('layout.navbar')

   @include('layout.content')

    <script src={{asset('js/index.js');}}></script>
</body>
</html>