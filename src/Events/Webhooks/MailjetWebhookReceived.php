<?php

namespace Cornatul\Marketing\Base\Events\Webhooks;

class MailjetWebhookReceived
{
    /** @var array */
    public array $payload;

    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
