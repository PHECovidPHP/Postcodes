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
final class RG16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003367',
        '0AB' => 'E02003367',
        '0AD' => 'E02003367',
        '0AE' => 'E02003367',
        '0AF' => 'E02003439',
        '0AG' => 'E02003367',
        '0AH' => 'E02003367',
        '0AJ' => 'E02003367',
        '0AL' => 'E02003367',
        '0AN' => 'E02003367',
        '0AP' => 'E02003367',
        '0AR' => 'E02003367',
        '0AS' => 'E02003367',
        '0AT' => 'E02003367',
        '0AU' => 'E02003367',
        '0AW' => 'E02003367',
        '0AX' => 'E02003367',
        '0AY' => 'E02003367',
        '0AZ' => 'E02003367',
        '0BD' => 'E02003367',
        '0BE' => 'E02003367',
        '0BG' => 'E02003367',
        '0BH' => 'E02003367',
        '0BJ' => 'E02003367',
        '0BL' => 'E02003367',
        '0BN' => 'E02003367',
        '0BP' => 'E02003367',
        '0BQ' => 'E02003367',
        '0BS' => 'E02003367',
        '0BT' => 'E02003367',
        '0BU' => 'E02003367',
        '0BW' => 'E02003367',
        '0BX' => 'E02003367',
        '0BY' => 'E02003367',
        '0BZ' => 'E02003367',
        '0DA' => 'E02003367',
        '0DB' => 'E02003367',
        '0DD' => 'E02003367',
        '0DE' => 'E02003367',
        '0DF' => 'E02003367',
        '0DG' => 'E02003367',
        '0DJ' => 'E02003367',
        '0DP' => 'E02003367',
        '0DR' => 'E02003367',
        '0DS' => 'E02003367',
        '0DT' => 'E02003367',
        '0DU' => 'E02003367',
        '0DX' => 'E02003367',
        '0DY' => 'E02003367',
        '0DZ' => 'E02003367',
        '0EA' => 'E02003367',
        '0EB' => 'E02003367',
        '0ED' => 'E02003367',
        '0EE' => 'E02003367',
        '0EF' => 'E02003367',
        '0EG' => 'E02003367',
        '0EH' => 'E02003367',
        '0EJ' => 'E02003367',
        '0EL' => 'E02003367',
        '0EN' => 'E02003367',
        '0EP' => 'E02003367',
        '0ER' => 'E02003367',
        '0ES' => 'E02003367',
        '0ET' => 'E02003367',
        '0EU' => 'E02003384',
        '0EW' => 'E02003367',
        '0EX' => 'E02003367',
        '0EZ' => 'E02003367',
        '0HA' => 'E02003373',
        '0HB' => 'E02003373',
        '0HD' => 'E02003367',
        '0HE' => 'E02003367',
        '0HF' => 'E02003367',
        '0HG' => 'E02003367',
        '0HH' => 'E02003367',
        '0HJ' => 'E02003367',
        '0HL' => 'E02003367',
        '0HN' => 'E02003367',
        '0HP' => 'E02003367',
        '0HQ' => 'E02003367',
        '0HR' => 'E02003367',
        '0HS' => 'E02003367',
        '0HT' => 'E02003367',
        '0HU' => 'E02003367',
        '0JB' => 'E02003367',
        '0JD' => 'E02003367',
        '0JE' => 'E02003367',
        '0JF' => 'E02003367',
        '0JG' => 'E02003367',
        '0JH' => 'E02003367',
        '0JJ' => 'E02003367',
        '0JL' => 'E02003367',
        '0JN' => 'E02003367',
        '0JP' => 'E02003367',
        '0JQ' => 'E02003367',
        '0JR' => 'E02003367',
        '0JS' => 'E02003367',
        '0JT' => 'E02003367',
        '0JU' => 'E02003367',
        '0JW' => 'E02003367',
        '0JX' => 'E02003367',
        '0JZ' => 'E02003367',
        '0LA' => 'E02003367',
        '0LB' => 'E02003367',
        '0LD' => 'E02003367',
        '0LE' => 'E02003367',
        '0LF' => 'E02003367',
        '0LG' => 'E02003367',
        '0LH' => 'E02003367',
        '0LJ' => 'E02003367',
        '0LL' => 'E02003367',
        '0LN' => 'E02003367',
        '0LP' => 'E02003367',
        '0LQ' => 'E02003367',
        '0LR' => 'E02003367',
        '0LS' => 'E02003367',
        '0LT' => 'E02003367',
        '0LU' => 'E02003367',
        '0LW' => 'E02003367',
        '0LX' => 'E02003367',
        '0LY' => 'E02003367',
        '0LZ' => 'E02003367',
        '0NA' => 'E02003367',
        '0NF' => 'E02003373',
        '0NG' => 'E02003373',
        '0NH' => 'E02003367',
        '0NJ' => 'E02003367',
        '0NL' => 'E02003367',
        '0NN' => 'E02003367',
        '0NP' => 'E02003367',
        '0NR' => 'E02003367',
        '0NS' => 'E02003367',
        '0NT' => 'E02003367',
        '0NU' => 'E02003367',
        '0NW' => 'E02003367',
        '0NX' => 'E02003367',
        '0NY' => 'E02003367',
        '0PA' => 'E02003367',
        '0PB' => 'E02003367',
        '0PD' => 'E02003367',
        '0PE' => 'E02003367',
        '0PF' => 'E02003367',
        '0PG' => 'E02003367',
        '0PH' => 'E02003367',
        '0PJ' => 'E02003367',
        '0PL' => 'E02003367',
        '0PN' => 'E02003367',
        '0PP' => 'E02003367',
        '0PQ' => 'E02003367',
        '0PR' => 'E02003367',
        '0PS' => 'E02003367',
        '0PT' => 'E02003367',
        '0PU' => 'E02003367',
        '0PW' => 'E02003367',
        '0PX' => 'E02003367',
        '0PY' => 'E02003367',
        '0PZ' => 'E02003367',
        '0QA' => 'E02003367',
        '0QB' => 'E02003367',
        '0QG' => 'E02003367',
        '0QH' => 'E02003367',
        '0QJ' => 'E02003367',
        '0QL' => 'E02003367',
        '0QN' => 'E02003367',
        '0QP' => 'E02003367',
        '0QQ' => 'E02003367',
        '0QR' => 'E02003367',
        '0QS' => 'E02003367',
        '0QT' => 'E02003367',
        '0QU' => 'E02003367',
        '0QW' => 'E02003367',
        '0QX' => 'E02003367',
        '0QY' => 'E02003367',
        '0QZ' => 'E02003367',
        '0RA' => 'E02003367',
        '0RB' => 'E02003367',
        '0RD' => 'E02003367',
        '0RE' => 'E02003367',
        '0RG' => 'E02003367',
        '0RH' => 'E02003367',
        '0RJ' => 'E02003367',
        '0RQ' => 'E02003367',
        '0RR' => 'E02003373',
        '0RS' => 'E02003373',
        '0RT' => 'E02003373',
        '0RU' => 'E02003373',
        '0RX' => 'E02003373',
        '0RY' => 'E02003373',
        '0RZ' => 'E02003373',
        '0SA' => 'E02003373',
        '0SB' => 'E02003373',
        '0SD' => 'E02003373',
        '0SE' => 'E02003373',
        '0SF' => 'E02003373',
        '0SG' => 'E02003373',
        '0SH' => 'E02003373',
        '0SJ' => 'E02003373',
        '0SL' => 'E02003373',
        '0SN' => 'E02003373',
        '0SP' => 'E02003373',
        '0SQ' => 'E02003373',
        '0SR' => 'E02003373',
        '0SS' => 'E02003373',
        '0ST' => 'E02003373',
        '0TB' => 'E02003373',
        '0TD' => 'E02003373',
        '0TE' => 'E02003373',
        '0TF' => 'E02003373',
        '0TG' => 'E02003373',
        '0TH' => 'E02003373',
        '0TJ' => 'E02003373',
        '0TL' => 'E02003373',
        '0TN' => 'E02003373',
        '0TP' => 'E02003373',
        '0TQ' => 'E02003373',
        '0TR' => 'E02003373',
        '0TS' => 'E02003373',
        '0TT' => 'E02003373',
        '0TU' => 'E02003373',
        '0TX' => 'E02003373',
        '0TY' => 'E02003373',
        '0UB' => 'E02003373',
        '0UD' => 'E02003373',
        '0UE' => 'E02003373',
        '0UF' => 'E02003373',
        '0UG' => 'E02003373',
        '0UH' => 'E02003373',
        '0UJ' => 'E02003373',
        '0UL' => 'E02003373',
        '0UN' => 'E02003373',
        '0UP' => 'E02003373',
        '0UQ' => 'E02003373',
        '0UR' => 'E02003373',
        '0UT' => 'E02003373',
        '0UU' => 'E02003373',
        '0UW' => 'E02003373',
        '0UX' => 'E02003373',
        '0UY' => 'E02003373',
        '0UZ' => 'E02003373',
        '0XA' => 'E02003373',
        '0XB' => 'E02003373',
        '0XD' => 'E02003373',
        '0XE' => 'E02003373',
        '0XF' => 'E02003373',
        '0XP' => 'E02003373',
        '0XR' => 'E02003373',
        '0XS' => 'E02003373',
        '0XT' => 'E02003373',
        '0XU' => 'E02003373',
        '0XX' => 'E02003373',
        '0XY' => 'E02003377',
        '0XZ' => 'E02003377',
        '0YA' => 'E02003377',
        '0YU' => 'E02003367',
        '0YX' => 'E02003373',
        '0YY' => 'E02003373',
        '0YZ' => 'E02003373',
        '7AA' => 'E02003368',
        '7AB' => 'E02003368',
        '7AD' => 'E02003368',
        '7AE' => 'E02003368',
        '7AF' => 'E02003368',
        '7AG' => 'E02003368',
        '7AH' => 'E02003368',
        '7AJ' => 'E02003368',
        '7AL' => 'E02003368',
        '7AN' => 'E02003368',
        '7AP' => 'E02003368',
        '7AQ' => 'E02003368',
        '7AR' => 'E02003368',
        '7AS' => 'E02003368',
        '7AT' => 'E02003368',
        '7AU' => 'E02003368',
        '7AW' => 'E02003368',
        '7AX' => 'E02003368',
        '7AY' => 'E02003368',
        '7AZ' => 'E02003368',
        '7BA' => 'E02003368',
        '7BB' => 'E02003368',
        '7BD' => 'E02003368',
        '7BE' => 'E02003368',
        '7BG' => 'E02003368',
        '7BH' => 'E02003368',
        '7BJ' => 'E02003368',
        '7BL' => 'E02003368',
        '7BN' => 'E02003368',
        '7BP' => 'E02003368',
        '7BS' => 'E02003368',
        '7BT' => 'E02003368',
        '7BU' => 'E02003368',
        '7BX' => 'E02003368',
        '7BZ' => 'E02003368',
        '7DA' => 'E02003368',
        '7DB' => 'E02003368',
        '7DD' => 'E02003368',
        '7DE' => 'E02003368',
        '7DF' => 'E02003368',
        '7DG' => 'E02003368',
        '7DH' => 'E02003368',
        '7DJ' => 'E02003368',
        '7DL' => 'E02003367',
        '7DN' => 'E02003368',
        '7DP' => 'E02003368',
        '7DQ' => 'E02003368',
        '7DR' => 'E02003368',
        '7DS' => 'E02003368',
        '7DT' => 'E02003368',
        '7DU' => 'E02003368',
        '7DW' => 'E02003368',
        '7DX' => 'E02003368',
        '7DY' => 'E02003368',
        '7DZ' => 'E02003368',
        '7EA' => 'E02003368',
        '7EB' => 'E02003368',
        '7ED' => 'E02003368',
        '7EE' => 'E02003368',
        '7EF' => 'E02003368',
        '7EG' => 'E02003368',
        '7EH' => 'E02003368',
        '7EJ' => 'E02003368',
        '7EL' => 'E02003368',
        '7EN' => 'E02003368',
        '7EP' => 'E02003368',
        '7EQ' => 'E02003368',
        '7ER' => 'E02003368',
        '7ES' => 'E02003368',
        '7ET' => 'E02003368',
        '7EU' => 'E02003368',
        '7EW' => 'E02003368',
        '7EX' => 'E02003368',
        '7EY' => 'E02003368',
        '7EZ' => 'E02003368',
        '7FA' => 'E02003368',
        '7FB' => 'E02003368',
        '7FD' => 'E02003368',
        '7FE' => 'E02003368',
        '7FF' => 'E02003368',
        '7FG' => 'E02003368',
        '7FH' => 'E02003368',
        '7FQ' => 'E02003368',
        '7HA' => 'E02003368',
        '7HB' => 'E02003368',
        '7HD' => 'E02003368',
        '7HE' => 'E02003368',
        '7HF' => 'E02003368',
        '7HH' => 'E02003368',
        '7HJ' => 'E02003368',
        '7HL' => 'E02003368',
        '7HN' => 'E02003368',
        '7HP' => 'E02003368',
        '7HQ' => 'E02003368',
        '7HR' => 'E02003368',
        '7HS' => 'E02003368',
        '7HT' => 'E02003368',
        '7HU' => 'E02003368',
        '7HW' => 'E02003368',
        '7HX' => 'E02003368',
        '7HY' => 'E02003368',
        '7JA' => 'E02003368',
        '7JB' => 'E02003368',
        '7JD' => 'E02003368',
        '7JE' => 'E02003368',
        '7JG' => 'E02003368',
        '7JH' => 'E02003368',
        '7JJ' => 'E02003368',
        '7JL' => 'E02003368',
        '7JN' => 'E02003368',
        '7JP' => 'E02003368',
        '7JQ' => 'E02003368',
        '7JR' => 'E02003368',
        '7JS' => 'E02003368',
        '7JT' => 'E02003368',
        '7JW' => 'E02003368',
        '7JZ' => 'E02003368',
        '7LA' => 'E02003368',
        '7LB' => 'E02003368',
        '7LD' => 'E02003368',
        '7LE' => 'E02003368',
        '7LG' => 'E02003368',
        '7LH' => 'E02003368',
        '7LJ' => 'E02003368',
        '7LL' => 'E02003368',
        '7LN' => 'E02003368',
        '7LP' => 'E02003368',
        '7LR' => 'E02003368',
        '7LS' => 'E02003368',
        '7LT' => 'E02003368',
        '7LU' => 'E02003368',
        '7LX' => 'E02003368',
        '7LY' => 'E02003368',
        '7LZ' => 'E02003368',
        '7NA' => 'E02003368',
        '7NB' => 'E02003368',
        '7ND' => 'E02003368',
        '7NF' => 'E02003368',
        '7NG' => 'E02003368',
        '7NH' => 'E02003368',
        '7NJ' => 'E02003368',
        '7NL' => 'E02003368',
        '7NN' => 'E02003368',
        '7NP' => 'E02003368',
        '7NR' => 'E02003368',
        '7NS' => 'E02003368',
        '7NT' => 'E02003368',
        '7NU' => 'E02003368',
        '7NW' => 'E02003368',
        '7NX' => 'E02003368',
        '7NY' => 'E02003368',
        '7NZ' => 'E02003368',
        '7PA' => 'E02003368',
        '7PB' => 'E02003368',
        '7PD' => 'E02003368',
        '7PE' => 'E02003368',
        '7PF' => 'E02003368',
        '7PG' => 'E02003368',
        '7PH' => 'E02003368',
        '7PJ' => 'E02003368',
        '7PL' => 'E02003368',
        '7PN' => 'E02003368',
        '7PP' => 'E02003368',
        '7PQ' => 'E02003368',
        '7PR' => 'E02003368',
        '7PS' => 'E02003368',
        '7PT' => 'E02003368',
        '7PU' => 'E02003368',
        '7PW' => 'E02003368',
        '7PX' => 'E02003368',
        '7PY' => 'E02003368',
        '7PZ' => 'E02003368',
        '7QA' => 'E02003368',
        '7QB' => 'E02003368',
        '7QD' => 'E02003368',
        '7QE' => 'E02003368',
        '7QF' => 'E02003368',
        '7QG' => 'E02003368',
        '7QH' => 'E02003368',
        '7QJ' => 'E02003368',
        '7QL' => 'E02003368',
        '7QN' => 'E02003368',
        '7QP' => 'E02003368',
        '7QQ' => 'E02003368',
        '7QR' => 'E02003368',
        '7QS' => 'E02003368',
        '7QT' => 'E02003368',
        '7QU' => 'E02003368',
        '7QX' => 'E02003368',
        '7QY' => 'E02003368',
        '7RA' => 'E02003368',
        '7RB' => 'E02003368',
        '7RD' => 'E02003368',
        '7RE' => 'E02006886',
        '7RF' => 'E02003368',
        '7RG' => 'E02003368',
        '7RR' => 'E02003368',
        '7RS' => 'E02003368',
        '7RT' => 'E02003368',
        '7RU' => 'E02003368',
        '7RX' => 'E02003368',
        '7RY' => 'E02003368',
        '7RZ' => 'E02003368',
        '7SA' => 'E02003368',
        '7SB' => 'E02003368',
        '7SD' => 'E02003368',
        '7SE' => 'E02003368',
        '7SF' => 'E02003368',
        '7SG' => 'E02003368',
        '7SH' => 'E02003368',
        '7SJ' => 'E02003368',
        '7SL' => 'E02003368',
        '7SN' => 'E02003368',
        '7SP' => 'E02003368',
        '7SQ' => 'E02003368',
        '7SR' => 'E02003368',
        '7SS' => 'E02003368',
        '7ST' => 'E02003368',
        '7SU' => 'E02003368',
        '7SW' => 'E02003368',
        '7SX' => 'E02003368',
        '7SY' => 'E02003368',
        '7TA' => 'E02003368',
        '7TB' => 'E02003368',
        '7TD' => 'E02003368',
        '7TE' => 'E02003368',
        '7TG' => 'E02003368',
        '7TH' => 'E02003368',
        '7TJ' => 'E02003368',
        '7TL' => 'E02003368',
        '7TN' => 'E02003368',
        '7TP' => 'E02003368',
        '7TR' => 'E02003368',
        '7TS' => 'E02003368',
        '7TT' => 'E02003368',
        '7TU' => 'E02003368',
        '7TW' => 'E02003368',
        '7TX' => 'E02003368',
        '7TY' => 'E02003368',
        '7TZ' => 'E02003368',
        '7UA' => 'E02003368',
        '7UE' => 'E02003368',
        '7UF' => 'E02003368',
        '7UG' => 'E02003368',
        '7UH' => 'E02003368',
        '7UJ' => 'E02003368',
        '7UL' => 'E02003368',
        '7UN' => 'E02003368',
        '7UP' => 'E02003368',
        '7UR' => 'E02003368',
        '7UT' => 'E02003368',
        '7UU' => 'E02006886',
        '7UX' => 'E02003368',
        '7UY' => 'E02003368',
        '7UZ' => 'E02003368',
        '7XA' => 'E02003368',
        '7XB' => 'E02003368',
        '7XD' => 'E02003368',
        '7XG' => 'E02003368',
        '7XH' => 'E02003368',
        '7XL' => 'E02003368',
        '7XN' => 'E02003368',
        '7XP' => 'E02003368',
        '7XQ' => 'E02003368',
        '7XR' => 'E02003368',
        '7XS' => 'E02003368',
        '7XT' => 'E02003368',
        '7XU' => 'E02003368',
        '7XW' => 'E02003368',
        '7XX' => 'E02003368',
        '7XY' => 'E02003368',
        '7XZ' => 'E02003368',
        '7YA' => 'E02003368',
        '7YB' => 'E02003368',
        '7YD' => 'E02003368',
        '7YE' => 'E02003368',
        '7YF' => 'E02003368',
        '7YG' => 'E02003368',
        '7YH' => 'E02003368',
        '7YJ' => 'E02003368',
        '7YL' => 'E02003368',
        '7YN' => 'E02003368',
        '7YP' => 'E02003368',
        '7YQ' => 'E02003368',
        '7YR' => 'E02003368',
        '7YS' => 'E02003368',
        '7YT' => 'E02003368',
        '7YU' => 'E02003368',
        '7YW' => 'E02003368',
        '7YX' => 'E02003368',
        '7YY' => 'E02003368',
        '7YZ' => 'E02003368',
        '8AA' => 'E02003378',
        '8AD' => 'E02003378',
        '8AE' => 'E02003384',
        '8AF' => 'E02003384',
        '8AG' => 'E02003384',
        '8AH' => 'E02003384',
        '8AL' => 'E02003378',
        '8AN' => 'E02003384',
        '8AP' => 'E02003384',
        '8AQ' => 'E02003384',
        '8AR' => 'E02003384',
        '8AS' => 'E02003384',
        '8AT' => 'E02003384',
        '8AU' => 'E02003384',
        '8AW' => 'E02003384',
        '8AX' => 'E02003384',
        '8AY' => 'E02003384',
        '8BA' => 'E02003384',
        '8BB' => 'E02003384',
        '8BD' => 'E02003384',
        '8BE' => 'E02003384',
        '8BH' => 'E02003384',
        '8BJ' => 'E02003384',
        '8BL' => 'E02003384',
        '8BN' => 'E02003384',
        '8BP' => 'E02003384',
        '8BQ' => 'E02003384',
        '8BS' => 'E02003384',
        '8BT' => 'E02003384',
        '8BU' => 'E02003384',
        '8BW' => 'E02003384',
        '8BX' => 'E02003384',
        '8BY' => 'E02003384',
        '8BZ' => 'E02003384',
        '8DA' => 'E02003384',
        '8DB' => 'E02003384',
        '8DD' => 'E02003384',
        '8DE' => 'E02003384',
        '8DF' => 'E02003384',
        '8DG' => 'E02003384',
        '8DH' => 'E02003384',
        '8DJ' => 'E02003384',
        '8DL' => 'E02003384',
        '8DN' => 'E02003384',
        '8DP' => 'E02003384',
        '8DR' => 'E02003384',
        '8DS' => 'E02003384',
        '8DT' => 'E02003384',
        '8DU' => 'E02003384',
        '8DX' => 'E02003384',
        '8DY' => 'E02003384',
        '8EA' => 'E02003384',
        '8EB' => 'E02003384',
        '8ED' => 'E02003384',
        '8EE' => 'E02003384',
        '8EF' => 'E02003384',
        '8EH' => 'E02003384',
        '8EP' => 'E02003384',
        '8ER' => 'E02003384',
        '8ES' => 'E02003384',
        '8ET' => 'E02003384',
        '8EU' => 'E02003384',
        '8EX' => 'E02003384',
        '8EY' => 'E02003384',
        '8HA' => 'E02003384',
        '8HB' => 'E02003384',
        '8HD' => 'E02003384',
        '8HE' => 'E02003384',
        '8HG' => 'E02003384',
        '8HH' => 'E02003384',
        '8HJ' => 'E02003384',
        '8HL' => 'E02003384',
        '8HN' => 'E02003384',
        '8HP' => 'E02003384',
        '8HQ' => 'E02003384',
        '8HR' => 'E02003384',
        '8HS' => 'E02003384',
        '8HT' => 'E02003384',
        '8HU' => 'E02003384',
        '8HW' => 'E02003384',
        '8HX' => 'E02003384',
        '8HY' => 'E02003384',
        '8JA' => 'E02003384',
        '8JB' => 'E02003384',
        '8JD' => 'E02003384',
        '8JE' => 'E02003384',
        '8JF' => 'E02003384',
        '8JG' => 'E02003384',
        '8JP' => 'E02003384',
        '8JR' => 'E02003384',
        '8JS' => 'E02003384',
        '8JT' => 'E02003384',
        '8JU' => 'E02003384',
        '8JX' => 'E02003384',
        '8JY' => 'E02003384',
        '8LA' => 'E02003384',
        '8LB' => 'E02003384',
        '8LD' => 'E02003384',
        '8LE' => 'E02003384',
        '8LF' => 'E02003384',
        '8LG' => 'E02003384',
        '8LH' => 'E02003384',
        '8LJ' => 'E02003384',
        '8LL' => 'E02003384',
        '8LN' => 'E02003384',
        '8LP' => 'E02003384',
        '8LR' => 'E02003384',
        '8LS' => 'E02003384',
        '8LT' => 'E02003384',
        '8LU' => 'E02003384',
        '8LW' => 'E02003384',
        '8LX' => 'E02003384',
        '8LY' => 'E02003384',
        '8NB' => 'E02003384',
        '8ND' => 'E02003384',
        '8NE' => 'E02003384',
        '8NF' => 'E02003384',
        '8NG' => 'E02003384',
        '8NH' => 'E02003384',
        '8NJ' => 'E02003384',
        '8NL' => 'E02003384',
        '8NN' => 'E02003384',
        '8NP' => 'E02003384',
        '8NR' => 'E02003384',
        '8NS' => 'E02003384',
        '8NT' => 'E02003384',
        '8NW' => 'E02003384',
        '8PA' => 'E02003384',
        '8PB' => 'E02003384',
        '8PD' => 'E02003384',
        '8PE' => 'E02003384',
        '8PF' => 'E02003384',
        '8PG' => 'E02003384',
        '8PH' => 'E02003384',
        '8PJ' => 'E02003384',
        '8PL' => 'E02003384',
        '8PN' => 'E02003384',
        '8PP' => 'E02003384',
        '8PR' => 'E02003384',
        '8PS' => 'E02003384',
        '8PT' => 'E02003384',
        '8PU' => 'E02003384',
        '8PX' => 'E02003384',
        '8QG' => 'E02003367',
        '8QH' => 'E02003367',
        '8QJ' => 'E02003367',
        '8QL' => 'E02003367',
        '8QN' => 'E02003367',
        '8QP' => 'E02003367',
        '8QQ' => 'E02003367',
        '8QR' => 'E02003367',
        '8QS' => 'E02003367',
        '8QT' => 'E02003367',
        '8QU' => 'E02003367',
        '8QW' => 'E02003367',
        '8QX' => 'E02003367',
        '8QY' => 'E02003367',
        '8QZ' => 'E02003367',
        '8RA' => 'E02003367',
        '8RB' => 'E02003367',
        '8RD' => 'E02003384',
        '8RE' => 'E02003384',
        '8RF' => 'E02003384',
        '8RG' => 'E02003384',
        '8RH' => 'E02003384',
        '8RS' => 'E02003367',
        '8RT' => 'E02003367',
        '8RU' => 'E02003367',
        '8RW' => 'E02003367',
        '8RX' => 'E02003367',
        '8RY' => 'E02003367',
        '8SA' => 'E02003367',
        '8SB' => 'E02003367',
        '8SD' => 'E02003367',
        '8SE' => 'E02003367',
        '8SG' => 'E02003367',
        '8SH' => 'E02003367',
        '8SJ' => 'E02003367',
        '8SL' => 'E02003367',
        '8SN' => 'E02003367',
        '8SP' => 'E02003367',
        '8SR' => 'E02003367',
        '8SS' => 'E02003367',
        '8ST' => 'E02003367',
        '8SU' => 'E02003367',
        '8SW' => 'E02003367',
        '8SX' => 'E02003367',
        '8TB' => 'E02003367',
        '8TE' => 'E02003367',
        '8TF' => 'E02003367',
        '8TG' => 'E02003367',
        '8TH' => 'E02003367',
        '8TJ' => 'E02003367',
        '8TL' => 'E02003367',
        '8TN' => 'E02003367',
        '8TP' => 'E02003367',
        '8TR' => 'E02003367',
        '8TS' => 'E02003367',
        '8TT' => 'E02003367',
        '8TU' => 'E02003367',
        '8TW' => 'E02003367',
        '8TX' => 'E02003367',
        '8TY' => 'E02003367',
        '8TZ' => 'E02003367',
        '8UA' => 'E02003384',
        '8UB' => 'E02003367',
        '8UD' => 'E02003384',
        '8UE' => 'E02003384',
        '8UG' => 'E02003367',
        '8UJ' => 'E02003367',
        '8UP' => 'E02003367',
        '8UR' => 'E02003367',
        '8UT' => 'E02003367',
        '8UU' => 'E02003367',
        '8UX' => 'E02003367',
        '8UY' => 'E02003367',
        '8UZ' => 'E02003367',
        '8XA' => 'E02003367',
        '8XB' => 'E02003367',
        '8XD' => 'E02003367',
        '8XE' => 'E02003367',
        '8XF' => 'E02003367',
        '8XG' => 'E02003367',
        '8XH' => 'E02003367',
        '8XJ' => 'E02003367',
        '8XL' => 'E02003367',
        '8XN' => 'E02003367',
        '8XP' => 'E02003367',
        '8XQ' => 'E02003367',
        '8XR' => 'E02003373',
        '8XS' => 'E02003367',
        '8XT' => 'E02003367',
        '8XU' => 'E02003367',
        '8XW' => 'E02003367',
        '8XX' => 'E02003367',
        '8XY' => 'E02003367',
        '8XZ' => 'E02003367',
        '8YA' => 'E02003367',
        '8YB' => 'E02003367',
        '8YD' => 'E02003367',
        '8YE' => 'E02003367',
        '8YF' => 'E02003367',
        '8YG' => 'E02003367',
        '8YH' => 'E02003384',
        '8YJ' => 'E02003367',
        '8YL' => 'E02003384',
        '8YN' => 'E02003367',
        '8YP' => 'E02003384',
        '8YQ' => 'E02003367',
        '8YW' => 'E02003384',
        '9AA' => 'E02003378',
        '9AB' => 'E02003378',
        '9AD' => 'E02003378',
        '9AE' => 'E02003378',
        '9AG' => 'E02003378',
        '9AH' => 'E02003378',
        '9AJ' => 'E02003378',
        '9AL' => 'E02003378',
        '9AN' => 'E02003367',
        '9AP' => 'E02003367',
        '9AQ' => 'E02003378',
        '9AT' => 'E02003378',
        '9AU' => 'E02003378',
        '9AX' => 'E02003378',
        '9AY' => 'E02003378',
        '9BA' => 'E02003378',
        '9BB' => 'E02003378',
        '9BD' => 'E02003378',
        '9BE' => 'E02003378',
        '9BG' => 'E02003378',
        '9BH' => 'E02003367',
        '9BJ' => 'E02003367',
        '9BL' => 'E02003384',
        '9BN' => 'E02003384',
        '9BP' => 'E02003384',
        '9BQ' => 'E02003367',
        '9BS' => 'E02003367',
        '9BT' => 'E02003367',
        '9BU' => 'E02003367',
        '9BW' => 'E02003384',
        '9BX' => 'E02003367',
        '9BY' => 'E02003367',
        '9BZ' => 'E02003367',
        '9DA' => 'E02003378',
        '9DB' => 'E02003378',
        '9DD' => 'E02003378',
        '9DE' => 'E02003373',
        '9DG' => 'E02003373',
        '9DH' => 'E02003373',
        '9DJ' => 'E02003373',
        '9DL' => 'E02003373',
        '9DN' => 'E02003373',
        '9DP' => 'E02003373',
        '9DQ' => 'E02003373',
        '9DR' => 'E02003367',
        '9DS' => 'E02003373',
        '9DT' => 'E02003373',
        '9DU' => 'E02003373',
        '9DX' => 'E02003373',
        '9DY' => 'E02003373',
        '9DZ' => 'E02003373',
        '9EA' => 'E02003373',
        '9EB' => 'E02003373',
        '9ED' => 'E02003373',
        '9EE' => 'E02003373',
        '9EF' => 'E02003367',
        '9EG' => 'E02003373',
        '9EL' => 'E02003373',
        '9EN' => 'E02003373',
        '9EP' => 'E02003373',
        '9EQ' => 'E02003373',
        '9ER' => 'E02003373',
        '9ES' => 'E02003373',
        '9ET' => 'E02003373',
        '9EU' => 'E02003373',
        '9EW' => 'E02003373',
        '9EX' => 'E02003373',
        '9EY' => 'E02003373',
        '9EZ' => 'E02003373',
        '9HA' => 'E02003373',
        '9HB' => 'E02003373',
        '9HD' => 'E02003373',
        '9HE' => 'E02003373',
        '9HF' => 'E02003373',
        '9HG' => 'E02003373',
        '9HH' => 'E02003373',
        '9HJ' => 'E02003383',
        '9HL' => 'E02003383',
        '9HP' => 'E02003383',
        '9HQ' => 'E02003373',
        '9HR' => 'E02003373',
        '9HS' => 'E02003383',
        '9HT' => 'E02003373',
        '9HU' => 'E02003373',
        '9HW' => 'E02003383',
        '9HX' => 'E02003373',
        '9HY' => 'E02003373',
        '9HZ' => 'E02003373',
        '9JA' => 'E02003373',
        '9JB' => 'E02003373',
        '9JD' => 'E02003373',
        '9JE' => 'E02003373',
        '9JF' => 'E02003373',
        '9JG' => 'E02003373',
        '9JH' => 'E02003373',
        '9JJ' => 'E02003373',
        '9JL' => 'E02003373',
        '9JN' => 'E02003373',
        '9JP' => 'E02003373',
        '9JQ' => 'E02003373',
        '9JR' => 'E02003373',
        '9JS' => 'E02003373',
        '9JW' => 'E02003373',
        '9JX' => 'E02003373',
        '9LA' => 'E02003378',
        '9LB' => 'E02003378',
        '9LD' => 'E02003378',
        '9LE' => 'E02003378',
        '9LF' => 'E02003378',
        '9LG' => 'E02003378',
        '9LH' => 'E02003378',
        '9LJ' => 'E02003378',
        '9LL' => 'E02003378',
        '9LN' => 'E02003378',
        '9LP' => 'E02003378',
        '9LR' => 'E02003378',
        '9LS' => 'E02003373',
        '9LT' => 'E02003373',
        '9LU' => 'E02003373',
        '9LW' => 'E02003378',
        '9LX' => 'E02003373',
        '9LY' => 'E02003373',
        '9LZ' => 'E02003373',
        '9NA' => 'E02003373',
        '9NB' => 'E02003373',
        '9ND' => 'E02003373',
        '9NE' => 'E02003373',
        '9NF' => 'E02003373',
        '9NG' => 'E02003373',
        '9NH' => 'E02003373',
        '9NJ' => 'E02003373',
        '9NL' => 'E02003373',
        '9NN' => 'E02003373',
        '9NP' => 'E02003373',
        '9NR' => 'E02003373',
        '9NW' => 'E02003377',
        '9NX' => 'E02003373',
        '9NY' => 'E02003373',
        '9NZ' => 'E02003373',
        '9PA' => 'E02003373',
        '9PB' => 'E02003373',
        '9PD' => 'E02003373',
        '9PE' => 'E02003373',
        '9PF' => 'E02003373',
        '9PG' => 'E02003373',
        '9PH' => 'E02003373',
        '9PJ' => 'E02003373',
        '9PL' => 'E02003373',
        '9PN' => 'E02003373',
        '9PP' => 'E02003373',
        '9PQ' => 'E02003373',
        '9PR' => 'E02003373',
        '9PS' => 'E02003373',
        '9PT' => 'E02003373',
        '9PU' => 'E02003373',
        '9PW' => 'E02003373',
        '9PX' => 'E02003373',
        '9PY' => 'E02003373',
        '9PZ' => 'E02003373',
        '9QA' => 'E02003373',
        '9QD' => 'E02003373',
        '9QE' => 'E02003373',
        '9QF' => 'E02003373',
        '9QG' => 'E02003373',
        '9QH' => 'E02003373',
        '9QJ' => 'E02003373',
        '9QL' => 'E02003373',
        '9QN' => 'E02003373',
        '9QP' => 'E02003373',
        '9QQ' => 'E02003373',
        '9QR' => 'E02003373',
        '9QS' => 'E02003373',
        '9QT' => 'E02003373',
        '9QU' => 'E02003373',
        '9QW' => 'E02003373',
        '9QX' => 'E02003373',
        '9RA' => 'E02003373',
        '9RB' => 'E02003373',
        '9RD' => 'E02003373',
        '9RE' => 'E02003373',
        '9RF' => 'E02003373',
        '9RG' => 'E02003373',
        '9RH' => 'E02003373',
        '9RJ' => 'E02003373',
        '9RL' => 'E02003373',
        '9RN' => 'E02003373',
        '9RP' => 'E02003373',
        '9RQ' => 'E02003373',
        '9RR' => 'E02003373',
        '9RS' => 'E02003373',
        '9RT' => 'E02003373',
        '9RU' => 'E02003373',
        '9RW' => 'E02003373',
        '9RX' => 'E02003373',
        '9RY' => 'E02003373',
        '9RZ' => 'E02003373',
        '9SA' => 'E02003373',
        '9SB' => 'E02003373',
        '9SD' => 'E02003373',
        '9SE' => 'E02003373',
        '9SG' => 'E02003373',
        '9SH' => 'E02003373',
        '9SN' => 'E02003373',
        '9SP' => 'E02003373',
        '9SR' => 'E02003373',
        '9SS' => 'E02003373',
        '9ST' => 'E02003373',
        '9SU' => 'E02003373',
        '9SW' => 'E02003373',
        '9SX' => 'E02003373',
        '9SY' => 'E02003373',
        '9SZ' => 'E02003373',
        '9TA' => 'E02003373',
        '9TB' => 'E02003373',
        '9TD' => 'E02003373',
        '9TE' => 'E02003373',
        '9TF' => 'E02003373',
        '9TG' => 'E02003373',
        '9TH' => 'E02003373',
        '9TJ' => 'E02003373',
        '9TL' => 'E02003373',
        '9TN' => 'E02003373',
        '9TP' => 'E02003373',
        '9TQ' => 'E02003373',
        '9TR' => 'E02003373',
        '9TS' => 'E02003373',
        '9TT' => 'E02003373',
        '9TU' => 'E02003373',
        '9TW' => 'E02003373',
        '9TX' => 'E02003373',
        '9TY' => 'E02003373',
        '9TZ' => 'E02003373',
        '9UA' => 'E02003373',
        '9UB' => 'E02003373',
        '9UD' => 'E02003373',
        '9UE' => 'E02003373',
        '9UF' => 'E02003373',
        '9UG' => 'E02003373',
        '9UH' => 'E02003373',
        '9UJ' => 'E02003373',
        '9UL' => 'E02003377',
        '9UN' => 'E02003377',
        '9UP' => 'E02003373',
        '9UR' => 'E02003377',
        '9UT' => 'E02003377',
        '9UU' => 'E02003377',
        '9UW' => 'E02003377',
        '9UX' => 'E02003377',
        '9UY' => 'E02003373',
        '9UZ' => 'E02003373',
        '9XA' => 'E02003373',
        '9XB' => 'E02003373',
        '9XD' => 'E02003373',
        '9XE' => 'E02003373',
        '9XF' => 'E02003373',
        '9XG' => 'E02003373',
        '9XH' => 'E02003373',
        '9XJ' => 'E02003373',
        '9XL' => 'E02003373',
        '9XN' => 'E02003373',
        '9XP' => 'E02003373',
        '9XQ' => 'E02003373',
        '9XR' => 'E02003373',
        '9XS' => 'E02003373',
        '9XT' => 'E02003373',
        '9XU' => 'E02003373',
        '9XW' => 'E02003373',
        '9YA' => 'E02003373',
        '9YJ' => 'E02003373',
        '9YL' => 'E02003373',
        '9YN' => 'E02003373',
        '9YP' => 'E02003373',
        '9YR' => 'E02003373',
        '9YS' => 'E02003373',
        '9YT' => 'E02003373',
        '9YU' => 'E02003373',
        '9YW' => 'E02003373',
        '9YX' => 'E02003373',
        '9YY' => 'E02003373',
        '9YZ' => 'E02003373',
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
