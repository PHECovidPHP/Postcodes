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
final class RM7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000479',
        '0AB' => 'E02000480',
        '0AD' => 'E02000479',
        '0AE' => 'E02000480',
        '0AF' => 'E02000479',
        '0AG' => 'E02000480',
        '0AJ' => 'E02000479',
        '0AL' => 'E02000480',
        '0AN' => 'E02000479',
        '0AP' => 'E02000476',
        '0AQ' => 'E02000480',
        '0AR' => 'E02000479',
        '0AS' => 'E02000004',
        '0AT' => 'E02000479',
        '0AU' => 'E02000479',
        '0AW' => 'E02000480',
        '0AX' => 'E02000004',
        '0AY' => 'E02000004',
        '0AZ' => 'E02000479',
        '0BA' => 'E02000479',
        '0BB' => 'E02000480',
        '0BD' => 'E02000480',
        '0BE' => 'E02000480',
        '0BF' => 'E02000480',
        '0BG' => 'E02000480',
        '0BH' => 'E02000480',
        '0BJ' => 'E02000480',
        '0BL' => 'E02000480',
        '0BN' => 'E02000004',
        '0BP' => 'E02000480',
        '0BQ' => 'E02000479',
        '0BS' => 'E02000480',
        '0BT' => 'E02000480',
        '0BU' => 'E02000480',
        '0BW' => 'E02000004',
        '0BX' => 'E02000480',
        '0BY' => 'E02000004',
        '0BZ' => 'E02000004',
        '0DA' => 'E02000480',
        '0DB' => 'E02000480',
        '0DD' => 'E02000480',
        '0DE' => 'E02000480',
        '0DF' => 'E02000480',
        '0DG' => 'E02000480',
        '0DH' => 'E02000480',
        '0DJ' => 'E02000480',
        '0DL' => 'E02000480',
        '0DN' => 'E02000480',
        '0DP' => 'E02000479',
        '0DQ' => 'E02000004',
        '0DR' => 'E02000004',
        '0DS' => 'E02000480',
        '0DT' => 'E02000480',
        '0DU' => 'E02000480',
        '0DW' => 'E02000004',
        '0DX' => 'E02000480',
        '0DY' => 'E02000004',
        '0DZ' => 'E02000004',
        '0EA' => 'E02000480',
        '0EB' => 'E02000004',
        '0ED' => 'E02000480',
        '0EE' => 'E02000480',
        '0EF' => 'E02000480',
        '0EG' => 'E02000479',
        '0EH' => 'E02000480',
        '0EJ' => 'E02000480',
        '0EL' => 'E02000480',
        '0EN' => 'E02000480',
        '0EP' => 'E02000480',
        '0EQ' => 'E02000004',
        '0ER' => 'E02000480',
        '0ES' => 'E02000480',
        '0ET' => 'E02000480',
        '0EU' => 'E02000480',
        '0EW' => 'E02000004',
        '0EX' => 'E02000480',
        '0EY' => 'E02000480',
        '0EZ' => 'E02000480',
        '0FA' => 'E02000480',
        '0FB' => 'E02000480',
        '0FD' => 'E02000480',
        '0FE' => 'E02000480',
        '0FF' => 'E02000480',
        '0FG' => 'E02000480',
        '0FH' => 'E02000480',
        '0FJ' => 'E02000480',
        '0FL' => 'E02000480',
        '0FN' => 'E02000480',
        '0FP' => 'E02000480',
        '0FQ' => 'E02000480',
        '0FR' => 'E02000479',
        '0FS' => 'E02000480',
        '0FT' => 'E02000480',
        '0FU' => 'E02000480',
        '0FW' => 'E02000480',
        '0FX' => 'E02000004',
        '0FY' => 'E02000480',
        '0FZ' => 'E02000480',
        '0GD' => 'E02000480',
        '0GE' => 'E02000480',
        '0GF' => 'E02000480',
        '0GG' => 'E02000480',
        '0GH' => 'E02000480',
        '0GJ' => 'E02000480',
        '0GL' => 'E02000480',
        '0GN' => 'E02000480',
        '0GP' => 'E02000480',
        '0GQ' => 'E02000480',
        '0GR' => 'E02000480',
        '0GS' => 'E02000480',
        '0GT' => 'E02000480',
        '0GU' => 'E02000480',
        '0GW' => 'E02000480',
        '0GX' => 'E02000480',
        '0GY' => 'E02000480',
        '0GZ' => 'E02000480',
        '0HA' => 'E02000480',
        '0HB' => 'E02000480',
        '0HD' => 'E02000480',
        '0HF' => 'E02000480',
        '0HG' => 'E02000480',
        '0HH' => 'E02000480',
        '0HJ' => 'E02000480',
        '0HL' => 'E02000480',
        '0HN' => 'E02000480',
        '0HP' => 'E02000480',
        '0HQ' => 'E02000480',
        '0HR' => 'E02000480',
        '0HS' => 'E02000480',
        '0HT' => 'E02000480',
        '0HU' => 'E02000480',
        '0HW' => 'E02000480',
        '0HX' => 'E02000480',
        '0HY' => 'E02000480',
        '0HZ' => 'E02000480',
        '0JA' => 'E02000004',
        '0JB' => 'E02000480',
        '0JD' => 'E02000480',
        '0JE' => 'E02000004',
        '0JF' => 'E02000480',
        '0JG' => 'E02000480',
        '0JL' => 'E02000480',
        '0JP' => 'E02000480',
        '0JR' => 'E02000480',
        '0JS' => 'E02000480',
        '0JT' => 'E02000004',
        '0JU' => 'E02000480',
        '0JW' => 'E02000004',
        '0JX' => 'E02000480',
        '0LA' => 'E02000480',
        '0LB' => 'E02000480',
        '0LD' => 'E02000480',
        '0LH' => 'E02000480',
        '0LJ' => 'E02000480',
        '0LL' => 'E02000480',
        '0LP' => 'E02000480',
        '0LQ' => 'E02000480',
        '0LR' => 'E02000480',
        '0LS' => 'E02000480',
        '0LT' => 'E02000480',
        '0LU' => 'E02000480',
        '0LW' => 'E02000480',
        '0LX' => 'E02000480',
        '0NA' => 'E02000480',
        '0NB' => 'E02000480',
        '0ND' => 'E02000480',
        '0NH' => 'E02000480',
        '0NJ' => 'E02000480',
        '0NL' => 'E02000480',
        '0NP' => 'E02000480',
        '0NR' => 'E02000480',
        '0NS' => 'E02000480',
        '0NT' => 'E02000004',
        '0NU' => 'E02000004',
        '0PD' => 'E02000480',
        '0PH' => 'E02000004',
        '0PJ' => 'E02000480',
        '0PL' => 'E02000480',
        '0PN' => 'E02000480',
        '0PP' => 'E02000480',
        '0PR' => 'E02000480',
        '0PS' => 'E02000480',
        '0PT' => 'E02000480',
        '0PU' => 'E02000480',
        '0PX' => 'E02000480',
        '0PY' => 'E02000480',
        '0PZ' => 'E02000480',
        '0QA' => 'E02000480',
        '0QB' => 'E02000480',
        '0QD' => 'E02000480',
        '0QH' => 'E02000480',
        '0QJ' => 'E02000480',
        '0QL' => 'E02000480',
        '0QP' => 'E02000480',
        '0QQ' => 'E02000480',
        '0QR' => 'E02000480',
        '0QS' => 'E02000480',
        '0QT' => 'E02000480',
        '0QU' => 'E02000480',
        '0QX' => 'E02000004',
        '0RA' => 'E02000479',
        '0RB' => 'E02000480',
        '0RJ' => 'E02000004',
        '0RL' => 'E02000004',
        '0RP' => 'E02000480',
        '0RR' => 'E02000480',
        '0RS' => 'E02000004',
        '0RT' => 'E02000004',
        '0RU' => 'E02000004',
        '0RX' => 'E02000004',
        '0SA' => 'E02000004',
        '0SB' => 'E02000004',
        '0SD' => 'E02000004',
        '0SF' => 'E02000004',
        '0SH' => 'E02000004',
        '0SJ' => 'E02000004',
        '0SL' => 'E02000004',
        '0SP' => 'E02000004',
        '0SR' => 'E02000004',
        '0SS' => 'E02000004',
        '0ST' => 'E02000004',
        '0SX' => 'E02000480',
        '0TB' => 'E02000004',
        '0TD' => 'E02000004',
        '0TH' => 'E02000004',
        '0TJ' => 'E02000004',
        '0TL' => 'E02000004',
        '0TP' => 'E02000004',
        '0TR' => 'E02000004',
        '0TS' => 'E02000004',
        '0TT' => 'E02000004',
        '0TU' => 'E02000004',
        '0TX' => 'E02000004',
        '0UA' => 'E02000004',
        '0UB' => 'E02000004',
        '0UD' => 'E02000004',
        '0UG' => 'E02000004',
        '0UH' => 'E02000004',
        '0UJ' => 'E02000004',
        '0UL' => 'E02000004',
        '0UP' => 'E02000004',
        '0UR' => 'E02000004',
        '0UT' => 'E02000004',
        '0UU' => 'E02000004',
        '0UX' => 'E02000004',
        '0UZ' => 'E02000004',
        '0WA' => 'E02000480',
        '0WB' => 'E02000004',
        '0WE' => 'E02000004',
        '0WF' => 'E02000480',
        '0WH' => 'E02000004',
        '0WJ' => 'E02000480',
        '0WL' => 'E02000004',
        '0WN' => 'E02000004',
        '0WP' => 'E02000004',
        '0WQ' => 'E02000480',
        '0WR' => 'E02000004',
        '0WS' => 'E02000004',
        '0WT' => 'E02000480',
        '0WU' => 'E02000480',
        '0WW' => 'E02000004',
        '0WX' => 'E02000004',
        '0WY' => 'E02000004',
        '0WZ' => 'E02000004',
        '0XA' => 'E02000004',
        '0XB' => 'E02000004',
        '0XD' => 'E02000004',
        '0XE' => 'E02000004',
        '0XF' => 'E02000480',
        '0XG' => 'E02000004',
        '0XH' => 'E02000004',
        '0XJ' => 'E02000004',
        '0XL' => 'E02000004',
        '0XN' => 'E02000004',
        '0XP' => 'E02000004',
        '0XQ' => 'E02000004',
        '0XR' => 'E02000004',
        '0XS' => 'E02000480',
        '0XT' => 'E02000004',
        '0XU' => 'E02000004',
        '0XW' => 'E02000004',
        '0XX' => 'E02000004',
        '0XY' => 'E02000004',
        '0XZ' => 'E02000480',
        '0YA' => 'E02000004',
        '0YB' => 'E02000004',
        '0YD' => 'E02000004',
        '0YE' => 'E02000480',
        '0YF' => 'E02000480',
        '0YG' => 'E02000004',
        '0YH' => 'E02000004',
        '0YJ' => 'E02000004',
        '0YL' => 'E02000004',
        '0YN' => 'E02000004',
        '0YP' => 'E02000004',
        '0YQ' => 'E02000004',
        '0YR' => 'E02000004',
        '0YS' => 'E02000004',
        '0YT' => 'E02000004',
        '0YU' => 'E02000004',
        '0YW' => 'E02000004',
        '0YX' => 'E02000004',
        '0YY' => 'E02000004',
        '0YZ' => 'E02000004',
        '0ZX' => 'E02000480',
        '1AA' => 'E02000480',
        '1AB' => 'E02000480',
        '1AD' => 'E02000480',
        '1AE' => 'E02000480',
        '1AF' => 'E02000480',
        '1AG' => 'E02000480',
        '1AH' => 'E02000480',
        '1AJ' => 'E02000480',
        '1AL' => 'E02000476',
        '1AN' => 'E02000480',
        '1AP' => 'E02000480',
        '1AQ' => 'E02000480',
        '1AR' => 'E02000480',
        '1AS' => 'E02000480',
        '1AT' => 'E02000480',
        '1AU' => 'E02000480',
        '1AW' => 'E02000480',
        '1AX' => 'E02000480',
        '1AY' => 'E02000480',
        '1AZ' => 'E02000480',
        '1BA' => 'E02000480',
        '1BB' => 'E02000480',
        '1BD' => 'E02000480',
        '1BE' => 'E02000480',
        '1BF' => 'E02000480',
        '1BG' => 'E02000480',
        '1BH' => 'E02000480',
        '1BJ' => 'E02000480',
        '1BL' => 'E02000480',
        '1BN' => 'E02000480',
        '1BP' => 'E02000480',
        '1BQ' => 'E02000480',
        '1BR' => 'E02000480',
        '1BS' => 'E02000480',
        '1BT' => 'E02000480',
        '1BU' => 'E02000480',
        '1BW' => 'E02000480',
        '1BX' => 'E02000480',
        '1BY' => 'E02000480',
        '1BZ' => 'E02000480',
        '1DA' => 'E02000480',
        '1DB' => 'E02000480',
        '1DD' => 'E02000480',
        '1DE' => 'E02000480',
        '1DF' => 'E02000480',
        '1DG' => 'E02000480',
        '1DH' => 'E02000480',
        '1DJ' => 'E02000480',
        '1DL' => 'E02000480',
        '1DN' => 'E02000480',
        '1DP' => 'E02000480',
        '1DQ' => 'E02000480',
        '1DR' => 'E02000480',
        '1DS' => 'E02000480',
        '1DT' => 'E02000480',
        '1DU' => 'E02000480',
        '1DW' => 'E02000480',
        '1DX' => 'E02000480',
        '1DY' => 'E02000480',
        '1DZ' => 'E02000480',
        '1EA' => 'E02000480',
        '1EB' => 'E02000480',
        '1ED' => 'E02000480',
        '1EE' => 'E02000480',
        '1EF' => 'E02000480',
        '1EG' => 'E02000480',
        '1EH' => 'E02000480',
        '1EJ' => 'E02000480',
        '1EL' => 'E02000480',
        '1EN' => 'E02000480',
        '1EP' => 'E02000480',
        '1EQ' => 'E02000480',
        '1ER' => 'E02000480',
        '1ES' => 'E02000480',
        '1ET' => 'E02000480',
        '1EU' => 'E02000480',
        '1EW' => 'E02000480',
        '1EX' => 'E02000480',
        '1EY' => 'E02000480',
        '1EZ' => 'E02000480',
        '1FA' => 'E02000480',
        '1FB' => 'E02000480',
        '1FE' => 'E02000480',
        '1FF' => 'E02000480',
        '1FG' => 'E02000480',
        '1FH' => 'E02000480',
        '1FJ' => 'E02000480',
        '1FL' => 'E02000480',
        '1FN' => 'E02000480',
        '1FP' => 'E02000480',
        '1FQ' => 'E02000480',
        '1FR' => 'E02000480',
        '1FS' => 'E02000480',
        '1FT' => 'E02000480',
        '1FU' => 'E02000480',
        '1FW' => 'E02000480',
        '1FX' => 'E02000480',
        '1FY' => 'E02000480',
        '1FZ' => 'E02000480',
        '1GA' => 'E02000480',
        '1GB' => 'E02000480',
        '1GD' => 'E02000480',
        '1GE' => 'E02000480',
        '1GF' => 'E02000480',
        '1GG' => 'E02000480',
        '1GH' => 'E02000480',
        '1GJ' => 'E02000480',
        '1GL' => 'E02000480',
        '1GN' => 'E02000480',
        '1GP' => 'E02000480',
        '1GQ' => 'E02000480',
        '1GR' => 'E02000480',
        '1GS' => 'E02000480',
        '1GT' => 'E02000480',
        '1GU' => 'E02000480',
        '1GX' => 'E02000480',
        '1GY' => 'E02000480',
        '1GZ' => 'E02000480',
        '1HA' => 'E02000480',
        '1HB' => 'E02000480',
        '1HD' => 'E02000480',
        '1HE' => 'E02000480',
        '1HF' => 'E02000480',
        '1HG' => 'E02000480',
        '1HH' => 'E02000480',
        '1HJ' => 'E02000480',
        '1HL' => 'E02000480',
        '1HN' => 'E02000480',
        '1HP' => 'E02000480',
        '1HQ' => 'E02000480',
        '1HR' => 'E02000480',
        '1HS' => 'E02000480',
        '1HT' => 'E02000480',
        '1HU' => 'E02000480',
        '1HW' => 'E02000480',
        '1HX' => 'E02000480',
        '1HY' => 'E02000480',
        '1HZ' => 'E02000480',
        '1JA' => 'E02000480',
        '1JB' => 'E02000480',
        '1JD' => 'E02000480',
        '1JE' => 'E02000480',
        '1JF' => 'E02000480',
        '1JG' => 'E02000480',
        '1JH' => 'E02000480',
        '1JJ' => 'E02000480',
        '1JL' => 'E02000480',
        '1JN' => 'E02000480',
        '1JP' => 'E02000480',
        '1JQ' => 'E02000480',
        '1JR' => 'E02000480',
        '1JS' => 'E02000480',
        '1JT' => 'E02000480',
        '1JU' => 'E02000480',
        '1JW' => 'E02000480',
        '1JX' => 'E02000480',
        '1JY' => 'E02000480',
        '1JZ' => 'E02000480',
        '1LA' => 'E02000480',
        '1LB' => 'E02000480',
        '1LD' => 'E02000480',
        '1LE' => 'E02000480',
        '1LF' => 'E02000480',
        '1LG' => 'E02000480',
        '1LH' => 'E02000480',
        '1LJ' => 'E02000480',
        '1LL' => 'E02000480',
        '1LN' => 'E02000480',
        '1LP' => 'E02000480',
        '1LQ' => 'E02000480',
        '1LR' => 'E02000480',
        '1LS' => 'E02000480',
        '1LT' => 'E02000480',
        '1LU' => 'E02000480',
        '1LW' => 'E02000480',
        '1LX' => 'E02000480',
        '1LY' => 'E02000480',
        '1LZ' => 'E02000480',
        '1NA' => 'E02000480',
        '1NB' => 'E02000480',
        '1ND' => 'E02000480',
        '1NE' => 'E02000480',
        '1NF' => 'E02000480',
        '1NG' => 'E02000480',
        '1NH' => 'E02000480',
        '1NJ' => 'E02000480',
        '1NL' => 'E02000480',
        '1NN' => 'E02000480',
        '1NP' => 'E02000480',
        '1NQ' => 'E02000480',
        '1NR' => 'E02000480',
        '1NS' => 'E02000480',
        '1NT' => 'E02000480',
        '1NU' => 'E02000480',
        '1NW' => 'E02000480',
        '1NX' => 'E02000480',
        '1NY' => 'E02000480',
        '1NZ' => 'E02000480',
        '1PA' => 'E02000480',
        '1PB' => 'E02000480',
        '1PD' => 'E02000480',
        '1PE' => 'E02000480',
        '1PF' => 'E02000480',
        '1PG' => 'E02000480',
        '1PH' => 'E02000480',
        '1PJ' => 'E02000480',
        '1PL' => 'E02000480',
        '1PN' => 'E02000480',
        '1PP' => 'E02000480',
        '1PQ' => 'E02000480',
        '1PR' => 'E02000480',
        '1PS' => 'E02000480',
        '1PT' => 'E02000480',
        '1PU' => 'E02000480',
        '1PW' => 'E02000480',
        '1PX' => 'E02000480',
        '1PY' => 'E02000480',
        '1PZ' => 'E02000480',
        '1QA' => 'E02000480',
        '1QB' => 'E02000480',
        '1QD' => 'E02000480',
        '1QE' => 'E02000480',
        '1QF' => 'E02000480',
        '1QG' => 'E02000480',
        '1QH' => 'E02000480',
        '1QJ' => 'E02000480',
        '1QL' => 'E02000480',
        '1QN' => 'E02000480',
        '1QP' => 'E02000480',
        '1QQ' => 'E02000480',
        '1QR' => 'E02000480',
        '1QS' => 'E02000480',
        '1QT' => 'E02000480',
        '1QU' => 'E02000480',
        '1QW' => 'E02000480',
        '1QX' => 'E02000480',
        '1QY' => 'E02000480',
        '1QZ' => 'E02000480',
        '1RA' => 'E02000480',
        '1RB' => 'E02000480',
        '1RD' => 'E02000480',
        '1RE' => 'E02000480',
        '1RF' => 'E02000480',
        '1RG' => 'E02000480',
        '1RJ' => 'E02000480',
        '1RL' => 'E02000480',
        '1RN' => 'E02000480',
        '1RP' => 'E02000480',
        '1RQ' => 'E02000480',
        '1RR' => 'E02000480',
        '1RS' => 'E02000480',
        '1RT' => 'E02000480',
        '1RU' => 'E02000480',
        '1RW' => 'E02000480',
        '1RX' => 'E02000480',
        '1RY' => 'E02000480',
        '1RZ' => 'E02000480',
        '1SA' => 'E02000476',
        '1SB' => 'E02000476',
        '1SD' => 'E02000476',
        '1SE' => 'E02000480',
        '1SF' => 'E02000480',
        '1SG' => 'E02000480',
        '1SJ' => 'E02000480',
        '1SL' => 'E02000480',
        '1SN' => 'E02000480',
        '1SP' => 'E02000480',
        '1SQ' => 'E02000480',
        '1SR' => 'E02000480',
        '1SS' => 'E02000480',
        '1ST' => 'E02000480',
        '1SU' => 'E02000480',
        '1SW' => 'E02000480',
        '1SX' => 'E02000480',
        '1SY' => 'E02000480',
        '1SZ' => 'E02000480',
        '1TB' => 'E02000480',
        '1TD' => 'E02000480',
        '1TE' => 'E02000480',
        '1TF' => 'E02000480',
        '1TG' => 'E02000480',
        '1TH' => 'E02000480',
        '1TJ' => 'E02000480',
        '1TL' => 'E02000480',
        '1TN' => 'E02000480',
        '1TP' => 'E02000480',
        '1TQ' => 'E02000480',
        '1TR' => 'E02000480',
        '1TS' => 'E02000480',
        '1TT' => 'E02000480',
        '1TU' => 'E02000480',
        '1TW' => 'E02000480',
        '1TX' => 'E02000480',
        '1TY' => 'E02000480',
        '1TZ' => 'E02000480',
        '1UA' => 'E02000480',
        '1UB' => 'E02000480',
        '1UD' => 'E02000480',
        '1UE' => 'E02000480',
        '1UF' => 'E02000480',
        '1UG' => 'E02000480',
        '1UH' => 'E02000480',
        '1UJ' => 'E02000480',
        '1UL' => 'E02000480',
        '1UN' => 'E02000480',
        '1UP' => 'E02000480',
        '1UQ' => 'E02000480',
        '1UR' => 'E02000480',
        '1ZZ' => 'E02000476',
        '7AA' => 'E02000476',
        '7AB' => 'E02000476',
        '7AD' => 'E02000476',
        '7AE' => 'E02000472',
        '7AF' => 'E02000480',
        '7AG' => 'E02000474',
        '7AH' => 'E02000474',
        '7AJ' => 'E02000480',
        '7AL' => 'E02000474',
        '7AN' => 'E02000476',
        '7AP' => 'E02000474',
        '7AQ' => 'E02000472',
        '7AR' => 'E02000474',
        '7AS' => 'E02000474',
        '7AT' => 'E02000474',
        '7AU' => 'E02000474',
        '7AW' => 'E02000476',
        '7AX' => 'E02000474',
        '7AY' => 'E02000474',
        '7AZ' => 'E02000480',
        '7BA' => 'E02000474',
        '7BB' => 'E02000474',
        '7BD' => 'E02000474',
        '7BE' => 'E02000474',
        '7BF' => 'E02000474',
        '7BG' => 'E02000474',
        '7BH' => 'E02000474',
        '7BJ' => 'E02000474',
        '7BL' => 'E02000474',
        '7BN' => 'E02000474',
        '7BP' => 'E02000474',
        '7BQ' => 'E02000474',
        '7BR' => 'E02000474',
        '7BS' => 'E02000474',
        '7BT' => 'E02000474',
        '7BU' => 'E02000474',
        '7BW' => 'E02000474',
        '7BX' => 'E02000474',
        '7BY' => 'E02000480',
        '7BZ' => 'E02000474',
        '7DA' => 'E02000474',
        '7DB' => 'E02000474',
        '7DD' => 'E02000474',
        '7DE' => 'E02000476',
        '7DF' => 'E02000474',
        '7DG' => 'E02000474',
        '7DH' => 'E02000474',
        '7DJ' => 'E02000476',
        '7DL' => 'E02000476',
        '7DN' => 'E02000476',
        '7DP' => 'E02000476',
        '7DQ' => 'E02000480',
        '7DR' => 'E02000476',
        '7DS' => 'E02000476',
        '7DT' => 'E02000474',
        '7DU' => 'E02000474',
        '7DW' => 'E02000480',
        '7DX' => 'E02000476',
        '7DY' => 'E02000476',
        '7DZ' => 'E02000476',
        '7EA' => 'E02000476',
        '7EB' => 'E02000476',
        '7ED' => 'E02000474',
        '7EE' => 'E02000476',
        '7EF' => 'E02000476',
        '7EG' => 'E02000476',
        '7EH' => 'E02000474',
        '7EJ' => 'E02000474',
        '7EL' => 'E02000476',
        '7EN' => 'E02000476',
        '7EP' => 'E02000476',
        '7EQ' => 'E02000474',
        '7ER' => 'E02000476',
        '7ES' => 'E02000476',
        '7ET' => 'E02000476',
        '7EU' => 'E02000474',
        '7EW' => 'E02000476',
        '7EX' => 'E02000474',
        '7EY' => 'E02000479',
        '7FZ' => 'E02000480',
        '7GD' => 'E02000480',
        '7HB' => 'E02000476',
        '7HD' => 'E02000476',
        '7HE' => 'E02000476',
        '7HG' => 'E02000474',
        '7HH' => 'E02000476',
        '7HJ' => 'E02000476',
        '7HL' => 'E02000476',
        '7HN' => 'E02000480',
        '7HR' => 'E02000476',
        '7HS' => 'E02000476',
        '7HT' => 'E02000476',
        '7HU' => 'E02000474',
        '7HX' => 'E02000476',
        '7HY' => 'E02000474',
        '7HZ' => 'E02000480',
        '7JA' => 'E02000474',
        '7JB' => 'E02000474',
        '7JD' => 'E02000474',
        '7JE' => 'E02000474',
        '7JG' => 'E02000474',
        '7JH' => 'E02000474',
        '7JJ' => 'E02000474',
        '7JL' => 'E02000474',
        '7JN' => 'E02000474',
        '7JP' => 'E02000474',
        '7JR' => 'E02000474',
        '7JS' => 'E02000474',
        '7JT' => 'E02000474',
        '7JU' => 'E02000474',
        '7JX' => 'E02000474',
        '7LA' => 'E02000474',
        '7LB' => 'E02000474',
        '7LD' => 'E02000474',
        '7LE' => 'E02000474',
        '7LF' => 'E02000474',
        '7LG' => 'E02000474',
        '7LH' => 'E02000474',
        '7LJ' => 'E02000474',
        '7LL' => 'E02000476',
        '7LN' => 'E02000474',
        '7LP' => 'E02000474',
        '7LS' => 'E02000474',
        '7LT' => 'E02000476',
        '7LU' => 'E02000476',
        '7LX' => 'E02000476',
        '7NA' => 'E02000476',
        '7ND' => 'E02000474',
        '7NP' => 'E02000474',
        '7NQ' => 'E02000476',
        '7NS' => 'E02000474',
        '7NT' => 'E02000474',
        '7NU' => 'E02000472',
        '7NX' => 'E02000474',
        '7PD' => 'E02000474',
        '7PH' => 'E02000474',
        '7PJ' => 'E02000476',
        '7PL' => 'E02000474',
        '7PN' => 'E02000474',
        '7PP' => 'E02000472',
        '7PR' => 'E02000472',
        '7PS' => 'E02000472',
        '7PT' => 'E02000474',
        '7PU' => 'E02000474',
        '7PX' => 'E02000474',
        '7PY' => 'E02000474',
        '7RN' => 'E02000474',
        '7SE' => 'E02000474',
        '7TT' => 'E02000480',
        '7WA' => 'E02000480',
        '7WB' => 'E02000480',
        '7WD' => 'E02000480',
        '7WE' => 'E02000480',
        '7WL' => 'E02000480',
        '7WP' => 'E02000480',
        '7WW' => 'E02000480',
        '7WX' => 'E02000480',
        '7WY' => 'E02000480',
        '7WZ' => 'E02000480',
        '7ZP' => 'E02000480',
        '7ZU' => 'E02000480',
        '7ZW' => 'E02000480',
        '8AA' => 'E02000474',
        '8AB' => 'E02000474',
        '8AD' => 'E02000474',
        '8AE' => 'E02000474',
        '8AF' => 'E02000474',
        '8AG' => 'E02000480',
        '8AH' => 'E02000474',
        '8AJ' => 'E02000474',
        '8AL' => 'E02000474',
        '8AN' => 'E02000474',
        '8AP' => 'E02000474',
        '8AQ' => 'E02000474',
        '8AR' => 'E02000474',
        '8AS' => 'E02000474',
        '8AT' => 'E02000474',
        '8AU' => 'E02000474',
        '8AW' => 'E02000474',
        '8AX' => 'E02000474',
        '8AY' => 'E02000480',
        '8AZ' => 'E02000474',
        '8BA' => 'E02000474',
        '8BB' => 'E02000474',
        '8BD' => 'E02000474',
        '8BE' => 'E02000474',
        '8BG' => 'E02000474',
        '8BH' => 'E02000474',
        '8BJ' => 'E02000474',
        '8BL' => 'E02000474',
        '8BN' => 'E02000474',
        '8BP' => 'E02000474',
        '8BQ' => 'E02000480',
        '8BS' => 'E02000474',
        '8BT' => 'E02000474',
        '8BU' => 'E02000474',
        '8BW' => 'E02000474',
        '8BX' => 'E02000474',
        '8BY' => 'E02000474',
        '8BZ' => 'E02000474',
        '8DA' => 'E02000474',
        '8DB' => 'E02000474',
        '8DD' => 'E02000474',
        '8DE' => 'E02000474',
        '8DF' => 'E02000474',
        '8DG' => 'E02000474',
        '8DH' => 'E02000474',
        '8DJ' => 'E02000474',
        '8DL' => 'E02000474',
        '8DN' => 'E02000474',
        '8DP' => 'E02000474',
        '8DQ' => 'E02000480',
        '8DR' => 'E02000474',
        '8DS' => 'E02000474',
        '8DT' => 'E02000474',
        '8DU' => 'E02000474',
        '8DW' => 'E02000474',
        '8DX' => 'E02000474',
        '8DY' => 'E02000474',
        '8DZ' => 'E02000474',
        '8EA' => 'E02000474',
        '8EB' => 'E02000474',
        '8ED' => 'E02000474',
        '8EH' => 'E02000474',
        '8EJ' => 'E02000474',
        '8EL' => 'E02000474',
        '8EP' => 'E02000474',
        '8ER' => 'E02000474',
        '8ES' => 'E02000474',
        '8ET' => 'E02000474',
        '8EU' => 'E02000474',
        '8EX' => 'E02000474',
        '8EY' => 'E02000474',
        '8GG' => 'E02000480',
        '8HD' => 'E02000472',
        '8HH' => 'E02000472',
        '8HJ' => 'E02000472',
        '8HL' => 'E02000472',
        '8HP' => 'E02000472',
        '8HR' => 'E02000474',
        '8HS' => 'E02000474',
        '8HT' => 'E02000474',
        '8HU' => 'E02000474',
        '8HX' => 'E02000474',
        '8JA' => 'E02000474',
        '8JB' => 'E02000474',
        '8JD' => 'E02000474',
        '8JE' => 'E02000474',
        '8JH' => 'E02000474',
        '8JJ' => 'E02000474',
        '8JL' => 'E02000474',
        '8JP' => 'E02000474',
        '8JR' => 'E02000474',
        '8JS' => 'E02000474',
        '8JT' => 'E02000474',
        '8JU' => 'E02000474',
        '8JX' => 'E02000474',
        '8LA' => 'E02000474',
        '8LB' => 'E02000474',
        '8LD' => 'E02000474',
        '8LH' => 'E02000474',
        '8LJ' => 'E02000472',
        '8LL' => 'E02000474',
        '8LU' => 'E02000474',
        '8LX' => 'E02000474',
        '8LZ' => 'E02000474',
        '8NA' => 'E02000474',
        '8NB' => 'E02000468',
        '8ND' => 'E02000468',
        '8NH' => 'E02000472',
        '8NJ' => 'E02000468',
        '8NL' => 'E02000472',
        '8NP' => 'E02000468',
        '8NR' => 'E02000468',
        '8NS' => 'E02000468',
        '8NT' => 'E02000468',
        '8NU' => 'E02000468',
        '8NW' => 'E02000468',
        '8NX' => 'E02000468',
        '8PA' => 'E02000474',
        '8PB' => 'E02000474',
        '8PD' => 'E02000474',
        '8PH' => 'E02000468',
        '8PJ' => 'E02000468',
        '8PL' => 'E02000468',
        '8PX' => 'E02000472',
        '8QA' => 'E02000472',
        '8QB' => 'E02000472',
        '8QD' => 'E02000472',
        '8QE' => 'E02000474',
        '8QF' => 'E02000474',
        '8QG' => 'E02000474',
        '8QH' => 'E02000472',
        '8QJ' => 'E02000472',
        '8QP' => 'E02000474',
        '8QR' => 'E02000474',
        '8QS' => 'E02000474',
        '8QT' => 'E02000474',
        '8QU' => 'E02000474',
        '8QX' => 'E02000472',
        '8RA' => 'E02000472',
        '8RB' => 'E02000474',
        '8RD' => 'E02000472',
        '8RE' => 'E02000472',
        '8RP' => 'E02000474',
        '8RW' => 'E02000474',
        '8UZ' => 'E02000480',
        '8WA' => 'E02000474',
        '8WB' => 'E02000480',
        '8WD' => 'E02000480',
        '8WE' => 'E02000480',
        '8WQ' => 'E02000480',
        '8XB' => 'E02000480',
        '8XF' => 'E02000480',
        '8YQ' => 'E02000480',
        '8YZ' => 'E02000480',
        '9AA' => 'E02000474',
        '9AB' => 'E02000474',
        '9AD' => 'E02000474',
        '9AE' => 'E02000476',
        '9AF' => 'E02000480',
        '9AG' => 'E02000480',
        '9AH' => 'E02000476',
        '9AJ' => 'E02000476',
        '9AL' => 'E02000476',
        '9AN' => 'E02000480',
        '9AP' => 'E02000476',
        '9AQ' => 'E02000476',
        '9AR' => 'E02000476',
        '9AS' => 'E02000476',
        '9AT' => 'E02000476',
        '9AU' => 'E02000476',
        '9AW' => 'E02000480',
        '9AX' => 'E02000476',
        '9AY' => 'E02000480',
        '9AZ' => 'E02000480',
        '9BA' => 'E02000476',
        '9BB' => 'E02000476',
        '9BD' => 'E02000476',
        '9BE' => 'E02000476',
        '9BF' => 'E02000480',
        '9BG' => 'E02000480',
        '9BH' => 'E02000476',
        '9BJ' => 'E02000480',
        '9BL' => 'E02000480',
        '9BN' => 'E02000480',
        '9BP' => 'E02000480',
        '9BQ' => 'E02000480',
        '9BS' => 'E02000480',
        '9BT' => 'E02000480',
        '9BU' => 'E02000480',
        '9BW' => 'E02000480',
        '9BX' => 'E02000480',
        '9BY' => 'E02000480',
        '9BZ' => 'E02000480',
        '9DA' => 'E02000480',
        '9DB' => 'E02000480',
        '9DD' => 'E02000480',
        '9DE' => 'E02000480',
        '9DF' => 'E02000476',
        '9DG' => 'E02000476',
        '9DH' => 'E02000476',
        '9DJ' => 'E02000480',
        '9DL' => 'E02000480',
        '9DN' => 'E02000476',
        '9DP' => 'E02000480',
        '9DQ' => 'E02000476',
        '9DR' => 'E02000480',
        '9DS' => 'E02000480',
        '9DT' => 'E02000480',
        '9DU' => 'E02000480',
        '9DX' => 'E02000480',
        '9DY' => 'E02000480',
        '9DZ' => 'E02000480',
        '9EA' => 'E02000480',
        '9EB' => 'E02000480',
        '9ED' => 'E02000480',
        '9EE' => 'E02000480',
        '9EH' => 'E02000480',
        '9EJ' => 'E02000480',
        '9EL' => 'E02000480',
        '9EN' => 'E02000480',
        '9EP' => 'E02000480',
        '9ER' => 'E02000480',
        '9ES' => 'E02000480',
        '9ET' => 'E02000480',
        '9EU' => 'E02000480',
        '9GR' => 'E02000480',
        '9GZ' => 'E02000480',
        '9HB' => 'E02000480',
        '9HD' => 'E02000480',
        '9HH' => 'E02000480',
        '9HJ' => 'E02000480',
        '9HL' => 'E02000480',
        '9HP' => 'E02000480',
        '9HR' => 'E02000480',
        '9HS' => 'E02000480',
        '9HT' => 'E02000480',
        '9HU' => 'E02000480',
        '9HX' => 'E02000480',
        '9JA' => 'E02000480',
        '9JB' => 'E02000480',
        '9JD' => 'E02000480',
        '9JH' => 'E02000480',
        '9JJ' => 'E02000480',
        '9JL' => 'E02000480',
        '9JP' => 'E02000480',
        '9JR' => 'E02000480',
        '9JS' => 'E02000480',
        '9JT' => 'E02000480',
        '9JU' => 'E02000480',
        '9JX' => 'E02000480',
        '9JZ' => 'E02000480',
        '9LD' => 'E02000480',
        '9LH' => 'E02000480',
        '9LJ' => 'E02000480',
        '9LL' => 'E02000480',
        '9LP' => 'E02000480',
        '9LR' => 'E02000480',
        '9LS' => 'E02000480',
        '9LT' => 'E02000480',
        '9LU' => 'E02000480',
        '9LX' => 'E02000480',
        '9LY' => 'E02000480',
        '9NA' => 'E02000480',
        '9NB' => 'E02000480',
        '9NH' => 'E02000480',
        '9NJ' => 'E02000480',
        '9NL' => 'E02000480',
        '9NP' => 'E02000480',
        '9NQ' => 'E02000480',
        '9NS' => 'E02000480',
        '9NT' => 'E02000480',
        '9NU' => 'E02000480',
        '9NW' => 'E02000480',
        '9NX' => 'E02000480',
        '9PA' => 'E02000480',
        '9PB' => 'E02000480',
        '9PD' => 'E02000480',
        '9PH' => 'E02000480',
        '9PJ' => 'E02000480',
        '9PP' => 'E02000480',
        '9PR' => 'E02000480',
        '9PS' => 'E02000480',
        '9QA' => 'E02000476',
        '9QB' => 'E02000476',
        '9QD' => 'E02000476',
        '9QE' => 'E02000480',
        '9QF' => 'E02000476',
        '9QH' => 'E02000476',
        '9QJ' => 'E02000480',
        '9QL' => 'E02000480',
        '9QN' => 'E02000476',
        '9QP' => 'E02000480',
        '9QR' => 'E02000480',
        '9QS' => 'E02000480',
        '9QU' => 'E02000480',
        '9QX' => 'E02000480',
        '9RA' => 'E02000476',
        '9RB' => 'E02000480',
        '9RD' => 'E02000480',
        '9RE' => 'E02000480',
        '9RH' => 'E02000480',
        '9TH' => 'E02000476',
        '9WA' => 'E02000480',
        '9WB' => 'E02000480',
        '9WD' => 'E02000480',
        '9WE' => 'E02000480',
        '9WF' => 'E02000480',
        '9WG' => 'E02000480',
        '9WH' => 'E02000480',
        '9WL' => 'E02000480',
        '9WY' => 'E02000480',
        '9WZ' => 'E02000480',
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
