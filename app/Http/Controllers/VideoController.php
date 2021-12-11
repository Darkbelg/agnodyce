<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\VideoRequest;
use App\Service\Youtube\Search;
use App\Service\Youtube\Videos;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
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
        $searchResults = (new Search())->listSearch('id,snippet', $request->validated());

        return response()->json($searchResults);
    }

    public function show(Request $request,$video)
    {
        $videoDetails = (new Videos())->listVideos('statistics', ['id' => $video]);

        return response()->json($videoDetails->items[0]->statistics);
    }
}
