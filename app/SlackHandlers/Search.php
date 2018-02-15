<?php

namespace App\SlackHandlers;

use Alaouy\Youtube\Youtube;
use Spatie\SlashCommand\Handlers\BaseHandler;
use Spatie\SlashCommand\Request;
use Spatie\SlashCommand\Response;

class Search extends BaseHandler
{
    public function canHandle(Request $request): bool
    {
        return true;
    }

    public function handle(Request $request): Response
    {
        try {
            $youtube = new Youtube(config('youtube.key'));
        } catch (\Exception $e) {
            return Response::create($request)
                ->withText('I\'m having some trouble searching YouTube right now, contact me on Twitter? @svenluijten.')
                ->displayResponseToUserWhoTypedCommand();
        }

        $response = $youtube->searchChannelVideos($request->get('text'), 'UCBa659QWEk1AI4Tg--mrJ2A');

        if ($videoId = $response[0]->id->videoId ?? null) {
            return Response::create($request)
                ->withText('https://www.youtube.com/watch?v='.$videoId)
                ->displayResponseToEveryoneOnChannel();
        }

        return Response::create($request)
            ->withText(':disappointed: Sorry, I couldn\'t find a Tom Scott video by that search term!')
            ->displayResponseToUserWhoTypedCommand();
    }
}
