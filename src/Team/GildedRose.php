<?php

namespace App\Team;

use App\Item\ItemInterface;

final class GildedRose implements TeamInterface
{
    private $items = [];

    public function addItem(ItemInterface $item): void
    {
        $this->items[] = $item;
    }

    public function updateQuality(): void
    {
        /** @var ItemInterface $item */
        foreach ($this->items as $item) {
            $item->update();
        }
    }
}
