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
final class CV35
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006508',
        '0AB' => 'E02006516',
        '0AD' => 'E02006516',
        '0AE' => 'E02006508',
        '0AF' => 'E02006516',
        '0AG' => 'E02006516',
        '0AH' => 'E02006516',
        '0AJ' => 'E02006516',
        '0AL' => 'E02006516',
        '0AN' => 'E02006516',
        '0AP' => 'E02006516',
        '0AQ' => 'E02006516',
        '0AR' => 'E02006516',
        '0AS' => 'E02006516',
        '0AT' => 'E02006516',
        '0AU' => 'E02006516',
        '0AW' => 'E02006516',
        '0AX' => 'E02006516',
        '0AY' => 'E02006516',
        '0AZ' => 'E02006516',
        '0BA' => 'E02006516',
        '0BB' => 'E02006516',
        '0BD' => 'E02006516',
        '0BE' => 'E02006516',
        '0BF' => 'E02006516',
        '0BG' => 'E02006516',
        '0BH' => 'E02006516',
        '0BJ' => 'E02006516',
        '0BL' => 'E02006516',
        '0BN' => 'E02006516',
        '0BP' => 'E02006516',
        '0BQ' => 'E02006516',
        '0BS' => 'E02006516',
        '0BT' => 'E02006516',
        '0BU' => 'E02006516',
        '0BW' => 'E02006516',
        '0BX' => 'E02006516',
        '0BY' => 'E02006516',
        '0BZ' => 'E02006516',
        '0DB' => 'E02006516',
        '0DD' => 'E02006516',
        '0DE' => 'E02006516',
        '0DF' => 'E02006516',
        '0DG' => 'E02006516',
        '0DH' => 'E02006516',
        '0DJ' => 'E02006516',
        '0DL' => 'E02006516',
        '0DN' => 'E02006516',
        '0DP' => 'E02006516',
        '0DQ' => 'E02006516',
        '0DR' => 'E02006516',
        '0DS' => 'E02006516',
        '0DT' => 'E02006516',
        '0DU' => 'E02006516',
        '0DW' => 'E02006516',
        '0DX' => 'E02006516',
        '0DY' => 'E02006516',
        '0DZ' => 'E02006516',
        '0EA' => 'E02006516',
        '0EB' => 'E02006516',
        '0ED' => 'E02006516',
        '0EE' => 'E02006516',
        '0EF' => 'E02006516',
        '0EG' => 'E02006516',
        '0EH' => 'E02006516',
        '0EJ' => 'E02006516',
        '0EL' => 'E02006516',
        '0EN' => 'E02006516',
        '0EP' => 'E02006516',
        '0EQ' => 'E02006516',
        '0ER' => 'E02006516',
        '0ES' => 'E02006516',
        '0ET' => 'E02006516',
        '0EU' => 'E02006516',
        '0EW' => 'E02006516',
        '0EX' => 'E02006516',
        '0EY' => 'E02006516',
        '0EZ' => 'E02006516',
        '0FA' => 'E02006516',
        '0FB' => 'E02006516',
        '0FD' => 'E02006516',
        '0FE' => 'E02006516',
        '0FF' => 'E02006516',
        '0FG' => 'E02006516',
        '0FH' => 'E02006516',
        '0FJ' => 'E02006516',
        '0FL' => 'E02006516',
        '0FN' => 'E02006516',
        '0FP' => 'E02006516',
        '0FQ' => 'E02006516',
        '0FR' => 'E02006516',
        '0HA' => 'E02006516',
        '0HB' => 'E02006516',
        '0HD' => 'E02006516',
        '0HE' => 'E02006516',
        '0HF' => 'E02006516',
        '0HG' => 'E02006516',
        '0HH' => 'E02006516',
        '0HJ' => 'E02006516',
        '0HL' => 'E02006516',
        '0HN' => 'E02006516',
        '0HP' => 'E02006516',
        '0HQ' => 'E02006516',
        '0HR' => 'E02006516',
        '0HS' => 'E02006516',
        '0HT' => 'E02006516',
        '0HU' => 'E02006516',
        '0HW' => 'E02006516',
        '0HX' => 'E02006516',
        '0HY' => 'E02006516',
        '0HZ' => 'E02006516',
        '0JA' => 'E02006516',
        '0JB' => 'E02006516',
        '0JD' => 'E02006516',
        '0JE' => 'E02006516',
        '0JF' => 'E02006516',
        '0JG' => 'E02006516',
        '0JH' => 'E02006516',
        '0JJ' => 'E02006516',
        '0JL' => 'E02006516',
        '0JN' => 'E02006516',
        '0JP' => 'E02006516',
        '0JQ' => 'E02006516',
        '0JR' => 'E02006516',
        '0JS' => 'E02006516',
        '0JT' => 'E02006516',
        '0JU' => 'E02006516',
        '0JW' => 'E02006516',
        '0JX' => 'E02006516',
        '0JY' => 'E02006516',
        '0JZ' => 'E02006516',
        '0LA' => 'E02006516',
        '0LB' => 'E02006516',
        '0LD' => 'E02006516',
        '0LE' => 'E02006516',
        '0LF' => 'E02006516',
        '0LG' => 'E02006516',
        '0LH' => 'E02006516',
        '0LJ' => 'E02006516',
        '0LL' => 'E02006516',
        '0LN' => 'E02006516',
        '0LP' => 'E02006516',
        '0LQ' => 'E02006516',
        '0LR' => 'E02006516',
        '0LS' => 'E02006516',
        '0LT' => 'E02006516',
        '0LU' => 'E02006516',
        '0LW' => 'E02006516',
        '0LX' => 'E02006516',
        '0LY' => 'E02006516',
        '0LZ' => 'E02006516',
        '0NA' => 'E02006516',
        '0NB' => 'E02006516',
        '0ND' => 'E02006516',
        '0NE' => 'E02006516',
        '0NF' => 'E02006516',
        '0NG' => 'E02006516',
        '0NH' => 'E02006516',
        '0NJ' => 'E02006516',
        '0NL' => 'E02006516',
        '0NN' => 'E02006516',
        '0NP' => 'E02006516',
        '0NQ' => 'E02006516',
        '0NR' => 'E02006516',
        '0NS' => 'E02006516',
        '0NT' => 'E02006516',
        '0NU' => 'E02006516',
        '0NW' => 'E02006516',
        '0NX' => 'E02006516',
        '0NY' => 'E02006516',
        '0NZ' => 'E02006516',
        '0PA' => 'E02006516',
        '0PB' => 'E02006516',
        '0PD' => 'E02006516',
        '0PE' => 'E02006516',
        '0PF' => 'E02006516',
        '0PG' => 'E02006516',
        '0PH' => 'E02006516',
        '0PJ' => 'E02006516',
        '0PL' => 'E02006516',
        '0PN' => 'E02006516',
        '0PP' => 'E02006516',
        '0PQ' => 'E02006516',
        '0PR' => 'E02006516',
        '0PS' => 'E02006516',
        '0PT' => 'E02006516',
        '0PU' => 'E02006516',
        '0PW' => 'E02006516',
        '0PX' => 'E02006516',
        '0PZ' => 'E02006516',
        '0QA' => 'E02006516',
        '0QB' => 'E02006516',
        '0QD' => 'E02006516',
        '0QE' => 'E02006516',
        '0QF' => 'E02006516',
        '0QH' => 'E02006516',
        '0QJ' => 'E02006516',
        '0QN' => 'E02006516',
        '0QP' => 'E02006516',
        '0QQ' => 'E02006516',
        '0QR' => 'E02006516',
        '0QS' => 'E02006516',
        '0QT' => 'E02006516',
        '0QU' => 'E02006516',
        '0QW' => 'E02006516',
        '0QX' => 'E02006516',
        '0QY' => 'E02006516',
        '0QZ' => 'E02006516',
        '0RA' => 'E02006516',
        '0RB' => 'E02006516',
        '0RD' => 'E02006516',
        '0RE' => 'E02006516',
        '0RF' => 'E02006516',
        '0RG' => 'E02006516',
        '0RH' => 'E02006516',
        '0RJ' => 'E02006516',
        '0RL' => 'E02006516',
        '0RN' => 'E02006516',
        '0RP' => 'E02006516',
        '0RQ' => 'E02006516',
        '0RR' => 'E02006516',
        '0RU' => 'E02006516',
        '0SA' => 'E02006516',
        '0SB' => 'E02006516',
        '0SD' => 'E02006516',
        '0SE' => 'E02006516',
        '0SF' => 'E02006516',
        '0SG' => 'E02006516',
        '0SH' => 'E02006516',
        '0SJ' => 'E02006516',
        '0SL' => 'E02006516',
        '0SN' => 'E02006516',
        '0SP' => 'E02006516',
        '0SQ' => 'E02006516',
        '0SR' => 'E02006516',
        '0SS' => 'E02006516',
        '0ST' => 'E02006516',
        '0SU' => 'E02006516',
        '0SW' => 'E02006516',
        '0SX' => 'E02006516',
        '0SY' => 'E02006516',
        '0SZ' => 'E02006516',
        '0TA' => 'E02006516',
        '0TB' => 'E02006516',
        '0TD' => 'E02006516',
        '0TE' => 'E02006516',
        '0TF' => 'E02006516',
        '0TG' => 'E02006516',
        '0TH' => 'E02006516',
        '0TJ' => 'E02006516',
        '0TL' => 'E02006516',
        '0TN' => 'E02006516',
        '0TP' => 'E02006516',
        '0TQ' => 'E02006516',
        '0TR' => 'E02006516',
        '0TS' => 'E02006516',
        '0TT' => 'E02006516',
        '0TU' => 'E02006516',
        '0TW' => 'E02006516',
        '0TX' => 'E02006516',
        '0TY' => 'E02006516',
        '0UA' => 'E02006516',
        '0UB' => 'E02006516',
        '0UD' => 'E02006518',
        '0UE' => 'E02006516',
        '0UF' => 'E02006516',
        '0UG' => 'E02006516',
        '0UH' => 'E02006516',
        '0UJ' => 'E02006516',
        '0UL' => 'E02006516',
        '0UN' => 'E02006516',
        '0UP' => 'E02006516',
        '0UQ' => 'E02006516',
        '0UT' => 'E02006516',
        '0UU' => 'E02006516',
        '0UX' => 'E02006516',
        '0UY' => 'E02006516',
        '0WA' => 'E02006526',
        '0WB' => 'E02006526',
        '0WD' => 'E02006526',
        '0WN' => 'E02006526',
        '0WP' => 'E02006516',
        '0WQ' => 'E02006526',
        '0WR' => 'E02006526',
        '0WS' => 'E02006526',
        '0WT' => 'E02006516',
        '0WU' => 'E02006526',
        '0WW' => 'E02006526',
        '0WX' => 'E02006526',
        '0WY' => 'E02006526',
        '0XA' => 'E02006526',
        '0XF' => 'E02006526',
        '0XH' => 'E02006526',
        '0XJ' => 'E02006516',
        '0XL' => 'E02006516',
        '0XR' => 'E02006526',
        '0YA' => 'E02006526',
        '0YB' => 'E02006526',
        '0YH' => 'E02006526',
        '0YJ' => 'E02006526',
        '0YL' => 'E02006526',
        '0YN' => 'E02006526',
        '0YP' => 'E02006526',
        '0YQ' => 'E02006526',
        '0YR' => 'E02006526',
        '0YS' => 'E02006526',
        '0YT' => 'E02006526',
        '0YU' => 'E02006526',
        '0YW' => 'E02006526',
        '0YX' => 'E02006526',
        '0YY' => 'E02006516',
        '0YZ' => 'E02006526',
        '0ZA' => 'E02006526',
        '0ZB' => 'E02006526',
        '0ZD' => 'E02006526',
        '0ZE' => 'E02006516',
        '0ZF' => 'E02006516',
        '0ZG' => 'E02006516',
        '0ZH' => 'E02006526',
        '0ZJ' => 'E02006526',
        '0ZL' => 'E02006526',
        '0ZP' => 'E02006526',
        '0ZQ' => 'E02006526',
        '0ZR' => 'E02006526',
        '0ZS' => 'E02006526',
        '0ZU' => 'E02006516',
        '0ZW' => 'E02006516',
        '0ZX' => 'E02006526',
        '0ZY' => 'E02006516',
        '0ZZ' => 'E02006526',
        '7AA' => 'E02006522',
        '7AB' => 'E02006522',
        '7AD' => 'E02006522',
        '7AE' => 'E02006522',
        '7AF' => 'E02006522',
        '7AG' => 'E02006522',
        '7AH' => 'E02006522',
        '7AJ' => 'E02006522',
        '7AL' => 'E02006522',
        '7AN' => 'E02006522',
        '7AP' => 'E02006522',
        '7AQ' => 'E02006522',
        '7AR' => 'E02006522',
        '7AS' => 'E02006522',
        '7AT' => 'E02006522',
        '7AU' => 'E02006522',
        '7AW' => 'E02006522',
        '7AX' => 'E02006522',
        '7AY' => 'E02006522',
        '7AZ' => 'E02006522',
        '7BA' => 'E02006522',
        '7BB' => 'E02006522',
        '7BD' => 'E02006522',
        '7BE' => 'E02006522',
        '7BF' => 'E02006522',
        '7BG' => 'E02006522',
        '7BH' => 'E02006522',
        '7BJ' => 'E02006522',
        '7BL' => 'E02006522',
        '7BN' => 'E02006522',
        '7BP' => 'E02006522',
        '7BQ' => 'E02006522',
        '7BR' => 'E02006522',
        '7BS' => 'E02006522',
        '7BT' => 'E02006522',
        '7BU' => 'E02006522',
        '7BW' => 'E02006522',
        '7BX' => 'E02006522',
        '7BY' => 'E02006522',
        '7BZ' => 'E02006532',
        '7DA' => 'E02006522',
        '7DB' => 'E02006522',
        '7DD' => 'E02006522',
        '7DE' => 'E02006522',
        '7DF' => 'E02006522',
        '7DG' => 'E02006526',
        '7DH' => 'E02006522',
        '7DJ' => 'E02006522',
        '7DL' => 'E02006522',
        '7DN' => 'E02006522',
        '7DP' => 'E02006532',
        '7DQ' => 'E02006522',
        '7DR' => 'E02006532',
        '7DT' => 'E02006532',
        '7DU' => 'E02006532',
        '7DW' => 'E02006526',
        '7DX' => 'E02006532',
        '7DY' => 'E02006532',
        '7DZ' => 'E02006532',
        '7EA' => 'E02006532',
        '7EB' => 'E02006532',
        '7ED' => 'E02006532',
        '7EE' => 'E02006532',
        '7EG' => 'E02006532',
        '7EH' => 'E02006532',
        '7EJ' => 'E02006532',
        '7EL' => 'E02006522',
        '7EP' => 'E02006532',
        '7ER' => 'E02006532',
        '7EU' => 'E02006532',
        '7EW' => 'E02006532',
        '7EX' => 'E02006532',
        '7EY' => 'E02006522',
        '7FD' => 'E02006532',
        '7HA' => 'E02006522',
        '7HB' => 'E02006522',
        '7HD' => 'E02006522',
        '7HF' => 'E02006522',
        '7HG' => 'E02006522',
        '7HH' => 'E02006522',
        '7HJ' => 'E02006522',
        '7HL' => 'E02006522',
        '7HN' => 'E02006522',
        '7HP' => 'E02006532',
        '7HQ' => 'E02006532',
        '7HR' => 'E02006522',
        '7HS' => 'E02006522',
        '7HT' => 'E02006522',
        '7HU' => 'E02006522',
        '7HW' => 'E02006522',
        '7HX' => 'E02006522',
        '7HY' => 'E02006522',
        '7HZ' => 'E02006522',
        '7JA' => 'E02006522',
        '7JB' => 'E02006522',
        '7JD' => 'E02006522',
        '7JE' => 'E02006522',
        '7JF' => 'E02006522',
        '7JG' => 'E02006522',
        '7JH' => 'E02006522',
        '7JJ' => 'E02006532',
        '7JL' => 'E02006532',
        '7JN' => 'E02006522',
        '7JP' => 'E02006532',
        '7JQ' => 'E02006522',
        '7JR' => 'E02006532',
        '7JS' => 'E02006532',
        '7JT' => 'E02006532',
        '7JU' => 'E02006532',
        '7JW' => 'E02006532',
        '7JX' => 'E02006532',
        '7LA' => 'E02006532',
        '7LB' => 'E02006532',
        '7LD' => 'E02006532',
        '7LE' => 'E02006522',
        '7LG' => 'E02006522',
        '7LH' => 'E02006522',
        '7LJ' => 'E02006522',
        '7LR' => 'E02006532',
        '7LS' => 'E02006522',
        '7LT' => 'E02006522',
        '7LU' => 'E02006532',
        '7LW' => 'E02006522',
        '7LX' => 'E02006522',
        '7LY' => 'E02006522',
        '7LZ' => 'E02006522',
        '7NA' => 'E02006522',
        '7NB' => 'E02006522',
        '7ND' => 'E02006522',
        '7NE' => 'E02006522',
        '7NF' => 'E02006522',
        '7NH' => 'E02006522',
        '7NJ' => 'E02006522',
        '7NL' => 'E02006522',
        '7NN' => 'E02006522',
        '7NP' => 'E02006522',
        '7NQ' => 'E02006522',
        '7NR' => 'E02006522',
        '7NS' => 'E02006522',
        '7NT' => 'E02006522',
        '7NU' => 'E02006522',
        '7NW' => 'E02006522',
        '7NX' => 'E02006522',
        '7NY' => 'E02006522',
        '7NZ' => 'E02006522',
        '7PA' => 'E02006522',
        '7PB' => 'E02006522',
        '7PD' => 'E02006522',
        '7PE' => 'E02006532',
        '7PH' => 'E02006522',
        '7PJ' => 'E02006526',
        '7PN' => 'E02006522',
        '7PP' => 'E02006522',
        '7PT' => 'E02006522',
        '7PU' => 'E02006522',
        '7PX' => 'E02006522',
        '7PY' => 'E02006522',
        '7QA' => 'E02006522',
        '7QB' => 'E02006526',
        '7QD' => 'E02006522',
        '7QE' => 'E02006522',
        '7QF' => 'E02006522',
        '7QG' => 'E02006522',
        '7QH' => 'E02006522',
        '7QJ' => 'E02006522',
        '7QL' => 'E02006522',
        '7QN' => 'E02006522',
        '7QP' => 'E02006522',
        '7QQ' => 'E02006522',
        '7QR' => 'E02006522',
        '7QS' => 'E02006522',
        '7QT' => 'E02006522',
        '7QU' => 'E02006522',
        '7QW' => 'E02006522',
        '7QX' => 'E02006522',
        '7QY' => 'E02006522',
        '7QZ' => 'E02006522',
        '7RA' => 'E02006522',
        '7RB' => 'E02006522',
        '7RD' => 'E02006522',
        '7RE' => 'E02006522',
        '7RF' => 'E02006522',
        '7RG' => 'E02006522',
        '7RR' => 'E02006522',
        '7RS' => 'E02006522',
        '7RT' => 'E02006522',
        '7ST' => 'E02006532',
        '7SU' => 'E02006532',
        '7SW' => 'E02006532',
        '7SX' => 'E02006532',
        '7SY' => 'E02006532',
        '7SZ' => 'E02006532',
        '7TA' => 'E02006532',
        '7TB' => 'E02006532',
        '7TD' => 'E02006532',
        '7TE' => 'E02006532',
        '7TF' => 'E02006532',
        '7TG' => 'E02006532',
        '7TH' => 'E02006532',
        '7TJ' => 'E02006532',
        '7TL' => 'E02006532',
        '7TN' => 'E02006532',
        '7TP' => 'E02006532',
        '7TQ' => 'E02006532',
        '7TR' => 'E02006532',
        '7TS' => 'E02006532',
        '7TT' => 'E02006532',
        '7TU' => 'E02006532',
        '7TW' => 'E02006532',
        '7TX' => 'E02006532',
        '7TY' => 'E02006532',
        '7TZ' => 'E02006532',
        '7UA' => 'E02006532',
        '7UB' => 'E02006532',
        '7UD' => 'E02006532',
        '7UE' => 'E02006532',
        '7UF' => 'E02006532',
        '7WW' => 'E02006526',
        '7WX' => 'E02006526',
        '7WY' => 'E02006526',
        '7XS' => 'E02006526',
        '7YA' => 'E02006522',
        '7YB' => 'E02006526',
        '7YP' => 'E02006526',
        '7YQ' => 'E02006526',
        '7YS' => 'E02006526',
        '7YT' => 'E02006526',
        '7YU' => 'E02006526',
        '7YW' => 'E02006532',
        '7YX' => 'E02006526',
        '7YY' => 'E02006526',
        '7YZ' => 'E02006526',
        '7ZA' => 'E02006526',
        '7ZB' => 'E02006526',
        '7ZD' => 'E02006526',
        '7ZE' => 'E02006522',
        '7ZF' => 'E02006526',
        '7ZG' => 'E02006526',
        '7ZH' => 'E02006526',
        '7ZJ' => 'E02006526',
        '7ZL' => 'E02006526',
        '7ZP' => 'E02006526',
        '7ZQ' => 'E02006526',
        '7ZR' => 'E02006526',
        '7ZS' => 'E02006526',
        '7ZT' => 'E02006526',
        '7ZU' => 'E02006526',
        '7ZW' => 'E02006522',
        '7ZX' => 'E02006522',
        '7ZY' => 'E02006526',
        '7ZZ' => 'E02006526',
        '8AA' => 'E02006532',
        '8AB' => 'E02006532',
        '8AD' => 'E02006532',
        '8AE' => 'E02006532',
        '8AF' => 'E02006532',
        '8AG' => 'E02006511',
        '8AH' => 'E02006532',
        '8AJ' => 'E02006532',
        '8AL' => 'E02006532',
        '8AN' => 'E02006532',
        '8AP' => 'E02006532',
        '8AQ' => 'E02006532',
        '8AR' => 'E02006532',
        '8AS' => 'E02006511',
        '8AT' => 'E02006511',
        '8AU' => 'E02006511',
        '8AW' => 'E02006532',
        '8AX' => 'E02006511',
        '8AY' => 'E02006511',
        '8AZ' => 'E02006511',
        '8BA' => 'E02006511',
        '8BB' => 'E02006511',
        '8BD' => 'E02006511',
        '8BE' => 'E02006511',
        '8BF' => 'E02006532',
        '8BG' => 'E02006532',
        '8BH' => 'E02006511',
        '8BJ' => 'E02006532',
        '8BL' => 'E02006511',
        '8BN' => 'E02006511',
        '8BP' => 'E02006532',
        '8BQ' => 'E02006511',
        '8BS' => 'E02006532',
        '8BT' => 'E02006532',
        '8BU' => 'E02006532',
        '8BW' => 'E02006511',
        '8BX' => 'E02006532',
        '8BY' => 'E02006532',
        '8BZ' => 'E02006532',
        '8DA' => 'E02006532',
        '8DB' => 'E02006532',
        '8DD' => 'E02006532',
        '8DE' => 'E02006532',
        '8DF' => 'E02006532',
        '8DG' => 'E02006532',
        '8DH' => 'E02006532',
        '8DJ' => 'E02006511',
        '8DL' => 'E02006505',
        '8DN' => 'E02006526',
        '8DP' => 'E02006532',
        '8DQ' => 'E02006532',
        '8DR' => 'E02006532',
        '8DS' => 'E02006532',
        '8DT' => 'E02006532',
        '8DU' => 'E02006532',
        '8DW' => 'E02006532',
        '8DX' => 'E02006532',
        '8DY' => 'E02006532',
        '8DZ' => 'E02006532',
        '8EA' => 'E02006532',
        '8EB' => 'E02006532',
        '8ED' => 'E02006532',
        '8EE' => 'E02006532',
        '8EF' => 'E02006532',
        '8EH' => 'E02006532',
        '8EJ' => 'E02006532',
        '8EL' => 'E02006532',
        '8EN' => 'E02006532',
        '8EP' => 'E02006532',
        '8EQ' => 'E02006532',
        '8ER' => 'E02006532',
        '8ES' => 'E02006532',
        '8ET' => 'E02006532',
        '8EU' => 'E02006532',
        '8EW' => 'E02006532',
        '8EX' => 'E02006532',
        '8EY' => 'E02006532',
        '8EZ' => 'E02006532',
        '8HA' => 'E02006529',
        '8HB' => 'E02006532',
        '8HD' => 'E02006532',
        '8HF' => 'E02006505',
        '8HG' => 'E02006505',
        '8HH' => 'E02006505',
        '8HJ' => 'E02006505',
        '8HL' => 'E02006505',
        '8HN' => 'E02006505',
        '8HP' => 'E02006505',
        '8HR' => 'E02006505',
        '8HS' => 'E02006505',
        '8HU' => 'E02006505',
        '8HW' => 'E02006505',
        '8HX' => 'E02006505',
        '8JA' => 'E02006532',
        '8JB' => 'E02006532',
        '8JD' => 'E02006532',
        '8JE' => 'E02006532',
        '8JF' => 'E02006505',
        '8JG' => 'E02006532',
        '8JH' => 'E02006532',
        '8JJ' => 'E02006532',
        '8JL' => 'E02006532',
        '8JN' => 'E02006511',
        '8JP' => 'E02006511',
        '8JQ' => 'E02006532',
        '8JR' => 'E02006505',
        '8JS' => 'E02006532',
        '8JT' => 'E02006505',
        '8JU' => 'E02006532',
        '8JW' => 'E02006511',
        '8JX' => 'E02006511',
        '8JY' => 'E02006505',
        '8JZ' => 'E02006532',
        '8LA' => 'E02006511',
        '8LD' => 'E02006505',
        '8LH' => 'E02006505',
        '8LJ' => 'E02006505',
        '8LL' => 'E02006505',
        '8LP' => 'E02006522',
        '8LR' => 'E02006522',
        '8LS' => 'E02006505',
        '8LT' => 'E02006505',
        '8LU' => 'E02006522',
        '8LW' => 'E02006505',
        '8LX' => 'E02006522',
        '8LZ' => 'E02006522',
        '8NA' => 'E02006522',
        '8NB' => 'E02006522',
        '8ND' => 'E02006522',
        '8NF' => 'E02006522',
        '8NG' => 'E02006505',
        '8NH' => 'E02006522',
        '8NN' => 'E02006505',
        '8NQ' => 'E02006505',
        '8NT' => 'E02006505',
        '8NU' => 'E02006505',
        '8NW' => 'E02006505',
        '8NX' => 'E02006505',
        '8NY' => 'E02006505',
        '8PA' => 'E02006505',
        '8PB' => 'E02006505',
        '8PD' => 'E02006505',
        '8PE' => 'E02006505',
        '8PG' => 'E02006505',
        '8PH' => 'E02006505',
        '8PJ' => 'E02006505',
        '8PL' => 'E02006505',
        '8PN' => 'E02006505',
        '8PP' => 'E02006505',
        '8PQ' => 'E02006505',
        '8PR' => 'E02006505',
        '8PS' => 'E02006505',
        '8PT' => 'E02006505',
        '8PU' => 'E02006505',
        '8PW' => 'E02006505',
        '8PX' => 'E02006505',
        '8PY' => 'E02006505',
        '8PZ' => 'E02006505',
        '8QA' => 'E02006505',
        '8QB' => 'E02006505',
        '8QD' => 'E02006511',
        '8QE' => 'E02006532',
        '8QF' => 'E02006532',
        '8QH' => 'E02006532',
        '8QJ' => 'E02006532',
        '8QL' => 'E02006532',
        '8QN' => 'E02006532',
        '8QP' => 'E02006532',
        '8QQ' => 'E02006532',
        '8QR' => 'E02006532',
        '8QS' => 'E02006532',
        '8QT' => 'E02006532',
        '8QU' => 'E02006532',
        '8QX' => 'E02006532',
        '8QY' => 'E02006532',
        '8RA' => 'E02006532',
        '8RB' => 'E02006532',
        '8RD' => 'E02006532',
        '8RF' => 'E02006532',
        '8RG' => 'E02006532',
        '8RH' => 'E02006529',
        '8RJ' => 'E02006532',
        '8RR' => 'E02006532',
        '8RS' => 'E02006532',
        '8RT' => 'E02006532',
        '8RU' => 'E02006532',
        '8RX' => 'E02006532',
        '8SA' => 'E02006532',
        '8SB' => 'E02006532',
        '8SD' => 'E02006532',
        '8SE' => 'E02006532',
        '8SF' => 'E02006526',
        '8SG' => 'E02006532',
        '8SH' => 'E02006532',
        '8SJ' => 'E02006532',
        '8SL' => 'E02006532',
        '8SP' => 'E02006532',
        '8SQ' => 'E02006532',
        '8SR' => 'E02006532',
        '8SS' => 'E02006532',
        '8ST' => 'E02006532',
        '8SU' => 'E02006532',
        '8SW' => 'E02006532',
        '8SX' => 'E02006532',
        '8SZ' => 'E02006532',
        '8TA' => 'E02006532',
        '8TB' => 'E02006532',
        '8TD' => 'E02006532',
        '8TF' => 'E02006532',
        '8TG' => 'E02006532',
        '8TH' => 'E02006532',
        '8TJ' => 'E02006532',
        '8TL' => 'E02006532',
        '8TN' => 'E02006532',
        '8TP' => 'E02006532',
        '8TR' => 'E02006532',
        '8TS' => 'E02006532',
        '8TT' => 'E02006532',
        '8TU' => 'E02006532',
        '8TX' => 'E02006532',
        '8TY' => 'E02006532',
        '8UA' => 'E02006532',
        '8UB' => 'E02006532',
        '8UD' => 'E02006532',
        '8UE' => 'E02006532',
        '8UF' => 'E02006532',
        '8UG' => 'E02006532',
        '8UH' => 'E02006532',
        '8UJ' => 'E02006532',
        '8UQ' => 'E02006532',
        '8WA' => 'E02006532',
        '8WB' => 'E02006532',
        '8WN' => 'E02006526',
        '8WP' => 'E02006526',
        '8WQ' => 'E02006526',
        '8WU' => 'E02006526',
        '8XA' => 'E02006532',
        '8XB' => 'E02006532',
        '8XD' => 'E02006505',
        '8XF' => 'E02006532',
        '8XH' => 'E02006522',
        '8XJ' => 'E02006522',
        '8XL' => 'E02006522',
        '8XN' => 'E02006522',
        '8XQ' => 'E02006522',
        '8XS' => 'E02006532',
        '8XW' => 'E02006532',
        '8YA' => 'E02006526',
        '8YB' => 'E02006526',
        '8YD' => 'E02006526',
        '8YJ' => 'E02006526',
        '8YL' => 'E02006526',
        '8YN' => 'E02006526',
        '8YP' => 'E02006526',
        '8YQ' => 'E02006526',
        '8YR' => 'E02006532',
        '8YS' => 'E02006526',
        '8YT' => 'E02006532',
        '8YU' => 'E02006526',
        '8YW' => 'E02006526',
        '8YX' => 'E02006526',
        '8YY' => 'E02006526',
        '8YZ' => 'E02006522',
        '8ZA' => 'E02006532',
        '8ZB' => 'E02006526',
        '8ZD' => 'E02006526',
        '8ZE' => 'E02006526',
        '8ZF' => 'E02006532',
        '8ZG' => 'E02006526',
        '8ZH' => 'E02006526',
        '8ZJ' => 'E02006526',
        '8ZL' => 'E02006526',
        '8ZP' => 'E02006526',
        '8ZQ' => 'E02006526',
        '8ZR' => 'E02006532',
        '8ZS' => 'E02006526',
        '8ZU' => 'E02006526',
        '8ZW' => 'E02006532',
        '8ZX' => 'E02006526',
        '8ZY' => 'E02006522',
        '8ZZ' => 'E02006526',
        '9AA' => 'E02006511',
        '9AB' => 'E02006511',
        '9AD' => 'E02006511',
        '9AE' => 'E02006516',
        '9AF' => 'E02006516',
        '9AG' => 'E02006511',
        '9AH' => 'E02006511',
        '9AJ' => 'E02006511',
        '9AL' => 'E02006511',
        '9AN' => 'E02006511',
        '9AP' => 'E02006511',
        '9AQ' => 'E02006511',
        '9AR' => 'E02006511',
        '9AS' => 'E02006511',
        '9AT' => 'E02006511',
        '9AU' => 'E02006511',
        '9AX' => 'E02006511',
        '9AY' => 'E02006511',
        '9BA' => 'E02006511',
        '9BB' => 'E02006511',
        '9BD' => 'E02006511',
        '9BE' => 'E02006526',
        '9BG' => 'E02006511',
        '9BJ' => 'E02006511',
        '9BL' => 'E02006511',
        '9BP' => 'E02006511',
        '9BS' => 'E02006511',
        '9BT' => 'E02006511',
        '9BU' => 'E02006511',
        '9BW' => 'E02006511',
        '9BX' => 'E02006511',
        '9BZ' => 'E02006516',
        '9DA' => 'E02006516',
        '9DB' => 'E02006516',
        '9DD' => 'E02006516',
        '9DE' => 'E02006511',
        '9DF' => 'E02006511',
        '9DG' => 'E02006511',
        '9DH' => 'E02006511',
        '9DJ' => 'E02006511',
        '9DP' => 'E02006511',
        '9DQ' => 'E02006516',
        '9DR' => 'E02006511',
        '9DS' => 'E02006511',
        '9DT' => 'E02006511',
        '9DU' => 'E02006511',
        '9DX' => 'E02006511',
        '9DY' => 'E02006511',
        '9DZ' => 'E02006511',
        '9EA' => 'E02006511',
        '9EB' => 'E02006511',
        '9ED' => 'E02006511',
        '9EE' => 'E02006511',
        '9EF' => 'E02006511',
        '9EG' => 'E02006511',
        '9EH' => 'E02006511',
        '9EJ' => 'E02006511',
        '9EL' => 'E02006511',
        '9EN' => 'E02006511',
        '9EP' => 'E02006511',
        '9EQ' => 'E02006511',
        '9ER' => 'E02006511',
        '9ES' => 'E02006511',
        '9ET' => 'E02006511',
        '9EU' => 'E02006511',
        '9EW' => 'E02006511',
        '9EX' => 'E02006511',
        '9EY' => 'E02006511',
        '9EZ' => 'E02006511',
        '9GA' => 'E02006511',
        '9GZ' => 'E02006511',
        '9HA' => 'E02006526',
        '9HB' => 'E02006511',
        '9HD' => 'E02006511',
        '9HE' => 'E02006511',
        '9HG' => 'E02006511',
        '9HH' => 'E02006511',
        '9HJ' => 'E02006516',
        '9HL' => 'E02006511',
        '9HN' => 'E02006516',
        '9HP' => 'E02006516',
        '9HQ' => 'E02006517',
        '9HR' => 'E02006516',
        '9HS' => 'E02006516',
        '9HT' => 'E02006511',
        '9HU' => 'E02006511',
        '9HW' => 'E02006516',
        '9HX' => 'E02006511',
        '9HY' => 'E02006517',
        '9HZ' => 'E02006516',
        '9JA' => 'E02006511',
        '9JB' => 'E02006511',
        '9JD' => 'E02006511',
        '9JE' => 'E02006511',
        '9JF' => 'E02006511',
        '9JG' => 'E02006511',
        '9JH' => 'E02006511',
        '9JJ' => 'E02006511',
        '9JL' => 'E02006511',
        '9JN' => 'E02006517',
        '9JP' => 'E02006517',
        '9JQ' => 'E02006511',
        '9JR' => 'E02006517',
        '9JS' => 'E02006517',
        '9JT' => 'E02006517',
        '9JU' => 'E02006517',
        '9JW' => 'E02006517',
        '9JX' => 'E02006517',
        '9JY' => 'E02006511',
        '9JZ' => 'E02006517',
        '9LA' => 'E02006517',
        '9LB' => 'E02006517',
        '9LD' => 'E02006511',
        '9LE' => 'E02006511',
        '9LF' => 'E02006517',
        '9LG' => 'E02006511',
        '9LH' => 'E02006511',
        '9LJ' => 'E02006511',
        '9LL' => 'E02006511',
        '9LN' => 'E02006511',
        '9LP' => 'E02006511',
        '9LQ' => 'E02006511',
        '9LR' => 'E02006511',
        '9LS' => 'E02006511',
        '9LT' => 'E02006511',
        '9LU' => 'E02006511',
        '9LW' => 'E02006511',
        '9LX' => 'E02006511',
        '9LY' => 'E02006511',
        '9LZ' => 'E02006511',
        '9NA' => 'E02006511',
        '9NB' => 'E02006511',
        '9ND' => 'E02006511',
        '9NE' => 'E02006511',
        '9NF' => 'E02006511',
        '9NG' => 'E02006511',
        '9NH' => 'E02006511',
        '9NJ' => 'E02006511',
        '9NL' => 'E02006511',
        '9NN' => 'E02006511',
        '9NP' => 'E02006511',
        '9NQ' => 'E02006511',
        '9NR' => 'E02006511',
        '9NS' => 'E02006511',
        '9NT' => 'E02006511',
        '9NU' => 'E02006511',
        '9NW' => 'E02006511',
        '9NX' => 'E02006511',
        '9NY' => 'E02006511',
        '9NZ' => 'E02006511',
        '9PA' => 'E02006511',
        '9PB' => 'E02006511',
        '9PD' => 'E02006511',
        '9PE' => 'E02006511',
        '9PF' => 'E02006511',
        '9PG' => 'E02006511',
        '9PH' => 'E02006511',
        '9PJ' => 'E02006511',
        '9PL' => 'E02006511',
        '9PN' => 'E02006511',
        '9PP' => 'E02006511',
        '9PQ' => 'E02006511',
        '9PR' => 'E02006511',
        '9PS' => 'E02006511',
        '9PT' => 'E02006511',
        '9PU' => 'E02006511',
        '9PW' => 'E02006511',
        '9PX' => 'E02006511',
        '9PY' => 'E02006511',
        '9PZ' => 'E02006511',
        '9QA' => 'E02006511',
        '9QB' => 'E02006511',
        '9QD' => 'E02006511',
        '9QE' => 'E02006511',
        '9QF' => 'E02006511',
        '9QG' => 'E02006511',
        '9QH' => 'E02006517',
        '9QJ' => 'E02006511',
        '9QL' => 'E02006511',
        '9QN' => 'E02006511',
        '9QP' => 'E02006511',
        '9QQ' => 'E02006511',
        '9QR' => 'E02006511',
        '9QS' => 'E02006511',
        '9QT' => 'E02006511',
        '9QU' => 'E02006511',
        '9QW' => 'E02006511',
        '9QX' => 'E02006511',
        '9QY' => 'E02006511',
        '9QZ' => 'E02006511',
        '9RA' => 'E02006511',
        '9RB' => 'E02006511',
        '9RD' => 'E02006511',
        '9RE' => 'E02006511',
        '9RF' => 'E02006511',
        '9RG' => 'E02006511',
        '9RH' => 'E02006511',
        '9RJ' => 'E02006511',
        '9RL' => 'E02006511',
        '9RN' => 'E02006511',
        '9RP' => 'E02006511',
        '9RQ' => 'E02006511',
        '9RR' => 'E02006511',
        '9RS' => 'E02006511',
        '9RT' => 'E02006511',
        '9RU' => 'E02006511',
        '9RW' => 'E02006511',
        '9RX' => 'E02006511',
        '9RY' => 'E02006511',
        '9RZ' => 'E02006511',
        '9SA' => 'E02006511',
        '9SB' => 'E02006511',
        '9SD' => 'E02006511',
        '9SE' => 'E02006511',
        '9SF' => 'E02006511',
        '9SG' => 'E02006511',
        '9SH' => 'E02006511',
        '9SJ' => 'E02006511',
        '9SL' => 'E02006511',
        '9SN' => 'E02006511',
        '9SP' => 'E02006511',
        '9SQ' => 'E02006511',
        '9SR' => 'E02006511',
        '9SS' => 'E02006511',
        '9ST' => 'E02006511',
        '9SU' => 'E02006511',
        '9SW' => 'E02006511',
        '9SX' => 'E02006511',
        '9SY' => 'E02006511',
        '9SZ' => 'E02006511',
        '9TA' => 'E02006511',
        '9TB' => 'E02006511',
        '9TD' => 'E02006511',
        '9TE' => 'E02006511',
        '9TF' => 'E02006511',
        '9TG' => 'E02006511',
        '9TH' => 'E02006511',
        '9TJ' => 'E02006511',
        '9TL' => 'E02006511',
        '9TN' => 'E02006511',
        '9TP' => 'E02006511',
        '9TQ' => 'E02006511',
        '9TR' => 'E02006511',
        '9TS' => 'E02006511',
        '9TT' => 'E02006511',
        '9TU' => 'E02006511',
        '9TW' => 'E02006511',
        '9TX' => 'E02006511',
        '9TY' => 'E02006511',
        '9TZ' => 'E02006526',
        '9UA' => 'E02006511',
        '9UB' => 'E02006511',
        '9UD' => 'E02006511',
        '9UE' => 'E02006511',
        '9UF' => 'E02006511',
        '9UG' => 'E02006511',
        '9UH' => 'E02006511',
        '9UJ' => 'E02006511',
        '9UL' => 'E02006511',
        '9UN' => 'E02006511',
        '9UP' => 'E02006511',
        '9UQ' => 'E02006511',
        '9UR' => 'E02006511',
        '9US' => 'E02006511',
        '9UT' => 'E02006511',
        '9UU' => 'E02006511',
        '9WD' => 'E02006511',
        '9WE' => 'E02006526',
        '9WP' => 'E02006511',
        '9WS' => 'E02006526',
        '9WT' => 'E02006526',
        '9WU' => 'E02006511',
        '9WW' => 'E02006526',
        '9WY' => 'E02006526',
        '9XA' => 'E02006517',
        '9XR' => 'E02006517',
        '9XS' => 'E02006526',
        '9YD' => 'E02006526',
        '9YF' => 'E02006526',
        '9YG' => 'E02006526',
        '9YH' => 'E02006526',
        '9YJ' => 'E02006526',
        '9YL' => 'E02006526',
        '9YN' => 'E02006526',
        '9YP' => 'E02006526',
        '9YQ' => 'E02006526',
        '9YR' => 'E02006526',
        '9YS' => 'E02006526',
        '9YT' => 'E02006526',
        '9YU' => 'E02006526',
        '9YW' => 'E02006526',
        '9YX' => 'E02006526',
        '9YY' => 'E02006526',
        '9YZ' => 'E02006526',
        '9ZA' => 'E02006526',
        '9ZB' => 'E02006526',
        '9ZD' => 'E02006526',
        '9ZE' => 'E02006526',
        '9ZF' => 'E02006526',
        '9ZG' => 'E02006511',
        '9ZH' => 'E02006526',
        '9ZJ' => 'E02006526',
        '9ZL' => 'E02006526',
        '9ZP' => 'E02006526',
        '9ZQ' => 'E02006526',
        '9ZR' => 'E02006526',
        '9ZS' => 'E02006526',
        '9ZT' => 'E02006526',
        '9ZU' => 'E02006526',
        '9ZW' => 'E02006511',
        '9ZX' => 'E02006526',
        '9ZY' => 'E02006511',
        '9ZZ' => 'E02006526',
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
