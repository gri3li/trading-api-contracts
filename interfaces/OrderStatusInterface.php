<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface OrderStatusInterface
{
	public const NEW = 'NEW';
	public const FILLED = 'FILLED';
	public const PARTIALLY_FILLED = 'PARTIALLY_FILLED';
	public const CANCELED = 'CANCELED';
	public const PENDING_CANCEL = 'PENDING_CANCEL';
	public const REJECTED = 'REJECTED';
	public const EXPIRED = 'EXPIRED';
	public function __toString(): string;
}
