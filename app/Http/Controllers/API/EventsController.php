<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;


class EventsController extends Controller
{
    public function hello()
    {
        $data = [
            'hello' => 'World',
            'title' => 'event',
        ];
        return response()->json($data, 200);
    }


    public function fetchdata()
    {
        $url = Http::get('https://api.restful-api.dev/objects');
        $data = $url->json();
        return response()->json($data);
    }

    public function fetchdatabyid($id)
    {
        $url = Http::get("https://api.restful-api.dev/objects/{$id}");
        $data = $url->json();

        if ($url->successful()) {
            return response()->json($data);
        } else {
            return response()->json(['message' => 'Data not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'address' => ['required']
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 404);
        }
        ;
        p($request->all());
    }


    //     'hello' => 'World'

    // return response()->json($data, 200);
}

