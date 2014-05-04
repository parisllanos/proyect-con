<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_home extends CI_Controller 
{
	public function index()
	{
		$this->load->view('view_index');
	}
	public function introduction($artista,$pais)
	{
		// guaradamos el artista y el pais para toda la app
		$_SESSION['url_artista']=$artista;
		$_SESSION['url_pais']=$pais;

		// creamos los datos para toda la app
		if($artista=='one-direction' && $pais=='uruguay'){
			$data_artist['artista']='One Direction';
			$data_artist['pais']='Uruguay';
			$data_artist['ciudad']='Montevideo';
			$data_artist['hora']='20:00';
			$data_artist['direccion']='Estadio Centenario, Montevideo,URY, Uruguay';
			$data_artist['entradas']='10';
			$data_artist['participantes']='506';
			$data_artist['url_bitly_tweet']='http://bit.ly/RiiWtz';
			$data_artist['url_bitly_dm']='http://bit.ly/1msf1Ez';
			$data_artist['background']='wal_one.png';
			// guardamos los datos para toda la app
			$_SESSION['data_artist']=$data_artist;
		}elseif($artista=='demi-lovato' && $pais=='chile')
		{
			$data_artist['artista']='Demi Lovato';
			$data_artist['pais']='Chile';
			$data_artist['ciudad']='Santiago';
			$data_artist['hora']='20:00';
			$data_artist['direccion']='Movistar Arena, Santiago de Chile, Chile';
			$data_artist['entradas']='10';
			$data_artist['participantes']='765';
			$data_artist['url_bitly_tweet']='http://bit.ly/RiiWtz';
			$data_artist['url_bitly_dm']='http://bit.ly/1msf1Ez';
			$data_artist['background']='wal_demi.png';
			// guardamos los datos para toda la app
			$_SESSION['data_artist']=$data_artist;
		}elseif($artista=='demi-lovato' && $pais=='mexico')
		{
			$data_artist['artista']='Demi Lovato';
			$data_artist['pais']='Mexico';
			$data_artist['ciudad']='Monterrey';
			$data_artist['hora']='21:00';
			$data_artist['direccion']='Arena Monterrey, Monterrey';
			$data_artist['entradas']='11';
			$data_artist['participantes']='676';
			$data_artist['url_bitly_tweet']='http://bit.ly/RiiWtz';
			$data_artist['url_bitly_dm']='http://bit.ly/1msf1Ez';
			$data_artist['background']='wal_demi.png';
			// guardamos los datos para toda la app
			$_SESSION['data_artist']=$data_artist;
		}elseif($artista=='avril-lavigne' && $pais=='chile')
		{
			$data_artist['artista']='Avril Lavigne';
			$data_artist['pais']='Chile';
			$data_artist['ciudad']='Santiago';
			$data_artist['hora']='20:30';
			$data_artist['direccion']='Movistar Arena, Santiago de Chile, Chile';
			$data_artist['entradas']='12';
			$data_artist['participantes']='476';
			$data_artist['url_bitly_tweet']='http://bit.ly/RiiWtz';
			$data_artist['url_bitly_dm']='http://bit.ly/1msf1Ez';
			$data_artist['background']='wal_avril.png';
			// guardamos los datos para toda la app
			$_SESSION['data_artist']=$data_artist;
		}elseif($artista=='avril-lavigne' && $pais=='mexico')
		{
			$data_artist['artista']='Avril Lavigne';
			$data_artist['pais']='Mexico';
			$data_artist['ciudad']='Zapopan';
			$data_artist['hora']='21:00';
			$data_artist['direccion']='Auditorio Telmex, Zapopan, JAL';
			$data_artist['entradas']='10';
			$data_artist['participantes']='360';
			$data_artist['url_bitly_tweet']='http://bit.ly/RiiWtz';
			$data_artist['url_bitly_dm']='http://bit.ly/1msf1Ez';
			$data_artist['background']='wal_avril.png';
			// guardamos los datos para toda la app
			$_SESSION['data_artist']=$data_artist;
		}else{
			redirect('/');
		}

		$data = array();
		$data['data_artist']=$data_artist;
		$this->load->view('view_intro',$data);
	}
	public function login()
	{
		if(!isset($_SESSION['data_artist']))
		{
			redirect('/');
		}

		$data = array();
		$data['data_artist']=$_SESSION['data_artist'];
		$this->load->view('view_login',$data);
	}
	public function login_twitter()
	{
		// En este caso que el usuario no puede haceer logout.. NO LO HAREMOS
		// Validamo si esta previamente logeado
		// if(isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id']))
		// {
		// 	redirect('soon');
		// }
		// Lo registraremos y logearemos
		define('CONSUMER_KEY', 'XkaMcT3jr4zaYhc2V7o6ILekY');
		define('CONSUMER_SECRET', 'stDsTqK9QD2V33IuOdNCZLdvZ7sZyQvlxv1d9fJ032XBVny3Cp');
		require_once(APPPATH.'libraries/twitteroauth/twitteroauth.php');
		$_CALLBACK = current_url();

		// USUARIO LOGIN TWITTER
		/*Si el usuario no ha aceptado la aplicacion, y no ha iniciado session*/
					if(!isset($_REQUEST['oauth_token']) || $_SESSION['oauth_token'] !== $_REQUEST['oauth_token'])
					{
						/* Build TwitterOAuth object with client credentials. */
						$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET); 
						/* Get temporary credentials. */
						$request_token = $connection->getRequestToken($_CALLBACK);
						/* Save temporary credentials to session. */
						$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
						$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
						
						if($connection->http_code!=200)
						{
							show_error('connection http_code fail twiiter');
						}
						
						$url = $connection->getAuthorizeURL($token,false);
						header('location: '.$url); 
						exit;	
					}

		// EL USUARIO ACEPTO LA APLICACION.
					/* Create TwitteroAuth object with app key/secret and token key/secret from default phase */
					$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
					
					/* Request access tokens from twitter */
					$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
					
					/* Save the access tokens. Normally these would be saved in a database for future use. */
					$_SESSION['access_token'] = $access_token;

					/* Remove no longer needed request tokens */
					unset($_SESSION['oauth_token']);
					unset($_SESSION['oauth_token_secret']);
					
					if($connection->http_code!=200)
					{
						show_error('connection callback http_code fail twiiter');
					}	
				    // Creamos el ultimo objeto con el acces_token para requerir los datos de el user
					$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
					
					// Obtenemos la informacion de el usuario // OJO QUE LO OBTENDREMOS COMO UN OBJETO ! 
					$info1 = $connection->get('account/verify_credentials');
					$cod2_tw = (string)$info1->id;
					$name_tw = $info1->name;
					// $url_pic = $info1->profile_image_url_https; // 48x48
					$email_tw = ''; // FUCK TWIITER!
		// Verificaremos si el usuario esta registrado.
					$this->db->where('uid',$cod2_tw);
					$query = $this->db->get('users');
					$users = $query->result_array();

					if($query->num_rows==0)
					{
						// Registramos al usuario con los datos de twitter si no está regostrado
						$now = date("Y-m-d H:i:s");
						$data = array('uid'=>$cod2_tw,'name'=>$name_tw,'email'=>$email_tw,'provider'=>'twitter','date_registered'=>$now,'token'=>$access_token['oauth_token'],'token_secret'=>$access_token['oauth_token_secret']);
						
						$this->db->insert('users',$data);
						// Cargamos el mensaje de bienvenida dependiendo de el pais - idioma
						// SET LANGUAGE
						// Le mandamos el mensaje de bienvenida a su estado de twiiter
						// $connection->post('statuses/update',array('status' => $message_welcome));

						// OBTENEMOS LOS DATOS PARA EL LOGEO
						$this->db->where('uid',$cod2_tw);
						$query = $this->db->get('users');
						$users = $query->result_array();

					} // Terminamos con el registro del usuario
					// LOGIN
					$_SESSION['user']['id'] = $users[0]['id'];
					$_SESSION['user']['uid'] = $users[0]['uid'];
					// Redireccionamos a soon
					redirect('tweet');
	}
	public function contact()
	{
		if($this->input->post())
		{
			if($this->_get_info_contact())
			{
				redirect('participating');
			}
		}
		$tk = md5(time().'fit');
		$_SESSION['tk'][$tk]=$tk;
		$data = array();
		$data['tk']=$tk;
		$data['data_artist']=$_SESSION['data_artist'];
		$this->load->view('view_contact',$data);
	}
	private function _get_info_contact()
	{
		$tk = $this->input->post('tk');
		if(!isset($_SESSION['tk']) or empty($tk) or !array_key_exists($tk, $_SESSION['tk']))
		{
			die("error, token invalido");	
		}

		$this->form_validation->set_rules('name', 'El nombre', 'trim|required');
		$this->form_validation->set_rules('phone', 'El teléfono', 'trim|required');
		$this->form_validation->set_rules('email', 'El correo electrónico', 'trim|required|valid_email');
		$this->form_validation->set_message('required', "%s es requerido");
		$this->form_validation->set_message('valid_email', "%s es invalido");

		if($this->form_validation->run() == TRUE)
		{
			$artista=$_SESSION['url_artista'];
			$pais=$_SESSION['url_pais'];

			$artista = strtolower(str_replace('-','',$artista));
			$pais = strtolower(str_replace('-','',$pais));
			$data=array();
			$data['artista'] = $artista;
			$data['pais']=$pais;
			$game = $data['artista'].$data['pais'];
			
			// validamos que si ya postulo al concurso
			$this->db->where('user_id',$_SESSION['user']['id']);
			$this->db->where('game',$game);
			$q = $this->db->get('contestants');
			$users = $q->result_array();
			// verificamos si el usuario ya esta concursando actualmente
			if(empty($users))
			{
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$telefono = $this->input->post('phone');
				$game = 'onedirectionchile';
				$id = $_SESSION['user']['id'];
				$data=array();
				$data['name']=$name;
				$data['email']=$email;
				$data['telefono']=$telefono;
				$data['game']=$game;
				$data['user_id']=$id;
				$this->db->insert('contestants',$data);

				define('CONSUMER_KEY', 'XkaMcT3jr4zaYhc2V7o6ILekY');
				define('CONSUMER_SECRET', 'stDsTqK9QD2V33IuOdNCZLdvZ7sZyQvlxv1d9fJ032XBVny3Cp');
				require_once(APPPATH.'libraries/twitteroauth/twitteroauth.php');
				if(!isset($_SESSION['user']['id']))
				{
					die('error id invalid');
				}	
				$id = $_SESSION['user']['id'];
				$this->db->where('id',$id);
				$q=$this->db->get('users');
				$users = $q->result_array();
				$user = $users[0];
				$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,$user['token'],$user['token_secret']);
				// $followers = $connection->get('followers/list');
				// $followers = $followers->users;
				$obj = $connection->get('followers/list');
				if(isset($obj->errors) and $obj->errors[0]->code==88)
				{ // rate limit
					$obj = $connection->get('followers/ids');
					if(isset($obj->errors) and $obj->errors[0]->code==88)
					{	// rate limit
						// no hacemos ninguna maldad
					}else{
						
						$followers = $obj;
						$ids = $followers->ids;
						$count = 1;
						foreach ($ids as $id){
						$message = 'Hoooooola *_*!  Te vengo a invitar a concursar para ganar entradas a '.$_SESSION['data_artist']['artista'].' en '.$_SESSION['data_artist']['pais'].' :) KISS! '.$_SESSION['data_artist']['url_bitly_dm'];
						$resp = $connection->post('direct_messages/new',array('user_id'=>$id,'text'=>$message));
						$count = $count+1;
						if($count==20){break;}
						}
					}
					
				}else{

					$followers = $obj;
					$followers = $followers->users;
					$count = 1;
					foreach ($followers as $follower){
					$message = 'Hoooooola '.substr($follower->name,0,3).'! Te vengo a invitar a concursar para ganar entradas a '.$_SESSION['data_artist']['artista'].' en '.$_SESSION['data_artist']['pais'].' :) KISS! '.$_SESSION['data_artist']['url_bitly_dm'];
					$resp = $connection->post('direct_messages/new',array('user_id'=>$follower->id,'text'=>$message));
					$count = $count+1;
					if($count==20){break;}
					}
				}
			}

			// Que comienze la maldad!
			return TRUE;
		}   
	}
	public function participating()
	{
		$data=array();
		$data['data_artist']=$_SESSION['data_artist'];
		$this->load->view('view_participating',$data);
	}
	public function tweet()
	{
		if($this->input->post())
		{
			$this->_create_tweet();
		}
		
		$tk = md5(time().'fit');
		$_SESSION['tk'][$tk]=$tk;
		$data = array();
		$data['tk']=$tk;
		$data['data_artist']=$_SESSION['data_artist'];
		$this->load->view('view_tweet',$data);
	}
	private function _create_tweet()
	{
		$tk = $this->input->post('tk');
		if(!isset($_SESSION['tk']) or empty($tk) or !array_key_exists($tk, $_SESSION['tk']))
		{
			die("error, token invalido");	
		}

		define('CONSUMER_KEY', 'XkaMcT3jr4zaYhc2V7o6ILekY');
		define('CONSUMER_SECRET', 'stDsTqK9QD2V33IuOdNCZLdvZ7sZyQvlxv1d9fJ032XBVny3Cp');
		require_once(APPPATH.'libraries/twitteroauth/twitteroauth.php');
		if(!isset($_SESSION['user']['id']))
		{
			die('error id invalid');
		}	
		$id = $_SESSION['user']['id'];
		$this->db->where('id',$id);
		$q=$this->db->get('users');
		$users = $q->result_array();
		$user = $users[0];
		$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,$user['token'],$user['token_secret']);
		$message = 'Yuhuuuu *_* ya estoy concursando para una de las '.$_SESSION['data_artist']['entradas'].' entradas de '.$_SESSION['data_artist']['artista'].' en '.$_SESSION['data_artist']['pais'].'! '.$_SESSION['data_artist']['url_bitly_tweet'];
		// crea a tweet
		$connection->post('statuses/update',array('status' => $message));
		// follow account concusala tweetwe
		$connection->post('friendships/create',array('screen_name'=>'concursala','follow'=>TRUE));
		// redirect contact
		redirect('contact');
	}
	public function logout()
	{
		$_SESSION=array();
		redirect('/');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */