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
final class GL19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02004626',
        '3AB' => 'E02004626',
        '3AD' => 'E02004626',
        '3AE' => 'E02004626',
        '3AF' => 'E02004626',
        '3AG' => 'E02004626',
        '3AH' => 'E02004626',
        '3AJ' => 'E02004626',
        '3AL' => 'E02004626',
        '3AN' => 'E02004626',
        '3AP' => 'E02004626',
        '3AQ' => 'E02004626',
        '3AR' => 'E02004626',
        '3AS' => 'E02004626',
        '3AT' => 'E02004626',
        '3AU' => 'E02004626',
        '3AW' => 'E02004626',
        '3AX' => 'E02004626',
        '3AY' => 'E02004626',
        '3AZ' => 'E02004669',
        '3BA' => 'E02004671',
        '3BB' => 'E02004671',
        '3BD' => 'E02004626',
        '3BE' => 'E02004626',
        '3BG' => 'E02004626',
        '3BH' => 'E02004626',
        '3BJ' => 'E02004626',
        '3BL' => 'E02004626',
        '3BN' => 'E02004626',
        '3BP' => 'E02004626',
        '3BQ' => 'E02004626',
        '3BS' => 'E02004626',
        '3BT' => 'E02004626',
        '3BU' => 'E02004626',
        '3BW' => 'E02004626',
        '3BX' => 'E02004626',
        '3BY' => 'E02004626',
        '3BZ' => 'E02004626',
        '3DA' => 'E02004626',
        '3DB' => 'E02004626',
        '3DD' => 'E02004626',
        '3DE' => 'E02004626',
        '3DF' => 'E02004626',
        '3DG' => 'E02004626',
        '3DH' => 'E02004626',
        '3DJ' => 'E02004626',
        '3DL' => 'E02004626',
        '3DN' => 'E02004626',
        '3DP' => 'E02004626',
        '3DQ' => 'E02004626',
        '3DR' => 'E02004626',
        '3DS' => 'E02004626',
        '3DT' => 'E02004626',
        '3DU' => 'E02004626',
        '3DW' => 'E02004626',
        '3DX' => 'E02004626',
        '3DY' => 'E02004626',
        '3DZ' => 'E02004626',
        '3EA' => 'E02004626',
        '3EB' => 'E02004626',
        '3ED' => 'E02004626',
        '3EE' => 'E02004626',
        '3EF' => 'E02004626',
        '3EG' => 'E02004626',
        '3EH' => 'E02004626',
        '3EJ' => 'E02004626',
        '3EL' => 'E02004626',
        '3EN' => 'E02004626',
        '3EP' => 'E02004626',
        '3EQ' => 'E02004626',
        '3ER' => 'E02004626',
        '3ES' => 'E02004626',
        '3ET' => 'E02004626',
        '3EU' => 'E02004626',
        '3EW' => 'E02004626',
        '3EX' => 'E02004626',
        '3EY' => 'E02004626',
        '3EZ' => 'E02004626',
        '3FA' => 'E02004626',
        '3FB' => 'E02004626',
        '3FD' => 'E02004626',
        '3FE' => 'E02004626',
        '3FF' => 'E02004626',
        '3HA' => 'E02004626',
        '3HB' => 'E02004626',
        '3HG' => 'E02004626',
        '3HH' => 'E02004626',
        '3HJ' => 'E02004626',
        '3HL' => 'E02004626',
        '3HN' => 'E02004626',
        '3HP' => 'E02004626',
        '3HQ' => 'E02004626',
        '3HR' => 'E02004626',
        '3HS' => 'E02004626',
        '3HT' => 'E02004626',
        '3HU' => 'E02004626',
        '3HW' => 'E02004626',
        '3HX' => 'E02004626',
        '3HY' => 'E02004626',
        '3HZ' => 'E02004626',
        '3JA' => 'E02004626',
        '3JB' => 'E02004626',
        '3JD' => 'E02004626',
        '3JE' => 'E02004626',
        '3JF' => 'E02004626',
        '3JG' => 'E02004626',
        '3JH' => 'E02004626',
        '3JP' => 'E02004626',
        '3JQ' => 'E02004626',
        '3JR' => 'E02004626',
        '3JS' => 'E02004626',
        '3JT' => 'E02004626',
        '3JU' => 'E02004626',
        '3JW' => 'E02004626',
        '3JX' => 'E02004626',
        '3JY' => 'E02004626',
        '3JZ' => 'E02004626',
        '3LA' => 'E02004626',
        '3LB' => 'E02004626',
        '3LD' => 'E02004626',
        '3LE' => 'E02004626',
        '3LF' => 'E02004626',
        '3LG' => 'E02004626',
        '3LH' => 'E02004626',
        '3LP' => 'E02004626',
        '3LQ' => 'E02004626',
        '3LR' => 'E02004626',
        '3LS' => 'E02004626',
        '3NA' => 'E02004626',
        '3NB' => 'E02004626',
        '3ND' => 'E02004626',
        '3NE' => 'E02004626',
        '3NF' => 'E02004626',
        '3NG' => 'E02004626',
        '3NH' => 'E02004626',
        '3NJ' => 'E02004626',
        '3NL' => 'E02004626',
        '3NN' => 'E02004626',
        '3NQ' => 'E02004626',
        '3NT' => 'E02004626',
        '3NU' => 'E02006720',
        '3NW' => 'E02004626',
        '3NX' => 'E02004626',
        '3NY' => 'E02004626',
        '3NZ' => 'E02004626',
        '3PA' => 'E02006720',
        '3PB' => 'E02006720',
        '3PD' => 'E02006720',
        '3PE' => 'E02006720',
        '3PF' => 'E02006720',
        '3PG' => 'E02006720',
        '3PH' => 'E02006720',
        '3PJ' => 'E02004626',
        '3PL' => 'E02006720',
        '3PN' => 'E02006720',
        '3PP' => 'E02006720',
        '3PQ' => 'E02006720',
        '3PR' => 'E02006720',
        '3PS' => 'E02006720',
        '3PT' => 'E02006720',
        '3PW' => 'E02006720',
        '3PZ' => 'E02004626',
        '3QA' => 'E02004626',
        '3QB' => 'E02004626',
        '3QD' => 'E02004626',
        '3QE' => 'E02004626',
        '3QF' => 'E02004626',
        '3QG' => 'E02004626',
        '3QH' => 'E02004626',
        '3QJ' => 'E02004626',
        '3QL' => 'E02004626',
        '3QN' => 'E02004626',
        '3QP' => 'E02004626',
        '3QQ' => 'E02004626',
        '3QR' => 'E02004626',
        '3QS' => 'E02004626',
        '3QT' => 'E02004626',
        '3QU' => 'E02004626',
        '3QW' => 'E02004626',
        '3QX' => 'E02004626',
        '3QY' => 'E02004626',
        '3QZ' => 'E02004626',
        '3RA' => 'E02004626',
        '3RB' => 'E02004626',
        '3RD' => 'E02004626',
        '3RE' => 'E02004626',
        '3RF' => 'E02004626',
        '3RG' => 'E02004626',
        '3RH' => 'E02004626',
        '3RJ' => 'E02004626',
        '3RL' => 'E02004626',
        '3RN' => 'E02004626',
        '3RP' => 'E02004626',
        '3RQ' => 'E02004626',
        '3RR' => 'E02004626',
        '3RS' => 'E02004626',
        '3RT' => 'E02004626',
        '3RU' => 'E02004626',
        '3RW' => 'E02004626',
        '3RX' => 'E02004626',
        '3RY' => 'E02004626',
        '3RZ' => 'E02004626',
        '3SA' => 'E02004626',
        '3SB' => 'E02004626',
        '3SD' => 'E02004626',
        '3SE' => 'E02004626',
        '3SF' => 'E02004626',
        '3SG' => 'E02004626',
        '3SH' => 'E02004626',
        '3SJ' => 'E02004626',
        '3SL' => 'E02004626',
        '3SN' => 'E02004626',
        '3SP' => 'E02004626',
        '3WQ' => 'E02004642',
        '3WR' => 'E02004642',
        '3WS' => 'E02004642',
        '3WT' => 'E02004642',
        '3WU' => 'E02004642',
        '3WW' => 'E02004642',
        '3WX' => 'E02004642',
        '3WY' => 'E02004642',
        '3WZ' => 'E02004642',
        '3YA' => 'E02004650',
        '3YB' => 'E02004650',
        '3YD' => 'E02004642',
        '3YE' => 'E02004642',
        '3YF' => 'E02004642',
        '3YG' => 'E02004626',
        '3YH' => 'E02004642',
        '3YJ' => 'E02004642',
        '3YL' => 'E02004642',
        '3YN' => 'E02004642',
        '3YP' => 'E02004626',
        '3YQ' => 'E02004626',
        '3YR' => 'E02004626',
        '3YS' => 'E02004642',
        '3YT' => 'E02004642',
        '3YU' => 'E02004642',
        '3ZR' => 'E02004642',
        '4AA' => 'E02004671',
        '4AB' => 'E02004671',
        '4AD' => 'E02004671',
        '4AE' => 'E02004671',
        '4AF' => 'E02004671',
        '4AG' => 'E02004671',
        '4AH' => 'E02004671',
        '4AJ' => 'E02004671',
        '4AL' => 'E02004671',
        '4AN' => 'E02004671',
        '4AP' => 'E02004669',
        '4AQ' => 'E02004671',
        '4AR' => 'E02004671',
        '4AS' => 'E02004671',
        '4AT' => 'E02004671',
        '4AU' => 'E02004671',
        '4AW' => 'E02004671',
        '4AX' => 'E02004671',
        '4AY' => 'E02004671',
        '4AZ' => 'E02004671',
        '4BA' => 'E02004671',
        '4BB' => 'E02004671',
        '4BD' => 'E02004671',
        '4BE' => 'E02004671',
        '4BG' => 'E02004671',
        '4BH' => 'E02004671',
        '4BJ' => 'E02004671',
        '4BL' => 'E02004671',
        '4BN' => 'E02004669',
        '4BP' => 'E02004669',
        '4BQ' => 'E02004671',
        '4BS' => 'E02004669',
        '4BT' => 'E02004669',
        '4BU' => 'E02004669',
        '4BW' => 'E02004669',
        '4BX' => 'E02004669',
        '4BY' => 'E02004669',
        '4BZ' => 'E02004669',
        '4DA' => 'E02004671',
        '4DB' => 'E02004669',
        '4DD' => 'E02004669',
        '4DE' => 'E02004671',
        '4DF' => 'E02004671',
        '4DG' => 'E02004669',
        '4DH' => 'E02004671',
        '4DJ' => 'E02004671',
        '4DL' => 'E02004671',
        '4DN' => 'E02004671',
        '4DP' => 'E02004669',
        '4DQ' => 'E02004669',
        '4DR' => 'E02004669',
        '4DS' => 'E02004669',
        '4DT' => 'E02004669',
        '4DU' => 'E02004671',
        '4DW' => 'E02004669',
        '4DX' => 'E02004671',
        '4DY' => 'E02004671',
        '4DZ' => 'E02004671',
        '4EA' => 'E02004669',
        '4EB' => 'E02004669',
        '4ED' => 'E02004671',
        '4EE' => 'E02004669',
        '4EF' => 'E02004669',
        '4EG' => 'E02004669',
        '4EH' => 'E02004669',
        '4EJ' => 'E02004669',
        '4EL' => 'E02004669',
        '4EN' => 'E02004669',
        '4EP' => 'E02004669',
        '4EQ' => 'E02004669',
        '4ES' => 'E02004669',
        '4ET' => 'E02004669',
        '4EU' => 'E02004669',
        '4EW' => 'E02004669',
        '4EX' => 'E02004669',
        '4EY' => 'E02004669',
        '4EZ' => 'E02004669',
        '4HA' => 'E02004669',
        '4HB' => 'E02004669',
        '4HD' => 'E02004669',
        '4HE' => 'E02004669',
        '4HF' => 'E02004669',
        '4HG' => 'E02004669',
        '4HH' => 'E02004669',
        '4HJ' => 'E02004669',
        '4HL' => 'E02004671',
        '4HN' => 'E02004669',
        '4HQ' => 'E02004669',
        '4HT' => 'E02004669',
        '4HU' => 'E02004669',
        '4HW' => 'E02004669',
        '4HX' => 'E02004669',
        '4HY' => 'E02004669',
        '4HZ' => 'E02004669',
        '4JA' => 'E02004669',
        '4JB' => 'E02004669',
        '4JD' => 'E02004669',
        '4JE' => 'E02004669',
        '4JG' => 'E02004669',
        '4JH' => 'E02004669',
        '4JJ' => 'E02004669',
        '4JL' => 'E02004669',
        '4JN' => 'E02004669',
        '4JP' => 'E02004669',
        '4JQ' => 'E02004669',
        '4JR' => 'E02004669',
        '4JS' => 'E02004669',
        '4JT' => 'E02004669',
        '4JW' => 'E02004669',
        '4LA' => 'E02004669',
        '4LB' => 'E02004669',
        '4LD' => 'E02004669',
        '4LE' => 'E02004669',
        '4LF' => 'E02004669',
        '4LG' => 'E02004669',
        '4LH' => 'E02004669',
        '4LJ' => 'E02004669',
        '4LL' => 'E02004669',
        '4LN' => 'E02004669',
        '4LQ' => 'E02004669',
        '4LT' => 'E02006720',
        '4LU' => 'E02006720',
        '4LX' => 'E02004669',
        '4LY' => 'E02006720',
        '4LZ' => 'E02006720',
        '4NA' => 'E02006720',
        '4NB' => 'E02006720',
        '4ND' => 'E02006720',
        '4NE' => 'E02006720',
        '4NF' => 'E02004669',
        '4NG' => 'E02006720',
        '4NN' => 'E02006720',
        '4NP' => 'E02006720',
        '4NQ' => 'E02006720',
        '4NR' => 'E02006720',
        '4NS' => 'E02006720',
        '4NT' => 'E02004626',
        '4NU' => 'E02004669',
        '4NW' => 'E02006720',
        '4NX' => 'E02006720',
        '4NY' => 'E02006720',
        '4NZ' => 'E02006720',
        '4PE' => 'E02006720',
        '4PF' => 'E02006720',
        '4PG' => 'E02006720',
        '4PH' => 'E02006720',
        '4PJ' => 'E02006720',
        '4PL' => 'E02006720',
        '4PN' => 'E02006720',
        '4PP' => 'E02006720',
        '4PQ' => 'E02006720',
        '4PR' => 'E02006720',
        '4PW' => 'E02006720',
        '4QA' => 'E02004669',
        '4QB' => 'E02004669',
        '4QD' => 'E02004669',
        '4QE' => 'E02004669',
        '4QF' => 'E02004669',
        '4QG' => 'E02006720',
        '4QH' => 'E02006720',
        '4QJ' => 'E02006720',
        '4QL' => 'E02006720',
        '4QN' => 'E02006720',
        '4QQ' => 'E02006720',
        '4QW' => 'E02004669',
        '4RA' => 'E02004669',
        '4RB' => 'E02004669',
        '4RD' => 'E02004669',
        '4RE' => 'E02004669',
        '4RF' => 'E02004667',
        '4RG' => 'E02004669',
        '4WA' => 'E02004642',
        '4WQ' => 'E02004674',
        '4WR' => 'E02004642',
        '4WT' => 'E02004650',
        '4WU' => 'E02004642',
        '4WW' => 'E02004642',
        '4WX' => 'E02004642',
        '4WY' => 'E02004642',
        '4WZ' => 'E02004642',
        '4YA' => 'E02004642',
        '4YB' => 'E02004669',
        '4YD' => 'E02004642',
        '4YE' => 'E02004669',
        '4YF' => 'E02004669',
        '4YG' => 'E02004642',
        '4YH' => 'E02004674',
        '4YJ' => 'E02004642',
        '4YL' => 'E02004642',
        '4YN' => 'E02004642',
        '4YS' => 'E02004669',
        '4ZR' => 'E02004642',
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
