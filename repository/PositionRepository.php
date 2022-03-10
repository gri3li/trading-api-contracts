<?php

namespace Gri3li\TradingApiContracts;

interface PositionRepository
{
	public function getByIdentifier(Identifier $identifier, SymbolPair $symbolPair): Position;
	public function findAll(PositionFindCriteria $criteria): iterable;
	public function setRecvWindow(RecvWindow $window): void;
}
