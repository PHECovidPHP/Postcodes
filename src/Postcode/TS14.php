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
final class TS14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02002532',
        '6AB' => 'E02002532',
        '6AD' => 'E02002532',
        '6AE' => 'E02002532',
        '6AF' => 'E02002532',
        '6AG' => 'E02002532',
        '6AH' => 'E02002532',
        '6AJ' => 'E02002532',
        '6AL' => 'E02002532',
        '6AN' => 'E02002532',
        '6AP' => 'E02002532',
        '6AQ' => 'E02002532',
        '6AR' => 'E02002532',
        '6AS' => 'E02002532',
        '6AT' => 'E02002532',
        '6AU' => 'E02002532',
        '6AW' => 'E02002532',
        '6AX' => 'E02002532',
        '6AY' => 'E02002532',
        '6AZ' => 'E02002532',
        '6BA' => 'E02002532',
        '6BB' => 'E02002532',
        '6BD' => 'E02002532',
        '6BE' => 'E02002532',
        '6BF' => 'E02002533',
        '6BG' => 'E02002532',
        '6BH' => 'E02002532',
        '6BJ' => 'E02002532',
        '6BL' => 'E02002532',
        '6BN' => 'E02002532',
        '6BP' => 'E02002532',
        '6BQ' => 'E02002532',
        '6BS' => 'E02002534',
        '6BT' => 'E02002534',
        '6BU' => 'E02002532',
        '6BW' => 'E02002532',
        '6BX' => 'E02002532',
        '6BY' => 'E02002532',
        '6BZ' => 'E02002532',
        '6DA' => 'E02002534',
        '6DB' => 'E02002532',
        '6DD' => 'E02002534',
        '6DE' => 'E02002534',
        '6DF' => 'E02002534',
        '6DG' => 'E02002534',
        '6DH' => 'E02002534',
        '6DJ' => 'E02002534',
        '6DL' => 'E02002534',
        '6DN' => 'E02002534',
        '6DP' => 'E02002532',
        '6DQ' => 'E02002534',
        '6DR' => 'E02002534',
        '6DS' => 'E02002532',
        '6DT' => 'E02002532',
        '6DU' => 'E02002532',
        '6DW' => 'E02002534',
        '6DX' => 'E02002534',
        '6DY' => 'E02002532',
        '6DZ' => 'E02002532',
        '6EA' => 'E02002532',
        '6EB' => 'E02002532',
        '6ED' => 'E02002532',
        '6EE' => 'E02002532',
        '6EF' => 'E02002532',
        '6EG' => 'E02002532',
        '6EH' => 'E02002532',
        '6EJ' => 'E02002532',
        '6EL' => 'E02002532',
        '6EN' => 'E02002532',
        '6EP' => 'E02002532',
        '6EQ' => 'E02002532',
        '6ER' => 'E02002532',
        '6ES' => 'E02002532',
        '6ET' => 'E02002532',
        '6EU' => 'E02002532',
        '6EW' => 'E02002532',
        '6EX' => 'E02002532',
        '6EY' => 'E02002532',
        '6EZ' => 'E02002532',
        '6FA' => 'E02002533',
        '6FB' => 'E02002533',
        '6FD' => 'E02002532',
        '6FE' => 'E02002532',
        '6FN' => 'E02002532',
        '6GA' => 'E02002532',
        '6GB' => 'E02002534',
        '6GD' => 'E02002532',
        '6GE' => 'E02002532',
        '6GF' => 'E02002532',
        '6GG' => 'E02002532',
        '6GH' => 'E02002532',
        '6GJ' => 'E02002532',
        '6GL' => 'E02002532',
        '6GN' => 'E02002532',
        '6GP' => 'E02002532',
        '6GQ' => 'E02002532',
        '6GR' => 'E02002532',
        '6GS' => 'E02002532',
        '6GT' => 'E02002532',
        '6HA' => 'E02002532',
        '6HB' => 'E02002532',
        '6HD' => 'E02002532',
        '6HE' => 'E02002532',
        '6HF' => 'E02002532',
        '6HG' => 'E02002532',
        '6HH' => 'E02002532',
        '6HJ' => 'E02002532',
        '6HL' => 'E02002532',
        '6HN' => 'E02002532',
        '6HP' => 'E02002532',
        '6HQ' => 'E02002532',
        '6HR' => 'E02002532',
        '6HS' => 'E02002532',
        '6HT' => 'E02002532',
        '6HU' => 'E02002532',
        '6HW' => 'E02002532',
        '6HX' => 'E02002532',
        '6HY' => 'E02002532',
        '6HZ' => 'E02002532',
        '6JA' => 'E02002532',
        '6JB' => 'E02002532',
        '6JD' => 'E02002532',
        '6JE' => 'E02002532',
        '6JF' => 'E02002532',
        '6JG' => 'E02002532',
        '6JH' => 'E02002532',
        '6JJ' => 'E02002532',
        '6JL' => 'E02002532',
        '6JN' => 'E02002532',
        '6JP' => 'E02002532',
        '6JQ' => 'E02002532',
        '6JR' => 'E02002532',
        '6JS' => 'E02002532',
        '6JT' => 'E02002532',
        '6JU' => 'E02002532',
        '6JW' => 'E02002532',
        '6LA' => 'E02002533',
        '6LB' => 'E02002533',
        '6LD' => 'E02002532',
        '6LE' => 'E02002532',
        '6LF' => 'E02002532',
        '6LG' => 'E02002532',
        '6LH' => 'E02002532',
        '6LJ' => 'E02002532',
        '6LL' => 'E02002532',
        '6LN' => 'E02002532',
        '6LP' => 'E02002532',
        '6LQ' => 'E02002532',
        '6LR' => 'E02002532',
        '6LS' => 'E02002532',
        '6LT' => 'E02002532',
        '6LW' => 'E02002532',
        '6LZ' => 'E02002533',
        '6NA' => 'E02002532',
        '6NB' => 'E02002532',
        '6ND' => 'E02002532',
        '6NE' => 'E02002532',
        '6NF' => 'E02002532',
        '6NG' => 'E02002532',
        '6NH' => 'E02002532',
        '6NJ' => 'E02002532',
        '6NL' => 'E02002532',
        '6NN' => 'E02002533',
        '6NP' => 'E02002533',
        '6NQ' => 'E02002532',
        '6NR' => 'E02002532',
        '6NS' => 'E02002532',
        '6NT' => 'E02002532',
        '6NU' => 'E02002532',
        '6NW' => 'E02002533',
        '6NX' => 'E02002532',
        '6NY' => 'E02002532',
        '6PA' => 'E02002532',
        '6PB' => 'E02002532',
        '6PD' => 'E02002532',
        '6PE' => 'E02002532',
        '6PF' => 'E02002532',
        '6PG' => 'E02002532',
        '6PH' => 'E02002532',
        '6PJ' => 'E02002532',
        '6PL' => 'E02002532',
        '6PP' => 'E02002532',
        '6PQ' => 'E02002532',
        '6PR' => 'E02002534',
        '6PS' => 'E02002534',
        '6PT' => 'E02002534',
        '6PU' => 'E02002534',
        '6PW' => 'E02002532',
        '6PX' => 'E02002534',
        '6PY' => 'E02002530',
        '6PZ' => 'E02002534',
        '6QA' => 'E02002534',
        '6QB' => 'E02002526',
        '6QD' => 'E02002532',
        '6QE' => 'E02002532',
        '6QF' => 'E02002532',
        '6QG' => 'E02002532',
        '6QH' => 'E02002533',
        '6QJ' => 'E02002532',
        '6QL' => 'E02002533',
        '6QN' => 'E02002533',
        '6QP' => 'E02002533',
        '6QQ' => 'E02002532',
        '6QR' => 'E02002532',
        '6QS' => 'E02002532',
        '6QT' => 'E02002532',
        '6QU' => 'E02002533',
        '6QW' => 'E02002533',
        '6QX' => 'E02002532',
        '6QY' => 'E02002532',
        '6QZ' => 'E02002532',
        '6RA' => 'E02002532',
        '6RB' => 'E02002532',
        '6RD' => 'E02002532',
        '6RE' => 'E02002532',
        '6RF' => 'E02002532',
        '6RG' => 'E02002534',
        '6RH' => 'E02002532',
        '6RJ' => 'E02002532',
        '6RL' => 'E02002533',
        '6RN' => 'E02002533',
        '6RP' => 'E02002532',
        '6RQ' => 'E02002532',
        '6RR' => 'E02002532',
        '6RS' => 'E02002532',
        '6RT' => 'E02002532',
        '6RU' => 'E02002533',
        '6RW' => 'E02002532',
        '6SA' => 'E02002532',
        '6TA' => 'E02002532',
        '6TB' => 'E02002532',
        '6TD' => 'E02002532',
        '6TE' => 'E02002532',
        '6TF' => 'E02002532',
        '6TG' => 'E02002532',
        '6TH' => 'E02002532',
        '6TJ' => 'E02002532',
        '6TL' => 'E02002532',
        '6TN' => 'E02002532',
        '6TP' => 'E02002532',
        '6TQ' => 'E02002532',
        '6TR' => 'E02002532',
        '6TS' => 'E02002532',
        '6TT' => 'E02002532',
        '6TU' => 'E02002532',
        '6TW' => 'E02002532',
        '6TX' => 'E02002532',
        '6TY' => 'E02002532',
        '6WA' => 'E02002532',
        '6WN' => 'E02002532',
        '6WP' => 'E02002532',
        '6WQ' => 'E02002532',
        '6WR' => 'E02002532',
        '6WS' => 'E02002532',
        '6WT' => 'E02002532',
        '6WU' => 'E02002532',
        '6WW' => 'E02002532',
        '6WX' => 'E02002532',
        '6WY' => 'E02002532',
        '6WZ' => 'E02002532',
        '6YA' => 'E02002532',
        '6YB' => 'E02002532',
        '6YD' => 'E02002532',
        '6YE' => 'E02002532',
        '6YF' => 'E02002532',
        '6YG' => 'E02002532',
        '6YJ' => 'E02002532',
        '6YN' => 'E02002532',
        '6YP' => 'E02002532',
        '6YQ' => 'E02002532',
        '6YR' => 'E02002534',
        '6YS' => 'E02002534',
        '6YT' => 'E02002532',
        '6YU' => 'E02002532',
        '6YW' => 'E02002534',
        '6YX' => 'E02002532',
        '6YZ' => 'E02002532',
        '6ZF' => 'E02002532',
        '7AA' => 'E02002534',
        '7AB' => 'E02002534',
        '7AD' => 'E02002534',
        '7AE' => 'E02002534',
        '7AF' => 'E02002534',
        '7AG' => 'E02002532',
        '7AH' => 'E02002532',
        '7AJ' => 'E02002532',
        '7AL' => 'E02002534',
        '7AN' => 'E02002534',
        '7AP' => 'E02002534',
        '7AQ' => 'E02002532',
        '7AR' => 'E02002534',
        '7AS' => 'E02002534',
        '7AT' => 'E02002534',
        '7AU' => 'E02002534',
        '7AW' => 'E02002534',
        '7AX' => 'E02002534',
        '7AY' => 'E02002534',
        '7AZ' => 'E02002534',
        '7BA' => 'E02002534',
        '7BB' => 'E02002534',
        '7BD' => 'E02002534',
        '7BE' => 'E02002534',
        '7BF' => 'E02002532',
        '7BG' => 'E02002534',
        '7BH' => 'E02002534',
        '7BJ' => 'E02002534',
        '7BL' => 'E02002534',
        '7BN' => 'E02002534',
        '7BP' => 'E02002534',
        '7BQ' => 'E02002534',
        '7BS' => 'E02002534',
        '7BT' => 'E02002534',
        '7BU' => 'E02002534',
        '7BW' => 'E02002534',
        '7BX' => 'E02002534',
        '7BY' => 'E02002534',
        '7BZ' => 'E02002534',
        '7DA' => 'E02002534',
        '7DB' => 'E02002534',
        '7DD' => 'E02002534',
        '7DE' => 'E02002534',
        '7DF' => 'E02002534',
        '7DG' => 'E02002532',
        '7DH' => 'E02002532',
        '7DJ' => 'E02002532',
        '7DL' => 'E02002532',
        '7DN' => 'E02002533',
        '7DP' => 'E02002533',
        '7DQ' => 'E02002534',
        '7DR' => 'E02002533',
        '7DS' => 'E02002533',
        '7DT' => 'E02002533',
        '7DU' => 'E02002533',
        '7DW' => 'E02002533',
        '7DX' => 'E02002533',
        '7DY' => 'E02002533',
        '7DZ' => 'E02002533',
        '7EA' => 'E02002533',
        '7EB' => 'E02002533',
        '7ED' => 'E02002533',
        '7EE' => 'E02002533',
        '7EF' => 'E02002533',
        '7EG' => 'E02002533',
        '7EH' => 'E02002533',
        '7EJ' => 'E02002533',
        '7EL' => 'E02002533',
        '7EN' => 'E02002533',
        '7EP' => 'E02002533',
        '7EQ' => 'E02002533',
        '7ER' => 'E02002533',
        '7ES' => 'E02002533',
        '7ET' => 'E02002533',
        '7EU' => 'E02002533',
        '7EW' => 'E02002533',
        '7EX' => 'E02002533',
        '7EY' => 'E02002533',
        '7EZ' => 'E02002533',
        '7FB' => 'E02002532',
        '7FD' => 'E02002532',
        '7FE' => 'E02002532',
        '7FF' => 'E02002532',
        '7FG' => 'E02002532',
        '7FH' => 'E02002532',
        '7FJ' => 'E02002532',
        '7FL' => 'E02002532',
        '7GA' => 'E02002532',
        '7GB' => 'E02002532',
        '7GD' => 'E02002534',
        '7GE' => 'E02002534',
        '7HA' => 'E02002533',
        '7HB' => 'E02002533',
        '7HD' => 'E02002533',
        '7HE' => 'E02002533',
        '7JA' => 'E02002534',
        '7LA' => 'E02002534',
        '7LB' => 'E02002534',
        '7LD' => 'E02002534',
        '7LE' => 'E02002534',
        '7LF' => 'E02002534',
        '7LG' => 'E02002534',
        '7LH' => 'E02002534',
        '7LJ' => 'E02002534',
        '7LL' => 'E02002534',
        '7LN' => 'E02002534',
        '7LP' => 'E02002534',
        '7LQ' => 'E02002534',
        '7LR' => 'E02002534',
        '7LS' => 'E02002534',
        '7LT' => 'E02002534',
        '7LU' => 'E02002534',
        '7LW' => 'E02002534',
        '7LX' => 'E02002534',
        '7LY' => 'E02002534',
        '7LZ' => 'E02002534',
        '7NA' => 'E02002534',
        '7NB' => 'E02002534',
        '7ND' => 'E02002534',
        '7NE' => 'E02002534',
        '7NF' => 'E02002534',
        '7NG' => 'E02002534',
        '7NH' => 'E02002534',
        '7NJ' => 'E02002534',
        '7NL' => 'E02002534',
        '7NN' => 'E02002532',
        '7NP' => 'E02002532',
        '7NQ' => 'E02002534',
        '7PA' => 'E02002533',
        '7PB' => 'E02002533',
        '7PD' => 'E02002533',
        '7PE' => 'E02002533',
        '7PF' => 'E02002533',
        '7PG' => 'E02002533',
        '7PH' => 'E02002533',
        '7PJ' => 'E02002533',
        '7PL' => 'E02002533',
        '7PN' => 'E02002533',
        '7PP' => 'E02002533',
        '7PQ' => 'E02002533',
        '7PR' => 'E02002534',
        '7PS' => 'E02002534',
        '7PT' => 'E02002534',
        '7PU' => 'E02002534',
        '7PW' => 'E02002533',
        '7PX' => 'E02002534',
        '7PY' => 'E02002533',
        '7WA' => 'E02002534',
        '7WW' => 'E02002532',
        '7WY' => 'E02002532',
        '7WZ' => 'E02002534',
        '7YP' => 'E02002534',
        '7YR' => 'E02002532',
        '7YS' => 'E02002534',
        '7YT' => 'E02002533',
        '7YU' => 'E02002532',
        '7YW' => 'E02002532',
        '7YX' => 'E02002534',
        '7YY' => 'E02002534',
        '8AA' => 'E02002533',
        '8AB' => 'E02002533',
        '8AD' => 'E02002533',
        '8AE' => 'E02002533',
        '8AF' => 'E02002533',
        '8AG' => 'E02002533',
        '8AH' => 'E02002533',
        '8AJ' => 'E02002533',
        '8AL' => 'E02002533',
        '8AN' => 'E02002533',
        '8AP' => 'E02002533',
        '8AQ' => 'E02002533',
        '8AR' => 'E02002533',
        '8AS' => 'E02002533',
        '8AT' => 'E02002533',
        '8AU' => 'E02002533',
        '8AW' => 'E02002533',
        '8AX' => 'E02002533',
        '8BD' => 'E02002534',
        '8BE' => 'E02002533',
        '8BG' => 'E02002533',
        '8BH' => 'E02002533',
        '8BJ' => 'E02002533',
        '8BL' => 'E02002533',
        '8BN' => 'E02002533',
        '8BP' => 'E02002533',
        '8BQ' => 'E02002533',
        '8BS' => 'E02002533',
        '8BT' => 'E02002533',
        '8BU' => 'E02002533',
        '8BW' => 'E02002533',
        '8BX' => 'E02002533',
        '8BY' => 'E02002533',
        '8BZ' => 'E02002533',
        '8DA' => 'E02002533',
        '8DB' => 'E02002533',
        '8DD' => 'E02002533',
        '8DE' => 'E02002533',
        '8DF' => 'E02002533',
        '8DG' => 'E02002533',
        '8DH' => 'E02002533',
        '8DJ' => 'E02002533',
        '8DL' => 'E02002533',
        '8DN' => 'E02002533',
        '8DP' => 'E02002534',
        '8DQ' => 'E02002533',
        '8DR' => 'E02002534',
        '8DS' => 'E02002533',
        '8DT' => 'E02002533',
        '8DU' => 'E02002533',
        '8DW' => 'E02002533',
        '8DX' => 'E02002534',
        '8DY' => 'E02002533',
        '8DZ' => 'E02002533',
        '8EA' => 'E02002533',
        '8EB' => 'E02002533',
        '8ED' => 'E02002533',
        '8EE' => 'E02002534',
        '8EF' => 'E02002533',
        '8EG' => 'E02002533',
        '8EH' => 'E02002534',
        '8EJ' => 'E02002533',
        '8EL' => 'E02002534',
        '8EN' => 'E02002534',
        '8EP' => 'E02002534',
        '8EQ' => 'E02002534',
        '8ER' => 'E02002534',
        '8ES' => 'E02002534',
        '8ET' => 'E02002534',
        '8EU' => 'E02002533',
        '8EW' => 'E02002534',
        '8EX' => 'E02002534',
        '8EY' => 'E02002534',
        '8EZ' => 'E02002533',
        '8FA' => 'E02002533',
        '8FB' => 'E02002534',
        '8FD' => 'E02002534',
        '8FE' => 'E02002534',
        '8HA' => 'E02002533',
        '8HB' => 'E02002534',
        '8HD' => 'E02002534',
        '8HE' => 'E02002534',
        '8HF' => 'E02002534',
        '8HG' => 'E02002534',
        '8HH' => 'E02002534',
        '8HJ' => 'E02002534',
        '8HL' => 'E02002533',
        '8HN' => 'E02002533',
        '8HP' => 'E02002533',
        '8HQ' => 'E02002534',
        '8HR' => 'E02002533',
        '8HS' => 'E02002533',
        '8HT' => 'E02002533',
        '8HU' => 'E02002533',
        '8HW' => 'E02002533',
        '8HX' => 'E02002533',
        '8HY' => 'E02002533',
        '8HZ' => 'E02002534',
        '8JA' => 'E02002534',
        '8JB' => 'E02002534',
        '8JD' => 'E02002534',
        '8JE' => 'E02002534',
        '8JF' => 'E02002534',
        '8JG' => 'E02002534',
        '8JH' => 'E02002534',
        '8JJ' => 'E02002534',
        '8JL' => 'E02002534',
        '8JN' => 'E02002534',
        '8JP' => 'E02002533',
        '8JQ' => 'E02002534',
        '8JR' => 'E02002533',
        '8JS' => 'E02002532',
        '8JT' => 'E02002534',
        '8JU' => 'E02002533',
        '8JW' => 'E02002534',
        '8JX' => 'E02002534',
        '8JY' => 'E02002534',
        '8JZ' => 'E02002534',
        '8LA' => 'E02002533',
        '8LB' => 'E02002533',
        '8LD' => 'E02002533',
        '8LE' => 'E02002533',
        '8LF' => 'E02002533',
        '8LG' => 'E02002533',
        '8LH' => 'E02002533',
        '8LJ' => 'E02002533',
        '8LL' => 'E02002533',
        '8LN' => 'E02002533',
        '8LP' => 'E02002533',
        '8LQ' => 'E02002533',
        '8LR' => 'E02002534',
        '8LS' => 'E02002533',
        '8LT' => 'E02002533',
        '8LU' => 'E02002533',
        '8LW' => 'E02002533',
        '8LX' => 'E02002533',
        '8LY' => 'E02002533',
        '8LZ' => 'E02002533',
        '8NA' => 'E02002533',
        '8NB' => 'E02002533',
        '8ND' => 'E02002533',
        '8PA' => 'E02002533',
        '8PB' => 'E02002533',
        '8PD' => 'E02002533',
        '8PE' => 'E02002533',
        '8PF' => 'E02002533',
        '8PG' => 'E02002533',
        '8PH' => 'E02002533',
        '8PJ' => 'E02002533',
        '8PL' => 'E02002533',
        '8PN' => 'E02002533',
        '8PP' => 'E02002533',
        '8PQ' => 'E02002533',
        '8PR' => 'E02002533',
        '8PW' => 'E02002533',
        '8WS' => 'E02002532',
        '8WT' => 'E02002532',
        '8WU' => 'E02002532',
        '8WW' => 'E02002532',
        '8WX' => 'E02002532',
        '8WY' => 'E02002532',
        '8WZ' => 'E02002533',
        '8XY' => 'E02002532',
        '8XZ' => 'E02002533',
        '8YA' => 'E02002533',
        '8YB' => 'E02002532',
        '8YD' => 'E02002532',
        '8YE' => 'E02002532',
        '8YF' => 'E02002533',
        '8YG' => 'E02002533',
        '8YH' => 'E02002532',
        '8YJ' => 'E02002533',
        '8YL' => 'E02002534',
        '8YN' => 'E02002534',
        '8YP' => 'E02002534',
        '8YQ' => 'E02002532',
        '8YR' => 'E02002533',
        '8YS' => 'E02002532',
        '8YT' => 'E02002532',
        '8YU' => 'E02002532',
        '8YW' => 'E02002532',
        '8YX' => 'E02002533',
        '8YY' => 'E02002533',
        '8YZ' => 'E02002532',
        '9AA' => 'E02002532',
        '9AB' => 'E02002532',
        '9AD' => 'E02002532',
        '9AE' => 'E02002532',
        '9AF' => 'E02002532',
        '9AG' => 'E02002532',
        '9AH' => 'E02002532',
        '9AJ' => 'E02002532',
        '9AL' => 'E02002532',
        '9AN' => 'E02002532',
        '9AQ' => 'E02002532',
        '9AR' => 'E02002532',
        '9AS' => 'E02002532',
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
