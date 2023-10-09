<?php

namespace App\Http\Controllers;

use stdClass;
use Carbon\Carbon;
use App\Models\User;
use App\Models\StokFF;
use App\Models\StokJubelio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\warehouse_locations;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

/**
 * Summary of DashboardController
 */
class DashboardController extends Controller
{
    public function index()
    {
        $datausers = DB::table('users')->paginate(5);
        return view('dashboard', compact('datausers'));
    }

    public function edit($id)
    {
         $datausers = User::find($id);
        return view('user.edit',compact('datausers'));
    }

    public function update(Request $request, $id)
    {
        $datausers = User::find($id);
        $datausers->update($request->all());
        return redirect('/Users')->with('edit', 'Data Berhasil Di Edit');
    }
    public function delete($id)
    {
         $datausers = User::where('id','=',$id)->first();
        // dd($dataBiodata);
        $datausers->delete();
        return redirect('/Users');
    }

}
