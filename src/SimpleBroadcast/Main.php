<?php

namespace SimpleBroadcast;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\Task;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{
	
	public $config;
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getLogger()->info("§l§6Activated");
		$this->config = new Config($this->getDataFolder() . "messages.yml", Config::YAML,[
		"seconds_per_broadcast" => 900,
		"Messages" => ["Primo Broadcast","secondo Broadast","Terzo broadcast","quarto broadcast"]
					]);		
					$this->getScheduler()->scheduleRepeatingTask(new BroadTask($this), $this->config->get("seconds_per_broadcast") * 20);
			}
	}

?>
