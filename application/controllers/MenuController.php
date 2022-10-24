<?php

class MenuController extends CI_Controller
{
    public function index(){
        $this->load->view('welcome_message');
    }
    public function fileimage(){
        $this->load->view('halaman_fileimage');
    }
}