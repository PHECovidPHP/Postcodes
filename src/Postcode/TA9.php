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
final class TA9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02006065',
        '3AB' => 'E02006065',
        '3AD' => 'E02006065',
        '3AE' => 'E02006065',
        '3AF' => 'E02006065',
        '3AG' => 'E02006065',
        '3AH' => 'E02006065',
        '3AJ' => 'E02006065',
        '3AL' => 'E02006065',
        '3AN' => 'E02006065',
        '3AP' => 'E02006065',
        '3AQ' => 'E02006065',
        '3AR' => 'E02006065',
        '3AS' => 'E02006065',
        '3AT' => 'E02006065',
        '3AU' => 'E02006065',
        '3AW' => 'E02006065',
        '3AX' => 'E02006065',
        '3AY' => 'E02006065',
        '3AZ' => 'E02006065',
        '3BA' => 'E02006065',
        '3BB' => 'E02006065',
        '3BD' => 'E02006065',
        '3BE' => 'E02006064',
        '3BF' => 'E02006064',
        '3BG' => 'E02006064',
        '3BH' => 'E02006065',
        '3BJ' => 'E02006065',
        '3BL' => 'E02006065',
        '3BN' => 'E02006065',
        '3BP' => 'E02006065',
        '3BQ' => 'E02006065',
        '3BS' => 'E02006065',
        '3BT' => 'E02006065',
        '3BU' => 'E02006065',
        '3BW' => 'E02006065',
        '3BX' => 'E02006065',
        '3BY' => 'E02006065',
        '3BZ' => 'E02006065',
        '3DA' => 'E02006065',
        '3DB' => 'E02006065',
        '3DD' => 'E02006065',
        '3DE' => 'E02006065',
        '3DF' => 'E02006065',
        '3DG' => 'E02006066',
        '3DH' => 'E02006065',
        '3DJ' => 'E02006065',
        '3DL' => 'E02006065',
        '3DN' => 'E02006066',
        '3DP' => 'E02006066',
        '3DQ' => 'E02006065',
        '3DR' => 'E02006066',
        '3DS' => 'E02006066',
        '3DT' => 'E02006065',
        '3DU' => 'E02006066',
        '3DW' => 'E02006066',
        '3DX' => 'E02006065',
        '3EA' => 'E02006065',
        '3EB' => 'E02006065',
        '3ED' => 'E02006065',
        '3EE' => 'E02006065',
        '3EF' => 'E02006065',
        '3EG' => 'E02006065',
        '3EH' => 'E02006065',
        '3EJ' => 'E02006065',
        '3EL' => 'E02006065',
        '3EN' => 'E02006065',
        '3EP' => 'E02006065',
        '3EQ' => 'E02006065',
        '3ER' => 'E02006065',
        '3ES' => 'E02006065',
        '3ET' => 'E02006065',
        '3EU' => 'E02006065',
        '3EW' => 'E02006065',
        '3EX' => 'E02006065',
        '3EY' => 'E02006065',
        '3EZ' => 'E02006065',
        '3FA' => 'E02006062',
        '3FB' => 'E02006062',
        '3FD' => 'E02006062',
        '3FE' => 'E02006062',
        '3FF' => 'E02006062',
        '3FG' => 'E02006062',
        '3FH' => 'E02006062',
        '3FJ' => 'E02006062',
        '3FL' => 'E02006062',
        '3FN' => 'E02006062',
        '3FP' => 'E02006062',
        '3FQ' => 'E02006066',
        '3FR' => 'E02006065',
        '3FS' => 'E02006065',
        '3FT' => 'E02006065',
        '3FU' => 'E02006065',
        '3FW' => 'E02006065',
        '3FX' => 'E02006066',
        '3FY' => 'E02006065',
        '3FZ' => 'E02006065',
        '3GA' => 'E02006065',
        '3GB' => 'E02006065',
        '3GD' => 'E02006065',
        '3GE' => 'E02006065',
        '3GF' => 'E02006065',
        '3GG' => 'E02006065',
        '3GH' => 'E02006065',
        '3GJ' => 'E02006065',
        '3GL' => 'E02006065',
        '3GN' => 'E02006065',
        '3GP' => 'E02006065',
        '3GQ' => 'E02006065',
        '3GR' => 'E02006066',
        '3GS' => 'E02006066',
        '3GT' => 'E02006066',
        '3HA' => 'E02006065',
        '3HB' => 'E02006065',
        '3HD' => 'E02006065',
        '3HE' => 'E02006065',
        '3HF' => 'E02006065',
        '3HG' => 'E02006065',
        '3HH' => 'E02006066',
        '3HL' => 'E02006065',
        '3HN' => 'E02006065',
        '3HP' => 'E02006065',
        '3HQ' => 'E02006065',
        '3HR' => 'E02006065',
        '3HS' => 'E02006065',
        '3HT' => 'E02006065',
        '3HU' => 'E02006065',
        '3HW' => 'E02006065',
        '3HX' => 'E02006065',
        '3HY' => 'E02006065',
        '3HZ' => 'E02006065',
        '3JA' => 'E02006065',
        '3JB' => 'E02006065',
        '3JD' => 'E02006065',
        '3JE' => 'E02006065',
        '3JF' => 'E02006065',
        '3JG' => 'E02006065',
        '3JH' => 'E02006065',
        '3JJ' => 'E02006065',
        '3JL' => 'E02006065',
        '3JN' => 'E02006065',
        '3JP' => 'E02006065',
        '3JQ' => 'E02006065',
        '3JR' => 'E02006065',
        '3JS' => 'E02006065',
        '3JT' => 'E02006065',
        '3JU' => 'E02006065',
        '3JW' => 'E02006065',
        '3JX' => 'E02006065',
        '3JY' => 'E02006062',
        '3JZ' => 'E02006065',
        '3LA' => 'E02006065',
        '3LB' => 'E02006065',
        '3LD' => 'E02006065',
        '3LE' => 'E02006065',
        '3LF' => 'E02006065',
        '3LG' => 'E02006065',
        '3LH' => 'E02006065',
        '3LJ' => 'E02006065',
        '3LL' => 'E02006065',
        '3LN' => 'E02006065',
        '3LP' => 'E02006065',
        '3LQ' => 'E02006065',
        '3LR' => 'E02006062',
        '3LS' => 'E02006065',
        '3LT' => 'E02006065',
        '3LU' => 'E02006062',
        '3LW' => 'E02006065',
        '3LX' => 'E02006065',
        '3LY' => 'E02006065',
        '3LZ' => 'E02006065',
        '3NA' => 'E02006065',
        '3NB' => 'E02006065',
        '3NF' => 'E02006066',
        '3NG' => 'E02006066',
        '3NJ' => 'E02006066',
        '3NL' => 'E02006066',
        '3NN' => 'E02006066',
        '3NP' => 'E02006066',
        '3NQ' => 'E02006066',
        '3NR' => 'E02006066',
        '3NS' => 'E02006066',
        '3NT' => 'E02006066',
        '3NU' => 'E02006066',
        '3NW' => 'E02006066',
        '3NX' => 'E02006066',
        '3NY' => 'E02006066',
        '3NZ' => 'E02006066',
        '3PA' => 'E02006066',
        '3PB' => 'E02006066',
        '3PD' => 'E02006066',
        '3PE' => 'E02006066',
        '3PF' => 'E02006072',
        '3PG' => 'E02006066',
        '3PH' => 'E02006066',
        '3PJ' => 'E02006066',
        '3PL' => 'E02006066',
        '3PN' => 'E02006066',
        '3PP' => 'E02006066',
        '3PQ' => 'E02006066',
        '3PR' => 'E02006066',
        '3PS' => 'E02006066',
        '3PT' => 'E02006066',
        '3PU' => 'E02006066',
        '3PW' => 'E02006066',
        '3PX' => 'E02006066',
        '3PY' => 'E02006066',
        '3PZ' => 'E02006066',
        '3QA' => 'E02006066',
        '3QB' => 'E02006066',
        '3QD' => 'E02006066',
        '3QE' => 'E02006066',
        '3QF' => 'E02006066',
        '3QG' => 'E02006066',
        '3QH' => 'E02006064',
        '3QJ' => 'E02006065',
        '3QL' => 'E02006065',
        '3QN' => 'E02006066',
        '3QP' => 'E02006065',
        '3QQ' => 'E02006066',
        '3QR' => 'E02006065',
        '3QS' => 'E02006066',
        '3QT' => 'E02006066',
        '3QU' => 'E02006066',
        '3QW' => 'E02006065',
        '3QX' => 'E02006066',
        '3QY' => 'E02006066',
        '3QZ' => 'E02006066',
        '3RA' => 'E02006066',
        '3RB' => 'E02006066',
        '3RD' => 'E02006066',
        '3RE' => 'E02006066',
        '3RF' => 'E02006066',
        '3RG' => 'E02006066',
        '3RH' => 'E02006066',
        '3RJ' => 'E02006066',
        '3RL' => 'E02006066',
        '3RN' => 'E02006066',
        '3RP' => 'E02006066',
        '3RQ' => 'E02006066',
        '3RR' => 'E02006066',
        '3RS' => 'E02006066',
        '3RT' => 'E02006066',
        '3RU' => 'E02006066',
        '3RW' => 'E02006066',
        '3RX' => 'E02006066',
        '3RY' => 'E02006066',
        '3RZ' => 'E02006066',
        '3SA' => 'E02006066',
        '3SB' => 'E02006066',
        '3SD' => 'E02006066',
        '3SF' => 'E02006066',
        '3SG' => 'E02006066',
        '3SH' => 'E02006066',
        '3SJ' => 'E02006066',
        '3SL' => 'E02006066',
        '3SQ' => 'E02006066',
        '3TE' => 'E02006065',
        '3TF' => 'E02006065',
        '3TG' => 'E02006065',
        '3TH' => 'E02006065',
        '3TJ' => 'E02006065',
        '3TQ' => 'E02006065',
        '3WA' => 'E02006064',
        '3WZ' => 'E02006064',
        '3YA' => 'E02006065',
        '3YB' => 'E02006065',
        '3YD' => 'E02006066',
        '3YE' => 'E02006064',
        '3YH' => 'E02006065',
        '3YN' => 'E02006064',
        '3YP' => 'E02006064',
        '3YQ' => 'E02006064',
        '3YR' => 'E02006064',
        '3YS' => 'E02006064',
        '3YT' => 'E02006065',
        '3YU' => 'E02006066',
        '3YW' => 'E02006065',
        '3YX' => 'E02006064',
        '3YY' => 'E02006065',
        '3YZ' => 'E02006066',
        '3ZD' => 'E02006065',
        '3ZN' => 'E02006064',
        '3ZQ' => 'E02006065',
        '3ZX' => 'E02006064',
        '4AA' => 'E02006065',
        '4AB' => 'E02006065',
        '4AD' => 'E02006065',
        '4AE' => 'E02006062',
        '4AF' => 'E02006065',
        '4AG' => 'E02006065',
        '4AH' => 'E02006065',
        '4AJ' => 'E02006065',
        '4AL' => 'E02006065',
        '4AN' => 'E02006065',
        '4AP' => 'E02006062',
        '4AQ' => 'E02006065',
        '4AR' => 'E02006065',
        '4AS' => 'E02006062',
        '4AT' => 'E02006065',
        '4AU' => 'E02006065',
        '4AW' => 'E02006065',
        '4AX' => 'E02006063',
        '4AY' => 'E02006063',
        '4AZ' => 'E02006063',
        '4BA' => 'E02006065',
        '4BB' => 'E02006062',
        '4BD' => 'E02006062',
        '4BE' => 'E02006062',
        '4BF' => 'E02006063',
        '4BG' => 'E02006062',
        '4BH' => 'E02006062',
        '4BJ' => 'E02006062',
        '4BL' => 'E02006062',
        '4BN' => 'E02006062',
        '4BP' => 'E02006062',
        '4BQ' => 'E02006062',
        '4BS' => 'E02006062',
        '4BT' => 'E02006062',
        '4BU' => 'E02006062',
        '4BW' => 'E02006062',
        '4BX' => 'E02006062',
        '4BY' => 'E02006062',
        '4BZ' => 'E02006062',
        '4DA' => 'E02006062',
        '4DB' => 'E02006062',
        '4DD' => 'E02006062',
        '4DE' => 'E02006062',
        '4DF' => 'E02006062',
        '4DG' => 'E02006062',
        '4DH' => 'E02006063',
        '4DJ' => 'E02006064',
        '4DL' => 'E02006062',
        '4DQ' => 'E02006062',
        '4DS' => 'E02006062',
        '4DT' => 'E02006062',
        '4DU' => 'E02006062',
        '4DX' => 'E02006062',
        '4DY' => 'E02006062',
        '4DZ' => 'E02006062',
        '4EA' => 'E02006062',
        '4EB' => 'E02006062',
        '4ED' => 'E02006062',
        '4EE' => 'E02006062',
        '4EF' => 'E02006062',
        '4EG' => 'E02006062',
        '4EH' => 'E02006062',
        '4EJ' => 'E02006062',
        '4EL' => 'E02006062',
        '4EQ' => 'E02006062',
        '4EU' => 'E02006065',
        '4EX' => 'E02006065',
        '4EY' => 'E02006065',
        '4EZ' => 'E02006065',
        '4HA' => 'E02006062',
        '4HB' => 'E02006062',
        '4HD' => 'E02006062',
        '4HE' => 'E02006062',
        '4HF' => 'E02006062',
        '4HG' => 'E02006062',
        '4HH' => 'E02006062',
        '4HJ' => 'E02006062',
        '4HL' => 'E02006062',
        '4HN' => 'E02006062',
        '4HP' => 'E02006062',
        '4HQ' => 'E02006062',
        '4HR' => 'E02006062',
        '4HS' => 'E02006062',
        '4HT' => 'E02006062',
        '4HU' => 'E02006062',
        '4HW' => 'E02006062',
        '4HX' => 'E02006062',
        '4HY' => 'E02006062',
        '4HZ' => 'E02006062',
        '4JA' => 'E02006062',
        '4JB' => 'E02006062',
        '4JD' => 'E02006062',
        '4JE' => 'E02006062',
        '4JF' => 'E02006062',
        '4JG' => 'E02006062',
        '4JH' => 'E02006062',
        '4JJ' => 'E02006062',
        '4JL' => 'E02006062',
        '4JN' => 'E02006062',
        '4JP' => 'E02006065',
        '4JQ' => 'E02006062',
        '4JR' => 'E02006065',
        '4JS' => 'E02006065',
        '4JT' => 'E02006065',
        '4JU' => 'E02006065',
        '4JW' => 'E02006062',
        '4JX' => 'E02006065',
        '4JZ' => 'E02006062',
        '4LA' => 'E02006062',
        '4LB' => 'E02006062',
        '4LD' => 'E02006062',
        '4LE' => 'E02006063',
        '4LF' => 'E02006063',
        '4LG' => 'E02006063',
        '4LH' => 'E02006063',
        '4LJ' => 'E02006063',
        '4LL' => 'E02006065',
        '4LN' => 'E02006063',
        '4LP' => 'E02006063',
        '4LQ' => 'E02006063',
        '4LR' => 'E02006063',
        '4LS' => 'E02006063',
        '4LT' => 'E02006063',
        '4LU' => 'E02006063',
        '4LW' => 'E02006063',
        '4LX' => 'E02006063',
        '4LY' => 'E02006063',
        '4LZ' => 'E02006063',
        '4NA' => 'E02006063',
        '4NB' => 'E02006063',
        '4ND' => 'E02006063',
        '4NE' => 'E02006063',
        '4NF' => 'E02006063',
        '4NG' => 'E02006063',
        '4NH' => 'E02006063',
        '4NJ' => 'E02006063',
        '4NL' => 'E02006063',
        '4NN' => 'E02006063',
        '4NP' => 'E02006063',
        '4NQ' => 'E02006063',
        '4NR' => 'E02006063',
        '4NS' => 'E02006063',
        '4NT' => 'E02006063',
        '4NU' => 'E02006063',
        '4NW' => 'E02006063',
        '4NX' => 'E02006063',
        '4NY' => 'E02006063',
        '4NZ' => 'E02006063',
        '4PA' => 'E02006063',
        '4PB' => 'E02006063',
        '4PD' => 'E02006063',
        '4PE' => 'E02006062',
        '4PF' => 'E02006062',
        '4PG' => 'E02006063',
        '4PH' => 'E02006063',
        '4PJ' => 'E02006063',
        '4PQ' => 'E02006063',
        '4PT' => 'E02006063',
        '4PU' => 'E02006063',
        '4PW' => 'E02006065',
        '4PX' => 'E02006063',
        '4PY' => 'E02006063',
        '4PZ' => 'E02006063',
        '4QA' => 'E02006063',
        '4QB' => 'E02006063',
        '4QD' => 'E02006063',
        '4QE' => 'E02006063',
        '4QF' => 'E02006063',
        '4QG' => 'E02006063',
        '4QH' => 'E02006063',
        '4QJ' => 'E02006063',
        '4QL' => 'E02006063',
        '4QN' => 'E02006063',
        '4QP' => 'E02006063',
        '4QQ' => 'E02006063',
        '4QR' => 'E02006063',
        '4QS' => 'E02006063',
        '4QT' => 'E02006063',
        '4QU' => 'E02006063',
        '4QW' => 'E02006063',
        '4QX' => 'E02006065',
        '4QY' => 'E02006065',
        '4QZ' => 'E02006065',
        '4RA' => 'E02006062',
        '4RB' => 'E02006062',
        '4RD' => 'E02006062',
        '4RE' => 'E02006062',
        '4RF' => 'E02006066',
        '4RG' => 'E02006066',
        '4RH' => 'E02006066',
        '4RJ' => 'E02006066',
        '4RL' => 'E02006066',
        '4RN' => 'E02006066',
        '4RP' => 'E02006066',
        '4RR' => 'E02006066',
        '4RW' => 'E02006063',
        '4RX' => 'E02006062',
        '4RY' => 'E02006062',
        '4RZ' => 'E02006062',
        '4WA' => 'E02006064',
        '4WB' => 'E02006064',
        '4WD' => 'E02006064',
        '4WE' => 'E02006064',
        '4WG' => 'E02006064',
        '4XN' => 'E02006064',
        '4XQ' => 'E02006064',
        '4XZ' => 'E02006064',
        '4YA' => 'E02006062',
        '4YB' => 'E02006064',
        '4YQ' => 'E02006064',
        '4YR' => 'E02006064',
        '4YS' => 'E02006062',
        '4YT' => 'E02006064',
        '4YU' => 'E02006064',
        '4YW' => 'E02006062',
        '4YX' => 'E02006064',
        '4YY' => 'E02006066',
        '4YZ' => 'E02006066',
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