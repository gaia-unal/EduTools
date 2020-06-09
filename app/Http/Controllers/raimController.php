<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class raimController extends Controller
{
    public function session_create(Request $request)
    {
      return response()->json($request->all());
    }
    public function session_update(Request $request)
    {
      # code...
      return response()->json($request->all());
    }
    public function session_delete(Request $request)
    {
      # code...
      return response()->json($request->all());
    }
}
