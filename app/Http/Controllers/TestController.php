<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\support\Facades\DB;

class TestController extends Controller
{
  // Eloquent
  public function index(){
    $values = Test::all();
    $count = Test::count();
    $first = Test::findOrFail(1);
    $whereAAA = Test::where('text', '=', 'aaa');

    //クエリビルダ
    $queryBuilder = DB::table('tests')->where('text', '=', 'aaa')
    ->select('id', 'text')
    ->get();

    dd($values, $count, $first, $whereAAA ,$queryBuilder)->get();
    return view('tests.test', compact('values'));
  }
}
