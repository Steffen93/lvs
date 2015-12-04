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
		$this->view->assign('htmlHeader', (new HtmlHeader())->loadTemplate());
		$this->view->assign('header', (new Header())->loadTemplate());
		$this->view->assign('footer', (new Footer())->loadTemplate());
		$this->view->assign('bootstrapjs', (new BootstrapJs())->loadTemplate());
		$this->view->assign('htmlFooter', (new HtmlFooter())->loadTemplate());
		return $this->view->loadTemplate();
	}

	private function initBody(){
		$body = new View();
		switch($this->template){
			case 'register':
				$body->setTemplate('register');
				break;
			
			case 'members':
				$body->setTemplate('members');
				$body->assign('membernav', (new Navigation("members"))->loadTemplate());
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
				$body->assign('membernav', (new Navigation("userlist"))->loadTemplate());
				break;

			case 'home':
			default:
				$body->setTemplate();
				$body->assign('appName', Globals::$APP_NAME_LONG);
				$body->assign('appDescription', Globals::$APP_DESCRIPTION);
		}
		return $body;
	}
}
?>
