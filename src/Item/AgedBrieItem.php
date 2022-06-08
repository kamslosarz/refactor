<?php

namespace App\Item;

final class AgedBrieItem extends AbstractItem implements ItemInterface
{
    public function update(): void
    {
        $this->sellIn--;

        if (!$this->isQuantityMax()) {
            $this->addQuality(1);

            if ($this->isSellInNegative() && !$this->isQuantityMax()) {
                $this->addQuality(1);
            }
        }
    }
}
