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
final class CA28
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004001',
        '0AB' => 'E02004001',
        '0AD' => 'E02004001',
        '0AE' => 'E02004001',
        '0AF' => 'E02004001',
        '0AG' => 'E02004001',
        '0BA' => 'E02004001',
        '0BB' => 'E02004001',
        '0BD' => 'E02004001',
        '0BE' => 'E02004001',
        '0BF' => 'E02004001',
        '0BG' => 'E02004001',
        '0BH' => 'E02004001',
        '0BJ' => 'E02004001',
        '0BL' => 'E02004001',
        '0BN' => 'E02004001',
        '0BP' => 'E02004001',
        '0BQ' => 'E02004001',
        '0BR' => 'E02004001',
        '0BS' => 'E02004001',
        '0BT' => 'E02004001',
        '0BW' => 'E02004001',
        '0BX' => 'E02004001',
        '0BY' => 'E02004001',
        '0BZ' => 'E02004001',
        '0DA' => 'E02004001',
        '0RZ' => 'E02004001',
        '0SA' => 'E02004001',
        '0SB' => 'E02004001',
        '0SD' => 'E02004001',
        '0SE' => 'E02004001',
        '0SF' => 'E02004001',
        '0SG' => 'E02004001',
        '0SH' => 'E02004001',
        '0SJ' => 'E02004001',
        '0SL' => 'E02004001',
        '0SN' => 'E02004001',
        '0SP' => 'E02004001',
        '0SQ' => 'E02004001',
        '0SR' => 'E02004001',
        '0SS' => 'E02004001',
        '0ST' => 'E02004001',
        '0SU' => 'E02004001',
        '0SW' => 'E02004001',
        '0SX' => 'E02004001',
        '0SY' => 'E02004001',
        '0SZ' => 'E02004001',
        '0TA' => 'E02004001',
        '0TB' => 'E02004001',
        '0TD' => 'E02004001',
        '0TE' => 'E02004001',
        '0TF' => 'E02004001',
        '0TG' => 'E02004001',
        '0TH' => 'E02004001',
        '0TJ' => 'E02004001',
        '0TL' => 'E02004001',
        '0TN' => 'E02004001',
        '0TP' => 'E02004001',
        '0TQ' => 'E02004001',
        '0TR' => 'E02004001',
        '0TS' => 'E02004001',
        '0TT' => 'E02004001',
        '0TU' => 'E02004001',
        '0TW' => 'E02004001',
        '0TX' => 'E02004001',
        '0ZZ' => 'E02004001',
        '6AA' => 'E02004001',
        '6AB' => 'E02004001',
        '6AD' => 'E02004001',
        '6AE' => 'E02004001',
        '6AF' => 'E02004001',
        '6AG' => 'E02004001',
        '6AH' => 'E02004002',
        '6AJ' => 'E02004002',
        '6AN' => 'E02004002',
        '6AQ' => 'E02004002',
        '6AU' => 'E02004001',
        '6AX' => 'E02004001',
        '6AY' => 'E02004001',
        '6AZ' => 'E02004001',
        '6BA' => 'E02004001',
        '6BB' => 'E02004001',
        '6BD' => 'E02004001',
        '6BE' => 'E02004002',
        '6BG' => 'E02004001',
        '6BH' => 'E02004001',
        '6BJ' => 'E02004001',
        '6BL' => 'E02004001',
        '6BN' => 'E02004001',
        '6BP' => 'E02004002',
        '6BQ' => 'E02004001',
        '6BS' => 'E02004002',
        '6BT' => 'E02004001',
        '6BU' => 'E02004001',
        '6BW' => 'E02004001',
        '6BX' => 'E02004001',
        '6BY' => 'E02004002',
        '6DA' => 'E02004001',
        '6DB' => 'E02004001',
        '6DD' => 'E02004001',
        '6DE' => 'E02004001',
        '6DF' => 'E02004001',
        '6DG' => 'E02004001',
        '6DH' => 'E02004001',
        '6DJ' => 'E02004001',
        '6DL' => 'E02004001',
        '6DQ' => 'E02004001',
        '6DU' => 'E02004002',
        '6DX' => 'E02004001',
        '6DY' => 'E02004002',
        '6DZ' => 'E02004001',
        '6EA' => 'E02004002',
        '6ED' => 'E02004001',
        '6EE' => 'E02004001',
        '6EF' => 'E02004001',
        '6EG' => 'E02004001',
        '6EH' => 'E02004001',
        '6EJ' => 'E02004001',
        '6EL' => 'E02004001',
        '6EN' => 'E02004001',
        '6EP' => 'E02004001',
        '6EQ' => 'E02004001',
        '6ER' => 'E02004001',
        '6ES' => 'E02004001',
        '6ET' => 'E02004002',
        '6EU' => 'E02004002',
        '6EW' => 'E02004001',
        '6EX' => 'E02004001',
        '6EY' => 'E02004001',
        '6GA' => 'E02004001',
        '6GB' => 'E02004001',
        '6HA' => 'E02004002',
        '6HB' => 'E02004001',
        '6HD' => 'E02004001',
        '6HE' => 'E02004002',
        '6HF' => 'E02004002',
        '6HG' => 'E02004001',
        '6HH' => 'E02004002',
        '6HP' => 'E02004001',
        '6HQ' => 'E02004001',
        '6HU' => 'E02004001',
        '6HX' => 'E02004002',
        '6HY' => 'E02004002',
        '6HZ' => 'E02004001',
        '6JA' => 'E02004001',
        '6JB' => 'E02004002',
        '6JD' => 'E02004002',
        '6JE' => 'E02004002',
        '6JF' => 'E02004002',
        '6JG' => 'E02004002',
        '6JH' => 'E02004002',
        '6JJ' => 'E02004002',
        '6JL' => 'E02004002',
        '6JN' => 'E02004002',
        '6JP' => 'E02004002',
        '6JQ' => 'E02004002',
        '6JR' => 'E02004002',
        '6JS' => 'E02004002',
        '6JT' => 'E02004002',
        '6JU' => 'E02004002',
        '6JW' => 'E02004002',
        '6JX' => 'E02004002',
        '6JY' => 'E02004002',
        '6JZ' => 'E02004002',
        '6LA' => 'E02004002',
        '6LB' => 'E02004002',
        '6LD' => 'E02004002',
        '6LE' => 'E02004002',
        '6LF' => 'E02004002',
        '6LG' => 'E02004002',
        '6LJ' => 'E02004002',
        '6LL' => 'E02004002',
        '6LP' => 'E02004002',
        '6LQ' => 'E02004002',
        '6LR' => 'E02004002',
        '6LS' => 'E02004002',
        '6LT' => 'E02004002',
        '6LU' => 'E02004002',
        '6LW' => 'E02004002',
        '6LX' => 'E02004001',
        '6LY' => 'E02004002',
        '6LZ' => 'E02004002',
        '6NA' => 'E02004002',
        '6ND' => 'E02004000',
        '6NE' => 'E02004000',
        '6NF' => 'E02004000',
        '6NG' => 'E02004000',
        '6NH' => 'E02004000',
        '6NJ' => 'E02004002',
        '6NN' => 'E02004002',
        '6NP' => 'E02004002',
        '6NQ' => 'E02004000',
        '6NR' => 'E02004000',
        '6NS' => 'E02004000',
        '6NT' => 'E02004000',
        '6NU' => 'E02004000',
        '6NX' => 'E02004000',
        '6NY' => 'E02004000',
        '6NZ' => 'E02004000',
        '6PA' => 'E02004000',
        '6PB' => 'E02004000',
        '6PD' => 'E02004000',
        '6PE' => 'E02004000',
        '6PF' => 'E02004000',
        '6PG' => 'E02004000',
        '6PH' => 'E02004000',
        '6PJ' => 'E02004000',
        '6PL' => 'E02004000',
        '6PN' => 'E02004000',
        '6PP' => 'E02004000',
        '6PQ' => 'E02004000',
        '6PR' => 'E02004000',
        '6PS' => 'E02004000',
        '6PT' => 'E02004000',
        '6PU' => 'E02004000',
        '6PW' => 'E02004000',
        '6PX' => 'E02004000',
        '6PY' => 'E02004000',
        '6PZ' => 'E02004000',
        '6QA' => 'E02004000',
        '6QB' => 'E02004000',
        '6QD' => 'E02004000',
        '6QE' => 'E02004000',
        '6QF' => 'E02004000',
        '6QG' => 'E02004000',
        '6QH' => 'E02004000',
        '6QJ' => 'E02004000',
        '6QL' => 'E02004000',
        '6QN' => 'E02004000',
        '6QP' => 'E02004000',
        '6QQ' => 'E02004000',
        '6QR' => 'E02004000',
        '6QS' => 'E02004000',
        '6QT' => 'E02004000',
        '6QU' => 'E02004000',
        '6QX' => 'E02004000',
        '6RA' => 'E02004002',
        '6RB' => 'E02004002',
        '6RE' => 'E02004000',
        '6RF' => 'E02004000',
        '6RG' => 'E02004000',
        '6RH' => 'E02004000',
        '6RJ' => 'E02004000',
        '6RL' => 'E02004000',
        '6RP' => 'E02004002',
        '6RQ' => 'E02004000',
        '6RR' => 'E02004000',
        '6RS' => 'E02004000',
        '6RT' => 'E02004000',
        '6RU' => 'E02004000',
        '6RW' => 'E02004000',
        '6RX' => 'E02004000',
        '6RY' => 'E02004000',
        '6RZ' => 'E02004000',
        '6SA' => 'E02004002',
        '6SB' => 'E02004002',
        '6SD' => 'E02004002',
        '6SE' => 'E02004000',
        '6SF' => 'E02004000',
        '6SG' => 'E02004002',
        '6SH' => 'E02004002',
        '6SJ' => 'E02004002',
        '6SL' => 'E02004002',
        '6SN' => 'E02004002',
        '6SP' => 'E02004002',
        '6SQ' => 'E02004002',
        '6SR' => 'E02004002',
        '6SS' => 'E02004002',
        '6ST' => 'E02004002',
        '6SU' => 'E02004002',
        '6SW' => 'E02004002',
        '6SX' => 'E02004002',
        '6SY' => 'E02004002',
        '6SZ' => 'E02004002',
        '6TA' => 'E02004002',
        '6TB' => 'E02004002',
        '6TD' => 'E02004002',
        '6TE' => 'E02004002',
        '6TF' => 'E02004002',
        '6TG' => 'E02004002',
        '6TH' => 'E02004002',
        '6TJ' => 'E02004002',
        '6TL' => 'E02004002',
        '6TN' => 'E02004002',
        '6TP' => 'E02004002',
        '6TQ' => 'E02004002',
        '6TR' => 'E02004002',
        '6TS' => 'E02004002',
        '6TT' => 'E02004002',
        '6TU' => 'E02004002',
        '6TW' => 'E02004002',
        '6TX' => 'E02004002',
        '6TY' => 'E02004002',
        '6TZ' => 'E02004002',
        '6UA' => 'E02004002',
        '6UB' => 'E02004002',
        '6UD' => 'E02004002',
        '6UE' => 'E02004002',
        '6UF' => 'E02004002',
        '6UG' => 'E02004002',
        '6UH' => 'E02004002',
        '6UJ' => 'E02004002',
        '6UL' => 'E02004002',
        '6UN' => 'E02004002',
        '6UP' => 'E02004002',
        '6UQ' => 'E02004002',
        '6UR' => 'E02004002',
        '6UT' => 'E02004002',
        '6UU' => 'E02004002',
        '6UW' => 'E02004002',
        '6UX' => 'E02004002',
        '6UY' => 'E02004002',
        '6UZ' => 'E02004002',
        '6WA' => 'E02004001',
        '6WZ' => 'E02004001',
        '6XA' => 'E02004002',
        '6XB' => 'E02004002',
        '6XD' => 'E02004002',
        '6XE' => 'E02004002',
        '6XF' => 'E02004002',
        '6XG' => 'E02004002',
        '6XH' => 'E02004002',
        '6XJ' => 'E02004002',
        '6XL' => 'E02004002',
        '6XP' => 'E02004002',
        '6XQ' => 'E02004002',
        '6XR' => 'E02004002',
        '6XS' => 'E02004002',
        '6XT' => 'E02004002',
        '6XU' => 'E02004002',
        '6XX' => 'E02004002',
        '6YA' => 'E02004001',
        '6YB' => 'E02004001',
        '6YD' => 'E02004001',
        '6YF' => 'E02004001',
        '6YG' => 'E02004002',
        '6YH' => 'E02004001',
        '6YJ' => 'E02004001',
        '6YQ' => 'E02004001',
        '7AA' => 'E02004001',
        '7AB' => 'E02004001',
        '7AD' => 'E02004001',
        '7AE' => 'E02004001',
        '7AF' => 'E02004001',
        '7AG' => 'E02004001',
        '7AH' => 'E02004001',
        '7AJ' => 'E02004001',
        '7AL' => 'E02004001',
        '7AN' => 'E02004001',
        '7AP' => 'E02004001',
        '7AQ' => 'E02004001',
        '7AR' => 'E02004001',
        '7AS' => 'E02004001',
        '7AT' => 'E02004001',
        '7AU' => 'E02004001',
        '7AW' => 'E02004001',
        '7AX' => 'E02004001',
        '7AY' => 'E02004001',
        '7AZ' => 'E02004001',
        '7BA' => 'E02004001',
        '7BB' => 'E02004001',
        '7BD' => 'E02004001',
        '7BE' => 'E02004001',
        '7BF' => 'E02004001',
        '7BG' => 'E02004001',
        '7BH' => 'E02004001',
        '7BJ' => 'E02004001',
        '7BL' => 'E02004001',
        '7BN' => 'E02004001',
        '7BP' => 'E02004001',
        '7BQ' => 'E02004001',
        '7BS' => 'E02004001',
        '7BT' => 'E02004001',
        '7BU' => 'E02004001',
        '7BW' => 'E02004001',
        '7BX' => 'E02004001',
        '7BY' => 'E02004001',
        '7BZ' => 'E02004001',
        '7DA' => 'E02004001',
        '7DB' => 'E02004001',
        '7DD' => 'E02004001',
        '7DE' => 'E02004005',
        '7DF' => 'E02004006',
        '7DG' => 'E02004001',
        '7DH' => 'E02004001',
        '7DJ' => 'E02004001',
        '7DL' => 'E02004001',
        '7DN' => 'E02004001',
        '7DP' => 'E02004001',
        '7DQ' => 'E02004001',
        '7DR' => 'E02004001',
        '7DS' => 'E02004001',
        '7DT' => 'E02004001',
        '7DU' => 'E02004001',
        '7DW' => 'E02004001',
        '7DX' => 'E02004001',
        '7DY' => 'E02004001',
        '7DZ' => 'E02004001',
        '7EB' => 'E02004001',
        '7ED' => 'E02004001',
        '7EE' => 'E02004001',
        '7EF' => 'E02004001',
        '7EG' => 'E02004001',
        '7EH' => 'E02004001',
        '7EJ' => 'E02004001',
        '7EL' => 'E02004001',
        '7EN' => 'E02004001',
        '7EP' => 'E02004001',
        '7EQ' => 'E02004001',
        '7ER' => 'E02004001',
        '7ES' => 'E02004001',
        '7ET' => 'E02004001',
        '7EU' => 'E02004001',
        '7EW' => 'E02004001',
        '7EX' => 'E02004001',
        '7EY' => 'E02004001',
        '7EZ' => 'E02004001',
        '7FA' => 'E02004001',
        '7GA' => 'E02004001',
        '7GB' => 'E02004001',
        '7HA' => 'E02004001',
        '7HB' => 'E02004001',
        '7HD' => 'E02004001',
        '7HE' => 'E02004001',
        '7HF' => 'E02004001',
        '7HG' => 'E02004001',
        '7HH' => 'E02004001',
        '7HJ' => 'E02004001',
        '7HL' => 'E02004001',
        '7HN' => 'E02004001',
        '7HP' => 'E02004001',
        '7HQ' => 'E02004001',
        '7HR' => 'E02004001',
        '7HS' => 'E02004001',
        '7HT' => 'E02004001',
        '7HU' => 'E02004001',
        '7HW' => 'E02004001',
        '7HX' => 'E02004004',
        '7HZ' => 'E02004001',
        '7JA' => 'E02004001',
        '7JB' => 'E02004001',
        '7JD' => 'E02004001',
        '7JE' => 'E02004001',
        '7JF' => 'E02004001',
        '7JG' => 'E02004001',
        '7JH' => 'E02004001',
        '7JJ' => 'E02004001',
        '7JN' => 'E02004001',
        '7JP' => 'E02004001',
        '7JQ' => 'E02004001',
        '7JR' => 'E02004001',
        '7JS' => 'E02004001',
        '7JU' => 'E02004001',
        '7JW' => 'E02004001',
        '7JX' => 'E02004001',
        '7JY' => 'E02004001',
        '7JZ' => 'E02004001',
        '7LA' => 'E02004001',
        '7LB' => 'E02004001',
        '7LD' => 'E02004001',
        '7LE' => 'E02004001',
        '7LF' => 'E02004001',
        '7LG' => 'E02004001',
        '7LH' => 'E02004001',
        '7LJ' => 'E02004001',
        '7LL' => 'E02004001',
        '7LN' => 'E02004001',
        '7LP' => 'E02004001',
        '7LQ' => 'E02004001',
        '7LR' => 'E02004001',
        '7LS' => 'E02004001',
        '7LT' => 'E02004001',
        '7LU' => 'E02004001',
        '7LW' => 'E02004001',
        '7LX' => 'E02004001',
        '7LY' => 'E02004001',
        '7LZ' => 'E02004001',
        '7NA' => 'E02004001',
        '7NB' => 'E02004001',
        '7ND' => 'E02004001',
        '7NE' => 'E02004004',
        '7NF' => 'E02004001',
        '7NG' => 'E02004001',
        '7NH' => 'E02004001',
        '7NJ' => 'E02004001',
        '7NL' => 'E02004001',
        '7NN' => 'E02004001',
        '7NP' => 'E02004001',
        '7NQ' => 'E02004001',
        '7NR' => 'E02004001',
        '7NS' => 'E02004001',
        '7NT' => 'E02004001',
        '7NU' => 'E02004001',
        '7NW' => 'E02004001',
        '7NX' => 'E02004001',
        '7NY' => 'E02004001',
        '7NZ' => 'E02004001',
        '7PA' => 'E02004001',
        '7PB' => 'E02004001',
        '7PD' => 'E02004001',
        '7PE' => 'E02004001',
        '7PF' => 'E02004001',
        '7PG' => 'E02004001',
        '7PH' => 'E02004001',
        '7PJ' => 'E02004001',
        '7PL' => 'E02004001',
        '7PN' => 'E02004001',
        '7PP' => 'E02004001',
        '7PQ' => 'E02004001',
        '7PR' => 'E02004001',
        '7PS' => 'E02004001',
        '7PT' => 'E02004001',
        '7PU' => 'E02004001',
        '7PW' => 'E02004001',
        '7PX' => 'E02004001',
        '7PY' => 'E02004001',
        '7PZ' => 'E02004001',
        '7QA' => 'E02004001',
        '7QB' => 'E02004001',
        '7QD' => 'E02004001',
        '7QE' => 'E02004001',
        '7QF' => 'E02004001',
        '7QG' => 'E02004001',
        '7QN' => 'E02004001',
        '7QP' => 'E02004001',
        '7QQ' => 'E02004001',
        '7QR' => 'E02004001',
        '7QS' => 'E02004001',
        '7QT' => 'E02004001',
        '7QU' => 'E02004001',
        '7QW' => 'E02004001',
        '7QX' => 'E02004001',
        '7QY' => 'E02004001',
        '7QZ' => 'E02004001',
        '7RA' => 'E02004001',
        '7RB' => 'E02004001',
        '7RD' => 'E02004001',
        '7RE' => 'E02004001',
        '7RF' => 'E02004001',
        '7RG' => 'E02004001',
        '7RH' => 'E02004001',
        '7RJ' => 'E02004001',
        '7RL' => 'E02004001',
        '7RN' => 'E02004001',
        '7RP' => 'E02004001',
        '7RQ' => 'E02004001',
        '7RR' => 'E02004001',
        '7RS' => 'E02004001',
        '7RT' => 'E02004001',
        '7RU' => 'E02004001',
        '7RW' => 'E02004001',
        '7RX' => 'E02004001',
        '7RY' => 'E02004001',
        '7RZ' => 'E02004001',
        '7SA' => 'E02004001',
        '7SB' => 'E02004001',
        '7SD' => 'E02004002',
        '7SE' => 'E02004001',
        '7SF' => 'E02004001',
        '7SG' => 'E02004002',
        '7SH' => 'E02004001',
        '7SJ' => 'E02004001',
        '7SL' => 'E02004001',
        '7SN' => 'E02004001',
        '7SQ' => 'E02004001',
        '7SR' => 'E02004001',
        '7SS' => 'E02004001',
        '7ST' => 'E02004001',
        '7SY' => 'E02004004',
        '7TA' => 'E02004001',
        '7TB' => 'E02004001',
        '7TD' => 'E02004001',
        '7TE' => 'E02004001',
        '7TG' => 'E02004001',
        '7TN' => 'E02004002',
        '7TP' => 'E02004001',
        '7TQ' => 'E02004001',
        '7TR' => 'E02004001',
        '7TS' => 'E02004001',
        '7TT' => 'E02004001',
        '7TU' => 'E02004001',
        '7TW' => 'E02004002',
        '7TX' => 'E02004001',
        '7TY' => 'E02004001',
        '7TZ' => 'E02004001',
        '7UA' => 'E02004001',
        '7UB' => 'E02004001',
        '7UD' => 'E02004001',
        '7UE' => 'E02004001',
        '7UF' => 'E02004001',
        '7UG' => 'E02004001',
        '7UH' => 'E02004001',
        '7UJ' => 'E02004001',
        '7UL' => 'E02004001',
        '7UN' => 'E02004001',
        '7UQ' => 'E02004001',
        '7UR' => 'E02004001',
        '7UT' => 'E02004001',
        '7UU' => 'E02004002',
        '7UW' => 'E02004001',
        '7UX' => 'E02004001',
        '7UY' => 'E02004001',
        '7UZ' => 'E02004001',
        '7WA' => 'E02004001',
        '7WZ' => 'E02004001',
        '7XA' => 'E02004001',
        '7XB' => 'E02004001',
        '7XD' => 'E02004001',
        '7XE' => 'E02004001',
        '7XF' => 'E02004001',
        '7XG' => 'E02004001',
        '7XL' => 'E02004001',
        '7XQ' => 'E02004001',
        '7XY' => 'E02004001',
        '7XZ' => 'E02004001',
        '7YA' => 'E02004001',
        '7YB' => 'E02004001',
        '7YH' => 'E02004001',
        '7YR' => 'E02004001',
        '7YS' => 'E02004001',
        '7YT' => 'E02004001',
        '7YU' => 'E02004001',
        '7YX' => 'E02004001',
        '7YY' => 'E02004001',
        '7ZB' => 'E02004001',
        '7ZY' => 'E02004001',
        '8AA' => 'E02004001',
        '8AB' => 'E02004001',
        '8AD' => 'E02004001',
        '8AE' => 'E02004001',
        '8AF' => 'E02004001',
        '8AG' => 'E02004001',
        '8AH' => 'E02004001',
        '8AJ' => 'E02004001',
        '8AL' => 'E02004001',
        '8AN' => 'E02004001',
        '8AP' => 'E02004001',
        '8AQ' => 'E02004001',
        '8AR' => 'E02004001',
        '8AS' => 'E02004001',
        '8AT' => 'E02004001',
        '8AU' => 'E02004001',
        '8AW' => 'E02004001',
        '8AX' => 'E02004001',
        '8AY' => 'E02004001',
        '8AZ' => 'E02004001',
        '8BA' => 'E02004001',
        '8BB' => 'E02004001',
        '8BD' => 'E02004002',
        '8BE' => 'E02004001',
        '8BF' => 'E02004004',
        '8BG' => 'E02004002',
        '8BH' => 'E02004001',
        '8BJ' => 'E02004001',
        '8BL' => 'E02004004',
        '8BN' => 'E02004004',
        '8BP' => 'E02004004',
        '8BQ' => 'E02004004',
        '8BS' => 'E02004004',
        '8BT' => 'E02004004',
        '8BU' => 'E02004004',
        '8BW' => 'E02004004',
        '8BX' => 'E02004004',
        '8BY' => 'E02004004',
        '8BZ' => 'E02004004',
        '8DA' => 'E02004004',
        '8DB' => 'E02004004',
        '8DD' => 'E02004004',
        '8DE' => 'E02004004',
        '8DF' => 'E02004004',
        '8DG' => 'E02004004',
        '8DH' => 'E02004004',
        '8DJ' => 'E02004004',
        '8DP' => 'E02004004',
        '8DQ' => 'E02004004',
        '8DR' => 'E02004004',
        '8DS' => 'E02004004',
        '8DT' => 'E02004004',
        '8DU' => 'E02004004',
        '8DX' => 'E02004004',
        '8DY' => 'E02004004',
        '8EA' => 'E02004002',
        '8EG' => 'E02004004',
        '8EH' => 'E02004004',
        '8EJ' => 'E02004004',
        '8EL' => 'E02004004',
        '8EN' => 'E02004004',
        '8EP' => 'E02004004',
        '8EQ' => 'E02004004',
        '8ER' => 'E02004004',
        '8ES' => 'E02004004',
        '8ET' => 'E02004004',
        '8EU' => 'E02004004',
        '8EW' => 'E02004004',
        '8EX' => 'E02004004',
        '8EY' => 'E02004004',
        '8EZ' => 'E02004004',
        '8GA' => 'E02004001',
        '8GB' => 'E02004002',
        '8GD' => 'E02004002',
        '8GE' => 'E02004002',
        '8GF' => 'E02004002',
        '8GG' => 'E02004002',
        '8GH' => 'E02004001',
        '8GJ' => 'E02004002',
        '8GL' => 'E02004001',
        '8GN' => 'E02004001',
        '8GP' => 'E02004001',
        '8HA' => 'E02004004',
        '8HB' => 'E02004004',
        '8HD' => 'E02004004',
        '8HE' => 'E02004004',
        '8HF' => 'E02004004',
        '8HG' => 'E02004004',
        '8HH' => 'E02004004',
        '8HJ' => 'E02004004',
        '8HL' => 'E02004004',
        '8HN' => 'E02004004',
        '8HP' => 'E02004004',
        '8HQ' => 'E02004004',
        '8HR' => 'E02004004',
        '8HS' => 'E02004004',
        '8HT' => 'E02004004',
        '8HU' => 'E02004004',
        '8HW' => 'E02004004',
        '8HX' => 'E02004002',
        '8JB' => 'E02004004',
        '8JG' => 'E02004002',
        '8JH' => 'E02004002',
        '8JJ' => 'E02004002',
        '8JL' => 'E02004002',
        '8JN' => 'E02004002',
        '8JP' => 'E02004002',
        '8JQ' => 'E02004003',
        '8JR' => 'E02004002',
        '8JS' => 'E02004002',
        '8JT' => 'E02004002',
        '8JW' => 'E02004002',
        '8JX' => 'E02004002',
        '8JY' => 'E02004002',
        '8JZ' => 'E02004004',
        '8LA' => 'E02004002',
        '8LB' => 'E02004002',
        '8LD' => 'E02004002',
        '8LE' => 'E02004002',
        '8LF' => 'E02004002',
        '8LG' => 'E02004002',
        '8LH' => 'E02004002',
        '8LN' => 'E02004005',
        '8LQ' => 'E02004002',
        '8LW' => 'E02004005',
        '8ND' => 'E02004002',
        '8NE' => 'E02004002',
        '8NH' => 'E02004002',
        '8NJ' => 'E02004002',
        '8NL' => 'E02004002',
        '8NN' => 'E02004002',
        '8NP' => 'E02004002',
        '8NQ' => 'E02004002',
        '8NR' => 'E02004002',
        '8NS' => 'E02004002',
        '8NT' => 'E02004002',
        '8NU' => 'E02004002',
        '8NW' => 'E02004002',
        '8NX' => 'E02004002',
        '8NY' => 'E02004002',
        '8NZ' => 'E02004002',
        '8PA' => 'E02004002',
        '8PB' => 'E02004002',
        '8PD' => 'E02004002',
        '8PE' => 'E02004002',
        '8PF' => 'E02004002',
        '8PG' => 'E02004002',
        '8PH' => 'E02004002',
        '8PJ' => 'E02004002',
        '8PQ' => 'E02004002',
        '8PR' => 'E02004002',
        '8PS' => 'E02004002',
        '8PT' => 'E02004001',
        '8PU' => 'E02004002',
        '8PW' => 'E02004002',
        '8PX' => 'E02004002',
        '8PY' => 'E02004002',
        '8PZ' => 'E02004002',
        '8QA' => 'E02004002',
        '8QB' => 'E02004002',
        '8QD' => 'E02004002',
        '8QE' => 'E02004002',
        '8QF' => 'E02004002',
        '8QG' => 'E02004002',
        '8QH' => 'E02004002',
        '8QJ' => 'E02004002',
        '8QL' => 'E02004002',
        '8QN' => 'E02004002',
        '8QP' => 'E02004002',
        '8QR' => 'E02004002',
        '8QS' => 'E02004002',
        '8QT' => 'E02004002',
        '8QU' => 'E02004002',
        '8QW' => 'E02004002',
        '8QX' => 'E02004002',
        '8QY' => 'E02004002',
        '8QZ' => 'E02004002',
        '8RA' => 'E02004002',
        '8RB' => 'E02004002',
        '8RD' => 'E02004002',
        '8RE' => 'E02004002',
        '8RF' => 'E02004002',
        '8RG' => 'E02004002',
        '8RP' => 'E02004002',
        '8RQ' => 'E02004002',
        '8RR' => 'E02004002',
        '8RS' => 'E02004002',
        '8RT' => 'E02004002',
        '8RU' => 'E02004002',
        '8RW' => 'E02004002',
        '8RX' => 'E02004002',
        '8RY' => 'E02004002',
        '8RZ' => 'E02004002',
        '8SA' => 'E02004002',
        '8SB' => 'E02004002',
        '8SD' => 'E02004002',
        '8SE' => 'E02004002',
        '8SF' => 'E02004002',
        '8SG' => 'E02004002',
        '8SH' => 'E02004002',
        '8SJ' => 'E02004002',
        '8SL' => 'E02004002',
        '8SN' => 'E02004002',
        '8SP' => 'E02004002',
        '8SQ' => 'E02004002',
        '8SR' => 'E02004002',
        '8SS' => 'E02004002',
        '8ST' => 'E02004002',
        '8SU' => 'E02004002',
        '8SW' => 'E02004002',
        '8TD' => 'E02004002',
        '8TG' => 'E02004002',
        '8TH' => 'E02004002',
        '8TJ' => 'E02004002',
        '8TL' => 'E02004002',
        '8TN' => 'E02004002',
        '8TP' => 'E02004002',
        '8TR' => 'E02004002',
        '8TS' => 'E02004002',
        '8TT' => 'E02004002',
        '8TU' => 'E02004002',
        '8TX' => 'E02004002',
        '8TY' => 'E02004002',
        '8TZ' => 'E02004002',
        '8UA' => 'E02004002',
        '8UB' => 'E02004000',
        '8UD' => 'E02004002',
        '8UG' => 'E02004002',
        '8UH' => 'E02004002',
        '8UJ' => 'E02004002',
        '8UL' => 'E02004002',
        '8UN' => 'E02004002',
        '8UP' => 'E02004000',
        '8UQ' => 'E02004002',
        '8UR' => 'E02004000',
        '8UT' => 'E02004000',
        '8UU' => 'E02004000',
        '8UW' => 'E02004000',
        '8UX' => 'E02004000',
        '8UY' => 'E02004000',
        '8UZ' => 'E02004000',
        '8WA' => 'E02004001',
        '8WB' => 'E02004001',
        '8WD' => 'E02004001',
        '8WE' => 'E02004000',
        '8WF' => 'E02004000',
        '8WY' => 'E02004002',
        '8WZ' => 'E02004002',
        '8XA' => 'E02004000',
        '8XB' => 'E02004000',
        '8XD' => 'E02004000',
        '8XE' => 'E02004000',
        '8XF' => 'E02004000',
        '8XG' => 'E02004000',
        '8XH' => 'E02004000',
        '8XJ' => 'E02004000',
        '8XL' => 'E02004000',
        '8XN' => 'E02004000',
        '8XP' => 'E02004002',
        '8XQ' => 'E02004000',
        '8XR' => 'E02004000',
        '8XS' => 'E02004002',
        '8XT' => 'E02004002',
        '8XU' => 'E02004000',
        '8XW' => 'E02004000',
        '8XX' => 'E02004003',
        '8XY' => 'E02004003',
        '8XZ' => 'E02004003',
        '8YA' => 'E02004005',
        '8YB' => 'E02004006',
        '8YD' => 'E02004002',
        '8YE' => 'E02004002',
        '8YF' => 'E02004002',
        '8YG' => 'E02004002',
        '8YH' => 'E02004003',
        '8YJ' => 'E02004002',
        '8YL' => 'E02004003',
        '8YN' => 'E02004003',
        '8YP' => 'E02004002',
        '8YQ' => 'E02004002',
        '8YR' => 'E02004002',
        '8YS' => 'E02004002',
        '8YT' => 'E02004001',
        '8YU' => 'E02004002',
        '8YW' => 'E02004002',
        '8ZZ' => 'E02004002',
        '9AA' => 'E02004004',
        '9AB' => 'E02004004',
        '9AD' => 'E02004004',
        '9AE' => 'E02004004',
        '9AF' => 'E02004004',
        '9AG' => 'E02004004',
        '9AH' => 'E02004004',
        '9AJ' => 'E02004004',
        '9AL' => 'E02004004',
        '9AN' => 'E02004004',
        '9AP' => 'E02004004',
        '9AQ' => 'E02004004',
        '9AR' => 'E02004004',
        '9AS' => 'E02004004',
        '9AT' => 'E02004004',
        '9AU' => 'E02004004',
        '9AW' => 'E02004004',
        '9AX' => 'E02004004',
        '9AY' => 'E02004004',
        '9AZ' => 'E02004004',
        '9BA' => 'E02004004',
        '9BB' => 'E02004004',
        '9BD' => 'E02004004',
        '9BE' => 'E02004004',
        '9BF' => 'E02004004',
        '9BG' => 'E02004004',
        '9BH' => 'E02004004',
        '9BJ' => 'E02004004',
        '9BL' => 'E02004004',
        '9BP' => 'E02004004',
        '9BS' => 'E02004004',
        '9BT' => 'E02004004',
        '9BU' => 'E02004004',
        '9BW' => 'E02004004',
        '9BX' => 'E02004004',
        '9BY' => 'E02004004',
        '9BZ' => 'E02004004',
        '9DA' => 'E02004004',
        '9DB' => 'E02004004',
        '9DD' => 'E02004004',
        '9DE' => 'E02004004',
        '9DF' => 'E02004004',
        '9DG' => 'E02004004',
        '9DL' => 'E02004004',
        '9DN' => 'E02004004',
        '9DP' => 'E02004004',
        '9DR' => 'E02004004',
        '9DS' => 'E02004004',
        '9DT' => 'E02004004',
        '9DU' => 'E02004004',
        '9DW' => 'E02004004',
        '9DX' => 'E02004004',
        '9DY' => 'E02004004',
        '9DZ' => 'E02004004',
        '9EA' => 'E02004004',
        '9EB' => 'E02004004',
        '9ED' => 'E02004004',
        '9EE' => 'E02004004',
        '9EF' => 'E02004004',
        '9EG' => 'E02004004',
        '9EH' => 'E02004004',
        '9EJ' => 'E02004004',
        '9EL' => 'E02004004',
        '9EN' => 'E02004004',
        '9EP' => 'E02004004',
        '9EQ' => 'E02004004',
        '9ER' => 'E02004004',
        '9ES' => 'E02004004',
        '9ET' => 'E02004004',
        '9EU' => 'E02004004',
        '9EW' => 'E02004004',
        '9EX' => 'E02004004',
        '9EY' => 'E02004004',
        '9EZ' => 'E02004004',
        '9GA' => 'E02004004',
        '9GB' => 'E02004001',
        '9HA' => 'E02004004',
        '9HB' => 'E02004004',
        '9HD' => 'E02004004',
        '9HE' => 'E02004004',
        '9HH' => 'E02004004',
        '9HN' => 'E02004004',
        '9HP' => 'E02004004',
        '9HQ' => 'E02004004',
        '9HR' => 'E02004004',
        '9HS' => 'E02004004',
        '9HT' => 'E02004004',
        '9HU' => 'E02004004',
        '9HW' => 'E02004004',
        '9HX' => 'E02004004',
        '9HY' => 'E02004004',
        '9HZ' => 'E02004004',
        '9JA' => 'E02004004',
        '9JB' => 'E02004004',
        '9JD' => 'E02004004',
        '9JE' => 'E02004004',
        '9JF' => 'E02004004',
        '9JG' => 'E02004004',
        '9JH' => 'E02004004',
        '9JJ' => 'E02004004',
        '9JL' => 'E02004004',
        '9JN' => 'E02004004',
        '9JP' => 'E02004004',
        '9JQ' => 'E02004004',
        '9JR' => 'E02004004',
        '9JS' => 'E02004004',
        '9JT' => 'E02004004',
        '9JU' => 'E02004004',
        '9JW' => 'E02004004',
        '9JX' => 'E02004004',
        '9JY' => 'E02004004',
        '9JZ' => 'E02004004',
        '9LA' => 'E02004004',
        '9LB' => 'E02004004',
        '9LD' => 'E02004004',
        '9LE' => 'E02004004',
        '9LF' => 'E02004004',
        '9LG' => 'E02004004',
        '9LH' => 'E02004004',
        '9LJ' => 'E02004004',
        '9LL' => 'E02004004',
        '9LN' => 'E02004004',
        '9LP' => 'E02004004',
        '9LQ' => 'E02004004',
        '9LR' => 'E02004004',
        '9LS' => 'E02004004',
        '9LT' => 'E02004004',
        '9LU' => 'E02004004',
        '9LW' => 'E02004004',
        '9LX' => 'E02004004',
        '9LY' => 'E02004004',
        '9LZ' => 'E02004004',
        '9NA' => 'E02004004',
        '9NB' => 'E02004004',
        '9ND' => 'E02004004',
        '9NE' => 'E02004004',
        '9NF' => 'E02004004',
        '9NG' => 'E02004004',
        '9NP' => 'E02004004',
        '9NQ' => 'E02004004',
        '9NR' => 'E02004004',
        '9NS' => 'E02004004',
        '9NT' => 'E02004004',
        '9NW' => 'E02004004',
        '9NY' => 'E02004004',
        '9NZ' => 'E02004004',
        '9PA' => 'E02004004',
        '9PB' => 'E02004004',
        '9PD' => 'E02004004',
        '9PE' => 'E02004004',
        '9PF' => 'E02004004',
        '9PG' => 'E02004004',
        '9PH' => 'E02004004',
        '9PJ' => 'E02004004',
        '9PL' => 'E02004004',
        '9PN' => 'E02004004',
        '9PP' => 'E02004004',
        '9PQ' => 'E02004004',
        '9PR' => 'E02004004',
        '9PS' => 'E02004004',
        '9PT' => 'E02004004',
        '9PU' => 'E02004004',
        '9PX' => 'E02004004',
        '9PY' => 'E02004004',
        '9PZ' => 'E02004004',
        '9QA' => 'E02004004',
        '9QB' => 'E02004004',
        '9QD' => 'E02004004',
        '9QE' => 'E02004004',
        '9QF' => 'E02004004',
        '9QG' => 'E02004004',
        '9QH' => 'E02004004',
        '9QJ' => 'E02004004',
        '9QQ' => 'E02004001',
        '9QT' => 'E02004004',
        '9QU' => 'E02004004',
        '9QX' => 'E02004004',
        '9QY' => 'E02004004',
        '9QZ' => 'E02004004',
        '9RA' => 'E02004004',
        '9RB' => 'E02004004',
        '9RD' => 'E02004004',
        '9RE' => 'E02004004',
        '9RF' => 'E02004004',
        '9RG' => 'E02004004',
        '9RH' => 'E02004004',
        '9RJ' => 'E02004004',
        '9RL' => 'E02004004',
        '9RN' => 'E02004004',
        '9RP' => 'E02004004',
        '9RQ' => 'E02004004',
        '9RR' => 'E02004004',
        '9RS' => 'E02004004',
        '9RT' => 'E02004004',
        '9RU' => 'E02004004',
        '9RW' => 'E02004004',
        '9SA' => 'E02004004',
        '9SB' => 'E02004004',
        '9SD' => 'E02004004',
        '9SE' => 'E02004004',
        '9SF' => 'E02004004',
        '9SG' => 'E02004004',
        '9SH' => 'E02004004',
        '9SJ' => 'E02004004',
        '9SL' => 'E02004004',
        '9SN' => 'E02004004',
        '9SP' => 'E02004004',
        '9SU' => 'E02004004',
        '9SW' => 'E02004004',
        '9SX' => 'E02004004',
        '9SY' => 'E02004004',
        '9SZ' => 'E02004004',
        '9TA' => 'E02004004',
        '9TB' => 'E02004004',
        '9TD' => 'E02004004',
        '9TE' => 'E02004004',
        '9TF' => 'E02004004',
        '9TG' => 'E02004004',
        '9TH' => 'E02004004',
        '9TN' => 'E02004004',
        '9TP' => 'E02004004',
        '9TQ' => 'E02004004',
        '9TW' => 'E02004004',
        '9TZ' => 'E02004004',
        '9UA' => 'E02004004',
        '9UB' => 'E02004004',
        '9UD' => 'E02004004',
        '9UE' => 'E02004006',
        '9UF' => 'E02004004',
        '9UG' => 'E02004004',
        '9UH' => 'E02004004',
        '9UJ' => 'E02004004',
        '9UL' => 'E02004004',
        '9UN' => 'E02004006',
        '9UP' => 'E02004004',
        '9UQ' => 'E02004004',
        '9UR' => 'E02004004',
        '9US' => 'E02004004',
        '9UT' => 'E02004004',
        '9UU' => 'E02004004',
        '9UW' => 'E02004004',
        '9UX' => 'E02004006',
        '9UY' => 'E02004006',
        '9YA' => 'E02004006',
        '9YZ' => 'E02004006',
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
