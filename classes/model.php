<?php
/**
 * Klasse für den Datenzugriff
 */
class Model{
	//Einträge eines Blogs als zweidimensionales Array
	private static $users = array(
		array("Id"=>0, "Name"=>"User 1", "Feuerwehr"=>"FW Schmeilsdorf"),
		array("Id"=>1, "Name"=>"User 2", "Feuerwehr"=>"FW Schmeilsdorf"),
		array("Id"=>2, "Name"=>"User 3", "Feuerwehr"=>"FW Schmeilsdorf")
	);

	/**
	 * Gibt alle Benutzer zurück.
	 *
	 * @return 2D Array von Benutzern und ihren Eigenschaften.
	 */
	public static function getUsers(){
		return self::$users;
	}

	private static $userListColumns = array("Id", "Name", "Feuerwehr");

	/**
	 * Gibt alle Spaltennamen für die Benutzerliste zurück.
	 *
	 * @return Array Array von Spaltennamen.
	 */
	public static function getUserListColumns(){
		return self::$userListColumns;
	}

	private static $settingCategories = array("Allgemein", "Benutzer");

	/**
	 * Gibt alle Spaltennamen für die Benutzerliste zurück.
	 *
	 * @return Array Array von Spaltennamen.
	 */
	public static function getSettingCategories(){
		return self::$settingCategories;
	}
}
?>