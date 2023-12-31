<?php

declare(strict_types=1);

use Sikessem\Values\BoolValue;
use Sikessem\Values\Contracts\BoolType;
use Sikessem\Values\Contracts\ScalarType;
use Sikessem\Values\Conversion;

beforeEach(function () {
    $this->bool = Conversion::toBool(true);
});

it('should be instantiable', function () {
    expect($this->bool)->toBeInstanceOf(BoolValue::class);
});

it('should be an instance of BoolType', function () {
    expect($this->bool)->toBeInstanceOf(BoolType::class);
});

it('should be an instance of ScalarType', function () {
    expect($this->bool)->toBeInstanceOf(ScalarType::class);
});

it('should return the value', function () {
    expect($this->bool->get())->toBe(true);
});
