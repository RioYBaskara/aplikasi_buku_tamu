<?php

namespace App\Controllers;

use App\Models\tamuModel;

class Tamu extends BaseController{
    public function index(){
        $tamu_model = new TamuModel();
        $all_data_tamu = $tamu_model->finAll();
        return view('tamu', ['all_data_tamu' => $all_data_tamu]);
    }
}