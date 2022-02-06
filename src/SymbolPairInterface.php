<?php

namespace Gri3li\TradingApiContracts;

interface SymbolPairInterface
{
	public function __construct(SymbolInterface $quote, SymbolInterface $counter);
	public function getQuote(): SymbolInterface;
	public function getCounter(): SymbolInterface;
	public function __toString(): string;
}