<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthCheckController extends Controller
{
  /**
   * @param Request $request
   * @return JsonResponse
   */
  public function check(Request $request): JsonResponse
  {
      $user = $request->user();

      return new JsonResponse([
          'id' => $user->id,
          'name' => $user->name,
          'email' => $user->email,
      ]);
  }
}
