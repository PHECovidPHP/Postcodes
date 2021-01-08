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
final class WF15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02002279',
        '6AB' => 'E02002279',
        '6AD' => 'E02002279',
        '6AE' => 'E02002279',
        '6AF' => 'E02002279',
        '6AG' => 'E02002279',
        '6AH' => 'E02002279',
        '6AJ' => 'E02002279',
        '6AL' => 'E02002279',
        '6AN' => 'E02002279',
        '6AP' => 'E02002279',
        '6AQ' => 'E02002279',
        '6AR' => 'E02002279',
        '6AS' => 'E02002279',
        '6AT' => 'E02002279',
        '6AU' => 'E02002279',
        '6AW' => 'E02002279',
        '6AX' => 'E02002279',
        '6AY' => 'E02002279',
        '6AZ' => 'E02002279',
        '6BA' => 'E02002279',
        '6BB' => 'E02002279',
        '6BD' => 'E02002279',
        '6BE' => 'E02002279',
        '6BG' => 'E02002279',
        '6BH' => 'E02002279',
        '6BJ' => 'E02002279',
        '6BL' => 'E02002279',
        '6BN' => 'E02002279',
        '6BP' => 'E02002279',
        '6BQ' => 'E02002279',
        '6BS' => 'E02002279',
        '6BT' => 'E02002279',
        '6BU' => 'E02002279',
        '6BW' => 'E02002279',
        '6BY' => 'E02002279',
        '6BZ' => 'E02002279',
        '6DA' => 'E02002279',
        '6DB' => 'E02002279',
        '6DD' => 'E02002279',
        '6DE' => 'E02002279',
        '6DF' => 'E02002279',
        '6DG' => 'E02002279',
        '6DH' => 'E02002279',
        '6DJ' => 'E02002279',
        '6DL' => 'E02002279',
        '6DN' => 'E02002279',
        '6DP' => 'E02002279',
        '6DQ' => 'E02002279',
        '6DR' => 'E02002279',
        '6DS' => 'E02002279',
        '6DT' => 'E02002279',
        '6DU' => 'E02002279',
        '6DW' => 'E02002279',
        '6DX' => 'E02002279',
        '6DY' => 'E02002279',
        '6DZ' => 'E02002279',
        '6EA' => 'E02002279',
        '6EB' => 'E02002279',
        '6ED' => 'E02002279',
        '6EE' => 'E02002279',
        '6EF' => 'E02002279',
        '6EG' => 'E02002279',
        '6EH' => 'E02002279',
        '6EJ' => 'E02002279',
        '6EL' => 'E02002279',
        '6EN' => 'E02002279',
        '6EP' => 'E02002279',
        '6EQ' => 'E02002279',
        '6ER' => 'E02002279',
        '6ES' => 'E02002279',
        '6ET' => 'E02002279',
        '6EU' => 'E02002279',
        '6EW' => 'E02002279',
        '6EX' => 'E02002279',
        '6EY' => 'E02002279',
        '6EZ' => 'E02002279',
        '6HA' => 'E02002279',
        '6HB' => 'E02002279',
        '6HD' => 'E02002279',
        '6HE' => 'E02002279',
        '6HF' => 'E02002279',
        '6HG' => 'E02002279',
        '6HH' => 'E02002279',
        '6HJ' => 'E02002279',
        '6HL' => 'E02002279',
        '6HN' => 'E02002279',
        '6HP' => 'E02002279',
        '6HQ' => 'E02002279',
        '6HR' => 'E02002279',
        '6HS' => 'E02002279',
        '6HT' => 'E02002279',
        '6HU' => 'E02002279',
        '6HW' => 'E02002279',
        '6HX' => 'E02002279',
        '6HY' => 'E02002279',
        '6HZ' => 'E02002281',
        '6JA' => 'E02002279',
        '6JB' => 'E02002279',
        '6JD' => 'E02002279',
        '6JE' => 'E02002279',
        '6JF' => 'E02002279',
        '6JG' => 'E02002279',
        '6JH' => 'E02002278',
        '6JJ' => 'E02002279',
        '6JL' => 'E02002279',
        '6JN' => 'E02002279',
        '6JP' => 'E02002279',
        '6JQ' => 'E02002279',
        '6JR' => 'E02002279',
        '6JS' => 'E02002279',
        '6JT' => 'E02002279',
        '6JU' => 'E02002279',
        '6JW' => 'E02002279',
        '6JX' => 'E02002279',
        '6JY' => 'E02002279',
        '6JZ' => 'E02002279',
        '6LA' => 'E02002279',
        '6LB' => 'E02002279',
        '6LD' => 'E02002279',
        '6LE' => 'E02002279',
        '6LF' => 'E02002279',
        '6LG' => 'E02002279',
        '6LH' => 'E02002279',
        '6LJ' => 'E02002279',
        '6LL' => 'E02002279',
        '6LN' => 'E02002275',
        '6LP' => 'E02002279',
        '6LQ' => 'E02002279',
        '6LR' => 'E02002279',
        '6LS' => 'E02002279',
        '6LT' => 'E02002279',
        '6LU' => 'E02002279',
        '6LW' => 'E02002279',
        '6LX' => 'E02002279',
        '6LY' => 'E02002279',
        '6NA' => 'E02002278',
        '6NB' => 'E02002278',
        '6ND' => 'E02002278',
        '6NE' => 'E02002278',
        '6NF' => 'E02002278',
        '6NG' => 'E02002278',
        '6NH' => 'E02002278',
        '6NJ' => 'E02002278',
        '6NL' => 'E02002278',
        '6NN' => 'E02002278',
        '6NP' => 'E02002278',
        '6NQ' => 'E02002278',
        '6NR' => 'E02002278',
        '6NS' => 'E02002278',
        '6NT' => 'E02002278',
        '6NU' => 'E02002279',
        '6NW' => 'E02002278',
        '6NX' => 'E02002279',
        '6NY' => 'E02002278',
        '6NZ' => 'E02002278',
        '6PA' => 'E02002278',
        '6PB' => 'E02002279',
        '6PD' => 'E02002279',
        '6PE' => 'E02002279',
        '6PF' => 'E02002279',
        '6PG' => 'E02002279',
        '6PH' => 'E02002278',
        '6PJ' => 'E02002278',
        '6PL' => 'E02002278',
        '6PN' => 'E02002279',
        '6PP' => 'E02002279',
        '6PQ' => 'E02002279',
        '6PR' => 'E02002279',
        '6PS' => 'E02002279',
        '6PT' => 'E02002278',
        '6PU' => 'E02002278',
        '6PW' => 'E02002279',
        '6PX' => 'E02002278',
        '6PY' => 'E02002279',
        '6PZ' => 'E02002279',
        '6QA' => 'E02002279',
        '6QB' => 'E02002278',
        '6QD' => 'E02002278',
        '6QE' => 'E02002278',
        '6QF' => 'E02002278',
        '6QG' => 'E02002278',
        '6QH' => 'E02002279',
        '6QJ' => 'E02002279',
        '6QL' => 'E02002279',
        '6QN' => 'E02002279',
        '6QP' => 'E02002279',
        '6QQ' => 'E02002279',
        '6QR' => 'E02002279',
        '6QS' => 'E02002279',
        '6QT' => 'E02002279',
        '6QU' => 'E02002278',
        '6QW' => 'E02002279',
        '6QX' => 'E02002278',
        '6QY' => 'E02002278',
        '6QZ' => 'E02002278',
        '6RA' => 'E02002279',
        '6WX' => 'E02002281',
        '6WY' => 'E02002281',
        '6WZ' => 'E02002281',
        '6XA' => 'E02002278',
        '6XB' => 'E02002278',
        '6XD' => 'E02002279',
        '6XE' => 'E02002281',
        '6XF' => 'E02002281',
        '6XG' => 'E02002281',
        '6XZ' => 'E02002278',
        '6YW' => 'E02002279',
        '6YX' => 'E02002278',
        '6YY' => 'E02002279',
        '6YZ' => 'E02002284',
        '6ZY' => 'E02002281',
        '7AA' => 'E02002285',
        '7AB' => 'E02002285',
        '7AD' => 'E02002285',
        '7AE' => 'E02002285',
        '7AF' => 'E02002285',
        '7AG' => 'E02002285',
        '7AH' => 'E02002285',
        '7AJ' => 'E02002285',
        '7AL' => 'E02002285',
        '7AN' => 'E02002285',
        '7AP' => 'E02002285',
        '7AQ' => 'E02002285',
        '7AR' => 'E02002285',
        '7AS' => 'E02002285',
        '7AT' => 'E02002285',
        '7AU' => 'E02002285',
        '7AW' => 'E02002285',
        '7AX' => 'E02002285',
        '7AY' => 'E02002285',
        '7AZ' => 'E02002285',
        '7BA' => 'E02002285',
        '7BB' => 'E02002285',
        '7BD' => 'E02002285',
        '7BE' => 'E02002285',
        '7BG' => 'E02002285',
        '7BH' => 'E02002285',
        '7BJ' => 'E02002285',
        '7BL' => 'E02002285',
        '7BN' => 'E02002285',
        '7BP' => 'E02002285',
        '7BQ' => 'E02002285',
        '7BT' => 'E02002285',
        '7BU' => 'E02002285',
        '7BW' => 'E02002285',
        '7BX' => 'E02002285',
        '7BY' => 'E02002285',
        '7BZ' => 'E02002285',
        '7DA' => 'E02002285',
        '7DB' => 'E02002285',
        '7DD' => 'E02002285',
        '7DE' => 'E02002285',
        '7DF' => 'E02002285',
        '7DG' => 'E02002285',
        '7DH' => 'E02002285',
        '7DJ' => 'E02002285',
        '7DL' => 'E02002285',
        '7DN' => 'E02002285',
        '7DP' => 'E02002285',
        '7DQ' => 'E02002285',
        '7DR' => 'E02002285',
        '7DS' => 'E02002285',
        '7DT' => 'E02002285',
        '7DU' => 'E02002285',
        '7DW' => 'E02002285',
        '7DX' => 'E02002285',
        '7DY' => 'E02002285',
        '7DZ' => 'E02002285',
        '7EA' => 'E02002285',
        '7EB' => 'E02002285',
        '7ED' => 'E02002285',
        '7EE' => 'E02002285',
        '7EF' => 'E02002285',
        '7EG' => 'E02002285',
        '7EH' => 'E02002285',
        '7EJ' => 'E02002285',
        '7EL' => 'E02002285',
        '7EN' => 'E02002279',
        '7EP' => 'E02002279',
        '7EQ' => 'E02002285',
        '7ER' => 'E02002279',
        '7ES' => 'E02002279',
        '7ET' => 'E02002279',
        '7EU' => 'E02002279',
        '7EW' => 'E02002285',
        '7EX' => 'E02002279',
        '7EY' => 'E02002279',
        '7EZ' => 'E02002279',
        '7FA' => 'E02002285',
        '7FH' => 'E02002279',
        '7HA' => 'E02002285',
        '7HB' => 'E02002279',
        '7HD' => 'E02002279',
        '7HE' => 'E02002279',
        '7HF' => 'E02002279',
        '7HG' => 'E02002279',
        '7HH' => 'E02002285',
        '7HJ' => 'E02002279',
        '7HL' => 'E02002279',
        '7HN' => 'E02002279',
        '7HP' => 'E02002279',
        '7HQ' => 'E02002285',
        '7HR' => 'E02002285',
        '7HS' => 'E02002279',
        '7HT' => 'E02002279',
        '7HU' => 'E02002279',
        '7HW' => 'E02002279',
        '7HX' => 'E02002279',
        '7HY' => 'E02002279',
        '7HZ' => 'E02002279',
        '7JA' => 'E02002279',
        '7JB' => 'E02002279',
        '7JD' => 'E02002279',
        '7JE' => 'E02002279',
        '7JF' => 'E02002279',
        '7JG' => 'E02002279',
        '7JH' => 'E02002279',
        '7JJ' => 'E02002279',
        '7JL' => 'E02002279',
        '7JN' => 'E02002279',
        '7JP' => 'E02002279',
        '7JQ' => 'E02002279',
        '7JR' => 'E02002279',
        '7JS' => 'E02002279',
        '7JT' => 'E02002279',
        '7JW' => 'E02002279',
        '7JX' => 'E02002279',
        '7JY' => 'E02002279',
        '7JZ' => 'E02002279',
        '7LA' => 'E02002279',
        '7LB' => 'E02002285',
        '7LD' => 'E02002285',
        '7LE' => 'E02002285',
        '7LF' => 'E02002285',
        '7LG' => 'E02002285',
        '7LH' => 'E02002285',
        '7LJ' => 'E02002285',
        '7LL' => 'E02002285',
        '7LN' => 'E02002285',
        '7LP' => 'E02002285',
        '7LQ' => 'E02002285',
        '7LR' => 'E02002285',
        '7LS' => 'E02002285',
        '7LT' => 'E02002285',
        '7LU' => 'E02002285',
        '7LW' => 'E02002285',
        '7LX' => 'E02002285',
        '7LY' => 'E02002285',
        '7LZ' => 'E02002285',
        '7NA' => 'E02002285',
        '7NB' => 'E02002285',
        '7ND' => 'E02002285',
        '7NE' => 'E02002285',
        '7NF' => 'E02002285',
        '7NG' => 'E02002285',
        '7NH' => 'E02002285',
        '7NJ' => 'E02002285',
        '7NL' => 'E02002285',
        '7NN' => 'E02002285',
        '7NP' => 'E02002285',
        '7NQ' => 'E02002285',
        '7NR' => 'E02002285',
        '7NS' => 'E02002285',
        '7NT' => 'E02002285',
        '7NU' => 'E02002285',
        '7NW' => 'E02002285',
        '7NX' => 'E02002285',
        '7NY' => 'E02002285',
        '7NZ' => 'E02002285',
        '7PA' => 'E02002285',
        '7PB' => 'E02002285',
        '7PD' => 'E02002285',
        '7PE' => 'E02002285',
        '7PF' => 'E02002285',
        '7PG' => 'E02002285',
        '7PH' => 'E02002285',
        '7PJ' => 'E02002279',
        '7PL' => 'E02002285',
        '7PN' => 'E02002285',
        '7PP' => 'E02002285',
        '7PQ' => 'E02002285',
        '7PR' => 'E02002285',
        '7PS' => 'E02002285',
        '7PT' => 'E02002285',
        '7PU' => 'E02002285',
        '7PW' => 'E02002285',
        '7PX' => 'E02002285',
        '7PY' => 'E02002285',
        '7PZ' => 'E02002285',
        '7QA' => 'E02002285',
        '7QB' => 'E02002285',
        '7QD' => 'E02002285',
        '7QE' => 'E02002285',
        '7QF' => 'E02002285',
        '7QG' => 'E02002285',
        '7QH' => 'E02002285',
        '7QJ' => 'E02002285',
        '7QL' => 'E02002285',
        '7QN' => 'E02002285',
        '7QP' => 'E02002285',
        '7QQ' => 'E02002285',
        '7QR' => 'E02002285',
        '7QS' => 'E02002285',
        '7QT' => 'E02002285',
        '7QU' => 'E02002285',
        '7QW' => 'E02002285',
        '7QX' => 'E02002285',
        '7RA' => 'E02002285',
        '7RB' => 'E02002285',
        '7RD' => 'E02002285',
        '7SZ' => 'E02002285',
        '7WS' => 'E02002284',
        '7WT' => 'E02002284',
        '7WU' => 'E02002281',
        '7WW' => 'E02002284',
        '7WX' => 'E02002281',
        '7WY' => 'E02002281',
        '7WZ' => 'E02002281',
        '7XA' => 'E02002284',
        '7XB' => 'E02002281',
        '7XD' => 'E02002278',
        '7XE' => 'E02002278',
        '7XF' => 'E02002281',
        '7XG' => 'E02002278',
        '7XH' => 'E02002285',
        '7XJ' => 'E02002285',
        '7XL' => 'E02002281',
        '7XN' => 'E02002285',
        '7XP' => 'E02002281',
        '7XQ' => 'E02002285',
        '7XR' => 'E02002281',
        '7XW' => 'E02002281',
        '7XZ' => 'E02002281',
        '7YE' => 'E02002278',
        '7YW' => 'E02002285',
        '7YX' => 'E02002285',
        '7YY' => 'E02002285',
        '7YZ' => 'E02002285',
        '7ZX' => 'E02002281',
        '8AA' => 'E02002281',
        '8AB' => 'E02002278',
        '8AD' => 'E02002278',
        '8AE' => 'E02002285',
        '8AF' => 'E02002285',
        '8AG' => 'E02002285',
        '8AH' => 'E02002285',
        '8AJ' => 'E02002285',
        '8AL' => 'E02002285',
        '8AN' => 'E02002285',
        '8AP' => 'E02002285',
        '8AQ' => 'E02002285',
        '8AR' => 'E02002285',
        '8AS' => 'E02002285',
        '8AT' => 'E02002285',
        '8AU' => 'E02002285',
        '8AW' => 'E02002285',
        '8AX' => 'E02002285',
        '8AY' => 'E02002285',
        '8AZ' => 'E02002285',
        '8BA' => 'E02002285',
        '8BB' => 'E02002285',
        '8BD' => 'E02002285',
        '8BE' => 'E02002285',
        '8BH' => 'E02002278',
        '8BJ' => 'E02002278',
        '8BL' => 'E02002275',
        '8BN' => 'E02002278',
        '8BP' => 'E02002275',
        '8BQ' => 'E02002278',
        '8BS' => 'E02002275',
        '8BT' => 'E02002275',
        '8BU' => 'E02002275',
        '8BW' => 'E02002278',
        '8BX' => 'E02002275',
        '8BY' => 'E02002278',
        '8BZ' => 'E02002275',
        '8DA' => 'E02002275',
        '8DB' => 'E02002275',
        '8DD' => 'E02002275',
        '8DE' => 'E02002275',
        '8DF' => 'E02002278',
        '8DG' => 'E02002278',
        '8DH' => 'E02002278',
        '8DJ' => 'E02002278',
        '8DL' => 'E02002278',
        '8DN' => 'E02002278',
        '8DP' => 'E02002278',
        '8DQ' => 'E02002278',
        '8DR' => 'E02002278',
        '8DS' => 'E02002278',
        '8DT' => 'E02002278',
        '8DU' => 'E02002278',
        '8DW' => 'E02002278',
        '8DX' => 'E02002278',
        '8DY' => 'E02002278',
        '8DZ' => 'E02002278',
        '8EA' => 'E02002278',
        '8EB' => 'E02002278',
        '8ED' => 'E02002278',
        '8EE' => 'E02002278',
        '8EF' => 'E02002278',
        '8EG' => 'E02002278',
        '8EH' => 'E02002278',
        '8EJ' => 'E02002278',
        '8EL' => 'E02002278',
        '8EN' => 'E02002285',
        '8EP' => 'E02002278',
        '8EQ' => 'E02002278',
        '8ER' => 'E02002278',
        '8ES' => 'E02002285',
        '8ET' => 'E02002285',
        '8EU' => 'E02002285',
        '8EW' => 'E02002278',
        '8EX' => 'E02002278',
        '8EY' => 'E02002278',
        '8EZ' => 'E02002278',
        '8FG' => 'E02002278',
        '8HA' => 'E02002278',
        '8HB' => 'E02002278',
        '8HD' => 'E02002278',
        '8HE' => 'E02002278',
        '8HF' => 'E02002278',
        '8HG' => 'E02002278',
        '8HH' => 'E02002278',
        '8HJ' => 'E02002278',
        '8HL' => 'E02002278',
        '8HN' => 'E02002278',
        '8HP' => 'E02002278',
        '8HQ' => 'E02002278',
        '8HR' => 'E02002275',
        '8HS' => 'E02002278',
        '8HT' => 'E02002278',
        '8HU' => 'E02002278',
        '8HW' => 'E02002278',
        '8HX' => 'E02002275',
        '8HY' => 'E02002278',
        '8HZ' => 'E02002278',
        '8JA' => 'E02002278',
        '8JB' => 'E02002278',
        '8JD' => 'E02002278',
        '8JE' => 'E02002278',
        '8JF' => 'E02002278',
        '8JG' => 'E02002278',
        '8JH' => 'E02002278',
        '8JJ' => 'E02002278',
        '8JL' => 'E02002278',
        '8JN' => 'E02002278',
        '8JP' => 'E02002278',
        '8JQ' => 'E02002278',
        '8JR' => 'E02002278',
        '8JS' => 'E02002278',
        '8JT' => 'E02002278',
        '8JU' => 'E02002278',
        '8JW' => 'E02002278',
        '8JX' => 'E02002278',
        '8JY' => 'E02002278',
        '8JZ' => 'E02002278',
        '8LA' => 'E02002278',
        '8LB' => 'E02002278',
        '8LD' => 'E02002278',
        '8LE' => 'E02002278',
        '8LF' => 'E02002278',
        '8LG' => 'E02002278',
        '8LH' => 'E02002278',
        '8LJ' => 'E02002278',
        '8LL' => 'E02002278',
        '8LN' => 'E02002278',
        '8LP' => 'E02002278',
        '8LQ' => 'E02002278',
        '8LR' => 'E02002275',
        '8LS' => 'E02002278',
        '8LT' => 'E02002278',
        '8LU' => 'E02002278',
        '8ND' => 'E02002278',
        '8NX' => 'E02002278',
        '8NY' => 'E02002285',
        '8WZ' => 'E02002281',
        '8XA' => 'E02002285',
        '8XX' => 'E02002278',
        '8XY' => 'E02002281',
        '8XZ' => 'E02002281',
        '8YA' => 'E02002278',
        '8YB' => 'E02002285',
        '8YD' => 'E02002278',
        '8YE' => 'E02002278',
        '8YW' => 'E02002281',
        '8YX' => 'E02002281',
        '8YY' => 'E02002281',
        '8YZ' => 'E02002278',
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
