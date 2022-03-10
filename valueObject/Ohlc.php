<?php

namespace Gri3li\TradingApiContracts;

interface Ohlc
{
	public function __construct(
		SymbolPair $symbolPair,
		Volume $volume,
		Price $open,
		Price $high,
		Price $low,
		Price $close
	);
	public function getSymbolPair(): SymbolPair;
	public function getVolume(): Volume;
	public function getOpen(): Price;
	public function getHigh(): Price;
	public function getLow(): Price;
	public function getClose(): Price;
}
