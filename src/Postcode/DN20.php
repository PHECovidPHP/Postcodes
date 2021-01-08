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
final class DN20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002761',
        '0AB' => 'E02002761',
        '0AD' => 'E02002761',
        '0AE' => 'E02002761',
        '0AF' => 'E02002761',
        '0AG' => 'E02002761',
        '0AH' => 'E02002761',
        '0AJ' => 'E02002761',
        '0AL' => 'E02002761',
        '0AN' => 'E02002761',
        '0AP' => 'E02002761',
        '0AQ' => 'E02002761',
        '0AR' => 'E02002761',
        '0AS' => 'E02002761',
        '0AT' => 'E02002761',
        '0AU' => 'E02002761',
        '0AW' => 'E02002761',
        '0AX' => 'E02002761',
        '0AY' => 'E02002761',
        '0AZ' => 'E02002761',
        '0BA' => 'E02002761',
        '0BB' => 'E02002761',
        '0BD' => 'E02002761',
        '0BE' => 'E02002761',
        '0BF' => 'E02002759',
        '0BG' => 'E02002761',
        '0BH' => 'E02002761',
        '0BJ' => 'E02002761',
        '0BL' => 'E02002761',
        '0BN' => 'E02002761',
        '0BP' => 'E02002761',
        '0BQ' => 'E02002761',
        '0BS' => 'E02002761',
        '0BT' => 'E02002761',
        '0BU' => 'E02002761',
        '0BW' => 'E02002761',
        '0BX' => 'E02002761',
        '0BY' => 'E02002761',
        '0BZ' => 'E02002761',
        '0DA' => 'E02002761',
        '0DB' => 'E02002761',
        '0DD' => 'E02002761',
        '0DE' => 'E02002761',
        '0DF' => 'E02002761',
        '0DG' => 'E02002761',
        '0DH' => 'E02002761',
        '0DJ' => 'E02002761',
        '0DL' => 'E02002761',
        '0DN' => 'E02002761',
        '0DP' => 'E02002761',
        '0DQ' => 'E02002761',
        '0DR' => 'E02002761',
        '0DS' => 'E02002761',
        '0DT' => 'E02002761',
        '0DU' => 'E02002761',
        '0DW' => 'E02002761',
        '0DX' => 'E02002761',
        '0DY' => 'E02002761',
        '0DZ' => 'E02002761',
        '0EA' => 'E02002761',
        '0EB' => 'E02002761',
        '0ED' => 'E02002761',
        '0EE' => 'E02002761',
        '0EF' => 'E02002761',
        '0EG' => 'E02002761',
        '0EH' => 'E02002761',
        '0EJ' => 'E02002761',
        '0EL' => 'E02002761',
        '0EN' => 'E02002761',
        '0EP' => 'E02002761',
        '0EQ' => 'E02002761',
        '0ER' => 'E02002761',
        '0ES' => 'E02002761',
        '0ET' => 'E02002761',
        '0EU' => 'E02002761',
        '0EW' => 'E02002761',
        '0EX' => 'E02002761',
        '0EY' => 'E02002761',
        '0EZ' => 'E02002761',
        '0FD' => 'E02002759',
        '0FE' => 'E02002759',
        '0GA' => 'E02002759',
        '0GB' => 'E02002761',
        '0GD' => 'E02002761',
        '0GE' => 'E02002761',
        '0HA' => 'E02002761',
        '0HB' => 'E02002761',
        '0HD' => 'E02002761',
        '0HE' => 'E02002761',
        '0HF' => 'E02002761',
        '0HG' => 'E02002761',
        '0HH' => 'E02002761',
        '0HJ' => 'E02002761',
        '0HL' => 'E02002761',
        '0HN' => 'E02002761',
        '0HP' => 'E02002761',
        '0HQ' => 'E02002761',
        '0HR' => 'E02002761',
        '0HS' => 'E02002761',
        '0HT' => 'E02002761',
        '0HU' => 'E02002761',
        '0HW' => 'E02002761',
        '0HX' => 'E02002761',
        '0HY' => 'E02002761',
        '0HZ' => 'E02002761',
        '0JA' => 'E02002761',
        '0JB' => 'E02002761',
        '0JD' => 'E02002761',
        '0JE' => 'E02002761',
        '0JF' => 'E02002761',
        '0JG' => 'E02002761',
        '0JH' => 'E02002761',
        '0JJ' => 'E02002761',
        '0JL' => 'E02002761',
        '0JN' => 'E02002761',
        '0JP' => 'E02002761',
        '0JQ' => 'E02002761',
        '0JR' => 'E02002761',
        '0JS' => 'E02002761',
        '0JT' => 'E02002761',
        '0JU' => 'E02002761',
        '0JW' => 'E02002761',
        '0JX' => 'E02002761',
        '0JY' => 'E02002761',
        '0JZ' => 'E02002761',
        '0LA' => 'E02002761',
        '0LB' => 'E02002761',
        '0LD' => 'E02002761',
        '0LE' => 'E02002761',
        '0LF' => 'E02002761',
        '0LG' => 'E02002761',
        '0LH' => 'E02002761',
        '0LJ' => 'E02002761',
        '0LL' => 'E02002759',
        '0LN' => 'E02002761',
        '0LP' => 'E02002759',
        '0LQ' => 'E02002761',
        '0LR' => 'E02002759',
        '0LS' => 'E02002759',
        '0LT' => 'E02002759',
        '0LU' => 'E02002759',
        '0LW' => 'E02002759',
        '0LX' => 'E02002759',
        '0LY' => 'E02002759',
        '0LZ' => 'E02002759',
        '0NA' => 'E02002759',
        '0NB' => 'E02002759',
        '0ND' => 'E02002759',
        '0NE' => 'E02002759',
        '0NF' => 'E02002759',
        '0NG' => 'E02002759',
        '0NH' => 'E02002759',
        '0NJ' => 'E02002759',
        '0NL' => 'E02002759',
        '0NN' => 'E02002759',
        '0NP' => 'E02002759',
        '0NQ' => 'E02002759',
        '0NR' => 'E02002759',
        '0NS' => 'E02002759',
        '0NT' => 'E02002759',
        '0NU' => 'E02002759',
        '0NW' => 'E02002759',
        '0NX' => 'E02002759',
        '0NY' => 'E02002759',
        '0NZ' => 'E02002761',
        '0PA' => 'E02002759',
        '0PB' => 'E02002759',
        '0PD' => 'E02002759',
        '0PE' => 'E02002759',
        '0PF' => 'E02002761',
        '0PG' => 'E02002759',
        '0PH' => 'E02002759',
        '0PJ' => 'E02002759',
        '0PL' => 'E02002759',
        '0PN' => 'E02002759',
        '0PP' => 'E02002759',
        '0PQ' => 'E02002759',
        '0PR' => 'E02002759',
        '0PS' => 'E02002759',
        '0PT' => 'E02002759',
        '0PU' => 'E02002759',
        '0PW' => 'E02002759',
        '0PX' => 'E02002759',
        '0PY' => 'E02002759',
        '0PZ' => 'E02002759',
        '0QA' => 'E02002759',
        '0QB' => 'E02002759',
        '0QD' => 'E02002759',
        '0QE' => 'E02002759',
        '0QF' => 'E02002759',
        '0QG' => 'E02002759',
        '0QH' => 'E02002759',
        '0QJ' => 'E02002759',
        '0QL' => 'E02002759',
        '0QN' => 'E02002759',
        '0QP' => 'E02002759',
        '0QQ' => 'E02002759',
        '0QR' => 'E02002759',
        '0QS' => 'E02002759',
        '0QT' => 'E02002759',
        '0QU' => 'E02002759',
        '0QW' => 'E02002759',
        '0QX' => 'E02002759',
        '0QY' => 'E02002759',
        '0QZ' => 'E02002759',
        '0RA' => 'E02002759',
        '0RB' => 'E02002759',
        '0RD' => 'E02002759',
        '0RE' => 'E02002759',
        '0RF' => 'E02002759',
        '0RG' => 'E02002759',
        '0RH' => 'E02002759',
        '0RJ' => 'E02002759',
        '0RL' => 'E02002759',
        '0RN' => 'E02002759',
        '0RP' => 'E02002759',
        '0RQ' => 'E02002759',
        '0RR' => 'E02002759',
        '0RS' => 'E02002759',
        '0RT' => 'E02002759',
        '0RW' => 'E02002759',
        '0SA' => 'E02002761',
        '0SB' => 'E02002761',
        '0SD' => 'E02002761',
        '0SE' => 'E02002761',
        '0SF' => 'E02002761',
        '0SJ' => 'E02002761',
        '0SL' => 'E02002761',
        '0SN' => 'E02002761',
        '0SP' => 'E02002759',
        '0SQ' => 'E02002759',
        '0SR' => 'E02002759',
        '0SS' => 'E02002759',
        '0ST' => 'E02002759',
        '0SU' => 'E02002759',
        '0SW' => 'E02002759',
        '0SX' => 'E02002759',
        '0SZ' => 'E02002759',
        '0TA' => 'E02002759',
        '0TB' => 'E02002761',
        '0TD' => 'E02002761',
        '0TE' => 'E02002761',
        '0TF' => 'E02002759',
        '0TG' => 'E02002759',
        '0TR' => 'E02002761',
        '0TT' => 'E02002761',
        '0TW' => 'E02002761',
        '0TX' => 'E02002761',
        '0TZ' => 'E02002761',
        '0UA' => 'E02002761',
        '0UB' => 'E02002761',
        '0UD' => 'E02002759',
        '0UE' => 'E02002761',
        '0UF' => 'E02002759',
        '0WA' => 'E02002761',
        '0WB' => 'E02002759',
        '0WQ' => 'E02002759',
        '0WR' => 'E02002759',
        '0WS' => 'E02002759',
        '0WT' => 'E02002759',
        '0WU' => 'E02002759',
        '0WW' => 'E02002759',
        '0WX' => 'E02002759',
        '0WY' => 'E02002759',
        '0WZ' => 'E02002759',
        '0ZU' => 'E02002759',
        '0ZW' => 'E02002759',
        '2AB' => 'E02002759',
        '2AD' => 'E02002759',
        '2AE' => 'E02002759',
        '2AF' => 'E02002759',
        '2AH' => 'E02002759',
        '2AL' => 'E02002759',
        '2AN' => 'E02002759',
        '2AP' => 'E02002759',
        '2AQ' => 'E02002759',
        '2AR' => 'E02002759',
        '2AT' => 'E02002759',
        '2AU' => 'E02002759',
        '2AW' => 'E02002759',
        '2AX' => 'E02002759',
        '2AY' => 'E02002759',
        '2AZ' => 'E02002759',
        '2BA' => 'E02002759',
        '2BB' => 'E02002759',
        '2BD' => 'E02002759',
        '2BE' => 'E02002759',
        '2BF' => 'E02002759',
        '8AA' => 'E02002759',
        '8AB' => 'E02002759',
        '8AD' => 'E02002759',
        '8AE' => 'E02002759',
        '8AF' => 'E02002759',
        '8AG' => 'E02002759',
        '8AH' => 'E02002759',
        '8AJ' => 'E02002759',
        '8AL' => 'E02002759',
        '8AN' => 'E02002759',
        '8AP' => 'E02002759',
        '8AQ' => 'E02002759',
        '8AR' => 'E02002759',
        '8AS' => 'E02002759',
        '8AT' => 'E02002759',
        '8AU' => 'E02002759',
        '8AW' => 'E02002759',
        '8AX' => 'E02002759',
        '8AY' => 'E02002759',
        '8AZ' => 'E02002759',
        '8BA' => 'E02002759',
        '8BB' => 'E02002759',
        '8BD' => 'E02002759',
        '8BE' => 'E02002759',
        '8BF' => 'E02002759',
        '8BG' => 'E02002759',
        '8BH' => 'E02002759',
        '8BJ' => 'E02002759',
        '8BL' => 'E02002759',
        '8BN' => 'E02002759',
        '8BP' => 'E02002759',
        '8BQ' => 'E02002759',
        '8BS' => 'E02002759',
        '8BT' => 'E02002759',
        '8BU' => 'E02002759',
        '8BX' => 'E02002759',
        '8BY' => 'E02002759',
        '8BZ' => 'E02002759',
        '8DA' => 'E02002759',
        '8DB' => 'E02002759',
        '8DD' => 'E02002759',
        '8DE' => 'E02002759',
        '8DF' => 'E02002759',
        '8DG' => 'E02002759',
        '8DH' => 'E02002759',
        '8DJ' => 'E02002759',
        '8DL' => 'E02002759',
        '8DN' => 'E02002759',
        '8DP' => 'E02002759',
        '8DQ' => 'E02002759',
        '8DR' => 'E02002759',
        '8DS' => 'E02002759',
        '8DT' => 'E02002759',
        '8DU' => 'E02002759',
        '8DW' => 'E02002759',
        '8DX' => 'E02002759',
        '8DY' => 'E02002759',
        '8DZ' => 'E02002759',
        '8EA' => 'E02002759',
        '8EB' => 'E02002759',
        '8ED' => 'E02002759',
        '8EE' => 'E02002759',
        '8EF' => 'E02002759',
        '8EG' => 'E02002759',
        '8EH' => 'E02002759',
        '8EJ' => 'E02002759',
        '8EL' => 'E02002759',
        '8EN' => 'E02002759',
        '8EP' => 'E02002759',
        '8EQ' => 'E02002759',
        '8ER' => 'E02002759',
        '8ES' => 'E02002759',
        '8ET' => 'E02002759',
        '8EU' => 'E02002759',
        '8EW' => 'E02002759',
        '8EX' => 'E02002759',
        '8EY' => 'E02002759',
        '8EZ' => 'E02002759',
        '8FA' => 'E02002759',
        '8FB' => 'E02002759',
        '8FD' => 'E02002759',
        '8FE' => 'E02002759',
        '8FF' => 'E02002759',
        '8FG' => 'E02002759',
        '8FH' => 'E02002759',
        '8FJ' => 'E02002759',
        '8FL' => 'E02002759',
        '8FN' => 'E02002759',
        '8FP' => 'E02002759',
        '8GA' => 'E02002759',
        '8GB' => 'E02002759',
        '8GD' => 'E02002759',
        '8GS' => 'E02002759',
        '8HA' => 'E02002759',
        '8HB' => 'E02002759',
        '8HD' => 'E02002759',
        '8HE' => 'E02002759',
        '8HF' => 'E02002759',
        '8HG' => 'E02002759',
        '8HH' => 'E02002759',
        '8HJ' => 'E02002759',
        '8HL' => 'E02002759',
        '8HN' => 'E02002759',
        '8HP' => 'E02002759',
        '8HQ' => 'E02002759',
        '8HR' => 'E02002759',
        '8HS' => 'E02002759',
        '8HT' => 'E02002759',
        '8HU' => 'E02002759',
        '8HW' => 'E02002759',
        '8HX' => 'E02002759',
        '8HY' => 'E02002759',
        '8HZ' => 'E02002759',
        '8JA' => 'E02002759',
        '8JB' => 'E02002759',
        '8JD' => 'E02002759',
        '8JE' => 'E02002759',
        '8JF' => 'E02002759',
        '8JG' => 'E02002759',
        '8JH' => 'E02002759',
        '8JJ' => 'E02002759',
        '8JL' => 'E02002759',
        '8JN' => 'E02002759',
        '8JP' => 'E02002759',
        '8JQ' => 'E02002759',
        '8JR' => 'E02002759',
        '8JS' => 'E02002759',
        '8JT' => 'E02002759',
        '8JU' => 'E02002759',
        '8JW' => 'E02002759',
        '8JX' => 'E02002759',
        '8JY' => 'E02002759',
        '8JZ' => 'E02002759',
        '8LA' => 'E02002759',
        '8LB' => 'E02002759',
        '8LD' => 'E02002759',
        '8LE' => 'E02002759',
        '8LF' => 'E02002759',
        '8LG' => 'E02002759',
        '8LH' => 'E02002759',
        '8LJ' => 'E02002759',
        '8LL' => 'E02002759',
        '8LN' => 'E02002759',
        '8LP' => 'E02002759',
        '8LR' => 'E02002759',
        '8LS' => 'E02002759',
        '8LT' => 'E02002759',
        '8LU' => 'E02002759',
        '8LW' => 'E02002759',
        '8LX' => 'E02002759',
        '8LY' => 'E02002759',
        '8LZ' => 'E02002759',
        '8NA' => 'E02002759',
        '8NB' => 'E02002759',
        '8ND' => 'E02002759',
        '8NE' => 'E02002759',
        '8NF' => 'E02002759',
        '8NG' => 'E02002759',
        '8NH' => 'E02002759',
        '8NJ' => 'E02002759',
        '8NL' => 'E02002759',
        '8NN' => 'E02002759',
        '8NP' => 'E02002759',
        '8NQ' => 'E02002759',
        '8NR' => 'E02002759',
        '8NS' => 'E02002759',
        '8NT' => 'E02002759',
        '8NU' => 'E02002759',
        '8NW' => 'E02002759',
        '8NX' => 'E02002759',
        '8NY' => 'E02002770',
        '8PA' => 'E02002759',
        '8PB' => 'E02002759',
        '8PD' => 'E02002759',
        '8PE' => 'E02002759',
        '8PF' => 'E02002759',
        '8PG' => 'E02002759',
        '8PH' => 'E02002759',
        '8PJ' => 'E02002759',
        '8PL' => 'E02002759',
        '8PN' => 'E02002759',
        '8PP' => 'E02002759',
        '8PQ' => 'E02002759',
        '8PR' => 'E02002759',
        '8PS' => 'E02002759',
        '8PT' => 'E02002759',
        '8PU' => 'E02002759',
        '8PW' => 'E02002759',
        '8PX' => 'E02002759',
        '8PY' => 'E02002759',
        '8PZ' => 'E02002759',
        '8QA' => 'E02002759',
        '8QB' => 'E02002759',
        '8QD' => 'E02002759',
        '8QE' => 'E02002759',
        '8QF' => 'E02002759',
        '8QG' => 'E02002759',
        '8QH' => 'E02002759',
        '8QJ' => 'E02002759',
        '8QL' => 'E02002759',
        '8QN' => 'E02002759',
        '8QP' => 'E02002759',
        '8QQ' => 'E02002759',
        '8QR' => 'E02002759',
        '8QS' => 'E02002759',
        '8QY' => 'E02002759',
        '8RA' => 'E02002759',
        '8RB' => 'E02002759',
        '8RD' => 'E02002759',
        '8RE' => 'E02002759',
        '8RF' => 'E02002759',
        '8RG' => 'E02002759',
        '8RH' => 'E02002759',
        '8RJ' => 'E02002759',
        '8RL' => 'E02002759',
        '8RN' => 'E02002759',
        '8RP' => 'E02002759',
        '8RQ' => 'E02002759',
        '8RR' => 'E02002759',
        '8RS' => 'E02002759',
        '8RT' => 'E02002759',
        '8RU' => 'E02002759',
        '8RW' => 'E02002759',
        '8RX' => 'E02002759',
        '8RY' => 'E02002759',
        '8RZ' => 'E02002759',
        '8SA' => 'E02002759',
        '8SB' => 'E02002759',
        '8SD' => 'E02002759',
        '8SE' => 'E02002759',
        '8SF' => 'E02002759',
        '8SG' => 'E02002759',
        '8SH' => 'E02002759',
        '8SJ' => 'E02002759',
        '8SL' => 'E02002759',
        '8SN' => 'E02002759',
        '8SP' => 'E02002759',
        '8SQ' => 'E02002759',
        '8SR' => 'E02002759',
        '8SS' => 'E02002759',
        '8ST' => 'E02005492',
        '8SU' => 'E02005492',
        '8SW' => 'E02002759',
        '8SX' => 'E02005492',
        '8SY' => 'E02002759',
        '8SZ' => 'E02002759',
        '8TA' => 'E02002759',
        '8TB' => 'E02002759',
        '8TD' => 'E02002759',
        '8TE' => 'E02002759',
        '8TG' => 'E02002759',
        '8TH' => 'E02002759',
        '8TJ' => 'E02002759',
        '8TL' => 'E02002759',
        '8TN' => 'E02002759',
        '8TP' => 'E02002759',
        '8TQ' => 'E02002759',
        '8TR' => 'E02002759',
        '8TS' => 'E02002759',
        '8TX' => 'E02002759',
        '8UA' => 'E02002759',
        '8UB' => 'E02002759',
        '8UD' => 'E02002759',
        '8UE' => 'E02002759',
        '8UF' => 'E02002759',
        '8UG' => 'E02002759',
        '8UH' => 'E02002759',
        '8UJ' => 'E02002759',
        '8UL' => 'E02002759',
        '8UN' => 'E02002759',
        '8UQ' => 'E02002759',
        '8UR' => 'E02002759',
        '8WA' => 'E02002759',
        '8WB' => 'E02002759',
        '8WR' => 'E02002759',
        '8WS' => 'E02002759',
        '8WT' => 'E02002759',
        '8WU' => 'E02002759',
        '8WW' => 'E02002759',
        '8WY' => 'E02002759',
        '8WZ' => 'E02002759',
        '8XA' => 'E02002759',
        '8XB' => 'E02002759',
        '8XD' => 'E02002759',
        '8XE' => 'E02002759',
        '8XF' => 'E02002759',
        '8XG' => 'E02002759',
        '8XH' => 'E02002759',
        '8XJ' => 'E02002759',
        '8XL' => 'E02002759',
        '8XN' => 'E02002759',
        '8XP' => 'E02002759',
        '8XQ' => 'E02002759',
        '8XR' => 'E02002759',
        '8XS' => 'E02002759',
        '8XT' => 'E02002759',
        '8XU' => 'E02002759',
        '8XW' => 'E02002759',
        '8XX' => 'E02002759',
        '8XY' => 'E02002759',
        '8XZ' => 'E02002759',
        '8YA' => 'E02002759',
        '8YB' => 'E02002759',
        '8YD' => 'E02002759',
        '8YE' => 'E02002759',
        '8YF' => 'E02002759',
        '9AA' => 'E02002770',
        '9AB' => 'E02002769',
        '9AD' => 'E02002769',
        '9AE' => 'E02002769',
        '9AF' => 'E02002769',
        '9AG' => 'E02002769',
        '9AH' => 'E02002769',
        '9AJ' => 'E02002769',
        '9AL' => 'E02002769',
        '9AN' => 'E02002769',
        '9AP' => 'E02002769',
        '9AQ' => 'E02002769',
        '9AR' => 'E02002769',
        '9AS' => 'E02002769',
        '9AT' => 'E02002769',
        '9AU' => 'E02002769',
        '9AW' => 'E02002769',
        '9AX' => 'E02002769',
        '9AY' => 'E02002769',
        '9AZ' => 'E02002769',
        '9BA' => 'E02002769',
        '9BB' => 'E02002769',
        '9BD' => 'E02002769',
        '9BE' => 'E02002769',
        '9BF' => 'E02002770',
        '9BG' => 'E02002769',
        '9BH' => 'E02002770',
        '9BJ' => 'E02002769',
        '9BL' => 'E02002770',
        '9BN' => 'E02002769',
        '9BP' => 'E02002770',
        '9BQ' => 'E02002769',
        '9BS' => 'E02002769',
        '9BU' => 'E02002770',
        '9BW' => 'E02002770',
        '9BX' => 'E02002769',
        '9BY' => 'E02002770',
        '9BZ' => 'E02002770',
        '9DA' => 'E02002769',
        '9DB' => 'E02002769',
        '9DD' => 'E02002769',
        '9DE' => 'E02002769',
        '9DF' => 'E02002769',
        '9DG' => 'E02002769',
        '9DH' => 'E02002769',
        '9DJ' => 'E02002770',
        '9DL' => 'E02002770',
        '9DN' => 'E02002769',
        '9DP' => 'E02002770',
        '9DQ' => 'E02002769',
        '9DR' => 'E02002770',
        '9DS' => 'E02002770',
        '9DT' => 'E02002770',
        '9DU' => 'E02002770',
        '9DW' => 'E02002770',
        '9DX' => 'E02002770',
        '9DY' => 'E02002770',
        '9DZ' => 'E02002770',
        '9EA' => 'E02002770',
        '9EB' => 'E02002770',
        '9ED' => 'E02002770',
        '9EE' => 'E02002770',
        '9EF' => 'E02002770',
        '9EG' => 'E02002770',
        '9EH' => 'E02002770',
        '9EJ' => 'E02002770',
        '9EL' => 'E02002769',
        '9EN' => 'E02002769',
        '9EP' => 'E02002769',
        '9EQ' => 'E02002770',
        '9ER' => 'E02002769',
        '9ES' => 'E02002770',
        '9ET' => 'E02002770',
        '9EU' => 'E02002770',
        '9EW' => 'E02002769',
        '9EX' => 'E02002770',
        '9EY' => 'E02002759',
        '9EZ' => 'E02002759',
        '9FA' => 'E02002769',
        '9FB' => 'E02002770',
        '9FD' => 'E02002770',
        '9FE' => 'E02002770',
        '9FF' => 'E02002770',
        '9FG' => 'E02002770',
        '9FH' => 'E02005492',
        '9FJ' => 'E02002769',
        '9FL' => 'E02002761',
        '9FN' => 'E02002761',
        '9FP' => 'E02002761',
        '9FQ' => 'E02005492',
        '9FR' => 'E02002770',
        '9FS' => 'E02002770',
        '9FT' => 'E02002769',
        '9FY' => 'E02002759',
        '9GA' => 'E02002759',
        '9GB' => 'E02002770',
        '9GD' => 'E02002759',
        '9GE' => 'E02002770',
        '9GF' => 'E02002769',
        '9GZ' => 'E02005492',
        '9HA' => 'E02002759',
        '9HB' => 'E02002759',
        '9HD' => 'E02002759',
        '9HE' => 'E02005492',
        '9HF' => 'E02005492',
        '9HG' => 'E02005492',
        '9HH' => 'E02005492',
        '9HJ' => 'E02005492',
        '9HL' => 'E02005492',
        '9HN' => 'E02005492',
        '9HP' => 'E02002770',
        '9HQ' => 'E02002759',
        '9HR' => 'E02002770',
        '9HS' => 'E02002770',
        '9HT' => 'E02002759',
        '9HU' => 'E02002770',
        '9HW' => 'E02002759',
        '9HX' => 'E02002770',
        '9HY' => 'E02002759',
        '9HZ' => 'E02002770',
        '9JA' => 'E02002759',
        '9JD' => 'E02002759',
        '9JE' => 'E02002759',
        '9JF' => 'E02002770',
        '9JG' => 'E02002770',
        '9JH' => 'E02002770',
        '9JJ' => 'E02002770',
        '9JL' => 'E02002769',
        '9JN' => 'E02002761',
        '9JP' => 'E02002770',
        '9JQ' => 'E02002770',
        '9JR' => 'E02002770',
        '9JS' => 'E02002770',
        '9JT' => 'E02002770',
        '9JU' => 'E02002770',
        '9JW' => 'E02002770',
        '9JX' => 'E02002769',
        '9JY' => 'E02002769',
        '9JZ' => 'E02002769',
        '9LA' => 'E02002769',
        '9LB' => 'E02002769',
        '9LD' => 'E02002769',
        '9LE' => 'E02002769',
        '9LF' => 'E02002761',
        '9LG' => 'E02002761',
        '9LH' => 'E02002770',
        '9LJ' => 'E02002761',
        '9LL' => 'E02002761',
        '9LP' => 'E02002770',
        '9LQ' => 'E02002770',
        '9LR' => 'E02002770',
        '9LS' => 'E02002761',
        '9LT' => 'E02002770',
        '9LU' => 'E02002770',
        '9LX' => 'E02002769',
        '9LY' => 'E02002761',
        '9LZ' => 'E02002761',
        '9NA' => 'E02002761',
        '9NB' => 'E02002769',
        '9ND' => 'E02002769',
        '9NE' => 'E02002769',
        '9NF' => 'E02002769',
        '9NG' => 'E02002769',
        '9NH' => 'E02002770',
        '9NJ' => 'E02002770',
        '9NL' => 'E02002770',
        '9NN' => 'E02002770',
        '9NP' => 'E02002770',
        '9NQ' => 'E02002770',
        '9NR' => 'E02002770',
        '9NS' => 'E02002770',
        '9NT' => 'E02002770',
        '9NU' => 'E02002770',
        '9NW' => 'E02002770',
        '9NX' => 'E02002770',
        '9NY' => 'E02002770',
        '9NZ' => 'E02002770',
        '9PA' => 'E02002770',
        '9PB' => 'E02002770',
        '9PD' => 'E02002770',
        '9PE' => 'E02002770',
        '9PF' => 'E02002770',
        '9PG' => 'E02002770',
        '9PH' => 'E02002770',
        '9PJ' => 'E02002770',
        '9PL' => 'E02002770',
        '9PN' => 'E02002770',
        '9PP' => 'E02002770',
        '9PQ' => 'E02002770',
        '9PR' => 'E02002770',
        '9PS' => 'E02002770',
        '9PT' => 'E02002770',
        '9PU' => 'E02002770',
        '9PW' => 'E02002770',
        '9PX' => 'E02002769',
        '9PY' => 'E02002770',
        '9PZ' => 'E02002770',
        '9QA' => 'E02002770',
        '9QB' => 'E02002770',
        '9QD' => 'E02002770',
        '9QE' => 'E02002770',
        '9QF' => 'E02002770',
        '9QG' => 'E02002770',
        '9QH' => 'E02002759',
        '9QL' => 'E02002770',
        '9QP' => 'E02002759',
        '9QQ' => 'E02002759',
        '9QR' => 'E02002759',
        '9QS' => 'E02002770',
        '9QT' => 'E02002770',
        '9QU' => 'E02002770',
        '9QW' => 'E02002759',
        '9QY' => 'E02002759',
        '9RA' => 'E02002770',
        '9RB' => 'E02002761',
        '9RD' => 'E02002761',
        '9RE' => 'E02002761',
        '9RF' => 'E02002761',
        '9RG' => 'E02002761',
        '9RH' => 'E02002769',
        '9RL' => 'E02002769',
        '9RQ' => 'E02002770',
        '9RR' => 'E02002770',
        '9RU' => 'E02002770',
        '9SQ' => 'E02002770',
        '9SY' => 'E02002761',
        '9WR' => 'E02002759',
        '9WT' => 'E02002759',
        '9WU' => 'E02002759',
        '9WW' => 'E02002759',
        '9WX' => 'E02002761',
        '9WY' => 'E02002759',
        '9WZ' => 'E02002759',
        '9XA' => 'E02002761',
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
