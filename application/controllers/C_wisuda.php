<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_wisuda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_wisuda');
    }

    function index(){
        $data = array(
            'title' => 'List data Wisuda', 
            'content' => 'wisuda/list',
            'wisuda' => $this->M_wisuda->getWisuda()
        );
        $this->load->view('wisuda/template', $data);
    }

    
    function add(){
        $data = array(
            'title' => 'Add data Wisuda',
            'content' => 'wisuda/add',
        );
        $this->load->view('wisuda/template', $data);
    }
    
    function edit($noreg)
    {
        $data = array(
            'title' => 'Edit data Wisuda',
            'content' => 'wisuda/edit',
            'data' => $this->M_wisuda->getWisudaByNoReg($noreg)
        );
        $this->load->view('wisuda/template', $data);
    }

    function insertUpdateWisuda(){
        $action = $this->uri->segment('1');
        echo $action;
        if ($action == 'insert') {
            $this->M_wisuda->insertUpdateWisuda();
        } else {
            $noreg = $this->input->post('no_reg');
            $this->M_wisuda->insertUpdateWisuda($noreg);
        }
        redirect(site_url());
    }

    function delete($id){
        $this->M_wisuda->delete($id);
        redirect(site_url());
    }
}
