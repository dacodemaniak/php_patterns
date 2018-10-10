<?php
/**
* @name ParticipantPrototype Prototype de classes Participant
* @version 1.0.0
*/
abstract class ParticipantPrototype {
	/**
	 * Nom du participant
	 * @var string
	 */
	protected $name;
	
	/**
	 * Type de participant : Stagiaire | Formateur
	 * @var unknown
	 */
	protected $type;
	
	abstract public function __clone();
	
	/**
	 * Définit ou retourne le nom du participant
	 * @param string $name
	 * @return string|ParticipantPrototype
	 */
	public function name(string $name=null) {
		if (is_null($name)) {
			return $this->name;
		}
		$this->name = $name;
		return $this;
	}
	
	public function __toString() {
		return "Bonjour " . $this->name . "(" . $this->type . ")<br>\n";
	}
}