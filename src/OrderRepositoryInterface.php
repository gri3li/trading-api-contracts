<?php

namespace Gri3li\TradingApiContracts;

interface OrderRepositoryInterface
{
	public function add(OrderInterface $order, OrderTypeInterface $type): void;
	public function getByIdentifier(IdentifierInterface $identifier): OrderInterface;
	public function cancelByIdentifier(IdentifierInterface $identifier): void;
	public function findOne(FindCriteriaInterface $criteria): ?OrderInterface;
	public function findAll(FindCriteriaInterface $criteria): iterable;
	public function setRecvWindow(RecvWindowInterface $window): self;
}
