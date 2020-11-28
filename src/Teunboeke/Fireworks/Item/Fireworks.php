<?php

declare(strict_types = 1);

namespace Teunboeke\Fireworks\Item
  
use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\Player;

class Fireworks extends Item {

  	public const TYPE_SMALL_SPHERE = 0;
  	public const TYPE_HUGE_SPHERE = 1;
  	public const TYPE_STAR = 2;
  	public const TYPE_CREEPER_HEAD = 3;
  	public const TYPE_BURST = 4;
  
  	//color = chr(dye metadata)
  	public const COLOR_BLACK = "\x00";
