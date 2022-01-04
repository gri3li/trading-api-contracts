<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface OhlcInterface
{
	public function __construct(
		SymbolPairInterface $symbolPair,
		VolumeInterface $volume,
		PriceInterface $open,
		PriceInterface $high,
		PriceInterface $low,
		PriceInterface $close
	);
	public function getSymbolPair(): SymbolPairInterface;
	public function getVolume(): VolumeInterface;
	public function getOpen(): PriceInterface;
	public function getHigh(): PriceInterface;
	public function getLow(): PriceInterface;
	public function getClose(): PriceInterface;
}
