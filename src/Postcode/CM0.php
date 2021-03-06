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
final class CM0
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02004560',
        '7AB' => 'E02004560',
        '7AD' => 'E02004560',
        '7AE' => 'E02004560',
        '7AF' => 'E02004560',
        '7AG' => 'E02004560',
        '7AH' => 'E02004560',
        '7AJ' => 'E02004560',
        '7AL' => 'E02004560',
        '7AN' => 'E02004560',
        '7AP' => 'E02004560',
        '7AQ' => 'E02004560',
        '7AS' => 'E02004560',
        '7AT' => 'E02004560',
        '7AU' => 'E02004560',
        '7AW' => 'E02004560',
        '7AX' => 'E02004560',
        '7AY' => 'E02004560',
        '7AZ' => 'E02004560',
        '7BA' => 'E02004560',
        '7BB' => 'E02004560',
        '7BD' => 'E02004560',
        '7BE' => 'E02004560',
        '7BF' => 'E02004560',
        '7BG' => 'E02004560',
        '7BH' => 'E02004560',
        '7BJ' => 'E02004560',
        '7BL' => 'E02004560',
        '7BN' => 'E02004560',
        '7BP' => 'E02004560',
        '7BQ' => 'E02004560',
        '7BS' => 'E02004560',
        '7BT' => 'E02004560',
        '7BU' => 'E02004560',
        '7BW' => 'E02004560',
        '7BX' => 'E02004560',
        '7BY' => 'E02004560',
        '7BZ' => 'E02004560',
        '7DA' => 'E02004560',
        '7DB' => 'E02004560',
        '7DD' => 'E02004560',
        '7DE' => 'E02004560',
        '7DF' => 'E02004560',
        '7DG' => 'E02004560',
        '7DH' => 'E02004560',
        '7DJ' => 'E02004560',
        '7DL' => 'E02004560',
        '7DN' => 'E02004560',
        '7DP' => 'E02004560',
        '7DQ' => 'E02004560',
        '7DR' => 'E02004560',
        '7DS' => 'E02004560',
        '7DT' => 'E02004560',
        '7DU' => 'E02004560',
        '7DW' => 'E02004560',
        '7DX' => 'E02004560',
        '7DY' => 'E02004560',
        '7DZ' => 'E02004560',
        '7EA' => 'E02004560',
        '7EB' => 'E02004560',
        '7ED' => 'E02004560',
        '7EE' => 'E02004560',
        '7EF' => 'E02004560',
        '7EG' => 'E02004560',
        '7EH' => 'E02004560',
        '7EJ' => 'E02004560',
        '7EL' => 'E02004560',
        '7EN' => 'E02004560',
        '7EP' => 'E02004560',
        '7EQ' => 'E02004560',
        '7ER' => 'E02004560',
        '7ES' => 'E02004560',
        '7ET' => 'E02004560',
        '7EU' => 'E02004560',
        '7EW' => 'E02004560',
        '7EX' => 'E02004560',
        '7EY' => 'E02004560',
        '7EZ' => 'E02004560',
        '7FA' => 'E02004560',
        '7FB' => 'E02004560',
        '7FD' => 'E02004560',
        '7FE' => 'E02004560',
        '7FF' => 'E02004560',
        '7FG' => 'E02004560',
        '7FH' => 'E02004560',
        '7FJ' => 'E02004560',
        '7FL' => 'E02004560',
        '7FN' => 'E02004560',
        '7FP' => 'E02004560',
        '7FQ' => 'E02004560',
        '7FR' => 'E02004560',
        '7FS' => 'E02004560',
        '7FT' => 'E02004560',
        '7FU' => 'E02004560',
        '7FW' => 'E02004560',
        '7FX' => 'E02004560',
        '7FY' => 'E02004560',
        '7FZ' => 'E02004560',
        '7GA' => 'E02004560',
        '7GB' => 'E02004560',
        '7GD' => 'E02004560',
        '7GE' => 'E02004560',
        '7GF' => 'E02004560',
        '7GG' => 'E02004560',
        '7GH' => 'E02004560',
        '7GJ' => 'E02004560',
        '7GL' => 'E02004560',
        '7GN' => 'E02004560',
        '7GP' => 'E02004560',
        '7GQ' => 'E02004560',
        '7GR' => 'E02004560',
        '7GS' => 'E02004560',
        '7GT' => 'E02004560',
        '7GU' => 'E02004560',
        '7GW' => 'E02004560',
        '7GX' => 'E02004560',
        '7GY' => 'E02004560',
        '7GZ' => 'E02004560',
        '7HA' => 'E02004560',
        '7HB' => 'E02004560',
        '7HD' => 'E02004560',
        '7HE' => 'E02004560',
        '7HF' => 'E02004560',
        '7HG' => 'E02004560',
        '7HH' => 'E02004560',
        '7HJ' => 'E02004560',
        '7HL' => 'E02004560',
        '7HN' => 'E02004560',
        '7HP' => 'E02004560',
        '7HQ' => 'E02004560',
        '7HR' => 'E02004560',
        '7HS' => 'E02004560',
        '7HT' => 'E02004560',
        '7HU' => 'E02004560',
        '7HW' => 'E02004560',
        '7HX' => 'E02004560',
        '7HY' => 'E02004560',
        '7HZ' => 'E02004560',
        '7JA' => 'E02004560',
        '7JB' => 'E02004560',
        '7JD' => 'E02004560',
        '7JE' => 'E02004560',
        '7JF' => 'E02004560',
        '7JG' => 'E02004560',
        '7JH' => 'E02004560',
        '7JJ' => 'E02004560',
        '7JL' => 'E02004560',
        '7JN' => 'E02004560',
        '7JP' => 'E02004560',
        '7JQ' => 'E02004560',
        '7JR' => 'E02004560',
        '7JS' => 'E02004560',
        '7JT' => 'E02004560',
        '7JU' => 'E02004560',
        '7JW' => 'E02004560',
        '7JX' => 'E02004560',
        '7JY' => 'E02004560',
        '7JZ' => 'E02004560',
        '7LA' => 'E02004560',
        '7LB' => 'E02004560',
        '7LD' => 'E02004560',
        '7LE' => 'E02004560',
        '7LF' => 'E02004560',
        '7LG' => 'E02004560',
        '7LH' => 'E02004560',
        '7LJ' => 'E02004560',
        '7LL' => 'E02004560',
        '7LN' => 'E02004560',
        '7LP' => 'E02004560',
        '7LQ' => 'E02004560',
        '7LR' => 'E02004560',
        '7LS' => 'E02004560',
        '7LT' => 'E02004560',
        '7LU' => 'E02004560',
        '7LW' => 'E02004560',
        '7LX' => 'E02004560',
        '7LY' => 'E02004560',
        '7LZ' => 'E02004560',
        '7NA' => 'E02004560',
        '7NB' => 'E02004560',
        '7ND' => 'E02004560',
        '7NE' => 'E02004560',
        '7NF' => 'E02004560',
        '7NG' => 'E02004560',
        '7NH' => 'E02004560',
        '7NJ' => 'E02004560',
        '7NL' => 'E02004560',
        '7NN' => 'E02004560',
        '7NP' => 'E02004560',
        '7NQ' => 'E02004560',
        '7NR' => 'E02004560',
        '7NS' => 'E02004560',
        '7NT' => 'E02004560',
        '7NU' => 'E02004560',
        '7NW' => 'E02004560',
        '7NX' => 'E02004560',
        '7NY' => 'E02004560',
        '7NZ' => 'E02004560',
        '7PA' => 'E02004560',
        '7PB' => 'E02004560',
        '7PD' => 'E02004560',
        '7PE' => 'E02004560',
        '7PF' => 'E02004560',
        '7PG' => 'E02004560',
        '7PH' => 'E02004560',
        '7PJ' => 'E02004560',
        '7PL' => 'E02004560',
        '7PN' => 'E02004560',
        '7PP' => 'E02004560',
        '7PQ' => 'E02004560',
        '7PR' => 'E02004560',
        '7PS' => 'E02004560',
        '7PT' => 'E02004560',
        '7PU' => 'E02004560',
        '7PW' => 'E02004560',
        '7PX' => 'E02004560',
        '7PY' => 'E02004560',
        '7PZ' => 'E02004560',
        '7QA' => 'E02004560',
        '7QB' => 'E02004560',
        '7QD' => 'E02004560',
        '7QE' => 'E02004560',
        '7QF' => 'E02004560',
        '7QG' => 'E02004560',
        '7QH' => 'E02004560',
        '7QJ' => 'E02004560',
        '7QL' => 'E02004560',
        '7QN' => 'E02004560',
        '7QP' => 'E02004560',
        '7QQ' => 'E02004560',
        '7QR' => 'E02004560',
        '7QS' => 'E02004560',
        '7QT' => 'E02004560',
        '7QU' => 'E02004560',
        '7QW' => 'E02004560',
        '7QX' => 'E02004560',
        '7QY' => 'E02004560',
        '7QZ' => 'E02004560',
        '7RA' => 'E02004560',
        '7RB' => 'E02004560',
        '7RD' => 'E02004560',
        '7RE' => 'E02004560',
        '7RF' => 'E02004560',
        '7RG' => 'E02004560',
        '7RH' => 'E02004560',
        '7RJ' => 'E02004560',
        '7RL' => 'E02004560',
        '7RN' => 'E02004560',
        '7RP' => 'E02004560',
        '7RQ' => 'E02004560',
        '7RR' => 'E02004560',
        '7RS' => 'E02004560',
        '7RT' => 'E02004560',
        '7RU' => 'E02004560',
        '7RW' => 'E02004560',
        '7RX' => 'E02004560',
        '7RY' => 'E02004560',
        '7RZ' => 'E02004560',
        '7SA' => 'E02004560',
        '7SB' => 'E02004560',
        '7SD' => 'E02004560',
        '7SE' => 'E02004560',
        '7SF' => 'E02004560',
        '7SG' => 'E02004560',
        '7SH' => 'E02004560',
        '7SJ' => 'E02004560',
        '7SL' => 'E02004560',
        '7SN' => 'E02004560',
        '7SP' => 'E02004560',
        '7SQ' => 'E02004560',
        '7SR' => 'E02004560',
        '7SS' => 'E02004560',
        '7ST' => 'E02004560',
        '7SU' => 'E02004560',
        '7SW' => 'E02004560',
        '7SX' => 'E02004560',
        '7SY' => 'E02004560',
        '7SZ' => 'E02004560',
        '7TA' => 'E02004560',
        '7TB' => 'E02004560',
        '7TD' => 'E02004560',
        '7TE' => 'E02004560',
        '7TF' => 'E02004560',
        '7TG' => 'E02004560',
        '7TH' => 'E02004560',
        '7TJ' => 'E02004560',
        '7TL' => 'E02004560',
        '7TN' => 'E02004560',
        '7TP' => 'E02004560',
        '7TQ' => 'E02004560',
        '7TR' => 'E02004560',
        '7TS' => 'E02004560',
        '7TT' => 'E02004560',
        '7TU' => 'E02004560',
        '7TW' => 'E02004560',
        '7TX' => 'E02004560',
        '7TY' => 'E02004560',
        '7TZ' => 'E02004560',
        '7UA' => 'E02004560',
        '7UB' => 'E02004560',
        '7UD' => 'E02004560',
        '7UE' => 'E02004560',
        '7UF' => 'E02004560',
        '7UG' => 'E02004560',
        '7UH' => 'E02004560',
        '7UJ' => 'E02004560',
        '7UL' => 'E02004560',
        '7UN' => 'E02004560',
        '7UP' => 'E02004560',
        '7UQ' => 'E02004560',
        '7UR' => 'E02004560',
        '7US' => 'E02004560',
        '7UT' => 'E02004560',
        '7UU' => 'E02004560',
        '7UW' => 'E02004560',
        '7UX' => 'E02004560',
        '7UY' => 'E02004560',
        '7UZ' => 'E02004560',
        '7WA' => 'E02004560',
        '7WB' => 'E02004560',
        '7WD' => 'E02004560',
        '7WE' => 'E02004560',
        '7WF' => 'E02004560',
        '7WG' => 'E02004560',
        '7WH' => 'E02004560',
        '7WJ' => 'E02004560',
        '7WL' => 'E02004560',
        '7WN' => 'E02004560',
        '7WP' => 'E02004560',
        '7WQ' => 'E02004560',
        '7WR' => 'E02004560',
        '7WS' => 'E02004560',
        '7WT' => 'E02004560',
        '7WU' => 'E02004560',
        '7WW' => 'E02004560',
        '7WX' => 'E02004560',
        '7WY' => 'E02004560',
        '7WZ' => 'E02004560',
        '7XA' => 'E02004560',
        '7XB' => 'E02004560',
        '7XD' => 'E02004560',
        '7XE' => 'E02004560',
        '7XF' => 'E02004560',
        '7XG' => 'E02004560',
        '7XH' => 'E02004560',
        '7XJ' => 'E02004560',
        '7XL' => 'E02004560',
        '7XN' => 'E02004560',
        '7XP' => 'E02004560',
        '7XR' => 'E02004560',
        '7XS' => 'E02004560',
        '7XT' => 'E02004560',
        '7XU' => 'E02004560',
        '7XW' => 'E02004560',
        '7XY' => 'E02004560',
        '7XZ' => 'E02004560',
        '7YA' => 'E02004560',
        '7YB' => 'E02004560',
        '7YD' => 'E02004560',
        '7YE' => 'E02004560',
        '7YF' => 'E02004560',
        '7YZ' => 'E02004560',
        '7ZQ' => 'E02004560',
        '7ZY' => 'E02004560',
        '8AA' => 'E02004562',
        '8AB' => 'E02004562',
        '8AD' => 'E02004562',
        '8AE' => 'E02004562',
        '8AF' => 'E02004562',
        '8AG' => 'E02004562',
        '8AH' => 'E02004562',
        '8AJ' => 'E02004562',
        '8AL' => 'E02004562',
        '8AN' => 'E02004562',
        '8AP' => 'E02004562',
        '8AQ' => 'E02004562',
        '8AR' => 'E02004562',
        '8AS' => 'E02004562',
        '8AT' => 'E02004562',
        '8AU' => 'E02004562',
        '8AW' => 'E02004562',
        '8AX' => 'E02004562',
        '8AY' => 'E02004562',
        '8AZ' => 'E02004562',
        '8BA' => 'E02004562',
        '8BB' => 'E02004562',
        '8BD' => 'E02004562',
        '8BE' => 'E02004562',
        '8BG' => 'E02004562',
        '8BH' => 'E02004562',
        '8BJ' => 'E02004562',
        '8BL' => 'E02004562',
        '8BN' => 'E02004562',
        '8BP' => 'E02004562',
        '8BQ' => 'E02004562',
        '8BS' => 'E02004562',
        '8BT' => 'E02004562',
        '8BU' => 'E02004562',
        '8BW' => 'E02004562',
        '8BX' => 'E02004562',
        '8BY' => 'E02004562',
        '8BZ' => 'E02004562',
        '8DA' => 'E02004562',
        '8DB' => 'E02004562',
        '8DD' => 'E02004562',
        '8DE' => 'E02004562',
        '8DF' => 'E02004562',
        '8DG' => 'E02004562',
        '8DH' => 'E02004562',
        '8DJ' => 'E02004562',
        '8DL' => 'E02004562',
        '8DN' => 'E02004562',
        '8DP' => 'E02004562',
        '8DQ' => 'E02004562',
        '8DR' => 'E02004562',
        '8DS' => 'E02004562',
        '8DT' => 'E02004562',
        '8DU' => 'E02004562',
        '8DW' => 'E02004562',
        '8DX' => 'E02004562',
        '8DY' => 'E02004562',
        '8DZ' => 'E02004562',
        '8EA' => 'E02004562',
        '8EB' => 'E02004562',
        '8ED' => 'E02004562',
        '8EE' => 'E02004562',
        '8EF' => 'E02004562',
        '8EG' => 'E02004562',
        '8EH' => 'E02004562',
        '8EJ' => 'E02004562',
        '8EL' => 'E02004562',
        '8EN' => 'E02004562',
        '8EP' => 'E02004562',
        '8EQ' => 'E02004562',
        '8ER' => 'E02004562',
        '8ES' => 'E02004562',
        '8ET' => 'E02004562',
        '8EU' => 'E02004562',
        '8EW' => 'E02004562',
        '8EX' => 'E02004562',
        '8EY' => 'E02004562',
        '8EZ' => 'E02004562',
        '8FA' => 'E02004562',
        '8FD' => 'E02004562',
        '8FE' => 'E02004562',
        '8FF' => 'E02004562',
        '8FG' => 'E02004562',
        '8FH' => 'E02004562',
        '8FJ' => 'E02004562',
        '8FL' => 'E02004562',
        '8FN' => 'E02004562',
        '8FP' => 'E02004562',
        '8FQ' => 'E02004562',
        '8FR' => 'E02004562',
        '8FS' => 'E02004562',
        '8FT' => 'E02004562',
        '8FU' => 'E02004562',
        '8FW' => 'E02004562',
        '8FX' => 'E02004562',
        '8FY' => 'E02004562',
        '8FZ' => 'E02004562',
        '8GA' => 'E02004562',
        '8GB' => 'E02004562',
        '8GD' => 'E02004562',
        '8GE' => 'E02004562',
        '8GF' => 'E02004562',
        '8GG' => 'E02004562',
        '8GH' => 'E02004562',
        '8GJ' => 'E02004562',
        '8GL' => 'E02004562',
        '8GT' => 'E02004562',
        '8GU' => 'E02004562',
        '8GX' => 'E02004562',
        '8GZ' => 'E02004562',
        '8HA' => 'E02004562',
        '8HB' => 'E02004562',
        '8HD' => 'E02004562',
        '8HE' => 'E02004562',
        '8HF' => 'E02004562',
        '8HG' => 'E02004562',
        '8HH' => 'E02004562',
        '8HJ' => 'E02004562',
        '8HL' => 'E02004562',
        '8HN' => 'E02004562',
        '8HP' => 'E02004562',
        '8HQ' => 'E02004562',
        '8HR' => 'E02004562',
        '8HS' => 'E02004562',
        '8HT' => 'E02004562',
        '8HU' => 'E02004562',
        '8HW' => 'E02004562',
        '8HX' => 'E02004562',
        '8HY' => 'E02004562',
        '8HZ' => 'E02004562',
        '8JA' => 'E02004562',
        '8JB' => 'E02004562',
        '8JD' => 'E02004562',
        '8JE' => 'E02004562',
        '8JF' => 'E02004562',
        '8JG' => 'E02004562',
        '8JH' => 'E02004562',
        '8JJ' => 'E02004562',
        '8JL' => 'E02004562',
        '8JN' => 'E02004562',
        '8JP' => 'E02004562',
        '8JQ' => 'E02004562',
        '8JR' => 'E02004562',
        '8JS' => 'E02004562',
        '8JT' => 'E02004562',
        '8JU' => 'E02004562',
        '8JW' => 'E02004562',
        '8JX' => 'E02004562',
        '8JY' => 'E02004562',
        '8JZ' => 'E02004562',
        '8LA' => 'E02004562',
        '8LB' => 'E02004562',
        '8LD' => 'E02004562',
        '8LE' => 'E02004562',
        '8LF' => 'E02004562',
        '8LG' => 'E02004562',
        '8LH' => 'E02004562',
        '8LJ' => 'E02004562',
        '8LL' => 'E02004562',
        '8LN' => 'E02004562',
        '8LP' => 'E02004562',
        '8LQ' => 'E02004562',
        '8LR' => 'E02004562',
        '8LS' => 'E02004562',
        '8LT' => 'E02004562',
        '8LU' => 'E02004562',
        '8LW' => 'E02004562',
        '8LX' => 'E02004562',
        '8LY' => 'E02004562',
        '8LZ' => 'E02004562',
        '8NA' => 'E02004562',
        '8NB' => 'E02004562',
        '8ND' => 'E02004562',
        '8NE' => 'E02004562',
        '8NF' => 'E02004562',
        '8NG' => 'E02004562',
        '8NH' => 'E02004562',
        '8NJ' => 'E02004560',
        '8NL' => 'E02004560',
        '8NN' => 'E02004562',
        '8NP' => 'E02004562',
        '8NQ' => 'E02004560',
        '8NR' => 'E02004562',
        '8NS' => 'E02004562',
        '8NT' => 'E02004562',
        '8NU' => 'E02004562',
        '8NW' => 'E02004562',
        '8NX' => 'E02004562',
        '8NY' => 'E02004562',
        '8NZ' => 'E02004562',
        '8PA' => 'E02004562',
        '8PB' => 'E02004562',
        '8PD' => 'E02004562',
        '8PE' => 'E02004562',
        '8PF' => 'E02004562',
        '8PG' => 'E02004562',
        '8PH' => 'E02004562',
        '8PJ' => 'E02004562',
        '8PL' => 'E02004562',
        '8PN' => 'E02004562',
        '8PP' => 'E02004562',
        '8PQ' => 'E02004562',
        '8PR' => 'E02004562',
        '8PS' => 'E02004562',
        '8PT' => 'E02004562',
        '8PU' => 'E02004562',
        '8PW' => 'E02004562',
        '8PX' => 'E02004562',
        '8PY' => 'E02004562',
        '8PZ' => 'E02004562',
        '8QA' => 'E02004562',
        '8QB' => 'E02004562',
        '8QD' => 'E02004562',
        '8QE' => 'E02004562',
        '8QF' => 'E02004562',
        '8QG' => 'E02004562',
        '8QH' => 'E02004562',
        '8QJ' => 'E02004562',
        '8QL' => 'E02004562',
        '8QN' => 'E02004562',
        '8QP' => 'E02004562',
        '8QQ' => 'E02004562',
        '8QR' => 'E02004562',
        '8QS' => 'E02004562',
        '8QT' => 'E02004562',
        '8QU' => 'E02004562',
        '8QW' => 'E02004562',
        '8QX' => 'E02004562',
        '8QY' => 'E02004562',
        '8QZ' => 'E02004562',
        '8RA' => 'E02004562',
        '8RB' => 'E02004562',
        '8RE' => 'E02004562',
        '8RF' => 'E02004562',
        '8RG' => 'E02004562',
        '8RH' => 'E02004562',
        '8RJ' => 'E02004562',
        '8RL' => 'E02004562',
        '8RN' => 'E02004562',
        '8RP' => 'E02004562',
        '8RQ' => 'E02004562',
        '8RR' => 'E02004562',
        '8RS' => 'E02004562',
        '8RW' => 'E02004562',
        '8RX' => 'E02004562',
        '8RY' => 'E02004562',
        '8RZ' => 'E02004562',
        '8SA' => 'E02004562',
        '8SB' => 'E02004562',
        '8SD' => 'E02004562',
        '8SE' => 'E02004562',
        '8SH' => 'E02004562',
        '8SJ' => 'E02004562',
        '8SN' => 'E02004562',
        '8SP' => 'E02004562',
        '8SW' => 'E02004562',
        '8SY' => 'E02004562',
        '8SZ' => 'E02004562',
        '8TA' => 'E02004562',
        '8TB' => 'E02004562',
        '8TD' => 'E02004562',
        '8TE' => 'E02004562',
        '8TF' => 'E02004562',
        '8TG' => 'E02004562',
        '8TH' => 'E02004562',
        '8TJ' => 'E02004562',
        '8TL' => 'E02004562',
        '8TN' => 'E02004562',
        '8TP' => 'E02004562',
        '8TQ' => 'E02004562',
        '8TR' => 'E02004562',
        '8TS' => 'E02004562',
        '8TT' => 'E02004562',
        '8TU' => 'E02004562',
        '8TW' => 'E02004562',
        '8TX' => 'E02004562',
        '8TY' => 'E02004562',
        '8TZ' => 'E02004562',
        '8UA' => 'E02004562',
        '8UB' => 'E02004562',
        '8UD' => 'E02004562',
        '8UE' => 'E02004562',
        '8UL' => 'E02004562',
        '8UN' => 'E02004562',
        '8UU' => 'E02004562',
        '8UW' => 'E02004562',
        '8UX' => 'E02004562',
        '8UY' => 'E02004562',
        '8UZ' => 'E02004562',
        '8WA' => 'E02004562',
        '8WB' => 'E02004562',
        '8WD' => 'E02004562',
        '8WE' => 'E02004562',
        '8WF' => 'E02004562',
        '8WG' => 'E02004562',
        '8WH' => 'E02004562',
        '8WJ' => 'E02004562',
        '8WL' => 'E02004562',
        '8WN' => 'E02004562',
        '8WP' => 'E02004562',
        '8WQ' => 'E02004562',
        '8WR' => 'E02004562',
        '8WS' => 'E02004562',
        '8WT' => 'E02004562',
        '8WU' => 'E02004562',
        '8WW' => 'E02004562',
        '8WX' => 'E02004562',
        '8WY' => 'E02004562',
        '8WZ' => 'E02004562',
        '8XA' => 'E02004562',
        '8XB' => 'E02004562',
        '8XD' => 'E02004562',
        '8XE' => 'E02004562',
        '8XF' => 'E02004562',
        '8XG' => 'E02004562',
        '8XH' => 'E02004562',
        '8XJ' => 'E02004562',
        '8XY' => 'E02004562',
        '8XZ' => 'E02004562',
        '8YW' => 'E02004562',
        '8YX' => 'E02004562',
        '8YZ' => 'E02004562',
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
