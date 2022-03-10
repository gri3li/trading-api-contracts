<?php

namespace Gri3li\TradingApiContracts;

interface Account
{
	public function __construct(
		AccountExchange $exchange,
		AccountType $type,
		Symbol $symbol,
		Volume $volume
	);
	public function getExchange(): AccountExchange;
	public function getType(): AccountType;
	public function getSymbol(): Symbol;
	public function getVolume(): Volume;
}
