<?php

namespace Gri3li\TradingApiContracts;

interface AccountRepositoryInterface
{
	public function setRecvWindow(RecvWindowInterface $window): self;
	public function findOne(FindCriteriaInterface $criteria): ?AccountInterface;
	public function findAll(FindCriteriaInterface $criteria): iterable;
	public function transfer(AccountInterface $from, AccountInterface $to): void;
	public function deposit(AccountInterface $to): void;
	public function withdraw(AccountInterface $from): void;
}
