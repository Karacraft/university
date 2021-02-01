<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assembly extends Model
{
    protected $table = 'assemblies';
    // public $id = 'batch_number';
    public $dates = ['created_at','updated_at','production_date'];

    protected $fillable = [
        'assembly_name',
        'batch_number',
        'created_at',
        'mold',
        'mold_id',
        'planned_qty',
        'produced_qty',
        'production_date',
        'shift',
        'shift_id',
        'skilled',
        'supervisor',
        'unskilled'
    ];

}
