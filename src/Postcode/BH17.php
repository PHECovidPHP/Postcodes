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
final class BH17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003197',
        '0AD' => 'E02003197',
        '0AE' => 'E02003197',
        '0AZ' => 'E02003197',
        '0BD' => 'E02003197',
        '0BL' => 'E02003197',
        '0BS' => 'E02003197',
        '0DB' => 'E02003197',
        '0FT' => 'E02003197',
        '0GA' => 'E02003197',
        '0GB' => 'E02003197',
        '0GD' => 'E02003197',
        '0GE' => 'E02003197',
        '0GF' => 'E02003197',
        '0GG' => 'E02003197',
        '0GH' => 'E02003197',
        '0GJ' => 'E02003197',
        '0GL' => 'E02003198',
        '0GP' => 'E02003198',
        '0HH' => 'E02003197',
        '0HL' => 'E02003197',
        '0JT' => 'E02003197',
        '0JZ' => 'E02003197',
        '0LA' => 'E02003197',
        '0LB' => 'E02003197',
        '0LH' => 'E02003197',
        '0LZ' => 'E02003199',
        '0NF' => 'E02003197',
        '0RA' => 'E02003197',
        '0RB' => 'E02003197',
        '0RD' => 'E02003197',
        '0RE' => 'E02003197',
        '0RF' => 'E02003198',
        '0RJ' => 'E02003197',
        '0RL' => 'E02003197',
        '0RR' => 'E02003197',
        '0RS' => 'E02003197',
        '0RT' => 'E02003197',
        '0RU' => 'E02003197',
        '0RW' => 'E02003197',
        '0RX' => 'E02003197',
        '0RY' => 'E02003197',
        '0RZ' => 'E02003197',
        '0SA' => 'E02003197',
        '0SR' => 'E02003197',
        '0SS' => 'E02003197',
        '0SW' => 'E02003197',
        '0UF' => 'E02003197',
        '0UG' => 'E02003197',
        '0UH' => 'E02003197',
        '0UJ' => 'E02003197',
        '0UN' => 'E02003197',
        '0YA' => 'E02003197',
        '0YB' => 'E02003200',
        '0ZA' => 'E02003197',
        '0ZB' => 'E02003197',
        '0ZD' => 'E02003197',
        '7AA' => 'E02003199',
        '7AB' => 'E02003200',
        '7AD' => 'E02003197',
        '7AE' => 'E02003199',
        '7AF' => 'E02003199',
        '7AG' => 'E02003199',
        '7AH' => 'E02003199',
        '7AJ' => 'E02003199',
        '7AL' => 'E02003199',
        '7AN' => 'E02003199',
        '7AP' => 'E02003199',
        '7AQ' => 'E02003199',
        '7AR' => 'E02003199',
        '7AS' => 'E02003199',
        '7AT' => 'E02003199',
        '7AU' => 'E02003199',
        '7AW' => 'E02003199',
        '7AX' => 'E02003199',
        '7AY' => 'E02003199',
        '7AZ' => 'E02003199',
        '7BA' => 'E02003199',
        '7BB' => 'E02003199',
        '7BD' => 'E02003199',
        '7BE' => 'E02003200',
        '7BF' => 'E02003199',
        '7BG' => 'E02003199',
        '7BH' => 'E02003199',
        '7BJ' => 'E02003199',
        '7BL' => 'E02003199',
        '7BN' => 'E02003199',
        '7BP' => 'E02003199',
        '7BQ' => 'E02003199',
        '7BS' => 'E02003199',
        '7BT' => 'E02003199',
        '7BU' => 'E02003199',
        '7BW' => 'E02003199',
        '7BX' => 'E02003199',
        '7BY' => 'E02003199',
        '7BZ' => 'E02003199',
        '7DA' => 'E02003199',
        '7DB' => 'E02003199',
        '7DD' => 'E02003199',
        '7DE' => 'E02003199',
        '7DF' => 'E02003199',
        '7DG' => 'E02003199',
        '7DH' => 'E02003199',
        '7DJ' => 'E02003199',
        '7DL' => 'E02003199',
        '7DN' => 'E02003199',
        '7DP' => 'E02003199',
        '7DQ' => 'E02003199',
        '7DR' => 'E02003199',
        '7DS' => 'E02003199',
        '7DT' => 'E02003199',
        '7DU' => 'E02003199',
        '7DW' => 'E02003199',
        '7DX' => 'E02003199',
        '7DY' => 'E02003199',
        '7DZ' => 'E02003199',
        '7EA' => 'E02003197',
        '7EB' => 'E02003199',
        '7ED' => 'E02003199',
        '7EE' => 'E02003199',
        '7EF' => 'E02003199',
        '7EG' => 'E02003199',
        '7EH' => 'E02003199',
        '7EJ' => 'E02003199',
        '7EL' => 'E02003200',
        '7EN' => 'E02003199',
        '7EP' => 'E02003199',
        '7EQ' => 'E02003199',
        '7ER' => 'E02003199',
        '7ES' => 'E02003199',
        '7ET' => 'E02003199',
        '7EU' => 'E02003199',
        '7EW' => 'E02003199',
        '7EX' => 'E02003199',
        '7EY' => 'E02003199',
        '7EZ' => 'E02003199',
        '7FA' => 'E02003199',
        '7FB' => 'E02003199',
        '7FD' => 'E02003199',
        '7FE' => 'E02003199',
        '7FF' => 'E02003199',
        '7FG' => 'E02003199',
        '7FH' => 'E02003199',
        '7FJ' => 'E02003199',
        '7FL' => 'E02003199',
        '7FN' => 'E02003199',
        '7FP' => 'E02003199',
        '7FQ' => 'E02003200',
        '7FR' => 'E02003199',
        '7FS' => 'E02003199',
        '7HA' => 'E02003199',
        '7HB' => 'E02003199',
        '7HD' => 'E02003199',
        '7HE' => 'E02003199',
        '7HF' => 'E02003199',
        '7HG' => 'E02003199',
        '7HH' => 'E02003199',
        '7HJ' => 'E02003199',
        '7HL' => 'E02003199',
        '7HN' => 'E02003199',
        '7HP' => 'E02003199',
        '7HQ' => 'E02003199',
        '7HR' => 'E02003199',
        '7HS' => 'E02003196',
        '7HT' => 'E02003197',
        '7HU' => 'E02003199',
        '7HW' => 'E02003199',
        '7HX' => 'E02003199',
        '7HY' => 'E02003199',
        '7HZ' => 'E02003199',
        '7JA' => 'E02003199',
        '7JB' => 'E02003199',
        '7JD' => 'E02003199',
        '7JE' => 'E02003199',
        '7JF' => 'E02003199',
        '7JG' => 'E02003196',
        '7JH' => 'E02003199',
        '7JJ' => 'E02003199',
        '7JL' => 'E02003199',
        '7JN' => 'E02003199',
        '7JP' => 'E02003197',
        '7JQ' => 'E02003199',
        '7JR' => 'E02003197',
        '7JS' => 'E02003197',
        '7JT' => 'E02003197',
        '7JU' => 'E02003197',
        '7JW' => 'E02003199',
        '7JX' => 'E02003197',
        '7JY' => 'E02003197',
        '7JZ' => 'E02003197',
        '7LA' => 'E02003197',
        '7LB' => 'E02003197',
        '7LD' => 'E02003199',
        '7LE' => 'E02003199',
        '7LF' => 'E02003199',
        '7LG' => 'E02003199',
        '7LH' => 'E02003197',
        '7LJ' => 'E02003197',
        '7LL' => 'E02003197',
        '7LN' => 'E02003197',
        '7LP' => 'E02003197',
        '7LQ' => 'E02003197',
        '7LR' => 'E02003197',
        '7LS' => 'E02003197',
        '7LT' => 'E02003199',
        '7LU' => 'E02003199',
        '7LW' => 'E02003197',
        '7LX' => 'E02003199',
        '7LY' => 'E02003199',
        '7LZ' => 'E02003199',
        '7NA' => 'E02003199',
        '7NB' => 'E02003199',
        '7ND' => 'E02003199',
        '7NE' => 'E02003199',
        '7NF' => 'E02003197',
        '7NG' => 'E02003197',
        '7NH' => 'E02003201',
        '7NJ' => 'E02003201',
        '7NL' => 'E02003204',
        '7NN' => 'E02003201',
        '7NP' => 'E02003197',
        '7NQ' => 'E02003197',
        '7NR' => 'E02003201',
        '7NS' => 'E02003201',
        '7NT' => 'E02003198',
        '7NU' => 'E02003197',
        '7NW' => 'E02003204',
        '7NX' => 'E02003196',
        '7NY' => 'E02003204',
        '7NZ' => 'E02003201',
        '7PA' => 'E02003196',
        '7PB' => 'E02003201',
        '7PD' => 'E02003198',
        '7PE' => 'E02003198',
        '7PF' => 'E02003198',
        '7PG' => 'E02003198',
        '7PH' => 'E02003198',
        '7PJ' => 'E02003198',
        '7PL' => 'E02003198',
        '7PN' => 'E02003198',
        '7PP' => 'E02003199',
        '7PQ' => 'E02003198',
        '7PR' => 'E02003198',
        '7PS' => 'E02003198',
        '7PT' => 'E02003198',
        '7PU' => 'E02003198',
        '7PW' => 'E02003198',
        '7PX' => 'E02003198',
        '7PY' => 'E02003198',
        '7PZ' => 'E02003198',
        '7QA' => 'E02003198',
        '7QB' => 'E02003198',
        '7QD' => 'E02003198',
        '7QE' => 'E02003198',
        '7QF' => 'E02003198',
        '7QG' => 'E02003198',
        '7QH' => 'E02003198',
        '7QJ' => 'E02003198',
        '7QL' => 'E02003198',
        '7QN' => 'E02003198',
        '7QP' => 'E02003198',
        '7QQ' => 'E02003198',
        '7QR' => 'E02003198',
        '7QS' => 'E02003198',
        '7QT' => 'E02003198',
        '7QU' => 'E02003198',
        '7QW' => 'E02003198',
        '7QX' => 'E02003198',
        '7QY' => 'E02003198',
        '7QZ' => 'E02003196',
        '7RA' => 'E02003197',
        '7RB' => 'E02003197',
        '7RD' => 'E02003197',
        '7RE' => 'E02003198',
        '7RF' => 'E02003198',
        '7RG' => 'E02003198',
        '7RH' => 'E02003201',
        '7RJ' => 'E02003197',
        '7RL' => 'E02003197',
        '7RN' => 'E02003197',
        '7RP' => 'E02003199',
        '7RQ' => 'E02003198',
        '7RR' => 'E02003197',
        '7RS' => 'E02003197',
        '7RT' => 'E02003197',
        '7RU' => 'E02003197',
        '7RW' => 'E02003197',
        '7RX' => 'E02003197',
        '7RY' => 'E02003197',
        '7RZ' => 'E02003197',
        '7SA' => 'E02003197',
        '7SB' => 'E02003199',
        '7SD' => 'E02003198',
        '7SE' => 'E02003198',
        '7SF' => 'E02003198',
        '7SG' => 'E02003198',
        '7SH' => 'E02003198',
        '7SJ' => 'E02003198',
        '7SL' => 'E02003198',
        '7SN' => 'E02003198',
        '7SP' => 'E02003198',
        '7SQ' => 'E02003198',
        '7SR' => 'E02003197',
        '7SS' => 'E02003197',
        '7ST' => 'E02003198',
        '7SU' => 'E02003198',
        '7SW' => 'E02003197',
        '7SX' => 'E02003198',
        '7SY' => 'E02003199',
        '7SZ' => 'E02003198',
        '7TA' => 'E02003199',
        '7TB' => 'E02003199',
        '7TD' => 'E02003199',
        '7TE' => 'E02003199',
        '7TF' => 'E02003199',
        '7TG' => 'E02003199',
        '7TH' => 'E02003198',
        '7TJ' => 'E02003198',
        '7TL' => 'E02003198',
        '7TN' => 'E02003198',
        '7TP' => 'E02003198',
        '7TQ' => 'E02003197',
        '7TR' => 'E02003198',
        '7TS' => 'E02003198',
        '7TT' => 'E02003198',
        '7TU' => 'E02003198',
        '7TW' => 'E02003198',
        '7TX' => 'E02003198',
        '7TY' => 'E02003198',
        '7TZ' => 'E02003198',
        '7UA' => 'E02003198',
        '7UB' => 'E02003198',
        '7UD' => 'E02003198',
        '7UE' => 'E02003198',
        '7UF' => 'E02003197',
        '7UG' => 'E02003197',
        '7UH' => 'E02003197',
        '7UJ' => 'E02003197',
        '7UL' => 'E02003199',
        '7UN' => 'E02003197',
        '7UP' => 'E02003199',
        '7UQ' => 'E02003205',
        '7UR' => 'E02003199',
        '7US' => 'E02003199',
        '7UT' => 'E02003199',
        '7UU' => 'E02003199',
        '7UW' => 'E02003199',
        '7UX' => 'E02003199',
        '7UY' => 'E02003199',
        '7UZ' => 'E02003199',
        '7WA' => 'E02003200',
        '7WB' => 'E02003200',
        '7WD' => 'E02003197',
        '7WE' => 'E02003197',
        '7WF' => 'E02003200',
        '7WG' => 'E02003200',
        '7WH' => 'E02003198',
        '7WJ' => 'E02003200',
        '7WL' => 'E02003200',
        '7WN' => 'E02003200',
        '7WP' => 'E02003200',
        '7WQ' => 'E02003199',
        '7WR' => 'E02003200',
        '7WS' => 'E02003200',
        '7WT' => 'E02003200',
        '7WU' => 'E02003200',
        '7WW' => 'E02003200',
        '7WX' => 'E02003199',
        '7WY' => 'E02003199',
        '7XA' => 'E02003199',
        '7XB' => 'E02003199',
        '7XD' => 'E02003199',
        '7XE' => 'E02003199',
        '7XF' => 'E02003199',
        '7XG' => 'E02003199',
        '7XH' => 'E02003199',
        '7XJ' => 'E02003199',
        '7XL' => 'E02003199',
        '7XN' => 'E02003199',
        '7XP' => 'E02003199',
        '7XQ' => 'E02003199',
        '7XR' => 'E02003199',
        '7XS' => 'E02003199',
        '7XT' => 'E02003199',
        '7XU' => 'E02003199',
        '7XW' => 'E02003199',
        '7XX' => 'E02003199',
        '7XY' => 'E02003199',
        '7XZ' => 'E02003199',
        '7YA' => 'E02003199',
        '7YB' => 'E02003199',
        '7YD' => 'E02003199',
        '7YE' => 'E02003199',
        '7YF' => 'E02003199',
        '7YG' => 'E02003199',
        '7YH' => 'E02003199',
        '7YJ' => 'E02003199',
        '7YL' => 'E02003199',
        '7YN' => 'E02003199',
        '7YP' => 'E02003199',
        '7YQ' => 'E02003199',
        '7YR' => 'E02003199',
        '7YS' => 'E02003199',
        '7YT' => 'E02003199',
        '7YU' => 'E02003199',
        '7YW' => 'E02003199',
        '7YX' => 'E02003199',
        '7YY' => 'E02003199',
        '7YZ' => 'E02003199',
        '7ZA' => 'E02003200',
        '7ZB' => 'E02003200',
        '7ZD' => 'E02003199',
        '7ZE' => 'E02003200',
        '7ZF' => 'E02003200',
        '7ZG' => 'E02003199',
        '7ZH' => 'E02003200',
        '7ZJ' => 'E02003199',
        '7ZL' => 'E02003200',
        '7ZN' => 'E02003200',
        '7ZP' => 'E02003199',
        '7ZQ' => 'E02003199',
        '7ZR' => 'E02003200',
        '7ZS' => 'E02003199',
        '7ZT' => 'E02003200',
        '7ZU' => 'E02003199',
        '7ZW' => 'E02003200',
        '7ZX' => 'E02003200',
        '7ZY' => 'E02003199',
        '7ZZ' => 'E02003198',
        '8AA' => 'E02003198',
        '8AB' => 'E02003198',
        '8AD' => 'E02003198',
        '8AE' => 'E02003198',
        '8AF' => 'E02003198',
        '8AG' => 'E02003198',
        '8AH' => 'E02003197',
        '8AJ' => 'E02003197',
        '8AL' => 'E02003197',
        '8AN' => 'E02003197',
        '8AP' => 'E02003197',
        '8AQ' => 'E02003198',
        '8AR' => 'E02003198',
        '8AS' => 'E02003198',
        '8AT' => 'E02003198',
        '8AU' => 'E02003198',
        '8AW' => 'E02003198',
        '8AX' => 'E02003198',
        '8AY' => 'E02003198',
        '8AZ' => 'E02003198',
        '8BA' => 'E02003198',
        '8BB' => 'E02003198',
        '8BD' => 'E02003198',
        '8BE' => 'E02003198',
        '8BG' => 'E02003198',
        '8BH' => 'E02003198',
        '8BJ' => 'E02003198',
        '8BL' => 'E02003198',
        '8BN' => 'E02003200',
        '8BP' => 'E02003198',
        '8BQ' => 'E02003198',
        '8BS' => 'E02003198',
        '8BT' => 'E02003198',
        '8BU' => 'E02003198',
        '8BX' => 'E02003198',
        '8BY' => 'E02003198',
        '8BZ' => 'E02003198',
        '8DA' => 'E02003198',
        '8DB' => 'E02003198',
        '8DD' => 'E02003200',
        '8DE' => 'E02003198',
        '8DF' => 'E02003198',
        '8NT' => 'E02003198',
        '8PD' => 'E02003198',
        '8PE' => 'E02003198',
        '8PF' => 'E02003198',
        '8PG' => 'E02003198',
        '8PH' => 'E02003198',
        '8PJ' => 'E02003198',
        '8PL' => 'E02003198',
        '8PN' => 'E02003198',
        '8PP' => 'E02003198',
        '8PQ' => 'E02003198',
        '8PR' => 'E02003198',
        '8PS' => 'E02003198',
        '8PT' => 'E02003198',
        '8PU' => 'E02003198',
        '8PW' => 'E02003198',
        '8PX' => 'E02003198',
        '8PY' => 'E02003198',
        '8PZ' => 'E02003198',
        '8QA' => 'E02003198',
        '8QB' => 'E02003198',
        '8QD' => 'E02003198',
        '8QE' => 'E02003198',
        '8QF' => 'E02003198',
        '8QG' => 'E02003198',
        '8QH' => 'E02003198',
        '8QJ' => 'E02003198',
        '8QL' => 'E02003198',
        '8QN' => 'E02003198',
        '8QP' => 'E02003198',
        '8QQ' => 'E02003198',
        '8QR' => 'E02003198',
        '8QS' => 'E02003198',
        '8QT' => 'E02003198',
        '8QU' => 'E02003198',
        '8QW' => 'E02003198',
        '8QX' => 'E02003198',
        '8QY' => 'E02003198',
        '8RE' => 'E02003198',
        '8RQ' => 'E02003198',
        '8SA' => 'E02003198',
        '8SB' => 'E02003198',
        '8SD' => 'E02003198',
        '8SE' => 'E02003198',
        '8SF' => 'E02003198',
        '8SG' => 'E02003198',
        '8SH' => 'E02003198',
        '8SJ' => 'E02003198',
        '8SL' => 'E02003198',
        '8SN' => 'E02003198',
        '8SP' => 'E02003198',
        '8SQ' => 'E02003198',
        '8SR' => 'E02003198',
        '8SS' => 'E02003198',
        '8ST' => 'E02003198',
        '8SU' => 'E02003198',
        '8SW' => 'E02003198',
        '8SX' => 'E02003198',
        '8SY' => 'E02003198',
        '8SZ' => 'E02003198',
        '8TH' => 'E02003198',
        '8TJ' => 'E02003198',
        '8TL' => 'E02003198',
        '8TN' => 'E02003198',
        '8TP' => 'E02003198',
        '8TR' => 'E02003198',
        '8TS' => 'E02003198',
        '8TT' => 'E02003198',
        '8TU' => 'E02003198',
        '8TW' => 'E02003198',
        '8TX' => 'E02003198',
        '8TY' => 'E02003198',
        '8TZ' => 'E02003198',
        '8UA' => 'E02003198',
        '8UB' => 'E02003198',
        '8UD' => 'E02003198',
        '8UE' => 'E02003198',
        '8US' => 'E02003198',
        '8WA' => 'E02003200',
        '8WG' => 'E02003198',
        '8WZ' => 'E02003198',
        '8YA' => 'E02003200',
        '8YB' => 'E02003198',
        '8YD' => 'E02003197',
        '8YE' => 'E02003198',
        '8YF' => 'E02003197',
        '8YG' => 'E02003198',
        '8YH' => 'E02003198',
        '8YJ' => 'E02003200',
        '8YL' => 'E02003200',
        '8YN' => 'E02003197',
        '8YP' => 'E02003198',
        '8YQ' => 'E02003200',
        '8YR' => 'E02003198',
        '8YS' => 'E02003198',
        '8YT' => 'E02003198',
        '8YU' => 'E02003198',
        '8YW' => 'E02003200',
        '8ZS' => 'E02003198',
        '8ZZ' => 'E02003200',
        '9AA' => 'E02003197',
        '9AB' => 'E02003197',
        '9AD' => 'E02003197',
        '9AE' => 'E02003197',
        '9AF' => 'E02003197',
        '9AG' => 'E02003197',
        '9AH' => 'E02003197',
        '9AJ' => 'E02003197',
        '9AL' => 'E02003197',
        '9AN' => 'E02003197',
        '9AP' => 'E02003197',
        '9AQ' => 'E02003197',
        '9AR' => 'E02003197',
        '9AS' => 'E02003197',
        '9AT' => 'E02003197',
        '9AU' => 'E02003197',
        '9AW' => 'E02003197',
        '9AX' => 'E02003197',
        '9AY' => 'E02003197',
        '9AZ' => 'E02003197',
        '9BA' => 'E02003197',
        '9BB' => 'E02003197',
        '9BD' => 'E02003197',
        '9BE' => 'E02003197',
        '9BF' => 'E02003197',
        '9BG' => 'E02003197',
        '9BH' => 'E02003197',
        '9BJ' => 'E02003197',
        '9BL' => 'E02003197',
        '9BN' => 'E02003197',
        '9BP' => 'E02003197',
        '9BQ' => 'E02003194',
        '9BS' => 'E02003197',
        '9BW' => 'E02003197',
        '9BX' => 'E02003197',
        '9BZ' => 'E02003197',
        '9DA' => 'E02003197',
        '9DD' => 'E02003197',
        '9DG' => 'E02003197',
        '9DH' => 'E02003197',
        '9DJ' => 'E02003197',
        '9DL' => 'E02003197',
        '9DN' => 'E02003197',
        '9DP' => 'E02003197',
        '9DR' => 'E02003197',
        '9DS' => 'E02003197',
        '9DT' => 'E02003197',
        '9DU' => 'E02003197',
        '9DW' => 'E02003197',
        '9DX' => 'E02003197',
        '9DY' => 'E02003197',
        '9DZ' => 'E02003197',
        '9EA' => 'E02003197',
        '9EB' => 'E02003197',
        '9ED' => 'E02003197',
        '9EE' => 'E02003197',
        '9EF' => 'E02003197',
        '9EG' => 'E02003197',
        '9EH' => 'E02003197',
        '9EJ' => 'E02003197',
        '9EL' => 'E02003197',
        '9EN' => 'E02003197',
        '9EP' => 'E02003197',
        '9EQ' => 'E02003197',
        '9ER' => 'E02003197',
        '9ES' => 'E02003197',
        '9ET' => 'E02003197',
        '9EU' => 'E02003197',
        '9EW' => 'E02003197',
        '9EX' => 'E02003197',
        '9EY' => 'E02003197',
        '9EZ' => 'E02003197',
        '9FA' => 'E02003197',
        '9FB' => 'E02003197',
        '9FD' => 'E02003197',
        '9FE' => 'E02003197',
        '9HA' => 'E02003197',
        '9HB' => 'E02003197',
        '9HD' => 'E02003197',
        '9HE' => 'E02003197',
        '9HF' => 'E02003197',
        '9HG' => 'E02003197',
        '9HH' => 'E02003197',
        '9HJ' => 'E02003197',
        '9HL' => 'E02003197',
        '9HN' => 'E02003197',
        '9HP' => 'E02003197',
        '9HQ' => 'E02003197',
        '9HR' => 'E02003197',
        '9HS' => 'E02003197',
        '9HT' => 'E02003197',
        '9HW' => 'E02003197',
        '9JP' => 'E02003197',
        '9JR' => 'E02003197',
        '9JS' => 'E02003197',
        '9JU' => 'E02003197',
        '9LL' => 'E02003197',
        '9LN' => 'E02003197',
        '9LP' => 'E02003197',
        '9LQ' => 'E02003197',
        '9LR' => 'E02003197',
        '9LS' => 'E02003197',
        '9LW' => 'E02003197',
        '9NG' => 'E02003197',
        '9NQ' => 'E02003197',
        '9TH' => 'E02003197',
        '9WA' => 'E02003200',
        '9WD' => 'E02003197',
        '9WE' => 'E02003197',
        '9WF' => 'E02003197',
        '9WG' => 'E02003197',
        '9XQ' => 'E02003200',
        '9XX' => 'E02003200',
        '9XZ' => 'E02003200',
        '9YA' => 'E02003197',
        '9YB' => 'E02003197',
        '9YD' => 'E02003197',
        '9YE' => 'E02003197',
        '9YF' => 'E02003197',
        '9YG' => 'E02003197',
        '9YH' => 'E02003197',
        '9YJ' => 'E02003200',
        '9YL' => 'E02003197',
        '9YN' => 'E02003197',
        '9YP' => 'E02003197',
        '9YQ' => 'E02003197',
        '9YR' => 'E02003200',
        '9YS' => 'E02003200',
        '9YT' => 'E02003200',
        '9YU' => 'E02003200',
        '9YW' => 'E02003197',
        '9YX' => 'E02003197',
        '9YY' => 'E02003200',
        '9YZ' => 'E02003197',
        '9ZA' => 'E02003200',
        '9ZB' => 'E02003197',
        '9ZD' => 'E02003197',
        '9ZE' => 'E02003197',
        '9ZF' => 'E02003197',
        '9ZG' => 'E02003200',
        '9ZJ' => 'E02003200',
        '9ZN' => 'E02003200',
        '9ZQ' => 'E02003200',
        '9ZX' => 'E02003200',
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
