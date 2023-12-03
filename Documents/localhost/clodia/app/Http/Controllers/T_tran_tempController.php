<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\TTranTemp;
use DataTables;

class T_tran_tempController extends Controller
{
    //
    public function index()
    {
        return view('clodia.index');
    }
    public function clodia(){
        if(\request()->ajax()){
            $data = TTranTemp::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    // $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>
                    //                 <a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>';
                    $actionBtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">View</a>
                                    <a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('clodia.index');
    }
}
