<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BHR Administrator - @yield('page-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tiny.cloud/1/lycs6y383oj3czjlc5k1lms5lad4t9flzst2v1cqi5ojpg4y/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @yield('custom-styles')
    <style>
        * {
            font-family: 'Inter', sans-serif !important;
        }
    </style>
</head>

<body class="bg-white">
    @include('components.superadmin.navbar')
    <main>
        @yield('page-content')
    </main>
    @yield('custom-scripts')
    
</body>

</html>
