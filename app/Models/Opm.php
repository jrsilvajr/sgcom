<?php

namespace sgcom\Models;

use Illuminate\Database\Eloquent\Model;

class Opm extends Model
{
    protected $table = 'opm';

    public function search(Array $dataForm, $totalPage)
    {
    //$retorno =
     return 
     $this->where(function($query) use ($dataForm){
        if(isset($dataForm['opm_sigla'])){
            $query->where('opm_sigla','LIKE','%' .$dataForm['opm_sigla'].'%');
        }    
    })
    ->paginate($totalPage);
   // ->toSql();
    //dd($retorno);
    
    }

    public function cpr(){
        return $this->belongsTo(Cpr::class);
    }
}
