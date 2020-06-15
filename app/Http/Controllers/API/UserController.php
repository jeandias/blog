<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public $successStatus = 200;

    /** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function details(Request $request)
    {
        $user = $request->user();
        return response()->json(['success' => $user], $this->successStatus);
    }
}
