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
final class IP16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02006290',
        '4AB' => 'E02006290',
        '4AD' => 'E02006290',
        '4AE' => 'E02006290',
        '4AF' => 'E02006290',
        '4AG' => 'E02006290',
        '4AH' => 'E02006290',
        '4AJ' => 'E02006290',
        '4AL' => 'E02006290',
        '4AN' => 'E02006290',
        '4AP' => 'E02006290',
        '4AQ' => 'E02006290',
        '4AR' => 'E02006290',
        '4AS' => 'E02006290',
        '4AT' => 'E02006290',
        '4AU' => 'E02006290',
        '4AW' => 'E02006290',
        '4AX' => 'E02006290',
        '4AY' => 'E02006290',
        '4AZ' => 'E02006290',
        '4BA' => 'E02006290',
        '4BB' => 'E02006290',
        '4BD' => 'E02006290',
        '4BE' => 'E02006290',
        '4BF' => 'E02006290',
        '4BG' => 'E02006290',
        '4BH' => 'E02006290',
        '4BJ' => 'E02006290',
        '4BL' => 'E02006290',
        '4BN' => 'E02006290',
        '4BQ' => 'E02006290',
        '4BS' => 'E02006290',
        '4BT' => 'E02006289',
        '4BU' => 'E02006290',
        '4BW' => 'E02006290',
        '4BX' => 'E02006290',
        '4BY' => 'E02006290',
        '4BZ' => 'E02006290',
        '4DA' => 'E02006290',
        '4DB' => 'E02006290',
        '4DD' => 'E02006290',
        '4DE' => 'E02006290',
        '4DF' => 'E02006290',
        '4DG' => 'E02006290',
        '4DH' => 'E02006289',
        '4DJ' => 'E02006290',
        '4DL' => 'E02006289',
        '4DN' => 'E02006290',
        '4DP' => 'E02006289',
        '4DQ' => 'E02006290',
        '4DR' => 'E02006289',
        '4DS' => 'E02006290',
        '4DT' => 'E02006289',
        '4DU' => 'E02006289',
        '4DW' => 'E02006290',
        '4DX' => 'E02006290',
        '4DY' => 'E02006289',
        '4DZ' => 'E02006289',
        '4EA' => 'E02006289',
        '4EB' => 'E02006289',
        '4ED' => 'E02006289',
        '4EE' => 'E02006289',
        '4EF' => 'E02006289',
        '4EG' => 'E02006289',
        '4EH' => 'E02006289',
        '4EJ' => 'E02006290',
        '4EL' => 'E02006290',
        '4EN' => 'E02006290',
        '4EP' => 'E02006290',
        '4EQ' => 'E02006289',
        '4ER' => 'E02006290',
        '4ES' => 'E02006290',
        '4ET' => 'E02006290',
        '4EU' => 'E02006289',
        '4EW' => 'E02006290',
        '4EX' => 'E02006290',
        '4EY' => 'E02006290',
        '4EZ' => 'E02006290',
        '4FA' => 'E02006290',
        '4FB' => 'E02006290',
        '4FD' => 'E02006290',
        '4FE' => 'E02006290',
        '4FF' => 'E02006290',
        '4FG' => 'E02006290',
        '4FJ' => 'E02006290',
        '4FL' => 'E02006290',
        '4GL' => 'E02006290',
        '4GU' => 'E02006290',
        '4GW' => 'E02006290',
        '4GX' => 'E02006290',
        '4GY' => 'E02006290',
        '4GZ' => 'E02006290',
        '4HA' => 'E02006290',
        '4HB' => 'E02006290',
        '4HD' => 'E02006290',
        '4HE' => 'E02006290',
        '4HF' => 'E02006290',
        '4HG' => 'E02006290',
        '4HH' => 'E02006290',
        '4HJ' => 'E02006290',
        '4HL' => 'E02006290',
        '4HN' => 'E02006290',
        '4HP' => 'E02006290',
        '4HQ' => 'E02006290',
        '4HR' => 'E02006290',
        '4HS' => 'E02006290',
        '4HT' => 'E02006290',
        '4HU' => 'E02006290',
        '4HW' => 'E02006290',
        '4HX' => 'E02006290',
        '4HY' => 'E02006290',
        '4HZ' => 'E02006290',
        '4JA' => 'E02006290',
        '4JB' => 'E02006290',
        '4JD' => 'E02006290',
        '4JE' => 'E02006290',
        '4JF' => 'E02006290',
        '4JG' => 'E02006290',
        '4JH' => 'E02006290',
        '4JJ' => 'E02006290',
        '4JL' => 'E02006290',
        '4JN' => 'E02006290',
        '4JP' => 'E02006290',
        '4JQ' => 'E02006290',
        '4JR' => 'E02006290',
        '4JS' => 'E02006290',
        '4JT' => 'E02006290',
        '4JU' => 'E02006290',
        '4JW' => 'E02006290',
        '4JX' => 'E02006290',
        '4JY' => 'E02006289',
        '4JZ' => 'E02006290',
        '4LA' => 'E02006290',
        '4LB' => 'E02006290',
        '4LD' => 'E02006290',
        '4LE' => 'E02006290',
        '4LF' => 'E02006290',
        '4LG' => 'E02006290',
        '4LH' => 'E02006290',
        '4LJ' => 'E02006290',
        '4LL' => 'E02006290',
        '4LN' => 'E02006290',
        '4LP' => 'E02006290',
        '4LQ' => 'E02006290',
        '4LR' => 'E02006290',
        '4LS' => 'E02006290',
        '4LT' => 'E02006290',
        '4LU' => 'E02006290',
        '4LW' => 'E02006290',
        '4LX' => 'E02006290',
        '4LY' => 'E02006290',
        '4LZ' => 'E02006290',
        '4NA' => 'E02006290',
        '4NB' => 'E02006290',
        '4ND' => 'E02006290',
        '4NE' => 'E02006290',
        '4NF' => 'E02006290',
        '4NG' => 'E02006290',
        '4NH' => 'E02006290',
        '4NJ' => 'E02006290',
        '4NL' => 'E02006290',
        '4NN' => 'E02006290',
        '4NP' => 'E02006290',
        '4NQ' => 'E02006290',
        '4NR' => 'E02006290',
        '4NS' => 'E02006290',
        '4NT' => 'E02006290',
        '4NU' => 'E02006290',
        '4NW' => 'E02006290',
        '4NX' => 'E02006290',
        '4NY' => 'E02006290',
        '4NZ' => 'E02006290',
        '4PA' => 'E02006290',
        '4PB' => 'E02006290',
        '4PD' => 'E02006290',
        '4PE' => 'E02006290',
        '4PF' => 'E02006290',
        '4PG' => 'E02006290',
        '4PH' => 'E02006290',
        '4PJ' => 'E02006290',
        '4PL' => 'E02006290',
        '4PN' => 'E02006289',
        '4PP' => 'E02006290',
        '4PQ' => 'E02006290',
        '4PR' => 'E02006290',
        '4PS' => 'E02006290',
        '4PT' => 'E02006290',
        '4PU' => 'E02006290',
        '4PW' => 'E02006290',
        '4PX' => 'E02006290',
        '4PY' => 'E02006290',
        '4PZ' => 'E02006290',
        '4QA' => 'E02006290',
        '4QB' => 'E02006290',
        '4QD' => 'E02006290',
        '4QE' => 'E02006290',
        '4QF' => 'E02006290',
        '4QG' => 'E02006290',
        '4QH' => 'E02006290',
        '4QJ' => 'E02006290',
        '4QL' => 'E02006290',
        '4QN' => 'E02006290',
        '4QP' => 'E02006290',
        '4QQ' => 'E02006290',
        '4QR' => 'E02006290',
        '4QS' => 'E02006290',
        '4QT' => 'E02006290',
        '4QU' => 'E02006290',
        '4QW' => 'E02006290',
        '4QX' => 'E02006290',
        '4QY' => 'E02006290',
        '4QZ' => 'E02006290',
        '4RA' => 'E02006289',
        '4RB' => 'E02006290',
        '4RD' => 'E02006290',
        '4RE' => 'E02006290',
        '4RF' => 'E02006290',
        '4RG' => 'E02006290',
        '4RH' => 'E02006290',
        '4RJ' => 'E02006289',
        '4RL' => 'E02006289',
        '4RN' => 'E02006289',
        '4RP' => 'E02006289',
        '4RQ' => 'E02006290',
        '4RR' => 'E02006289',
        '4RS' => 'E02006289',
        '4RT' => 'E02006289',
        '4RU' => 'E02006289',
        '4RW' => 'E02006289',
        '4RX' => 'E02006289',
        '4RY' => 'E02006289',
        '4RZ' => 'E02006289',
        '4SA' => 'E02006289',
        '4SB' => 'E02006289',
        '4SD' => 'E02006289',
        '4SE' => 'E02006289',
        '4SF' => 'E02006289',
        '4SG' => 'E02006289',
        '4SH' => 'E02006289',
        '4SJ' => 'E02006289',
        '4SL' => 'E02006289',
        '4SN' => 'E02006289',
        '4SP' => 'E02006290',
        '4SQ' => 'E02006289',
        '4SR' => 'E02006290',
        '4SS' => 'E02006290',
        '4ST' => 'E02006289',
        '4SU' => 'E02006290',
        '4SW' => 'E02006289',
        '4SX' => 'E02006290',
        '4SY' => 'E02006290',
        '4SZ' => 'E02006290',
        '4TA' => 'E02006290',
        '4TB' => 'E02006290',
        '4TD' => 'E02006290',
        '4TE' => 'E02006290',
        '4TF' => 'E02006289',
        '4TG' => 'E02006289',
        '4TH' => 'E02006289',
        '4TJ' => 'E02006289',
        '4TL' => 'E02006289',
        '4TN' => 'E02006289',
        '4TP' => 'E02006290',
        '4TQ' => 'E02006289',
        '4TR' => 'E02006290',
        '4TS' => 'E02006290',
        '4TT' => 'E02006290',
        '4TU' => 'E02006290',
        '4TW' => 'E02006290',
        '4TX' => 'E02006290',
        '4TY' => 'E02006290',
        '4TZ' => 'E02006290',
        '4UA' => 'E02006290',
        '4UB' => 'E02006290',
        '4UD' => 'E02006290',
        '4UE' => 'E02006290',
        '4UF' => 'E02006290',
        '4UG' => 'E02006289',
        '4UH' => 'E02006290',
        '4UJ' => 'E02006290',
        '4UL' => 'E02006290',
        '4UN' => 'E02006290',
        '4UP' => 'E02006290',
        '4UQ' => 'E02006289',
        '4UR' => 'E02006290',
        '4US' => 'E02006290',
        '4UT' => 'E02006289',
        '4UU' => 'E02006290',
        '4UW' => 'E02006290',
        '4UX' => 'E02006290',
        '4UY' => 'E02006289',
        '4UZ' => 'E02006290',
        '4WA' => 'E02006290',
        '4WB' => 'E02006290',
        '4WD' => 'E02006290',
        '4WE' => 'E02006289',
        '4WF' => 'E02006290',
        '4WG' => 'E02006289',
        '4WH' => 'E02006290',
        '4WJ' => 'E02006290',
        '4WL' => 'E02006290',
        '4WN' => 'E02006290',
        '4WP' => 'E02006290',
        '4WQ' => 'E02006290',
        '4WR' => 'E02006290',
        '4WU' => 'E02006290',
        '4WX' => 'E02006290',
        '4WY' => 'E02006290',
        '4WZ' => 'E02006290',
        '4XA' => 'E02006289',
        '4XB' => 'E02006289',
        '4XD' => 'E02006290',
        '4XE' => 'E02006290',
        '4XF' => 'E02006290',
        '4XQ' => 'E02006290',
        '4XS' => 'E02006290',
        '4ZY' => 'E02006290',
        '9AA' => 'E02006290',
        '9AB' => 'E02006290',
        '9AD' => 'E02006290',
        '9AE' => 'E02006290',
        '9AF' => 'E02006290',
        '9AG' => 'E02006290',
        '9AH' => 'E02006290',
        '9AJ' => 'E02006290',
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
