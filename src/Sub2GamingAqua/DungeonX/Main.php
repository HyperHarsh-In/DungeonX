<?php

namespace Sub2GamingAqua\DungeonX;

use pocketmine\block\Block;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

    private $config;

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder()."config.yml", Config::YAML);
    }

    public function onBlockBreak(BlockBreakEvent $event){
        $player = $event->getPlayer();
        $block = $event->getBlock();
        if($block->getLevel()->getName() === $this->config->get("levelname")){
            if($block->getId() === Block::COAL_ORE && $this->config->get("coal_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $player->addXp($event->getXpDropAmount());
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::STONE));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::IRON_ORE && $this->config->get("iron_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $player->addXp($event->getXpDropAmount());
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::STONE));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::GOLD_ORE && $this->config->get("gold_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $player->addXp($event->getXpDropAmount());
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::STONE));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::DIAMOND_ORE && $this->config->get("diamond_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::STONE));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::EMERALD_ORE && $this->config->get("emerald_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::STONE));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::QUARTZ_ORE && $this->config->get("quartz_ore") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::STONE));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::LAPIS_ORE && $this->config->get("lapis_ore") == true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
				$event->setDrops([]);
				$event->setCancelled();
				$event->setXpDropAmount(0);
				$player->addXp($event->getXpDropAmount());
				$block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(0));
				$this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
			} elseif(in_array($block->getId(), [17, 1]) && $this->config->get("spruce_wood") === true){
				foreach($event->getDrops() as $drop){
					$event->getPlayer()->getInventory()->addItem($drop);
				}
				$event->setDrops([]);
				$event->setCancelled();
				$event->setXpDropAmount(0);
				$player->addXp($event->getXpDropAmount());
				$block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(0));
				$this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
			} elseif(in_array($block->getId(), [17, 2]) && $this->config->get("birch_wood") === true){
				foreach($event->getDrops() as $drop){
					$event->getPlayer()->getInventory()->addItem($drop);
				}
				$event->setDrops([]);
				$event->setCancelled();
				$event->setXpDropAmount(0);
				$player->addXp($event->getXpDropAmount());
				$block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(0));
				$this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
			} elseif(in_array($block->getId(), [162, 1]) && $this->config->get("dark_oak_wood") === true){
				foreach($event->getDrops() as $drop){
					$event->getPlayer()->getInventory()->addItem($drop);
				}
				$event->setDrops([]);
				$player->addXp($event->getXpDropAmount());
				$event->setCancelled();
				$event->setXpDropAmount(0);
				$block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(0));
				$this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
			} elseif($block->getId() === 162 && $this->config->get("acacia_wood") === true){
				foreach($event->getDrops() as $drop){
					$event->getPlayer()->getInventory()->addItem($drop);
				}
				$event->setDrops([]);
				$player->addXp($event->getXpDropAmount());
				$event->setCancelled();
				$event->setXpDropAmount(0);
				$block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(0));
				$this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
			} elseif(in_array($block->getId(), [17, 3]) && $this->config->get("jungle_wood") === true){
				foreach($event->getDrops() as $drop){
					$event->getPlayer()->getInventory()->addItem($drop);
				}
                $event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::AIR));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::POTATO_BLOCK && $this->config->get("potato_block") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::AIR));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::CARROT_BLOCK && $this->config->get("carrot_block") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
                }
                $event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::AIR));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::WHEAT_BLOCK && $this->config->get("wheat_block") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
	        }
		$event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::AIR));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::MELON_BLOCK && $this->config->get("melon_block") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
		}
		$event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::AIR));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
	    } elseif(in_array($block->getId(), [338, 0]) && $this->config->get("sugarcane") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
		}
		$event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::AIR));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::CACTUS && $this->config->get("cati") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
		}
		$event->setDrops([]);
                $player->addXp($event->getXpDropAmount());
                $event->setCancelled();
                $event->setXpDropAmount(0);
                $block->getLevelNonNull()->setBlock($block->asVector3(), Block::get(Block::AIR));
                $this->getScheduler()->scheduleDelayedTask(new DelayTask($this, $block), 20 * $this->config->get("delay"));
            } elseif($block->getId() === Block::PUMKIN && $this->config->get("pumkin") === true){
                foreach ($event->getDrops() as $drop) {
                    $event->getPlayer()->getInventory()->addItem($drop);
            }
        }
    }

}
