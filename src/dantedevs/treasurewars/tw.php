<?php

namespace dantedevs\treasurewars;

use pocketmine\plugin\PluginBase;
use pocketmine\entity\Human;
use pocketmine\utils\TextFormat;

use pocketmine\event\player\PlayerJoinEvent; 
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\event\Listener;

class tw extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info("TreasureWars PM4 is Enabled");
    }

}
