<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\User;
use Illuminate\Http\Request;

class DosenFRSController extends Controller
{
    //

    public function hitung(){

    }


    public function index(){
        return view('dosen.frs.index',[
            'title' => 'FRS',
            'users'=>User::all()
        ]);
    }

    public function show($nrp){
        $user=User::where('nrp',$nrp)->first();
        $scores=$user->score->load('user','course')->where('tahun',2022);
        return view('dosen.frs.show',[
            'title' => 'Detail FRS',
            'user'=>$user,
            'scores'=>$scores
    ]);
    }



    public function search(Request $request,$id){
        $user=User::find($id);
        // $user=User::find(1);
        $periode=$request->periode;
        $tahun=$request->tahun;
        // $scores=$user->score->load('user','course')->where('tahun',2021);
        $scores=$user->score->load('user','course')->where('periode',$periode)->where('tahun',$tahun);
        return view('dosen.frs.show',[
            'title' => 'Detail FRS',
            'user'=>$user,
            'scores'=>$scores
        ]);
    }


    public function accept(Request $request,$id){
        User::find($id)->update([
            'status_frs'=>true
        ]);
        return redirect()->back();
    }


}