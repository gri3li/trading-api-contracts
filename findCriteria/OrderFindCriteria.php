<?php

namespace Gri3li\TradingApiContracts;

interface OrderFindCriteria
{
	public function __construct(SymbolPair $symbolPair);
	public function setStartTime(\DateTimeInterface $startTime): self;
	public function setEndTime(\DateTimeInterface $endTime): self;
	public function setLimit(int $limit): self;
	public function makeParams(): array;
}
