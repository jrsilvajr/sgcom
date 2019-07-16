<?php

namespace sgcom\Http\Controllers\Admin;

use Illuminate\Http\Request;
use sgcom\Http\Controllers\Controller;
use sgcom\Models\Cpr;

class CprController extends Controller
{
    private $totalPage = 15;

    public function index()
    {
      //  dd( auth()->user());

      // dd(BD::Opm::class)

      $cprs = Cpr::paginate($this->totalPage);

        return view('admin.cpr.index', compact('cprs'));
    }

}
