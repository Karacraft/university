<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1/'], function () {
    Route::post('production',function(Request $request){
        // Log::info($request->all());
        $d = $request->input();
        Log::Info($d);
        $asm = \App\Assembly::where('batch_number',$d['batch_number'])->first();
        if($asm != null)
            return response()->json(0);


        \App\Assembly::create([
            'assembly_name' => $d['assembly_name'],
            'batch_number' => $d['batch_number'],
            'mold' => $d['mold'],
            'mold_id' => $d['mold_id'],
            'planned_qty' => $d['planned_qty'],
            'produced_qty' => $d['produced_qty'],
            'shift' => $d['shift'],
            'shift_id' => $d['shift_id'],
            'supervisor' => $d['supervisor'],
            'skilled' => $d['skilled'],
            'unskilled' => $d['unskilled'],
            'production_date' => date('Y-m-d h:m:s',strtotime($d['production_date'])),
            'created_at' => date('Y-m-d h:m:s',strtotime($d['created_at'])),
            'updated_at' => Carbon\Carbon::now()
        ]);

        // Log::Info($d);
        // $c = collect($d);
        // Log::Info($c);
        // Log::Info(count($c));
        // $batchnubmers = [];
        // for ($i=0; $i < count($c) ; $i++) {
        //     Log::critical($c[$i]['batch_number']);
        //     array_push($batchnubmers,$c[$i]['batch_number']);
        // }
        // Log::critical(json_encode($batchnubmers));
        // $data = [ 'status'=> false, 'message' => 'failure','code' => 200 , 'batchnumbers' => $batchnubmers ];
        return response()->json(1);
    });

    Route::get('create',function(){
        return \App\Assembly::create([
            'assembly_name' => 'Lamp Assembly',
            'batch_number' => '20040002',
            'mold' => 'MOLD',
            'mold_id' => 1,
            'planned_qty' => 200,
            'produced_qty' => 0,
            'shift' => 'Shift',
            'shift_id' => 1,
            'supervisor' => 0,
            'skilled' => 0,
            'unskilled' => 0,
            'production_date' => date('Y-m-d h:m:s',strtotime('2020-07-14T09:02:08.000000Z')),
            'created_at' => date('Y-m-d h:m:s',strtotime('2020-07-14T09:02:08.000000Z')),
            'updated_at' => Carbon\Carbon::now()
        ]);

    });

    Route::get('display',function(){
        // $asms = \App\Assembly::all();
        // return $asms;
        $asms = "
        SELECT * FROM (
            SELECT
            id,
            batch_number,
            assembly_name,
            mold,
            mold_id,
            planned_qty,
            produced_qty,
            shift,
            shift_id,
            production_date,
            created_at,
            updated_at
            FROM assemblies
            ORDER BY id DESC LIMIT 96
        ) Var4 ORDER BY id ASC
        ";

        return  DB::select($asms);
    });
});

