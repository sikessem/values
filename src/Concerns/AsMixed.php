<?php

declare(strict_types=1);

namespace Sikessem\Values\Concerns;

use Sikessem\Values\Contracts\MixedType;

trait AsMixed
{
    public static function from(mixed $value): self
    {
        if ($value instanceof static) {
            return $value;
        }

        if ($value instanceof self) {
            /** @var mixed */
            $value = $value->get();
        }

        return new self($value);
    }

    /**
     * @param  class-string<MixedType>  $type
     */
    public function to(string $type): MixedType
    {
        return $type::from($this->get());
    }
}
