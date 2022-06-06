<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\VideoRequest;
use App\Service\Youtube\Search;
use App\Service\Youtube\Videos;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    /**
     * @param VideoRequest $request
     * @return Response|JsonResponse
     */
    public function index(SearchRequest $request)
    {
        $searchResults = Cache::remember(Hash::make(implode($request->validated())), 60 * 5,
            function () use ($request) {
                return (new Search())->listSearch('id,snippet', $request->validated());
            });
        return response()->json($searchResults);
    }

    public function show(Request $request, $videoId)
    {
        $videoDetails = Cache::remember($videoId, 60 * 5,
            function () use ($videoId) {
                return (new Videos())->listVideos('statistics', ['id' => $videoId]);
            });

        return response()->json($videoDetails->items[0]->statistics);
    }
}
