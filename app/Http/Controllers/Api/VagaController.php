<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Models\Vaga;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    public function __construct(Vaga $vaga){
        $this->vaga = $vaga;
    }

    public function index(){
        return response()->json($this->vaga->paginate(10));
    }

    public function show($id){
        $vaga = $this->vaga->find($id);
        if(! $vaga) return response()->json(['data' => ['msg' => 'Vaga não encontrada!']],404);
        $data  = ['data' => $vaga];
        return response()->json($data);
    }

    public function store(Request $request){
        try{
            $vagaData = $request->all();
            $this->vaga->create($vagaData);
            $return = ['data' => ['msg' => 'Vaga cadastrada com sucesso!']];
            return response()->json($return ,201);
        }catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(),1010));
            }
            return response()->json(ApiError::errorMessage("Erro ao cadastrar vaga!"));
        }
    }

    public function curtir($id){
        try{
            $vaga = $this->vaga->find($id);
            $vaga->curtidas = $vaga->curtidas + 1;
            $vaga->save();

            $return = ['data' => ['msg' => 'Vaga '.$id. ' curtida!']];

            return response()->json($return ,201);

        }catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(),1011));
            }
            return response()->json(ApiError::errorMessage("Erro ao curtir vaga!"));
        }
       
    } 
}
