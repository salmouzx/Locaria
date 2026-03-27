<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class GoogleAuthController extends Controller
{
    // Mengarahkan user ke halaman login Google
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // Menangani callback dari Google
    public function callback()
{
    // HAPUS ATAU COMMENT BARIS TRY DAN CATCH
    // try {
        
        $googleUser = Socialite::driver('google')->user();

        // Ganti ->email menjadi ->getEmail()
        // Ganti ->id menjadi ->getId()
        $user = User::where('email', $googleUser->getEmail())->orWhere('google_id', $googleUser->getId())->first();

        if ($user) {
            $user->update(['google_id' => $googleUser->getId()]);
            Auth::login($user);
        } else {
            $user = User::create([
                // Gunakan fungsi getter
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => null 
            ]);
            Auth::login($user);
        }

        return redirect()->intended('/dashboard');

    // } catch (Exception $e) {
    //    return redirect('/login')->with('error', 'Gagal login menggunakan Google.');
    // }
}
}