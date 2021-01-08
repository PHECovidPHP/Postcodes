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
final class PO22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006544',
        '0AB' => 'E02006544',
        '0AD' => 'E02006544',
        '0AE' => 'E02006544',
        '0AF' => 'E02006544',
        '0AG' => 'E02006544',
        '0AH' => 'E02006544',
        '0AJ' => 'E02006544',
        '0AL' => 'E02006544',
        '0AN' => 'E02006544',
        '0AP' => 'E02006544',
        '0AQ' => 'E02006544',
        '0AR' => 'E02006544',
        '0AS' => 'E02006544',
        '0AT' => 'E02006544',
        '0AU' => 'E02006544',
        '0AW' => 'E02006544',
        '0AX' => 'E02006544',
        '0AY' => 'E02006544',
        '0AZ' => 'E02006544',
        '0BA' => 'E02006544',
        '0BB' => 'E02006544',
        '0BD' => 'E02006544',
        '0BE' => 'E02006558',
        '0BF' => 'E02006558',
        '0BG' => 'E02006544',
        '0BH' => 'E02006544',
        '0BJ' => 'E02006547',
        '0BL' => 'E02006544',
        '0BN' => 'E02006544',
        '0BP' => 'E02006544',
        '0BQ' => 'E02006544',
        '0BS' => 'E02006544',
        '0BT' => 'E02006544',
        '0BU' => 'E02006544',
        '0BW' => 'E02006544',
        '0BX' => 'E02006544',
        '0BY' => 'E02006544',
        '0BZ' => 'E02006544',
        '0DA' => 'E02006544',
        '0DB' => 'E02006544',
        '0DD' => 'E02006544',
        '0DE' => 'E02006544',
        '0DF' => 'E02006544',
        '0DG' => 'E02006544',
        '0DH' => 'E02006544',
        '0DJ' => 'E02006544',
        '0DL' => 'E02006544',
        '0DN' => 'E02006544',
        '0DP' => 'E02006544',
        '0DQ' => 'E02006544',
        '0DR' => 'E02006544',
        '0DS' => 'E02006544',
        '0DT' => 'E02006544',
        '0DU' => 'E02006544',
        '0DW' => 'E02006544',
        '0DX' => 'E02006558',
        '0DY' => 'E02006544',
        '0DZ' => 'E02006544',
        '0EA' => 'E02006544',
        '0EB' => 'E02006544',
        '0ED' => 'E02006544',
        '0EE' => 'E02006544',
        '0EF' => 'E02006544',
        '0EG' => 'E02006544',
        '0EH' => 'E02006544',
        '0EJ' => 'E02006544',
        '0EL' => 'E02006544',
        '0EN' => 'E02006544',
        '0EP' => 'E02006544',
        '0EQ' => 'E02006544',
        '0ER' => 'E02006544',
        '0ES' => 'E02006544',
        '0ET' => 'E02006544',
        '0EU' => 'E02006544',
        '0EW' => 'E02006544',
        '0EX' => 'E02006544',
        '0EY' => 'E02006544',
        '0EZ' => 'E02006544',
        '0FA' => 'E02006544',
        '0FB' => 'E02006544',
        '0FD' => 'E02006544',
        '0FE' => 'E02006544',
        '0FF' => 'E02006544',
        '0FG' => 'E02006544',
        '0GN' => 'E02006544',
        '0GW' => 'E02006544',
        '0HA' => 'E02006544',
        '0HB' => 'E02006544',
        '0HD' => 'E02006544',
        '0HE' => 'E02006544',
        '0HF' => 'E02006544',
        '0HG' => 'E02006544',
        '0HH' => 'E02006544',
        '0HJ' => 'E02006544',
        '0HL' => 'E02006544',
        '0HN' => 'E02006544',
        '0HP' => 'E02006544',
        '0HQ' => 'E02006544',
        '0HR' => 'E02006544',
        '0HS' => 'E02006544',
        '0HT' => 'E02006544',
        '0HU' => 'E02006544',
        '0HW' => 'E02006544',
        '0HX' => 'E02006544',
        '0HY' => 'E02006544',
        '0HZ' => 'E02006544',
        '0JA' => 'E02006544',
        '0JB' => 'E02006544',
        '0JD' => 'E02006544',
        '0JE' => 'E02006544',
        '0JF' => 'E02006544',
        '0JG' => 'E02006544',
        '0JH' => 'E02006544',
        '0JJ' => 'E02006544',
        '0JL' => 'E02006544',
        '0JN' => 'E02006544',
        '0JP' => 'E02006544',
        '0JQ' => 'E02006544',
        '0JR' => 'E02006544',
        '0JS' => 'E02006544',
        '0JT' => 'E02006544',
        '0JU' => 'E02006544',
        '0JW' => 'E02006544',
        '0JX' => 'E02006544',
        '0JY' => 'E02006544',
        '0JZ' => 'E02006544',
        '0LA' => 'E02006544',
        '0LB' => 'E02006544',
        '0LD' => 'E02006544',
        '0LH' => 'E02006544',
        '0LJ' => 'E02006544',
        '0LL' => 'E02006544',
        '0LN' => 'E02006558',
        '0LP' => 'E02006544',
        '0LR' => 'E02006544',
        '0LS' => 'E02006544',
        '0LT' => 'E02006544',
        '0LU' => 'E02006544',
        '0LW' => 'E02006544',
        '0LX' => 'E02006544',
        '0NA' => 'E02006544',
        '0NB' => 'E02006558',
        '0WA' => 'E02006558',
        '0WB' => 'E02006558',
        '0WJ' => 'E02006558',
        '0WX' => 'E02006558',
        '0WY' => 'E02006558',
        '0WZ' => 'E02006558',
        '0ZU' => 'E02006558',
        '0ZW' => 'E02006558',
        '6AA' => 'E02006556',
        '6AB' => 'E02006556',
        '6AD' => 'E02006556',
        '6AE' => 'E02006556',
        '6AF' => 'E02006556',
        '6AG' => 'E02006554',
        '6AH' => 'E02006554',
        '6AJ' => 'E02006554',
        '6AL' => 'E02006554',
        '6AN' => 'E02006554',
        '6AP' => 'E02006554',
        '6AQ' => 'E02006554',
        '6AR' => 'E02006554',
        '6AS' => 'E02006554',
        '6AT' => 'E02006554',
        '6AU' => 'E02006554',
        '6AW' => 'E02006554',
        '6AX' => 'E02006554',
        '6AY' => 'E02006554',
        '6AZ' => 'E02006554',
        '6BA' => 'E02006554',
        '6BB' => 'E02006554',
        '6BD' => 'E02006554',
        '6BE' => 'E02006556',
        '6BF' => 'E02006554',
        '6BH' => 'E02006556',
        '6BJ' => 'E02006556',
        '6BL' => 'E02006556',
        '6BN' => 'E02006554',
        '6BP' => 'E02006556',
        '6BS' => 'E02006556',
        '6BT' => 'E02006556',
        '6BU' => 'E02006556',
        '6BW' => 'E02006556',
        '6BX' => 'E02006556',
        '6DA' => 'E02006554',
        '6DB' => 'E02006554',
        '6DD' => 'E02006554',
        '6DE' => 'E02006554',
        '6DF' => 'E02006554',
        '6DH' => 'E02006556',
        '6DJ' => 'E02006554',
        '6DL' => 'E02006554',
        '6DN' => 'E02006554',
        '6DP' => 'E02006554',
        '6DR' => 'E02006554',
        '6DS' => 'E02006554',
        '6DT' => 'E02006554',
        '6DU' => 'E02006554',
        '6DW' => 'E02006554',
        '6DX' => 'E02006554',
        '6DY' => 'E02006554',
        '6DZ' => 'E02006554',
        '6EA' => 'E02006554',
        '6EB' => 'E02006554',
        '6ED' => 'E02006554',
        '6EE' => 'E02006554',
        '6EF' => 'E02006554',
        '6EG' => 'E02006554',
        '6EH' => 'E02006554',
        '6EJ' => 'E02006554',
        '6EL' => 'E02006554',
        '6EN' => 'E02006554',
        '6EP' => 'E02006554',
        '6EQ' => 'E02006554',
        '6ER' => 'E02006554',
        '6ES' => 'E02006554',
        '6ET' => 'E02006554',
        '6EU' => 'E02006554',
        '6EX' => 'E02006554',
        '6EY' => 'E02006554',
        '6EZ' => 'E02006558',
        '6HA' => 'E02006554',
        '6HB' => 'E02006554',
        '6HD' => 'E02006554',
        '6HE' => 'E02006554',
        '6HF' => 'E02006554',
        '6HG' => 'E02006554',
        '6HH' => 'E02006554',
        '6HJ' => 'E02006554',
        '6HL' => 'E02006554',
        '6HN' => 'E02006554',
        '6HP' => 'E02006554',
        '6HQ' => 'E02006554',
        '6HR' => 'E02006554',
        '6HS' => 'E02006554',
        '6HT' => 'E02006558',
        '6HU' => 'E02006554',
        '6HW' => 'E02006554',
        '6HX' => 'E02006554',
        '6HY' => 'E02006554',
        '6HZ' => 'E02006554',
        '6JA' => 'E02006554',
        '6JB' => 'E02006554',
        '6JD' => 'E02006554',
        '6JE' => 'E02006554',
        '6JF' => 'E02006554',
        '6JG' => 'E02006554',
        '6JH' => 'E02006554',
        '6JJ' => 'E02006554',
        '6JL' => 'E02006554',
        '6JN' => 'E02006554',
        '6JP' => 'E02006554',
        '6JQ' => 'E02006554',
        '6JR' => 'E02006554',
        '6JS' => 'E02006554',
        '6JT' => 'E02006554',
        '6JU' => 'E02006554',
        '6JW' => 'E02006554',
        '6JX' => 'E02006554',
        '6JY' => 'E02006554',
        '6JZ' => 'E02006554',
        '6LA' => 'E02006554',
        '6LB' => 'E02006554',
        '6LD' => 'E02006554',
        '6LE' => 'E02006554',
        '6LF' => 'E02006554',
        '6LH' => 'E02006554',
        '6LJ' => 'E02006554',
        '6LL' => 'E02006554',
        '6LN' => 'E02006554',
        '6LP' => 'E02006554',
        '6LR' => 'E02006554',
        '6LS' => 'E02006554',
        '6LT' => 'E02006554',
        '6LU' => 'E02006554',
        '6LW' => 'E02006554',
        '6LX' => 'E02006554',
        '6LY' => 'E02006554',
        '6LZ' => 'E02006554',
        '6NA' => 'E02006554',
        '6NB' => 'E02006554',
        '6ND' => 'E02006554',
        '6NE' => 'E02006554',
        '6NF' => 'E02006554',
        '6NG' => 'E02006554',
        '6NH' => 'E02006554',
        '6NJ' => 'E02006554',
        '6NL' => 'E02006554',
        '6NN' => 'E02006554',
        '6NP' => 'E02006554',
        '6NQ' => 'E02006554',
        '6NR' => 'E02006554',
        '6NS' => 'E02006554',
        '6NT' => 'E02006558',
        '6PA' => 'E02006554',
        '6PB' => 'E02006554',
        '6PD' => 'E02006554',
        '6PE' => 'E02006554',
        '6PF' => 'E02006554',
        '6PG' => 'E02006554',
        '6PN' => 'E02006554',
        '6PQ' => 'E02006554',
        '6PU' => 'E02006554',
        '6PW' => 'E02006554',
        '6PX' => 'E02006554',
        '6PZ' => 'E02006554',
        '6QA' => 'E02006554',
        '6QB' => 'E02006554',
        '6QD' => 'E02006554',
        '6QE' => 'E02006554',
        '6QF' => 'E02006554',
        '6QG' => 'E02006554',
        '6QH' => 'E02006554',
        '6QJ' => 'E02006554',
        '6QL' => 'E02006554',
        '6QN' => 'E02006554',
        '6QP' => 'E02006554',
        '6QQ' => 'E02006554',
        '6QR' => 'E02006554',
        '6QS' => 'E02006556',
        '6QT' => 'E02006556',
        '6QU' => 'E02006554',
        '6QW' => 'E02006554',
        '6QX' => 'E02006556',
        '6QY' => 'E02006556',
        '6QZ' => 'E02006556',
        '6RA' => 'E02006556',
        '6RB' => 'E02006556',
        '6RD' => 'E02006556',
        '6RE' => 'E02006554',
        '6RF' => 'E02006554',
        '6RG' => 'E02006554',
        '6RH' => 'E02006554',
        '6RJ' => 'E02006556',
        '6RL' => 'E02006554',
        '6RN' => 'E02006554',
        '6RP' => 'E02006554',
        '6RQ' => 'E02006554',
        '6RR' => 'E02006554',
        '6RS' => 'E02006554',
        '6RT' => 'E02006554',
        '6RU' => 'E02006554',
        '6RW' => 'E02006554',
        '6RX' => 'E02006554',
        '6RY' => 'E02006554',
        '6RZ' => 'E02006554',
        '6SA' => 'E02006554',
        '6SB' => 'E02006554',
        '6SD' => 'E02006554',
        '6SE' => 'E02006554',
        '6SF' => 'E02006554',
        '6SG' => 'E02006558',
        '6SH' => 'E02006554',
        '6SJ' => 'E02006554',
        '6SL' => 'E02006554',
        '6SP' => 'E02006554',
        '6WA' => 'E02006558',
        '6WB' => 'E02006558',
        '6WJ' => 'E02006558',
        '6WY' => 'E02006558',
        '6WZ' => 'E02006558',
        '6XZ' => 'E02006558',
        '6YA' => 'E02006558',
        '6YB' => 'E02006558',
        '6YD' => 'E02006558',
        '6YH' => 'E02006558',
        '6YJ' => 'E02006558',
        '6YL' => 'E02006558',
        '6YP' => 'E02006554',
        '6YR' => 'E02006554',
        '6YS' => 'E02006558',
        '6YT' => 'E02006554',
        '6YU' => 'E02006554',
        '6YW' => 'E02006558',
        '6YX' => 'E02006554',
        '6ZJ' => 'E02006558',
        '6ZL' => 'E02006558',
        '6ZN' => 'E02006558',
        '6ZQ' => 'E02006558',
        '7AA' => 'E02006556',
        '7AB' => 'E02006556',
        '7AD' => 'E02006556',
        '7AE' => 'E02006556',
        '7AF' => 'E02006556',
        '7AG' => 'E02006556',
        '7AH' => 'E02006556',
        '7AJ' => 'E02006556',
        '7AL' => 'E02006556',
        '7AN' => 'E02006556',
        '7AP' => 'E02006556',
        '7AQ' => 'E02006556',
        '7AR' => 'E02006556',
        '7AS' => 'E02006556',
        '7AT' => 'E02006556',
        '7AU' => 'E02006556',
        '7AW' => 'E02006556',
        '7AX' => 'E02006556',
        '7AY' => 'E02006556',
        '7AZ' => 'E02006556',
        '7BA' => 'E02006558',
        '7BB' => 'E02006556',
        '7BD' => 'E02006556',
        '7BE' => 'E02006556',
        '7BF' => 'E02006556',
        '7BG' => 'E02006556',
        '7BH' => 'E02006556',
        '7BJ' => 'E02006556',
        '7BL' => 'E02006556',
        '7BN' => 'E02006556',
        '7BP' => 'E02006556',
        '7BS' => 'E02006556',
        '7BT' => 'E02006556',
        '7BU' => 'E02006556',
        '7BW' => 'E02006556',
        '7BX' => 'E02006556',
        '7BY' => 'E02006558',
        '7DA' => 'E02006556',
        '7DB' => 'E02006556',
        '7DD' => 'E02006556',
        '7DF' => 'E02006556',
        '7DH' => 'E02006556',
        '7DJ' => 'E02006556',
        '7DL' => 'E02006556',
        '7DN' => 'E02006556',
        '7DP' => 'E02006556',
        '7DR' => 'E02006556',
        '7DT' => 'E02006558',
        '7DU' => 'E02006556',
        '7DW' => 'E02006556',
        '7DX' => 'E02006556',
        '7DY' => 'E02006556',
        '7DZ' => 'E02006556',
        '7EA' => 'E02006556',
        '7EB' => 'E02006556',
        '7ED' => 'E02006556',
        '7EE' => 'E02006556',
        '7EF' => 'E02006556',
        '7EG' => 'E02006556',
        '7EH' => 'E02006556',
        '7EJ' => 'E02006556',
        '7EL' => 'E02006556',
        '7EN' => 'E02006556',
        '7EP' => 'E02006556',
        '7EQ' => 'E02006556',
        '7ER' => 'E02006556',
        '7ES' => 'E02006556',
        '7ET' => 'E02006556',
        '7EU' => 'E02006556',
        '7EW' => 'E02006556',
        '7EX' => 'E02006556',
        '7EY' => 'E02006556',
        '7EZ' => 'E02006556',
        '7HA' => 'E02006556',
        '7HB' => 'E02006556',
        '7HD' => 'E02006556',
        '7HE' => 'E02006556',
        '7HF' => 'E02006556',
        '7HG' => 'E02006558',
        '7HH' => 'E02006556',
        '7HJ' => 'E02006558',
        '7HL' => 'E02006556',
        '7HN' => 'E02006556',
        '7HP' => 'E02006556',
        '7HQ' => 'E02006556',
        '7HR' => 'E02006556',
        '7HS' => 'E02006556',
        '7HT' => 'E02006556',
        '7HU' => 'E02006556',
        '7HW' => 'E02006556',
        '7HX' => 'E02006556',
        '7HY' => 'E02006556',
        '7HZ' => 'E02006556',
        '7JA' => 'E02006556',
        '7JB' => 'E02006558',
        '7JD' => 'E02006556',
        '7JE' => 'E02006556',
        '7JF' => 'E02006556',
        '7JG' => 'E02006556',
        '7JH' => 'E02006558',
        '7JJ' => 'E02006556',
        '7JL' => 'E02006556',
        '7JN' => 'E02006556',
        '7JP' => 'E02006556',
        '7JQ' => 'E02006556',
        '7JR' => 'E02006556',
        '7JS' => 'E02006556',
        '7JT' => 'E02006556',
        '7JU' => 'E02006556',
        '7JW' => 'E02006558',
        '7JX' => 'E02006556',
        '7JY' => 'E02006556',
        '7LA' => 'E02006556',
        '7LB' => 'E02006556',
        '7LD' => 'E02006631',
        '7LE' => 'E02006556',
        '7LF' => 'E02006556',
        '7LG' => 'E02006556',
        '7LH' => 'E02006556',
        '7LJ' => 'E02006556',
        '7LL' => 'E02006556',
        '7LN' => 'E02006556',
        '7LP' => 'E02006556',
        '7LQ' => 'E02006556',
        '7LR' => 'E02006556',
        '7LS' => 'E02006556',
        '7LT' => 'E02006556',
        '7LU' => 'E02006556',
        '7LW' => 'E02006556',
        '7LX' => 'E02006556',
        '7LY' => 'E02006556',
        '7LZ' => 'E02006556',
        '7NA' => 'E02006556',
        '7NB' => 'E02006556',
        '7ND' => 'E02006556',
        '7NE' => 'E02006556',
        '7NF' => 'E02006556',
        '7NG' => 'E02006556',
        '7NH' => 'E02006556',
        '7NJ' => 'E02006556',
        '7NL' => 'E02006556',
        '7NN' => 'E02006556',
        '7NP' => 'E02006558',
        '7NQ' => 'E02006556',
        '7NR' => 'E02006556',
        '7NS' => 'E02006556',
        '7NT' => 'E02006556',
        '7NU' => 'E02006556',
        '7NW' => 'E02006556',
        '7NX' => 'E02006556',
        '7NY' => 'E02006556',
        '7NZ' => 'E02006556',
        '7PA' => 'E02006556',
        '7PB' => 'E02006556',
        '7PD' => 'E02006556',
        '7PE' => 'E02006556',
        '7PF' => 'E02006556',
        '7PG' => 'E02006556',
        '7PH' => 'E02006556',
        '7PJ' => 'E02006556',
        '7PL' => 'E02006556',
        '7PN' => 'E02006556',
        '7PP' => 'E02006556',
        '7PQ' => 'E02006556',
        '7PR' => 'E02006556',
        '7PS' => 'E02006558',
        '7PT' => 'E02006556',
        '7PU' => 'E02006558',
        '7PW' => 'E02006556',
        '7PX' => 'E02006556',
        '7PY' => 'E02006556',
        '7PZ' => 'E02006556',
        '7QA' => 'E02006556',
        '7QB' => 'E02006556',
        '7QD' => 'E02006556',
        '7QE' => 'E02006556',
        '7QF' => 'E02006556',
        '7QG' => 'E02006556',
        '7QH' => 'E02006556',
        '7QJ' => 'E02006556',
        '7QL' => 'E02006556',
        '7QN' => 'E02006556',
        '7QP' => 'E02006556',
        '7QQ' => 'E02006556',
        '7QR' => 'E02006556',
        '7QS' => 'E02006556',
        '7QT' => 'E02006556',
        '7QU' => 'E02006556',
        '7QW' => 'E02006556',
        '7QX' => 'E02006556',
        '7QY' => 'E02006556',
        '7QZ' => 'E02006556',
        '7RA' => 'E02006556',
        '7RB' => 'E02006556',
        '7RD' => 'E02006556',
        '7RE' => 'E02006556',
        '7RF' => 'E02006556',
        '7RG' => 'E02006556',
        '7RH' => 'E02006554',
        '7RJ' => 'E02006554',
        '7RL' => 'E02006554',
        '7RN' => 'E02006554',
        '7RP' => 'E02006554',
        '7RQ' => 'E02006556',
        '7RR' => 'E02006554',
        '7RS' => 'E02006554',
        '7RT' => 'E02006554',
        '7RU' => 'E02006554',
        '7RW' => 'E02006554',
        '7RX' => 'E02006554',
        '7RY' => 'E02006554',
        '7RZ' => 'E02006554',
        '7SA' => 'E02006554',
        '7SB' => 'E02006554',
        '7SD' => 'E02006554',
        '7SE' => 'E02006554',
        '7SF' => 'E02006554',
        '7SG' => 'E02006554',
        '7SH' => 'E02006554',
        '7SJ' => 'E02006554',
        '7SL' => 'E02006554',
        '7SN' => 'E02006554',
        '7SP' => 'E02006554',
        '7SQ' => 'E02006554',
        '7SR' => 'E02006554',
        '7SS' => 'E02006554',
        '7ST' => 'E02006554',
        '7SU' => 'E02006554',
        '7SW' => 'E02006554',
        '7SX' => 'E02006554',
        '7SY' => 'E02006554',
        '7SZ' => 'E02006554',
        '7TA' => 'E02006554',
        '7TB' => 'E02006554',
        '7TD' => 'E02006554',
        '7TE' => 'E02006554',
        '7TF' => 'E02006554',
        '7TG' => 'E02006554',
        '7TH' => 'E02006554',
        '7TJ' => 'E02006554',
        '7TL' => 'E02006554',
        '7TN' => 'E02006554',
        '7TP' => 'E02006556',
        '7TQ' => 'E02006554',
        '7TR' => 'E02006556',
        '7TS' => 'E02006554',
        '7TT' => 'E02006554',
        '7TU' => 'E02006556',
        '7TW' => 'E02006554',
        '7TX' => 'E02006556',
        '7UA' => 'E02006558',
        '7UB' => 'E02006558',
        '7UD' => 'E02006558',
        '7UE' => 'E02006554',
        '7UF' => 'E02006554',
        '7UG' => 'E02006554',
        '7UH' => 'E02006558',
        '7UJ' => 'E02006558',
        '7UL' => 'E02006556',
        '7UN' => 'E02006558',
        '7UP' => 'E02006558',
        '7UQ' => 'E02006554',
        '7UR' => 'E02006558',
        '7UW' => 'E02006556',
        '7WA' => 'E02006558',
        '7WB' => 'E02006558',
        '7WD' => 'E02006558',
        '7WE' => 'E02006558',
        '7WF' => 'E02006558',
        '7WL' => 'E02006558',
        '7WY' => 'E02006558',
        '7WZ' => 'E02006558',
        '7XJ' => 'E02006558',
        '7XZ' => 'E02006558',
        '7ZN' => 'E02006558',
        '7ZR' => 'E02006558',
        '8AA' => 'E02006555',
        '8AB' => 'E02006555',
        '8AD' => 'E02006555',
        '8AE' => 'E02006555',
        '8AF' => 'E02006555',
        '8AG' => 'E02006555',
        '8AH' => 'E02006555',
        '8AJ' => 'E02006555',
        '8AL' => 'E02006558',
        '8AN' => 'E02006555',
        '8AP' => 'E02006558',
        '8AQ' => 'E02006556',
        '8AR' => 'E02006558',
        '8AS' => 'E02006558',
        '8AT' => 'E02006558',
        '8AU' => 'E02006555',
        '8AW' => 'E02006555',
        '8AX' => 'E02006555',
        '8AY' => 'E02006555',
        '8AZ' => 'E02006555',
        '8BA' => 'E02006555',
        '8BB' => 'E02006555',
        '8BD' => 'E02006558',
        '8BE' => 'E02006558',
        '8BF' => 'E02006556',
        '8BG' => 'E02006555',
        '8BH' => 'E02006556',
        '8BJ' => 'E02006555',
        '8BL' => 'E02006555',
        '8BN' => 'E02006555',
        '8BP' => 'E02006556',
        '8BQ' => 'E02006555',
        '8BS' => 'E02006555',
        '8BT' => 'E02006555',
        '8BU' => 'E02006555',
        '8BW' => 'E02006555',
        '8BX' => 'E02006555',
        '8BY' => 'E02006555',
        '8BZ' => 'E02006555',
        '8DA' => 'E02006555',
        '8DB' => 'E02006555',
        '8DD' => 'E02006555',
        '8DE' => 'E02006555',
        '8DF' => 'E02006555',
        '8DG' => 'E02006555',
        '8DH' => 'E02006555',
        '8DJ' => 'E02006555',
        '8DL' => 'E02006555',
        '8DN' => 'E02006555',
        '8DP' => 'E02006555',
        '8DQ' => 'E02006555',
        '8DR' => 'E02006555',
        '8DS' => 'E02006555',
        '8DT' => 'E02006555',
        '8DU' => 'E02006555',
        '8DW' => 'E02006555',
        '8DX' => 'E02006555',
        '8DY' => 'E02006555',
        '8DZ' => 'E02006555',
        '8EA' => 'E02006556',
        '8EB' => 'E02006556',
        '8ED' => 'E02006556',
        '8EE' => 'E02006556',
        '8EF' => 'E02006556',
        '8EG' => 'E02006554',
        '8EH' => 'E02006556',
        '8EJ' => 'E02006556',
        '8EL' => 'E02006556',
        '8EN' => 'E02006556',
        '8EP' => 'E02006556',
        '8EQ' => 'E02006556',
        '8ER' => 'E02006556',
        '8ES' => 'E02006556',
        '8ET' => 'E02006556',
        '8EU' => 'E02006556',
        '8EW' => 'E02006556',
        '8EX' => 'E02006556',
        '8EY' => 'E02006556',
        '8EZ' => 'E02006556',
        '8FA' => 'E02006556',
        '8FB' => 'E02006556',
        '8FD' => 'E02006556',
        '8FE' => 'E02006556',
        '8FF' => 'E02006556',
        '8FG' => 'E02006556',
        '8FH' => 'E02006556',
        '8FJ' => 'E02006556',
        '8FL' => 'E02006556',
        '8FP' => 'E02006556',
        '8FQ' => 'E02006556',
        '8FR' => 'E02006556',
        '8FS' => 'E02006556',
        '8FT' => 'E02006556',
        '8FU' => 'E02006556',
        '8FW' => 'E02006556',
        '8FX' => 'E02006556',
        '8FY' => 'E02006556',
        '8FZ' => 'E02006556',
        '8GA' => 'E02006556',
        '8GB' => 'E02006556',
        '8GD' => 'E02006556',
        '8GE' => 'E02006556',
        '8GF' => 'E02006556',
        '8GG' => 'E02006556',
        '8GH' => 'E02006556',
        '8GJ' => 'E02006556',
        '8GL' => 'E02006556',
        '8GP' => 'E02006556',
        '8GQ' => 'E02006556',
        '8GR' => 'E02006556',
        '8GS' => 'E02006556',
        '8HA' => 'E02006556',
        '8HB' => 'E02006556',
        '8HD' => 'E02006556',
        '8HE' => 'E02006556',
        '8HF' => 'E02006556',
        '8HG' => 'E02006556',
        '8HH' => 'E02006556',
        '8HJ' => 'E02006556',
        '8HL' => 'E02006556',
        '8HN' => 'E02006556',
        '8HP' => 'E02006556',
        '8HQ' => 'E02006556',
        '8HR' => 'E02006556',
        '8HS' => 'E02006556',
        '8HT' => 'E02006556',
        '8HU' => 'E02006556',
        '8HW' => 'E02006556',
        '8HX' => 'E02006556',
        '8HY' => 'E02006556',
        '8HZ' => 'E02006556',
        '8JA' => 'E02006556',
        '8JB' => 'E02006556',
        '8JD' => 'E02006556',
        '8JE' => 'E02006556',
        '8JF' => 'E02006556',
        '8JG' => 'E02006556',
        '8JH' => 'E02006556',
        '8JJ' => 'E02006556',
        '8JL' => 'E02006556',
        '8JN' => 'E02006556',
        '8JP' => 'E02006558',
        '8JQ' => 'E02006556',
        '8JR' => 'E02006556',
        '8JS' => 'E02006556',
        '8JT' => 'E02006556',
        '8JU' => 'E02006556',
        '8JX' => 'E02006556',
        '8JY' => 'E02006556',
        '8JZ' => 'E02006556',
        '8LA' => 'E02006556',
        '8LB' => 'E02006556',
        '8LD' => 'E02006556',
        '8LE' => 'E02006556',
        '8LF' => 'E02006554',
        '8LG' => 'E02006556',
        '8LH' => 'E02006556',
        '8LJ' => 'E02006556',
        '8LL' => 'E02006556',
        '8LN' => 'E02006556',
        '8LP' => 'E02006556',
        '8LQ' => 'E02006556',
        '8LR' => 'E02006556',
        '8LS' => 'E02006556',
        '8LT' => 'E02006556',
        '8LU' => 'E02006556',
        '8LW' => 'E02006556',
        '8LX' => 'E02006556',
        '8LY' => 'E02006556',
        '8LZ' => 'E02006556',
        '8NA' => 'E02006556',
        '8NB' => 'E02006556',
        '8ND' => 'E02006556',
        '8NE' => 'E02006556',
        '8NF' => 'E02006556',
        '8NG' => 'E02006556',
        '8NH' => 'E02006556',
        '8NJ' => 'E02006554',
        '8NL' => 'E02006556',
        '8NN' => 'E02006554',
        '8NP' => 'E02006554',
        '8NQ' => 'E02006556',
        '8NR' => 'E02006554',
        '8NS' => 'E02006554',
        '8NT' => 'E02006554',
        '8NU' => 'E02006554',
        '8NW' => 'E02006554',
        '8NX' => 'E02006558',
        '8PA' => 'E02006555',
        '8PB' => 'E02006555',
        '8PD' => 'E02006555',
        '8PE' => 'E02006555',
        '8PF' => 'E02006555',
        '8PG' => 'E02006555',
        '8PH' => 'E02006555',
        '8PJ' => 'E02006555',
        '8PL' => 'E02006555',
        '8PN' => 'E02006555',
        '8PP' => 'E02006556',
        '8PQ' => 'E02006555',
        '8PR' => 'E02006556',
        '8PS' => 'E02006556',
        '8PT' => 'E02006556',
        '8PU' => 'E02006556',
        '8PW' => 'E02006555',
        '8PX' => 'E02006556',
        '8PY' => 'E02006556',
        '8PZ' => 'E02006556',
        '8QA' => 'E02006556',
        '8QB' => 'E02006556',
        '8QD' => 'E02006558',
        '8QE' => 'E02006556',
        '8QF' => 'E02006556',
        '8QG' => 'E02006556',
        '8QH' => 'E02006556',
        '8QJ' => 'E02006556',
        '8QL' => 'E02006556',
        '8QN' => 'E02006556',
        '8QP' => 'E02006556',
        '8QQ' => 'E02006556',
        '8QR' => 'E02006556',
        '8QS' => 'E02006556',
        '8QT' => 'E02006556',
        '8QU' => 'E02006556',
        '8QW' => 'E02006556',
        '8QX' => 'E02006556',
        '8RA' => 'E02006556',
        '8RB' => 'E02006556',
        '8RD' => 'E02006558',
        '8RH' => 'E02006556',
        '8WA' => 'E02006558',
        '8WB' => 'E02006558',
        '8WW' => 'E02006558',
        '8WX' => 'E02006558',
        '8WY' => 'E02006558',
        '8WZ' => 'E02006558',
        '8XA' => 'E02006558',
        '8XJ' => 'E02006558',
        '8XN' => 'E02006558',
        '8YA' => 'E02006556',
        '8YB' => 'E02006558',
        '8YD' => 'E02006558',
        '8YH' => 'E02006558',
        '8YJ' => 'E02006556',
        '8YL' => 'E02006556',
        '8YP' => 'E02006556',
        '8YR' => 'E02006558',
        '8YS' => 'E02006556',
        '8YT' => 'E02006556',
        '8YU' => 'E02006558',
        '8YW' => 'E02006558',
        '8YX' => 'E02006558',
        '8YY' => 'E02006558',
        '8ZQ' => 'E02006558',
        '9AA' => 'E02006553',
        '9AB' => 'E02006553',
        '9AD' => 'E02006553',
        '9AE' => 'E02006553',
        '9AF' => 'E02006553',
        '9AG' => 'E02006553',
        '9AH' => 'E02006553',
        '9AJ' => 'E02006553',
        '9AL' => 'E02006553',
        '9AN' => 'E02006553',
        '9AP' => 'E02006553',
        '9AQ' => 'E02006553',
        '9AR' => 'E02006553',
        '9AS' => 'E02006553',
        '9AT' => 'E02006553',
        '9AU' => 'E02006553',
        '9AW' => 'E02006553',
        '9AX' => 'E02006553',
        '9AY' => 'E02006553',
        '9AZ' => 'E02006553',
        '9BA' => 'E02006555',
        '9BB' => 'E02006553',
        '9BD' => 'E02006553',
        '9BE' => 'E02006553',
        '9BF' => 'E02006558',
        '9BG' => 'E02006553',
        '9BH' => 'E02006553',
        '9BJ' => 'E02006553',
        '9BL' => 'E02006553',
        '9BN' => 'E02006553',
        '9BP' => 'E02006553',
        '9BQ' => 'E02006553',
        '9BS' => 'E02006555',
        '9BT' => 'E02006553',
        '9BU' => 'E02006553',
        '9BW' => 'E02006553',
        '9BX' => 'E02006553',
        '9BY' => 'E02006553',
        '9BZ' => 'E02006553',
        '9DA' => 'E02006553',
        '9DB' => 'E02006553',
        '9DD' => 'E02006555',
        '9DE' => 'E02006557',
        '9DF' => 'E02006557',
        '9DG' => 'E02006553',
        '9DH' => 'E02006553',
        '9DJ' => 'E02006553',
        '9DL' => 'E02006553',
        '9DN' => 'E02006553',
        '9DP' => 'E02006553',
        '9DQ' => 'E02006555',
        '9DR' => 'E02006553',
        '9DS' => 'E02006553',
        '9DT' => 'E02006553',
        '9DU' => 'E02006553',
        '9DW' => 'E02006553',
        '9DX' => 'E02006553',
        '9DY' => 'E02006555',
        '9DZ' => 'E02006555',
        '9EA' => 'E02006553',
        '9EB' => 'E02006553',
        '9ED' => 'E02006555',
        '9EE' => 'E02006553',
        '9EF' => 'E02006555',
        '9EG' => 'E02006553',
        '9EH' => 'E02006555',
        '9EJ' => 'E02006555',
        '9EL' => 'E02006555',
        '9EN' => 'E02006555',
        '9EP' => 'E02006555',
        '9EQ' => 'E02006553',
        '9ER' => 'E02006555',
        '9ES' => 'E02006557',
        '9ET' => 'E02006557',
        '9EU' => 'E02006555',
        '9EW' => 'E02006555',
        '9EX' => 'E02006553',
        '9EY' => 'E02006557',
        '9EZ' => 'E02006553',
        '9FA' => 'E02006555',
        '9FB' => 'E02006553',
        '9FD' => 'E02006555',
        '9FE' => 'E02006555',
        '9FF' => 'E02006553',
        '9FG' => 'E02006553',
        '9FH' => 'E02006555',
        '9FJ' => 'E02006553',
        '9FL' => 'E02006553',
        '9FN' => 'E02006553',
        '9GH' => 'E02006553',
        '9HA' => 'E02006553',
        '9HB' => 'E02006553',
        '9HD' => 'E02006553',
        '9HE' => 'E02006553',
        '9HF' => 'E02006553',
        '9HG' => 'E02006553',
        '9HH' => 'E02006555',
        '9HJ' => 'E02006555',
        '9HL' => 'E02006555',
        '9HN' => 'E02006553',
        '9HP' => 'E02006555',
        '9HR' => 'E02006555',
        '9HS' => 'E02006555',
        '9HT' => 'E02006555',
        '9HU' => 'E02006555',
        '9HW' => 'E02006553',
        '9HX' => 'E02006555',
        '9HY' => 'E02006553',
        '9HZ' => 'E02006553',
        '9JA' => 'E02006555',
        '9JB' => 'E02006555',
        '9JD' => 'E02006555',
        '9JE' => 'E02006555',
        '9JF' => 'E02006555',
        '9JG' => 'E02006555',
        '9JH' => 'E02006555',
        '9JJ' => 'E02006555',
        '9JL' => 'E02006555',
        '9JN' => 'E02006555',
        '9JP' => 'E02006555',
        '9JQ' => 'E02006555',
        '9JR' => 'E02006555',
        '9JS' => 'E02006555',
        '9JT' => 'E02006555',
        '9JU' => 'E02006555',
        '9JW' => 'E02006555',
        '9JX' => 'E02006555',
        '9JY' => 'E02006555',
        '9JZ' => 'E02006555',
        '9LA' => 'E02006553',
        '9LB' => 'E02006555',
        '9LD' => 'E02006555',
        '9LE' => 'E02006553',
        '9LF' => 'E02006553',
        '9LG' => 'E02006555',
        '9LH' => 'E02006555',
        '9LJ' => 'E02006555',
        '9LL' => 'E02006555',
        '9LN' => 'E02006555',
        '9LP' => 'E02006555',
        '9LQ' => 'E02006555',
        '9LR' => 'E02006553',
        '9LS' => 'E02006555',
        '9LT' => 'E02006555',
        '9LU' => 'E02006555',
        '9LW' => 'E02006555',
        '9LX' => 'E02006555',
        '9LY' => 'E02006553',
        '9LZ' => 'E02006553',
        '9NA' => 'E02006553',
        '9NB' => 'E02006557',
        '9ND' => 'E02006555',
        '9NE' => 'E02006553',
        '9NF' => 'E02006553',
        '9NG' => 'E02006553',
        '9NH' => 'E02006553',
        '9NJ' => 'E02006553',
        '9NL' => 'E02006553',
        '9NN' => 'E02006553',
        '9NP' => 'E02006553',
        '9NQ' => 'E02006553',
        '9NR' => 'E02006553',
        '9NS' => 'E02006553',
        '9NT' => 'E02006555',
        '9NU' => 'E02006553',
        '9NW' => 'E02006553',
        '9NX' => 'E02006553',
        '9NY' => 'E02006553',
        '9NZ' => 'E02006553',
        '9PA' => 'E02006553',
        '9PB' => 'E02006553',
        '9PD' => 'E02006544',
        '9PE' => 'E02006544',
        '9PF' => 'E02006544',
        '9PG' => 'E02006544',
        '9PH' => 'E02006544',
        '9PJ' => 'E02006544',
        '9PL' => 'E02006544',
        '9PN' => 'E02006544',
        '9PP' => 'E02006555',
        '9PQ' => 'E02006544',
        '9PR' => 'E02006555',
        '9PS' => 'E02006555',
        '9PT' => 'E02006555',
        '9PU' => 'E02006555',
        '9PW' => 'E02006555',
        '9PX' => 'E02006555',
        '9PY' => 'E02006555',
        '9PZ' => 'E02006555',
        '9QA' => 'E02006555',
        '9QB' => 'E02006555',
        '9QD' => 'E02006555',
        '9QE' => 'E02006555',
        '9QF' => 'E02006555',
        '9QG' => 'E02006553',
        '9QH' => 'E02006555',
        '9QJ' => 'E02006555',
        '9QL' => 'E02006555',
        '9QN' => 'E02006553',
        '9QP' => 'E02006555',
        '9QQ' => 'E02006553',
        '9QR' => 'E02006555',
        '9QS' => 'E02006544',
        '9QT' => 'E02006555',
        '9QU' => 'E02006555',
        '9QW' => 'E02006553',
        '9QX' => 'E02006555',
        '9QY' => 'E02006555',
        '9QZ' => 'E02006555',
        '9RA' => 'E02006555',
        '9RB' => 'E02006555',
        '9RD' => 'E02006555',
        '9RE' => 'E02006555',
        '9RF' => 'E02006558',
        '9RG' => 'E02006544',
        '9RH' => 'E02006555',
        '9RJ' => 'E02006555',
        '9RL' => 'E02006555',
        '9RN' => 'E02006555',
        '9RP' => 'E02006553',
        '9RR' => 'E02006555',
        '9RS' => 'E02006553',
        '9RT' => 'E02006555',
        '9RU' => 'E02006555',
        '9RW' => 'E02006555',
        '9RX' => 'E02006555',
        '9RY' => 'E02006555',
        '9RZ' => 'E02006555',
        '9SA' => 'E02006553',
        '9SB' => 'E02006553',
        '9SD' => 'E02006558',
        '9SE' => 'E02006553',
        '9SH' => 'E02006553',
        '9SJ' => 'E02006553',
        '9SL' => 'E02006553',
        '9SN' => 'E02006553',
        '9SP' => 'E02006553',
        '9SR' => 'E02006555',
        '9SS' => 'E02006555',
        '9ST' => 'E02006553',
        '9SU' => 'E02006553',
        '9SW' => 'E02006553',
        '9SX' => 'E02006555',
        '9SY' => 'E02006553',
        '9SZ' => 'E02006553',
        '9TA' => 'E02006553',
        '9TB' => 'E02006555',
        '9TD' => 'E02006553',
        '9TH' => 'E02006544',
        '9TJ' => 'E02006555',
        '9TL' => 'E02006558',
        '9TP' => 'E02006553',
        '9TR' => 'E02006553',
        '9TS' => 'E02006553',
        '9TT' => 'E02006553',
        '9TU' => 'E02006555',
        '9TX' => 'E02006558',
        '9UA' => 'E02006553',
        '9UB' => 'E02006553',
        '9UD' => 'E02006553',
        '9UJ' => 'E02006555',
        '9UL' => 'E02006555',
        '9UP' => 'E02006553',
        '9UR' => 'E02006553',
        '9WA' => 'E02006553',
        '9WG' => 'E02006553',
        '9WJ' => 'E02006558',
        '9WY' => 'E02006558',
        '9WZ' => 'E02006558',
        '9XA' => 'E02006553',
        '9XQ' => 'E02006553',
        '9XZ' => 'E02006558',
        '9YB' => 'E02006558',
        '9YD' => 'E02006555',
        '9YE' => 'E02006558',
        '9YF' => 'E02006558',
        '9YG' => 'E02006555',
        '9YH' => 'E02006555',
        '9YJ' => 'E02006558',
        '9YL' => 'E02006558',
        '9YN' => 'E02006558',
        '9YP' => 'E02006555',
        '9YQ' => 'E02006558',
        '9YR' => 'E02006558',
        '9YS' => 'E02006555',
        '9YT' => 'E02006555',
        '9YW' => 'E02006558',
        '9ZN' => 'E02006558',
        '9ZQ' => 'E02006558',
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
