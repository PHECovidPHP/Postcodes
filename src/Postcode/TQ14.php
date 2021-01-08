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
final class TQ14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004211',
        '0AB' => 'E02004211',
        '0AD' => 'E02004211',
        '0AE' => 'E02004211',
        '0AF' => 'E02004211',
        '0AG' => 'E02004211',
        '0AH' => 'E02004211',
        '0AJ' => 'E02004211',
        '0AL' => 'E02004211',
        '0AN' => 'E02004211',
        '0AP' => 'E02004211',
        '0AQ' => 'E02004211',
        '0AR' => 'E02004211',
        '0AS' => 'E02004211',
        '0AT' => 'E02004211',
        '0AU' => 'E02004211',
        '0AW' => 'E02004211',
        '0AX' => 'E02004211',
        '0AY' => 'E02004211',
        '0AZ' => 'E02004211',
        '0BA' => 'E02004211',
        '0BB' => 'E02004211',
        '0BD' => 'E02004211',
        '0BE' => 'E02004211',
        '0BG' => 'E02004211',
        '0BH' => 'E02004211',
        '0BJ' => 'E02004211',
        '0BL' => 'E02004211',
        '0BN' => 'E02004211',
        '0BP' => 'E02004211',
        '0BQ' => 'E02004211',
        '0BS' => 'E02004211',
        '0BT' => 'E02004211',
        '0BU' => 'E02004211',
        '0BW' => 'E02004211',
        '0BX' => 'E02004211',
        '0DA' => 'E02004211',
        '0DB' => 'E02004211',
        '0DD' => 'E02004211',
        '0DE' => 'E02004211',
        '0DF' => 'E02004211',
        '0DG' => 'E02004211',
        '0DH' => 'E02004211',
        '0DJ' => 'E02004211',
        '0DL' => 'E02004211',
        '0DN' => 'E02004211',
        '0DP' => 'E02004211',
        '0DQ' => 'E02004211',
        '0DR' => 'E02004211',
        '0DS' => 'E02004211',
        '0DT' => 'E02004211',
        '0DU' => 'E02004211',
        '0DW' => 'E02004211',
        '0DX' => 'E02004211',
        '0DY' => 'E02004211',
        '0DZ' => 'E02004211',
        '0EA' => 'E02004211',
        '0EB' => 'E02004211',
        '0ED' => 'E02004211',
        '0EE' => 'E02004211',
        '0EF' => 'E02004211',
        '0EG' => 'E02004211',
        '0EH' => 'E02004211',
        '0EJ' => 'E02004211',
        '0EL' => 'E02004211',
        '0EP' => 'E02004211',
        '0EQ' => 'E02004211',
        '0ER' => 'E02004211',
        '0ES' => 'E02004211',
        '0ET' => 'E02004211',
        '0EU' => 'E02004211',
        '0EX' => 'E02004211',
        '0EY' => 'E02004211',
        '0EZ' => 'E02004211',
        '0GA' => 'E02004211',
        '0HA' => 'E02004211',
        '0HB' => 'E02004211',
        '0HD' => 'E02004211',
        '0HE' => 'E02004211',
        '0HF' => 'E02004211',
        '0HG' => 'E02004211',
        '0HH' => 'E02004211',
        '0HJ' => 'E02004211',
        '0HL' => 'E02004211',
        '0HN' => 'E02004211',
        '0HP' => 'E02004211',
        '0HQ' => 'E02004211',
        '0HR' => 'E02004211',
        '0HS' => 'E02004211',
        '0HT' => 'E02004211',
        '0HW' => 'E02004211',
        '0PA' => 'E02004211',
        '0WA' => 'E02004211',
        '0WZ' => 'E02004210',
        '0YA' => 'E02004210',
        '0YB' => 'E02004210',
        '0YD' => 'E02004211',
        '0YE' => 'E02004211',
        '0YY' => 'E02004211',
        '0YZ' => 'E02004211',
        '0ZN' => 'E02004210',
        '0ZQ' => 'E02004210',
        '0ZS' => 'E02004210',
        '0ZX' => 'E02004210',
        '4AD' => 'E02004210',
        '4AE' => 'E02004210',
        '4AF' => 'E02004210',
        '4AJ' => 'E02004210',
        '4AP' => 'E02004210',
        '4AR' => 'E02004210',
        '4AS' => 'E02004210',
        '4AU' => 'E02004210',
        '4AW' => 'E02004210',
        '4AX' => 'E02004210',
        '4AY' => 'E02004210',
        '4AZ' => 'E02004210',
        '4BA' => 'E02004210',
        '4BB' => 'E02004210',
        '4BD' => 'E02004210',
        '4BE' => 'E02004210',
        '4BF' => 'E02004210',
        '4BG' => 'E02004210',
        '4BH' => 'E02004210',
        '4BJ' => 'E02004210',
        '4BL' => 'E02004210',
        '4BN' => 'E02004210',
        '4BP' => 'E02004210',
        '4BQ' => 'E02004210',
        '4BS' => 'E02004210',
        '4BT' => 'E02004210',
        '8AA' => 'E02004210',
        '8AB' => 'E02004210',
        '8AD' => 'E02004210',
        '8AE' => 'E02004210',
        '8AF' => 'E02004210',
        '8AG' => 'E02004210',
        '8AH' => 'E02004210',
        '8AJ' => 'E02004210',
        '8AL' => 'E02004210',
        '8AN' => 'E02004210',
        '8AP' => 'E02004210',
        '8AQ' => 'E02004210',
        '8AR' => 'E02004210',
        '8AS' => 'E02004210',
        '8AT' => 'E02004210',
        '8AU' => 'E02004210',
        '8AW' => 'E02004210',
        '8AX' => 'E02004210',
        '8AY' => 'E02004210',
        '8AZ' => 'E02004210',
        '8BA' => 'E02004210',
        '8BB' => 'E02004210',
        '8BD' => 'E02004210',
        '8BE' => 'E02004210',
        '8BG' => 'E02004210',
        '8BH' => 'E02004210',
        '8BJ' => 'E02004210',
        '8BL' => 'E02004210',
        '8BN' => 'E02004210',
        '8BP' => 'E02004210',
        '8BQ' => 'E02004210',
        '8BR' => 'E02004210',
        '8BS' => 'E02004210',
        '8BT' => 'E02004210',
        '8BU' => 'E02004210',
        '8BW' => 'E02004210',
        '8BX' => 'E02004210',
        '8BY' => 'E02004210',
        '8BZ' => 'E02004210',
        '8DA' => 'E02004210',
        '8DB' => 'E02004210',
        '8DD' => 'E02004210',
        '8DE' => 'E02004210',
        '8DF' => 'E02004210',
        '8DG' => 'E02004214',
        '8DH' => 'E02004210',
        '8DJ' => 'E02004210',
        '8DL' => 'E02004210',
        '8DN' => 'E02004210',
        '8DP' => 'E02004210',
        '8DQ' => 'E02004210',
        '8DR' => 'E02004210',
        '8DS' => 'E02004210',
        '8DT' => 'E02004210',
        '8DU' => 'E02004210',
        '8DW' => 'E02004210',
        '8DX' => 'E02004210',
        '8DY' => 'E02004210',
        '8DZ' => 'E02004210',
        '8EA' => 'E02004210',
        '8EB' => 'E02004210',
        '8ED' => 'E02004210',
        '8EE' => 'E02004210',
        '8EF' => 'E02004210',
        '8EG' => 'E02004210',
        '8EH' => 'E02004210',
        '8EJ' => 'E02004210',
        '8EL' => 'E02004210',
        '8EN' => 'E02004210',
        '8EP' => 'E02004210',
        '8EQ' => 'E02004210',
        '8ER' => 'E02004210',
        '8ES' => 'E02004210',
        '8ET' => 'E02004210',
        '8EU' => 'E02004210',
        '8EW' => 'E02004210',
        '8EX' => 'E02004210',
        '8EY' => 'E02004210',
        '8EZ' => 'E02004210',
        '8FA' => 'E02004208',
        '8FB' => 'E02004208',
        '8FD' => 'E02004208',
        '8FE' => 'E02004208',
        '8FF' => 'E02004208',
        '8FG' => 'E02004210',
        '8FH' => 'E02004210',
        '8FJ' => 'E02004210',
        '8FL' => 'E02004210',
        '8FN' => 'E02004210',
        '8FP' => 'E02004210',
        '8FQ' => 'E02004210',
        '8FR' => 'E02004208',
        '8FS' => 'E02004210',
        '8FT' => 'E02004208',
        '8FU' => 'E02004210',
        '8FW' => 'E02004210',
        '8GA' => 'E02004210',
        '8GB' => 'E02004210',
        '8GD' => 'E02004208',
        '8GE' => 'E02004208',
        '8GF' => 'E02004208',
        '8GG' => 'E02004208',
        '8GH' => 'E02004210',
        '8GJ' => 'E02004210',
        '8GL' => 'E02004208',
        '8HA' => 'E02004210',
        '8HB' => 'E02004210',
        '8HD' => 'E02004210',
        '8HE' => 'E02004210',
        '8HH' => 'E02004210',
        '8HJ' => 'E02004210',
        '8HL' => 'E02004210',
        '8HN' => 'E02004210',
        '8HP' => 'E02004210',
        '8HR' => 'E02004210',
        '8HT' => 'E02004210',
        '8HU' => 'E02004210',
        '8HW' => 'E02004210',
        '8HX' => 'E02004208',
        '8HY' => 'E02004210',
        '8HZ' => 'E02004210',
        '8JA' => 'E02004210',
        '8JB' => 'E02004210',
        '8JD' => 'E02004210',
        '8JE' => 'E02004210',
        '8JF' => 'E02004210',
        '8JG' => 'E02004210',
        '8JH' => 'E02004210',
        '8JJ' => 'E02004210',
        '8JL' => 'E02004210',
        '8JN' => 'E02004210',
        '8JP' => 'E02004210',
        '8JQ' => 'E02004210',
        '8JR' => 'E02004210',
        '8JS' => 'E02004210',
        '8JT' => 'E02004208',
        '8JU' => 'E02004208',
        '8JW' => 'E02004210',
        '8JX' => 'E02004208',
        '8JZ' => 'E02004208',
        '8LA' => 'E02004208',
        '8LB' => 'E02004208',
        '8LD' => 'E02004208',
        '8LE' => 'E02004208',
        '8LF' => 'E02004208',
        '8LG' => 'E02004210',
        '8LH' => 'E02004210',
        '8LJ' => 'E02004210',
        '8LL' => 'E02004210',
        '8LN' => 'E02004210',
        '8LP' => 'E02004210',
        '8LQ' => 'E02004208',
        '8LR' => 'E02004210',
        '8LS' => 'E02004206',
        '8LT' => 'E02004208',
        '8LU' => 'E02004208',
        '8LW' => 'E02004208',
        '8LX' => 'E02004208',
        '8LY' => 'E02004208',
        '8LZ' => 'E02004208',
        '8NA' => 'E02004208',
        '8NB' => 'E02004208',
        '8ND' => 'E02004208',
        '8NE' => 'E02004208',
        '8NF' => 'E02004208',
        '8NG' => 'E02004208',
        '8NH' => 'E02004208',
        '8NJ' => 'E02004208',
        '8NL' => 'E02004208',
        '8NN' => 'E02004208',
        '8NP' => 'E02004208',
        '8NQ' => 'E02004208',
        '8NR' => 'E02004208',
        '8NS' => 'E02004210',
        '8NT' => 'E02004208',
        '8NU' => 'E02004208',
        '8NW' => 'E02004208',
        '8NX' => 'E02004208',
        '8NY' => 'E02004208',
        '8NZ' => 'E02004208',
        '8PA' => 'E02004208',
        '8PB' => 'E02004208',
        '8PD' => 'E02004208',
        '8PE' => 'E02004210',
        '8PF' => 'E02004210',
        '8PG' => 'E02004210',
        '8PH' => 'E02004210',
        '8PJ' => 'E02004208',
        '8PL' => 'E02004208',
        '8PN' => 'E02004208',
        '8PP' => 'E02004208',
        '8PQ' => 'E02004210',
        '8PR' => 'E02004208',
        '8PS' => 'E02004208',
        '8PT' => 'E02004208',
        '8PU' => 'E02004208',
        '8PW' => 'E02004208',
        '8PX' => 'E02004208',
        '8PY' => 'E02004208',
        '8PZ' => 'E02004208',
        '8QA' => 'E02004208',
        '8QB' => 'E02004208',
        '8QD' => 'E02004208',
        '8QE' => 'E02004208',
        '8QF' => 'E02004208',
        '8QG' => 'E02004208',
        '8QH' => 'E02004208',
        '8QJ' => 'E02004210',
        '8QL' => 'E02004208',
        '8QN' => 'E02004208',
        '8QP' => 'E02004208',
        '8QQ' => 'E02004208',
        '8QR' => 'E02004208',
        '8QS' => 'E02004208',
        '8QT' => 'E02004208',
        '8QU' => 'E02004208',
        '8QW' => 'E02004208',
        '8QX' => 'E02004208',
        '8QY' => 'E02004208',
        '8QZ' => 'E02004208',
        '8RA' => 'E02004208',
        '8RB' => 'E02004208',
        '8RD' => 'E02004208',
        '8RE' => 'E02004208',
        '8RF' => 'E02004208',
        '8RG' => 'E02004208',
        '8RH' => 'E02004208',
        '8RJ' => 'E02004208',
        '8RL' => 'E02004208',
        '8RN' => 'E02004208',
        '8RP' => 'E02004208',
        '8RQ' => 'E02004208',
        '8RR' => 'E02004208',
        '8RS' => 'E02004208',
        '8RT' => 'E02004208',
        '8RU' => 'E02004208',
        '8RW' => 'E02004208',
        '8RX' => 'E02004208',
        '8RY' => 'E02004208',
        '8RZ' => 'E02004208',
        '8SA' => 'E02004208',
        '8SB' => 'E02004208',
        '8SD' => 'E02004208',
        '8SE' => 'E02004208',
        '8SF' => 'E02004208',
        '8SG' => 'E02004208',
        '8SH' => 'E02004210',
        '8SJ' => 'E02004210',
        '8SL' => 'E02004210',
        '8SN' => 'E02004210',
        '8SP' => 'E02004210',
        '8SQ' => 'E02004208',
        '8SR' => 'E02004210',
        '8SS' => 'E02004206',
        '8ST' => 'E02004210',
        '8SU' => 'E02004210',
        '8SW' => 'E02004210',
        '8SX' => 'E02004210',
        '8SY' => 'E02004210',
        '8SZ' => 'E02004210',
        '8TA' => 'E02004210',
        '8TB' => 'E02004210',
        '8TD' => 'E02004210',
        '8TE' => 'E02004210',
        '8TF' => 'E02004208',
        '8TG' => 'E02004208',
        '8TH' => 'E02004208',
        '8TJ' => 'E02004208',
        '8TL' => 'E02004208',
        '8TN' => 'E02004206',
        '8TP' => 'E02004208',
        '8TQ' => 'E02004208',
        '8TR' => 'E02004208',
        '8TS' => 'E02004208',
        '8TT' => 'E02004208',
        '8TU' => 'E02004208',
        '8TW' => 'E02004206',
        '8TX' => 'E02004208',
        '8TY' => 'E02004208',
        '8TZ' => 'E02004208',
        '8UA' => 'E02004208',
        '8UB' => 'E02004208',
        '8UD' => 'E02004208',
        '8UE' => 'E02004208',
        '8UF' => 'E02004208',
        '8UG' => 'E02004208',
        '8UH' => 'E02004208',
        '8UJ' => 'E02004208',
        '8UL' => 'E02004208',
        '8UN' => 'E02004206',
        '8UP' => 'E02004206',
        '8UQ' => 'E02004208',
        '8UR' => 'E02004206',
        '8US' => 'E02004208',
        '8UT' => 'E02004206',
        '8UU' => 'E02004206',
        '8UW' => 'E02004206',
        '8UX' => 'E02004208',
        '8UY' => 'E02004210',
        '8UZ' => 'E02004206',
        '8WA' => 'E02004206',
        '8WB' => 'E02004210',
        '8WD' => 'E02004206',
        '8WE' => 'E02004208',
        '8WF' => 'E02004210',
        '8WG' => 'E02004210',
        '8WH' => 'E02004206',
        '8WJ' => 'E02004206',
        '8WL' => 'E02004208',
        '8WN' => 'E02004210',
        '8WP' => 'E02004210',
        '8WQ' => 'E02004210',
        '8WR' => 'E02004210',
        '8WS' => 'E02004210',
        '8WT' => 'E02004210',
        '8WU' => 'E02004210',
        '8WW' => 'E02004210',
        '8WX' => 'E02004210',
        '8WY' => 'E02004210',
        '8WZ' => 'E02004210',
        '8XA' => 'E02004206',
        '8XB' => 'E02004210',
        '8XD' => 'E02004210',
        '8XE' => 'E02004210',
        '8XG' => 'E02004210',
        '8XH' => 'E02004210',
        '8XJ' => 'E02004210',
        '8XL' => 'E02004210',
        '8XN' => 'E02004210',
        '8XP' => 'E02004210',
        '8XQ' => 'E02004208',
        '8XR' => 'E02004210',
        '8XS' => 'E02004210',
        '8XT' => 'E02004211',
        '8XU' => 'E02004210',
        '8XW' => 'E02004210',
        '8XX' => 'E02004211',
        '8XY' => 'E02004211',
        '8XZ' => 'E02004210',
        '8YA' => 'E02004210',
        '8YB' => 'E02004210',
        '8YD' => 'E02004210',
        '8YE' => 'E02004208',
        '8YF' => 'E02004210',
        '8YG' => 'E02004211',
        '8YH' => 'E02004210',
        '8YJ' => 'E02004208',
        '8YL' => 'E02004208',
        '8YN' => 'E02004210',
        '8YP' => 'E02004208',
        '8YQ' => 'E02004211',
        '8YR' => 'E02004208',
        '8YS' => 'E02004208',
        '8YT' => 'E02004208',
        '8YU' => 'E02004208',
        '8YW' => 'E02004210',
        '8YX' => 'E02004210',
        '8YY' => 'E02004211',
        '8YZ' => 'E02004211',
        '8ZB' => 'E02004210',
        '8ZD' => 'E02004210',
        '8ZJ' => 'E02004210',
        '8ZL' => 'E02004210',
        '8ZN' => 'E02004210',
        '8ZQ' => 'E02004210',
        '8ZR' => 'E02004210',
        '8ZS' => 'E02004210',
        '8ZT' => 'E02004210',
        '8ZU' => 'E02004210',
        '8ZW' => 'E02004210',
        '8ZZ' => 'E02004210',
        '9AA' => 'E02004210',
        '9AB' => 'E02004210',
        '9AD' => 'E02004210',
        '9AE' => 'E02004210',
        '9AF' => 'E02004210',
        '9AG' => 'E02004210',
        '9AH' => 'E02004210',
        '9AJ' => 'E02004210',
        '9AL' => 'E02004210',
        '9AN' => 'E02004211',
        '9AP' => 'E02004210',
        '9AQ' => 'E02004210',
        '9AR' => 'E02004210',
        '9AS' => 'E02004210',
        '9AT' => 'E02004210',
        '9AU' => 'E02004210',
        '9AW' => 'E02004211',
        '9AX' => 'E02004210',
        '9AY' => 'E02004210',
        '9AZ' => 'E02004210',
        '9BA' => 'E02004210',
        '9BB' => 'E02004210',
        '9BD' => 'E02004210',
        '9BE' => 'E02004210',
        '9BG' => 'E02004210',
        '9BH' => 'E02004210',
        '9BJ' => 'E02004210',
        '9BL' => 'E02004210',
        '9BN' => 'E02004208',
        '9BP' => 'E02004210',
        '9BQ' => 'E02004210',
        '9BR' => 'E02004210',
        '9BS' => 'E02004210',
        '9BT' => 'E02004210',
        '9BU' => 'E02004210',
        '9BW' => 'E02004210',
        '9BX' => 'E02004210',
        '9BY' => 'E02004210',
        '9BZ' => 'E02004210',
        '9DA' => 'E02004210',
        '9DB' => 'E02004210',
        '9DD' => 'E02004210',
        '9DE' => 'E02004210',
        '9DF' => 'E02004210',
        '9DG' => 'E02004210',
        '9DH' => 'E02004210',
        '9DJ' => 'E02004210',
        '9DL' => 'E02004210',
        '9DN' => 'E02004210',
        '9DP' => 'E02004210',
        '9DQ' => 'E02004210',
        '9DR' => 'E02004210',
        '9DS' => 'E02004210',
        '9DT' => 'E02004210',
        '9DU' => 'E02004210',
        '9DW' => 'E02004210',
        '9DX' => 'E02004210',
        '9DY' => 'E02004210',
        '9DZ' => 'E02004210',
        '9EA' => 'E02004210',
        '9EB' => 'E02004210',
        '9ED' => 'E02004210',
        '9EE' => 'E02004210',
        '9EF' => 'E02004210',
        '9EG' => 'E02004210',
        '9EH' => 'E02004210',
        '9EJ' => 'E02004210',
        '9EL' => 'E02004210',
        '9EN' => 'E02004210',
        '9EP' => 'E02004210',
        '9EQ' => 'E02004210',
        '9ER' => 'E02004210',
        '9ES' => 'E02004208',
        '9ET' => 'E02004208',
        '9EU' => 'E02004210',
        '9EW' => 'E02004208',
        '9EX' => 'E02004208',
        '9EY' => 'E02004208',
        '9EZ' => 'E02004208',
        '9FA' => 'E02004210',
        '9FB' => 'E02004208',
        '9FD' => 'E02004211',
        '9FE' => 'E02004208',
        '9FF' => 'E02004210',
        '9FG' => 'E02004208',
        '9FH' => 'E02004208',
        '9FN' => 'E02004208',
        '9FX' => 'E02004208',
        '9GW' => 'E02004208',
        '9GX' => 'E02004210',
        '9GY' => 'E02004208',
        '9GZ' => 'E02004208',
        '9HA' => 'E02004208',
        '9HB' => 'E02004208',
        '9HD' => 'E02004208',
        '9HE' => 'E02004208',
        '9HF' => 'E02004208',
        '9HG' => 'E02004208',
        '9HH' => 'E02004208',
        '9HJ' => 'E02004208',
        '9HL' => 'E02004208',
        '9HN' => 'E02004210',
        '9HP' => 'E02004210',
        '9HQ' => 'E02004208',
        '9HR' => 'E02004210',
        '9HS' => 'E02004210',
        '9HT' => 'E02004210',
        '9HU' => 'E02004210',
        '9HW' => 'E02004210',
        '9HX' => 'E02004210',
        '9HY' => 'E02004210',
        '9HZ' => 'E02004208',
        '9JA' => 'E02004208',
        '9JB' => 'E02004208',
        '9JD' => 'E02004208',
        '9JE' => 'E02004208',
        '9JF' => 'E02004208',
        '9JG' => 'E02004208',
        '9JH' => 'E02004208',
        '9JJ' => 'E02004208',
        '9JL' => 'E02004210',
        '9JN' => 'E02004208',
        '9JP' => 'E02004208',
        '9JQ' => 'E02004208',
        '9JR' => 'E02004210',
        '9JS' => 'E02004210',
        '9JT' => 'E02004210',
        '9JU' => 'E02004210',
        '9JW' => 'E02004210',
        '9JX' => 'E02004210',
        '9JY' => 'E02004210',
        '9JZ' => 'E02004210',
        '9LA' => 'E02004210',
        '9LB' => 'E02004210',
        '9LD' => 'E02004210',
        '9LE' => 'E02004208',
        '9LF' => 'E02004210',
        '9LG' => 'E02004208',
        '9LH' => 'E02004208',
        '9LJ' => 'E02004208',
        '9LL' => 'E02004208',
        '9LN' => 'E02004208',
        '9LP' => 'E02004208',
        '9LQ' => 'E02004208',
        '9LR' => 'E02004208',
        '9LS' => 'E02004208',
        '9LT' => 'E02004208',
        '9LU' => 'E02004208',
        '9LW' => 'E02004208',
        '9LX' => 'E02004208',
        '9LY' => 'E02004208',
        '9LZ' => 'E02004208',
        '9NA' => 'E02004208',
        '9NB' => 'E02004208',
        '9ND' => 'E02004208',
        '9NE' => 'E02004208',
        '9NF' => 'E02004208',
        '9NG' => 'E02004208',
        '9NH' => 'E02004208',
        '9NJ' => 'E02004208',
        '9NL' => 'E02004208',
        '9NN' => 'E02004208',
        '9NP' => 'E02004208',
        '9NQ' => 'E02004208',
        '9NR' => 'E02004208',
        '9NS' => 'E02004208',
        '9NT' => 'E02004208',
        '9NU' => 'E02004208',
        '9NW' => 'E02004208',
        '9NX' => 'E02004211',
        '9NY' => 'E02004211',
        '9NZ' => 'E02004208',
        '9PA' => 'E02004208',
        '9PB' => 'E02004208',
        '9PD' => 'E02004208',
        '9PH' => 'E02004210',
        '9PJ' => 'E02004211',
        '9PL' => 'E02004211',
        '9PN' => 'E02004211',
        '9PP' => 'E02004211',
        '9PQ' => 'E02004211',
        '9PR' => 'E02004211',
        '9PS' => 'E02004211',
        '9PT' => 'E02004211',
        '9PU' => 'E02004211',
        '9PW' => 'E02004211',
        '9PX' => 'E02004211',
        '9PY' => 'E02004211',
        '9PZ' => 'E02004211',
        '9QA' => 'E02004211',
        '9QB' => 'E02004211',
        '9QD' => 'E02004211',
        '9QE' => 'E02004211',
        '9QH' => 'E02004211',
        '9QJ' => 'E02004211',
        '9QL' => 'E02004211',
        '9QN' => 'E02004211',
        '9QP' => 'E02004211',
        '9QQ' => 'E02004210',
        '9QR' => 'E02004211',
        '9QS' => 'E02004211',
        '9QT' => 'E02004211',
        '9QU' => 'E02004211',
        '9QW' => 'E02004211',
        '9QX' => 'E02004211',
        '9QY' => 'E02004211',
        '9QZ' => 'E02004211',
        '9RA' => 'E02004211',
        '9RB' => 'E02004211',
        '9RD' => 'E02004211',
        '9RE' => 'E02004211',
        '9RF' => 'E02004211',
        '9RG' => 'E02004211',
        '9RH' => 'E02004211',
        '9RJ' => 'E02004211',
        '9RL' => 'E02004211',
        '9RN' => 'E02004211',
        '9RP' => 'E02004211',
        '9RQ' => 'E02004211',
        '9RR' => 'E02004211',
        '9RS' => 'E02004211',
        '9RT' => 'E02004211',
        '9RU' => 'E02004211',
        '9RW' => 'E02004211',
        '9RX' => 'E02004211',
        '9RY' => 'E02004211',
        '9RZ' => 'E02004211',
        '9SA' => 'E02004211',
        '9SB' => 'E02004211',
        '9SD' => 'E02004211',
        '9SE' => 'E02004211',
        '9SF' => 'E02004211',
        '9SG' => 'E02004211',
        '9SH' => 'E02004211',
        '9SJ' => 'E02004211',
        '9SL' => 'E02004211',
        '9SN' => 'E02004211',
        '9SP' => 'E02004211',
        '9SQ' => 'E02004211',
        '9SR' => 'E02004211',
        '9SS' => 'E02004211',
        '9ST' => 'E02004211',
        '9SU' => 'E02004211',
        '9SW' => 'E02004211',
        '9SX' => 'E02004211',
        '9SY' => 'E02004211',
        '9SZ' => 'E02004211',
        '9TA' => 'E02004211',
        '9TB' => 'E02004211',
        '9TD' => 'E02004211',
        '9TE' => 'E02004211',
        '9TF' => 'E02004211',
        '9TG' => 'E02004211',
        '9TH' => 'E02004211',
        '9TJ' => 'E02004211',
        '9TL' => 'E02004211',
        '9TN' => 'E02004211',
        '9TP' => 'E02004211',
        '9TQ' => 'E02004211',
        '9TR' => 'E02004211',
        '9TS' => 'E02004211',
        '9TT' => 'E02004211',
        '9TU' => 'E02004211',
        '9TW' => 'E02004211',
        '9TX' => 'E02004211',
        '9TY' => 'E02004211',
        '9TZ' => 'E02004211',
        '9UA' => 'E02004211',
        '9UB' => 'E02004208',
        '9UD' => 'E02004208',
        '9UE' => 'E02004208',
        '9UF' => 'E02004208',
        '9UG' => 'E02004208',
        '9UH' => 'E02004208',
        '9UJ' => 'E02004208',
        '9UL' => 'E02004208',
        '9UN' => 'E02004208',
        '9UP' => 'E02004208',
        '9UQ' => 'E02004208',
        '9UR' => 'E02004208',
        '9UT' => 'E02004208',
        '9UU' => 'E02004208',
        '9UW' => 'E02004211',
        '9UX' => 'E02004208',
        '9UY' => 'E02004208',
        '9UZ' => 'E02004208',
        '9WA' => 'E02004210',
        '9WJ' => 'E02004208',
        '9WP' => 'E02004210',
        '9WQ' => 'E02004210',
        '9WR' => 'E02004210',
        '9WS' => 'E02004210',
        '9WT' => 'E02004210',
        '9WU' => 'E02004210',
        '9WW' => 'E02004210',
        '9WX' => 'E02004210',
        '9WY' => 'E02004210',
        '9WZ' => 'E02004210',
        '9XA' => 'E02004208',
        '9XB' => 'E02004210',
        '9XD' => 'E02004208',
        '9XE' => 'E02004208',
        '9XF' => 'E02004210',
        '9XN' => 'E02004210',
        '9XW' => 'E02004210',
        '9XX' => 'E02004210',
        '9XY' => 'E02004210',
        '9XZ' => 'E02004210',
        '9YA' => 'E02004210',
        '9YB' => 'E02004210',
        '9YD' => 'E02004210',
        '9YE' => 'E02004210',
        '9YF' => 'E02004210',
        '9YG' => 'E02004208',
        '9YH' => 'E02004210',
        '9YJ' => 'E02004210',
        '9YL' => 'E02004210',
        '9YN' => 'E02004210',
        '9YP' => 'E02004210',
        '9YQ' => 'E02004210',
        '9YR' => 'E02004210',
        '9YS' => 'E02004210',
        '9YT' => 'E02004210',
        '9YU' => 'E02004210',
        '9YW' => 'E02004210',
        '9YX' => 'E02004210',
        '9YY' => 'E02004210',
        '9YZ' => 'E02004210',
        '9ZJ' => 'E02004210',
        '9ZN' => 'E02004210',
        '9ZQ' => 'E02004210',
        '9ZR' => 'E02004210',
        '9ZW' => 'E02004210',
        '9ZX' => 'E02004210',
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
