<?php

declare(strict_types=1);

namespace Cornatul\Marketing\Base\Traits;

trait NormalizeTags
{
    protected function normalizeTags(string $content, string $tag): string
    {
        $search = [
            '{{ ' . $tag . ' }}',
            '{{' . $tag . ' }}',
            '{{ ' . $tag . '}}',
        ];

        return str_ireplace($search, '{{' . $tag . '}}', $content);
    }
}
