<?php

namespace Gri3li\TradingApiContracts;

interface OrderRepository
{
	public function getByIdentifier(Identifier $identifier, SymbolPair $symbolPair): Order;
	public function add(Order $order, OrderType $type): void;
	public function cancel(Order $order): void;
	public function findAll(OrderFindCriteria $criteria): iterable;
	public function setRecvWindow(RecvWindow $window): void;
}
