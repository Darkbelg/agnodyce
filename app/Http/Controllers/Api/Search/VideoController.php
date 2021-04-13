<?php

namespace App\Http\Controllers\Api\Search;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Service\Youtube\Search;
use Illuminate\Http\JsonResponse;

class VideoController extends Controller
{
    /**
     * @param VideoRequest $request
     * @return JsonResponse
     */
    public function index(VideoRequest $request): JsonResponse
    {
        $search = new Search();
        //TODO Look for a way you use middle ware to add the data key.
        return response()->json([
            "data" =>
                $search->listSearch('id,snippet', $request->validated())
        ]);
    }
}
