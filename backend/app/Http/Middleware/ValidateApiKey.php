<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * Middleware to validate API Key in incoming requests.
 */
class ValidateApiKey
{
  /**
   * Handle an incoming request.
   *
   * @param \Illuminate\Http\Request $request
   * @param \Closure $next
   * @return JsonResponse|Response
   */
  public function handle(Request $request, Closure $next): JsonResponse|Response
  {
    // Retrieve the 'X-API-KEY' header from the incoming HTTP request.
    $apiKey = $request->header('X-API-KEY');

    // Compare the retrieved API key with the expected API key defined in the environment file (.env).
    if ($apiKey !== env('API_KEY')) {
      // If the API key is invalid or missing, return a 401 Unauthorized response with an error message.
      return response()->json(['error' => 'Invalid API Key'], 401);
    }

    // If the API key is valid, allow the request to proceed to the next middleware or controller.
    $response = $next($request);

    // Ensure that the response is a JsonResponse instance.
    if (!($response instanceof JsonResponse)) {
      // If the response is not a JsonResponse, wrap it in one.
      $response = response()->json($response);
    }

    return $response;
  }
}
