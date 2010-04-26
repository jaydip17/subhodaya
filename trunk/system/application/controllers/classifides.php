<?php
class Classifides extends Controller
{
	var $layout='default';
	function Classifides()
	{
		parent::Controller();
	}
	function index() {
		$this->load->view('classi_view');
	}
}
?>