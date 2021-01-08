<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Postcode to MSOA.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\Tests\Postcodes;

use PHECovid\Postcodes\Postcode;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class PostcodeTest extends TestCase
{
    public function testCreate1(): void
    {
        $postcode = Postcode::create('WC1A 1AS');

        self::assertInstanceOf(Postcode::class, $postcode);
        self::assertSame('WC1A', $postcode->getOutwardCode());
        self::assertSame('1AS', $postcode->getInwardCode());
        self::assertSame('E02000193', $postcode->getMsoaCode());
    }

    public function testCreate2(): void
    {
        $postcode = Postcode::create('EC1Y0SF');

        self::assertInstanceOf(Postcode::class, $postcode);
        self::assertSame('EC1Y', $postcode->getOutwardCode());
        self::assertSame('0SF', $postcode->getInwardCode());
        self::assertSame('E02000575', $postcode->getMsoaCode());
    }

    public function testCreateInvalid1(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Postcode::create('E666666');
    }

    public function testCreateInvalid2(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Postcode::create('AL2666');
    }
}
