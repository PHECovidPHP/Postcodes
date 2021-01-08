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
final class WS10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002047',
        '0AB' => 'E02002043',
        '0AD' => 'E02002047',
        '0AE' => 'E02002047',
        '0AG' => 'E02002047',
        '0AH' => 'E02002047',
        '0AJ' => 'E02002043',
        '0AN' => 'E02002047',
        '0AP' => 'E02002055',
        '0AQ' => 'E02002047',
        '0AR' => 'E02002047',
        '0AS' => 'E02002047',
        '0AT' => 'E02002055',
        '0AU' => 'E02002045',
        '0AW' => 'E02002047',
        '0AX' => 'E02002055',
        '0AY' => 'E02002047',
        '0AZ' => 'E02002047',
        '0BA' => 'E02002055',
        '0BB' => 'E02002055',
        '0BD' => 'E02002047',
        '0BE' => 'E02002047',
        '0BG' => 'E02002047',
        '0BH' => 'E02002047',
        '0BJ' => 'E02002047',
        '0BL' => 'E02002047',
        '0BN' => 'E02002047',
        '0BP' => 'E02002055',
        '0BQ' => 'E02002047',
        '0BS' => 'E02002047',
        '0BT' => 'E02002047',
        '0BU' => 'E02002047',
        '0BW' => 'E02002047',
        '0BX' => 'E02002055',
        '0BY' => 'E02002047',
        '0BZ' => 'E02002047',
        '0DA' => 'E02002055',
        '0DB' => 'E02002047',
        '0DD' => 'E02002055',
        '0DE' => 'E02002055',
        '0DF' => 'E02002045',
        '0DG' => 'E02002045',
        '0DH' => 'E02002045',
        '0DJ' => 'E02002045',
        '0DL' => 'E02002045',
        '0DN' => 'E02002045',
        '0DP' => 'E02002045',
        '0DQ' => 'E02002045',
        '0DR' => 'E02002045',
        '0DS' => 'E02002055',
        '0DT' => 'E02002055',
        '0DU' => 'E02002047',
        '0DW' => 'E02002045',
        '0DX' => 'E02002045',
        '0DY' => 'E02002045',
        '0DZ' => 'E02002045',
        '0EA' => 'E02002045',
        '0EB' => 'E02002046',
        '0ED' => 'E02002046',
        '0EE' => 'E02002046',
        '0EF' => 'E02002046',
        '0EG' => 'E02002046',
        '0EH' => 'E02002043',
        '0EJ' => 'E02002046',
        '0EL' => 'E02002046',
        '0EN' => 'E02002046',
        '0EP' => 'E02002046',
        '0EQ' => 'E02002046',
        '0ER' => 'E02002045',
        '0ES' => 'E02002046',
        '0ET' => 'E02002046',
        '0EU' => 'E02002046',
        '0EW' => 'E02002046',
        '0EX' => 'E02002046',
        '0EY' => 'E02002045',
        '0EZ' => 'E02002045',
        '0GA' => 'E02002045',
        '0GB' => 'E02002045',
        '0GD' => 'E02002045',
        '0GE' => 'E02002045',
        '0GF' => 'E02002045',
        '0GR' => 'E02002045',
        '0HD' => 'E02002045',
        '0HE' => 'E02002045',
        '0HF' => 'E02002045',
        '0HH' => 'E02002046',
        '0HJ' => 'E02002046',
        '0HL' => 'E02002046',
        '0HN' => 'E02002046',
        '0HP' => 'E02002046',
        '0HQ' => 'E02002046',
        '0HR' => 'E02002046',
        '0HS' => 'E02002046',
        '0HT' => 'E02002046',
        '0HU' => 'E02002046',
        '0HW' => 'E02002046',
        '0HX' => 'E02002046',
        '0HY' => 'E02002046',
        '0HZ' => 'E02002046',
        '0JA' => 'E02002046',
        '0JB' => 'E02002046',
        '0JD' => 'E02002046',
        '0JE' => 'E02002046',
        '0JF' => 'E02002046',
        '0JG' => 'E02002046',
        '0JH' => 'E02002046',
        '0JJ' => 'E02002046',
        '0JL' => 'E02002046',
        '0JN' => 'E02002046',
        '0JP' => 'E02002046',
        '0JQ' => 'E02002046',
        '0JR' => 'E02002046',
        '0JS' => 'E02002045',
        '0JT' => 'E02002045',
        '0JU' => 'E02002043',
        '0JW' => 'E02002046',
        '0JX' => 'E02002046',
        '0JY' => 'E02002046',
        '0JZ' => 'E02002046',
        '0LA' => 'E02002046',
        '0LB' => 'E02002046',
        '0LD' => 'E02002044',
        '0LF' => 'E02002046',
        '0LG' => 'E02002046',
        '0LH' => 'E02002046',
        '0LJ' => 'E02002046',
        '0LL' => 'E02002046',
        '0LN' => 'E02002046',
        '0LP' => 'E02002046',
        '0LQ' => 'E02002046',
        '0LR' => 'E02002046',
        '0LS' => 'E02002046',
        '0LT' => 'E02002046',
        '0LU' => 'E02002046',
        '0LW' => 'E02002046',
        '0LX' => 'E02002046',
        '0LY' => 'E02002046',
        '0LZ' => 'E02002046',
        '0NA' => 'E02002046',
        '0NB' => 'E02002046',
        '0ND' => 'E02002046',
        '0NF' => 'E02002055',
        '0NG' => 'E02002055',
        '0NH' => 'E02002055',
        '0NL' => 'E02002055',
        '0NN' => 'E02002055',
        '0NP' => 'E02002055',
        '0NQ' => 'E02002055',
        '0NR' => 'E02002055',
        '0NS' => 'E02002055',
        '0NT' => 'E02002055',
        '0NU' => 'E02002055',
        '0NW' => 'E02002055',
        '0NX' => 'E02002055',
        '0PA' => 'E02002055',
        '0PB' => 'E02002055',
        '0PD' => 'E02002055',
        '0PE' => 'E02002055',
        '0PF' => 'E02002055',
        '0PG' => 'E02002045',
        '0PH' => 'E02002045',
        '0PJ' => 'E02002045',
        '0PL' => 'E02002045',
        '0PN' => 'E02002045',
        '0PP' => 'E02002045',
        '0PQ' => 'E02002043',
        '0PR' => 'E02002045',
        '0PS' => 'E02002045',
        '0PT' => 'E02002045',
        '0PU' => 'E02002045',
        '0PW' => 'E02002045',
        '0PX' => 'E02002045',
        '0PY' => 'E02002045',
        '0PZ' => 'E02002045',
        '0QA' => 'E02002045',
        '0QB' => 'E02002045',
        '0QD' => 'E02002045',
        '0QE' => 'E02002045',
        '0QF' => 'E02002045',
        '0QG' => 'E02002045',
        '0QH' => 'E02002045',
        '0QJ' => 'E02002045',
        '0QL' => 'E02002045',
        '0QN' => 'E02002045',
        '0QP' => 'E02002045',
        '0QQ' => 'E02002045',
        '0QR' => 'E02002045',
        '0QS' => 'E02002045',
        '0QT' => 'E02002045',
        '0QU' => 'E02002045',
        '0QW' => 'E02002045',
        '0QX' => 'E02002045',
        '0QY' => 'E02002045',
        '0QZ' => 'E02002045',
        '0RA' => 'E02002045',
        '0RD' => 'E02002045',
        '0RE' => 'E02002045',
        '0RF' => 'E02002045',
        '0RG' => 'E02002045',
        '0RH' => 'E02002045',
        '0RJ' => 'E02002045',
        '0RL' => 'E02002045',
        '0RP' => 'E02002045',
        '0RQ' => 'E02002045',
        '0RS' => 'E02002045',
        '0RT' => 'E02002045',
        '0RU' => 'E02002045',
        '0RW' => 'E02002045',
        '0RX' => 'E02002045',
        '0RZ' => 'E02002045',
        '0SB' => 'E02002046',
        '0SD' => 'E02002045',
        '0SE' => 'E02002045',
        '0SF' => 'E02002045',
        '0SG' => 'E02002045',
        '0SH' => 'E02002045',
        '0SJ' => 'E02002045',
        '0SL' => 'E02002045',
        '0SN' => 'E02002045',
        '0SP' => 'E02002045',
        '0SQ' => 'E02002045',
        '0SR' => 'E02002045',
        '0SS' => 'E02002045',
        '0ST' => 'E02002045',
        '0SU' => 'E02002045',
        '0SW' => 'E02002045',
        '0SX' => 'E02002045',
        '0SY' => 'E02002045',
        '0TA' => 'E02002046',
        '0TB' => 'E02002046',
        '0TD' => 'E02002046',
        '0TE' => 'E02002045',
        '0TF' => 'E02002046',
        '0TG' => 'E02002045',
        '0TH' => 'E02002046',
        '0TJ' => 'E02002045',
        '0TL' => 'E02002045',
        '0TN' => 'E02002045',
        '0TP' => 'E02002045',
        '0TQ' => 'E02002045',
        '0TR' => 'E02002045',
        '0TS' => 'E02002045',
        '0TT' => 'E02002045',
        '0TU' => 'E02002045',
        '0TW' => 'E02002045',
        '0TX' => 'E02002045',
        '0TY' => 'E02002045',
        '0TZ' => 'E02002045',
        '0UA' => 'E02002045',
        '0UB' => 'E02002045',
        '0UD' => 'E02002045',
        '0UE' => 'E02002045',
        '0UF' => 'E02002043',
        '0UG' => 'E02002045',
        '0UH' => 'E02002055',
        '0UJ' => 'E02002045',
        '0UQ' => 'E02002045',
        '0WZ' => 'E02002043',
        '0YB' => 'E02002043',
        '0YH' => 'E02002043',
        '0YJ' => 'E02002045',
        '0YL' => 'E02002043',
        '0YN' => 'E02002045',
        '0YP' => 'E02002043',
        '0YQ' => 'E02002043',
        '0YR' => 'E02002045',
        '0YS' => 'E02002045',
        '0YT' => 'E02002045',
        '0YU' => 'E02002043',
        '0YW' => 'E02002043',
        '0YX' => 'E02002043',
        '0YY' => 'E02002043',
        '0YZ' => 'E02002043',
        '0ZQ' => 'E02002043',
        '1AA' => 'E02002043',
        '1AB' => 'E02002043',
        '1AD' => 'E02002043',
        '1AE' => 'E02002043',
        '1AF' => 'E02002043',
        '1AG' => 'E02002043',
        '1AH' => 'E02002043',
        '1AJ' => 'E02002043',
        '1AL' => 'E02002043',
        '1AN' => 'E02002043',
        '1AP' => 'E02002043',
        '1AQ' => 'E02002043',
        '1AR' => 'E02002043',
        '1AS' => 'E02002043',
        '1AT' => 'E02002043',
        '1AU' => 'E02002043',
        '1AW' => 'E02002043',
        '1AX' => 'E02002043',
        '1AY' => 'E02002043',
        '1AZ' => 'E02002043',
        '1BA' => 'E02002043',
        '1BB' => 'E02002043',
        '1BD' => 'E02002043',
        '1BE' => 'E02002043',
        '1BG' => 'E02002043',
        '1BH' => 'E02002043',
        '1BJ' => 'E02002043',
        '1BL' => 'E02002043',
        '1BN' => 'E02002043',
        '1BP' => 'E02002043',
        '1BQ' => 'E02002043',
        '1BR' => 'E02002043',
        '1BS' => 'E02002043',
        '1BT' => 'E02002043',
        '1BU' => 'E02002043',
        '1BW' => 'E02002043',
        '1BX' => 'E02002043',
        '1BY' => 'E02002043',
        '1BZ' => 'E02002043',
        '1DA' => 'E02002043',
        '1DB' => 'E02002043',
        '1DD' => 'E02002043',
        '1DE' => 'E02002043',
        '1DF' => 'E02002043',
        '1DG' => 'E02002043',
        '1DH' => 'E02002043',
        '1DJ' => 'E02002043',
        '1DL' => 'E02002043',
        '1DN' => 'E02002043',
        '1DP' => 'E02002043',
        '1DQ' => 'E02002043',
        '1DR' => 'E02002043',
        '1DS' => 'E02002043',
        '1DT' => 'E02002043',
        '1DU' => 'E02002043',
        '1DW' => 'E02002043',
        '1DX' => 'E02002043',
        '1DY' => 'E02002043',
        '1DZ' => 'E02002043',
        '1EA' => 'E02002043',
        '1EB' => 'E02002043',
        '1ED' => 'E02002043',
        '7AB' => 'E02002047',
        '7AD' => 'E02002047',
        '7AE' => 'E02002047',
        '7AF' => 'E02002049',
        '7AG' => 'E02002047',
        '7AH' => 'E02002047',
        '7AJ' => 'E02002047',
        '7AL' => 'E02002047',
        '7AN' => 'E02002047',
        '7AP' => 'E02002047',
        '7AQ' => 'E02002047',
        '7AR' => 'E02002047',
        '7AS' => 'E02002047',
        '7AT' => 'E02002047',
        '7AU' => 'E02002047',
        '7AW' => 'E02002047',
        '7AX' => 'E02002047',
        '7AY' => 'E02002047',
        '7AZ' => 'E02002047',
        '7BA' => 'E02002047',
        '7BB' => 'E02002047',
        '7BD' => 'E02002047',
        '7BE' => 'E02002047',
        '7BF' => 'E02002047',
        '7BG' => 'E02002147',
        '7BH' => 'E02002047',
        '7BJ' => 'E02002147',
        '7BL' => 'E02002147',
        '7BN' => 'E02002147',
        '7BP' => 'E02002147',
        '7BQ' => 'E02002147',
        '7BS' => 'E02002147',
        '7BT' => 'E02002047',
        '7BU' => 'E02002147',
        '7BW' => 'E02002147',
        '7BX' => 'E02002147',
        '7BY' => 'E02002047',
        '7BZ' => 'E02002147',
        '7DA' => 'E02002047',
        '7DD' => 'E02002047',
        '7DE' => 'E02002049',
        '7DF' => 'E02002047',
        '7DG' => 'E02002043',
        '7DH' => 'E02002047',
        '7DJ' => 'E02002055',
        '7DL' => 'E02002047',
        '7DN' => 'E02002047',
        '7DP' => 'E02002047',
        '7DQ' => 'E02002047',
        '7DR' => 'E02002047',
        '7DW' => 'E02002047',
        '7DX' => 'E02002047',
        '7DY' => 'E02002047',
        '7DZ' => 'E02002047',
        '7EA' => 'E02002047',
        '7ED' => 'E02002047',
        '7EE' => 'E02002047',
        '7EF' => 'E02002047',
        '7EG' => 'E02002047',
        '7EH' => 'E02002047',
        '7EJ' => 'E02002047',
        '7EL' => 'E02002047',
        '7EN' => 'E02002047',
        '7EP' => 'E02002047',
        '7EQ' => 'E02002047',
        '7ET' => 'E02002047',
        '7EU' => 'E02002047',
        '7EW' => 'E02002047',
        '7EX' => 'E02002047',
        '7EY' => 'E02002047',
        '7EZ' => 'E02002047',
        '7FA' => 'E02002047',
        '7HB' => 'E02002047',
        '7HD' => 'E02002047',
        '7HE' => 'E02002047',
        '7HF' => 'E02002047',
        '7HG' => 'E02002047',
        '7HH' => 'E02002047',
        '7HJ' => 'E02002047',
        '7HL' => 'E02002047',
        '7HN' => 'E02002047',
        '7HP' => 'E02002047',
        '7HQ' => 'E02002047',
        '7HR' => 'E02002047',
        '7HS' => 'E02002047',
        '7HT' => 'E02002043',
        '7HU' => 'E02002043',
        '7HX' => 'E02002047',
        '7HY' => 'E02002047',
        '7HZ' => 'E02002047',
        '7JA' => 'E02002047',
        '7JB' => 'E02002047',
        '7JD' => 'E02002047',
        '7JE' => 'E02002047',
        '7JF' => 'E02002047',
        '7JG' => 'E02002047',
        '7JH' => 'E02002047',
        '7JJ' => 'E02002047',
        '7JL' => 'E02002047',
        '7JN' => 'E02002047',
        '7JP' => 'E02002047',
        '7JQ' => 'E02002047',
        '7JT' => 'E02002047',
        '7JU' => 'E02002047',
        '7JW' => 'E02002047',
        '7JX' => 'E02002047',
        '7JZ' => 'E02002043',
        '7LA' => 'E02002055',
        '7LB' => 'E02002047',
        '7LD' => 'E02002047',
        '7LE' => 'E02002047',
        '7LF' => 'E02002047',
        '7LG' => 'E02002047',
        '7LH' => 'E02002047',
        '7LJ' => 'E02002055',
        '7LL' => 'E02002047',
        '7LN' => 'E02002055',
        '7LP' => 'E02002047',
        '7LQ' => 'E02002047',
        '7LR' => 'E02002043',
        '7LS' => 'E02002047',
        '7LT' => 'E02002055',
        '7LU' => 'E02002047',
        '7LW' => 'E02002047',
        '7LX' => 'E02002047',
        '7LY' => 'E02002047',
        '7LZ' => 'E02002047',
        '7NA' => 'E02002047',
        '7NB' => 'E02002047',
        '7ND' => 'E02002047',
        '7NE' => 'E02002047',
        '7NF' => 'E02002047',
        '7NG' => 'E02002047',
        '7NH' => 'E02002047',
        '7NJ' => 'E02002047',
        '7NL' => 'E02002047',
        '7NN' => 'E02002047',
        '7NP' => 'E02002047',
        '7NQ' => 'E02002047',
        '7NR' => 'E02002055',
        '7NS' => 'E02002145',
        '7NT' => 'E02002145',
        '7NU' => 'E02002047',
        '7NW' => 'E02002047',
        '7NX' => 'E02002047',
        '7NY' => 'E02002047',
        '7NZ' => 'E02002047',
        '7PA' => 'E02002047',
        '7PB' => 'E02002047',
        '7PD' => 'E02002047',
        '7PE' => 'E02002047',
        '7PF' => 'E02002047',
        '7PG' => 'E02002047',
        '7PH' => 'E02002047',
        '7PJ' => 'E02002047',
        '7PL' => 'E02002043',
        '7PN' => 'E02002047',
        '7PP' => 'E02002047',
        '7PQ' => 'E02002047',
        '7PR' => 'E02002047',
        '7PS' => 'E02002047',
        '7PT' => 'E02002047',
        '7PU' => 'E02002047',
        '7PW' => 'E02002047',
        '7PX' => 'E02002047',
        '7PY' => 'E02002047',
        '7PZ' => 'E02002047',
        '7QA' => 'E02002047',
        '7QB' => 'E02002047',
        '7QD' => 'E02002047',
        '7QE' => 'E02002047',
        '7QJ' => 'E02002147',
        '7QN' => 'E02002147',
        '7QP' => 'E02002147',
        '7QQ' => 'E02002147',
        '7QR' => 'E02002147',
        '7QS' => 'E02002147',
        '7QT' => 'E02002147',
        '7QU' => 'E02002147',
        '7QW' => 'E02002147',
        '7QX' => 'E02002147',
        '7QY' => 'E02002147',
        '7QZ' => 'E02002147',
        '7RA' => 'E02002147',
        '7RB' => 'E02002147',
        '7RD' => 'E02002147',
        '7RE' => 'E02002147',
        '7RF' => 'E02002145',
        '7RG' => 'E02002147',
        '7RH' => 'E02002147',
        '7RJ' => 'E02002147',
        '7RL' => 'E02002147',
        '7RN' => 'E02002147',
        '7RP' => 'E02002147',
        '7RQ' => 'E02002147',
        '7RR' => 'E02002147',
        '7RS' => 'E02002147',
        '7RT' => 'E02002147',
        '7RU' => 'E02002147',
        '7RW' => 'E02002147',
        '7RX' => 'E02002147',
        '7RY' => 'E02002145',
        '7RZ' => 'E02002145',
        '7SA' => 'E02002145',
        '7SB' => 'E02002147',
        '7SD' => 'E02002147',
        '7SE' => 'E02002147',
        '7SF' => 'E02002147',
        '7SG' => 'E02002047',
        '7SH' => 'E02002043',
        '7SJ' => 'E02002043',
        '7SL' => 'E02002145',
        '7SN' => 'E02002145',
        '7SP' => 'E02002043',
        '7SQ' => 'E02002147',
        '7SR' => 'E02002145',
        '7SS' => 'E02002145',
        '7ST' => 'E02002145',
        '7SU' => 'E02002147',
        '7SW' => 'E02002145',
        '7SX' => 'E02002147',
        '7SY' => 'E02002145',
        '7SZ' => 'E02002043',
        '7TA' => 'E02002145',
        '7TB' => 'E02002145',
        '7TD' => 'E02002145',
        '7TE' => 'E02002145',
        '7TF' => 'E02002145',
        '7TG' => 'E02002145',
        '7TH' => 'E02002145',
        '7TJ' => 'E02002043',
        '7TL' => 'E02002145',
        '7TN' => 'E02002145',
        '7TP' => 'E02002145',
        '7TQ' => 'E02002145',
        '7TR' => 'E02002145',
        '7TS' => 'E02002145',
        '7TT' => 'E02002047',
        '7TU' => 'E02002047',
        '7TW' => 'E02002047',
        '7TX' => 'E02002145',
        '7TY' => 'E02002145',
        '7TZ' => 'E02002145',
        '7UA' => 'E02002145',
        '7UB' => 'E02002145',
        '7UD' => 'E02002145',
        '7UE' => 'E02002145',
        '7UF' => 'E02002145',
        '7UG' => 'E02002145',
        '7UZ' => 'E02002047',
        '7WJ' => 'E02002047',
        '7WL' => 'E02002047',
        '7WP' => 'E02002047',
        '7WR' => 'E02002047',
        '7WS' => 'E02002047',
        '7WW' => 'E02002055',
        '7WY' => 'E02002043',
        '7WZ' => 'E02002043',
        '7XA' => 'E02002047',
        '7XB' => 'E02002047',
        '7XD' => 'E02002049',
        '7YA' => 'E02002043',
        '7YB' => 'E02002043',
        '7YG' => 'E02002043',
        '7YH' => 'E02002043',
        '7YJ' => 'E02002043',
        '7YL' => 'E02002047',
        '7YN' => 'E02002043',
        '7YP' => 'E02002043',
        '7YQ' => 'E02002043',
        '7YR' => 'E02002043',
        '7YS' => 'E02002043',
        '7YT' => 'E02002043',
        '7YU' => 'E02002043',
        '7YW' => 'E02002043',
        '7YX' => 'E02002043',
        '7YY' => 'E02002043',
        '7YZ' => 'E02002043',
        '7ZE' => 'E02002043',
        '7ZF' => 'E02002043',
        '8AA' => 'E02002142',
        '8AB' => 'E02002142',
        '8AD' => 'E02002142',
        '8AE' => 'E02002142',
        '8AF' => 'E02002142',
        '8AG' => 'E02002142',
        '8AH' => 'E02002142',
        '8AJ' => 'E02002142',
        '8AL' => 'E02002142',
        '8AN' => 'E02002142',
        '8AP' => 'E02002142',
        '8AQ' => 'E02002142',
        '8AR' => 'E02002142',
        '8AS' => 'E02002142',
        '8AT' => 'E02002142',
        '8AU' => 'E02002142',
        '8AW' => 'E02002142',
        '8AX' => 'E02002142',
        '8AY' => 'E02002142',
        '8AZ' => 'E02002142',
        '8BA' => 'E02002142',
        '8BB' => 'E02002142',
        '8BD' => 'E02002142',
        '8BE' => 'E02002142',
        '8BF' => 'E02002147',
        '8BG' => 'E02002142',
        '8BH' => 'E02002043',
        '8BJ' => 'E02002142',
        '8BL' => 'E02002142',
        '8BN' => 'E02002142',
        '8BP' => 'E02002142',
        '8BQ' => 'E02002142',
        '8BR' => 'E02002142',
        '8BS' => 'E02002142',
        '8BT' => 'E02002142',
        '8BU' => 'E02002145',
        '8BW' => 'E02002142',
        '8BX' => 'E02002145',
        '8BY' => 'E02002145',
        '8BZ' => 'E02002142',
        '8DA' => 'E02002142',
        '8DB' => 'E02002142',
        '8DD' => 'E02002142',
        '8DE' => 'E02002142',
        '8DF' => 'E02002142',
        '8DG' => 'E02002142',
        '8DH' => 'E02002145',
        '8DJ' => 'E02002145',
        '8DL' => 'E02002145',
        '8DN' => 'E02002142',
        '8DP' => 'E02002142',
        '8DQ' => 'E02002142',
        '8DR' => 'E02002142',
        '8DS' => 'E02002142',
        '8DT' => 'E02002142',
        '8DU' => 'E02002142',
        '8DW' => 'E02002142',
        '8DX' => 'E02002142',
        '8DY' => 'E02002142',
        '8DZ' => 'E02002142',
        '8EA' => 'E02002142',
        '8EB' => 'E02002142',
        '8ED' => 'E02002142',
        '8EE' => 'E02002142',
        '8EF' => 'E02002142',
        '8EG' => 'E02002142',
        '8EH' => 'E02002145',
        '8EJ' => 'E02002142',
        '8EL' => 'E02002142',
        '8EN' => 'E02002142',
        '8EP' => 'E02002145',
        '8EQ' => 'E02002142',
        '8ER' => 'E02002142',
        '8ES' => 'E02002142',
        '8ET' => 'E02002145',
        '8EW' => 'E02002142',
        '8EX' => 'E02002145',
        '8EY' => 'E02002142',
        '8EZ' => 'E02002142',
        '8GA' => 'E02002147',
        '8GB' => 'E02002147',
        '8GD' => 'E02002147',
        '8GE' => 'E02002147',
        '8GP' => 'E02002043',
        '8GR' => 'E02002043',
        '8GS' => 'E02002145',
        '8GT' => 'E02002043',
        '8GU' => 'E02002043',
        '8GW' => 'E02002043',
        '8GX' => 'E02002145',
        '8GY' => 'E02002043',
        '8GZ' => 'E02002043',
        '8HA' => 'E02002145',
        '8HB' => 'E02002145',
        '8HD' => 'E02002145',
        '8HE' => 'E02002145',
        '8HF' => 'E02002145',
        '8HG' => 'E02002145',
        '8HH' => 'E02002145',
        '8HJ' => 'E02002145',
        '8HL' => 'E02002145',
        '8HN' => 'E02002145',
        '8HP' => 'E02002145',
        '8HQ' => 'E02002145',
        '8HR' => 'E02002145',
        '8HS' => 'E02002145',
        '8HT' => 'E02002145',
        '8HU' => 'E02002145',
        '8HW' => 'E02002145',
        '8HX' => 'E02002145',
        '8HY' => 'E02002142',
        '8HZ' => 'E02002142',
        '8JA' => 'E02002142',
        '8JB' => 'E02002142',
        '8JD' => 'E02002043',
        '8JE' => 'E02002142',
        '8JF' => 'E02002142',
        '8JG' => 'E02002142',
        '8JH' => 'E02002142',
        '8JJ' => 'E02002142',
        '8JL' => 'E02002043',
        '8JN' => 'E02002145',
        '8JP' => 'E02002142',
        '8JQ' => 'E02002142',
        '8JR' => 'E02002142',
        '8JS' => 'E02002142',
        '8JT' => 'E02002142',
        '8JU' => 'E02002142',
        '8JW' => 'E02002145',
        '8JX' => 'E02002145',
        '8JY' => 'E02002142',
        '8JZ' => 'E02002142',
        '8LA' => 'E02002145',
        '8LB' => 'E02002142',
        '8LD' => 'E02002142',
        '8LE' => 'E02002142',
        '8LF' => 'E02002142',
        '8LG' => 'E02002136',
        '8LH' => 'E02002142',
        '8LJ' => 'E02002142',
        '8LL' => 'E02002142',
        '8LN' => 'E02002142',
        '8LP' => 'E02002142',
        '8LQ' => 'E02002142',
        '8LR' => 'E02002142',
        '8LS' => 'E02002142',
        '8LT' => 'E02002145',
        '8LU' => 'E02002142',
        '8LW' => 'E02002142',
        '8LX' => 'E02002142',
        '8LY' => 'E02002142',
        '8LZ' => 'E02002142',
        '8NA' => 'E02002142',
        '8NB' => 'E02002145',
        '8ND' => 'E02002142',
        '8NE' => 'E02002145',
        '8NF' => 'E02002145',
        '8NG' => 'E02002145',
        '8NH' => 'E02002145',
        '8NJ' => 'E02002145',
        '8NL' => 'E02002145',
        '8NN' => 'E02002145',
        '8NP' => 'E02002145',
        '8NQ' => 'E02002145',
        '8NR' => 'E02002145',
        '8NS' => 'E02002145',
        '8NT' => 'E02002145',
        '8NU' => 'E02002145',
        '8NW' => 'E02002145',
        '8NX' => 'E02002145',
        '8NY' => 'E02002145',
        '8NZ' => 'E02002147',
        '8PA' => 'E02002145',
        '8PB' => 'E02002145',
        '8PD' => 'E02002145',
        '8PE' => 'E02002145',
        '8PF' => 'E02002145',
        '8PG' => 'E02002145',
        '8PH' => 'E02002145',
        '8PJ' => 'E02002145',
        '8PL' => 'E02002145',
        '8PN' => 'E02002145',
        '8PP' => 'E02002145',
        '8PQ' => 'E02002145',
        '8PR' => 'E02002145',
        '8PS' => 'E02002145',
        '8PT' => 'E02002147',
        '8PU' => 'E02002147',
        '8PW' => 'E02002145',
        '8PX' => 'E02002147',
        '8PY' => 'E02002147',
        '8PZ' => 'E02002147',
        '8QA' => 'E02002147',
        '8QB' => 'E02002147',
        '8QD' => 'E02002147',
        '8QE' => 'E02002147',
        '8QF' => 'E02002147',
        '8QG' => 'E02002147',
        '8QH' => 'E02002147',
        '8QJ' => 'E02002147',
        '8QL' => 'E02002147',
        '8QN' => 'E02002147',
        '8QP' => 'E02002147',
        '8QQ' => 'E02002147',
        '8QR' => 'E02002147',
        '8QS' => 'E02002147',
        '8QT' => 'E02002147',
        '8QU' => 'E02002147',
        '8QW' => 'E02002147',
        '8QX' => 'E02002147',
        '8QY' => 'E02002147',
        '8QZ' => 'E02002147',
        '8RA' => 'E02002147',
        '8RB' => 'E02002147',
        '8RD' => 'E02002147',
        '8RE' => 'E02002147',
        '8RF' => 'E02002147',
        '8RG' => 'E02002147',
        '8RH' => 'E02002147',
        '8RJ' => 'E02002147',
        '8RL' => 'E02002147',
        '8RN' => 'E02002147',
        '8RP' => 'E02002145',
        '8RQ' => 'E02002147',
        '8RR' => 'E02002147',
        '8RS' => 'E02002147',
        '8RT' => 'E02002147',
        '8RU' => 'E02002145',
        '8RW' => 'E02002147',
        '8RX' => 'E02002147',
        '8RY' => 'E02002147',
        '8RZ' => 'E02002147',
        '8SA' => 'E02002147',
        '8SB' => 'E02002147',
        '8SD' => 'E02002147',
        '8SE' => 'E02002147',
        '8SF' => 'E02002147',
        '8SG' => 'E02002147',
        '8SH' => 'E02002147',
        '8SJ' => 'E02002147',
        '8SL' => 'E02002147',
        '8SN' => 'E02002147',
        '8SP' => 'E02002147',
        '8SQ' => 'E02002147',
        '8SR' => 'E02002147',
        '8SS' => 'E02002147',
        '8ST' => 'E02002147',
        '8SU' => 'E02002147',
        '8SW' => 'E02002147',
        '8SX' => 'E02002145',
        '8SY' => 'E02002145',
        '8SZ' => 'E02002147',
        '8TA' => 'E02002147',
        '8TB' => 'E02002145',
        '8TD' => 'E02002145',
        '8TE' => 'E02002145',
        '8TF' => 'E02002147',
        '8TG' => 'E02002147',
        '8TH' => 'E02002145',
        '8TJ' => 'E02002147',
        '8TL' => 'E02002145',
        '8TN' => 'E02002145',
        '8TP' => 'E02002145',
        '8TQ' => 'E02002145',
        '8TR' => 'E02002145',
        '8TS' => 'E02002147',
        '8TT' => 'E02002147',
        '8TU' => 'E02002147',
        '8TW' => 'E02002145',
        '8TX' => 'E02002147',
        '8TY' => 'E02002145',
        '8TZ' => 'E02002147',
        '8UA' => 'E02002147',
        '8UB' => 'E02002147',
        '8UD' => 'E02002145',
        '8UE' => 'E02002147',
        '8UF' => 'E02002145',
        '8UG' => 'E02002145',
        '8UH' => 'E02002145',
        '8UJ' => 'E02002142',
        '8UL' => 'E02002043',
        '8UN' => 'E02002145',
        '8UQ' => 'E02002145',
        '8UR' => 'E02002142',
        '8UT' => 'E02002145',
        '8UU' => 'E02002142',
        '8UX' => 'E02002142',
        '8UY' => 'E02002145',
        '8UZ' => 'E02002142',
        '8WA' => 'E02002147',
        '8WB' => 'E02002147',
        '8WD' => 'E02002147',
        '8WE' => 'E02002147',
        '8WF' => 'E02002147',
        '8WZ' => 'E02002043',
        '8XA' => 'E02002142',
        '8XB' => 'E02002142',
        '8XD' => 'E02002145',
        '8XE' => 'E02002142',
        '8XG' => 'E02002147',
        '8XH' => 'E02002145',
        '8XJ' => 'E02002142',
        '8XL' => 'E02002142',
        '8XN' => 'E02002043',
        '8XQ' => 'E02002043',
        '8XU' => 'E02002142',
        '8XX' => 'E02002142',
        '8XY' => 'E02002142',
        '8YA' => 'E02002147',
        '8YD' => 'E02002145',
        '8YE' => 'E02002145',
        '8YF' => 'E02002145',
        '8YG' => 'E02002145',
        '8YH' => 'E02002145',
        '8YJ' => 'E02002145',
        '8YL' => 'E02002145',
        '8YN' => 'E02002142',
        '8YP' => 'E02002043',
        '8YQ' => 'E02002145',
        '8YR' => 'E02002145',
        '8YS' => 'E02002145',
        '8YT' => 'E02002145',
        '8YU' => 'E02002043',
        '8YX' => 'E02002043',
        '8YZ' => 'E02002043',
        '8ZQ' => 'E02002043',
        '8ZX' => 'E02002043',
        '8ZY' => 'E02002043',
        '9AA' => 'E02002047',
        '9AB' => 'E02002047',
        '9AD' => 'E02002047',
        '9AE' => 'E02002047',
        '9AF' => 'E02002047',
        '9AG' => 'E02002047',
        '9AH' => 'E02002045',
        '9AJ' => 'E02002045',
        '9AL' => 'E02002047',
        '9AN' => 'E02002047',
        '9AP' => 'E02002047',
        '9AQ' => 'E02002045',
        '9AR' => 'E02002047',
        '9AS' => 'E02002047',
        '9AT' => 'E02002047',
        '9AU' => 'E02002043',
        '9AW' => 'E02002047',
        '9AX' => 'E02002043',
        '9AY' => 'E02002043',
        '9AZ' => 'E02002043',
        '9BA' => 'E02002043',
        '9BB' => 'E02002043',
        '9BD' => 'E02002043',
        '9BE' => 'E02002043',
        '9BF' => 'E02002142',
        '9BG' => 'E02002043',
        '9BH' => 'E02002043',
        '9BJ' => 'E02002043',
        '9BL' => 'E02002043',
        '9BN' => 'E02002043',
        '9BP' => 'E02002043',
        '9BQ' => 'E02002043',
        '9BS' => 'E02002043',
        '9BT' => 'E02002043',
        '9BU' => 'E02002043',
        '9BW' => 'E02002043',
        '9BX' => 'E02002043',
        '9BY' => 'E02002047',
        '9BZ' => 'E02002047',
        '9DA' => 'E02002047',
        '9DB' => 'E02002047',
        '9DD' => 'E02002047',
        '9DE' => 'E02002047',
        '9DF' => 'E02002047',
        '9DG' => 'E02002043',
        '9DH' => 'E02002047',
        '9DJ' => 'E02002047',
        '9DL' => 'E02002043',
        '9DN' => 'E02002047',
        '9DP' => 'E02002047',
        '9DQ' => 'E02002043',
        '9DR' => 'E02002047',
        '9DS' => 'E02002043',
        '9DT' => 'E02002043',
        '9DU' => 'E02002047',
        '9DW' => 'E02002043',
        '9DX' => 'E02002043',
        '9DY' => 'E02002043',
        '9DZ' => 'E02002043',
        '9EA' => 'E02002043',
        '9EB' => 'E02002043',
        '9ED' => 'E02002043',
        '9EE' => 'E02002043',
        '9EF' => 'E02002043',
        '9EG' => 'E02002043',
        '9EH' => 'E02002047',
        '9EJ' => 'E02002047',
        '9EL' => 'E02002047',
        '9EN' => 'E02002047',
        '9EP' => 'E02002047',
        '9EQ' => 'E02002047',
        '9ER' => 'E02002045',
        '9ES' => 'E02002047',
        '9ET' => 'E02002047',
        '9EU' => 'E02002047',
        '9EW' => 'E02002047',
        '9EX' => 'E02002047',
        '9EY' => 'E02002047',
        '9EZ' => 'E02002045',
        '9FA' => 'E02002043',
        '9FB' => 'E02002047',
        '9FD' => 'E02002142',
        '9GA' => 'E02002145',
        '9GB' => 'E02002043',
        '9GD' => 'E02002145',
        '9HA' => 'E02002045',
        '9HB' => 'E02002045',
        '9HD' => 'E02002047',
        '9HE' => 'E02002045',
        '9HF' => 'E02002043',
        '9HG' => 'E02002043',
        '9HH' => 'E02002043',
        '9HJ' => 'E02002043',
        '9HL' => 'E02002045',
        '9HN' => 'E02002045',
        '9HP' => 'E02002045',
        '9HQ' => 'E02002045',
        '9HR' => 'E02002047',
        '9HS' => 'E02002043',
        '9HT' => 'E02002045',
        '9HU' => 'E02002145',
        '9HW' => 'E02002145',
        '9HX' => 'E02002145',
        '9HY' => 'E02002145',
        '9HZ' => 'E02002145',
        '9JA' => 'E02002145',
        '9JB' => 'E02002145',
        '9JD' => 'E02002043',
        '9JE' => 'E02002145',
        '9JF' => 'E02002145',
        '9JG' => 'E02002145',
        '9JH' => 'E02002145',
        '9JJ' => 'E02002145',
        '9JL' => 'E02002145',
        '9JN' => 'E02002142',
        '9JP' => 'E02002142',
        '9JQ' => 'E02002145',
        '9JR' => 'E02002142',
        '9JS' => 'E02002142',
        '9JT' => 'E02002145',
        '9JU' => 'E02002142',
        '9JW' => 'E02002142',
        '9JX' => 'E02002142',
        '9JY' => 'E02002145',
        '9JZ' => 'E02002142',
        '9LA' => 'E02002142',
        '9LB' => 'E02002142',
        '9LD' => 'E02002142',
        '9LE' => 'E02002145',
        '9LF' => 'E02002142',
        '9LG' => 'E02002145',
        '9LH' => 'E02002142',
        '9LJ' => 'E02002142',
        '9LL' => 'E02002142',
        '9LN' => 'E02002043',
        '9LP' => 'E02002043',
        '9LQ' => 'E02002145',
        '9LR' => 'E02002043',
        '9LS' => 'E02002043',
        '9LT' => 'E02002043',
        '9LU' => 'E02002043',
        '9LW' => 'E02002142',
        '9LX' => 'E02002043',
        '9LY' => 'E02002043',
        '9LZ' => 'E02002043',
        '9NA' => 'E02002043',
        '9NB' => 'E02002043',
        '9ND' => 'E02002043',
        '9NE' => 'E02002043',
        '9NF' => 'E02002043',
        '9NG' => 'E02002043',
        '9NH' => 'E02002043',
        '9NJ' => 'E02002043',
        '9NL' => 'E02002043',
        '9NN' => 'E02002043',
        '9NP' => 'E02002043',
        '9NQ' => 'E02002043',
        '9NR' => 'E02002043',
        '9NS' => 'E02002043',
        '9NT' => 'E02002043',
        '9NU' => 'E02002043',
        '9NW' => 'E02002043',
        '9NX' => 'E02002043',
        '9PA' => 'E02002043',
        '9PB' => 'E02002043',
        '9PD' => 'E02002043',
        '9PE' => 'E02002043',
        '9PF' => 'E02002047',
        '9PG' => 'E02002043',
        '9PH' => 'E02002043',
        '9PJ' => 'E02002043',
        '9PL' => 'E02002043',
        '9PN' => 'E02002043',
        '9PP' => 'E02002043',
        '9PQ' => 'E02002047',
        '9PR' => 'E02002043',
        '9PS' => 'E02002043',
        '9PT' => 'E02002043',
        '9PU' => 'E02002043',
        '9PW' => 'E02002043',
        '9PX' => 'E02002043',
        '9PY' => 'E02002043',
        '9PZ' => 'E02002043',
        '9QA' => 'E02002043',
        '9QB' => 'E02002043',
        '9QD' => 'E02002043',
        '9QE' => 'E02002043',
        '9QF' => 'E02002043',
        '9QG' => 'E02002043',
        '9QH' => 'E02002043',
        '9QJ' => 'E02002043',
        '9QL' => 'E02002043',
        '9QN' => 'E02002043',
        '9QP' => 'E02002043',
        '9QQ' => 'E02002043',
        '9QR' => 'E02002043',
        '9QS' => 'E02002043',
        '9QT' => 'E02002043',
        '9QU' => 'E02002043',
        '9QW' => 'E02002043',
        '9QX' => 'E02002043',
        '9QY' => 'E02002043',
        '9QZ' => 'E02002045',
        '9RA' => 'E02002045',
        '9RB' => 'E02002043',
        '9RD' => 'E02002043',
        '9RE' => 'E02002142',
        '9RF' => 'E02002043',
        '9RG' => 'E02002043',
        '9RH' => 'E02002142',
        '9RJ' => 'E02002142',
        '9RL' => 'E02002142',
        '9RN' => 'E02002142',
        '9RP' => 'E02002142',
        '9RQ' => 'E02002043',
        '9RR' => 'E02002142',
        '9RS' => 'E02002142',
        '9RT' => 'E02002043',
        '9RU' => 'E02002043',
        '9RW' => 'E02002142',
        '9RX' => 'E02002043',
        '9RY' => 'E02002043',
        '9RZ' => 'E02002043',
        '9SA' => 'E02002043',
        '9SB' => 'E02002142',
        '9SD' => 'E02002142',
        '9SE' => 'E02002142',
        '9SF' => 'E02002142',
        '9SG' => 'E02002142',
        '9SH' => 'E02002142',
        '9SJ' => 'E02002142',
        '9SL' => 'E02002142',
        '9SN' => 'E02002142',
        '9SP' => 'E02002142',
        '9SQ' => 'E02002142',
        '9SR' => 'E02002142',
        '9SS' => 'E02002142',
        '9ST' => 'E02002142',
        '9SU' => 'E02002043',
        '9SW' => 'E02002142',
        '9SX' => 'E02002045',
        '9SY' => 'E02002045',
        '9SZ' => 'E02002142',
        '9TA' => 'E02002043',
        '9TB' => 'E02002043',
        '9TD' => 'E02002145',
        '9TE' => 'E02002145',
        '9TG' => 'E02002142',
        '9TH' => 'E02002047',
        '9TJ' => 'E02002043',
        '9TL' => 'E02002043',
        '9TN' => 'E02002142',
        '9TP' => 'E02002043',
        '9TQ' => 'E02002142',
        '9TR' => 'E02002043',
        '9TS' => 'E02002043',
        '9TT' => 'E02002043',
        '9TU' => 'E02002043',
        '9TX' => 'E02002043',
        '9UA' => 'E02002043',
        '9UB' => 'E02002043',
        '9UD' => 'E02002043',
        '9UL' => 'E02002043',
        '9UZ' => 'E02002142',
        '9WX' => 'E02002043',
        '9WY' => 'E02002043',
        '9WZ' => 'E02002142',
        '9XA' => 'E02002142',
        '9XR' => 'E02002043',
        '9XT' => 'E02002043',
        '9XY' => 'E02002043',
        '9XZ' => 'E02002043',
        '9YA' => 'E02002043',
        '9YB' => 'E02002043',
        '9YD' => 'E02002043',
        '9YE' => 'E02002043',
        '9YF' => 'E02002043',
        '9YG' => 'E02002043',
        '9YH' => 'E02002043',
        '9YJ' => 'E02002043',
        '9YL' => 'E02002043',
        '9YN' => 'E02002043',
        '9YP' => 'E02002043',
        '9YQ' => 'E02002043',
        '9YR' => 'E02002043',
        '9YS' => 'E02002043',
        '9YT' => 'E02002043',
        '9YU' => 'E02002043',
        '9YW' => 'E02002043',
        '9YX' => 'E02002043',
        '9YY' => 'E02002142',
        '9YZ' => 'E02002043',
        '9ZS' => 'E02002043',
        '9ZY' => 'E02002043',
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
