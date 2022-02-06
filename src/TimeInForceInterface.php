<?php

namespace Gri3li\TradingApiContracts;

interface TimeInForceInterface
{
	public const GOOD_TILL_CANCELED = 'GTC';
	public const IMMEDIATE_OR_CANCEL = 'IOC';
	public const FILL_OR_KILL = 'FOK';
	public const GOOD_TILL_DATE = 'GTD';
	public function __toString(): string;
}
