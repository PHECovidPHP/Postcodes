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
final class BL4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001015',
        '0AB' => 'E02001015',
        '0AD' => 'E02001012',
        '0AE' => 'E02001016',
        '0AF' => 'E02001016',
        '0AG' => 'E02001016',
        '0AH' => 'E02001016',
        '0AJ' => 'E02001012',
        '0AL' => 'E02001016',
        '0AN' => 'E02001009',
        '0AP' => 'E02001012',
        '0AQ' => 'E02001012',
        '0AR' => 'E02001012',
        '0AS' => 'E02001012',
        '0AT' => 'E02001012',
        '0AU' => 'E02001012',
        '0AW' => 'E02001012',
        '0AX' => 'E02001012',
        '0AY' => 'E02001012',
        '0AZ' => 'E02001012',
        '0BA' => 'E02001012',
        '0BB' => 'E02001012',
        '0BD' => 'E02001012',
        '0BE' => 'E02001012',
        '0BF' => 'E02001012',
        '0BG' => 'E02001015',
        '0BH' => 'E02001012',
        '0BJ' => 'E02001012',
        '0BL' => 'E02001012',
        '0BN' => 'E02001012',
        '0BP' => 'E02001012',
        '0BQ' => 'E02001015',
        '0BR' => 'E02001012',
        '0BS' => 'E02001012',
        '0BT' => 'E02001012',
        '0BU' => 'E02001012',
        '0BW' => 'E02001012',
        '0BX' => 'E02001012',
        '0BY' => 'E02001012',
        '0BZ' => 'E02001015',
        '0DA' => 'E02001015',
        '0DB' => 'E02001009',
        '0DD' => 'E02001015',
        '0DF' => 'E02001012',
        '0DG' => 'E02001012',
        '0DH' => 'E02001010',
        '0DJ' => 'E02001012',
        '0DL' => 'E02001012',
        '0DN' => 'E02001012',
        '0DP' => 'E02001012',
        '0DR' => 'E02001012',
        '0DS' => 'E02001012',
        '0DT' => 'E02001012',
        '0DU' => 'E02001010',
        '0DW' => 'E02001012',
        '0DX' => 'E02001012',
        '0DY' => 'E02001012',
        '0DZ' => 'E02001012',
        '0EA' => 'E02001012',
        '0EB' => 'E02001012',
        '0ED' => 'E02001012',
        '0EE' => 'E02001012',
        '0EF' => 'E02001012',
        '0EG' => 'E02001012',
        '0EH' => 'E02001012',
        '0EJ' => 'E02001012',
        '0EL' => 'E02001012',
        '0EN' => 'E02001012',
        '0EP' => 'E02001012',
        '0EQ' => 'E02001012',
        '0ER' => 'E02001012',
        '0ES' => 'E02001012',
        '0ET' => 'E02001012',
        '0EU' => 'E02001012',
        '0EW' => 'E02001012',
        '0FA' => 'E02001012',
        '0FB' => 'E02000999',
        '0FD' => 'E02001012',
        '0FE' => 'E02001012',
        '0FF' => 'E02001012',
        '0FG' => 'E02001017',
        '0FH' => 'E02001012',
        '0FJ' => 'E02001012',
        '0FL' => 'E02001012',
        '0FN' => 'E02000990',
        '0FP' => 'E02000999',
        '0FQ' => 'E02000999',
        '0FS' => 'E02000999',
        '0GZ' => 'E02001012',
        '0HA' => 'E02001012',
        '0HB' => 'E02001012',
        '0HD' => 'E02001012',
        '0HE' => 'E02001012',
        '0HF' => 'E02001012',
        '0HG' => 'E02001012',
        '0HH' => 'E02001012',
        '0HJ' => 'E02001012',
        '0HL' => 'E02001012',
        '0HN' => 'E02001012',
        '0HP' => 'E02001012',
        '0HQ' => 'E02001012',
        '0HR' => 'E02001012',
        '0HS' => 'E02001012',
        '0HT' => 'E02001012',
        '0HU' => 'E02001012',
        '0HW' => 'E02001012',
        '0HX' => 'E02001012',
        '0HY' => 'E02001012',
        '0HZ' => 'E02001012',
        '0JA' => 'E02001012',
        '0JB' => 'E02001012',
        '0JD' => 'E02001012',
        '0JE' => 'E02001012',
        '0JF' => 'E02001012',
        '0JG' => 'E02001012',
        '0JH' => 'E02001012',
        '0JJ' => 'E02001012',
        '0JL' => 'E02001012',
        '0JP' => 'E02001012',
        '0JQ' => 'E02001012',
        '0JR' => 'E02001012',
        '0JT' => 'E02001012',
        '0JU' => 'E02001012',
        '0JW' => 'E02001009',
        '0JX' => 'E02001012',
        '0JY' => 'E02001012',
        '0JZ' => 'E02001012',
        '0LA' => 'E02001012',
        '0LB' => 'E02001012',
        '0LD' => 'E02001016',
        '0LE' => 'E02001016',
        '0LF' => 'E02001009',
        '0LG' => 'E02001009',
        '0LH' => 'E02001009',
        '0LJ' => 'E02001009',
        '0LL' => 'E02001009',
        '0LN' => 'E02001009',
        '0LP' => 'E02001009',
        '0LQ' => 'E02001009',
        '0LR' => 'E02001009',
        '0LS' => 'E02000990',
        '0LT' => 'E02001012',
        '0LU' => 'E02001012',
        '0LW' => 'E02001009',
        '0LX' => 'E02001012',
        '0LY' => 'E02001012',
        '0LZ' => 'E02001012',
        '0NA' => 'E02001012',
        '0NB' => 'E02001012',
        '0ND' => 'E02001012',
        '0NE' => 'E02001012',
        '0NF' => 'E02001012',
        '0NG' => 'E02001012',
        '0NH' => 'E02001012',
        '0NJ' => 'E02001012',
        '0NL' => 'E02001012',
        '0NN' => 'E02001009',
        '0NP' => 'E02001016',
        '0NQ' => 'E02001012',
        '0NR' => 'E02001016',
        '0NS' => 'E02001016',
        '0NT' => 'E02001012',
        '0NU' => 'E02001012',
        '0NW' => 'E02001016',
        '0NX' => 'E02001016',
        '0NY' => 'E02001012',
        '0NZ' => 'E02001012',
        '0PA' => 'E02001012',
        '0PB' => 'E02001012',
        '0PD' => 'E02001016',
        '0PE' => 'E02001016',
        '0PF' => 'E02001016',
        '0PG' => 'E02001016',
        '0PH' => 'E02001016',
        '0PJ' => 'E02001016',
        '0PL' => 'E02001016',
        '0PP' => 'E02001016',
        '0PQ' => 'E02001016',
        '0PR' => 'E02001016',
        '0PS' => 'E02001016',
        '0PT' => 'E02001016',
        '0PU' => 'E02001016',
        '0PX' => 'E02001016',
        '0PY' => 'E02001016',
        '0PZ' => 'E02001016',
        '0QA' => 'E02001016',
        '0QB' => 'E02001016',
        '0QD' => 'E02001016',
        '0QE' => 'E02001016',
        '0QF' => 'E02001016',
        '0QG' => 'E02001016',
        '0QH' => 'E02001016',
        '0QJ' => 'E02001016',
        '0QL' => 'E02001016',
        '0QN' => 'E02001016',
        '0QP' => 'E02001016',
        '0QQ' => 'E02001016',
        '0QR' => 'E02001016',
        '0QS' => 'E02001016',
        '0QT' => 'E02001016',
        '0QU' => 'E02001016',
        '0QW' => 'E02001016',
        '0QX' => 'E02001016',
        '0QY' => 'E02001016',
        '0QZ' => 'E02001016',
        '0RA' => 'E02001016',
        '0RB' => 'E02001016',
        '0RD' => 'E02001016',
        '0RE' => 'E02001016',
        '0RF' => 'E02001016',
        '0RG' => 'E02001016',
        '0RH' => 'E02001016',
        '0RJ' => 'E02001016',
        '0RL' => 'E02001016',
        '0RN' => 'E02001016',
        '0RP' => 'E02001016',
        '0RQ' => 'E02001016',
        '0RR' => 'E02001016',
        '0RS' => 'E02001016',
        '0RX' => 'E02001016',
        '0RZ' => 'E02001016',
        '0WA' => 'E02001016',
        '0WU' => 'E02001017',
        '0WW' => 'E02001017',
        '0WX' => 'E02001017',
        '0WY' => 'E02001017',
        '0WZ' => 'E02001016',
        '0YU' => 'E02000999',
        '0YW' => 'E02000999',
        '0YX' => 'E02000999',
        '0YY' => 'E02000999',
        '0ZW' => 'E02000990',
        '0ZY' => 'E02001017',
        '4AA' => 'E02001017',
        '4AB' => 'E02001017',
        '4AD' => 'E02001017',
        '4AE' => 'E02001017',
        '4AF' => 'E02000990',
        '4AH' => 'E02001017',
        '4AJ' => 'E02000990',
        '4AL' => 'E02001017',
        '4AN' => 'E02001017',
        '4AP' => 'E02000990',
        '4AQ' => 'E02000990',
        '4AR' => 'E02000990',
        '4AS' => 'E02000990',
        '4AT' => 'E02000990',
        '4AU' => 'E02000990',
        '4AW' => 'E02000990',
        '4AX' => 'E02000990',
        '7AA' => 'E02001015',
        '7AB' => 'E02001015',
        '7AD' => 'E02001015',
        '7AE' => 'E02001010',
        '7AF' => 'E02001015',
        '7AG' => 'E02001015',
        '7AH' => 'E02001015',
        '7AJ' => 'E02001015',
        '7AL' => 'E02001015',
        '7AN' => 'E02001015',
        '7AP' => 'E02001015',
        '7AQ' => 'E02001015',
        '7AR' => 'E02001015',
        '7AS' => 'E02001015',
        '7AT' => 'E02001010',
        '7AU' => 'E02001015',
        '7AW' => 'E02001015',
        '7AX' => 'E02001015',
        '7AY' => 'E02001015',
        '7AZ' => 'E02001015',
        '7BA' => 'E02001015',
        '7BB' => 'E02001015',
        '7BD' => 'E02001015',
        '7BE' => 'E02001015',
        '7BG' => 'E02001015',
        '7BH' => 'E02001015',
        '7BJ' => 'E02001015',
        '7BL' => 'E02001015',
        '7BN' => 'E02001015',
        '7BP' => 'E02001015',
        '7BQ' => 'E02001015',
        '7BR' => 'E02001015',
        '7BS' => 'E02001015',
        '7BT' => 'E02001015',
        '7BU' => 'E02001015',
        '7BW' => 'E02001015',
        '7BX' => 'E02001015',
        '7BY' => 'E02001015',
        '7BZ' => 'E02001015',
        '7DA' => 'E02001015',
        '7DB' => 'E02001015',
        '7DD' => 'E02001015',
        '7DE' => 'E02001015',
        '7DF' => 'E02001015',
        '7DG' => 'E02001015',
        '7DH' => 'E02001015',
        '7DJ' => 'E02001015',
        '7DL' => 'E02001015',
        '7DN' => 'E02001015',
        '7DP' => 'E02001015',
        '7DQ' => 'E02001015',
        '7DR' => 'E02001015',
        '7DS' => 'E02001015',
        '7DT' => 'E02001015',
        '7DU' => 'E02001015',
        '7DW' => 'E02001015',
        '7DX' => 'E02001015',
        '7DY' => 'E02001015',
        '7DZ' => 'E02001015',
        '7EA' => 'E02001010',
        '7EB' => 'E02001010',
        '7ED' => 'E02001010',
        '7EE' => 'E02001015',
        '7EF' => 'E02001015',
        '7EG' => 'E02001010',
        '7EH' => 'E02001010',
        '7EJ' => 'E02001010',
        '7EL' => 'E02001010',
        '7EN' => 'E02001010',
        '7EP' => 'E02001015',
        '7EQ' => 'E02001015',
        '7ER' => 'E02001010',
        '7ES' => 'E02001015',
        '7ET' => 'E02001010',
        '7EU' => 'E02001010',
        '7EW' => 'E02001015',
        '7EX' => 'E02001010',
        '7EY' => 'E02001010',
        '7EZ' => 'E02001010',
        '7FA' => 'E02001010',
        '7FB' => 'E02000999',
        '7FD' => 'E02000999',
        '7FE' => 'E02001010',
        '7FF' => 'E02000999',
        '7FG' => 'E02001010',
        '7FH' => 'E02000999',
        '7FJ' => 'E02001010',
        '7FL' => 'E02001010',
        '7FN' => 'E02001010',
        '7FP' => 'E02001010',
        '7FQ' => 'E02000990',
        '7FR' => 'E02001017',
        '7FS' => 'E02001010',
        '7FT' => 'E02000999',
        '7FU' => 'E02001015',
        '7FW' => 'E02001017',
        '7GA' => 'E02001010',
        '7HA' => 'E02001015',
        '7HB' => 'E02001010',
        '7HD' => 'E02001015',
        '7HE' => 'E02001010',
        '7HF' => 'E02001015',
        '7HG' => 'E02001010',
        '7HH' => 'E02001010',
        '7HJ' => 'E02001010',
        '7HL' => 'E02001010',
        '7HN' => 'E02001010',
        '7HP' => 'E02001010',
        '7HQ' => 'E02001010',
        '7HR' => 'E02001010',
        '7HS' => 'E02001012',
        '7HT' => 'E02001010',
        '7HU' => 'E02001010',
        '7HW' => 'E02001010',
        '7HX' => 'E02001010',
        '7HY' => 'E02001010',
        '7HZ' => 'E02001010',
        '7JA' => 'E02001010',
        '7JB' => 'E02001010',
        '7JD' => 'E02001010',
        '7JE' => 'E02001010',
        '7JF' => 'E02001015',
        '7JG' => 'E02001010',
        '7JH' => 'E02001015',
        '7JJ' => 'E02001010',
        '7JL' => 'E02001010',
        '7JN' => 'E02001010',
        '7JP' => 'E02001010',
        '7JQ' => 'E02001010',
        '7JR' => 'E02001010',
        '7JS' => 'E02001010',
        '7JT' => 'E02001010',
        '7JU' => 'E02001010',
        '7JW' => 'E02001010',
        '7JX' => 'E02001010',
        '7JY' => 'E02001010',
        '7JZ' => 'E02001010',
        '7LA' => 'E02001010',
        '7LB' => 'E02001010',
        '7LD' => 'E02001010',
        '7LE' => 'E02001010',
        '7LF' => 'E02001010',
        '7LG' => 'E02001010',
        '7LH' => 'E02001010',
        '7LJ' => 'E02001010',
        '7LN' => 'E02001010',
        '7LP' => 'E02001010',
        '7LQ' => 'E02001010',
        '7LS' => 'E02001010',
        '7LT' => 'E02001010',
        '7LW' => 'E02001010',
        '7LX' => 'E02001010',
        '7LZ' => 'E02001010',
        '7NA' => 'E02001010',
        '7NF' => 'E02001010',
        '7NG' => 'E02001010',
        '7NH' => 'E02001010',
        '7NJ' => 'E02001010',
        '7NL' => 'E02001010',
        '7NN' => 'E02001015',
        '7NP' => 'E02001010',
        '7NQ' => 'E02001010',
        '7NR' => 'E02001010',
        '7NS' => 'E02001015',
        '7NT' => 'E02001015',
        '7NW' => 'E02001010',
        '7NX' => 'E02001010',
        '7NY' => 'E02001015',
        '7PA' => 'E02001015',
        '7PB' => 'E02001010',
        '7PD' => 'E02001010',
        '7PE' => 'E02001015',
        '7PF' => 'E02001015',
        '7PG' => 'E02001010',
        '7PH' => 'E02001010',
        '7PJ' => 'E02001010',
        '7PL' => 'E02001010',
        '7PN' => 'E02001010',
        '7PP' => 'E02001010',
        '7PQ' => 'E02001010',
        '7PR' => 'E02001010',
        '7PS' => 'E02001010',
        '7PW' => 'E02001010',
        '7PY' => 'E02001010',
        '7QB' => 'E02001010',
        '7QD' => 'E02001015',
        '7QE' => 'E02001010',
        '7QF' => 'E02001010',
        '7QG' => 'E02001010',
        '7QH' => 'E02001015',
        '7QJ' => 'E02001015',
        '7QL' => 'E02001015',
        '7QN' => 'E02001010',
        '7QQ' => 'E02001010',
        '7QR' => 'E02001015',
        '7QS' => 'E02001010',
        '7QT' => 'E02001015',
        '7QU' => 'E02001010',
        '7QX' => 'E02001010',
        '7QY' => 'E02001015',
        '7QZ' => 'E02001015',
        '7RA' => 'E02001015',
        '7RB' => 'E02001010',
        '7RD' => 'E02001010',
        '7RE' => 'E02001015',
        '7RF' => 'E02001015',
        '7RG' => 'E02001010',
        '7RH' => 'E02001010',
        '7RJ' => 'E02001010',
        '7RL' => 'E02001010',
        '7RP' => 'E02001010',
        '7RQ' => 'E02001015',
        '7RR' => 'E02001015',
        '7RS' => 'E02001010',
        '7RT' => 'E02001010',
        '7RU' => 'E02001010',
        '7RW' => 'E02001010',
        '7RX' => 'E02001010',
        '7RY' => 'E02001010',
        '7RZ' => 'E02001010',
        '7SA' => 'E02001010',
        '7SB' => 'E02001010',
        '7SD' => 'E02001010',
        '7SE' => 'E02001010',
        '7SF' => 'E02001010',
        '7SG' => 'E02001010',
        '7SH' => 'E02001010',
        '7SJ' => 'E02001010',
        '7SL' => 'E02001010',
        '7SN' => 'E02001010',
        '7SP' => 'E02001015',
        '7SR' => 'E02001015',
        '7SS' => 'E02001015',
        '7ST' => 'E02001015',
        '7SU' => 'E02001015',
        '7SX' => 'E02001015',
        '7TA' => 'E02001010',
        '7TB' => 'E02001010',
        '7TD' => 'E02001010',
        '7TE' => 'E02001010',
        '7TF' => 'E02001010',
        '7TG' => 'E02001010',
        '7TH' => 'E02001010',
        '7TJ' => 'E02001010',
        '7TP' => 'E02001010',
        '7TQ' => 'E02001010',
        '7TR' => 'E02001010',
        '7TS' => 'E02001010',
        '7TT' => 'E02001010',
        '7TU' => 'E02001010',
        '7TW' => 'E02001010',
        '7TX' => 'E02001010',
        '7TY' => 'E02001010',
        '7TZ' => 'E02001010',
        '7UA' => 'E02001015',
        '7UD' => 'E02001015',
        '7UE' => 'E02001015',
        '7UF' => 'E02001015',
        '7UG' => 'E02001015',
        '7UQ' => 'E02001015',
        '7WT' => 'E02001017',
        '7WU' => 'E02001015',
        '7WW' => 'E02001015',
        '7WX' => 'E02001015',
        '7WY' => 'E02001015',
        '7WZ' => 'E02001015',
        '7XA' => 'E02001015',
        '7XB' => 'E02001017',
        '7XD' => 'E02001017',
        '8AA' => 'E02001015',
        '8AB' => 'E02001010',
        '8AD' => 'E02001015',
        '8AE' => 'E02001015',
        '8AF' => 'E02001015',
        '8AG' => 'E02001010',
        '8AH' => 'E02001017',
        '8AJ' => 'E02001015',
        '8AL' => 'E02001015',
        '8AN' => 'E02001015',
        '8AP' => 'E02001015',
        '8AQ' => 'E02001015',
        '8AR' => 'E02001015',
        '8AS' => 'E02001015',
        '8AT' => 'E02001015',
        '8AU' => 'E02001015',
        '8AW' => 'E02001015',
        '8AX' => 'E02001015',
        '8AY' => 'E02001015',
        '8AZ' => 'E02001015',
        '8BA' => 'E02001015',
        '8BB' => 'E02001015',
        '8BD' => 'E02001015',
        '8BE' => 'E02001015',
        '8BF' => 'E02001015',
        '8BG' => 'E02001015',
        '8BH' => 'E02001015',
        '8BJ' => 'E02001015',
        '8BL' => 'E02001015',
        '8BN' => 'E02001015',
        '8BP' => 'E02001015',
        '8BQ' => 'E02001015',
        '8BR' => 'E02001015',
        '8BS' => 'E02001015',
        '8BT' => 'E02001015',
        '8BU' => 'E02001015',
        '8BW' => 'E02001015',
        '8BX' => 'E02001015',
        '8BY' => 'E02001015',
        '8BZ' => 'E02001015',
        '8DA' => 'E02001015',
        '8DB' => 'E02001015',
        '8DD' => 'E02001017',
        '8DE' => 'E02001015',
        '8DF' => 'E02001017',
        '8DG' => 'E02001017',
        '8DH' => 'E02001017',
        '8DJ' => 'E02001017',
        '8DL' => 'E02001017',
        '8DN' => 'E02001017',
        '8DP' => 'E02001015',
        '8DQ' => 'E02001017',
        '8DR' => 'E02001017',
        '8DS' => 'E02001017',
        '8DT' => 'E02001017',
        '8DU' => 'E02001017',
        '8DW' => 'E02001017',
        '8DX' => 'E02001017',
        '8DY' => 'E02001017',
        '8DZ' => 'E02001017',
        '8EA' => 'E02001017',
        '8EB' => 'E02001017',
        '8ED' => 'E02001017',
        '8EE' => 'E02001015',
        '8EF' => 'E02001017',
        '8EG' => 'E02001017',
        '8EH' => 'E02001017',
        '8EJ' => 'E02001017',
        '8EL' => 'E02001017',
        '8EN' => 'E02001017',
        '8EP' => 'E02001017',
        '8EQ' => 'E02001015',
        '8EU' => 'E02001015',
        '8EW' => 'E02001017',
        '8EX' => 'E02001015',
        '8EY' => 'E02001015',
        '8EZ' => 'E02001015',
        '8FA' => 'E02001017',
        '8FB' => 'E02001017',
        '8FD' => 'E02001015',
        '8FE' => 'E02000999',
        '8FF' => 'E02000999',
        '8FG' => 'E02000999',
        '8GZ' => 'E02001017',
        '8HA' => 'E02001015',
        '8HB' => 'E02001015',
        '8HD' => 'E02001015',
        '8HF' => 'E02001015',
        '8HG' => 'E02001015',
        '8HJ' => 'E02001015',
        '8HL' => 'E02001015',
        '8HN' => 'E02001015',
        '8HP' => 'E02001015',
        '8HQ' => 'E02001015',
        '8HR' => 'E02001015',
        '8HS' => 'E02001017',
        '8HT' => 'E02001017',
        '8HU' => 'E02001017',
        '8HW' => 'E02001015',
        '8HY' => 'E02001017',
        '8HZ' => 'E02001017',
        '8JA' => 'E02001017',
        '8JB' => 'E02001017',
        '8JD' => 'E02001017',
        '8JE' => 'E02001017',
        '8JF' => 'E02001017',
        '8JG' => 'E02001017',
        '8JH' => 'E02001017',
        '8JL' => 'E02001017',
        '8JN' => 'E02001017',
        '8JP' => 'E02001017',
        '8JQ' => 'E02001017',
        '8JR' => 'E02001017',
        '8JS' => 'E02001017',
        '8JT' => 'E02001017',
        '8JU' => 'E02001017',
        '8JW' => 'E02001017',
        '8JX' => 'E02001017',
        '8JY' => 'E02001017',
        '8JZ' => 'E02001017',
        '8LA' => 'E02001017',
        '8LB' => 'E02001017',
        '8LD' => 'E02001017',
        '8LE' => 'E02001017',
        '8LF' => 'E02001017',
        '8LG' => 'E02001017',
        '8LH' => 'E02001017',
        '8LJ' => 'E02001017',
        '8LL' => 'E02001017',
        '8LN' => 'E02001017',
        '8LP' => 'E02001017',
        '8LQ' => 'E02001017',
        '8LR' => 'E02001017',
        '8LS' => 'E02001017',
        '8LT' => 'E02001017',
        '8LU' => 'E02001017',
        '8LW' => 'E02001017',
        '8LX' => 'E02001017',
        '8LY' => 'E02001017',
        '8LZ' => 'E02001017',
        '8NA' => 'E02001017',
        '8NB' => 'E02001017',
        '8ND' => 'E02001017',
        '8NE' => 'E02001017',
        '8NF' => 'E02001017',
        '8NG' => 'E02001017',
        '8NH' => 'E02001017',
        '8NJ' => 'E02001017',
        '8NL' => 'E02001017',
        '8NN' => 'E02001017',
        '8NP' => 'E02001017',
        '8NQ' => 'E02001017',
        '8NR' => 'E02001017',
        '8NS' => 'E02001017',
        '8NT' => 'E02001017',
        '8NU' => 'E02001017',
        '8NW' => 'E02001017',
        '8NX' => 'E02001017',
        '8NY' => 'E02001017',
        '8NZ' => 'E02001017',
        '8PA' => 'E02001017',
        '8PB' => 'E02001017',
        '8PD' => 'E02001017',
        '8PE' => 'E02001017',
        '8PF' => 'E02001017',
        '8PG' => 'E02001017',
        '8PH' => 'E02001017',
        '8PJ' => 'E02001017',
        '8PL' => 'E02001017',
        '8PN' => 'E02001017',
        '8PP' => 'E02001017',
        '8PQ' => 'E02001017',
        '8PR' => 'E02001017',
        '8PS' => 'E02001017',
        '8PT' => 'E02001017',
        '8PU' => 'E02001017',
        '8PW' => 'E02001017',
        '8PX' => 'E02001017',
        '8PY' => 'E02001017',
        '8PZ' => 'E02001017',
        '8QA' => 'E02001017',
        '8QB' => 'E02001017',
        '8QD' => 'E02001017',
        '8QE' => 'E02001017',
        '8QG' => 'E02001017',
        '8QH' => 'E02001017',
        '8QJ' => 'E02001017',
        '8QL' => 'E02001017',
        '8QN' => 'E02001017',
        '8QP' => 'E02001017',
        '8QQ' => 'E02001017',
        '8QR' => 'E02001017',
        '8QS' => 'E02001017',
        '8QT' => 'E02001017',
        '8QU' => 'E02001017',
        '8QW' => 'E02001017',
        '8QX' => 'E02001017',
        '8QZ' => 'E02001017',
        '8RA' => 'E02001017',
        '8RB' => 'E02001017',
        '8RD' => 'E02001017',
        '8RE' => 'E02001017',
        '8RF' => 'E02001017',
        '8RG' => 'E02001017',
        '8RH' => 'E02001017',
        '8RL' => 'E02001017',
        '8RN' => 'E02001017',
        '8RP' => 'E02001017',
        '8RQ' => 'E02001017',
        '8RR' => 'E02001017',
        '8RS' => 'E02001017',
        '8RT' => 'E02001017',
        '8RU' => 'E02001017',
        '8RW' => 'E02001017',
        '8RX' => 'E02001017',
        '8RY' => 'E02001017',
        '8RZ' => 'E02001017',
        '8SA' => 'E02001017',
        '8SB' => 'E02001017',
        '8SD' => 'E02001017',
        '8SE' => 'E02001017',
        '8SF' => 'E02001017',
        '8SG' => 'E02001017',
        '8SH' => 'E02001017',
        '8SJ' => 'E02001017',
        '8SL' => 'E02001017',
        '8SN' => 'E02001017',
        '8SP' => 'E02001017',
        '8SX' => 'E02001017',
        '8SY' => 'E02001017',
        '8TA' => 'E02001017',
        '8TB' => 'E02001017',
        '8TD' => 'E02001017',
        '8TE' => 'E02001017',
        '8TF' => 'E02001017',
        '8TG' => 'E02001017',
        '8TH' => 'E02001017',
        '8TJ' => 'E02001017',
        '8TL' => 'E02001017',
        '8TN' => 'E02001017',
        '8TP' => 'E02001017',
        '8TQ' => 'E02001017',
        '8TR' => 'E02001017',
        '8TS' => 'E02001017',
        '8TT' => 'E02001017',
        '8TU' => 'E02001017',
        '8TW' => 'E02001017',
        '8TX' => 'E02001017',
        '8TY' => 'E02001017',
        '8TZ' => 'E02001017',
        '8UA' => 'E02000999',
        '8US' => 'E02001017',
        '8WA' => 'E02001017',
        '8WU' => 'E02001017',
        '8WW' => 'E02000999',
        '8WX' => 'E02001017',
        '8WY' => 'E02001017',
        '8WZ' => 'E02000999',
        '8YU' => 'E02000999',
        '8YW' => 'E02000999',
        '8YX' => 'E02000999',
        '8YY' => 'E02001017',
        '9AA' => 'E02001015',
        '9AB' => 'E02001015',
        '9AD' => 'E02001015',
        '9AE' => 'E02001015',
        '9AF' => 'E02001015',
        '9AG' => 'E02001015',
        '9AH' => 'E02001015',
        '9AJ' => 'E02001015',
        '9AL' => 'E02001015',
        '9AN' => 'E02001015',
        '9AP' => 'E02001015',
        '9AQ' => 'E02001015',
        '9AR' => 'E02001015',
        '9AS' => 'E02001015',
        '9AT' => 'E02001015',
        '9AU' => 'E02001015',
        '9AW' => 'E02001015',
        '9AX' => 'E02001015',
        '9AY' => 'E02001015',
        '9AZ' => 'E02001015',
        '9BA' => 'E02001015',
        '9BB' => 'E02001015',
        '9BD' => 'E02001015',
        '9BE' => 'E02001015',
        '9BF' => 'E02001015',
        '9BG' => 'E02001015',
        '9BH' => 'E02001015',
        '9BJ' => 'E02001015',
        '9BL' => 'E02001015',
        '9BN' => 'E02001015',
        '9BP' => 'E02001015',
        '9BQ' => 'E02001015',
        '9BR' => 'E02001015',
        '9BS' => 'E02001015',
        '9BT' => 'E02001015',
        '9BU' => 'E02001017',
        '9BW' => 'E02001015',
        '9BX' => 'E02001017',
        '9BY' => 'E02001017',
        '9BZ' => 'E02001015',
        '9DA' => 'E02001015',
        '9DB' => 'E02001015',
        '9DD' => 'E02001015',
        '9DE' => 'E02001015',
        '9DF' => 'E02001015',
        '9DG' => 'E02001015',
        '9DH' => 'E02001015',
        '9DJ' => 'E02001015',
        '9DL' => 'E02001015',
        '9DN' => 'E02001015',
        '9DP' => 'E02001015',
        '9DQ' => 'E02001015',
        '9DR' => 'E02001015',
        '9DS' => 'E02001015',
        '9DT' => 'E02001015',
        '9DU' => 'E02001015',
        '9DW' => 'E02001015',
        '9DX' => 'E02001015',
        '9DY' => 'E02001015',
        '9DZ' => 'E02001015',
        '9EA' => 'E02001015',
        '9EB' => 'E02001015',
        '9ED' => 'E02001015',
        '9EE' => 'E02001015',
        '9EF' => 'E02001015',
        '9EG' => 'E02001015',
        '9EH' => 'E02001015',
        '9EJ' => 'E02001015',
        '9EL' => 'E02001015',
        '9EN' => 'E02001015',
        '9EP' => 'E02001015',
        '9EQ' => 'E02001015',
        '9ER' => 'E02001015',
        '9ES' => 'E02001015',
        '9ET' => 'E02001015',
        '9EU' => 'E02001015',
        '9EW' => 'E02001015',
        '9EX' => 'E02001015',
        '9EY' => 'E02001015',
        '9EZ' => 'E02001015',
        '9FA' => 'E02001015',
        '9FB' => 'E02001015',
        '9FD' => 'E02001015',
        '9FE' => 'E02001015',
        '9FF' => 'E02001015',
        '9FG' => 'E02001015',
        '9FH' => 'E02001015',
        '9FJ' => 'E02000999',
        '9FL' => 'E02001017',
        '9FN' => 'E02001015',
        '9FP' => 'E02001016',
        '9FQ' => 'E02001016',
        '9HA' => 'E02001015',
        '9HB' => 'E02001015',
        '9HD' => 'E02001015',
        '9HE' => 'E02001015',
        '9HF' => 'E02001015',
        '9HG' => 'E02001015',
        '9HH' => 'E02001015',
        '9HJ' => 'E02001015',
        '9HL' => 'E02001015',
        '9HN' => 'E02001015',
        '9HP' => 'E02001015',
        '9HQ' => 'E02001015',
        '9HR' => 'E02001015',
        '9HS' => 'E02001015',
        '9HT' => 'E02001015',
        '9HU' => 'E02001015',
        '9HW' => 'E02001015',
        '9HX' => 'E02001015',
        '9HY' => 'E02001015',
        '9HZ' => 'E02001015',
        '9JA' => 'E02001015',
        '9JB' => 'E02001016',
        '9JD' => 'E02001015',
        '9JE' => 'E02001015',
        '9JF' => 'E02001015',
        '9JG' => 'E02001015',
        '9JH' => 'E02001015',
        '9JJ' => 'E02001015',
        '9JL' => 'E02001015',
        '9JN' => 'E02001015',
        '9JP' => 'E02001015',
        '9JQ' => 'E02001015',
        '9JR' => 'E02001015',
        '9JS' => 'E02001015',
        '9JT' => 'E02001015',
        '9JU' => 'E02001015',
        '9JW' => 'E02001015',
        '9JX' => 'E02001015',
        '9JY' => 'E02001015',
        '9JZ' => 'E02001015',
        '9LA' => 'E02001015',
        '9LB' => 'E02001015',
        '9LD' => 'E02001015',
        '9LE' => 'E02001015',
        '9LF' => 'E02001015',
        '9LG' => 'E02001015',
        '9LH' => 'E02001015',
        '9LJ' => 'E02001015',
        '9LL' => 'E02001015',
        '9LN' => 'E02001016',
        '9LP' => 'E02001015',
        '9LQ' => 'E02001015',
        '9LR' => 'E02001015',
        '9LS' => 'E02001015',
        '9LT' => 'E02001016',
        '9LU' => 'E02001015',
        '9LW' => 'E02001159',
        '9LX' => 'E02001016',
        '9LY' => 'E02001016',
        '9LZ' => 'E02001016',
        '9NA' => 'E02001016',
        '9NB' => 'E02001016',
        '9ND' => 'E02001016',
        '9NE' => 'E02001015',
        '9NF' => 'E02001015',
        '9NG' => 'E02001015',
        '9NH' => 'E02001016',
        '9NJ' => 'E02001015',
        '9NL' => 'E02001015',
        '9NN' => 'E02001017',
        '9NP' => 'E02001015',
        '9NQ' => 'E02001015',
        '9NR' => 'E02001015',
        '9NS' => 'E02001015',
        '9NT' => 'E02001015',
        '9NU' => 'E02001015',
        '9NW' => 'E02001016',
        '9NX' => 'E02001015',
        '9NY' => 'E02001015',
        '9NZ' => 'E02001015',
        '9PA' => 'E02001015',
        '9PB' => 'E02001015',
        '9PD' => 'E02001015',
        '9PE' => 'E02001016',
        '9PF' => 'E02001016',
        '9PG' => 'E02001016',
        '9PH' => 'E02001016',
        '9PJ' => 'E02001016',
        '9PL' => 'E02001016',
        '9PN' => 'E02001016',
        '9PP' => 'E02001016',
        '9PQ' => 'E02001016',
        '9PR' => 'E02001016',
        '9PS' => 'E02001016',
        '9PT' => 'E02001016',
        '9PU' => 'E02001016',
        '9PW' => 'E02001016',
        '9PX' => 'E02001016',
        '9PY' => 'E02001016',
        '9PZ' => 'E02001016',
        '9QA' => 'E02001016',
        '9QB' => 'E02001016',
        '9QD' => 'E02001016',
        '9QE' => 'E02001015',
        '9QF' => 'E02001015',
        '9QG' => 'E02001015',
        '9QH' => 'E02001016',
        '9QJ' => 'E02001016',
        '9QL' => 'E02001015',
        '9QN' => 'E02001015',
        '9QP' => 'E02001015',
        '9QQ' => 'E02001015',
        '9QR' => 'E02001016',
        '9QS' => 'E02001016',
        '9QT' => 'E02001016',
        '9QU' => 'E02001016',
        '9QW' => 'E02001016',
        '9QX' => 'E02001016',
        '9QY' => 'E02001015',
        '9QZ' => 'E02001015',
        '9RA' => 'E02001016',
        '9RB' => 'E02001016',
        '9RD' => 'E02001016',
        '9RE' => 'E02001016',
        '9RF' => 'E02001016',
        '9RG' => 'E02001016',
        '9RH' => 'E02001016',
        '9RJ' => 'E02001016',
        '9RL' => 'E02001016',
        '9RN' => 'E02001016',
        '9RP' => 'E02001016',
        '9RQ' => 'E02001016',
        '9RR' => 'E02001016',
        '9RS' => 'E02001016',
        '9RT' => 'E02001017',
        '9RU' => 'E02001016',
        '9RW' => 'E02001016',
        '9RX' => 'E02001016',
        '9RY' => 'E02001012',
        '9RZ' => 'E02001012',
        '9SA' => 'E02001012',
        '9SB' => 'E02001012',
        '9SD' => 'E02001012',
        '9SE' => 'E02001016',
        '9SF' => 'E02001015',
        '9SG' => 'E02001016',
        '9SH' => 'E02001016',
        '9SJ' => 'E02001016',
        '9SL' => 'E02001016',
        '9SN' => 'E02001016',
        '9SP' => 'E02001016',
        '9SQ' => 'E02001016',
        '9SR' => 'E02001016',
        '9SS' => 'E02001016',
        '9ST' => 'E02001016',
        '9SU' => 'E02001016',
        '9SW' => 'E02001016',
        '9SX' => 'E02001016',
        '9SY' => 'E02001016',
        '9SZ' => 'E02001016',
        '9TA' => 'E02001016',
        '9TB' => 'E02001016',
        '9TD' => 'E02001016',
        '9TE' => 'E02001016',
        '9TF' => 'E02001016',
        '9TL' => 'E02001015',
        '9TN' => 'E02001015',
        '9TP' => 'E02001015',
        '9TQ' => 'E02001017',
        '9TR' => 'E02001015',
        '9WU' => 'E02001017',
        '9WW' => 'E02001017',
        '9WX' => 'E02001017',
        '9WY' => 'E02000990',
        '9WZ' => 'E02000990',
        '9XB' => 'E02000999',
        '9XL' => 'E02000990',
        '9XX' => 'E02001017',
        '9XY' => 'E02001017',
        '9XZ' => 'E02001015',
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
