<?php

namespace App\Item;

interface ItemInterface
{
    public function __toString(): string;

    public function update(): void;
}
