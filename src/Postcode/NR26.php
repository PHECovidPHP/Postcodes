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
final class NR26
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02005570',
        '8AB' => 'E02005570',
        '8AD' => 'E02005575',
        '8AE' => 'E02005575',
        '8AF' => 'E02005570',
        '8AG' => 'E02005570',
        '8AH' => 'E02005570',
        '8AJ' => 'E02005570',
        '8AL' => 'E02005570',
        '8AN' => 'E02005570',
        '8AS' => 'E02005570',
        '8AT' => 'E02005570',
        '8AU' => 'E02005570',
        '8AX' => 'E02005570',
        '8AY' => 'E02005570',
        '8AZ' => 'E02005570',
        '8BA' => 'E02005570',
        '8BB' => 'E02005570',
        '8BD' => 'E02005570',
        '8BE' => 'E02005570',
        '8BF' => 'E02005570',
        '8BG' => 'E02005570',
        '8BH' => 'E02005570',
        '8BJ' => 'E02005570',
        '8BL' => 'E02005570',
        '8BN' => 'E02005570',
        '8BP' => 'E02005570',
        '8BQ' => 'E02005570',
        '8BS' => 'E02005570',
        '8BT' => 'E02005570',
        '8BU' => 'E02005570',
        '8BW' => 'E02005570',
        '8BX' => 'E02005570',
        '8BY' => 'E02005570',
        '8BZ' => 'E02005570',
        '8DA' => 'E02005570',
        '8DB' => 'E02005570',
        '8DD' => 'E02005570',
        '8DE' => 'E02005570',
        '8DF' => 'E02005570',
        '8DG' => 'E02005570',
        '8DH' => 'E02005570',
        '8DJ' => 'E02005570',
        '8DL' => 'E02005570',
        '8DN' => 'E02005570',
        '8DP' => 'E02005570',
        '8DQ' => 'E02005570',
        '8DR' => 'E02005570',
        '8DS' => 'E02005570',
        '8DT' => 'E02005570',
        '8DU' => 'E02005570',
        '8DW' => 'E02005570',
        '8DX' => 'E02005570',
        '8DY' => 'E02005570',
        '8DZ' => 'E02005570',
        '8EA' => 'E02005570',
        '8EB' => 'E02005570',
        '8ED' => 'E02005570',
        '8EE' => 'E02005570',
        '8EF' => 'E02005570',
        '8EG' => 'E02005570',
        '8EH' => 'E02005570',
        '8EJ' => 'E02005570',
        '8EL' => 'E02005570',
        '8EN' => 'E02005570',
        '8EP' => 'E02005570',
        '8EQ' => 'E02005570',
        '8ER' => 'E02005570',
        '8ES' => 'E02005570',
        '8ET' => 'E02005570',
        '8EU' => 'E02005570',
        '8EW' => 'E02005570',
        '8EX' => 'E02005575',
        '8EY' => 'E02005575',
        '8EZ' => 'E02005570',
        '8FB' => 'E02005570',
        '8GN' => 'E02005570',
        '8GR' => 'E02005570',
        '8GS' => 'E02005570',
        '8GT' => 'E02005579',
        '8GU' => 'E02005570',
        '8GW' => 'E02005579',
        '8GX' => 'E02005570',
        '8GY' => 'E02005579',
        '8GZ' => 'E02005570',
        '8HA' => 'E02005570',
        '8HB' => 'E02005570',
        '8HD' => 'E02005570',
        '8HE' => 'E02005570',
        '8HF' => 'E02005570',
        '8HG' => 'E02005570',
        '8HH' => 'E02005570',
        '8HJ' => 'E02005570',
        '8HL' => 'E02005570',
        '8HN' => 'E02005570',
        '8HP' => 'E02005570',
        '8HQ' => 'E02005570',
        '8HR' => 'E02005570',
        '8HS' => 'E02005570',
        '8HT' => 'E02005570',
        '8HU' => 'E02005570',
        '8HW' => 'E02005570',
        '8HX' => 'E02005570',
        '8HY' => 'E02005570',
        '8HZ' => 'E02005570',
        '8JA' => 'E02005570',
        '8JB' => 'E02005570',
        '8JD' => 'E02005570',
        '8JE' => 'E02005570',
        '8JF' => 'E02005570',
        '8JG' => 'E02005570',
        '8JH' => 'E02005570',
        '8JJ' => 'E02005570',
        '8JL' => 'E02005570',
        '8JN' => 'E02005570',
        '8JP' => 'E02005570',
        '8JQ' => 'E02005570',
        '8JR' => 'E02005570',
        '8JS' => 'E02005570',
        '8JT' => 'E02005570',
        '8JU' => 'E02005570',
        '8JW' => 'E02005570',
        '8JX' => 'E02005570',
        '8JY' => 'E02005570',
        '8JZ' => 'E02005570',
        '8LA' => 'E02005570',
        '8LB' => 'E02005570',
        '8LD' => 'E02005570',
        '8LE' => 'E02005570',
        '8LF' => 'E02005570',
        '8LG' => 'E02005570',
        '8LH' => 'E02005570',
        '8LJ' => 'E02005570',
        '8LL' => 'E02005570',
        '8LN' => 'E02005570',
        '8LP' => 'E02005570',
        '8LQ' => 'E02005570',
        '8LR' => 'E02005570',
        '8LS' => 'E02005570',
        '8LT' => 'E02005570',
        '8LU' => 'E02005570',
        '8LW' => 'E02005570',
        '8LX' => 'E02005570',
        '8LY' => 'E02005570',
        '8LZ' => 'E02005570',
        '8NA' => 'E02005570',
        '8NB' => 'E02005570',
        '8ND' => 'E02005570',
        '8NE' => 'E02005570',
        '8NF' => 'E02005570',
        '8NG' => 'E02005570',
        '8NH' => 'E02005570',
        '8NJ' => 'E02005570',
        '8NL' => 'E02005570',
        '8NN' => 'E02005570',
        '8NP' => 'E02005570',
        '8NQ' => 'E02005570',
        '8NR' => 'E02005570',
        '8NS' => 'E02005570',
        '8NT' => 'E02005570',
        '8NU' => 'E02005570',
        '8NW' => 'E02005570',
        '8NX' => 'E02005570',
        '8NY' => 'E02005570',
        '8NZ' => 'E02005570',
        '8PA' => 'E02005570',
        '8PB' => 'E02005570',
        '8PD' => 'E02005570',
        '8PE' => 'E02005570',
        '8PF' => 'E02005570',
        '8PG' => 'E02005570',
        '8PH' => 'E02005570',
        '8PJ' => 'E02005570',
        '8PL' => 'E02005570',
        '8PN' => 'E02005570',
        '8PP' => 'E02005570',
        '8PQ' => 'E02005570',
        '8PR' => 'E02005570',
        '8PS' => 'E02005570',
        '8PT' => 'E02005570',
        '8PU' => 'E02005570',
        '8PW' => 'E02005570',
        '8PX' => 'E02005570',
        '8PY' => 'E02005570',
        '8PZ' => 'E02005570',
        '8QA' => 'E02005570',
        '8QB' => 'E02005570',
        '8QD' => 'E02005570',
        '8QE' => 'E02005570',
        '8QF' => 'E02005570',
        '8QG' => 'E02005570',
        '8QH' => 'E02005570',
        '8QJ' => 'E02005570',
        '8QL' => 'E02005570',
        '8QN' => 'E02005570',
        '8QP' => 'E02005570',
        '8QQ' => 'E02005570',
        '8QR' => 'E02005570',
        '8QS' => 'E02005570',
        '8QT' => 'E02005570',
        '8QU' => 'E02005570',
        '8QW' => 'E02005570',
        '8QX' => 'E02005579',
        '8QY' => 'E02005570',
        '8QZ' => 'E02005570',
        '8RA' => 'E02005570',
        '8RB' => 'E02005570',
        '8RD' => 'E02005570',
        '8RE' => 'E02005570',
        '8RF' => 'E02005570',
        '8RG' => 'E02005570',
        '8RH' => 'E02005570',
        '8RJ' => 'E02005570',
        '8RL' => 'E02005570',
        '8RN' => 'E02005570',
        '8RP' => 'E02005570',
        '8RQ' => 'E02005570',
        '8RR' => 'E02005570',
        '8RS' => 'E02005570',
        '8RT' => 'E02005570',
        '8RU' => 'E02005570',
        '8RW' => 'E02005570',
        '8RX' => 'E02005570',
        '8RY' => 'E02005570',
        '8RZ' => 'E02005570',
        '8SA' => 'E02005570',
        '8SB' => 'E02005570',
        '8SD' => 'E02005570',
        '8SE' => 'E02005570',
        '8SF' => 'E02005575',
        '8SG' => 'E02005575',
        '8SH' => 'E02005575',
        '8SJ' => 'E02005575',
        '8SL' => 'E02005575',
        '8SN' => 'E02005575',
        '8SP' => 'E02005575',
        '8SQ' => 'E02005575',
        '8SR' => 'E02005575',
        '8SS' => 'E02005575',
        '8ST' => 'E02005575',
        '8SU' => 'E02005575',
        '8SW' => 'E02005575',
        '8SX' => 'E02005570',
        '8SY' => 'E02005570',
        '8SZ' => 'E02005570',
        '8TA' => 'E02005575',
        '8TB' => 'E02005575',
        '8TD' => 'E02005575',
        '8TE' => 'E02005575',
        '8TF' => 'E02005575',
        '8TG' => 'E02005575',
        '8TH' => 'E02005575',
        '8TJ' => 'E02005575',
        '8TL' => 'E02005575',
        '8TN' => 'E02005575',
        '8TP' => 'E02005575',
        '8TQ' => 'E02005575',
        '8TR' => 'E02005575',
        '8TS' => 'E02005575',
        '8TT' => 'E02005575',
        '8TU' => 'E02005575',
        '8TW' => 'E02005575',
        '8TX' => 'E02005570',
        '8TY' => 'E02005575',
        '8TZ' => 'E02005570',
        '8UA' => 'E02005575',
        '8UB' => 'E02005575',
        '8UD' => 'E02005570',
        '8UE' => 'E02005570',
        '8UF' => 'E02005570',
        '8UG' => 'E02005570',
        '8UH' => 'E02005570',
        '8UJ' => 'E02005570',
        '8UL' => 'E02005570',
        '8UN' => 'E02005570',
        '8UP' => 'E02005570',
        '8UQ' => 'E02005570',
        '8UR' => 'E02005570',
        '8US' => 'E02005579',
        '8UT' => 'E02005575',
        '8UU' => 'E02005570',
        '8UW' => 'E02005570',
        '8UX' => 'E02005570',
        '8UY' => 'E02005570',
        '8UZ' => 'E02005570',
        '8WA' => 'E02005570',
        '8WB' => 'E02005570',
        '8WD' => 'E02005570',
        '8WE' => 'E02005570',
        '8WF' => 'E02005570',
        '8WG' => 'E02005570',
        '8WH' => 'E02005570',
        '8WJ' => 'E02005570',
        '8WL' => 'E02005570',
        '8WN' => 'E02005570',
        '8WQ' => 'E02005570',
        '8WR' => 'E02005570',
        '8WY' => 'E02005570',
        '8WZ' => 'E02005570',
        '8XA' => 'E02005570',
        '8XB' => 'E02005570',
        '8XD' => 'E02005570',
        '8XE' => 'E02005570',
        '8XF' => 'E02005570',
        '8XG' => 'E02005570',
        '8XH' => 'E02005570',
        '8XJ' => 'E02005570',
        '8XL' => 'E02005570',
        '8XN' => 'E02005570',
        '8XP' => 'E02005570',
        '8XQ' => 'E02005570',
        '8XR' => 'E02005570',
        '8XS' => 'E02005570',
        '8XT' => 'E02005570',
        '8XW' => 'E02005570',
        '8XY' => 'E02005570',
        '8YA' => 'E02005570',
        '8YB' => 'E02005570',
        '8YD' => 'E02005570',
        '8YE' => 'E02005570',
        '8YF' => 'E02005570',
        '8YH' => 'E02005570',
        '8YJ' => 'E02005575',
        '8YL' => 'E02005575',
        '8YR' => 'E02005570',
        '8YS' => 'E02005570',
        '8YY' => 'E02005570',
        '9AG' => 'E02005570',
        '9AH' => 'E02005570',
        '9AJ' => 'E02005570',
        '9AL' => 'E02005570',
        '9AN' => 'E02005570',
        '9AP' => 'E02005570',
        '9AQ' => 'E02005570',
        '9AR' => 'E02005570',
        '9AS' => 'E02005570',
        '9AT' => 'E02005570',
        '9AU' => 'E02005570',
        '9AW' => 'E02005570',
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
