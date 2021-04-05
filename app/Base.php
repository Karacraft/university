<?php

namespace App;

use Carbon\Carbon;
use \App\Constants;
use DateTimeInterface;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Base extends Model
{
    use HasFactory;

    //  Route Binding - Learn More : https://laravel.com/docs/7.x/routing#explicit-binding
    public function getRouteKeyName(){return 'slug';}
    //***************** Setters ***********************************/
    //  Set Slug Value
    public function setSlugAttribute($value)
    {
        $str = preg_replace("'@[^A-Za-z0-9\w\ ]@'", "", $value);
        $this->attributes['slug']= Str::slug($str,'_');
    }
    //  Set Name to Proper Case
    // public function setNameAttribute($value){$this->attributes['name'] = \ucwords($value);}
    // public function setCreatedAtAttribute($value){$this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s',$value);}
    protected function serializeDate(DateTimeInterface $date){return $date->format('d-m-Y H:i:s');}
    //***************** Getters ***********************************/
    public function getCreatedAtAttribute($value){return Carbon::createFromFormat('d-m-Y H:i:s',$value)->format('d-m-Y H:i:s');}
    public function getUpdatedAtAttribute($value){return Carbon::createFromFormat('d-m-Y H:i:s',$value)->format('d-m-Y H:i:s');}
}
