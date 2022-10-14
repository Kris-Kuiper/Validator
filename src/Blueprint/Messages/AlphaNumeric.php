<?php

declare(strict_types=1);

namespace KrisKuiper\Validator\Blueprint\Messages;

use KrisKuiper\Validator\Blueprint\Rules\AlphaNumeric as AlphaNumericRule;

class AlphaNumeric extends AbstractMessage
{
    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return AlphaNumericRule::NAME;
    }
}
