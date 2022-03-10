<?php

namespace Gri3li\TradingApiContracts;

interface AccountType
{
	public const SPOT = 'SPOT';
	public const MARGIN = 'MARGIN';
	public const FUTURES = 'FUTURES';
	public const OPTION = 'OPTION';
	public function __toString(): string;
}
