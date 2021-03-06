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
final class HU14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02002718',
        '3AB' => 'E02002718',
        '3AD' => 'E02002718',
        '3AE' => 'E02002718',
        '3AF' => 'E02002718',
        '3AG' => 'E02002718',
        '3AH' => 'E02002718',
        '3AJ' => 'E02002718',
        '3AL' => 'E02002718',
        '3AN' => 'E02002718',
        '3AP' => 'E02002718',
        '3AQ' => 'E02002718',
        '3AR' => 'E02002718',
        '3AS' => 'E02002718',
        '3AT' => 'E02002718',
        '3AU' => 'E02002718',
        '3AW' => 'E02002718',
        '3AX' => 'E02002718',
        '3AY' => 'E02002718',
        '3AZ' => 'E02002718',
        '3BA' => 'E02002718',
        '3BB' => 'E02002718',
        '3BD' => 'E02002718',
        '3BE' => 'E02002718',
        '3BG' => 'E02002718',
        '3BJ' => 'E02002718',
        '3BL' => 'E02002715',
        '3BN' => 'E02002717',
        '3BP' => 'E02002718',
        '3BQ' => 'E02002718',
        '3BS' => 'E02002718',
        '3BT' => 'E02002718',
        '3BU' => 'E02002718',
        '3BW' => 'E02002718',
        '3BX' => 'E02002718',
        '3BY' => 'E02002718',
        '3BZ' => 'E02002718',
        '3DA' => 'E02002718',
        '3DB' => 'E02002718',
        '3DD' => 'E02002718',
        '3DE' => 'E02002718',
        '3DF' => 'E02002718',
        '3DG' => 'E02002718',
        '3DH' => 'E02002718',
        '3DJ' => 'E02002718',
        '3DL' => 'E02002718',
        '3DN' => 'E02002718',
        '3DP' => 'E02002718',
        '3DQ' => 'E02002718',
        '3DR' => 'E02002718',
        '3DS' => 'E02002718',
        '3DT' => 'E02002718',
        '3DU' => 'E02002718',
        '3DW' => 'E02002718',
        '3DX' => 'E02002718',
        '3DY' => 'E02002718',
        '3DZ' => 'E02002718',
        '3EA' => 'E02002718',
        '3EB' => 'E02002718',
        '3ED' => 'E02002718',
        '3EE' => 'E02002718',
        '3EF' => 'E02002718',
        '3EG' => 'E02002718',
        '3EH' => 'E02002718',
        '3EJ' => 'E02002718',
        '3EL' => 'E02002718',
        '3EN' => 'E02002718',
        '3EP' => 'E02002718',
        '3EQ' => 'E02002718',
        '3ER' => 'E02002718',
        '3ES' => 'E02002718',
        '3ET' => 'E02002718',
        '3EU' => 'E02002718',
        '3EW' => 'E02002718',
        '3EX' => 'E02002718',
        '3EY' => 'E02002718',
        '3EZ' => 'E02002718',
        '3FA' => 'E02002718',
        '3FB' => 'E02002718',
        '3FD' => 'E02002718',
        '3FE' => 'E02002718',
        '3FF' => 'E02002718',
        '3GA' => 'E02002718',
        '3GD' => 'E02002718',
        '3GE' => 'E02002718',
        '3GZ' => 'E02002715',
        '3HA' => 'E02002715',
        '3HB' => 'E02002718',
        '3HD' => 'E02002718',
        '3HE' => 'E02002718',
        '3HF' => 'E02002718',
        '3HG' => 'E02002715',
        '3HH' => 'E02002718',
        '3HJ' => 'E02002718',
        '3HL' => 'E02002718',
        '3HN' => 'E02002718',
        '3HP' => 'E02002715',
        '3HQ' => 'E02002715',
        '3HR' => 'E02002715',
        '3HS' => 'E02002715',
        '3HT' => 'E02002715',
        '3HU' => 'E02002715',
        '3HW' => 'E02002717',
        '3HX' => 'E02002718',
        '3HY' => 'E02002718',
        '3HZ' => 'E02002715',
        '3JA' => 'E02002718',
        '3JB' => 'E02002718',
        '3JD' => 'E02002718',
        '3JE' => 'E02002718',
        '3JF' => 'E02002718',
        '3JG' => 'E02002718',
        '3JH' => 'E02002718',
        '3JJ' => 'E02002718',
        '3JL' => 'E02002718',
        '3JN' => 'E02002718',
        '3JP' => 'E02002718',
        '3JQ' => 'E02002718',
        '3JR' => 'E02002718',
        '3JS' => 'E02002718',
        '3JT' => 'E02002718',
        '3JU' => 'E02002718',
        '3JW' => 'E02002718',
        '3JX' => 'E02002718',
        '3JY' => 'E02002718',
        '3JZ' => 'E02002718',
        '3LA' => 'E02002718',
        '3LB' => 'E02002718',
        '3LD' => 'E02002718',
        '3LE' => 'E02002718',
        '3LF' => 'E02002718',
        '3LG' => 'E02002718',
        '3LH' => 'E02002718',
        '3LJ' => 'E02002718',
        '3LL' => 'E02002718',
        '3LN' => 'E02002718',
        '3LP' => 'E02002718',
        '3LQ' => 'E02002718',
        '3LR' => 'E02002718',
        '3LS' => 'E02002718',
        '3LT' => 'E02002718',
        '3LU' => 'E02002718',
        '3LW' => 'E02002718',
        '3LX' => 'E02002718',
        '3LY' => 'E02002718',
        '3LZ' => 'E02002718',
        '3NA' => 'E02002718',
        '3NB' => 'E02002718',
        '3ND' => 'E02002718',
        '3NE' => 'E02002718',
        '3NF' => 'E02002718',
        '3NG' => 'E02002711',
        '3NH' => 'E02002718',
        '3NJ' => 'E02002718',
        '3NL' => 'E02002718',
        '3NN' => 'E02002718',
        '3NP' => 'E02002718',
        '3NQ' => 'E02002718',
        '3NR' => 'E02002718',
        '3NS' => 'E02002718',
        '3NT' => 'E02002718',
        '3NU' => 'E02002718',
        '3NW' => 'E02002718',
        '3NX' => 'E02002718',
        '3NY' => 'E02002718',
        '3NZ' => 'E02002718',
        '3PA' => 'E02002718',
        '3PB' => 'E02002718',
        '3PD' => 'E02002718',
        '3PE' => 'E02002718',
        '3PF' => 'E02002718',
        '3PG' => 'E02002718',
        '3PH' => 'E02002718',
        '3PJ' => 'E02002718',
        '3PL' => 'E02002718',
        '3PN' => 'E02002718',
        '3PP' => 'E02002718',
        '3PQ' => 'E02002718',
        '3PR' => 'E02002718',
        '3PS' => 'E02002718',
        '3PT' => 'E02002718',
        '3PU' => 'E02002715',
        '3PW' => 'E02002718',
        '3PX' => 'E02002718',
        '3PY' => 'E02002718',
        '3PZ' => 'E02002718',
        '3QA' => 'E02002718',
        '3QB' => 'E02002718',
        '3QD' => 'E02002718',
        '3QE' => 'E02002718',
        '3QF' => 'E02002718',
        '3QG' => 'E02002718',
        '3QH' => 'E02002718',
        '3QJ' => 'E02002718',
        '3QL' => 'E02002718',
        '3QN' => 'E02002718',
        '3QP' => 'E02002718',
        '3QR' => 'E02002718',
        '3QS' => 'E02002718',
        '3QT' => 'E02002718',
        '3QU' => 'E02002718',
        '3QW' => 'E02002718',
        '3QX' => 'E02002718',
        '3QY' => 'E02002718',
        '3QZ' => 'E02002718',
        '3RA' => 'E02002715',
        '3RB' => 'E02002718',
        '3RD' => 'E02002718',
        '3RE' => 'E02002718',
        '3RF' => 'E02002718',
        '3RG' => 'E02002718',
        '3RH' => 'E02002718',
        '3RJ' => 'E02002718',
        '3RL' => 'E02002718',
        '3RN' => 'E02002718',
        '3RP' => 'E02002718',
        '3RQ' => 'E02002718',
        '3RR' => 'E02002718',
        '3RS' => 'E02002718',
        '3RT' => 'E02002718',
        '3RU' => 'E02002718',
        '3RW' => 'E02002718',
        '3SA' => 'E02002718',
        '3SB' => 'E02002718',
        '3SL' => 'E02002718',
        '3UX' => 'E02002717',
        '3UY' => 'E02002717',
        '3UZ' => 'E02002717',
        '3WA' => 'E02002718',
        '3WB' => 'E02002717',
        '3WD' => 'E02002717',
        '3WE' => 'E02002717',
        '3WF' => 'E02002717',
        '3WG' => 'E02002717',
        '3WH' => 'E02002717',
        '3WJ' => 'E02002717',
        '3WL' => 'E02002717',
        '3WN' => 'E02002717',
        '3WP' => 'E02002718',
        '3WQ' => 'E02002717',
        '3WR' => 'E02002717',
        '3WS' => 'E02002718',
        '3WT' => 'E02002717',
        '3WU' => 'E02002717',
        '3WW' => 'E02002717',
        '3WX' => 'E02002717',
        '3WY' => 'E02002717',
        '3WZ' => 'E02002717',
        '3XA' => 'E02002717',
        '3XB' => 'E02002717',
        '3XD' => 'E02002718',
        '3XF' => 'E02002718',
        '3XG' => 'E02002718',
        '3XH' => 'E02002717',
        '3XJ' => 'E02002718',
        '3XL' => 'E02002718',
        '3XN' => 'E02002717',
        '3XP' => 'E02002718',
        '3XQ' => 'E02002718',
        '3XR' => 'E02002718',
        '3XS' => 'E02002718',
        '3XT' => 'E02002718',
        '3XU' => 'E02002718',
        '3XW' => 'E02002717',
        '3XX' => 'E02002718',
        '3XY' => 'E02002717',
        '3XZ' => 'E02002718',
        '3YA' => 'E02002718',
        '3YB' => 'E02002718',
        '3YD' => 'E02002718',
        '3YE' => 'E02002718',
        '3YF' => 'E02002717',
        '3YG' => 'E02002718',
        '3YH' => 'E02002718',
        '3YJ' => 'E02002717',
        '3YL' => 'E02002718',
        '3YN' => 'E02002718',
        '3YP' => 'E02002717',
        '3YQ' => 'E02002718',
        '3YR' => 'E02002718',
        '3YS' => 'E02002718',
        '3YT' => 'E02002718',
        '3YU' => 'E02002718',
        '3YW' => 'E02002718',
        '3YX' => 'E02002718',
        '3YY' => 'E02002718',
        '3YZ' => 'E02002718',
        '3ZA' => 'E02002717',
        '3ZB' => 'E02002717',
        '3ZD' => 'E02002717',
        '3ZE' => 'E02002717',
        '9AA' => 'E02002717',
        '9AB' => 'E02002717',
        '9AD' => 'E02002717',
        '9AE' => 'E02002717',
        '9AF' => 'E02002717',
        '9AG' => 'E02002717',
        '9AH' => 'E02002717',
        '9AJ' => 'E02002717',
        '9AL' => 'E02002717',
        '9AN' => 'E02002717',
        '9AP' => 'E02002717',
        '9AQ' => 'E02002717',
        '9AR' => 'E02002717',
        '9AS' => 'E02002717',
        '9AT' => 'E02002717',
        '9AU' => 'E02002717',
        '9AW' => 'E02002717',
        '9AX' => 'E02002717',
        '9AY' => 'E02002717',
        '9AZ' => 'E02002717',
        '9BA' => 'E02002717',
        '9BB' => 'E02002717',
        '9BD' => 'E02002717',
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
