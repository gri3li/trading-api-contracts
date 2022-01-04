<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface SideInterface
{
	public const LONG = 'LONG';
	public const SHORT = 'SHORT';
	public function __toString(): string;
}
