<?php

namespace dantedevs\treasurewars;

use pocketmine\plugin\PluginBase;

class tw extends PluginBase{ 

  public function onEnable(){
    $this->getLogger()->info("§aEnabled TreasureWars §c(Work in progress!)");
  } 
    public function onLoad(){
    $this->getLogger()->info("§bLoading TreasureWars");
  }

  public function onDisable(){
    $this->getLogger()->info("§cDisabled TreasureWars");
  }

}
