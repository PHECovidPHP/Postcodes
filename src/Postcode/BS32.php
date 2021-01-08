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
final class BS32
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AF' => 'E02003100',
        '0AG' => 'E02003100',
        '0AH' => 'E02003098',
        '0AJ' => 'E02003098',
        '0AL' => 'E02003098',
        '0AN' => 'E02003098',
        '0AP' => 'E02003098',
        '0AQ' => 'E02003098',
        '0AR' => 'E02003098',
        '0AS' => 'E02003098',
        '0AT' => 'E02003098',
        '0AY' => 'E02003098',
        '0BA' => 'E02003098',
        '0BB' => 'E02003098',
        '0BD' => 'E02003101',
        '0BE' => 'E02003101',
        '0BF' => 'E02003098',
        '0BG' => 'E02003101',
        '0BH' => 'E02003098',
        '0BJ' => 'E02003098',
        '0BL' => 'E02003101',
        '0BN' => 'E02003098',
        '0BP' => 'E02003098',
        '0BQ' => 'E02003101',
        '0BR' => 'E02003098',
        '0BS' => 'E02003098',
        '0BT' => 'E02003098',
        '0BU' => 'E02003098',
        '0BW' => 'E02003098',
        '0BX' => 'E02003098',
        '0BY' => 'E02003101',
        '0BZ' => 'E02003101',
        '0DA' => 'E02003098',
        '0DB' => 'E02003098',
        '0DE' => 'E02003098',
        '0DF' => 'E02003098',
        '0DG' => 'E02003098',
        '0DH' => 'E02003098',
        '0DJ' => 'E02003098',
        '0DL' => 'E02003098',
        '0DN' => 'E02003098',
        '0DP' => 'E02003098',
        '0DQ' => 'E02003098',
        '0DR' => 'E02003098',
        '0DS' => 'E02003098',
        '0DT' => 'E02003098',
        '0DU' => 'E02003098',
        '0DW' => 'E02003098',
        '0DX' => 'E02003098',
        '0DY' => 'E02003098',
        '0DZ' => 'E02003098',
        '0EA' => 'E02003098',
        '0EB' => 'E02003098',
        '0ED' => 'E02003098',
        '0EE' => 'E02003098',
        '0EF' => 'E02003098',
        '0EG' => 'E02003098',
        '0EH' => 'E02003098',
        '0EJ' => 'E02003098',
        '0EL' => 'E02003101',
        '0EN' => 'E02003098',
        '0EP' => 'E02003098',
        '0EQ' => 'E02003098',
        '0ER' => 'E02003098',
        '0ES' => 'E02003098',
        '0ET' => 'E02003098',
        '0EU' => 'E02003098',
        '0EW' => 'E02003098',
        '0EX' => 'E02003098',
        '0EY' => 'E02003098',
        '0EZ' => 'E02003098',
        '0FB' => 'E02003098',
        '0FD' => 'E02003098',
        '0FE' => 'E02003100',
        '0FF' => 'E02003098',
        '0FG' => 'E02003098',
        '0FH' => 'E02003100',
        '0GE' => 'E02003098',
        '0HA' => 'E02003098',
        '0HB' => 'E02003098',
        '0HD' => 'E02003098',
        '0HE' => 'E02003098',
        '0HF' => 'E02003098',
        '0HG' => 'E02003098',
        '0HH' => 'E02003098',
        '0HJ' => 'E02003098',
        '0HL' => 'E02003098',
        '0HN' => 'E02003098',
        '0HP' => 'E02003098',
        '0HW' => 'E02003098',
        '0LR' => 'E02003098',
        '0LW' => 'E02003098',
        '0PA' => 'E02003100',
        '0PP' => 'E02003101',
        '0WA' => 'E02003100',
        '0WB' => 'E02003100',
        '0WD' => 'E02003100',
        '0WE' => 'E02003100',
        '0WF' => 'E02003100',
        '0WG' => 'E02003100',
        '0WJ' => 'E02003100',
        '0WN' => 'E02003100',
        '0WP' => 'E02003100',
        '0WQ' => 'E02003100',
        '0WR' => 'E02003100',
        '0WS' => 'E02003100',
        '0WT' => 'E02003100',
        '0WU' => 'E02003100',
        '0WW' => 'E02003100',
        '0WX' => 'E02003100',
        '0WZ' => 'E02003100',
        '0XR' => 'E02003100',
        '0XZ' => 'E02003100',
        '0YA' => 'E02003098',
        '0YB' => 'E02003098',
        '0YD' => 'E02003098',
        '0YE' => 'E02003100',
        '0YF' => 'E02003098',
        '0YG' => 'E02003098',
        '0YH' => 'E02003098',
        '0YJ' => 'E02003098',
        '0YL' => 'E02003098',
        '0YN' => 'E02003100',
        '0YP' => 'E02003100',
        '0YQ' => 'E02003100',
        '0YR' => 'E02003100',
        '0YS' => 'E02003100',
        '0YT' => 'E02003100',
        '0YW' => 'E02003100',
        '0YZ' => 'E02003098',
        '0ZN' => 'E02003100',
        '0ZQ' => 'E02003100',
        '0ZR' => 'E02003100',
        '0ZX' => 'E02003100',
        '4AA' => 'E02003094',
        '4AB' => 'E02003094',
        '4AD' => 'E02003094',
        '4AE' => 'E02003094',
        '4AF' => 'E02003094',
        '4AG' => 'E02003094',
        '4AH' => 'E02003100',
        '4AJ' => 'E02003100',
        '4AL' => 'E02003100',
        '4AN' => 'E02003100',
        '4AP' => 'E02003100',
        '4AQ' => 'E02003100',
        '4AR' => 'E02003100',
        '4AS' => 'E02003098',
        '4AT' => 'E02003098',
        '4AU' => 'E02003098',
        '4AW' => 'E02003100',
        '4AX' => 'E02003098',
        '4AY' => 'E02003098',
        '4AZ' => 'E02003098',
        '4BA' => 'E02003098',
        '4BB' => 'E02003094',
        '4BD' => 'E02003094',
        '4BE' => 'E02003094',
        '4BF' => 'E02003100',
        '4BG' => 'E02003100',
        '4BH' => 'E02003100',
        '4BJ' => 'E02003094',
        '4BL' => 'E02003094',
        '4BN' => 'E02003094',
        '4BP' => 'E02003094',
        '4BQ' => 'E02003100',
        '4BS' => 'E02003094',
        '4BT' => 'E02003094',
        '4BU' => 'E02003094',
        '4BW' => 'E02003094',
        '4BX' => 'E02003094',
        '4BY' => 'E02003094',
        '4BZ' => 'E02003094',
        '4DA' => 'E02003094',
        '4DB' => 'E02003094',
        '4DD' => 'E02003094',
        '4DE' => 'E02003094',
        '4DF' => 'E02003094',
        '4DG' => 'E02003094',
        '4DH' => 'E02003094',
        '4DJ' => 'E02003094',
        '4DL' => 'E02003094',
        '4DN' => 'E02003094',
        '4DP' => 'E02003094',
        '4DQ' => 'E02003094',
        '4DR' => 'E02003094',
        '4DS' => 'E02003094',
        '4DT' => 'E02003094',
        '4DU' => 'E02003094',
        '4DW' => 'E02003094',
        '4DX' => 'E02003094',
        '4DY' => 'E02003094',
        '4DZ' => 'E02003094',
        '4EA' => 'E02003094',
        '4EB' => 'E02003094',
        '4ED' => 'E02003094',
        '4EE' => 'E02003094',
        '4EF' => 'E02003094',
        '4EG' => 'E02003094',
        '4EH' => 'E02003094',
        '4EJ' => 'E02003094',
        '4EL' => 'E02003094',
        '4EN' => 'E02003094',
        '4EP' => 'E02003094',
        '4EQ' => 'E02003094',
        '4ER' => 'E02003094',
        '4ES' => 'E02003094',
        '4ET' => 'E02003098',
        '4EU' => 'E02003098',
        '4EW' => 'E02003094',
        '4EX' => 'E02003098',
        '4EY' => 'E02003094',
        '4EZ' => 'E02003094',
        '4FB' => 'E02003094',
        '4FD' => 'E02003100',
        '4FF' => 'E02003100',
        '4FH' => 'E02003094',
        '4FJ' => 'E02003094',
        '4FL' => 'E02003094',
        '4FN' => 'E02003094',
        '4FP' => 'E02003100',
        '4FR' => 'E02003094',
        '4FT' => 'E02003094',
        '4FW' => 'E02003094',
        '4FX' => 'E02003094',
        '4GQ' => 'E02003100',
        '4HA' => 'E02003094',
        '4HB' => 'E02003094',
        '4HD' => 'E02003094',
        '4HE' => 'E02003094',
        '4HF' => 'E02003094',
        '4HG' => 'E02003094',
        '4HH' => 'E02003094',
        '4HJ' => 'E02003094',
        '4HL' => 'E02003094',
        '4HN' => 'E02003094',
        '4HP' => 'E02003094',
        '4HQ' => 'E02003094',
        '4HR' => 'E02003100',
        '4HS' => 'E02003094',
        '4HT' => 'E02003094',
        '4HU' => 'E02003094',
        '4HW' => 'E02003094',
        '4HX' => 'E02003094',
        '4HY' => 'E02003093',
        '4HZ' => 'E02003094',
        '4JA' => 'E02003100',
        '4JB' => 'E02003093',
        '4JD' => 'E02003093',
        '4JE' => 'E02003093',
        '4JF' => 'E02003098',
        '4JG' => 'E02003100',
        '4JH' => 'E02003094',
        '4JJ' => 'E02003094',
        '4JL' => 'E02003094',
        '4JN' => 'E02003094',
        '4JP' => 'E02003094',
        '4JQ' => 'E02003098',
        '4JR' => 'E02003094',
        '4JS' => 'E02003098',
        '4JT' => 'E02003098',
        '4JU' => 'E02003098',
        '4JW' => 'E02003094',
        '4JX' => 'E02003098',
        '4JY' => 'E02003098',
        '4JZ' => 'E02003094',
        '4LA' => 'E02003098',
        '4LB' => 'E02003098',
        '4LD' => 'E02003100',
        '4LE' => 'E02003093',
        '4LF' => 'E02003093',
        '4LG' => 'E02003093',
        '4LH' => 'E02003093',
        '4LJ' => 'E02003093',
        '4LL' => 'E02003093',
        '4LN' => 'E02003093',
        '4LP' => 'E02003093',
        '4LQ' => 'E02003093',
        '4LR' => 'E02003093',
        '4LS' => 'E02003093',
        '4LT' => 'E02003093',
        '4LU' => 'E02003093',
        '4LW' => 'E02003093',
        '4LX' => 'E02003093',
        '4LY' => 'E02003093',
        '4NA' => 'E02003100',
        '4NB' => 'E02003098',
        '4ND' => 'E02003098',
        '4NE' => 'E02003098',
        '4NF' => 'E02003098',
        '4NG' => 'E02003100',
        '4NH' => 'E02003098',
        '4NJ' => 'E02003093',
        '4NL' => 'E02003094',
        '4NN' => 'E02003093',
        '4NP' => 'E02003093',
        '4NQ' => 'E02003098',
        '4NR' => 'E02003093',
        '4NS' => 'E02003093',
        '4NT' => 'E02003093',
        '4NU' => 'E02003094',
        '4NW' => 'E02003093',
        '4NX' => 'E02003093',
        '4NY' => 'E02003093',
        '4NZ' => 'E02003093',
        '4PA' => 'E02003093',
        '4PB' => 'E02003093',
        '4PD' => 'E02003093',
        '4PE' => 'E02003093',
        '4PF' => 'E02003093',
        '4PG' => 'E02003093',
        '4PH' => 'E02003093',
        '4PJ' => 'E02003093',
        '4PL' => 'E02003093',
        '4PN' => 'E02003093',
        '4PP' => 'E02003093',
        '4PQ' => 'E02003093',
        '4PR' => 'E02003093',
        '4PS' => 'E02003098',
        '4PT' => 'E02003093',
        '4PU' => 'E02003093',
        '4PW' => 'E02003100',
        '4PX' => 'E02003100',
        '4PY' => 'E02003098',
        '4PZ' => 'E02003100',
        '4QA' => 'E02003098',
        '4QB' => 'E02003098',
        '4QD' => 'E02003098',
        '4QE' => 'E02003098',
        '4QF' => 'E02003098',
        '4QG' => 'E02003098',
        '4QH' => 'E02003098',
        '4QJ' => 'E02003098',
        '4QL' => 'E02003098',
        '4QN' => 'E02003098',
        '4QP' => 'E02003100',
        '4QQ' => 'E02003098',
        '4QT' => 'E02003098',
        '4QU' => 'E02003098',
        '4QW' => 'E02003098',
        '4QX' => 'E02003100',
        '4QY' => 'E02003100',
        '4RA' => 'E02003100',
        '4RB' => 'E02003100',
        '4RD' => 'E02003100',
        '4RE' => 'E02003100',
        '4RF' => 'E02003100',
        '4RG' => 'E02003100',
        '4RH' => 'E02003100',
        '4RJ' => 'E02003100',
        '4RL' => 'E02003100',
        '4RN' => 'E02003100',
        '4RP' => 'E02003100',
        '4RQ' => 'E02003100',
        '4RR' => 'E02003100',
        '4RS' => 'E02003100',
        '4RT' => 'E02003100',
        '4RU' => 'E02003098',
        '4RW' => 'E02003098',
        '4RX' => 'E02003100',
        '4RY' => 'E02003100',
        '4RZ' => 'E02003100',
        '4SA' => 'E02003100',
        '4SB' => 'E02003100',
        '4SD' => 'E02003100',
        '4SE' => 'E02003100',
        '4SF' => 'E02003094',
        '4SG' => 'E02003100',
        '4SH' => 'E02003100',
        '4SJ' => 'E02003100',
        '4SN' => 'E02003100',
        '4SQ' => 'E02003100',
        '4SR' => 'E02003100',
        '4SS' => 'E02003098',
        '4ST' => 'E02003100',
        '4SX' => 'E02003100',
        '4SY' => 'E02003100',
        '4SZ' => 'E02003100',
        '4TA' => 'E02003100',
        '4TD' => 'E02003100',
        '4TE' => 'E02003100',
        '4TF' => 'E02003100',
        '4TG' => 'E02003100',
        '4TH' => 'E02003100',
        '4TL' => 'E02003100',
        '4TN' => 'E02003100',
        '4TP' => 'E02003100',
        '4TQ' => 'E02003100',
        '4TR' => 'E02003100',
        '4TS' => 'E02003100',
        '4TT' => 'E02003100',
        '4TU' => 'E02003100',
        '4TW' => 'E02003100',
        '4TX' => 'E02003100',
        '4TY' => 'E02003100',
        '4UA' => 'E02003100',
        '4UB' => 'E02003100',
        '4UD' => 'E02003100',
        '4UE' => 'E02003100',
        '4UF' => 'E02003100',
        '4UH' => 'E02003094',
        '4UJ' => 'E02003100',
        '4UN' => 'E02003100',
        '4UP' => 'E02003100',
        '4UW' => 'E02003100',
        '4UX' => 'E02003100',
        '4UY' => 'E02003100',
        '4UZ' => 'E02003094',
        '4WA' => 'E02003100',
        '4WB' => 'E02003100',
        '4WD' => 'E02003100',
        '4WE' => 'E02003100',
        '4WF' => 'E02003100',
        '4WG' => 'E02003100',
        '4WH' => 'E02003100',
        '4WJ' => 'E02003100',
        '4WL' => 'E02003100',
        '4WN' => 'E02003100',
        '4WP' => 'E02003100',
        '4WQ' => 'E02003100',
        '4WR' => 'E02003100',
        '4WS' => 'E02003100',
        '4WT' => 'E02003100',
        '4WU' => 'E02003100',
        '4WW' => 'E02003100',
        '4WX' => 'E02003100',
        '4WY' => 'E02003100',
        '4WZ' => 'E02003100',
        '4XA' => 'E02003098',
        '4XB' => 'E02003100',
        '4XD' => 'E02003100',
        '4XE' => 'E02003094',
        '4XF' => 'E02003100',
        '4XG' => 'E02003100',
        '4XJ' => 'E02003100',
        '4XL' => 'E02003100',
        '4XN' => 'E02003100',
        '4XP' => 'E02003100',
        '4XQ' => 'E02003100',
        '4XR' => 'E02003100',
        '4XS' => 'E02003100',
        '4XT' => 'E02003100',
        '4XU' => 'E02003100',
        '4XW' => 'E02003100',
        '4XX' => 'E02003100',
        '4XY' => 'E02003100',
        '4YA' => 'E02003100',
        '4YB' => 'E02003094',
        '4YD' => 'E02003094',
        '4YE' => 'E02003100',
        '4YF' => 'E02003100',
        '4YG' => 'E02003100',
        '4YH' => 'E02003100',
        '4YJ' => 'E02003094',
        '4YL' => 'E02003094',
        '4YN' => 'E02003100',
        '4YP' => 'E02003100',
        '4YQ' => 'E02003100',
        '4YR' => 'E02003094',
        '4YS' => 'E02003100',
        '4YT' => 'E02003100',
        '4YU' => 'E02003094',
        '4YW' => 'E02003100',
        '4YX' => 'E02003100',
        '4YY' => 'E02003100',
        '4YZ' => 'E02003100',
        '4ZA' => 'E02003094',
        '4ZB' => 'E02003100',
        '4ZD' => 'E02003100',
        '4ZE' => 'E02003100',
        '4ZF' => 'E02003098',
        '4ZG' => 'E02003100',
        '4ZJ' => 'E02003100',
        '4ZQ' => 'E02003100',
        '4ZR' => 'E02003100',
        '4ZS' => 'E02003100',
        '4ZW' => 'E02003100',
        '4ZX' => 'E02003100',
        '8AB' => 'E02003101',
        '8AD' => 'E02003101',
        '8AE' => 'E02003101',
        '8AF' => 'E02003101',
        '8AG' => 'E02003101',
        '8AH' => 'E02003101',
        '8AJ' => 'E02003101',
        '8AL' => 'E02003101',
        '8AN' => 'E02003101',
        '8AP' => 'E02003098',
        '8AQ' => 'E02003101',
        '8AR' => 'E02003098',
        '8AS' => 'E02003101',
        '8AT' => 'E02003098',
        '8AU' => 'E02003098',
        '8AW' => 'E02003098',
        '8AX' => 'E02003101',
        '8AY' => 'E02003098',
        '8AZ' => 'E02003098',
        '8BA' => 'E02003101',
        '8BB' => 'E02003101',
        '8BD' => 'E02003101',
        '8BE' => 'E02003098',
        '8BF' => 'E02003100',
        '8BG' => 'E02003101',
        '8BH' => 'E02003098',
        '8BJ' => 'E02003101',
        '8BL' => 'E02003101',
        '8BN' => 'E02003101',
        '8BP' => 'E02003101',
        '8BQ' => 'E02003101',
        '8BS' => 'E02003101',
        '8BT' => 'E02003100',
        '8BU' => 'E02003101',
        '8BW' => 'E02003100',
        '8BX' => 'E02003100',
        '8BY' => 'E02003101',
        '8BZ' => 'E02003101',
        '8DA' => 'E02003098',
        '8DB' => 'E02003098',
        '8DD' => 'E02003101',
        '8DE' => 'E02003098',
        '8DF' => 'E02003098',
        '8DG' => 'E02003098',
        '8DH' => 'E02003098',
        '8DJ' => 'E02003101',
        '8DL' => 'E02003101',
        '8DN' => 'E02003101',
        '8DP' => 'E02003101',
        '8DQ' => 'E02003098',
        '8DR' => 'E02003101',
        '8DS' => 'E02003101',
        '8DT' => 'E02003101',
        '8DU' => 'E02003101',
        '8DW' => 'E02003101',
        '8DX' => 'E02003101',
        '8DY' => 'E02003101',
        '8DZ' => 'E02003101',
        '8EA' => 'E02003101',
        '8EB' => 'E02003101',
        '8ED' => 'E02003101',
        '8EE' => 'E02003101',
        '8EF' => 'E02003101',
        '8EG' => 'E02003101',
        '8EH' => 'E02003101',
        '8EJ' => 'E02003098',
        '8EL' => 'E02003101',
        '8EN' => 'E02003101',
        '8EP' => 'E02003101',
        '8EQ' => 'E02003101',
        '8ER' => 'E02003101',
        '8ES' => 'E02003101',
        '8ET' => 'E02003101',
        '8EU' => 'E02003098',
        '8EW' => 'E02003101',
        '8EX' => 'E02003100',
        '8EY' => 'E02003101',
        '8EZ' => 'E02003101',
        '8FB' => 'E02003101',
        '8FD' => 'E02003101',
        '8FE' => 'E02003101',
        '8FF' => 'E02003101',
        '8GA' => 'E02003101',
        '8GB' => 'E02003101',
        '8GD' => 'E02003101',
        '8GE' => 'E02003101',
        '8HH' => 'E02003101',
        '8HJ' => 'E02003101',
        '8HL' => 'E02003101',
        '8JW' => 'E02003101',
        '8SW' => 'E02003101',
        '8TA' => 'E02003101',
        '8TB' => 'E02003101',
        '8TD' => 'E02003101',
        '8TP' => 'E02003098',
        '8UA' => 'E02003101',
        '8UB' => 'E02003100',
        '8WA' => 'E02003100',
        '8WB' => 'E02003100',
        '8WD' => 'E02003100',
        '8WE' => 'E02003100',
        '8WF' => 'E02003100',
        '8WG' => 'E02003100',
        '8WH' => 'E02003100',
        '8WJ' => 'E02003100',
        '8WS' => 'E02003100',
        '8WT' => 'E02003100',
        '8WU' => 'E02003100',
        '8WW' => 'E02003100',
        '8WX' => 'E02003100',
        '8WY' => 'E02003100',
        '8WZ' => 'E02003100',
        '8XA' => 'E02003100',
        '8YA' => 'E02003101',
        '8YB' => 'E02003100',
        '8YD' => 'E02003100',
        '8YE' => 'E02003100',
        '8YF' => 'E02003101',
        '8YG' => 'E02003100',
        '8YH' => 'E02003100',
        '8YJ' => 'E02003101',
        '8YL' => 'E02003104',
        '8YN' => 'E02003100',
        '8YP' => 'E02003100',
        '8YQ' => 'E02003100',
        '8YR' => 'E02003100',
        '8YS' => 'E02003100',
        '8YT' => 'E02003100',
        '8YU' => 'E02003100',
        '8YW' => 'E02003101',
        '8ZG' => 'E02003100',
        '8ZJ' => 'E02003100',
        '8ZN' => 'E02003100',
        '9AA' => 'E02003101',
        '9AB' => 'E02003101',
        '9AD' => 'E02003101',
        '9AE' => 'E02003101',
        '9AF' => 'E02003101',
        '9AG' => 'E02003101',
        '9AH' => 'E02003101',
        '9AJ' => 'E02003101',
        '9AL' => 'E02003101',
        '9AP' => 'E02003101',
        '9AQ' => 'E02003101',
        '9AR' => 'E02003101',
        '9AS' => 'E02003101',
        '9AT' => 'E02003101',
        '9AU' => 'E02003101',
        '9AW' => 'E02003101',
        '9AX' => 'E02003101',
        '9AY' => 'E02003101',
        '9AZ' => 'E02003101',
        '9BA' => 'E02003101',
        '9BB' => 'E02003101',
        '9BD' => 'E02003101',
        '9BE' => 'E02003101',
        '9BF' => 'E02003101',
        '9BG' => 'E02003101',
        '9BH' => 'E02003101',
        '9BJ' => 'E02003098',
        '9BL' => 'E02003098',
        '9BN' => 'E02003101',
        '9BP' => 'E02003101',
        '9BQ' => 'E02003101',
        '9BS' => 'E02003098',
        '9BT' => 'E02003101',
        '9BU' => 'E02003101',
        '9BW' => 'E02003101',
        '9BX' => 'E02003101',
        '9BY' => 'E02003098',
        '9BZ' => 'E02003098',
        '9DA' => 'E02003101',
        '9DB' => 'E02003098',
        '9DD' => 'E02003101',
        '9DE' => 'E02003098',
        '9DF' => 'E02003101',
        '9DG' => 'E02003101',
        '9DH' => 'E02003101',
        '9DJ' => 'E02003101',
        '9DN' => 'E02003101',
        '9DP' => 'E02003101',
        '9DQ' => 'E02003101',
        '9DR' => 'E02003101',
        '9DS' => 'E02003101',
        '9DT' => 'E02003101',
        '9DU' => 'E02003101',
        '9DW' => 'E02003101',
        '9DX' => 'E02003101',
        '9TA' => 'E02003101',
        '9TB' => 'E02003101',
        '9WA' => 'E02003100',
        '9WB' => 'E02003101',
        '9WD' => 'E02003101',
        '9WE' => 'E02003101',
        '9WT' => 'E02003100',
        '9WU' => 'E02003100',
        '9WW' => 'E02003100',
        '9WX' => 'E02003100',
        '9WY' => 'E02003100',
        '9WZ' => 'E02003100',
        '9XQ' => 'E02003100',
        '9YA' => 'E02003101',
        '9YB' => 'E02003100',
        '9YD' => 'E02003101',
        '9YE' => 'E02003100',
        '9YF' => 'E02003100',
        '9YG' => 'E02003101',
        '9YH' => 'E02003101',
        '9YJ' => 'E02003101',
        '9YL' => 'E02003100',
        '9YN' => 'E02003100',
        '9YQ' => 'E02003100',
        '9ZN' => 'E02003100',
        '9ZT' => 'E02003100',
        '9ZU' => 'E02003100',
        '9ZW' => 'E02003100',
        '9ZX' => 'E02003100',
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
