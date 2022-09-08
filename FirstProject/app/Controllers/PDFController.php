<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserInfo;

class PDFController extends BaseController
{
    public function index($view=null)
    {
        //
        $userModel = new UserInfo();
        $dompdf = new \Dompdf\Dompdf(); 
        $data = [
            'users' => $userModel->orderBy('id', 'ASC')->findAll(),
        ];
        if($view == 'print') {
            $dompdf->loadHtml(view('user/print', $data));
            $dompdf->setPaper('A4', 'landscape');
            return view('user/print', $data);
        }
        elseif ($view == 'pdf') {
            
            $dompdf->loadHtml(view('user/print', $data));
            $dompdf->setPaper('A4', 'landscape');
            // return $dompdf->download('list.pdf');
            $dompdf->render();
            return $dompdf->stream('Doc'.'.pdf');
        }
        // $dompdf = new \Dompdf\Dompdf(); 
        // $dompdf->loadHtml(view('pdf_view'));
        // $dompdf->setPaper('A4', 'landscape');
        // $dompdf->render();
        // $dompdf->stream();



        // echo "<pre>";
        // print_r($data['users']);
        // exit;
        return view('user/print', $data);
    }
}
