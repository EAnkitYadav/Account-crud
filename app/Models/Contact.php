<?php

namespace App\Models;

use App\Traits\Uuid;
use App\Traits\AccountContactRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use  HasFactory, Uuid,SoftDeletes , AccountContactRelation;

    protected $table='contacts';
    protected $fillable=['company_name','phone_number','email','address','description'];

    public function accounts()
    {
     return $this->belongsToMany(Account::class);
    }
}
