<?php

namespace App\Item;

use InvalidArgumentException;

class AbstractItem
{
    const MIN_QUALITY = 0;
    const MAX_QUALITY = 50;

    public $name;
    public $sellIn;
    public $quality;

    /**
     * @param string $name
     * @param int $sellIn
     * @param int $quality
     */
    function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->setQuality($quality);
    }

    /**
     * @param int $quality
     * @return void
     */
    protected function setQuality(int $quality): void
    {
        if ($quality < self::MIN_QUALITY) {
            throw new InvalidArgumentException('Quality must be gather than %d', self::MIN_QUALITY);
        } elseif ($quality > self::MAX_QUALITY) {
            throw new InvalidArgumentException(sprintf('Quality must be lower than %d', self::MAX_QUALITY));
        }

        $this->quality = $quality;
    }

    /**
     * @return bool
     */
    protected function isQuantityMax(): bool
    {
        return $this->quality == 50;
    }

    /**
     * @return bool
     */
    protected function isSellInNegative(): bool
    {
        return $this->sellIn < 0;
    }

    /**
     * @param int $int
     * @return void
     */
    protected function addQuality(int $int): void
    {
        $this->setQuality($this->quality + $int);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "$this->name, $this->sellIn, $this->quality";
    }
}
