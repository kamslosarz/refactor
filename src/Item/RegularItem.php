<?php

namespace App\Item;

final class RegularItem extends AbstractItem implements ItemInterface
{
    public function update(): void
    {
        $this->quality--;
        $this->sellIn--;

        if ($this->isSellInNegative()) {
            $this->quality--;
        }
    }
}
