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
final class B25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02001904',
        '8AB' => 'E02001904',
        '8AD' => 'E02001904',
        '8AE' => 'E02001904',
        '8AF' => 'E02001904',
        '8AG' => 'E02001904',
        '8AH' => 'E02001904',
        '8AJ' => 'E02001904',
        '8AL' => 'E02001904',
        '8AN' => 'E02001904',
        '8AP' => 'E02001904',
        '8AQ' => 'E02001904',
        '8AR' => 'E02001904',
        '8AS' => 'E02001904',
        '8AT' => 'E02001904',
        '8AU' => 'E02001904',
        '8AW' => 'E02001904',
        '8AX' => 'E02001904',
        '8AY' => 'E02001904',
        '8AZ' => 'E02001904',
        '8BA' => 'E02001904',
        '8BB' => 'E02001904',
        '8BD' => 'E02001904',
        '8BE' => 'E02001904',
        '8BF' => 'E02001904',
        '8BG' => 'E02001904',
        '8BH' => 'E02001904',
        '8BJ' => 'E02001904',
        '8BL' => 'E02001904',
        '8BN' => 'E02001904',
        '8BP' => 'E02001904',
        '8BQ' => 'E02001904',
        '8BS' => 'E02001904',
        '8BT' => 'E02001904',
        '8BU' => 'E02001904',
        '8BW' => 'E02001904',
        '8BX' => 'E02001904',
        '8BY' => 'E02001904',
        '8BZ' => 'E02001904',
        '8DA' => 'E02001904',
        '8DB' => 'E02001904',
        '8DD' => 'E02001904',
        '8DE' => 'E02001904',
        '8DF' => 'E02001904',
        '8DG' => 'E02001904',
        '8DH' => 'E02001904',
        '8DJ' => 'E02001904',
        '8DL' => 'E02001904',
        '8DN' => 'E02001904',
        '8DP' => 'E02001904',
        '8DQ' => 'E02001904',
        '8DR' => 'E02001904',
        '8DS' => 'E02001892',
        '8DT' => 'E02001904',
        '8DU' => 'E02001904',
        '8DW' => 'E02001904',
        '8DX' => 'E02001904',
        '8DY' => 'E02001904',
        '8DZ' => 'E02001904',
        '8EA' => 'E02001904',
        '8EB' => 'E02001904',
        '8ED' => 'E02001904',
        '8EE' => 'E02001904',
        '8EF' => 'E02001904',
        '8EG' => 'E02001904',
        '8EH' => 'E02001904',
        '8EJ' => 'E02001904',
        '8EL' => 'E02001915',
        '8EN' => 'E02001904',
        '8EP' => 'E02001904',
        '8EQ' => 'E02001904',
        '8ER' => 'E02001904',
        '8ES' => 'E02001892',
        '8ET' => 'E02001904',
        '8EU' => 'E02001904',
        '8EW' => 'E02001904',
        '8EX' => 'E02001904',
        '8EY' => 'E02001904',
        '8EZ' => 'E02001904',
        '8FD' => 'E02001893',
        '8FE' => 'E02001904',
        '8FF' => 'E02001904',
        '8HA' => 'E02001904',
        '8HB' => 'E02001892',
        '8HD' => 'E02001893',
        '8HE' => 'E02001904',
        '8HF' => 'E02001904',
        '8HG' => 'E02001904',
        '8HH' => 'E02001904',
        '8HJ' => 'E02001904',
        '8HL' => 'E02001904',
        '8HN' => 'E02001904',
        '8HP' => 'E02001904',
        '8HQ' => 'E02001904',
        '8HR' => 'E02001904',
        '8HS' => 'E02001904',
        '8HT' => 'E02001904',
        '8HU' => 'E02001904',
        '8HW' => 'E02001904',
        '8HX' => 'E02001904',
        '8HY' => 'E02001904',
        '8HZ' => 'E02001904',
        '8JA' => 'E02001904',
        '8JB' => 'E02001904',
        '8JD' => 'E02001893',
        '8JE' => 'E02001904',
        '8JF' => 'E02001904',
        '8JG' => 'E02001904',
        '8JH' => 'E02001904',
        '8JJ' => 'E02001904',
        '8JL' => 'E02001904',
        '8JN' => 'E02001915',
        '8JP' => 'E02001904',
        '8JQ' => 'E02001904',
        '8JR' => 'E02001904',
        '8JS' => 'E02001904',
        '8JT' => 'E02001904',
        '8JU' => 'E02001904',
        '8JW' => 'E02001915',
        '8JX' => 'E02001904',
        '8JY' => 'E02001904',
        '8JZ' => 'E02001904',
        '8LA' => 'E02001904',
        '8LB' => 'E02001904',
        '8LD' => 'E02001904',
        '8LE' => 'E02001904',
        '8LF' => 'E02001902',
        '8LG' => 'E02001902',
        '8LH' => 'E02001904',
        '8LJ' => 'E02001904',
        '8LL' => 'E02001904',
        '8LN' => 'E02001902',
        '8LP' => 'E02001904',
        '8LQ' => 'E02001902',
        '8LR' => 'E02001915',
        '8LS' => 'E02001902',
        '8LT' => 'E02001904',
        '8LU' => 'E02001904',
        '8LW' => 'E02001904',
        '8LX' => 'E02001915',
        '8LY' => 'E02001904',
        '8LZ' => 'E02001904',
        '8NA' => 'E02001904',
        '8NB' => 'E02001904',
        '8ND' => 'E02001904',
        '8NE' => 'E02001902',
        '8NF' => 'E02001902',
        '8NG' => 'E02001892',
        '8NH' => 'E02001892',
        '8NJ' => 'E02001892',
        '8NL' => 'E02001892',
        '8NN' => 'E02001892',
        '8NP' => 'E02001904',
        '8NQ' => 'E02001892',
        '8NR' => 'E02001904',
        '8NS' => 'E02001904',
        '8NT' => 'E02001892',
        '8NU' => 'E02001892',
        '8NW' => 'E02001892',
        '8NX' => 'E02001892',
        '8NY' => 'E02001892',
        '8NZ' => 'E02001892',
        '8PA' => 'E02001892',
        '8PB' => 'E02001892',
        '8PD' => 'E02001892',
        '8PE' => 'E02001892',
        '8PF' => 'E02001915',
        '8PG' => 'E02001892',
        '8PH' => 'E02001892',
        '8PJ' => 'E02001892',
        '8PL' => 'E02001892',
        '8PN' => 'E02001892',
        '8PP' => 'E02001904',
        '8PQ' => 'E02001892',
        '8PR' => 'E02001892',
        '8PS' => 'E02001892',
        '8PT' => 'E02001893',
        '8PU' => 'E02001892',
        '8PW' => 'E02001892',
        '8PX' => 'E02001892',
        '8PY' => 'E02001892',
        '8PZ' => 'E02001892',
        '8QA' => 'E02001892',
        '8QB' => 'E02001892',
        '8QD' => 'E02001892',
        '8QE' => 'E02001892',
        '8QF' => 'E02001904',
        '8QG' => 'E02001892',
        '8QH' => 'E02001892',
        '8QJ' => 'E02001892',
        '8QL' => 'E02001892',
        '8QN' => 'E02001904',
        '8QP' => 'E02001892',
        '8QQ' => 'E02001904',
        '8QR' => 'E02001892',
        '8QS' => 'E02001892',
        '8QT' => 'E02001892',
        '8QU' => 'E02001892',
        '8QW' => 'E02001904',
        '8QX' => 'E02001892',
        '8QY' => 'E02001892',
        '8QZ' => 'E02001892',
        '8RA' => 'E02001893',
        '8RB' => 'E02001893',
        '8RD' => 'E02001904',
        '8RE' => 'E02001893',
        '8RF' => 'E02001893',
        '8RG' => 'E02001893',
        '8RH' => 'E02001893',
        '8RJ' => 'E02001893',
        '8RL' => 'E02001893',
        '8RN' => 'E02001893',
        '8RP' => 'E02001893',
        '8RQ' => 'E02001893',
        '8RR' => 'E02001893',
        '8RS' => 'E02001892',
        '8RT' => 'E02001892',
        '8RU' => 'E02001892',
        '8RW' => 'E02001904',
        '8RX' => 'E02001892',
        '8RY' => 'E02001892',
        '8RZ' => 'E02001893',
        '8SA' => 'E02001892',
        '8SB' => 'E02001892',
        '8SD' => 'E02001892',
        '8SE' => 'E02001904',
        '8SF' => 'E02001893',
        '8SG' => 'E02001893',
        '8SH' => 'E02001893',
        '8SJ' => 'E02001893',
        '8SL' => 'E02001892',
        '8SN' => 'E02001892',
        '8SP' => 'E02001892',
        '8SQ' => 'E02001893',
        '8SR' => 'E02001893',
        '8SS' => 'E02001892',
        '8ST' => 'E02001892',
        '8SU' => 'E02001893',
        '8SW' => 'E02001892',
        '8SX' => 'E02001892',
        '8SY' => 'E02001893',
        '8SZ' => 'E02001904',
        '8TA' => 'E02001893',
        '8TB' => 'E02001893',
        '8TD' => 'E02001893',
        '8TE' => 'E02001893',
        '8TF' => 'E02001893',
        '8TG' => 'E02001893',
        '8TH' => 'E02001893',
        '8TJ' => 'E02001893',
        '8TL' => 'E02001904',
        '8TN' => 'E02001893',
        '8TP' => 'E02001893',
        '8TQ' => 'E02001904',
        '8TR' => 'E02001893',
        '8TS' => 'E02001893',
        '8TT' => 'E02001893',
        '8TU' => 'E02001893',
        '8TW' => 'E02001893',
        '8TX' => 'E02001893',
        '8TY' => 'E02001893',
        '8TZ' => 'E02001893',
        '8UA' => 'E02001893',
        '8UB' => 'E02001893',
        '8UD' => 'E02001893',
        '8UE' => 'E02001892',
        '8UF' => 'E02001892',
        '8UG' => 'E02001892',
        '8UH' => 'E02001904',
        '8UJ' => 'E02001902',
        '8UL' => 'E02001904',
        '8UN' => 'E02001893',
        '8UP' => 'E02001893',
        '8UQ' => 'E02001904',
        '8UR' => 'E02001893',
        '8US' => 'E02001893',
        '8UT' => 'E02001893',
        '8UU' => 'E02001893',
        '8UW' => 'E02001904',
        '8UX' => 'E02001893',
        '8UY' => 'E02001893',
        '8UZ' => 'E02001893',
        '8WA' => 'E02001904',
        '8WB' => 'E02001904',
        '8WD' => 'E02001904',
        '8WE' => 'E02001904',
        '8WF' => 'E02001904',
        '8WH' => 'E02001904',
        '8WP' => 'E02001904',
        '8WQ' => 'E02001904',
        '8WR' => 'E02001904',
        '8WS' => 'E02001904',
        '8WU' => 'E02001904',
        '8WW' => 'E02001904',
        '8XA' => 'E02001904',
        '8XB' => 'E02001893',
        '8XD' => 'E02001893',
        '8XE' => 'E02001902',
        '8XF' => 'E02001904',
        '8XG' => 'E02001902',
        '8XH' => 'E02001903',
        '8XJ' => 'E02001893',
        '8XL' => 'E02001893',
        '8XN' => 'E02001893',
        '8XP' => 'E02001893',
        '8XQ' => 'E02001902',
        '8XR' => 'E02001893',
        '8XS' => 'E02001893',
        '8XT' => 'E02001893',
        '8XU' => 'E02001893',
        '8XW' => 'E02001893',
        '8XX' => 'E02001893',
        '8XY' => 'E02001893',
        '8XZ' => 'E02001893',
        '8YA' => 'E02001893',
        '8YB' => 'E02001893',
        '8YD' => 'E02001893',
        '8YE' => 'E02001893',
        '8YF' => 'E02001893',
        '8YG' => 'E02001893',
        '8YH' => 'E02001893',
        '8YJ' => 'E02001893',
        '8YL' => 'E02001893',
        '8YN' => 'E02001893',
        '8YP' => 'E02001893',
        '8YQ' => 'E02001893',
        '8YR' => 'E02001904',
        '8YT' => 'E02001893',
        '8YU' => 'E02001893',
        '8YW' => 'E02001893',
        '8YX' => 'E02001893',
        '8YY' => 'E02001893',
        '8YZ' => 'E02001893',
        '8ZA' => 'E02001904',
        '8ZB' => 'E02001893',
        '8ZD' => 'E02001904',
        '8ZR' => 'E02001904',
        '8ZX' => 'E02001904',
        '8ZY' => 'E02001893',
        '9AB' => 'E02001904',
        '9AD' => 'E02001904',
        '9AE' => 'E02001904',
        '9AF' => 'E02001904',
        '9AG' => 'E02001904',
        '9AH' => 'E02001904',
        '9AJ' => 'E02001904',
        '9AL' => 'E02001904',
        '9AN' => 'E02001904',
        '9AP' => 'E02001904',
        '9AQ' => 'E02001904',
        '9AR' => 'E02001904',
        '9AS' => 'E02001904',
        '9AT' => 'E02001904',
        '9AU' => 'E02001904',
        '9AW' => 'E02001904',
        '9AX' => 'E02001904',
        '9AY' => 'E02001904',
        '9AZ' => 'E02001904',
        '9BA' => 'E02001904',
        '9BB' => 'E02001904',
        '9BD' => 'E02001904',
        '9BE' => 'E02001904',
        '9BF' => 'E02001904',
        '9BG' => 'E02001904',
        '9BH' => 'E02001904',
        '9BJ' => 'E02001904',
        '9BL' => 'E02001904',
        '9BN' => 'E02001904',
        '9BP' => 'E02001904',
        '9BQ' => 'E02001904',
        '9BR' => 'E02001904',
        '9BS' => 'E02001904',
        '9BT' => 'E02001904',
        '9BU' => 'E02001904',
        '9BW' => 'E02001904',
        '9BX' => 'E02001904',
        '9BY' => 'E02001904',
        '9BZ' => 'E02001904',
        '9DA' => 'E02001904',
        '9DB' => 'E02001904',
        '9DD' => 'E02001904',
        '9DE' => 'E02001904',
        '9DF' => 'E02001904',
        '9DG' => 'E02001904',
        '9DH' => 'E02001904',
        '9DJ' => 'E02001904',
        '9DL' => 'E02001904',
        '9DN' => 'E02001904',
        '9DP' => 'E02001904',
        '9DQ' => 'E02001904',
        '9DR' => 'E02001904',
        '9DS' => 'E02001904',
        '9DT' => 'E02001904',
        '9DU' => 'E02001904',
        '9DW' => 'E02001904',
        '9DX' => 'E02001904',
        '9DY' => 'E02001904',
        '9DZ' => 'E02001904',
        '9EA' => 'E02001904',
        '9EB' => 'E02001904',
        '9ED' => 'E02001904',
        '9EE' => 'E02001904',
        '9EF' => 'E02001904',
        '9EG' => 'E02001904',
        '9EH' => 'E02001904',
        '9EJ' => 'E02001904',
        '9EL' => 'E02001904',
        '9EN' => 'E02001904',
        '9EP' => 'E02001904',
        '9EQ' => 'E02001904',
        '9ER' => 'E02001904',
        '9ES' => 'E02001904',
        '9ET' => 'E02001904',
        '9EU' => 'E02001904',
        '9EW' => 'E02001904',
        '9EX' => 'E02001904',
        '9EY' => 'E02001904',
        '9EZ' => 'E02001904',
        '9FA' => 'E02001904',
        '9FB' => 'E02001904',
        '9FD' => 'E02001904',
        '9FE' => 'E02001904',
        '9FF' => 'E02001904',
        '9FG' => 'E02001904',
        '9FH' => 'E02001904',
        '9FJ' => 'E02001904',
        '9FL' => 'E02001904',
        '9FN' => 'E02001904',
        '9FP' => 'E02001904',
        '9FQ' => 'E02001904',
        '9FR' => 'E02001904',
        '9FS' => 'E02001904',
        '9FT' => 'E02001904',
        '9FW' => 'E02001904',
        '9FX' => 'E02001904',
        '9FY' => 'E02001904',
        '9FZ' => 'E02001904',
        '9GA' => 'E02001904',
        '9GB' => 'E02001904',
        '9GD' => 'E02001904',
        '9GE' => 'E02001904',
        '9GF' => 'E02001904',
        '9GG' => 'E02001904',
        '9GH' => 'E02001904',
        '9GJ' => 'E02001904',
        '9GL' => 'E02001904',
        '9GN' => 'E02001904',
        '9GP' => 'E02001904',
        '9GQ' => 'E02001904',
        '9GR' => 'E02001904',
        '9GS' => 'E02001904',
        '9GT' => 'E02001904',
        '9GU' => 'E02001904',
        '9GW' => 'E02001904',
        '9GX' => 'E02001904',
        '9GY' => 'E02001904',
        '9GZ' => 'E02001904',
        '9HB' => 'E02001904',
        '9HD' => 'E02001904',
        '9HE' => 'E02001904',
        '9HF' => 'E02001904',
        '9HG' => 'E02001904',
        '9HH' => 'E02001904',
        '9HJ' => 'E02001904',
        '9HL' => 'E02001904',
        '9HN' => 'E02001904',
        '9HQ' => 'E02001904',
        '9HR' => 'E02001904',
        '9HS' => 'E02001904',
        '9HU' => 'E02001904',
        '9HW' => 'E02001904',
        '9HX' => 'E02001904',
        '9HY' => 'E02001904',
        '9HZ' => 'E02001904',
        '9JA' => 'E02001904',
        '9JB' => 'E02001904',
        '9JD' => 'E02001904',
        '9JE' => 'E02001904',
        '9JF' => 'E02001904',
        '9JG' => 'E02001904',
        '9JH' => 'E02001904',
        '9JJ' => 'E02001904',
        '9JL' => 'E02001904',
        '9JN' => 'E02001904',
        '9JP' => 'E02001904',
        '9JR' => 'E02001904',
        '9JS' => 'E02001904',
        '9JT' => 'E02001904',
        '9JU' => 'E02001904',
        '9JW' => 'E02001904',
        '9JY' => 'E02001904',
        '9JZ' => 'E02001904',
        '9LA' => 'E02001904',
        '9LD' => 'E02001904',
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
