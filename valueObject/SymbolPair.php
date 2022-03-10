<?php

namespace Gri3li\TradingApiContracts;

interface SymbolPair
{
	public function __construct(Symbol $base, Symbol $quote);
	public function getBase(): Symbol;
	public function getQuote(): Symbol;
	public function getParam(): string;
	public function getValue(): string;
	public function __toString(): string;
}
