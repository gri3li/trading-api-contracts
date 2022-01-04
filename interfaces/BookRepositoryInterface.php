<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface BookRepositoryInterface
{
	public function setRecvWindow(RecvWindowInterface $window): self;
	public function findAskAll(FindCriteriaInterface $criteria): iterable;
	public function findBidAll(FindCriteriaInterface $criteria): iterable;
	public function findAskOne(FindCriteriaInterface $criteria): ?AskInterface;
	public function findBidOne(FindCriteriaInterface $criteria): ?BidInterface;
}
