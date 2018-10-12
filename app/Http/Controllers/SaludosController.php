<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludosController extends Controller
{
    public function saludoPersonal ($name, $lastname = null) {
          return ('hello asshole ' . $name . ' ' . $lastname);
      }
}
