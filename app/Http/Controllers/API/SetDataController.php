<?php

namespace App\Http\Controllers\API;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetDataController extends Controller
{
    private $modelPath;
    private $modelRepo;


    public function __construct(Request $request)   
    {
        if(isset($request->module_name))
        {
            $this->modelPath = 'App\\Interfaces\\'.$request->module_name. 'RepositoryInterface';
            //dd('fff');
            $this->modelRepo = App::make($this->modelPath);

        }

    }

    public function create(Request $request)
    {
        $input = $request->input_request;
        $data = $this->modelRepo->create($input);
        $data_without_id = $data->makeHidden(['id']);
        return response()->json(['module_name'=>$request->module_name,'id'=> $data['id'],'data'=> $data_without_id]);
    }

     public function index(Request $request)
      {
        $data = $this->modelRepo->all();
        return response()->json(['module_name'=>$request->module_name,'data'=> $data]);
      }
    public function show(Request $request)
    {
        $data = $this->modelRepo->find($request->id);
        $data_without_id = $data->makeHidden(['id']);
        return response()->json(['module_name'=>$request->module_name,'id'=> $data['id'], 'data'=> $data_without_id]);

    }

    public function update(Request $request)
    {
         $input = $request->input_request;
         $data =  $this->modelRepo->update($request->id,$input);
         $data_without_id = $data->makeHidden(['id']);

        return response()->json(['module_name'=>$request->module_name,'id'=>$request->id,'data'=> $data_without_id]);
    }
    public function delete(Request $request)
    {
         $data = $this->modelRepo->delete($request->id);
         return response()->json(['module_name'=>$request->module_name,'id'=>$request->id,'data'=>$data]);

    }
}
