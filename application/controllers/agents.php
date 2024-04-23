<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends CI_Controller {

	function __construct()
    {
   	 parent::__construct();
   	 $this->load->helper("url");   //call the form helper
   	 $this->load->helper('form');
  	 $this->load->library('session');
    $this->load->model('mpesa_model','',TRUE);
    $this->session_data = $this->session->userdata('logged_in');
    if(empty($this->session_data))
    {
       redirect('login');
    }
    }
	public function index()
	{
		$ndata['login']=$this->session_data;
		$data['agents'] = $this->mpesa_model->get_all_data('agents');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('agents/index',$data);
		$this->load->view('common/footer');
	}


	public function create()
		{
	    $data = array('id' => '');
	    $data['attributes'] = array('class' => 'form');
	    $data['prop'] = array('class' => 'form-control');

	    $ndata['login']=$this->session_data;

	    $this->load->view('common/header',$ndata);
	    $this->load->view('common/navigation');
	    $this->load->view('agents/create',$data);
	    $this->load->view('common/footer');
		}

	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'Agent Name', 'required');
			$this->form_validation->set_rules('number', 'Agent Number', 'trim|required|numeric');
	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$dataagent = array(
						'name' => $this->input->post('name'),
						'number' => $this->input->post('number'),
          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->mpesa_model->insert_data('agents', $dataagent);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}


		public function buycreate()
			{
		    $data = array('id' => '');
		    $data['attributes'] = array('class' => 'form form-horizontal');
		    $data['prop'] = array('class' => 'form-control');

				$resulta = $this->mpesa_model->get_all_data('bank');
				      foreach ($resulta as $rowa)
				  		{
				  			$rida = $rowa['id'];
				  			$dropdowna [$rida] = $rowa['name'];
				  		}
				  		$data['banks'] = $dropdowna;

				$resultb = $this->mpesa_model->get_all_data('agents');
				      foreach ($resultb as $rowb)
				  		{
				  			$ridb = $rowb['id'];
				  			$dropdownb [$ridb] = $rowb['name'];
				  		}
				  		$data['agents'] = $dropdownb;

		    $ndata['login']=$this->session_data;

		    $this->load->view('common/header',$ndata);
		    $this->load->view('common/navigation');
		    $this->load->view('agents/buyfloat',$data);
		    $this->load->view('common/footer');
			}

		  public function buyfloatstore()
			{
		    $this->load->library('form_validation');
				$this->load->helper(array('form'));


				$this->form_validation->set_rules('bank', 'Bank Name', 'required');
				$this->form_validation->set_rules('amount', 'amount', 'required|numeric');
				$this->form_validation->set_rules('agent', 'Agent Name', 'required');
		    if ($this->form_validation->run() === FALSE)
				{
					$this->buycreate();
				}
		    else
				{
						$moneyRecords=$this->mpesa_model->get_data_where('agents', $this->input->post('agent'));
						$moneybRecords=$this->mpesa_model->get_data_where('bank', $this->input->post('bank'));
						$dataagent = array(
							'bankId' => $this->input->post('bank'),
							'agentId' => $this->input->post('agent'),
							'amount' => $this->input->post('amount'),
	          	'regBy' => $this->session_data['loggedId']
							);
		        $userRegId=$this->mpesa_model->insert_data('buyfloat', $dataagent);
						$new=$this->input->post('amount');
        		$newBalance=$moneyRecords['amount']+$new;
        		$datam = array(
                    'amount' => $newBalance
                    );
        		$this->mpesa_model->update_data('agents', $this->input->post('agent'),$datam);

						$newv=$this->input->post('amount');
        		$newvBalance=$moneybRecords['amount']-$new;
        		$databBalance = array(
                    'amount' => $newvBalance
                    );
        		$this->mpesa_model->update_data('bank', $this->input->post('bank'),$databBalance);

						$news=$this->input->post('amount');
        		$newBankBalance=$moneybRecords['amount']-$news;
        		$databank = array(
										'moneyFrom' => $this->input->post('bank'),
										'moneyTo' => $this->input->post('agent'),
										'moneyIn' => $news,
                    'ledge' => $newBankBalance,
										'regBy' => $this->session_data['loggedId']
                    );
        		$this->mpesa_model->insert_data('statement',$databank);
						redirect('bank/index', 'refresh');
				}
			}
}
