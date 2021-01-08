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
final class CV12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006486',
        '0AB' => 'E02006486',
        '0AD' => 'E02006486',
        '0AE' => 'E02006486',
        '0AF' => 'E02006490',
        '0AG' => 'E02006486',
        '0AH' => 'E02006486',
        '0AJ' => 'E02006486',
        '0AL' => 'E02006486',
        '0AN' => 'E02006486',
        '0AP' => 'E02006486',
        '0AQ' => 'E02006486',
        '0AR' => 'E02006486',
        '0AS' => 'E02006486',
        '0AT' => 'E02006486',
        '0AU' => 'E02006486',
        '0AW' => 'E02006486',
        '0AX' => 'E02006486',
        '0AY' => 'E02006486',
        '0AZ' => 'E02006486',
        '0BA' => 'E02006486',
        '0BB' => 'E02006486',
        '0BD' => 'E02006486',
        '0BE' => 'E02006486',
        '0BG' => 'E02006486',
        '0BH' => 'E02006490',
        '0BJ' => 'E02006490',
        '0BL' => 'E02006490',
        '0BN' => 'E02006490',
        '0BP' => 'E02006490',
        '0BQ' => 'E02006486',
        '0BS' => 'E02006490',
        '0BT' => 'E02006490',
        '0BU' => 'E02006490',
        '0BW' => 'E02006490',
        '0BX' => 'E02006490',
        '0BY' => 'E02006490',
        '0BZ' => 'E02006490',
        '0DA' => 'E02006490',
        '0DB' => 'E02006490',
        '0DD' => 'E02006490',
        '0DE' => 'E02006490',
        '0DF' => 'E02006490',
        '0DG' => 'E02006490',
        '0DH' => 'E02006490',
        '0DJ' => 'E02006490',
        '0DL' => 'E02006490',
        '0DN' => 'E02006490',
        '0DP' => 'E02006490',
        '0DQ' => 'E02006490',
        '0DR' => 'E02006490',
        '0DS' => 'E02006490',
        '0DT' => 'E02006486',
        '0DU' => 'E02006490',
        '0DW' => 'E02006490',
        '0DX' => 'E02006490',
        '0DY' => 'E02006490',
        '0EA' => 'E02006490',
        '0EB' => 'E02006490',
        '0EE' => 'E02006490',
        '0EF' => 'E02006490',
        '0EG' => 'E02006490',
        '0EH' => 'E02006490',
        '0EJ' => 'E02006490',
        '0EL' => 'E02006490',
        '0EN' => 'E02006490',
        '0EP' => 'E02006490',
        '0EQ' => 'E02006490',
        '0ER' => 'E02006490',
        '0ES' => 'E02006490',
        '0ET' => 'E02006490',
        '0EU' => 'E02006490',
        '0EW' => 'E02006490',
        '0EX' => 'E02006490',
        '0EY' => 'E02006490',
        '0EZ' => 'E02006490',
        '0GA' => 'E02006490',
        '0GB' => 'E02006490',
        '0GD' => 'E02006490',
        '0GE' => 'E02006490',
        '0GF' => 'E02006490',
        '0GG' => 'E02006490',
        '0GH' => 'E02006490',
        '0GJ' => 'E02006490',
        '0GL' => 'E02006490',
        '0GN' => 'E02006490',
        '0GP' => 'E02006490',
        '0GQ' => 'E02006490',
        '0GR' => 'E02006490',
        '0GS' => 'E02006490',
        '0GT' => 'E02006490',
        '0GU' => 'E02006490',
        '0GW' => 'E02006490',
        '0GX' => 'E02006490',
        '0GY' => 'E02006490',
        '0GZ' => 'E02006490',
        '0HA' => 'E02006490',
        '0HB' => 'E02006490',
        '0HD' => 'E02006490',
        '0HE' => 'E02006490',
        '0HF' => 'E02006490',
        '0HG' => 'E02006490',
        '0HH' => 'E02006490',
        '0HJ' => 'E02006490',
        '0HL' => 'E02006490',
        '0HN' => 'E02006490',
        '0HP' => 'E02006490',
        '0HQ' => 'E02006490',
        '0HR' => 'E02006490',
        '0HS' => 'E02006490',
        '0HT' => 'E02006490',
        '0HU' => 'E02006490',
        '0HW' => 'E02006490',
        '0HX' => 'E02006490',
        '0HY' => 'E02006490',
        '0HZ' => 'E02006490',
        '0JA' => 'E02006490',
        '0JB' => 'E02006806',
        '0JD' => 'E02006490',
        '0JE' => 'E02006490',
        '0JF' => 'E02006490',
        '0JG' => 'E02006490',
        '0JH' => 'E02006490',
        '0JJ' => 'E02006490',
        '0JL' => 'E02006490',
        '0JN' => 'E02006490',
        '0JP' => 'E02006490',
        '0JQ' => 'E02006490',
        '0JR' => 'E02006490',
        '0JS' => 'E02006490',
        '0JT' => 'E02006490',
        '0JU' => 'E02006490',
        '0JW' => 'E02006490',
        '0JX' => 'E02006490',
        '0JY' => 'E02006490',
        '0JZ' => 'E02006490',
        '0LA' => 'E02006490',
        '0LB' => 'E02006490',
        '0LD' => 'E02006490',
        '0LE' => 'E02006490',
        '0LF' => 'E02006490',
        '0LG' => 'E02006490',
        '0LH' => 'E02006490',
        '0LJ' => 'E02006490',
        '0LL' => 'E02006490',
        '0LN' => 'E02006490',
        '0LP' => 'E02006490',
        '0LQ' => 'E02006490',
        '0LR' => 'E02006490',
        '0LS' => 'E02006490',
        '0LT' => 'E02006490',
        '0LU' => 'E02006490',
        '0LW' => 'E02006490',
        '0LX' => 'E02006490',
        '0LY' => 'E02006490',
        '0LZ' => 'E02006490',
        '0NA' => 'E02006490',
        '0NB' => 'E02006490',
        '0ND' => 'E02006486',
        '0NE' => 'E02006474',
        '0NF' => 'E02006474',
        '0NG' => 'E02006490',
        '0NH' => 'E02006486',
        '0NJ' => 'E02006490',
        '0NL' => 'E02006490',
        '0NN' => 'E02006486',
        '0NP' => 'E02006490',
        '0NR' => 'E02006490',
        '0NS' => 'E02006490',
        '0NT' => 'E02006486',
        '0NU' => 'E02006486',
        '0NX' => 'E02006486',
        '0NY' => 'E02006486',
        '0NZ' => 'E02006486',
        '0PA' => 'E02006490',
        '0PB' => 'E02006490',
        '0PD' => 'E02006490',
        '0PE' => 'E02006490',
        '0PF' => 'E02006490',
        '0PG' => 'E02006490',
        '0PH' => 'E02006490',
        '0PJ' => 'E02006490',
        '0PL' => 'E02006486',
        '0PN' => 'E02006486',
        '0PP' => 'E02006486',
        '0PR' => 'E02006490',
        '0PS' => 'E02006490',
        '0PW' => 'E02006486',
        '0QB' => 'E02006486',
        '0QD' => 'E02006486',
        '0QE' => 'E02006486',
        '0QF' => 'E02006490',
        '0WY' => 'E02006487',
        '0YA' => 'E02006490',
        '0YB' => 'E02001988',
        '0YE' => 'E02006486',
        '0YQ' => 'E02006487',
        '0YS' => 'E02001988',
        '0YT' => 'E02006490',
        '0YU' => 'E02006490',
        '0YX' => 'E02006487',
        '0YY' => 'E02001988',
        '0YZ' => 'E02006486',
        '0ZA' => 'E02006487',
        '0ZB' => 'E02006486',
        '0ZD' => 'E02006490',
        '0ZE' => 'E02006487',
        '0ZF' => 'E02006487',
        '0ZG' => 'E02006490',
        '0ZQ' => 'E02006487',
        '2AA' => 'E02006487',
        '2AD' => 'E02006487',
        '2AE' => 'E02006487',
        '2AF' => 'E02006487',
        '2AG' => 'E02006487',
        '2AH' => 'E02006487',
        '2AJ' => 'E02006487',
        '2AL' => 'E02006487',
        '2AN' => 'E02006487',
        '2AP' => 'E02006487',
        '2AQ' => 'E02006487',
        '2AR' => 'E02006487',
        '2AS' => 'E02006487',
        '2AT' => 'E02006487',
        '2AU' => 'E02006487',
        '2AW' => 'E02006487',
        '2AX' => 'E02006487',
        '2AY' => 'E02006487',
        '2AZ' => 'E02006487',
        '2BA' => 'E02006487',
        '2BB' => 'E02006487',
        '2BD' => 'E02006487',
        '2BE' => 'E02006487',
        '2BF' => 'E02006487',
        '2BG' => 'E02006487',
        '2BH' => 'E02006487',
        '2BJ' => 'E02006487',
        '2BL' => 'E02006487',
        '2BN' => 'E02006487',
        '2BP' => 'E02006487',
        '2BQ' => 'E02006487',
        '2BR' => 'E02006487',
        '2BS' => 'E02006487',
        '2BT' => 'E02006487',
        '2BU' => 'E02006487',
        '2BW' => 'E02006487',
        '2BX' => 'E02006487',
        '2BY' => 'E02006487',
        '2BZ' => 'E02006487',
        '2DA' => 'E02006487',
        '2DB' => 'E02006487',
        '2DD' => 'E02006487',
        '2DE' => 'E02006487',
        '2DF' => 'E02006487',
        '8AA' => 'E02006487',
        '8AB' => 'E02006487',
        '8AD' => 'E02006486',
        '8AE' => 'E02006486',
        '8AF' => 'E02006486',
        '8AG' => 'E02006486',
        '8AH' => 'E02006487',
        '8AJ' => 'E02006486',
        '8AL' => 'E02006486',
        '8AN' => 'E02006487',
        '8AP' => 'E02006487',
        '8AQ' => 'E02006486',
        '8AR' => 'E02006486',
        '8AS' => 'E02006487',
        '8AT' => 'E02006486',
        '8AU' => 'E02006486',
        '8AW' => 'E02006487',
        '8AX' => 'E02006486',
        '8AY' => 'E02006486',
        '8AZ' => 'E02006486',
        '8BA' => 'E02006486',
        '8BB' => 'E02006486',
        '8BD' => 'E02006486',
        '8BE' => 'E02006486',
        '8BF' => 'E02006487',
        '8BG' => 'E02006486',
        '8BH' => 'E02006486',
        '8BJ' => 'E02006486',
        '8BL' => 'E02006486',
        '8BN' => 'E02006487',
        '8BP' => 'E02006486',
        '8BQ' => 'E02006486',
        '8BS' => 'E02006486',
        '8BT' => 'E02006487',
        '8BU' => 'E02006486',
        '8BW' => 'E02006487',
        '8BX' => 'E02006486',
        '8BY' => 'E02006486',
        '8BZ' => 'E02006486',
        '8DA' => 'E02006486',
        '8DB' => 'E02006486',
        '8DE' => 'E02006486',
        '8DF' => 'E02006486',
        '8DG' => 'E02006486',
        '8DH' => 'E02006487',
        '8DJ' => 'E02006487',
        '8DL' => 'E02006487',
        '8DN' => 'E02006487',
        '8DP' => 'E02006487',
        '8DQ' => 'E02006486',
        '8DR' => 'E02006487',
        '8DS' => 'E02006487',
        '8DT' => 'E02006487',
        '8DU' => 'E02006487',
        '8DW' => 'E02006487',
        '8DX' => 'E02006487',
        '8EA' => 'E02006486',
        '8EB' => 'E02006486',
        '8ED' => 'E02006486',
        '8EE' => 'E02006486',
        '8EF' => 'E02006486',
        '8EG' => 'E02006486',
        '8EH' => 'E02006486',
        '8EJ' => 'E02006486',
        '8EL' => 'E02006486',
        '8EN' => 'E02006486',
        '8EP' => 'E02006486',
        '8EQ' => 'E02006486',
        '8ER' => 'E02006486',
        '8ES' => 'E02006486',
        '8ET' => 'E02006486',
        '8EU' => 'E02006486',
        '8EW' => 'E02006486',
        '8EX' => 'E02006486',
        '8EY' => 'E02006486',
        '8EZ' => 'E02006486',
        '8FB' => 'E02006486',
        '8GG' => 'E02006487',
        '8HA' => 'E02006486',
        '8HB' => 'E02006486',
        '8HD' => 'E02006486',
        '8HE' => 'E02006486',
        '8HF' => 'E02006486',
        '8HG' => 'E02006486',
        '8HH' => 'E02006486',
        '8HJ' => 'E02006806',
        '8HL' => 'E02006487',
        '8HP' => 'E02006487',
        '8HQ' => 'E02006486',
        '8HR' => 'E02006806',
        '8HS' => 'E02006487',
        '8HT' => 'E02006487',
        '8HU' => 'E02006487',
        '8HX' => 'E02006487',
        '8HY' => 'E02006487',
        '8HZ' => 'E02006489',
        '8JA' => 'E02006487',
        '8JB' => 'E02006487',
        '8JD' => 'E02006487',
        '8JE' => 'E02006489',
        '8JF' => 'E02006489',
        '8JG' => 'E02006489',
        '8JH' => 'E02006489',
        '8JJ' => 'E02006489',
        '8JL' => 'E02006487',
        '8JN' => 'E02006487',
        '8JP' => 'E02006487',
        '8JQ' => 'E02006489',
        '8JR' => 'E02006487',
        '8JS' => 'E02006487',
        '8JT' => 'E02006489',
        '8JU' => 'E02006487',
        '8JW' => 'E02006487',
        '8JX' => 'E02006487',
        '8JY' => 'E02006487',
        '8JZ' => 'E02006487',
        '8LA' => 'E02006487',
        '8LB' => 'E02006487',
        '8LD' => 'E02006487',
        '8LE' => 'E02006487',
        '8LF' => 'E02006487',
        '8LG' => 'E02006487',
        '8LH' => 'E02006487',
        '8LJ' => 'E02006487',
        '8LL' => 'E02006487',
        '8LN' => 'E02006487',
        '8LP' => 'E02006487',
        '8LQ' => 'E02006487',
        '8LR' => 'E02006487',
        '8LS' => 'E02006487',
        '8LT' => 'E02006487',
        '8LU' => 'E02006487',
        '8LX' => 'E02006487',
        '8LY' => 'E02006487',
        '8LZ' => 'E02006487',
        '8NA' => 'E02006487',
        '8NB' => 'E02006487',
        '8ND' => 'E02006487',
        '8NE' => 'E02006487',
        '8NF' => 'E02006487',
        '8NG' => 'E02006806',
        '8NH' => 'E02006487',
        '8NJ' => 'E02006489',
        '8NL' => 'E02006487',
        '8NN' => 'E02006489',
        '8NP' => 'E02006487',
        '8NQ' => 'E02006487',
        '8NR' => 'E02006487',
        '8NS' => 'E02006487',
        '8NT' => 'E02006487',
        '8NU' => 'E02006487',
        '8NW' => 'E02006489',
        '8NX' => 'E02006487',
        '8NY' => 'E02006487',
        '8PA' => 'E02006487',
        '8PB' => 'E02006486',
        '8PD' => 'E02006487',
        '8PH' => 'E02006487',
        '8PQ' => 'E02006487',
        '8PR' => 'E02006489',
        '8PS' => 'E02006489',
        '8PT' => 'E02006487',
        '8PU' => 'E02006487',
        '8PW' => 'E02006487',
        '8PX' => 'E02006487',
        '8PY' => 'E02006487',
        '8PZ' => 'E02006489',
        '8QA' => 'E02006487',
        '8QB' => 'E02006486',
        '8QD' => 'E02006486',
        '8QE' => 'E02006486',
        '8QF' => 'E02006486',
        '8QG' => 'E02006486',
        '8QH' => 'E02006486',
        '8QJ' => 'E02006486',
        '8QL' => 'E02006486',
        '8QN' => 'E02006487',
        '8QP' => 'E02006487',
        '8QQ' => 'E02006486',
        '8QR' => 'E02006487',
        '8QS' => 'E02006487',
        '8QT' => 'E02006487',
        '8QU' => 'E02006487',
        '8QW' => 'E02006487',
        '8QX' => 'E02006486',
        '8QY' => 'E02006486',
        '8QZ' => 'E02006486',
        '8RA' => 'E02006486',
        '8RB' => 'E02006486',
        '8RD' => 'E02006486',
        '8RE' => 'E02006487',
        '8RF' => 'E02006487',
        '8RG' => 'E02006487',
        '8RH' => 'E02006487',
        '8RJ' => 'E02006487',
        '8RL' => 'E02006487',
        '8RN' => 'E02006487',
        '8RP' => 'E02006487',
        '8RQ' => 'E02006487',
        '8RR' => 'E02006487',
        '8RS' => 'E02006487',
        '8RT' => 'E02006487',
        '8RU' => 'E02006487',
        '8RW' => 'E02006487',
        '8RX' => 'E02006487',
        '8RY' => 'E02006487',
        '8RZ' => 'E02006487',
        '8SA' => 'E02006487',
        '8SB' => 'E02006487',
        '8SD' => 'E02006487',
        '8SE' => 'E02006487',
        '8SF' => 'E02006487',
        '8SG' => 'E02006487',
        '8SH' => 'E02006487',
        '8SJ' => 'E02006487',
        '8SL' => 'E02006487',
        '8SN' => 'E02006487',
        '8SP' => 'E02006487',
        '8SQ' => 'E02006487',
        '8SS' => 'E02006487',
        '8ST' => 'E02006487',
        '8SU' => 'E02006487',
        '8SW' => 'E02006487',
        '8SX' => 'E02006487',
        '8SY' => 'E02006487',
        '8TA' => 'E02006486',
        '8TB' => 'E02006486',
        '8TD' => 'E02006486',
        '8TE' => 'E02006486',
        '8TF' => 'E02006486',
        '8TH' => 'E02006486',
        '8TJ' => 'E02006486',
        '8TL' => 'E02006486',
        '8TN' => 'E02006486',
        '8TP' => 'E02006487',
        '8TQ' => 'E02006486',
        '8TR' => 'E02006486',
        '8TS' => 'E02006486',
        '8TT' => 'E02006487',
        '8TU' => 'E02006486',
        '8TX' => 'E02006486',
        '8TY' => 'E02006486',
        '8UA' => 'E02006486',
        '8UB' => 'E02006486',
        '8UD' => 'E02006486',
        '8UE' => 'E02006487',
        '8UH' => 'E02006486',
        '8WG' => 'E02006487',
        '8WQ' => 'E02006487',
        '8WW' => 'E02006487',
        '8WX' => 'E02006487',
        '8WY' => 'E02006487',
        '8XQ' => 'E02006487',
        '8XS' => 'E02006486',
        '8YA' => 'E02006487',
        '8YB' => 'E02001988',
        '8YD' => 'E02001988',
        '8YE' => 'E02001988',
        '8YF' => 'E02001988',
        '8YG' => 'E02006487',
        '8YH' => 'E02006487',
        '8YJ' => 'E02006486',
        '8YL' => 'E02006487',
        '8YN' => 'E02006486',
        '8YP' => 'E02006487',
        '8YQ' => 'E02001988',
        '8YR' => 'E02001988',
        '8YS' => 'E02001958',
        '8YT' => 'E02006487',
        '8YU' => 'E02001988',
        '8YW' => 'E02006487',
        '8YX' => 'E02006487',
        '8YY' => 'E02006487',
        '8YZ' => 'E02006486',
        '8ZA' => 'E02006487',
        '8ZB' => 'E02006486',
        '8ZD' => 'E02006487',
        '8ZE' => 'E02006487',
        '8ZF' => 'E02001988',
        '8ZL' => 'E02006487',
        '8ZP' => 'E02001988',
        '8ZQ' => 'E02001988',
        '8ZR' => 'E02006487',
        '8ZS' => 'E02006487',
        '8ZT' => 'E02006486',
        '8ZU' => 'E02006487',
        '8ZW' => 'E02006487',
        '8ZX' => 'E02006487',
        '8ZY' => 'E02006487',
        '8ZZ' => 'E02006487',
        '9AA' => 'E02006487',
        '9AB' => 'E02006487',
        '9AD' => 'E02006487',
        '9AE' => 'E02006487',
        '9AF' => 'E02006487',
        '9AG' => 'E02006487',
        '9AH' => 'E02006487',
        '9AJ' => 'E02006487',
        '9AL' => 'E02006487',
        '9AN' => 'E02006487',
        '9AP' => 'E02006487',
        '9AQ' => 'E02006487',
        '9AR' => 'E02006487',
        '9AS' => 'E02006489',
        '9AT' => 'E02006487',
        '9AU' => 'E02006489',
        '9AW' => 'E02006487',
        '9AX' => 'E02006489',
        '9AY' => 'E02006487',
        '9AZ' => 'E02006488',
        '9BG' => 'E02006487',
        '9BH' => 'E02006487',
        '9BJ' => 'E02006487',
        '9BL' => 'E02006487',
        '9BN' => 'E02006487',
        '9BP' => 'E02006487',
        '9BQ' => 'E02006487',
        '9BS' => 'E02006487',
        '9BT' => 'E02006487',
        '9BU' => 'E02006487',
        '9BW' => 'E02006487',
        '9BX' => 'E02006487',
        '9BY' => 'E02006489',
        '9BZ' => 'E02006489',
        '9DA' => 'E02006489',
        '9DB' => 'E02006489',
        '9DD' => 'E02006489',
        '9DG' => 'E02006489',
        '9DH' => 'E02006489',
        '9DJ' => 'E02006489',
        '9DL' => 'E02006489',
        '9DN' => 'E02006489',
        '9DP' => 'E02006489',
        '9DQ' => 'E02006489',
        '9DR' => 'E02006489',
        '9DS' => 'E02006489',
        '9DT' => 'E02006489',
        '9DU' => 'E02006489',
        '9DW' => 'E02006489',
        '9DX' => 'E02006489',
        '9DY' => 'E02006489',
        '9DZ' => 'E02006489',
        '9EA' => 'E02006489',
        '9EB' => 'E02006489',
        '9ED' => 'E02006489',
        '9EE' => 'E02006489',
        '9EF' => 'E02006489',
        '9EG' => 'E02006489',
        '9EH' => 'E02006489',
        '9EJ' => 'E02006489',
        '9EL' => 'E02006489',
        '9EN' => 'E02006489',
        '9EP' => 'E02006489',
        '9EQ' => 'E02006489',
        '9ER' => 'E02006489',
        '9ES' => 'E02006489',
        '9ET' => 'E02006489',
        '9EU' => 'E02006489',
        '9EW' => 'E02006489',
        '9EX' => 'E02006489',
        '9EY' => 'E02006489',
        '9EZ' => 'E02006489',
        '9HA' => 'E02006489',
        '9HB' => 'E02006489',
        '9HD' => 'E02006489',
        '9HE' => 'E02006489',
        '9HF' => 'E02006489',
        '9HG' => 'E02006489',
        '9HH' => 'E02006489',
        '9HJ' => 'E02006488',
        '9HL' => 'E02006489',
        '9HN' => 'E02006489',
        '9HP' => 'E02006489',
        '9HQ' => 'E02006489',
        '9HR' => 'E02006489',
        '9HS' => 'E02006489',
        '9HT' => 'E02006487',
        '9HW' => 'E02006489',
        '9JA' => 'E02006488',
        '9JB' => 'E02006488',
        '9JD' => 'E02006488',
        '9JE' => 'E02006488',
        '9JF' => 'E02006488',
        '9JG' => 'E02006488',
        '9JH' => 'E02006488',
        '9JJ' => 'E02006488',
        '9JL' => 'E02006488',
        '9JN' => 'E02006488',
        '9JP' => 'E02006488',
        '9JQ' => 'E02006488',
        '9JR' => 'E02006488',
        '9JS' => 'E02006488',
        '9JT' => 'E02006488',
        '9JU' => 'E02006488',
        '9JW' => 'E02006492',
        '9JX' => 'E02006492',
        '9JY' => 'E02006488',
        '9JZ' => 'E02006488',
        '9LA' => 'E02006488',
        '9LB' => 'E02006488',
        '9LD' => 'E02006488',
        '9LG' => 'E02006488',
        '9LH' => 'E02006488',
        '9LJ' => 'E02006488',
        '9LL' => 'E02006488',
        '9LN' => 'E02006488',
        '9LP' => 'E02006488',
        '9LQ' => 'E02006488',
        '9LR' => 'E02006488',
        '9LS' => 'E02006488',
        '9LT' => 'E02006488',
        '9LU' => 'E02006488',
        '9LW' => 'E02006488',
        '9LX' => 'E02006488',
        '9LY' => 'E02006488',
        '9LZ' => 'E02006488',
        '9NA' => 'E02006488',
        '9NB' => 'E02006488',
        '9ND' => 'E02006488',
        '9NE' => 'E02006488',
        '9NF' => 'E02006488',
        '9NG' => 'E02006488',
        '9NH' => 'E02006488',
        '9NJ' => 'E02006488',
        '9NL' => 'E02006488',
        '9NN' => 'E02006488',
        '9NP' => 'E02006488',
        '9NQ' => 'E02006488',
        '9NR' => 'E02006488',
        '9NS' => 'E02006488',
        '9NT' => 'E02006488',
        '9NU' => 'E02006488',
        '9NW' => 'E02006488',
        '9NX' => 'E02006488',
        '9NZ' => 'E02006489',
        '9PA' => 'E02006488',
        '9PB' => 'E02006488',
        '9PD' => 'E02006488',
        '9PE' => 'E02006488',
        '9PF' => 'E02006488',
        '9PG' => 'E02006488',
        '9PH' => 'E02006488',
        '9PJ' => 'E02006488',
        '9PL' => 'E02006488',
        '9PN' => 'E02006488',
        '9PP' => 'E02006488',
        '9PQ' => 'E02006488',
        '9PR' => 'E02006488',
        '9PS' => 'E02006488',
        '9PT' => 'E02006488',
        '9PU' => 'E02006488',
        '9PW' => 'E02006488',
        '9PX' => 'E02006488',
        '9PY' => 'E02006488',
        '9PZ' => 'E02006488',
        '9QA' => 'E02006488',
        '9QB' => 'E02006488',
        '9QD' => 'E02006488',
        '9QE' => 'E02006488',
        '9QF' => 'E02006488',
        '9QG' => 'E02006488',
        '9QH' => 'E02006488',
        '9QJ' => 'E02006488',
        '9QL' => 'E02006488',
        '9QN' => 'E02006488',
        '9QP' => 'E02006488',
        '9QQ' => 'E02006488',
        '9QR' => 'E02006488',
        '9QS' => 'E02006488',
        '9QT' => 'E02006488',
        '9QU' => 'E02006488',
        '9QW' => 'E02006488',
        '9QX' => 'E02006488',
        '9QY' => 'E02006488',
        '9QZ' => 'E02006488',
        '9RA' => 'E02006488',
        '9RB' => 'E02006488',
        '9RD' => 'E02006488',
        '9RE' => 'E02006488',
        '9RF' => 'E02006488',
        '9RG' => 'E02006488',
        '9RH' => 'E02006488',
        '9RJ' => 'E02006488',
        '9RL' => 'E02006488',
        '9RP' => 'E02006488',
        '9RQ' => 'E02006488',
        '9RR' => 'E02006488',
        '9RS' => 'E02006488',
        '9RT' => 'E02006488',
        '9RU' => 'E02006488',
        '9RX' => 'E02006488',
        '9RY' => 'E02006488',
        '9RZ' => 'E02006488',
        '9SA' => 'E02006488',
        '9SB' => 'E02006488',
        '9SD' => 'E02006488',
        '9SE' => 'E02006488',
        '9SF' => 'E02006488',
        '9SG' => 'E02006488',
        '9SH' => 'E02006487',
        '9SJ' => 'E02006487',
        '9SL' => 'E02006488',
        '9SN' => 'E02006488',
        '9SP' => 'E02006488',
        '9SR' => 'E02006488',
        '9SS' => 'E02006489',
        '9ST' => 'E02006489',
        '9SU' => 'E02006488',
        '9SX' => 'E02006488',
        '9WY' => 'E02006487',
        '9YA' => 'E02006487',
        '9YD' => 'E02001988',
        '9YR' => 'E02001988',
        '9YS' => 'E02006487',
        '9YT' => 'E02006488',
        '9YU' => 'E02001988',
        '9YX' => 'E02006487',
        '9YZ' => 'E02001988',
        '9ZA' => 'E02001988',
        '9ZB' => 'E02006487',
        '9ZD' => 'E02006488',
        '9ZE' => 'E02006487',
        '9ZF' => 'E02006487',
        '9ZG' => 'E02006487',
        '9ZH' => 'E02001988',
        '9ZJ' => 'E02006487',
        '9ZL' => 'E02006487',
        '9ZP' => 'E02001988',
        '9ZQ' => 'E02006487',
        '9ZR' => 'E02006487',
        '9ZS' => 'E02006487',
        '9ZT' => 'E02006487',
        '9ZU' => 'E02001988',
        '9ZW' => 'E02006487',
        '9ZX' => 'E02001988',
        '9ZY' => 'E02001988',
        '9ZZ' => 'E02006488',
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
