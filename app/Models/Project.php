<?php

namespace App\Models;

use App\Traits\Uuid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\AccountContactRelation;


class Project extends Model
{
    use  HasFactory, Uuid,SoftDeletes;
    use AccountContactRelation;

    protected $table='projects';
    protected $fillable=['project_title','project_name','phone','email','description'];

    public function accounts()
    {
      return $this->belongsToMany(Account::class);
    }
    public function users()
    {
      return $this->belongsToMany(User::class);
    }
}
