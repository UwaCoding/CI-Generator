<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Orang extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Orang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $orang = $this->Orang_model->get_all();

        $data = array(
            'orang_data' => $orang
        );

        $this->template->load('template','orang_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Orang_model->get_by_id($id);
        if ($row) {
            $data = array(
		'orang_id' => $row->orang_id,
		'nama_orang' => $row->nama_orang,
		'alamat_orang' => $row->alamat_orang,
	    );
            $this->template->load('template','orang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('orang'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('orang/create_action'),
	    'orang_id' => set_value('orang_id'),
	    'nama_orang' => set_value('nama_orang'),
	    'alamat_orang' => set_value('alamat_orang'),
	);
        $this->template->load('template','orang_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_orang' => $this->input->post('nama_orang',TRUE),
		'alamat_orang' => $this->input->post('alamat_orang',TRUE),
	    );

            $this->Orang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('orang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Orang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('orang/update_action'),
		'orang_id' => set_value('orang_id', $row->orang_id),
		'nama_orang' => set_value('nama_orang', $row->nama_orang),
		'alamat_orang' => set_value('alamat_orang', $row->alamat_orang),
	    );
            $this->template->load('template','orang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('orang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('orang_id', TRUE));
        } else {
            $data = array(
		'nama_orang' => $this->input->post('nama_orang',TRUE),
		'alamat_orang' => $this->input->post('alamat_orang',TRUE),
	    );

            $this->Orang_model->update($this->input->post('orang_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('orang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Orang_model->get_by_id($id);

        if ($row) {
            $this->Orang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('orang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('orang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_orang', 'nama orang', 'trim|required');
	$this->form_validation->set_rules('alamat_orang', 'alamat orang', 'trim|required');

	$this->form_validation->set_rules('orang_id', 'orang_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "orang.xls";
        $judul = "orang";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Orang");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat Orang");

	foreach ($this->Orang_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_orang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat_orang);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=orang.doc");

        $data = array(
            'orang_data' => $this->Orang_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('orang_doc',$data);
    }

}

/* End of file Orang.php */
/* Location: ./application/controllers/Orang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-07-13 20:52:26 */
/* http://harviacode.com */