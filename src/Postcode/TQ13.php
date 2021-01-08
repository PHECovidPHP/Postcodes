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
final class TQ13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004204',
        '0AB' => 'E02004204',
        '0AD' => 'E02004204',
        '0AE' => 'E02004204',
        '0AF' => 'E02004204',
        '0AG' => 'E02004213',
        '0AH' => 'E02004204',
        '0AJ' => 'E02004213',
        '0AL' => 'E02004211',
        '0AN' => 'E02004213',
        '0AP' => 'E02004213',
        '0AQ' => 'E02004213',
        '0AR' => 'E02004211',
        '0AS' => 'E02004211',
        '0AT' => 'E02004211',
        '0AU' => 'E02004211',
        '0AW' => 'E02004213',
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
        '0BS' => 'E02004204',
        '0BT' => 'E02004204',
        '0BU' => 'E02004204',
        '0BW' => 'E02004211',
        '0BX' => 'E02004211',
        '0BY' => 'E02004213',
        '0BZ' => 'E02004214',
        '0DA' => 'E02004204',
        '0DB' => 'E02004204',
        '0DD' => 'E02004204',
        '0DE' => 'E02004204',
        '0DF' => 'E02004204',
        '0DG' => 'E02004204',
        '0DH' => 'E02004204',
        '0DJ' => 'E02004204',
        '0DL' => 'E02004204',
        '0DN' => 'E02004204',
        '0DP' => 'E02004204',
        '0DQ' => 'E02004204',
        '0DR' => 'E02004204',
        '0DS' => 'E02004204',
        '0DT' => 'E02004204',
        '0DU' => 'E02004201',
        '0DW' => 'E02004204',
        '0DX' => 'E02004204',
        '0DY' => 'E02004204',
        '0DZ' => 'E02004204',
        '0EA' => 'E02004204',
        '0EB' => 'E02004204',
        '0ED' => 'E02004204',
        '0EE' => 'E02004204',
        '0EF' => 'E02004204',
        '0EG' => 'E02004204',
        '0EH' => 'E02004204',
        '0EJ' => 'E02004204',
        '0EL' => 'E02004204',
        '0EN' => 'E02004204',
        '0EP' => 'E02004204',
        '0EQ' => 'E02004204',
        '0ER' => 'E02004204',
        '0ES' => 'E02004204',
        '0ET' => 'E02004204',
        '0EU' => 'E02004204',
        '0EW' => 'E02004204',
        '0EX' => 'E02004204',
        '0EY' => 'E02004204',
        '0EZ' => 'E02004204',
        '0FA' => 'E02004204',
        '0FB' => 'E02004204',
        '0FD' => 'E02004204',
        '0FE' => 'E02004204',
        '0FF' => 'E02004204',
        '0FG' => 'E02004211',
        '0FH' => 'E02004204',
        '0FJ' => 'E02004204',
        '0FL' => 'E02004204',
        '0FN' => 'E02004204',
        '0FR' => 'E02004204',
        '0FY' => 'E02004204',
        '0GA' => 'E02004204',
        '0GB' => 'E02004204',
        '0GD' => 'E02004204',
        '0GE' => 'E02004204',
        '0GG' => 'E02004204',
        '0GZ' => 'E02004204',
        '0HA' => 'E02004204',
        '0HB' => 'E02004204',
        '0HD' => 'E02004204',
        '0HE' => 'E02004204',
        '0HF' => 'E02004204',
        '0HG' => 'E02004204',
        '0HH' => 'E02004204',
        '0HJ' => 'E02004204',
        '0HL' => 'E02004204',
        '0HN' => 'E02004204',
        '0HP' => 'E02004204',
        '0HQ' => 'E02004204',
        '0HR' => 'E02004204',
        '0HS' => 'E02004204',
        '0HT' => 'E02004204',
        '0HU' => 'E02004204',
        '0HW' => 'E02004204',
        '0HX' => 'E02004204',
        '0HY' => 'E02004204',
        '0HZ' => 'E02004204',
        '0JA' => 'E02004204',
        '0JB' => 'E02004204',
        '0JD' => 'E02004204',
        '0JE' => 'E02004204',
        '0JF' => 'E02004204',
        '0JG' => 'E02004204',
        '0JH' => 'E02004204',
        '0JJ' => 'E02004204',
        '0JL' => 'E02004204',
        '0JN' => 'E02004204',
        '0JP' => 'E02004204',
        '0JQ' => 'E02004204',
        '0JR' => 'E02004204',
        '0JS' => 'E02004204',
        '0JT' => 'E02004204',
        '0JU' => 'E02004204',
        '0JW' => 'E02004204',
        '0JX' => 'E02004204',
        '0JY' => 'E02004204',
        '0JZ' => 'E02004204',
        '0LA' => 'E02004204',
        '0LB' => 'E02004204',
        '0LD' => 'E02004204',
        '0LE' => 'E02004204',
        '0LF' => 'E02004204',
        '0LG' => 'E02004204',
        '0LH' => 'E02004204',
        '0LJ' => 'E02004204',
        '0LL' => 'E02004204',
        '0LN' => 'E02004204',
        '0LP' => 'E02004204',
        '0LQ' => 'E02004204',
        '0LR' => 'E02004204',
        '0LS' => 'E02004204',
        '0LT' => 'E02004204',
        '0LU' => 'E02004201',
        '0LW' => 'E02004204',
        '0LX' => 'E02004201',
        '0LY' => 'E02004201',
        '0LZ' => 'E02004201',
        '0NA' => 'E02004201',
        '0NB' => 'E02004204',
        '0ND' => 'E02004204',
        '0NE' => 'E02004204',
        '0NF' => 'E02004204',
        '0NG' => 'E02004204',
        '0NH' => 'E02004204',
        '0NJ' => 'E02004201',
        '0NL' => 'E02004201',
        '0NN' => 'E02004201',
        '0NP' => 'E02004201',
        '0NQ' => 'E02004204',
        '0NR' => 'E02004201',
        '0NS' => 'E02004201',
        '0NT' => 'E02004201',
        '0NU' => 'E02004204',
        '0NW' => 'E02004201',
        '0NX' => 'E02004204',
        '0NY' => 'E02004204',
        '0NZ' => 'E02004204',
        '0PA' => 'E02004204',
        '0PB' => 'E02004204',
        '0PD' => 'E02004204',
        '0PE' => 'E02004204',
        '0PF' => 'E02004204',
        '0PG' => 'E02004204',
        '0PH' => 'E02004204',
        '0PJ' => 'E02004204',
        '0PL' => 'E02004204',
        '0PN' => 'E02004204',
        '0PP' => 'E02004204',
        '0PQ' => 'E02004204',
        '0PR' => 'E02004204',
        '0PS' => 'E02004204',
        '0PT' => 'E02004204',
        '0PU' => 'E02004204',
        '0PW' => 'E02004204',
        '0PX' => 'E02004204',
        '0PY' => 'E02004204',
        '0PZ' => 'E02004204',
        '0QA' => 'E02004211',
        '0QB' => 'E02004204',
        '0QD' => 'E02004211',
        '0QE' => 'E02004204',
        '0QF' => 'E02004204',
        '0QG' => 'E02004204',
        '0QH' => 'E02004204',
        '0QJ' => 'E02004204',
        '0QL' => 'E02004204',
        '0QN' => 'E02004204',
        '0QP' => 'E02004204',
        '0QQ' => 'E02004204',
        '0QR' => 'E02004204',
        '0QZ' => 'E02004204',
        '0RA' => 'E02004204',
        '0RB' => 'E02004204',
        '0RD' => 'E02004204',
        '0RE' => 'E02004204',
        '0RF' => 'E02004204',
        '0RH' => 'E02004204',
        '0WA' => 'E02004204',
        '0WB' => 'E02004204',
        '0WD' => 'E02004204',
        '0WG' => 'E02004204',
        '0WP' => 'E02004204',
        '0WQ' => 'E02004204',
        '0WR' => 'E02004204',
        '0WS' => 'E02004204',
        '0WT' => 'E02004204',
        '0WU' => 'E02004204',
        '0WW' => 'E02004204',
        '0WX' => 'E02004204',
        '0WY' => 'E02004204',
        '0WZ' => 'E02004204',
        '0XA' => 'E02004204',
        '0XJ' => 'E02004204',
        '0XR' => 'E02004204',
        '0XS' => 'E02004204',
        '0XT' => 'E02004204',
        '0XU' => 'E02004204',
        '0XW' => 'E02004214',
        '0XX' => 'E02004214',
        '0XY' => 'E02004204',
        '0XZ' => 'E02004204',
        '0YA' => 'E02004204',
        '0YB' => 'E02004199',
        '0YD' => 'E02004214',
        '0YE' => 'E02004199',
        '0YF' => 'E02004214',
        '0YG' => 'E02004204',
        '0YH' => 'E02004204',
        '0YJ' => 'E02004204',
        '0YL' => 'E02004204',
        '0YN' => 'E02004214',
        '0YP' => 'E02004199',
        '0YQ' => 'E02004204',
        '0YR' => 'E02004214',
        '0YS' => 'E02004204',
        '0YT' => 'E02004204',
        '0YW' => 'E02004214',
        '0YX' => 'E02004199',
        '0YY' => 'E02004199',
        '0YZ' => 'E02004204',
        '0ZB' => 'E02004204',
        '0ZQ' => 'E02004204',
        '7AA' => 'E02004217',
        '7AB' => 'E02004217',
        '7AD' => 'E02004217',
        '7AE' => 'E02004217',
        '7AF' => 'E02004217',
        '7AG' => 'E02004217',
        '7AH' => 'E02004217',
        '7AJ' => 'E02004217',
        '7AL' => 'E02004217',
        '7AN' => 'E02004217',
        '7AP' => 'E02004217',
        '7AQ' => 'E02004217',
        '7AR' => 'E02004217',
        '7AS' => 'E02004217',
        '7AT' => 'E02004217',
        '7AU' => 'E02004217',
        '7AW' => 'E02004217',
        '7AX' => 'E02004217',
        '7AY' => 'E02004217',
        '7AZ' => 'E02004217',
        '7BA' => 'E02004217',
        '7BB' => 'E02004217',
        '7BD' => 'E02004217',
        '7BE' => 'E02004217',
        '7BG' => 'E02004217',
        '7BH' => 'E02004217',
        '7BJ' => 'E02004217',
        '7BL' => 'E02004217',
        '7BN' => 'E02004217',
        '7BP' => 'E02004217',
        '7BQ' => 'E02004217',
        '7BS' => 'E02004217',
        '7BT' => 'E02004217',
        '7BU' => 'E02004217',
        '7BW' => 'E02004217',
        '7BX' => 'E02004217',
        '7BY' => 'E02004217',
        '7BZ' => 'E02004217',
        '7DA' => 'E02004217',
        '7DB' => 'E02004217',
        '7DD' => 'E02004217',
        '7DE' => 'E02004217',
        '7DF' => 'E02004217',
        '7DG' => 'E02004217',
        '7DH' => 'E02004217',
        '7DJ' => 'E02004217',
        '7DL' => 'E02004217',
        '7DN' => 'E02004217',
        '7DP' => 'E02004217',
        '7DQ' => 'E02004217',
        '7DR' => 'E02004217',
        '7DS' => 'E02004217',
        '7DT' => 'E02004217',
        '7DU' => 'E02004217',
        '7DW' => 'E02004217',
        '7DX' => 'E02004217',
        '7DY' => 'E02004217',
        '7DZ' => 'E02004217',
        '7EA' => 'E02004217',
        '7EB' => 'E02004217',
        '7ED' => 'E02004217',
        '7EE' => 'E02004217',
        '7EF' => 'E02004217',
        '7EG' => 'E02004217',
        '7EH' => 'E02004217',
        '7EJ' => 'E02004217',
        '7EL' => 'E02004217',
        '7EN' => 'E02004217',
        '7EP' => 'E02004217',
        '7EQ' => 'E02004217',
        '7ER' => 'E02004217',
        '7ES' => 'E02004217',
        '7ET' => 'E02004217',
        '7EU' => 'E02004217',
        '7EW' => 'E02004217',
        '7EX' => 'E02004217',
        '7EY' => 'E02004217',
        '7EZ' => 'E02004217',
        '7FA' => 'E02004203',
        '7FB' => 'E02004217',
        '7FD' => 'E02004217',
        '7FE' => 'E02004217',
        '7FF' => 'E02004217',
        '7FG' => 'E02004217',
        '7FH' => 'E02004217',
        '7FJ' => 'E02004217',
        '7FL' => 'E02004217',
        '7FN' => 'E02004217',
        '7FP' => 'E02004217',
        '7GA' => 'E02004217',
        '7HA' => 'E02004217',
        '7HB' => 'E02004217',
        '7HD' => 'E02004217',
        '7HE' => 'E02004217',
        '7HF' => 'E02004217',
        '7HG' => 'E02004217',
        '7HH' => 'E02004217',
        '7HJ' => 'E02004217',
        '7HL' => 'E02004217',
        '7HN' => 'E02004217',
        '7HP' => 'E02004217',
        '7HQ' => 'E02004217',
        '7HR' => 'E02004217',
        '7HS' => 'E02004217',
        '7HT' => 'E02004217',
        '7HU' => 'E02004217',
        '7HW' => 'E02004217',
        '7HX' => 'E02004217',
        '7HY' => 'E02004217',
        '7HZ' => 'E02004217',
        '7JA' => 'E02004207',
        '7JB' => 'E02004207',
        '7JD' => 'E02004217',
        '7JE' => 'E02004217',
        '7JF' => 'E02004217',
        '7JG' => 'E02004217',
        '7JH' => 'E02004190',
        '7JJ' => 'E02004190',
        '7JL' => 'E02004217',
        '7JN' => 'E02004217',
        '7JP' => 'E02004217',
        '7JQ' => 'E02004217',
        '7JR' => 'E02004219',
        '7JS' => 'E02004219',
        '7JT' => 'E02004219',
        '7JU' => 'E02004219',
        '7JW' => 'E02004217',
        '7JX' => 'E02004219',
        '7JY' => 'E02004217',
        '7JZ' => 'E02004217',
        '7LA' => 'E02004217',
        '7LB' => 'E02004217',
        '7LD' => 'E02004217',
        '7LE' => 'E02004190',
        '7LF' => 'E02004217',
        '7LG' => 'E02004217',
        '7LH' => 'E02004217',
        '7LJ' => 'E02004217',
        '7LL' => 'E02004219',
        '7LN' => 'E02004219',
        '7LP' => 'E02004219',
        '7LQ' => 'E02004217',
        '7LR' => 'E02004219',
        '7LS' => 'E02004219',
        '7LT' => 'E02004190',
        '7LU' => 'E02004190',
        '7LW' => 'E02004219',
        '7LX' => 'E02004190',
        '7LY' => 'E02004190',
        '7LZ' => 'E02004190',
        '7NA' => 'E02004190',
        '7NB' => 'E02004190',
        '7ND' => 'E02004190',
        '7NE' => 'E02004190',
        '7NF' => 'E02004190',
        '7NG' => 'E02004190',
        '7NH' => 'E02004217',
        '7NJ' => 'E02004217',
        '7NL' => 'E02004217',
        '7NN' => 'E02004217',
        '7NP' => 'E02004190',
        '7NQ' => 'E02004190',
        '7NR' => 'E02004190',
        '7NS' => 'E02004190',
        '7NT' => 'E02004190',
        '7NU' => 'E02004203',
        '7NW' => 'E02004217',
        '7NX' => 'E02004203',
        '7NY' => 'E02004203',
        '7NZ' => 'E02004203',
        '7PA' => 'E02004203',
        '7PB' => 'E02004203',
        '7PD' => 'E02004203',
        '7PE' => 'E02004203',
        '7PF' => 'E02004203',
        '7PG' => 'E02004203',
        '7PH' => 'E02004203',
        '7PJ' => 'E02004203',
        '7PL' => 'E02004203',
        '7PN' => 'E02004203',
        '7PP' => 'E02004203',
        '7PQ' => 'E02004203',
        '7PR' => 'E02004203',
        '7PS' => 'E02004203',
        '7PT' => 'E02004203',
        '7PU' => 'E02004203',
        '7PW' => 'E02004203',
        '7PX' => 'E02004203',
        '7PY' => 'E02004217',
        '7QA' => 'E02004217',
        '7QB' => 'E02004217',
        '7QD' => 'E02004217',
        '7QE' => 'E02004217',
        '7QF' => 'E02004217',
        '7QG' => 'E02004217',
        '7QH' => 'E02004217',
        '7QJ' => 'E02004217',
        '7QL' => 'E02004217',
        '7QN' => 'E02004217',
        '7QP' => 'E02004217',
        '7QQ' => 'E02004217',
        '7QR' => 'E02004217',
        '7QS' => 'E02004217',
        '7QT' => 'E02004217',
        '7QU' => 'E02004217',
        '7QW' => 'E02004217',
        '7QX' => 'E02004217',
        '7QY' => 'E02004217',
        '7QZ' => 'E02004217',
        '7RA' => 'E02004217',
        '7RB' => 'E02004217',
        '7RD' => 'E02004217',
        '7RE' => 'E02004217',
        '7RF' => 'E02004217',
        '7RG' => 'E02004217',
        '7RH' => 'E02004217',
        '7RJ' => 'E02004217',
        '7RL' => 'E02004217',
        '7RN' => 'E02004217',
        '7RP' => 'E02004217',
        '7RQ' => 'E02004217',
        '7RR' => 'E02004190',
        '7RS' => 'E02004190',
        '7RT' => 'E02004190',
        '7RU' => 'E02004190',
        '7RW' => 'E02004190',
        '7RX' => 'E02004190',
        '7RY' => 'E02004190',
        '7RZ' => 'E02004190',
        '7SA' => 'E02004217',
        '7SB' => 'E02004190',
        '7SG' => 'E02004190',
        '7SH' => 'E02004190',
        '7SJ' => 'E02004190',
        '7SL' => 'E02004190',
        '7SN' => 'E02004190',
        '7SP' => 'E02004190',
        '7SQ' => 'E02004190',
        '7SR' => 'E02004190',
        '7SS' => 'E02004190',
        '7ST' => 'E02004190',
        '7SW' => 'E02004190',
        '7TA' => 'E02004203',
        '7TB' => 'E02004203',
        '7TD' => 'E02004203',
        '7TE' => 'E02004203',
        '7TF' => 'E02004203',
        '7TG' => 'E02004203',
        '7TH' => 'E02004203',
        '7TJ' => 'E02004203',
        '7TL' => 'E02004203',
        '7TQ' => 'E02004203',
        '7TR' => 'E02004203',
        '7TS' => 'E02004203',
        '7TT' => 'E02004203',
        '7TU' => 'E02004203',
        '7TX' => 'E02004203',
        '7TY' => 'E02004203',
        '7TZ' => 'E02004231',
        '7UA' => 'E02004203',
        '7UB' => 'E02004203',
        '7UH' => 'E02004217',
        '7UJ' => 'E02004217',
        '7UL' => 'E02004217',
        '7UN' => 'E02004217',
        '7UP' => 'E02004217',
        '7UW' => 'E02004214',
        '7WA' => 'E02004214',
        '7WU' => 'E02004214',
        '7WW' => 'E02004217',
        '7WX' => 'E02004214',
        '7WY' => 'E02004214',
        '7WZ' => 'E02004214',
        '7XA' => 'E02004214',
        '7XG' => 'E02004217',
        '7XH' => 'E02004217',
        '7XQ' => 'E02004217',
        '7XT' => 'E02004214',
        '7XU' => 'E02004214',
        '7XW' => 'E02004214',
        '7XX' => 'E02004214',
        '7XZ' => 'E02004214',
        '7YA' => 'E02004217',
        '7YB' => 'E02004217',
        '7YD' => 'E02004217',
        '7YE' => 'E02004217',
        '7YF' => 'E02004217',
        '7YG' => 'E02004217',
        '7YH' => 'E02004214',
        '7YJ' => 'E02004214',
        '7YL' => 'E02004217',
        '7YN' => 'E02004217',
        '7YP' => 'E02004217',
        '7YQ' => 'E02004214',
        '7YR' => 'E02004214',
        '7YS' => 'E02004214',
        '7YT' => 'E02004214',
        '7YU' => 'E02004214',
        '7YW' => 'E02004217',
        '7YX' => 'E02004214',
        '7YY' => 'E02004217',
        '7YZ' => 'E02004214',
        '7ZB' => 'E02004217',
        '7ZD' => 'E02004214',
        '7ZE' => 'E02004214',
        '7ZJ' => 'E02004214',
        '7ZN' => 'E02004214',
        '7ZQ' => 'E02004214',
        '7ZR' => 'E02004214',
        '7ZX' => 'E02004214',
        '8AA' => 'E02004231',
        '8AB' => 'E02004231',
        '8AD' => 'E02004231',
        '8AE' => 'E02004231',
        '8AF' => 'E02004231',
        '8AG' => 'E02004231',
        '8AH' => 'E02004231',
        '8AJ' => 'E02004231',
        '8AL' => 'E02004231',
        '8AN' => 'E02004231',
        '8AP' => 'E02004231',
        '8AQ' => 'E02004231',
        '8AR' => 'E02004231',
        '8AS' => 'E02004231',
        '8AT' => 'E02004231',
        '8AU' => 'E02004231',
        '8AW' => 'E02004231',
        '8AX' => 'E02004231',
        '8AY' => 'E02004231',
        '8AZ' => 'E02004231',
        '8BA' => 'E02004231',
        '8BB' => 'E02004231',
        '8BD' => 'E02004231',
        '8BE' => 'E02004231',
        '8BG' => 'E02004231',
        '8BH' => 'E02004231',
        '8BJ' => 'E02004231',
        '8BL' => 'E02004231',
        '8BN' => 'E02004231',
        '8BP' => 'E02004231',
        '8BQ' => 'E02004231',
        '8BS' => 'E02004231',
        '8BT' => 'E02004231',
        '8BU' => 'E02004231',
        '8BW' => 'E02004231',
        '8BX' => 'E02004231',
        '8BY' => 'E02004231',
        '8BZ' => 'E02004231',
        '8DA' => 'E02004231',
        '8DB' => 'E02004231',
        '8DD' => 'E02004231',
        '8DE' => 'E02004231',
        '8DF' => 'E02004231',
        '8DG' => 'E02004231',
        '8DH' => 'E02004231',
        '8DJ' => 'E02004231',
        '8DL' => 'E02004231',
        '8DN' => 'E02004231',
        '8DP' => 'E02004231',
        '8DQ' => 'E02004231',
        '8DR' => 'E02004231',
        '8DS' => 'E02004231',
        '8DT' => 'E02004231',
        '8DU' => 'E02004231',
        '8DW' => 'E02004231',
        '8DX' => 'E02004231',
        '8DY' => 'E02004231',
        '8DZ' => 'E02004231',
        '8EA' => 'E02004231',
        '8EB' => 'E02004231',
        '8ED' => 'E02004231',
        '8EE' => 'E02004231',
        '8EF' => 'E02004231',
        '8EG' => 'E02004231',
        '8EH' => 'E02004231',
        '8EJ' => 'E02004231',
        '8EL' => 'E02004231',
        '8EN' => 'E02004231',
        '8EP' => 'E02004231',
        '8EQ' => 'E02004231',
        '8ER' => 'E02004231',
        '8ES' => 'E02004231',
        '8ET' => 'E02004231',
        '8EU' => 'E02004231',
        '8EW' => 'E02004231',
        '8EX' => 'E02004231',
        '8EY' => 'E02004231',
        '8EZ' => 'E02004231',
        '8FB' => 'E02004203',
        '8FD' => 'E02004203',
        '8FE' => 'E02004203',
        '8FF' => 'E02004231',
        '8FG' => 'E02004231',
        '8FH' => 'E02004231',
        '8FJ' => 'E02004231',
        '8FL' => 'E02004231',
        '8GB' => 'E02004203',
        '8HD' => 'E02004231',
        '8HE' => 'E02004231',
        '8HF' => 'E02004231',
        '8HG' => 'E02004231',
        '8HH' => 'E02004231',
        '8HJ' => 'E02004231',
        '8HL' => 'E02004231',
        '8HN' => 'E02004231',
        '8HP' => 'E02004231',
        '8HQ' => 'E02004231',
        '8HR' => 'E02004231',
        '8HS' => 'E02004231',
        '8HT' => 'E02004231',
        '8HU' => 'E02004231',
        '8HW' => 'E02004231',
        '8HX' => 'E02004231',
        '8HY' => 'E02004231',
        '8HZ' => 'E02004231',
        '8JA' => 'E02004203',
        '8JB' => 'E02004203',
        '8JE' => 'E02004231',
        '8JF' => 'E02004231',
        '8JG' => 'E02004231',
        '8JH' => 'E02004231',
        '8JJ' => 'E02004231',
        '8JL' => 'E02004231',
        '8JN' => 'E02004231',
        '8JP' => 'E02004231',
        '8JQ' => 'E02004231',
        '8JR' => 'E02004231',
        '8JS' => 'E02004231',
        '8JT' => 'E02004231',
        '8JU' => 'E02004231',
        '8JW' => 'E02004231',
        '8JX' => 'E02004231',
        '8JY' => 'E02004231',
        '8JZ' => 'E02004231',
        '8LA' => 'E02004231',
        '8LB' => 'E02004231',
        '8LE' => 'E02004203',
        '8LG' => 'E02004203',
        '8LH' => 'E02004203',
        '8LJ' => 'E02004231',
        '8LL' => 'E02004203',
        '8LN' => 'E02004203',
        '8LP' => 'E02004203',
        '8LQ' => 'E02004203',
        '8LR' => 'E02004203',
        '8LS' => 'E02004203',
        '8LT' => 'E02004203',
        '8LU' => 'E02004203',
        '8LW' => 'E02004203',
        '8LX' => 'E02004203',
        '8LY' => 'E02004203',
        '8LZ' => 'E02004203',
        '8NA' => 'E02004203',
        '8NB' => 'E02004203',
        '8ND' => 'E02004203',
        '8NE' => 'E02004203',
        '8NF' => 'E02004203',
        '8NG' => 'E02004203',
        '8NH' => 'E02004203',
        '8NJ' => 'E02004203',
        '8NL' => 'E02004203',
        '8NN' => 'E02004203',
        '8NP' => 'E02004203',
        '8NQ' => 'E02004203',
        '8NR' => 'E02004203',
        '8NS' => 'E02004203',
        '8NT' => 'E02004203',
        '8NU' => 'E02004203',
        '8NW' => 'E02004203',
        '8NX' => 'E02004203',
        '8NY' => 'E02004203',
        '8NZ' => 'E02004203',
        '8PA' => 'E02004203',
        '8PB' => 'E02004203',
        '8PD' => 'E02004203',
        '8PE' => 'E02004203',
        '8PF' => 'E02004203',
        '8PG' => 'E02004203',
        '8PH' => 'E02004203',
        '8PJ' => 'E02004203',
        '8PL' => 'E02004203',
        '8PN' => 'E02004203',
        '8PP' => 'E02004203',
        '8PQ' => 'E02004203',
        '8PR' => 'E02004203',
        '8PS' => 'E02004203',
        '8PT' => 'E02004203',
        '8PU' => 'E02004203',
        '8PW' => 'E02004203',
        '8PX' => 'E02004203',
        '8PY' => 'E02004203',
        '8PZ' => 'E02004203',
        '8QA' => 'E02004203',
        '8QB' => 'E02004203',
        '8QD' => 'E02004203',
        '8QE' => 'E02004203',
        '8QF' => 'E02004203',
        '8QG' => 'E02004203',
        '8QH' => 'E02004203',
        '8QJ' => 'E02004203',
        '8QL' => 'E02004203',
        '8QQ' => 'E02004231',
        '8QT' => 'E02004203',
        '8QU' => 'E02004203',
        '8QX' => 'E02004203',
        '8QY' => 'E02004203',
        '8QZ' => 'E02004203',
        '8RA' => 'E02004203',
        '8RB' => 'E02004203',
        '8RD' => 'E02004203',
        '8RE' => 'E02004203',
        '8RF' => 'E02004203',
        '8RG' => 'E02004203',
        '8RH' => 'E02004203',
        '8RJ' => 'E02004203',
        '8RL' => 'E02004203',
        '8RN' => 'E02004231',
        '8RP' => 'E02004203',
        '8RQ' => 'E02004203',
        '8RR' => 'E02004203',
        '8RS' => 'E02004203',
        '8RT' => 'E02004203',
        '8RU' => 'E02004203',
        '8RW' => 'E02004203',
        '8SA' => 'E02004203',
        '8SB' => 'E02004203',
        '8SD' => 'E02004203',
        '8SE' => 'E02004203',
        '8SF' => 'E02004203',
        '8SG' => 'E02004203',
        '8SH' => 'E02004203',
        '8SJ' => 'E02004203',
        '8SL' => 'E02004203',
        '8SN' => 'E02004203',
        '8SP' => 'E02004203',
        '8SQ' => 'E02004203',
        '8SR' => 'E02004203',
        '8SS' => 'E02004203',
        '8ST' => 'E02004203',
        '8SU' => 'E02004203',
        '8SW' => 'E02004203',
        '8SX' => 'E02004203',
        '8SY' => 'E02004231',
        '8TA' => 'E02004203',
        '8TY' => 'E02004203',
        '8TZ' => 'E02004203',
        '8UA' => 'E02004231',
        '8UB' => 'E02004231',
        '8UT' => 'E02004231',
        '8WA' => 'E02004231',
        '8WB' => 'E02004231',
        '8WD' => 'E02004231',
        '8WE' => 'E02004231',
        '8WP' => 'E02004231',
        '8WQ' => 'E02004203',
        '8WR' => 'E02004231',
        '8WS' => 'E02004203',
        '8WT' => 'E02004231',
        '8WU' => 'E02004231',
        '8WW' => 'E02004231',
        '8WY' => 'E02004231',
        '8WZ' => 'E02004231',
        '8XJ' => 'E02004231',
        '8YA' => 'E02004231',
        '8YB' => 'E02004203',
        '8YD' => 'E02004203',
        '8YE' => 'E02004231',
        '8YF' => 'E02004231',
        '8YG' => 'E02004203',
        '8YH' => 'E02004231',
        '8YJ' => 'E02004203',
        '8YL' => 'E02004231',
        '8YN' => 'E02004231',
        '8YP' => 'E02004203',
        '8YQ' => 'E02004203',
        '8YR' => 'E02004231',
        '8YS' => 'E02004231',
        '8YT' => 'E02004231',
        '8YU' => 'E02004203',
        '8YW' => 'E02004203',
        '8YX' => 'E02004203',
        '8YZ' => 'E02004231',
        '8ZN' => 'E02004203',
        '9AA' => 'E02004204',
        '9AB' => 'E02004204',
        '9AD' => 'E02004204',
        '9AE' => 'E02004204',
        '9AF' => 'E02004204',
        '9AG' => 'E02004204',
        '9AH' => 'E02004204',
        '9AJ' => 'E02004204',
        '9AL' => 'E02004204',
        '9AN' => 'E02004204',
        '9AP' => 'E02004204',
        '9AQ' => 'E02004204',
        '9AR' => 'E02004204',
        '9AS' => 'E02004204',
        '9AT' => 'E02004204',
        '9AU' => 'E02004204',
        '9AW' => 'E02004204',
        '9AX' => 'E02004204',
        '9AY' => 'E02004207',
        '9AZ' => 'E02004204',
        '9BA' => 'E02004204',
        '9BB' => 'E02004204',
        '9BD' => 'E02004207',
        '9BE' => 'E02004207',
        '9BG' => 'E02004204',
        '9BH' => 'E02004204',
        '9BJ' => 'E02004204',
        '9BL' => 'E02004204',
        '9BN' => 'E02004207',
        '9BP' => 'E02004204',
        '9BQ' => 'E02004204',
        '9BS' => 'E02004204',
        '9BT' => 'E02004204',
        '9BU' => 'E02004204',
        '9BW' => 'E02004204',
        '9BX' => 'E02004207',
        '9BY' => 'E02004207',
        '9BZ' => 'E02004207',
        '9DA' => 'E02004207',
        '9DB' => 'E02004204',
        '9DD' => 'E02004207',
        '9DE' => 'E02004207',
        '9DF' => 'E02004207',
        '9DG' => 'E02004207',
        '9DH' => 'E02004207',
        '9DJ' => 'E02004207',
        '9DL' => 'E02004207',
        '9DN' => 'E02004207',
        '9DP' => 'E02004207',
        '9DQ' => 'E02004207',
        '9DR' => 'E02004207',
        '9DS' => 'E02004207',
        '9DT' => 'E02004207',
        '9DU' => 'E02004207',
        '9DW' => 'E02004207',
        '9DX' => 'E02004207',
        '9DY' => 'E02004204',
        '9DZ' => 'E02004204',
        '9EA' => 'E02004207',
        '9EB' => 'E02004207',
        '9ED' => 'E02004214',
        '9EE' => 'E02004204',
        '9EF' => 'E02004207',
        '9EG' => 'E02004204',
        '9EH' => 'E02004204',
        '9EJ' => 'E02004204',
        '9EL' => 'E02004204',
        '9EN' => 'E02004204',
        '9EP' => 'E02004204',
        '9EQ' => 'E02004204',
        '9ER' => 'E02004204',
        '9ES' => 'E02004204',
        '9ET' => 'E02004204',
        '9EU' => 'E02004204',
        '9EW' => 'E02004204',
        '9EX' => 'E02004204',
        '9EY' => 'E02004204',
        '9EZ' => 'E02004204',
        '9FA' => 'E02004207',
        '9FB' => 'E02004207',
        '9FD' => 'E02004207',
        '9FE' => 'E02004207',
        '9FF' => 'E02004204',
        '9FG' => 'E02004204',
        '9FH' => 'E02004207',
        '9FJ' => 'E02004207',
        '9FL' => 'E02004207',
        '9FN' => 'E02004207',
        '9FP' => 'E02004207',
        '9FR' => 'E02004207',
        '9FS' => 'E02004214',
        '9FT' => 'E02004207',
        '9FU' => 'E02004207',
        '9FW' => 'E02004207',
        '9FX' => 'E02004204',
        '9FY' => 'E02004207',
        '9FZ' => 'E02004207',
        '9GA' => 'E02004204',
        '9GB' => 'E02004207',
        '9GD' => 'E02004207',
        '9GE' => 'E02004207',
        '9GF' => 'E02004207',
        '9GG' => 'E02004207',
        '9GH' => 'E02004207',
        '9GJ' => 'E02004207',
        '9GL' => 'E02004203',
        '9GN' => 'E02004207',
        '9GP' => 'E02004204',
        '9GQ' => 'E02004207',
        '9GR' => 'E02004207',
        '9GS' => 'E02004204',
        '9GT' => 'E02004204',
        '9GU' => 'E02004204',
        '9GW' => 'E02004207',
        '9GX' => 'E02004207',
        '9GY' => 'E02004207',
        '9GZ' => 'E02004207',
        '9HA' => 'E02004204',
        '9HB' => 'E02004204',
        '9HD' => 'E02004204',
        '9HE' => 'E02004204',
        '9HF' => 'E02004204',
        '9HG' => 'E02004204',
        '9HH' => 'E02004204',
        '9HJ' => 'E02004204',
        '9HL' => 'E02004203',
        '9HN' => 'E02004203',
        '9HP' => 'E02004204',
        '9HQ' => 'E02004204',
        '9HR' => 'E02004204',
        '9HS' => 'E02004203',
        '9HT' => 'E02004204',
        '9HU' => 'E02004204',
        '9HW' => 'E02004203',
        '9HX' => 'E02004204',
        '9HY' => 'E02004204',
        '9HZ' => 'E02004204',
        '9JA' => 'E02004204',
        '9JB' => 'E02004204',
        '9JD' => 'E02004204',
        '9JE' => 'E02004203',
        '9JF' => 'E02004203',
        '9JG' => 'E02004207',
        '9JH' => 'E02004207',
        '9JJ' => 'E02004207',
        '9JL' => 'E02004207',
        '9JN' => 'E02004207',
        '9JP' => 'E02004203',
        '9JQ' => 'E02004203',
        '9JR' => 'E02004207',
        '9JS' => 'E02004203',
        '9JT' => 'E02004207',
        '9JU' => 'E02004207',
        '9JW' => 'E02004207',
        '9JX' => 'E02004207',
        '9JY' => 'E02004203',
        '9JZ' => 'E02004203',
        '9LA' => 'E02004203',
        '9LB' => 'E02004203',
        '9LD' => 'E02004203',
        '9LE' => 'E02004203',
        '9LF' => 'E02004203',
        '9LG' => 'E02004203',
        '9LH' => 'E02004203',
        '9LJ' => 'E02004203',
        '9LL' => 'E02004203',
        '9LN' => 'E02004203',
        '9LP' => 'E02004207',
        '9LQ' => 'E02004203',
        '9LR' => 'E02004204',
        '9LS' => 'E02004207',
        '9LT' => 'E02004214',
        '9LU' => 'E02004203',
        '9LW' => 'E02004214',
        '9LX' => 'E02004204',
        '9LY' => 'E02004203',
        '9LZ' => 'E02004204',
        '9NA' => 'E02004203',
        '9NB' => 'E02004203',
        '9ND' => 'E02004203',
        '9NE' => 'E02004203',
        '9NF' => 'E02004204',
        '9NG' => 'E02004203',
        '9NH' => 'E02004203',
        '9NJ' => 'E02004203',
        '9NL' => 'E02004203',
        '9NN' => 'E02004203',
        '9NP' => 'E02004203',
        '9NQ' => 'E02004203',
        '9NR' => 'E02004203',
        '9NS' => 'E02004204',
        '9NT' => 'E02004204',
        '9NU' => 'E02004204',
        '9NW' => 'E02004203',
        '9NX' => 'E02004203',
        '9NY' => 'E02004203',
        '9NZ' => 'E02004203',
        '9PA' => 'E02004204',
        '9PB' => 'E02004204',
        '9PD' => 'E02004204',
        '9PE' => 'E02004207',
        '9PF' => 'E02004207',
        '9PG' => 'E02004203',
        '9PH' => 'E02004204',
        '9PJ' => 'E02004207',
        '9PL' => 'E02004207',
        '9PN' => 'E02004207',
        '9PP' => 'E02004204',
        '9PQ' => 'E02004204',
        '9PR' => 'E02004203',
        '9PS' => 'E02004203',
        '9PT' => 'E02004204',
        '9PU' => 'E02004204',
        '9PW' => 'E02004204',
        '9PX' => 'E02004204',
        '9PY' => 'E02004204',
        '9PZ' => 'E02004204',
        '9QA' => 'E02004204',
        '9QB' => 'E02004204',
        '9QD' => 'E02004204',
        '9QE' => 'E02004204',
        '9QF' => 'E02004204',
        '9QG' => 'E02004204',
        '9QH' => 'E02004204',
        '9QJ' => 'E02004204',
        '9QL' => 'E02004204',
        '9QN' => 'E02004204',
        '9QP' => 'E02004204',
        '9QQ' => 'E02004204',
        '9QR' => 'E02004204',
        '9QS' => 'E02004204',
        '9QT' => 'E02004204',
        '9QU' => 'E02004204',
        '9QW' => 'E02004204',
        '9QX' => 'E02004204',
        '9QY' => 'E02004204',
        '9QZ' => 'E02004204',
        '9RA' => 'E02004207',
        '9RB' => 'E02004207',
        '9RD' => 'E02004207',
        '9RE' => 'E02004207',
        '9RF' => 'E02004207',
        '9RG' => 'E02004207',
        '9RH' => 'E02004207',
        '9RJ' => 'E02004207',
        '9RL' => 'E02004207',
        '9RN' => 'E02004207',
        '9RP' => 'E02004207',
        '9RQ' => 'E02004207',
        '9RR' => 'E02004207',
        '9RS' => 'E02004207',
        '9RT' => 'E02004207',
        '9RU' => 'E02004207',
        '9RW' => 'E02004207',
        '9RX' => 'E02004207',
        '9RY' => 'E02004207',
        '9RZ' => 'E02004214',
        '9SA' => 'E02004204',
        '9SB' => 'E02004204',
        '9SD' => 'E02004204',
        '9SE' => 'E02004203',
        '9SF' => 'E02004203',
        '9SG' => 'E02004203',
        '9SH' => 'E02004203',
        '9SJ' => 'E02004203',
        '9SL' => 'E02004203',
        '9SN' => 'E02004203',
        '9SP' => 'E02004203',
        '9SQ' => 'E02004203',
        '9SR' => 'E02004203',
        '9SS' => 'E02004203',
        '9ST' => 'E02004204',
        '9SU' => 'E02004204',
        '9SW' => 'E02004203',
        '9SX' => 'E02004204',
        '9SY' => 'E02004204',
        '9SZ' => 'E02004204',
        '9TA' => 'E02004203',
        '9TB' => 'E02004203',
        '9TD' => 'E02004203',
        '9TE' => 'E02004203',
        '9TF' => 'E02004203',
        '9TG' => 'E02004203',
        '9TH' => 'E02004203',
        '9TJ' => 'E02004203',
        '9TL' => 'E02004203',
        '9TN' => 'E02004203',
        '9TP' => 'E02004203',
        '9TQ' => 'E02004203',
        '9TR' => 'E02004203',
        '9TS' => 'E02004203',
        '9TT' => 'E02004204',
        '9TU' => 'E02004203',
        '9TW' => 'E02004203',
        '9TX' => 'E02004203',
        '9TY' => 'E02004207',
        '9TZ' => 'E02004207',
        '9UA' => 'E02004203',
        '9UB' => 'E02004203',
        '9UD' => 'E02004203',
        '9UE' => 'E02004203',
        '9UF' => 'E02004203',
        '9UG' => 'E02004203',
        '9UH' => 'E02004203',
        '9UJ' => 'E02004203',
        '9UL' => 'E02004203',
        '9UN' => 'E02004203',
        '9UP' => 'E02004203',
        '9UQ' => 'E02004203',
        '9UR' => 'E02004214',
        '9US' => 'E02004214',
        '9UT' => 'E02004204',
        '9UU' => 'E02004204',
        '9UW' => 'E02004203',
        '9UX' => 'E02004214',
        '9UY' => 'E02004203',
        '9UZ' => 'E02004203',
        '9WA' => 'E02004214',
        '9WB' => 'E02004214',
        '9WD' => 'E02004214',
        '9WE' => 'E02004214',
        '9WF' => 'E02004214',
        '9WG' => 'E02004214',
        '9WH' => 'E02004214',
        '9WJ' => 'E02004214',
        '9WL' => 'E02004204',
        '9WN' => 'E02004214',
        '9WP' => 'E02004214',
        '9WQ' => 'E02004214',
        '9WR' => 'E02004214',
        '9WS' => 'E02004214',
        '9WT' => 'E02004214',
        '9WU' => 'E02004214',
        '9WW' => 'E02004204',
        '9WX' => 'E02004204',
        '9WY' => 'E02004214',
        '9WZ' => 'E02004214',
        '9XA' => 'E02004203',
        '9XB' => 'E02004203',
        '9XD' => 'E02004203',
        '9XE' => 'E02004203',
        '9XF' => 'E02004203',
        '9XG' => 'E02004203',
        '9XH' => 'E02004203',
        '9XJ' => 'E02004203',
        '9XL' => 'E02004204',
        '9XN' => 'E02004214',
        '9XP' => 'E02004207',
        '9XQ' => 'E02004203',
        '9XR' => 'E02004207',
        '9XS' => 'E02004207',
        '9XT' => 'E02004207',
        '9XU' => 'E02004207',
        '9XW' => 'E02004214',
        '9XX' => 'E02004207',
        '9XY' => 'E02004207',
        '9XZ' => 'E02004203',
        '9YA' => 'E02004207',
        '9YB' => 'E02004214',
        '9YD' => 'E02004203',
        '9YE' => 'E02004207',
        '9YF' => 'E02004207',
        '9YG' => 'E02004207',
        '9YH' => 'E02004204',
        '9YJ' => 'E02004204',
        '9YL' => 'E02004204',
        '9YN' => 'E02004207',
        '9YP' => 'E02004204',
        '9YQ' => 'E02004207',
        '9YR' => 'E02004204',
        '9YS' => 'E02004214',
        '9YT' => 'E02004214',
        '9YU' => 'E02004214',
        '9YW' => 'E02004204',
        '9YX' => 'E02004204',
        '9YY' => 'E02004214',
        '9YZ' => 'E02004203',
        '9ZD' => 'E02004203',
        '9ZE' => 'E02004214',
        '9ZF' => 'E02004203',
        '9ZG' => 'E02004214',
        '9ZH' => 'E02004204',
        '9ZJ' => 'E02004214',
        '9ZL' => 'E02004214',
        '9ZN' => 'E02004214',
        '9ZP' => 'E02004203',
        '9ZQ' => 'E02004203',
        '9ZR' => 'E02004203',
        '9ZT' => 'E02004214',
        '9ZW' => 'E02004203',
        '9ZX' => 'E02004203',
        '9ZY' => 'E02004203',
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