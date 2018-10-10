<?php
require_once(__DIR__ . "/StringReverseWorker.php");

class WorkerPool implements \Countable
{
	/**
	 * @var StringReverseWorker[]
	 */
	private $occupiedWorkers = [];
	
	/**
	 * @var StringReverseWorker[]
	 */
	private $freeWorkers = [];
	
	/**
	 * Retourne ou instancie une nouvelle instance de worker
	 * @return StringReverseWorker
	 */
	public function get(): StringReverseWorker
	{
		if (count($this->freeWorkers) == 0) {
			$worker = new StringReverseWorker();
		} else {
			$worker = array_pop($this->freeWorkers);
		}
		
		$this->occupiedWorkers[spl_object_hash($worker)] = $worker;
		
		return $worker;
	}
	
	/**
	 * Replace un worker en liste de worker en attente
	 * @param StringReverseWorker $worker
	 */
	public function dispose(StringReverseWorker $worker)
	{
		$key = spl_object_hash($worker);
		
		if (isset($this->occupiedWorkers[$key])) {
			unset($this->occupiedWorkers[$key]);
			$this->freeWorkers[$key] = $worker;
		}
	}
	
	/**
	 * Retourne le nombre d'instances totales occupées
	 * {@inheritDoc}
	 * @see Countable::count()
	 */
	public function count(): int
	{
		return count($this->occupiedWorkers);
	}
}