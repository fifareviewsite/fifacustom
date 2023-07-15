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
            "data" => [
                [
                    "id" => true,
                    "formation" => 4312,
                    "title" => "CF20連勝達成フォーメーション",
                    "create_date" => "2023/07/13",
                    "contents" => [
                        "position1" => [
                            "role" => "ST1",
                            "five_flg" => true,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                            "select_5" => "オーバーライド",
                        ],
                        "position2" => [
                            "role" => "ST2",
                            "five_flg" => true,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                            "select_5" => "オーバーライド",
                        ],
                        "position3" => [
                            "role" => "CAM",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position4" => [
                            "role" => "CM1",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position5" => [
                            "role" => "CM2",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position6" => [
                            "role" => "CM3",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position7" => [
                            "role" => "LB",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position8" => [
                            "role" => "RB",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position9" => [
                            "role" => "CB1",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position10" => [
                            "role" => "CB2",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                    ],
                ],
                [
                    "id" => 2,
                    "formation" => 343,
                    "title" => "CF20連勝達成フォーメーション",
                    "create_date" => "2023/07/13",
                    "contents" => [
                        "position1" => [
                            "role" => "LW",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position2" => [
                            "role" => "RW",
                            "five_flg" => true,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                            "select_5" => "オーバーライド",
                        ],
                        "position3" => [
                            "role" => "ST",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position4" => [
                            "role" => "LM",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position5" => [
                            "role" => "CM1",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position6" => [
                            "role" => "CM2",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position7" => [
                            "role" => "RM",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position8" => [
                            "role" => "CB1",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position9" => [
                            "role" => "CB2",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                        "position10" => [
                            "role" => "CB3",
                            "five_flg" => false,
                            "select_1" => "ワイドに開く",
                            "select_2" => "裏に抜ける",
                            "select_3" => "前線に留まる",
                            "select_4" => "攻撃時に上がらない",
                        ],
                    ],
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
