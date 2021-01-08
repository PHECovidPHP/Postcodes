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
final class CB5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003739',
        '0AB' => 'E02003739',
        '0AD' => 'E02003739',
        '0AE' => 'E02003739',
        '0AF' => 'E02003739',
        '0AG' => 'E02003739',
        '0AH' => 'E02003739',
        '0AJ' => 'E02003739',
        '0AL' => 'E02003739',
        '0AN' => 'E02003739',
        '0AP' => 'E02003739',
        '0AQ' => 'E02003739',
        '0AR' => 'E02003739',
        '0AS' => 'E02003739',
        '0AT' => 'E02003739',
        '0AU' => 'E02003739',
        '0AW' => 'E02003739',
        '0AX' => 'E02003724',
        '0AY' => 'E02003739',
        '0AZ' => 'E02003739',
        '0BA' => 'E02003739',
        '0BB' => 'E02003739',
        '0BD' => 'E02003739',
        '0BE' => 'E02003739',
        '0BF' => 'E02003739',
        '0BG' => 'E02003739',
        '0BH' => 'E02003739',
        '0BJ' => 'E02003739',
        '0BL' => 'E02003739',
        '0BN' => 'E02003739',
        '0BP' => 'E02003739',
        '0BQ' => 'E02003739',
        '0BS' => 'E02003739',
        '0BT' => 'E02003739',
        '0BU' => 'E02003739',
        '0BW' => 'E02003739',
        '0BX' => 'E02003739',
        '0BY' => 'E02003739',
        '0BZ' => 'E02003739',
        '0DA' => 'E02003739',
        '0DB' => 'E02003739',
        '0DD' => 'E02003739',
        '0DE' => 'E02003739',
        '0DF' => 'E02003739',
        '0DG' => 'E02003739',
        '0DH' => 'E02003739',
        '0DJ' => 'E02003739',
        '0DL' => 'E02003739',
        '0DN' => 'E02003739',
        '0DP' => 'E02003739',
        '0DQ' => 'E02003739',
        '0DR' => 'E02003739',
        '0DS' => 'E02003739',
        '0DT' => 'E02003739',
        '0DU' => 'E02003739',
        '0DW' => 'E02003739',
        '0DX' => 'E02003739',
        '0DY' => 'E02003739',
        '0DZ' => 'E02003739',
        '0EA' => 'E02003739',
        '0EB' => 'E02003739',
        '0ED' => 'E02003739',
        '0EE' => 'E02003739',
        '0EF' => 'E02003739',
        '0EG' => 'E02003739',
        '0EH' => 'E02003739',
        '0EJ' => 'E02003739',
        '0EL' => 'E02003739',
        '0EN' => 'E02003739',
        '0EP' => 'E02003739',
        '0EQ' => 'E02003739',
        '0ER' => 'E02003739',
        '0ES' => 'E02003739',
        '0ET' => 'E02003739',
        '0EU' => 'E02003739',
        '0EW' => 'E02003739',
        '0EX' => 'E02003739',
        '0EY' => 'E02003739',
        '0EZ' => 'E02003739',
        '0FD' => 'E02003739',
        '0GA' => 'E02003739',
        '0GG' => 'E02003739',
        '0HA' => 'E02003739',
        '0HB' => 'E02003739',
        '0HD' => 'E02003739',
        '0HE' => 'E02003739',
        '0HF' => 'E02003739',
        '0HG' => 'E02003739',
        '0HH' => 'E02003739',
        '0HJ' => 'E02003739',
        '0HL' => 'E02003739',
        '0HN' => 'E02003739',
        '0HP' => 'E02003740',
        '0HQ' => 'E02003739',
        '0HR' => 'E02003739',
        '0HS' => 'E02003739',
        '0HT' => 'E02003740',
        '0HU' => 'E02003740',
        '0HW' => 'E02003739',
        '0HX' => 'E02003740',
        '0HY' => 'E02003740',
        '0HZ' => 'E02003740',
        '0JA' => 'E02003740',
        '0JB' => 'E02003724',
        '0JD' => 'E02003740',
        '0JE' => 'E02003739',
        '0JF' => 'E02003740',
        '0JG' => 'E02003739',
        '0JH' => 'E02003740',
        '0JJ' => 'E02003740',
        '0JL' => 'E02003739',
        '0JN' => 'E02003740',
        '0JP' => 'E02003739',
        '0JQ' => 'E02003740',
        '0JR' => 'E02003739',
        '0JS' => 'E02003740',
        '0JT' => 'E02003740',
        '0JU' => 'E02003740',
        '0JW' => 'E02003740',
        '0JX' => 'E02003740',
        '0JY' => 'E02003740',
        '0JZ' => 'E02003740',
        '0LA' => 'E02003740',
        '0LB' => 'E02003740',
        '0LD' => 'E02003740',
        '0LE' => 'E02003740',
        '0LF' => 'E02003740',
        '0LG' => 'E02003740',
        '0LH' => 'E02003740',
        '0LJ' => 'E02003740',
        '0LL' => 'E02003740',
        '0LN' => 'E02003724',
        '0LP' => 'E02003740',
        '0LQ' => 'E02003740',
        '0LR' => 'E02003740',
        '0LS' => 'E02003740',
        '0LT' => 'E02003740',
        '0LU' => 'E02003740',
        '0LW' => 'E02003739',
        '0LX' => 'E02003740',
        '0LY' => 'E02003740',
        '0LZ' => 'E02003740',
        '0NA' => 'E02003740',
        '0NB' => 'E02003740',
        '0ND' => 'E02003740',
        '0NE' => 'E02003740',
        '0NF' => 'E02003740',
        '0NG' => 'E02003740',
        '0NH' => 'E02003740',
        '0NJ' => 'E02003740',
        '0NL' => 'E02003740',
        '0NN' => 'E02003740',
        '0NP' => 'E02003740',
        '0NQ' => 'E02003740',
        '0NR' => 'E02003724',
        '0NS' => 'E02003740',
        '0NT' => 'E02003739',
        '0NU' => 'E02003739',
        '0NX' => 'E02003724',
        '0NZ' => 'E02003740',
        '0PA' => 'E02003739',
        '0RA' => 'E02003739',
        '0RB' => 'E02003740',
        '0RD' => 'E02003724',
        '0RE' => 'E02003739',
        '0RF' => 'E02003739',
        '0RG' => 'E02003739',
        '0RH' => 'E02003739',
        '0RJ' => 'E02003739',
        '0RL' => 'E02003724',
        '0RN' => 'E02003739',
        '0RP' => 'E02003739',
        '0RQ' => 'E02003739',
        '0RR' => 'E02003724',
        '0RS' => 'E02003739',
        '0RT' => 'E02003739',
        '0RU' => 'E02003724',
        '0RW' => 'E02003739',
        '0RX' => 'E02003724',
        '0TA' => 'E02003724',
        '0TB' => 'E02003739',
        '0WA' => 'E02003724',
        '0WB' => 'E02003724',
        '0WD' => 'E02003724',
        '0WE' => 'E02003724',
        '0WF' => 'E02003724',
        '0WG' => 'E02003724',
        '0WN' => 'E02003724',
        '0WP' => 'E02003724',
        '0WQ' => 'E02003724',
        '0WR' => 'E02003724',
        '0WS' => 'E02003724',
        '0WT' => 'E02003724',
        '0WU' => 'E02003724',
        '0WX' => 'E02003724',
        '0WY' => 'E02003724',
        '0WZ' => 'E02003724',
        '0XA' => 'E02003724',
        '0ZL' => 'E02003724',
        '0ZN' => 'E02003724',
        '0ZP' => 'E02003724',
        '0ZQ' => 'E02003724',
        '0ZR' => 'E02003724',
        '0ZS' => 'E02003724',
        '0ZT' => 'E02003724',
        '0ZU' => 'E02003724',
        '0ZW' => 'E02003724',
        '8AA' => 'E02003781',
        '8AB' => 'E02003725',
        '8AD' => 'E02003725',
        '8AE' => 'E02003724',
        '8AF' => 'E02003725',
        '8AG' => 'E02003725',
        '8AH' => 'E02003725',
        '8AJ' => 'E02003725',
        '8AL' => 'E02003725',
        '8AN' => 'E02003725',
        '8AP' => 'E02003725',
        '8AQ' => 'E02003725',
        '8AR' => 'E02003725',
        '8AS' => 'E02003725',
        '8AT' => 'E02003725',
        '8AU' => 'E02003724',
        '8AW' => 'E02003725',
        '8AX' => 'E02003724',
        '8AY' => 'E02003724',
        '8AZ' => 'E02003724',
        '8BA' => 'E02003725',
        '8BB' => 'E02003724',
        '8BD' => 'E02003724',
        '8BE' => 'E02003725',
        '8BF' => 'E02003724',
        '8BG' => 'E02003725',
        '8BH' => 'E02003725',
        '8BJ' => 'E02003725',
        '8BL' => 'E02003725',
        '8BN' => 'E02003725',
        '8BP' => 'E02003725',
        '8BQ' => 'E02003725',
        '8BS' => 'E02003725',
        '8BT' => 'E02003724',
        '8BU' => 'E02003724',
        '8BW' => 'E02003725',
        '8BX' => 'E02003781',
        '8BY' => 'E02003724',
        '8BZ' => 'E02003728',
        '8DA' => 'E02003725',
        '8DD' => 'E02003725',
        '8DE' => 'E02003725',
        '8DF' => 'E02003725',
        '8DG' => 'E02003725',
        '8DH' => 'E02003725',
        '8DJ' => 'E02003725',
        '8DL' => 'E02003725',
        '8DN' => 'E02003725',
        '8DP' => 'E02003725',
        '8DQ' => 'E02003725',
        '8DR' => 'E02003725',
        '8DS' => 'E02003725',
        '8DT' => 'E02003725',
        '8DU' => 'E02003724',
        '8DW' => 'E02003725',
        '8DX' => 'E02003725',
        '8DY' => 'E02003725',
        '8DZ' => 'E02003725',
        '8EA' => 'E02003725',
        '8EB' => 'E02003724',
        '8ED' => 'E02003725',
        '8EE' => 'E02003725',
        '8EF' => 'E02003724',
        '8EG' => 'E02003725',
        '8EH' => 'E02003724',
        '8EJ' => 'E02003725',
        '8EL' => 'E02003724',
        '8EN' => 'E02003725',
        '8EP' => 'E02003725',
        '8EQ' => 'E02003725',
        '8ER' => 'E02003725',
        '8ES' => 'E02003724',
        '8ET' => 'E02003724',
        '8EU' => 'E02003725',
        '8EW' => 'E02003725',
        '8EX' => 'E02003724',
        '8EY' => 'E02003724',
        '8EZ' => 'E02003724',
        '8FA' => 'E02003724',
        '8FB' => 'E02003724',
        '8FD' => 'E02003724',
        '8FE' => 'E02003724',
        '8FF' => 'E02003728',
        '8FG' => 'E02003724',
        '8FH' => 'E02003724',
        '8FJ' => 'E02003724',
        '8FL' => 'E02003724',
        '8FN' => 'E02003724',
        '8FP' => 'E02003724',
        '8FQ' => 'E02003724',
        '8FR' => 'E02003724',
        '8FS' => 'E02003725',
        '8FT' => 'E02003724',
        '8FU' => 'E02003724',
        '8FW' => 'E02003724',
        '8FX' => 'E02003724',
        '8FY' => 'E02003724',
        '8FZ' => 'E02003724',
        '8GA' => 'E02003724',
        '8GB' => 'E02003724',
        '8GD' => 'E02003724',
        '8GE' => 'E02003724',
        '8GF' => 'E02003724',
        '8GG' => 'E02003724',
        '8GH' => 'E02003724',
        '8GJ' => 'E02003724',
        '8GL' => 'E02003724',
        '8GN' => 'E02003724',
        '8GQ' => 'E02003724',
        '8GR' => 'E02003724',
        '8GS' => 'E02003724',
        '8GT' => 'E02003724',
        '8GU' => 'E02003724',
        '8GW' => 'E02003724',
        '8GX' => 'E02003724',
        '8GY' => 'E02003724',
        '8GZ' => 'E02003724',
        '8HA' => 'E02003724',
        '8HB' => 'E02003724',
        '8HD' => 'E02003724',
        '8HE' => 'E02003724',
        '8HF' => 'E02003724',
        '8HG' => 'E02003724',
        '8HH' => 'E02003724',
        '8HJ' => 'E02003724',
        '8HL' => 'E02003724',
        '8HN' => 'E02003724',
        '8HP' => 'E02003724',
        '8HQ' => 'E02003724',
        '8HR' => 'E02003724',
        '8HS' => 'E02003724',
        '8HT' => 'E02003724',
        '8HU' => 'E02003724',
        '8HW' => 'E02003724',
        '8HX' => 'E02003724',
        '8HY' => 'E02003724',
        '8HZ' => 'E02003724',
        '8JA' => 'E02003724',
        '8JB' => 'E02003724',
        '8JD' => 'E02003724',
        '8JE' => 'E02003724',
        '8JF' => 'E02003724',
        '8JG' => 'E02003724',
        '8JH' => 'E02003724',
        '8JJ' => 'E02003724',
        '8JL' => 'E02003724',
        '8JN' => 'E02003724',
        '8JP' => 'E02003725',
        '8JQ' => 'E02003724',
        '8JR' => 'E02003724',
        '8JS' => 'E02003724',
        '8JT' => 'E02003724',
        '8JU' => 'E02003724',
        '8JW' => 'E02003724',
        '8JX' => 'E02003725',
        '8JY' => 'E02003725',
        '8JZ' => 'E02003724',
        '8LA' => 'E02003724',
        '8LB' => 'E02003724',
        '8LD' => 'E02003724',
        '8LE' => 'E02003724',
        '8LF' => 'E02003724',
        '8LG' => 'E02003724',
        '8LH' => 'E02003724',
        '8LJ' => 'E02003724',
        '8LL' => 'E02003724',
        '8LN' => 'E02003724',
        '8LP' => 'E02003724',
        '8LQ' => 'E02003724',
        '8LR' => 'E02003724',
        '8LS' => 'E02003724',
        '8LT' => 'E02003724',
        '8LU' => 'E02003724',
        '8LW' => 'E02003724',
        '8LX' => 'E02003724',
        '8LY' => 'E02003724',
        '8LZ' => 'E02003724',
        '8NA' => 'E02003724',
        '8NB' => 'E02003724',
        '8ND' => 'E02003724',
        '8NE' => 'E02003724',
        '8NF' => 'E02003724',
        '8NG' => 'E02003724',
        '8NH' => 'E02003724',
        '8NJ' => 'E02003724',
        '8NL' => 'E02003724',
        '8NN' => 'E02003724',
        '8NP' => 'E02003724',
        '8NQ' => 'E02003724',
        '8NR' => 'E02003724',
        '8NS' => 'E02003724',
        '8NT' => 'E02003724',
        '8NU' => 'E02003724',
        '8NW' => 'E02003724',
        '8NX' => 'E02003724',
        '8NY' => 'E02003725',
        '8NZ' => 'E02003725',
        '8PA' => 'E02003724',
        '8PB' => 'E02003724',
        '8PD' => 'E02003724',
        '8PE' => 'E02003724',
        '8PF' => 'E02003724',
        '8PG' => 'E02003724',
        '8PH' => 'E02003724',
        '8PJ' => 'E02003724',
        '8PL' => 'E02003724',
        '8PN' => 'E02003724',
        '8PP' => 'E02003724',
        '8PQ' => 'E02003724',
        '8PR' => 'E02003724',
        '8PS' => 'E02003724',
        '8PT' => 'E02003724',
        '8PU' => 'E02003724',
        '8PW' => 'E02003724',
        '8PX' => 'E02003724',
        '8PY' => 'E02003724',
        '8PZ' => 'E02003724',
        '8QA' => 'E02003728',
        '8QB' => 'E02003724',
        '8QD' => 'E02003724',
        '8QE' => 'E02003724',
        '8QF' => 'E02003724',
        '8QG' => 'E02003724',
        '8QH' => 'E02003724',
        '8QJ' => 'E02003724',
        '8QL' => 'E02003724',
        '8QN' => 'E02003724',
        '8QP' => 'E02003724',
        '8QQ' => 'E02003724',
        '8QR' => 'E02003724',
        '8QS' => 'E02003724',
        '8QT' => 'E02003724',
        '8QU' => 'E02003724',
        '8QW' => 'E02003724',
        '8QX' => 'E02003781',
        '8QY' => 'E02003781',
        '8QZ' => 'E02003724',
        '8RA' => 'E02003724',
        '8RB' => 'E02003724',
        '8RD' => 'E02003724',
        '8RE' => 'E02003724',
        '8RF' => 'E02003728',
        '8RG' => 'E02003724',
        '8RH' => 'E02003724',
        '8RJ' => 'E02003724',
        '8RL' => 'E02003724',
        '8RN' => 'E02003724',
        '8RP' => 'E02003724',
        '8RQ' => 'E02003724',
        '8RR' => 'E02003724',
        '8RS' => 'E02003724',
        '8RT' => 'E02003785',
        '8RU' => 'E02003724',
        '8RW' => 'E02003724',
        '8RX' => 'E02003785',
        '8RY' => 'E02003785',
        '8RZ' => 'E02003724',
        '8SA' => 'E02003785',
        '8SB' => 'E02003785',
        '8SD' => 'E02003724',
        '8SE' => 'E02003724',
        '8SF' => 'E02003724',
        '8SG' => 'E02003724',
        '8SH' => 'E02003724',
        '8SJ' => 'E02003724',
        '8SL' => 'E02003724',
        '8SN' => 'E02003724',
        '8SP' => 'E02003724',
        '8SQ' => 'E02003781',
        '8SR' => 'E02003724',
        '8SS' => 'E02003781',
        '8ST' => 'E02003781',
        '8SU' => 'E02003781',
        '8SW' => 'E02003724',
        '8SX' => 'E02003781',
        '8SY' => 'E02003781',
        '8SZ' => 'E02003781',
        '8TA' => 'E02003781',
        '8TB' => 'E02003781',
        '8TD' => 'E02003781',
        '8TE' => 'E02003781',
        '8TF' => 'E02003781',
        '8TG' => 'E02003785',
        '8TH' => 'E02003725',
        '8TJ' => 'E02003725',
        '8TL' => 'E02003724',
        '8TN' => 'E02003724',
        '8TP' => 'E02003724',
        '8TQ' => 'E02003781',
        '8TR' => 'E02003724',
        '8TS' => 'E02003724',
        '8TT' => 'E02003724',
        '8TU' => 'E02003724',
        '8TW' => 'E02003724',
        '8TX' => 'E02003724',
        '8TY' => 'E02003724',
        '8TZ' => 'E02003724',
        '8UA' => 'E02003724',
        '8UB' => 'E02003724',
        '8UD' => 'E02003724',
        '8UE' => 'E02003724',
        '8UF' => 'E02003724',
        '8UG' => 'E02003724',
        '8UH' => 'E02003724',
        '8UJ' => 'E02003724',
        '8UL' => 'E02003724',
        '8UN' => 'E02003724',
        '8UP' => 'E02003781',
        '8UQ' => 'E02003724',
        '8UR' => 'E02003724',
        '8US' => 'E02003724',
        '8UT' => 'E02003724',
        '8UU' => 'E02003724',
        '8UW' => 'E02003724',
        '8UX' => 'E02003724',
        '8UY' => 'E02003724',
        '8UZ' => 'E02003724',
        '8WA' => 'E02003724',
        '8WB' => 'E02003724',
        '8WD' => 'E02003724',
        '8WE' => 'E02003724',
        '8WF' => 'E02003724',
        '8WG' => 'E02003724',
        '8WH' => 'E02003724',
        '8WJ' => 'E02003724',
        '8WL' => 'E02003724',
        '8WN' => 'E02003724',
        '8WP' => 'E02003724',
        '8WQ' => 'E02003724',
        '8WR' => 'E02003724',
        '8WS' => 'E02003724',
        '8WT' => 'E02003724',
        '8WU' => 'E02003728',
        '8WW' => 'E02003724',
        '8WX' => 'E02003728',
        '8WY' => 'E02003724',
        '8WZ' => 'E02003724',
        '8XA' => 'E02003724',
        '8XB' => 'E02003724',
        '8XD' => 'E02003724',
        '8XE' => 'E02003724',
        '8XF' => 'E02003728',
        '8XG' => 'E02003724',
        '8XH' => 'E02003724',
        '8XJ' => 'E02003781',
        '8XL' => 'E02003724',
        '8XN' => 'E02003724',
        '8XP' => 'E02003724',
        '8XQ' => 'E02003724',
        '8XR' => 'E02003724',
        '8XS' => 'E02003724',
        '8XT' => 'E02003724',
        '8XU' => 'E02003724',
        '8XW' => 'E02003724',
        '8XX' => 'E02003724',
        '8XY' => 'E02003724',
        '8XZ' => 'E02003724',
        '8YB' => 'E02003728',
        '8YD' => 'E02003724',
        '8YE' => 'E02003724',
        '8YF' => 'E02003724',
        '8YH' => 'E02003724',
        '8YJ' => 'E02003724',
        '8YL' => 'E02003724',
        '8YN' => 'E02003724',
        '8YP' => 'E02003724',
        '8YQ' => 'E02003724',
        '8YT' => 'E02003724',
        '8YU' => 'E02003724',
        '8YW' => 'E02003724',
        '8YX' => 'E02003724',
        '8YY' => 'E02003724',
        '8YZ' => 'E02003724',
        '8ZA' => 'E02003724',
        '8ZB' => 'E02003781',
        '8ZD' => 'E02003724',
        '8ZE' => 'E02003724',
        '8ZF' => 'E02003724',
        '8ZG' => 'E02003724',
        '8ZH' => 'E02003724',
        '8ZJ' => 'E02003728',
        '8ZL' => 'E02003724',
        '8ZN' => 'E02003724',
        '8ZP' => 'E02003724',
        '8ZQ' => 'E02003724',
        '8ZR' => 'E02003724',
        '8ZS' => 'E02003724',
        '8ZT' => 'E02003728',
        '8ZU' => 'E02003724',
        '8ZX' => 'E02003724',
        '8ZY' => 'E02003724',
        '9AA' => 'E02003781',
        '9AB' => 'E02003781',
        '9AD' => 'E02003781',
        '9AE' => 'E02003781',
        '9AF' => 'E02003781',
        '9AG' => 'E02003781',
        '9AH' => 'E02003781',
        '9AJ' => 'E02003781',
        '9AL' => 'E02003781',
        '9AN' => 'E02003781',
        '9AQ' => 'E02003781',
        '9AR' => 'E02003781',
        '9AT' => 'E02003781',
        '9AW' => 'E02003781',
        '9BA' => 'E02003740',
        '9BB' => 'E02003740',
        '9BD' => 'E02003740',
        '9BE' => 'E02003740',
        '9BF' => 'E02003740',
        '9BG' => 'E02003740',
        '9BH' => 'E02003740',
        '9BJ' => 'E02003740',
        '9BL' => 'E02003740',
        '9BN' => 'E02003740',
        '9BP' => 'E02003740',
        '9BQ' => 'E02003740',
        '9BS' => 'E02003740',
        '9BT' => 'E02003781',
        '9BU' => 'E02003740',
        '9BW' => 'E02003740',
        '9BX' => 'E02003740',
        '9BY' => 'E02003740',
        '9BZ' => 'E02003740',
        '9DA' => 'E02003740',
        '9DB' => 'E02003740',
        '9DD' => 'E02003740',
        '9DE' => 'E02003740',
        '9DF' => 'E02003740',
        '9DG' => 'E02003740',
        '9DH' => 'E02003740',
        '9DJ' => 'E02003740',
        '9DL' => 'E02003740',
        '9DN' => 'E02003740',
        '9DP' => 'E02003740',
        '9DQ' => 'E02003740',
        '9DR' => 'E02003740',
        '9DS' => 'E02003740',
        '9DT' => 'E02003740',
        '9DU' => 'E02003740',
        '9DW' => 'E02003740',
        '9DX' => 'E02003740',
        '9DY' => 'E02003740',
        '9DZ' => 'E02003740',
        '9EA' => 'E02003740',
        '9EB' => 'E02003740',
        '9ED' => 'E02003740',
        '9EE' => 'E02003740',
        '9EF' => 'E02003740',
        '9EG' => 'E02003740',
        '9EH' => 'E02003740',
        '9EJ' => 'E02003740',
        '9EL' => 'E02003740',
        '9EN' => 'E02003740',
        '9EP' => 'E02003740',
        '9EQ' => 'E02003740',
        '9ER' => 'E02003740',
        '9ES' => 'E02003740',
        '9ET' => 'E02003740',
        '9EU' => 'E02003740',
        '9EW' => 'E02003740',
        '9EX' => 'E02003740',
        '9EY' => 'E02003740',
        '9EZ' => 'E02003740',
        '9FN' => 'E02003778',
        '9HA' => 'E02003740',
        '9HB' => 'E02003740',
        '9HD' => 'E02003740',
        '9HE' => 'E02003740',
        '9HF' => 'E02003740',
        '9HG' => 'E02003740',
        '9HH' => 'E02003740',
        '9HJ' => 'E02003724',
        '9HL' => 'E02003778',
        '9HN' => 'E02003778',
        '9HP' => 'E02003778',
        '9HQ' => 'E02003740',
        '9HR' => 'E02003778',
        '9HS' => 'E02003778',
        '9HT' => 'E02003778',
        '9HU' => 'E02003778',
        '9HW' => 'E02003778',
        '9HX' => 'E02003778',
        '9HY' => 'E02003778',
        '9HZ' => 'E02003778',
        '9JA' => 'E02003781',
        '9JB' => 'E02003781',
        '9JD' => 'E02003781',
        '9JE' => 'E02003781',
        '9JF' => 'E02003781',
        '9JG' => 'E02003781',
        '9JH' => 'E02003781',
        '9JJ' => 'E02003781',
        '9JL' => 'E02003781',
        '9JN' => 'E02003781',
        '9JP' => 'E02003778',
        '9JQ' => 'E02003781',
        '9JR' => 'E02003740',
        '9JS' => 'E02003781',
        '9JT' => 'E02003778',
        '9JU' => 'E02003778',
        '9JW' => 'E02003778',
        '9JX' => 'E02003778',
        '9JY' => 'E02003778',
        '9JZ' => 'E02003778',
        '9LA' => 'E02003778',
        '9LB' => 'E02003778',
        '9LD' => 'E02003778',
        '9LE' => 'E02003778',
        '9LF' => 'E02003778',
        '9LG' => 'E02003778',
        '9LH' => 'E02003778',
        '9LJ' => 'E02003778',
        '9LL' => 'E02003778',
        '9LN' => 'E02003778',
        '9LP' => 'E02003778',
        '9LQ' => 'E02003778',
        '9LR' => 'E02003778',
        '9LS' => 'E02003778',
        '9LT' => 'E02003778',
        '9LU' => 'E02003778',
        '9LW' => 'E02003778',
        '9LX' => 'E02003778',
        '9LY' => 'E02003778',
        '9LZ' => 'E02003778',
        '9NA' => 'E02003778',
        '9NB' => 'E02003778',
        '9ND' => 'E02003778',
        '9NE' => 'E02003778',
        '9NF' => 'E02003778',
        '9NG' => 'E02003778',
        '9NH' => 'E02003778',
        '9NJ' => 'E02003778',
        '9NL' => 'E02003778',
        '9NN' => 'E02003778',
        '9NP' => 'E02003778',
        '9NQ' => 'E02003778',
        '9NR' => 'E02003778',
        '9NS' => 'E02003778',
        '9NT' => 'E02003778',
        '9NU' => 'E02003778',
        '9NW' => 'E02003778',
        '9NX' => 'E02003778',
        '9NY' => 'E02003778',
        '9NZ' => 'E02003778',
        '9PA' => 'E02003778',
        '9PB' => 'E02003778',
        '9PD' => 'E02003778',
        '9PE' => 'E02003778',
        '9PF' => 'E02003778',
        '9PG' => 'E02003778',
        '9PH' => 'E02003778',
        '9PJ' => 'E02003776',
        '9PL' => 'E02003776',
        '9PN' => 'E02003736',
        '9PP' => 'E02003778',
        '9PQ' => 'E02003778',
        '9PR' => 'E02003778',
        '9PS' => 'E02003778',
        '9PT' => 'E02003778',
        '9PU' => 'E02003778',
        '9PW' => 'E02003778',
        '9PX' => 'E02003778',
        '9PY' => 'E02003778',
        '9PZ' => 'E02003736',
        '9QB' => 'E02003778',
        '9QD' => 'E02003778',
        '9QE' => 'E02003778',
        '9QF' => 'E02003778',
        '9QG' => 'E02003778',
        '9QH' => 'E02003778',
        '9QJ' => 'E02003778',
        '9QL' => 'E02003778',
        '9QN' => 'E02003724',
        '9QP' => 'E02003778',
        '9QQ' => 'E02003778',
        '9QR' => 'E02003778',
        '9QS' => 'E02003778',
        '9QT' => 'E02003778',
        '9QU' => 'E02003778',
        '9QW' => 'E02003778',
        '9QX' => 'E02003778',
        '9QY' => 'E02003724',
        '9QZ' => 'E02003778',
        '9RA' => 'E02003778',
        '9RB' => 'E02003778',
        '9RE' => 'E02003778',
        '9RG' => 'E02003778',
        '9RH' => 'E02003778',
        '9RJ' => 'E02003778',
        '9RL' => 'E02003778',
        '9RN' => 'E02003778',
        '9RP' => 'E02003778',
        '9RQ' => 'E02003778',
        '9RR' => 'E02003724',
        '9RS' => 'E02003778',
        '9RT' => 'E02003724',
        '9RU' => 'E02003740',
        '9RW' => 'E02003778',
        '9RX' => 'E02003724',
        '9RY' => 'E02003740',
        '9RZ' => 'E02003740',
        '9SA' => 'E02003740',
        '9SB' => 'E02003740',
        '9SD' => 'E02003724',
        '9SE' => 'E02003724',
        '9SF' => 'E02003724',
        '9SG' => 'E02003724',
        '9SH' => 'E02003724',
        '9SJ' => 'E02003724',
        '9SL' => 'E02003724',
        '9SQ' => 'E02003724',
        '9SR' => 'E02003781',
        '9TA' => 'E02003740',
        '9TB' => 'E02003778',
        '9TE' => 'E02003778',
        '9TF' => 'E02003778',
        '9TH' => 'E02003778',
        '9TJ' => 'E02003778',
        '9TL' => 'E02003778',
        '9TN' => 'E02003778',
        '9TP' => 'E02003778',
        '9UZ' => 'E02003724',
        '9WA' => 'E02003778',
        '9WB' => 'E02003724',
        '9WD' => 'E02003778',
        '9WE' => 'E02003724',
        '9WF' => 'E02003778',
        '9WG' => 'E02003724',
        '9WH' => 'E02003724',
        '9WJ' => 'E02003778',
        '9WL' => 'E02003778',
        '9WN' => 'E02003724',
        '9WP' => 'E02003724',
        '9WQ' => 'E02003724',
        '9WR' => 'E02003724',
        '9WS' => 'E02003724',
        '9WT' => 'E02003724',
        '9WU' => 'E02003724',
        '9WW' => 'E02003724',
        '9WX' => 'E02003778',
        '9WY' => 'E02003724',
        '9WZ' => 'E02003724',
        '9XB' => 'E02003778',
        '9XD' => 'E02003724',
        '9XN' => 'E02003724',
        '9XQ' => 'E02003778',
        '9XS' => 'E02003724',
        '9XT' => 'E02003724',
        '9XU' => 'E02003724',
        '9XW' => 'E02003724',
        '9XY' => 'E02003724',
        '9YL' => 'E02003724',
        '9YQ' => 'E02003724',
        '9ZG' => 'E02003740',
        '9ZJ' => 'E02003724',
        '9ZN' => 'E02003724',
        '9ZQ' => 'E02003724',
        '9ZR' => 'E02003724',
        '9ZT' => 'E02003724',
        '9ZU' => 'E02003724',
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
