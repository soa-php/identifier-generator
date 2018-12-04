<?php

declare(strict_types=1);

namespace Soa\IdentifierGenerator;

interface IdentifierGenerator
{
    public function nextIdentity(string $selector = ''): string;
}
