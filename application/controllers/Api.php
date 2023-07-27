<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends CI_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function send()
    {
        $tujuan = $this->input->post('tujuan');
		$message = urlencode($this->input->post('message'));

	// 	$result = file_get_contents("http:localhost:8000/"."send-message?number=".$tujuan."&message=".$message);
	// redirect('/');

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost:8000/send-message',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('message' => $message,'number' => $tujuan ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    }


}