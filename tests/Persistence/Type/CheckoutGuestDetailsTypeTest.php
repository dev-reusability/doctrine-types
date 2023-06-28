<?php

declare(strict_types=1);

namespace DevReusability\DoctrineTypes\Tests\Persistence\Type;

use DevReusability\DoctrineTypes\Persistence\Type\CheckoutGuestDetailsType;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Exception;
use PHPUnit\Framework\TestCase;

use function serialize;

class CheckoutGuestDetailsTypeTest extends TestCase
{
    protected function setUp(): void
    {
        $this->platform = $this->createMock(AbstractPlatform::class);
        $this->type = new CheckoutGuestDetailsType();
    }

    public function testConvertsToDatabaseValue(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('NOT USED IN THIS PROJECT!');

        $this->type->convertToDatabaseValue([], $this->platform);
    }

    public function testConvertsToPHPValue(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('NOT USED IN THIS PROJECT!');

        $this->type->convertToPHPValue(serialize([]), $this->platform);
    }
}
