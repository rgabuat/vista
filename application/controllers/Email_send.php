<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_send extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('email_send');
        
	}

    public function send()
    {
        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        $mail->isSMTP();
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'johncarlgabuat@gmail.com';
        $mail->Password = 'i8e3vcrf7h012256789';
        // $mail->SMTPSecure = 'tls';
        $mail->Port = 465;

        $mail->setFrom('johncarlgabuat@gmail.com','text');
        $mail->addReplyTo('johncarlgabuat@gmail.com','texst');

        $mail->addAddress('johncarlgabuat@gmail.com');
        $mail->subject = 'Send Email via STMPT ';

        $mail->isHTML(TRUE);

        $mailContent = "<h1>fafadsdfasdfafadsfadsfad</h1>";
        $mail->Body = $mailContent;
        $mail->SMTPKeepAlive = true;   

        if(!$mail->send())
        {
            echo 'mess eror';
            echo 'mailer error'.$mail->ErrorInfo.!extension_loaded('openssl')?"Not Available":"Available";
            
        }
        else
        {
            echo 'message sent';
        }
    }

    public function sends()
    {
    $to =  $this->input->post('from');  // User email pass here
    $subject = 'Welcome To Elevenstech';

    $from = 'johncarlgabuat@gmail.com';              // Pass here your mail id

    $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="http://elevenstechwebtutorials.com/assets/logo/logo.png" width="300px" vspace=10 /></td></tr>';
    $emailContent .='<tr><td style="height:20px"></td></tr>';


    $emailContent .= $this->input->post('message');  //   Post message available here


    $emailContent .='<tr><td style="height:20px"></td></tr>';
    $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://elevenstechwebtutorials.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.elevenstechwebtutorials.com</a></p></td></tr></table></body></html>";
                


    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.gmail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = 'johncarlgabuat@gmail.com';    //Important
    $config['smtp_pass']    = 'i8e3vcrf7h012256789';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 

     

    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($emailContent);
        if($this->email->send())
        {
            $this->session->set_flashdata('msg',"Mail has been sent successfully");
            $this->session->set_flashdata('msg_class','alert-success');
            return redirect('email_send');
        }
        else 
        {
            show_error($this->email->print_debugger());
        }

    
}

}