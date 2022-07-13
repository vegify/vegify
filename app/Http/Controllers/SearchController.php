<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Recipe;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(
            data: Recipe::search(
                query: trim($request->get('search')) ?? '',
            )->get(),
            status: Response::HTTP_OK,
        );
    }
}
