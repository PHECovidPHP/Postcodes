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
final class IP3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006260',
        '0AB' => 'E02006255',
        '0AD' => 'E02006255',
        '0AE' => 'E02006255',
        '0AF' => 'E02006255',
        '0AG' => 'E02006251',
        '0AH' => 'E02006255',
        '0AJ' => 'E02006255',
        '0AL' => 'E02006255',
        '0AN' => 'E02006255',
        '0AP' => 'E02006255',
        '0AQ' => 'E02006255',
        '0AR' => 'E02006255',
        '0AS' => 'E02006255',
        '0AT' => 'E02006255',
        '0AU' => 'E02006255',
        '0AW' => 'E02006255',
        '0AX' => 'E02006255',
        '0AY' => 'E02006255',
        '0AZ' => 'E02006255',
        '0BA' => 'E02006255',
        '0BB' => 'E02006255',
        '0BD' => 'E02006255',
        '0BE' => 'E02006255',
        '0BF' => 'E02006255',
        '0BG' => 'E02006260',
        '0BH' => 'E02006255',
        '0BJ' => 'E02006255',
        '0BL' => 'E02006255',
        '0BN' => 'E02006255',
        '0BP' => 'E02006255',
        '0BQ' => 'E02006251',
        '0BS' => 'E02006260',
        '0BT' => 'E02006255',
        '0BU' => 'E02006255',
        '0BW' => 'E02006255',
        '0BX' => 'E02006255',
        '0BY' => 'E02006255',
        '0BZ' => 'E02006260',
        '0DA' => 'E02006255',
        '0DB' => 'E02006255',
        '0DD' => 'E02006255',
        '0DE' => 'E02006260',
        '0DF' => 'E02006260',
        '0DG' => 'E02006255',
        '0DH' => 'E02006260',
        '0DJ' => 'E02006255',
        '0DL' => 'E02006255',
        '0DN' => 'E02006255',
        '0DP' => 'E02006255',
        '0DQ' => 'E02006255',
        '0DR' => 'E02006255',
        '0DS' => 'E02006255',
        '0DT' => 'E02006255',
        '0DU' => 'E02006260',
        '0DW' => 'E02006255',
        '0DX' => 'E02006255',
        '0DY' => 'E02006255',
        '0DZ' => 'E02006255',
        '0EA' => 'E02006255',
        '0EB' => 'E02006260',
        '0ED' => 'E02006255',
        '0EE' => 'E02006260',
        '0EF' => 'E02006260',
        '0EG' => 'E02006260',
        '0EH' => 'E02006260',
        '0EJ' => 'E02006260',
        '0EL' => 'E02006260',
        '0EN' => 'E02006260',
        '0EP' => 'E02006260',
        '0EQ' => 'E02006260',
        '0ER' => 'E02006260',
        '0ES' => 'E02006260',
        '0ET' => 'E02006260',
        '0EU' => 'E02006260',
        '0EW' => 'E02006260',
        '0EX' => 'E02006260',
        '0EY' => 'E02006260',
        '0EZ' => 'E02006260',
        '0FA' => 'E02006255',
        '0FB' => 'E02006255',
        '0FD' => 'E02006255',
        '0FE' => 'E02006255',
        '0FF' => 'E02006255',
        '0FG' => 'E02006255',
        '0FH' => 'E02006255',
        '0FJ' => 'E02006255',
        '0FL' => 'E02006255',
        '0FN' => 'E02006255',
        '0FP' => 'E02006255',
        '0FR' => 'E02006255',
        '0FS' => 'E02006255',
        '0HA' => 'E02006260',
        '0HB' => 'E02006260',
        '0HD' => 'E02006260',
        '0HE' => 'E02006260',
        '0HF' => 'E02006260',
        '0HG' => 'E02006260',
        '0HH' => 'E02006260',
        '0HJ' => 'E02006260',
        '0HL' => 'E02006260',
        '0HN' => 'E02006260',
        '0HP' => 'E02006260',
        '0HQ' => 'E02006260',
        '0HR' => 'E02006260',
        '0HS' => 'E02006260',
        '0HT' => 'E02006260',
        '0HU' => 'E02006260',
        '0HW' => 'E02006260',
        '0HX' => 'E02006260',
        '0HY' => 'E02006260',
        '0HZ' => 'E02006260',
        '0JA' => 'E02006260',
        '0JB' => 'E02006260',
        '0JD' => 'E02006260',
        '0JE' => 'E02006260',
        '0JF' => 'E02006260',
        '0JG' => 'E02006260',
        '0JH' => 'E02006260',
        '0JJ' => 'E02006260',
        '0JL' => 'E02006260',
        '0JN' => 'E02006260',
        '0JP' => 'E02006260',
        '0JQ' => 'E02006260',
        '0JR' => 'E02006260',
        '0JS' => 'E02006260',
        '0JT' => 'E02006260',
        '0JU' => 'E02006260',
        '0JW' => 'E02006260',
        '0JX' => 'E02006260',
        '0JY' => 'E02006260',
        '0JZ' => 'E02006260',
        '0LA' => 'E02006260',
        '0LB' => 'E02006260',
        '0LD' => 'E02006260',
        '0LE' => 'E02006260',
        '0LF' => 'E02006260',
        '0LG' => 'E02006260',
        '0LH' => 'E02006260',
        '0LJ' => 'E02006260',
        '0LL' => 'E02006260',
        '0LN' => 'E02006260',
        '0LP' => 'E02006260',
        '0LQ' => 'E02006260',
        '0LR' => 'E02006260',
        '0LS' => 'E02006260',
        '0LT' => 'E02006260',
        '0LU' => 'E02006260',
        '0LW' => 'E02006260',
        '0LX' => 'E02006260',
        '0LY' => 'E02006260',
        '0LZ' => 'E02006260',
        '0NA' => 'E02006260',
        '0NB' => 'E02006251',
        '0ND' => 'E02006255',
        '0NE' => 'E02006255',
        '0NF' => 'E02006255',
        '0NG' => 'E02006255',
        '0NH' => 'E02006255',
        '0NJ' => 'E02006255',
        '0NL' => 'E02006260',
        '0NN' => 'E02006255',
        '0NP' => 'E02006255',
        '0NQ' => 'E02006255',
        '0NR' => 'E02006255',
        '0NS' => 'E02006255',
        '0NT' => 'E02006255',
        '0NU' => 'E02006255',
        '0NW' => 'E02006255',
        '0NX' => 'E02006255',
        '0NY' => 'E02006251',
        '0NZ' => 'E02006251',
        '0PA' => 'E02006255',
        '0PB' => 'E02006255',
        '0PD' => 'E02006255',
        '0PE' => 'E02006255',
        '0PF' => 'E02006255',
        '0PG' => 'E02006255',
        '0PH' => 'E02006255',
        '0PJ' => 'E02006255',
        '0PL' => 'E02006255',
        '0PN' => 'E02006251',
        '0PP' => 'E02006251',
        '0PQ' => 'E02006255',
        '0PR' => 'E02006251',
        '0PS' => 'E02006255',
        '0PT' => 'E02006255',
        '0PU' => 'E02006255',
        '0PW' => 'E02006260',
        '0PX' => 'E02006255',
        '0PY' => 'E02006255',
        '0PZ' => 'E02006255',
        '0QA' => 'E02006255',
        '0QB' => 'E02006255',
        '0QD' => 'E02006255',
        '0QE' => 'E02006255',
        '0QF' => 'E02006255',
        '0QG' => 'E02006255',
        '0QH' => 'E02006255',
        '0QJ' => 'E02006255',
        '0QL' => 'E02006255',
        '0QN' => 'E02006255',
        '0QP' => 'E02006255',
        '0QQ' => 'E02006255',
        '0QR' => 'E02006255',
        '0QU' => 'E02006255',
        '0QW' => 'E02006255',
        '0QX' => 'E02006251',
        '0QY' => 'E02006251',
        '0QZ' => 'E02006260',
        '0RA' => 'E02006255',
        '0RB' => 'E02006255',
        '0RD' => 'E02006255',
        '0RE' => 'E02006255',
        '0RF' => 'E02006260',
        '0RG' => 'E02006260',
        '0RH' => 'E02006260',
        '0RJ' => 'E02006260',
        '0RL' => 'E02006260',
        '0RN' => 'E02006260',
        '0RP' => 'E02006260',
        '0RQ' => 'E02006260',
        '0RR' => 'E02006260',
        '0RS' => 'E02006260',
        '0RT' => 'E02006260',
        '0RU' => 'E02006260',
        '0RW' => 'E02006260',
        '0RX' => 'E02006260',
        '0RY' => 'E02006260',
        '0RZ' => 'E02006260',
        '0SA' => 'E02006260',
        '0SB' => 'E02006260',
        '0SD' => 'E02006260',
        '0SE' => 'E02006260',
        '0SF' => 'E02006260',
        '0SG' => 'E02006260',
        '0SH' => 'E02006260',
        '0SJ' => 'E02006260',
        '0SL' => 'E02006260',
        '0SN' => 'E02006260',
        '0SP' => 'E02006258',
        '0SQ' => 'E02006260',
        '0SR' => 'E02006260',
        '0SS' => 'E02006255',
        '0SW' => 'E02006260',
        '0WB' => 'E02006251',
        '0WP' => 'E02006260',
        '0WQ' => 'E02006260',
        '0WX' => 'E02006251',
        '0WY' => 'E02006251',
        '0WZ' => 'E02006251',
        '0YT' => 'E02006251',
        '8AA' => 'E02006255',
        '8AB' => 'E02006255',
        '8AD' => 'E02006255',
        '8AE' => 'E02006251',
        '8AF' => 'E02006255',
        '8AG' => 'E02006255',
        '8AH' => 'E02006251',
        '8AJ' => 'E02006255',
        '8AL' => 'E02006255',
        '8AN' => 'E02006255',
        '8AP' => 'E02006251',
        '8AQ' => 'E02006255',
        '8AR' => 'E02006255',
        '8AS' => 'E02006255',
        '8AT' => 'E02006255',
        '8AU' => 'E02006255',
        '8AW' => 'E02006251',
        '8AX' => 'E02006255',
        '8AY' => 'E02006255',
        '8AZ' => 'E02006255',
        '8BA' => 'E02006255',
        '8BB' => 'E02006255',
        '8BD' => 'E02006255',
        '8BE' => 'E02006255',
        '8BF' => 'E02006255',
        '8BG' => 'E02006255',
        '8BH' => 'E02006255',
        '8BJ' => 'E02006255',
        '8BL' => 'E02006251',
        '8BN' => 'E02006252',
        '8BP' => 'E02006255',
        '8BQ' => 'E02006255',
        '8BS' => 'E02006255',
        '8BT' => 'E02006255',
        '8BU' => 'E02006255',
        '8BW' => 'E02006253',
        '8BX' => 'E02006255',
        '8BY' => 'E02006255',
        '8BZ' => 'E02006255',
        '8DA' => 'E02006255',
        '8DB' => 'E02006255',
        '8DD' => 'E02006255',
        '8DE' => 'E02006252',
        '8DF' => 'E02006252',
        '8DH' => 'E02006255',
        '8DJ' => 'E02006255',
        '8DL' => 'E02006255',
        '8DN' => 'E02006255',
        '8DP' => 'E02006255',
        '8DQ' => 'E02006255',
        '8DR' => 'E02006251',
        '8DS' => 'E02006255',
        '8DT' => 'E02006255',
        '8DU' => 'E02006255',
        '8DW' => 'E02006252',
        '8DX' => 'E02006255',
        '8DY' => 'E02006255',
        '8DZ' => 'E02006255',
        '8EA' => 'E02006255',
        '8EB' => 'E02006255',
        '8ED' => 'E02006258',
        '8EE' => 'E02006255',
        '8EF' => 'E02006255',
        '8EG' => 'E02006255',
        '8EH' => 'E02006255',
        '8EJ' => 'E02006255',
        '8EL' => 'E02006255',
        '8EN' => 'E02006255',
        '8EP' => 'E02006255',
        '8EQ' => 'E02006255',
        '8ER' => 'E02006255',
        '8ES' => 'E02006255',
        '8ET' => 'E02006255',
        '8EU' => 'E02006255',
        '8EW' => 'E02006255',
        '8EX' => 'E02006255',
        '8EY' => 'E02006255',
        '8EZ' => 'E02006255',
        '8GA' => 'E02006297',
        '8GB' => 'E02006297',
        '8GD' => 'E02006297',
        '8GE' => 'E02006297',
        '8GF' => 'E02006252',
        '8GG' => 'E02006252',
        '8GH' => 'E02006252',
        '8GJ' => 'E02006252',
        '8GL' => 'E02006252',
        '8GN' => 'E02006252',
        '8GP' => 'E02006252',
        '8GQ' => 'E02006252',
        '8GZ' => 'E02006253',
        '8HA' => 'E02006255',
        '8HB' => 'E02006255',
        '8HD' => 'E02006255',
        '8HE' => 'E02006255',
        '8HF' => 'E02006255',
        '8HG' => 'E02006255',
        '8HH' => 'E02006251',
        '8HJ' => 'E02006251',
        '8HL' => 'E02006255',
        '8HN' => 'E02006255',
        '8HP' => 'E02006255',
        '8HQ' => 'E02006255',
        '8HR' => 'E02006255',
        '8HS' => 'E02006255',
        '8HT' => 'E02006252',
        '8HU' => 'E02006252',
        '8HW' => 'E02006255',
        '8HX' => 'E02006252',
        '8HY' => 'E02006252',
        '8HZ' => 'E02006252',
        '8JA' => 'E02006252',
        '8JB' => 'E02006252',
        '8JD' => 'E02006252',
        '8JE' => 'E02006252',
        '8JF' => 'E02006252',
        '8JG' => 'E02006252',
        '8JH' => 'E02006252',
        '8JJ' => 'E02006252',
        '8JL' => 'E02006252',
        '8JN' => 'E02006252',
        '8JP' => 'E02006252',
        '8JQ' => 'E02006252',
        '8JR' => 'E02006252',
        '8JS' => 'E02006252',
        '8JT' => 'E02006252',
        '8JU' => 'E02006251',
        '8JW' => 'E02006252',
        '8JX' => 'E02006251',
        '8JY' => 'E02006251',
        '8JZ' => 'E02006251',
        '8LA' => 'E02006251',
        '8LB' => 'E02006251',
        '8LD' => 'E02006251',
        '8LE' => 'E02006251',
        '8LF' => 'E02006251',
        '8LG' => 'E02006252',
        '8LH' => 'E02006252',
        '8LJ' => 'E02006252',
        '8LL' => 'E02006252',
        '8LN' => 'E02006252',
        '8LP' => 'E02006252',
        '8LQ' => 'E02006252',
        '8LR' => 'E02006253',
        '8LS' => 'E02006252',
        '8LT' => 'E02006253',
        '8LU' => 'E02006252',
        '8LW' => 'E02006252',
        '8LX' => 'E02006253',
        '8LY' => 'E02006253',
        '8LZ' => 'E02006253',
        '8NA' => 'E02006253',
        '8NB' => 'E02006253',
        '8ND' => 'E02006253',
        '8NE' => 'E02006253',
        '8NF' => 'E02006297',
        '8NG' => 'E02006253',
        '8NH' => 'E02006253',
        '8NJ' => 'E02006252',
        '8NL' => 'E02006253',
        '8NN' => 'E02006253',
        '8NP' => 'E02006253',
        '8NQ' => 'E02006297',
        '8NR' => 'E02006253',
        '8NS' => 'E02006253',
        '8NT' => 'E02006253',
        '8NU' => 'E02006253',
        '8NW' => 'E02006253',
        '8NX' => 'E02006253',
        '8NY' => 'E02006253',
        '8NZ' => 'E02006253',
        '8PA' => 'E02006253',
        '8PB' => 'E02006253',
        '8PD' => 'E02006253',
        '8PE' => 'E02006253',
        '8PF' => 'E02006253',
        '8PG' => 'E02006253',
        '8PH' => 'E02006253',
        '8PJ' => 'E02006253',
        '8PL' => 'E02006253',
        '8PN' => 'E02006253',
        '8PP' => 'E02006251',
        '8PQ' => 'E02006253',
        '8PR' => 'E02006253',
        '8PS' => 'E02006258',
        '8PT' => 'E02006253',
        '8PU' => 'E02006253',
        '8PW' => 'E02006253',
        '8PX' => 'E02006253',
        '8PY' => 'E02006253',
        '8PZ' => 'E02006253',
        '8QA' => 'E02006253',
        '8QB' => 'E02006253',
        '8QD' => 'E02006253',
        '8QE' => 'E02006253',
        '8QF' => 'E02006297',
        '8QG' => 'E02006297',
        '8QH' => 'E02006297',
        '8QJ' => 'E02006253',
        '8QL' => 'E02006253',
        '8QN' => 'E02006253',
        '8QP' => 'E02006253',
        '8QQ' => 'E02006297',
        '8QR' => 'E02006253',
        '8QS' => 'E02006253',
        '8QT' => 'E02006253',
        '8QU' => 'E02006253',
        '8QW' => 'E02006253',
        '8QX' => 'E02006253',
        '8QY' => 'E02006253',
        '8QZ' => 'E02006253',
        '8RA' => 'E02006297',
        '8RB' => 'E02006297',
        '8RD' => 'E02006297',
        '8RE' => 'E02006297',
        '8RF' => 'E02006297',
        '8RG' => 'E02006253',
        '8RH' => 'E02006253',
        '8RJ' => 'E02006253',
        '8RL' => 'E02006253',
        '8RN' => 'E02006253',
        '8RP' => 'E02006253',
        '8RQ' => 'E02006253',
        '8RR' => 'E02006253',
        '8RS' => 'E02006253',
        '8RT' => 'E02006297',
        '8RU' => 'E02006297',
        '8RW' => 'E02006253',
        '8RX' => 'E02006297',
        '8RY' => 'E02006297',
        '8RZ' => 'E02006297',
        '8SA' => 'E02006297',
        '8SB' => 'E02006297',
        '8SD' => 'E02006297',
        '8SE' => 'E02006297',
        '8SF' => 'E02006253',
        '8SG' => 'E02006253',
        '8SH' => 'E02006251',
        '8SJ' => 'E02006253',
        '8SL' => 'E02006253',
        '8SN' => 'E02006297',
        '8SP' => 'E02006297',
        '8SQ' => 'E02006253',
        '8SR' => 'E02006297',
        '8SS' => 'E02006297',
        '8ST' => 'E02006297',
        '8SU' => 'E02006253',
        '8SW' => 'E02006297',
        '8SX' => 'E02006253',
        '8SY' => 'E02006253',
        '8SZ' => 'E02006253',
        '8TA' => 'E02006253',
        '8TB' => 'E02006297',
        '8TD' => 'E02006253',
        '8TE' => 'E02006253',
        '8TF' => 'E02006297',
        '8TG' => 'E02006252',
        '8TH' => 'E02006253',
        '8TJ' => 'E02006253',
        '8TL' => 'E02006253',
        '8TN' => 'E02006253',
        '8TP' => 'E02006297',
        '8TQ' => 'E02006297',
        '8TR' => 'E02006297',
        '8TS' => 'E02006297',
        '8TT' => 'E02006297',
        '8TU' => 'E02006297',
        '8TW' => 'E02006297',
        '8TX' => 'E02006297',
        '8TY' => 'E02006297',
        '8TZ' => 'E02006297',
        '8UA' => 'E02006297',
        '8UB' => 'E02006297',
        '8UD' => 'E02006297',
        '8UE' => 'E02006297',
        '8UF' => 'E02006297',
        '8UG' => 'E02006297',
        '8UH' => 'E02006297',
        '8UJ' => 'E02006297',
        '8UL' => 'E02006297',
        '8UN' => 'E02006297',
        '8UP' => 'E02006252',
        '8UQ' => 'E02006297',
        '8UR' => 'E02006297',
        '8US' => 'E02006297',
        '8UT' => 'E02006297',
        '8UU' => 'E02006297',
        '8UW' => 'E02006297',
        '8UX' => 'E02006297',
        '8UY' => 'E02006297',
        '8UZ' => 'E02006297',
        '8WA' => 'E02006251',
        '8WB' => 'E02006251',
        '8WD' => 'E02006251',
        '8WE' => 'E02006251',
        '8WF' => 'E02006251',
        '8WG' => 'E02006251',
        '8WH' => 'E02006251',
        '8WJ' => 'E02006251',
        '8WL' => 'E02006251',
        '8WN' => 'E02006251',
        '8WP' => 'E02006251',
        '8WQ' => 'E02006251',
        '8WR' => 'E02006251',
        '8WS' => 'E02006251',
        '8WT' => 'E02006251',
        '8WU' => 'E02006251',
        '8WW' => 'E02006251',
        '8WX' => 'E02006258',
        '8WY' => 'E02006251',
        '8WZ' => 'E02006251',
        '8XA' => 'E02006251',
        '8XB' => 'E02006297',
        '8XD' => 'E02006297',
        '8XE' => 'E02006297',
        '8XF' => 'E02006251',
        '8XG' => 'E02006251',
        '8XH' => 'E02006252',
        '8XJ' => 'E02006252',
        '8XL' => 'E02006252',
        '8XN' => 'E02006252',
        '8XP' => 'E02006252',
        '8XQ' => 'E02006252',
        '8XR' => 'E02006252',
        '8XS' => 'E02006252',
        '8XT' => 'E02006252',
        '8XW' => 'E02006251',
        '8XX' => 'E02006251',
        '8XZ' => 'E02006258',
        '8YE' => 'E02006251',
        '8ZQ' => 'E02006251',
        '8ZR' => 'E02006297',
        '8ZU' => 'E02006297',
        '8ZX' => 'E02006251',
        '9AA' => 'E02006258',
        '9AB' => 'E02006258',
        '9AD' => 'E02006258',
        '9AE' => 'E02006258',
        '9AF' => 'E02006258',
        '9AG' => 'E02006258',
        '9AH' => 'E02006258',
        '9AJ' => 'E02006258',
        '9AL' => 'E02006258',
        '9AN' => 'E02006258',
        '9AP' => 'E02006258',
        '9AQ' => 'E02006258',
        '9AR' => 'E02006258',
        '9AS' => 'E02006258',
        '9AT' => 'E02006258',
        '9AU' => 'E02006258',
        '9AW' => 'E02006258',
        '9AX' => 'E02006258',
        '9AY' => 'E02006258',
        '9AZ' => 'E02006258',
        '9BA' => 'E02006258',
        '9BB' => 'E02006258',
        '9BD' => 'E02006258',
        '9BE' => 'E02006258',
        '9BF' => 'E02006258',
        '9BG' => 'E02006258',
        '9BH' => 'E02006258',
        '9BJ' => 'E02006255',
        '9BL' => 'E02006258',
        '9BN' => 'E02006258',
        '9BP' => 'E02006258',
        '9BQ' => 'E02006258',
        '9BS' => 'E02006258',
        '9BT' => 'E02006258',
        '9BU' => 'E02006258',
        '9BW' => 'E02006251',
        '9BX' => 'E02006258',
        '9BY' => 'E02006258',
        '9BZ' => 'E02006258',
        '9DA' => 'E02006258',
        '9DB' => 'E02006258',
        '9DD' => 'E02006258',
        '9DE' => 'E02006258',
        '9DF' => 'E02006258',
        '9DG' => 'E02006258',
        '9DH' => 'E02006258',
        '9DJ' => 'E02006258',
        '9DL' => 'E02006258',
        '9DN' => 'E02006258',
        '9DP' => 'E02006258',
        '9DQ' => 'E02006258',
        '9DR' => 'E02006258',
        '9DS' => 'E02006258',
        '9DT' => 'E02006258',
        '9DU' => 'E02006258',
        '9DW' => 'E02006258',
        '9DX' => 'E02006258',
        '9DY' => 'E02006258',
        '9DZ' => 'E02006258',
        '9EA' => 'E02006258',
        '9EB' => 'E02006258',
        '9ED' => 'E02006258',
        '9EE' => 'E02006258',
        '9EF' => 'E02006258',
        '9EG' => 'E02006258',
        '9EH' => 'E02006260',
        '9EJ' => 'E02006251',
        '9EL' => 'E02006258',
        '9EN' => 'E02006258',
        '9EP' => 'E02006258',
        '9EQ' => 'E02006258',
        '9ER' => 'E02006258',
        '9ES' => 'E02006258',
        '9ET' => 'E02006258',
        '9EU' => 'E02006258',
        '9EW' => 'E02006258',
        '9EX' => 'E02006258',
        '9EY' => 'E02006258',
        '9EZ' => 'E02006258',
        '9FA' => 'E02006258',
        '9FD' => 'E02006258',
        '9FE' => 'E02006258',
        '9FF' => 'E02006258',
        '9FG' => 'E02006258',
        '9FH' => 'E02006258',
        '9FJ' => 'E02006258',
        '9FL' => 'E02006258',
        '9GA' => 'E02006258',
        '9GB' => 'E02006258',
        '9GD' => 'E02006258',
        '9GE' => 'E02006258',
        '9GF' => 'E02006258',
        '9GG' => 'E02006258',
        '9GH' => 'E02006258',
        '9GJ' => 'E02006258',
        '9GL' => 'E02006258',
        '9GN' => 'E02006258',
        '9GP' => 'E02006258',
        '9GQ' => 'E02006258',
        '9GR' => 'E02006258',
        '9GS' => 'E02006258',
        '9GT' => 'E02006258',
        '9GU' => 'E02006258',
        '9GW' => 'E02006258',
        '9GX' => 'E02006258',
        '9GY' => 'E02006258',
        '9HA' => 'E02006258',
        '9HB' => 'E02006258',
        '9HD' => 'E02006258',
        '9HE' => 'E02006258',
        '9HF' => 'E02006258',
        '9HG' => 'E02006258',
        '9HH' => 'E02006258',
        '9HJ' => 'E02006258',
        '9HL' => 'E02006258',
        '9HN' => 'E02006258',
        '9HP' => 'E02006258',
        '9HQ' => 'E02006258',
        '9HR' => 'E02006258',
        '9HS' => 'E02006258',
        '9HT' => 'E02006258',
        '9HU' => 'E02006258',
        '9HW' => 'E02006258',
        '9HX' => 'E02006258',
        '9HY' => 'E02006258',
        '9HZ' => 'E02006258',
        '9JA' => 'E02006258',
        '9JB' => 'E02006258',
        '9JD' => 'E02006258',
        '9JE' => 'E02006258',
        '9JF' => 'E02006258',
        '9JG' => 'E02006258',
        '9JH' => 'E02006260',
        '9JJ' => 'E02006260',
        '9JL' => 'E02006258',
        '9JN' => 'E02006260',
        '9JP' => 'E02006258',
        '9JQ' => 'E02006258',
        '9JR' => 'E02006260',
        '9JS' => 'E02006260',
        '9JT' => 'E02006260',
        '9JU' => 'E02006260',
        '9JW' => 'E02006258',
        '9JX' => 'E02006260',
        '9JY' => 'E02006260',
        '9JZ' => 'E02006260',
        '9LA' => 'E02006260',
        '9LB' => 'E02006260',
        '9LD' => 'E02006260',
        '9LE' => 'E02006260',
        '9LF' => 'E02006260',
        '9LG' => 'E02006260',
        '9LH' => 'E02006260',
        '9LJ' => 'E02006260',
        '9LL' => 'E02006260',
        '9LN' => 'E02006260',
        '9LP' => 'E02006258',
        '9LQ' => 'E02006260',
        '9LR' => 'E02006260',
        '9LS' => 'E02006260',
        '9LT' => 'E02006260',
        '9LU' => 'E02006260',
        '9LW' => 'E02006260',
        '9LX' => 'E02006260',
        '9LY' => 'E02006260',
        '9LZ' => 'E02006260',
        '9NA' => 'E02006260',
        '9NB' => 'E02006260',
        '9ND' => 'E02006260',
        '9NE' => 'E02006260',
        '9NF' => 'E02006260',
        '9NG' => 'E02006260',
        '9NH' => 'E02006260',
        '9NJ' => 'E02006260',
        '9NL' => 'E02006260',
        '9NN' => 'E02006260',
        '9NP' => 'E02006260',
        '9NQ' => 'E02006260',
        '9NR' => 'E02006260',
        '9NS' => 'E02006260',
        '9NT' => 'E02006260',
        '9NU' => 'E02006260',
        '9NW' => 'E02006260',
        '9NX' => 'E02006260',
        '9NY' => 'E02006260',
        '9NZ' => 'E02006260',
        '9PA' => 'E02006260',
        '9PB' => 'E02006260',
        '9PD' => 'E02006260',
        '9PE' => 'E02006260',
        '9PF' => 'E02006260',
        '9PG' => 'E02006260',
        '9PH' => 'E02006260',
        '9PJ' => 'E02006258',
        '9PL' => 'E02006258',
        '9PP' => 'E02006258',
        '9PQ' => 'E02006260',
        '9PR' => 'E02006258',
        '9PS' => 'E02006258',
        '9PT' => 'E02006258',
        '9PU' => 'E02006258',
        '9PX' => 'E02006258',
        '9PY' => 'E02006258',
        '9PZ' => 'E02006258',
        '9QA' => 'E02006258',
        '9QB' => 'E02006258',
        '9QD' => 'E02006258',
        '9QE' => 'E02006258',
        '9QF' => 'E02006258',
        '9QG' => 'E02006258',
        '9QH' => 'E02006258',
        '9QJ' => 'E02006258',
        '9QL' => 'E02006258',
        '9QN' => 'E02006258',
        '9QP' => 'E02006258',
        '9QQ' => 'E02006258',
        '9QR' => 'E02006258',
        '9QS' => 'E02006258',
        '9QT' => 'E02006258',
        '9QU' => 'E02006258',
        '9QW' => 'E02006251',
        '9QX' => 'E02006258',
        '9QY' => 'E02006258',
        '9QZ' => 'E02006258',
        '9RA' => 'E02006258',
        '9RB' => 'E02006258',
        '9RD' => 'E02006251',
        '9RE' => 'E02006258',
        '9RF' => 'E02006258',
        '9RG' => 'E02006258',
        '9RH' => 'E02006258',
        '9RJ' => 'E02006258',
        '9RL' => 'E02006258',
        '9RN' => 'E02006258',
        '9RP' => 'E02006258',
        '9RQ' => 'E02006258',
        '9RR' => 'E02006258',
        '9RS' => 'E02006251',
        '9RT' => 'E02006258',
        '9RU' => 'E02006258',
        '9RW' => 'E02006258',
        '9RX' => 'E02006258',
        '9RY' => 'E02006258',
        '9RZ' => 'E02006258',
        '9SA' => 'E02006251',
        '9SB' => 'E02006258',
        '9SD' => 'E02006251',
        '9SE' => 'E02006258',
        '9SF' => 'E02006258',
        '9SG' => 'E02006258',
        '9SH' => 'E02006258',
        '9SJ' => 'E02006258',
        '9SL' => 'E02006258',
        '9SN' => 'E02006258',
        '9SP' => 'E02006258',
        '9SQ' => 'E02006258',
        '9SR' => 'E02006258',
        '9SS' => 'E02006258',
        '9ST' => 'E02006258',
        '9SU' => 'E02006258',
        '9SW' => 'E02006258',
        '9SX' => 'E02006258',
        '9SY' => 'E02006258',
        '9SZ' => 'E02006258',
        '9TA' => 'E02006258',
        '9TB' => 'E02006251',
        '9TD' => 'E02006258',
        '9TE' => 'E02006258',
        '9TF' => 'E02006258',
        '9TG' => 'E02006258',
        '9TH' => 'E02006258',
        '9TJ' => 'E02006258',
        '9TL' => 'E02006258',
        '9TN' => 'E02006258',
        '9TP' => 'E02006258',
        '9TQ' => 'E02006258',
        '9TR' => 'E02006258',
        '9TS' => 'E02006258',
        '9TT' => 'E02006258',
        '9TU' => 'E02006258',
        '9TW' => 'E02006251',
        '9TX' => 'E02006251',
        '9TY' => 'E02006251',
        '9TZ' => 'E02006258',
        '9UA' => 'E02006258',
        '9UB' => 'E02006258',
        '9UD' => 'E02006258',
        '9UE' => 'E02006258',
        '9UF' => 'E02006258',
        '9UG' => 'E02006258',
        '9UH' => 'E02006258',
        '9UJ' => 'E02006258',
        '9UL' => 'E02006258',
        '9UN' => 'E02006258',
        '9UP' => 'E02006258',
        '9UQ' => 'E02006258',
        '9UR' => 'E02006258',
        '9US' => 'E02006258',
        '9UT' => 'E02006258',
        '9UU' => 'E02006258',
        '9UW' => 'E02006258',
        '9UX' => 'E02006258',
        '9UY' => 'E02006258',
        '9UZ' => 'E02006258',
        '9WA' => 'E02006251',
        '9WB' => 'E02006258',
        '9WD' => 'E02006258',
        '9WE' => 'E02006258',
        '9WF' => 'E02006258',
        '9WG' => 'E02006258',
        '9WH' => 'E02006258',
        '9WJ' => 'E02006258',
        '9WL' => 'E02006258',
        '9WN' => 'E02006258',
        '9WP' => 'E02006258',
        '9WQ' => 'E02006258',
        '9WR' => 'E02006258',
        '9WS' => 'E02006258',
        '9WY' => 'E02006258',
        '9WZ' => 'E02006258',
        '9YY' => 'E02006258',
        '9ZA' => 'E02006258',
        '9ZD' => 'E02006251',
        '9ZQ' => 'E02006251',
        '9ZR' => 'E02006251',
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
