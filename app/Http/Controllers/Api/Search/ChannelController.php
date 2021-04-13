<?php

namespace App\Http\Controllers\Api\Search;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChannelRequest;
use App\Http\Requests\VideoRequest;
use App\Service\Youtube\Search;
use Illuminate\Http\JsonResponse;

class ChannelController extends Controller
{
    /**
     * @param ChannelRequest $request
     * @return JsonResponse
     */
    public function index(ChannelRequest $request): JsonResponse
    {
        //TODO Look for a way you use middle ware to add the data key.
        return response()->json([
            "data" =>
                (new Search())->listSearch('id,snippet', $request->validated())
        ]);
    }
}
