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
final class YO43
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02002698',
        '3AB' => 'E02002698',
        '3AD' => 'E02002698',
        '3AE' => 'E02002698',
        '3AF' => 'E02002698',
        '3AG' => 'E02002698',
        '3AH' => 'E02002698',
        '3AJ' => 'E02002698',
        '3AL' => 'E02002698',
        '3AN' => 'E02002698',
        '3AP' => 'E02002698',
        '3AQ' => 'E02002698',
        '3AR' => 'E02002698',
        '3AS' => 'E02002698',
        '3AT' => 'E02002698',
        '3AU' => 'E02002698',
        '3AW' => 'E02002698',
        '3AX' => 'E02002698',
        '3AY' => 'E02002698',
        '3AZ' => 'E02002698',
        '3BA' => 'E02002698',
        '3BB' => 'E02002698',
        '3BD' => 'E02002698',
        '3BE' => 'E02002698',
        '3BF' => 'E02002698',
        '3BG' => 'E02002698',
        '3BH' => 'E02002698',
        '3BJ' => 'E02002698',
        '3BL' => 'E02002698',
        '3BN' => 'E02002698',
        '3BP' => 'E02002698',
        '3BQ' => 'E02002698',
        '3BR' => 'E02002698',
        '3BS' => 'E02002698',
        '3BT' => 'E02002698',
        '3BU' => 'E02002698',
        '3BW' => 'E02002698',
        '3BX' => 'E02002698',
        '3BY' => 'E02002698',
        '3BZ' => 'E02002698',
        '3DA' => 'E02002698',
        '3DB' => 'E02002698',
        '3DD' => 'E02002698',
        '3DE' => 'E02002698',
        '3DF' => 'E02002698',
        '3DG' => 'E02002698',
        '3DH' => 'E02002698',
        '3DJ' => 'E02002698',
        '3DL' => 'E02002698',
        '3DN' => 'E02002698',
        '3DP' => 'E02002698',
        '3DQ' => 'E02002698',
        '3DR' => 'E02002698',
        '3DS' => 'E02002698',
        '3DT' => 'E02002698',
        '3DU' => 'E02002698',
        '3DW' => 'E02002698',
        '3DX' => 'E02002698',
        '3DY' => 'E02002698',
        '3DZ' => 'E02002698',
        '3EA' => 'E02002698',
        '3EB' => 'E02002698',
        '3ED' => 'E02002698',
        '3EE' => 'E02002698',
        '3EF' => 'E02002698',
        '3EG' => 'E02002698',
        '3EH' => 'E02002698',
        '3EJ' => 'E02002698',
        '3EL' => 'E02002698',
        '3EN' => 'E02002698',
        '3EP' => 'E02002698',
        '3EQ' => 'E02002698',
        '3ER' => 'E02002698',
        '3ES' => 'E02002698',
        '3ET' => 'E02002698',
        '3EU' => 'E02002698',
        '3EW' => 'E02002698',
        '3EX' => 'E02002698',
        '3EY' => 'E02002698',
        '3EZ' => 'E02002698',
        '3FA' => 'E02002698',
        '3FB' => 'E02002698',
        '3FD' => 'E02002698',
        '3FE' => 'E02002698',
        '3FF' => 'E02002698',
        '3FH' => 'E02002698',
        '3FJ' => 'E02002698',
        '3FL' => 'E02002698',
        '3FN' => 'E02002698',
        '3FP' => 'E02002698',
        '3FQ' => 'E02002698',
        '3FR' => 'E02002698',
        '3FS' => 'E02002698',
        '3FT' => 'E02002698',
        '3FU' => 'E02002698',
        '3FW' => 'E02002698',
        '3FX' => 'E02002698',
        '3FY' => 'E02002698',
        '3FZ' => 'E02002698',
        '3GA' => 'E02002698',
        '3GB' => 'E02002698',
        '3GD' => 'E02002698',
        '3GE' => 'E02002698',
        '3GF' => 'E02002698',
        '3GG' => 'E02002698',
        '3GH' => 'E02002698',
        '3GJ' => 'E02002698',
        '3GL' => 'E02002698',
        '3GN' => 'E02002698',
        '3GP' => 'E02002698',
        '3GQ' => 'E02002698',
        '3GR' => 'E02002698',
        '3GS' => 'E02002698',
        '3GT' => 'E02002698',
        '3GU' => 'E02002698',
        '3GW' => 'E02002698',
        '3GX' => 'E02002698',
        '3GY' => 'E02002698',
        '3HA' => 'E02002698',
        '3HB' => 'E02002698',
        '3HD' => 'E02002698',
        '3HE' => 'E02002698',
        '3HF' => 'E02002698',
        '3HG' => 'E02002698',
        '3HH' => 'E02002698',
        '3HJ' => 'E02002698',
        '3HL' => 'E02002698',
        '3HN' => 'E02002698',
        '3HP' => 'E02002698',
        '3HQ' => 'E02002698',
        '3HR' => 'E02002698',
        '3HS' => 'E02002698',
        '3HT' => 'E02002698',
        '3HU' => 'E02002698',
        '3HW' => 'E02002698',
        '3HX' => 'E02002698',
        '3HY' => 'E02002698',
        '3HZ' => 'E02002698',
        '3JA' => 'E02002698',
        '3JB' => 'E02002698',
        '3JD' => 'E02002698',
        '3JE' => 'E02002698',
        '3JF' => 'E02002698',
        '3JG' => 'E02002698',
        '3JH' => 'E02002698',
        '3JJ' => 'E02002698',
        '3JL' => 'E02002698',
        '3JN' => 'E02002698',
        '3JP' => 'E02002698',
        '3JQ' => 'E02002698',
        '3JR' => 'E02002698',
        '3JS' => 'E02002698',
        '3JT' => 'E02002698',
        '3JU' => 'E02002698',
        '3JW' => 'E02002698',
        '3JX' => 'E02002698',
        '3JY' => 'E02002698',
        '3JZ' => 'E02002698',
        '3LA' => 'E02002698',
        '3LB' => 'E02002694',
        '3LD' => 'E02002694',
        '3LE' => 'E02002694',
        '3LF' => 'E02002694',
        '3LG' => 'E02002694',
        '3LH' => 'E02002694',
        '3LJ' => 'E02002694',
        '3LL' => 'E02002694',
        '3LN' => 'E02002694',
        '3LP' => 'E02002694',
        '3LQ' => 'E02002694',
        '3LR' => 'E02002694',
        '3LS' => 'E02002694',
        '3LT' => 'E02002698',
        '3LU' => 'E02002696',
        '3LW' => 'E02002698',
        '3LX' => 'E02002696',
        '3LY' => 'E02002696',
        '3LZ' => 'E02002698',
        '3NA' => 'E02002698',
        '3NB' => 'E02002698',
        '3ND' => 'E02002698',
        '3NE' => 'E02002698',
        '3NF' => 'E02002698',
        '3NG' => 'E02002698',
        '3NH' => 'E02002698',
        '3NJ' => 'E02002698',
        '3NL' => 'E02002698',
        '3NN' => 'E02002698',
        '3NP' => 'E02002698',
        '3NQ' => 'E02002698',
        '3NR' => 'E02002698',
        '3NS' => 'E02002698',
        '3NT' => 'E02002698',
        '3NU' => 'E02002698',
        '3NW' => 'E02002698',
        '3NX' => 'E02002698',
        '3NY' => 'E02002698',
        '3NZ' => 'E02002698',
        '3PA' => 'E02002698',
        '3PB' => 'E02002698',
        '3PD' => 'E02002698',
        '3PE' => 'E02002698',
        '3PF' => 'E02002698',
        '3PG' => 'E02002698',
        '3PH' => 'E02002698',
        '3PJ' => 'E02002698',
        '3PL' => 'E02002698',
        '3PN' => 'E02002698',
        '3PP' => 'E02002698',
        '3PQ' => 'E02002698',
        '3PR' => 'E02002698',
        '3PS' => 'E02002698',
        '3PT' => 'E02002698',
        '3PU' => 'E02002698',
        '3PW' => 'E02002698',
        '3PX' => 'E02002698',
        '3PY' => 'E02002698',
        '3PZ' => 'E02002698',
        '3QA' => 'E02002701',
        '3QB' => 'E02002698',
        '3QD' => 'E02002698',
        '3QE' => 'E02002694',
        '3QF' => 'E02002698',
        '3QG' => 'E02002698',
        '3QH' => 'E02002698',
        '3QJ' => 'E02002698',
        '3QL' => 'E02002698',
        '3QN' => 'E02002698',
        '3QP' => 'E02002698',
        '3QQ' => 'E02002698',
        '3QR' => 'E02002698',
        '3QS' => 'E02002698',
        '3QT' => 'E02002698',
        '3QU' => 'E02002698',
        '3QW' => 'E02002698',
        '3QX' => 'E02002698',
        '3QY' => 'E02002698',
        '3QZ' => 'E02002698',
        '3RA' => 'E02002698',
        '3RB' => 'E02002698',
        '3RD' => 'E02002698',
        '3RE' => 'E02002698',
        '3RF' => 'E02002698',
        '3RG' => 'E02002698',
        '3RH' => 'E02002698',
        '3RJ' => 'E02002698',
        '3RL' => 'E02002698',
        '3RN' => 'E02002698',
        '3RP' => 'E02002698',
        '3RQ' => 'E02002698',
        '3RR' => 'E02002698',
        '3RS' => 'E02002698',
        '3RT' => 'E02002698',
        '3RU' => 'E02002698',
        '3RW' => 'E02002698',
        '3WA' => 'E02002698',
        '3WB' => 'E02002698',
        '3WD' => 'E02002698',
        '3WE' => 'E02002698',
        '3WJ' => 'E02002698',
        '3WL' => 'E02002698',
        '3WN' => 'E02002698',
        '3WP' => 'E02002698',
        '3WQ' => 'E02002698',
        '3WR' => 'E02002698',
        '3WS' => 'E02002698',
        '3WT' => 'E02002698',
        '3WU' => 'E02002698',
        '3WW' => 'E02002698',
        '3WX' => 'E02002698',
        '3WY' => 'E02002698',
        '3WZ' => 'E02002698',
        '3YA' => 'E02002698',
        '3YG' => 'E02002698',
        '3YH' => 'E02002698',
        '3YJ' => 'E02002784',
        '3YL' => 'E02002698',
        '3YN' => 'E02002698',
        '3YP' => 'E02002698',
        '3YQ' => 'E02002698',
        '3YR' => 'E02002698',
        '3YS' => 'E02002698',
        '3YT' => 'E02002698',
        '3YU' => 'E02002698',
        '3YW' => 'E02002698',
        '3YX' => 'E02002698',
        '3YY' => 'E02002698',
        '3YZ' => 'E02002698',
        '4AA' => 'E02002701',
        '4AB' => 'E02002701',
        '4AD' => 'E02002701',
        '4AE' => 'E02002701',
        '4AF' => 'E02002701',
        '4AG' => 'E02002701',
        '4AH' => 'E02002701',
        '4AJ' => 'E02002701',
        '4AL' => 'E02002701',
        '4AN' => 'E02002701',
        '4AP' => 'E02002701',
        '4AQ' => 'E02002701',
        '4AR' => 'E02002701',
        '4AS' => 'E02002701',
        '4AT' => 'E02002701',
        '4AU' => 'E02002701',
        '4AW' => 'E02002701',
        '4AX' => 'E02002701',
        '4AY' => 'E02002701',
        '4AZ' => 'E02002701',
        '4BA' => 'E02002701',
        '4BB' => 'E02002701',
        '4BD' => 'E02002701',
        '4BE' => 'E02002701',
        '4BF' => 'E02002701',
        '4BG' => 'E02002701',
        '4BH' => 'E02002701',
        '4BJ' => 'E02002701',
        '4BL' => 'E02002701',
        '4BN' => 'E02002701',
        '4BP' => 'E02002701',
        '4BQ' => 'E02002701',
        '4BR' => 'E02002701',
        '4BS' => 'E02002701',
        '4BT' => 'E02002701',
        '4BU' => 'E02002701',
        '4BW' => 'E02002701',
        '4BX' => 'E02002701',
        '4BY' => 'E02002701',
        '4BZ' => 'E02002701',
        '4DA' => 'E02002701',
        '4DB' => 'E02002701',
        '4DD' => 'E02002701',
        '4DE' => 'E02002701',
        '4DF' => 'E02002701',
        '4DG' => 'E02002701',
        '4DH' => 'E02002701',
        '4DJ' => 'E02002701',
        '4DL' => 'E02002701',
        '4DN' => 'E02002701',
        '4DP' => 'E02002701',
        '4DQ' => 'E02002701',
        '4DR' => 'E02002701',
        '4DS' => 'E02002701',
        '4DT' => 'E02002701',
        '4DU' => 'E02002701',
        '4DW' => 'E02002701',
        '4DX' => 'E02002701',
        '4DY' => 'E02002701',
        '4DZ' => 'E02002701',
        '4EA' => 'E02002701',
        '4EB' => 'E02002701',
        '4ED' => 'E02002701',
        '4EE' => 'E02002701',
        '4EF' => 'E02002701',
        '4EG' => 'E02002701',
        '4EH' => 'E02002701',
        '4EJ' => 'E02002701',
        '4EL' => 'E02002701',
        '4EN' => 'E02002701',
        '4EP' => 'E02002701',
        '4EQ' => 'E02002701',
        '4ER' => 'E02002701',
        '4ES' => 'E02002701',
        '4ET' => 'E02002701',
        '4EU' => 'E02002701',
        '4EW' => 'E02002701',
        '4EX' => 'E02002701',
        '4EY' => 'E02002701',
        '4EZ' => 'E02002701',
        '4FA' => 'E02002701',
        '4FB' => 'E02002707',
        '4FD' => 'E02002701',
        '4FE' => 'E02002701',
        '4FF' => 'E02002707',
        '4FJ' => 'E02002701',
        '4FL' => 'E02002701',
        '4FN' => 'E02002701',
        '4HA' => 'E02002701',
        '4HB' => 'E02002701',
        '4HD' => 'E02002701',
        '4HE' => 'E02002701',
        '4HF' => 'E02002701',
        '4HG' => 'E02002701',
        '4HH' => 'E02002701',
        '4HJ' => 'E02002701',
        '4HL' => 'E02002701',
        '4HQ' => 'E02002701',
        '4HS' => 'E02002701',
        '4HT' => 'E02002701',
        '4HU' => 'E02002701',
        '4HW' => 'E02002701',
        '4HX' => 'E02002701',
        '4HY' => 'E02002701',
        '4LA' => 'E02002701',
        '4LB' => 'E02002698',
        '4LD' => 'E02002698',
        '4LE' => 'E02002698',
        '4LX' => 'E02002698',
        '4LY' => 'E02002701',
        '4LZ' => 'E02002701',
        '4NB' => 'E02002698',
        '4ND' => 'E02002698',
        '4NE' => 'E02002698',
        '4NF' => 'E02002698',
        '4NG' => 'E02002698',
        '4NQ' => 'E02002698',
        '4QP' => 'E02002698',
        '4QR' => 'E02002698',
        '4QS' => 'E02002698',
        '4QT' => 'E02002698',
        '4QU' => 'E02002698',
        '4QX' => 'E02002698',
        '4QY' => 'E02002698',
        '4QZ' => 'E02002698',
        '4RA' => 'E02002698',
        '4RB' => 'E02002698',
        '4RD' => 'E02002698',
        '4RE' => 'E02002698',
        '4RF' => 'E02002698',
        '4RG' => 'E02002698',
        '4RH' => 'E02002698',
        '4RJ' => 'E02002698',
        '4RL' => 'E02002698',
        '4RN' => 'E02002698',
        '4RP' => 'E02002698',
        '4RQ' => 'E02002698',
        '4RR' => 'E02002707',
        '4RU' => 'E02002707',
        '4RW' => 'E02002707',
        '4RX' => 'E02002707',
        '4RY' => 'E02002707',
        '4RZ' => 'E02002707',
        '4SA' => 'E02002707',
        '4SB' => 'E02002707',
        '4SD' => 'E02002707',
        '4SE' => 'E02002707',
        '4SF' => 'E02002707',
        '4SG' => 'E02002707',
        '4SH' => 'E02002707',
        '4SJ' => 'E02002707',
        '4SL' => 'E02002707',
        '4SN' => 'E02002707',
        '4SP' => 'E02002707',
        '4SQ' => 'E02002707',
        '4SR' => 'E02002707',
        '4SS' => 'E02002707',
        '4ST' => 'E02002707',
        '4SU' => 'E02002707',
        '4SW' => 'E02002707',
        '4SX' => 'E02002707',
        '4SY' => 'E02002707',
        '4SZ' => 'E02002707',
        '4TA' => 'E02002707',
        '4TB' => 'E02002707',
        '4TD' => 'E02002707',
        '4TE' => 'E02002707',
        '4TF' => 'E02002707',
        '4TG' => 'E02002707',
        '4TH' => 'E02002707',
        '4TJ' => 'E02002707',
        '4TL' => 'E02002707',
        '4TN' => 'E02002707',
        '4TP' => 'E02002707',
        '4TQ' => 'E02002707',
        '4TR' => 'E02002707',
        '4TS' => 'E02002707',
        '4TT' => 'E02002707',
        '4TU' => 'E02002707',
        '4TW' => 'E02002707',
        '4TX' => 'E02002707',
        '4TY' => 'E02002707',
        '4TZ' => 'E02002707',
        '4UA' => 'E02002709',
        '4UB' => 'E02002709',
        '4UD' => 'E02002709',
        '4UE' => 'E02002709',
        '4UF' => 'E02002709',
        '4UG' => 'E02002709',
        '4UH' => 'E02002698',
        '4UJ' => 'E02002709',
        '4UL' => 'E02002709',
        '4UN' => 'E02002709',
        '4UQ' => 'E02002709',
        '4UU' => 'E02002709',
        '4UW' => 'E02002709',
        '4UX' => 'E02002698',
        '4UY' => 'E02002698',
        '4UZ' => 'E02002698',
        '4WA' => 'E02002698',
        '4WB' => 'E02002698',
        '4WF' => 'E02002698',
        '4WG' => 'E02002698',
        '4WH' => 'E02002698',
        '4WJ' => 'E02002698',
        '4WL' => 'E02002698',
        '4WN' => 'E02002698',
        '4WP' => 'E02002698',
        '4WQ' => 'E02002698',
        '4WR' => 'E02002698',
        '4WS' => 'E02002698',
        '4WT' => 'E02002698',
        '4WU' => 'E02002698',
        '4WW' => 'E02002698',
        '4WX' => 'E02002698',
        '4WY' => 'E02002698',
        '4WZ' => 'E02002701',
        '4XA' => 'E02002698',
        '4XB' => 'E02002698',
        '4XD' => 'E02002698',
        '4XE' => 'E02002698',
        '4XF' => 'E02002701',
        '4XG' => 'E02002701',
        '4XH' => 'E02002701',
        '4XJ' => 'E02002698',
        '4XL' => 'E02002709',
        '4XN' => 'E02002709',
        '4XP' => 'E02002698',
        '4XQ' => 'E02002698',
        '4XR' => 'E02002698',
        '4XS' => 'E02002709',
        '4YH' => 'E02002701',
        '4YJ' => 'E02002784',
        '4YX' => 'E02002698',
        '4YY' => 'E02002701',
        '4YZ' => 'E02002698',
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
