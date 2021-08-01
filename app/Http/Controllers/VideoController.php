<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\VideoRequest;
use App\Service\Youtube\Search;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
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
}
