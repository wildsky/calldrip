<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    // Returns a random fox image from API
    public function showRandomFox() {

        $foxAPIUrl = env('FOX_API_URL');
        $response = Http::get($foxAPIUrl);
        $responseObj = json_decode($response);

        if ($response->failed()) {
            // return failure, handle more gracefully.
            return "Oops.";
        } else {
            // return success
            $beeceptorAPIUrl = env('BEECEPTOR_API_URL');

            $response = Http::post($beeceptorAPIUrl, [
                'foxImg' => $responseObj->image,
                'link' => $responseObj->link,
            ]);

            return view("fox", ["imgUrl"=>$responseObj->image]);
        }
    }
}
