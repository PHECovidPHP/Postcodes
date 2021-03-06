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
final class CA17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004014',
        '4AB' => 'E02004014',
        '4AD' => 'E02004014',
        '4AE' => 'E02004014',
        '4AF' => 'E02004014',
        '4AG' => 'E02004014',
        '4AH' => 'E02004014',
        '4AJ' => 'E02004014',
        '4AL' => 'E02004014',
        '4AN' => 'E02004014',
        '4AP' => 'E02004014',
        '4AQ' => 'E02004014',
        '4AR' => 'E02004014',
        '4AS' => 'E02004014',
        '4AT' => 'E02004014',
        '4AU' => 'E02004014',
        '4AW' => 'E02004014',
        '4AX' => 'E02004014',
        '4AY' => 'E02004014',
        '4AZ' => 'E02004014',
        '4BA' => 'E02004014',
        '4BB' => 'E02004014',
        '4BD' => 'E02004014',
        '4BE' => 'E02004014',
        '4BF' => 'E02004014',
        '4BG' => 'E02004014',
        '4BH' => 'E02004014',
        '4BJ' => 'E02004014',
        '4BL' => 'E02004014',
        '4BN' => 'E02004014',
        '4BP' => 'E02004014',
        '4BQ' => 'E02004014',
        '4BR' => 'E02004014',
        '4BS' => 'E02004014',
        '4BT' => 'E02004014',
        '4BU' => 'E02004014',
        '4BW' => 'E02004014',
        '4BX' => 'E02004014',
        '4BY' => 'E02004014',
        '4BZ' => 'E02004014',
        '4DA' => 'E02004014',
        '4DB' => 'E02004014',
        '4DD' => 'E02004014',
        '4DE' => 'E02004014',
        '4DF' => 'E02004014',
        '4DG' => 'E02004014',
        '4DH' => 'E02004014',
        '4DJ' => 'E02004014',
        '4DN' => 'E02004014',
        '4DP' => 'E02004014',
        '4DQ' => 'E02004014',
        '4DR' => 'E02004014',
        '4DS' => 'E02004014',
        '4DT' => 'E02004014',
        '4DU' => 'E02004014',
        '4DW' => 'E02004014',
        '4DX' => 'E02004014',
        '4DY' => 'E02004014',
        '4DZ' => 'E02004014',
        '4EA' => 'E02004014',
        '4EE' => 'E02004014',
        '4EF' => 'E02004014',
        '4EG' => 'E02004014',
        '4EH' => 'E02004014',
        '4EJ' => 'E02004014',
        '4EL' => 'E02004014',
        '4EN' => 'E02004014',
        '4ER' => 'E02004014',
        '4ES' => 'E02004014',
        '4ET' => 'E02004014',
        '4EU' => 'E02004014',
        '4EW' => 'E02004014',
        '4EX' => 'E02004014',
        '4EY' => 'E02004014',
        '4GA' => 'E02004014',
        '4GB' => 'E02004014',
        '4GD' => 'E02004014',
        '4GE' => 'E02004014',
        '4GF' => 'E02004014',
        '4GG' => 'E02004014',
        '4GH' => 'E02004014',
        '4HA' => 'E02004014',
        '4HB' => 'E02004014',
        '4HD' => 'E02004014',
        '4HE' => 'E02004014',
        '4HF' => 'E02004014',
        '4HG' => 'E02004014',
        '4HH' => 'E02004014',
        '4HJ' => 'E02004014',
        '4HL' => 'E02004014',
        '4HN' => 'E02004014',
        '4HP' => 'E02004014',
        '4HQ' => 'E02004014',
        '4HR' => 'E02004014',
        '4HS' => 'E02004014',
        '4HT' => 'E02004014',
        '4HU' => 'E02004014',
        '4HW' => 'E02004014',
        '4HX' => 'E02004014',
        '4HY' => 'E02004014',
        '4HZ' => 'E02004014',
        '4JA' => 'E02004014',
        '4JB' => 'E02004014',
        '4JD' => 'E02004014',
        '4JE' => 'E02004014',
        '4JF' => 'E02004014',
        '4JH' => 'E02004014',
        '4JJ' => 'E02004014',
        '4JL' => 'E02004014',
        '4JN' => 'E02004014',
        '4JP' => 'E02004014',
        '4JR' => 'E02004014',
        '4JT' => 'E02004014',
        '4JU' => 'E02004014',
        '4JW' => 'E02004014',
        '4JX' => 'E02004014',
        '4JY' => 'E02004014',
        '4LA' => 'E02004014',
        '4LD' => 'E02004014',
        '4LE' => 'E02004014',
        '4LF' => 'E02004014',
        '4LG' => 'E02004014',
        '4LH' => 'E02004014',
        '4LJ' => 'E02004014',
        '4LL' => 'E02004014',
        '4LN' => 'E02004014',
        '4LP' => 'E02004014',
        '4LQ' => 'E02004014',
        '4LT' => 'E02004014',
        '4LU' => 'E02004014',
        '4LW' => 'E02004014',
        '4LX' => 'E02004014',
        '4LY' => 'E02004014',
        '4LZ' => 'E02004014',
        '4NB' => 'E02004014',
        '4ND' => 'E02004014',
        '4NG' => 'E02004014',
        '4NH' => 'E02004014',
        '4NJ' => 'E02004014',
        '4NL' => 'E02004014',
        '4NN' => 'E02004014',
        '4NP' => 'E02004014',
        '4NQ' => 'E02004014',
        '4NS' => 'E02004014',
        '4NT' => 'E02004014',
        '4NW' => 'E02004014',
        '4NX' => 'E02004014',
        '4NY' => 'E02004014',
        '4NZ' => 'E02004014',
        '4PD' => 'E02004014',
        '4PE' => 'E02004014',
        '4PF' => 'E02004014',
        '4PG' => 'E02004014',
        '4PH' => 'E02004014',
        '4PJ' => 'E02004014',
        '4PL' => 'E02004014',
        '4PN' => 'E02004014',
        '4PP' => 'E02004014',
        '4PQ' => 'E02004014',
        '4PR' => 'E02004014',
        '4PT' => 'E02004014',
        '4PW' => 'E02004014',
        '4PX' => 'E02004014',
        '4PY' => 'E02004014',
        '4QA' => 'E02004014',
        '4QB' => 'E02004014',
        '4QD' => 'E02004014',
        '4QE' => 'E02004014',
        '4QF' => 'E02004014',
        '4QG' => 'E02004014',
        '4QH' => 'E02004014',
        '4QJ' => 'E02004014',
        '4QL' => 'E02004014',
        '4QN' => 'E02004014',
        '4QP' => 'E02004014',
        '4QQ' => 'E02004014',
        '4QR' => 'E02004014',
        '4QS' => 'E02004014',
        '4QT' => 'E02004014',
        '4QU' => 'E02004014',
        '4QW' => 'E02004014',
        '4QX' => 'E02004014',
        '4QY' => 'E02004014',
        '4QZ' => 'E02004014',
        '4RA' => 'E02004014',
        '4RB' => 'E02004014',
        '4RD' => 'E02004014',
        '4RE' => 'E02004014',
        '4RF' => 'E02004014',
        '4RG' => 'E02004014',
        '4RH' => 'E02004014',
        '4RJ' => 'E02004014',
        '4RL' => 'E02004014',
        '4RN' => 'E02004014',
        '4RP' => 'E02004014',
        '4RQ' => 'E02004014',
        '4RR' => 'E02004014',
        '4RS' => 'E02004014',
        '4RT' => 'E02004014',
        '4RU' => 'E02004014',
        '4RW' => 'E02004014',
        '4RX' => 'E02004014',
        '4RY' => 'E02004014',
        '4RZ' => 'E02004014',
        '4SA' => 'E02004014',
        '4SB' => 'E02004014',
        '4SD' => 'E02004014',
        '4SE' => 'E02004014',
        '4SF' => 'E02004014',
        '4SG' => 'E02004014',
        '4SH' => 'E02004014',
        '4SJ' => 'E02004014',
        '4SL' => 'E02004014',
        '4SN' => 'E02004014',
        '4SP' => 'E02004014',
        '4SQ' => 'E02004014',
        '4SR' => 'E02004014',
        '4SS' => 'E02004014',
        '4ST' => 'E02004014',
        '4SU' => 'E02004014',
        '4SW' => 'E02004014',
        '4SX' => 'E02004014',
        '4SY' => 'E02004014',
        '4SZ' => 'E02004014',
        '4TA' => 'E02004014',
        '4TB' => 'E02004014',
        '4TD' => 'E02004014',
        '4TE' => 'E02004014',
        '4TF' => 'E02004014',
        '4TG' => 'E02004014',
        '4TH' => 'E02004014',
        '4TJ' => 'E02004014',
        '4TL' => 'E02004014',
        '4TQ' => 'E02004014',
        '4TZ' => 'E02004014',
        '4WA' => 'E02004014',
        '4WQ' => 'E02004014',
        '4WR' => 'E02004014',
        '4WS' => 'E02004014',
        '4WT' => 'E02004014',
        '4WU' => 'E02004014',
        '4WW' => 'E02004014',
        '4WX' => 'E02004014',
        '4WY' => 'E02004014',
        '4WZ' => 'E02004014',
        '4YA' => 'E02004014',
        '4YB' => 'E02004014',
        '4YD' => 'E02004014',
        '4YE' => 'E02004014',
        '4YF' => 'E02004014',
        '4YW' => 'E02004014',
        '4ZZ' => 'E02004014',
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
