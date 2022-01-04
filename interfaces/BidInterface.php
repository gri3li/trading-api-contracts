<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface BidInterface
{
	public function __construct(SymbolPairInterface $symbolPair, PriceInterface $price, VolumeInterface $volume);
	public function getSymbolPair(): SymbolPairInterface;
	public function getPrice(): PriceInterface;
	public function getVolume(): VolumeInterface;
}
