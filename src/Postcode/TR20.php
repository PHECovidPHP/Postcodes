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
final class TR20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02003947',
        '8AB' => 'E02003947',
        '8AD' => 'E02003947',
        '8AE' => 'E02003947',
        '8AF' => 'E02003947',
        '8AG' => 'E02003947',
        '8AH' => 'E02003947',
        '8AJ' => 'E02003945',
        '8AL' => 'E02003947',
        '8AN' => 'E02003945',
        '8AP' => 'E02003945',
        '8AQ' => 'E02003947',
        '8AR' => 'E02003945',
        '8AS' => 'E02003947',
        '8AT' => 'E02003945',
        '8AU' => 'E02003945',
        '8AW' => 'E02003945',
        '8AX' => 'E02003945',
        '8AY' => 'E02003945',
        '8AZ' => 'E02003945',
        '8BA' => 'E02003949',
        '8BB' => 'E02003945',
        '8BD' => 'E02003945',
        '8BE' => 'E02003945',
        '8BG' => 'E02003945',
        '8BH' => 'E02003947',
        '8BL' => 'E02003945',
        '8BN' => 'E02003945',
        '8BP' => 'E02003945',
        '8BQ' => 'E02003945',
        '8BS' => 'E02003945',
        '8BT' => 'E02003945',
        '8BU' => 'E02003945',
        '8BW' => 'E02003945',
        '8BX' => 'E02003945',
        '8BY' => 'E02003947',
        '8BZ' => 'E02003945',
        '8DA' => 'E02003945',
        '8DB' => 'E02003945',
        '8DD' => 'E02003945',
        '8DF' => 'E02003947',
        '8DG' => 'E02003945',
        '8DH' => 'E02003945',
        '8DJ' => 'E02003945',
        '8DL' => 'E02003945',
        '8DN' => 'E02003945',
        '8DP' => 'E02003947',
        '8DQ' => 'E02003945',
        '8DR' => 'E02003947',
        '8DS' => 'E02003947',
        '8DT' => 'E02003947',
        '8DU' => 'E02003947',
        '8DW' => 'E02003945',
        '8DX' => 'E02003947',
        '8DY' => 'E02003947',
        '8DZ' => 'E02003947',
        '8EA' => 'E02003947',
        '8EB' => 'E02003947',
        '8ED' => 'E02003947',
        '8EE' => 'E02003947',
        '8EF' => 'E02003947',
        '8EG' => 'E02003945',
        '8EH' => 'E02003947',
        '8EJ' => 'E02003947',
        '8EL' => 'E02003947',
        '8EN' => 'E02003947',
        '8EP' => 'E02003947',
        '8EQ' => 'E02003947',
        '8ER' => 'E02003947',
        '8ES' => 'E02003947',
        '8ET' => 'E02003947',
        '8EU' => 'E02003947',
        '8EW' => 'E02003947',
        '8EX' => 'E02003947',
        '8EY' => 'E02003947',
        '8EZ' => 'E02003947',
        '8FA' => 'E02003947',
        '8FB' => 'E02003948',
        '8FE' => 'E02003947',
        '8FF' => 'E02003947',
        '8FG' => 'E02003947',
        '8FH' => 'E02003947',
        '8FJ' => 'E02003945',
        '8FR' => 'E02003951',
        '8FS' => 'E02003947',
        '8HA' => 'E02003947',
        '8HB' => 'E02003947',
        '8HD' => 'E02003945',
        '8HE' => 'E02003947',
        '8HF' => 'E02003947',
        '8HG' => 'E02003947',
        '8HH' => 'E02003945',
        '8HL' => 'E02003947',
        '8HN' => 'E02003947',
        '8HP' => 'E02003947',
        '8HQ' => 'E02003947',
        '8HR' => 'E02003947',
        '8HS' => 'E02003947',
        '8HT' => 'E02003947',
        '8HU' => 'E02003947',
        '8HW' => 'E02003947',
        '8HX' => 'E02003947',
        '8HY' => 'E02003947',
        '8HZ' => 'E02003947',
        '8JA' => 'E02003947',
        '8JB' => 'E02003947',
        '8JD' => 'E02003947',
        '8JE' => 'E02003947',
        '8JF' => 'E02003947',
        '8JG' => 'E02003947',
        '8JH' => 'E02003947',
        '8JJ' => 'E02003947',
        '8JL' => 'E02003947',
        '8JN' => 'E02003947',
        '8JP' => 'E02003947',
        '8JQ' => 'E02003947',
        '8JR' => 'E02003947',
        '8JS' => 'E02003947',
        '8JT' => 'E02003947',
        '8JU' => 'E02003947',
        '8JW' => 'E02003947',
        '8JX' => 'E02003947',
        '8JY' => 'E02003947',
        '8JZ' => 'E02003947',
        '8LA' => 'E02003947',
        '8LD' => 'E02003947',
        '8LH' => 'E02003945',
        '8LJ' => 'E02003945',
        '8LL' => 'E02003945',
        '8LN' => 'E02003945',
        '8LP' => 'E02003945',
        '8LQ' => 'E02003945',
        '8LR' => 'E02003945',
        '8LS' => 'E02003945',
        '8LW' => 'E02003945',
        '8LX' => 'E02003945',
        '8LY' => 'E02003947',
        '8NA' => 'E02003945',
        '8NB' => 'E02003945',
        '8ND' => 'E02003945',
        '8NE' => 'E02003945',
        '8NF' => 'E02003945',
        '8NG' => 'E02003945',
        '8NH' => 'E02003945',
        '8NN' => 'E02003947',
        '8NP' => 'E02003947',
        '8NQ' => 'E02003945',
        '8NR' => 'E02003947',
        '8NS' => 'E02003947',
        '8NT' => 'E02003947',
        '8NU' => 'E02003947',
        '8NW' => 'E02003947',
        '8NX' => 'E02003947',
        '8NY' => 'E02003947',
        '8NZ' => 'E02003947',
        '8PA' => 'E02003947',
        '8PB' => 'E02003947',
        '8PD' => 'E02003947',
        '8PE' => 'E02003947',
        '8PH' => 'E02003947',
        '8PJ' => 'E02003947',
        '8PL' => 'E02003947',
        '8PN' => 'E02003947',
        '8PP' => 'E02003947',
        '8PR' => 'E02003947',
        '8PS' => 'E02003947',
        '8PT' => 'E02003950',
        '8PU' => 'E02003950',
        '8PW' => 'E02003947',
        '8PX' => 'E02003947',
        '8PY' => 'E02003947',
        '8QA' => 'E02003947',
        '8QB' => 'E02003947',
        '8QD' => 'E02003947',
        '8QE' => 'E02003947',
        '8QH' => 'E02003947',
        '8QJ' => 'E02003947',
        '8QL' => 'E02003947',
        '8QN' => 'E02003947',
        '8QP' => 'E02003947',
        '8QR' => 'E02003947',
        '8QS' => 'E02003947',
        '8QT' => 'E02003947',
        '8QU' => 'E02003947',
        '8QW' => 'E02003947',
        '8QX' => 'E02003947',
        '8QY' => 'E02003947',
        '8QZ' => 'E02003947',
        '8RA' => 'E02003947',
        '8RB' => 'E02003947',
        '8RD' => 'E02003947',
        '8RE' => 'E02003947',
        '8RF' => 'E02003947',
        '8RG' => 'E02003947',
        '8RH' => 'E02003947',
        '8RJ' => 'E02003947',
        '8RL' => 'E02003947',
        '8RN' => 'E02003947',
        '8RP' => 'E02003947',
        '8RQ' => 'E02003947',
        '8RS' => 'E02003947',
        '8RT' => 'E02003947',
        '8RU' => 'E02003947',
        '8RW' => 'E02003947',
        '8RX' => 'E02003948',
        '8RY' => 'E02003948',
        '8RZ' => 'E02003947',
        '8SA' => 'E02003947',
        '8SB' => 'E02003947',
        '8SD' => 'E02003947',
        '8SE' => 'E02003947',
        '8SF' => 'E02003947',
        '8SG' => 'E02003947',
        '8SH' => 'E02003947',
        '8SJ' => 'E02003947',
        '8SL' => 'E02003947',
        '8SN' => 'E02003947',
        '8SP' => 'E02003947',
        '8SQ' => 'E02003947',
        '8SR' => 'E02003947',
        '8SS' => 'E02003947',
        '8ST' => 'E02003947',
        '8SU' => 'E02003947',
        '8SW' => 'E02003947',
        '8SX' => 'E02003947',
        '8SY' => 'E02003947',
        '8SZ' => 'E02003947',
        '8TA' => 'E02003947',
        '8TB' => 'E02003951',
        '8TD' => 'E02003948',
        '8TE' => 'E02003948',
        '8TF' => 'E02003948',
        '8TG' => 'E02003948',
        '8TH' => 'E02003951',
        '8TJ' => 'E02003951',
        '8TL' => 'E02003951',
        '8TN' => 'E02003951',
        '8TP' => 'E02003948',
        '8TQ' => 'E02003948',
        '8TR' => 'E02003947',
        '8TS' => 'E02003947',
        '8TT' => 'E02003947',
        '8TU' => 'E02003947',
        '8TW' => 'E02003951',
        '8TX' => 'E02003947',
        '8TY' => 'E02003947',
        '8TZ' => 'E02003947',
        '8UA' => 'E02003947',
        '8UB' => 'E02003947',
        '8UD' => 'E02003947',
        '8UE' => 'E02003947',
        '8UF' => 'E02003948',
        '8UG' => 'E02003947',
        '8UH' => 'E02003948',
        '8UJ' => 'E02003947',
        '8UL' => 'E02003948',
        '8UN' => 'E02003947',
        '8UP' => 'E02003948',
        '8UQ' => 'E02003948',
        '8UR' => 'E02003947',
        '8UT' => 'E02003947',
        '8UU' => 'E02003947',
        '8UW' => 'E02003948',
        '8UX' => 'E02003947',
        '8UY' => 'E02003947',
        '8UZ' => 'E02003945',
        '8WN' => 'E02003949',
        '8WQ' => 'E02003947',
        '8WU' => 'E02003949',
        '8WW' => 'E02003949',
        '8WX' => 'E02003949',
        '8WY' => 'E02003949',
        '8WZ' => 'E02003949',
        '8XA' => 'E02003947',
        '8XB' => 'E02003947',
        '8XD' => 'E02003947',
        '8XE' => 'E02003947',
        '8XF' => 'E02003949',
        '8XG' => 'E02003947',
        '8XH' => 'E02003949',
        '8XJ' => 'E02003947',
        '8XL' => 'E02003947',
        '8XN' => 'E02003947',
        '8XP' => 'E02003947',
        '8XQ' => 'E02003945',
        '8XR' => 'E02003947',
        '8XS' => 'E02003947',
        '8XT' => 'E02003947',
        '8XU' => 'E02003947',
        '8XW' => 'E02003947',
        '8XX' => 'E02003947',
        '8XY' => 'E02003947',
        '8XZ' => 'E02003947',
        '8YA' => 'E02003947',
        '8YB' => 'E02003947',
        '8YD' => 'E02003949',
        '8YE' => 'E02003947',
        '8YF' => 'E02003947',
        '8YG' => 'E02003947',
        '8YH' => 'E02003947',
        '8YJ' => 'E02003947',
        '8YL' => 'E02003947',
        '8YN' => 'E02003947',
        '8YP' => 'E02003948',
        '8YQ' => 'E02003947',
        '8YR' => 'E02003947',
        '8YS' => 'E02003947',
        '8YT' => 'E02003947',
        '8YU' => 'E02003947',
        '8YW' => 'E02003947',
        '8YX' => 'E02003947',
        '8YY' => 'E02003947',
        '8YZ' => 'E02003947',
        '8ZA' => 'E02003947',
        '8ZB' => 'E02003949',
        '8ZD' => 'E02003949',
        '8ZE' => 'E02003949',
        '8ZF' => 'E02003947',
        '8ZG' => 'E02003947',
        '8ZH' => 'E02003949',
        '8ZJ' => 'E02003947',
        '8ZL' => 'E02003947',
        '8ZN' => 'E02003949',
        '8ZP' => 'E02003949',
        '8ZQ' => 'E02003947',
        '8ZR' => 'E02003947',
        '8ZS' => 'E02003947',
        '8ZT' => 'E02003949',
        '8ZW' => 'E02003949',
        '8ZX' => 'E02003949',
        '9AA' => 'E02003929',
        '9AB' => 'E02003929',
        '9AD' => 'E02003929',
        '9AE' => 'E02003929',
        '9AF' => 'E02003929',
        '9AG' => 'E02003929',
        '9AH' => 'E02003929',
        '9AJ' => 'E02003946',
        '9AL' => 'E02003946',
        '9AN' => 'E02003946',
        '9AP' => 'E02003929',
        '9AQ' => 'E02003929',
        '9AR' => 'E02003929',
        '9AS' => 'E02003929',
        '9AT' => 'E02003929',
        '9AU' => 'E02003929',
        '9AW' => 'E02003929',
        '9AX' => 'E02003946',
        '9AY' => 'E02003946',
        '9AZ' => 'E02003945',
        '9BA' => 'E02003946',
        '9BB' => 'E02003929',
        '9BD' => 'E02003946',
        '9BE' => 'E02003946',
        '9BH' => 'E02003946',
        '9BJ' => 'E02003947',
        '9BL' => 'E02003945',
        '9BN' => 'E02003945',
        '9BP' => 'E02003945',
        '9BQ' => 'E02003947',
        '9BS' => 'E02003946',
        '9BT' => 'E02003946',
        '9BU' => 'E02003946',
        '9BW' => 'E02003945',
        '9BX' => 'E02003945',
        '9BY' => 'E02003946',
        '9BZ' => 'E02003946',
        '9DA' => 'E02003946',
        '9DB' => 'E02003946',
        '9DD' => 'E02003946',
        '9DE' => 'E02003946',
        '9DF' => 'E02003946',
        '9DG' => 'E02003946',
        '9DH' => 'E02003946',
        '9DJ' => 'E02003946',
        '9DL' => 'E02003946',
        '9DN' => 'E02003946',
        '9DP' => 'E02003947',
        '9DQ' => 'E02003946',
        '9DR' => 'E02003946',
        '9DS' => 'E02003946',
        '9DT' => 'E02003946',
        '9DU' => 'E02003946',
        '9DX' => 'E02003946',
        '9DY' => 'E02003946',
        '9DZ' => 'E02003946',
        '9EA' => 'E02003946',
        '9EE' => 'E02003946',
        '9EF' => 'E02003946',
        '9EG' => 'E02003946',
        '9EH' => 'E02003946',
        '9EJ' => 'E02003946',
        '9EL' => 'E02003946',
        '9EN' => 'E02003946',
        '9EP' => 'E02003946',
        '9EQ' => 'E02003946',
        '9ER' => 'E02003946',
        '9EW' => 'E02003946',
        '9EY' => 'E02003946',
        '9EZ' => 'E02003946',
        '9HA' => 'E02003946',
        '9HB' => 'E02003946',
        '9HD' => 'E02003946',
        '9HE' => 'E02003946',
        '9HF' => 'E02003946',
        '9HG' => 'E02003946',
        '9HH' => 'E02003946',
        '9HJ' => 'E02003946',
        '9HL' => 'E02003946',
        '9HN' => 'E02003946',
        '9HP' => 'E02003946',
        '9HQ' => 'E02003946',
        '9HR' => 'E02003946',
        '9HS' => 'E02003946',
        '9HT' => 'E02003946',
        '9HU' => 'E02003946',
        '9HW' => 'E02003946',
        '9HX' => 'E02003946',
        '9HY' => 'E02003946',
        '9HZ' => 'E02003946',
        '9JA' => 'E02003946',
        '9JB' => 'E02003946',
        '9JD' => 'E02003926',
        '9JE' => 'E02003929',
        '9JF' => 'E02003926',
        '9JG' => 'E02003946',
        '9JH' => 'E02003946',
        '9JJ' => 'E02003946',
        '9JL' => 'E02003946',
        '9JN' => 'E02003946',
        '9JP' => 'E02003946',
        '9JQ' => 'E02003946',
        '9JR' => 'E02003946',
        '9JS' => 'E02003946',
        '9JT' => 'E02003946',
        '9JU' => 'E02003946',
        '9JW' => 'E02003946',
        '9JX' => 'E02003946',
        '9JY' => 'E02003946',
        '9JZ' => 'E02003946',
        '9LA' => 'E02003946',
        '9LB' => 'E02003946',
        '9LD' => 'E02003946',
        '9LE' => 'E02003946',
        '9LF' => 'E02003946',
        '9LG' => 'E02003946',
        '9LH' => 'E02003946',
        '9LJ' => 'E02003946',
        '9LL' => 'E02003946',
        '9LN' => 'E02003946',
        '9LP' => 'E02003946',
        '9LQ' => 'E02003946',
        '9LR' => 'E02003946',
        '9LS' => 'E02003946',
        '9LT' => 'E02003946',
        '9LU' => 'E02003946',
        '9LW' => 'E02003946',
        '9LX' => 'E02003946',
        '9LY' => 'E02003946',
        '9LZ' => 'E02003946',
        '9NA' => 'E02003946',
        '9NB' => 'E02003946',
        '9ND' => 'E02003946',
        '9NE' => 'E02003946',
        '9NF' => 'E02003946',
        '9NG' => 'E02003946',
        '9NH' => 'E02003946',
        '9NJ' => 'E02003946',
        '9NN' => 'E02003946',
        '9NP' => 'E02003946',
        '9NQ' => 'E02003946',
        '9NR' => 'E02003946',
        '9NW' => 'E02003946',
        '9NY' => 'E02003946',
        '9NZ' => 'E02003946',
        '9PA' => 'E02003946',
        '9PB' => 'E02003946',
        '9PD' => 'E02003946',
        '9PE' => 'E02003946',
        '9PF' => 'E02003946',
        '9PG' => 'E02003946',
        '9PH' => 'E02003946',
        '9PJ' => 'E02003946',
        '9PL' => 'E02003946',
        '9PN' => 'E02003946',
        '9PP' => 'E02003946',
        '9PR' => 'E02003946',
        '9PS' => 'E02003946',
        '9PT' => 'E02003946',
        '9PU' => 'E02003946',
        '9PW' => 'E02003946',
        '9PX' => 'E02003946',
        '9QA' => 'E02003946',
        '9QB' => 'E02003946',
        '9QD' => 'E02003946',
        '9QE' => 'E02003946',
        '9QF' => 'E02003946',
        '9QG' => 'E02003946',
        '9QL' => 'E02003929',
        '9QN' => 'E02003929',
        '9QQ' => 'E02003929',
        '9QT' => 'E02003929',
        '9QU' => 'E02003929',
        '9QX' => 'E02003929',
        '9QY' => 'E02003929',
        '9QZ' => 'E02003929',
        '9RA' => 'E02003929',
        '9RB' => 'E02003929',
        '9RD' => 'E02003929',
        '9RE' => 'E02003929',
        '9RF' => 'E02003929',
        '9RG' => 'E02003929',
        '9RH' => 'E02003929',
        '9RJ' => 'E02003929',
        '9RL' => 'E02003929',
        '9RN' => 'E02003926',
        '9RQ' => 'E02003929',
        '9RS' => 'E02003926',
        '9RT' => 'E02003926',
        '9RU' => 'E02003926',
        '9RW' => 'E02003926',
        '9RX' => 'E02003926',
        '9RY' => 'E02003929',
        '9RZ' => 'E02003929',
        '9SA' => 'E02003929',
        '9SB' => 'E02003929',
        '9SH' => 'E02003929',
        '9SJ' => 'E02003929',
        '9SL' => 'E02003929',
        '9SN' => 'E02003929',
        '9SP' => 'E02003929',
        '9SQ' => 'E02003929',
        '9SR' => 'E02003929',
        '9SS' => 'E02003929',
        '9ST' => 'E02003929',
        '9SU' => 'E02003929',
        '9SW' => 'E02003929',
        '9SX' => 'E02003929',
        '9SY' => 'E02003929',
        '9TA' => 'E02003929',
        '9TB' => 'E02003929',
        '9TD' => 'E02003929',
        '9TE' => 'E02003929',
        '9TF' => 'E02003929',
        '9TG' => 'E02003929',
        '9TH' => 'E02003929',
        '9TL' => 'E02003929',
        '9TP' => 'E02003929',
        '9TQ' => 'E02003929',
        '9TT' => 'E02003947',
        '9TX' => 'E02003929',
        '9WA' => 'E02003929',
        '9WB' => 'E02003949',
        '9WD' => 'E02003949',
        '9XZ' => 'E02003949',
        '9YA' => 'E02003946',
        '9YB' => 'E02003949',
        '9YD' => 'E02003946',
        '9YE' => 'E02003949',
        '9YF' => 'E02003949',
        '9YG' => 'E02003946',
        '9YH' => 'E02003949',
        '9YJ' => 'E02003929',
        '9YL' => 'E02003949',
        '9YN' => 'E02003949',
        '9YP' => 'E02003949',
        '9ZJ' => 'E02003949',
        '9ZQ' => 'E02003949',
        '9ZX' => 'E02003949',
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