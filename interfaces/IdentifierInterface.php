<?php

namespace Gri3li\TradingApiContracts\interfaces;

interface IdentifierInterface
{
	public function __construct(?string $clientId = null, ?string $id = null);
	public function getClientId(): ?string;
	public function getId(): ?string;
}
