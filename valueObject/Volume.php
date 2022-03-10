<?php

namespace Gri3li\TradingApiContracts;

interface Volume
{
	public function getParam(): string;
	public function getValue(): string;
	public function __toString(): string;
}
