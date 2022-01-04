<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface OrderTypeInterface
{
	public function makeParams(OrderInterface $order): array;
}
