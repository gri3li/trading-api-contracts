<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface PositionRepositoryInterface
{
	public function setRecvWindow(RecvWindowInterface $window): self;
	public function getById(IdentifierInterface $identifier): PositionInterface;
	public function findOne(FindCriteriaInterface $criteria): ?PositionInterface;
	public function findAll(FindCriteriaInterface $criteria): iterable;
}
