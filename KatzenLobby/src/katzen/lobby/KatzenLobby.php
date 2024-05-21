<?php

namespace katzen\lobby;

use customiesdevs\customies\item\CustomiesItemFactory;
use katzen\lobby\items\Navigator;
use pocketmine\plugin\PluginBase;
use pocketmine\resourcepacks\ZippedResourcePack;
use ReflectionProperty;
use Symfony\Component\Filesystem\Path;

class KatzenLobby extends PluginBase {

    /**
     * @return void
     * @throws \ReflectionException
     */

    public function onEnable() : void {
        $this->saveResource("katze.mcpack");
        CustomiesItemFactory::getInstance()->registerItem(Navigator::class, "katze:navigator", "§8» §dNavigator");
        $this->getServer()->getResourcePackManager()->setResourceStack(array_merge($this->getServer()->getResourcePackManager()->getResourceStack(), [new ZippedResourcePack(Path::join($this->getDataFolder(), "katze.mcpack"))]));
        (new ReflectionProperty($this->getServer()->getResourcePackManager(), "serverForceResources"))->setValue($this->getServer()->getResourcePackManager(), true);
    }
}