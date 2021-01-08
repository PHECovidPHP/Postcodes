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
final class WD25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004969',
        '0AB' => 'E02004969',
        '0AD' => 'E02004969',
        '0AE' => 'E02004969',
        '0AF' => 'E02004969',
        '0AG' => 'E02004971',
        '0AH' => 'E02004969',
        '0AJ' => 'E02004969',
        '0AL' => 'E02004969',
        '0AN' => 'E02004969',
        '0AP' => 'E02004969',
        '0AQ' => 'E02004971',
        '0AR' => 'E02004969',
        '0AS' => 'E02004969',
        '0AT' => 'E02004969',
        '0AU' => 'E02004969',
        '0AW' => 'E02004969',
        '0AX' => 'E02004969',
        '0AY' => 'E02004969',
        '0AZ' => 'E02004969',
        '0BA' => 'E02004978',
        '0BB' => 'E02004969',
        '0BD' => 'E02004969',
        '0BE' => 'E02004957',
        '0BF' => 'E02004957',
        '0BG' => 'E02004957',
        '0BH' => 'E02004969',
        '0BJ' => 'E02004957',
        '0BL' => 'E02004969',
        '0BN' => 'E02004957',
        '0BP' => 'E02004969',
        '0BS' => 'E02004969',
        '0BT' => 'E02004969',
        '0BU' => 'E02004969',
        '0BW' => 'E02004969',
        '0BX' => 'E02004969',
        '0BY' => 'E02004969',
        '0BZ' => 'E02004969',
        '0DA' => 'E02004969',
        '0DB' => 'E02004969',
        '0DD' => 'E02004969',
        '0DE' => 'E02004969',
        '0DF' => 'E02004969',
        '0DG' => 'E02004969',
        '0DH' => 'E02004969',
        '0DJ' => 'E02004969',
        '0DL' => 'E02004969',
        '0DN' => 'E02004969',
        '0DP' => 'E02004969',
        '0DQ' => 'E02004969',
        '0DR' => 'E02004969',
        '0DS' => 'E02004969',
        '0DT' => 'E02004969',
        '0DU' => 'E02004969',
        '0DW' => 'E02004969',
        '0DX' => 'E02004969',
        '0DY' => 'E02004969',
        '0DZ' => 'E02004969',
        '0EA' => 'E02004969',
        '0EB' => 'E02004969',
        '0ED' => 'E02004969',
        '0EE' => 'E02004969',
        '0EF' => 'E02004969',
        '0EH' => 'E02004969',
        '0EJ' => 'E02004969',
        '0EL' => 'E02004969',
        '0EN' => 'E02004969',
        '0EP' => 'E02004969',
        '0EQ' => 'E02004969',
        '0ES' => 'E02004969',
        '0ET' => 'E02004969',
        '0EU' => 'E02004969',
        '0EW' => 'E02004969',
        '0EX' => 'E02004969',
        '0EY' => 'E02004969',
        '0EZ' => 'E02004969',
        '0FD' => 'E02004969',
        '0FP' => 'E02004978',
        '0GB' => 'E02004957',
        '0GD' => 'E02004957',
        '0GJ' => 'E02004957',
        '0GL' => 'E02004957',
        '0GN' => 'E02004943',
        '0GP' => 'E02004957',
        '0GR' => 'E02004943',
        '0GW' => 'E02004957',
        '0HA' => 'E02004969',
        '0HB' => 'E02004969',
        '0HE' => 'E02004969',
        '0HF' => 'E02004969',
        '0HG' => 'E02004969',
        '0HH' => 'E02004969',
        '0HJ' => 'E02004969',
        '0HL' => 'E02004969',
        '0HN' => 'E02004969',
        '0HP' => 'E02004969',
        '0HQ' => 'E02004969',
        '0HR' => 'E02004969',
        '0HS' => 'E02004969',
        '0HT' => 'E02004969',
        '0HU' => 'E02004969',
        '0HW' => 'E02004969',
        '0HX' => 'E02004969',
        '0HY' => 'E02004969',
        '0HZ' => 'E02004969',
        '0JA' => 'E02004969',
        '0JB' => 'E02004969',
        '0JD' => 'E02004957',
        '0JE' => 'E02004969',
        '0JF' => 'E02004969',
        '0JG' => 'E02004969',
        '0JH' => 'E02004969',
        '0JJ' => 'E02004969',
        '0JL' => 'E02004957',
        '0JN' => 'E02004957',
        '0JP' => 'E02004969',
        '0JQ' => 'E02004969',
        '0JR' => 'E02004969',
        '0JS' => 'E02004957',
        '0JT' => 'E02004957',
        '0JU' => 'E02004957',
        '0JW' => 'E02004957',
        '0JX' => 'E02004957',
        '0JY' => 'E02004957',
        '0JZ' => 'E02004957',
        '0LA' => 'E02004957',
        '0LB' => 'E02004957',
        '0LD' => 'E02004969',
        '0LE' => 'E02004969',
        '0LF' => 'E02004969',
        '0LG' => 'E02004957',
        '0LH' => 'E02004969',
        '0LJ' => 'E02004957',
        '0LL' => 'E02004968',
        '0LN' => 'E02004968',
        '0LP' => 'E02004968',
        '0LQ' => 'E02004969',
        '0LR' => 'E02004968',
        '0LS' => 'E02004968',
        '0LT' => 'E02004968',
        '0LU' => 'E02004968',
        '0LW' => 'E02004968',
        '0LY' => 'E02004968',
        '0LZ' => 'E02004968',
        '0NA' => 'E02004968',
        '0NB' => 'E02004968',
        '0ND' => 'E02004969',
        '0NE' => 'E02004969',
        '0NF' => 'E02004968',
        '0NG' => 'E02004968',
        '0NH' => 'E02004969',
        '0NJ' => 'E02004968',
        '0NL' => 'E02004969',
        '0NP' => 'E02004968',
        '0NQ' => 'E02004968',
        '0NZ' => 'E02004969',
        '0PR' => 'E02004957',
        '0RA' => 'E02004978',
        '0RB' => 'E02004969',
        '0RH' => 'E02004969',
        '0RJ' => 'E02004969',
        '0RN' => 'E02004968',
        '0RP' => 'E02004968',
        '0RQ' => 'E02004969',
        '0RR' => 'E02004969',
        '0RS' => 'E02004969',
        '0RT' => 'E02004969',
        '0RU' => 'E02004969',
        '0RW' => 'E02004969',
        '0RX' => 'E02004969',
        '0RY' => 'E02004969',
        '0SD' => 'E02004969',
        '0SS' => 'E02004957',
        '0TA' => 'E02004968',
        '0TB' => 'E02004969',
        '0TN' => 'E02004978',
        '0TT' => 'E02004968',
        '0TU' => 'E02004968',
        '0TX' => 'E02004968',
        '0UU' => 'E02004957',
        '0WA' => 'E02004978',
        '0WG' => 'E02004978',
        '0WH' => 'E02004957',
        '0XA' => 'E02004978',
        '0XJ' => 'E02004978',
        '0XN' => 'E02004978',
        '0XQ' => 'E02004978',
        '0XR' => 'E02004978',
        '0XS' => 'E02004978',
        '0XZ' => 'E02004978',
        '0YD' => 'E02004978',
        '0YJ' => 'E02004978',
        '0YT' => 'E02004978',
        '0YX' => 'E02004978',
        '0YZ' => 'E02004978',
        '0ZA' => 'E02004978',
        '0ZB' => 'E02004978',
        '0ZH' => 'E02004978',
        '0ZJ' => 'E02004978',
        '0ZL' => 'E02004978',
        '0ZN' => 'E02004978',
        '0ZP' => 'E02004968',
        '0ZQ' => 'E02004978',
        '0ZR' => 'E02004968',
        '0ZU' => 'E02004978',
        '0ZW' => 'E02004978',
        '0ZX' => 'E02004978',
        '0ZY' => 'E02004978',
        '7AA' => 'E02004968',
        '7AB' => 'E02004968',
        '7AD' => 'E02004968',
        '7AE' => 'E02004968',
        '7AF' => 'E02004968',
        '7AG' => 'E02004968',
        '7AH' => 'E02004968',
        '7AJ' => 'E02004968',
        '7AL' => 'E02004968',
        '7AN' => 'E02004968',
        '7AP' => 'E02004968',
        '7AQ' => 'E02004968',
        '7AR' => 'E02004968',
        '7AS' => 'E02004968',
        '7AT' => 'E02004968',
        '7AU' => 'E02004968',
        '7AW' => 'E02004968',
        '7AX' => 'E02004968',
        '7AY' => 'E02004957',
        '7AZ' => 'E02004957',
        '7BA' => 'E02004957',
        '7BB' => 'E02004968',
        '7BD' => 'E02004968',
        '7BE' => 'E02004968',
        '7BF' => 'E02004968',
        '7BG' => 'E02004968',
        '7BH' => 'E02004968',
        '7BJ' => 'E02004968',
        '7BL' => 'E02004968',
        '7BN' => 'E02004968',
        '7BP' => 'E02004968',
        '7BQ' => 'E02004968',
        '7BS' => 'E02004978',
        '7BT' => 'E02004968',
        '7BU' => 'E02004968',
        '7BW' => 'E02004978',
        '7BX' => 'E02004957',
        '7BY' => 'E02004968',
        '7BZ' => 'E02004968',
        '7DA' => 'E02004968',
        '7DB' => 'E02004968',
        '7DD' => 'E02004968',
        '7DE' => 'E02004968',
        '7DF' => 'E02004968',
        '7DG' => 'E02004968',
        '7DH' => 'E02004968',
        '7DJ' => 'E02004968',
        '7DL' => 'E02004968',
        '7DN' => 'E02004968',
        '7DP' => 'E02004968',
        '7DQ' => 'E02004968',
        '7DR' => 'E02004968',
        '7DS' => 'E02004968',
        '7DT' => 'E02004968',
        '7DU' => 'E02004968',
        '7DW' => 'E02004968',
        '7DX' => 'E02004968',
        '7DY' => 'E02004957',
        '7DZ' => 'E02004968',
        '7EA' => 'E02004968',
        '7EB' => 'E02004968',
        '7ED' => 'E02004957',
        '7EE' => 'E02004968',
        '7EF' => 'E02004957',
        '7EG' => 'E02004968',
        '7EH' => 'E02004968',
        '7EJ' => 'E02004968',
        '7EL' => 'E02004968',
        '7EN' => 'E02004968',
        '7EP' => 'E02004968',
        '7EQ' => 'E02004968',
        '7ER' => 'E02004968',
        '7ES' => 'E02004968',
        '7ET' => 'E02004968',
        '7EU' => 'E02004968',
        '7EW' => 'E02004968',
        '7EX' => 'E02004968',
        '7EY' => 'E02004968',
        '7EZ' => 'E02004968',
        '7FA' => 'E02004968',
        '7FB' => 'E02004968',
        '7FD' => 'E02004968',
        '7FE' => 'E02004968',
        '7FF' => 'E02004968',
        '7FG' => 'E02004968',
        '7FL' => 'E02004968',
        '7GA' => 'E02004957',
        '7GB' => 'E02004957',
        '7GD' => 'E02004957',
        '7GE' => 'E02004957',
        '7GF' => 'E02004957',
        '7GG' => 'E02004957',
        '7GH' => 'E02004957',
        '7GJ' => 'E02004957',
        '7GL' => 'E02004957',
        '7GN' => 'E02004957',
        '7GP' => 'E02004957',
        '7GR' => 'E02004957',
        '7GS' => 'E02004957',
        '7GT' => 'E02004957',
        '7GU' => 'E02004957',
        '7HA' => 'E02004968',
        '7HB' => 'E02004968',
        '7HD' => 'E02004968',
        '7HE' => 'E02004968',
        '7HF' => 'E02004968',
        '7HG' => 'E02004968',
        '7HH' => 'E02004968',
        '7HJ' => 'E02004968',
        '7HL' => 'E02004968',
        '7HN' => 'E02004968',
        '7HP' => 'E02004957',
        '7HQ' => 'E02004968',
        '7HR' => 'E02004957',
        '7HS' => 'E02004968',
        '7HT' => 'E02004968',
        '7HU' => 'E02004968',
        '7HW' => 'E02004968',
        '7HX' => 'E02004968',
        '7HY' => 'E02004968',
        '7HZ' => 'E02004968',
        '7JA' => 'E02004968',
        '7JB' => 'E02004968',
        '7JD' => 'E02004968',
        '7JE' => 'E02004968',
        '7JF' => 'E02004968',
        '7JG' => 'E02004957',
        '7JH' => 'E02004968',
        '7JJ' => 'E02004968',
        '7JL' => 'E02004968',
        '7JN' => 'E02004968',
        '7JP' => 'E02004968',
        '7JQ' => 'E02004968',
        '7JW' => 'E02004968',
        '7JZ' => 'E02004968',
        '7LA' => 'E02004968',
        '7LJ' => 'E02004968',
        '7LL' => 'E02004968',
        '7LN' => 'E02004968',
        '7LP' => 'E02004957',
        '7LQ' => 'E02004978',
        '7LR' => 'E02004957',
        '7LS' => 'E02004957',
        '7LT' => 'E02004978',
        '7LU' => 'E02004968',
        '7LW' => 'E02004968',
        '7LX' => 'E02004978',
        '7LY' => 'E02004968',
        '7LZ' => 'E02004957',
        '7NA' => 'E02004957',
        '7NB' => 'E02004957',
        '7ND' => 'E02004957',
        '7NE' => 'E02004957',
        '7NF' => 'E02004957',
        '7NG' => 'E02004957',
        '7NH' => 'E02004968',
        '7NJ' => 'E02004968',
        '7NL' => 'E02004957',
        '7NN' => 'E02004957',
        '7NP' => 'E02004957',
        '7NQ' => 'E02004957',
        '7NW' => 'E02004968',
        '7NX' => 'E02004968',
        '7NY' => 'E02004968',
        '7PA' => 'E02004968',
        '7PE' => 'E02004968',
        '7PL' => 'E02004968',
        '7PQ' => 'E02004968',
        '7PT' => 'E02004978',
        '7QD' => 'E02004968',
        '7QE' => 'E02004968',
        '7QF' => 'E02004968',
        '7QG' => 'E02004968',
        '7QH' => 'E02004968',
        '7QJ' => 'E02004968',
        '7QL' => 'E02004968',
        '7QN' => 'E02004968',
        '7QP' => 'E02004968',
        '7QQ' => 'E02004968',
        '7QR' => 'E02004968',
        '7QS' => 'E02004968',
        '7QT' => 'E02004968',
        '7QU' => 'E02004968',
        '7QW' => 'E02004968',
        '7QX' => 'E02004968',
        '7QY' => 'E02004968',
        '7QZ' => 'E02004968',
        '7SA' => 'E02004957',
        '7SB' => 'E02004957',
        '7SD' => 'E02004957',
        '7SE' => 'E02004957',
        '7SL' => 'E02004968',
        '7SN' => 'E02004957',
        '7SP' => 'E02004957',
        '7SR' => 'E02004957',
        '7SS' => 'E02004968',
        '7ST' => 'E02004968',
        '7SU' => 'E02004957',
        '7SW' => 'E02004957',
        '7SX' => 'E02004957',
        '7TT' => 'E02004968',
        '7WZ' => 'E02004978',
        '7XA' => 'E02004978',
        '7XG' => 'E02004968',
        '7XJ' => 'E02004978',
        '7XN' => 'E02004978',
        '7XQ' => 'E02004978',
        '7XW' => 'E02004978',
        '7XZ' => 'E02004978',
        '7YX' => 'E02004978',
        '7ZA' => 'E02004978',
        '7ZB' => 'E02004978',
        '7ZE' => 'E02004968',
        '7ZF' => 'E02004968',
        '7ZH' => 'E02004978',
        '7ZJ' => 'E02004978',
        '7ZN' => 'E02004978',
        '7ZP' => 'E02004978',
        '7ZQ' => 'E02004978',
        '7ZR' => 'E02004978',
        '7ZS' => 'E02004978',
        '7ZT' => 'E02004978',
        '7ZU' => 'E02004978',
        '7ZW' => 'E02004968',
        '7ZX' => 'E02004978',
        '7ZY' => 'E02004978',
        '7ZZ' => 'E02004978',
        '8AA' => 'E02004905',
        '8AB' => 'E02004905',
        '8AD' => 'E02004903',
        '8AE' => 'E02004903',
        '8AF' => 'E02004903',
        '8AG' => 'E02004903',
        '8AH' => 'E02004903',
        '8AJ' => 'E02004903',
        '8AL' => 'E02004905',
        '8AN' => 'E02004905',
        '8AP' => 'E02004905',
        '8AQ' => 'E02004903',
        '8AR' => 'E02004905',
        '8AS' => 'E02004905',
        '8AT' => 'E02004905',
        '8AU' => 'E02004905',
        '8AW' => 'E02004905',
        '8AX' => 'E02004905',
        '8AY' => 'E02004905',
        '8AZ' => 'E02004905',
        '8BA' => 'E02004905',
        '8BB' => 'E02004905',
        '8BD' => 'E02004905',
        '8BE' => 'E02004905',
        '8BF' => 'E02004905',
        '8BG' => 'E02004905',
        '8BH' => 'E02004905',
        '8BJ' => 'E02004905',
        '8BL' => 'E02004905',
        '8BN' => 'E02004905',
        '8BP' => 'E02004905',
        '8BQ' => 'E02004905',
        '8BS' => 'E02004905',
        '8BT' => 'E02004905',
        '8BU' => 'E02004978',
        '8BW' => 'E02004905',
        '8BX' => 'E02004905',
        '8BY' => 'E02004905',
        '8BZ' => 'E02004905',
        '8DA' => 'E02004908',
        '8DB' => 'E02004908',
        '8DD' => 'E02004903',
        '8DE' => 'E02004905',
        '8DF' => 'E02004905',
        '8DG' => 'E02004905',
        '8DH' => 'E02004905',
        '8DJ' => 'E02004903',
        '8DL' => 'E02004903',
        '8DN' => 'E02004903',
        '8DP' => 'E02004903',
        '8DQ' => 'E02004978',
        '8DR' => 'E02004903',
        '8DS' => 'E02004905',
        '8DT' => 'E02004903',
        '8DU' => 'E02004905',
        '8DW' => 'E02004903',
        '8DX' => 'E02004905',
        '8DY' => 'E02004905',
        '8DZ' => 'E02004905',
        '8EA' => 'E02004905',
        '8EB' => 'E02004905',
        '8ED' => 'E02004905',
        '8EE' => 'E02004905',
        '8EF' => 'E02004905',
        '8EG' => 'E02004905',
        '8EH' => 'E02004905',
        '8EJ' => 'E02004905',
        '8EL' => 'E02004905',
        '8EN' => 'E02004905',
        '8EP' => 'E02004905',
        '8EQ' => 'E02004905',
        '8ER' => 'E02004905',
        '8ES' => 'E02004905',
        '8ET' => 'E02004905',
        '8EU' => 'E02004903',
        '8EW' => 'E02004905',
        '8EX' => 'E02004903',
        '8EY' => 'E02004903',
        '8EZ' => 'E02004905',
        '8FA' => 'E02004903',
        '8FB' => 'E02004903',
        '8FJ' => 'E02004903',
        '8GD' => 'E02004905',
        '8HA' => 'E02004903',
        '8HB' => 'E02004903',
        '8HD' => 'E02004903',
        '8HE' => 'E02004903',
        '8HF' => 'E02004903',
        '8HG' => 'E02004903',
        '8HH' => 'E02004903',
        '8HJ' => 'E02004903',
        '8HL' => 'E02004903',
        '8HN' => 'E02004903',
        '8HP' => 'E02004903',
        '8HQ' => 'E02004903',
        '8HR' => 'E02004903',
        '8HS' => 'E02004903',
        '8HT' => 'E02004903',
        '8HU' => 'E02004903',
        '8HW' => 'E02004903',
        '8JH' => 'E02004903',
        '8JJ' => 'E02004903',
        '8JL' => 'E02004903',
        '8JP' => 'E02004978',
        '8JS' => 'E02004903',
        '8JX' => 'E02004903',
        '8LF' => 'E02004903',
        '8LG' => 'E02004903',
        '8LN' => 'E02004978',
        '8NA' => 'E02004905',
        '8NH' => 'E02004905',
        '8NL' => 'E02004905',
        '8NN' => 'E02004905',
        '8NR' => 'E02004905',
        '8PE' => 'E02004903',
        '8PF' => 'E02004903',
        '8PG' => 'E02004903',
        '8PH' => 'E02004903',
        '8PX' => 'E02004905',
        '8PY' => 'E02004943',
        '8PZ' => 'E02004905',
        '8SH' => 'E02004905',
        '8WT' => 'E02004903',
        '8WW' => 'E02004903',
        '8XJ' => 'E02004903',
        '8ZD' => 'E02004903',
        '8ZE' => 'E02004978',
        '8ZH' => 'E02004978',
        '8ZJ' => 'E02004978',
        '8ZN' => 'E02004978',
        '8ZP' => 'E02004978',
        '8ZU' => 'E02004978',
        '8ZW' => 'E02004978',
        '8ZX' => 'E02004978',
        '8ZY' => 'E02004978',
        '8ZZ' => 'E02004978',
        '9AA' => 'E02004970',
        '9AB' => 'E02004970',
        '9AD' => 'E02004970',
        '9AE' => 'E02004970',
        '9AF' => 'E02004970',
        '9AG' => 'E02004970',
        '9AH' => 'E02004970',
        '9AJ' => 'E02004970',
        '9AL' => 'E02004905',
        '9AN' => 'E02004970',
        '9AP' => 'E02004905',
        '9AQ' => 'E02004905',
        '9AR' => 'E02004905',
        '9AS' => 'E02004970',
        '9AT' => 'E02004970',
        '9AU' => 'E02004970',
        '9AW' => 'E02004970',
        '9AX' => 'E02004970',
        '9AY' => 'E02004970',
        '9AZ' => 'E02004978',
        '9BA' => 'E02004943',
        '9BB' => 'E02004978',
        '9BD' => 'E02004957',
        '9BE' => 'E02004970',
        '9BF' => 'E02004970',
        '9BG' => 'E02004970',
        '9BH' => 'E02004970',
        '9BJ' => 'E02004969',
        '9BL' => 'E02004970',
        '9BN' => 'E02004970',
        '9BP' => 'E02004970',
        '9BQ' => 'E02004970',
        '9BS' => 'E02004957',
        '9BT' => 'E02004957',
        '9BU' => 'E02004957',
        '9BW' => 'E02004957',
        '9BX' => 'E02004957',
        '9BY' => 'E02004957',
        '9BZ' => 'E02004957',
        '9DA' => 'E02004957',
        '9DB' => 'E02004970',
        '9DD' => 'E02004970',
        '9DE' => 'E02004970',
        '9DF' => 'E02004970',
        '9DG' => 'E02004970',
        '9DH' => 'E02004970',
        '9DJ' => 'E02004970',
        '9DL' => 'E02004970',
        '9DN' => 'E02004970',
        '9DP' => 'E02004970',
        '9DQ' => 'E02004970',
        '9DR' => 'E02004970',
        '9DS' => 'E02004970',
        '9DT' => 'E02004970',
        '9DU' => 'E02004970',
        '9DW' => 'E02004970',
        '9DX' => 'E02004970',
        '9DY' => 'E02004970',
        '9DZ' => 'E02004970',
        '9EA' => 'E02004970',
        '9EB' => 'E02004970',
        '9EE' => 'E02004970',
        '9EJ' => 'E02004970',
        '9ET' => 'E02004970',
        '9EU' => 'E02004970',
        '9EX' => 'E02004970',
        '9EY' => 'E02004970',
        '9EZ' => 'E02004970',
        '9FE' => 'E02004969',
        '9FF' => 'E02004970',
        '9FG' => 'E02004970',
        '9FH' => 'E02004970',
        '9FJ' => 'E02004970',
        '9FL' => 'E02004970',
        '9FN' => 'E02004970',
        '9FQ' => 'E02004970',
        '9FS' => 'E02004970',
        '9GF' => 'E02004978',
        '9GP' => 'E02004970',
        '9JH' => 'E02004969',
        '9JJ' => 'E02004969',
        '9JL' => 'E02004969',
        '9JN' => 'E02004969',
        '9JQ' => 'E02004957',
        '9JR' => 'E02004968',
        '9JS' => 'E02004970',
        '9JT' => 'E02004969',
        '9JU' => 'E02004969',
        '9JW' => 'E02004969',
        '9JX' => 'E02004969',
        '9JY' => 'E02004969',
        '9JZ' => 'E02004969',
        '9LA' => 'E02004969',
        '9LB' => 'E02004969',
        '9LD' => 'E02004969',
        '9LG' => 'E02004969',
        '9LH' => 'E02004969',
        '9LQ' => 'E02004970',
        '9NA' => 'E02004943',
        '9NB' => 'E02004957',
        '9ND' => 'E02004957',
        '9NE' => 'E02004957',
        '9NF' => 'E02004957',
        '9NG' => 'E02004970',
        '9NH' => 'E02004943',
        '9NJ' => 'E02004943',
        '9NL' => 'E02004943',
        '9NN' => 'E02004970',
        '9NP' => 'E02004970',
        '9NQ' => 'E02004970',
        '9NR' => 'E02004970',
        '9NS' => 'E02004970',
        '9NT' => 'E02004970',
        '9NU' => 'E02004970',
        '9NW' => 'E02004970',
        '9NX' => 'E02004970',
        '9NY' => 'E02004970',
        '9NZ' => 'E02004970',
        '9PA' => 'E02004957',
        '9PB' => 'E02004957',
        '9PD' => 'E02004970',
        '9PE' => 'E02004957',
        '9PF' => 'E02004957',
        '9PG' => 'E02004970',
        '9PH' => 'E02004970',
        '9PJ' => 'E02004970',
        '9PL' => 'E02004970',
        '9PN' => 'E02004970',
        '9PP' => 'E02004970',
        '9PQ' => 'E02004970',
        '9PR' => 'E02004943',
        '9PS' => 'E02004970',
        '9PT' => 'E02004970',
        '9PU' => 'E02004970',
        '9PW' => 'E02004970',
        '9PX' => 'E02004970',
        '9PY' => 'E02004970',
        '9PZ' => 'E02004970',
        '9QA' => 'E02004970',
        '9QB' => 'E02004970',
        '9QD' => 'E02004970',
        '9QE' => 'E02004970',
        '9QF' => 'E02004970',
        '9QG' => 'E02004970',
        '9QH' => 'E02004970',
        '9QJ' => 'E02004970',
        '9QL' => 'E02004970',
        '9QN' => 'E02004970',
        '9QP' => 'E02004970',
        '9QQ' => 'E02004970',
        '9QR' => 'E02004970',
        '9QS' => 'E02004970',
        '9QT' => 'E02004970',
        '9QU' => 'E02004970',
        '9QW' => 'E02004970',
        '9QX' => 'E02004970',
        '9QY' => 'E02004970',
        '9QZ' => 'E02004970',
        '9RA' => 'E02004970',
        '9RB' => 'E02004970',
        '9RD' => 'E02004970',
        '9RE' => 'E02004970',
        '9RF' => 'E02004970',
        '9RG' => 'E02004970',
        '9RH' => 'E02004970',
        '9RJ' => 'E02004970',
        '9RL' => 'E02004970',
        '9RN' => 'E02004970',
        '9RP' => 'E02004970',
        '9RQ' => 'E02004970',
        '9RR' => 'E02004970',
        '9RS' => 'E02004970',
        '9RT' => 'E02004970',
        '9RU' => 'E02004970',
        '9RW' => 'E02004970',
        '9RX' => 'E02004970',
        '9SA' => 'E02004970',
        '9SB' => 'E02004970',
        '9SD' => 'E02004970',
        '9SG' => 'E02004970',
        '9SH' => 'E02004970',
        '9SJ' => 'E02004978',
        '9SL' => 'E02004970',
        '9SP' => 'E02004970',
        '9SR' => 'E02004970',
        '9SS' => 'E02004970',
        '9ST' => 'E02004970',
        '9SU' => 'E02004970',
        '9SW' => 'E02004970',
        '9SX' => 'E02004970',
        '9SY' => 'E02004970',
        '9SZ' => 'E02004970',
        '9TA' => 'E02004970',
        '9TD' => 'E02004970',
        '9TE' => 'E02004970',
        '9TF' => 'E02004970',
        '9TH' => 'E02004970',
        '9TJ' => 'E02004970',
        '9TL' => 'E02004970',
        '9TP' => 'E02004957',
        '9TQ' => 'E02004957',
        '9TR' => 'E02004957',
        '9TS' => 'E02004957',
        '9TT' => 'E02004957',
        '9TU' => 'E02004957',
        '9TW' => 'E02004957',
        '9TX' => 'E02004957',
        '9TY' => 'E02004957',
        '9UA' => 'E02004970',
        '9UB' => 'E02004970',
        '9UD' => 'E02004970',
        '9UE' => 'E02004970',
        '9UF' => 'E02004970',
        '9UG' => 'E02004970',
        '9UH' => 'E02004970',
        '9UJ' => 'E02004970',
        '9UL' => 'E02004970',
        '9UN' => 'E02004970',
        '9UP' => 'E02004970',
        '9UQ' => 'E02004970',
        '9US' => 'E02004970',
        '9UW' => 'E02004970',
        '9UY' => 'E02004978',
        '9UZ' => 'E02004978',
        '9WA' => 'E02004978',
        '9WB' => 'E02004978',
        '9WE' => 'E02004978',
        '9WF' => 'E02004978',
        '9WG' => 'E02004978',
        '9WJ' => 'E02004978',
        '9WQ' => 'E02004978',
        '9WY' => 'E02004970',
        '9WZ' => 'E02004970',
        '9XJ' => 'E02004978',
        '9XL' => 'E02004970',
        '9XN' => 'E02004978',
        '9XP' => 'E02004978',
        '9XQ' => 'E02004978',
        '9XR' => 'E02004970',
        '9XS' => 'E02004978',
        '9XT' => 'E02004978',
        '9XW' => 'E02004978',
        '9XX' => 'E02004943',
        '9XY' => 'E02004970',
        '9XZ' => 'E02004970',
        '9YR' => 'E02004972',
        '9YU' => 'E02004978',
        '9YW' => 'E02004978',
        '9YX' => 'E02004978',
        '9YY' => 'E02004969',
        '9YZ' => 'E02004978',
        '9ZA' => 'E02004978',
        '9ZB' => 'E02004978',
        '9ZD' => 'E02004978',
        '9ZE' => 'E02004978',
        '9ZF' => 'E02004978',
        '9ZG' => 'E02004978',
        '9ZH' => 'E02004978',
        '9ZJ' => 'E02004978',
        '9ZL' => 'E02004978',
        '9ZN' => 'E02004972',
        '9ZP' => 'E02004972',
        '9ZR' => 'E02004978',
        '9ZS' => 'E02004978',
        '9ZT' => 'E02004978',
        '9ZU' => 'E02004978',
        '9ZW' => 'E02004978',
        '9ZX' => 'E02004978',
        '9ZY' => 'E02004978',
        '9ZZ' => 'E02004978',
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
