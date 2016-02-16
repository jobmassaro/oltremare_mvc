<?php

class User_m extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
     function insertUser($data){
        return $this->db->insert('user', $data);
    }
    
    
    //send email
    function sendEmail($to_email)
    {
        $from_email = 'sabinomassaro@gmail.com'; //change this to yours
        $subject = 'OLTREMARE';
        $message = 'Buongiorno ,<html><br /><br />Clicchi sotto per verificare indirizzo email <br /><br /> http://www.oltremare,test/user/verify/' . md5($to_email) . '<br /><br /><br />GRAZIE<br />Oltremare Team</html>';
           //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'Passwd01'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $this->load->library('email', $config);
        //$this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'OLTREMARE');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
        
        
    }
    
    //activate user account
    function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('user', $data);
    }
    
    
}
