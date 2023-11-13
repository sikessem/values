<?php

declare(strict_types=1);

namespace Sikessem\Values;

use Sikessem\Values\Concerns\AsScalar;
use Sikessem\Values\Contracts\ScalarType;

class ScalarValue implements \Stringable, ScalarType
{
    use AsScalar;

    public function __construct(protected bool|int|float|string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return (string) $this->get();
    }

    public function get(): bool|int|float|string
    {
        return $this->value;
    }
}
