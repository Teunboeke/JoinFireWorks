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
  	public const COLOR_RED = "\x01";
  	public const COLOR_DARK_GREEN = "\x02";
  	public const COLOR_BROWN = "\x03";
  	public const COLOR_BLUE = "\x04";
  	public const COLOR_DARK_PURPLE = "\x05";
  	public const COLOR_DARK_AQUA = "\x06";
  	public const COLOR_GRAY = "\x07";
  	public const COLOR_DARK_GRAY = "\x08";
  	public const COLOR_PINK = "\x09";
  	public const COLOR_GREEN = "\x0a";
  	public const COLOR_YELLOW = "\x0b";
  	public const COLOR_LIGHT_AQUA = "\x0c";
  	public const COLOR_DARK_PINK = "\x0d";
  	public const COLOR_GOLD = "\x0e";
  	public const COLOR_WHITE = "\x0f";
