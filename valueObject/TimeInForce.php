<?php

namespace Gri3li\TradingApiContracts;

interface TimeInForce
{
	public const GOOD_TILL_CANCELED = 'GTC';
	public const IMMEDIATE_OR_CANCEL = 'IOC';
	public const FILL_OR_KILL = 'FOK';
	public const GOOD_TILL_DATE = 'GTD';

	public function getParam(): string;
	public function getValue(): string;
	public function __toString(): string;
}
