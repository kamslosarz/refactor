<?php
namespace App\Team;

use App\Item\ItemInterface;

interface TeamInterface
{
    public function addItem(ItemInterface $item): void;
    public function updateQuality(): void;
}
