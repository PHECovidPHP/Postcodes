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
final class DE24
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002820',
        '0AB' => 'E02002820',
        '0AD' => 'E02002820',
        '0AE' => 'E02002820',
        '0AF' => 'E02002820',
        '0AG' => 'E02002820',
        '0AH' => 'E02002820',
        '0AJ' => 'E02002820',
        '0AL' => 'E02002820',
        '0AN' => 'E02002820',
        '0AP' => 'E02002820',
        '0AQ' => 'E02002820',
        '0AR' => 'E02002820',
        '0AS' => 'E02002820',
        '0AT' => 'E02002820',
        '0AU' => 'E02002820',
        '0AW' => 'E02002820',
        '0AX' => 'E02002820',
        '0AY' => 'E02002820',
        '0AZ' => 'E02002820',
        '0BA' => 'E02002823',
        '0BB' => 'E02002821',
        '0BD' => 'E02002821',
        '0BE' => 'E02002823',
        '0BG' => 'E02002821',
        '0BH' => 'E02002821',
        '0BJ' => 'E02002821',
        '0BN' => 'E02002823',
        '0BP' => 'E02002823',
        '0BQ' => 'E02002823',
        '0BR' => 'E02002823',
        '0BS' => 'E02002823',
        '0BT' => 'E02002823',
        '0BU' => 'E02002823',
        '0BW' => 'E02002823',
        '0BX' => 'E02002823',
        '0BY' => 'E02002823',
        '0BZ' => 'E02002823',
        '0DA' => 'E02002823',
        '0DB' => 'E02002823',
        '0DD' => 'E02002823',
        '0DE' => 'E02002823',
        '0DF' => 'E02002823',
        '0DG' => 'E02002820',
        '0DH' => 'E02002823',
        '0DJ' => 'E02002823',
        '0DL' => 'E02002823',
        '0DN' => 'E02002823',
        '0DP' => 'E02002823',
        '0DQ' => 'E02002823',
        '0DR' => 'E02002819',
        '0DT' => 'E02002813',
        '0DU' => 'E02002820',
        '0DW' => 'E02002820',
        '0DX' => 'E02002820',
        '0DY' => 'E02002820',
        '0DZ' => 'E02002820',
        '0EA' => 'E02002820',
        '0EB' => 'E02002820',
        '0ED' => 'E02002820',
        '0EE' => 'E02002820',
        '0EF' => 'E02002820',
        '0EG' => 'E02002820',
        '0EH' => 'E02002820',
        '0EJ' => 'E02002820',
        '0EL' => 'E02002820',
        '0EN' => 'E02002820',
        '0EP' => 'E02002820',
        '0EQ' => 'E02002820',
        '0ER' => 'E02002820',
        '0ES' => 'E02002820',
        '0ET' => 'E02002820',
        '0EU' => 'E02002820',
        '0EW' => 'E02002823',
        '0EX' => 'E02002820',
        '0EY' => 'E02002823',
        '0FB' => 'E02002820',
        '0FD' => 'E02002820',
        '0FE' => 'E02002820',
        '0FF' => 'E02002823',
        '0FG' => 'E02002820',
        '0FH' => 'E02002820',
        '0FJ' => 'E02002820',
        '0FL' => 'E02002820',
        '0FN' => 'E02002820',
        '0FP' => 'E02002820',
        '0FQ' => 'E02002820',
        '0FR' => 'E02002823',
        '0FS' => 'E02002820',
        '0FT' => 'E02002820',
        '0FW' => 'E02002820',
        '0FX' => 'E02002820',
        '0FY' => 'E02002820',
        '0FZ' => 'E02002820',
        '0GA' => 'E02002820',
        '0GB' => 'E02002820',
        '0GD' => 'E02002820',
        '0GE' => 'E02002820',
        '0GF' => 'E02002820',
        '0GG' => 'E02002823',
        '0GH' => 'E02002823',
        '0GJ' => 'E02002823',
        '0GL' => 'E02002823',
        '0GN' => 'E02002823',
        '0GP' => 'E02002823',
        '0GQ' => 'E02002823',
        '0GR' => 'E02002823',
        '0GS' => 'E02002823',
        '0GT' => 'E02002823',
        '0GU' => 'E02002823',
        '0GW' => 'E02002823',
        '0GX' => 'E02002823',
        '0GY' => 'E02002823',
        '0GZ' => 'E02002823',
        '0HA' => 'E02002820',
        '0HB' => 'E02002823',
        '0HD' => 'E02002823',
        '0HE' => 'E02002823',
        '0HF' => 'E02002823',
        '0HG' => 'E02002823',
        '0HH' => 'E02002823',
        '0HJ' => 'E02002823',
        '0HL' => 'E02002823',
        '0HN' => 'E02002823',
        '0HP' => 'E02002823',
        '0HQ' => 'E02002823',
        '0HR' => 'E02002823',
        '0HS' => 'E02002823',
        '0HT' => 'E02002823',
        '0HU' => 'E02002823',
        '0HW' => 'E02002823',
        '0HX' => 'E02002823',
        '0HY' => 'E02002823',
        '0HZ' => 'E02002823',
        '0JA' => 'E02002823',
        '0JB' => 'E02002823',
        '0JD' => 'E02002823',
        '0JE' => 'E02002823',
        '0JF' => 'E02002820',
        '0JG' => 'E02002820',
        '0JH' => 'E02002820',
        '0JJ' => 'E02002823',
        '0JL' => 'E02002823',
        '0JN' => 'E02002823',
        '0JP' => 'E02002819',
        '0JQ' => 'E02002823',
        '0JR' => 'E02002819',
        '0JS' => 'E02002823',
        '0JT' => 'E02002819',
        '0JU' => 'E02002819',
        '0JW' => 'E02002823',
        '0JX' => 'E02002823',
        '0JY' => 'E02002823',
        '0JZ' => 'E02002823',
        '0LA' => 'E02002823',
        '0LB' => 'E02002823',
        '0LD' => 'E02002823',
        '0LE' => 'E02002823',
        '0LF' => 'E02002823',
        '0LG' => 'E02002823',
        '0LH' => 'E02002823',
        '0LJ' => 'E02002823',
        '0LN' => 'E02002819',
        '0LP' => 'E02002819',
        '0LQ' => 'E02002823',
        '0LR' => 'E02002823',
        '0LS' => 'E02002823',
        '0LT' => 'E02002823',
        '0LU' => 'E02002823',
        '0LW' => 'E02002823',
        '0LX' => 'E02002823',
        '0LY' => 'E02002823',
        '0LZ' => 'E02002823',
        '0NA' => 'E02002823',
        '0NB' => 'E02002823',
        '0ND' => 'E02002823',
        '0NE' => 'E02002823',
        '0NF' => 'E02002823',
        '0NG' => 'E02002823',
        '0NH' => 'E02002823',
        '0NJ' => 'E02002823',
        '0NL' => 'E02002823',
        '0NN' => 'E02002823',
        '0NP' => 'E02002823',
        '0NQ' => 'E02002823',
        '0NR' => 'E02002823',
        '0NS' => 'E02002823',
        '0NX' => 'E02002820',
        '0NY' => 'E02002820',
        '0NZ' => 'E02002820',
        '0PA' => 'E02002819',
        '0PB' => 'E02002819',
        '0PD' => 'E02002819',
        '0PE' => 'E02002819',
        '0PF' => 'E02002819',
        '0PG' => 'E02002820',
        '0PH' => 'E02002819',
        '0PJ' => 'E02002820',
        '0PL' => 'E02002819',
        '0PN' => 'E02002819',
        '0PP' => 'E02002819',
        '0PQ' => 'E02002819',
        '0PR' => 'E02002819',
        '0PS' => 'E02002819',
        '0PT' => 'E02002819',
        '0PU' => 'E02002819',
        '0PW' => 'E02002819',
        '0PX' => 'E02002819',
        '0PY' => 'E02002819',
        '0PZ' => 'E02002819',
        '0QA' => 'E02002819',
        '0QB' => 'E02002819',
        '0QD' => 'E02002819',
        '0QE' => 'E02002819',
        '0QF' => 'E02002819',
        '0QG' => 'E02002819',
        '0QH' => 'E02002819',
        '0QJ' => 'E02002819',
        '0QL' => 'E02002819',
        '0QN' => 'E02002819',
        '0QP' => 'E02002819',
        '0QQ' => 'E02002819',
        '0QR' => 'E02002819',
        '0QS' => 'E02002819',
        '0QT' => 'E02002819',
        '0QU' => 'E02002819',
        '0QW' => 'E02002819',
        '0QX' => 'E02002819',
        '0QY' => 'E02002819',
        '0QZ' => 'E02002819',
        '0RA' => 'E02002819',
        '0RB' => 'E02002819',
        '0RD' => 'E02002819',
        '0RE' => 'E02002819',
        '0RF' => 'E02002819',
        '0RG' => 'E02002819',
        '0RH' => 'E02002819',
        '0RJ' => 'E02002819',
        '0RL' => 'E02002819',
        '0RN' => 'E02002819',
        '0RP' => 'E02002819',
        '0RQ' => 'E02002819',
        '0RR' => 'E02002819',
        '0RS' => 'E02002819',
        '0RT' => 'E02002819',
        '0RU' => 'E02002819',
        '0RW' => 'E02002819',
        '0RX' => 'E02002819',
        '0RY' => 'E02002819',
        '0RZ' => 'E02002819',
        '0SA' => 'E02002819',
        '0SB' => 'E02002819',
        '0SD' => 'E02002819',
        '0SE' => 'E02002823',
        '0SF' => 'E02002819',
        '0SG' => 'E02002819',
        '0SH' => 'E02002819',
        '0SJ' => 'E02002819',
        '0SL' => 'E02002819',
        '0SN' => 'E02002819',
        '0SP' => 'E02002819',
        '0SQ' => 'E02002819',
        '0SR' => 'E02002819',
        '0SS' => 'E02002819',
        '0ST' => 'E02002819',
        '0SW' => 'E02002819',
        '0SX' => 'E02002819',
        '0SY' => 'E02002819',
        '0TA' => 'E02002823',
        '0TB' => 'E02002823',
        '0TD' => 'E02002823',
        '0TE' => 'E02002823',
        '0TF' => 'E02002823',
        '0TG' => 'E02002819',
        '0TH' => 'E02002819',
        '0TJ' => 'E02002819',
        '0TL' => 'E02002819',
        '0TN' => 'E02002819',
        '0TP' => 'E02002819',
        '0TQ' => 'E02002819',
        '0TR' => 'E02002819',
        '0TS' => 'E02002819',
        '0TW' => 'E02002819',
        '0TZ' => 'E02002823',
        '0UA' => 'E02002823',
        '0UB' => 'E02002823',
        '0UD' => 'E02002823',
        '0UE' => 'E02002823',
        '0UF' => 'E02002823',
        '0UG' => 'E02002823',
        '0UH' => 'E02002823',
        '0UJ' => 'E02002823',
        '0UL' => 'E02002823',
        '0UN' => 'E02002823',
        '0UP' => 'E02002823',
        '0UQ' => 'E02002823',
        '0UR' => 'E02002823',
        '0US' => 'E02002823',
        '0UT' => 'E02002823',
        '0UU' => 'E02002823',
        '0UW' => 'E02002823',
        '0UX' => 'E02002823',
        '0UY' => 'E02002823',
        '0UZ' => 'E02002823',
        '0WZ' => 'E02002813',
        '0XD' => 'E02002823',
        '0XE' => 'E02002823',
        '0XF' => 'E02002823',
        '0XZ' => 'E02002819',
        '0YA' => 'E02002819',
        '0YB' => 'E02002819',
        '0YD' => 'E02002819',
        '0YE' => 'E02002819',
        '0YS' => 'E02002813',
        '0YZ' => 'E02002819',
        '0ZA' => 'E02002813',
        '0ZD' => 'E02002813',
        '0ZJ' => 'E02002813',
        '0ZL' => 'E02002823',
        '0ZP' => 'E02002819',
        '0ZQ' => 'E02002819',
        '0ZR' => 'E02002813',
        '0ZS' => 'E02002813',
        '0ZT' => 'E02002819',
        '0ZU' => 'E02002813',
        '0ZW' => 'E02002813',
        '0ZX' => 'E02002813',
        '0ZY' => 'E02002813',
        '0ZZ' => 'E02002813',
        '1AA' => 'E02002819',
        '1AB' => 'E02002819',
        '1AD' => 'E02002819',
        '1AE' => 'E02002819',
        '1AF' => 'E02002819',
        '1AG' => 'E02002819',
        '1AH' => 'E02002819',
        '1AJ' => 'E02002819',
        '1AL' => 'E02002819',
        '1AN' => 'E02002819',
        '1AP' => 'E02002819',
        '1AQ' => 'E02002819',
        '1AR' => 'E02002819',
        '1AS' => 'E02002819',
        '1AT' => 'E02002819',
        '3AA' => 'E02004120',
        '3AB' => 'E02004120',
        '3AD' => 'E02004120',
        '3AE' => 'E02004120',
        '3AF' => 'E02004120',
        '3AG' => 'E02004120',
        '3AH' => 'E02004120',
        '3AJ' => 'E02004120',
        '3AL' => 'E02004120',
        '3AN' => 'E02004120',
        '3AP' => 'E02004120',
        '3AQ' => 'E02004120',
        '3AR' => 'E02002824',
        '3AS' => 'E02004120',
        '3AT' => 'E02004120',
        '3AU' => 'E02004120',
        '3AW' => 'E02004120',
        '3AX' => 'E02004120',
        '3AY' => 'E02004120',
        '3AZ' => 'E02004120',
        '3BA' => 'E02004120',
        '3BB' => 'E02004120',
        '3BD' => 'E02004120',
        '3BE' => 'E02004120',
        '3BG' => 'E02004120',
        '3BH' => 'E02004120',
        '3BJ' => 'E02004120',
        '3BL' => 'E02004120',
        '3BN' => 'E02004120',
        '3BP' => 'E02004120',
        '3BQ' => 'E02004120',
        '3BR' => 'E02004120',
        '3BS' => 'E02004120',
        '3BT' => 'E02004120',
        '3BU' => 'E02004120',
        '3BW' => 'E02004120',
        '3BX' => 'E02004120',
        '3BY' => 'E02004120',
        '3BZ' => 'E02002824',
        '3DA' => 'E02004120',
        '3DB' => 'E02002824',
        '3DD' => 'E02002824',
        '3DE' => 'E02002824',
        '3DF' => 'E02002824',
        '3DG' => 'E02002824',
        '3DH' => 'E02002824',
        '3DJ' => 'E02004120',
        '3DL' => 'E02004120',
        '3DN' => 'E02004120',
        '3DP' => 'E02002824',
        '3DQ' => 'E02002824',
        '3DR' => 'E02002824',
        '3DS' => 'E02002824',
        '3DT' => 'E02002824',
        '3DU' => 'E02002824',
        '3DW' => 'E02004120',
        '3DX' => 'E02002824',
        '3DY' => 'E02002824',
        '3DZ' => 'E02002824',
        '3EA' => 'E02002824',
        '3EB' => 'E02002824',
        '3ED' => 'E02002824',
        '3EE' => 'E02002824',
        '3EF' => 'E02002824',
        '3EG' => 'E02004120',
        '3EH' => 'E02004120',
        '3EJ' => 'E02004120',
        '3EL' => 'E02004120',
        '3EN' => 'E02004120',
        '3EP' => 'E02002824',
        '3EQ' => 'E02004120',
        '3ER' => 'E02004120',
        '3ES' => 'E02004120',
        '3ET' => 'E02004120',
        '3EU' => 'E02004120',
        '3EW' => 'E02002824',
        '3EX' => 'E02004120',
        '3EY' => 'E02004120',
        '3EZ' => 'E02004120',
        '3FB' => 'E02004120',
        '3FD' => 'E02004120',
        '3FE' => 'E02004120',
        '3FF' => 'E02004120',
        '3FG' => 'E02004120',
        '3FH' => 'E02004120',
        '3FJ' => 'E02004120',
        '3FL' => 'E02004120',
        '3FN' => 'E02004120',
        '3FP' => 'E02004120',
        '3FQ' => 'E02004120',
        '3FR' => 'E02004120',
        '3FS' => 'E02004120',
        '3FT' => 'E02004120',
        '3FU' => 'E02004120',
        '3FW' => 'E02004120',
        '3FX' => 'E02004120',
        '3FY' => 'E02004120',
        '3FZ' => 'E02004120',
        '3GA' => 'E02004120',
        '3GB' => 'E02004120',
        '3GD' => 'E02004120',
        '3GE' => 'E02004120',
        '3GF' => 'E02004120',
        '3GG' => 'E02004120',
        '3GH' => 'E02002824',
        '3GJ' => 'E02002824',
        '3GL' => 'E02002824',
        '3GN' => 'E02002824',
        '3GP' => 'E02002824',
        '3GQ' => 'E02002824',
        '3GR' => 'E02002824',
        '3GS' => 'E02002824',
        '3HA' => 'E02004120',
        '3HB' => 'E02004120',
        '3HD' => 'E02004120',
        '3HE' => 'E02004120',
        '3HF' => 'E02002824',
        '3HG' => 'E02002824',
        '3HH' => 'E02002824',
        '3HJ' => 'E02002824',
        '3HL' => 'E02002824',
        '3HN' => 'E02002824',
        '3HP' => 'E02002824',
        '3HQ' => 'E02002824',
        '3HR' => 'E02002824',
        '3HS' => 'E02004120',
        '3HT' => 'E02004120',
        '3HU' => 'E02004120',
        '3HW' => 'E02002824',
        '3HX' => 'E02004120',
        '3JA' => 'E02002824',
        '3JB' => 'E02004120',
        '3JD' => 'E02004120',
        '3JE' => 'E02004120',
        '3JF' => 'E02004120',
        '3JG' => 'E02004120',
        '3JH' => 'E02004120',
        '3JJ' => 'E02004120',
        '3JL' => 'E02004120',
        '3JN' => 'E02004120',
        '3JP' => 'E02002824',
        '3JQ' => 'E02004120',
        '3JR' => 'E02002824',
        '3JS' => 'E02004120',
        '3JT' => 'E02002824',
        '3JU' => 'E02002824',
        '3JW' => 'E02004120',
        '3JX' => 'E02002824',
        '3JY' => 'E02002824',
        '3JZ' => 'E02002824',
        '3LA' => 'E02002824',
        '3LB' => 'E02002824',
        '3LD' => 'E02002824',
        '3LE' => 'E02004120',
        '3LF' => 'E02004120',
        '3LG' => 'E02004120',
        '3LH' => 'E02004120',
        '3LJ' => 'E02004120',
        '3LL' => 'E02002824',
        '3LN' => 'E02004120',
        '3LP' => 'E02002824',
        '3LQ' => 'E02004120',
        '3LR' => 'E02004120',
        '3LS' => 'E02004120',
        '3LT' => 'E02004120',
        '3LU' => 'E02004120',
        '3LW' => 'E02002824',
        '3LY' => 'E02004120',
        '3LZ' => 'E02004120',
        '3NA' => 'E02004120',
        '3NB' => 'E02002816',
        '3ND' => 'E02002824',
        '3NE' => 'E02004120',
        '3ZY' => 'E02002813',
        '3ZZ' => 'E02002813',
        '5AA' => 'E02004121',
        '5AB' => 'E02004121',
        '5AD' => 'E02004121',
        '5AE' => 'E02004121',
        '5AF' => 'E02004121',
        '5AG' => 'E02004121',
        '5AH' => 'E02004121',
        '5AJ' => 'E02004121',
        '5AL' => 'E02004121',
        '5AN' => 'E02004121',
        '5AP' => 'E02004121',
        '5AQ' => 'E02004121',
        '5AR' => 'E02004121',
        '5AS' => 'E02004121',
        '5AT' => 'E02004121',
        '5AU' => 'E02004121',
        '5AW' => 'E02004121',
        '5AX' => 'E02004121',
        '5AY' => 'E02004121',
        '5AZ' => 'E02004121',
        '5BA' => 'E02004121',
        '5BB' => 'E02004121',
        '5BD' => 'E02004121',
        '5BE' => 'E02004121',
        '5BG' => 'E02004121',
        '5BH' => 'E02004121',
        '5BJ' => 'E02004121',
        '5BL' => 'E02004121',
        '5BN' => 'E02004121',
        '5BP' => 'E02004121',
        '5BQ' => 'E02004121',
        '5BR' => 'E02004121',
        '5BS' => 'E02004121',
        '5BT' => 'E02004121',
        '5BU' => 'E02004121',
        '5BW' => 'E02004121',
        '5BX' => 'E02004121',
        '5BY' => 'E02004121',
        '5BZ' => 'E02004121',
        '5DA' => 'E02004121',
        '5DB' => 'E02004121',
        '5DD' => 'E02004121',
        '5DF' => 'E02004121',
        '5DG' => 'E02004121',
        '5XR' => 'E02004121',
        '5YB' => 'E02002813',
        '5ZR' => 'E02002813',
        '5ZX' => 'E02002813',
        '5ZY' => 'E02002813',
        '5ZZ' => 'E02002813',
        '8AA' => 'E02002819',
        '8AB' => 'E02002821',
        '8AD' => 'E02002819',
        '8AE' => 'E02002821',
        '8AF' => 'E02002821',
        '8AG' => 'E02002821',
        '8AH' => 'E02002821',
        '8AJ' => 'E02002819',
        '8AL' => 'E02002821',
        '8AN' => 'E02002819',
        '8AP' => 'E02002813',
        '8AQ' => 'E02002819',
        '8AR' => 'E02002821',
        '8AS' => 'E02002821',
        '8AT' => 'E02002821',
        '8AU' => 'E02002821',
        '8AW' => 'E02002821',
        '8AX' => 'E02002821',
        '8AY' => 'E02002821',
        '8AZ' => 'E02002821',
        '8BA' => 'E02002821',
        '8BB' => 'E02002821',
        '8BD' => 'E02002821',
        '8BE' => 'E02002821',
        '8BF' => 'E02002821',
        '8BG' => 'E02002821',
        '8BH' => 'E02002821',
        '8BJ' => 'E02002813',
        '8BL' => 'E02002821',
        '8BN' => 'E02002821',
        '8BP' => 'E02002821',
        '8BQ' => 'E02002819',
        '8BS' => 'E02002819',
        '8BT' => 'E02002821',
        '8BU' => 'E02002821',
        '8BW' => 'E02002819',
        '8BX' => 'E02002819',
        '8BY' => 'E02002819',
        '8BZ' => 'E02002819',
        '8DA' => 'E02002821',
        '8DB' => 'E02002821',
        '8DD' => 'E02002821',
        '8DE' => 'E02002821',
        '8DF' => 'E02002821',
        '8DG' => 'E02002821',
        '8DH' => 'E02002821',
        '8DJ' => 'E02002821',
        '8DL' => 'E02002821',
        '8DN' => 'E02002821',
        '8DP' => 'E02002821',
        '8DQ' => 'E02002821',
        '8DR' => 'E02002821',
        '8DS' => 'E02002821',
        '8DT' => 'E02002821',
        '8DU' => 'E02002821',
        '8DW' => 'E02002821',
        '8DX' => 'E02002824',
        '8DY' => 'E02002821',
        '8DZ' => 'E02002819',
        '8EA' => 'E02002813',
        '8EB' => 'E02002824',
        '8ED' => 'E02002821',
        '8EE' => 'E02002821',
        '8EF' => 'E02002821',
        '8EG' => 'E02002821',
        '8EH' => 'E02002819',
        '8EJ' => 'E02002824',
        '8EL' => 'E02002824',
        '8EN' => 'E02002824',
        '8EP' => 'E02002821',
        '8EQ' => 'E02002821',
        '8ER' => 'E02002824',
        '8ES' => 'E02002824',
        '8ET' => 'E02002824',
        '8EU' => 'E02002824',
        '8EW' => 'E02002824',
        '8EX' => 'E02002824',
        '8EY' => 'E02002824',
        '8EZ' => 'E02002821',
        '8FB' => 'E02002821',
        '8FD' => 'E02002820',
        '8FE' => 'E02002819',
        '8FF' => 'E02002819',
        '8FG' => 'E02002821',
        '8FH' => 'E02002821',
        '8FJ' => 'E02002821',
        '8FL' => 'E02002821',
        '8FN' => 'E02002821',
        '8FP' => 'E02002821',
        '8FQ' => 'E02002821',
        '8FR' => 'E02002821',
        '8FS' => 'E02002821',
        '8FT' => 'E02002821',
        '8FU' => 'E02002819',
        '8FW' => 'E02002821',
        '8FX' => 'E02002821',
        '8FY' => 'E02002821',
        '8FZ' => 'E02002821',
        '8GA' => 'E02002821',
        '8GB' => 'E02002821',
        '8GD' => 'E02002821',
        '8GE' => 'E02002821',
        '8GF' => 'E02002821',
        '8GG' => 'E02002821',
        '8GH' => 'E02002821',
        '8GJ' => 'E02002821',
        '8GL' => 'E02002821',
        '8GN' => 'E02002821',
        '8GP' => 'E02002821',
        '8GQ' => 'E02002821',
        '8GR' => 'E02002824',
        '8GS' => 'E02002821',
        '8GT' => 'E02002821',
        '8GU' => 'E02002821',
        '8GW' => 'E02002821',
        '8GX' => 'E02002819',
        '8GY' => 'E02002819',
        '8GZ' => 'E02002821',
        '8HA' => 'E02002819',
        '8HB' => 'E02002819',
        '8HD' => 'E02002819',
        '8HE' => 'E02002821',
        '8HF' => 'E02002821',
        '8HG' => 'E02002819',
        '8HH' => 'E02002819',
        '8HJ' => 'E02002821',
        '8HL' => 'E02002821',
        '8HN' => 'E02002821',
        '8HP' => 'E02002819',
        '8HQ' => 'E02002821',
        '8HR' => 'E02002819',
        '8HS' => 'E02002819',
        '8HT' => 'E02002819',
        '8HU' => 'E02002821',
        '8HW' => 'E02002819',
        '8HX' => 'E02002819',
        '8HY' => 'E02002819',
        '8HZ' => 'E02002819',
        '8JA' => 'E02002821',
        '8JB' => 'E02002819',
        '8JD' => 'E02002821',
        '8JE' => 'E02002819',
        '8JF' => 'E02002819',
        '8JG' => 'E02002819',
        '8JH' => 'E02002819',
        '8JJ' => 'E02002821',
        '8JL' => 'E02002821',
        '8JN' => 'E02002819',
        '8JP' => 'E02002821',
        '8JQ' => 'E02002821',
        '8JR' => 'E02002821',
        '8JS' => 'E02002821',
        '8JT' => 'E02002821',
        '8JU' => 'E02002821',
        '8JW' => 'E02002821',
        '8JX' => 'E02002821',
        '8JY' => 'E02002819',
        '8JZ' => 'E02002821',
        '8LA' => 'E02002821',
        '8LB' => 'E02002821',
        '8LD' => 'E02002821',
        '8LE' => 'E02002821',
        '8LF' => 'E02002821',
        '8LG' => 'E02002821',
        '8LH' => 'E02002821',
        '8LJ' => 'E02002821',
        '8LL' => 'E02002821',
        '8LN' => 'E02002821',
        '8LP' => 'E02002821',
        '8LQ' => 'E02002821',
        '8LR' => 'E02002821',
        '8LS' => 'E02002821',
        '8LT' => 'E02002821',
        '8LU' => 'E02002821',
        '8LW' => 'E02002821',
        '8LX' => 'E02002821',
        '8LY' => 'E02002819',
        '8LZ' => 'E02002819',
        '8NA' => 'E02002820',
        '8NB' => 'E02002819',
        '8ND' => 'E02002819',
        '8NE' => 'E02002821',
        '8NF' => 'E02002821',
        '8NG' => 'E02002821',
        '8NH' => 'E02002820',
        '8NJ' => 'E02002820',
        '8NL' => 'E02002821',
        '8NN' => 'E02002821',
        '8NP' => 'E02002820',
        '8NQ' => 'E02002820',
        '8NR' => 'E02002820',
        '8NS' => 'E02002821',
        '8NT' => 'E02002821',
        '8NU' => 'E02002820',
        '8NW' => 'E02002819',
        '8NX' => 'E02002820',
        '8NY' => 'E02002820',
        '8NZ' => 'E02002820',
        '8PA' => 'E02002820',
        '8PB' => 'E02002820',
        '8PD' => 'E02002820',
        '8PE' => 'E02002820',
        '8PF' => 'E02002820',
        '8PG' => 'E02002820',
        '8PH' => 'E02002820',
        '8PJ' => 'E02002820',
        '8PL' => 'E02002820',
        '8PN' => 'E02002820',
        '8PP' => 'E02002820',
        '8PQ' => 'E02002820',
        '8PR' => 'E02002820',
        '8PS' => 'E02002820',
        '8PT' => 'E02002820',
        '8PU' => 'E02002819',
        '8PW' => 'E02002820',
        '8PX' => 'E02002820',
        '8PY' => 'E02002820',
        '8PZ' => 'E02002820',
        '8QA' => 'E02002820',
        '8QB' => 'E02002821',
        '8QD' => 'E02002820',
        '8QE' => 'E02002820',
        '8QF' => 'E02002820',
        '8QG' => 'E02002820',
        '8QH' => 'E02002820',
        '8QJ' => 'E02002820',
        '8QL' => 'E02002820',
        '8QN' => 'E02002820',
        '8QP' => 'E02002820',
        '8QQ' => 'E02002820',
        '8QR' => 'E02002819',
        '8QS' => 'E02002820',
        '8QT' => 'E02002820',
        '8QU' => 'E02002820',
        '8QW' => 'E02002820',
        '8QX' => 'E02002820',
        '8QY' => 'E02002820',
        '8QZ' => 'E02002820',
        '8RA' => 'E02002820',
        '8RB' => 'E02002820',
        '8RD' => 'E02002820',
        '8RE' => 'E02002819',
        '8RF' => 'E02002819',
        '8RG' => 'E02002820',
        '8RH' => 'E02002820',
        '8RJ' => 'E02002820',
        '8RL' => 'E02002820',
        '8RN' => 'E02002820',
        '8RP' => 'E02002820',
        '8RQ' => 'E02002820',
        '8RR' => 'E02002820',
        '8RS' => 'E02002820',
        '8RT' => 'E02002820',
        '8RU' => 'E02002820',
        '8RW' => 'E02002820',
        '8RX' => 'E02002820',
        '8RY' => 'E02002820',
        '8RZ' => 'E02002820',
        '8SA' => 'E02002820',
        '8SB' => 'E02002820',
        '8SD' => 'E02002820',
        '8SE' => 'E02002820',
        '8SF' => 'E02002820',
        '8SG' => 'E02002820',
        '8SH' => 'E02002820',
        '8SJ' => 'E02002820',
        '8SL' => 'E02002820',
        '8SN' => 'E02002820',
        '8SP' => 'E02002819',
        '8SQ' => 'E02002819',
        '8SR' => 'E02002821',
        '8SS' => 'E02002820',
        '8ST' => 'E02002819',
        '8SU' => 'E02002820',
        '8SW' => 'E02002819',
        '8SX' => 'E02002819',
        '8SY' => 'E02002820',
        '8SZ' => 'E02002820',
        '8TA' => 'E02002820',
        '8TB' => 'E02002820',
        '8TD' => 'E02002820',
        '8TE' => 'E02002820',
        '8TF' => 'E02002820',
        '8TG' => 'E02002820',
        '8TH' => 'E02002819',
        '8TJ' => 'E02002819',
        '8TL' => 'E02002819',
        '8TN' => 'E02002820',
        '8TP' => 'E02002820',
        '8TQ' => 'E02002820',
        '8TR' => 'E02002820',
        '8TS' => 'E02002820',
        '8TT' => 'E02002820',
        '8TU' => 'E02002820',
        '8TW' => 'E02002820',
        '8TX' => 'E02002819',
        '8TY' => 'E02002820',
        '8TZ' => 'E02002820',
        '8UA' => 'E02002820',
        '8UB' => 'E02002820',
        '8UD' => 'E02002820',
        '8UE' => 'E02002820',
        '8UF' => 'E02002820',
        '8UG' => 'E02002819',
        '8UH' => 'E02002820',
        '8UJ' => 'E02002821',
        '8UL' => 'E02002819',
        '8UN' => 'E02002819',
        '8UP' => 'E02002819',
        '8UQ' => 'E02002819',
        '8UR' => 'E02002819',
        '8US' => 'E02002819',
        '8UT' => 'E02002819',
        '8UU' => 'E02002819',
        '8UW' => 'E02002819',
        '8UX' => 'E02002819',
        '8UY' => 'E02002819',
        '8UZ' => 'E02002819',
        '8WA' => 'E02002819',
        '8WB' => 'E02002819',
        '8WD' => 'E02002819',
        '8WE' => 'E02002819',
        '8WF' => 'E02002819',
        '8WG' => 'E02002819',
        '8WH' => 'E02002819',
        '8WJ' => 'E02002819',
        '8WL' => 'E02002819',
        '8WN' => 'E02002819',
        '8WP' => 'E02002819',
        '8WQ' => 'E02002819',
        '8WR' => 'E02002819',
        '8WS' => 'E02002819',
        '8WT' => 'E02002819',
        '8WU' => 'E02002819',
        '8WW' => 'E02002819',
        '8WX' => 'E02002819',
        '8WY' => 'E02002819',
        '8WZ' => 'E02002819',
        '8XB' => 'E02002821',
        '8XD' => 'E02002819',
        '8XE' => 'E02002821',
        '8XF' => 'E02002821',
        '8XG' => 'E02002821',
        '8XH' => 'E02002821',
        '8XJ' => 'E02002821',
        '8XL' => 'E02002819',
        '8XN' => 'E02002819',
        '8XP' => 'E02002813',
        '8XQ' => 'E02002821',
        '8XR' => 'E02002819',
        '8XS' => 'E02002819',
        '8XT' => 'E02002813',
        '8XU' => 'E02002813',
        '8XW' => 'E02002821',
        '8XX' => 'E02002813',
        '8XY' => 'E02002813',
        '8XZ' => 'E02002820',
        '8YA' => 'E02002821',
        '8YB' => 'E02002813',
        '8YD' => 'E02002813',
        '8YE' => 'E02002820',
        '8YF' => 'E02002820',
        '8YG' => 'E02002813',
        '8YH' => 'E02002819',
        '8YL' => 'E02002819',
        '8YN' => 'E02002821',
        '8YQ' => 'E02002813',
        '8YR' => 'E02002821',
        '8YS' => 'E02002819',
        '8ZA' => 'E02002821',
        '8ZD' => 'E02002813',
        '8ZE' => 'E02002813',
        '8ZF' => 'E02002824',
        '8ZG' => 'E02002813',
        '8ZH' => 'E02002813',
        '8ZJ' => 'E02002821',
        '8ZL' => 'E02002813',
        '8ZP' => 'E02002821',
        '8ZQ' => 'E02002813',
        '8ZR' => 'E02002813',
        '8ZS' => 'E02002819',
        '8ZT' => 'E02002813',
        '8ZU' => 'E02002813',
        '8ZW' => 'E02002813',
        '8ZX' => 'E02002821',
        '8ZY' => 'E02002821',
        '8ZZ' => 'E02002813',
        '9AA' => 'E02002821',
        '9AB' => 'E02002821',
        '9AD' => 'E02002821',
        '9AE' => 'E02002821',
        '9AF' => 'E02002821',
        '9AG' => 'E02002821',
        '9AH' => 'E02002821',
        '9AJ' => 'E02002821',
        '9AL' => 'E02002821',
        '9AN' => 'E02002821',
        '9AP' => 'E02002821',
        '9AQ' => 'E02002821',
        '9AR' => 'E02002821',
        '9AS' => 'E02002821',
        '9AT' => 'E02002821',
        '9AU' => 'E02002821',
        '9AW' => 'E02002821',
        '9AX' => 'E02002821',
        '9AY' => 'E02002821',
        '9AZ' => 'E02002821',
        '9BA' => 'E02002821',
        '9BB' => 'E02002821',
        '9BD' => 'E02002824',
        '9BE' => 'E02002821',
        '9BF' => 'E02002821',
        '9BG' => 'E02002821',
        '9BH' => 'E02002821',
        '9BJ' => 'E02002821',
        '9BL' => 'E02002821',
        '9BN' => 'E02002821',
        '9BP' => 'E02002821',
        '9BQ' => 'E02002821',
        '9BR' => 'E02002821',
        '9BS' => 'E02002821',
        '9BT' => 'E02002821',
        '9BU' => 'E02002821',
        '9BW' => 'E02002821',
        '9BX' => 'E02002821',
        '9BY' => 'E02002821',
        '9BZ' => 'E02002821',
        '9DA' => 'E02002821',
        '9DB' => 'E02002821',
        '9DD' => 'E02002821',
        '9DE' => 'E02002821',
        '9DF' => 'E02002821',
        '9DG' => 'E02002821',
        '9DH' => 'E02002821',
        '9DJ' => 'E02002821',
        '9DL' => 'E02002821',
        '9DN' => 'E02002825',
        '9DP' => 'E02002821',
        '9DQ' => 'E02002821',
        '9DR' => 'E02002821',
        '9DS' => 'E02002821',
        '9DT' => 'E02002825',
        '9DU' => 'E02002825',
        '9DW' => 'E02002825',
        '9DX' => 'E02002825',
        '9DY' => 'E02002825',
        '9DZ' => 'E02002825',
        '9EA' => 'E02002825',
        '9EB' => 'E02002825',
        '9ED' => 'E02002825',
        '9EE' => 'E02002825',
        '9EF' => 'E02002825',
        '9EG' => 'E02002825',
        '9EH' => 'E02002825',
        '9EJ' => 'E02002825',
        '9EL' => 'E02002825',
        '9EN' => 'E02002825',
        '9EP' => 'E02002825',
        '9EQ' => 'E02002825',
        '9ER' => 'E02002825',
        '9ES' => 'E02002825',
        '9ET' => 'E02002825',
        '9EU' => 'E02002825',
        '9EW' => 'E02002825',
        '9EX' => 'E02002825',
        '9EY' => 'E02002825',
        '9EZ' => 'E02002825',
        '9FB' => 'E02002825',
        '9FD' => 'E02002825',
        '9FE' => 'E02002825',
        '9FF' => 'E02002825',
        '9FG' => 'E02002825',
        '9FH' => 'E02002825',
        '9FJ' => 'E02002825',
        '9FL' => 'E02002825',
        '9FN' => 'E02002825',
        '9FP' => 'E02002825',
        '9FQ' => 'E02002825',
        '9FR' => 'E02002825',
        '9FS' => 'E02002825',
        '9FT' => 'E02002823',
        '9FU' => 'E02002824',
        '9FW' => 'E02002823',
        '9FX' => 'E02002823',
        '9FY' => 'E02002823',
        '9FZ' => 'E02002823',
        '9GA' => 'E02002823',
        '9GB' => 'E02002821',
        '9GD' => 'E02002825',
        '9GE' => 'E02002824',
        '9GF' => 'E02002824',
        '9GG' => 'E02002824',
        '9GH' => 'E02002824',
        '9GJ' => 'E02002824',
        '9GL' => 'E02002824',
        '9GN' => 'E02002824',
        '9GP' => 'E02002824',
        '9GQ' => 'E02002824',
        '9GR' => 'E02002824',
        '9GS' => 'E02002824',
        '9GT' => 'E02002824',
        '9GU' => 'E02002824',
        '9GW' => 'E02002824',
        '9GX' => 'E02002824',
        '9GY' => 'E02002824',
        '9GZ' => 'E02002824',
        '9HA' => 'E02002824',
        '9HB' => 'E02002824',
        '9HD' => 'E02002824',
        '9HE' => 'E02002824',
        '9HF' => 'E02002824',
        '9HG' => 'E02002824',
        '9HH' => 'E02002824',
        '9HJ' => 'E02002825',
        '9HL' => 'E02002824',
        '9HN' => 'E02002824',
        '9HP' => 'E02002824',
        '9HQ' => 'E02002824',
        '9HR' => 'E02002824',
        '9HS' => 'E02002824',
        '9HT' => 'E02002824',
        '9HU' => 'E02002824',
        '9HW' => 'E02002824',
        '9HX' => 'E02002821',
        '9HY' => 'E02002821',
        '9HZ' => 'E02002824',
        '9JA' => 'E02002825',
        '9JB' => 'E02002825',
        '9JD' => 'E02002825',
        '9JE' => 'E02002825',
        '9JF' => 'E02002825',
        '9JG' => 'E02002821',
        '9JH' => 'E02002821',
        '9JJ' => 'E02002821',
        '9JL' => 'E02002825',
        '9JN' => 'E02002825',
        '9JP' => 'E02002825',
        '9JQ' => 'E02002825',
        '9JR' => 'E02002825',
        '9JS' => 'E02002825',
        '9JT' => 'E02002825',
        '9JU' => 'E02002824',
        '9JW' => 'E02002821',
        '9JX' => 'E02002821',
        '9JY' => 'E02002824',
        '9JZ' => 'E02002825',
        '9LA' => 'E02002824',
        '9LB' => 'E02002824',
        '9LD' => 'E02002824',
        '9LE' => 'E02002824',
        '9LF' => 'E02002824',
        '9LG' => 'E02002824',
        '9LH' => 'E02002824',
        '9LJ' => 'E02002824',
        '9LL' => 'E02002824',
        '9LN' => 'E02002824',
        '9LP' => 'E02002824',
        '9LQ' => 'E02002824',
        '9LR' => 'E02002824',
        '9LS' => 'E02002824',
        '9LT' => 'E02002824',
        '9LU' => 'E02002824',
        '9LW' => 'E02002824',
        '9LX' => 'E02002824',
        '9LY' => 'E02002824',
        '9LZ' => 'E02002824',
        '9NA' => 'E02002824',
        '9NB' => 'E02002824',
        '9ND' => 'E02002824',
        '9NE' => 'E02002824',
        '9NF' => 'E02002824',
        '9NG' => 'E02002824',
        '9NH' => 'E02002824',
        '9NJ' => 'E02002824',
        '9NL' => 'E02002824',
        '9NN' => 'E02002824',
        '9NP' => 'E02002824',
        '9NQ' => 'E02002824',
        '9NR' => 'E02002824',
        '9NS' => 'E02002824',
        '9NT' => 'E02002824',
        '9NU' => 'E02002824',
        '9NW' => 'E02002824',
        '9NX' => 'E02002824',
        '9NY' => 'E02002824',
        '9NZ' => 'E02002824',
        '9PA' => 'E02002824',
        '9PB' => 'E02002824',
        '9PD' => 'E02002824',
        '9PE' => 'E02002824',
        '9PF' => 'E02002824',
        '9PG' => 'E02002824',
        '9PH' => 'E02002824',
        '9PJ' => 'E02002824',
        '9PL' => 'E02002824',
        '9PN' => 'E02002824',
        '9PP' => 'E02002824',
        '9PQ' => 'E02002824',
        '9PR' => 'E02002824',
        '9PS' => 'E02002824',
        '9PT' => 'E02002824',
        '9PU' => 'E02002824',
        '9PW' => 'E02002824',
        '9PX' => 'E02002824',
        '9PY' => 'E02002824',
        '9PZ' => 'E02002824',
        '9QA' => 'E02002825',
        '9QB' => 'E02002825',
        '9QD' => 'E02002825',
        '9QE' => 'E02002825',
        '9QF' => 'E02002825',
        '9QG' => 'E02002825',
        '9QH' => 'E02002825',
        '9QJ' => 'E02002825',
        '9QL' => 'E02002825',
        '9QN' => 'E02002825',
        '9QP' => 'E02002825',
        '9QQ' => 'E02002825',
        '9QR' => 'E02002825',
        '9QS' => 'E02002825',
        '9QT' => 'E02002825',
        '9QU' => 'E02002825',
        '9QW' => 'E02002825',
        '9QX' => 'E02002825',
        '9QY' => 'E02002825',
        '9QZ' => 'E02002825',
        '9RA' => 'E02002825',
        '9RB' => 'E02002825',
        '9RD' => 'E02002825',
        '9RE' => 'E02002824',
        '9RF' => 'E02002824',
        '9RG' => 'E02002824',
        '9RH' => 'E02002824',
        '9RJ' => 'E02002824',
        '9RL' => 'E02002824',
        '9RN' => 'E02002824',
        '9RP' => 'E02002824',
        '9RQ' => 'E02002824',
        '9RR' => 'E02002824',
        '9RS' => 'E02002824',
        '9RT' => 'E02002824',
        '9RU' => 'E02002824',
        '9RW' => 'E02002824',
        '9RX' => 'E02002824',
        '9RY' => 'E02002824',
        '9RZ' => 'E02002824',
        '9SA' => 'E02002824',
        '9SB' => 'E02002824',
        '9SD' => 'E02002824',
        '9SE' => 'E02002824',
        '9SF' => 'E02002824',
        '9SG' => 'E02002825',
        '9SH' => 'E02002825',
        '9SJ' => 'E02002825',
        '9SL' => 'E02002825',
        '9SN' => 'E02002824',
        '9SQ' => 'E02002824',
        '9TA' => 'E02002825',
        '9TB' => 'E02002825',
        '9TD' => 'E02002825',
        '9XB' => 'E02002825',
        '9YL' => 'E02002813',
        '9ZB' => 'E02002813',
        '9ZD' => 'E02002813',
        '9ZH' => 'E02002813',
        '9ZJ' => 'E02002813',
        '9ZL' => 'E02002813',
        '9ZQ' => 'E02002813',
        '9ZS' => 'E02002813',
        '9ZT' => 'E02002821',
        '9ZU' => 'E02002824',
        '9ZW' => 'E02002824',
        '9ZX' => 'E02002813',
        '9ZY' => 'E02002813',
        '9ZZ' => 'E02002824',
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
