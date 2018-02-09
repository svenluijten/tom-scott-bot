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
            <h1 class="font-bold text-black mb-4 text-4xl">Tom Scott Bot</h1>

            @if (session()->has('message'))
                <div class="bg-green-lightest p-4 inline-block border border-green-lighter rounded shadow mb-2">
                    <p class="font-bold text-green">{{ session('message') }}</p>
                </div>
            @endif

            <p class="leading-normal text-lg">
                Click the button below to add the <i>Tom Scott Bot</i> to your Slack team. This will add a <code class="text-red bg-grey-lighter border rounded border-red-lighter px-2">/tomscott &lt;search term&gt;</code>
                command to search <a href="https://www.youtube.com/user/enyay" target="_blank">Tom Scott's YouTube channel</a> for videos related
                to your search term(s).
            </p>

            <blockquote class="p-6 my-4 bg-grey-light border-l-8 border-red-dark">
                The Slack bot and this website are not owned by and/or in any way affiliated with <a href="https://www.tomscott.com/">Tom Scott</a>.
            </blockquote>

            <a class="block my-4 no-style" href="https://slack.com/oauth/authorize?scope=commands&client_id={{ config('services.slack.client_id') }}&redirect_uri={{ config('services.slack.redirect_uri') }}">
                <img alt="Add to Slack"
                     height="40"
                     width="139"
                     src="https://platform.slack-edge.com/img/add_to_slack.png"
                     srcset="https://platform.slack-edge.com/img/add_to_slack.png 1x, https://platform.slack-edge.com/img/add_to_slack@2x.png 2x"
                />
            </a>

            <img src="" alt="A screenshot of the command at work">

            <div class="flex md:flex-row flex-col mt-2">
                <a href="#" class="pill m-2 flex-1">Home</a>
                <a href="#" class="pill m-2 flex-1">Support</a>
                <a href="#" class="pill m-2 flex-1">Privacy</a>
            </div>
        </div>
    </body>
</html>
