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
final class TW4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02000546',
        '5AB' => 'E02000546',
        '5AD' => 'E02000546',
        '5AE' => 'E02000546',
        '5AF' => 'E02000546',
        '5AH' => 'E02000546',
        '5AJ' => 'E02000542',
        '5AL' => 'E02000542',
        '5AN' => 'E02000542',
        '5AP' => 'E02000542',
        '5AQ' => 'E02000543',
        '5AR' => 'E02000541',
        '5AS' => 'E02000542',
        '5AT' => 'E02000546',
        '5AU' => 'E02000546',
        '5AW' => 'E02000542',
        '5AX' => 'E02000542',
        '5AY' => 'E02000546',
        '5AZ' => 'E02000546',
        '5BA' => 'E02000542',
        '5BB' => 'E02000546',
        '5BD' => 'E02000546',
        '5BE' => 'E02000546',
        '5BF' => 'E02000546',
        '5BG' => 'E02000546',
        '5BH' => 'E02000546',
        '5BJ' => 'E02000546',
        '5BL' => 'E02000546',
        '5BN' => 'E02000546',
        '5BP' => 'E02000796',
        '5BQ' => 'E02000546',
        '5BS' => 'E02000546',
        '5BT' => 'E02000546',
        '5BU' => 'E02000546',
        '5BW' => 'E02000546',
        '5BX' => 'E02000542',
        '5BY' => 'E02000546',
        '5BZ' => 'E02000546',
        '5DA' => 'E02000546',
        '5DB' => 'E02000796',
        '5DD' => 'E02000542',
        '5DE' => 'E02000542',
        '5DF' => 'E02000796',
        '5DG' => 'E02000546',
        '5DH' => 'E02000546',
        '5DJ' => 'E02000546',
        '5DL' => 'E02000546',
        '5DN' => 'E02000542',
        '5DP' => 'E02000546',
        '5DQ' => 'E02000542',
        '5DR' => 'E02000546',
        '5DS' => 'E02000546',
        '5DT' => 'E02000546',
        '5DU' => 'E02000542',
        '5DW' => 'E02000546',
        '5DX' => 'E02000542',
        '5DY' => 'E02000542',
        '5DZ' => 'E02000546',
        '5EA' => 'E02000546',
        '5EB' => 'E02000546',
        '5ED' => 'E02000546',
        '5EE' => 'E02000546',
        '5EF' => 'E02000546',
        '5EG' => 'E02000546',
        '5EH' => 'E02000546',
        '5EJ' => 'E02000546',
        '5EL' => 'E02000546',
        '5EN' => 'E02000546',
        '5EP' => 'E02000546',
        '5EQ' => 'E02000546',
        '5ER' => 'E02000796',
        '5EU' => 'E02000546',
        '5EW' => 'E02000546',
        '5EX' => 'E02000546',
        '5EY' => 'E02000546',
        '5EZ' => 'E02000546',
        '5HA' => 'E02000546',
        '5HB' => 'E02000546',
        '5HD' => 'E02000546',
        '5HE' => 'E02000542',
        '5HF' => 'E02000546',
        '5HG' => 'E02000546',
        '5HH' => 'E02000546',
        '5HJ' => 'E02000546',
        '5HL' => 'E02000546',
        '5HN' => 'E02000546',
        '5HP' => 'E02000546',
        '5HQ' => 'E02000546',
        '5HR' => 'E02000546',
        '5HS' => 'E02000546',
        '5HT' => 'E02000546',
        '5HU' => 'E02000546',
        '5HW' => 'E02000546',
        '5HX' => 'E02000546',
        '5HY' => 'E02000796',
        '5HZ' => 'E02000796',
        '5JA' => 'E02000546',
        '5JB' => 'E02000546',
        '5JD' => 'E02000546',
        '5JE' => 'E02000796',
        '5JF' => 'E02000546',
        '5JG' => 'E02000542',
        '5JH' => 'E02000542',
        '5JJ' => 'E02000542',
        '5JL' => 'E02000542',
        '5JN' => 'E02000542',
        '5JP' => 'E02000546',
        '5JQ' => 'E02000546',
        '5JR' => 'E02000546',
        '5JS' => 'E02000546',
        '5JT' => 'E02000546',
        '5JU' => 'E02000546',
        '5JW' => 'E02000546',
        '5JX' => 'E02000546',
        '5JY' => 'E02000542',
        '5JZ' => 'E02000542',
        '5LA' => 'E02000796',
        '5LB' => 'E02000796',
        '5LD' => 'E02000546',
        '5LE' => 'E02000546',
        '5LF' => 'E02000546',
        '5LG' => 'E02000796',
        '5LH' => 'E02000796',
        '5LJ' => 'E02000796',
        '5LL' => 'E02000796',
        '5LN' => 'E02000796',
        '5LP' => 'E02000796',
        '5LQ' => 'E02000796',
        '5LR' => 'E02000796',
        '5LS' => 'E02000796',
        '5LT' => 'E02000546',
        '5LU' => 'E02000796',
        '5LW' => 'E02000796',
        '5LX' => 'E02000796',
        '5LY' => 'E02000796',
        '5LZ' => 'E02000796',
        '5NA' => 'E02000796',
        '5NB' => 'E02000796',
        '5ND' => 'E02000796',
        '5NE' => 'E02000796',
        '5NF' => 'E02000796',
        '5NG' => 'E02000796',
        '5NH' => 'E02000796',
        '5NJ' => 'E02000796',
        '5NL' => 'E02000796',
        '5NN' => 'E02000796',
        '5NP' => 'E02000796',
        '5NQ' => 'E02000796',
        '5NR' => 'E02000796',
        '5NS' => 'E02000796',
        '5NT' => 'E02000796',
        '5NU' => 'E02000796',
        '5NW' => 'E02000796',
        '5NX' => 'E02000796',
        '5NY' => 'E02000796',
        '5NZ' => 'E02000796',
        '5PD' => 'E02000796',
        '5PE' => 'E02000546',
        '5PF' => 'E02000796',
        '5PG' => 'E02000796',
        '5PH' => 'E02000796',
        '5PJ' => 'E02000796',
        '5PL' => 'E02000796',
        '5PN' => 'E02000796',
        '5PP' => 'E02000796',
        '5PQ' => 'E02000796',
        '5PR' => 'E02000796',
        '5PS' => 'E02000796',
        '5PT' => 'E02000796',
        '5PU' => 'E02000796',
        '5PW' => 'E02000796',
        '5PX' => 'E02000796',
        '5PY' => 'E02000796',
        '5PZ' => 'E02000796',
        '5QE' => 'E02000796',
        '5QF' => 'E02000796',
        '5QG' => 'E02000796',
        '5QH' => 'E02000796',
        '5QJ' => 'E02000796',
        '5QL' => 'E02000796',
        '5QN' => 'E02000796',
        '5QP' => 'E02000796',
        '5QQ' => 'E02000796',
        '5QW' => 'E02000796',
        '5QX' => 'E02000796',
        '5QY' => 'E02000796',
        '5QZ' => 'E02000796',
        '5RA' => 'E02000543',
        '5RB' => 'E02000546',
        '5RD' => 'E02000546',
        '5RE' => 'E02000543',
        '5RF' => 'E02000546',
        '5RG' => 'E02000543',
        '5RH' => 'E02000796',
        '5RJ' => 'E02000546',
        '5RL' => 'E02000543',
        '5RN' => 'E02000543',
        '5RP' => 'E02000796',
        '5RQ' => 'E02000546',
        '5RR' => 'E02000543',
        '5RS' => 'E02000543',
        '5RT' => 'E02000543',
        '5RU' => 'E02000543',
        '5RW' => 'E02000546',
        '5RX' => 'E02000543',
        '5RY' => 'E02000543',
        '5SY' => 'E02000546',
        '5UG' => 'E02000543',
        '5UT' => 'E02000543',
        '5UZ' => 'E02000543',
        '5WA' => 'E02000543',
        '5WB' => 'E02000543',
        '5WD' => 'E02000543',
        '5WE' => 'E02000543',
        '5WF' => 'E02000543',
        '5WG' => 'E02000543',
        '5WH' => 'E02000543',
        '5WJ' => 'E02000543',
        '5WN' => 'E02000543',
        '5WP' => 'E02000543',
        '5WQ' => 'E02000543',
        '5WR' => 'E02000543',
        '5WS' => 'E02000543',
        '5WT' => 'E02000543',
        '5WU' => 'E02000543',
        '5WW' => 'E02000543',
        '5WX' => 'E02000546',
        '5WY' => 'E02000543',
        '5WZ' => 'E02000543',
        '5XA' => 'E02000543',
        '5XB' => 'E02000543',
        '5XX' => 'E02000546',
        '5XZ' => 'E02000543',
        '5YB' => 'E02000543',
        '5ZF' => 'E02000543',
        '6AA' => 'E02000541',
        '6AB' => 'E02000541',
        '6AD' => 'E02000541',
        '6AE' => 'E02000541',
        '6AF' => 'E02000541',
        '6AG' => 'E02000541',
        '6AH' => 'E02000546',
        '6AJ' => 'E02000546',
        '6AL' => 'E02000546',
        '6AN' => 'E02000546',
        '6AP' => 'E02000546',
        '6AQ' => 'E02000541',
        '6AR' => 'E02000546',
        '6AS' => 'E02000541',
        '6AT' => 'E02000546',
        '6AU' => 'E02000541',
        '6AW' => 'E02000546',
        '6AX' => 'E02000541',
        '6AY' => 'E02000546',
        '6AZ' => 'E02000541',
        '6BA' => 'E02000541',
        '6BB' => 'E02000541',
        '6BD' => 'E02000541',
        '6BE' => 'E02000538',
        '6BF' => 'E02000541',
        '6BG' => 'E02000538',
        '6BH' => 'E02000538',
        '6BJ' => 'E02000538',
        '6BL' => 'E02000538',
        '6BN' => 'E02000538',
        '6BP' => 'E02000538',
        '6BQ' => 'E02000538',
        '6BS' => 'E02000538',
        '6BT' => 'E02000538',
        '6BU' => 'E02000538',
        '6BW' => 'E02000538',
        '6BX' => 'E02000538',
        '6BY' => 'E02000538',
        '6BZ' => 'E02000538',
        '6DA' => 'E02000538',
        '6DB' => 'E02000538',
        '6DD' => 'E02000538',
        '6DE' => 'E02000538',
        '6DF' => 'E02000538',
        '6DG' => 'E02000538',
        '6DH' => 'E02000538',
        '6DJ' => 'E02000538',
        '6DL' => 'E02000538',
        '6DN' => 'E02000538',
        '6DP' => 'E02000538',
        '6DQ' => 'E02000538',
        '6DR' => 'E02000538',
        '6DS' => 'E02000538',
        '6DT' => 'E02000538',
        '6DU' => 'E02000538',
        '6DW' => 'E02000538',
        '6DX' => 'E02000538',
        '6DY' => 'E02000538',
        '6DZ' => 'E02000538',
        '6EA' => 'E02000546',
        '6EB' => 'E02000538',
        '6ED' => 'E02000538',
        '6EE' => 'E02000538',
        '6EF' => 'E02000538',
        '6EG' => 'E02000538',
        '6EH' => 'E02000538',
        '6EJ' => 'E02000541',
        '6EL' => 'E02000546',
        '6EN' => 'E02000546',
        '6EP' => 'E02000538',
        '6EQ' => 'E02000538',
        '6ER' => 'E02000538',
        '6ES' => 'E02000541',
        '6ET' => 'E02000538',
        '6EU' => 'E02000538',
        '6EW' => 'E02000541',
        '6EX' => 'E02000538',
        '6EY' => 'E02000538',
        '6EZ' => 'E02000538',
        '6FA' => 'E02000541',
        '6FB' => 'E02000538',
        '6FD' => 'E02000538',
        '6HA' => 'E02000538',
        '6HB' => 'E02000538',
        '6HD' => 'E02000546',
        '6HE' => 'E02000541',
        '6HF' => 'E02000541',
        '6HG' => 'E02000541',
        '6HH' => 'E02000538',
        '6HJ' => 'E02000541',
        '6HL' => 'E02000541',
        '6HN' => 'E02000538',
        '6HP' => 'E02000538',
        '6HQ' => 'E02000538',
        '6HR' => 'E02000538',
        '6HS' => 'E02000538',
        '6HT' => 'E02000538',
        '6HU' => 'E02000538',
        '6HW' => 'E02000538',
        '6HX' => 'E02000538',
        '6HY' => 'E02000538',
        '6HZ' => 'E02000538',
        '6JA' => 'E02000538',
        '6JB' => 'E02000541',
        '6JD' => 'E02000538',
        '6JE' => 'E02000538',
        '6JF' => 'E02000538',
        '6JG' => 'E02000538',
        '6JH' => 'E02000541',
        '6JJ' => 'E02000538',
        '6JL' => 'E02000541',
        '6JN' => 'E02000538',
        '6JP' => 'E02000538',
        '6JQ' => 'E02000541',
        '6JR' => 'E02000538',
        '6JS' => 'E02000538',
        '6JT' => 'E02000538',
        '6JU' => 'E02000538',
        '6JW' => 'E02000538',
        '6JX' => 'E02000541',
        '6JY' => 'E02000538',
        '6LA' => 'E02000538',
        '6LB' => 'E02000538',
        '6LD' => 'E02000538',
        '6LE' => 'E02000538',
        '6LF' => 'E02000538',
        '6LG' => 'E02000543',
        '6LJ' => 'E02000538',
        '6LL' => 'E02000538',
        '6LN' => 'E02000538',
        '6LQ' => 'E02000538',
        '6LR' => 'E02000538',
        '6LS' => 'E02000538',
        '6LT' => 'E02000538',
        '6LU' => 'E02000538',
        '6LW' => 'E02000538',
        '6LX' => 'E02000538',
        '6LY' => 'E02000538',
        '6LZ' => 'E02000538',
        '6NA' => 'E02000538',
        '6NB' => 'E02000538',
        '6ND' => 'E02000538',
        '6NE' => 'E02000538',
        '6NF' => 'E02000538',
        '6NG' => 'E02000538',
        '6NH' => 'E02000538',
        '6NJ' => 'E02000538',
        '6NL' => 'E02000538',
        '6NN' => 'E02000538',
        '6NP' => 'E02000538',
        '6NQ' => 'E02000538',
        '6NR' => 'E02000538',
        '6NS' => 'E02000538',
        '6NT' => 'E02000538',
        '6NU' => 'E02000538',
        '6NW' => 'E02000538',
        '6RA' => 'E02000543',
        '6RB' => 'E02000538',
        '6RE' => 'E02000538',
        '6RF' => 'E02000538',
        '6RG' => 'E02000538',
        '6RH' => 'E02000538',
        '6RJ' => 'E02000538',
        '6RL' => 'E02000538',
        '6RP' => 'E02000543',
        '6RQ' => 'E02000538',
        '6RR' => 'E02000538',
        '6RS' => 'E02000538',
        '6RT' => 'E02000538',
        '6RU' => 'E02000538',
        '6RW' => 'E02000543',
        '6RX' => 'E02000543',
        '6RY' => 'E02000543',
        '6RZ' => 'E02000538',
        '6SA' => 'E02000538',
        '6SB' => 'E02000538',
        '6SD' => 'E02000543',
        '6SE' => 'E02000543',
        '6SF' => 'E02000538',
        '6SG' => 'E02000543',
        '6SH' => 'E02000543',
        '6SJ' => 'E02000538',
        '6SL' => 'E02000543',
        '6SN' => 'E02000538',
        '6SP' => 'E02000543',
        '6SQ' => 'E02000538',
        '6SR' => 'E02000538',
        '6SS' => 'E02000543',
        '6ST' => 'E02000543',
        '6SU' => 'E02000543',
        '6SW' => 'E02000543',
        '6SX' => 'E02000543',
        '6SY' => 'E02000543',
        '6WA' => 'E02000543',
        '6WB' => 'E02000543',
        '6WD' => 'E02000543',
        '6WE' => 'E02000543',
        '6WF' => 'E02000543',
        '6WG' => 'E02000543',
        '6WH' => 'E02000543',
        '6WQ' => 'E02000543',
        '6WT' => 'E02000543',
        '6WU' => 'E02000543',
        '6WW' => 'E02000543',
        '6WX' => 'E02000543',
        '6WY' => 'E02000543',
        '6WZ' => 'E02000543',
        '6XB' => 'E02000538',
        '6XE' => 'E02000543',
        '6ZY' => 'E02000543',
        '7AA' => 'E02000542',
        '7AB' => 'E02000542',
        '7AD' => 'E02000542',
        '7AE' => 'E02000542',
        '7AF' => 'E02000542',
        '7AG' => 'E02000542',
        '7AH' => 'E02000542',
        '7AJ' => 'E02000542',
        '7AL' => 'E02000542',
        '7AN' => 'E02000541',
        '7AP' => 'E02000542',
        '7AQ' => 'E02000542',
        '7AR' => 'E02000541',
        '7AS' => 'E02000542',
        '7AT' => 'E02000542',
        '7AU' => 'E02000542',
        '7AW' => 'E02000543',
        '7AX' => 'E02000542',
        '7AY' => 'E02000541',
        '7AZ' => 'E02000543',
        '7BA' => 'E02000542',
        '7BB' => 'E02000542',
        '7BD' => 'E02000541',
        '7BE' => 'E02000541',
        '7BF' => 'E02000541',
        '7BG' => 'E02000541',
        '7BH' => 'E02000542',
        '7BJ' => 'E02000542',
        '7BL' => 'E02000541',
        '7BN' => 'E02000541',
        '7BP' => 'E02000542',
        '7BQ' => 'E02000541',
        '7BS' => 'E02000542',
        '7BT' => 'E02000542',
        '7BU' => 'E02000542',
        '7BW' => 'E02000541',
        '7BX' => 'E02000542',
        '7BY' => 'E02000542',
        '7DA' => 'E02000541',
        '7DB' => 'E02000542',
        '7DD' => 'E02000542',
        '7DE' => 'E02000541',
        '7DF' => 'E02000541',
        '7DG' => 'E02000542',
        '7DH' => 'E02000542',
        '7DJ' => 'E02000541',
        '7DL' => 'E02000541',
        '7DN' => 'E02000541',
        '7DP' => 'E02000541',
        '7DQ' => 'E02000543',
        '7DR' => 'E02000542',
        '7DS' => 'E02000542',
        '7DT' => 'E02000542',
        '7DW' => 'E02000535',
        '7EA' => 'E02000542',
        '7EB' => 'E02000543',
        '7ED' => 'E02000542',
        '7EE' => 'E02000542',
        '7EF' => 'E02000542',
        '7EL' => 'E02000542',
        '7EN' => 'E02000541',
        '7EP' => 'E02000541',
        '7ER' => 'E02000541',
        '7ES' => 'E02000541',
        '7ET' => 'E02000541',
        '7EU' => 'E02000541',
        '7EW' => 'E02000541',
        '7EX' => 'E02000541',
        '7EY' => 'E02000541',
        '7EZ' => 'E02000541',
        '7HA' => 'E02000541',
        '7HB' => 'E02000541',
        '7HD' => 'E02000541',
        '7HE' => 'E02000541',
        '7HF' => 'E02000541',
        '7HG' => 'E02000541',
        '7HH' => 'E02000541',
        '7HJ' => 'E02000541',
        '7HP' => 'E02000541',
        '7HQ' => 'E02000541',
        '7HR' => 'E02000541',
        '7HS' => 'E02000541',
        '7HT' => 'E02000541',
        '7HU' => 'E02000541',
        '7HW' => 'E02000541',
        '7HX' => 'E02000541',
        '7HY' => 'E02000541',
        '7JA' => 'E02000541',
        '7JB' => 'E02000541',
        '7JD' => 'E02000546',
        '7JE' => 'E02000541',
        '7JF' => 'E02000541',
        '7JG' => 'E02000541',
        '7JH' => 'E02000541',
        '7JJ' => 'E02000541',
        '7JL' => 'E02000541',
        '7JN' => 'E02000541',
        '7JP' => 'E02000541',
        '7JQ' => 'E02000541',
        '7JR' => 'E02000541',
        '7JS' => 'E02000541',
        '7JT' => 'E02000541',
        '7JU' => 'E02000541',
        '7JW' => 'E02000541',
        '7JX' => 'E02000541',
        '7JY' => 'E02000541',
        '7JZ' => 'E02000541',
        '7LA' => 'E02000541',
        '7LD' => 'E02000541',
        '7LE' => 'E02000541',
        '7LF' => 'E02000541',
        '7LG' => 'E02000541',
        '7LH' => 'E02000541',
        '7LJ' => 'E02000541',
        '7LL' => 'E02000541',
        '7LP' => 'E02000541',
        '7LQ' => 'E02000538',
        '7LR' => 'E02000538',
        '7LS' => 'E02000541',
        '7LT' => 'E02000541',
        '7LU' => 'E02000538',
        '7LX' => 'E02000541',
        '7LY' => 'E02000538',
        '7LZ' => 'E02000538',
        '7NB' => 'E02000541',
        '7ND' => 'E02000541',
        '7NE' => 'E02000541',
        '7NF' => 'E02000541',
        '7NG' => 'E02000541',
        '7NH' => 'E02000541',
        '7NJ' => 'E02000541',
        '7NL' => 'E02000541',
        '7NN' => 'E02000541',
        '7NP' => 'E02000541',
        '7NQ' => 'E02000538',
        '7NR' => 'E02000541',
        '7NS' => 'E02000541',
        '7NT' => 'E02000541',
        '7NU' => 'E02000541',
        '7NW' => 'E02000538',
        '7NX' => 'E02000541',
        '7NY' => 'E02000541',
        '7PA' => 'E02000541',
        '7PB' => 'E02000541',
        '7PD' => 'E02000541',
        '7PE' => 'E02000541',
        '7PF' => 'E02000541',
        '7PG' => 'E02000541',
        '7PH' => 'E02000541',
        '7PJ' => 'E02000541',
        '7PL' => 'E02000541',
        '7PN' => 'E02000541',
        '7PP' => 'E02000541',
        '7PQ' => 'E02000541',
        '7PR' => 'E02000541',
        '7PS' => 'E02000541',
        '7PT' => 'E02000541',
        '7PU' => 'E02000541',
        '7PW' => 'E02000541',
        '7PY' => 'E02000541',
        '7QA' => 'E02000541',
        '7QB' => 'E02000541',
        '7QD' => 'E02000538',
        '7QE' => 'E02000538',
        '7QF' => 'E02000538',
        '7QG' => 'E02000538',
        '7QH' => 'E02000538',
        '7QJ' => 'E02000538',
        '7QL' => 'E02000538',
        '7QN' => 'E02000538',
        '7QP' => 'E02000538',
        '7QQ' => 'E02000538',
        '7QR' => 'E02000538',
        '7QS' => 'E02000538',
        '7QT' => 'E02000543',
        '7QU' => 'E02000538',
        '7QW' => 'E02000538',
        '7RA' => 'E02000535',
        '7RB' => 'E02000535',
        '7RD' => 'E02000536',
        '7RE' => 'E02000536',
        '7RF' => 'E02000536',
        '7RG' => 'E02000535',
        '7RH' => 'E02000535',
        '7RJ' => 'E02000535',
        '7RL' => 'E02000535',
        '7RN' => 'E02000535',
        '7RP' => 'E02000541',
        '7RQ' => 'E02000535',
        '7RR' => 'E02000541',
        '7RS' => 'E02000541',
        '7RT' => 'E02000541',
        '7RU' => 'E02000541',
        '7RW' => 'E02000536',
        '7RX' => 'E02000541',
        '7RY' => 'E02000541',
        '7RZ' => 'E02000541',
        '7SA' => 'E02000541',
        '7SB' => 'E02000543',
        '7SD' => 'E02000541',
        '7SE' => 'E02000541',
        '7SF' => 'E02000541',
        '7SG' => 'E02000541',
        '7SH' => 'E02000541',
        '7SJ' => 'E02000543',
        '7SL' => 'E02000541',
        '7SN' => 'E02000541',
        '7SP' => 'E02000541',
        '7SQ' => 'E02000541',
        '7SR' => 'E02000541',
        '7SS' => 'E02000541',
        '7ST' => 'E02000543',
        '7SU' => 'E02000541',
        '7SW' => 'E02000541',
        '7SX' => 'E02000541',
        '7SY' => 'E02000541',
        '7SZ' => 'E02000541',
        '7TA' => 'E02000541',
        '7TB' => 'E02000541',
        '7TD' => 'E02000541',
        '7TE' => 'E02000541',
        '7TF' => 'E02000541',
        '7TG' => 'E02000541',
        '7TH' => 'E02000543',
        '7TJ' => 'E02000541',
        '7TL' => 'E02000541',
        '7TN' => 'E02000543',
        '7TP' => 'E02000541',
        '7TQ' => 'E02000541',
        '7TR' => 'E02000541',
        '7TS' => 'E02000541',
        '7TT' => 'E02000541',
        '7TU' => 'E02000541',
        '7TW' => 'E02000541',
        '7TX' => 'E02000543',
        '7TY' => 'E02000541',
        '7TZ' => 'E02000541',
        '7UA' => 'E02000541',
        '7UB' => 'E02000541',
        '7UD' => 'E02000543',
        '7UE' => 'E02000541',
        '7UF' => 'E02000543',
        '7UG' => 'E02000541',
        '7UH' => 'E02000543',
        '7UJ' => 'E02000543',
        '7UL' => 'E02000543',
        '7UN' => 'E02000541',
        '7UP' => 'E02000543',
        '7UQ' => 'E02000541',
        '7UR' => 'E02000543',
        '7UW' => 'E02000543',
        '7WA' => 'E02000543',
        '7WB' => 'E02000543',
        '7WD' => 'E02000543',
        '7WE' => 'E02000543',
        '7WF' => 'E02000543',
        '7WG' => 'E02000543',
        '7WH' => 'E02000543',
        '7WJ' => 'E02000543',
        '7WL' => 'E02000543',
        '7WN' => 'E02000543',
        '7WP' => 'E02000543',
        '7WQ' => 'E02000543',
        '7WR' => 'E02000543',
        '7WS' => 'E02000543',
        '7WT' => 'E02000543',
        '7WU' => 'E02000543',
        '7WW' => 'E02000543',
        '7WX' => 'E02000543',
        '7WY' => 'E02000543',
        '7WZ' => 'E02000543',
        '7XA' => 'E02000543',
        '7XB' => 'E02000543',
        '7XD' => 'E02000543',
        '7XE' => 'E02000543',
        '7XF' => 'E02000543',
        '7XG' => 'E02000543',
        '7XH' => 'E02000543',
        '7XJ' => 'E02000543',
        '7XQ' => 'E02000543',
        '7XS' => 'E02000543',
        '7XT' => 'E02000543',
        '7XU' => 'E02000543',
        '7XW' => 'E02000543',
        '7XX' => 'E02000543',
        '7XY' => 'E02000543',
        '7XZ' => 'E02000543',
        '7YE' => 'E02000543',
        '7YT' => 'E02000543',
        '7YZ' => 'E02000543',
        '7ZY' => 'E02000543',
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
