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
final class CO2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004523',
        '0AB' => 'E02004523',
        '0AD' => 'E02004523',
        '0AE' => 'E02004523',
        '0AF' => 'E02004523',
        '0AG' => 'E02004523',
        '0AH' => 'E02004523',
        '0AJ' => 'E02004523',
        '0AL' => 'E02004523',
        '0AN' => 'E02004523',
        '0AP' => 'E02004523',
        '0AQ' => 'E02004523',
        '0AR' => 'E02004523',
        '0AS' => 'E02004523',
        '0AT' => 'E02004523',
        '0AU' => 'E02004523',
        '0AW' => 'E02004523',
        '0AX' => 'E02004523',
        '0AY' => 'E02004523',
        '0AZ' => 'E02004523',
        '0BA' => 'E02004523',
        '0BB' => 'E02004523',
        '0BD' => 'E02004523',
        '0BE' => 'E02004523',
        '0BG' => 'E02004521',
        '0BH' => 'E02004521',
        '0BJ' => 'E02004521',
        '0BL' => 'E02004521',
        '0BN' => 'E02004521',
        '0BP' => 'E02004521',
        '0BQ' => 'E02004523',
        '0BR' => 'E02004523',
        '0BS' => 'E02004524',
        '0BT' => 'E02004524',
        '0BU' => 'E02004521',
        '0BW' => 'E02004521',
        '0BX' => 'E02004521',
        '0BY' => 'E02004521',
        '0BZ' => 'E02004521',
        '0DA' => 'E02004521',
        '0DB' => 'E02004523',
        '0DD' => 'E02004524',
        '0DE' => 'E02004523',
        '0DF' => 'E02004520',
        '0DG' => 'E02004521',
        '0DH' => 'E02004521',
        '0DJ' => 'E02004521',
        '0DL' => 'E02004521',
        '0DN' => 'E02004521',
        '0DP' => 'E02004521',
        '0DQ' => 'E02004512',
        '0DR' => 'E02004521',
        '0DS' => 'E02004524',
        '0DT' => 'E02004524',
        '0DU' => 'E02004524',
        '0DW' => 'E02004521',
        '0DX' => 'E02004524',
        '0DY' => 'E02004524',
        '0DZ' => 'E02004524',
        '0EA' => 'E02004524',
        '0EB' => 'E02004524',
        '0ED' => 'E02004524',
        '0EE' => 'E02004524',
        '0EF' => 'E02004524',
        '0EG' => 'E02004524',
        '0EH' => 'E02004524',
        '0EJ' => 'E02004524',
        '0EL' => 'E02004524',
        '0EN' => 'E02004524',
        '0EP' => 'E02004524',
        '0EQ' => 'E02004524',
        '0ER' => 'E02004524',
        '0ES' => 'E02004512',
        '0ET' => 'E02004524',
        '0EU' => 'E02004524',
        '0EW' => 'E02004524',
        '0EX' => 'E02004524',
        '0EY' => 'E02004512',
        '0EZ' => 'E02004512',
        '0FB' => 'E02004524',
        '0FD' => 'E02004512',
        '0FN' => 'E02004524',
        '0HH' => 'E02004517',
        '0HJ' => 'E02004517',
        '0HR' => 'E02004520',
        '0HS' => 'E02004517',
        '0HT' => 'E02004520',
        '0HU' => 'E02004524',
        '0HZ' => 'E02004524',
        '0JA' => 'E02004524',
        '0JB' => 'E02004524',
        '0JD' => 'E02004524',
        '0JE' => 'E02004524',
        '0JF' => 'E02004524',
        '0JG' => 'E02004524',
        '0JH' => 'E02004524',
        '0JJ' => 'E02004524',
        '0JL' => 'E02004524',
        '0JN' => 'E02004524',
        '0JP' => 'E02004524',
        '0JQ' => 'E02004524',
        '0JR' => 'E02004524',
        '0JS' => 'E02004524',
        '0JT' => 'E02004524',
        '0JU' => 'E02004524',
        '0JW' => 'E02004524',
        '0JX' => 'E02004524',
        '0JY' => 'E02004524',
        '0JZ' => 'E02004524',
        '0LA' => 'E02004524',
        '0LB' => 'E02004524',
        '0LD' => 'E02004524',
        '0LE' => 'E02004524',
        '0LF' => 'E02004524',
        '0LG' => 'E02004524',
        '0LH' => 'E02004524',
        '0LJ' => 'E02004524',
        '0LL' => 'E02004524',
        '0LN' => 'E02004524',
        '0LP' => 'E02004524',
        '0LQ' => 'E02004524',
        '0LR' => 'E02004524',
        '0LS' => 'E02004524',
        '0LT' => 'E02004524',
        '0LU' => 'E02004524',
        '0LW' => 'E02004524',
        '0LX' => 'E02004512',
        '0LY' => 'E02004524',
        '0LZ' => 'E02004524',
        '0NA' => 'E02004524',
        '0NB' => 'E02004524',
        '0ND' => 'E02004524',
        '0NE' => 'E02004524',
        '0NF' => 'E02004524',
        '0NG' => 'E02004524',
        '0NH' => 'E02004524',
        '0NJ' => 'E02004524',
        '0NL' => 'E02004524',
        '0NN' => 'E02004524',
        '0NP' => 'E02004524',
        '0NQ' => 'E02004524',
        '0NR' => 'E02004524',
        '0NS' => 'E02004524',
        '0NT' => 'E02004524',
        '0NU' => 'E02004524',
        '0NW' => 'E02004524',
        '0NX' => 'E02004524',
        '0NY' => 'E02004524',
        '0NZ' => 'E02004524',
        '0PA' => 'E02004524',
        '0PB' => 'E02004524',
        '0PD' => 'E02004524',
        '0PE' => 'E02004524',
        '0PF' => 'E02004524',
        '0PG' => 'E02004524',
        '0PH' => 'E02004512',
        '0PJ' => 'E02004524',
        '0PL' => 'E02004524',
        '0PN' => 'E02004524',
        '0PP' => 'E02004524',
        '0PR' => 'E02004524',
        '0PS' => 'E02004524',
        '0PT' => 'E02004524',
        '0PU' => 'E02004524',
        '0PW' => 'E02004524',
        '0PX' => 'E02004524',
        '0PY' => 'E02004524',
        '0PZ' => 'E02004524',
        '0QX' => 'E02004512',
        '0WA' => 'E02004512',
        '0WB' => 'E02004512',
        '0WD' => 'E02004512',
        '0WE' => 'E02004512',
        '0WZ' => 'E02004512',
        '0XP' => 'E02004512',
        '0YB' => 'E02004512',
        '0YF' => 'E02004524',
        '7AA' => 'E02004512',
        '7AB' => 'E02004512',
        '7AD' => 'E02004512',
        '7AE' => 'E02004512',
        '7AF' => 'E02004512',
        '7AG' => 'E02004512',
        '7AH' => 'E02004512',
        '7AJ' => 'E02004512',
        '7AL' => 'E02004512',
        '7AN' => 'E02004512',
        '7AP' => 'E02004518',
        '7AQ' => 'E02004512',
        '7AR' => 'E02004512',
        '7AS' => 'E02004512',
        '7AT' => 'E02004512',
        '7AU' => 'E02004516',
        '7AW' => 'E02004518',
        '7AX' => 'E02004516',
        '7AZ' => 'E02004516',
        '7BA' => 'E02004512',
        '7BB' => 'E02004516',
        '7BD' => 'E02004512',
        '7BE' => 'E02004518',
        '7BG' => 'E02004516',
        '7BH' => 'E02004516',
        '7BJ' => 'E02004516',
        '7BL' => 'E02004516',
        '7BN' => 'E02004516',
        '7BP' => 'E02004516',
        '7BQ' => 'E02004512',
        '7BS' => 'E02004516',
        '7BT' => 'E02004512',
        '7BU' => 'E02004518',
        '7BW' => 'E02004516',
        '7BX' => 'E02004523',
        '7BY' => 'E02004518',
        '7BZ' => 'E02004518',
        '7DA' => 'E02004512',
        '7DB' => 'E02004512',
        '7DD' => 'E02004512',
        '7DE' => 'E02004512',
        '7DF' => 'E02004512',
        '7DG' => 'E02004512',
        '7DH' => 'E02004523',
        '7DJ' => 'E02004512',
        '7DL' => 'E02004512',
        '7DN' => 'E02004512',
        '7DP' => 'E02004512',
        '7DQ' => 'E02004512',
        '7DR' => 'E02004512',
        '7DS' => 'E02004512',
        '7DT' => 'E02004512',
        '7DU' => 'E02004512',
        '7DW' => 'E02004523',
        '7DX' => 'E02004512',
        '7DY' => 'E02004512',
        '7DZ' => 'E02004512',
        '7EA' => 'E02004512',
        '7EB' => 'E02004512',
        '7ED' => 'E02004516',
        '7EE' => 'E02004512',
        '7EF' => 'E02004516',
        '7EG' => 'E02004523',
        '7EH' => 'E02004516',
        '7EJ' => 'E02004516',
        '7EL' => 'E02004516',
        '7EN' => 'E02004516',
        '7EP' => 'E02004516',
        '7EQ' => 'E02004516',
        '7ER' => 'E02004516',
        '7ES' => 'E02004516',
        '7ET' => 'E02004516',
        '7EU' => 'E02004516',
        '7EW' => 'E02004516',
        '7EX' => 'E02004516',
        '7EY' => 'E02004512',
        '7EZ' => 'E02004516',
        '7FA' => 'E02004516',
        '7FB' => 'E02004518',
        '7FD' => 'E02004523',
        '7FF' => 'E02004518',
        '7FG' => 'E02004518',
        '7FH' => 'E02004518',
        '7FJ' => 'E02004518',
        '7FL' => 'E02004518',
        '7FN' => 'E02004523',
        '7FP' => 'E02004518',
        '7FQ' => 'E02004516',
        '7FR' => 'E02004518',
        '7FS' => 'E02004518',
        '7FT' => 'E02004518',
        '7FU' => 'E02004518',
        '7FW' => 'E02004516',
        '7FX' => 'E02004516',
        '7FY' => 'E02004516',
        '7FZ' => 'E02004516',
        '7GA' => 'E02004516',
        '7GB' => 'E02004516',
        '7GD' => 'E02004518',
        '7GE' => 'E02004518',
        '7GF' => 'E02004518',
        '7GG' => 'E02004516',
        '7GH' => 'E02004518',
        '7GJ' => 'E02004516',
        '7GL' => 'E02004518',
        '7GN' => 'E02004518',
        '7GP' => 'E02004516',
        '7GQ' => 'E02004516',
        '7GR' => 'E02004516',
        '7GS' => 'E02004516',
        '7GT' => 'E02004516',
        '7GU' => 'E02004516',
        '7GW' => 'E02004512',
        '7GX' => 'E02004512',
        '7GY' => 'E02004512',
        '7GZ' => 'E02004518',
        '7HA' => 'E02004516',
        '7HB' => 'E02004512',
        '7HD' => 'E02004516',
        '7HE' => 'E02004516',
        '7HF' => 'E02004518',
        '7HG' => 'E02004518',
        '7HH' => 'E02004518',
        '7HJ' => 'E02004518',
        '7HL' => 'E02004523',
        '7HN' => 'E02004518',
        '7HP' => 'E02004518',
        '7HQ' => 'E02004518',
        '7HR' => 'E02004518',
        '7HS' => 'E02004518',
        '7HT' => 'E02004518',
        '7HU' => 'E02004518',
        '7HW' => 'E02004518',
        '7HX' => 'E02004518',
        '7HY' => 'E02004518',
        '7HZ' => 'E02004518',
        '7JA' => 'E02004518',
        '7JB' => 'E02004518',
        '7JD' => 'E02004520',
        '7JE' => 'E02004518',
        '7JF' => 'E02004518',
        '7JG' => 'E02004518',
        '7JH' => 'E02004518',
        '7JJ' => 'E02004518',
        '7JL' => 'E02004518',
        '7JN' => 'E02004518',
        '7JP' => 'E02004518',
        '7JQ' => 'E02004518',
        '7JR' => 'E02004518',
        '7JS' => 'E02004518',
        '7JT' => 'E02004518',
        '7JU' => 'E02004518',
        '7JW' => 'E02004518',
        '7JX' => 'E02004520',
        '7JY' => 'E02004518',
        '7JZ' => 'E02004520',
        '7LA' => 'E02004523',
        '7LB' => 'E02004518',
        '7LD' => 'E02004516',
        '7LE' => 'E02004516',
        '7LF' => 'E02004516',
        '7LG' => 'E02004516',
        '7LH' => 'E02004516',
        '7LJ' => 'E02004516',
        '7LL' => 'E02004516',
        '7LN' => 'E02004516',
        '7LP' => 'E02004516',
        '7LQ' => 'E02004516',
        '7LR' => 'E02004516',
        '7LS' => 'E02004516',
        '7LT' => 'E02004516',
        '7LU' => 'E02004516',
        '7LW' => 'E02004516',
        '7LX' => 'E02004516',
        '7LY' => 'E02004516',
        '7LZ' => 'E02004516',
        '7NA' => 'E02004518',
        '7NB' => 'E02004518',
        '7ND' => 'E02004518',
        '7NE' => 'E02004518',
        '7NF' => 'E02004518',
        '7NG' => 'E02004518',
        '7NH' => 'E02004518',
        '7NJ' => 'E02004518',
        '7NL' => 'E02004523',
        '7NN' => 'E02004512',
        '7NP' => 'E02004516',
        '7NQ' => 'E02004518',
        '7NR' => 'E02004516',
        '7NS' => 'E02004516',
        '7NT' => 'E02004516',
        '7NU' => 'E02004516',
        '7NW' => 'E02004516',
        '7NX' => 'E02004516',
        '7NY' => 'E02004516',
        '7NZ' => 'E02004518',
        '7PA' => 'E02004523',
        '7PB' => 'E02004523',
        '7PD' => 'E02004523',
        '7PE' => 'E02004523',
        '7PF' => 'E02004523',
        '7PG' => 'E02004523',
        '7PH' => 'E02004523',
        '7PJ' => 'E02004523',
        '7PL' => 'E02004523',
        '7PN' => 'E02004523',
        '7PP' => 'E02004523',
        '7PQ' => 'E02004523',
        '7PR' => 'E02004523',
        '7PS' => 'E02004523',
        '7PT' => 'E02004523',
        '7PU' => 'E02004523',
        '7PW' => 'E02004523',
        '7PX' => 'E02004523',
        '7PY' => 'E02004523',
        '7PZ' => 'E02004523',
        '7QA' => 'E02004523',
        '7QB' => 'E02004523',
        '7QD' => 'E02004523',
        '7QE' => 'E02004523',
        '7QF' => 'E02004523',
        '7QG' => 'E02004523',
        '7QH' => 'E02004523',
        '7QJ' => 'E02004523',
        '7QL' => 'E02004523',
        '7QN' => 'E02004523',
        '7QP' => 'E02004523',
        '7QQ' => 'E02004523',
        '7QR' => 'E02004516',
        '7QS' => 'E02004516',
        '7QT' => 'E02004523',
        '7QU' => 'E02004523',
        '7QW' => 'E02004523',
        '7QX' => 'E02004523',
        '7QY' => 'E02004523',
        '7QZ' => 'E02004523',
        '7RA' => 'E02004516',
        '7RB' => 'E02004516',
        '7RD' => 'E02004523',
        '7RE' => 'E02004523',
        '7RF' => 'E02004523',
        '7RG' => 'E02004523',
        '7RH' => 'E02004523',
        '7RJ' => 'E02004523',
        '7RL' => 'E02004516',
        '7RN' => 'E02004516',
        '7RP' => 'E02004516',
        '7RQ' => 'E02004516',
        '7RR' => 'E02004516',
        '7RS' => 'E02004523',
        '7RT' => 'E02004516',
        '7RU' => 'E02004516',
        '7RW' => 'E02004516',
        '7RX' => 'E02004516',
        '7RY' => 'E02004516',
        '7RZ' => 'E02004516',
        '7SA' => 'E02004516',
        '7SB' => 'E02004516',
        '7SD' => 'E02004516',
        '7SE' => 'E02004516',
        '7SF' => 'E02004516',
        '7SG' => 'E02004516',
        '7SH' => 'E02004523',
        '7SJ' => 'E02004516',
        '7SL' => 'E02004516',
        '7SN' => 'E02004512',
        '7SP' => 'E02004516',
        '7SQ' => 'E02004518',
        '7SR' => 'E02004516',
        '7SS' => 'E02004516',
        '7ST' => 'E02004516',
        '7SU' => 'E02004518',
        '7SW' => 'E02004516',
        '7SX' => 'E02004516',
        '7SY' => 'E02004516',
        '7SZ' => 'E02004516',
        '7TA' => 'E02004516',
        '7TB' => 'E02004516',
        '7TD' => 'E02004516',
        '7TE' => 'E02004518',
        '7TF' => 'E02004523',
        '7TG' => 'E02004523',
        '7TH' => 'E02004516',
        '7TJ' => 'E02004523',
        '7TL' => 'E02004518',
        '7TN' => 'E02004518',
        '7TP' => 'E02004518',
        '7TQ' => 'E02004518',
        '7TR' => 'E02004518',
        '7TS' => 'E02004518',
        '7TT' => 'E02004523',
        '7TU' => 'E02004523',
        '7TW' => 'E02004518',
        '7TX' => 'E02004518',
        '7TY' => 'E02004518',
        '7TZ' => 'E02004518',
        '7UA' => 'E02004518',
        '7UB' => 'E02004516',
        '7UD' => 'E02004516',
        '7UE' => 'E02004518',
        '7UF' => 'E02004518',
        '7UG' => 'E02004518',
        '7UH' => 'E02004518',
        '7UJ' => 'E02004520',
        '7UL' => 'E02004516',
        '7UN' => 'E02004518',
        '7UP' => 'E02004518',
        '7UQ' => 'E02004518',
        '7UR' => 'E02004518',
        '7US' => 'E02004518',
        '7UT' => 'E02004518',
        '7UU' => 'E02004518',
        '7UW' => 'E02004518',
        '7UX' => 'E02004518',
        '7UY' => 'E02004518',
        '7UZ' => 'E02004518',
        '7WA' => 'E02004518',
        '7WB' => 'E02004518',
        '7WD' => 'E02004518',
        '7WE' => 'E02004518',
        '7WL' => 'E02004518',
        '7WN' => 'E02004512',
        '7WP' => 'E02004512',
        '7WQ' => 'E02004512',
        '7WS' => 'E02004512',
        '7WZ' => 'E02004512',
        '7XA' => 'E02004520',
        '7XB' => 'E02004518',
        '7XD' => 'E02004520',
        '7XE' => 'E02004520',
        '7XF' => 'E02004520',
        '7XG' => 'E02004520',
        '7XH' => 'E02004520',
        '7XQ' => 'E02004520',
        '7XR' => 'E02004512',
        '7XT' => 'E02004512',
        '7YH' => 'E02004512',
        '7YP' => 'E02004512',
        '7YQ' => 'E02004520',
        '7YZ' => 'E02004518',
        '8AA' => 'E02004516',
        '8AB' => 'E02004521',
        '8AD' => 'E02004521',
        '8AE' => 'E02004521',
        '8AF' => 'E02004521',
        '8AG' => 'E02004521',
        '8AH' => 'E02004521',
        '8AJ' => 'E02004521',
        '8AL' => 'E02004521',
        '8AN' => 'E02004521',
        '8AP' => 'E02004521',
        '8AQ' => 'E02004521',
        '8AR' => 'E02004521',
        '8AS' => 'E02004521',
        '8AT' => 'E02004521',
        '8AU' => 'E02004521',
        '8AW' => 'E02004521',
        '8AX' => 'E02004521',
        '8AY' => 'E02004521',
        '8AZ' => 'E02004521',
        '8BA' => 'E02004521',
        '8BB' => 'E02004521',
        '8BD' => 'E02004521',
        '8BE' => 'E02004521',
        '8BG' => 'E02004521',
        '8BH' => 'E02004521',
        '8BJ' => 'E02004521',
        '8BL' => 'E02004521',
        '8BN' => 'E02004521',
        '8BP' => 'E02004521',
        '8BQ' => 'E02004521',
        '8BS' => 'E02004521',
        '8BT' => 'E02004521',
        '8BU' => 'E02004521',
        '8BW' => 'E02004521',
        '8BX' => 'E02004521',
        '8BY' => 'E02004521',
        '8BZ' => 'E02004521',
        '8DA' => 'E02004521',
        '8DB' => 'E02004521',
        '8DD' => 'E02004521',
        '8DE' => 'E02004521',
        '8DF' => 'E02004523',
        '8DG' => 'E02004521',
        '8DH' => 'E02004521',
        '8DJ' => 'E02004521',
        '8DL' => 'E02004521',
        '8DN' => 'E02004521',
        '8DP' => 'E02004521',
        '8DQ' => 'E02004521',
        '8DR' => 'E02004521',
        '8DS' => 'E02004521',
        '8DT' => 'E02004521',
        '8DU' => 'E02004521',
        '8DW' => 'E02004521',
        '8DX' => 'E02004521',
        '8DY' => 'E02004521',
        '8DZ' => 'E02004521',
        '8EA' => 'E02004521',
        '8EB' => 'E02004521',
        '8ED' => 'E02004521',
        '8EE' => 'E02004521',
        '8EF' => 'E02004521',
        '8EG' => 'E02004521',
        '8EH' => 'E02004521',
        '8EJ' => 'E02004521',
        '8EL' => 'E02004521',
        '8EN' => 'E02004521',
        '8EP' => 'E02004521',
        '8EQ' => 'E02004521',
        '8ER' => 'E02004521',
        '8ES' => 'E02004512',
        '8ET' => 'E02004521',
        '8EU' => 'E02004523',
        '8EW' => 'E02004521',
        '8EX' => 'E02004521',
        '8EY' => 'E02004521',
        '8EZ' => 'E02004521',
        '8FA' => 'E02004521',
        '8FB' => 'E02004523',
        '8FD' => 'E02004523',
        '8FE' => 'E02004512',
        '8FF' => 'E02004523',
        '8FG' => 'E02004512',
        '8FH' => 'E02004512',
        '8FJ' => 'E02004523',
        '8FL' => 'E02004521',
        '8FN' => 'E02004513',
        '8FP' => 'E02004513',
        '8FQ' => 'E02004521',
        '8FR' => 'E02004513',
        '8FS' => 'E02004523',
        '8FT' => 'E02004512',
        '8FU' => 'E02004516',
        '8FW' => 'E02004512',
        '8FX' => 'E02004513',
        '8FY' => 'E02004512',
        '8FZ' => 'E02004521',
        '8GA' => 'E02004512',
        '8GB' => 'E02004512',
        '8GD' => 'E02004512',
        '8GE' => 'E02004513',
        '8GF' => 'E02004512',
        '8GG' => 'E02004512',
        '8GJ' => 'E02004512',
        '8GL' => 'E02004513',
        '8GN' => 'E02004513',
        '8GP' => 'E02004512',
        '8GQ' => 'E02004513',
        '8GR' => 'E02004512',
        '8GS' => 'E02004512',
        '8GT' => 'E02004513',
        '8GU' => 'E02004521',
        '8GW' => 'E02004512',
        '8GX' => 'E02004512',
        '8GY' => 'E02004513',
        '8GZ' => 'E02004512',
        '8HA' => 'E02004521',
        '8HB' => 'E02004512',
        '8HD' => 'E02004521',
        '8HE' => 'E02004521',
        '8HF' => 'E02004521',
        '8HG' => 'E02004521',
        '8HH' => 'E02004521',
        '8HJ' => 'E02004521',
        '8HL' => 'E02004521',
        '8HN' => 'E02004512',
        '8HP' => 'E02004521',
        '8HQ' => 'E02004521',
        '8HR' => 'E02004521',
        '8HS' => 'E02004521',
        '8HT' => 'E02004521',
        '8HU' => 'E02004521',
        '8HW' => 'E02004521',
        '8HX' => 'E02004521',
        '8HY' => 'E02004521',
        '8HZ' => 'E02004521',
        '8JA' => 'E02004521',
        '8JB' => 'E02004516',
        '8JD' => 'E02004516',
        '8JE' => 'E02004521',
        '8JF' => 'E02004516',
        '8JG' => 'E02004516',
        '8JH' => 'E02004521',
        '8JJ' => 'E02004521',
        '8JL' => 'E02004516',
        '8JN' => 'E02004521',
        '8JP' => 'E02004516',
        '8JQ' => 'E02004512',
        '8JR' => 'E02004516',
        '8JS' => 'E02004516',
        '8JT' => 'E02004513',
        '8JU' => 'E02004516',
        '8JW' => 'E02004521',
        '8JX' => 'E02004513',
        '8JY' => 'E02004513',
        '8JZ' => 'E02006922',
        '8LA' => 'E02004513',
        '8LB' => 'E02004512',
        '8LD' => 'E02006922',
        '8LE' => 'E02004513',
        '8LF' => 'E02004512',
        '8LG' => 'E02004513',
        '8LH' => 'E02004513',
        '8LJ' => 'E02004512',
        '8LL' => 'E02004523',
        '8LN' => 'E02004523',
        '8LP' => 'E02004523',
        '8LQ' => 'E02004512',
        '8LR' => 'E02004523',
        '8LS' => 'E02004523',
        '8LT' => 'E02004523',
        '8LU' => 'E02004523',
        '8LW' => 'E02004523',
        '8LX' => 'E02004523',
        '8LY' => 'E02004523',
        '8LZ' => 'E02004523',
        '8NA' => 'E02004523',
        '8NB' => 'E02004523',
        '8ND' => 'E02004523',
        '8NE' => 'E02004523',
        '8NF' => 'E02004523',
        '8NG' => 'E02004523',
        '8NH' => 'E02004523',
        '8NJ' => 'E02004523',
        '8NL' => 'E02004523',
        '8NN' => 'E02004523',
        '8NP' => 'E02004523',
        '8NQ' => 'E02004512',
        '8NR' => 'E02004523',
        '8NS' => 'E02004523',
        '8NT' => 'E02004523',
        '8NU' => 'E02004523',
        '8NW' => 'E02004512',
        '8NX' => 'E02004523',
        '8NY' => 'E02004523',
        '8NZ' => 'E02004523',
        '8PA' => 'E02004523',
        '8PB' => 'E02004523',
        '8PD' => 'E02004523',
        '8PE' => 'E02004523',
        '8PF' => 'E02004523',
        '8PG' => 'E02004512',
        '8PH' => 'E02004523',
        '8PJ' => 'E02004523',
        '8PL' => 'E02004523',
        '8PN' => 'E02004523',
        '8PP' => 'E02004523',
        '8PQ' => 'E02004523',
        '8PR' => 'E02004523',
        '8PS' => 'E02004523',
        '8PT' => 'E02004523',
        '8PU' => 'E02004523',
        '8PW' => 'E02004523',
        '8PX' => 'E02004523',
        '8PY' => 'E02004523',
        '8PZ' => 'E02004523',
        '8QA' => 'E02004523',
        '8QB' => 'E02004523',
        '8QD' => 'E02004523',
        '8QE' => 'E02004523',
        '8QF' => 'E02004523',
        '8QG' => 'E02004523',
        '8QH' => 'E02004523',
        '8QJ' => 'E02004523',
        '8QL' => 'E02004523',
        '8QN' => 'E02004523',
        '8QP' => 'E02004523',
        '8QQ' => 'E02004521',
        '8QR' => 'E02004523',
        '8QS' => 'E02004523',
        '8QT' => 'E02004523',
        '8QU' => 'E02004523',
        '8QW' => 'E02004523',
        '8QX' => 'E02004523',
        '8QY' => 'E02004523',
        '8QZ' => 'E02004523',
        '8RA' => 'E02004523',
        '8RB' => 'E02004523',
        '8RD' => 'E02004523',
        '8RE' => 'E02004523',
        '8RF' => 'E02004523',
        '8RG' => 'E02004523',
        '8RH' => 'E02004523',
        '8RJ' => 'E02004521',
        '8RL' => 'E02004521',
        '8RN' => 'E02004521',
        '8RP' => 'E02004521',
        '8RQ' => 'E02004523',
        '8RR' => 'E02004521',
        '8RS' => 'E02004516',
        '8RT' => 'E02004521',
        '8RU' => 'E02004521',
        '8RW' => 'E02004521',
        '8RX' => 'E02004521',
        '8RY' => 'E02004521',
        '8RZ' => 'E02004521',
        '8SA' => 'E02004521',
        '8SB' => 'E02004521',
        '8SD' => 'E02004521',
        '8SE' => 'E02004521',
        '8SF' => 'E02004521',
        '8SG' => 'E02004521',
        '8SH' => 'E02004521',
        '8SJ' => 'E02004521',
        '8SL' => 'E02004521',
        '8SN' => 'E02004521',
        '8SP' => 'E02004521',
        '8SQ' => 'E02004521',
        '8SR' => 'E02004521',
        '8SS' => 'E02004521',
        '8ST' => 'E02004521',
        '8SU' => 'E02004521',
        '8SW' => 'E02004521',
        '8SX' => 'E02004521',
        '8SY' => 'E02004521',
        '8SZ' => 'E02004521',
        '8TA' => 'E02004521',
        '8TB' => 'E02004521',
        '8TD' => 'E02004521',
        '8TE' => 'E02004521',
        '8TF' => 'E02004512',
        '8TG' => 'E02004521',
        '8TH' => 'E02004521',
        '8TJ' => 'E02004521',
        '8TL' => 'E02004521',
        '8TN' => 'E02004521',
        '8TP' => 'E02004523',
        '8TQ' => 'E02004521',
        '8TR' => 'E02004521',
        '8TS' => 'E02004521',
        '8TT' => 'E02004521',
        '8TU' => 'E02004521',
        '8TW' => 'E02004521',
        '8TX' => 'E02004523',
        '8TY' => 'E02004523',
        '8TZ' => 'E02004521',
        '8UA' => 'E02004523',
        '8UB' => 'E02004523',
        '8UD' => 'E02004523',
        '8UE' => 'E02004523',
        '8UF' => 'E02004523',
        '8UG' => 'E02004523',
        '8UH' => 'E02004523',
        '8UJ' => 'E02004523',
        '8UL' => 'E02004523',
        '8UN' => 'E02004523',
        '8UP' => 'E02004523',
        '8UQ' => 'E02004523',
        '8UR' => 'E02004523',
        '8US' => 'E02004523',
        '8UT' => 'E02004523',
        '8UU' => 'E02004523',
        '8UW' => 'E02004523',
        '8UX' => 'E02004523',
        '8UY' => 'E02004523',
        '8UZ' => 'E02004523',
        '8WA' => 'E02004521',
        '8WB' => 'E02004521',
        '8WD' => 'E02004523',
        '8WE' => 'E02004512',
        '8WF' => 'E02004512',
        '8WG' => 'E02004512',
        '8WH' => 'E02004512',
        '8WJ' => 'E02004523',
        '8WL' => 'E02004523',
        '8WN' => 'E02004523',
        '8WP' => 'E02004523',
        '8WQ' => 'E02004512',
        '8WR' => 'E02004523',
        '8WS' => 'E02004523',
        '8WT' => 'E02004523',
        '8WU' => 'E02004523',
        '8WW' => 'E02004523',
        '8WX' => 'E02004523',
        '8WY' => 'E02004512',
        '8WZ' => 'E02004523',
        '8XA' => 'E02004521',
        '8XB' => 'E02004521',
        '8XD' => 'E02004523',
        '8XE' => 'E02004523',
        '8XF' => 'E02004523',
        '8XG' => 'E02004523',
        '8XH' => 'E02004523',
        '8XJ' => 'E02004523',
        '8XL' => 'E02004521',
        '8XN' => 'E02004521',
        '8XP' => 'E02004523',
        '8XQ' => 'E02004523',
        '8XR' => 'E02004523',
        '8XS' => 'E02004523',
        '8XT' => 'E02004512',
        '8XU' => 'E02004523',
        '8XW' => 'E02004521',
        '8XX' => 'E02004523',
        '8XY' => 'E02004513',
        '8XZ' => 'E02004513',
        '8YA' => 'E02004521',
        '8YB' => 'E02004521',
        '8YD' => 'E02004521',
        '8YE' => 'E02004521',
        '8YF' => 'E02004521',
        '8YG' => 'E02004521',
        '8YH' => 'E02004521',
        '8YJ' => 'E02004521',
        '8YN' => 'E02004523',
        '8YP' => 'E02004513',
        '8YQ' => 'E02004513',
        '8YR' => 'E02004513',
        '8YS' => 'E02004513',
        '8YT' => 'E02004523',
        '8YU' => 'E02004521',
        '8YW' => 'E02004523',
        '8YX' => 'E02004521',
        '8YY' => 'E02004521',
        '9AA' => 'E02004520',
        '9AB' => 'E02004520',
        '9AD' => 'E02004520',
        '9AE' => 'E02004520',
        '9AF' => 'E02004520',
        '9AG' => 'E02004520',
        '9AH' => 'E02004520',
        '9AJ' => 'E02004520',
        '9AL' => 'E02004520',
        '9AN' => 'E02004520',
        '9AP' => 'E02004520',
        '9AQ' => 'E02004520',
        '9AR' => 'E02004520',
        '9AS' => 'E02004520',
        '9AT' => 'E02004520',
        '9AU' => 'E02004520',
        '9AW' => 'E02004520',
        '9AX' => 'E02004520',
        '9AY' => 'E02004520',
        '9AZ' => 'E02004520',
        '9BA' => 'E02004520',
        '9BB' => 'E02004520',
        '9BD' => 'E02004520',
        '9BE' => 'E02004520',
        '9BG' => 'E02004520',
        '9BH' => 'E02004520',
        '9BJ' => 'E02004520',
        '9BL' => 'E02004520',
        '9BN' => 'E02004520',
        '9BP' => 'E02004520',
        '9BQ' => 'E02004520',
        '9BS' => 'E02004520',
        '9BT' => 'E02004520',
        '9BU' => 'E02004520',
        '9BW' => 'E02004520',
        '9BX' => 'E02004520',
        '9BY' => 'E02004520',
        '9BZ' => 'E02004520',
        '9DA' => 'E02004520',
        '9DB' => 'E02004520',
        '9DD' => 'E02004520',
        '9DE' => 'E02004520',
        '9DF' => 'E02004520',
        '9DG' => 'E02004520',
        '9DH' => 'E02004520',
        '9DJ' => 'E02004520',
        '9DL' => 'E02004520',
        '9DN' => 'E02004520',
        '9DP' => 'E02004520',
        '9DQ' => 'E02004520',
        '9DR' => 'E02004520',
        '9DS' => 'E02004520',
        '9DT' => 'E02004520',
        '9DU' => 'E02004520',
        '9DW' => 'E02004520',
        '9DX' => 'E02004520',
        '9DY' => 'E02004520',
        '9DZ' => 'E02004520',
        '9EA' => 'E02004520',
        '9EB' => 'E02004520',
        '9ED' => 'E02004520',
        '9EE' => 'E02004520',
        '9EF' => 'E02004520',
        '9EG' => 'E02004520',
        '9EH' => 'E02004520',
        '9EJ' => 'E02004520',
        '9EL' => 'E02004512',
        '9EN' => 'E02004512',
        '9EP' => 'E02004512',
        '9EQ' => 'E02004520',
        '9ER' => 'E02004520',
        '9ES' => 'E02004520',
        '9ET' => 'E02004520',
        '9EU' => 'E02004520',
        '9EW' => 'E02004520',
        '9EX' => 'E02004520',
        '9EY' => 'E02004520',
        '9EZ' => 'E02004520',
        '9FA' => 'E02004520',
        '9FB' => 'E02004523',
        '9FD' => 'E02004520',
        '9FE' => 'E02004523',
        '9FF' => 'E02004523',
        '9FG' => 'E02004523',
        '9FH' => 'E02004523',
        '9FJ' => 'E02004523',
        '9FL' => 'E02004523',
        '9FN' => 'E02004520',
        '9FP' => 'E02004520',
        '9FR' => 'E02004520',
        '9FS' => 'E02004520',
        '9FT' => 'E02004523',
        '9FW' => 'E02004523',
        '9FX' => 'E02004523',
        '9FY' => 'E02004523',
        '9FZ' => 'E02004523',
        '9GA' => 'E02004520',
        '9GB' => 'E02004520',
        '9GD' => 'E02004520',
        '9GE' => 'E02004520',
        '9GF' => 'E02004520',
        '9GG' => 'E02004520',
        '9GH' => 'E02004520',
        '9GJ' => 'E02004520',
        '9GL' => 'E02004520',
        '9GN' => 'E02004520',
        '9GP' => 'E02004523',
        '9GQ' => 'E02004523',
        '9GR' => 'E02004520',
        '9GW' => 'E02004512',
        '9GX' => 'E02004512',
        '9HA' => 'E02004520',
        '9HB' => 'E02004520',
        '9HD' => 'E02004520',
        '9HE' => 'E02004520',
        '9HF' => 'E02004520',
        '9HG' => 'E02004520',
        '9HH' => 'E02004520',
        '9HJ' => 'E02004520',
        '9HL' => 'E02004520',
        '9HN' => 'E02004520',
        '9HP' => 'E02004520',
        '9HQ' => 'E02004520',
        '9HR' => 'E02004520',
        '9HS' => 'E02004520',
        '9HT' => 'E02004520',
        '9HU' => 'E02004520',
        '9HW' => 'E02004520',
        '9HX' => 'E02004520',
        '9HY' => 'E02004520',
        '9HZ' => 'E02004520',
        '9JA' => 'E02004520',
        '9JB' => 'E02004520',
        '9JD' => 'E02004520',
        '9JE' => 'E02004520',
        '9JF' => 'E02004520',
        '9JG' => 'E02004520',
        '9JH' => 'E02004520',
        '9JJ' => 'E02004520',
        '9JL' => 'E02004520',
        '9JN' => 'E02004520',
        '9JP' => 'E02004520',
        '9JQ' => 'E02004520',
        '9JR' => 'E02004520',
        '9JS' => 'E02004520',
        '9JT' => 'E02004520',
        '9JU' => 'E02004520',
        '9JW' => 'E02004520',
        '9JX' => 'E02004520',
        '9JY' => 'E02004520',
        '9JZ' => 'E02004520',
        '9LA' => 'E02004520',
        '9LB' => 'E02004520',
        '9LD' => 'E02004520',
        '9LE' => 'E02004520',
        '9LF' => 'E02004520',
        '9LG' => 'E02004520',
        '9LH' => 'E02004520',
        '9LJ' => 'E02004520',
        '9LL' => 'E02004520',
        '9LN' => 'E02004520',
        '9LP' => 'E02004520',
        '9LQ' => 'E02004520',
        '9LR' => 'E02004520',
        '9LS' => 'E02004520',
        '9LT' => 'E02004520',
        '9LU' => 'E02004520',
        '9LW' => 'E02004520',
        '9LX' => 'E02004520',
        '9LY' => 'E02004520',
        '9LZ' => 'E02004520',
        '9NA' => 'E02004520',
        '9NB' => 'E02004520',
        '9ND' => 'E02004520',
        '9NE' => 'E02004520',
        '9NF' => 'E02004520',
        '9NG' => 'E02004520',
        '9NH' => 'E02004520',
        '9NJ' => 'E02004523',
        '9NL' => 'E02004520',
        '9NN' => 'E02004523',
        '9NP' => 'E02004520',
        '9NQ' => 'E02004520',
        '9NR' => 'E02004520',
        '9NS' => 'E02004523',
        '9NT' => 'E02004523',
        '9NU' => 'E02004523',
        '9NW' => 'E02004523',
        '9NX' => 'E02004520',
        '9NY' => 'E02004520',
        '9NZ' => 'E02004520',
        '9PA' => 'E02004520',
        '9PB' => 'E02004520',
        '9PD' => 'E02004520',
        '9PE' => 'E02004520',
        '9PF' => 'E02004520',
        '9PG' => 'E02004520',
        '9PH' => 'E02004520',
        '9PJ' => 'E02004520',
        '9PL' => 'E02004520',
        '9PN' => 'E02004520',
        '9PP' => 'E02004520',
        '9PQ' => 'E02004520',
        '9PR' => 'E02004520',
        '9PS' => 'E02004520',
        '9PT' => 'E02004520',
        '9PU' => 'E02004520',
        '9PW' => 'E02004520',
        '9PX' => 'E02004520',
        '9PY' => 'E02004520',
        '9PZ' => 'E02004520',
        '9QA' => 'E02004520',
        '9QB' => 'E02004520',
        '9QD' => 'E02004520',
        '9QE' => 'E02004520',
        '9QF' => 'E02004520',
        '9QG' => 'E02004520',
        '9QH' => 'E02004520',
        '9QJ' => 'E02004520',
        '9QL' => 'E02004520',
        '9QN' => 'E02004520',
        '9QP' => 'E02004520',
        '9QQ' => 'E02004520',
        '9QR' => 'E02004520',
        '9QS' => 'E02004520',
        '9QT' => 'E02004520',
        '9QU' => 'E02004520',
        '9QW' => 'E02004520',
        '9QX' => 'E02004520',
        '9QY' => 'E02004520',
        '9QZ' => 'E02004512',
        '9RA' => 'E02004520',
        '9RB' => 'E02004520',
        '9RD' => 'E02004520',
        '9RE' => 'E02004520',
        '9RF' => 'E02004520',
        '9RG' => 'E02004520',
        '9RH' => 'E02004520',
        '9RJ' => 'E02004520',
        '9RL' => 'E02004520',
        '9RN' => 'E02004520',
        '9RP' => 'E02004520',
        '9RQ' => 'E02004523',
        '9SA' => 'E02004520',
        '9SB' => 'E02004520',
        '9SD' => 'E02004520',
        '9TA' => 'E02004520',
        '9WA' => 'E02004512',
        '9WB' => 'E02004520',
        '9XE' => 'E02004512',
        '9YT' => 'E02004512',
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
