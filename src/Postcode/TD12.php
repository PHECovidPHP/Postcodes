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
final class TD12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4FH' => 'E02005708',
        '4QA' => 'E02005707',
        '4QB' => 'E02005708',
        '4QD' => 'E02005708',
        '4QE' => 'E02005708',
        '4QF' => 'E02005708',
        '4QG' => 'E02005708',
        '4QH' => 'E02005708',
        '4QJ' => 'E02005708',
        '4QL' => 'E02005708',
        '4QN' => 'E02005708',
        '4QP' => 'E02005708',
        '4QQ' => 'E02005708',
        '4QR' => 'E02005708',
        '4QS' => 'E02005708',
        '4QT' => 'E02005708',
        '4QW' => 'E02005708',
        '4RA' => 'E02005707',
        '4RB' => 'E02005708',
        '4RD' => 'E02005708',
        '4RE' => 'E02005708',
        '4RF' => 'E02005708',
        '4RG' => 'E02005708',
        '4RH' => 'E02005708',
        '4RJ' => 'E02005708',
        '4RP' => 'E02005708',
        '4RQ' => 'E02005708',
        '4RR' => 'E02005708',
        '4RS' => 'E02005708',
        '4RT' => 'E02005708',
        '4RW' => 'E02005708',
        '4SA' => 'E02005707',
        '4SB' => 'E02005707',
        '4SD' => 'E02005707',
        '4SF' => 'E02005708',
        '4SG' => 'E02005708',
        '4SH' => 'E02005708',
        '4SJ' => 'E02005708',
        '4SL' => 'E02005708',
        '4SN' => 'E02005708',
        '4SP' => 'E02005708',
        '4SQ' => 'E02005708',
        '4SR' => 'E02005708',
        '4SS' => 'E02005708',
        '4ST' => 'E02005708',
        '4SW' => 'E02005708',
        '4SX' => 'E02005708',
        '4SY' => 'E02005708',
        '4SZ' => 'E02005708',
        '4TA' => 'E02005708',
        '4TB' => 'E02005708',
        '4TD' => 'E02005708',
        '4TE' => 'E02005708',
        '4TF' => 'E02005708',
        '4TG' => 'E02005708',
        '4TH' => 'E02005708',
        '4TJ' => 'E02005708',
        '4TL' => 'E02005708',
        '4TN' => 'E02005708',
        '4TP' => 'E02005708',
        '4TQ' => 'E02005708',
        '4TR' => 'E02005708',
        '4TS' => 'E02005707',
        '4TW' => 'E02005708',
        '4TX' => 'E02005707',
        '4UA' => 'E02005707',
        '4UB' => 'E02005707',
        '4UD' => 'E02005707',
        '4UE' => 'E02005707',
        '4UF' => 'E02005707',
        '4UG' => 'E02005707',
        '4UH' => 'E02005707',
        '4UJ' => 'E02005707',
        '4UL' => 'E02005707',
        '4UN' => 'E02005707',
        '4UP' => 'E02005707',
        '4UQ' => 'E02005707',
        '4UR' => 'E02005707',
        '4US' => 'E02005707',
        '4UT' => 'E02005707',
        '4UU' => 'E02005707',
        '4UW' => 'E02005707',
        '4UX' => 'E02005707',
        '4UY' => 'E02005707',
        '4UZ' => 'E02005707',
        '4WB' => 'E02005707',
        '4XA' => 'E02005707',
        '4XB' => 'E02005707',
        '4XD' => 'E02005707',
        '4XF' => 'E02005707',
        '4XG' => 'E02005707',
        '4XH' => 'E02005707',
        '4XJ' => 'E02005708',
        '4XL' => 'E02005708',
        '4XN' => 'E02005707',
        '4XQ' => 'E02005707',
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
