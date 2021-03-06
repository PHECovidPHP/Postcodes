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
final class BA6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AH' => 'E02006057',
        '0AQ' => 'E02006057',
        '0AS' => 'E02006057',
        '0AT' => 'E02006057',
        '0AU' => 'E02006057',
        '0AW' => 'E02006057',
        '0AZ' => 'E02006057',
        '0BA' => 'E02006057',
        '0BB' => 'E02006057',
        '0BD' => 'E02006057',
        '0BE' => 'E02006057',
        '0BF' => 'E02006057',
        '0BG' => 'E02006057',
        '0BH' => 'E02006057',
        '0BJ' => 'E02006057',
        '0BL' => 'E02006057',
        '0BN' => 'E02006057',
        '0BP' => 'E02006057',
        '0BQ' => 'E02006057',
        '0BR' => 'E02006057',
        '0BS' => 'E02006057',
        '0BT' => 'E02006057',
        '0BU' => 'E02006057',
        '0BW' => 'E02006057',
        '0BX' => 'E02006057',
        '0BY' => 'E02006057',
        '0BZ' => 'E02006057',
        '0DA' => 'E02006057',
        '0DB' => 'E02006057',
        '0DD' => 'E02006057',
        '0DE' => 'E02006057',
        '0DF' => 'E02006057',
        '0DG' => 'E02006057',
        '0DH' => 'E02006057',
        '0DJ' => 'E02006057',
        '0DL' => 'E02006057',
        '0DN' => 'E02006057',
        '0DP' => 'E02006057',
        '0DQ' => 'E02006057',
        '0DR' => 'E02006057',
        '0DS' => 'E02006057',
        '0HA' => 'E02006057',
        '8AA' => 'E02006057',
        '8AB' => 'E02006057',
        '8AD' => 'E02006057',
        '8AE' => 'E02006057',
        '8AF' => 'E02006057',
        '8AG' => 'E02006057',
        '8AH' => 'E02006057',
        '8AJ' => 'E02006057',
        '8AL' => 'E02006057',
        '8AN' => 'E02006057',
        '8AP' => 'E02006057',
        '8AQ' => 'E02006057',
        '8AR' => 'E02006057',
        '8AS' => 'E02006057',
        '8AT' => 'E02006057',
        '8AU' => 'E02006057',
        '8AW' => 'E02006057',
        '8AX' => 'E02006057',
        '8AY' => 'E02006057',
        '8AZ' => 'E02006057',
        '8BA' => 'E02006057',
        '8BB' => 'E02006057',
        '8BD' => 'E02006057',
        '8BE' => 'E02006057',
        '8BG' => 'E02006057',
        '8BH' => 'E02006057',
        '8BJ' => 'E02006057',
        '8BL' => 'E02006057',
        '8BN' => 'E02006057',
        '8BP' => 'E02006057',
        '8BQ' => 'E02006057',
        '8BR' => 'E02006060',
        '8BS' => 'E02006057',
        '8BT' => 'E02006057',
        '8BU' => 'E02006057',
        '8BW' => 'E02006057',
        '8BX' => 'E02006057',
        '8BY' => 'E02006057',
        '8BZ' => 'E02006057',
        '8DA' => 'E02006057',
        '8DB' => 'E02006057',
        '8DD' => 'E02006057',
        '8DE' => 'E02006057',
        '8DF' => 'E02006057',
        '8DG' => 'E02006057',
        '8DH' => 'E02006057',
        '8DJ' => 'E02006057',
        '8DL' => 'E02006057',
        '8DN' => 'E02006057',
        '8DP' => 'E02006057',
        '8DQ' => 'E02006057',
        '8DR' => 'E02006057',
        '8DS' => 'E02006057',
        '8DT' => 'E02006057',
        '8DU' => 'E02006057',
        '8DW' => 'E02006057',
        '8DX' => 'E02006057',
        '8DY' => 'E02006057',
        '8DZ' => 'E02006057',
        '8EA' => 'E02006057',
        '8EB' => 'E02006057',
        '8ED' => 'E02006057',
        '8EE' => 'E02006057',
        '8EF' => 'E02006057',
        '8EG' => 'E02006057',
        '8EH' => 'E02006057',
        '8EJ' => 'E02006057',
        '8EL' => 'E02006057',
        '8EN' => 'E02006057',
        '8EP' => 'E02006057',
        '8EQ' => 'E02006057',
        '8ER' => 'E02006057',
        '8ES' => 'E02006057',
        '8ET' => 'E02006057',
        '8EU' => 'E02006057',
        '8EW' => 'E02006057',
        '8EX' => 'E02006057',
        '8EY' => 'E02006057',
        '8EZ' => 'E02006057',
        '8FA' => 'E02006057',
        '8FB' => 'E02006057',
        '8FD' => 'E02006057',
        '8FE' => 'E02006057',
        '8FF' => 'E02006057',
        '8FG' => 'E02006057',
        '8FH' => 'E02006057',
        '8FJ' => 'E02006059',
        '8FL' => 'E02006059',
        '8FN' => 'E02006059',
        '8FP' => 'E02006057',
        '8FQ' => 'E02006059',
        '8FR' => 'E02006059',
        '8HA' => 'E02006057',
        '8HB' => 'E02006057',
        '8HD' => 'E02006057',
        '8HE' => 'E02006057',
        '8HF' => 'E02006057',
        '8HG' => 'E02006057',
        '8HH' => 'E02006057',
        '8HJ' => 'E02006057',
        '8HL' => 'E02006057',
        '8HN' => 'E02006057',
        '8HP' => 'E02006057',
        '8HQ' => 'E02006057',
        '8HR' => 'E02006057',
        '8HS' => 'E02006057',
        '8HT' => 'E02006057',
        '8HU' => 'E02006057',
        '8HW' => 'E02006057',
        '8HX' => 'E02006059',
        '8JA' => 'E02006057',
        '8JB' => 'E02006057',
        '8JD' => 'E02006057',
        '8JE' => 'E02006057',
        '8JF' => 'E02006057',
        '8JG' => 'E02006057',
        '8JH' => 'E02006057',
        '8JJ' => 'E02006057',
        '8JL' => 'E02006057',
        '8JN' => 'E02006057',
        '8JP' => 'E02006057',
        '8JQ' => 'E02006057',
        '8JR' => 'E02006057',
        '8JS' => 'E02006057',
        '8JT' => 'E02006057',
        '8JU' => 'E02006057',
        '8JW' => 'E02006057',
        '8JX' => 'E02006057',
        '8JY' => 'E02006057',
        '8JZ' => 'E02006057',
        '8LA' => 'E02006057',
        '8LB' => 'E02006057',
        '8LD' => 'E02006057',
        '8LE' => 'E02006057',
        '8LF' => 'E02006057',
        '8LG' => 'E02006059',
        '8LH' => 'E02006059',
        '8LJ' => 'E02006059',
        '8LL' => 'E02006057',
        '8LN' => 'E02006059',
        '8LP' => 'E02006059',
        '8LQ' => 'E02006059',
        '8LR' => 'E02006059',
        '8LS' => 'E02006059',
        '8LT' => 'E02006059',
        '8LU' => 'E02006059',
        '8LW' => 'E02006059',
        '8LX' => 'E02006057',
        '8LY' => 'E02006057',
        '8LZ' => 'E02006057',
        '8NA' => 'E02006059',
        '8NB' => 'E02006059',
        '8ND' => 'E02006059',
        '8NE' => 'E02006059',
        '8NF' => 'E02006059',
        '8NG' => 'E02006059',
        '8NH' => 'E02006059',
        '8NJ' => 'E02006059',
        '8NL' => 'E02006059',
        '8NN' => 'E02006059',
        '8NP' => 'E02006059',
        '8NQ' => 'E02006059',
        '8NR' => 'E02006059',
        '8NS' => 'E02006059',
        '8NT' => 'E02006059',
        '8NU' => 'E02006059',
        '8NW' => 'E02006059',
        '8NX' => 'E02006059',
        '8NY' => 'E02006059',
        '8NZ' => 'E02006059',
        '8PA' => 'E02006059',
        '8PB' => 'E02006059',
        '8PD' => 'E02006059',
        '8PE' => 'E02006059',
        '8PF' => 'E02006059',
        '8PG' => 'E02006059',
        '8PH' => 'E02006059',
        '8PJ' => 'E02006059',
        '8PL' => 'E02006059',
        '8PN' => 'E02006059',
        '8PP' => 'E02006059',
        '8PQ' => 'E02006059',
        '8PR' => 'E02006059',
        '8PS' => 'E02006059',
        '8PT' => 'E02006059',
        '8PU' => 'E02006059',
        '8PW' => 'E02006059',
        '8PX' => 'E02006059',
        '8PY' => 'E02006059',
        '8PZ' => 'E02006059',
        '8QA' => 'E02006059',
        '8QB' => 'E02006059',
        '8QD' => 'E02006059',
        '8QE' => 'E02006059',
        '8QF' => 'E02006059',
        '8QG' => 'E02006059',
        '8QH' => 'E02006059',
        '8QJ' => 'E02006059',
        '8QL' => 'E02006059',
        '8QN' => 'E02006059',
        '8QP' => 'E02006059',
        '8QQ' => 'E02006059',
        '8QR' => 'E02006059',
        '8QS' => 'E02006059',
        '8QT' => 'E02006059',
        '8QU' => 'E02006059',
        '8QW' => 'E02006059',
        '8QX' => 'E02006059',
        '8QY' => 'E02006059',
        '8QZ' => 'E02006059',
        '8RA' => 'E02006059',
        '8RB' => 'E02006059',
        '8RD' => 'E02006059',
        '8RE' => 'E02006059',
        '8RF' => 'E02006059',
        '8RG' => 'E02006059',
        '8RH' => 'E02006059',
        '8RJ' => 'E02006059',
        '8RL' => 'E02006059',
        '8RN' => 'E02006059',
        '8RP' => 'E02006059',
        '8RQ' => 'E02006059',
        '8RR' => 'E02006057',
        '8RS' => 'E02006059',
        '8RT' => 'E02006059',
        '8RU' => 'E02006059',
        '8RX' => 'E02006059',
        '8RY' => 'E02006059',
        '8RZ' => 'E02006059',
        '8SA' => 'E02006059',
        '8SB' => 'E02006059',
        '8SD' => 'E02006059',
        '8SE' => 'E02006059',
        '8SF' => 'E02006059',
        '8SG' => 'E02006059',
        '8SH' => 'E02006059',
        '8SJ' => 'E02006059',
        '8SL' => 'E02006059',
        '8SN' => 'E02006059',
        '8SP' => 'E02006059',
        '8SQ' => 'E02006059',
        '8SR' => 'E02006059',
        '8SS' => 'E02006059',
        '8ST' => 'E02006059',
        '8SU' => 'E02006059',
        '8SW' => 'E02006059',
        '8SX' => 'E02006059',
        '8SY' => 'E02006059',
        '8SZ' => 'E02006059',
        '8TA' => 'E02006059',
        '8TB' => 'E02006059',
        '8TD' => 'E02006059',
        '8TE' => 'E02006059',
        '8TF' => 'E02006059',
        '8TG' => 'E02006059',
        '8TH' => 'E02006059',
        '8TJ' => 'E02006059',
        '8TL' => 'E02006059',
        '8TN' => 'E02006059',
        '8TP' => 'E02006059',
        '8TQ' => 'E02006059',
        '8TR' => 'E02006059',
        '8TS' => 'E02006059',
        '8TT' => 'E02006059',
        '8TU' => 'E02006059',
        '8TW' => 'E02006059',
        '8TX' => 'E02006059',
        '8TY' => 'E02006059',
        '8TZ' => 'E02006059',
        '8UA' => 'E02006059',
        '8UB' => 'E02006059',
        '8UD' => 'E02006059',
        '8UE' => 'E02006059',
        '8UH' => 'E02006059',
        '8UQ' => 'E02006057',
        '8UU' => 'E02006057',
        '8UW' => 'E02006057',
        '8UX' => 'E02006057',
        '8UY' => 'E02006057',
        '8WA' => 'E02006057',
        '8WB' => 'E02006057',
        '8WD' => 'E02006057',
        '8WE' => 'E02006059',
        '8WF' => 'E02006057',
        '8WG' => 'E02006059',
        '8WH' => 'E02006059',
        '8WJ' => 'E02006057',
        '8WL' => 'E02006059',
        '8WN' => 'E02006057',
        '8WP' => 'E02006057',
        '8WQ' => 'E02006057',
        '8WR' => 'E02006057',
        '8WS' => 'E02006057',
        '8WT' => 'E02006057',
        '8WU' => 'E02006057',
        '8WW' => 'E02006057',
        '8WX' => 'E02006057',
        '8WY' => 'E02006057',
        '8WZ' => 'E02006057',
        '8XA' => 'E02006057',
        '8XB' => 'E02006057',
        '8XD' => 'E02006057',
        '8XE' => 'E02006057',
        '8XF' => 'E02006057',
        '8XG' => 'E02006057',
        '8XH' => 'E02006057',
        '8XJ' => 'E02006057',
        '8XL' => 'E02006057',
        '8XN' => 'E02006059',
        '8XP' => 'E02006057',
        '8XQ' => 'E02006057',
        '8XR' => 'E02006057',
        '8XS' => 'E02006057',
        '8XT' => 'E02006059',
        '8XU' => 'E02006057',
        '8XW' => 'E02006057',
        '8XX' => 'E02006057',
        '8XY' => 'E02006059',
        '8XZ' => 'E02006057',
        '8YA' => 'E02006057',
        '8YB' => 'E02006057',
        '8YD' => 'E02006057',
        '8YE' => 'E02006057',
        '8YF' => 'E02006057',
        '8YG' => 'E02006057',
        '8YH' => 'E02006057',
        '8YJ' => 'E02006057',
        '8YL' => 'E02006057',
        '8YN' => 'E02006057',
        '8YP' => 'E02006057',
        '8YQ' => 'E02006057',
        '8YR' => 'E02006057',
        '8YS' => 'E02006057',
        '8YT' => 'E02006057',
        '8YU' => 'E02006057',
        '8YW' => 'E02006057',
        '8YX' => 'E02006057',
        '8YY' => 'E02006057',
        '8YZ' => 'E02006057',
        '8ZA' => 'E02006057',
        '8ZB' => 'E02006057',
        '8ZD' => 'E02006057',
        '8ZG' => 'E02006057',
        '8ZH' => 'E02006057',
        '8ZJ' => 'E02006057',
        '8ZL' => 'E02006057',
        '8ZN' => 'E02006057',
        '8ZP' => 'E02006057',
        '8ZQ' => 'E02006057',
        '8ZR' => 'E02006057',
        '8ZS' => 'E02006057',
        '8ZT' => 'E02006057',
        '8ZU' => 'E02006057',
        '8ZW' => 'E02006057',
        '8ZY' => 'E02006057',
        '9AA' => 'E02006057',
        '9AB' => 'E02006051',
        '9AD' => 'E02006058',
        '9AE' => 'E02006058',
        '9AF' => 'E02006057',
        '9AG' => 'E02006057',
        '9AH' => 'E02006057',
        '9AJ' => 'E02006057',
        '9AL' => 'E02006057',
        '9AN' => 'E02006057',
        '9AP' => 'E02006057',
        '9AQ' => 'E02006057',
        '9AR' => 'E02006057',
        '9AS' => 'E02006057',
        '9AT' => 'E02006057',
        '9AU' => 'E02006057',
        '9AW' => 'E02006057',
        '9AX' => 'E02006057',
        '9AY' => 'E02006057',
        '9AZ' => 'E02006057',
        '9BA' => 'E02006057',
        '9BB' => 'E02006057',
        '9BD' => 'E02006057',
        '9BE' => 'E02006057',
        '9BG' => 'E02006057',
        '9BH' => 'E02006057',
        '9BJ' => 'E02006057',
        '9BL' => 'E02006057',
        '9BN' => 'E02006057',
        '9BP' => 'E02006057',
        '9BQ' => 'E02006057',
        '9BR' => 'E02006057',
        '9BS' => 'E02006057',
        '9BT' => 'E02006057',
        '9BU' => 'E02006057',
        '9BW' => 'E02006057',
        '9BX' => 'E02006057',
        '9BY' => 'E02006057',
        '9BZ' => 'E02006057',
        '9DA' => 'E02006057',
        '9DB' => 'E02006057',
        '9DD' => 'E02006057',
        '9DE' => 'E02006057',
        '9DF' => 'E02006057',
        '9DG' => 'E02006057',
        '9DH' => 'E02006057',
        '9DJ' => 'E02006057',
        '9DL' => 'E02006057',
        '9DN' => 'E02006057',
        '9DP' => 'E02006057',
        '9DQ' => 'E02006057',
        '9DR' => 'E02006057',
        '9DS' => 'E02006057',
        '9DT' => 'E02006057',
        '9DU' => 'E02006057',
        '9DW' => 'E02006057',
        '9DX' => 'E02006057',
        '9DY' => 'E02006057',
        '9DZ' => 'E02006057',
        '9EA' => 'E02006057',
        '9EB' => 'E02006057',
        '9ED' => 'E02006057',
        '9EE' => 'E02006057',
        '9EF' => 'E02006058',
        '9EG' => 'E02006057',
        '9EH' => 'E02006057',
        '9EJ' => 'E02006057',
        '9EL' => 'E02006057',
        '9EN' => 'E02006057',
        '9EP' => 'E02006057',
        '9EQ' => 'E02006057',
        '9ER' => 'E02006057',
        '9ES' => 'E02006058',
        '9ET' => 'E02006057',
        '9EU' => 'E02006057',
        '9EW' => 'E02006057',
        '9EX' => 'E02006057',
        '9EY' => 'E02006058',
        '9EZ' => 'E02006058',
        '9FA' => 'E02006057',
        '9FB' => 'E02006058',
        '9FD' => 'E02006057',
        '9FE' => 'E02006057',
        '9FF' => 'E02006057',
        '9FG' => 'E02006057',
        '9FH' => 'E02006057',
        '9FJ' => 'E02006057',
        '9FL' => 'E02006057',
        '9FN' => 'E02006058',
        '9FP' => 'E02006058',
        '9FQ' => 'E02006058',
        '9FR' => 'E02006058',
        '9FS' => 'E02006057',
        '9FT' => 'E02006058',
        '9FU' => 'E02006058',
        '9FW' => 'E02006058',
        '9FX' => 'E02006057',
        '9FY' => 'E02006057',
        '9FZ' => 'E02006058',
        '9GA' => 'E02006057',
        '9GB' => 'E02006057',
        '9GD' => 'E02006057',
        '9GE' => 'E02006057',
        '9GF' => 'E02006057',
        '9GG' => 'E02006057',
        '9GH' => 'E02006057',
        '9GJ' => 'E02006057',
        '9GL' => 'E02006057',
        '9GN' => 'E02006057',
        '9GP' => 'E02006057',
        '9GQ' => 'E02006058',
        '9GR' => 'E02006057',
        '9GS' => 'E02006058',
        '9GT' => 'E02006058',
        '9GU' => 'E02006057',
        '9GW' => 'E02006057',
        '9GX' => 'E02006058',
        '9GY' => 'E02006057',
        '9GZ' => 'E02006057',
        '9HA' => 'E02006057',
        '9HB' => 'E02006057',
        '9HD' => 'E02006057',
        '9HE' => 'E02006057',
        '9HF' => 'E02006057',
        '9HG' => 'E02006057',
        '9HH' => 'E02006057',
        '9HJ' => 'E02006057',
        '9HL' => 'E02006057',
        '9HN' => 'E02006057',
        '9HP' => 'E02006058',
        '9HQ' => 'E02006058',
        '9HR' => 'E02006057',
        '9HS' => 'E02006057',
        '9HT' => 'E02006057',
        '9HU' => 'E02006057',
        '9HW' => 'E02006057',
        '9HX' => 'E02006057',
        '9HY' => 'E02006057',
        '9HZ' => 'E02006057',
        '9JA' => 'E02006057',
        '9JB' => 'E02006057',
        '9JD' => 'E02006057',
        '9JE' => 'E02006057',
        '9JF' => 'E02006057',
        '9JG' => 'E02006057',
        '9JH' => 'E02006057',
        '9JJ' => 'E02006057',
        '9JL' => 'E02006058',
        '9JN' => 'E02006057',
        '9JP' => 'E02006057',
        '9JQ' => 'E02006057',
        '9JR' => 'E02006057',
        '9JS' => 'E02006057',
        '9JT' => 'E02006057',
        '9JU' => 'E02006057',
        '9JW' => 'E02006057',
        '9JX' => 'E02006057',
        '9JY' => 'E02006057',
        '9JZ' => 'E02006057',
        '9LA' => 'E02006057',
        '9LB' => 'E02006058',
        '9LD' => 'E02006057',
        '9LE' => 'E02006057',
        '9LF' => 'E02006057',
        '9LG' => 'E02006058',
        '9LH' => 'E02006057',
        '9LJ' => 'E02006057',
        '9LL' => 'E02006057',
        '9LN' => 'E02006057',
        '9LP' => 'E02006058',
        '9LQ' => 'E02006058',
        '9LR' => 'E02006058',
        '9LS' => 'E02006057',
        '9LT' => 'E02006057',
        '9LU' => 'E02006058',
        '9LW' => 'E02006057',
        '9LX' => 'E02006058',
        '9LY' => 'E02006058',
        '9LZ' => 'E02006058',
        '9NA' => 'E02006057',
        '9NB' => 'E02006057',
        '9ND' => 'E02006057',
        '9NE' => 'E02006057',
        '9NF' => 'E02006058',
        '9NG' => 'E02006058',
        '9NH' => 'E02006057',
        '9NJ' => 'E02006057',
        '9NL' => 'E02006057',
        '9NN' => 'E02006058',
        '9NP' => 'E02006057',
        '9NQ' => 'E02006058',
        '9NR' => 'E02006058',
        '9NS' => 'E02006058',
        '9NT' => 'E02006058',
        '9NU' => 'E02006058',
        '9NW' => 'E02006058',
        '9NX' => 'E02006058',
        '9NY' => 'E02006058',
        '9NZ' => 'E02006058',
        '9PA' => 'E02006057',
        '9PB' => 'E02006058',
        '9PD' => 'E02006058',
        '9PE' => 'E02006058',
        '9PF' => 'E02006058',
        '9PG' => 'E02006057',
        '9PH' => 'E02006058',
        '9PJ' => 'E02006058',
        '9PL' => 'E02006058',
        '9PN' => 'E02006058',
        '9PP' => 'E02006057',
        '9PQ' => 'E02006057',
        '9PR' => 'E02006058',
        '9PS' => 'E02006058',
        '9PT' => 'E02006058',
        '9PU' => 'E02006058',
        '9PW' => 'E02006058',
        '9PX' => 'E02006057',
        '9PY' => 'E02006058',
        '9PZ' => 'E02006058',
        '9QA' => 'E02006058',
        '9QB' => 'E02006058',
        '9QD' => 'E02006058',
        '9QE' => 'E02006057',
        '9QF' => 'E02006057',
        '9QG' => 'E02006058',
        '9QH' => 'E02006058',
        '9QJ' => 'E02006057',
        '9QL' => 'E02006057',
        '9QN' => 'E02006057',
        '9QP' => 'E02006057',
        '9QQ' => 'E02006057',
        '9QR' => 'E02006057',
        '9QS' => 'E02006058',
        '9QT' => 'E02006058',
        '9QU' => 'E02006057',
        '9QW' => 'E02006057',
        '9QY' => 'E02006058',
        '9QZ' => 'E02006058',
        '9RA' => 'E02006057',
        '9RB' => 'E02006057',
        '9RJ' => 'E02006057',
        '9RL' => 'E02006058',
        '9SA' => 'E02006058',
        '9SB' => 'E02006058',
        '9SD' => 'E02006058',
        '9SE' => 'E02006058',
        '9SF' => 'E02006058',
        '9SG' => 'E02006058',
        '9SH' => 'E02006058',
        '9SJ' => 'E02006058',
        '9SL' => 'E02006058',
        '9SN' => 'E02006058',
        '9SP' => 'E02006058',
        '9SQ' => 'E02006058',
        '9SR' => 'E02006058',
        '9SS' => 'E02006058',
        '9ST' => 'E02006058',
        '9SU' => 'E02006058',
        '9SW' => 'E02006058',
        '9SX' => 'E02006072',
        '9SY' => 'E02006058',
        '9SZ' => 'E02006058',
        '9TA' => 'E02006058',
        '9TB' => 'E02006058',
        '9TD' => 'E02006058',
        '9TE' => 'E02006058',
        '9TF' => 'E02006058',
        '9TG' => 'E02006058',
        '9TH' => 'E02006058',
        '9TJ' => 'E02006058',
        '9TL' => 'E02006058',
        '9TN' => 'E02006058',
        '9TP' => 'E02006058',
        '9TQ' => 'E02006058',
        '9TR' => 'E02006058',
        '9TS' => 'E02006058',
        '9TT' => 'E02006058',
        '9TU' => 'E02006058',
        '9TW' => 'E02006058',
        '9TX' => 'E02006058',
        '9TY' => 'E02006058',
        '9TZ' => 'E02006058',
        '9UA' => 'E02006058',
        '9UZ' => 'E02006057',
        '9WA' => 'E02006057',
        '9WB' => 'E02006057',
        '9WD' => 'E02006058',
        '9WE' => 'E02006057',
        '9WF' => 'E02006057',
        '9WG' => 'E02006057',
        '9WH' => 'E02006057',
        '9WJ' => 'E02006057',
        '9WL' => 'E02006057',
        '9WN' => 'E02006057',
        '9WP' => 'E02006057',
        '9WQ' => 'E02006057',
        '9WR' => 'E02006057',
        '9WS' => 'E02006057',
        '9WT' => 'E02006057',
        '9WU' => 'E02006057',
        '9WW' => 'E02006057',
        '9WX' => 'E02006057',
        '9WY' => 'E02006057',
        '9WZ' => 'E02006057',
        '9XA' => 'E02006058',
        '9XB' => 'E02006057',
        '9XD' => 'E02006057',
        '9XE' => 'E02006058',
        '9XF' => 'E02006057',
        '9XG' => 'E02006057',
        '9XH' => 'E02006057',
        '9XJ' => 'E02006057',
        '9XN' => 'E02006057',
        '9XP' => 'E02006057',
        '9XQ' => 'E02006057',
        '9XR' => 'E02006057',
        '9XS' => 'E02006057',
        '9XT' => 'E02006057',
        '9XU' => 'E02006057',
        '9XW' => 'E02006057',
        '9XX' => 'E02006057',
        '9XY' => 'E02006057',
        '9XZ' => 'E02006057',
        '9YA' => 'E02006057',
        '9YB' => 'E02006058',
        '9YE' => 'E02006057',
        '9YF' => 'E02006057',
        '9YG' => 'E02006057',
        '9YH' => 'E02006057',
        '9YJ' => 'E02006057',
        '9YN' => 'E02006059',
        '9YP' => 'E02006057',
        '9YQ' => 'E02006057',
        '9YR' => 'E02006057',
        '9YS' => 'E02006057',
        '9YT' => 'E02006057',
        '9YU' => 'E02006057',
        '9YW' => 'E02006057',
        '9YX' => 'E02006058',
        '9YY' => 'E02006057',
        '9YZ' => 'E02006058',
        '9ZH' => 'E02006057',
        '9ZJ' => 'E02006057',
        '9ZL' => 'E02006057',
        '9ZN' => 'E02006057',
        '9ZQ' => 'E02006057',
        '9ZR' => 'E02006057',
        '9ZS' => 'E02006057',
        '9ZT' => 'E02006057',
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
