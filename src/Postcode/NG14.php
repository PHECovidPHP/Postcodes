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
final class NG14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02005872',
        '5AB' => 'E02005872',
        '5AD' => 'E02005872',
        '5AE' => 'E02005872',
        '5AF' => 'E02005872',
        '5AG' => 'E02005872',
        '5AH' => 'E02005872',
        '5AJ' => 'E02005872',
        '5AL' => 'E02005872',
        '5AN' => 'E02005872',
        '5AP' => 'E02005872',
        '5AQ' => 'E02005872',
        '5AR' => 'E02005872',
        '5AS' => 'E02005872',
        '5AT' => 'E02005872',
        '5AU' => 'E02005872',
        '5AW' => 'E02005872',
        '5AX' => 'E02005872',
        '5AY' => 'E02005872',
        '5AZ' => 'E02005872',
        '5BA' => 'E02005872',
        '5BB' => 'E02005872',
        '5BD' => 'E02005872',
        '5BE' => 'E02005872',
        '5BF' => 'E02005872',
        '5BG' => 'E02005872',
        '5BH' => 'E02005872',
        '5BJ' => 'E02005872',
        '5BL' => 'E02005872',
        '5BN' => 'E02005872',
        '5BP' => 'E02005872',
        '5BQ' => 'E02005872',
        '5BS' => 'E02005872',
        '5BT' => 'E02005872',
        '5BU' => 'E02005872',
        '5BW' => 'E02005872',
        '5BX' => 'E02005872',
        '5BY' => 'E02005872',
        '5BZ' => 'E02005872',
        '5DA' => 'E02005872',
        '5DB' => 'E02005872',
        '5DD' => 'E02005872',
        '5DE' => 'E02005872',
        '5DF' => 'E02005872',
        '5DG' => 'E02005872',
        '5DH' => 'E02005872',
        '5DJ' => 'E02005872',
        '5DL' => 'E02005872',
        '5DN' => 'E02005872',
        '5DP' => 'E02005872',
        '5DQ' => 'E02005872',
        '5DR' => 'E02005872',
        '5DS' => 'E02005872',
        '5DT' => 'E02005872',
        '5DU' => 'E02005872',
        '5DW' => 'E02005872',
        '5DX' => 'E02005872',
        '5DY' => 'E02005872',
        '5DZ' => 'E02005872',
        '5EA' => 'E02005872',
        '5EB' => 'E02005872',
        '5ED' => 'E02005872',
        '5EE' => 'E02005872',
        '5EF' => 'E02005872',
        '5EG' => 'E02005872',
        '5EH' => 'E02005872',
        '5EJ' => 'E02005872',
        '5EL' => 'E02005872',
        '5EN' => 'E02005872',
        '5EP' => 'E02005872',
        '5EQ' => 'E02005872',
        '5ER' => 'E02005872',
        '5ET' => 'E02005872',
        '5EU' => 'E02005872',
        '5EW' => 'E02005872',
        '5EX' => 'E02005872',
        '5EY' => 'E02005872',
        '5EZ' => 'E02005872',
        '5FA' => 'E02005876',
        '5FB' => 'E02005872',
        '5FD' => 'E02005872',
        '5FE' => 'E02005872',
        '5FF' => 'E02005872',
        '5FG' => 'E02005872',
        '5FH' => 'E02005872',
        '5FJ' => 'E02005872',
        '5FL' => 'E02005872',
        '5FN' => 'E02005872',
        '5FP' => 'E02005872',
        '5FQ' => 'E02005872',
        '5FR' => 'E02005872',
        '5FS' => 'E02005872',
        '5FT' => 'E02005872',
        '5FU' => 'E02005872',
        '5FW' => 'E02005872',
        '5FX' => 'E02005872',
        '5FY' => 'E02005872',
        '5FZ' => 'E02005872',
        '5GA' => 'E02005872',
        '5GB' => 'E02005872',
        '5GD' => 'E02005872',
        '5GE' => 'E02005872',
        '5GF' => 'E02005872',
        '5GG' => 'E02005872',
        '5GH' => 'E02005872',
        '5GJ' => 'E02005872',
        '5GL' => 'E02005872',
        '5GN' => 'E02005872',
        '5GP' => 'E02005872',
        '5GQ' => 'E02005872',
        '5GR' => 'E02005905',
        '5GS' => 'E02005905',
        '5GT' => 'E02005905',
        '5GU' => 'E02005905',
        '5GW' => 'E02005905',
        '5GX' => 'E02005905',
        '5GY' => 'E02005905',
        '5GZ' => 'E02005905',
        '5HA' => 'E02005905',
        '5HB' => 'E02005905',
        '5HD' => 'E02005872',
        '5HE' => 'E02005872',
        '5HF' => 'E02005872',
        '5HH' => 'E02005872',
        '5HJ' => 'E02005872',
        '5HL' => 'E02005872',
        '5HN' => 'E02005872',
        '5HP' => 'E02005872',
        '5HQ' => 'E02005872',
        '5HR' => 'E02005872',
        '5HS' => 'E02005872',
        '5HT' => 'E02005872',
        '5HU' => 'E02005872',
        '5HW' => 'E02005872',
        '5HX' => 'E02005872',
        '5HY' => 'E02005872',
        '5HZ' => 'E02005872',
        '5JA' => 'E02005872',
        '5JB' => 'E02005872',
        '5JD' => 'E02005872',
        '5JE' => 'E02005872',
        '5UY' => 'E02005872',
        '5UZ' => 'E02005872',
        '5WA' => 'E02005872',
        '5WB' => 'E02005872',
        '5WD' => 'E02005872',
        '5WE' => 'E02005872',
        '5WF' => 'E02005872',
        '5WG' => 'E02005872',
        '5WH' => 'E02005872',
        '5WJ' => 'E02005872',
        '5WL' => 'E02005872',
        '5WN' => 'E02005872',
        '5WP' => 'E02005872',
        '5WQ' => 'E02005872',
        '5WR' => 'E02005872',
        '5WS' => 'E02005872',
        '5WT' => 'E02005872',
        '5WU' => 'E02005872',
        '5WW' => 'E02005872',
        '5WX' => 'E02005872',
        '5WY' => 'E02005872',
        '5WZ' => 'E02005872',
        '5XA' => 'E02005872',
        '5XB' => 'E02005872',
        '5XZ' => 'E02005872',
        '5YD' => 'E02005872',
        '5YE' => 'E02005872',
        '5ZR' => 'E02005872',
        '5ZY' => 'E02005872',
        '5ZZ' => 'E02005872',
        '6AA' => 'E02005905',
        '6AB' => 'E02005905',
        '6AD' => 'E02005905',
        '6AE' => 'E02005905',
        '6AF' => 'E02005905',
        '6AG' => 'E02005905',
        '6AH' => 'E02005905',
        '6AJ' => 'E02005905',
        '6AL' => 'E02005905',
        '6AN' => 'E02005905',
        '6AP' => 'E02005897',
        '6AQ' => 'E02005905',
        '6AR' => 'E02005905',
        '6AS' => 'E02005905',
        '6AT' => 'E02005905',
        '6AU' => 'E02005905',
        '6AW' => 'E02005905',
        '6AX' => 'E02005905',
        '6AY' => 'E02005905',
        '6AZ' => 'E02005905',
        '6BA' => 'E02005905',
        '6BB' => 'E02005905',
        '6BD' => 'E02005905',
        '6BE' => 'E02005905',
        '6BF' => 'E02005905',
        '6BG' => 'E02005876',
        '6BH' => 'E02005876',
        '6BJ' => 'E02005905',
        '6BL' => 'E02005876',
        '6BN' => 'E02005866',
        '6BP' => 'E02005866',
        '6BS' => 'E02005866',
        '6BT' => 'E02005866',
        '6BU' => 'E02005866',
        '6BW' => 'E02005866',
        '6BX' => 'E02005866',
        '6BY' => 'E02005866',
        '6BZ' => 'E02005866',
        '6DA' => 'E02005866',
        '6DB' => 'E02005866',
        '6DD' => 'E02005866',
        '6DE' => 'E02005866',
        '6DF' => 'E02005866',
        '6DG' => 'E02005866',
        '6DH' => 'E02005866',
        '6DJ' => 'E02005866',
        '6DL' => 'E02005866',
        '6DN' => 'E02005866',
        '6DP' => 'E02005866',
        '6DQ' => 'E02005866',
        '6DR' => 'E02005866',
        '6DS' => 'E02005866',
        '6DT' => 'E02005866',
        '6DU' => 'E02005866',
        '6DW' => 'E02005866',
        '6DX' => 'E02005866',
        '6DY' => 'E02005866',
        '6DZ' => 'E02005866',
        '6EA' => 'E02005866',
        '6EB' => 'E02005866',
        '6ED' => 'E02005866',
        '6EE' => 'E02005866',
        '6EF' => 'E02005866',
        '6EG' => 'E02005872',
        '6EH' => 'E02005872',
        '6EJ' => 'E02005866',
        '6EL' => 'E02005866',
        '6EN' => 'E02005866',
        '6EP' => 'E02005866',
        '6EQ' => 'E02005866',
        '6ER' => 'E02005866',
        '6ES' => 'E02005866',
        '6ET' => 'E02005866',
        '6EU' => 'E02005866',
        '6EW' => 'E02005866',
        '6EX' => 'E02005866',
        '6EY' => 'E02005866',
        '6FA' => 'E02005866',
        '6FB' => 'E02005866',
        '6FD' => 'E02005866',
        '6FE' => 'E02005866',
        '6FF' => 'E02005866',
        '6FG' => 'E02005866',
        '6FH' => 'E02005866',
        '6FJ' => 'E02005866',
        '6FL' => 'E02005866',
        '6FN' => 'E02005866',
        '6FP' => 'E02005866',
        '6FQ' => 'E02005866',
        '6FR' => 'E02005866',
        '6FS' => 'E02005866',
        '6FT' => 'E02005866',
        '6FU' => 'E02005866',
        '6FW' => 'E02005866',
        '6FX' => 'E02005866',
        '6FY' => 'E02005866',
        '6FZ' => 'E02005866',
        '6GA' => 'E02005866',
        '6GB' => 'E02005866',
        '6GD' => 'E02005866',
        '6GE' => 'E02005866',
        '6GF' => 'E02005866',
        '6GG' => 'E02005866',
        '6GH' => 'E02005866',
        '6GJ' => 'E02005866',
        '6GL' => 'E02005866',
        '6GN' => 'E02005866',
        '6GP' => 'E02005866',
        '6GQ' => 'E02005866',
        '6GR' => 'E02005866',
        '6GS' => 'E02005866',
        '6GT' => 'E02005866',
        '6GU' => 'E02005866',
        '6GW' => 'E02005866',
        '6GX' => 'E02005866',
        '6GY' => 'E02005866',
        '6GZ' => 'E02005866',
        '6HA' => 'E02005866',
        '6HB' => 'E02005866',
        '6HD' => 'E02005866',
        '6HE' => 'E02005866',
        '6HF' => 'E02005866',
        '6HG' => 'E02005866',
        '6HH' => 'E02005866',
        '6HJ' => 'E02005866',
        '6HL' => 'E02005866',
        '6HN' => 'E02005866',
        '6HP' => 'E02005866',
        '6HQ' => 'E02005866',
        '6HR' => 'E02005866',
        '6HS' => 'E02005866',
        '6HT' => 'E02005866',
        '6HU' => 'E02005866',
        '6HW' => 'E02005866',
        '6HX' => 'E02005866',
        '6HY' => 'E02005866',
        '6HZ' => 'E02005866',
        '6JA' => 'E02005866',
        '6JB' => 'E02005866',
        '6JD' => 'E02005866',
        '6JE' => 'E02005866',
        '6JF' => 'E02005866',
        '6JG' => 'E02005866',
        '6JH' => 'E02005866',
        '6JJ' => 'E02005866',
        '6JL' => 'E02005866',
        '6JN' => 'E02005866',
        '6JP' => 'E02005866',
        '6JQ' => 'E02005866',
        '6JR' => 'E02005866',
        '6JS' => 'E02005866',
        '6JT' => 'E02005866',
        '6JU' => 'E02005866',
        '6JW' => 'E02005866',
        '6JX' => 'E02005866',
        '6JY' => 'E02005866',
        '6JZ' => 'E02005866',
        '6LA' => 'E02005866',
        '6LB' => 'E02005866',
        '6LD' => 'E02005866',
        '6LE' => 'E02005866',
        '6LF' => 'E02005866',
        '6LG' => 'E02005866',
        '6LH' => 'E02005866',
        '6LJ' => 'E02005866',
        '6LL' => 'E02005866',
        '6LN' => 'E02005866',
        '6LP' => 'E02005866',
        '6LQ' => 'E02005866',
        '6LR' => 'E02005866',
        '6LS' => 'E02005866',
        '6LT' => 'E02005866',
        '6LU' => 'E02005866',
        '6LW' => 'E02005866',
        '6LX' => 'E02005866',
        '6LY' => 'E02005866',
        '6LZ' => 'E02005866',
        '6NA' => 'E02005866',
        '6NB' => 'E02005866',
        '6ND' => 'E02005866',
        '6NE' => 'E02005866',
        '6NF' => 'E02005866',
        '6NG' => 'E02005866',
        '6NH' => 'E02005866',
        '6NJ' => 'E02005866',
        '6NL' => 'E02005866',
        '6NN' => 'E02005866',
        '6NP' => 'E02005866',
        '6NQ' => 'E02005866',
        '6NR' => 'E02005866',
        '6NS' => 'E02005866',
        '6NT' => 'E02005866',
        '6NU' => 'E02005866',
        '6NW' => 'E02005866',
        '6NX' => 'E02005866',
        '6NY' => 'E02005866',
        '6NZ' => 'E02005866',
        '6PA' => 'E02005866',
        '6PB' => 'E02005866',
        '6PD' => 'E02005866',
        '6PE' => 'E02005866',
        '6PF' => 'E02005866',
        '6PG' => 'E02005866',
        '6PH' => 'E02005866',
        '6PJ' => 'E02005866',
        '6PL' => 'E02005866',
        '6PN' => 'E02005866',
        '6PP' => 'E02005866',
        '6PQ' => 'E02005866',
        '6PS' => 'E02005866',
        '6PT' => 'E02005866',
        '6PU' => 'E02005866',
        '6PW' => 'E02005866',
        '6PX' => 'E02005866',
        '6PY' => 'E02005866',
        '6PZ' => 'E02005866',
        '6QA' => 'E02005866',
        '6QB' => 'E02005866',
        '6QD' => 'E02005866',
        '6QE' => 'E02005866',
        '6QF' => 'E02005866',
        '6QG' => 'E02005866',
        '6QH' => 'E02005866',
        '6QJ' => 'E02005866',
        '6QL' => 'E02005866',
        '6QN' => 'E02005866',
        '6QP' => 'E02005866',
        '6QQ' => 'E02005876',
        '6QR' => 'E02005866',
        '6QS' => 'E02005866',
        '6QT' => 'E02005866',
        '6QU' => 'E02005866',
        '6QW' => 'E02005866',
        '6QX' => 'E02005866',
        '6QY' => 'E02005866',
        '6QZ' => 'E02005866',
        '6RA' => 'E02005866',
        '6RB' => 'E02005866',
        '6RD' => 'E02005905',
        '6RE' => 'E02005866',
        '6RF' => 'E02005866',
        '6RG' => 'E02005866',
        '6RH' => 'E02005866',
        '6RJ' => 'E02005866',
        '6RL' => 'E02005866',
        '6RP' => 'E02005905',
        '6RQ' => 'E02005866',
        '6RR' => 'E02005866',
        '6RS' => 'E02005866',
        '6RT' => 'E02005905',
        '6RU' => 'E02005866',
        '6RW' => 'E02005866',
        '6RX' => 'E02005866',
        '6RY' => 'E02005866',
        '6RZ' => 'E02005866',
        '6SA' => 'E02005866',
        '6SB' => 'E02005905',
        '6SD' => 'E02005866',
        '6SE' => 'E02005866',
        '6SG' => 'E02005866',
        '6SH' => 'E02005866',
        '6SJ' => 'E02005866',
        '6SQ' => 'E02005866',
        '6SR' => 'E02005866',
        '6TR' => 'E02005905',
        '6WA' => 'E02005876',
        '6WB' => 'E02005876',
        '6WD' => 'E02005866',
        '6WE' => 'E02005876',
        '6WF' => 'E02005905',
        '6WG' => 'E02005876',
        '6WH' => 'E02005876',
        '6WJ' => 'E02005876',
        '6WL' => 'E02005876',
        '6WN' => 'E02005866',
        '6WP' => 'E02005866',
        '6WQ' => 'E02005905',
        '6WR' => 'E02005866',
        '6WS' => 'E02005876',
        '6WT' => 'E02005876',
        '6WU' => 'E02005905',
        '6WW' => 'E02005876',
        '6WX' => 'E02005876',
        '6WY' => 'E02005866',
        '6WZ' => 'E02005876',
        '6XA' => 'E02005866',
        '6YZ' => 'E02005866',
        '6ZZ' => 'E02005905',
        '7AA' => 'E02005905',
        '7AB' => 'E02005905',
        '7AD' => 'E02005905',
        '7AE' => 'E02005905',
        '7AF' => 'E02005905',
        '7AG' => 'E02005905',
        '7AH' => 'E02005905',
        '7AJ' => 'E02005905',
        '7AL' => 'E02005905',
        '7AN' => 'E02005905',
        '7AP' => 'E02005905',
        '7AQ' => 'E02005905',
        '7AR' => 'E02005905',
        '7AS' => 'E02005905',
        '7AT' => 'E02005905',
        '7AU' => 'E02005905',
        '7AW' => 'E02005905',
        '7AX' => 'E02005905',
        '7AY' => 'E02005905',
        '7AZ' => 'E02005905',
        '7BA' => 'E02005905',
        '7BB' => 'E02005905',
        '7BD' => 'E02005905',
        '7BE' => 'E02005905',
        '7BF' => 'E02005905',
        '7BG' => 'E02005905',
        '7BH' => 'E02005905',
        '7BJ' => 'E02005905',
        '7BL' => 'E02005905',
        '7BN' => 'E02005905',
        '7BP' => 'E02005905',
        '7BQ' => 'E02005905',
        '7BS' => 'E02005905',
        '7BT' => 'E02005905',
        '7BU' => 'E02005905',
        '7BW' => 'E02005905',
        '7BX' => 'E02005905',
        '7BY' => 'E02005905',
        '7BZ' => 'E02005905',
        '7DA' => 'E02005905',
        '7DB' => 'E02005905',
        '7DD' => 'E02005905',
        '7DE' => 'E02005905',
        '7DF' => 'E02005905',
        '7DG' => 'E02005905',
        '7DH' => 'E02005905',
        '7DJ' => 'E02005905',
        '7DL' => 'E02005905',
        '7DN' => 'E02005905',
        '7DP' => 'E02005905',
        '7DQ' => 'E02005905',
        '7DR' => 'E02005905',
        '7DS' => 'E02005905',
        '7DT' => 'E02005905',
        '7DU' => 'E02005905',
        '7DW' => 'E02005905',
        '7DX' => 'E02005905',
        '7DY' => 'E02005905',
        '7DZ' => 'E02005905',
        '7EA' => 'E02005905',
        '7EB' => 'E02005905',
        '7ED' => 'E02005905',
        '7EE' => 'E02005905',
        '7EF' => 'E02005905',
        '7EG' => 'E02005905',
        '7EH' => 'E02005905',
        '7EJ' => 'E02005905',
        '7EL' => 'E02005905',
        '7EN' => 'E02005905',
        '7EP' => 'E02005905',
        '7EQ' => 'E02005905',
        '7ER' => 'E02005905',
        '7ES' => 'E02005905',
        '7ET' => 'E02005905',
        '7EU' => 'E02005905',
        '7EW' => 'E02005905',
        '7EX' => 'E02005905',
        '7EY' => 'E02005905',
        '7EZ' => 'E02005905',
        '7FA' => 'E02005905',
        '7FB' => 'E02005905',
        '7FD' => 'E02005905',
        '7FE' => 'E02005905',
        '7FF' => 'E02005905',
        '7FG' => 'E02005905',
        '7FH' => 'E02005905',
        '7FJ' => 'E02005905',
        '7FL' => 'E02005905',
        '7FN' => 'E02005905',
        '7FP' => 'E02005905',
        '7FQ' => 'E02005905',
        '7FR' => 'E02005905',
        '7FS' => 'E02005905',
        '7FT' => 'E02005905',
        '7FU' => 'E02005905',
        '7FW' => 'E02005905',
        '7FX' => 'E02005905',
        '7FY' => 'E02005905',
        '7FZ' => 'E02005905',
        '7GA' => 'E02005905',
        '7GB' => 'E02005905',
        '7GD' => 'E02005905',
        '7GE' => 'E02005905',
        '7GF' => 'E02005905',
        '7GG' => 'E02005905',
        '7GH' => 'E02005905',
        '7GJ' => 'E02005905',
        '7GL' => 'E02005905',
        '7GN' => 'E02005876',
        '7GP' => 'E02005905',
        '7GQ' => 'E02005905',
        '7GR' => 'E02005905',
        '7GS' => 'E02005905',
        '7GT' => 'E02005905',
        '7GU' => 'E02005905',
        '7GW' => 'E02005905',
        '7GX' => 'E02005905',
        '7GY' => 'E02005905',
        '7GZ' => 'E02005905',
        '7HA' => 'E02005905',
        '7HB' => 'E02005905',
        '7HD' => 'E02005905',
        '7HE' => 'E02005905',
        '7HF' => 'E02005905',
        '7HG' => 'E02005905',
        '7HH' => 'E02005905',
        '7HJ' => 'E02005905',
        '7HL' => 'E02005905',
        '7HN' => 'E02005905',
        '7HP' => 'E02005905',
        '7HQ' => 'E02005876',
        '7HS' => 'E02005876',
        '7HT' => 'E02005876',
        '7HU' => 'E02005876',
        '7HW' => 'E02005905',
        '7HX' => 'E02005876',
        '7HY' => 'E02005905',
        '7HZ' => 'E02005905',
        '7JA' => 'E02005905',
        '7JB' => 'E02005905',
        '7JD' => 'E02005905',
        '7JE' => 'E02005905',
        '7JF' => 'E02005905',
        '7JG' => 'E02005905',
        '7JH' => 'E02005905',
        '7JJ' => 'E02005905',
        '7JL' => 'E02005905',
        '7JN' => 'E02005905',
        '7JP' => 'E02005905',
        '7JQ' => 'E02005905',
        '7JR' => 'E02005905',
        '7JS' => 'E02005905',
        '7JT' => 'E02005905',
        '7JU' => 'E02005905',
        '7JW' => 'E02005905',
        '7JX' => 'E02005905',
        '7JY' => 'E02005905',
        '7JZ' => 'E02005905',
        '7LA' => 'E02005905',
        '7LB' => 'E02005876',
        '7LD' => 'E02005876',
        '7LE' => 'E02005876',
        '7LF' => 'E02005876',
        '7LG' => 'E02005876',
        '7LH' => 'E02005876',
        '7LJ' => 'E02005905',
        '7LL' => 'E02005905',
        '7LN' => 'E02005905',
        '7LP' => 'E02005905',
        '7LQ' => 'E02005876',
        '7PA' => 'E02005905',
        '7PS' => 'E02005905',
        '7RA' => 'E02005905',
        '7RP' => 'E02005905',
        '7UU' => 'E02005905',
        '7UW' => 'E02005876',
        '7UX' => 'E02005876',
        '7UY' => 'E02005876',
        '7UZ' => 'E02005905',
        '7WA' => 'E02005905',
        '7WB' => 'E02005905',
        '7WD' => 'E02005905',
        '7WE' => 'E02005905',
        '7WF' => 'E02005905',
        '7WG' => 'E02005905',
        '7WH' => 'E02005905',
        '7WJ' => 'E02005905',
        '7WL' => 'E02005905',
        '7WN' => 'E02005876',
        '7WP' => 'E02005876',
        '7WQ' => 'E02005905',
        '7WR' => 'E02005876',
        '7WS' => 'E02005905',
        '7WT' => 'E02005876',
        '7WU' => 'E02005876',
        '7WW' => 'E02005876',
        '7WX' => 'E02005876',
        '7WY' => 'E02005876',
        '7WZ' => 'E02005876',
        '7XA' => 'E02005905',
        '7XB' => 'E02005905',
        '7XD' => 'E02005905',
        '7XE' => 'E02005905',
        '7XF' => 'E02005876',
        '7XG' => 'E02005905',
        '7XZ' => 'E02005905',
        '7YD' => 'E02005876',
        '7YP' => 'E02005905',
        '7YQ' => 'E02005876',
        '7ZY' => 'E02005905',
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
