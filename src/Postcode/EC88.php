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
final class EC88
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000371',
        '1AB' => 'E02000371',
        '1AQ' => 'E02000371',
        '1AS' => 'E02000371',
        '1AT' => 'E02000371',
        '1AU' => 'E02000371',
        '1BB' => 'E02000371',
        '1BD' => 'E02000371',
        '1BE' => 'E02000371',
        '1BH' => 'E02000371',
        '1BJ' => 'E02000371',
        '1BL' => 'E02000371',
        '1BN' => 'E02000371',
        '1BP' => 'E02000371',
        '1BQ' => 'E02000371',
        '1BR' => 'E02000371',
        '1BS' => 'E02000371',
        '1BT' => 'E02000371',
        '1BU' => 'E02000371',
        '1BX' => 'E02000371',
        '1DA' => 'E02000371',
        '1DB' => 'E02000371',
        '1DD' => 'E02000371',
        '1HA' => 'E02000371',
        '1HB' => 'E02000371',
        '1HD' => 'E02000371',
        '1HE' => 'E02000371',
        '1HH' => 'E02000371',
        '1HJ' => 'E02000371',
        '1HL' => 'E02000371',
        '1HN' => 'E02000371',
        '1HP' => 'E02000371',
        '1HR' => 'E02000371',
        '1NG' => 'E02000371',
        '1SD' => 'E02000371',
        '1SE' => 'E02000371',
        '1SH' => 'E02000371',
        '1SJ' => 'E02000371',
        '1SL' => 'E02000371',
        '1SN' => 'E02000371',
        '1SP' => 'E02000371',
        '1SQ' => 'E02000371',
        '1SR' => 'E02000371',
        '1SS' => 'E02000371',
        '1ST' => 'E02000371',
        '1SU' => 'E02000371',
        '1SX' => 'E02000371',
        '1SY' => 'E02000371',
        '1TA' => 'E02000371',
        '1TB' => 'E02000371',
        '1TD' => 'E02000371',
        '1TE' => 'E02000371',
        '1TH' => 'E02000371',
        '1TJ' => 'E02000371',
        '1TL' => 'E02000371',
        '1TQ' => 'E02000371',
        '1XX' => 'E02000371',
        '1ZT' => 'E02000371',
        '1ZU' => 'E02000371',
        '1ZW' => 'E02000371',
        '1ZX' => 'E02000371',
        '1ZY' => 'E02000371',
        '1ZZ' => 'E02000371',
        '2NG' => 'E02000889',
        '3NG' => 'E02000889',
        '4NG' => 'E02000889',
        '5NG' => 'E02000889',
        '6NG' => 'E02000889',
        '7NG' => 'E02000889',
        '8NG' => 'E02000889',
        '9NG' => 'E02000889',
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
