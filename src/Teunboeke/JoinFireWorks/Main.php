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
