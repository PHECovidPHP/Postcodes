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
final class B33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001883',
        '0AB' => 'E02001883',
        '0AD' => 'E02001883',
        '0AE' => 'E02001883',
        '0AF' => 'E02001883',
        '0AG' => 'E02001883',
        '0AH' => 'E02001883',
        '0AJ' => 'E02001883',
        '0AL' => 'E02001883',
        '0AN' => 'E02001883',
        '0AP' => 'E02001883',
        '0AQ' => 'E02001883',
        '0AR' => 'E02001883',
        '0AS' => 'E02001883',
        '0AT' => 'E02001883',
        '0AU' => 'E02001883',
        '0AW' => 'E02001883',
        '0AX' => 'E02001883',
        '0AY' => 'E02001883',
        '0AZ' => 'E02001883',
        '0BA' => 'E02001883',
        '0BB' => 'E02001883',
        '0BD' => 'E02001883',
        '0BE' => 'E02001883',
        '0BG' => 'E02001883',
        '0BH' => 'E02001883',
        '0BJ' => 'E02001883',
        '0BL' => 'E02001883',
        '0BN' => 'E02001883',
        '0BP' => 'E02001883',
        '0BQ' => 'E02001883',
        '0BS' => 'E02001883',
        '0BT' => 'E02001872',
        '0BU' => 'E02001883',
        '0BW' => 'E02001883',
        '0BX' => 'E02001883',
        '0BY' => 'E02001883',
        '0BZ' => 'E02001883',
        '0DA' => 'E02001883',
        '0DB' => 'E02001883',
        '0DD' => 'E02001883',
        '0DE' => 'E02001883',
        '0DF' => 'E02001895',
        '0DG' => 'E02001883',
        '0DH' => 'E02001883',
        '0DJ' => 'E02001883',
        '0DL' => 'E02001883',
        '0DN' => 'E02001883',
        '0DP' => 'E02001883',
        '0DQ' => 'E02001888',
        '0DR' => 'E02001883',
        '0DS' => 'E02001883',
        '0DT' => 'E02001883',
        '0DU' => 'E02001883',
        '0DW' => 'E02001872',
        '0DX' => 'E02001883',
        '0DY' => 'E02001883',
        '0DZ' => 'E02001883',
        '0EA' => 'E02001883',
        '0EB' => 'E02001883',
        '0ED' => 'E02001883',
        '0EE' => 'E02001883',
        '0EF' => 'E02001883',
        '0EG' => 'E02001883',
        '0EH' => 'E02001883',
        '0EJ' => 'E02001883',
        '0EL' => 'E02001883',
        '0EN' => 'E02001883',
        '0EP' => 'E02001883',
        '0EQ' => 'E02001883',
        '0ER' => 'E02001883',
        '0ES' => 'E02001883',
        '0ET' => 'E02001883',
        '0EU' => 'E02001883',
        '0EW' => 'E02001883',
        '0EX' => 'E02001883',
        '0EY' => 'E02001883',
        '0EZ' => 'E02001872',
        '0FD' => 'E02001872',
        '0FE' => 'E02001872',
        '0GA' => 'E02001888',
        '0GD' => 'E02001888',
        '0GE' => 'E02001888',
        '0GF' => 'E02001888',
        '0HA' => 'E02001883',
        '0HB' => 'E02001883',
        '0HD' => 'E02001883',
        '0HE' => 'E02001895',
        '0HF' => 'E02001895',
        '0HG' => 'E02001883',
        '0HH' => 'E02001883',
        '0HJ' => 'E02001895',
        '0HL' => 'E02001883',
        '0HN' => 'E02001883',
        '0HP' => 'E02001883',
        '0HQ' => 'E02001883',
        '0HR' => 'E02001883',
        '0HS' => 'E02001895',
        '0HT' => 'E02001895',
        '0HU' => 'E02001895',
        '0HW' => 'E02001883',
        '0HX' => 'E02001895',
        '0HY' => 'E02001895',
        '0HZ' => 'E02001895',
        '0JA' => 'E02001895',
        '0JB' => 'E02001883',
        '0JD' => 'E02001895',
        '0JE' => 'E02001883',
        '0JF' => 'E02001883',
        '0JG' => 'E02001883',
        '0JH' => 'E02001883',
        '0JJ' => 'E02001895',
        '0JL' => 'E02001883',
        '0JN' => 'E02001883',
        '0JP' => 'E02001883',
        '0JQ' => 'E02001883',
        '0JR' => 'E02001883',
        '0JS' => 'E02001883',
        '0JT' => 'E02001883',
        '0JU' => 'E02001883',
        '0JW' => 'E02001883',
        '0JX' => 'E02001883',
        '0JY' => 'E02001883',
        '0JZ' => 'E02001883',
        '0LA' => 'E02001895',
        '0LB' => 'E02001883',
        '0LD' => 'E02001883',
        '0LE' => 'E02001883',
        '0LF' => 'E02001883',
        '0LG' => 'E02001883',
        '0LH' => 'E02001883',
        '0LJ' => 'E02001883',
        '0LL' => 'E02001883',
        '0LN' => 'E02001883',
        '0LP' => 'E02001895',
        '0LQ' => 'E02001883',
        '0LR' => 'E02001895',
        '0LS' => 'E02001895',
        '0LT' => 'E02001895',
        '0LU' => 'E02001895',
        '0LW' => 'E02001883',
        '0LX' => 'E02001895',
        '0LY' => 'E02001883',
        '0LZ' => 'E02001883',
        '0NA' => 'E02001895',
        '0NB' => 'E02001883',
        '0ND' => 'E02001883',
        '0NE' => 'E02001895',
        '0NG' => 'E02001883',
        '0NH' => 'E02001883',
        '0NJ' => 'E02001883',
        '0NL' => 'E02001883',
        '0NN' => 'E02001883',
        '0NP' => 'E02001895',
        '0NR' => 'E02001895',
        '0NS' => 'E02001895',
        '0NT' => 'E02001895',
        '0NU' => 'E02001895',
        '0NW' => 'E02001883',
        '0NX' => 'E02001883',
        '0NY' => 'E02001883',
        '0NZ' => 'E02001883',
        '0PA' => 'E02001883',
        '0PB' => 'E02001883',
        '0PD' => 'E02001883',
        '0PE' => 'E02001883',
        '0PF' => 'E02001883',
        '0PG' => 'E02001895',
        '0PH' => 'E02001907',
        '0PJ' => 'E02001907',
        '0PL' => 'E02001907',
        '0PN' => 'E02001907',
        '0PP' => 'E02001895',
        '0PQ' => 'E02001907',
        '0PR' => 'E02001895',
        '0PS' => 'E02001895',
        '0PT' => 'E02001895',
        '0PU' => 'E02001895',
        '0PW' => 'E02001883',
        '0PX' => 'E02001895',
        '0PY' => 'E02001895',
        '0PZ' => 'E02001895',
        '0QA' => 'E02001895',
        '0QB' => 'E02001895',
        '0QD' => 'E02001895',
        '0QE' => 'E02001895',
        '0QF' => 'E02001883',
        '0QG' => 'E02001895',
        '0QH' => 'E02001895',
        '0QJ' => 'E02001895',
        '0QL' => 'E02001895',
        '0QN' => 'E02001872',
        '0QP' => 'E02001895',
        '0QQ' => 'E02001895',
        '0QR' => 'E02001895',
        '0QS' => 'E02001895',
        '0QT' => 'E02001895',
        '0QU' => 'E02001895',
        '0QW' => 'E02001883',
        '0QX' => 'E02001895',
        '0QY' => 'E02001895',
        '0RA' => 'E02001895',
        '0RB' => 'E02001895',
        '0RD' => 'E02001872',
        '0RE' => 'E02001883',
        '0RG' => 'E02001895',
        '0RH' => 'E02001895',
        '0RJ' => 'E02001895',
        '0RL' => 'E02001895',
        '0RN' => 'E02001895',
        '0RP' => 'E02001895',
        '0RQ' => 'E02001895',
        '0RR' => 'E02001895',
        '0RS' => 'E02001895',
        '0RT' => 'E02001895',
        '0RU' => 'E02001895',
        '0RW' => 'E02001895',
        '0RX' => 'E02001895',
        '0RY' => 'E02001895',
        '0RZ' => 'E02001883',
        '0SA' => 'E02001895',
        '0SB' => 'E02001895',
        '0SD' => 'E02001895',
        '0SE' => 'E02001888',
        '0SF' => 'E02001888',
        '0SG' => 'E02001895',
        '0SH' => 'E02001895',
        '0SJ' => 'E02001895',
        '0SL' => 'E02001895',
        '0SN' => 'E02001883',
        '0SP' => 'E02001895',
        '0SQ' => 'E02001895',
        '0SR' => 'E02001895',
        '0SS' => 'E02001895',
        '0ST' => 'E02001895',
        '0SU' => 'E02001895',
        '0SW' => 'E02001883',
        '0SX' => 'E02001895',
        '0SY' => 'E02001895',
        '0TA' => 'E02001895',
        '0TB' => 'E02001872',
        '0TD' => 'E02001895',
        '0TE' => 'E02001895',
        '0TF' => 'E02001895',
        '0TG' => 'E02001895',
        '0TH' => 'E02001895',
        '0TJ' => 'E02001895',
        '0TL' => 'E02001895',
        '0TN' => 'E02001895',
        '0TP' => 'E02001895',
        '0TQ' => 'E02001895',
        '0TR' => 'E02001888',
        '0TS' => 'E02001888',
        '0TT' => 'E02001895',
        '0TU' => 'E02001895',
        '0TW' => 'E02001895',
        '0TX' => 'E02001895',
        '0TY' => 'E02001895',
        '0TZ' => 'E02001895',
        '0UA' => 'E02001895',
        '0UB' => 'E02001895',
        '0UD' => 'E02001895',
        '0UE' => 'E02001895',
        '0UF' => 'E02001888',
        '0UG' => 'E02001883',
        '0UH' => 'E02001895',
        '0UJ' => 'E02001888',
        '0UL' => 'E02001888',
        '0UN' => 'E02001888',
        '0UP' => 'E02001888',
        '0UQ' => 'E02001872',
        '0UR' => 'E02001888',
        '0US' => 'E02001888',
        '0UT' => 'E02001895',
        '0UU' => 'E02001888',
        '0UW' => 'E02001888',
        '0UX' => 'E02001888',
        '0UY' => 'E02001888',
        '0UZ' => 'E02001888',
        '0WP' => 'E02001888',
        '0XA' => 'E02001888',
        '0XB' => 'E02001888',
        '0XD' => 'E02001888',
        '0XE' => 'E02001888',
        '0XG' => 'E02001888',
        '0XH' => 'E02001895',
        '0XJ' => 'E02001888',
        '0XL' => 'E02001888',
        '0XN' => 'E02001895',
        '0XP' => 'E02001883',
        '0XR' => 'E02001895',
        '0XS' => 'E02001895',
        '0XT' => 'E02001895',
        '0XW' => 'E02001895',
        '0YA' => 'E02001895',
        '0YB' => 'E02001895',
        '0YD' => 'E02001895',
        '0YE' => 'E02001895',
        '0YJ' => 'E02001872',
        '0YL' => 'E02001883',
        '0YN' => 'E02001883',
        '0YP' => 'E02001883',
        '0YQ' => 'E02001872',
        '0YR' => 'E02001883',
        '0YS' => 'E02001883',
        '0YT' => 'E02001883',
        '0YW' => 'E02001883',
        '0YX' => 'E02001872',
        '0YY' => 'E02001872',
        '0YZ' => 'E02001872',
        '0ZS' => 'E02001872',
        '0ZY' => 'E02001872',
        '3AA' => 'E02001872',
        '3AB' => 'E02001872',
        '3AD' => 'E02001872',
        '3AE' => 'E02001872',
        '3AF' => 'E02001872',
        '3AG' => 'E02001872',
        '3AH' => 'E02001872',
        '3AJ' => 'E02001872',
        '3AL' => 'E02001872',
        '3AN' => 'E02001872',
        '3AP' => 'E02001872',
        '3AQ' => 'E02001872',
        '3AT' => 'E02001872',
        '3AU' => 'E02001872',
        '3AW' => 'E02001872',
        '3AX' => 'E02001872',
        '3AY' => 'E02001872',
        '3AZ' => 'E02001872',
        '3BA' => 'E02001872',
        '3BB' => 'E02001872',
        '3BD' => 'E02001872',
        '3BE' => 'E02001872',
        '3BF' => 'E02001872',
        '3BG' => 'E02001872',
        '3BH' => 'E02001872',
        '3BJ' => 'E02001872',
        '3BL' => 'E02001872',
        '3BN' => 'E02001872',
        '3BP' => 'E02001872',
        '3BQ' => 'E02001872',
        '3BR' => 'E02001872',
        '3BS' => 'E02001872',
        '3BT' => 'E02001872',
        '3BU' => 'E02001872',
        '3BW' => 'E02001872',
        '3BX' => 'E02001872',
        '3BY' => 'E02001872',
        '3BZ' => 'E02001872',
        '3DA' => 'E02001872',
        '3DB' => 'E02001872',
        '3DD' => 'E02001872',
        '3DE' => 'E02001872',
        '3DF' => 'E02001872',
        '3DG' => 'E02001872',
        '3DH' => 'E02001872',
        '3DJ' => 'E02001872',
        '3DL' => 'E02001872',
        '3DN' => 'E02001872',
        '3DP' => 'E02001872',
        '3DQ' => 'E02001872',
        '3DR' => 'E02001872',
        '3DS' => 'E02001872',
        '3DT' => 'E02001872',
        '3DU' => 'E02001872',
        '3DW' => 'E02001872',
        '3DX' => 'E02001872',
        '3DY' => 'E02001872',
        '3DZ' => 'E02001872',
        '3EA' => 'E02001872',
        '3EB' => 'E02001872',
        '3ED' => 'E02001872',
        '3EE' => 'E02001872',
        '3EF' => 'E02001872',
        '3EG' => 'E02001872',
        '3EH' => 'E02001872',
        '3EJ' => 'E02001872',
        '3EL' => 'E02001872',
        '3EN' => 'E02001872',
        '3EP' => 'E02001872',
        '3EQ' => 'E02001872',
        '3ER' => 'E02001872',
        '3ES' => 'E02001872',
        '3ET' => 'E02001872',
        '3EU' => 'E02001872',
        '3EW' => 'E02001872',
        '3EX' => 'E02001872',
        '3EY' => 'E02001872',
        '3EZ' => 'E02001872',
        '3FA' => 'E02001872',
        '3FB' => 'E02001872',
        '3FD' => 'E02001872',
        '8AA' => 'E02001882',
        '8AB' => 'E02001882',
        '8AD' => 'E02001882',
        '8AE' => 'E02001882',
        '8AF' => 'E02001882',
        '8AG' => 'E02001882',
        '8AH' => 'E02001882',
        '8AJ' => 'E02001882',
        '8AL' => 'E02001882',
        '8AN' => 'E02001882',
        '8AP' => 'E02001882',
        '8AQ' => 'E02001882',
        '8AR' => 'E02001882',
        '8AS' => 'E02001882',
        '8AT' => 'E02001881',
        '8AU' => 'E02001893',
        '8AW' => 'E02001882',
        '8AX' => 'E02001881',
        '8AY' => 'E02001882',
        '8AZ' => 'E02001882',
        '8BA' => 'E02001882',
        '8BB' => 'E02001882',
        '8BD' => 'E02001882',
        '8BE' => 'E02001882',
        '8BF' => 'E02001888',
        '8BG' => 'E02001882',
        '8BH' => 'E02001882',
        '8BJ' => 'E02001882',
        '8BL' => 'E02001882',
        '8BN' => 'E02001882',
        '8BP' => 'E02001882',
        '8BQ' => 'E02001882',
        '8BS' => 'E02001882',
        '8BT' => 'E02001882',
        '8BU' => 'E02001882',
        '8BW' => 'E02001882',
        '8BX' => 'E02001882',
        '8BY' => 'E02001882',
        '8BZ' => 'E02001882',
        '8DA' => 'E02001872',
        '8DB' => 'E02001888',
        '8DD' => 'E02001888',
        '8DE' => 'E02001882',
        '8DF' => 'E02001882',
        '8DG' => 'E02001882',
        '8DH' => 'E02001882',
        '8DJ' => 'E02001882',
        '8DL' => 'E02001882',
        '8DN' => 'E02001882',
        '8DP' => 'E02001882',
        '8DQ' => 'E02001872',
        '8DR' => 'E02001882',
        '8DS' => 'E02001882',
        '8DT' => 'E02001882',
        '8DU' => 'E02001882',
        '8DW' => 'E02001882',
        '8DX' => 'E02001882',
        '8DY' => 'E02001882',
        '8DZ' => 'E02001882',
        '8EA' => 'E02001882',
        '8EB' => 'E02001882',
        '8ED' => 'E02001882',
        '8EE' => 'E02001882',
        '8EF' => 'E02001882',
        '8EG' => 'E02001882',
        '8EH' => 'E02001882',
        '8EJ' => 'E02001882',
        '8EL' => 'E02001882',
        '8EN' => 'E02001888',
        '8EP' => 'E02001880',
        '8EQ' => 'E02001882',
        '8ER' => 'E02001880',
        '8ES' => 'E02001882',
        '8ET' => 'E02001882',
        '8EU' => 'E02001880',
        '8EW' => 'E02001888',
        '8EX' => 'E02001880',
        '8EY' => 'E02001880',
        '8EZ' => 'E02001882',
        '8FD' => 'E02001882',
        '8FE' => 'E02001882',
        '8GN' => 'E02001882',
        '8HA' => 'E02001882',
        '8HB' => 'E02001882',
        '8HD' => 'E02001882',
        '8HE' => 'E02001882',
        '8HG' => 'E02001882',
        '8HH' => 'E02001888',
        '8HJ' => 'E02001880',
        '8HL' => 'E02001888',
        '8HN' => 'E02001888',
        '8HP' => 'E02001888',
        '8HR' => 'E02001888',
        '8HS' => 'E02001882',
        '8HT' => 'E02001888',
        '8HW' => 'E02001888',
        '8HZ' => 'E02001893',
        '8JA' => 'E02001880',
        '8JB' => 'E02001880',
        '8JD' => 'E02001880',
        '8JE' => 'E02001880',
        '8JF' => 'E02001880',
        '8JG' => 'E02001880',
        '8JH' => 'E02001880',
        '8JJ' => 'E02001880',
        '8JL' => 'E02001888',
        '8JN' => 'E02001888',
        '8JP' => 'E02001888',
        '8JQ' => 'E02001880',
        '8JR' => 'E02001880',
        '8JS' => 'E02001880',
        '8JT' => 'E02001880',
        '8JU' => 'E02001888',
        '8JW' => 'E02001888',
        '8JX' => 'E02001888',
        '8JY' => 'E02001880',
        '8JZ' => 'E02001888',
        '8LA' => 'E02001880',
        '8LB' => 'E02001880',
        '8LD' => 'E02001880',
        '8LE' => 'E02001880',
        '8LF' => 'E02001880',
        '8LG' => 'E02001888',
        '8LH' => 'E02001888',
        '8LJ' => 'E02001888',
        '8LL' => 'E02001888',
        '8LN' => 'E02001880',
        '8LQ' => 'E02001888',
        '8LW' => 'E02001880',
        '8LX' => 'E02001888',
        '8LY' => 'E02001888',
        '8NA' => 'E02001888',
        '8NB' => 'E02001888',
        '8ND' => 'E02001888',
        '8NE' => 'E02001888',
        '8NF' => 'E02001888',
        '8NG' => 'E02001888',
        '8NH' => 'E02001888',
        '8NJ' => 'E02001888',
        '8NL' => 'E02001888',
        '8NN' => 'E02001888',
        '8NP' => 'E02001888',
        '8NQ' => 'E02001888',
        '8NR' => 'E02001888',
        '8NY' => 'E02001893',
        '8NZ' => 'E02001893',
        '8PA' => 'E02001893',
        '8PB' => 'E02001893',
        '8PD' => 'E02001893',
        '8PE' => 'E02001888',
        '8PG' => 'E02001888',
        '8PH' => 'E02001893',
        '8PJ' => 'E02001893',
        '8PL' => 'E02001893',
        '8PN' => 'E02001892',
        '8PP' => 'E02001893',
        '8PR' => 'E02001893',
        '8PS' => 'E02001893',
        '8PT' => 'E02001893',
        '8PU' => 'E02001893',
        '8PX' => 'E02001893',
        '8PY' => 'E02001893',
        '8QA' => 'E02001892',
        '8QB' => 'E02001892',
        '8QD' => 'E02001892',
        '8QE' => 'E02001892',
        '8QF' => 'E02001892',
        '8QJ' => 'E02001892',
        '8QL' => 'E02001882',
        '8QN' => 'E02001882',
        '8QP' => 'E02001893',
        '8QQ' => 'E02001882',
        '8QR' => 'E02001882',
        '8QS' => 'E02001882',
        '8QT' => 'E02001882',
        '8QU' => 'E02001882',
        '8QW' => 'E02001882',
        '8QX' => 'E02001882',
        '8QY' => 'E02001882',
        '8RA' => 'E02001882',
        '8RB' => 'E02001882',
        '8RD' => 'E02001882',
        '8RE' => 'E02001882',
        '8RF' => 'E02001882',
        '8RG' => 'E02001882',
        '8RH' => 'E02001882',
        '8RJ' => 'E02001882',
        '8RL' => 'E02001882',
        '8RN' => 'E02001882',
        '8RP' => 'E02001882',
        '8RQ' => 'E02001882',
        '8RR' => 'E02001882',
        '8RS' => 'E02001882',
        '8RT' => 'E02001882',
        '8RU' => 'E02001882',
        '8RW' => 'E02001872',
        '8RX' => 'E02001882',
        '8RY' => 'E02001882',
        '8RZ' => 'E02001882',
        '8SA' => 'E02001893',
        '8SB' => 'E02001893',
        '8SD' => 'E02001882',
        '8SE' => 'E02001872',
        '8SF' => 'E02001882',
        '8SG' => 'E02001872',
        '8SH' => 'E02001892',
        '8SJ' => 'E02001892',
        '8SL' => 'E02001882',
        '8SN' => 'E02001892',
        '8SP' => 'E02001882',
        '8SQ' => 'E02001882',
        '8SR' => 'E02001882',
        '8SS' => 'E02001892',
        '8ST' => 'E02001892',
        '8SU' => 'E02001892',
        '8SW' => 'E02001882',
        '8SX' => 'E02001892',
        '8SY' => 'E02001892',
        '8SZ' => 'E02001892',
        '8TA' => 'E02001892',
        '8TB' => 'E02001892',
        '8TD' => 'E02001892',
        '8TE' => 'E02001892',
        '8TF' => 'E02001892',
        '8TG' => 'E02001892',
        '8TH' => 'E02001892',
        '8TJ' => 'E02001892',
        '8TL' => 'E02001892',
        '8TN' => 'E02001892',
        '8TQ' => 'E02001892',
        '8TX' => 'E02001882',
        '8TY' => 'E02001882',
        '8TZ' => 'E02001882',
        '8UA' => 'E02001882',
        '8UB' => 'E02001882',
        '8UD' => 'E02001882',
        '8UE' => 'E02001882',
        '8UF' => 'E02001882',
        '8UG' => 'E02001892',
        '8UH' => 'E02001882',
        '8UJ' => 'E02001892',
        '8UL' => 'E02001892',
        '8UN' => 'E02001892',
        '8UP' => 'E02001893',
        '8UQ' => 'E02001882',
        '8UR' => 'E02001893',
        '8US' => 'E02001893',
        '8UT' => 'E02001893',
        '8UU' => 'E02001893',
        '8UW' => 'E02001892',
        '8UX' => 'E02001893',
        '8UY' => 'E02001892',
        '8UZ' => 'E02001872',
        '8WA' => 'E02001872',
        '8WB' => 'E02001872',
        '8WD' => 'E02001872',
        '8WE' => 'E02001872',
        '8WG' => 'E02001872',
        '8WH' => 'E02001872',
        '8WL' => 'E02001872',
        '8WR' => 'E02001872',
        '8WS' => 'E02001872',
        '9AA' => 'E02001882',
        '9AB' => 'E02001882',
        '9AD' => 'E02001882',
        '9AE' => 'E02001882',
        '9AF' => 'E02001882',
        '9AG' => 'E02001882',
        '9AH' => 'E02001882',
        '9AJ' => 'E02001882',
        '9AL' => 'E02001882',
        '9AN' => 'E02001882',
        '9AP' => 'E02001882',
        '9AQ' => 'E02001882',
        '9AR' => 'E02001882',
        '9AS' => 'E02001882',
        '9AT' => 'E02001882',
        '9AU' => 'E02001882',
        '9AW' => 'E02001880',
        '9AX' => 'E02001882',
        '9AY' => 'E02001880',
        '9AZ' => 'E02001880',
        '9BA' => 'E02001882',
        '9BB' => 'E02001882',
        '9BD' => 'E02001882',
        '9BE' => 'E02001882',
        '9BF' => 'E02001882',
        '9BG' => 'E02001882',
        '9BH' => 'E02001882',
        '9BJ' => 'E02001882',
        '9BL' => 'E02001882',
        '9BN' => 'E02001872',
        '9BP' => 'E02001880',
        '9BQ' => 'E02001880',
        '9BS' => 'E02001880',
        '9BT' => 'E02001880',
        '9BU' => 'E02001880',
        '9BW' => 'E02001872',
        '9BX' => 'E02001880',
        '9BY' => 'E02001880',
        '9BZ' => 'E02001880',
        '9DA' => 'E02001880',
        '9DB' => 'E02001880',
        '9DD' => 'E02001880',
        '9DE' => 'E02001880',
        '9DF' => 'E02001880',
        '9DG' => 'E02001880',
        '9DH' => 'E02001882',
        '9DJ' => 'E02001882',
        '9DL' => 'E02001882',
        '9DN' => 'E02001882',
        '9DP' => 'E02001880',
        '9DQ' => 'E02001880',
        '9DR' => 'E02001880',
        '9DS' => 'E02001882',
        '9DT' => 'E02001880',
        '9DU' => 'E02001880',
        '9DW' => 'E02001882',
        '9DX' => 'E02001880',
        '9DY' => 'E02001880',
        '9DZ' => 'E02001880',
        '9EA' => 'E02001880',
        '9EB' => 'E02001872',
        '9ED' => 'E02001880',
        '9EE' => 'E02001880',
        '9EF' => 'E02001880',
        '9EG' => 'E02001880',
        '9EH' => 'E02001880',
        '9EJ' => 'E02001880',
        '9EL' => 'E02001880',
        '9EN' => 'E02001880',
        '9EP' => 'E02001880',
        '9EQ' => 'E02001880',
        '9ER' => 'E02001880',
        '9ES' => 'E02001880',
        '9ET' => 'E02001880',
        '9EU' => 'E02001880',
        '9EW' => 'E02001880',
        '9EX' => 'E02001880',
        '9EY' => 'E02001880',
        '9EZ' => 'E02001880',
        '9FD' => 'E02001882',
        '9FE' => 'E02001882',
        '9HA' => 'E02001880',
        '9HB' => 'E02001880',
        '9HD' => 'E02001882',
        '9HE' => 'E02001882',
        '9HF' => 'E02001882',
        '9HG' => 'E02001882',
        '9HH' => 'E02001882',
        '9HJ' => 'E02001882',
        '9HL' => 'E02001882',
        '9HN' => 'E02001880',
        '9HP' => 'E02001872',
        '9HQ' => 'E02001882',
        '9HS' => 'E02001880',
        '9HT' => 'E02001880',
        '9HU' => 'E02001880',
        '9HW' => 'E02001880',
        '9HX' => 'E02001880',
        '9HY' => 'E02001880',
        '9JA' => 'E02001880',
        '9JB' => 'E02001880',
        '9JD' => 'E02001880',
        '9JE' => 'E02001880',
        '9JG' => 'E02001880',
        '9JH' => 'E02001871',
        '9JJ' => 'E02001880',
        '9JL' => 'E02001880',
        '9JN' => 'E02001882',
        '9JP' => 'E02001880',
        '9JQ' => 'E02001880',
        '9JR' => 'E02001880',
        '9JS' => 'E02001880',
        '9JT' => 'E02001880',
        '9JU' => 'E02001880',
        '9JW' => 'E02001880',
        '9JX' => 'E02001880',
        '9JY' => 'E02001880',
        '9LA' => 'E02001880',
        '9LB' => 'E02001880',
        '9LG' => 'E02001880',
        '9LH' => 'E02001880',
        '9LJ' => 'E02001880',
        '9LL' => 'E02001880',
        '9LN' => 'E02001880',
        '9LP' => 'E02001880',
        '9LR' => 'E02001880',
        '9LS' => 'E02001880',
        '9LT' => 'E02001880',
        '9LU' => 'E02001880',
        '9LX' => 'E02001880',
        '9LY' => 'E02001880',
        '9LZ' => 'E02001880',
        '9NA' => 'E02001880',
        '9NB' => 'E02001880',
        '9ND' => 'E02001871',
        '9NE' => 'E02001871',
        '9NG' => 'E02001871',
        '9NH' => 'E02001880',
        '9NJ' => 'E02001880',
        '9NL' => 'E02001880',
        '9NN' => 'E02001880',
        '9NP' => 'E02001880',
        '9NQ' => 'E02001880',
        '9NR' => 'E02001880',
        '9NS' => 'E02001880',
        '9NT' => 'E02001880',
        '9NX' => 'E02001880',
        '9NY' => 'E02001880',
        '9NZ' => 'E02001880',
        '9PA' => 'E02001880',
        '9PB' => 'E02001880',
        '9PD' => 'E02001880',
        '9PE' => 'E02001880',
        '9PF' => 'E02001880',
        '9PG' => 'E02001880',
        '9PH' => 'E02001880',
        '9PJ' => 'E02001880',
        '9PL' => 'E02001880',
        '9PN' => 'E02001880',
        '9PP' => 'E02001880',
        '9PR' => 'E02001880',
        '9PS' => 'E02001880',
        '9PT' => 'E02001880',
        '9PU' => 'E02001880',
        '9PW' => 'E02001880',
        '9PX' => 'E02001880',
        '9PY' => 'E02001880',
        '9PZ' => 'E02001872',
        '9QA' => 'E02001880',
        '9QB' => 'E02001880',
        '9QD' => 'E02001880',
        '9QE' => 'E02001880',
        '9QF' => 'E02001872',
        '9QG' => 'E02001880',
        '9QH' => 'E02001872',
        '9QJ' => 'E02001872',
        '9QL' => 'E02001872',
        '9QN' => 'E02001880',
        '9QP' => 'E02001880',
        '9QR' => 'E02001872',
        '9QS' => 'E02001872',
        '9QT' => 'E02001880',
        '9QU' => 'E02001883',
        '9QX' => 'E02001880',
        '9QY' => 'E02001880',
        '9RA' => 'E02001880',
        '9RB' => 'E02001880',
        '9RD' => 'E02001880',
        '9RE' => 'E02001880',
        '9RF' => 'E02001880',
        '9RG' => 'E02001880',
        '9RH' => 'E02001880',
        '9RJ' => 'E02001880',
        '9RL' => 'E02001880',
        '9RN' => 'E02001880',
        '9RP' => 'E02001880',
        '9RR' => 'E02001880',
        '9RS' => 'E02001880',
        '9RT' => 'E02001880',
        '9RU' => 'E02001880',
        '9RX' => 'E02001880',
        '9RY' => 'E02001880',
        '9SA' => 'E02001883',
        '9SB' => 'E02001883',
        '9SD' => 'E02001883',
        '9SE' => 'E02001883',
        '9SF' => 'E02001880',
        '9SG' => 'E02001883',
        '9SH' => 'E02001883',
        '9SJ' => 'E02001883',
        '9SL' => 'E02001883',
        '9SN' => 'E02001883',
        '9SP' => 'E02001883',
        '9SQ' => 'E02001883',
        '9SS' => 'E02001883',
        '9ST' => 'E02001883',
        '9SU' => 'E02001883',
        '9SX' => 'E02001883',
        '9SY' => 'E02001883',
        '9TA' => 'E02001883',
        '9TB' => 'E02001883',
        '9TD' => 'E02001883',
        '9TE' => 'E02001883',
        '9TF' => 'E02001883',
        '9TG' => 'E02001883',
        '9TH' => 'E02001883',
        '9TJ' => 'E02001883',
        '9TL' => 'E02001883',
        '9TN' => 'E02001883',
        '9TP' => 'E02001883',
        '9TR' => 'E02001883',
        '9TS' => 'E02001883',
        '9TT' => 'E02001883',
        '9TU' => 'E02001883',
        '9TX' => 'E02001883',
        '9TY' => 'E02001883',
        '9UD' => 'E02001883',
        '9UE' => 'E02001883',
        '9UF' => 'E02001883',
        '9UG' => 'E02001883',
        '9UH' => 'E02001883',
        '9UJ' => 'E02001883',
        '9UL' => 'E02001883',
        '9UN' => 'E02001883',
        '9UP' => 'E02001883',
        '9UQ' => 'E02001880',
        '9UR' => 'E02001883',
        '9US' => 'E02001883',
        '9UT' => 'E02001883',
        '9UU' => 'E02001883',
        '9UW' => 'E02001883',
        '9UX' => 'E02001883',
        '9WA' => 'E02001872',
        '9WB' => 'E02001883',
        '9WD' => 'E02001872',
        '9WH' => 'E02001872',
        '9WQ' => 'E02001872',
        '9WR' => 'E02001883',
        '9YH' => 'E02001872',
        '9ZD' => 'E02001883',
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