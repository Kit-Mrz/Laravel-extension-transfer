<?php

namespace Mrzkit\LaravelExtensionTransfer;

use Illuminate\Support\Arr;
use InvalidArgumentException;
use Mrzkit\LaravelExtensionStructureStrategy\StructureStrategy;

abstract class TransferAbstract implements Arrayable
{
    use StructureStrategy;

    /**
     * @desc
     * @return array
     */
    final public function toArray() : array
    {
        if ($this->isUnderline()) {
            return static::toArrayUnderline();
        } else if ($this->isHump()) {
            return static::toArrayHump();
        } else {
            throw new InvalidArgumentException();
        }
    }

    /**
     * @desc 忽略指定字段输出
     * @param array $ignoreFields
     * @return array
     */
    final public function exceptToArray(array $ignoreFields) : array
    {
        return Arr::except($this->toArray(), $ignoreFields);
    }

    /**
     * @desc
     * @return array
     */
    abstract protected function toArrayUnderline() : array;

    /**
     * @desc
     * @return array
     */
    abstract protected function toArrayHump() : array;
}
