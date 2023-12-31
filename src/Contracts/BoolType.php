<?php

declare(strict_types=1);

namespace Sikessem\Values\Contracts;

interface BoolType extends ScalarType
{
    public function get(): bool;

    public function isTrue(): bool;

    public function isFalse(): bool;

    public function toTrue(): self;

    public function toFalse(): self;

    public static function isTruthy(bool $value): bool;

    public static function isFalsy(bool $value): bool;

    public static function truthify(mixed $value): self;

    public static function falsify(mixed $value): self;
}
