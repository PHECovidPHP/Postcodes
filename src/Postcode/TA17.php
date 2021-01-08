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

namespace PHECovid\Postcodes\Postcode;

/**
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class TA17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8RX' => 'E02006091',
        '8RY' => 'E02006091',
        '8RZ' => 'E02006091',
        '8SA' => 'E02006091',
        '8SB' => 'E02006091',
        '8SD' => 'E02006091',
        '8SE' => 'E02006091',
        '8SF' => 'E02006091',
        '8SG' => 'E02006091',
        '8SH' => 'E02006091',
        '8SJ' => 'E02006091',
        '8SL' => 'E02006091',
        '8SN' => 'E02006091',
        '8SP' => 'E02006091',
        '8SQ' => 'E02006091',
        '8SR' => 'E02006091',
        '8SS' => 'E02006091',
        '8ST' => 'E02006091',
        '8SU' => 'E02006091',
        '8SW' => 'E02006091',
        '8SX' => 'E02006091',
        '8SY' => 'E02006091',
        '8SZ' => 'E02006098',
        '8TA' => 'E02006098',
        '8TB' => 'E02006098',
        '8TD' => 'E02006098',
        '8TE' => 'E02006091',
        '8TF' => 'E02006098',
        '8TG' => 'E02006098',
        '8TH' => 'E02006091',
        '8TJ' => 'E02006091',
        '8TL' => 'E02006098',
        '8TN' => 'E02006091',
        '8TQ' => 'E02006098',
        '8TW' => 'E02006091',
        '8ZN' => 'E02006091',
    ];

    /**
     * @param string $inwardCode
     *
     * @return string
     */
    public static function lookup(string $inwardCode): string
    {
        $msoaCode = self::MAP[$inwardCode] ?? null;

        if (null === $msoaCode) {
            throw new \InvalidArgumentException('Unknown inward code.');
        }

        return $msoaCode;
    }
}
