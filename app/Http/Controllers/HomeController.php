<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function thongtin() {
        return view('user.info');
    }

    public function showData(Request $request){
        $name = $request->name;
        $birthday = $request->birthday;
        $gender = $request->gender;

        // [$tokens, $name, $birthday, $gender] = $request->all();
        return view('user.user-info', compact('name', 'birthday', 'gender'));
    }
    public function tinhtoan() {
        return view('b2.tinh-toan');
    }
    public function showKQ(Request $request){
        $soa=$request->soa;
        $sob=$request->sob;
        $soc=$request->soc;
        $tong=(($soa*$sob)-($soc)*($soc));
        return view('b2.ket-qua',compact('tong'));
    }

}
