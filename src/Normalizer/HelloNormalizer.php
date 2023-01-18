<?php

declare(strict_types=1);

namespace App\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class HelloNormalizer implements NormalizerInterface
{
    public function supportsNormalization($data, string $format = null): bool
    {
        return false;
    }

    public function normalize($object, string $format = null, array $context = []): bool
    {
        return false;
    }
}
