<?php

namespace App\Models;

use App\Traits\Uuid;
use App\Traits\AccountContactRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
   use  HasFactory, Uuid,SoftDeletes,AccountContactRelation;
    protected $table='accounts';
    protected $fillable=['name','first_name','last_name','dob','phone','email','address','hobby','gender','state','country'];

    public function setHobbyAttribute($value){
    $this->attributes['hobby'] = implode(',', $value);
    }
    public function projects()
    {
      return $this->belongsToMany(Project::class);
    }
    public function contacts()
    {
      return $this->belongsToMany(Contact::class);

    }

}
