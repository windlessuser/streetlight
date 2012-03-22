<?php
/*
Wrapper class for sending emails.
Simple to use.
Pass variables using this format
$config = array('to' => "jon.doe@example.com",
				'from' => "mary.jane@example.com",
				'subject' => "The sky is falling!",
				'body' => 'Mary had a little lamb.'
				);

usage: note that the parameters are optional.

$mr = new Mail_Report($config);

$mr->initialise($config);
$mr->send_mail($config);
$mr->clear();
		
*/
class Mail_Wrapper {

	//local variables
	public $to = "";
	private $from = "mail@streetlights.gov.jm";
	public $subject = "";
	public $body = "";
	
	//Constructor, calls the initalise function
	public function __construct($config = array()){
		$this->initialise($config);
	}
	
	//Sets up all the local variables
	//Only changes the desired variables
	public function initialise($config = array()){
		$this->to = (isset($config['to'])) ? $config['to'] : $this->to;
		$this->from = (isset($config['from'])) ? $config['from'] : $this->from;
		$this->subject = (isset($config['subject'])) ? $config['subject'] : $this->subject;
		$this->body = (isset($config['to'])) ? $config['to'] : $this->body;
	}
	
	//sends mail, with the current values, with the option to chnage them
	public function send($config = array()){
		$this->initalise($config);
		return mail($this->to, $this->subject, $this->body, null, $this->from);
	}
	
	//resets all the variables
	public function clear(){
		unset($this->to);
		unset($this->subject);
		unset($this->body);
	}
	
}
?>