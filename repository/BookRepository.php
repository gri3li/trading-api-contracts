<?php

namespace Gri3li\TradingApiContracts;

interface BookRepository
{
	public function findAskAll(BookFindCriteria $criteria): iterable;
	public function findBidAll(BookFindCriteria $criteria): iterable;
	public function setRecvWindow(RecvWindow $window): void;
}
