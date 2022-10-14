<?php

declare(strict_types=1);

namespace KrisKuiper\Validator\Blueprint\Contracts;

use KrisKuiper\Validator\Blueprint\Events\Event;

interface RuleInterface
{
    /**
     * Returns the name of the rule
     */
    public function getName(): string;

    /**
     * Returns if the field under validation is valid or not
     */
    public function isValid(Event $event): bool;

    /**
     * Returns the error message
     */
    public function getMessage(): string;
}
