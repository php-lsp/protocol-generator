<?php

namespace Lsp\Protocol\Type;

/**
 * Completion parameters
 *
 * @generated
 */
final class CompletionParams
{
    use WorkDoneProgressParamsMixin;

    use PartialResultParamsMixin;

    use TextDocumentPositionParamsMixin;

    /**
     * @param int<-2147483648, 2147483647>|string $workDoneToken
     * @param int<-2147483648, 2147483647>|string $partialResultToken
     */
    final public function __construct(
        public readonly CompletionContext $context,
        TextDocumentIdentifier $textDocument,
        Position $position,
        int|string $workDoneToken,
        int|string $partialResultToken,
    ) {
        $this->textDocument = $textDocument;

        $this->position = $position;

        $this->workDoneToken = $workDoneToken;

        $this->partialResultToken = $partialResultToken;
    }
}
