<?php

namespace Gri3li\TradingApiContracts;

interface Side
{
	public const LONG = 'LONG';
	public const SHORT = 'SHORT';

	public function getParam(): string;
	public function getValue(): string;
	public function __toString(): string;
}
