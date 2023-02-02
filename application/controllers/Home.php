<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Shuchkin\SimpleXLSX;

class Home extends CI_Controller{


    public function index(){
        $this->load->view('home');
    }

    public function import(){
        if (!empty($_FILES['planilha'])){
            if ( $xlsx = SimpleXLSX::parse($_FILES["planilha"]['tmp_name']) ) {
                $data = [
                    'data' => $xlsx->rows()
                ];
                $this->load->view('list',$data);
            }else{
                echo SimpleXLSX::parseError();
            }
        }
    }
}