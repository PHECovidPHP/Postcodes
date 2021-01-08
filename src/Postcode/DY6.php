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
final class DY6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006187',
        '0AB' => 'E02006187',
        '0AE' => 'E02006187',
        '0AH' => 'E02006186',
        '0AJ' => 'E02002013',
        '0AL' => 'E02002013',
        '0AN' => 'E02006187',
        '0AQ' => 'E02006187',
        '0AS' => 'E02002013',
        '0AU' => 'E02006187',
        '0AW' => 'E02006187',
        '0AX' => 'E02006186',
        '0BA' => 'E02006186',
        '0BB' => 'E02006186',
        '0BD' => 'E02006186',
        '0BG' => 'E02006186',
        '0BH' => 'E02006186',
        '0BJ' => 'E02006186',
        '0BP' => 'E02002013',
        '0BW' => 'E02006186',
        '0DA' => 'E02002013',
        '0DB' => 'E02002013',
        '0DD' => 'E02002013',
        '0DE' => 'E02002013',
        '0DF' => 'E02002013',
        '0DG' => 'E02002013',
        '0DS' => 'E02002013',
        '0DT' => 'E02002013',
        '0DU' => 'E02002013',
        '0DW' => 'E02002013',
        '0DX' => 'E02002013',
        '0DY' => 'E02002013',
        '0DZ' => 'E02002013',
        '0EN' => 'E02002013',
        '0EP' => 'E02002013',
        '0EQ' => 'E02002013',
        '0ER' => 'E02002013',
        '0ES' => 'E02002013',
        '0ET' => 'E02002013',
        '0EU' => 'E02002013',
        '0EW' => 'E02002013',
        '0EX' => 'E02002013',
        '0EY' => 'E02002013',
        '0HA' => 'E02002013',
        '0HB' => 'E02002013',
        '0HD' => 'E02002011',
        '0HE' => 'E02002011',
        '0HF' => 'E02002011',
        '0HG' => 'E02002011',
        '0HH' => 'E02002011',
        '0HJ' => 'E02002011',
        '0HL' => 'E02002011',
        '0HN' => 'E02002013',
        '0HP' => 'E02002011',
        '0HR' => 'E02002011',
        '0HS' => 'E02002013',
        '0HT' => 'E02002013',
        '0HU' => 'E02002013',
        '0HX' => 'E02002013',
        '0HY' => 'E02002013',
        '0JA' => 'E02002013',
        '0JB' => 'E02002013',
        '0JD' => 'E02002013',
        '0JE' => 'E02002013',
        '0JF' => 'E02002013',
        '0JG' => 'E02002013',
        '0JH' => 'E02002013',
        '0JJ' => 'E02002013',
        '0JL' => 'E02002013',
        '0JN' => 'E02002013',
        '0JP' => 'E02002013',
        '0JR' => 'E02002013',
        '0JS' => 'E02002011',
        '0JT' => 'E02002013',
        '0JU' => 'E02002013',
        '0JW' => 'E02002011',
        '0JX' => 'E02002013',
        '0JY' => 'E02002013',
        '0LA' => 'E02002013',
        '0LB' => 'E02002013',
        '0LG' => 'E02002013',
        '0LH' => 'E02002013',
        '0LJ' => 'E02002013',
        '0LL' => 'E02002013',
        '0LN' => 'E02002013',
        '0LP' => 'E02002013',
        '0LQ' => 'E02002013',
        '0LR' => 'E02002013',
        '0LS' => 'E02002013',
        '0LT' => 'E02002013',
        '0LU' => 'E02002013',
        '0LW' => 'E02002013',
        '0LX' => 'E02002013',
        '0LZ' => 'E02002013',
        '0NA' => 'E02002013',
        '0NB' => 'E02002013',
        '0ND' => 'E02002013',
        '0NJ' => 'E02002013',
        '0NL' => 'E02002013',
        '0NP' => 'E02002013',
        '0NW' => 'E02002013',
        '0WW' => 'E02002013',
        '0WX' => 'E02002013',
        '0WY' => 'E02002013',
        '0WZ' => 'E02002013',
        '0YA' => 'E02002013',
        '0YN' => 'E02002013',
        '0YP' => 'E02002013',
        '0YR' => 'E02002013',
        '0YS' => 'E02002013',
        '0YT' => 'E02002013',
        '0YU' => 'E02002013',
        '0YW' => 'E02002013',
        '0YX' => 'E02002013',
        '0YY' => 'E02002013',
        '0YZ' => 'E02002013',
        '0ZR' => 'E02002013',
        '6AD' => 'E02002013',
        '6AF' => 'E02002013',
        '6AG' => 'E02002013',
        '6AJ' => 'E02002013',
        '6AL' => 'E02002013',
        '6AP' => 'E02002013',
        '6AQ' => 'E02002013',
        '6AR' => 'E02002013',
        '6AS' => 'E02002013',
        '6AT' => 'E02002013',
        '6AU' => 'E02002013',
        '6AW' => 'E02002013',
        '6AX' => 'E02002013',
        '6AY' => 'E02002013',
        '6AZ' => 'E02002013',
        '6BA' => 'E02002013',
        '6BB' => 'E02002013',
        '6BD' => 'E02002013',
        '6BE' => 'E02002013',
        '7AA' => 'E02002011',
        '7AB' => 'E02002011',
        '7AD' => 'E02002011',
        '7AE' => 'E02002011',
        '7AF' => 'E02002011',
        '7AG' => 'E02002011',
        '7AH' => 'E02002013',
        '7AJ' => 'E02002013',
        '7AL' => 'E02002015',
        '7AN' => 'E02002015',
        '7AP' => 'E02002011',
        '7AQ' => 'E02002011',
        '7AR' => 'E02002015',
        '7AS' => 'E02002011',
        '7AT' => 'E02002011',
        '7AU' => 'E02002011',
        '7AW' => 'E02002011',
        '7AX' => 'E02002011',
        '7AZ' => 'E02002015',
        '7BA' => 'E02002015',
        '7BB' => 'E02002011',
        '7BD' => 'E02002011',
        '7BE' => 'E02002015',
        '7BF' => 'E02002015',
        '7BG' => 'E02002011',
        '7BH' => 'E02002011',
        '7BJ' => 'E02002011',
        '7BL' => 'E02002011',
        '7BP' => 'E02002011',
        '7BQ' => 'E02002011',
        '7BS' => 'E02002011',
        '7BT' => 'E02002011',
        '7BU' => 'E02002011',
        '7BW' => 'E02002011',
        '7BX' => 'E02002011',
        '7BZ' => 'E02002011',
        '7DA' => 'E02002013',
        '7DH' => 'E02002011',
        '7DJ' => 'E02002011',
        '7DL' => 'E02002011',
        '7DN' => 'E02002011',
        '7DP' => 'E02002011',
        '7DQ' => 'E02002011',
        '7DR' => 'E02002011',
        '7DS' => 'E02002011',
        '7DT' => 'E02002011',
        '7DX' => 'E02002011',
        '7EA' => 'E02002011',
        '7EB' => 'E02002011',
        '7ED' => 'E02002011',
        '7EE' => 'E02002011',
        '7EF' => 'E02002011',
        '7EP' => 'E02002011',
        '7EQ' => 'E02002011',
        '7ER' => 'E02002011',
        '7ES' => 'E02002011',
        '7ET' => 'E02002011',
        '7EU' => 'E02002011',
        '7EX' => 'E02002011',
        '7FA' => 'E02002011',
        '7FD' => 'E02002011',
        '7FE' => 'E02002011',
        '7FF' => 'E02002011',
        '7FG' => 'E02002011',
        '7FJ' => 'E02002011',
        '7FL' => 'E02002011',
        '7FN' => 'E02002011',
        '7FP' => 'E02002011',
        '7FQ' => 'E02002011',
        '7FR' => 'E02002011',
        '7FS' => 'E02002011',
        '7FT' => 'E02002011',
        '7FW' => 'E02002011',
        '7FX' => 'E02002011',
        '7FY' => 'E02002011',
        '7FZ' => 'E02002011',
        '7GA' => 'E02002011',
        '7GB' => 'E02002011',
        '7GP' => 'E02002011',
        '7GR' => 'E02002013',
        '7GS' => 'E02002013',
        '7GT' => 'E02002011',
        '7GU' => 'E02002013',
        '7GW' => 'E02002013',
        '7GX' => 'E02002011',
        '7GY' => 'E02002013',
        '7GZ' => 'E02002013',
        '7HA' => 'E02002011',
        '7HB' => 'E02002011',
        '7HD' => 'E02002011',
        '7HE' => 'E02002011',
        '7HF' => 'E02002011',
        '7HG' => 'E02002011',
        '7HH' => 'E02002011',
        '7HJ' => 'E02002011',
        '7HL' => 'E02002011',
        '7HN' => 'E02002011',
        '7HP' => 'E02002011',
        '7HQ' => 'E02002011',
        '7HR' => 'E02002011',
        '7HS' => 'E02002011',
        '7HT' => 'E02002011',
        '7HU' => 'E02002011',
        '7HX' => 'E02002011',
        '7HY' => 'E02002011',
        '7HZ' => 'E02002011',
        '7JA' => 'E02002011',
        '7JB' => 'E02002011',
        '7JD' => 'E02002011',
        '7JG' => 'E02002011',
        '7JH' => 'E02002011',
        '7JJ' => 'E02002011',
        '7JL' => 'E02002011',
        '7JN' => 'E02002011',
        '7JP' => 'E02002011',
        '7JQ' => 'E02002011',
        '7JR' => 'E02002011',
        '7JS' => 'E02002011',
        '7JT' => 'E02002011',
        '7JU' => 'E02002011',
        '7JW' => 'E02002011',
        '7JX' => 'E02002011',
        '7JY' => 'E02002011',
        '7JZ' => 'E02002011',
        '7LA' => 'E02002011',
        '7LB' => 'E02002011',
        '7LD' => 'E02002011',
        '7LE' => 'E02002011',
        '7LF' => 'E02002011',
        '7LG' => 'E02002011',
        '7LH' => 'E02002011',
        '7LJ' => 'E02002011',
        '7LL' => 'E02002011',
        '7LN' => 'E02002011',
        '7LP' => 'E02002011',
        '7LQ' => 'E02002015',
        '7LR' => 'E02002015',
        '7LS' => 'E02002011',
        '7LT' => 'E02002015',
        '7LU' => 'E02002015',
        '7LW' => 'E02002015',
        '7LX' => 'E02002011',
        '7LY' => 'E02002011',
        '7LZ' => 'E02002011',
        '7NA' => 'E02002011',
        '7NB' => 'E02002011',
        '7ND' => 'E02002011',
        '7NE' => 'E02002011',
        '7NF' => 'E02002011',
        '7NG' => 'E02002011',
        '7NH' => 'E02002011',
        '7NJ' => 'E02002011',
        '7NN' => 'E02002011',
        '7NP' => 'E02002013',
        '7NR' => 'E02002011',
        '7NS' => 'E02002011',
        '7NT' => 'E02002011',
        '7NW' => 'E02002011',
        '7NX' => 'E02002011',
        '7NZ' => 'E02002011',
        '7PB' => 'E02002011',
        '7PD' => 'E02002011',
        '7PE' => 'E02002011',
        '7PF' => 'E02002011',
        '7PG' => 'E02002011',
        '7PH' => 'E02002011',
        '7PJ' => 'E02002011',
        '7PL' => 'E02002011',
        '7PN' => 'E02002011',
        '7PP' => 'E02002011',
        '7PQ' => 'E02002011',
        '7PR' => 'E02002011',
        '7PS' => 'E02002011',
        '7PT' => 'E02002011',
        '7PU' => 'E02002011',
        '7PW' => 'E02002011',
        '7PX' => 'E02002011',
        '7PY' => 'E02002011',
        '7PZ' => 'E02002011',
        '7QA' => 'E02002011',
        '7QB' => 'E02002011',
        '7QD' => 'E02002011',
        '7QE' => 'E02002011',
        '7QF' => 'E02002011',
        '7QG' => 'E02002011',
        '7QH' => 'E02002011',
        '7QJ' => 'E02002011',
        '7QQ' => 'E02002011',
        '7QZ' => 'E02002011',
        '7RA' => 'E02002011',
        '7RB' => 'E02002011',
        '7RD' => 'E02002011',
        '7RE' => 'E02002011',
        '7RF' => 'E02002011',
        '7RG' => 'E02002011',
        '7RH' => 'E02002011',
        '7RJ' => 'E02002011',
        '7RL' => 'E02002011',
        '7RN' => 'E02002011',
        '7RP' => 'E02002011',
        '7RQ' => 'E02002011',
        '7RR' => 'E02002011',
        '7RS' => 'E02002011',
        '7RT' => 'E02002011',
        '7RU' => 'E02002011',
        '7RW' => 'E02002011',
        '7RX' => 'E02002011',
        '7RY' => 'E02002011',
        '7RZ' => 'E02002011',
        '7SA' => 'E02002011',
        '7SB' => 'E02002011',
        '7SD' => 'E02002011',
        '7SE' => 'E02002011',
        '7SF' => 'E02002011',
        '7SG' => 'E02002011',
        '7SH' => 'E02002011',
        '7SP' => 'E02002011',
        '7SQ' => 'E02002011',
        '7ST' => 'E02002011',
        '7TA' => 'E02002011',
        '7TB' => 'E02002011',
        '7TD' => 'E02002011',
        '7TE' => 'E02002011',
        '7TF' => 'E02002011',
        '7TG' => 'E02002011',
        '7TH' => 'E02002011',
        '7TJ' => 'E02002011',
        '7TL' => 'E02002011',
        '7TN' => 'E02002011',
        '7TP' => 'E02002011',
        '7TR' => 'E02002011',
        '7TU' => 'E02002011',
        '7TW' => 'E02002011',
        '7TX' => 'E02002011',
        '7TY' => 'E02002011',
        '7TZ' => 'E02002011',
        '7UA' => 'E02002011',
        '7UD' => 'E02002011',
        '7UE' => 'E02002011',
        '7UF' => 'E02002011',
        '7UG' => 'E02002011',
        '7UH' => 'E02002011',
        '7UJ' => 'E02002011',
        '7UL' => 'E02002011',
        '7UN' => 'E02002011',
        '7UP' => 'E02002011',
        '7UQ' => 'E02002011',
        '7UR' => 'E02002011',
        '7US' => 'E02002011',
        '7UT' => 'E02002011',
        '7UU' => 'E02002011',
        '7UW' => 'E02002011',
        '7UX' => 'E02002011',
        '7UY' => 'E02002011',
        '7UZ' => 'E02002011',
        '7WA' => 'E02002011',
        '7WU' => 'E02002013',
        '7WW' => 'E02002013',
        '7WX' => 'E02002013',
        '7WY' => 'E02002013',
        '7WZ' => 'E02002013',
        '7XA' => 'E02002011',
        '7XB' => 'E02002011',
        '7XD' => 'E02002011',
        '7XE' => 'E02002011',
        '7XF' => 'E02002011',
        '7XG' => 'E02002011',
        '7XH' => 'E02002011',
        '7XJ' => 'E02002011',
        '7XL' => 'E02002011',
        '7XN' => 'E02002011',
        '7XP' => 'E02002011',
        '7XQ' => 'E02002011',
        '7XR' => 'E02002011',
        '7XS' => 'E02002011',
        '7XT' => 'E02002011',
        '7XU' => 'E02002011',
        '7XW' => 'E02002011',
        '7XX' => 'E02002011',
        '7XY' => 'E02002011',
        '7XZ' => 'E02002011',
        '7YA' => 'E02002011',
        '7YB' => 'E02002011',
        '7YD' => 'E02002011',
        '7YE' => 'E02002011',
        '7YF' => 'E02002013',
        '7YG' => 'E02002011',
        '7YH' => 'E02002011',
        '7YJ' => 'E02002013',
        '7YL' => 'E02002011',
        '7YN' => 'E02002011',
        '7YP' => 'E02002011',
        '7YQ' => 'E02002013',
        '7YR' => 'E02002013',
        '7YS' => 'E02002013',
        '7YT' => 'E02002013',
        '7YU' => 'E02002013',
        '7YW' => 'E02002013',
        '7YX' => 'E02002011',
        '7YY' => 'E02002011',
        '7YZ' => 'E02002011',
        '7ZG' => 'E02002013',
        '7ZR' => 'E02002013',
        '7ZS' => 'E02002013',
        '7ZT' => 'E02002013',
        '8AA' => 'E02002011',
        '8AB' => 'E02002011',
        '8AD' => 'E02002013',
        '8AE' => 'E02002013',
        '8AF' => 'E02002015',
        '8AG' => 'E02002013',
        '8AH' => 'E02002011',
        '8AJ' => 'E02002011',
        '8AL' => 'E02002015',
        '8AN' => 'E02002018',
        '8AP' => 'E02002015',
        '8AQ' => 'E02002018',
        '8AR' => 'E02002011',
        '8AS' => 'E02002011',
        '8AT' => 'E02002011',
        '8AU' => 'E02002011',
        '8AW' => 'E02002011',
        '8AX' => 'E02002015',
        '8AY' => 'E02002011',
        '8AZ' => 'E02002011',
        '8BA' => 'E02002011',
        '8BB' => 'E02002013',
        '8BD' => 'E02002018',
        '8BE' => 'E02002013',
        '8BF' => 'E02002015',
        '8BG' => 'E02002015',
        '8BJ' => 'E02002013',
        '8BL' => 'E02002013',
        '8BN' => 'E02002015',
        '8BP' => 'E02002013',
        '8BQ' => 'E02002011',
        '8BS' => 'E02002015',
        '8BT' => 'E02002011',
        '8BU' => 'E02002013',
        '8BW' => 'E02002015',
        '8BX' => 'E02002013',
        '8BY' => 'E02002013',
        '8BZ' => 'E02002013',
        '8DA' => 'E02002015',
        '8DB' => 'E02002015',
        '8DD' => 'E02002015',
        '8DE' => 'E02002015',
        '8DG' => 'E02002015',
        '8DH' => 'E02002015',
        '8DJ' => 'E02002015',
        '8DL' => 'E02002015',
        '8DN' => 'E02002015',
        '8DP' => 'E02002015',
        '8DQ' => 'E02002015',
        '8DR' => 'E02002018',
        '8DS' => 'E02002015',
        '8DT' => 'E02002018',
        '8DU' => 'E02002018',
        '8DW' => 'E02002015',
        '8DX' => 'E02002018',
        '8DY' => 'E02002018',
        '8DZ' => 'E02002018',
        '8EA' => 'E02002015',
        '8EB' => 'E02002015',
        '8ED' => 'E02002015',
        '8EE' => 'E02002015',
        '8EF' => 'E02002015',
        '8EG' => 'E02002015',
        '8EH' => 'E02002015',
        '8EJ' => 'E02002015',
        '8EL' => 'E02002015',
        '8EN' => 'E02002018',
        '8EP' => 'E02002015',
        '8EQ' => 'E02002015',
        '8ER' => 'E02002018',
        '8ES' => 'E02002018',
        '8ET' => 'E02002018',
        '8EU' => 'E02002018',
        '8EW' => 'E02002018',
        '8EX' => 'E02002018',
        '8EY' => 'E02002018',
        '8EZ' => 'E02002018',
        '8GF' => 'E02002013',
        '8GG' => 'E02002013',
        '8GH' => 'E02002013',
        '8GJ' => 'E02002013',
        '8GL' => 'E02002013',
        '8GN' => 'E02002013',
        '8GP' => 'E02002018',
        '8GQ' => 'E02002013',
        '8GR' => 'E02002018',
        '8GS' => 'E02002018',
        '8GT' => 'E02002018',
        '8GU' => 'E02002018',
        '8GW' => 'E02002013',
        '8GX' => 'E02002013',
        '8GY' => 'E02002013',
        '8GZ' => 'E02002013',
        '8HA' => 'E02002018',
        '8HB' => 'E02002018',
        '8HD' => 'E02002018',
        '8HE' => 'E02002018',
        '8HG' => 'E02002018',
        '8HH' => 'E02002018',
        '8HJ' => 'E02002018',
        '8HL' => 'E02002018',
        '8HN' => 'E02002018',
        '8HP' => 'E02002015',
        '8HR' => 'E02002020',
        '8HS' => 'E02002020',
        '8HT' => 'E02002020',
        '8HU' => 'E02002018',
        '8HW' => 'E02002018',
        '8HX' => 'E02002020',
        '8HY' => 'E02002020',
        '8HZ' => 'E02002020',
        '8JA' => 'E02002020',
        '8JB' => 'E02002020',
        '8JD' => 'E02002020',
        '8JE' => 'E02002020',
        '8JF' => 'E02002020',
        '8JG' => 'E02002020',
        '8JH' => 'E02002020',
        '8JJ' => 'E02002020',
        '8JL' => 'E02002018',
        '8JN' => 'E02002020',
        '8JP' => 'E02002020',
        '8JQ' => 'E02002020',
        '8JR' => 'E02002018',
        '8JS' => 'E02002018',
        '8JT' => 'E02002018',
        '8JU' => 'E02002018',
        '8JX' => 'E02002018',
        '8JY' => 'E02002018',
        '8JZ' => 'E02002018',
        '8LA' => 'E02002018',
        '8LB' => 'E02002018',
        '8LD' => 'E02002018',
        '8LE' => 'E02002015',
        '8LF' => 'E02002015',
        '8LG' => 'E02002015',
        '8LH' => 'E02002015',
        '8LJ' => 'E02002018',
        '8LL' => 'E02002018',
        '8LN' => 'E02002018',
        '8LR' => 'E02002020',
        '8LS' => 'E02002020',
        '8LT' => 'E02002020',
        '8LU' => 'E02002020',
        '8LW' => 'E02002018',
        '8LX' => 'E02002020',
        '8LY' => 'E02002020',
        '8LZ' => 'E02002020',
        '8NA' => 'E02002020',
        '8NB' => 'E02002020',
        '8ND' => 'E02002020',
        '8NE' => 'E02002020',
        '8NF' => 'E02002020',
        '8NG' => 'E02002020',
        '8NH' => 'E02002020',
        '8NJ' => 'E02002020',
        '8NL' => 'E02002020',
        '8NP' => 'E02002020',
        '8NQ' => 'E02002020',
        '8NS' => 'E02002020',
        '8NT' => 'E02002020',
        '8NU' => 'E02002020',
        '8NX' => 'E02002020',
        '8NY' => 'E02002020',
        '8NZ' => 'E02002020',
        '8PA' => 'E02002020',
        '8PB' => 'E02002020',
        '8PD' => 'E02002020',
        '8PE' => 'E02002020',
        '8PF' => 'E02002020',
        '8PG' => 'E02002020',
        '8PH' => 'E02002020',
        '8PJ' => 'E02002020',
        '8PL' => 'E02002020',
        '8PN' => 'E02002020',
        '8PP' => 'E02002020',
        '8PQ' => 'E02002020',
        '8PR' => 'E02002020',
        '8PS' => 'E02002020',
        '8PT' => 'E02002020',
        '8PU' => 'E02002020',
        '8PW' => 'E02002020',
        '8PX' => 'E02002020',
        '8PY' => 'E02002020',
        '8PZ' => 'E02002020',
        '8QA' => 'E02002020',
        '8QB' => 'E02002020',
        '8QD' => 'E02002020',
        '8QE' => 'E02002020',
        '8QF' => 'E02002018',
        '8QG' => 'E02002018',
        '8QH' => 'E02002020',
        '8QJ' => 'E02002020',
        '8QL' => 'E02002020',
        '8QN' => 'E02002018',
        '8QP' => 'E02002020',
        '8QQ' => 'E02002020',
        '8QZ' => 'E02002015',
        '8RA' => 'E02002020',
        '8RB' => 'E02002020',
        '8RD' => 'E02002020',
        '8RE' => 'E02002020',
        '8RF' => 'E02002020',
        '8RG' => 'E02002020',
        '8RH' => 'E02002018',
        '8RJ' => 'E02002018',
        '8RL' => 'E02002018',
        '8RN' => 'E02002018',
        '8RP' => 'E02002018',
        '8RQ' => 'E02002020',
        '8RR' => 'E02002018',
        '8RS' => 'E02002018',
        '8RT' => 'E02002018',
        '8RU' => 'E02002018',
        '8RW' => 'E02002018',
        '8RX' => 'E02002018',
        '8RY' => 'E02002018',
        '8RZ' => 'E02002018',
        '8SA' => 'E02002018',
        '8SB' => 'E02002015',
        '8SD' => 'E02002015',
        '8SE' => 'E02002015',
        '8SF' => 'E02002015',
        '8SG' => 'E02002015',
        '8SH' => 'E02002015',
        '8SJ' => 'E02002015',
        '8SL' => 'E02002015',
        '8SN' => 'E02002015',
        '8SP' => 'E02002015',
        '8SQ' => 'E02002015',
        '8SR' => 'E02002015',
        '8ST' => 'E02002015',
        '8SU' => 'E02002018',
        '8SW' => 'E02002015',
        '8SY' => 'E02002018',
        '8TA' => 'E02002018',
        '8TB' => 'E02002018',
        '8TD' => 'E02002018',
        '8TE' => 'E02002018',
        '8TF' => 'E02002018',
        '8TH' => 'E02002018',
        '8TJ' => 'E02002018',
        '8TS' => 'E02002020',
        '8TT' => 'E02002020',
        '8TU' => 'E02002020',
        '8TW' => 'E02002013',
        '8TX' => 'E02002020',
        '8TY' => 'E02002020',
        '8TZ' => 'E02002020',
        '8UA' => 'E02002020',
        '8UB' => 'E02002020',
        '8UD' => 'E02002020',
        '8UE' => 'E02002020',
        '8WT' => 'E02002015',
        '8WU' => 'E02002013',
        '8WW' => 'E02002013',
        '8WX' => 'E02002013',
        '8WY' => 'E02002013',
        '8WZ' => 'E02002013',
        '8XA' => 'E02002015',
        '8XB' => 'E02002011',
        '8XD' => 'E02002015',
        '8XE' => 'E02002011',
        '8XF' => 'E02002015',
        '8XG' => 'E02002015',
        '8XH' => 'E02002015',
        '8XJ' => 'E02002015',
        '8XL' => 'E02002015',
        '8XN' => 'E02002015',
        '8XP' => 'E02002015',
        '8XQ' => 'E02002015',
        '8XR' => 'E02002015',
        '8XS' => 'E02002015',
        '8XT' => 'E02002015',
        '8XU' => 'E02002015',
        '8XW' => 'E02002015',
        '8XX' => 'E02002015',
        '8XZ' => 'E02002011',
        '8YA' => 'E02002013',
        '8YB' => 'E02002011',
        '8YD' => 'E02002013',
        '8YE' => 'E02002018',
        '8YF' => 'E02002018',
        '8YG' => 'E02002018',
        '8YH' => 'E02002018',
        '8YJ' => 'E02002018',
        '8YL' => 'E02002018',
        '8YN' => 'E02002018',
        '8YP' => 'E02002018',
        '8YQ' => 'E02002018',
        '8YR' => 'E02002013',
        '8YS' => 'E02002013',
        '8YT' => 'E02002013',
        '8YU' => 'E02002013',
        '8YW' => 'E02002018',
        '8YX' => 'E02002011',
        '8YY' => 'E02002018',
        '8YZ' => 'E02002011',
        '9AA' => 'E02002011',
        '9AB' => 'E02002011',
        '9AD' => 'E02002011',
        '9AE' => 'E02002013',
        '9AF' => 'E02002013',
        '9AG' => 'E02002013',
        '9AH' => 'E02002013',
        '9AJ' => 'E02002013',
        '9AL' => 'E02002013',
        '9AN' => 'E02002013',
        '9AP' => 'E02002013',
        '9AQ' => 'E02002013',
        '9AR' => 'E02002013',
        '9AS' => 'E02002013',
        '9AT' => 'E02002013',
        '9AU' => 'E02002013',
        '9AW' => 'E02002013',
        '9AX' => 'E02002013',
        '9AY' => 'E02002013',
        '9AZ' => 'E02002013',
        '9BA' => 'E02002013',
        '9BB' => 'E02002013',
        '9BD' => 'E02002013',
        '9BE' => 'E02002013',
        '9BF' => 'E02002013',
        '9BG' => 'E02002013',
        '9BH' => 'E02002011',
        '9BJ' => 'E02002011',
        '9BL' => 'E02002013',
        '9BN' => 'E02002013',
        '9BP' => 'E02002011',
        '9BQ' => 'E02002013',
        '9BS' => 'E02002011',
        '9BT' => 'E02002013',
        '9BU' => 'E02002013',
        '9BW' => 'E02002011',
        '9BX' => 'E02002013',
        '9BY' => 'E02002013',
        '9BZ' => 'E02002013',
        '9DA' => 'E02002013',
        '9DB' => 'E02002013',
        '9DD' => 'E02002013',
        '9DE' => 'E02002013',
        '9DF' => 'E02002013',
        '9DG' => 'E02002013',
        '9DH' => 'E02002013',
        '9DJ' => 'E02002013',
        '9DL' => 'E02002013',
        '9DN' => 'E02002013',
        '9DP' => 'E02002013',
        '9DQ' => 'E02002013',
        '9DR' => 'E02002013',
        '9DS' => 'E02002013',
        '9DT' => 'E02002013',
        '9DU' => 'E02002013',
        '9DW' => 'E02002013',
        '9DX' => 'E02002013',
        '9DY' => 'E02002013',
        '9DZ' => 'E02002013',
        '9EA' => 'E02002013',
        '9EB' => 'E02002013',
        '9ED' => 'E02002013',
        '9EE' => 'E02002013',
        '9EF' => 'E02002013',
        '9EG' => 'E02002013',
        '9EH' => 'E02002013',
        '9EJ' => 'E02002013',
        '9EL' => 'E02002013',
        '9EN' => 'E02002011',
        '9EP' => 'E02002013',
        '9EQ' => 'E02002013',
        '9ER' => 'E02002011',
        '9ES' => 'E02002011',
        '9ET' => 'E02002011',
        '9EU' => 'E02002013',
        '9EW' => 'E02002011',
        '9EX' => 'E02002011',
        '9EY' => 'E02002013',
        '9EZ' => 'E02002013',
        '9GN' => 'E02002013',
        '9GP' => 'E02002013',
        '9GR' => 'E02002013',
        '9GS' => 'E02002013',
        '9GT' => 'E02002013',
        '9GU' => 'E02002013',
        '9GW' => 'E02002013',
        '9GX' => 'E02002013',
        '9GY' => 'E02002013',
        '9GZ' => 'E02002013',
        '9HA' => 'E02002013',
        '9HB' => 'E02002013',
        '9HD' => 'E02002011',
        '9HE' => 'E02002011',
        '9HF' => 'E02002011',
        '9HG' => 'E02002011',
        '9HH' => 'E02002011',
        '9HJ' => 'E02002011',
        '9HN' => 'E02002011',
        '9HP' => 'E02002011',
        '9HR' => 'E02002013',
        '9HS' => 'E02002013',
        '9HT' => 'E02002013',
        '9HU' => 'E02002013',
        '9JA' => 'E02002013',
        '9JE' => 'E02002013',
        '9JF' => 'E02002013',
        '9JG' => 'E02002013',
        '9JJ' => 'E02002018',
        '9JL' => 'E02002013',
        '9JN' => 'E02002013',
        '9JP' => 'E02002013',
        '9JQ' => 'E02002011',
        '9JR' => 'E02002013',
        '9JS' => 'E02002013',
        '9JT' => 'E02002013',
        '9JU' => 'E02002013',
        '9JX' => 'E02002013',
        '9JY' => 'E02002013',
        '9LA' => 'E02002015',
        '9LB' => 'E02002013',
        '9LD' => 'E02002015',
        '9LE' => 'E02002013',
        '9LG' => 'E02002015',
        '9LH' => 'E02002013',
        '9LJ' => 'E02002018',
        '9LL' => 'E02002018',
        '9LN' => 'E02002018',
        '9LP' => 'E02002018',
        '9LR' => 'E02002013',
        '9LS' => 'E02002013',
        '9LT' => 'E02002013',
        '9LU' => 'E02002013',
        '9LX' => 'E02002013',
        '9LY' => 'E02002013',
        '9LZ' => 'E02002013',
        '9NA' => 'E02002013',
        '9NP' => 'E02002018',
        '9NR' => 'E02002018',
        '9NS' => 'E02002018',
        '9NT' => 'E02002018',
        '9NU' => 'E02002018',
        '9NW' => 'E02002018',
        '9NX' => 'E02002018',
        '9PA' => 'E02002018',
        '9PB' => 'E02002020',
        '9PD' => 'E02002018',
        '9PE' => 'E02002018',
        '9PG' => 'E02002018',
        '9PH' => 'E02002018',
        '9PJ' => 'E02002018',
        '9PL' => 'E02002018',
        '9PN' => 'E02002018',
        '9PP' => 'E02002018',
        '9PQ' => 'E02002020',
        '9PR' => 'E02002018',
        '9PS' => 'E02002018',
        '9PT' => 'E02002018',
        '9PU' => 'E02002018',
        '9PW' => 'E02002018',
        '9PX' => 'E02002018',
        '9PY' => 'E02002018',
        '9QA' => 'E02002018',
        '9QB' => 'E02002018',
        '9QE' => 'E02002018',
        '9QG' => 'E02002013',
        '9QH' => 'E02002013',
        '9QJ' => 'E02002018',
        '9QL' => 'E02002018',
        '9QN' => 'E02002013',
        '9QP' => 'E02002018',
        '9QQ' => 'E02002018',
        '9QR' => 'E02002013',
        '9QW' => 'E02002018',
        '9QZ' => 'E02002013',
        '9RA' => 'E02002018',
        '9RB' => 'E02002018',
        '9RD' => 'E02002018',
        '9RE' => 'E02002018',
        '9RF' => 'E02002018',
        '9RG' => 'E02002018',
        '9RH' => 'E02002018',
        '9RJ' => 'E02002018',
        '9RL' => 'E02002018',
        '9RN' => 'E02002018',
        '9RP' => 'E02002018',
        '9RQ' => 'E02002018',
        '9RR' => 'E02002018',
        '9RS' => 'E02002018',
        '9RT' => 'E02002018',
        '9RU' => 'E02002018',
        '9RX' => 'E02002018',
        '9RY' => 'E02002018',
        '9RZ' => 'E02002018',
        '9SA' => 'E02002018',
        '9SB' => 'E02002018',
        '9SD' => 'E02002018',
        '9SE' => 'E02002018',
        '9SH' => 'E02002018',
        '9SJ' => 'E02002018',
        '9SL' => 'E02002018',
        '9SN' => 'E02002018',
        '9SP' => 'E02002018',
        '9SQ' => 'E02002013',
        '9SR' => 'E02002018',
        '9SS' => 'E02002018',
        '9ST' => 'E02002018',
        '9SU' => 'E02002018',
        '9SW' => 'E02002018',
        '9SX' => 'E02002018',
        '9SY' => 'E02002018',
        '9SZ' => 'E02002018',
        '9TA' => 'E02002018',
        '9TB' => 'E02002018',
        '9TD' => 'E02002018',
        '9TE' => 'E02002018',
        '9TG' => 'E02002018',
        '9TH' => 'E02002018',
        '9TJ' => 'E02002018',
        '9TL' => 'E02002018',
        '9TN' => 'E02002018',
        '9TP' => 'E02002018',
        '9TQ' => 'E02002018',
        '9TU' => 'E02002018',
        '9TX' => 'E02002018',
        '9TY' => 'E02002018',
        '9UA' => 'E02002018',
        '9UB' => 'E02002018',
        '9UD' => 'E02002018',
        '9WB' => 'E02002018',
        '9WQ' => 'E02002018',
        '9WS' => 'E02002013',
        '9WT' => 'E02002013',
        '9WU' => 'E02002013',
        '9WW' => 'E02002013',
        '9WX' => 'E02002013',
        '9WY' => 'E02002013',
        '9WZ' => 'E02002013',
        '9XA' => 'E02002013',
        '9XB' => 'E02002013',
        '9XD' => 'E02002013',
        '9XE' => 'E02002018',
        '9XF' => 'E02002018',
        '9XG' => 'E02006187',
        '9XH' => 'E02002018',
        '9XJ' => 'E02002018',
        '9XL' => 'E02002013',
        '9XQ' => 'E02002018',
        '9YA' => 'E02002013',
        '9YB' => 'E02002013',
        '9YD' => 'E02002013',
        '9YE' => 'E02002013',
        '9YF' => 'E02002013',
        '9YG' => 'E02002013',
        '9YH' => 'E02002013',
        '9YJ' => 'E02002013',
        '9YL' => 'E02002013',
        '9YN' => 'E02002013',
        '9YP' => 'E02002013',
        '9YQ' => 'E02002013',
        '9YR' => 'E02002013',
        '9YS' => 'E02002013',
        '9YU' => 'E02002013',
        '9YW' => 'E02002013',
        '9YX' => 'E02002013',
        '9YY' => 'E02002013',
        '9YZ' => 'E02002013',
        '9ZQ' => 'E02002013',
        '9ZU' => 'E02002013',
        '9ZX' => 'E02002013',
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
