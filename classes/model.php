<?php
/**
 * Klasse für den Datenzugriff
 */
class Model{
	//Einträge eines Blogs als zweidimensionales Array
	private static $users = array(
		array("id"=>0, "name"=>"User 1", "content"=>"Ich bin der erste Eintrag."),
		array("id"=>1, "name"=>"User 2", "content"=>"Ich bin der ewige Zweite!"),
		array("id"=>2, "name"=>"User 3", "content"=>"Na dann bin ich die Nummer drei.")
	);

	/**
	 * Gibt alle Einträge des Blogs zurück.
	 *
	 * @return Array Array von Blogeinträgen.
	 */
	public static function getUsers(){
		return self::$users;
	}

	/**
	 * Gibt einen bestimmten Eintrag zurück.
	 *
	 * @param int $id Id des gesuchten Eintrags
	 * @return Array Array, dass einen Eintrag repräsentiert, bzw. 
	 * 					wenn dieser nicht vorhanden ist, null.
	 */
	public static function getUser($id){
		if(array_key_exists($id, self::$users)){
			return self::$users[$id];
		}else{
			return null;
		}
	}
}
?>