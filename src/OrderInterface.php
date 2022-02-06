<?php

namespace Gri3li\TradingApiContracts;

interface OrderInterface
{
	public function __construct(
		SideInterface $side,
		SymbolPairInterface $symbolPair,
		VolumeInterface $volume,
		OrderStatusInterface $status,
		IdentifierInterface $identifier
	);
	public function getSide(): SideInterface;
	public function getSymbolPair(): SymbolPairInterface;
	public function getVolume(): VolumeInterface;
	public function getStatus(): OrderStatusInterface;
	public function getIdentifier(): IdentifierInterface;
}
