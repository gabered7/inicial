<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class contatoController extends Controller
{
    public function enviaContato(Request $request)
    {
      Mail::to('gabrielalmendes777@gmail.com')->send(new ContatoEmail($request));
    }
}
