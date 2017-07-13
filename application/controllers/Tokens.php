<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tokens extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tokens_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tokens = $this->Tokens_model->get_all();

        $data = array(
            'tokens_data' => $tokens
        );

        $this->template->load('template','tokens_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tokens_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'token' => $row->token,
		'user_id' => $row->user_id,
		'created' => $row->created,
	    );
            $this->template->load('template','tokens_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tokens'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tokens/create_action'),
	    'id' => set_value('id'),
	    'token' => set_value('token'),
	    'user_id' => set_value('user_id'),
	    'created' => set_value('created'),
	);
        $this->template->load('template','tokens_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'token' => $this->input->post('token',TRUE),
		'user_id' => $this->input->post('user_id',TRUE),
		'created' => $this->input->post('created',TRUE),
	    );

            $this->Tokens_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tokens'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tokens_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tokens/update_action'),
		'id' => set_value('id', $row->id),
		'token' => set_value('token', $row->token),
		'user_id' => set_value('user_id', $row->user_id),
		'created' => set_value('created', $row->created),
	    );
            $this->template->load('template','tokens_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tokens'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'token' => $this->input->post('token',TRUE),
		'user_id' => $this->input->post('user_id',TRUE),
		'created' => $this->input->post('created',TRUE),
	    );

            $this->Tokens_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tokens'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tokens_model->get_by_id($id);

        if ($row) {
            $this->Tokens_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tokens'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tokens'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('token', 'token', 'trim|required');
	$this->form_validation->set_rules('user_id', 'user id', 'trim|required');
	$this->form_validation->set_rules('created', 'created', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tokens.xls";
        $judul = "tokens";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Token");
	xlsWriteLabel($tablehead, $kolomhead++, "User Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Created");

	foreach ($this->Tokens_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->token);
	    xlsWriteNumber($tablebody, $kolombody++, $data->user_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tokens.doc");

        $data = array(
            'tokens_data' => $this->Tokens_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tokens_doc',$data);
    }

    function pdf()
    {
        $data = array(
            'tokens_data' => $this->Tokens_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('tokens_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('tokens.pdf', 'D'); 
    }

}

/* End of file Tokens.php */
/* Location: ./application/controllers/Tokens.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-07-13 20:05:40 */
/* http://harviacode.com */