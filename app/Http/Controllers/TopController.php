<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $formation = Formation::all();
        $formation_data = [
            "post" => [
                [
                    "id" => 1,
                    "formation" => 4312
                ],
                [
                    "id" => 2,
                    "formation" => 343
                ]
            ]
        ];
        return response()->json(
            $formation_data,200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formation = Formation::create($request->all());
        return response()->json(
            $formation, 201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = [
            'title' => $request->title,
            'formation' => $request->formation
        ];
        $formation = Formation::where('id', $id)->update($update);
        $formations = Formation::all();
        if ($formation) {
            return response()->json(
                $formations
            , 200);
        } else {
            return response()->json([
                'message' => 'formation not found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formation = Formation::where('id', $id)->delete();
        if ($formation) {
            return response()->json([
                'message' => 'Formation deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Formation not found',
            ], 404);
        }
    }
}
