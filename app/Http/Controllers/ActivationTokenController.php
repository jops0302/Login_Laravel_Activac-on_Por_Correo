<?php

namespace App\Http\Controllers;

use App\ActivationToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivationTokenController extends Controller
{
    public function activate(ActivationToken $token)
    {
        // $token->user->update(['active' => true]);

        // Auth::login($token->user);

        
        $token->user->activate();
        
        return redirect('home')->withInfo('Tu cuenta a sido activada');
    }
}
