<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $user = $this->User_model->get_all();

        $data = array(
            'user_data' => $user
        );

        $this->template->load('template','user_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'email' => $row->email,
		'first_name' => $row->first_name,
		'last_name' => $row->last_name,
		'password' => $row->password,
		'last_login' => $row->last_login,
		'status' => $row->status,
	    );
            $this->template->load('template','user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user/create_action'),
	    'id' => set_value('id'),
	    'email' => set_value('email'),
	    'first_name' => set_value('first_name'),
	    'last_name' => set_value('last_name'),
	    'password' => set_value('password'),
	    'last_login' => set_value('last_login'),
	    'status' => set_value('status'),
	);
        $this->template->load('template','user_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'email' => $this->input->post('email',TRUE),
		'first_name' => $this->input->post('first_name',TRUE),
		'last_name' => $this->input->post('last_name',TRUE),
		'password' => $this->input->post('password',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->User_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action'),
		'id' => set_value('id', $row->id),
		'email' => set_value('email', $row->email),
		'first_name' => set_value('first_name', $row->first_name),
		'last_name' => set_value('last_name', $row->last_name),
		'password' => set_value('password', $row->password),
		'last_login' => set_value('last_login', $row->last_login),
		'status' => set_value('status', $row->status),
	    );
            $this->template->load('template','user_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'email' => $this->input->post('email',TRUE),
		'first_name' => $this->input->post('first_name',TRUE),
		'last_name' => $this->input->post('last_name',TRUE),
		'password' => $this->input->post('password',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->User_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('first_name', 'first name', 'trim|required');
	$this->form_validation->set_rules('last_name', 'last name', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('last_login', 'last login', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user.xls";
        $judul = "user";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "First Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Last Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Last Login");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->User_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->first_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->last_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->last_login);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=user.doc");

        $data = array(
            'user_data' => $this->User_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user_doc',$data);
    }

    function pdf()
    {
        $data = array(
            'user_data' => $this->User_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('user_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('user.pdf', 'D'); 
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-07-13 20:05:40 */
/* http://harviacode.com */