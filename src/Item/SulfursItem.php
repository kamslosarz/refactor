<?php

namespace App\Item;

final class SulfursItem extends AbstractItem implements ItemInterface
{
    const MAX_QUALITY = 80;

    public function update(): void {}

    protected function setQuality(int $quality): void
    {
        $this->quality = self::MAX_QUALITY;
    }
}
