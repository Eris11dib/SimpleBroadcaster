<?php

namespace SimpleBroadcast;

use pocketmine\plugin\Plugin;
use pocketmine\scheduler\Task;


class BroadTask extends Task{
	
	public function __construct(Main $sbc){
		$this->sbc= $sbc;
	}
	
	public function onRun($tick){
			$nested = $this->sbc->config->getNested("Messages");
			$array_r = array_rand($nested,1);
			$messrand = $nested[$array_r];
			$this->sbc->getServer()->broadcastMessage($messrand);
		}
}

?>
