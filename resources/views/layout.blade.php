<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <title>Tom Scott Slack Bot</title>
    </head>

    <body class="bg-grey-lightest text-grey-darkest">
        <div class="max-w-xl mx-auto my-8 px-4">
            @yield('content')

            <div class="flex md:flex-row flex-col mt-2">
                <a href="/" class="pill m-2 flex-1">Home</a>
                <a href="/support" class="pill m-2 flex-1">Support</a>
                <a href="/privacy" class="pill m-2 flex-1">Privacy</a>
            </div>
        </div>
    </body>
</html>
