<?php

namespace Gri3li\TradingApiContracts;

interface OhlcRepository
{
	public function findAll(OrderFindCriteria $criteria): iterable;
	public function setRecvWindow(RecvWindow $window): void;
}
