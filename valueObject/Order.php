<?php

namespace Gri3li\TradingApiContracts;

interface Order
{
	public function __construct(
		Side $side,
		SymbolPair $symbolPair,
		Volume $volume,
		OrderStatus $status,
		Identifier $identifier
	);
	public function getSide(): Side;
	public function getSymbolPair(): SymbolPair;
	public function getVolume(): Volume;
	public function getStatus(): OrderStatus;
	public function getIdentifier(): Identifier;
}
