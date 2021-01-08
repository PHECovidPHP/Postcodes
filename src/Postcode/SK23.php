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
final class SK23
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0BA' => 'E02006872',
        '0BB' => 'E02006872',
        '0DA' => 'E02006872',
        '0DZ' => 'E02006872',
        '0EL' => 'E02006872',
        '0EN' => 'E02006872',
        '0EP' => 'E02006872',
        '0EQ' => 'E02006872',
        '0ER' => 'E02006872',
        '0ES' => 'E02006872',
        '0ET' => 'E02006872',
        '0EU' => 'E02006872',
        '0EW' => 'E02006872',
        '0EX' => 'E02006872',
        '0EZ' => 'E02006872',
        '0FA' => 'E02006872',
        '0FB' => 'E02006872',
        '0FD' => 'E02006872',
        '0FE' => 'E02006872',
        '0FF' => 'E02006872',
        '0FG' => 'E02006872',
        '0FH' => 'E02006872',
        '0FJ' => 'E02006872',
        '0FL' => 'E02006872',
        '0FN' => 'E02006872',
        '0HA' => 'E02006872',
        '0HB' => 'E02006872',
        '0HD' => 'E02006872',
        '0HE' => 'E02006872',
        '0HH' => 'E02006872',
        '0HJ' => 'E02006872',
        '0HL' => 'E02006872',
        '0HN' => 'E02006872',
        '0HP' => 'E02006872',
        '0HQ' => 'E02006872',
        '0HR' => 'E02006872',
        '0HS' => 'E02006872',
        '0HT' => 'E02006872',
        '0HU' => 'E02006872',
        '0HW' => 'E02006872',
        '0HX' => 'E02006872',
        '0HY' => 'E02006872',
        '0HZ' => 'E02006872',
        '0JA' => 'E02006872',
        '0JB' => 'E02006872',
        '0JD' => 'E02006872',
        '0JE' => 'E02006872',
        '0JF' => 'E02006872',
        '0JG' => 'E02006872',
        '0JH' => 'E02006872',
        '0JJ' => 'E02006872',
        '0JL' => 'E02006872',
        '0JN' => 'E02006872',
        '0JP' => 'E02006872',
        '0JQ' => 'E02006872',
        '0JR' => 'E02006872',
        '0JS' => 'E02006872',
        '0JT' => 'E02006872',
        '0JU' => 'E02006872',
        '0JW' => 'E02006872',
        '0JX' => 'E02006872',
        '0JY' => 'E02006872',
        '0JZ' => 'E02006872',
        '0LA' => 'E02006872',
        '0LB' => 'E02006872',
        '0LD' => 'E02006872',
        '0LE' => 'E02006872',
        '0LF' => 'E02006872',
        '0LG' => 'E02006872',
        '0LH' => 'E02006872',
        '0LJ' => 'E02006872',
        '0LL' => 'E02006872',
        '0LN' => 'E02006872',
        '0LP' => 'E02006872',
        '0LQ' => 'E02006872',
        '0LR' => 'E02006872',
        '0LS' => 'E02006872',
        '0LT' => 'E02006872',
        '0LU' => 'E02006872',
        '0LW' => 'E02006872',
        '0LX' => 'E02006872',
        '0LY' => 'E02006872',
        '0LZ' => 'E02006872',
        '0NA' => 'E02006872',
        '0NB' => 'E02006872',
        '0ND' => 'E02006872',
        '0NE' => 'E02006872',
        '0NF' => 'E02006872',
        '0NG' => 'E02006872',
        '0NH' => 'E02006872',
        '0NJ' => 'E02006872',
        '0NL' => 'E02006872',
        '0NN' => 'E02006872',
        '0NP' => 'E02006872',
        '0NQ' => 'E02006872',
        '0NR' => 'E02006872',
        '0NS' => 'E02006872',
        '0NT' => 'E02006872',
        '0NU' => 'E02006872',
        '0NW' => 'E02006872',
        '0NX' => 'E02006872',
        '0NY' => 'E02006872',
        '0NZ' => 'E02006872',
        '0PA' => 'E02006872',
        '0PB' => 'E02006872',
        '0PD' => 'E02006872',
        '0PE' => 'E02006872',
        '0PF' => 'E02006872',
        '0PG' => 'E02006872',
        '0PH' => 'E02006872',
        '0PJ' => 'E02006872',
        '0PL' => 'E02006872',
        '0PN' => 'E02006872',
        '0PP' => 'E02006872',
        '0PQ' => 'E02006872',
        '0PR' => 'E02006872',
        '0PS' => 'E02006872',
        '0PT' => 'E02006872',
        '0PU' => 'E02006872',
        '0PW' => 'E02006872',
        '0PX' => 'E02006872',
        '0PY' => 'E02006872',
        '0PZ' => 'E02006872',
        '0QA' => 'E02006872',
        '0QB' => 'E02006872',
        '0QD' => 'E02006872',
        '0QE' => 'E02006872',
        '0QF' => 'E02006872',
        '0QG' => 'E02006872',
        '0QH' => 'E02006872',
        '0QJ' => 'E02004100',
        '0QL' => 'E02004100',
        '0QN' => 'E02004100',
        '0QP' => 'E02006872',
        '0QQ' => 'E02004100',
        '0QR' => 'E02006872',
        '0QS' => 'E02006872',
        '0QT' => 'E02006872',
        '0QU' => 'E02006872',
        '0QW' => 'E02004100',
        '0QX' => 'E02006872',
        '0QY' => 'E02006872',
        '0QZ' => 'E02006872',
        '0RA' => 'E02006872',
        '0RB' => 'E02006872',
        '0RD' => 'E02006872',
        '0RE' => 'E02006872',
        '0RF' => 'E02006872',
        '0RG' => 'E02006872',
        '0RH' => 'E02006872',
        '0RJ' => 'E02006872',
        '0RL' => 'E02006872',
        '0RN' => 'E02006872',
        '0RP' => 'E02006872',
        '0SA' => 'E02004100',
        '0SB' => 'E02004100',
        '0SD' => 'E02004100',
        '0SE' => 'E02004100',
        '0SF' => 'E02004100',
        '0SG' => 'E02004100',
        '0SH' => 'E02004100',
        '0SJ' => 'E02004100',
        '0SL' => 'E02004100',
        '0SN' => 'E02004100',
        '0SP' => 'E02004100',
        '0SQ' => 'E02004100',
        '0SR' => 'E02004100',
        '0SS' => 'E02004100',
        '0ST' => 'E02004100',
        '0SU' => 'E02004100',
        '0SW' => 'E02004100',
        '0SX' => 'E02004100',
        '0SZ' => 'E02006872',
        '0TA' => 'E02006872',
        '0TB' => 'E02004100',
        '0TD' => 'E02004100',
        '0TF' => 'E02006872',
        '0TH' => 'E02006872',
        '0TJ' => 'E02004100',
        '0TL' => 'E02004100',
        '0TN' => 'E02004100',
        '0TP' => 'E02004100',
        '0TQ' => 'E02006872',
        '0TR' => 'E02004100',
        '0TS' => 'E02006872',
        '0TT' => 'E02004100',
        '0TU' => 'E02004100',
        '0TW' => 'E02004100',
        '0TX' => 'E02004100',
        '0TY' => 'E02006872',
        '0UA' => 'E02006872',
        '0UB' => 'E02006872',
        '0UD' => 'E02006872',
        '0UE' => 'E02006872',
        '0UF' => 'E02006872',
        '0UG' => 'E02006872',
        '0UH' => 'E02006872',
        '0UJ' => 'E02006872',
        '0WA' => 'E02006872',
        '0WB' => 'E02006872',
        '0WN' => 'E02006872',
        '0WP' => 'E02006872',
        '0WQ' => 'E02006872',
        '0WR' => 'E02006872',
        '0WS' => 'E02006872',
        '0WT' => 'E02006872',
        '0WU' => 'E02006872',
        '0WW' => 'E02006872',
        '0WX' => 'E02006872',
        '0WZ' => 'E02006872',
        '0XA' => 'E02006872',
        '0XB' => 'E02006872',
        '0XD' => 'E02006872',
        '0XP' => 'E02006872',
        '0XR' => 'E02006872',
        '0XS' => 'E02006872',
        '0XT' => 'E02006872',
        '0XU' => 'E02006872',
        '0ZE' => 'E02006872',
        '0ZX' => 'E02006872',
        '0ZY' => 'E02006872',
        '6AA' => 'E02004100',
        '6AB' => 'E02004100',
        '6AD' => 'E02004098',
        '6AE' => 'E02004100',
        '6AF' => 'E02004100',
        '6AG' => 'E02004100',
        '6AH' => 'E02004100',
        '6AJ' => 'E02004098',
        '6AL' => 'E02004100',
        '6AN' => 'E02004100',
        '6AP' => 'E02004100',
        '6AQ' => 'E02004100',
        '6AR' => 'E02004100',
        '6AS' => 'E02004098',
        '6AT' => 'E02004100',
        '6AU' => 'E02004098',
        '6AW' => 'E02004100',
        '6AX' => 'E02004098',
        '6AY' => 'E02004100',
        '6AZ' => 'E02004098',
        '6BA' => 'E02004098',
        '6BB' => 'E02004100',
        '6BD' => 'E02004098',
        '6BE' => 'E02004098',
        '6BF' => 'E02004100',
        '6BG' => 'E02004098',
        '6BH' => 'E02004098',
        '6BJ' => 'E02004098',
        '6BL' => 'E02004098',
        '6BN' => 'E02004100',
        '6BP' => 'E02004100',
        '6BQ' => 'E02004100',
        '6BR' => 'E02004100',
        '6BS' => 'E02004098',
        '6BT' => 'E02004098',
        '6BU' => 'E02004100',
        '6BW' => 'E02004100',
        '6BX' => 'E02004100',
        '6BY' => 'E02004100',
        '6BZ' => 'E02004098',
        '6DA' => 'E02004098',
        '6DB' => 'E02004098',
        '6DD' => 'E02004100',
        '6DE' => 'E02004100',
        '6DF' => 'E02004100',
        '6DG' => 'E02004100',
        '6DH' => 'E02004100',
        '6DJ' => 'E02004100',
        '6DL' => 'E02004100',
        '6DN' => 'E02004100',
        '6DP' => 'E02004100',
        '6DQ' => 'E02004100',
        '6DR' => 'E02004100',
        '6DS' => 'E02004100',
        '6DT' => 'E02004100',
        '6DU' => 'E02004100',
        '6DW' => 'E02004100',
        '6DX' => 'E02004100',
        '6DY' => 'E02004100',
        '6DZ' => 'E02004100',
        '6EA' => 'E02004100',
        '6EB' => 'E02004100',
        '6ED' => 'E02004098',
        '6EE' => 'E02004100',
        '6EF' => 'E02004100',
        '6EG' => 'E02004100',
        '6EH' => 'E02004100',
        '6EJ' => 'E02004100',
        '6EL' => 'E02004100',
        '6EN' => 'E02004100',
        '6EP' => 'E02004100',
        '6EQ' => 'E02004100',
        '6ES' => 'E02004100',
        '6ET' => 'E02004098',
        '6EU' => 'E02004098',
        '6EW' => 'E02004100',
        '6EY' => 'E02004098',
        '6FA' => 'E02004098',
        '6FB' => 'E02004098',
        '6FD' => 'E02004098',
        '6FE' => 'E02004098',
        '6FF' => 'E02004100',
        '6FG' => 'E02004100',
        '6FH' => 'E02004100',
        '6FJ' => 'E02004100',
        '6WA' => 'E02004100',
        '6WL' => 'E02004100',
        '6WN' => 'E02004098',
        '6WP' => 'E02004098',
        '6WQ' => 'E02004100',
        '6WR' => 'E02004100',
        '6WS' => 'E02004100',
        '6WT' => 'E02004100',
        '6WU' => 'E02004100',
        '6WW' => 'E02004100',
        '6WX' => 'E02004100',
        '6WY' => 'E02004100',
        '6WZ' => 'E02004100',
        '6XA' => 'E02006872',
        '6XB' => 'E02004098',
        '6ZA' => 'E02006872',
        '6ZD' => 'E02004100',
        '6ZU' => 'E02004100',
        '6ZW' => 'E02004100',
        '7AA' => 'E02004100',
        '7AB' => 'E02004097',
        '7AD' => 'E02004100',
        '7AE' => 'E02004100',
        '7AF' => 'E02004100',
        '7AG' => 'E02004100',
        '7AH' => 'E02004100',
        '7AJ' => 'E02004100',
        '7AL' => 'E02004100',
        '7AN' => 'E02004100',
        '7AP' => 'E02004100',
        '7AQ' => 'E02004100',
        '7AR' => 'E02004100',
        '7AS' => 'E02004100',
        '7AT' => 'E02004100',
        '7AU' => 'E02004100',
        '7AW' => 'E02004100',
        '7AX' => 'E02004100',
        '7AY' => 'E02004100',
        '7AZ' => 'E02004100',
        '7BA' => 'E02004100',
        '7BB' => 'E02004097',
        '7BD' => 'E02004100',
        '7BE' => 'E02004100',
        '7BF' => 'E02004100',
        '7BG' => 'E02004097',
        '7BH' => 'E02004097',
        '7BJ' => 'E02004100',
        '7BL' => 'E02004100',
        '7BN' => 'E02004100',
        '7BP' => 'E02004100',
        '7BQ' => 'E02004097',
        '7BR' => 'E02004100',
        '7BS' => 'E02003853',
        '7BT' => 'E02003853',
        '7BU' => 'E02004100',
        '7BW' => 'E02004100',
        '7BX' => 'E02004100',
        '7BY' => 'E02004100',
        '7BZ' => 'E02004100',
        '7DA' => 'E02004100',
        '7DB' => 'E02004100',
        '7DD' => 'E02004100',
        '7DE' => 'E02004100',
        '7DF' => 'E02004100',
        '7DG' => 'E02004100',
        '7DH' => 'E02004100',
        '7DJ' => 'E02004100',
        '7DL' => 'E02004100',
        '7DN' => 'E02004100',
        '7DP' => 'E02004100',
        '7DQ' => 'E02004100',
        '7DR' => 'E02004100',
        '7DS' => 'E02004100',
        '7DT' => 'E02004100',
        '7DU' => 'E02004100',
        '7DW' => 'E02004100',
        '7DX' => 'E02004100',
        '7DY' => 'E02004100',
        '7DZ' => 'E02004100',
        '7EA' => 'E02004100',
        '7EB' => 'E02004100',
        '7ED' => 'E02004100',
        '7EE' => 'E02004098',
        '7EF' => 'E02004100',
        '7EG' => 'E02004100',
        '7EH' => 'E02003872',
        '7EJ' => 'E02003872',
        '7EL' => 'E02004100',
        '7EN' => 'E02004100',
        '7EP' => 'E02004100',
        '7EQ' => 'E02004100',
        '7ER' => 'E02004100',
        '7ES' => 'E02004100',
        '7ET' => 'E02006872',
        '7EU' => 'E02004100',
        '7EW' => 'E02004100',
        '7EX' => 'E02004100',
        '7EY' => 'E02004100',
        '7EZ' => 'E02004100',
        '7FA' => 'E02004100',
        '7FB' => 'E02004100',
        '7FD' => 'E02004100',
        '7FE' => 'E02004100',
        '7FF' => 'E02004100',
        '7FG' => 'E02004100',
        '7FH' => 'E02004100',
        '7FJ' => 'E02006872',
        '7FL' => 'E02004100',
        '7FN' => 'E02004100',
        '7FP' => 'E02004100',
        '7FQ' => 'E02004100',
        '7FR' => 'E02004100',
        '7FS' => 'E02006872',
        '7FT' => 'E02004100',
        '7FU' => 'E02004100',
        '7FW' => 'E02004100',
        '7FX' => 'E02004100',
        '7FY' => 'E02004100',
        '7FZ' => 'E02004100',
        '7GA' => 'E02004100',
        '7GB' => 'E02004100',
        '7GD' => 'E02004100',
        '7GE' => 'E02004100',
        '7GF' => 'E02004100',
        '7GG' => 'E02004100',
        '7GH' => 'E02004100',
        '7GJ' => 'E02004100',
        '7GL' => 'E02004100',
        '7GN' => 'E02004100',
        '7GX' => 'E02004100',
        '7GY' => 'E02004100',
        '7GZ' => 'E02004100',
        '7HA' => 'E02004100',
        '7HB' => 'E02004100',
        '7HD' => 'E02004100',
        '7HE' => 'E02004100',
        '7HF' => 'E02004100',
        '7HN' => 'E02004100',
        '7HP' => 'E02004100',
        '7HR' => 'E02004100',
        '7HS' => 'E02004100',
        '7HT' => 'E02004100',
        '7HU' => 'E02004100',
        '7HW' => 'E02004100',
        '7HX' => 'E02004100',
        '7HY' => 'E02004100',
        '7HZ' => 'E02004100',
        '7JA' => 'E02004100',
        '7JB' => 'E02004100',
        '7JD' => 'E02004100',
        '7JE' => 'E02004100',
        '7JF' => 'E02004100',
        '7JG' => 'E02004100',
        '7JH' => 'E02004100',
        '7JL' => 'E02004100',
        '7JN' => 'E02004100',
        '7JP' => 'E02004100',
        '7JQ' => 'E02004100',
        '7JR' => 'E02004100',
        '7JS' => 'E02004100',
        '7JT' => 'E02004100',
        '7JU' => 'E02004100',
        '7JW' => 'E02004100',
        '7JX' => 'E02004100',
        '7JY' => 'E02004100',
        '7JZ' => 'E02004100',
        '7LA' => 'E02004100',
        '7LB' => 'E02004100',
        '7LD' => 'E02004100',
        '7LE' => 'E02004100',
        '7LF' => 'E02004100',
        '7LG' => 'E02004100',
        '7LH' => 'E02004100',
        '7LJ' => 'E02004100',
        '7LL' => 'E02004100',
        '7LP' => 'E02004100',
        '7LR' => 'E02004100',
        '7LS' => 'E02004100',
        '7LT' => 'E02004100',
        '7LU' => 'E02004100',
        '7LX' => 'E02004100',
        '7LY' => 'E02004100',
        '7LZ' => 'E02004100',
        '7NA' => 'E02004100',
        '7NB' => 'E02004100',
        '7ND' => 'E02004100',
        '7NE' => 'E02004098',
        '7NF' => 'E02004098',
        '7NG' => 'E02004100',
        '7NH' => 'E02004098',
        '7NJ' => 'E02004098',
        '7NL' => 'E02004098',
        '7NN' => 'E02004098',
        '7NP' => 'E02004098',
        '7NQ' => 'E02004098',
        '7NR' => 'E02004098',
        '7NS' => 'E02004098',
        '7NT' => 'E02004100',
        '7NU' => 'E02006872',
        '7NW' => 'E02004098',
        '7NX' => 'E02004098',
        '7NY' => 'E02004100',
        '7NZ' => 'E02004097',
        '7PA' => 'E02004100',
        '7PB' => 'E02004100',
        '7PD' => 'E02004100',
        '7PE' => 'E02004097',
        '7PF' => 'E02004097',
        '7PG' => 'E02004097',
        '7PH' => 'E02004097',
        '7PJ' => 'E02004097',
        '7PL' => 'E02004097',
        '7PN' => 'E02004097',
        '7PP' => 'E02004097',
        '7PQ' => 'E02004097',
        '7PR' => 'E02004097',
        '7PS' => 'E02004097',
        '7PT' => 'E02004097',
        '7PU' => 'E02004097',
        '7PW' => 'E02004097',
        '7PX' => 'E02004097',
        '7PY' => 'E02004097',
        '7PZ' => 'E02004097',
        '7QA' => 'E02004097',
        '7QB' => 'E02004097',
        '7QD' => 'E02004097',
        '7QE' => 'E02004098',
        '7QF' => 'E02004098',
        '7QG' => 'E02004098',
        '7QH' => 'E02004098',
        '7QJ' => 'E02004098',
        '7QL' => 'E02004098',
        '7QN' => 'E02004097',
        '7QP' => 'E02004097',
        '7QQ' => 'E02004098',
        '7QR' => 'E02004097',
        '7QS' => 'E02004097',
        '7QT' => 'E02006872',
        '7QU' => 'E02003872',
        '7QW' => 'E02004097',
        '7QX' => 'E02003872',
        '7QY' => 'E02003872',
        '7QZ' => 'E02003872',
        '7RA' => 'E02003872',
        '7RB' => 'E02003872',
        '7RD' => 'E02003872',
        '7RE' => 'E02003853',
        '7RF' => 'E02003872',
        '7RG' => 'E02003872',
        '7RH' => 'E02004098',
        '7RN' => 'E02003872',
        '7RR' => 'E02004100',
        '7RS' => 'E02004097',
        '7RT' => 'E02004100',
        '7RU' => 'E02004097',
        '7RX' => 'E02004100',
        '7RY' => 'E02004097',
        '7RZ' => 'E02004100',
        '7SA' => 'E02004100',
        '7SB' => 'E02004100',
        '7SD' => 'E02004098',
        '7SE' => 'E02004098',
        '7SN' => 'E02004097',
        '7SP' => 'E02004100',
        '7SR' => 'E02004100',
        '7SW' => 'E02004097',
        '7TA' => 'E02004098',
        '7TB' => 'E02004098',
        '7TD' => 'E02004098',
        '7TE' => 'E02003872',
        '7TF' => 'E02004100',
        '7UA' => 'E02004097',
        '7UT' => 'E02004100',
        '7UU' => 'E02006872',
        '7UW' => 'E02006872',
        '7UX' => 'E02004100',
        '7UY' => 'E02004100',
        '7UZ' => 'E02004100',
        '7WA' => 'E02004100',
        '7WB' => 'E02004100',
        '7WD' => 'E02004100',
        '7WE' => 'E02004100',
        '7WF' => 'E02004100',
        '7WG' => 'E02004100',
        '7WH' => 'E02006872',
        '7WJ' => 'E02004100',
        '7WL' => 'E02006872',
        '7WN' => 'E02004100',
        '7WP' => 'E02004100',
        '7WQ' => 'E02004097',
        '7WR' => 'E02004100',
        '7WS' => 'E02004100',
        '7WT' => 'E02004100',
        '7WU' => 'E02006872',
        '7WW' => 'E02006872',
        '7WX' => 'E02006872',
        '7WY' => 'E02004100',
        '7WZ' => 'E02006872',
        '7XA' => 'E02004100',
        '7XB' => 'E02004100',
        '7XD' => 'E02004102',
        '7XE' => 'E02006872',
        '7XW' => 'E02004100',
        '7XX' => 'E02004100',
        '7XY' => 'E02004100',
        '7XZ' => 'E02006872',
        '7YT' => 'E02004100',
        '7YU' => 'E02004100',
        '7YW' => 'E02004100',
        '7YZ' => 'E02004100',
        '7ZA' => 'E02004102',
        '7ZT' => 'E02004102',
        '7ZU' => 'E02006872',
        '7ZW' => 'E02004100',
        '9AA' => 'E02004100',
        '9AB' => 'E02004100',
        '9AD' => 'E02004100',
        '9AE' => 'E02004100',
        '9EQ' => 'E02006872',
        '9FA' => 'E02006872',
        '9FB' => 'E02006872',
        '9FD' => 'E02006872',
        '9FE' => 'E02006872',
        '9FF' => 'E02006872',
        '9FG' => 'E02006872',
        '9HF' => 'E02006872',
        '9HG' => 'E02006872',
        '9RD' => 'E02006872',
        '9RE' => 'E02006872',
        '9RG' => 'E02006872',
        '9RJ' => 'E02006872',
        '9RL' => 'E02006872',
        '9RN' => 'E02006872',
        '9RP' => 'E02006872',
        '9RQ' => 'E02006872',
        '9RR' => 'E02006872',
        '9RS' => 'E02004100',
        '9RT' => 'E02004100',
        '9RU' => 'E02006872',
        '9RW' => 'E02006872',
        '9RX' => 'E02004100',
        '9RY' => 'E02004100',
        '9RZ' => 'E02004100',
        '9SA' => 'E02006872',
        '9SB' => 'E02006872',
        '9SD' => 'E02006872',
        '9SE' => 'E02006872',
        '9SF' => 'E02006872',
        '9SG' => 'E02006872',
        '9SH' => 'E02006872',
        '9SQ' => 'E02006872',
        '9SR' => 'E02006872',
        '9SS' => 'E02006872',
        '9ST' => 'E02006872',
        '9SU' => 'E02006872',
        '9SW' => 'E02006872',
        '9SX' => 'E02006872',
        '9SY' => 'E02006872',
        '9TA' => 'E02006872',
        '9TB' => 'E02006872',
        '9TE' => 'E02006872',
        '9TH' => 'E02006872',
        '9TJ' => 'E02006872',
        '9TL' => 'E02006872',
        '9TN' => 'E02004100',
        '9TP' => 'E02004100',
        '9TQ' => 'E02004100',
        '9TR' => 'E02006872',
        '9TS' => 'E02006872',
        '9TT' => 'E02006872',
        '9TU' => 'E02006872',
        '9TW' => 'E02004100',
        '9TX' => 'E02006872',
        '9TZ' => 'E02006872',
        '9UA' => 'E02006872',
        '9UB' => 'E02006872',
        '9UD' => 'E02006872',
        '9UE' => 'E02006872',
        '9UF' => 'E02006872',
        '9UG' => 'E02006872',
        '9UH' => 'E02004100',
        '9UJ' => 'E02006872',
        '9UL' => 'E02004100',
        '9UN' => 'E02004100',
        '9UP' => 'E02004100',
        '9UQ' => 'E02004100',
        '9UR' => 'E02006872',
        '9US' => 'E02004100',
        '9UT' => 'E02004100',
        '9UU' => 'E02004100',
        '9UW' => 'E02004100',
        '9UX' => 'E02004100',
        '9UY' => 'E02004100',
        '9UZ' => 'E02004100',
        '9WA' => 'E02006872',
        '9WR' => 'E02006872',
        '9WS' => 'E02006872',
        '9WT' => 'E02006872',
        '9WU' => 'E02006872',
        '9WW' => 'E02006872',
        '9WX' => 'E02006872',
        '9WY' => 'E02004100',
        '9WZ' => 'E02004100',
        '9XA' => 'E02004100',
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
