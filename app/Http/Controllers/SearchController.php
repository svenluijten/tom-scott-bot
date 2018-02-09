<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Youtube;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private const TOM_SCOTT_CHANNEL_ID = 'UCBa659QWEk1AI4Tg--mrJ2A';

    /**
     * @param \Illuminate\Http\Request $request
     * @param \Alaouy\Youtube\Youtube  $youtube
     *
     * @return array
     */
    public function __invoke(Request $request, Youtube $youtube)
    {
        $response = $youtube->searchChannelVideos($request->get('text'), self::TOM_SCOTT_CHANNEL_ID);

        if ($videoId = $response[0]->id->videoId ?? null) {
            return [
                'response_type' => 'in_channel',
                'text'          => 'https://www.youtube.com/watch?v='.$videoId,
            ];
        }

        return [
            'text' => ':disappointed: Sorry, I couldn\'t find a Tom Scott video by that search term!',
        ];
    }
}
