<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface AccountInterface
{
	public function __construct(
		AccountExchangeInterface $exchange,
		AccountTypeInterface $type,
		SymbolInterface $symbol,
		VolumeInterface $volume
	);
	public function getExchange(): AccountExchangeInterface;
	public function getType(): AccountTypeInterface;
	public function getSymbol(): SymbolInterface;
	public function getVolume(): VolumeInterface;
}
