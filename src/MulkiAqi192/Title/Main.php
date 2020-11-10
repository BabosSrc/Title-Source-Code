<?php

namespace MulkiAqi192\Title;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class main extends PluginBase implements Listener {

	public function onEnable(){
		@mkdir($this->getDataFolder());
		$this->saveDefaultConfig();
		$this->getResource("config.yml");
	}

	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

		switch($cmd->getName()){
			case "epic":
			 if($sender instanceof Player){
			 	$sender->sendMessage($this->getConfig()->get("message"));
			 	$sender->addTitle($this->getConfig()->get("title"), $this->getConfig()->get("Subtitle"));
			 }
		}


	}


}