<?php

declare(strict_types=1);

namespace Teunboeke\FireWorks\entity;

use BlockHorizons\Fireworks\item\Fireworks;
use pocketmine\entity\Entity;
use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\protocol\ActorEventPacket;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;

class FireworksRocket extends Entity {
  
  	public const NETWORK_ID = Entity::FIREWORKS_ROCKET;

  	public const DATA_FIREWORK_ITEM = 16; //firework item
  
  	public $width = 0.25;
  	public $height = 0.25;

  	/** @var int */
  	protected $lifeTime = 0;
  
  	public function __construct(Level $level, CompoundTag $nbt, ?Fireworks $fireworks = null){
            parent::__construct($level, $nbt);    
      
      		if($fireworks !== null && $fireworks->getNamedTagEntry("Fireworks") instanceof CompoundTag) {
      $this->propertyManager->setCompoundTag(self::DATA_FIREWORK_ITEM, $fireworks->getNamedTag());
            			$this->setLifeTime($fireworks->getRandomizedFlightDuration());
