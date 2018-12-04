<?php

declare(strict_types=1);

namespace Soa\IdentifierGenerator;

use Ramsey\Uuid\Uuid;

class UuidIdentifierGenerator implements IdentifierGenerator
{
    public function nextIdentity(string $selector = ''): string
    {
        return Uuid::uuid4()->toString();
    }
}
