<?php

namespace App\Item;

final class BackstagePassItem extends AbstractItem implements ItemInterface
{
    const QUALITY_THRESHOLDS = [10, 5];

    public function update(): void
    {
        if ($this->isSellInNegative()) {
            $this->setQuality(0);
        } elseif (!$this->isQuantityMax()) {
            $this->addQuality(1);
            foreach (self::QUALITY_THRESHOLDS as $threshold) {
                if ($this->isQuantityMax()) {
                    break;
                }
                if ($this->sellIn <= $threshold) {
                    $this->addQuality(1);
                } else {
                    break;
                }
            }
        }

        $this->sellIn--;

        if ($this->isSellInNegative()) {
            $this->setQuality(0);
        }
    }
}
