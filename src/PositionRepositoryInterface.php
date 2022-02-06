<?php

namespace Gri3li\TradingApiContracts;

interface PositionRepositoryInterface
{
	public function setRecvWindow(RecvWindowInterface $window): self;
	public function getByIdentifier(IdentifierInterface $identifier): PositionInterface;
	public function findOne(FindCriteriaInterface $criteria): ?PositionInterface;
	public function findAll(FindCriteriaInterface $criteria): iterable;
}
