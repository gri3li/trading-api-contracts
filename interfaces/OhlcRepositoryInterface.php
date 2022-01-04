<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface OhlcRepositoryInterface
{
	public function setRecvWindow(RecvWindowInterface $window): self;
	public function findOne(FindCriteriaInterface $criteria): ?OhlcInterface;
	public function findAll(FindCriteriaInterface $criteria): iterable;
}
