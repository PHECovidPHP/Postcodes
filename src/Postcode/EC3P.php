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
final class EC3P
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02000575',
        '3AB' => 'E02000575',
        '3AD' => 'E02000575',
        '3AE' => 'E02000575',
        '3AF' => 'E02000575',
        '3AG' => 'E02000575',
        '3AH' => 'E02000001',
        '3AJ' => 'E02000001',
        '3AL' => 'E02000001',
        '3AN' => 'E02000575',
        '3AP' => 'E02000575',
        '3AQ' => 'E02000575',
        '3AR' => 'E02000001',
        '3AS' => 'E02000575',
        '3AT' => 'E02000575',
        '3AU' => 'E02000575',
        '3AW' => 'E02000575',
        '3AX' => 'E02000575',
        '3AY' => 'E02000575',
        '3BA' => 'E02000575',
        '3BB' => 'E02000575',
        '3BD' => 'E02000575',
        '3BE' => 'E02000575',
        '3BF' => 'E02000575',
        '3BG' => 'E02000575',
        '3BH' => 'E02000575',
        '3BJ' => 'E02000575',
        '3BL' => 'E02000575',
        '3BN' => 'E02000575',
        '3BP' => 'E02000575',
        '3BQ' => 'E02000575',
        '3BR' => 'E02000575',
        '3BS' => 'E02000575',
        '3BT' => 'E02000575',
        '3BU' => 'E02000575',
        '3BW' => 'E02000575',
        '3BX' => 'E02000575',
        '3BY' => 'E02000575',
        '3BZ' => 'E02000575',
        '3DA' => 'E02000575',
        '3DB' => 'E02000575',
        '3DD' => 'E02000575',
        '3DE' => 'E02000575',
        '3DF' => 'E02000575',
        '3DG' => 'E02000575',
        '3DH' => 'E02000575',
        '3DJ' => 'E02000575',
        '3DL' => 'E02000575',
        '3DN' => 'E02000575',
        '3DP' => 'E02000575',
        '3DQ' => 'E02000001',
        '3DR' => 'E02000575',
        '3DS' => 'E02000575',
        '3DT' => 'E02000575',
        '3DU' => 'E02000575',
        '3DX' => 'E02000575',
        '3DY' => 'E02000575',
        '3DZ' => 'E02000575',
        '3EA' => 'E02000001',
        '3EB' => 'E02000575',
        '3ED' => 'E02000575',
        '3EH' => 'E02000001',
        '3EN' => 'E02000001',
        '3EP' => 'E02000001',
        '3EQ' => 'E02000001',
        '3ES' => 'E02000001',
        '3EU' => 'E02000001',
        '3EX' => 'E02000001',
        '3EY' => 'E02000001',
        '3FA' => 'E02000001',
        '3FB' => 'E02000575',
        '3FD' => 'E02000575',
        '3FE' => 'E02000575',
        '3FF' => 'E02000575',
        '3FG' => 'E02000575',
        '3FH' => 'E02000575',
        '3FJ' => 'E02000575',
        '3FL' => 'E02000575',
        '3FN' => 'E02000575',
        '3FP' => 'E02000575',
        '3FQ' => 'E02000575',
        '3FR' => 'E02000575',
        '3FS' => 'E02000575',
        '3FT' => 'E02000575',
        '3FU' => 'E02000575',
        '3FW' => 'E02000575',
        '3FX' => 'E02000575',
        '3FY' => 'E02000575',
        '3FZ' => 'E02000575',
        '3HA' => 'E02000575',
        '3HB' => 'E02000001',
        '3HD' => 'E02000001',
        '3HH' => 'E02000001',
        '3HL' => 'E02000001',
        '3HP' => 'E02000001',
        '3HT' => 'E02000001',
        '3HX' => 'E02000575',
        '3HY' => 'E02000575',
        '3WA' => 'E02000575',
        '3WB' => 'E02000575',
        '3WE' => 'E02000575',
        '3WF' => 'E02000575',
        '3WG' => 'E02000575',
        '3WH' => 'E02000575',
        '3WJ' => 'E02000575',
        '3WL' => 'E02000575',
        '3WN' => 'E02000575',
        '3WP' => 'E02000575',
        '3WQ' => 'E02000575',
        '3WR' => 'E02000575',
        '3WS' => 'E02000575',
        '3WT' => 'E02000575',
        '3WU' => 'E02000575',
        '3WW' => 'E02000575',
        '3WX' => 'E02000575',
        '3WY' => 'E02000575',
        '3WZ' => 'E02000575',
        '3XA' => 'E02000575',
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
