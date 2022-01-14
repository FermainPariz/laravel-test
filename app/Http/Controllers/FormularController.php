<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularController extends Controller
{

public function formularAuswerten(Request $request) {


  $this->validate($request,
    [
      'username' => '',
      'email' => ''

    ]
  );

return "Erfolg";

}

}
