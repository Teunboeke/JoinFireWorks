<?php

namespace Teunboeke\JoinFireWorks;

use Teunboeke\Fireworks\item\Fireworks;
use Teunboeke\Fireworks\Entity\FireworksRocket;

use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

  	public function onEnable() {
      		ItemFactory::registerItem(new Fireworks());
      		Item::initCreativeItems();
      		if(!Entity::registerEntity(FireworksRocket::class, false, ["FireworksRocket"])) {
            			$this->getLogger()->error("Failed to register FireworksRocket entity with savename 'FireworksRocket'");
          }
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }   

  	public function getFireworksColor(): string {
      		$color_array = [
            			Fireworks::COLOR_BLACK,
            			Fireworks::COLOR_RED,
            			Fireworks::COLOR_DARK_GREEN,
            			Fireworks::COLOR_BROWN,
            			Fireworks::COLOR_BLUE,
            			Fireworks::COLOR_DARK_PURPLE,
            			Fireworks::COLOR_DARK_AQUA,
            			Fireworks::COLOR_GRAY,
            			Fireworks::COLOR_DARK_GRAY,
            			Fireworks::COLOR_PINK,
            			Fireworks::COLOR_GREEN,
            			Fireworks::COLOR_YELLOW,
            			Fireworks::COLOR_LIGHT_AQUA,
            			Fireworks::COLOR_DARK_PINK,
            			Fireworks::COLOR_GOLD,
            			Fireworks::COLOR_WHITE
          ];  

      		return $color_array[array_rand($color_array)];
   	}   
  
    	public function onJoin(PlayerJoinEvent $event) {
          		$fw = ItemFactory::get(Item::FIREWORKS);
          		$fw->addExplosion(mt_rand(0, 4), $this->getFireworksColor(), "", true, true); 
