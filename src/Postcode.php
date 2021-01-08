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

namespace PHECovid\Postcodes;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Postcode
{
    /**
     * @var string
     */
    private $outwardCode;

    /**
     * @var string
     */
    private $inwardCode;

    /**
     * @var string
     */
    private $msoaCode;

    /**
     * @param string $outwardCode
     * @param string $inwardCode
     * @param string $msoaCode
     *
     * @return void
     */
    private function __construct(string $outwardCode, string $inwardCode, string $msoaCode)
    {
        $this->outwardCode = $outwardCode;
        $this->inwardCode = $inwardCode;
        $this->msoaCode = $msoaCode;
    }

    /**
     * @param string $postcode
     *
     * @return \PHECovid\Postcodes\Postcode
     */
    public static function create(string $postcode): self
    {
        $outwardCode = \rtrim(\substr($postcode, 0, -3));
        $class = \sprintf('PHECovid\Postcodes\Postcode\%s', $outwardCode);

        if (\class_exists($class)) {
            $inwardCode = \substr($postcode, -3);

            return new self($outwardCode, $inwardCode, $class::lookup($inwardCode));
        }

        throw new \InvalidArgumentException('Unknown outward code.');
    }

    /**
     * @return string
     */
    public function getOutwardCode(): string
    {
        return $this->outwardCode;
    }

    /**
     * @return string
     */
    public function getInwardCode(): string
    {
        return $this->inwardCode;
    }

    /**
     * @return string
     */
    public function getMsoaCode(): string
    {
        return $this->msoaCode;
    }
}
