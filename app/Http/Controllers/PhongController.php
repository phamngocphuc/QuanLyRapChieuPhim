<?php

namespace App\Http\Controllers;

use App\Models\Ghe;
use App\Models\Phong;
use Illuminate\Http\Request;

class PhongController extends Controller
{

    public function index()
    {
        return view('Page.Phong.index');
    }

    public function store(Request $request){
        $new_phong = Phong::create([
            'ten_phong'     => $request->ten_phong,
            'tinh_trang'    => $request->tinh_trang,
            'hang_ngang'    => $request->hang_ngang,
            'hang_doc'      => $request->hang_doc,


        ]);

        for($dong = 1; $dong <= $request->hang_ngang; $dong++){
            $chu = chr($dong + 64);
            for($cot = 1; $cot <= $request->hang_doc; $cot++){
                Ghe::create([
                    'ten_ghe'       => ($chu . $cot),
                    'tinh_trang'    => 1,
                    'id_phong'      => $new_phong->id,
                ]);
            }
        }
    }
}
