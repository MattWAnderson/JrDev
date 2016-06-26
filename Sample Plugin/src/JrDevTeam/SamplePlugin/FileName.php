<?php

namespace JrDevTeam\SamplePlugin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;

//enable plugin 
class FileName extends PluginBase implements Listener
{
    
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

//command example
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if(strtolower($command->getName()) === "test"){
            $sender->sendMessage("Yay.. command worked as normal user!");
            return true;
        }

        return false;
    }

//plugin disable example
    public function onDisable(){
        $this->getLogger()->info("Plugin has been disabled!");
    }
}