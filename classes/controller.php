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
		$this->template = !empty($request['view']) ? $request['view'] : 'home';
	}

	/**
	 * Methode zum anzeigen des Contents.
	 *
	 * @return String Content der Applikation.
	 */
	public function display(){
		$this->view = $this->initBody();
		$this->view->assign('header', $this->initHeader()->loadTemplate());
		$this->view->assign('footer', $this->initFooter()->loadTemplate());
		return $this->view->loadTemplate();
	}

	public function initHeader(){
		$header = new View();
		$header->setTemplate('header');
		$header->assign('title', Model::$APP_TITLE);
		return $header;
	}

	public function initBody(){
		$body = new View();
		$body->assign('appName', Model::$APP_NAME_SHORT);
		switch($this->template){
			case 'entry':
				$body->setTemplate('entry');
				$entryid = $this->request['id'];
				$entry = Model::getEntry($entryid);
				$body->assign('title', $entry['title']);
				$body->assign('content', $entry['content']);
				break;
				
			case 'home':
			default:
				$entries = Model::getEntries();
				$body->setTemplate();
				$body->assign('entries', $entries);
		}
		return $body;
	}

	public function initFooter(){
		$footer = new View();
		$footer->setTemplate('footer');
		return $footer;
	}
}
?>