<?php

namespace App\Factory;

use App\Item\AgedBrieItem;
use App\Item\BackstagePassItem;
use App\Item\ItemInterface;
use App\Item\RegularItem;
use App\Item\SulfursItem;

class ItemFactory
{
    const AGED_BRIE = 'Aged Brie';
    const BACKSTAGE_PASSES = 'Backstage passes to a TAFKAL80ETC concert';
    const SULFURS = 'Sulfuras, Hand of Ragnaros';

    public static function create(string $name, int $sellIn, int $quality): ItemInterface
    {
        switch ($name) {
            case self::AGED_BRIE:
                return new AgedBrieItem($name, $sellIn, $quality);
            case self::BACKSTAGE_PASSES:
                return new BackstagePassItem($name, $sellIn, $quality);
            case self::SULFURS:
                return new SulfursItem($name, $sellIn, $quality);
            default:
                return new RegularItem($name, $sellIn, $quality);
        }
    }
}
