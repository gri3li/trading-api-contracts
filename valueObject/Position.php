<?php

namespace Gri3li\TradingApiContracts;

interface Position
{
	public function __construct(
		Identifier $identifier,
		SymbolPair $symbolPair,
		Side $side,
		Volume $volume,
		Price $entryPrice,
		Price $markPrice,
		Price $unRealizedProfit
	);
	public function getIdentifier(): Identifier;
	public function getSymbolPair(): SymbolPair;
	public function getSide(): Side;
	public function getVolume(): Volume;
	public function getEntryPrice(): Price;
	public function getMarkPrice(): Price;
	public function getUnRealizedPnL(): Price;
}
