<?php

namespace App\Http\Controllers;

use App\Models\Random;
use App\Models\Breakdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class SpiralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Faker $faker)
    {
        $randomBreakdowns = Random::select('breakdowns.id','breakdowns.values', 'breakdowns.random_id')
            ->where('randoms.flag', false)
            ->join('breakdowns', 'breakdowns.random_id', '=', 'randoms.id')
            ->orderBy('breakdowns.random_id', 'asc')
            ->get();

        return response()->json([
            'randomBreakdowns' => $randomBreakdowns
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Faker $faker)
    {
        for ($randomItr=0; $randomItr < rand(5,10); $randomItr++) { 
            $name = $faker->word();

            $random = Random::create([
                'values' => $name,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

            for ($breakdownItr=0; $breakdownItr < rand(5,10); $breakdownItr++) { 
                $randomStr = Str::random(5);

                $breakdown = Breakdown::create([
                    'values' => $randomStr,
                    'random_id' => $random->id,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]);

            }
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
