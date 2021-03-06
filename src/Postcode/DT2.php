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
final class DT2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004271',
        '0AB' => 'E02004271',
        '0AD' => 'E02004271',
        '0AE' => 'E02004271',
        '0AF' => 'E02004271',
        '0AG' => 'E02004271',
        '0AH' => 'E02004271',
        '0AJ' => 'E02004271',
        '0AL' => 'E02004271',
        '0AN' => 'E02004271',
        '0AP' => 'E02004271',
        '0AQ' => 'E02004271',
        '0AR' => 'E02004271',
        '0AS' => 'E02004271',
        '0AT' => 'E02004271',
        '0AU' => 'E02004271',
        '0AW' => 'E02004271',
        '0AX' => 'E02004271',
        '0AY' => 'E02004271',
        '0AZ' => 'E02004271',
        '0BA' => 'E02004271',
        '0BB' => 'E02004271',
        '0BD' => 'E02004271',
        '0BE' => 'E02004271',
        '0BG' => 'E02004271',
        '0BH' => 'E02004271',
        '0BJ' => 'E02004277',
        '0BL' => 'E02004271',
        '0BN' => 'E02004271',
        '0BP' => 'E02004271',
        '0BQ' => 'E02004271',
        '0BS' => 'E02004271',
        '0BT' => 'E02004271',
        '0BU' => 'E02004271',
        '0BW' => 'E02004271',
        '0BX' => 'E02004271',
        '0BY' => 'E02004271',
        '0BZ' => 'E02004271',
        '0DA' => 'E02004271',
        '0DB' => 'E02004271',
        '0DD' => 'E02004271',
        '0DE' => 'E02004271',
        '0DF' => 'E02004271',
        '0DG' => 'E02004271',
        '0DH' => 'E02004271',
        '0DJ' => 'E02004271',
        '0DL' => 'E02004271',
        '0DN' => 'E02004271',
        '0DP' => 'E02004271',
        '0DQ' => 'E02004271',
        '0DR' => 'E02004271',
        '0DS' => 'E02004271',
        '0DT' => 'E02004271',
        '0DU' => 'E02004271',
        '0DW' => 'E02004271',
        '0DX' => 'E02004271',
        '0DY' => 'E02004271',
        '0DZ' => 'E02004271',
        '0EA' => 'E02004271',
        '0EB' => 'E02004271',
        '0ED' => 'E02004271',
        '0EE' => 'E02004271',
        '0EF' => 'E02004271',
        '0EG' => 'E02004271',
        '0EH' => 'E02004271',
        '0EJ' => 'E02004271',
        '0EL' => 'E02004271',
        '0EN' => 'E02004271',
        '0EP' => 'E02004271',
        '0EQ' => 'E02004271',
        '0ER' => 'E02004271',
        '0ES' => 'E02004271',
        '0ET' => 'E02004271',
        '0EU' => 'E02004271',
        '0EW' => 'E02004271',
        '0EX' => 'E02004271',
        '0EY' => 'E02004271',
        '0EZ' => 'E02004271',
        '0FA' => 'E02004271',
        '0FD' => 'E02004272',
        '0GA' => 'E02004272',
        '0GN' => 'E02004271',
        '0HA' => 'E02004272',
        '0HB' => 'E02004272',
        '0HD' => 'E02004272',
        '0HE' => 'E02004272',
        '0HF' => 'E02004272',
        '0HG' => 'E02004272',
        '0HH' => 'E02004272',
        '0HJ' => 'E02004272',
        '0HL' => 'E02004271',
        '0HN' => 'E02004271',
        '0HP' => 'E02004271',
        '0HQ' => 'E02004272',
        '0HR' => 'E02004271',
        '0HS' => 'E02004271',
        '0HT' => 'E02004271',
        '0HU' => 'E02004272',
        '0HW' => 'E02004271',
        '0HX' => 'E02004271',
        '0HY' => 'E02004272',
        '0HZ' => 'E02004272',
        '0JA' => 'E02004272',
        '0JB' => 'E02004272',
        '0JD' => 'E02004272',
        '0JE' => 'E02004272',
        '0JF' => 'E02004272',
        '0JG' => 'E02004272',
        '0JH' => 'E02004272',
        '0JJ' => 'E02004272',
        '0JL' => 'E02004272',
        '0JN' => 'E02004272',
        '0JP' => 'E02004271',
        '0JQ' => 'E02004272',
        '0JR' => 'E02004271',
        '0JS' => 'E02004271',
        '0JT' => 'E02004271',
        '0JU' => 'E02004271',
        '0JW' => 'E02004271',
        '0JX' => 'E02004271',
        '0JY' => 'E02004271',
        '0JZ' => 'E02004271',
        '0LA' => 'E02004271',
        '0LB' => 'E02004271',
        '0LD' => 'E02004271',
        '0LE' => 'E02004271',
        '0LF' => 'E02004271',
        '0LG' => 'E02004272',
        '0LH' => 'E02004272',
        '0LJ' => 'E02004272',
        '0LL' => 'E02004271',
        '0LN' => 'E02004271',
        '0LP' => 'E02004271',
        '0LQ' => 'E02004272',
        '0LR' => 'E02004271',
        '0LS' => 'E02004271',
        '0LT' => 'E02004271',
        '0LU' => 'E02004271',
        '0LW' => 'E02004271',
        '0LX' => 'E02004271',
        '0LY' => 'E02004271',
        '0LZ' => 'E02004271',
        '0NA' => 'E02004271',
        '0NB' => 'E02004271',
        '0ND' => 'E02004271',
        '0NE' => 'E02004277',
        '0NF' => 'E02004271',
        '0NG' => 'E02004270',
        '0NH' => 'E02004271',
        '0NJ' => 'E02004271',
        '0NL' => 'E02004271',
        '0NN' => 'E02004271',
        '0NP' => 'E02004271',
        '0NQ' => 'E02004271',
        '0NR' => 'E02004271',
        '0NS' => 'E02004271',
        '0NT' => 'E02004271',
        '0NU' => 'E02004271',
        '0NW' => 'E02004271',
        '0NX' => 'E02004271',
        '0NY' => 'E02004271',
        '0NZ' => 'E02004271',
        '0PA' => 'E02004271',
        '0PB' => 'E02004271',
        '0PD' => 'E02004271',
        '0PE' => 'E02004271',
        '0PF' => 'E02004271',
        '0PG' => 'E02004271',
        '0PH' => 'E02004271',
        '0PJ' => 'E02004271',
        '0PL' => 'E02004271',
        '0PN' => 'E02004271',
        '0PP' => 'E02004271',
        '0PQ' => 'E02004271',
        '0PR' => 'E02004271',
        '0PS' => 'E02004271',
        '0PT' => 'E02004271',
        '0PU' => 'E02004271',
        '0PW' => 'E02004271',
        '0PX' => 'E02004271',
        '0PY' => 'E02004271',
        '0PZ' => 'E02004271',
        '0QA' => 'E02004271',
        '0QB' => 'E02004271',
        '0QD' => 'E02004271',
        '0QE' => 'E02004271',
        '0QF' => 'E02004271',
        '0QG' => 'E02004271',
        '0QH' => 'E02004271',
        '0QJ' => 'E02004271',
        '0QL' => 'E02004271',
        '0QN' => 'E02004271',
        '0QP' => 'E02004271',
        '0QQ' => 'E02004271',
        '0QR' => 'E02004271',
        '0WA' => 'E02004277',
        '0WB' => 'E02004271',
        '0XJ' => 'E02004277',
        '0XL' => 'E02004271',
        '0XN' => 'E02004277',
        '0XQ' => 'E02004277',
        '0XT' => 'E02004271',
        '0XZ' => 'E02004271',
        '0YA' => 'E02004271',
        '0YB' => 'E02004271',
        '0YD' => 'E02004271',
        '0YE' => 'E02004277',
        '0YF' => 'E02004271',
        '0YG' => 'E02004271',
        '0YH' => 'E02004271',
        '0YJ' => 'E02004271',
        '0YL' => 'E02004271',
        '0YN' => 'E02004271',
        '0YP' => 'E02004271',
        '0YQ' => 'E02004277',
        '0YR' => 'E02004277',
        '0YS' => 'E02004277',
        '0ZN' => 'E02004277',
        '0ZQ' => 'E02004277',
        '0ZX' => 'E02004277',
        '7AA' => 'E02004272',
        '7AB' => 'E02004272',
        '7AD' => 'E02004272',
        '7AE' => 'E02004272',
        '7AF' => 'E02004272',
        '7AG' => 'E02004272',
        '7AH' => 'E02004272',
        '7AJ' => 'E02004272',
        '7AL' => 'E02004272',
        '7AN' => 'E02004272',
        '7AP' => 'E02004272',
        '7AQ' => 'E02004272',
        '7AR' => 'E02004272',
        '7AS' => 'E02004272',
        '7AT' => 'E02004272',
        '7AU' => 'E02004272',
        '7AW' => 'E02004272',
        '7AX' => 'E02004272',
        '7AY' => 'E02004272',
        '7AZ' => 'E02004272',
        '7BA' => 'E02004271',
        '7BB' => 'E02004271',
        '7BD' => 'E02004271',
        '7BE' => 'E02004271',
        '7BG' => 'E02004271',
        '7BH' => 'E02004272',
        '7BJ' => 'E02004272',
        '7BL' => 'E02004272',
        '7BN' => 'E02004272',
        '7BP' => 'E02004272',
        '7BQ' => 'E02004272',
        '7BS' => 'E02004272',
        '7BT' => 'E02004272',
        '7BU' => 'E02004272',
        '7BW' => 'E02004272',
        '7BX' => 'E02004272',
        '7BY' => 'E02004272',
        '7BZ' => 'E02004272',
        '7DA' => 'E02004272',
        '7DB' => 'E02004272',
        '7DD' => 'E02004272',
        '7DE' => 'E02004272',
        '7DF' => 'E02004272',
        '7DG' => 'E02004272',
        '7DH' => 'E02004272',
        '7DJ' => 'E02004272',
        '7DL' => 'E02004272',
        '7DN' => 'E02004272',
        '7DP' => 'E02004272',
        '7DQ' => 'E02004272',
        '7DR' => 'E02004272',
        '7DS' => 'E02004272',
        '7DT' => 'E02004272',
        '7DU' => 'E02004272',
        '7DW' => 'E02004272',
        '7DX' => 'E02004262',
        '7DY' => 'E02004262',
        '7DZ' => 'E02004262',
        '7EA' => 'E02004262',
        '7EB' => 'E02004262',
        '7ED' => 'E02004262',
        '7EE' => 'E02004262',
        '7EF' => 'E02004272',
        '7EG' => 'E02004272',
        '7EH' => 'E02004272',
        '7EJ' => 'E02004272',
        '7EL' => 'E02004272',
        '7EN' => 'E02004272',
        '7EP' => 'E02004272',
        '7EQ' => 'E02004272',
        '7ER' => 'E02004272',
        '7ES' => 'E02004272',
        '7ET' => 'E02004272',
        '7EU' => 'E02004272',
        '7EW' => 'E02004272',
        '7EX' => 'E02004272',
        '7EY' => 'E02004272',
        '7EZ' => 'E02004272',
        '7FA' => 'E02004272',
        '7FB' => 'E02004272',
        '7FD' => 'E02004272',
        '7FE' => 'E02004272',
        '7FF' => 'E02004272',
        '7FG' => 'E02004272',
        '7FH' => 'E02004272',
        '7FL' => 'E02004262',
        '7FN' => 'E02004272',
        '7FP' => 'E02004272',
        '7FQ' => 'E02004272',
        '7GD' => 'E02004272',
        '7GT' => 'E02004272',
        '7GU' => 'E02004272',
        '7GW' => 'E02004272',
        '7GY' => 'E02004272',
        '7GZ' => 'E02004272',
        '7HA' => 'E02004272',
        '7HB' => 'E02004272',
        '7HD' => 'E02004272',
        '7HE' => 'E02004272',
        '7HF' => 'E02004272',
        '7HG' => 'E02004272',
        '7HH' => 'E02004266',
        '7HJ' => 'E02004266',
        '7HL' => 'E02004266',
        '7HN' => 'E02004266',
        '7HP' => 'E02004266',
        '7HQ' => 'E02004266',
        '7HR' => 'E02004266',
        '7HS' => 'E02004266',
        '7HT' => 'E02004266',
        '7HU' => 'E02004262',
        '7HW' => 'E02004266',
        '7HX' => 'E02004266',
        '7HY' => 'E02004266',
        '7HZ' => 'E02004266',
        '7JA' => 'E02004266',
        '7JB' => 'E02004266',
        '7JD' => 'E02004266',
        '7JE' => 'E02004272',
        '7JF' => 'E02004272',
        '7JG' => 'E02004272',
        '7JH' => 'E02004272',
        '7JJ' => 'E02004272',
        '7JL' => 'E02004272',
        '7JN' => 'E02004272',
        '7JP' => 'E02004272',
        '7JQ' => 'E02004272',
        '7JR' => 'E02004272',
        '7JS' => 'E02004272',
        '7JT' => 'E02004272',
        '7JU' => 'E02004272',
        '7JW' => 'E02004272',
        '7JX' => 'E02004272',
        '7JY' => 'E02004272',
        '7JZ' => 'E02004272',
        '7LA' => 'E02004272',
        '7LB' => 'E02004272',
        '7LD' => 'E02004272',
        '7LE' => 'E02004272',
        '7LF' => 'E02004272',
        '7LG' => 'E02004272',
        '7LH' => 'E02004272',
        '7LJ' => 'E02004272',
        '7LL' => 'E02004272',
        '7LN' => 'E02004272',
        '7LP' => 'E02004272',
        '7LQ' => 'E02004272',
        '7LR' => 'E02004272',
        '7LS' => 'E02004272',
        '7LT' => 'E02004272',
        '7LU' => 'E02004272',
        '7LW' => 'E02004272',
        '7LX' => 'E02004272',
        '7LY' => 'E02004272',
        '7LZ' => 'E02004272',
        '7NA' => 'E02004272',
        '7NB' => 'E02004272',
        '7ND' => 'E02004272',
        '7NE' => 'E02004272',
        '7NF' => 'E02004272',
        '7NG' => 'E02004272',
        '7NH' => 'E02004272',
        '7NJ' => 'E02004272',
        '7NL' => 'E02004272',
        '7NN' => 'E02004272',
        '7NP' => 'E02004272',
        '7NQ' => 'E02004272',
        '7NR' => 'E02004272',
        '7NS' => 'E02004272',
        '7NT' => 'E02004272',
        '7NU' => 'E02004272',
        '7NW' => 'E02004272',
        '7NX' => 'E02004272',
        '7NY' => 'E02004272',
        '7NZ' => 'E02004272',
        '7PA' => 'E02004272',
        '7PB' => 'E02004272',
        '7PD' => 'E02004272',
        '7PE' => 'E02004272',
        '7PF' => 'E02004262',
        '7PG' => 'E02004262',
        '7PH' => 'E02004262',
        '7PJ' => 'E02004262',
        '7PL' => 'E02004262',
        '7PN' => 'E02004262',
        '7PP' => 'E02004262',
        '7PQ' => 'E02004262',
        '7PR' => 'E02004262',
        '7PS' => 'E02004262',
        '7PT' => 'E02004262',
        '7PU' => 'E02004262',
        '7PW' => 'E02004262',
        '7PX' => 'E02004262',
        '7PY' => 'E02004262',
        '7PZ' => 'E02004272',
        '7QA' => 'E02004272',
        '7QB' => 'E02004272',
        '7QD' => 'E02004272',
        '7QE' => 'E02004272',
        '7QF' => 'E02004272',
        '7QG' => 'E02004272',
        '7QH' => 'E02004272',
        '7QJ' => 'E02004272',
        '7QL' => 'E02004272',
        '7QN' => 'E02004272',
        '7QP' => 'E02004272',
        '7QQ' => 'E02004272',
        '7QR' => 'E02004272',
        '7QS' => 'E02004272',
        '7QT' => 'E02004272',
        '7QU' => 'E02004272',
        '7QW' => 'E02004272',
        '7QX' => 'E02004272',
        '7QY' => 'E02004272',
        '7QZ' => 'E02004272',
        '7RA' => 'E02004272',
        '7RB' => 'E02004272',
        '7RD' => 'E02004272',
        '7RE' => 'E02004272',
        '7RF' => 'E02004272',
        '7RG' => 'E02004272',
        '7RH' => 'E02004272',
        '7RJ' => 'E02004272',
        '7RL' => 'E02004272',
        '7RN' => 'E02004272',
        '7RP' => 'E02004272',
        '7RQ' => 'E02004272',
        '7RR' => 'E02004272',
        '7RS' => 'E02004272',
        '7RT' => 'E02004272',
        '7RU' => 'E02004272',
        '7RW' => 'E02004272',
        '7RX' => 'E02004272',
        '7RY' => 'E02004272',
        '7RZ' => 'E02004272',
        '7SA' => 'E02004272',
        '7SB' => 'E02004272',
        '7SD' => 'E02004272',
        '7SE' => 'E02004272',
        '7SF' => 'E02004272',
        '7SG' => 'E02004272',
        '7SH' => 'E02004272',
        '7SJ' => 'E02004272',
        '7SL' => 'E02004272',
        '7SN' => 'E02004272',
        '7SP' => 'E02004272',
        '7SQ' => 'E02004272',
        '7SR' => 'E02004272',
        '7SS' => 'E02004272',
        '7ST' => 'E02004272',
        '7SU' => 'E02004272',
        '7SW' => 'E02004272',
        '7SX' => 'E02004272',
        '7SY' => 'E02004272',
        '7SZ' => 'E02004272',
        '7TA' => 'E02004272',
        '7TB' => 'E02004272',
        '7TD' => 'E02004272',
        '7TE' => 'E02004272',
        '7TF' => 'E02004272',
        '7TG' => 'E02004272',
        '7TH' => 'E02004272',
        '7TJ' => 'E02004272',
        '7TL' => 'E02004272',
        '7TN' => 'E02004272',
        '7TP' => 'E02004272',
        '7TQ' => 'E02004272',
        '7TR' => 'E02004272',
        '7TS' => 'E02004272',
        '7TT' => 'E02004272',
        '7TU' => 'E02004272',
        '7TW' => 'E02004272',
        '7TX' => 'E02004272',
        '7TY' => 'E02004262',
        '7TZ' => 'E02004272',
        '7UA' => 'E02004272',
        '7UB' => 'E02004277',
        '7UD' => 'E02004272',
        '7UE' => 'E02004272',
        '7UF' => 'E02004272',
        '7UG' => 'E02004262',
        '7UH' => 'E02004272',
        '7UJ' => 'E02004272',
        '7WA' => 'E02004277',
        '7WB' => 'E02004272',
        '7WD' => 'E02004277',
        '7WE' => 'E02004277',
        '7XA' => 'E02004277',
        '7XB' => 'E02004272',
        '7XD' => 'E02004272',
        '7XE' => 'E02004272',
        '7XF' => 'E02004272',
        '7XG' => 'E02004272',
        '7XH' => 'E02004272',
        '7XJ' => 'E02004272',
        '7XL' => 'E02004277',
        '7XN' => 'E02004277',
        '7XW' => 'E02004277',
        '7XX' => 'E02004272',
        '7XY' => 'E02004277',
        '7XZ' => 'E02004277',
        '7YA' => 'E02004272',
        '7YB' => 'E02004272',
        '7YD' => 'E02004272',
        '7YE' => 'E02004272',
        '7YF' => 'E02004272',
        '7YG' => 'E02004272',
        '7YH' => 'E02004272',
        '7YJ' => 'E02004277',
        '7YL' => 'E02004277',
        '7YN' => 'E02004272',
        '7YP' => 'E02004272',
        '7YQ' => 'E02004272',
        '7YR' => 'E02004272',
        '7YS' => 'E02004272',
        '7YT' => 'E02004277',
        '7YU' => 'E02004272',
        '7YW' => 'E02004272',
        '7YX' => 'E02004272',
        '7YY' => 'E02004272',
        '7YZ' => 'E02004272',
        '7ZN' => 'E02004277',
        '7ZQ' => 'E02004277',
        '7ZR' => 'E02004277',
        '7ZX' => 'E02004277',
        '8AA' => 'E02004279',
        '8AB' => 'E02004279',
        '8AD' => 'E02004279',
        '8AE' => 'E02004279',
        '8AF' => 'E02004279',
        '8AG' => 'E02004279',
        '8AH' => 'E02004279',
        '8AJ' => 'E02004279',
        '8AL' => 'E02004279',
        '8AN' => 'E02004279',
        '8AP' => 'E02004279',
        '8AQ' => 'E02004279',
        '8AR' => 'E02004279',
        '8AS' => 'E02004279',
        '8AT' => 'E02004279',
        '8AU' => 'E02004279',
        '8AW' => 'E02004279',
        '8AX' => 'E02004279',
        '8AY' => 'E02004266',
        '8AZ' => 'E02004266',
        '8BA' => 'E02004266',
        '8BB' => 'E02004266',
        '8BD' => 'E02004266',
        '8BE' => 'E02004266',
        '8BF' => 'E02004279',
        '8BG' => 'E02004279',
        '8BH' => 'E02004279',
        '8BJ' => 'E02004279',
        '8BL' => 'E02004279',
        '8BN' => 'E02004279',
        '8BP' => 'E02004279',
        '8BQ' => 'E02004279',
        '8BS' => 'E02004279',
        '8BT' => 'E02004279',
        '8BU' => 'E02004279',
        '8BW' => 'E02004279',
        '8BX' => 'E02004279',
        '8BY' => 'E02004279',
        '8BZ' => 'E02004279',
        '8DA' => 'E02004266',
        '8DB' => 'E02004266',
        '8DD' => 'E02004266',
        '8DE' => 'E02004266',
        '8DF' => 'E02004266',
        '8DG' => 'E02004279',
        '8DH' => 'E02004266',
        '8DJ' => 'E02004266',
        '8DL' => 'E02004266',
        '8DN' => 'E02004266',
        '8DP' => 'E02004266',
        '8DQ' => 'E02004266',
        '8DR' => 'E02004266',
        '8DS' => 'E02004266',
        '8DT' => 'E02004266',
        '8DU' => 'E02004279',
        '8DW' => 'E02004266',
        '8DX' => 'E02004279',
        '8DY' => 'E02004279',
        '8DZ' => 'E02004266',
        '8EA' => 'E02004279',
        '8EB' => 'E02004279',
        '8ED' => 'E02004279',
        '8EE' => 'E02004279',
        '8EF' => 'E02004279',
        '8EG' => 'E02004279',
        '8EH' => 'E02004279',
        '8EJ' => 'E02004279',
        '8EL' => 'E02004279',
        '8EN' => 'E02004279',
        '8EP' => 'E02004279',
        '8EQ' => 'E02004279',
        '8ER' => 'E02004279',
        '8ES' => 'E02004279',
        '8ET' => 'E02004279',
        '8EU' => 'E02004279',
        '8EW' => 'E02004279',
        '8EX' => 'E02004279',
        '8EY' => 'E02004279',
        '8EZ' => 'E02004279',
        '8FA' => 'E02004272',
        '8FB' => 'E02004279',
        '8FD' => 'E02004277',
        '8FE' => 'E02004277',
        '8FF' => 'E02004277',
        '8FG' => 'E02004279',
        '8FH' => 'E02004279',
        '8FJ' => 'E02004279',
        '8FL' => 'E02004279',
        '8FN' => 'E02004266',
        '8FP' => 'E02004266',
        '8FQ' => 'E02004279',
        '8FR' => 'E02004279',
        '8FS' => 'E02004272',
        '8FT' => 'E02004266',
        '8FU' => 'E02004279',
        '8FW' => 'E02004279',
        '8FX' => 'E02004279',
        '8FY' => 'E02004272',
        '8FZ' => 'E02004272',
        '8GA' => 'E02004279',
        '8GB' => 'E02004266',
        '8GD' => 'E02004272',
        '8GE' => 'E02004272',
        '8GF' => 'E02004272',
        '8GG' => 'E02004279',
        '8GH' => 'E02004279',
        '8GJ' => 'E02004279',
        '8GL' => 'E02004266',
        '8GN' => 'E02004272',
        '8GP' => 'E02004272',
        '8GX' => 'E02004272',
        '8GY' => 'E02004272',
        '8GZ' => 'E02004272',
        '8HA' => 'E02004279',
        '8HB' => 'E02004266',
        '8HD' => 'E02004279',
        '8HE' => 'E02004279',
        '8HF' => 'E02004279',
        '8HG' => 'E02004279',
        '8HH' => 'E02004279',
        '8HJ' => 'E02004279',
        '8HL' => 'E02004279',
        '8HN' => 'E02004279',
        '8HP' => 'E02004279',
        '8HQ' => 'E02004279',
        '8HR' => 'E02004279',
        '8HS' => 'E02004279',
        '8HT' => 'E02004279',
        '8HU' => 'E02004279',
        '8HW' => 'E02004279',
        '8HX' => 'E02004279',
        '8HY' => 'E02004279',
        '8HZ' => 'E02004279',
        '8JA' => 'E02004279',
        '8JB' => 'E02004279',
        '8JD' => 'E02004279',
        '8JE' => 'E02004279',
        '8JF' => 'E02004279',
        '8JG' => 'E02004279',
        '8JH' => 'E02004266',
        '8JJ' => 'E02004279',
        '8JL' => 'E02004266',
        '8JN' => 'E02004266',
        '8JP' => 'E02004266',
        '8JQ' => 'E02004279',
        '8JR' => 'E02004266',
        '8JS' => 'E02004266',
        '8JT' => 'E02004266',
        '8JU' => 'E02004266',
        '8JW' => 'E02004266',
        '8JX' => 'E02004266',
        '8JY' => 'E02004266',
        '8JZ' => 'E02004266',
        '8LA' => 'E02004266',
        '8LB' => 'E02004266',
        '8LD' => 'E02004266',
        '8LE' => 'E02004266',
        '8LF' => 'E02004266',
        '8LG' => 'E02004266',
        '8LH' => 'E02004266',
        '8LJ' => 'E02004266',
        '8LL' => 'E02004266',
        '8LN' => 'E02004266',
        '8LP' => 'E02004266',
        '8LQ' => 'E02004266',
        '8LR' => 'E02004266',
        '8LS' => 'E02004279',
        '8LT' => 'E02004279',
        '8LU' => 'E02004279',
        '8LW' => 'E02004266',
        '8LX' => 'E02004279',
        '8LY' => 'E02004279',
        '8LZ' => 'E02004279',
        '8NA' => 'E02004279',
        '8NB' => 'E02004279',
        '8ND' => 'E02004279',
        '8NE' => 'E02004279',
        '8NF' => 'E02004279',
        '8NG' => 'E02004279',
        '8NH' => 'E02004279',
        '8NJ' => 'E02004279',
        '8NL' => 'E02004279',
        '8NN' => 'E02004266',
        '8NP' => 'E02004279',
        '8NQ' => 'E02004279',
        '8NR' => 'E02004279',
        '8NS' => 'E02004279',
        '8NT' => 'E02004279',
        '8NU' => 'E02004279',
        '8NW' => 'E02004266',
        '8NX' => 'E02004279',
        '8NY' => 'E02004279',
        '8NZ' => 'E02004279',
        '8PA' => 'E02004279',
        '8PB' => 'E02004279',
        '8PD' => 'E02004279',
        '8PE' => 'E02004279',
        '8PF' => 'E02004279',
        '8PG' => 'E02004279',
        '8PH' => 'E02004279',
        '8PJ' => 'E02004279',
        '8PL' => 'E02004279',
        '8PN' => 'E02004279',
        '8PP' => 'E02004279',
        '8PQ' => 'E02004279',
        '8PR' => 'E02004272',
        '8PS' => 'E02004272',
        '8PT' => 'E02004272',
        '8PU' => 'E02004272',
        '8PW' => 'E02004279',
        '8PX' => 'E02004272',
        '8PY' => 'E02004272',
        '8PZ' => 'E02004272',
        '8QA' => 'E02004272',
        '8QB' => 'E02004272',
        '8QD' => 'E02004272',
        '8QE' => 'E02004272',
        '8QF' => 'E02004272',
        '8QG' => 'E02004272',
        '8QH' => 'E02004272',
        '8QJ' => 'E02004272',
        '8QL' => 'E02004272',
        '8QN' => 'E02004272',
        '8QP' => 'E02004279',
        '8QQ' => 'E02004272',
        '8QR' => 'E02004279',
        '8QS' => 'E02004272',
        '8QT' => 'E02004272',
        '8QU' => 'E02004266',
        '8QW' => 'E02004272',
        '8QX' => 'E02004266',
        '8QY' => 'E02004266',
        '8QZ' => 'E02004266',
        '8RA' => 'E02004266',
        '8RB' => 'E02004266',
        '8RD' => 'E02004266',
        '8RE' => 'E02004266',
        '8RF' => 'E02004266',
        '8RG' => 'E02004266',
        '8RH' => 'E02004266',
        '8RJ' => 'E02004266',
        '8RL' => 'E02004266',
        '8RN' => 'E02004266',
        '8RP' => 'E02004279',
        '8RQ' => 'E02004266',
        '8RR' => 'E02004272',
        '8RS' => 'E02004272',
        '8RT' => 'E02004272',
        '8RU' => 'E02004272',
        '8RW' => 'E02004272',
        '8RX' => 'E02004272',
        '8RY' => 'E02004272',
        '8RZ' => 'E02004272',
        '8SA' => 'E02004272',
        '8SB' => 'E02004272',
        '8SD' => 'E02004272',
        '8SE' => 'E02004272',
        '8SF' => 'E02004272',
        '8SG' => 'E02004272',
        '8SH' => 'E02004272',
        '8SJ' => 'E02004272',
        '8SL' => 'E02004272',
        '8SN' => 'E02004272',
        '8SP' => 'E02004272',
        '8SQ' => 'E02004272',
        '8SR' => 'E02004272',
        '8SS' => 'E02004272',
        '8ST' => 'E02004272',
        '8SU' => 'E02004272',
        '8SW' => 'E02004272',
        '8SX' => 'E02004272',
        '8SY' => 'E02004272',
        '8SZ' => 'E02004272',
        '8TA' => 'E02004272',
        '8TB' => 'E02004272',
        '8TD' => 'E02004272',
        '8TE' => 'E02004272',
        '8TF' => 'E02004272',
        '8TG' => 'E02004272',
        '8TH' => 'E02004272',
        '8TJ' => 'E02004272',
        '8TL' => 'E02004272',
        '8TN' => 'E02004279',
        '8TP' => 'E02004279',
        '8TQ' => 'E02004272',
        '8TR' => 'E02004279',
        '8TS' => 'E02004279',
        '8TT' => 'E02004279',
        '8TU' => 'E02004279',
        '8TW' => 'E02004279',
        '8TX' => 'E02004279',
        '8TY' => 'E02004279',
        '8TZ' => 'E02004279',
        '8UA' => 'E02004279',
        '8UB' => 'E02004279',
        '8UD' => 'E02004279',
        '8UE' => 'E02004272',
        '8UF' => 'E02004279',
        '8UG' => 'E02004272',
        '8UH' => 'E02004279',
        '8UJ' => 'E02004279',
        '8UL' => 'E02004279',
        '8UN' => 'E02004279',
        '8UP' => 'E02004279',
        '8UQ' => 'E02004266',
        '8UR' => 'E02004279',
        '8US' => 'E02004279',
        '8UT' => 'E02004279',
        '8UU' => 'E02004279',
        '8UW' => 'E02004279',
        '8UX' => 'E02004279',
        '8UY' => 'E02004279',
        '8UZ' => 'E02004272',
        '8WA' => 'E02004277',
        '8WB' => 'E02004279',
        '8WD' => 'E02004279',
        '8WE' => 'E02004277',
        '8WF' => 'E02004277',
        '8WG' => 'E02004266',
        '8WH' => 'E02004277',
        '8WJ' => 'E02004279',
        '8WL' => 'E02004279',
        '8WN' => 'E02004279',
        '8WP' => 'E02004279',
        '8WQ' => 'E02004266',
        '8WR' => 'E02004279',
        '8WS' => 'E02004279',
        '8WT' => 'E02004279',
        '8WU' => 'E02004279',
        '8WW' => 'E02004279',
        '8WX' => 'E02004266',
        '8WY' => 'E02004272',
        '8WZ' => 'E02004266',
        '8XA' => 'E02004279',
        '8XB' => 'E02004279',
        '8XD' => 'E02004279',
        '8XE' => 'E02004272',
        '8XF' => 'E02004272',
        '8XG' => 'E02004272',
        '8XH' => 'E02004272',
        '8XJ' => 'E02004266',
        '8XL' => 'E02004279',
        '8XN' => 'E02004279',
        '8XP' => 'E02004279',
        '8XQ' => 'E02004279',
        '8XR' => 'E02004279',
        '8XS' => 'E02004279',
        '8XT' => 'E02004279',
        '8XU' => 'E02004279',
        '8XW' => 'E02004272',
        '8XX' => 'E02004272',
        '8XY' => 'E02004279',
        '8YA' => 'E02004277',
        '8YB' => 'E02004279',
        '8YD' => 'E02004277',
        '8YE' => 'E02004279',
        '8YF' => 'E02004279',
        '8YG' => 'E02004277',
        '8YH' => 'E02004277',
        '8YJ' => 'E02004277',
        '8YL' => 'E02004277',
        '8YN' => 'E02004277',
        '8YP' => 'E02004279',
        '8YQ' => 'E02004266',
        '8YR' => 'E02004279',
        '8YS' => 'E02004277',
        '8YT' => 'E02004277',
        '8YU' => 'E02004277',
        '8YW' => 'E02004279',
        '8YX' => 'E02004277',
        '8YY' => 'E02004277',
        '8YZ' => 'E02004277',
        '8ZA' => 'E02004279',
        '8ZB' => 'E02004266',
        '8ZD' => 'E02004266',
        '8ZE' => 'E02004266',
        '8ZF' => 'E02004277',
        '8ZG' => 'E02004279',
        '8ZH' => 'E02004279',
        '8ZJ' => 'E02004279',
        '8ZL' => 'E02004272',
        '8ZR' => 'E02004277',
        '8ZX' => 'E02004277',
        '9AA' => 'E02004280',
        '9AB' => 'E02004280',
        '9AD' => 'E02004280',
        '9AE' => 'E02004280',
        '9AF' => 'E02004280',
        '9AG' => 'E02004280',
        '9AH' => 'E02004280',
        '9AJ' => 'E02004280',
        '9AL' => 'E02004280',
        '9AN' => 'E02004280',
        '9AP' => 'E02004280',
        '9AQ' => 'E02004280',
        '9AR' => 'E02004280',
        '9AS' => 'E02004280',
        '9AT' => 'E02004280',
        '9AU' => 'E02004280',
        '9AW' => 'E02004280',
        '9AX' => 'E02004280',
        '9AY' => 'E02004280',
        '9AZ' => 'E02004280',
        '9BA' => 'E02004275',
        '9BB' => 'E02004275',
        '9BD' => 'E02004275',
        '9BE' => 'E02004275',
        '9BG' => 'E02004275',
        '9BH' => 'E02004275',
        '9BJ' => 'E02004275',
        '9BL' => 'E02004275',
        '9BN' => 'E02004275',
        '9BP' => 'E02004275',
        '9BQ' => 'E02004275',
        '9BS' => 'E02004275',
        '9BT' => 'E02004275',
        '9BU' => 'E02004275',
        '9BW' => 'E02004275',
        '9BX' => 'E02004275',
        '9BY' => 'E02004275',
        '9BZ' => 'E02004275',
        '9DA' => 'E02004275',
        '9DB' => 'E02004275',
        '9DD' => 'E02004275',
        '9DE' => 'E02004275',
        '9DF' => 'E02004275',
        '9DG' => 'E02004275',
        '9DH' => 'E02004280',
        '9DJ' => 'E02004275',
        '9DL' => 'E02004279',
        '9DN' => 'E02004275',
        '9DP' => 'E02004280',
        '9DQ' => 'E02004275',
        '9DR' => 'E02004280',
        '9DS' => 'E02004279',
        '9DT' => 'E02004279',
        '9DU' => 'E02004279',
        '9DW' => 'E02004280',
        '9DX' => 'E02004272',
        '9DY' => 'E02004272',
        '9DZ' => 'E02004272',
        '9EA' => 'E02004279',
        '9EB' => 'E02004279',
        '9ED' => 'E02004280',
        '9EE' => 'E02004280',
        '9EF' => 'E02004280',
        '9EG' => 'E02004280',
        '9EH' => 'E02004275',
        '9EJ' => 'E02004275',
        '9EL' => 'E02004275',
        '9EN' => 'E02004275',
        '9EP' => 'E02004275',
        '9EQ' => 'E02004280',
        '9ER' => 'E02004271',
        '9ES' => 'E02004271',
        '9ET' => 'E02004272',
        '9EU' => 'E02004279',
        '9EW' => 'E02004275',
        '9EX' => 'E02004280',
        '9EY' => 'E02004279',
        '9EZ' => 'E02004279',
        '9FA' => 'E02004277',
        '9FB' => 'E02004272',
        '9FD' => 'E02004272',
        '9FE' => 'E02004272',
        '9FF' => 'E02004272',
        '9FG' => 'E02004272',
        '9FH' => 'E02004272',
        '9FJ' => 'E02004272',
        '9FL' => 'E02004272',
        '9FN' => 'E02004272',
        '9FP' => 'E02004272',
        '9FQ' => 'E02004272',
        '9FS' => 'E02004272',
        '9FT' => 'E02004272',
        '9FW' => 'E02004272',
        '9GZ' => 'E02004272',
        '9HA' => 'E02004279',
        '9HB' => 'E02004279',
        '9HD' => 'E02004279',
        '9HE' => 'E02004279',
        '9HF' => 'E02004280',
        '9HG' => 'E02004280',
        '9HH' => 'E02004280',
        '9HJ' => 'E02004280',
        '9HL' => 'E02004280',
        '9HN' => 'E02004280',
        '9HP' => 'E02004280',
        '9HQ' => 'E02004280',
        '9HR' => 'E02004280',
        '9HS' => 'E02004280',
        '9HT' => 'E02004280',
        '9HU' => 'E02004280',
        '9HW' => 'E02004280',
        '9HX' => 'E02004280',
        '9HY' => 'E02004279',
        '9HZ' => 'E02004279',
        '9JA' => 'E02004280',
        '9JB' => 'E02004280',
        '9JD' => 'E02004279',
        '9JE' => 'E02004279',
        '9JF' => 'E02004279',
        '9JG' => 'E02004279',
        '9JH' => 'E02004279',
        '9JJ' => 'E02004279',
        '9JL' => 'E02004279',
        '9JN' => 'E02004279',
        '9JP' => 'E02004279',
        '9JQ' => 'E02004279',
        '9JR' => 'E02004279',
        '9JS' => 'E02004279',
        '9JT' => 'E02004279',
        '9JU' => 'E02004279',
        '9JW' => 'E02004279',
        '9JX' => 'E02004279',
        '9JY' => 'E02004279',
        '9JZ' => 'E02004279',
        '9LA' => 'E02004279',
        '9LB' => 'E02004279',
        '9LD' => 'E02004279',
        '9LE' => 'E02004279',
        '9LF' => 'E02004279',
        '9LG' => 'E02004279',
        '9LH' => 'E02004279',
        '9LJ' => 'E02004279',
        '9LL' => 'E02004279',
        '9LN' => 'E02004279',
        '9LP' => 'E02004279',
        '9LQ' => 'E02004279',
        '9LR' => 'E02004279',
        '9LS' => 'E02004279',
        '9LT' => 'E02004279',
        '9LU' => 'E02004279',
        '9LW' => 'E02004279',
        '9LX' => 'E02004279',
        '9LY' => 'E02004279',
        '9LZ' => 'E02004279',
        '9NA' => 'E02004272',
        '9NB' => 'E02004272',
        '9ND' => 'E02004272',
        '9NE' => 'E02004272',
        '9NF' => 'E02004272',
        '9NG' => 'E02004272',
        '9NH' => 'E02004272',
        '9NJ' => 'E02004272',
        '9NL' => 'E02004272',
        '9NN' => 'E02004272',
        '9NP' => 'E02004272',
        '9NQ' => 'E02004272',
        '9NR' => 'E02004272',
        '9NS' => 'E02004272',
        '9NT' => 'E02004272',
        '9NU' => 'E02004272',
        '9NW' => 'E02004272',
        '9NX' => 'E02004272',
        '9NY' => 'E02004272',
        '9NZ' => 'E02004272',
        '9PA' => 'E02004272',
        '9PB' => 'E02004272',
        '9PD' => 'E02004272',
        '9PE' => 'E02004272',
        '9PF' => 'E02004272',
        '9PG' => 'E02004272',
        '9PH' => 'E02004272',
        '9PJ' => 'E02004272',
        '9PL' => 'E02004272',
        '9PN' => 'E02004272',
        '9PP' => 'E02004279',
        '9PQ' => 'E02004272',
        '9PR' => 'E02004279',
        '9PS' => 'E02004279',
        '9PT' => 'E02004279',
        '9PU' => 'E02004279',
        '9PW' => 'E02004272',
        '9PX' => 'E02004272',
        '9PY' => 'E02004272',
        '9PZ' => 'E02004272',
        '9QA' => 'E02004272',
        '9QB' => 'E02004272',
        '9QD' => 'E02004272',
        '9QE' => 'E02004272',
        '9QF' => 'E02004272',
        '9QG' => 'E02004272',
        '9QH' => 'E02004272',
        '9QJ' => 'E02004272',
        '9QL' => 'E02004272',
        '9QN' => 'E02004272',
        '9QP' => 'E02004272',
        '9QQ' => 'E02004272',
        '9QR' => 'E02004272',
        '9QS' => 'E02004272',
        '9QT' => 'E02004272',
        '9QU' => 'E02004272',
        '9QW' => 'E02004272',
        '9QX' => 'E02004272',
        '9QY' => 'E02004272',
        '9QZ' => 'E02004272',
        '9RA' => 'E02004272',
        '9RB' => 'E02004272',
        '9RD' => 'E02004272',
        '9RE' => 'E02004272',
        '9RF' => 'E02004272',
        '9RG' => 'E02004272',
        '9RH' => 'E02004272',
        '9RJ' => 'E02004272',
        '9RL' => 'E02004272',
        '9RN' => 'E02004272',
        '9RP' => 'E02004272',
        '9RQ' => 'E02004272',
        '9RR' => 'E02004272',
        '9RS' => 'E02004272',
        '9RT' => 'E02004272',
        '9RU' => 'E02004272',
        '9RW' => 'E02004272',
        '9RX' => 'E02004272',
        '9RY' => 'E02004272',
        '9RZ' => 'E02004272',
        '9SA' => 'E02004272',
        '9SB' => 'E02004272',
        '9SD' => 'E02004272',
        '9SE' => 'E02004272',
        '9SF' => 'E02004272',
        '9SG' => 'E02004272',
        '9SH' => 'E02004272',
        '9SJ' => 'E02004272',
        '9SL' => 'E02004272',
        '9SN' => 'E02004272',
        '9SP' => 'E02004272',
        '9SQ' => 'E02004272',
        '9SR' => 'E02004272',
        '9SS' => 'E02004272',
        '9ST' => 'E02004272',
        '9SU' => 'E02004279',
        '9SW' => 'E02004272',
        '9SX' => 'E02004272',
        '9SY' => 'E02004272',
        '9SZ' => 'E02004272',
        '9TA' => 'E02004279',
        '9TB' => 'E02004272',
        '9TD' => 'E02004279',
        '9TE' => 'E02004280',
        '9TF' => 'E02004275',
        '9TG' => 'E02004279',
        '9TH' => 'E02004272',
        '9TJ' => 'E02004272',
        '9TL' => 'E02004272',
        '9TN' => 'E02004272',
        '9TP' => 'E02004272',
        '9TQ' => 'E02004272',
        '9TR' => 'E02004272',
        '9TS' => 'E02004272',
        '9TT' => 'E02004272',
        '9TU' => 'E02004279',
        '9TW' => 'E02004279',
        '9TX' => 'E02004272',
        '9TY' => 'E02004272',
        '9TZ' => 'E02004272',
        '9UA' => 'E02004272',
        '9UB' => 'E02004272',
        '9UD' => 'E02004272',
        '9UE' => 'E02004272',
        '9UF' => 'E02004272',
        '9UG' => 'E02004272',
        '9UH' => 'E02004272',
        '9UJ' => 'E02004272',
        '9UL' => 'E02004272',
        '9UN' => 'E02004272',
        '9UP' => 'E02004272',
        '9UQ' => 'E02004272',
        '9UR' => 'E02004272',
        '9US' => 'E02004272',
        '9UT' => 'E02004272',
        '9UU' => 'E02004272',
        '9UW' => 'E02004272',
        '9UX' => 'E02004272',
        '9UY' => 'E02004272',
        '9UZ' => 'E02004272',
        '9WA' => 'E02004272',
        '9WB' => 'E02004272',
        '9WD' => 'E02004272',
        '9WE' => 'E02004272',
        '9WF' => 'E02004272',
        '9WG' => 'E02004272',
        '9WH' => 'E02004272',
        '9WJ' => 'E02004272',
        '9WL' => 'E02004272',
        '9WN' => 'E02004277',
        '9WP' => 'E02004272',
        '9WQ' => 'E02004272',
        '9WT' => 'E02004272',
        '9XA' => 'E02004272',
        '9XB' => 'E02004275',
        '9XD' => 'E02004279',
        '9XE' => 'E02004272',
        '9XQ' => 'E02004277',
        '9XT' => 'E02004272',
        '9XU' => 'E02004272',
        '9XX' => 'E02004272',
        '9XY' => 'E02004272',
        '9XZ' => 'E02004272',
        '9YA' => 'E02004277',
        '9YB' => 'E02004277',
        '9YD' => 'E02004272',
        '9YE' => 'E02004277',
        '9YF' => 'E02004277',
        '9YG' => 'E02004277',
        '9YH' => 'E02004277',
        '9YJ' => 'E02004272',
        '9YL' => 'E02004272',
        '9YN' => 'E02004272',
        '9YP' => 'E02004272',
        '9YQ' => 'E02004277',
        '9YR' => 'E02004277',
        '9YS' => 'E02004272',
        '9YT' => 'E02004277',
        '9YU' => 'E02004272',
        '9YW' => 'E02004277',
        '9YX' => 'E02004272',
        '9YY' => 'E02004272',
        '9YZ' => 'E02004277',
        '9ZJ' => 'E02004277',
        '9ZN' => 'E02004277',
        '9ZQ' => 'E02004277',
        '9ZT' => 'E02004277',
        '9ZX' => 'E02004277',
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
