<?php

namespace JrDevTeam\NewJrPlugin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getLogger()->info("Plugin has been Enabled!");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }





//plugin disable example
    public function onDisable(){
        $this->getLogger()->info("Plugin has been disabled!");
    }
}