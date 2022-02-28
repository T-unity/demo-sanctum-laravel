<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

  protected function getGuard()
  {
      return Auth::guard(config('auth.defaults.guard'));
  }

  public function login(Request $request)
  {
      $credentials = $request->validate([
          'email' => 'required|email',
          'password' => 'required'
      ]);

      if (Auth::attempt($credentials)) {
          return response()->json(['message' => 'Login successful'], 200);
      }

      throw ValidationException::withMessages([
          'email' => ['The provided credentials are incorrect'],
      ]);
  }

  // public function logout(Request $request)
  public function logout(Request $request)
  {

    // Auth::guard('web')->logout();

    // $request->session()->invalidate();
    // $request->session()->regenerateToken();

  //   $credentials = $request->validate([
  //     'email' => 'required|email',
  //     'password' => 'required'
  // ]);

    // Auth::logout($credentials);

    // $this->getGuard()->logout();
    // $request->session()->invalidate();
    // $request->session()->regenerateToken();

    Auth::logout();
      return response()->json(['message' => 'Logged out'], 200);
  }
}
