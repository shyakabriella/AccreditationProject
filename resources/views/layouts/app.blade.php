<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>Accreditation</title>
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    </head>
    <body>
        <div id="root">
            <div class="flex flex-col flex-auto app-layout-modern">
                <div class="flex flex-auto min-w-0">
                    @include('inc.sidebar')
                    <div class="relative flex flex-col flex-auto w-full min-w-0 min-h-screen bg-white border-l border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        @include('inc.header')
                        <div class="flex flex-col justify-between flex-auto h-full">
                            <main class="h-full">
                                <div class="relative flex flex-col flex-auto h-full px-4 py-4 page-container sm:px-6 md:px-8 sm:py-6">
                                    @yield('content')
                                </div>
                            </main>
                            @include('inc.footer')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ url('js/vendors.min.js') }}"></script>
        <script src="{{ url('js/app.min.js') }}"></script>
    </body>

</html>
