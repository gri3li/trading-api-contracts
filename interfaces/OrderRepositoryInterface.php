<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface OrderRepositoryInterface
{
	public function setRecvWindow(RecvWindowInterface $window): self;
	public function add(OrderInterface $order, OrderTypeInterface $type): void;
	public function cancel(OrderInterface $order): void;
	public function getById(IdentifierInterface $identifier): OrderInterface;
	public function findOne(FindCriteriaInterface $criteria): ?OrderInterface;
	public function findAll(FindCriteriaInterface $criteria): iterable;
}
