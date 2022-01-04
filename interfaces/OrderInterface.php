<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface OrderInterface
{
	public function __construct(
		IdentifierInterface $identifier,
		OrderStatusInterface $status,
		SymbolPairInterface $symbolPair,
		SideInterface $side,
		VolumeInterface $volume
	);
	public function getIdentifier(): IdentifierInterface;
	public function getStatus(): OrderStatusInterface;
	public function getSymbolPair(): SymbolPairInterface;
	public function getSide(): SideInterface;
	public function getVolume(): VolumeInterface;
}
