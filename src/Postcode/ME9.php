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
final class ME9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005127',
        '0AB' => 'E02005127',
        '0AD' => 'E02005127',
        '0AE' => 'E02005127',
        '0AF' => 'E02005127',
        '0AG' => 'E02005127',
        '0AH' => 'E02005127',
        '0AJ' => 'E02005127',
        '0AL' => 'E02005127',
        '0AN' => 'E02005127',
        '0AP' => 'E02005127',
        '0AQ' => 'E02005127',
        '0AR' => 'E02005124',
        '0AS' => 'E02005127',
        '0AT' => 'E02005130',
        '0AU' => 'E02005130',
        '0AW' => 'E02005130',
        '0AX' => 'E02005130',
        '0AY' => 'E02005130',
        '0AZ' => 'E02005130',
        '0BA' => 'E02005127',
        '0BB' => 'E02005130',
        '0BD' => 'E02005130',
        '0BG' => 'E02005130',
        '0BH' => 'E02005130',
        '0BL' => 'E02005130',
        '0BN' => 'E02005130',
        '0BP' => 'E02005130',
        '0BQ' => 'E02005130',
        '0BS' => 'E02005130',
        '0BX' => 'E02005130',
        '0BY' => 'E02005130',
        '0BZ' => 'E02005130',
        '0DA' => 'E02005130',
        '0DB' => 'E02005130',
        '0DE' => 'E02005078',
        '0DG' => 'E02005078',
        '0DH' => 'E02005078',
        '0DJ' => 'E02005078',
        '0DL' => 'E02005124',
        '0DN' => 'E02005124',
        '0DP' => 'E02005078',
        '0DS' => 'E02005078',
        '0DT' => 'E02005078',
        '0DU' => 'E02005078',
        '0DX' => 'E02005127',
        '0EA' => 'E02005078',
        '0EB' => 'E02005078',
        '0ED' => 'E02005127',
        '0EF' => 'E02005078',
        '0EH' => 'E02005078',
        '0EN' => 'E02005130',
        '0EP' => 'E02005130',
        '0ER' => 'E02005130',
        '0ES' => 'E02005130',
        '0ET' => 'E02005130',
        '0EW' => 'E02005130',
        '0EX' => 'E02005130',
        '0EY' => 'E02005130',
        '0EZ' => 'E02005130',
        '0HB' => 'E02005130',
        '0HD' => 'E02005130',
        '0HF' => 'E02005130',
        '0HG' => 'E02005130',
        '0HJ' => 'E02005130',
        '0HL' => 'E02005130',
        '0HR' => 'E02005130',
        '0HS' => 'E02005130',
        '0HW' => 'E02005130',
        '0JD' => 'E02005130',
        '0JE' => 'E02005130',
        '0JH' => 'E02005130',
        '0JJ' => 'E02005130',
        '0JN' => 'E02005130',
        '0JQ' => 'E02005130',
        '0JR' => 'E02005130',
        '0JS' => 'E02005130',
        '0JT' => 'E02005130',
        '0JU' => 'E02005130',
        '0JW' => 'E02005130',
        '0JX' => 'E02005130',
        '0LA' => 'E02005130',
        '0LB' => 'E02005130',
        '0LD' => 'E02005130',
        '0LF' => 'E02005127',
        '0LG' => 'E02005130',
        '0LH' => 'E02005130',
        '0LL' => 'E02005130',
        '0LN' => 'E02005130',
        '0LP' => 'E02005130',
        '0LQ' => 'E02005130',
        '0LR' => 'E02005127',
        '0LT' => 'E02005130',
        '0LU' => 'E02005130',
        '0LW' => 'E02005130',
        '0NA' => 'E02005130',
        '0NB' => 'E02005130',
        '0NE' => 'E02005130',
        '0NG' => 'E02005130',
        '0NL' => 'E02005130',
        '0NN' => 'E02005130',
        '0NP' => 'E02005078',
        '0NQ' => 'E02005130',
        '0NR' => 'E02005130',
        '0NT' => 'E02005130',
        '0NU' => 'E02005130',
        '0NX' => 'E02005130',
        '0PA' => 'E02005130',
        '0PB' => 'E02005127',
        '0PE' => 'E02005127',
        '0PH' => 'E02005127',
        '0PJ' => 'E02005127',
        '0PL' => 'E02005127',
        '0PP' => 'E02005127',
        '0PR' => 'E02005127',
        '0PS' => 'E02005127',
        '0PT' => 'E02005127',
        '0PU' => 'E02005127',
        '0PX' => 'E02005127',
        '0PY' => 'E02005127',
        '0PZ' => 'E02005127',
        '0QA' => 'E02005127',
        '0QB' => 'E02005127',
        '0QD' => 'E02005127',
        '0QF' => 'E02005127',
        '0QL' => 'E02005127',
        '0QN' => 'E02005127',
        '0QP' => 'E02005127',
        '0QQ' => 'E02005127',
        '0QR' => 'E02005127',
        '0QT' => 'E02005127',
        '0QU' => 'E02005127',
        '0QW' => 'E02005127',
        '0QX' => 'E02005127',
        '0RA' => 'E02005127',
        '0RB' => 'E02005127',
        '0RD' => 'E02005127',
        '0RE' => 'E02005130',
        '0RF' => 'E02005130',
        '0RH' => 'E02005130',
        '0RJ' => 'E02005130',
        '0RL' => 'E02005130',
        '0RP' => 'E02005130',
        '0RQ' => 'E02005130',
        '0RS' => 'E02005127',
        '0RT' => 'E02005127',
        '0RU' => 'E02005127',
        '0RX' => 'E02005127',
        '0SA' => 'E02005127',
        '0SB' => 'E02005127',
        '0SD' => 'E02005127',
        '0SE' => 'E02005127',
        '0SF' => 'E02005127',
        '0SG' => 'E02005127',
        '0SH' => 'E02005127',
        '0SJ' => 'E02005127',
        '0SL' => 'E02005078',
        '0SN' => 'E02005078',
        '0SP' => 'E02005078',
        '0SQ' => 'E02005127',
        '0SR' => 'E02005078',
        '0SS' => 'E02005078',
        '0ST' => 'E02005078',
        '0SU' => 'E02005078',
        '0SX' => 'E02005078',
        '0SY' => 'E02005078',
        '0TB' => 'E02005078',
        '0TF' => 'E02005078',
        '0TG' => 'E02005078',
        '0TH' => 'E02005078',
        '0TJ' => 'E02005127',
        '0TN' => 'E02005078',
        '0TP' => 'E02005078',
        '0TQ' => 'E02005078',
        '0TR' => 'E02005078',
        '0TS' => 'E02005078',
        '0TT' => 'E02005078',
        '0TU' => 'E02005078',
        '0TX' => 'E02005078',
        '0TY' => 'E02005078',
        '0UA' => 'E02005078',
        '0UB' => 'E02005078',
        '0WA' => 'E02005078',
        '0WB' => 'E02005124',
        '0WD' => 'E02005124',
        '0WE' => 'E02005078',
        '0WF' => 'E02005124',
        '0WL' => 'E02005124',
        '0WY' => 'E02005124',
        '0WZ' => 'E02005124',
        '0YZ' => 'E02005078',
        '7AA' => 'E02005122',
        '7AB' => 'E02005122',
        '7AD' => 'E02005122',
        '7AE' => 'E02005122',
        '7AF' => 'E02005122',
        '7AG' => 'E02005122',
        '7AH' => 'E02005122',
        '7AJ' => 'E02005122',
        '7AL' => 'E02005122',
        '7AN' => 'E02005122',
        '7AP' => 'E02005122',
        '7AQ' => 'E02005122',
        '7AR' => 'E02005122',
        '7AS' => 'E02005122',
        '7AT' => 'E02005122',
        '7AU' => 'E02005122',
        '7AW' => 'E02005124',
        '7AX' => 'E02005122',
        '7AY' => 'E02005122',
        '7AZ' => 'E02005122',
        '7BA' => 'E02005122',
        '7BB' => 'E02005122',
        '7BD' => 'E02005122',
        '7BE' => 'E02005122',
        '7BF' => 'E02005123',
        '7BG' => 'E02005122',
        '7BH' => 'E02005122',
        '7BJ' => 'E02005122',
        '7BL' => 'E02005122',
        '7BN' => 'E02005122',
        '7BP' => 'E02005122',
        '7BQ' => 'E02005122',
        '7BS' => 'E02005122',
        '7BT' => 'E02005124',
        '7BU' => 'E02005122',
        '7BW' => 'E02005122',
        '7BX' => 'E02005122',
        '7BY' => 'E02005122',
        '7BZ' => 'E02005124',
        '7DA' => 'E02005122',
        '7DB' => 'E02005122',
        '7DD' => 'E02005122',
        '7DE' => 'E02005122',
        '7DF' => 'E02005122',
        '7DG' => 'E02005122',
        '7DH' => 'E02005122',
        '7DJ' => 'E02005122',
        '7DL' => 'E02005122',
        '7DN' => 'E02005122',
        '7DP' => 'E02005122',
        '7DQ' => 'E02005122',
        '7DR' => 'E02005122',
        '7DS' => 'E02005122',
        '7DT' => 'E02005122',
        '7DU' => 'E02005122',
        '7DW' => 'E02005122',
        '7DX' => 'E02005122',
        '7DY' => 'E02005122',
        '7DZ' => 'E02005122',
        '7EA' => 'E02005122',
        '7EB' => 'E02005122',
        '7ED' => 'E02005122',
        '7EE' => 'E02005122',
        '7EF' => 'E02005122',
        '7EG' => 'E02005122',
        '7EH' => 'E02005122',
        '7EJ' => 'E02005122',
        '7EL' => 'E02005122',
        '7EN' => 'E02005122',
        '7EP' => 'E02005122',
        '7EQ' => 'E02005122',
        '7ER' => 'E02005122',
        '7ES' => 'E02005122',
        '7ET' => 'E02005122',
        '7EU' => 'E02005122',
        '7EW' => 'E02005122',
        '7EX' => 'E02005122',
        '7EY' => 'E02005122',
        '7EZ' => 'E02005122',
        '7FA' => 'E02005122',
        '7FB' => 'E02005122',
        '7FD' => 'E02005122',
        '7FE' => 'E02005122',
        '7FF' => 'E02005078',
        '7FG' => 'E02005122',
        '7FJ' => 'E02005122',
        '7FL' => 'E02005122',
        '7FN' => 'E02005122',
        '7FP' => 'E02005122',
        '7FQ' => 'E02005122',
        '7FR' => 'E02005122',
        '7FS' => 'E02005122',
        '7FT' => 'E02005122',
        '7FU' => 'E02005122',
        '7FX' => 'E02005122',
        '7GA' => 'E02005124',
        '7HA' => 'E02005122',
        '7HB' => 'E02005122',
        '7HD' => 'E02005122',
        '7HE' => 'E02005122',
        '7HF' => 'E02005122',
        '7HG' => 'E02005122',
        '7HH' => 'E02005122',
        '7HJ' => 'E02005122',
        '7HL' => 'E02005122',
        '7HN' => 'E02005122',
        '7HP' => 'E02005122',
        '7HQ' => 'E02005122',
        '7HR' => 'E02005124',
        '7HS' => 'E02005124',
        '7HT' => 'E02005123',
        '7HU' => 'E02005122',
        '7HW' => 'E02005124',
        '7HX' => 'E02005124',
        '7HY' => 'E02005122',
        '7HZ' => 'E02005122',
        '7JA' => 'E02005122',
        '7JB' => 'E02005122',
        '7JD' => 'E02005122',
        '7JE' => 'E02005122',
        '7JF' => 'E02005122',
        '7JG' => 'E02005122',
        '7JH' => 'E02005122',
        '7JJ' => 'E02005122',
        '7JL' => 'E02005122',
        '7JN' => 'E02005122',
        '7JP' => 'E02005122',
        '7JQ' => 'E02005122',
        '7JR' => 'E02005122',
        '7JS' => 'E02005122',
        '7JT' => 'E02005122',
        '7JU' => 'E02005122',
        '7JW' => 'E02005122',
        '7JX' => 'E02005122',
        '7JY' => 'E02005122',
        '7JZ' => 'E02005122',
        '7LA' => 'E02005122',
        '7LB' => 'E02005122',
        '7LD' => 'E02005122',
        '7LE' => 'E02005122',
        '7LF' => 'E02005122',
        '7LG' => 'E02005122',
        '7LH' => 'E02005122',
        '7LJ' => 'E02005122',
        '7LL' => 'E02005122',
        '7LN' => 'E02005122',
        '7LP' => 'E02005122',
        '7LQ' => 'E02005122',
        '7LR' => 'E02005122',
        '7LS' => 'E02005122',
        '7LT' => 'E02005122',
        '7LU' => 'E02005122',
        '7LW' => 'E02005124',
        '7LX' => 'E02005122',
        '7LY' => 'E02005122',
        '7LZ' => 'E02005122',
        '7NA' => 'E02005122',
        '7NB' => 'E02005122',
        '7ND' => 'E02005122',
        '7NE' => 'E02005122',
        '7NF' => 'E02005122',
        '7NG' => 'E02005122',
        '7NH' => 'E02005122',
        '7NJ' => 'E02005122',
        '7NL' => 'E02005122',
        '7NN' => 'E02005122',
        '7NP' => 'E02005122',
        '7NQ' => 'E02005122',
        '7NR' => 'E02005122',
        '7NS' => 'E02005122',
        '7NT' => 'E02005122',
        '7NU' => 'E02005122',
        '7NW' => 'E02005122',
        '7NX' => 'E02005122',
        '7NY' => 'E02005122',
        '7NZ' => 'E02005122',
        '7PA' => 'E02005122',
        '7PB' => 'E02005122',
        '7PD' => 'E02005122',
        '7PE' => 'E02005122',
        '7PF' => 'E02005124',
        '7PG' => 'E02005122',
        '7PH' => 'E02005122',
        '7PJ' => 'E02005124',
        '7PL' => 'E02005122',
        '7PN' => 'E02005122',
        '7PP' => 'E02005124',
        '7PQ' => 'E02005122',
        '7PR' => 'E02005123',
        '7PS' => 'E02005123',
        '7PT' => 'E02005123',
        '7PU' => 'E02005123',
        '7PW' => 'E02005123',
        '7PX' => 'E02005122',
        '7PY' => 'E02005123',
        '7PZ' => 'E02005124',
        '7QA' => 'E02005123',
        '7QB' => 'E02005123',
        '7QD' => 'E02005078',
        '7QE' => 'E02005078',
        '7QF' => 'E02005124',
        '7QG' => 'E02005123',
        '7QH' => 'E02005078',
        '7QJ' => 'E02005078',
        '7QL' => 'E02005078',
        '7QN' => 'E02005078',
        '7QP' => 'E02005078',
        '7QQ' => 'E02005122',
        '7QR' => 'E02005078',
        '7QS' => 'E02005078',
        '7QT' => 'E02005078',
        '7QW' => 'E02005124',
        '7QX' => 'E02005078',
        '7QY' => 'E02005078',
        '7QZ' => 'E02005124',
        '7RA' => 'E02005078',
        '7RB' => 'E02005078',
        '7RD' => 'E02005078',
        '7RE' => 'E02005124',
        '7RF' => 'E02005078',
        '7RG' => 'E02005122',
        '7RH' => 'E02005122',
        '7RJ' => 'E02005078',
        '7RL' => 'E02005078',
        '7RN' => 'E02005078',
        '7RP' => 'E02005078',
        '7RQ' => 'E02005122',
        '7RR' => 'E02005078',
        '7RS' => 'E02005078',
        '7RT' => 'E02005078',
        '7RU' => 'E02005078',
        '7RW' => 'E02005124',
        '7RX' => 'E02005078',
        '7RY' => 'E02005078',
        '7RZ' => 'E02005078',
        '7SA' => 'E02005078',
        '7SB' => 'E02005078',
        '7SD' => 'E02005122',
        '7SE' => 'E02005122',
        '7SF' => 'E02005124',
        '7SG' => 'E02005124',
        '7SH' => 'E02005122',
        '7SJ' => 'E02005122',
        '7SL' => 'E02005122',
        '7SN' => 'E02005122',
        '7SP' => 'E02005122',
        '7SQ' => 'E02005078',
        '7SR' => 'E02005122',
        '7SS' => 'E02005122',
        '7ST' => 'E02005122',
        '7SU' => 'E02005122',
        '7SX' => 'E02005122',
        '7SY' => 'E02005122',
        '7SZ' => 'E02005122',
        '7TA' => 'E02005122',
        '7TB' => 'E02005122',
        '7TD' => 'E02005122',
        '7TE' => 'E02005122',
        '7TF' => 'E02005124',
        '7TG' => 'E02005122',
        '7TH' => 'E02005122',
        '7TJ' => 'E02005122',
        '7TL' => 'E02005122',
        '7TN' => 'E02005122',
        '7TP' => 'E02005122',
        '7TQ' => 'E02005122',
        '7TR' => 'E02005122',
        '7TS' => 'E02005122',
        '7TT' => 'E02005122',
        '7TU' => 'E02005122',
        '7TW' => 'E02005122',
        '7TX' => 'E02005122',
        '7TY' => 'E02005122',
        '7TZ' => 'E02005124',
        '7UA' => 'E02005078',
        '7UB' => 'E02005078',
        '7UD' => 'E02005078',
        '7UE' => 'E02005078',
        '7UF' => 'E02005078',
        '7UG' => 'E02005078',
        '7UH' => 'E02005078',
        '7UJ' => 'E02005078',
        '7UL' => 'E02005078',
        '7UN' => 'E02005078',
        '7UP' => 'E02005078',
        '7UQ' => 'E02005078',
        '7UR' => 'E02005078',
        '7UT' => 'E02005078',
        '7UU' => 'E02005078',
        '7UX' => 'E02005122',
        '7UY' => 'E02003345',
        '7WA' => 'E02005124',
        '7WB' => 'E02005124',
        '7WS' => 'E02003345',
        '7WT' => 'E02003345',
        '7WZ' => 'E02005124',
        '7XA' => 'E02003345',
        '7XB' => 'E02003345',
        '7XD' => 'E02005122',
        '7XE' => 'E02005122',
        '7XF' => 'E02005122',
        '7XG' => 'E02005078',
        '7XH' => 'E02005122',
        '7XL' => 'E02005122',
        '7XQ' => 'E02005078',
        '7YB' => 'E02005124',
        '7YZ' => 'E02005124',
        '8AA' => 'E02005127',
        '8AB' => 'E02005127',
        '8AD' => 'E02005127',
        '8AE' => 'E02005127',
        '8AF' => 'E02005124',
        '8AG' => 'E02005127',
        '8AH' => 'E02005124',
        '8AJ' => 'E02005126',
        '8AL' => 'E02005123',
        '8AN' => 'E02005127',
        '8AP' => 'E02005127',
        '8AQ' => 'E02005127',
        '8AR' => 'E02005127',
        '8AS' => 'E02005127',
        '8AT' => 'E02005127',
        '8AU' => 'E02005078',
        '8AW' => 'E02005124',
        '8AX' => 'E02005078',
        '8AY' => 'E02005078',
        '8AZ' => 'E02005127',
        '8BA' => 'E02005078',
        '8BB' => 'E02005127',
        '8BD' => 'E02005127',
        '8BE' => 'E02005127',
        '8BF' => 'E02005124',
        '8BG' => 'E02005127',
        '8BH' => 'E02005127',
        '8BJ' => 'E02005078',
        '8BL' => 'E02005124',
        '8BN' => 'E02005124',
        '8BP' => 'E02005124',
        '8BQ' => 'E02005124',
        '8BS' => 'E02005123',
        '8BT' => 'E02005123',
        '8BU' => 'E02005123',
        '8BW' => 'E02005124',
        '8BX' => 'E02005123',
        '8BY' => 'E02005123',
        '8BZ' => 'E02005127',
        '8DA' => 'E02005123',
        '8DB' => 'E02005123',
        '8DD' => 'E02005123',
        '8DE' => 'E02005123',
        '8DF' => 'E02005124',
        '8DG' => 'E02005123',
        '8DH' => 'E02005123',
        '8DJ' => 'E02005123',
        '8DL' => 'E02005124',
        '8DN' => 'E02005124',
        '8DP' => 'E02005124',
        '8DQ' => 'E02005124',
        '8DR' => 'E02005127',
        '8DS' => 'E02005127',
        '8DT' => 'E02005124',
        '8DU' => 'E02005127',
        '8DW' => 'E02005121',
        '8DX' => 'E02005127',
        '8DY' => 'E02005127',
        '8DZ' => 'E02005123',
        '8EA' => 'E02005127',
        '8EB' => 'E02005127',
        '8ED' => 'E02005127',
        '8EE' => 'E02005127',
        '8EF' => 'E02005127',
        '8EG' => 'E02005127',
        '8EH' => 'E02005127',
        '8EJ' => 'E02005127',
        '8EL' => 'E02005127',
        '8EN' => 'E02005127',
        '8EP' => 'E02005127',
        '8EQ' => 'E02005123',
        '8ER' => 'E02005127',
        '8ES' => 'E02005127',
        '8ET' => 'E02005127',
        '8EU' => 'E02005127',
        '8EW' => 'E02005124',
        '8EX' => 'E02005127',
        '8EY' => 'E02005127',
        '8EZ' => 'E02005124',
        '8FA' => 'E02005124',
        '8FB' => 'E02005124',
        '8FD' => 'E02005124',
        '8FE' => 'E02005124',
        '8FF' => 'E02005123',
        '8FG' => 'E02005124',
        '8FH' => 'E02005123',
        '8FJ' => 'E02005123',
        '8FL' => 'E02005127',
        '8FN' => 'E02005121',
        '8FP' => 'E02005121',
        '8FQ' => 'E02005121',
        '8FR' => 'E02005121',
        '8FS' => 'E02005121',
        '8FT' => 'E02005121',
        '8FW' => 'E02005121',
        '8FX' => 'E02005121',
        '8FY' => 'E02005121',
        '8GA' => 'E02005127',
        '8GB' => 'E02005123',
        '8GD' => 'E02005123',
        '8GE' => 'E02005127',
        '8GF' => 'E02005121',
        '8GJ' => 'E02005124',
        '8GL' => 'E02005121',
        '8GN' => 'E02005121',
        '8GP' => 'E02005121',
        '8GQ' => 'E02005124',
        '8GR' => 'E02005121',
        '8GS' => 'E02005123',
        '8GU' => 'E02005127',
        '8GW' => 'E02005124',
        '8GY' => 'E02005121',
        '8GZ' => 'E02005123',
        '8HA' => 'E02005127',
        '8HB' => 'E02005127',
        '8HD' => 'E02005127',
        '8HE' => 'E02005127',
        '8HG' => 'E02005127',
        '8HH' => 'E02005127',
        '8HJ' => 'E02005124',
        '8HL' => 'E02005127',
        '8HN' => 'E02005124',
        '8HP' => 'E02005126',
        '8HQ' => 'E02005124',
        '8HR' => 'E02005123',
        '8HS' => 'E02005123',
        '8HT' => 'E02005123',
        '8HU' => 'E02005123',
        '8HW' => 'E02005123',
        '8HX' => 'E02005123',
        '8HY' => 'E02005123',
        '8HZ' => 'E02005123',
        '8JA' => 'E02005127',
        '8JB' => 'E02005127',
        '8JD' => 'E02005123',
        '8JE' => 'E02005123',
        '8JF' => 'E02005123',
        '8JG' => 'E02005123',
        '8JH' => 'E02005123',
        '8JJ' => 'E02005123',
        '8JL' => 'E02005123',
        '8JN' => 'E02005123',
        '8JP' => 'E02005123',
        '8JQ' => 'E02005123',
        '8JR' => 'E02005123',
        '8JS' => 'E02005123',
        '8JT' => 'E02005123',
        '8JU' => 'E02005123',
        '8JW' => 'E02005123',
        '8JX' => 'E02005123',
        '8JY' => 'E02005123',
        '8JZ' => 'E02005123',
        '8LA' => 'E02005123',
        '8LB' => 'E02005123',
        '8LD' => 'E02005123',
        '8LE' => 'E02005123',
        '8LF' => 'E02005124',
        '8LG' => 'E02005123',
        '8LH' => 'E02005123',
        '8LJ' => 'E02005123',
        '8LL' => 'E02005123',
        '8LN' => 'E02005123',
        '8LP' => 'E02005123',
        '8LQ' => 'E02005127',
        '8LR' => 'E02005123',
        '8LS' => 'E02005123',
        '8LT' => 'E02005123',
        '8LU' => 'E02005121',
        '8LW' => 'E02005124',
        '8LX' => 'E02005124',
        '8LY' => 'E02005121',
        '8LZ' => 'E02005123',
        '8NA' => 'E02005122',
        '8NB' => 'E02005123',
        '8ND' => 'E02005123',
        '8NE' => 'E02005122',
        '8NF' => 'E02005124',
        '8NG' => 'E02005123',
        '8NH' => 'E02005124',
        '8NL' => 'E02005123',
        '8NN' => 'E02005123',
        '8NP' => 'E02005127',
        '8NQ' => 'E02005123',
        '8NY' => 'E02005123',
        '8NZ' => 'E02005124',
        '8PA' => 'E02005123',
        '8PB' => 'E02005123',
        '8PD' => 'E02005123',
        '8PE' => 'E02005123',
        '8PF' => 'E02005124',
        '8PG' => 'E02005123',
        '8PH' => 'E02005123',
        '8PJ' => 'E02005123',
        '8PL' => 'E02005123',
        '8PN' => 'E02005123',
        '8PP' => 'E02005123',
        '8PQ' => 'E02005124',
        '8PS' => 'E02005127',
        '8PT' => 'E02005123',
        '8PU' => 'E02005123',
        '8PW' => 'E02005124',
        '8PX' => 'E02005127',
        '8PY' => 'E02005121',
        '8PZ' => 'E02005123',
        '8QA' => 'E02005123',
        '8QB' => 'E02005123',
        '8QD' => 'E02005123',
        '8QE' => 'E02005121',
        '8QG' => 'E02005121',
        '8QH' => 'E02005121',
        '8QJ' => 'E02005121',
        '8QL' => 'E02005123',
        '8QN' => 'E02005123',
        '8QP' => 'E02005123',
        '8QQ' => 'E02005124',
        '8QR' => 'E02005123',
        '8QS' => 'E02005123',
        '8QT' => 'E02005123',
        '8QU' => 'E02005121',
        '8QW' => 'E02005121',
        '8QX' => 'E02005121',
        '8QY' => 'E02005121',
        '8QZ' => 'E02005121',
        '8RA' => 'E02005121',
        '8RB' => 'E02005121',
        '8RD' => 'E02005121',
        '8RE' => 'E02005121',
        '8RF' => 'E02005124',
        '8RG' => 'E02005121',
        '8RH' => 'E02005121',
        '8RJ' => 'E02005121',
        '8RL' => 'E02005121',
        '8RN' => 'E02005121',
        '8RP' => 'E02005121',
        '8RQ' => 'E02005121',
        '8RR' => 'E02005121',
        '8RS' => 'E02005121',
        '8RT' => 'E02005121',
        '8RU' => 'E02005121',
        '8RW' => 'E02005121',
        '8RX' => 'E02005121',
        '8RY' => 'E02005121',
        '8RZ' => 'E02005123',
        '8SA' => 'E02005121',
        '8SB' => 'E02005121',
        '8SD' => 'E02005121',
        '8SE' => 'E02005121',
        '8SG' => 'E02005121',
        '8SH' => 'E02005121',
        '8SJ' => 'E02005121',
        '8SL' => 'E02005121',
        '8SN' => 'E02005121',
        '8SP' => 'E02005121',
        '8SQ' => 'E02005121',
        '8SR' => 'E02005121',
        '8SS' => 'E02005121',
        '8ST' => 'E02005121',
        '8SU' => 'E02005121',
        '8SW' => 'E02005121',
        '8SX' => 'E02005127',
        '8SY' => 'E02005124',
        '8SZ' => 'E02005124',
        '8TA' => 'E02005123',
        '8TB' => 'E02005123',
        '8TD' => 'E02005121',
        '8TE' => 'E02005121',
        '8TF' => 'E02005124',
        '8TG' => 'E02005121',
        '8TH' => 'E02005121',
        '8TJ' => 'E02005121',
        '8TL' => 'E02005121',
        '8TN' => 'E02005121',
        '8TP' => 'E02005121',
        '8TQ' => 'E02005121',
        '8TR' => 'E02005121',
        '8TS' => 'E02005124',
        '8TT' => 'E02005121',
        '8TU' => 'E02005121',
        '8TW' => 'E02005121',
        '8TX' => 'E02005121',
        '8TY' => 'E02005121',
        '8TZ' => 'E02005121',
        '8UA' => 'E02005124',
        '8UB' => 'E02005124',
        '8UD' => 'E02005121',
        '8UE' => 'E02005124',
        '8UF' => 'E02005124',
        '8UG' => 'E02005121',
        '8UH' => 'E02005121',
        '8UJ' => 'E02005121',
        '8UL' => 'E02005124',
        '8UN' => 'E02005124',
        '8UP' => 'E02005124',
        '8UQ' => 'E02005121',
        '8UR' => 'E02005124',
        '8US' => 'E02005121',
        '8UT' => 'E02005121',
        '8UU' => 'E02005121',
        '8UW' => 'E02005121',
        '8UX' => 'E02005124',
        '8UY' => 'E02005121',
        '8WA' => 'E02005124',
        '8WB' => 'E02005124',
        '8WD' => 'E02005121',
        '8WE' => 'E02005124',
        '8WF' => 'E02005124',
        '8WG' => 'E02005124',
        '8WH' => 'E02005121',
        '8WJ' => 'E02005121',
        '8WL' => 'E02005121',
        '8WN' => 'E02005121',
        '8WP' => 'E02005121',
        '8WQ' => 'E02005121',
        '8WR' => 'E02005121',
        '8WS' => 'E02005121',
        '8WT' => 'E02005124',
        '8WU' => 'E02005124',
        '8WW' => 'E02005124',
        '8WX' => 'E02005124',
        '8WY' => 'E02005121',
        '8WZ' => 'E02005124',
        '8XA' => 'E02005121',
        '8XB' => 'E02005121',
        '8XD' => 'E02005121',
        '8XE' => 'E02005121',
        '8XF' => 'E02005121',
        '8XG' => 'E02005121',
        '8XH' => 'E02005121',
        '8XZ' => 'E02005121',
        '8YA' => 'E02005124',
        '8YF' => 'E02005121',
        '8YJ' => 'E02005121',
        '8YQ' => 'E02005124',
        '8YS' => 'E02005124',
        '8YZ' => 'E02005123',
        '9AA' => 'E02005127',
        '9AB' => 'E02005127',
        '9AD' => 'E02005127',
        '9AE' => 'E02005127',
        '9AF' => 'E02005127',
        '9AG' => 'E02005130',
        '9AH' => 'E02005127',
        '9AJ' => 'E02005130',
        '9AL' => 'E02005127',
        '9AN' => 'E02005130',
        '9AP' => 'E02005130',
        '9AQ' => 'E02005127',
        '9AR' => 'E02005130',
        '9AS' => 'E02005130',
        '9AT' => 'E02005130',
        '9AU' => 'E02005130',
        '9AW' => 'E02005130',
        '9AX' => 'E02005130',
        '9AY' => 'E02005130',
        '9AZ' => 'E02005127',
        '9BA' => 'E02005130',
        '9BB' => 'E02005125',
        '9BD' => 'E02005130',
        '9BE' => 'E02005130',
        '9BG' => 'E02005130',
        '9BH' => 'E02005127',
        '9BJ' => 'E02005130',
        '9BN' => 'E02005130',
        '9BP' => 'E02005130',
        '9BQ' => 'E02005130',
        '9BS' => 'E02005130',
        '9BT' => 'E02005130',
        '9BU' => 'E02005130',
        '9BX' => 'E02005130',
        '9BY' => 'E02005130',
        '9DA' => 'E02005130',
        '9DB' => 'E02005130',
        '9DD' => 'E02005130',
        '9DE' => 'E02005130',
        '9DF' => 'E02005130',
        '9DG' => 'E02005130',
        '9DH' => 'E02005130',
        '9DJ' => 'E02005130',
        '9DL' => 'E02005130',
        '9DP' => 'E02005130',
        '9DQ' => 'E02005124',
        '9DR' => 'E02005130',
        '9DT' => 'E02005130',
        '9DU' => 'E02005130',
        '9DW' => 'E02005130',
        '9DX' => 'E02005130',
        '9EA' => 'E02005130',
        '9EB' => 'E02005130',
        '9ED' => 'E02005130',
        '9EE' => 'E02005130',
        '9EF' => 'E02005130',
        '9EG' => 'E02005130',
        '9EH' => 'E02005130',
        '9EJ' => 'E02005130',
        '9EL' => 'E02005130',
        '9EN' => 'E02005130',
        '9EQ' => 'E02005130',
        '9ES' => 'E02005130',
        '9ET' => 'E02005130',
        '9EU' => 'E02005130',
        '9EW' => 'E02005130',
        '9EX' => 'E02005130',
        '9EZ' => 'E02005130',
        '9GA' => 'E02005124',
        '9HA' => 'E02005130',
        '9HB' => 'E02005130',
        '9HD' => 'E02005130',
        '9HF' => 'E02005130',
        '9HH' => 'E02005130',
        '9HJ' => 'E02005130',
        '9HL' => 'E02005130',
        '9HN' => 'E02005130',
        '9HP' => 'E02005130',
        '9HQ' => 'E02005130',
        '9HR' => 'E02005130',
        '9HS' => 'E02005130',
        '9HT' => 'E02005130',
        '9HU' => 'E02005130',
        '9HW' => 'E02005130',
        '9HX' => 'E02005130',
        '9HY' => 'E02005124',
        '9JB' => 'E02005130',
        '9JD' => 'E02005130',
        '9JE' => 'E02005130',
        '9JF' => 'E02005127',
        '9JH' => 'E02005130',
        '9JJ' => 'E02005130',
        '9JN' => 'E02005130',
        '9JP' => 'E02005130',
        '9JQ' => 'E02005130',
        '9JS' => 'E02005130',
        '9JT' => 'E02005130',
        '9JU' => 'E02005130',
        '9JW' => 'E02005130',
        '9JX' => 'E02005130',
        '9JY' => 'E02005130',
        '9LA' => 'E02005130',
        '9LB' => 'E02005130',
        '9LD' => 'E02005130',
        '9LE' => 'E02005124',
        '9LF' => 'E02005130',
        '9LG' => 'E02005124',
        '9LH' => 'E02005130',
        '9LJ' => 'E02005130',
        '9LL' => 'E02005130',
        '9LN' => 'E02005127',
        '9LP' => 'E02005130',
        '9LR' => 'E02005130',
        '9LS' => 'E02005130',
        '9LT' => 'E02005124',
        '9LX' => 'E02005127',
        '9LZ' => 'E02005130',
        '9NB' => 'E02005127',
        '9ND' => 'E02005127',
        '9NF' => 'E02005127',
        '9NH' => 'E02005127',
        '9NJ' => 'E02005127',
        '9NL' => 'E02005127',
        '9NP' => 'E02005130',
        '9NQ' => 'E02005127',
        '9NR' => 'E02005130',
        '9NS' => 'E02005130',
        '9NT' => 'E02005130',
        '9NU' => 'E02005130',
        '9NX' => 'E02005130',
        '9PA' => 'E02005130',
        '9PB' => 'E02005130',
        '9PD' => 'E02005130',
        '9PF' => 'E02005130',
        '9PH' => 'E02005127',
        '9PJ' => 'E02005127',
        '9PL' => 'E02005127',
        '9PN' => 'E02005127',
        '9PP' => 'E02005127',
        '9PQ' => 'E02005130',
        '9PR' => 'E02005130',
        '9PS' => 'E02005130',
        '9PT' => 'E02005130',
        '9PU' => 'E02005130',
        '9PW' => 'E02005127',
        '9PX' => 'E02005130',
        '9PY' => 'E02005130',
        '9QA' => 'E02005130',
        '9QB' => 'E02005130',
        '9QD' => 'E02005130',
        '9QG' => 'E02005130',
        '9QH' => 'E02005130',
        '9QJ' => 'E02005130',
        '9QL' => 'E02005130',
        '9QN' => 'E02005130',
        '9QR' => 'E02005130',
        '9QS' => 'E02005130',
        '9QT' => 'E02005130',
        '9QW' => 'E02005130',
        '9QY' => 'E02005130',
        '9RA' => 'E02005130',
        '9RB' => 'E02005130',
        '9RD' => 'E02005130',
        '9RE' => 'E02005130',
        '9RH' => 'E02005130',
        '9RJ' => 'E02005130',
        '9RL' => 'E02005130',
        '9RN' => 'E02005130',
        '9RP' => 'E02005130',
        '9RR' => 'E02005130',
        '9RS' => 'E02005130',
        '9RX' => 'E02005130',
        '9SA' => 'E02005130',
        '9SB' => 'E02005130',
        '9SD' => 'E02005130',
        '9SE' => 'E02005130',
        '9SF' => 'E02005130',
        '9SG' => 'E02005130',
        '9SJ' => 'E02005130',
        '9SL' => 'E02005130',
        '9SN' => 'E02005130',
        '9SP' => 'E02005130',
        '9SQ' => 'E02005130',
        '9SR' => 'E02005130',
        '9SS' => 'E02005130',
        '9ST' => 'E02005130',
        '9SU' => 'E02005130',
        '9SW' => 'E02005127',
        '9SX' => 'E02005130',
        '9SY' => 'E02005130',
        '9TA' => 'E02005130',
        '9TB' => 'E02005130',
        '9TD' => 'E02005130',
        '9TE' => 'E02005130',
        '9TF' => 'E02005130',
        '9TG' => 'E02005130',
        '9TH' => 'E02005130',
        '9TJ' => 'E02005130',
        '9TL' => 'E02005130',
        '9TN' => 'E02005130',
        '9TP' => 'E02005130',
        '9TQ' => 'E02005130',
        '9TU' => 'E02005130',
        '9TW' => 'E02005130',
        '9TX' => 'E02005130',
        '9WA' => 'E02005130',
        '9WB' => 'E02005124',
        '9WE' => 'E02005130',
        '9WH' => 'E02005124',
        '9WJ' => 'E02005124',
        '9WN' => 'E02005130',
        '9WX' => 'E02005124',
        '9YB' => 'E02005124',
        '9YJ' => 'E02005124',
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