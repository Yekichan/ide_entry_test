<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function listData(Request $request)
    {
        $query = School::get();
        $response = [
            'status' => 200,
            'message' => 'Ok',
            'data' => $query->toArray(),
        ];

        return response()->json($response, $response['status']);
    }

    public function getInauguratedSchool( $id)
    {
        $query = School::find($id);
        return response()->json([
            'status' => 200,
            'message' => 'Data Berhasil Di Ambil',
            'data' =>  $query

        ]);
        print_r($query);
        exit();
    }

    public function filterData(Request $request)
    {
        $query = School::get();
        $response = [
            'status' => 200,
            'message' => 'Ok',
            'data' => $query->toArray(),
        ];

        return response()->json($response, $response['status']);
    }



}
