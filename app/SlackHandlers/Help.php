<?php

namespace App\SlackHandlers;

use Spatie\SlashCommand\Handlers\BaseHandler;
use Spatie\SlashCommand\Request;
use Spatie\SlashCommand\Response;

class Help extends BaseHandler
{
    public function canHandle(Request $request): bool
    {
        return strtolower($request->text) === 'help';
    }

    public function handle(Request $request): Response
    {
        return Response::create($request)
            ->withText('Type `/tomscott <search term>` to search Tom Scott\'s YouTube channel. Having trouble? Tweet me @svenluijten!')
            ->displayResponseToUserWhoTypedCommand();
    }
}
