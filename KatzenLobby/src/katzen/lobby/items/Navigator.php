<?php

namespace katzen\lobby\items;

use customiesdevs\customies\item\component\HandEquippedComponent;
use customiesdevs\customies\item\component\MaxStackSizeComponent;
use customiesdevs\customies\item\CreativeInventoryInfo;
use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ToolTier;


public class Navigator implements ItemComponents {
    use ItemComponentsTrait;

    public function __construct(ItemIdentifier $itemIdentifier, string $name)
    {
        parent::__construct($itemIdentifier, $name, ToolTier::NETHERITE);
        $this->initComponent("icon_crystal", new CreativeInventoryInfo(CreativeInventoryInfo::CATEGORY_EQUIPMENT));
        $this->addComponent(new HandEquippedComponent(true));
        $this->addComponent(MaxStackSizeComponent(1));
    }

    public function getAttackPoints(): int
    {
        return 8;
    }
}