<?php

namespace Lsp\Protocol\Type;

/**
 * @generated
 */
final class ProgressParams
{
    /**
     * @param int<-2147483648, 2147483647>|string $token
     */
    final public function __construct(
        public readonly int|string $token,
        public readonly mixed $value,
    ) {}
}
