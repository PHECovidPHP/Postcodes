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
final class LS15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002402',
        '0AB' => 'E02002402',
        '0AD' => 'E02002398',
        '0AE' => 'E02002398',
        '0AF' => 'E02002398',
        '0AG' => 'E02002398',
        '0AH' => 'E02002401',
        '0AJ' => 'E02002401',
        '0AL' => 'E02002401',
        '0AN' => 'E02002401',
        '0AP' => 'E02002401',
        '0AQ' => 'E02002401',
        '0AR' => 'E02002401',
        '0AS' => 'E02002401',
        '0AT' => 'E02002401',
        '0AU' => 'E02002401',
        '0AW' => 'E02002401',
        '0AX' => 'E02002401',
        '0AY' => 'E02002401',
        '0AZ' => 'E02002401',
        '0BA' => 'E02002401',
        '0BB' => 'E02002401',
        '0BD' => 'E02002401',
        '0BE' => 'E02002401',
        '0BF' => 'E02002398',
        '0BG' => 'E02002398',
        '0BH' => 'E02002401',
        '0BJ' => 'E02002401',
        '0BL' => 'E02002401',
        '0BN' => 'E02002401',
        '0BP' => 'E02002401',
        '0BQ' => 'E02002401',
        '0BR' => 'E02002401',
        '0BS' => 'E02002401',
        '0BT' => 'E02002401',
        '0BU' => 'E02002401',
        '0BW' => 'E02002401',
        '0BX' => 'E02002401',
        '0BY' => 'E02002401',
        '0BZ' => 'E02002401',
        '0DA' => 'E02002401',
        '0DB' => 'E02002401',
        '0DD' => 'E02002401',
        '0DE' => 'E02002401',
        '0DF' => 'E02002401',
        '0DG' => 'E02002401',
        '0DH' => 'E02002401',
        '0DJ' => 'E02002398',
        '0DL' => 'E02002398',
        '0DN' => 'E02002398',
        '0DP' => 'E02002398',
        '0DQ' => 'E02002401',
        '0DR' => 'E02002401',
        '0DS' => 'E02002401',
        '0DT' => 'E02002401',
        '0DU' => 'E02002401',
        '0DW' => 'E02002398',
        '0DX' => 'E02002401',
        '0DY' => 'E02002401',
        '0DZ' => 'E02002401',
        '0EA' => 'E02002401',
        '0EB' => 'E02002401',
        '0ED' => 'E02002401',
        '0EE' => 'E02002401',
        '0EF' => 'E02002401',
        '0EG' => 'E02002401',
        '0EH' => 'E02002401',
        '0EJ' => 'E02002401',
        '0EL' => 'E02002401',
        '0EN' => 'E02002401',
        '0EP' => 'E02002401',
        '0EQ' => 'E02002401',
        '0ER' => 'E02002401',
        '0ES' => 'E02002401',
        '0ET' => 'E02002401',
        '0EU' => 'E02002398',
        '0EW' => 'E02002401',
        '0EX' => 'E02002398',
        '0EY' => 'E02002398',
        '0EZ' => 'E02002398',
        '0FA' => 'E02002401',
        '0HA' => 'E02002398',
        '0HB' => 'E02002398',
        '0HD' => 'E02002398',
        '0HE' => 'E02002398',
        '0HF' => 'E02002398',
        '0HG' => 'E02002398',
        '0HH' => 'E02002398',
        '0HJ' => 'E02002398',
        '0HL' => 'E02002398',
        '0HQ' => 'E02002398',
        '0HS' => 'E02002398',
        '0HT' => 'E02002398',
        '0HU' => 'E02002398',
        '0HX' => 'E02002398',
        '0HY' => 'E02002398',
        '0HZ' => 'E02002398',
        '0JA' => 'E02002398',
        '0JB' => 'E02002398',
        '0JD' => 'E02002398',
        '0JE' => 'E02002398',
        '0JF' => 'E02002398',
        '0JG' => 'E02002398',
        '0JH' => 'E02002398',
        '0JJ' => 'E02002398',
        '0JL' => 'E02002398',
        '0JN' => 'E02002398',
        '0JP' => 'E02002398',
        '0JQ' => 'E02002398',
        '0JR' => 'E02002398',
        '0JS' => 'E02002398',
        '0JT' => 'E02002398',
        '0JU' => 'E02002398',
        '0JW' => 'E02002398',
        '0JX' => 'E02002398',
        '0JY' => 'E02002398',
        '0LA' => 'E02002398',
        '0LB' => 'E02002398',
        '0LF' => 'E02002398',
        '0LG' => 'E02002398',
        '0LH' => 'E02002398',
        '0LJ' => 'E02002398',
        '0LL' => 'E02002398',
        '0LN' => 'E02002398',
        '0LP' => 'E02002401',
        '0LQ' => 'E02002398',
        '0LR' => 'E02002401',
        '0LS' => 'E02002401',
        '0LT' => 'E02002401',
        '0LU' => 'E02002401',
        '0LW' => 'E02002401',
        '0LX' => 'E02002401',
        '0LY' => 'E02002401',
        '0LZ' => 'E02002401',
        '0NA' => 'E02002401',
        '0NB' => 'E02002398',
        '0NE' => 'E02002402',
        '0NF' => 'E02002401',
        '0NG' => 'E02002401',
        '0NH' => 'E02002401',
        '0NJ' => 'E02002401',
        '0NL' => 'E02002401',
        '0NN' => 'E02002401',
        '0NP' => 'E02002401',
        '0NQ' => 'E02002401',
        '0NR' => 'E02002401',
        '0NS' => 'E02002401',
        '0NT' => 'E02002401',
        '0NU' => 'E02002401',
        '0NW' => 'E02002401',
        '0NX' => 'E02002401',
        '0NY' => 'E02002401',
        '0NZ' => 'E02002401',
        '0PA' => 'E02002398',
        '0PB' => 'E02002398',
        '0PD' => 'E02002401',
        '0PE' => 'E02002401',
        '0PF' => 'E02002398',
        '0PG' => 'E02002398',
        '0PH' => 'E02002398',
        '0PJ' => 'E02002398',
        '0PL' => 'E02002398',
        '0PN' => 'E02002398',
        '0PP' => 'E02002398',
        '0PQ' => 'E02002398',
        '0PR' => 'E02002398',
        '0PS' => 'E02002398',
        '0PT' => 'E02002398',
        '0PU' => 'E02002398',
        '0PW' => 'E02002398',
        '0PX' => 'E02002398',
        '0PY' => 'E02002398',
        '0PZ' => 'E02002398',
        '0QA' => 'E02002398',
        '0QB' => 'E02002398',
        '0QD' => 'E02002398',
        '0QE' => 'E02002398',
        '0QF' => 'E02002398',
        '0QG' => 'E02002398',
        '0QH' => 'E02002398',
        '0QJ' => 'E02002398',
        '0QL' => 'E02002398',
        '0QN' => 'E02002398',
        '0QP' => 'E02002398',
        '0QQ' => 'E02002398',
        '0QR' => 'E02002401',
        '0QS' => 'E02002401',
        '0QT' => 'E02002401',
        '0QU' => 'E02002401',
        '0QW' => 'E02002398',
        '0UA' => 'E02002398',
        '0UB' => 'E02002401',
        '0WS' => 'E02002358',
        '0WT' => 'E02002358',
        '0WU' => 'E02002358',
        '0WW' => 'E02002358',
        '0WX' => 'E02002358',
        '0WY' => 'E02002358',
        '0WZ' => 'E02002358',
        '0XA' => 'E02002398',
        '0XB' => 'E02002398',
        '0XD' => 'E02002358',
        '0XE' => 'E02002401',
        '0XF' => 'E02002401',
        '0XG' => 'E02002358',
        '0XH' => 'E02002358',
        '0XJ' => 'E02002358',
        '0XQ' => 'E02002401',
        '4AA' => 'E02002351',
        '4AB' => 'E02002351',
        '4AD' => 'E02002351',
        '4AE' => 'E02002351',
        '4AF' => 'E02002351',
        '4AG' => 'E02002351',
        '4AH' => 'E02002351',
        '4AJ' => 'E02002351',
        '4AL' => 'E02002351',
        '4AN' => 'E02002351',
        '4AP' => 'E02002351',
        '4AQ' => 'E02002351',
        '4AR' => 'E02002351',
        '4AS' => 'E02002351',
        '4AT' => 'E02002351',
        '4AU' => 'E02002351',
        '4AW' => 'E02002351',
        '4AX' => 'E02002351',
        '4AY' => 'E02002351',
        '4AZ' => 'E02002359',
        '4BA' => 'E02002359',
        '4BB' => 'E02002351',
        '4BD' => 'E02002351',
        '4BE' => 'E02002351',
        '4BG' => 'E02002351',
        '4BH' => 'E02002351',
        '4BJ' => 'E02002351',
        '4BL' => 'E02002351',
        '4BN' => 'E02002351',
        '4BP' => 'E02002351',
        '4BQ' => 'E02002351',
        '4BR' => 'E02002351',
        '4BS' => 'E02002351',
        '4BT' => 'E02002351',
        '4BU' => 'E02002351',
        '4BW' => 'E02002351',
        '4BX' => 'E02002351',
        '4BY' => 'E02002351',
        '4BZ' => 'E02002351',
        '4DA' => 'E02002351',
        '4DB' => 'E02002351',
        '4DD' => 'E02002351',
        '4DE' => 'E02002351',
        '4DF' => 'E02002351',
        '4DG' => 'E02002351',
        '4DH' => 'E02002351',
        '4DJ' => 'E02002351',
        '4DL' => 'E02002351',
        '4DN' => 'E02002351',
        '4DP' => 'E02002351',
        '4DQ' => 'E02002351',
        '4DR' => 'E02002351',
        '4DS' => 'E02002351',
        '4DT' => 'E02002351',
        '4DU' => 'E02002359',
        '4DW' => 'E02002351',
        '4DX' => 'E02002359',
        '4DY' => 'E02002359',
        '4DZ' => 'E02002359',
        '4EA' => 'E02002359',
        '4EB' => 'E02002359',
        '4ED' => 'E02002359',
        '4EE' => 'E02002359',
        '4EF' => 'E02002359',
        '4EG' => 'E02002359',
        '4EH' => 'E02002359',
        '4EJ' => 'E02002359',
        '4EL' => 'E02002359',
        '4EN' => 'E02002359',
        '4EP' => 'E02002359',
        '4EQ' => 'E02002359',
        '4ER' => 'E02002359',
        '4ES' => 'E02002359',
        '4ET' => 'E02002359',
        '4EU' => 'E02002359',
        '4EW' => 'E02002359',
        '4EX' => 'E02002359',
        '4EY' => 'E02002359',
        '4EZ' => 'E02002359',
        '4FA' => 'E02002351',
        '4FD' => 'E02002351',
        '4HA' => 'E02002359',
        '4HB' => 'E02002359',
        '4HD' => 'E02002359',
        '4HE' => 'E02002359',
        '4HF' => 'E02002359',
        '4HG' => 'E02002359',
        '4HH' => 'E02002359',
        '4HJ' => 'E02002359',
        '4HL' => 'E02002359',
        '4HN' => 'E02002359',
        '4HP' => 'E02002359',
        '4HQ' => 'E02002359',
        '4HR' => 'E02002359',
        '4HS' => 'E02002351',
        '4HT' => 'E02002351',
        '4HU' => 'E02002359',
        '4HW' => 'E02002359',
        '4HX' => 'E02002359',
        '4HY' => 'E02002359',
        '4HZ' => 'E02002359',
        '4JA' => 'E02002359',
        '4JB' => 'E02002359',
        '4JD' => 'E02002359',
        '4JE' => 'E02002359',
        '4JF' => 'E02002359',
        '4JG' => 'E02002359',
        '4JH' => 'E02002359',
        '4JJ' => 'E02002351',
        '4JL' => 'E02002359',
        '4JN' => 'E02002359',
        '4JP' => 'E02002359',
        '4JQ' => 'E02002359',
        '4JR' => 'E02002359',
        '4JS' => 'E02002359',
        '4JT' => 'E02002359',
        '4JU' => 'E02002359',
        '4JW' => 'E02002359',
        '4JX' => 'E02002359',
        '4JY' => 'E02002359',
        '4JZ' => 'E02002359',
        '4LA' => 'E02002359',
        '4LB' => 'E02002416',
        '4LD' => 'E02002416',
        '4LE' => 'E02002416',
        '4LF' => 'E02002416',
        '4LG' => 'E02002416',
        '4LH' => 'E02002416',
        '4LJ' => 'E02002359',
        '4LL' => 'E02002359',
        '4LN' => 'E02002359',
        '4LP' => 'E02002359',
        '4LQ' => 'E02002416',
        '4LR' => 'E02002359',
        '4LS' => 'E02002359',
        '4LT' => 'E02002359',
        '4LU' => 'E02002359',
        '4LW' => 'E02002359',
        '4LX' => 'E02002351',
        '4LY' => 'E02002351',
        '4LZ' => 'E02002351',
        '4NA' => 'E02002370',
        '4NB' => 'E02002351',
        '4ND' => 'E02002351',
        '4NE' => 'E02002351',
        '4NF' => 'E02002351',
        '4NG' => 'E02002351',
        '4NH' => 'E02002351',
        '4NJ' => 'E02002359',
        '4NL' => 'E02002359',
        '4NN' => 'E02002359',
        '4NP' => 'E02002359',
        '4NQ' => 'E02002351',
        '4NR' => 'E02002359',
        '4NS' => 'E02002359',
        '4NT' => 'E02002359',
        '4NU' => 'E02002359',
        '4NW' => 'E02002359',
        '4NX' => 'E02002416',
        '4NY' => 'E02002359',
        '4NZ' => 'E02002359',
        '4PA' => 'E02002359',
        '4PB' => 'E02002359',
        '4PD' => 'E02002359',
        '4PE' => 'E02002359',
        '4PF' => 'E02002359',
        '4PG' => 'E02002359',
        '4PH' => 'E02002359',
        '4PQ' => 'E02002359',
        '4RA' => 'E02002359',
        '4RD' => 'E02002370',
        '4RE' => 'E02002370',
        '4SY' => 'E02002359',
        '4TA' => 'E02002351',
        '4WA' => 'E02002358',
        '4WU' => 'E02002358',
        '4WW' => 'E02002351',
        '4WX' => 'E02002358',
        '4WY' => 'E02002358',
        '4WZ' => 'E02002358',
        '4XA' => 'E02002358',
        '4XB' => 'E02002358',
        '4XD' => 'E02002351',
        '4XE' => 'E02002351',
        '4XF' => 'E02002358',
        '4XG' => 'E02002351',
        '4XH' => 'E02002358',
        '4XJ' => 'E02002351',
        '4XL' => 'E02002351',
        '4XN' => 'E02002359',
        '4XQ' => 'E02002370',
        '4XW' => 'E02002358',
        '4YU' => 'E02002358',
        '4YZ' => 'E02002358',
        '4ZX' => 'E02002358',
        '5LJ' => 'E02002370',
        '5LL' => 'E02002370',
        '7AA' => 'E02002402',
        '7AB' => 'E02002386',
        '7AD' => 'E02002402',
        '7AE' => 'E02002402',
        '7AF' => 'E02002402',
        '7AG' => 'E02002402',
        '7AH' => 'E02002402',
        '7AJ' => 'E02002402',
        '7AL' => 'E02002402',
        '7AN' => 'E02002402',
        '7AP' => 'E02002402',
        '7AQ' => 'E02002402',
        '7AR' => 'E02002386',
        '7AS' => 'E02002386',
        '7AT' => 'E02002386',
        '7AU' => 'E02002386',
        '7AW' => 'E02002402',
        '7AX' => 'E02002402',
        '7AY' => 'E02002402',
        '7AZ' => 'E02002402',
        '7BA' => 'E02002402',
        '7BB' => 'E02002402',
        '7BD' => 'E02002402',
        '7BE' => 'E02002402',
        '7BF' => 'E02002398',
        '7BG' => 'E02002402',
        '7BJ' => 'E02002402',
        '7BL' => 'E02002386',
        '7BN' => 'E02002402',
        '7BP' => 'E02002398',
        '7BQ' => 'E02002386',
        '7BR' => 'E02002398',
        '7BS' => 'E02002402',
        '7BT' => 'E02002398',
        '7BU' => 'E02002398',
        '7BW' => 'E02002402',
        '7BX' => 'E02002398',
        '7BY' => 'E02002398',
        '7BZ' => 'E02002398',
        '7DA' => 'E02002398',
        '7DB' => 'E02002398',
        '7DD' => 'E02002398',
        '7DE' => 'E02002398',
        '7DF' => 'E02002398',
        '7DG' => 'E02002398',
        '7DH' => 'E02002398',
        '7DJ' => 'E02002398',
        '7DL' => 'E02002398',
        '7DN' => 'E02002386',
        '7DP' => 'E02002398',
        '7DQ' => 'E02002398',
        '7DR' => 'E02002386',
        '7DS' => 'E02002386',
        '7DT' => 'E02002386',
        '7DU' => 'E02002398',
        '7DW' => 'E02002398',
        '7DX' => 'E02002398',
        '7DY' => 'E02002398',
        '7DZ' => 'E02002398',
        '7EA' => 'E02002398',
        '7EB' => 'E02002398',
        '7ED' => 'E02002398',
        '7EE' => 'E02002398',
        '7EF' => 'E02002398',
        '7EG' => 'E02002386',
        '7EH' => 'E02002398',
        '7EJ' => 'E02002398',
        '7EL' => 'E02002398',
        '7EN' => 'E02002398',
        '7EP' => 'E02002398',
        '7EQ' => 'E02002386',
        '7ER' => 'E02002398',
        '7ES' => 'E02002398',
        '7ET' => 'E02002398',
        '7EU' => 'E02002402',
        '7EW' => 'E02002398',
        '7HA' => 'E02002390',
        '7HB' => 'E02002390',
        '7HD' => 'E02002390',
        '7HE' => 'E02002390',
        '7HF' => 'E02002390',
        '7HG' => 'E02002390',
        '7HP' => 'E02002398',
        '7HQ' => 'E02002390',
        '7HR' => 'E02002398',
        '7HS' => 'E02002398',
        '7HT' => 'E02002398',
        '7HU' => 'E02002398',
        '7HW' => 'E02002398',
        '7HX' => 'E02002398',
        '7HY' => 'E02002398',
        '7HZ' => 'E02002398',
        '7JA' => 'E02002398',
        '7JB' => 'E02002398',
        '7JF' => 'E02002398',
        '7JG' => 'E02002398',
        '7JH' => 'E02002390',
        '7JJ' => 'E02002390',
        '7JL' => 'E02002390',
        '7JN' => 'E02002390',
        '7JP' => 'E02002398',
        '7JQ' => 'E02002398',
        '7JR' => 'E02002398',
        '7JS' => 'E02002398',
        '7JT' => 'E02002390',
        '7JU' => 'E02002390',
        '7JX' => 'E02002386',
        '7JY' => 'E02002390',
        '7JZ' => 'E02002390',
        '7LA' => 'E02002390',
        '7LB' => 'E02002390',
        '7LD' => 'E02002390',
        '7LE' => 'E02002390',
        '7LF' => 'E02002390',
        '7LG' => 'E02002390',
        '7LH' => 'E02002390',
        '7LJ' => 'E02002390',
        '7LL' => 'E02002390',
        '7LN' => 'E02002390',
        '7LP' => 'E02002390',
        '7LQ' => 'E02002390',
        '7LR' => 'E02002390',
        '7LS' => 'E02002390',
        '7LT' => 'E02002390',
        '7LU' => 'E02002390',
        '7LW' => 'E02002390',
        '7LX' => 'E02002390',
        '7LY' => 'E02002390',
        '7LZ' => 'E02002390',
        '7NA' => 'E02002390',
        '7NB' => 'E02002390',
        '7ND' => 'E02002390',
        '7NE' => 'E02002390',
        '7NF' => 'E02002390',
        '7NG' => 'E02002390',
        '7NH' => 'E02002390',
        '7NJ' => 'E02002390',
        '7NL' => 'E02002390',
        '7NN' => 'E02002390',
        '7NP' => 'E02002398',
        '7NQ' => 'E02002390',
        '7NR' => 'E02002390',
        '7NS' => 'E02002390',
        '7NT' => 'E02002390',
        '7NU' => 'E02002390',
        '7NW' => 'E02002398',
        '7NX' => 'E02002390',
        '7NY' => 'E02002390',
        '7NZ' => 'E02002390',
        '7PA' => 'E02002390',
        '7PB' => 'E02002390',
        '7PD' => 'E02002390',
        '7PE' => 'E02002390',
        '7PF' => 'E02002390',
        '7PG' => 'E02002390',
        '7PH' => 'E02002390',
        '7PJ' => 'E02002390',
        '7PL' => 'E02002390',
        '7PN' => 'E02002390',
        '7PP' => 'E02002390',
        '7PQ' => 'E02002390',
        '7PR' => 'E02002390',
        '7PS' => 'E02002390',
        '7PT' => 'E02002390',
        '7PU' => 'E02002390',
        '7PW' => 'E02002390',
        '7PX' => 'E02002390',
        '7PY' => 'E02002390',
        '7PZ' => 'E02002390',
        '7QA' => 'E02002390',
        '7QB' => 'E02002379',
        '7QD' => 'E02002379',
        '7QE' => 'E02002379',
        '7QF' => 'E02002379',
        '7QG' => 'E02002379',
        '7QH' => 'E02002398',
        '7QJ' => 'E02002398',
        '7QL' => 'E02002398',
        '7QN' => 'E02002398',
        '7QP' => 'E02002398',
        '7QQ' => 'E02002379',
        '7QR' => 'E02002398',
        '7QS' => 'E02002398',
        '7QT' => 'E02002398',
        '7QU' => 'E02002398',
        '7QW' => 'E02002398',
        '7QX' => 'E02002398',
        '7QY' => 'E02002398',
        '7QZ' => 'E02002398',
        '7RA' => 'E02002398',
        '7RB' => 'E02002398',
        '7RD' => 'E02002398',
        '7RE' => 'E02002398',
        '7RF' => 'E02002398',
        '7RG' => 'E02002398',
        '7RH' => 'E02002398',
        '7RJ' => 'E02002398',
        '7RL' => 'E02002398',
        '7RN' => 'E02002398',
        '7RP' => 'E02002398',
        '7RQ' => 'E02002398',
        '7RR' => 'E02002398',
        '7RS' => 'E02002398',
        '7RT' => 'E02002398',
        '7RU' => 'E02002398',
        '7RW' => 'E02002398',
        '7RX' => 'E02002398',
        '7RY' => 'E02002398',
        '7RZ' => 'E02002398',
        '7SA' => 'E02002398',
        '7SB' => 'E02002398',
        '7SD' => 'E02002398',
        '7SE' => 'E02002398',
        '7SF' => 'E02002398',
        '7SG' => 'E02002398',
        '7SH' => 'E02002398',
        '7SJ' => 'E02002398',
        '7SL' => 'E02002398',
        '7SN' => 'E02002398',
        '7SP' => 'E02002398',
        '7SQ' => 'E02002398',
        '7SR' => 'E02002398',
        '7SS' => 'E02002398',
        '7ST' => 'E02002398',
        '7SU' => 'E02002398',
        '7SW' => 'E02002398',
        '7SX' => 'E02002398',
        '7SY' => 'E02002398',
        '7SZ' => 'E02002398',
        '7TA' => 'E02002398',
        '7TB' => 'E02002398',
        '7TD' => 'E02002398',
        '7TE' => 'E02002390',
        '7TF' => 'E02002390',
        '7TG' => 'E02002390',
        '7TH' => 'E02002390',
        '7TJ' => 'E02002390',
        '7TL' => 'E02002398',
        '7TN' => 'E02002390',
        '7TP' => 'E02002390',
        '7TQ' => 'E02002390',
        '7TR' => 'E02002390',
        '7TS' => 'E02002390',
        '7TT' => 'E02002390',
        '7TU' => 'E02002390',
        '7TW' => 'E02002390',
        '7TX' => 'E02002390',
        '7TY' => 'E02002390',
        '7TZ' => 'E02002390',
        '7UA' => 'E02002390',
        '7UB' => 'E02002390',
        '7UD' => 'E02002398',
        '7UE' => 'E02002398',
        '7UF' => 'E02002398',
        '7UG' => 'E02002390',
        '7UU' => 'E02002390',
        '7UX' => 'E02002390',
        '7UY' => 'E02002390',
        '7UZ' => 'E02002390',
        '7WX' => 'E02002358',
        '7WY' => 'E02002358',
        '7WZ' => 'E02002358',
        '7XA' => 'E02002390',
        '7XB' => 'E02002390',
        '7XD' => 'E02002390',
        '7XE' => 'E02002390',
        '7XF' => 'E02002398',
        '7XG' => 'E02002398',
        '7XH' => 'E02002390',
        '7XJ' => 'E02002358',
        '7XL' => 'E02002358',
        '7XN' => 'E02002398',
        '7XP' => 'E02002398',
        '7XQ' => 'E02002390',
        '7XR' => 'E02002398',
        '7XS' => 'E02002398',
        '7XT' => 'E02002398',
        '7XU' => 'E02002398',
        '7XW' => 'E02002398',
        '7XX' => 'E02002358',
        '7XY' => 'E02002358',
        '7XZ' => 'E02002390',
        '7YA' => 'E02002358',
        '7YB' => 'E02002358',
        '7YD' => 'E02002358',
        '7YQ' => 'E02002390',
        '7ZX' => 'E02002358',
        '8AA' => 'E02002386',
        '8AB' => 'E02002386',
        '8AD' => 'E02002386',
        '8AE' => 'E02002386',
        '8AF' => 'E02002386',
        '8AG' => 'E02002386',
        '8AH' => 'E02002386',
        '8AJ' => 'E02002386',
        '8AL' => 'E02002386',
        '8AN' => 'E02002386',
        '8AP' => 'E02002386',
        '8AQ' => 'E02002386',
        '8AR' => 'E02002386',
        '8AS' => 'E02002386',
        '8AT' => 'E02002386',
        '8AU' => 'E02002386',
        '8AW' => 'E02002386',
        '8AX' => 'E02002386',
        '8AY' => 'E02002386',
        '8AZ' => 'E02002386',
        '8BA' => 'E02002386',
        '8BB' => 'E02002386',
        '8BD' => 'E02002386',
        '8BE' => 'E02002386',
        '8BF' => 'E02002386',
        '8BG' => 'E02002386',
        '8BH' => 'E02002386',
        '8BJ' => 'E02002386',
        '8BL' => 'E02002386',
        '8BN' => 'E02002386',
        '8BP' => 'E02002386',
        '8BQ' => 'E02002386',
        '8BR' => 'E02002386',
        '8BS' => 'E02002386',
        '8BT' => 'E02002386',
        '8BU' => 'E02002386',
        '8BW' => 'E02002386',
        '8BX' => 'E02002386',
        '8BY' => 'E02002386',
        '8BZ' => 'E02002386',
        '8DA' => 'E02002390',
        '8DB' => 'E02002386',
        '8DE' => 'E02002386',
        '8DF' => 'E02002386',
        '8DG' => 'E02002386',
        '8DH' => 'E02002386',
        '8DJ' => 'E02002386',
        '8DL' => 'E02002386',
        '8DN' => 'E02002386',
        '8DP' => 'E02002386',
        '8DQ' => 'E02002390',
        '8DR' => 'E02002386',
        '8DS' => 'E02002386',
        '8DT' => 'E02002386',
        '8DU' => 'E02002386',
        '8DW' => 'E02002386',
        '8DX' => 'E02002386',
        '8DY' => 'E02002386',
        '8DZ' => 'E02002386',
        '8EA' => 'E02002386',
        '8EB' => 'E02002386',
        '8ED' => 'E02002386',
        '8EE' => 'E02002386',
        '8EF' => 'E02002386',
        '8EG' => 'E02002386',
        '8EH' => 'E02002386',
        '8EJ' => 'E02002386',
        '8EL' => 'E02002386',
        '8EN' => 'E02002386',
        '8EP' => 'E02002386',
        '8EQ' => 'E02002386',
        '8ER' => 'E02002386',
        '8ES' => 'E02002386',
        '8ET' => 'E02002386',
        '8EU' => 'E02002386',
        '8EW' => 'E02002386',
        '8EX' => 'E02002386',
        '8EY' => 'E02002386',
        '8EZ' => 'E02002386',
        '8FA' => 'E02002386',
        '8FB' => 'E02002402',
        '8FD' => 'E02002402',
        '8FE' => 'E02002386',
        '8FF' => 'E02002386',
        '8FG' => 'E02002386',
        '8FH' => 'E02002386',
        '8FJ' => 'E02002386',
        '8FL' => 'E02002386',
        '8FN' => 'E02002386',
        '8FP' => 'E02002386',
        '8FQ' => 'E02002402',
        '8FR' => 'E02002386',
        '8FS' => 'E02002386',
        '8FT' => 'E02002386',
        '8FW' => 'E02002386',
        '8FX' => 'E02002386',
        '8FY' => 'E02002386',
        '8FZ' => 'E02002386',
        '8GA' => 'E02002386',
        '8GB' => 'E02002402',
        '8GD' => 'E02002386',
        '8GE' => 'E02002386',
        '8GF' => 'E02002386',
        '8GG' => 'E02002402',
        '8GH' => 'E02002402',
        '8GQ' => 'E02002402',
        '8GW' => 'E02002386',
        '8GX' => 'E02002358',
        '8GY' => 'E02002402',
        '8GZ' => 'E02002386',
        '8HA' => 'E02002386',
        '8HB' => 'E02002386',
        '8HD' => 'E02002386',
        '8HE' => 'E02002386',
        '8HF' => 'E02002386',
        '8HG' => 'E02002386',
        '8HH' => 'E02002386',
        '8HJ' => 'E02002386',
        '8HL' => 'E02002386',
        '8HN' => 'E02002386',
        '8HP' => 'E02002386',
        '8HQ' => 'E02002386',
        '8HR' => 'E02002386',
        '8HS' => 'E02002386',
        '8HT' => 'E02002386',
        '8HU' => 'E02002386',
        '8HW' => 'E02002386',
        '8HX' => 'E02002386',
        '8HY' => 'E02002386',
        '8HZ' => 'E02002386',
        '8JA' => 'E02002386',
        '8JB' => 'E02002386',
        '8JD' => 'E02002386',
        '8JE' => 'E02002386',
        '8JF' => 'E02002386',
        '8JG' => 'E02002386',
        '8JH' => 'E02002386',
        '8JJ' => 'E02002386',
        '8JL' => 'E02002386',
        '8JN' => 'E02002386',
        '8JP' => 'E02002386',
        '8JQ' => 'E02002386',
        '8JR' => 'E02002386',
        '8JS' => 'E02002386',
        '8JT' => 'E02002386',
        '8JU' => 'E02002386',
        '8JW' => 'E02002386',
        '8JX' => 'E02002386',
        '8JY' => 'E02002386',
        '8JZ' => 'E02002386',
        '8LA' => 'E02002386',
        '8LB' => 'E02002386',
        '8LD' => 'E02002386',
        '8LE' => 'E02002386',
        '8LF' => 'E02002386',
        '8LG' => 'E02002386',
        '8LH' => 'E02002386',
        '8LJ' => 'E02002386',
        '8LL' => 'E02002386',
        '8LN' => 'E02002386',
        '8LP' => 'E02002386',
        '8LQ' => 'E02002386',
        '8LR' => 'E02002386',
        '8LS' => 'E02002386',
        '8LT' => 'E02002386',
        '8LU' => 'E02002386',
        '8LW' => 'E02002386',
        '8LX' => 'E02002386',
        '8LY' => 'E02002386',
        '8LZ' => 'E02002386',
        '8NA' => 'E02002386',
        '8NB' => 'E02002386',
        '8ND' => 'E02002386',
        '8NE' => 'E02002386',
        '8NF' => 'E02002386',
        '8NG' => 'E02002386',
        '8NH' => 'E02002386',
        '8NJ' => 'E02002386',
        '8NL' => 'E02002402',
        '8NN' => 'E02002402',
        '8NP' => 'E02002358',
        '8NQ' => 'E02002386',
        '8NR' => 'E02002402',
        '8NS' => 'E02002402',
        '8NT' => 'E02002402',
        '8NU' => 'E02002402',
        '8NW' => 'E02002386',
        '8NX' => 'E02002386',
        '8NY' => 'E02002386',
        '8NZ' => 'E02002386',
        '8PA' => 'E02002386',
        '8PB' => 'E02002386',
        '8PD' => 'E02002386',
        '8PE' => 'E02002386',
        '8PF' => 'E02002386',
        '8PG' => 'E02002386',
        '8PH' => 'E02002386',
        '8PJ' => 'E02002386',
        '8PL' => 'E02002386',
        '8PN' => 'E02002386',
        '8PP' => 'E02002402',
        '8PQ' => 'E02002386',
        '8PR' => 'E02002402',
        '8PS' => 'E02002402',
        '8PT' => 'E02002402',
        '8PU' => 'E02002402',
        '8PW' => 'E02002402',
        '8PX' => 'E02002402',
        '8PY' => 'E02002402',
        '8PZ' => 'E02002402',
        '8QA' => 'E02002402',
        '8QB' => 'E02002402',
        '8QD' => 'E02002402',
        '8QE' => 'E02002402',
        '8QF' => 'E02002402',
        '8QG' => 'E02002402',
        '8QH' => 'E02002402',
        '8QJ' => 'E02002402',
        '8QL' => 'E02002402',
        '8QN' => 'E02002402',
        '8QP' => 'E02002386',
        '8QQ' => 'E02002402',
        '8QR' => 'E02002386',
        '8QS' => 'E02002386',
        '8QT' => 'E02002386',
        '8QU' => 'E02002386',
        '8QW' => 'E02002416',
        '8QX' => 'E02002386',
        '8QY' => 'E02002386',
        '8QZ' => 'E02002386',
        '8RA' => 'E02002386',
        '8RB' => 'E02002386',
        '8RD' => 'E02002386',
        '8RE' => 'E02002386',
        '8RF' => 'E02002386',
        '8RG' => 'E02002386',
        '8RH' => 'E02002386',
        '8RJ' => 'E02002386',
        '8RL' => 'E02002386',
        '8RN' => 'E02002386',
        '8RP' => 'E02002386',
        '8RQ' => 'E02002386',
        '8RR' => 'E02002386',
        '8RS' => 'E02002386',
        '8RT' => 'E02002386',
        '8RU' => 'E02002386',
        '8RW' => 'E02002386',
        '8RX' => 'E02002386',
        '8RY' => 'E02002386',
        '8RZ' => 'E02002386',
        '8SA' => 'E02002386',
        '8SB' => 'E02002386',
        '8SD' => 'E02002386',
        '8SE' => 'E02002370',
        '8SF' => 'E02002386',
        '8SG' => 'E02002386',
        '8SH' => 'E02002386',
        '8SJ' => 'E02002370',
        '8SL' => 'E02002386',
        '8SN' => 'E02002386',
        '8SP' => 'E02002370',
        '8SQ' => 'E02002386',
        '8SR' => 'E02002370',
        '8SS' => 'E02002370',
        '8ST' => 'E02002386',
        '8SU' => 'E02002386',
        '8SW' => 'E02002386',
        '8SX' => 'E02002386',
        '8SY' => 'E02002386',
        '8SZ' => 'E02002386',
        '8TA' => 'E02002386',
        '8TB' => 'E02002358',
        '8TD' => 'E02002358',
        '8TE' => 'E02002402',
        '8TF' => 'E02002402',
        '8TG' => 'E02002402',
        '8TH' => 'E02002386',
        '8TJ' => 'E02002386',
        '8TL' => 'E02002386',
        '8TN' => 'E02002386',
        '8TP' => 'E02002402',
        '8TQ' => 'E02002358',
        '8TS' => 'E02002386',
        '8TT' => 'E02002386',
        '8TU' => 'E02002416',
        '8TW' => 'E02002386',
        '8TX' => 'E02002386',
        '8TY' => 'E02002386',
        '8TZ' => 'E02002386',
        '8UA' => 'E02002386',
        '8UB' => 'E02002386',
        '8UD' => 'E02002386',
        '8UE' => 'E02002386',
        '8UF' => 'E02002386',
        '8UG' => 'E02002386',
        '8UH' => 'E02002386',
        '8UJ' => 'E02002386',
        '8UL' => 'E02002386',
        '8UN' => 'E02002386',
        '8UP' => 'E02002386',
        '8UQ' => 'E02002386',
        '8UR' => 'E02002358',
        '8US' => 'E02002386',
        '8UT' => 'E02002386',
        '8UU' => 'E02002386',
        '8UW' => 'E02002386',
        '8UX' => 'E02002386',
        '8UY' => 'E02002386',
        '8UZ' => 'E02002358',
        '8WA' => 'E02002358',
        '8WF' => 'E02002386',
        '8WG' => 'E02002386',
        '8WJ' => 'E02002386',
        '8WQ' => 'E02002386',
        '8WS' => 'E02002386',
        '8WX' => 'E02002358',
        '8WY' => 'E02002358',
        '8WZ' => 'E02002358',
        '8XA' => 'E02002386',
        '8XB' => 'E02002386',
        '8XD' => 'E02002386',
        '8XE' => 'E02002386',
        '8XF' => 'E02002386',
        '8XG' => 'E02002386',
        '8XH' => 'E02002386',
        '8XJ' => 'E02002386',
        '8XL' => 'E02002386',
        '8XN' => 'E02002386',
        '8XP' => 'E02002358',
        '8XQ' => 'E02002386',
        '8XR' => 'E02002386',
        '8XS' => 'E02002386',
        '8XT' => 'E02002358',
        '8XU' => 'E02002358',
        '8XW' => 'E02002358',
        '8XX' => 'E02002358',
        '8XY' => 'E02002386',
        '8XZ' => 'E02002358',
        '8YA' => 'E02002386',
        '8YB' => 'E02002358',
        '8YD' => 'E02002358',
        '8YG' => 'E02002358',
        '8YP' => 'E02002358',
        '8YQ' => 'E02002386',
        '8YR' => 'E02002358',
        '8ZA' => 'E02002416',
        '8ZB' => 'E02002402',
        '8ZD' => 'E02002358',
        '8ZG' => 'E02002358',
        '8ZJ' => 'E02002358',
        '8ZT' => 'E02002358',
        '8ZU' => 'E02002358',
        '8ZX' => 'E02002358',
        '9AA' => 'E02002402',
        '9AB' => 'E02002402',
        '9AD' => 'E02002398',
        '9AE' => 'E02002402',
        '9AF' => 'E02002402',
        '9AG' => 'E02002402',
        '9AH' => 'E02002402',
        '9AJ' => 'E02002402',
        '9AL' => 'E02002402',
        '9AN' => 'E02002402',
        '9AP' => 'E02002402',
        '9AQ' => 'E02002402',
        '9AR' => 'E02002402',
        '9AS' => 'E02002402',
        '9AT' => 'E02002402',
        '9AU' => 'E02002402',
        '9AW' => 'E02002402',
        '9AX' => 'E02002402',
        '9AY' => 'E02002402',
        '9AZ' => 'E02002402',
        '9BA' => 'E02002402',
        '9BB' => 'E02002402',
        '9BD' => 'E02002402',
        '9BE' => 'E02002402',
        '9BG' => 'E02002402',
        '9BH' => 'E02002416',
        '9BJ' => 'E02002402',
        '9BL' => 'E02002402',
        '9BN' => 'E02002402',
        '9BP' => 'E02002402',
        '9BQ' => 'E02002402',
        '9BW' => 'E02002402',
        '9BY' => 'E02002402',
        '9BZ' => 'E02002402',
        '9DA' => 'E02002402',
        '9DB' => 'E02002402',
        '9DD' => 'E02002402',
        '9DE' => 'E02002402',
        '9DF' => 'E02002402',
        '9DG' => 'E02002402',
        '9DH' => 'E02002402',
        '9DJ' => 'E02002402',
        '9DL' => 'E02002402',
        '9DN' => 'E02002402',
        '9DP' => 'E02002402',
        '9DQ' => 'E02002402',
        '9DR' => 'E02002402',
        '9DS' => 'E02002402',
        '9DT' => 'E02002402',
        '9DW' => 'E02002402',
        '9DX' => 'E02002402',
        '9DY' => 'E02002402',
        '9DZ' => 'E02002402',
        '9EA' => 'E02002402',
        '9EB' => 'E02002402',
        '9ED' => 'E02002402',
        '9EE' => 'E02002402',
        '9EF' => 'E02002402',
        '9EG' => 'E02002402',
        '9EH' => 'E02002402',
        '9EJ' => 'E02002402',
        '9EL' => 'E02002402',
        '9EN' => 'E02002402',
        '9EP' => 'E02002402',
        '9EQ' => 'E02002402',
        '9ER' => 'E02002402',
        '9ES' => 'E02002402',
        '9ET' => 'E02002402',
        '9EU' => 'E02002402',
        '9EW' => 'E02002402',
        '9EX' => 'E02002402',
        '9EY' => 'E02002402',
        '9HA' => 'E02002402',
        '9HB' => 'E02002402',
        '9HD' => 'E02002402',
        '9HE' => 'E02002402',
        '9HF' => 'E02002402',
        '9HG' => 'E02002402',
        '9HH' => 'E02002402',
        '9HL' => 'E02002402',
        '9HN' => 'E02002402',
        '9HP' => 'E02002402',
        '9HR' => 'E02002402',
        '9HS' => 'E02002402',
        '9HU' => 'E02002402',
        '9HW' => 'E02002402',
        '9HX' => 'E02002402',
        '9HY' => 'E02002402',
        '9HZ' => 'E02002402',
        '9JA' => 'E02002402',
        '9JB' => 'E02002402',
        '9JD' => 'E02002402',
        '9JE' => 'E02002402',
        '9JF' => 'E02002402',
        '9JG' => 'E02002402',
        '9JH' => 'E02002402',
        '9JJ' => 'E02002402',
        '9JL' => 'E02002416',
        '9JN' => 'E02002402',
        '9JP' => 'E02002402',
        '9JQ' => 'E02002402',
        '9JR' => 'E02002402',
        '9JS' => 'E02002402',
        '9JT' => 'E02002402',
        '9JU' => 'E02002402',
        '9JW' => 'E02002416',
        '9JX' => 'E02002416',
        '9JY' => 'E02002416',
        '9JZ' => 'E02002416',
        '9LA' => 'E02002402',
        '9LB' => 'E02002402',
        '9LD' => 'E02002402',
        '9LE' => 'E02002416',
        '9TB' => 'E02002402',
        '9TE' => 'E02002402',
        '9TF' => 'E02002402',
        '9TG' => 'E02002358',
        '9TH' => 'E02002402',
        '9TJ' => 'E02002358',
        '9TQ' => 'E02002402',
        '9WW' => 'E02002358',
        '9WX' => 'E02002358',
        '9WY' => 'E02002402',
        '9WZ' => 'E02002358',
        '9XA' => 'E02002402',
        '9XB' => 'E02002402',
        '9XD' => 'E02002358',
        '9XE' => 'E02002402',
        '9XF' => 'E02002358',
        '9XG' => 'E02002402',
        '9XH' => 'E02002358',
        '9XJ' => 'E02002402',
        '9XL' => 'E02002358',
        '9XN' => 'E02002402',
        '9XP' => 'E02002402',
        '9XQ' => 'E02002402',
        '9XR' => 'E02002402',
        '9XS' => 'E02002402',
        '9XT' => 'E02002358',
        '9XU' => 'E02002402',
        '9XW' => 'E02002402',
        '9XX' => 'E02002358',
        '9XY' => 'E02002358',
        '9YL' => 'E02002402',
        '9YR' => 'E02002402',
        '9ZX' => 'E02002358',
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
