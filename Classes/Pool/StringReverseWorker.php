<?php
class StringReverseWorker
{
	/**
	 * @var \DateTime
	 */
	private $createdAt;
	
	public function __construct()
	{
		$this->createdAt = new \DateTime();
	}
	
	/**
	 * Retourne l'heure de création de l'instance
	 * @return string
	 */
	public function getDate(): string {
		return $this->createdAt->format("H:i:s:u");
	}
	
	/**
	 * Inverse le texte passé en paramètres
	 * @param string $text
	 * @return string
	 */
	public function run(string $text)
	{
		return strrev($text);
	}
}