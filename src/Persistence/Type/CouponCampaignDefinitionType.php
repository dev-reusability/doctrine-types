<?php

declare(strict_types=1);

namespace DevReusability\DoctrineTypes\Persistence\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\StringType;

class CouponCampaignDefinitionType extends StringType
{
    public const NAME = 'coupon_campaign_definition';

    public function getName(): string
    {
        return static::NAME;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        throw new \Exception('NOT USED IN THIS PROJECT!');
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        throw new \Exception('NOT USED IN THIS PROJECT!');
    }
}
