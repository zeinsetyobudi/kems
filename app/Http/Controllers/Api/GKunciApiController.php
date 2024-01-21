<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KunciResource;
use App\Models\GKunci;
use App\Models\Mitra;
use App\Helpers\HelperFunctions;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GKunciApiController extends Controller
{
    public function index(){
        $kuncis = GKunci::all();
        return response()->json(['data' => KunciResource::collection($kuncis)], 200);
    }

    public function getKunciSentral(Request $request){
        $kuncis = GKunci::where('id_sentral', $request->idSentral)->get();

        return response()->json($kuncis, 200);
    }
}
