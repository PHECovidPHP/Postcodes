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
final class TR19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02003947',
        '6AB' => 'E02003947',
        '6AD' => 'E02003947',
        '6AE' => 'E02003947',
        '6AF' => 'E02003947',
        '6AG' => 'E02003947',
        '6AH' => 'E02003947',
        '6AJ' => 'E02003950',
        '6AL' => 'E02003947',
        '6AN' => 'E02003947',
        '6AP' => 'E02003947',
        '6AQ' => 'E02003947',
        '6AR' => 'E02003947',
        '6AS' => 'E02003947',
        '6AT' => 'E02003947',
        '6AU' => 'E02003947',
        '6AW' => 'E02003947',
        '6AX' => 'E02003950',
        '6AY' => 'E02003950',
        '6AZ' => 'E02003951',
        '6BA' => 'E02003947',
        '6BB' => 'E02003947',
        '6BD' => 'E02003947',
        '6BE' => 'E02003947',
        '6BG' => 'E02003947',
        '6BH' => 'E02003947',
        '6BJ' => 'E02003947',
        '6BL' => 'E02003947',
        '6BN' => 'E02003947',
        '6BP' => 'E02003947',
        '6BQ' => 'E02003947',
        '6BS' => 'E02003947',
        '6BT' => 'E02003947',
        '6BU' => 'E02003947',
        '6BW' => 'E02003947',
        '6BX' => 'E02003947',
        '6BY' => 'E02003947',
        '6BZ' => 'E02003950',
        '6DA' => 'E02003950',
        '6DB' => 'E02003947',
        '6DD' => 'E02003950',
        '6DE' => 'E02003950',
        '6DF' => 'E02003947',
        '6DG' => 'E02003947',
        '6DH' => 'E02003947',
        '6DJ' => 'E02003947',
        '6DL' => 'E02003947',
        '6DN' => 'E02003950',
        '6DP' => 'E02003950',
        '6DQ' => 'E02003947',
        '6DR' => 'E02003947',
        '6DS' => 'E02003947',
        '6DT' => 'E02003947',
        '6DU' => 'E02003947',
        '6DW' => 'E02003950',
        '6DX' => 'E02003947',
        '6DY' => 'E02003950',
        '6DZ' => 'E02003947',
        '6EA' => 'E02003950',
        '6EB' => 'E02003950',
        '6ED' => 'E02003950',
        '6EE' => 'E02003947',
        '6EF' => 'E02003947',
        '6EG' => 'E02003947',
        '6EH' => 'E02003950',
        '6EJ' => 'E02003947',
        '6EL' => 'E02003950',
        '6EN' => 'E02003949',
        '6EP' => 'E02003947',
        '6EQ' => 'E02003947',
        '6ER' => 'E02003947',
        '6ES' => 'E02003950',
        '6ET' => 'E02003950',
        '6EU' => 'E02003950',
        '6EW' => 'E02003950',
        '6EX' => 'E02003950',
        '6EY' => 'E02003950',
        '6EZ' => 'E02003950',
        '6HA' => 'E02003950',
        '6HD' => 'E02003950',
        '6HE' => 'E02003950',
        '6HF' => 'E02003950',
        '6HG' => 'E02003950',
        '6HH' => 'E02003950',
        '6HJ' => 'E02003950',
        '6HL' => 'E02003950',
        '6HP' => 'E02003950',
        '6HQ' => 'E02003950',
        '6HR' => 'E02003950',
        '6HS' => 'E02003950',
        '6HT' => 'E02003950',
        '6HU' => 'E02003950',
        '6HX' => 'E02003950',
        '6HY' => 'E02003950',
        '6HZ' => 'E02003950',
        '6JA' => 'E02003950',
        '6JB' => 'E02003950',
        '6JD' => 'E02003950',
        '6JF' => 'E02003950',
        '6JH' => 'E02003950',
        '6JJ' => 'E02003950',
        '6JL' => 'E02003950',
        '6JN' => 'E02003950',
        '6JP' => 'E02003950',
        '6JR' => 'E02003950',
        '6JS' => 'E02003950',
        '6JT' => 'E02003950',
        '6JU' => 'E02003950',
        '6JW' => 'E02003950',
        '6JX' => 'E02003950',
        '6JY' => 'E02003950',
        '6JZ' => 'E02003950',
        '6LD' => 'E02003950',
        '6LE' => 'E02003950',
        '6LF' => 'E02003950',
        '6LG' => 'E02003950',
        '6LH' => 'E02003950',
        '6LJ' => 'E02003950',
        '6LL' => 'E02003950',
        '6LN' => 'E02003950',
        '6LP' => 'E02003950',
        '6LQ' => 'E02003950',
        '6LR' => 'E02003950',
        '6LS' => 'E02003950',
        '6LT' => 'E02003950',
        '6LU' => 'E02003950',
        '6LW' => 'E02003950',
        '6LX' => 'E02003950',
        '6LY' => 'E02003950',
        '6LZ' => 'E02003950',
        '6NA' => 'E02003950',
        '6NB' => 'E02003950',
        '6ND' => 'E02003950',
        '6NH' => 'E02003951',
        '6NJ' => 'E02003951',
        '6NL' => 'E02003947',
        '6NN' => 'E02003947',
        '6NP' => 'E02003947',
        '6NR' => 'E02003947',
        '6NS' => 'E02003947',
        '6NT' => 'E02003947',
        '6NU' => 'E02003947',
        '6NW' => 'E02003947',
        '6NX' => 'E02003947',
        '6NY' => 'E02003947',
        '6NZ' => 'E02003947',
        '6PA' => 'E02003947',
        '6PF' => 'E02003951',
        '6PG' => 'E02003951',
        '6PH' => 'E02003951',
        '6PJ' => 'E02003951',
        '6PL' => 'E02003951',
        '6PN' => 'E02003951',
        '6PP' => 'E02003951',
        '6PQ' => 'E02003951',
        '6PR' => 'E02003951',
        '6PS' => 'E02003951',
        '6PT' => 'E02003951',
        '6PU' => 'E02003951',
        '6PW' => 'E02003951',
        '6PX' => 'E02003951',
        '6PY' => 'E02003951',
        '6PZ' => 'E02003951',
        '6QA' => 'E02003951',
        '6QB' => 'E02003951',
        '6QD' => 'E02003951',
        '6QE' => 'E02003951',
        '6QF' => 'E02003951',
        '6QG' => 'E02003951',
        '6QH' => 'E02003951',
        '6QJ' => 'E02003951',
        '6QL' => 'E02003951',
        '6QN' => 'E02003951',
        '6QP' => 'E02003951',
        '6QQ' => 'E02003951',
        '6QR' => 'E02003951',
        '6QT' => 'E02003951',
        '6QU' => 'E02003951',
        '6QW' => 'E02003951',
        '6QX' => 'E02003951',
        '6QY' => 'E02003951',
        '6QZ' => 'E02003951',
        '6RA' => 'E02003951',
        '6RB' => 'E02003951',
        '6RD' => 'E02003951',
        '6RE' => 'E02003951',
        '6RF' => 'E02003951',
        '6RG' => 'E02003951',
        '6RH' => 'E02003951',
        '6RJ' => 'E02003951',
        '6RL' => 'E02003951',
        '6RN' => 'E02003951',
        '6RP' => 'E02003951',
        '6RQ' => 'E02003951',
        '6RR' => 'E02003951',
        '6RS' => 'E02003951',
        '6RT' => 'E02003951',
        '6RU' => 'E02003951',
        '6RW' => 'E02003951',
        '6RX' => 'E02003951',
        '6RY' => 'E02003951',
        '6RZ' => 'E02003951',
        '6SA' => 'E02003951',
        '6SB' => 'E02003951',
        '6SD' => 'E02003951',
        '6SE' => 'E02003951',
        '6SF' => 'E02003951',
        '6SG' => 'E02003951',
        '6SH' => 'E02003951',
        '6SJ' => 'E02003951',
        '6SL' => 'E02003951',
        '6SN' => 'E02003951',
        '6SP' => 'E02003951',
        '6SQ' => 'E02003951',
        '6SR' => 'E02003951',
        '6SS' => 'E02003951',
        '6SU' => 'E02003951',
        '6SW' => 'E02003951',
        '6SX' => 'E02003951',
        '6SY' => 'E02003951',
        '6TA' => 'E02003951',
        '6TB' => 'E02003951',
        '6TE' => 'E02003951',
        '6TF' => 'E02003951',
        '6TG' => 'E02003951',
        '6TH' => 'E02003951',
        '6TJ' => 'E02003951',
        '6TL' => 'E02003951',
        '6TN' => 'E02003951',
        '6TP' => 'E02003951',
        '6TQ' => 'E02003951',
        '6TR' => 'E02003951',
        '6TS' => 'E02003951',
        '6TT' => 'E02003951',
        '6TU' => 'E02003951',
        '6TW' => 'E02003947',
        '6TX' => 'E02003951',
        '6TY' => 'E02003951',
        '6TZ' => 'E02003951',
        '6UA' => 'E02003951',
        '6UB' => 'E02003951',
        '6UD' => 'E02003951',
        '6UE' => 'E02003951',
        '6UF' => 'E02003951',
        '6UG' => 'E02003951',
        '6UH' => 'E02003951',
        '6UJ' => 'E02003951',
        '6UL' => 'E02003951',
        '6UN' => 'E02003951',
        '6UP' => 'E02003951',
        '6UQ' => 'E02003951',
        '6UR' => 'E02003947',
        '6US' => 'E02003951',
        '6UT' => 'E02003951',
        '6UU' => 'E02003951',
        '6UW' => 'E02003951',
        '6UX' => 'E02003947',
        '6UY' => 'E02003947',
        '6UZ' => 'E02003947',
        '6WD' => 'E02003949',
        '6WE' => 'E02003949',
        '6WZ' => 'E02003949',
        '6XA' => 'E02003947',
        '6XB' => 'E02003951',
        '6XD' => 'E02003951',
        '6XG' => 'E02003947',
        '6XH' => 'E02003947',
        '6XJ' => 'E02003947',
        '6XL' => 'E02003947',
        '6XN' => 'E02003947',
        '6XP' => 'E02003950',
        '6XQ' => 'E02003947',
        '6XT' => 'E02003949',
        '6XW' => 'E02003947',
        '6YA' => 'E02003949',
        '6YB' => 'E02003947',
        '6YD' => 'E02003949',
        '6YE' => 'E02003947',
        '6YF' => 'E02003949',
        '6YG' => 'E02003949',
        '6YH' => 'E02003949',
        '6ZN' => 'E02003949',
        '6ZX' => 'E02003949',
        '7AA' => 'E02003950',
        '7AB' => 'E02003949',
        '7AD' => 'E02003950',
        '7AE' => 'E02003950',
        '7AF' => 'E02003950',
        '7AG' => 'E02003950',
        '7AH' => 'E02003950',
        '7AJ' => 'E02003950',
        '7AL' => 'E02003947',
        '7AN' => 'E02003950',
        '7AP' => 'E02003950',
        '7AQ' => 'E02003950',
        '7AR' => 'E02003950',
        '7AS' => 'E02003950',
        '7AT' => 'E02003950',
        '7AU' => 'E02003950',
        '7AW' => 'E02003950',
        '7AX' => 'E02003950',
        '7AY' => 'E02003950',
        '7AZ' => 'E02003950',
        '7BA' => 'E02003947',
        '7BB' => 'E02003950',
        '7BD' => 'E02003950',
        '7BE' => 'E02003950',
        '7BG' => 'E02003950',
        '7BH' => 'E02003950',
        '7BJ' => 'E02003950',
        '7BL' => 'E02003950',
        '7BN' => 'E02003950',
        '7BP' => 'E02003950',
        '7BQ' => 'E02003950',
        '7BS' => 'E02003950',
        '7BT' => 'E02003950',
        '7BU' => 'E02003950',
        '7BW' => 'E02003947',
        '7BX' => 'E02003950',
        '7BY' => 'E02003950',
        '7BZ' => 'E02003950',
        '7DA' => 'E02003950',
        '7DB' => 'E02003950',
        '7DD' => 'E02003950',
        '7DE' => 'E02003950',
        '7DF' => 'E02003950',
        '7DG' => 'E02003950',
        '7DH' => 'E02003950',
        '7DL' => 'E02003947',
        '7DN' => 'E02003947',
        '7DP' => 'E02003947',
        '7DQ' => 'E02003950',
        '7DR' => 'E02003947',
        '7DS' => 'E02003947',
        '7DT' => 'E02003947',
        '7DU' => 'E02003947',
        '7DW' => 'E02003947',
        '7DX' => 'E02003947',
        '7DY' => 'E02003947',
        '7DZ' => 'E02003947',
        '7EA' => 'E02003950',
        '7EB' => 'E02003947',
        '7ED' => 'E02003947',
        '7EE' => 'E02003947',
        '7EF' => 'E02003947',
        '7EG' => 'E02003947',
        '7EH' => 'E02003947',
        '7EJ' => 'E02003947',
        '7EL' => 'E02003947',
        '7EN' => 'E02003947',
        '7EP' => 'E02003947',
        '7EQ' => 'E02003947',
        '7ER' => 'E02003947',
        '7ES' => 'E02003950',
        '7ET' => 'E02003947',
        '7EU' => 'E02003947',
        '7EW' => 'E02003947',
        '7EY' => 'E02003950',
        '7EZ' => 'E02003950',
        '7HA' => 'E02003950',
        '7HB' => 'E02003950',
        '7HD' => 'E02003950',
        '7HE' => 'E02003950',
        '7HF' => 'E02003950',
        '7HG' => 'E02003950',
        '7HH' => 'E02003950',
        '7HJ' => 'E02003950',
        '7HL' => 'E02003950',
        '7HN' => 'E02003950',
        '7HP' => 'E02003950',
        '7HQ' => 'E02003950',
        '7HR' => 'E02003950',
        '7HS' => 'E02003950',
        '7HT' => 'E02003950',
        '7HU' => 'E02003950',
        '7HW' => 'E02003950',
        '7HX' => 'E02003950',
        '7HY' => 'E02003950',
        '7HZ' => 'E02003950',
        '7JA' => 'E02003950',
        '7JB' => 'E02003950',
        '7JD' => 'E02003950',
        '7JE' => 'E02003950',
        '7JF' => 'E02003950',
        '7JG' => 'E02003950',
        '7JH' => 'E02003950',
        '7JJ' => 'E02003950',
        '7JL' => 'E02003950',
        '7JN' => 'E02003950',
        '7JP' => 'E02003950',
        '7JQ' => 'E02003950',
        '7JR' => 'E02003950',
        '7JS' => 'E02003950',
        '7JT' => 'E02003950',
        '7JU' => 'E02003950',
        '7JW' => 'E02003950',
        '7JX' => 'E02003950',
        '7JY' => 'E02003950',
        '7JZ' => 'E02003950',
        '7LA' => 'E02003950',
        '7LB' => 'E02003950',
        '7LD' => 'E02003950',
        '7LE' => 'E02003950',
        '7LF' => 'E02003950',
        '7LG' => 'E02003950',
        '7LH' => 'E02003950',
        '7LJ' => 'E02003950',
        '7LL' => 'E02003950',
        '7LN' => 'E02003950',
        '7LP' => 'E02003950',
        '7LQ' => 'E02003950',
        '7LR' => 'E02003950',
        '7LS' => 'E02003950',
        '7LT' => 'E02003950',
        '7LU' => 'E02003950',
        '7LW' => 'E02003950',
        '7LX' => 'E02003950',
        '7LY' => 'E02003950',
        '7LZ' => 'E02003950',
        '7NA' => 'E02003950',
        '7NB' => 'E02003950',
        '7ND' => 'E02003950',
        '7NE' => 'E02003950',
        '7NF' => 'E02003950',
        '7NG' => 'E02003950',
        '7NH' => 'E02003950',
        '7NJ' => 'E02003950',
        '7NL' => 'E02003950',
        '7NN' => 'E02003950',
        '7NP' => 'E02003950',
        '7NQ' => 'E02003950',
        '7NR' => 'E02003950',
        '7NS' => 'E02003950',
        '7NT' => 'E02003950',
        '7NU' => 'E02003950',
        '7NW' => 'E02003950',
        '7NX' => 'E02003950',
        '7NY' => 'E02003950',
        '7NZ' => 'E02003950',
        '7PA' => 'E02003950',
        '7PB' => 'E02003950',
        '7PD' => 'E02003950',
        '7PF' => 'E02003950',
        '7PG' => 'E02003950',
        '7PH' => 'E02003950',
        '7PJ' => 'E02003950',
        '7PL' => 'E02003950',
        '7PN' => 'E02003950',
        '7PP' => 'E02003950',
        '7PQ' => 'E02003950',
        '7PR' => 'E02003950',
        '7PS' => 'E02003950',
        '7PT' => 'E02003950',
        '7PU' => 'E02003950',
        '7PW' => 'E02003950',
        '7PX' => 'E02003950',
        '7PY' => 'E02003950',
        '7PZ' => 'E02003950',
        '7QA' => 'E02003947',
        '7QB' => 'E02003947',
        '7QD' => 'E02003950',
        '7QE' => 'E02003950',
        '7QF' => 'E02003950',
        '7QG' => 'E02003950',
        '7QH' => 'E02003950',
        '7QJ' => 'E02003950',
        '7QL' => 'E02003950',
        '7QN' => 'E02003950',
        '7QP' => 'E02003950',
        '7QQ' => 'E02003950',
        '7QR' => 'E02003950',
        '7QS' => 'E02003950',
        '7QU' => 'E02003950',
        '7QW' => 'E02003950',
        '7QX' => 'E02003950',
        '7QY' => 'E02003950',
        '7QZ' => 'E02003950',
        '7RA' => 'E02003950',
        '7RB' => 'E02003950',
        '7RD' => 'E02003950',
        '7RE' => 'E02003950',
        '7RF' => 'E02003950',
        '7RG' => 'E02003950',
        '7RH' => 'E02003950',
        '7RJ' => 'E02003950',
        '7RL' => 'E02003950',
        '7RN' => 'E02003950',
        '7RP' => 'E02003950',
        '7RQ' => 'E02003950',
        '7RR' => 'E02003950',
        '7RS' => 'E02003950',
        '7RT' => 'E02003950',
        '7RU' => 'E02003950',
        '7RW' => 'E02003950',
        '7RX' => 'E02003950',
        '7RY' => 'E02003950',
        '7RZ' => 'E02003950',
        '7SA' => 'E02003950',
        '7SB' => 'E02003947',
        '7SD' => 'E02003947',
        '7SE' => 'E02003947',
        '7SF' => 'E02003947',
        '7SG' => 'E02003947',
        '7SH' => 'E02003947',
        '7SJ' => 'E02003947',
        '7SL' => 'E02003947',
        '7SN' => 'E02003947',
        '7SP' => 'E02003947',
        '7SQ' => 'E02003947',
        '7SR' => 'E02003947',
        '7SS' => 'E02003947',
        '7ST' => 'E02003947',
        '7SU' => 'E02003950',
        '7SW' => 'E02003947',
        '7SX' => 'E02003950',
        '7SY' => 'E02003950',
        '7SZ' => 'E02003947',
        '7TA' => 'E02003947',
        '7TB' => 'E02003947',
        '7TD' => 'E02003947',
        '7TE' => 'E02003947',
        '7TF' => 'E02003947',
        '7TG' => 'E02003950',
        '7TH' => 'E02003947',
        '7TJ' => 'E02003947',
        '7TL' => 'E02003947',
        '7TN' => 'E02003947',
        '7TP' => 'E02003947',
        '7TQ' => 'E02003947',
        '7TR' => 'E02003947',
        '7TS' => 'E02003947',
        '7TT' => 'E02003947',
        '7TU' => 'E02003947',
        '7TW' => 'E02003947',
        '7TX' => 'E02003947',
        '7UA' => 'E02003950',
        '7UB' => 'E02003950',
        '7UD' => 'E02003950',
        '7UE' => 'E02003947',
        '7UF' => 'E02003947',
        '7UG' => 'E02003947',
        '7UJ' => 'E02003950',
        '7UL' => 'E02003950',
        '7UN' => 'E02003950',
        '7UP' => 'E02003947',
        '7UQ' => 'E02003950',
        '7UR' => 'E02003947',
        '7UT' => 'E02003947',
        '7UW' => 'E02003947',
        '7WD' => 'E02003947',
        '7WE' => 'E02003949',
        '7WF' => 'E02003949',
        '7WH' => 'E02003949',
        '7WT' => 'E02003949',
        '7WU' => 'E02003949',
        '7WW' => 'E02003949',
        '7WX' => 'E02003949',
        '7WY' => 'E02003949',
        '7WZ' => 'E02003949',
        '7YA' => 'E02003949',
        '7YB' => 'E02003949',
        '7YD' => 'E02003949',
        '7YE' => 'E02003949',
        '7YF' => 'E02003949',
        '7YG' => 'E02003950',
        '7YH' => 'E02003950',
        '7YJ' => 'E02003950',
        '7YL' => 'E02003949',
        '7YN' => 'E02003949',
        '7YP' => 'E02003950',
        '7YQ' => 'E02003949',
        '7YR' => 'E02003949',
        '7YY' => 'E02003949',
        '7YZ' => 'E02003949',
        '7ZX' => 'E02003949',
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