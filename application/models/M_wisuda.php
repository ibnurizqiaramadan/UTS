<?php

class M_wisuda extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = 't_wisuda';
    }

    function getWisuda() {
        return $this->db->get('t_wisuda')->result();
    }

    function getWisudaByNoReg($noReg)
    {
        $this->db->where('no_reg', $noReg);
        return $this->db->get('t_wisuda')->row();
    }

    function insertUpdateWisuda()
    {
        $data = array(
            'nim' => $this->input->post('nim'), 
            'nama' => $this->input->post('nama'), 
            'alamat' => $this->input->post('alamat'), 
            'noTelp' => $this->input->post('notelp'), 
            'judulSkripsi' => $this->input->post('judul'), 
            'kodePemb' => $this->input->post('kode')
        );
        if (!$this->input->post('noreg')) {
            $this->db->insert($this->table, $data);
        } else {
            $no_reg = $this->input->post('noreg');
            $this->db->where('no_reg', $no_reg);
            $this->db->update($this->table, $data);
        }
    }

    function delete($id)
    {
        $this->db->where('no_reg', $id);
        $this->db->delete($this->table);
    }
}
