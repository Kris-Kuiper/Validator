<?php

declare(strict_types=1);

namespace KrisKuiper\Validator\Blueprint\Middleware\Transforms;

use KrisKuiper\Validator\Blueprint\Contracts\MiddlewareFieldInterface;

class ToLowercase extends AbstractMiddleware
{
    /**
     * @inheritdoc
     */
    public function handle(MiddlewareFieldInterface $field): void
    {
        $value = $field->getValue();

        if (false === is_string($value)) {
            return;
        }

        $field->setValue(mb_strtolower($value));
    }
}
