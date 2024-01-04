
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    @vite('resources/css/app.css')
    <style>
        summary {
            display: block; /* works in Firefox */
            list-style: none; /* works in Firefox */
          }

          summary::-webkit-details-marker {
            display: none; /* works in Chrome and Safari */
          }

          summary::marker {
            content: ""; /* works in Firefox */
          }

    </style>
    @yield('css')
</head>
<body class="bg-blue-200">

    @include('layout.header')


    @yield('content')


    @yield('js')


    @include('layout.footer')

</body>
</html>
