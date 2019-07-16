<?php

namespace sgcom\Http\Controllers\Admin;

use Illuminate\Http\Request;
use sgcom\Http\Controllers\Controller;
use sgcom\Models\Aisp;

class AispController extends Controller
{
    private $totalPage = 15;

    public function index()
    {
      //  dd( auth()->user());

      // dd(BD::Opm::class)

      $aisps = Aisp::paginate($this->totalPage);

        return view('admin.aisp.index', compact('aisps'));
    }

   public function searchAisp(Request $request, Aisp $aisp)
   {
     // dd($request->all());
     $dataForm = $request->all();

     $aisps =  $aisp->search($dataForm, $this->totalPage);

     return view('admin.aisp.index', compact('aisps'));
   }
}
