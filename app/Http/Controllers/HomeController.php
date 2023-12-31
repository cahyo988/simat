<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $anakMagang = DB::table('tblPemagang')->get();
        return view('magang.home', ['magang' =>$anakMagang]);
    }
 
    public function supervisorHome()
    {
        return view('supervisor.home');
    }
}