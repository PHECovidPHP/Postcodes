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
final class IG3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02006800',
        '8AB' => 'E02006800',
        '8AD' => 'E02006800',
        '8AE' => 'E02006800',
        '8AF' => 'E02006800',
        '8AG' => 'E02006800',
        '8AH' => 'E02006800',
        '8AJ' => 'E02006800',
        '8AL' => 'E02006800',
        '8AN' => 'E02006800',
        '8AP' => 'E02006800',
        '8AQ' => 'E02006800',
        '8AR' => 'E02006800',
        '8AS' => 'E02006800',
        '8AT' => 'E02006800',
        '8AU' => 'E02006800',
        '8AW' => 'E02000774',
        '8AX' => 'E02006800',
        '8AY' => 'E02006800',
        '8AZ' => 'E02006800',
        '8BA' => 'E02006800',
        '8BB' => 'E02006800',
        '8BD' => 'E02006800',
        '8BE' => 'E02006800',
        '8BG' => 'E02006800',
        '8BH' => 'E02000780',
        '8BJ' => 'E02000780',
        '8BL' => 'E02000774',
        '8BN' => 'E02000780',
        '8BP' => 'E02000774',
        '8BQ' => 'E02006800',
        '8BS' => 'E02006800',
        '8BT' => 'E02000774',
        '8BU' => 'E02006800',
        '8BW' => 'E02000774',
        '8BX' => 'E02006800',
        '8BY' => 'E02006800',
        '8BZ' => 'E02000780',
        '8DA' => 'E02000774',
        '8DB' => 'E02000780',
        '8DD' => 'E02000774',
        '8DE' => 'E02000774',
        '8DF' => 'E02006800',
        '8DG' => 'E02006800',
        '8DH' => 'E02006800',
        '8DJ' => 'E02006800',
        '8DL' => 'E02006800',
        '8DN' => 'E02006800',
        '8DP' => 'E02006800',
        '8DQ' => 'E02006800',
        '8DR' => 'E02006800',
        '8DS' => 'E02006800',
        '8DT' => 'E02000774',
        '8DU' => 'E02006800',
        '8DW' => 'E02006800',
        '8DX' => 'E02000780',
        '8DY' => 'E02006800',
        '8DZ' => 'E02000780',
        '8EA' => 'E02006800',
        '8EB' => 'E02006800',
        '8ED' => 'E02000774',
        '8EE' => 'E02006800',
        '8EF' => 'E02000774',
        '8EG' => 'E02006800',
        '8EH' => 'E02000780',
        '8EJ' => 'E02006800',
        '8EL' => 'E02000780',
        '8EN' => 'E02000780',
        '8EP' => 'E02000780',
        '8EQ' => 'E02006800',
        '8ER' => 'E02000770',
        '8ES' => 'E02000780',
        '8ET' => 'E02000770',
        '8EU' => 'E02000770',
        '8EW' => 'E02000774',
        '8EX' => 'E02000770',
        '8EY' => 'E02000770',
        '8EZ' => 'E02000770',
        '8FB' => 'E02000780',
        '8FD' => 'E02000772',
        '8FE' => 'E02000772',
        '8FF' => 'E02000772',
        '8FG' => 'E02000772',
        '8FH' => 'E02000774',
        '8FP' => 'E02000780',
        '8FT' => 'E02000770',
        '8FW' => 'E02000780',
        '8FX' => 'E02000774',
        '8FZ' => 'E02000774',
        '8GD' => 'E02000774',
        '8GE' => 'E02000774',
        '8GF' => 'E02000774',
        '8GG' => 'E02000774',
        '8GH' => 'E02000774',
        '8GJ' => 'E02000780',
        '8GL' => 'E02000770',
        '8GN' => 'E02000774',
        '8GP' => 'E02000774',
        '8GQ' => 'E02000780',
        '8GR' => 'E02000774',
        '8GS' => 'E02000774',
        '8GT' => 'E02000780',
        '8GU' => 'E02000780',
        '8GW' => 'E02000780',
        '8GX' => 'E02000780',
        '8GY' => 'E02000774',
        '8GZ' => 'E02000774',
        '8HA' => 'E02000770',
        '8HB' => 'E02000770',
        '8HD' => 'E02000770',
        '8HE' => 'E02000770',
        '8HF' => 'E02000770',
        '8HG' => 'E02000770',
        '8HH' => 'E02000774',
        '8HJ' => 'E02000780',
        '8HL' => 'E02000774',
        '8HN' => 'E02000780',
        '8HP' => 'E02000770',
        '8HQ' => 'E02000770',
        '8HR' => 'E02000770',
        '8HS' => 'E02000770',
        '8HT' => 'E02000770',
        '8HU' => 'E02000770',
        '8HW' => 'E02000770',
        '8HX' => 'E02000770',
        '8HY' => 'E02000770',
        '8HZ' => 'E02000770',
        '8JA' => 'E02000770',
        '8JB' => 'E02000770',
        '8JD' => 'E02000770',
        '8JE' => 'E02000770',
        '8JF' => 'E02000770',
        '8JG' => 'E02000770',
        '8JH' => 'E02000770',
        '8JJ' => 'E02000770',
        '8JL' => 'E02000770',
        '8JN' => 'E02000770',
        '8JP' => 'E02000770',
        '8JQ' => 'E02000770',
        '8JR' => 'E02000770',
        '8JS' => 'E02000770',
        '8JT' => 'E02000770',
        '8JU' => 'E02000770',
        '8JW' => 'E02000770',
        '8JX' => 'E02000770',
        '8JY' => 'E02000774',
        '8JZ' => 'E02000774',
        '8LA' => 'E02000774',
        '8LB' => 'E02000774',
        '8LD' => 'E02000780',
        '8LE' => 'E02000774',
        '8LF' => 'E02000774',
        '8LG' => 'E02000774',
        '8LH' => 'E02000774',
        '8LJ' => 'E02000774',
        '8LL' => 'E02000774',
        '8LN' => 'E02000774',
        '8LP' => 'E02000774',
        '8LQ' => 'E02000774',
        '8LR' => 'E02000774',
        '8LS' => 'E02000774',
        '8LT' => 'E02000774',
        '8LU' => 'E02000774',
        '8LW' => 'E02000774',
        '8LX' => 'E02000774',
        '8LY' => 'E02000774',
        '8LZ' => 'E02000774',
        '8NA' => 'E02000774',
        '8NB' => 'E02000774',
        '8ND' => 'E02000774',
        '8NE' => 'E02000774',
        '8NF' => 'E02000774',
        '8NG' => 'E02000774',
        '8NH' => 'E02000774',
        '8NJ' => 'E02000774',
        '8NL' => 'E02000774',
        '8NN' => 'E02000774',
        '8NP' => 'E02000774',
        '8NQ' => 'E02000774',
        '8NR' => 'E02000774',
        '8NS' => 'E02000774',
        '8NT' => 'E02000774',
        '8NU' => 'E02000774',
        '8NW' => 'E02000774',
        '8NX' => 'E02000780',
        '8NY' => 'E02000774',
        '8NZ' => 'E02000774',
        '8PA' => 'E02000774',
        '8PB' => 'E02000774',
        '8PD' => 'E02000774',
        '8PE' => 'E02000774',
        '8PF' => 'E02000774',
        '8PG' => 'E02000774',
        '8PH' => 'E02000774',
        '8PJ' => 'E02000774',
        '8PL' => 'E02000774',
        '8PN' => 'E02000780',
        '8PP' => 'E02000774',
        '8PQ' => 'E02000774',
        '8PR' => 'E02000774',
        '8PS' => 'E02000774',
        '8PT' => 'E02000774',
        '8PU' => 'E02000774',
        '8PW' => 'E02000774',
        '8PX' => 'E02000774',
        '8PY' => 'E02000774',
        '8PZ' => 'E02000774',
        '8QA' => 'E02000774',
        '8QB' => 'E02000774',
        '8QD' => 'E02000774',
        '8QE' => 'E02000774',
        '8QF' => 'E02000780',
        '8QG' => 'E02000780',
        '8QH' => 'E02000774',
        '8QJ' => 'E02000774',
        '8QL' => 'E02000774',
        '8QN' => 'E02000774',
        '8QP' => 'E02000774',
        '8QQ' => 'E02000774',
        '8QR' => 'E02000774',
        '8QS' => 'E02000774',
        '8QT' => 'E02000780',
        '8QU' => 'E02000774',
        '8QW' => 'E02000774',
        '8QX' => 'E02000780',
        '8QY' => 'E02000772',
        '8QZ' => 'E02000774',
        '8RA' => 'E02000774',
        '8RB' => 'E02000774',
        '8RD' => 'E02000774',
        '8RE' => 'E02000774',
        '8RF' => 'E02006800',
        '8RG' => 'E02000774',
        '8RH' => 'E02000774',
        '8RJ' => 'E02000774',
        '8RL' => 'E02000774',
        '8RN' => 'E02000774',
        '8RP' => 'E02000774',
        '8RQ' => 'E02000774',
        '8RR' => 'E02000774',
        '8RS' => 'E02000774',
        '8RT' => 'E02000780',
        '8RU' => 'E02000774',
        '8RW' => 'E02000774',
        '8RX' => 'E02000780',
        '8RY' => 'E02000774',
        '8RZ' => 'E02000772',
        '8SA' => 'E02000772',
        '8SB' => 'E02000774',
        '8SD' => 'E02000772',
        '8SE' => 'E02000772',
        '8SF' => 'E02000772',
        '8SG' => 'E02000772',
        '8SH' => 'E02000772',
        '8SJ' => 'E02000772',
        '8SL' => 'E02000774',
        '8SN' => 'E02000774',
        '8SP' => 'E02000774',
        '8SQ' => 'E02000772',
        '8SR' => 'E02000780',
        '8SS' => 'E02000780',
        '8ST' => 'E02000772',
        '8SU' => 'E02000772',
        '8SW' => 'E02000772',
        '8SX' => 'E02000772',
        '8SY' => 'E02000772',
        '8SZ' => 'E02000772',
        '8TA' => 'E02000772',
        '8TB' => 'E02000772',
        '8TD' => 'E02000772',
        '8TE' => 'E02000772',
        '8TF' => 'E02000772',
        '8TG' => 'E02000772',
        '8TH' => 'E02000772',
        '8TJ' => 'E02000772',
        '8TL' => 'E02000772',
        '8TN' => 'E02000772',
        '8TP' => 'E02000774',
        '8TQ' => 'E02000772',
        '8TR' => 'E02000772',
        '8TS' => 'E02000772',
        '8TT' => 'E02000772',
        '8TU' => 'E02000772',
        '8TW' => 'E02000772',
        '8TX' => 'E02000772',
        '8TY' => 'E02000774',
        '8TZ' => 'E02000772',
        '8UA' => 'E02000772',
        '8UB' => 'E02000772',
        '8UD' => 'E02000772',
        '8UE' => 'E02000772',
        '8UF' => 'E02000780',
        '8UG' => 'E02000774',
        '8UH' => 'E02000780',
        '8UJ' => 'E02000772',
        '8UL' => 'E02000772',
        '8UN' => 'E02000772',
        '8UP' => 'E02000772',
        '8UQ' => 'E02000772',
        '8UR' => 'E02000772',
        '8UT' => 'E02000772',
        '8UU' => 'E02000772',
        '8UW' => 'E02000772',
        '8UX' => 'E02000772',
        '8UY' => 'E02000772',
        '8UZ' => 'E02000772',
        '8WA' => 'E02000780',
        '8WB' => 'E02000780',
        '8WD' => 'E02000780',
        '8WE' => 'E02000780',
        '8WF' => 'E02000780',
        '8WG' => 'E02000780',
        '8WH' => 'E02000780',
        '8WJ' => 'E02000780',
        '8WL' => 'E02000780',
        '8WN' => 'E02000780',
        '8WP' => 'E02000780',
        '8WQ' => 'E02000780',
        '8WR' => 'E02000780',
        '8WS' => 'E02000780',
        '8WT' => 'E02000780',
        '8WU' => 'E02000780',
        '8WW' => 'E02000780',
        '8WX' => 'E02000780',
        '8WY' => 'E02000780',
        '8WZ' => 'E02000780',
        '8XA' => 'E02000772',
        '8XB' => 'E02000772',
        '8XD' => 'E02000772',
        '8XE' => 'E02000772',
        '8XF' => 'E02000772',
        '8XG' => 'E02000772',
        '8XH' => 'E02000772',
        '8XJ' => 'E02000772',
        '8XL' => 'E02000772',
        '8XN' => 'E02000772',
        '8XP' => 'E02000772',
        '8XQ' => 'E02000772',
        '8XR' => 'E02000772',
        '8XS' => 'E02000772',
        '8XT' => 'E02000772',
        '8XU' => 'E02000772',
        '8XW' => 'E02000772',
        '8XX' => 'E02000774',
        '8XY' => 'E02000780',
        '8XZ' => 'E02000772',
        '8YA' => 'E02000772',
        '8YB' => 'E02000772',
        '8YD' => 'E02000772',
        '8YE' => 'E02000772',
        '8YF' => 'E02000780',
        '8YG' => 'E02000780',
        '8YH' => 'E02000780',
        '8YJ' => 'E02000780',
        '8YL' => 'E02000780',
        '8YN' => 'E02000780',
        '8YP' => 'E02000772',
        '8YQ' => 'E02000780',
        '8YR' => 'E02000780',
        '8YS' => 'E02000780',
        '8YT' => 'E02000780',
        '8YU' => 'E02000772',
        '8YW' => 'E02000780',
        '8YX' => 'E02000780',
        '8YY' => 'E02000772',
        '8YZ' => 'E02000780',
        '8ZA' => 'E02000772',
        '8ZQ' => 'E02000780',
        '9AA' => 'E02000781',
        '9AB' => 'E02000781',
        '9AD' => 'E02000781',
        '9AE' => 'E02000781',
        '9AF' => 'E02000781',
        '9AG' => 'E02000781',
        '9AH' => 'E02000781',
        '9AJ' => 'E02000781',
        '9AL' => 'E02000781',
        '9AN' => 'E02000781',
        '9AP' => 'E02000781',
        '9AQ' => 'E02000781',
        '9AR' => 'E02000781',
        '9AS' => 'E02000781',
        '9AT' => 'E02000781',
        '9AU' => 'E02000781',
        '9AW' => 'E02000780',
        '9AX' => 'E02000781',
        '9AY' => 'E02000781',
        '9AZ' => 'E02000781',
        '9BA' => 'E02000781',
        '9BB' => 'E02000781',
        '9BD' => 'E02000781',
        '9BE' => 'E02000781',
        '9BF' => 'E02006800',
        '9BG' => 'E02000781',
        '9BH' => 'E02000781',
        '9BJ' => 'E02000781',
        '9BL' => 'E02000781',
        '9BN' => 'E02000781',
        '9BP' => 'E02000781',
        '9BQ' => 'E02000781',
        '9BS' => 'E02000781',
        '9BT' => 'E02000781',
        '9BU' => 'E02000781',
        '9BW' => 'E02000781',
        '9BX' => 'E02000781',
        '9BY' => 'E02000781',
        '9BZ' => 'E02000781',
        '9DA' => 'E02000781',
        '9DB' => 'E02000781',
        '9DD' => 'E02000781',
        '9DE' => 'E02000781',
        '9DF' => 'E02000781',
        '9DG' => 'E02000781',
        '9DH' => 'E02000781',
        '9DJ' => 'E02000781',
        '9DL' => 'E02000781',
        '9DN' => 'E02000781',
        '9DP' => 'E02000781',
        '9DQ' => 'E02000781',
        '9DR' => 'E02000781',
        '9DS' => 'E02000781',
        '9DT' => 'E02000781',
        '9DU' => 'E02000781',
        '9DW' => 'E02000781',
        '9DX' => 'E02000781',
        '9DY' => 'E02000781',
        '9DZ' => 'E02000781',
        '9EA' => 'E02000781',
        '9EB' => 'E02000781',
        '9ED' => 'E02000781',
        '9EE' => 'E02000781',
        '9EF' => 'E02000781',
        '9EG' => 'E02000781',
        '9EH' => 'E02000781',
        '9EJ' => 'E02000781',
        '9EL' => 'E02000781',
        '9EN' => 'E02000781',
        '9EP' => 'E02000781',
        '9EQ' => 'E02000781',
        '9ER' => 'E02000781',
        '9ES' => 'E02000781',
        '9ET' => 'E02000781',
        '9EU' => 'E02000781',
        '9EW' => 'E02000781',
        '9EX' => 'E02000780',
        '9EY' => 'E02000780',
        '9EZ' => 'E02000780',
        '9FA' => 'E02006800',
        '9FB' => 'E02000780',
        '9FD' => 'E02000781',
        '9FE' => 'E02000781',
        '9FF' => 'E02000772',
        '9FG' => 'E02000781',
        '9FJ' => 'E02000781',
        '9FL' => 'E02000781',
        '9FP' => 'E02000781',
        '9FT' => 'E02000780',
        '9FX' => 'E02000781',
        '9FY' => 'E02000780',
        '9FZ' => 'E02000781',
        '9GD' => 'E02000781',
        '9GE' => 'E02000781',
        '9GF' => 'E02000780',
        '9GG' => 'E02000781',
        '9GH' => 'E02000781',
        '9GJ' => 'E02000780',
        '9GL' => 'E02000781',
        '9GN' => 'E02000781',
        '9GP' => 'E02000781',
        '9GQ' => 'E02000781',
        '9GR' => 'E02000781',
        '9GS' => 'E02000781',
        '9GT' => 'E02000781',
        '9GU' => 'E02000781',
        '9GW' => 'E02000780',
        '9GX' => 'E02000781',
        '9GY' => 'E02000781',
        '9GZ' => 'E02000781',
        '9HA' => 'E02000781',
        '9HB' => 'E02000781',
        '9HD' => 'E02000781',
        '9HE' => 'E02006800',
        '9HF' => 'E02000781',
        '9HG' => 'E02000781',
        '9HH' => 'E02000781',
        '9HJ' => 'E02000781',
        '9HL' => 'E02000781',
        '9HN' => 'E02000781',
        '9HP' => 'E02000781',
        '9HQ' => 'E02000781',
        '9HR' => 'E02000781',
        '9HS' => 'E02000781',
        '9HT' => 'E02000781',
        '9HU' => 'E02000781',
        '9HW' => 'E02000781',
        '9HX' => 'E02000781',
        '9HY' => 'E02000781',
        '9HZ' => 'E02000780',
        '9JA' => 'E02006800',
        '9JB' => 'E02006800',
        '9JD' => 'E02000781',
        '9JE' => 'E02000781',
        '9JF' => 'E02000781',
        '9JG' => 'E02000781',
        '9JH' => 'E02000781',
        '9JJ' => 'E02000781',
        '9JL' => 'E02000781',
        '9JN' => 'E02000781',
        '9JP' => 'E02000781',
        '9JQ' => 'E02000781',
        '9JR' => 'E02000781',
        '9JS' => 'E02000781',
        '9JT' => 'E02000780',
        '9JU' => 'E02000781',
        '9JW' => 'E02000781',
        '9JX' => 'E02000781',
        '9JY' => 'E02000781',
        '9JZ' => 'E02000781',
        '9LA' => 'E02006800',
        '9LB' => 'E02006800',
        '9LD' => 'E02006800',
        '9LE' => 'E02006800',
        '9LF' => 'E02006800',
        '9LG' => 'E02006800',
        '9LH' => 'E02006800',
        '9LJ' => 'E02006800',
        '9LL' => 'E02006800',
        '9LN' => 'E02006800',
        '9LP' => 'E02000780',
        '9LQ' => 'E02006800',
        '9LR' => 'E02000781',
        '9LS' => 'E02000781',
        '9LT' => 'E02006800',
        '9LU' => 'E02006800',
        '9LW' => 'E02006800',
        '9LX' => 'E02006800',
        '9LY' => 'E02006800',
        '9LZ' => 'E02006800',
        '9NA' => 'E02006800',
        '9NB' => 'E02000781',
        '9ND' => 'E02000781',
        '9NE' => 'E02000781',
        '9NF' => 'E02000781',
        '9NG' => 'E02000781',
        '9NH' => 'E02000781',
        '9NJ' => 'E02000781',
        '9NL' => 'E02000781',
        '9NN' => 'E02000781',
        '9NP' => 'E02000781',
        '9NQ' => 'E02000781',
        '9NR' => 'E02006800',
        '9NS' => 'E02000780',
        '9NT' => 'E02000781',
        '9NU' => 'E02000781',
        '9NW' => 'E02000781',
        '9NX' => 'E02000781',
        '9NY' => 'E02000781',
        '9NZ' => 'E02006800',
        '9PA' => 'E02006800',
        '9PB' => 'E02006800',
        '9PD' => 'E02006800',
        '9PE' => 'E02006800',
        '9PF' => 'E02006800',
        '9PG' => 'E02006800',
        '9PH' => 'E02006800',
        '9PJ' => 'E02006800',
        '9PL' => 'E02006800',
        '9PN' => 'E02006800',
        '9PP' => 'E02000781',
        '9PQ' => 'E02006800',
        '9PR' => 'E02000781',
        '9PS' => 'E02000781',
        '9PT' => 'E02000781',
        '9PU' => 'E02000781',
        '9PW' => 'E02006800',
        '9PX' => 'E02000781',
        '9PY' => 'E02000781',
        '9PZ' => 'E02000781',
        '9QA' => 'E02000781',
        '9QB' => 'E02000781',
        '9QD' => 'E02006800',
        '9QE' => 'E02006800',
        '9QF' => 'E02006800',
        '9QG' => 'E02000780',
        '9QH' => 'E02006800',
        '9QJ' => 'E02006800',
        '9QL' => 'E02006800',
        '9QN' => 'E02006800',
        '9QP' => 'E02006800',
        '9QQ' => 'E02006800',
        '9QR' => 'E02006800',
        '9QS' => 'E02006800',
        '9QT' => 'E02006800',
        '9QU' => 'E02006800',
        '9QW' => 'E02006800',
        '9QX' => 'E02006800',
        '9QY' => 'E02000780',
        '9QZ' => 'E02006800',
        '9RA' => 'E02006800',
        '9RB' => 'E02006800',
        '9RD' => 'E02006800',
        '9RE' => 'E02006800',
        '9RF' => 'E02000781',
        '9RG' => 'E02006800',
        '9RH' => 'E02006800',
        '9RJ' => 'E02006800',
        '9RL' => 'E02006800',
        '9RN' => 'E02006800',
        '9RP' => 'E02006800',
        '9RQ' => 'E02006800',
        '9RR' => 'E02006800',
        '9RS' => 'E02006800',
        '9RT' => 'E02006800',
        '9RU' => 'E02006800',
        '9RW' => 'E02006800',
        '9RX' => 'E02006800',
        '9RY' => 'E02006800',
        '9RZ' => 'E02006800',
        '9SA' => 'E02006800',
        '9SB' => 'E02006800',
        '9SD' => 'E02006800',
        '9SE' => 'E02006800',
        '9SF' => 'E02006800',
        '9SG' => 'E02006800',
        '9SH' => 'E02006800',
        '9SJ' => 'E02006800',
        '9SL' => 'E02006800',
        '9SN' => 'E02006800',
        '9SP' => 'E02006800',
        '9SQ' => 'E02006800',
        '9SR' => 'E02006800',
        '9SS' => 'E02006800',
        '9ST' => 'E02006800',
        '9SU' => 'E02006800',
        '9SW' => 'E02006800',
        '9SX' => 'E02006800',
        '9SY' => 'E02006800',
        '9SZ' => 'E02006800',
        '9TA' => 'E02006800',
        '9TB' => 'E02006800',
        '9TD' => 'E02006800',
        '9TE' => 'E02006800',
        '9TF' => 'E02006800',
        '9TG' => 'E02006800',
        '9TH' => 'E02006800',
        '9TJ' => 'E02006800',
        '9TL' => 'E02006800',
        '9TN' => 'E02006800',
        '9TP' => 'E02006800',
        '9TQ' => 'E02006800',
        '9TR' => 'E02000781',
        '9TS' => 'E02006800',
        '9TT' => 'E02000780',
        '9TU' => 'E02006800',
        '9TW' => 'E02000781',
        '9TX' => 'E02006800',
        '9TY' => 'E02006800',
        '9TZ' => 'E02000780',
        '9UA' => 'E02000780',
        '9UB' => 'E02006800',
        '9UD' => 'E02006800',
        '9UE' => 'E02000780',
        '9UF' => 'E02006800',
        '9UG' => 'E02000780',
        '9UH' => 'E02000772',
        '9UJ' => 'E02000772',
        '9UL' => 'E02000780',
        '9UN' => 'E02000772',
        '9UQ' => 'E02000772',
        '9UR' => 'E02000772',
        '9UT' => 'E02006800',
        '9UU' => 'E02006800',
        '9UZ' => 'E02006800',
        '9WA' => 'E02000780',
        '9WB' => 'E02000780',
        '9WD' => 'E02006800',
        '9WE' => 'E02000780',
        '9WF' => 'E02000780',
        '9WG' => 'E02000780',
        '9WH' => 'E02006800',
        '9WJ' => 'E02000780',
        '9WL' => 'E02000780',
        '9WN' => 'E02000780',
        '9WP' => 'E02000780',
        '9WQ' => 'E02000780',
        '9WS' => 'E02006800',
        '9WT' => 'E02000780',
        '9WU' => 'E02006800',
        '9WW' => 'E02006800',
        '9WX' => 'E02006800',
        '9WY' => 'E02000780',
        '9WZ' => 'E02000780',
        '9XA' => 'E02006800',
        '9XB' => 'E02006800',
        '9XD' => 'E02006800',
        '9XE' => 'E02006800',
        '9XF' => 'E02006800',
        '9XG' => 'E02006800',
        '9XH' => 'E02006800',
        '9XJ' => 'E02006800',
        '9XL' => 'E02006800',
        '9XN' => 'E02000780',
        '9XP' => 'E02000780',
        '9XQ' => 'E02006800',
        '9XR' => 'E02000780',
        '9XS' => 'E02000780',
        '9XT' => 'E02000780',
        '9XU' => 'E02000780',
        '9XW' => 'E02006800',
        '9XX' => 'E02000780',
        '9XY' => 'E02000781',
        '9XZ' => 'E02000781',
        '9YA' => 'E02000781',
        '9YB' => 'E02000781',
        '9YD' => 'E02000781',
        '9YE' => 'E02000780',
        '9YF' => 'E02000780',
        '9YG' => 'E02000780',
        '9YH' => 'E02000780',
        '9YJ' => 'E02000780',
        '9YL' => 'E02000780',
        '9YN' => 'E02000780',
        '9YP' => 'E02000780',
        '9YQ' => 'E02000780',
        '9YR' => 'E02000780',
        '9YT' => 'E02000780',
        '9YW' => 'E02000780',
        '9YX' => 'E02000780',
        '9YY' => 'E02000781',
        '9YZ' => 'E02000780',
        '9ZA' => 'E02000780',
        '9ZQ' => 'E02000780',
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
