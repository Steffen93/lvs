<?php
class Controller{

	private $request = null;
	private $template = '';
	private $view = null;

	/**
	 * Konstruktor, erstellt den Controller.
	 *
	 * @param Array $request Array aus $_GET & $_POST.
	 */
	public function __construct($request){
		$this->view = new View();
		$this->request = $request;
		$this->template = !empty($request['v']) ? $request['v'] : 'home';
	}

	/**
	 * Methode zum anzeigen des Contents.
	 * Die auf dieser Ebene mit assign zugewiesenen Variablen
	 * stehen auf allen Seiten zur Verfügung, für ein einheitliches Layout.
	 *
	 * @return String Content der Applikation.
	 */
	public function display(){
		$this->view = $this->initBody();
		$this->view->assign('htmlHeader', $this->initHtmlHeader()->loadTemplate());
		$this->view->assign('header', $this->initHeader()->loadTemplate());
		$this->view->assign('footer', $this->initFooter()->loadTemplate());
		$this->view->assign('htmlFooter', $this->initHtmlFooter()->loadTemplate());
		return $this->view->loadTemplate();
	}

	private function initHtmlHeader(){
		$htmlHeader = new View();
		$htmlHeader->setTemplate('htmlheader');
		$htmlHeader->assign('title', Globals::$APP_TITLE);
		$htmlHeader->assign('bootstrapVersion', Globals::$BOOTSTRAP_VERSION);
		return $htmlHeader;
	}

	private function initHeader(){
		$header = new View();
		$header->setTemplate('header');
		$header->assign('appName', Globals::$APP_NAME_SHORT);
		$header->assign('loginForm', $this->initLoginForm()->loadTemplate());
		$header->assign('logoutForm', $this->initLogoutForm()->loadTemplate());
		return $header;
	}

	private function initLoginForm(){
		$view = new View();
		$view->setTemplate('loginform');
		return $view;
	}

	private function initLogoutForm(){
		$view = new View();
		$view->setTemplate('logoutform');
		return $view;
	}

	private function initMemberNav(){
		$view = new View();
		$view->setTemplate('membernav');
		return $view;
	}

	private function initBody(){
		$body = new View();
		switch($this->template){
			case 'register':
				$body->setTemplate('register');
				break;
			
			case 'members':
				$body->setTemplate('members');
				$body->assign('membernav', $this->initMemberNav()->loadTemplate());
				break;

			case 'login':
				$body->setTemplate('login');
				break;

			case 'userlist':
				$users = Model::getUsers();
				$columns = Model::getUserListColumns();
				$body->setTemplate('userlist');
				$body->assign('users', $users);
				$body->assign('columns', $columns);
				break;

			case 'home':
			default:
				$body->setTemplate();
				$body->assign('appName', Globals::$APP_NAME_LONG);
				$body->assign('appDescription', Globals::$APP_DESCRIPTION);
		}
		return $body;
	}

	private function initFooter(){
		$footer = new View();
		$footer->setTemplate('footer');
		$footer->assign('company', Globals::$COMPANY_NAME);
		$footer->assign('startYear', Globals::$COPYRIGHT_START_YEAR);
		return $footer;
	}

	private function initHtmlFooter(){
		$htmlFooter = new View();
		$htmlFooter->setTemplate('htmlfooter');
		$htmlFooter->assign('bootstrapVersion', Globals::$BOOTSTRAP_VERSION);
		return $htmlFooter;
	}
}
?>