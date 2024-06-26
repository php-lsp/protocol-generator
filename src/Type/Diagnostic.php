<?php

namespace Lsp\Protocol\Type;

/**
 * Represents a diagnostic, such as a compiler error or warning. Diagnostic objects
 * are only valid in the scope of a resource.
 *
 * @generated
 */
final class Diagnostic
{
    /**
     * @param int<-2147483648, 2147483647>|string $code
     * @param list<DiagnosticTag> $tags
     * @param list<DiagnosticRelatedInformation> $relatedInformation
     */
    final public function __construct(
        public readonly Range $range,
        public readonly DiagnosticSeverity $severity,
        public readonly int|string $code,
        public readonly CodeDescription $codeDescription,
        public readonly string $source,
        public readonly string $message,
        public readonly array $tags,
        public readonly array $relatedInformation,
        public readonly mixed $data,
    ) {}
}
