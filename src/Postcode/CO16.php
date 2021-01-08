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
final class CO16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004579',
        '0AB' => 'E02004579',
        '0AD' => 'E02004579',
        '0AE' => 'E02004579',
        '0AF' => 'E02004579',
        '0AG' => 'E02004579',
        '0AH' => 'E02004579',
        '0AJ' => 'E02004579',
        '0AL' => 'E02004579',
        '0AN' => 'E02004579',
        '0AP' => 'E02004579',
        '0AQ' => 'E02004586',
        '0AR' => 'E02004579',
        '0AS' => 'E02004579',
        '0AT' => 'E02004579',
        '0AU' => 'E02004579',
        '0AW' => 'E02004579',
        '0AX' => 'E02004579',
        '0AY' => 'E02004579',
        '0AZ' => 'E02004579',
        '0BA' => 'E02004579',
        '0BB' => 'E02004579',
        '0BD' => 'E02004575',
        '0BE' => 'E02004579',
        '0BG' => 'E02004575',
        '0BH' => 'E02004575',
        '0BJ' => 'E02004575',
        '0BL' => 'E02004575',
        '0BN' => 'E02004575',
        '0BP' => 'E02004575',
        '0BQ' => 'E02004586',
        '0BS' => 'E02004575',
        '0BT' => 'E02004575',
        '0BU' => 'E02004575',
        '0BW' => 'E02004575',
        '0BX' => 'E02004575',
        '0BY' => 'E02004575',
        '0BZ' => 'E02004575',
        '0DA' => 'E02004575',
        '0DB' => 'E02004575',
        '0DD' => 'E02004575',
        '0DE' => 'E02004575',
        '0DF' => 'E02004586',
        '0DG' => 'E02004575',
        '0DH' => 'E02004575',
        '0DJ' => 'E02004575',
        '0DL' => 'E02004575',
        '0DN' => 'E02004575',
        '0DP' => 'E02004575',
        '0DQ' => 'E02004579',
        '0DR' => 'E02004575',
        '0DS' => 'E02004586',
        '0DT' => 'E02004575',
        '0DU' => 'E02004579',
        '0DW' => 'E02004575',
        '0DX' => 'E02004579',
        '0DY' => 'E02004579',
        '0DZ' => 'E02004579',
        '0EA' => 'E02004579',
        '0EB' => 'E02004579',
        '0ED' => 'E02004579',
        '0EE' => 'E02004579',
        '0EF' => 'E02004579',
        '0EG' => 'E02004579',
        '0EH' => 'E02004579',
        '0EJ' => 'E02004579',
        '0EL' => 'E02004586',
        '0EN' => 'E02004579',
        '0EP' => 'E02004579',
        '0EQ' => 'E02004579',
        '0ER' => 'E02004579',
        '0ES' => 'E02004579',
        '0EW' => 'E02004579',
        '0EX' => 'E02004579',
        '0EY' => 'E02004579',
        '0EZ' => 'E02004579',
        '0FD' => 'E02004575',
        '0FE' => 'E02004579',
        '0HA' => 'E02004579',
        '0HB' => 'E02004579',
        '0HD' => 'E02004579',
        '0HE' => 'E02004579',
        '0HF' => 'E02004579',
        '0HG' => 'E02004579',
        '0HH' => 'E02004579',
        '0HJ' => 'E02004579',
        '0HL' => 'E02004579',
        '0HN' => 'E02004579',
        '0HP' => 'E02004579',
        '0HQ' => 'E02004579',
        '0HR' => 'E02004579',
        '0HS' => 'E02004579',
        '0HT' => 'E02004579',
        '0HU' => 'E02004579',
        '0HW' => 'E02004586',
        '0HX' => 'E02004579',
        '0HY' => 'E02004579',
        '0HZ' => 'E02004579',
        '0JA' => 'E02004579',
        '0JB' => 'E02004579',
        '0JD' => 'E02004579',
        '0JE' => 'E02004579',
        '0JF' => 'E02004579',
        '0JG' => 'E02004579',
        '0JH' => 'E02004579',
        '0JJ' => 'E02004579',
        '0JL' => 'E02004586',
        '0JN' => 'E02004579',
        '0JP' => 'E02004579',
        '0JR' => 'E02004579',
        '0JS' => 'E02004579',
        '0JZ' => 'E02004579',
        '0LA' => 'E02004579',
        '0LB' => 'E02004579',
        '0LD' => 'E02004579',
        '0LE' => 'E02004579',
        '0LF' => 'E02004579',
        '0LG' => 'E02004579',
        '0LH' => 'E02004579',
        '0LJ' => 'E02004579',
        '0LL' => 'E02004579',
        '0LN' => 'E02004579',
        '0LP' => 'E02004579',
        '0LQ' => 'E02004579',
        '0LR' => 'E02004579',
        '0LS' => 'E02004579',
        '0LT' => 'E02004579',
        '0LU' => 'E02004579',
        '0LW' => 'E02004579',
        '0LX' => 'E02004579',
        '0LY' => 'E02004579',
        '0LZ' => 'E02004579',
        '0NA' => 'E02004579',
        '0NB' => 'E02004579',
        '0ND' => 'E02004579',
        '0NE' => 'E02004579',
        '0NF' => 'E02004579',
        '0NG' => 'E02004579',
        '0NH' => 'E02004579',
        '0NJ' => 'E02004579',
        '0NL' => 'E02004579',
        '0NN' => 'E02004579',
        '0NP' => 'E02004579',
        '0NR' => 'E02004579',
        '0NS' => 'E02004579',
        '0NT' => 'E02004579',
        '0SH' => 'E02004586',
        '0WA' => 'E02004586',
        '0WB' => 'E02004586',
        '0WX' => 'E02004586',
        '0WY' => 'E02004586',
        '0WZ' => 'E02004586',
        '7AA' => 'E02004587',
        '7AB' => 'E02004587',
        '7AD' => 'E02004587',
        '7AE' => 'E02004587',
        '7AF' => 'E02004587',
        '7AG' => 'E02004587',
        '7AH' => 'E02004587',
        '7AJ' => 'E02004587',
        '7AL' => 'E02004587',
        '7AN' => 'E02004587',
        '7AP' => 'E02004587',
        '7AQ' => 'E02004587',
        '7AR' => 'E02004587',
        '7AS' => 'E02004587',
        '7AT' => 'E02004587',
        '7AU' => 'E02004587',
        '7AW' => 'E02004587',
        '7AX' => 'E02004587',
        '7AY' => 'E02004587',
        '7AZ' => 'E02004587',
        '7BA' => 'E02004585',
        '7BB' => 'E02004585',
        '7BD' => 'E02004590',
        '7BE' => 'E02004590',
        '7BG' => 'E02004587',
        '7BH' => 'E02004587',
        '7BJ' => 'E02004587',
        '7BL' => 'E02004587',
        '7BN' => 'E02004587',
        '7BP' => 'E02004587',
        '7BQ' => 'E02004587',
        '7BS' => 'E02004587',
        '7BT' => 'E02004587',
        '7BU' => 'E02004587',
        '7BW' => 'E02004587',
        '7BX' => 'E02004587',
        '7BY' => 'E02004587',
        '7BZ' => 'E02004587',
        '7DA' => 'E02004587',
        '7DB' => 'E02004587',
        '7DD' => 'E02004587',
        '7DE' => 'E02004587',
        '7DF' => 'E02004587',
        '7DG' => 'E02004587',
        '7DH' => 'E02004587',
        '7DJ' => 'E02004587',
        '7DL' => 'E02004587',
        '7DN' => 'E02004587',
        '7DP' => 'E02004587',
        '7DQ' => 'E02004587',
        '7DR' => 'E02004587',
        '7DS' => 'E02004587',
        '7DT' => 'E02004587',
        '7DU' => 'E02004587',
        '7DW' => 'E02004587',
        '7DX' => 'E02004587',
        '7DY' => 'E02004587',
        '7DZ' => 'E02004587',
        '7EA' => 'E02004587',
        '7EB' => 'E02004587',
        '7ED' => 'E02004587',
        '7EE' => 'E02004587',
        '7EF' => 'E02004587',
        '7EG' => 'E02004587',
        '7EH' => 'E02004585',
        '7EJ' => 'E02004585',
        '7EL' => 'E02004585',
        '7EN' => 'E02004585',
        '7EP' => 'E02004585',
        '7EQ' => 'E02004587',
        '7ER' => 'E02004585',
        '7ES' => 'E02004585',
        '7ET' => 'E02004587',
        '7EU' => 'E02004587',
        '7EW' => 'E02004585',
        '7EX' => 'E02004587',
        '7EY' => 'E02004587',
        '7EZ' => 'E02004587',
        '7HA' => 'E02004585',
        '7HB' => 'E02004585',
        '7HD' => 'E02004587',
        '7HE' => 'E02004585',
        '7HF' => 'E02004587',
        '7HG' => 'E02004585',
        '7HH' => 'E02004585',
        '7HJ' => 'E02004585',
        '7HL' => 'E02004587',
        '7HN' => 'E02004585',
        '7HP' => 'E02004587',
        '7HQ' => 'E02004585',
        '7HR' => 'E02004587',
        '7HS' => 'E02004586',
        '7HT' => 'E02004587',
        '7HU' => 'E02004587',
        '7HW' => 'E02004585',
        '7HX' => 'E02004587',
        '7HY' => 'E02004585',
        '7HZ' => 'E02004585',
        '7JA' => 'E02004590',
        '7JB' => 'E02004590',
        '7JD' => 'E02004590',
        '7JF' => 'E02004585',
        '7LA' => 'E02004585',
        '7LB' => 'E02004587',
        '7LD' => 'E02004587',
        '7LE' => 'E02004587',
        '7LF' => 'E02004587',
        '7LH' => 'E02004587',
        '7LJ' => 'E02004587',
        '7LL' => 'E02004587',
        '7LN' => 'E02004587',
        '7LP' => 'E02004587',
        '7LQ' => 'E02004587',
        '7LS' => 'E02004587',
        '7PA' => 'E02004587',
        '7PB' => 'E02004587',
        '7PD' => 'E02004587',
        '7PE' => 'E02004587',
        '7PF' => 'E02004587',
        '7PG' => 'E02004587',
        '7PN' => 'E02004587',
        '7PQ' => 'E02004587',
        '7WN' => 'E02004587',
        '7WX' => 'E02004586',
        '7WY' => 'E02004586',
        '7WZ' => 'E02004586',
        '7YB' => 'E02004587',
        '8AA' => 'E02004585',
        '8AB' => 'E02004585',
        '8AD' => 'E02004585',
        '8AE' => 'E02004585',
        '8AF' => 'E02004590',
        '8AG' => 'E02004587',
        '8AH' => 'E02004587',
        '8AJ' => 'E02004587',
        '8AL' => 'E02004587',
        '8AN' => 'E02004587',
        '8AP' => 'E02004587',
        '8AQ' => 'E02004585',
        '8AR' => 'E02004585',
        '8AS' => 'E02004585',
        '8AT' => 'E02004585',
        '8AU' => 'E02004585',
        '8AW' => 'E02004585',
        '8AX' => 'E02004585',
        '8AY' => 'E02004585',
        '8AZ' => 'E02004586',
        '8BA' => 'E02004587',
        '8BB' => 'E02004585',
        '8BD' => 'E02004585',
        '8BE' => 'E02004587',
        '8BG' => 'E02004585',
        '8BH' => 'E02004585',
        '8BJ' => 'E02004585',
        '8BL' => 'E02004585',
        '8BN' => 'E02004585',
        '8BP' => 'E02004590',
        '8BQ' => 'E02004585',
        '8BS' => 'E02004585',
        '8BT' => 'E02004587',
        '8BU' => 'E02004587',
        '8BW' => 'E02004585',
        '8BX' => 'E02004585',
        '8BY' => 'E02004585',
        '8BZ' => 'E02004587',
        '8DA' => 'E02004585',
        '8DB' => 'E02004585',
        '8DD' => 'E02004585',
        '8DE' => 'E02004585',
        '8DF' => 'E02004587',
        '8DG' => 'E02004585',
        '8DH' => 'E02004585',
        '8DJ' => 'E02004585',
        '8DL' => 'E02004585',
        '8DN' => 'E02004585',
        '8DP' => 'E02004585',
        '8DQ' => 'E02004585',
        '8DR' => 'E02004585',
        '8DS' => 'E02004585',
        '8DT' => 'E02004587',
        '8DU' => 'E02004585',
        '8DW' => 'E02004585',
        '8DX' => 'E02004585',
        '8DY' => 'E02004585',
        '8DZ' => 'E02004585',
        '8EA' => 'E02004585',
        '8EB' => 'E02004585',
        '8ED' => 'E02004585',
        '8EE' => 'E02004585',
        '8EF' => 'E02004586',
        '8EG' => 'E02004585',
        '8EH' => 'E02004590',
        '8EJ' => 'E02004590',
        '8EL' => 'E02004585',
        '8EN' => 'E02004590',
        '8EP' => 'E02004590',
        '8EQ' => 'E02004586',
        '8ER' => 'E02004590',
        '8ES' => 'E02004583',
        '8ET' => 'E02004590',
        '8EU' => 'E02004590',
        '8EW' => 'E02004590',
        '8EX' => 'E02004590',
        '8EY' => 'E02004585',
        '8EZ' => 'E02004590',
        '8FA' => 'E02004585',
        '8FB' => 'E02004585',
        '8FD' => 'E02004585',
        '8FE' => 'E02004585',
        '8FF' => 'E02004585',
        '8FG' => 'E02004585',
        '8FH' => 'E02004585',
        '8FJ' => 'E02004585',
        '8FL' => 'E02004585',
        '8FN' => 'E02004585',
        '8FP' => 'E02004585',
        '8FQ' => 'E02004585',
        '8FR' => 'E02004585',
        '8FS' => 'E02004585',
        '8FT' => 'E02004585',
        '8FU' => 'E02004585',
        '8FW' => 'E02004585',
        '8FX' => 'E02004585',
        '8FY' => 'E02004585',
        '8FZ' => 'E02004586',
        '8GA' => 'E02004586',
        '8GB' => 'E02004585',
        '8GD' => 'E02004585',
        '8GE' => 'E02004585',
        '8GF' => 'E02004585',
        '8GG' => 'E02004586',
        '8GH' => 'E02004585',
        '8GJ' => 'E02004585',
        '8GL' => 'E02004585',
        '8GN' => 'E02004585',
        '8GP' => 'E02004585',
        '8GQ' => 'E02004585',
        '8GR' => 'E02004585',
        '8GS' => 'E02004585',
        '8GT' => 'E02004583',
        '8GU' => 'E02004585',
        '8GW' => 'E02004590',
        '8GX' => 'E02004585',
        '8HA' => 'E02004590',
        '8HB' => 'E02004590',
        '8HD' => 'E02004590',
        '8HE' => 'E02004590',
        '8HF' => 'E02004590',
        '8HG' => 'E02004590',
        '8HH' => 'E02004590',
        '8HJ' => 'E02004590',
        '8HL' => 'E02004590',
        '8HN' => 'E02004590',
        '8HP' => 'E02004590',
        '8HQ' => 'E02004590',
        '8HR' => 'E02004590',
        '8HS' => 'E02004590',
        '8HT' => 'E02004585',
        '8HW' => 'E02004590',
        '8JA' => 'E02004583',
        '8JB' => 'E02004583',
        '8JD' => 'E02004583',
        '8JE' => 'E02004583',
        '8JF' => 'E02004585',
        '8JG' => 'E02004583',
        '8JH' => 'E02004583',
        '8JJ' => 'E02004583',
        '8JL' => 'E02004583',
        '8JN' => 'E02004583',
        '8JP' => 'E02004583',
        '8JR' => 'E02004583',
        '8JS' => 'E02004583',
        '8JT' => 'E02004583',
        '8JU' => 'E02004583',
        '8JW' => 'E02004583',
        '8JX' => 'E02004585',
        '8JY' => 'E02004583',
        '8JZ' => 'E02004583',
        '8LA' => 'E02004583',
        '8LB' => 'E02004583',
        '8LD' => 'E02004583',
        '8LE' => 'E02004583',
        '8LF' => 'E02004583',
        '8LG' => 'E02004583',
        '8LH' => 'E02004583',
        '8LJ' => 'E02004583',
        '8LL' => 'E02004583',
        '8LN' => 'E02004583',
        '8LP' => 'E02004586',
        '8LU' => 'E02004583',
        '8LW' => 'E02004583',
        '8LX' => 'E02004583',
        '8LZ' => 'E02004583',
        '8NA' => 'E02004583',
        '8ND' => 'E02004583',
        '8NE' => 'E02004586',
        '8NF' => 'E02004583',
        '8NG' => 'E02004583',
        '8NH' => 'E02004583',
        '8NJ' => 'E02004583',
        '8NL' => 'E02004583',
        '8NN' => 'E02004583',
        '8NP' => 'E02004583',
        '8NQ' => 'E02004585',
        '8NR' => 'E02004583',
        '8NS' => 'E02004583',
        '8NT' => 'E02004583',
        '8NU' => 'E02004590',
        '8NW' => 'E02004583',
        '8NX' => 'E02004590',
        '8NY' => 'E02004590',
        '8NZ' => 'E02004590',
        '8PA' => 'E02004590',
        '8PB' => 'E02004590',
        '8PD' => 'E02004590',
        '8PE' => 'E02004590',
        '8PF' => 'E02004590',
        '8PG' => 'E02004590',
        '8PH' => 'E02004590',
        '8PJ' => 'E02004590',
        '8PL' => 'E02004590',
        '8PN' => 'E02004590',
        '8PP' => 'E02004590',
        '8PQ' => 'E02004590',
        '8PR' => 'E02004590',
        '8PS' => 'E02004590',
        '8PT' => 'E02004590',
        '8PU' => 'E02004590',
        '8PW' => 'E02004590',
        '8PX' => 'E02004590',
        '8PY' => 'E02004590',
        '8PZ' => 'E02004590',
        '8QA' => 'E02004590',
        '8QB' => 'E02004590',
        '8QD' => 'E02004590',
        '8QE' => 'E02004590',
        '8QF' => 'E02004590',
        '8QG' => 'E02004590',
        '8QH' => 'E02004590',
        '8QJ' => 'E02004590',
        '8QL' => 'E02004590',
        '8QN' => 'E02004590',
        '8QP' => 'E02004590',
        '8QQ' => 'E02004590',
        '8QR' => 'E02004590',
        '8QS' => 'E02004590',
        '8QT' => 'E02004590',
        '8QU' => 'E02004590',
        '8QW' => 'E02004590',
        '8QX' => 'E02004590',
        '8QY' => 'E02004590',
        '8QZ' => 'E02004590',
        '8RA' => 'E02004590',
        '8RB' => 'E02004590',
        '8RD' => 'E02004590',
        '8RE' => 'E02004590',
        '8RF' => 'E02004590',
        '8RG' => 'E02004590',
        '8RH' => 'E02004590',
        '8RJ' => 'E02004590',
        '8RL' => 'E02004590',
        '8RN' => 'E02004590',
        '8RP' => 'E02004590',
        '8RQ' => 'E02004590',
        '8RR' => 'E02004590',
        '8RS' => 'E02004590',
        '8RT' => 'E02004590',
        '8RU' => 'E02004590',
        '8RW' => 'E02004590',
        '8RX' => 'E02004590',
        '8RY' => 'E02004590',
        '8RZ' => 'E02004590',
        '8SA' => 'E02004590',
        '8SB' => 'E02004590',
        '8SD' => 'E02004590',
        '8SE' => 'E02004590',
        '8SG' => 'E02004590',
        '8SH' => 'E02004590',
        '8SJ' => 'E02004590',
        '8SL' => 'E02004590',
        '8SN' => 'E02004590',
        '8SP' => 'E02004590',
        '8SQ' => 'E02004586',
        '8SR' => 'E02004590',
        '8SS' => 'E02004590',
        '8ST' => 'E02004590',
        '8SU' => 'E02004590',
        '8SW' => 'E02004590',
        '8SX' => 'E02004590',
        '8SY' => 'E02004586',
        '8SZ' => 'E02004590',
        '8TA' => 'E02004590',
        '8TB' => 'E02004590',
        '8TD' => 'E02004590',
        '8TE' => 'E02004590',
        '8TF' => 'E02004585',
        '8TG' => 'E02004586',
        '8TH' => 'E02004587',
        '8TJ' => 'E02004587',
        '8TL' => 'E02004587',
        '8TN' => 'E02004587',
        '8TP' => 'E02004585',
        '8TQ' => 'E02004586',
        '8TR' => 'E02004585',
        '8TS' => 'E02004585',
        '8TT' => 'E02004587',
        '8TU' => 'E02004587',
        '8TW' => 'E02004586',
        '8TX' => 'E02004587',
        '8TY' => 'E02004586',
        '8TZ' => 'E02004587',
        '8UA' => 'E02004587',
        '8UB' => 'E02004587',
        '8UD' => 'E02004587',
        '8UE' => 'E02004587',
        '8UF' => 'E02004587',
        '8UG' => 'E02004587',
        '8UH' => 'E02004587',
        '8UJ' => 'E02004587',
        '8UL' => 'E02004587',
        '8UN' => 'E02004587',
        '8UP' => 'E02004587',
        '8UQ' => 'E02004587',
        '8UR' => 'E02004587',
        '8US' => 'E02004587',
        '8UT' => 'E02004587',
        '8UU' => 'E02004587',
        '8UW' => 'E02004587',
        '8UX' => 'E02004587',
        '8UY' => 'E02004587',
        '8UZ' => 'E02004587',
        '8WA' => 'E02004585',
        '8WB' => 'E02004585',
        '8WD' => 'E02004586',
        '8WE' => 'E02004586',
        '8WF' => 'E02004586',
        '8WG' => 'E02004586',
        '8WH' => 'E02004586',
        '8WJ' => 'E02004586',
        '8WL' => 'E02004586',
        '8WN' => 'E02004586',
        '8WP' => 'E02004586',
        '8WQ' => 'E02004586',
        '8WR' => 'E02004586',
        '8WS' => 'E02004586',
        '8WT' => 'E02004590',
        '8WU' => 'E02004586',
        '8WW' => 'E02004586',
        '8WX' => 'E02004586',
        '8WY' => 'E02004586',
        '8WZ' => 'E02004590',
        '8XA' => 'E02004585',
        '8XB' => 'E02004587',
        '8XD' => 'E02004587',
        '8XE' => 'E02004585',
        '8XF' => 'E02004585',
        '8XH' => 'E02004585',
        '8XJ' => 'E02004585',
        '8XL' => 'E02004585',
        '8XN' => 'E02004585',
        '8XP' => 'E02004585',
        '8XQ' => 'E02004587',
        '8XR' => 'E02004585',
        '8XS' => 'E02004585',
        '8XT' => 'E02004585',
        '8XU' => 'E02004585',
        '8XW' => 'E02004585',
        '8XX' => 'E02004587',
        '8XY' => 'E02004587',
        '8XZ' => 'E02004585',
        '8YA' => 'E02004585',
        '8YB' => 'E02004585',
        '8YD' => 'E02004585',
        '8YE' => 'E02004585',
        '8YF' => 'E02004585',
        '8YG' => 'E02004585',
        '8YH' => 'E02004585',
        '8YJ' => 'E02004585',
        '8YL' => 'E02004585',
        '8YN' => 'E02004585',
        '8YP' => 'E02004585',
        '8YQ' => 'E02004585',
        '8YR' => 'E02004585',
        '8YS' => 'E02004585',
        '8YT' => 'E02004585',
        '8YU' => 'E02004585',
        '8YW' => 'E02004585',
        '8YX' => 'E02004585',
        '8YY' => 'E02004585',
        '8YZ' => 'E02004585',
        '8ZA' => 'E02004586',
        '8ZB' => 'E02004586',
        '8ZE' => 'E02004586',
        '8ZX' => 'E02004586',
        '9AA' => 'E02004575',
        '9AB' => 'E02004590',
        '9AD' => 'E02004579',
        '9AE' => 'E02004575',
        '9AF' => 'E02004579',
        '9AG' => 'E02004579',
        '9AH' => 'E02004579',
        '9AJ' => 'E02004579',
        '9AL' => 'E02004579',
        '9AN' => 'E02004579',
        '9AP' => 'E02004575',
        '9AQ' => 'E02004586',
        '9AR' => 'E02004575',
        '9AS' => 'E02004579',
        '9AT' => 'E02004579',
        '9AU' => 'E02004579',
        '9AW' => 'E02004575',
        '9AX' => 'E02004579',
        '9AY' => 'E02004579',
        '9AZ' => 'E02004579',
        '9BA' => 'E02004579',
        '9BB' => 'E02004579',
        '9BD' => 'E02004579',
        '9BE' => 'E02004579',
        '9BG' => 'E02004579',
        '9BH' => 'E02004590',
        '9BJ' => 'E02004590',
        '9BL' => 'E02004590',
        '9BN' => 'E02004590',
        '9BP' => 'E02004590',
        '9BQ' => 'E02004590',
        '9BS' => 'E02004590',
        '9BT' => 'E02004590',
        '9BU' => 'E02004590',
        '9BW' => 'E02004586',
        '9BX' => 'E02004590',
        '9BY' => 'E02004586',
        '9BZ' => 'E02004579',
        '9DA' => 'E02004579',
        '9DB' => 'E02004586',
        '9DD' => 'E02004586',
        '9DE' => 'E02004579',
        '9DF' => 'E02004579',
        '9DG' => 'E02004579',
        '9DH' => 'E02004579',
        '9DJ' => 'E02004579',
        '9DL' => 'E02004579',
        '9DN' => 'E02004579',
        '9DP' => 'E02004579',
        '9DQ' => 'E02004579',
        '9DR' => 'E02004579',
        '9DS' => 'E02004579',
        '9DT' => 'E02004579',
        '9DU' => 'E02004579',
        '9DW' => 'E02004579',
        '9DX' => 'E02004579',
        '9DY' => 'E02004579',
        '9DZ' => 'E02004579',
        '9EA' => 'E02004579',
        '9EB' => 'E02004579',
        '9ED' => 'E02004579',
        '9EE' => 'E02004579',
        '9EF' => 'E02004579',
        '9EG' => 'E02004579',
        '9EH' => 'E02004579',
        '9EJ' => 'E02004579',
        '9EL' => 'E02004579',
        '9EN' => 'E02004579',
        '9EP' => 'E02004579',
        '9EQ' => 'E02004579',
        '9ER' => 'E02004579',
        '9ES' => 'E02004579',
        '9ET' => 'E02004579',
        '9EU' => 'E02004579',
        '9EW' => 'E02004579',
        '9EX' => 'E02004579',
        '9EY' => 'E02004579',
        '9EZ' => 'E02004579',
        '9FA' => 'E02004579',
        '9FB' => 'E02004579',
        '9FD' => 'E02004579',
        '9FE' => 'E02004579',
        '9FG' => 'E02004579',
        '9FH' => 'E02004586',
        '9FJ' => 'E02004579',
        '9FL' => 'E02004579',
        '9FN' => 'E02004579',
        '9FP' => 'E02004579',
        '9FS' => 'E02004579',
        '9FT' => 'E02004579',
        '9FU' => 'E02004582',
        '9FW' => 'E02004582',
        '9FX' => 'E02004579',
        '9FY' => 'E02004585',
        '9FZ' => 'E02004585',
        '9GB' => 'E02004586',
        '9GD' => 'E02004579',
        '9GG' => 'E02004586',
        '9HA' => 'E02004579',
        '9HB' => 'E02004579',
        '9HD' => 'E02004579',
        '9HE' => 'E02004579',
        '9HF' => 'E02004579',
        '9HG' => 'E02004579',
        '9HH' => 'E02004579',
        '9HJ' => 'E02004579',
        '9HL' => 'E02004579',
        '9HN' => 'E02004579',
        '9HP' => 'E02004579',
        '9HQ' => 'E02004579',
        '9HR' => 'E02004579',
        '9HS' => 'E02004579',
        '9HT' => 'E02004579',
        '9HU' => 'E02004579',
        '9HW' => 'E02004579',
        '9HX' => 'E02004579',
        '9HY' => 'E02004579',
        '9HZ' => 'E02004579',
        '9JA' => 'E02004579',
        '9JB' => 'E02004579',
        '9JD' => 'E02004579',
        '9JE' => 'E02004579',
        '9JF' => 'E02004579',
        '9JG' => 'E02004579',
        '9JH' => 'E02004579',
        '9JJ' => 'E02004579',
        '9JL' => 'E02004579',
        '9JN' => 'E02004579',
        '9JP' => 'E02004579',
        '9JQ' => 'E02004579',
        '9JR' => 'E02004579',
        '9JS' => 'E02004579',
        '9JT' => 'E02004579',
        '9JU' => 'E02004579',
        '9JW' => 'E02004579',
        '9JX' => 'E02004579',
        '9JY' => 'E02004579',
        '9JZ' => 'E02004579',
        '9LA' => 'E02004579',
        '9LB' => 'E02004579',
        '9LD' => 'E02004579',
        '9LE' => 'E02004579',
        '9LF' => 'E02004579',
        '9LG' => 'E02004579',
        '9LH' => 'E02004579',
        '9LJ' => 'E02004579',
        '9LL' => 'E02004579',
        '9LN' => 'E02004579',
        '9LP' => 'E02004579',
        '9LQ' => 'E02004579',
        '9LR' => 'E02004579',
        '9LS' => 'E02004579',
        '9LT' => 'E02004579',
        '9LU' => 'E02004579',
        '9LX' => 'E02004579',
        '9LZ' => 'E02004579',
        '9NA' => 'E02004579',
        '9ND' => 'E02004579',
        '9NE' => 'E02004579',
        '9NF' => 'E02004579',
        '9NG' => 'E02004579',
        '9NH' => 'E02004579',
        '9NJ' => 'E02004579',
        '9NL' => 'E02004579',
        '9NN' => 'E02004579',
        '9NP' => 'E02004579',
        '9NQ' => 'E02004585',
        '9NR' => 'E02004586',
        '9NS' => 'E02004585',
        '9NT' => 'E02004579',
        '9NU' => 'E02004579',
        '9NW' => 'E02004579',
        '9NX' => 'E02004579',
        '9NY' => 'E02004579',
        '9NZ' => 'E02004579',
        '9PA' => 'E02004579',
        '9PB' => 'E02004579',
        '9PD' => 'E02004579',
        '9PE' => 'E02004579',
        '9PF' => 'E02004586',
        '9PG' => 'E02004579',
        '9PH' => 'E02004579',
        '9PJ' => 'E02004579',
        '9PL' => 'E02004579',
        '9PN' => 'E02004579',
        '9PP' => 'E02004579',
        '9PQ' => 'E02004586',
        '9PR' => 'E02004579',
        '9PS' => 'E02004579',
        '9PT' => 'E02004579',
        '9PU' => 'E02004579',
        '9PW' => 'E02004586',
        '9PX' => 'E02004579',
        '9PY' => 'E02004579',
        '9PZ' => 'E02004579',
        '9QA' => 'E02004579',
        '9QB' => 'E02004579',
        '9QD' => 'E02004579',
        '9QE' => 'E02004579',
        '9QF' => 'E02004582',
        '9QG' => 'E02004579',
        '9QH' => 'E02004579',
        '9QL' => 'E02004582',
        '9QN' => 'E02004585',
        '9QP' => 'E02004582',
        '9QQ' => 'E02004579',
        '9QR' => 'E02004582',
        '9QS' => 'E02004582',
        '9QT' => 'E02004582',
        '9QU' => 'E02004582',
        '9QW' => 'E02004582',
        '9QX' => 'E02004582',
        '9QY' => 'E02004582',
        '9QZ' => 'E02004582',
        '9RA' => 'E02004582',
        '9RB' => 'E02004579',
        '9RD' => 'E02004579',
        '9RE' => 'E02004579',
        '9RF' => 'E02004579',
        '9RG' => 'E02004579',
        '9RH' => 'E02004579',
        '9RJ' => 'E02004579',
        '9RL' => 'E02004579',
        '9RN' => 'E02004579',
        '9RP' => 'E02004579',
        '9RQ' => 'E02004579',
        '9RR' => 'E02004579',
        '9RS' => 'E02004579',
        '9RT' => 'E02004579',
        '9RU' => 'E02004579',
        '9RW' => 'E02004579',
        '9RX' => 'E02004579',
        '9RY' => 'E02004579',
        '9RZ' => 'E02004579',
        '9SA' => 'E02004582',
        '9SB' => 'E02004582',
        '9SG' => 'E02004586',
        '9WG' => 'E02004586',
        '9WR' => 'E02004586',
        '9WS' => 'E02004586',
        '9WT' => 'E02004586',
        '9WU' => 'E02004586',
        '9WW' => 'E02004586',
        '9WX' => 'E02004586',
        '9WY' => 'E02004586',
        '9WZ' => 'E02004586',
        '9YB' => 'E02004579',
        '9YQ' => 'E02004586',
        '9YT' => 'E02004586',
        '9YX' => 'E02004586',
        '9YY' => 'E02004586',
        '9YZ' => 'E02004586',
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
