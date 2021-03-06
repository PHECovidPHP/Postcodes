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
final class GL8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AB' => 'E02004625',
        '0AD' => 'E02004625',
        '0AE' => 'E02004625',
        '0AF' => 'E02004625',
        '0AG' => 'E02004625',
        '0AH' => 'E02004625',
        '0AJ' => 'E02004625',
        '0AL' => 'E02004625',
        '0AN' => 'E02004625',
        '0AP' => 'E02004625',
        '0AQ' => 'E02004625',
        '0AR' => 'E02004625',
        '0AS' => 'E02004625',
        '0AT' => 'E02004625',
        '0AU' => 'E02004625',
        '0AW' => 'E02004625',
        '0AX' => 'E02004625',
        '0AY' => 'E02004625',
        '0AZ' => 'E02004625',
        '0BA' => 'E02004625',
        '0BB' => 'E02004625',
        '0BD' => 'E02004625',
        '0BE' => 'E02004625',
        '0BF' => 'E02004625',
        '0BG' => 'E02004625',
        '0BH' => 'E02004625',
        '0BJ' => 'E02004625',
        '8AA' => 'E02004625',
        '8AB' => 'E02004625',
        '8AD' => 'E02004625',
        '8AE' => 'E02004625',
        '8AF' => 'E02004625',
        '8AG' => 'E02004625',
        '8AH' => 'E02004625',
        '8AJ' => 'E02004625',
        '8AL' => 'E02004625',
        '8AN' => 'E02004625',
        '8AP' => 'E02004625',
        '8AQ' => 'E02004625',
        '8AR' => 'E02004625',
        '8AS' => 'E02004625',
        '8AT' => 'E02004625',
        '8AU' => 'E02004625',
        '8AW' => 'E02004625',
        '8AX' => 'E02004625',
        '8AY' => 'E02004625',
        '8AZ' => 'E02004625',
        '8BA' => 'E02004625',
        '8BB' => 'E02004625',
        '8BD' => 'E02004625',
        '8BE' => 'E02004625',
        '8BG' => 'E02004625',
        '8BH' => 'E02004625',
        '8BJ' => 'E02004625',
        '8BL' => 'E02004625',
        '8BN' => 'E02004625',
        '8BP' => 'E02004625',
        '8BQ' => 'E02004625',
        '8BS' => 'E02004625',
        '8BT' => 'E02004625',
        '8BU' => 'E02004625',
        '8BW' => 'E02004625',
        '8BX' => 'E02004625',
        '8BY' => 'E02004625',
        '8BZ' => 'E02004625',
        '8DA' => 'E02004625',
        '8DB' => 'E02004625',
        '8DD' => 'E02004625',
        '8DE' => 'E02004625',
        '8DF' => 'E02004625',
        '8DG' => 'E02004625',
        '8DH' => 'E02004625',
        '8DJ' => 'E02004625',
        '8DL' => 'E02004625',
        '8DN' => 'E02004625',
        '8DP' => 'E02004625',
        '8DQ' => 'E02004625',
        '8DR' => 'E02004625',
        '8DS' => 'E02004625',
        '8DT' => 'E02004625',
        '8DU' => 'E02004625',
        '8DW' => 'E02004625',
        '8DX' => 'E02004625',
        '8DY' => 'E02004625',
        '8DZ' => 'E02004625',
        '8EA' => 'E02004625',
        '8EB' => 'E02004625',
        '8ED' => 'E02004625',
        '8EE' => 'E02004625',
        '8EF' => 'E02004625',
        '8EG' => 'E02004625',
        '8EH' => 'E02004625',
        '8EJ' => 'E02004625',
        '8EL' => 'E02004625',
        '8EN' => 'E02004625',
        '8EP' => 'E02004625',
        '8EQ' => 'E02004625',
        '8ER' => 'E02004625',
        '8ES' => 'E02004625',
        '8ET' => 'E02004625',
        '8EU' => 'E02004625',
        '8EW' => 'E02004625',
        '8EX' => 'E02004625',
        '8EY' => 'E02004625',
        '8EZ' => 'E02004625',
        '8FA' => 'E02004625',
        '8FB' => 'E02004625',
        '8FD' => 'E02004625',
        '8FE' => 'E02004625',
        '8FF' => 'E02004625',
        '8FG' => 'E02004625',
        '8FH' => 'E02004625',
        '8FJ' => 'E02004625',
        '8FL' => 'E02004625',
        '8FN' => 'E02004625',
        '8FP' => 'E02004625',
        '8FQ' => 'E02004625',
        '8FR' => 'E02004625',
        '8FS' => 'E02004625',
        '8FT' => 'E02004625',
        '8FU' => 'E02004625',
        '8FW' => 'E02004625',
        '8FX' => 'E02004625',
        '8GJ' => 'E02004625',
        '8GL' => 'E02004625',
        '8GN' => 'E02004625',
        '8GP' => 'E02004625',
        '8GQ' => 'E02004625',
        '8GR' => 'E02004625',
        '8GS' => 'E02004625',
        '8GT' => 'E02004625',
        '8GU' => 'E02004625',
        '8GW' => 'E02004625',
        '8GX' => 'E02004625',
        '8GY' => 'E02004625',
        '8GZ' => 'E02004625',
        '8HA' => 'E02004625',
        '8HB' => 'E02004625',
        '8HD' => 'E02004625',
        '8HE' => 'E02004625',
        '8HF' => 'E02004625',
        '8HG' => 'E02004625',
        '8HH' => 'E02004625',
        '8HJ' => 'E02004625',
        '8HL' => 'E02004625',
        '8HN' => 'E02004625',
        '8HP' => 'E02004625',
        '8HQ' => 'E02004625',
        '8HR' => 'E02004625',
        '8HS' => 'E02004625',
        '8HT' => 'E02004625',
        '8HU' => 'E02004625',
        '8HW' => 'E02004625',
        '8HX' => 'E02004625',
        '8HY' => 'E02004625',
        '8HZ' => 'E02004625',
        '8JA' => 'E02004625',
        '8JB' => 'E02004625',
        '8JD' => 'E02004625',
        '8JE' => 'E02004625',
        '8JF' => 'E02004625',
        '8JG' => 'E02004625',
        '8JH' => 'E02004625',
        '8JJ' => 'E02004625',
        '8JL' => 'E02004625',
        '8JN' => 'E02004625',
        '8JP' => 'E02004625',
        '8JQ' => 'E02004625',
        '8JR' => 'E02004625',
        '8JS' => 'E02004625',
        '8JT' => 'E02004625',
        '8JU' => 'E02004625',
        '8JW' => 'E02004625',
        '8JX' => 'E02004625',
        '8JY' => 'E02004625',
        '8JZ' => 'E02004625',
        '8LA' => 'E02004625',
        '8LB' => 'E02004625',
        '8LD' => 'E02004625',
        '8LE' => 'E02004625',
        '8LF' => 'E02004625',
        '8LG' => 'E02004625',
        '8LH' => 'E02004625',
        '8LJ' => 'E02004625',
        '8LL' => 'E02004625',
        '8LN' => 'E02004625',
        '8LP' => 'E02004625',
        '8LQ' => 'E02004625',
        '8LR' => 'E02004625',
        '8LS' => 'E02004625',
        '8LT' => 'E02004625',
        '8LU' => 'E02004625',
        '8LW' => 'E02004625',
        '8LX' => 'E02004625',
        '8LY' => 'E02004625',
        '8LZ' => 'E02004625',
        '8NA' => 'E02004625',
        '8NB' => 'E02004625',
        '8ND' => 'E02004625',
        '8NE' => 'E02004625',
        '8NF' => 'E02004625',
        '8NG' => 'E02004625',
        '8NH' => 'E02004625',
        '8NJ' => 'E02004625',
        '8NL' => 'E02004625',
        '8NN' => 'E02004625',
        '8NP' => 'E02004625',
        '8NQ' => 'E02004625',
        '8NR' => 'E02004625',
        '8NS' => 'E02004625',
        '8NT' => 'E02004625',
        '8NU' => 'E02004625',
        '8NW' => 'E02004625',
        '8NX' => 'E02004625',
        '8NY' => 'E02004625',
        '8NZ' => 'E02004625',
        '8PA' => 'E02004625',
        '8PB' => 'E02004625',
        '8PD' => 'E02004625',
        '8PE' => 'E02004625',
        '8PF' => 'E02004625',
        '8PG' => 'E02004625',
        '8PH' => 'E02004625',
        '8PJ' => 'E02004625',
        '8PL' => 'E02004625',
        '8PN' => 'E02004625',
        '8PP' => 'E02004625',
        '8PQ' => 'E02004625',
        '8PR' => 'E02004625',
        '8PS' => 'E02004625',
        '8PT' => 'E02004625',
        '8PU' => 'E02004625',
        '8PW' => 'E02004625',
        '8PX' => 'E02004625',
        '8PY' => 'E02004625',
        '8PZ' => 'E02004625',
        '8QA' => 'E02004625',
        '8QB' => 'E02004625',
        '8QD' => 'E02004625',
        '8QE' => 'E02004625',
        '8QF' => 'E02004625',
        '8QG' => 'E02004625',
        '8QH' => 'E02004625',
        '8QJ' => 'E02004625',
        '8QL' => 'E02004625',
        '8QN' => 'E02004625',
        '8QP' => 'E02004625',
        '8QQ' => 'E02004625',
        '8QR' => 'E02004625',
        '8QS' => 'E02004625',
        '8QT' => 'E02004625',
        '8QU' => 'E02006648',
        '8QW' => 'E02004625',
        '8QX' => 'E02004625',
        '8QY' => 'E02006648',
        '8QZ' => 'E02004625',
        '8RA' => 'E02004625',
        '8RB' => 'E02004625',
        '8RD' => 'E02004625',
        '8RE' => 'E02004625',
        '8RF' => 'E02004625',
        '8RG' => 'E02004625',
        '8RH' => 'E02004625',
        '8RJ' => 'E02004625',
        '8RL' => 'E02004625',
        '8RN' => 'E02004625',
        '8RP' => 'E02004625',
        '8RQ' => 'E02004625',
        '8RR' => 'E02004625',
        '8RS' => 'E02004625',
        '8RT' => 'E02004625',
        '8RU' => 'E02004625',
        '8RW' => 'E02004625',
        '8RX' => 'E02004625',
        '8RY' => 'E02004625',
        '8RZ' => 'E02004625',
        '8SA' => 'E02004625',
        '8SB' => 'E02004625',
        '8SD' => 'E02004625',
        '8SE' => 'E02004625',
        '8SF' => 'E02004625',
        '8SG' => 'E02004625',
        '8SH' => 'E02004625',
        '8SJ' => 'E02004625',
        '8SL' => 'E02004625',
        '8SN' => 'E02004625',
        '8SP' => 'E02004625',
        '8SQ' => 'E02004625',
        '8SR' => 'E02004625',
        '8SS' => 'E02004625',
        '8ST' => 'E02004625',
        '8SU' => 'E02004625',
        '8SW' => 'E02004625',
        '8SX' => 'E02004625',
        '8SY' => 'E02004625',
        '8SZ' => 'E02004625',
        '8TA' => 'E02004625',
        '8TB' => 'E02004625',
        '8TD' => 'E02004625',
        '8TE' => 'E02004625',
        '8TF' => 'E02004625',
        '8TG' => 'E02004625',
        '8TH' => 'E02004625',
        '8TJ' => 'E02004625',
        '8TL' => 'E02004625',
        '8TN' => 'E02004625',
        '8TP' => 'E02004625',
        '8TQ' => 'E02004625',
        '8TR' => 'E02004625',
        '8TS' => 'E02004625',
        '8TT' => 'E02004625',
        '8TU' => 'E02004625',
        '8TW' => 'E02004625',
        '8TX' => 'E02004625',
        '8TY' => 'E02004625',
        '8TZ' => 'E02004625',
        '8UA' => 'E02004625',
        '8UB' => 'E02004625',
        '8UD' => 'E02004625',
        '8UE' => 'E02004625',
        '8UF' => 'E02004625',
        '8UG' => 'E02004625',
        '8UH' => 'E02004625',
        '8UJ' => 'E02004625',
        '8UL' => 'E02004625',
        '8UN' => 'E02004625',
        '8UP' => 'E02004625',
        '8UQ' => 'E02004625',
        '8UR' => 'E02004625',
        '8US' => 'E02004625',
        '8UT' => 'E02004625',
        '8UU' => 'E02004625',
        '8UW' => 'E02004625',
        '8UX' => 'E02004625',
        '8UY' => 'E02004625',
        '8UZ' => 'E02004625',
        '8WA' => 'E02004625',
        '8WB' => 'E02004625',
        '8WD' => 'E02004625',
        '8WE' => 'E02004625',
        '8WF' => 'E02004625',
        '8WG' => 'E02004625',
        '8WH' => 'E02004625',
        '8WJ' => 'E02004625',
        '8WL' => 'E02004625',
        '8WN' => 'E02004625',
        '8WP' => 'E02004625',
        '8WQ' => 'E02004625',
        '8WR' => 'E02004625',
        '8WS' => 'E02004625',
        '8WT' => 'E02004625',
        '8WU' => 'E02004625',
        '8WW' => 'E02004625',
        '8WX' => 'E02004625',
        '8WY' => 'E02004625',
        '8WZ' => 'E02004625',
        '8XA' => 'E02004625',
        '8XB' => 'E02004625',
        '8XD' => 'E02004625',
        '8XE' => 'E02004625',
        '8XF' => 'E02004625',
        '8XG' => 'E02004625',
        '8XH' => 'E02004625',
        '8XJ' => 'E02004625',
        '8XL' => 'E02004625',
        '8XN' => 'E02004625',
        '8XP' => 'E02004625',
        '8XQ' => 'E02004625',
        '8XR' => 'E02004625',
        '8XS' => 'E02004663',
        '8XT' => 'E02004625',
        '8XU' => 'E02004625',
        '8XW' => 'E02004625',
        '8XX' => 'E02004625',
        '8XY' => 'E02004625',
        '8XZ' => 'E02004625',
        '8YA' => 'E02004625',
        '8YB' => 'E02004625',
        '8YD' => 'E02004625',
        '8YE' => 'E02004625',
        '8YF' => 'E02004625',
        '8YG' => 'E02004625',
        '8YH' => 'E02004625',
        '8YJ' => 'E02004625',
        '8YL' => 'E02004625',
        '8YN' => 'E02004625',
        '8YP' => 'E02004625',
        '8YQ' => 'E02004625',
        '8YR' => 'E02004625',
        '8YS' => 'E02004625',
        '8YT' => 'E02004625',
        '8YU' => 'E02004625',
        '8YW' => 'E02004625',
        '8YX' => 'E02004625',
        '8YY' => 'E02004625',
        '8YZ' => 'E02004625',
        '8ZA' => 'E02004625',
        '8ZB' => 'E02004625',
        '8ZD' => 'E02004625',
        '8ZE' => 'E02004625',
        '8ZF' => 'E02004625',
        '8ZG' => 'E02004625',
        '8ZH' => 'E02004625',
        '8ZJ' => 'E02004625',
        '8ZL' => 'E02004625',
        '8ZN' => 'E02004625',
        '8ZP' => 'E02004625',
        '8ZQ' => 'E02004625',
        '8ZR' => 'E02004625',
        '8ZS' => 'E02004625',
        '8ZT' => 'E02004625',
        '8ZU' => 'E02004625',
        '8ZW' => 'E02004625',
        '8ZX' => 'E02004625',
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
