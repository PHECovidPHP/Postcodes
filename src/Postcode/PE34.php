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
final class PE34
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02005561',
        '3AB' => 'E02005561',
        '3AD' => 'E02005561',
        '3AE' => 'E02005561',
        '3AF' => 'E02005561',
        '3AG' => 'E02005561',
        '3AH' => 'E02005561',
        '3AJ' => 'E02005561',
        '3AL' => 'E02005561',
        '3AN' => 'E02005561',
        '3AP' => 'E02005561',
        '3AQ' => 'E02005561',
        '3AR' => 'E02005565',
        '3AS' => 'E02005565',
        '3AT' => 'E02005565',
        '3AU' => 'E02005565',
        '3AW' => 'E02005565',
        '3AX' => 'E02005565',
        '3AY' => 'E02005565',
        '3AZ' => 'E02005565',
        '3BA' => 'E02005565',
        '3BB' => 'E02005565',
        '3BD' => 'E02005565',
        '3BE' => 'E02005565',
        '3BF' => 'E02005565',
        '3BG' => 'E02005565',
        '3BH' => 'E02005565',
        '3BJ' => 'E02005565',
        '3BL' => 'E02005565',
        '3BN' => 'E02005565',
        '3BP' => 'E02005565',
        '3BQ' => 'E02005565',
        '3BS' => 'E02005565',
        '3BT' => 'E02005565',
        '3BU' => 'E02005565',
        '3BW' => 'E02005565',
        '3BX' => 'E02005565',
        '3BY' => 'E02005565',
        '3BZ' => 'E02005565',
        '3DA' => 'E02005565',
        '3DB' => 'E02005565',
        '3DD' => 'E02005565',
        '3DE' => 'E02005565',
        '3DF' => 'E02005565',
        '3DG' => 'E02005565',
        '3DH' => 'E02005565',
        '3DJ' => 'E02005565',
        '3DL' => 'E02005565',
        '3DN' => 'E02005565',
        '3DP' => 'E02005566',
        '3DQ' => 'E02005565',
        '3DR' => 'E02005565',
        '3DS' => 'E02005565',
        '3DT' => 'E02005565',
        '3DU' => 'E02005565',
        '3DW' => 'E02005565',
        '3DX' => 'E02005565',
        '3DY' => 'E02005565',
        '3DZ' => 'E02005565',
        '3EA' => 'E02005565',
        '3EB' => 'E02005565',
        '3ED' => 'E02005565',
        '3EE' => 'E02005565',
        '3EF' => 'E02005565',
        '3EG' => 'E02005565',
        '3EH' => 'E02005565',
        '3EJ' => 'E02005565',
        '3EL' => 'E02005565',
        '3EN' => 'E02005565',
        '3EP' => 'E02005565',
        '3EQ' => 'E02005565',
        '3ER' => 'E02005561',
        '3ES' => 'E02005565',
        '3ET' => 'E02005565',
        '3EU' => 'E02005565',
        '3EW' => 'E02005565',
        '3EX' => 'E02005565',
        '3EY' => 'E02005565',
        '3EZ' => 'E02005565',
        '3FA' => 'E02005565',
        '3FB' => 'E02005565',
        '3FD' => 'E02005565',
        '3FE' => 'E02005561',
        '3FF' => 'E02005565',
        '3FG' => 'E02005565',
        '3FH' => 'E02005565',
        '3FJ' => 'E02005565',
        '3FL' => 'E02005565',
        '3FN' => 'E02005561',
        '3FP' => 'E02005565',
        '3FQ' => 'E02005565',
        '3FR' => 'E02005558',
        '3HA' => 'E02005565',
        '3HB' => 'E02005565',
        '3HD' => 'E02005565',
        '3HE' => 'E02005565',
        '3HF' => 'E02005565',
        '3HG' => 'E02005565',
        '3HH' => 'E02005561',
        '3HJ' => 'E02005565',
        '3HL' => 'E02005565',
        '3HN' => 'E02005561',
        '3HP' => 'E02005561',
        '3HQ' => 'E02005565',
        '3HR' => 'E02005568',
        '3HS' => 'E02005568',
        '3HT' => 'E02005568',
        '3HU' => 'E02005568',
        '3HW' => 'E02005561',
        '3HX' => 'E02005568',
        '3HY' => 'E02005568',
        '3HZ' => 'E02005568',
        '3JA' => 'E02005561',
        '3JD' => 'E02005561',
        '3JE' => 'E02005561',
        '3JF' => 'E02005561',
        '3JG' => 'E02005561',
        '3JH' => 'E02005561',
        '3JJ' => 'E02005561',
        '3JL' => 'E02005561',
        '3JN' => 'E02005561',
        '3JP' => 'E02005561',
        '3JQ' => 'E02005561',
        '3JR' => 'E02005561',
        '3JS' => 'E02005561',
        '3JT' => 'E02005561',
        '3JU' => 'E02005561',
        '3JW' => 'E02005561',
        '3JX' => 'E02005561',
        '3JY' => 'E02005561',
        '3JZ' => 'E02005561',
        '3LA' => 'E02005561',
        '3LB' => 'E02005561',
        '3LD' => 'E02005561',
        '3LE' => 'E02005561',
        '3LF' => 'E02005561',
        '3LG' => 'E02005561',
        '3LH' => 'E02005561',
        '3LJ' => 'E02005561',
        '3LL' => 'E02005561',
        '3LN' => 'E02005561',
        '3LP' => 'E02005561',
        '3LQ' => 'E02005561',
        '3LR' => 'E02005558',
        '3LS' => 'E02005558',
        '3LT' => 'E02005561',
        '3LU' => 'E02005561',
        '3LW' => 'E02005561',
        '3LX' => 'E02005561',
        '3LY' => 'E02005561',
        '3LZ' => 'E02005561',
        '3NA' => 'E02005561',
        '3NB' => 'E02005561',
        '3ND' => 'E02005561',
        '3NE' => 'E02005561',
        '3NF' => 'E02005561',
        '3NG' => 'E02005561',
        '3NH' => 'E02005561',
        '3NJ' => 'E02005566',
        '3NL' => 'E02005566',
        '3NN' => 'E02005566',
        '3NP' => 'E02005566',
        '3NQ' => 'E02005561',
        '3NR' => 'E02005566',
        '3NS' => 'E02005566',
        '3NT' => 'E02005566',
        '3NU' => 'E02005566',
        '3NW' => 'E02005566',
        '3NX' => 'E02005566',
        '3NY' => 'E02005566',
        '3NZ' => 'E02005566',
        '3PA' => 'E02005566',
        '3PB' => 'E02005561',
        '3PD' => 'E02005568',
        '3PE' => 'E02005566',
        '3PF' => 'E02005565',
        '3PG' => 'E02005565',
        '3PH' => 'E02005568',
        '3PJ' => 'E02005568',
        '3PL' => 'E02005568',
        '3PN' => 'E02005561',
        '3PP' => 'E02005568',
        '3PQ' => 'E02005566',
        '3PR' => 'E02005568',
        '3PS' => 'E02005568',
        '3PT' => 'E02005568',
        '3PU' => 'E02005568',
        '3PW' => 'E02005568',
        '3PX' => 'E02005564',
        '3PY' => 'E02005565',
        '3PZ' => 'E02005568',
        '3QA' => 'E02005568',
        '3QB' => 'E02005568',
        '3QD' => 'E02005568',
        '3QE' => 'E02005568',
        '3QF' => 'E02005568',
        '3QG' => 'E02005568',
        '3QH' => 'E02005568',
        '3QJ' => 'E02005568',
        '3QL' => 'E02005568',
        '3QN' => 'E02005568',
        '3QP' => 'E02005568',
        '3QQ' => 'E02005568',
        '3QR' => 'E02005568',
        '3QS' => 'E02005561',
        '3QT' => 'E02005561',
        '3QU' => 'E02005568',
        '3QW' => 'E02005561',
        '3QX' => 'E02005568',
        '3RA' => 'E02005561',
        '3RB' => 'E02005561',
        '3RD' => 'E02005561',
        '3SA' => 'E02005565',
        '3SB' => 'E02005565',
        '3TA' => 'E02005565',
        '3TB' => 'E02005565',
        '3TD' => 'E02005565',
        '3TE' => 'E02005561',
        '3TF' => 'E02005561',
        '3WA' => 'E02005561',
        '3WB' => 'E02005561',
        '3WD' => 'E02005561',
        '3WE' => 'E02005561',
        '3WF' => 'E02005561',
        '3WJ' => 'E02005565',
        '3WP' => 'E02005561',
        '3WQ' => 'E02005561',
        '3WS' => 'E02005561',
        '3WU' => 'E02005561',
        '3WW' => 'E02005561',
        '3WX' => 'E02005561',
        '3WY' => 'E02005561',
        '3WZ' => 'E02005561',
        '3YJ' => 'E02005561',
        '4AA' => 'E02005558',
        '4AB' => 'E02005558',
        '4AD' => 'E02005558',
        '4AE' => 'E02005558',
        '4AF' => 'E02005558',
        '4AG' => 'E02005558',
        '4AH' => 'E02005558',
        '4AJ' => 'E02005558',
        '4AL' => 'E02005558',
        '4AN' => 'E02005558',
        '4AP' => 'E02005558',
        '4AQ' => 'E02005558',
        '4AR' => 'E02005558',
        '4AS' => 'E02005558',
        '4AT' => 'E02005558',
        '4AU' => 'E02005558',
        '4AW' => 'E02005558',
        '4AX' => 'E02005558',
        '4AY' => 'E02005558',
        '4AZ' => 'E02005558',
        '4BA' => 'E02005558',
        '4BB' => 'E02005558',
        '4BD' => 'E02005558',
        '4BE' => 'E02005558',
        '4BF' => 'E02005558',
        '4BG' => 'E02005558',
        '4BH' => 'E02005561',
        '4BJ' => 'E02005558',
        '4BL' => 'E02005558',
        '4BN' => 'E02005558',
        '4BP' => 'E02005558',
        '4BQ' => 'E02005558',
        '4BS' => 'E02005558',
        '4BT' => 'E02005558',
        '4BU' => 'E02005558',
        '4BW' => 'E02005558',
        '4BX' => 'E02005558',
        '4BY' => 'E02005558',
        '4BZ' => 'E02005561',
        '4DA' => 'E02005558',
        '4DB' => 'E02005558',
        '4DD' => 'E02005558',
        '4DE' => 'E02005558',
        '4DF' => 'E02005558',
        '4DG' => 'E02005558',
        '4DH' => 'E02005558',
        '4DJ' => 'E02005558',
        '4DL' => 'E02005558',
        '4DN' => 'E02005558',
        '4DP' => 'E02005558',
        '4DQ' => 'E02005558',
        '4DR' => 'E02005558',
        '4DS' => 'E02005558',
        '4DT' => 'E02005558',
        '4DU' => 'E02005558',
        '4DW' => 'E02005558',
        '4DX' => 'E02005558',
        '4DY' => 'E02005558',
        '4DZ' => 'E02005558',
        '4EA' => 'E02005558',
        '4EB' => 'E02005558',
        '4ED' => 'E02005558',
        '4EE' => 'E02005558',
        '4EF' => 'E02005558',
        '4EG' => 'E02005558',
        '4EH' => 'E02005558',
        '4EJ' => 'E02005558',
        '4EL' => 'E02005558',
        '4EN' => 'E02005558',
        '4EP' => 'E02005561',
        '4EQ' => 'E02005558',
        '4ER' => 'E02005558',
        '4ES' => 'E02005558',
        '4ET' => 'E02005561',
        '4EU' => 'E02005558',
        '4EW' => 'E02005563',
        '4EX' => 'E02005558',
        '4EY' => 'E02005558',
        '4EZ' => 'E02005558',
        '4FA' => 'E02005558',
        '4FB' => 'E02005558',
        '4FD' => 'E02005558',
        '4FF' => 'E02005558',
        '4FH' => 'E02005565',
        '4FJ' => 'E02005558',
        '4GA' => 'E02005558',
        '4GZ' => 'E02005561',
        '4HA' => 'E02005563',
        '4HB' => 'E02005563',
        '4HD' => 'E02005563',
        '4HE' => 'E02005563',
        '4HF' => 'E02005558',
        '4HG' => 'E02005472',
        '4HH' => 'E02005472',
        '4HJ' => 'E02005472',
        '4HL' => 'E02005472',
        '4HN' => 'E02005558',
        '4HP' => 'E02005558',
        '4HQ' => 'E02005472',
        '4HR' => 'E02005558',
        '4HS' => 'E02005558',
        '4HT' => 'E02005565',
        '4HU' => 'E02005558',
        '4HW' => 'E02005558',
        '4HX' => 'E02005558',
        '4HY' => 'E02005558',
        '4HZ' => 'E02005558',
        '4JA' => 'E02005558',
        '4JB' => 'E02005558',
        '4JD' => 'E02005558',
        '4JE' => 'E02005558',
        '4JF' => 'E02005558',
        '4JG' => 'E02005558',
        '4JH' => 'E02005558',
        '4JJ' => 'E02005558',
        '4JL' => 'E02005558',
        '4JN' => 'E02005558',
        '4JP' => 'E02005558',
        '4JQ' => 'E02005558',
        '4JR' => 'E02005558',
        '4JS' => 'E02005558',
        '4JT' => 'E02005558',
        '4JU' => 'E02005558',
        '4JW' => 'E02005558',
        '4JX' => 'E02005558',
        '4JY' => 'E02005558',
        '4JZ' => 'E02005558',
        '4LA' => 'E02005558',
        '4LB' => 'E02005558',
        '4LD' => 'E02005558',
        '4LE' => 'E02005558',
        '4LF' => 'E02005558',
        '4LG' => 'E02005558',
        '4LH' => 'E02005558',
        '4LJ' => 'E02005558',
        '4LL' => 'E02005558',
        '4LN' => 'E02005558',
        '4LP' => 'E02005558',
        '4LQ' => 'E02005558',
        '4LR' => 'E02005558',
        '4LS' => 'E02005558',
        '4LT' => 'E02005558',
        '4LU' => 'E02005558',
        '4LW' => 'E02005558',
        '4LX' => 'E02005558',
        '4LY' => 'E02005558',
        '4LZ' => 'E02005558',
        '4NA' => 'E02005558',
        '4NB' => 'E02005558',
        '4ND' => 'E02005558',
        '4NE' => 'E02005558',
        '4NF' => 'E02005558',
        '4NG' => 'E02005558',
        '4NH' => 'E02005558',
        '4NJ' => 'E02005558',
        '4NL' => 'E02005558',
        '4NN' => 'E02005558',
        '4NP' => 'E02005558',
        '4NQ' => 'E02005558',
        '4NR' => 'E02005558',
        '4NS' => 'E02005558',
        '4NT' => 'E02005558',
        '4NU' => 'E02005558',
        '4NW' => 'E02005558',
        '4NX' => 'E02005558',
        '4NY' => 'E02005558',
        '4NZ' => 'E02005558',
        '4PA' => 'E02005558',
        '4PB' => 'E02005558',
        '4PD' => 'E02005558',
        '4PE' => 'E02005558',
        '4PF' => 'E02005558',
        '4PG' => 'E02005558',
        '4PH' => 'E02005558',
        '4PJ' => 'E02005558',
        '4PL' => 'E02005558',
        '4PN' => 'E02005558',
        '4PP' => 'E02005558',
        '4PQ' => 'E02005558',
        '4PR' => 'E02005558',
        '4PS' => 'E02005558',
        '4PT' => 'E02005558',
        '4PU' => 'E02005558',
        '4PW' => 'E02005558',
        '4PX' => 'E02005558',
        '4PY' => 'E02005558',
        '4PZ' => 'E02005558',
        '4QA' => 'E02005558',
        '4QB' => 'E02005558',
        '4QD' => 'E02005561',
        '4QE' => 'E02005565',
        '4QF' => 'E02005565',
        '4QG' => 'E02005565',
        '4QH' => 'E02005565',
        '4QJ' => 'E02005565',
        '4QL' => 'E02005565',
        '4QN' => 'E02005565',
        '4QP' => 'E02005565',
        '4QQ' => 'E02005565',
        '4QR' => 'E02005565',
        '4QS' => 'E02005565',
        '4QT' => 'E02005565',
        '4QU' => 'E02005565',
        '4QW' => 'E02005565',
        '4QX' => 'E02005565',
        '4QY' => 'E02005565',
        '4QZ' => 'E02005565',
        '4RA' => 'E02005565',
        '4RB' => 'E02005565',
        '4RD' => 'E02005565',
        '4RE' => 'E02005565',
        '4RF' => 'E02005565',
        '4RG' => 'E02005565',
        '4RH' => 'E02005558',
        '4RJ' => 'E02005565',
        '4RL' => 'E02005558',
        '4RN' => 'E02005558',
        '4RP' => 'E02005558',
        '4RQ' => 'E02005565',
        '4RR' => 'E02005558',
        '4RS' => 'E02005558',
        '4RT' => 'E02005558',
        '4RU' => 'E02005565',
        '4RW' => 'E02005558',
        '4RX' => 'E02005565',
        '4RY' => 'E02005565',
        '4RZ' => 'E02005565',
        '4SA' => 'E02005558',
        '4SB' => 'E02005565',
        '4SD' => 'E02005558',
        '4SE' => 'E02005558',
        '4SF' => 'E02005558',
        '4SG' => 'E02005558',
        '4SH' => 'E02005558',
        '4SJ' => 'E02005558',
        '4SL' => 'E02005558',
        '4SN' => 'E02005558',
        '4SP' => 'E02005558',
        '4SQ' => 'E02005565',
        '4SR' => 'E02005558',
        '4SS' => 'E02005558',
        '4ST' => 'E02005558',
        '4SU' => 'E02005558',
        '4SW' => 'E02005558',
        '4SX' => 'E02005558',
        '4SY' => 'E02005558',
        '4SZ' => 'E02005558',
        '4TA' => 'E02005558',
        '4TD' => 'E02005558',
        '4TE' => 'E02005561',
        '4TF' => 'E02005565',
        '4TG' => 'E02005558',
        '4TH' => 'E02005558',
        '4TJ' => 'E02005558',
        '4TQ' => 'E02005558',
        '4WA' => 'E02005558',
        '4WB' => 'E02005558',
        '4WD' => 'E02005558',
        '4WE' => 'E02005558',
        '4WF' => 'E02005558',
        '4WG' => 'E02005558',
        '4WQ' => 'E02005558',
        '4WT' => 'E02005558',
        '4WU' => 'E02005561',
        '4WW' => 'E02005561',
        '4WX' => 'E02005561',
        '4WY' => 'E02005561',
        '4WZ' => 'E02005561',
        '4XA' => 'E02005561',
        '4XB' => 'E02005561',
        '4XD' => 'E02005561',
        '4XE' => 'E02005561',
        '4XF' => 'E02005561',
        '4XG' => 'E02005558',
        '4XH' => 'E02005561',
        '4XJ' => 'E02005558',
        '4XN' => 'E02005561',
        '4XP' => 'E02005561',
        '4XQ' => 'E02005558',
        '4XR' => 'E02005561',
        '4YJ' => 'E02005558',
        '4YZ' => 'E02005561',
        '4ZZ' => 'E02005561',
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
