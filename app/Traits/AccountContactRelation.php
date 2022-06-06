<?php
namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

trait AccountContactRelation{



    // protected static function bootUuid()
    // {
    //      static::saved(function($model){


    //     $modulename = class_basename($model);     //Account module

    //    // dd($modulename);

    //     $moduleconfig = "relation.".$modulename;    //relation.Account
    //     $data = config::get($moduleconfig);  //module name


    //     $tableall = request()->all();        //all data

    //     foreach($data as $module)
    //     {

    //         $tablefunction = $module["relationship_name"]; //accounts

    //         $recordId = $module["relationship_id"];
    //        // dd($model);
    //        // $recordIdDetach = $module["relationship_id"].'_detach';
    //        // dd($tablefunction);
    //         $object = $modulename::find($model->getKey());

    //         $object-> $tablefunction()->attach(request()->all($recordId));

    //         //dd($object);
    //     }

    // });
// }


}

?>
