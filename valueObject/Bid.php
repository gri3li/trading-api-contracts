<?php

namespace Gri3li\TradingApiContracts;

interface Bid
{
	public function __construct(SymbolPair $symbolPair, Price $price, Volume $volume);
	public function getSymbolPair(): SymbolPair;
	public function getPrice(): Price;
	public function getVolume(): Volume;
}
