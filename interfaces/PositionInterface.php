<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface PositionInterface
{
	public function __construct(
		IdentifierInterface $identifier,
		SymbolPairInterface $symbolPair,
		SideInterface $side,
		VolumeInterface $volume,
		PriceInterface $entryPrice,
		PriceInterface $markPrice,
		PriceInterface $unRealizedProfit
	);
	public function getIdentifier(): IdentifierInterface;
	public function getSymbolPair(): SymbolPairInterface;
	public function getSide(): SideInterface;
	public function getVolume(): VolumeInterface;
	public function getEntryPrice(): PriceInterface;
	public function getMarkPrice(): PriceInterface;
	public function getUnRealizedProfit(): PriceInterface;
}
