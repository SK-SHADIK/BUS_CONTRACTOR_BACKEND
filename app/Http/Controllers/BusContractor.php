<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BusContractor;

use Illuminate\Http\Request;
use App\Models\TransactionHistory;
use App\Models\Bus;

class BusContractor extends Controller
{
    //-----------------------DASHBOARD---------------------------
    function Dashboard(){
        $con=TransactionHistory::all();
        return response()->json($con);
    }
    //-----------------------Transaction---------------------------

    function TransactionView(){
        $con=TransactionHistory::all();
        return response()->json($con);
    }
    function CreateTransaction(){

        return response()->json();

    }
    function AddTransaction(Request $request){
        
        $a = new TransactionHistory();
        $a->t_pname= $request->t_pname;
        $a->t_amount= $request->t_amount;
        $a->t_method= $request->t_method;
        $a->save();

        return response()->json(["data"=>$a]);
    }
    function StoreTransaction($t_id){
        
        $data = TransactionHistory::find($t_id);
        return response()->json($data);
    }
    function UpdateTransaction(Request $req){
        $a = TransactionHistory::find($req->t_id);
        $a->t_pname = $req->t_pname;
        $a->t_amount = $req->t_amount;
        $a->t_method = $req->t_method;
        $a->save();

        return response()->json(["data"=>$a]);
    }
    function DeleteTransaction(Request $request){
        $t_id=$request->id;
        $data = TransactionHistory::where('t_id',$t_id)->first();
        $data->delete();

        return response()->json($data);

    }
    function Profile (Request $req){
        $c_id=$req->id;
        $data = Bus::where('c_id', $c_id)->first();
        return response()->json($data);
    }
    function ProfileUpdate (Request $req){
        $data = Bus::find( $req->c_id);
        $data->c_name = $req->c_name;
        $data->c_mail = $req->c_mail;
        $data->c_pass = $req->c_pass;
        $data->c_add = $req->c_add;  
        $data->save();

        return response()->json(["data"=>$data]);      
    }

}
