<?php
define('SESSION_SAVE_PATH',dirname(realpath(__FILE__)) .DIRECTORY_SEPARATOR .'ssesion' );

class appsessionhandler extends SessionHandler{
	private $sessionName ="myappsess";
	private $sessionmaxlifetime =0;
	private $sessionSSL = False;
	private $sessionHTTPonly = True;
	private $sessionpth ='/';
	private $sessionDomain ='.phpdev.com';
	private $sesionsavepath = SESSION_SAVE_PATH;

	private $sessionCipherAlgo = MYCRPT-BLOWFISH;
	private $sessionCipheMode = MYCRYPT_MODE_ECB;
	private $sessionacaipherKey ='MYCRYPT0K3Y@2016';
    
   public function __construct(){
   	ini_set('session.use_cookies', 1);
   	ini_set('session.use_only_cookies', 1);
   	ini_set('session.use_trans_sid', 0);
   	ini_set('session.save_handler', 'files');


    session_name($this->sessionName);
    session_save_path($this->sessionsavepath);

    session_set_cookie_params(
    	$this->$sessionmaxlifetime, $this->$sessionpth,
    	$this->$sessionDomain, $this->sessionSSl,
    	$this->sessionHTTPonly
    	);

   }

  public function read($id) {
    return mcrypt_decrypt(
   		$this->sessionCipherAlgo, 
   		$this->sessionacaipherKey,
   		parent::read($id) ,
   		$this->sessionCipheMode
   		));
  }

   public function write($id ,$data){
   return parent::write($id ,mycrypt_encrypt(
   		$this->sessionCipherAlgo, 
   		$this->sessionacaipherKey,
   		$data ,
   		$this->sessionCipheMode
   		));

   }

   public function start(){
   	if ('' === session_id()) {
   		return session_start();

   	}
   }

}

$session =new appsessionhandler;
$session->start();
$_SESSION['msg'] = 'this text should be stored encrypted';

?>