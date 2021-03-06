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
final class RG45
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02003458',
        '6AB' => 'E02003457',
        '6AD' => 'E02003457',
        '6AE' => 'E02003457',
        '6AF' => 'E02003457',
        '6AG' => 'E02003458',
        '6AH' => 'E02003457',
        '6AJ' => 'E02003458',
        '6AL' => 'E02003458',
        '6AN' => 'E02003363',
        '6AP' => 'E02003458',
        '6AQ' => 'E02003458',
        '6AR' => 'E02003364',
        '6AS' => 'E02003364',
        '6AT' => 'E02003364',
        '6AU' => 'E02003364',
        '6AW' => 'E02003364',
        '6AX' => 'E02003458',
        '6AY' => 'E02003458',
        '6AZ' => 'E02003363',
        '6BA' => 'E02003458',
        '6BB' => 'E02003458',
        '6BD' => 'E02003458',
        '6BE' => 'E02003458',
        '6BF' => 'E02003363',
        '6BG' => 'E02003458',
        '6BH' => 'E02003458',
        '6BJ' => 'E02003458',
        '6BL' => 'E02003458',
        '6BN' => 'E02003363',
        '6BP' => 'E02003363',
        '6BQ' => 'E02003458',
        '6BS' => 'E02003457',
        '6BT' => 'E02003457',
        '6BU' => 'E02003457',
        '6BW' => 'E02003363',
        '6BX' => 'E02003457',
        '6BY' => 'E02003457',
        '6BZ' => 'E02003457',
        '6DA' => 'E02003458',
        '6DB' => 'E02003458',
        '6DD' => 'E02003363',
        '6DE' => 'E02003363',
        '6DF' => 'E02003363',
        '6DG' => 'E02003363',
        '6DH' => 'E02003363',
        '6DJ' => 'E02003363',
        '6DL' => 'E02003363',
        '6DN' => 'E02003363',
        '6DP' => 'E02003363',
        '6DQ' => 'E02003363',
        '6DR' => 'E02003363',
        '6DS' => 'E02003363',
        '6DT' => 'E02003363',
        '6DU' => 'E02003458',
        '6DW' => 'E02003363',
        '6DX' => 'E02003363',
        '6DY' => 'E02003363',
        '6DZ' => 'E02003363',
        '6EA' => 'E02003363',
        '6EB' => 'E02003458',
        '6ED' => 'E02003363',
        '6EE' => 'E02003363',
        '6EF' => 'E02003458',
        '6EG' => 'E02003363',
        '6EH' => 'E02003363',
        '6EJ' => 'E02003363',
        '6EL' => 'E02003363',
        '6EN' => 'E02003363',
        '6EP' => 'E02003458',
        '6EQ' => 'E02003458',
        '6ER' => 'E02003363',
        '6ES' => 'E02003458',
        '6ET' => 'E02003363',
        '6EU' => 'E02003458',
        '6EW' => 'E02003458',
        '6EX' => 'E02003458',
        '6EY' => 'E02003458',
        '6EZ' => 'E02003363',
        '6FA' => 'E02003458',
        '6FB' => 'E02003355',
        '6FD' => 'E02003451',
        '6FE' => 'E02003451',
        '6FF' => 'E02003458',
        '6FG' => 'E02003458',
        '6FH' => 'E02003458',
        '6FJ' => 'E02003355',
        '6FL' => 'E02003451',
        '6FN' => 'E02003458',
        '6FP' => 'E02003458',
        '6FQ' => 'E02003458',
        '6FR' => 'E02003451',
        '6FS' => 'E02003458',
        '6FT' => 'E02003458',
        '6FU' => 'E02003451',
        '6FW' => 'E02003458',
        '6FX' => 'E02003355',
        '6FY' => 'E02003458',
        '6FZ' => 'E02003451',
        '6GA' => 'E02003458',
        '6GB' => 'E02003458',
        '6GD' => 'E02003355',
        '6GE' => 'E02003458',
        '6GF' => 'E02003355',
        '6GG' => 'E02003451',
        '6GH' => 'E02003355',
        '6GJ' => 'E02003451',
        '6GL' => 'E02003458',
        '6GN' => 'E02003451',
        '6GP' => 'E02003451',
        '6GQ' => 'E02003458',
        '6GR' => 'E02003355',
        '6GS' => 'E02003458',
        '6GT' => 'E02003363',
        '6GU' => 'E02003458',
        '6GW' => 'E02003451',
        '6GX' => 'E02003458',
        '6GY' => 'E02003363',
        '6GZ' => 'E02003458',
        '6HA' => 'E02003458',
        '6HB' => 'E02003363',
        '6HD' => 'E02003458',
        '6HE' => 'E02003458',
        '6HF' => 'E02003458',
        '6HG' => 'E02003458',
        '6HH' => 'E02003458',
        '6HJ' => 'E02003458',
        '6HL' => 'E02003458',
        '6HN' => 'E02003458',
        '6HP' => 'E02003458',
        '6HQ' => 'E02003364',
        '6HR' => 'E02003458',
        '6HS' => 'E02003458',
        '6HT' => 'E02003458',
        '6HU' => 'E02003458',
        '6HW' => 'E02003458',
        '6HX' => 'E02003458',
        '6HY' => 'E02003458',
        '6HZ' => 'E02003364',
        '6JA' => 'E02003458',
        '6JB' => 'E02003363',
        '6JD' => 'E02003363',
        '6JE' => 'E02003457',
        '6JF' => 'E02003364',
        '6JG' => 'E02003458',
        '6JH' => 'E02003363',
        '6JJ' => 'E02003458',
        '6JL' => 'E02003363',
        '6JN' => 'E02003458',
        '6JP' => 'E02003458',
        '6JQ' => 'E02003363',
        '6JR' => 'E02003458',
        '6JS' => 'E02003458',
        '6JT' => 'E02003458',
        '6JU' => 'E02003458',
        '6JW' => 'E02003458',
        '6JX' => 'E02003458',
        '6JY' => 'E02003458',
        '6JZ' => 'E02003458',
        '6LA' => 'E02003458',
        '6LB' => 'E02003458',
        '6LD' => 'E02003458',
        '6LE' => 'E02003458',
        '6LF' => 'E02003458',
        '6LG' => 'E02003458',
        '6LH' => 'E02003458',
        '6LJ' => 'E02003458',
        '6LL' => 'E02003458',
        '6LN' => 'E02003458',
        '6LP' => 'E02003458',
        '6LQ' => 'E02003458',
        '6LR' => 'E02003458',
        '6LS' => 'E02003363',
        '6LT' => 'E02003364',
        '6LU' => 'E02003458',
        '6LW' => 'E02003364',
        '6LX' => 'E02003364',
        '6LY' => 'E02003364',
        '6LZ' => 'E02003364',
        '6NA' => 'E02003363',
        '6NB' => 'E02003364',
        '6ND' => 'E02003363',
        '6NE' => 'E02003363',
        '6NF' => 'E02003458',
        '6NG' => 'E02003458',
        '6NH' => 'E02003458',
        '6NJ' => 'E02003458',
        '6NL' => 'E02003458',
        '6NN' => 'E02003458',
        '6NP' => 'E02003458',
        '6NQ' => 'E02003458',
        '6NR' => 'E02003458',
        '6NS' => 'E02003363',
        '6NT' => 'E02003363',
        '6NU' => 'E02003363',
        '6NW' => 'E02003451',
        '6NX' => 'E02003363',
        '6NY' => 'E02003363',
        '6NZ' => 'E02003363',
        '6PA' => 'E02003363',
        '6PB' => 'E02003458',
        '6PD' => 'E02003363',
        '6PE' => 'E02003458',
        '6PF' => 'E02003364',
        '6PG' => 'E02003458',
        '6PH' => 'E02003458',
        '6PJ' => 'E02003458',
        '6PL' => 'E02003458',
        '6PN' => 'E02003458',
        '6PP' => 'E02003458',
        '6PQ' => 'E02003458',
        '6PR' => 'E02003458',
        '6PS' => 'E02003458',
        '6PT' => 'E02003458',
        '6PU' => 'E02003458',
        '6PW' => 'E02003458',
        '6PX' => 'E02003364',
        '6PY' => 'E02003363',
        '6QB' => 'E02003364',
        '6QD' => 'E02003458',
        '6QE' => 'E02003458',
        '6QF' => 'E02003458',
        '6QG' => 'E02003458',
        '6QH' => 'E02003458',
        '6QJ' => 'E02003458',
        '6QL' => 'E02003458',
        '6QN' => 'E02003458',
        '6QP' => 'E02003458',
        '6QR' => 'E02003458',
        '6QS' => 'E02003458',
        '6QT' => 'E02003458',
        '6QU' => 'E02003458',
        '6QW' => 'E02003364',
        '6QX' => 'E02003458',
        '6QY' => 'E02003458',
        '6QZ' => 'E02003458',
        '6RD' => 'E02003363',
        '6RE' => 'E02003458',
        '6RF' => 'E02003458',
        '6RG' => 'E02003458',
        '6RH' => 'E02003458',
        '6RJ' => 'E02003458',
        '6RL' => 'E02003458',
        '6RN' => 'E02003458',
        '6RP' => 'E02003458',
        '6RQ' => 'E02003363',
        '6RR' => 'E02003458',
        '6RS' => 'E02003458',
        '6RT' => 'E02003458',
        '6RU' => 'E02003458',
        '6RW' => 'E02003458',
        '6RX' => 'E02003458',
        '6RY' => 'E02003458',
        '6RZ' => 'E02003458',
        '6SA' => 'E02003458',
        '6SB' => 'E02003458',
        '6SD' => 'E02003458',
        '6SE' => 'E02003458',
        '6SG' => 'E02003458',
        '6SJ' => 'E02003363',
        '6SL' => 'E02003363',
        '6SQ' => 'E02003458',
        '6SR' => 'E02003364',
        '6SS' => 'E02003458',
        '6ST' => 'E02003363',
        '6SU' => 'E02003364',
        '6SX' => 'E02003363',
        '6TA' => 'E02003458',
        '6TB' => 'E02003458',
        '6TD' => 'E02003458',
        '6TE' => 'E02003458',
        '6TF' => 'E02003458',
        '6TG' => 'E02003458',
        '6TJ' => 'E02003458',
        '6TL' => 'E02003458',
        '6TN' => 'E02003458',
        '6TP' => 'E02003458',
        '6TQ' => 'E02003458',
        '6TR' => 'E02003458',
        '6TS' => 'E02003458',
        '6TU' => 'E02003458',
        '6TW' => 'E02003458',
        '6TX' => 'E02003458',
        '6TY' => 'E02003458',
        '6TZ' => 'E02003458',
        '6UA' => 'E02003364',
        '6UB' => 'E02003364',
        '6UD' => 'E02003364',
        '6UE' => 'E02003458',
        '6UG' => 'E02003364',
        '6UH' => 'E02003364',
        '6UL' => 'E02003458',
        '6UP' => 'E02003458',
        '6UR' => 'E02003458',
        '6US' => 'E02003458',
        '6UT' => 'E02003451',
        '6UX' => 'E02003458',
        '6UY' => 'E02003458',
        '6UZ' => 'E02003458',
        '6WA' => 'E02003458',
        '6WB' => 'E02003458',
        '6WD' => 'E02003355',
        '6WJ' => 'E02003458',
        '6WX' => 'E02003451',
        '6WY' => 'E02003451',
        '6WZ' => 'E02003451',
        '6XA' => 'E02003364',
        '6XB' => 'E02003364',
        '6XD' => 'E02003364',
        '6XE' => 'E02003364',
        '6XJ' => 'E02003451',
        '6XN' => 'E02003451',
        '6XQ' => 'E02003451',
        '6XR' => 'E02003451',
        '6XW' => 'E02003451',
        '6XY' => 'E02003355',
        '6XZ' => 'E02003458',
        '6YA' => 'E02003458',
        '6YB' => 'E02003458',
        '6YD' => 'E02003451',
        '6YE' => 'E02003451',
        '6YF' => 'E02003458',
        '6YG' => 'E02003451',
        '6YH' => 'E02003451',
        '6YJ' => 'E02003451',
        '6YL' => 'E02003364',
        '6YN' => 'E02003458',
        '6YP' => 'E02003355',
        '6YQ' => 'E02003458',
        '6YR' => 'E02003451',
        '6YS' => 'E02003364',
        '6YT' => 'E02003451',
        '6YU' => 'E02003451',
        '6YW' => 'E02003458',
        '6YX' => 'E02003451',
        '6YY' => 'E02003451',
        '6YZ' => 'E02003451',
        '6ZE' => 'E02003451',
        '6ZG' => 'E02003451',
        '6ZH' => 'E02003451',
        '6ZJ' => 'E02003451',
        '6ZL' => 'E02003451',
        '6ZN' => 'E02003451',
        '6ZP' => 'E02003451',
        '6ZQ' => 'E02003355',
        '6ZR' => 'E02003451',
        '6ZT' => 'E02003451',
        '6ZW' => 'E02003451',
        '7AA' => 'E02003364',
        '7AB' => 'E02003364',
        '7AD' => 'E02003364',
        '7AE' => 'E02003363',
        '7AF' => 'E02003363',
        '7AG' => 'E02003363',
        '7AH' => 'E02003363',
        '7AJ' => 'E02003363',
        '7AL' => 'E02003363',
        '7AN' => 'E02003363',
        '7AP' => 'E02003363',
        '7AQ' => 'E02003363',
        '7AR' => 'E02003355',
        '7AS' => 'E02003363',
        '7AT' => 'E02003363',
        '7AU' => 'E02003364',
        '7AW' => 'E02003363',
        '7AX' => 'E02003363',
        '7AY' => 'E02003363',
        '7AZ' => 'E02003364',
        '7BA' => 'E02003363',
        '7BB' => 'E02003364',
        '7BD' => 'E02003364',
        '7BE' => 'E02003363',
        '7BF' => 'E02003363',
        '7BG' => 'E02003364',
        '7BH' => 'E02003363',
        '7BJ' => 'E02003364',
        '7BL' => 'E02003363',
        '7BN' => 'E02003363',
        '7BP' => 'E02003363',
        '7BQ' => 'E02003363',
        '7BS' => 'E02003451',
        '7BT' => 'E02003363',
        '7BU' => 'E02003363',
        '7BW' => 'E02003363',
        '7BX' => 'E02003363',
        '7BY' => 'E02003364',
        '7BZ' => 'E02003364',
        '7DA' => 'E02003364',
        '7DB' => 'E02003364',
        '7DD' => 'E02003364',
        '7DE' => 'E02003364',
        '7DF' => 'E02003364',
        '7DG' => 'E02003364',
        '7DH' => 'E02003364',
        '7DJ' => 'E02003364',
        '7DL' => 'E02003364',
        '7DN' => 'E02003364',
        '7DP' => 'E02003364',
        '7DQ' => 'E02003364',
        '7DR' => 'E02003364',
        '7DS' => 'E02003364',
        '7DT' => 'E02003364',
        '7DU' => 'E02003364',
        '7DW' => 'E02003364',
        '7DX' => 'E02003364',
        '7DY' => 'E02003364',
        '7DZ' => 'E02003363',
        '7EA' => 'E02003363',
        '7EB' => 'E02003363',
        '7ED' => 'E02003364',
        '7EE' => 'E02003363',
        '7EF' => 'E02003363',
        '7EG' => 'E02003364',
        '7EH' => 'E02003364',
        '7EJ' => 'E02003364',
        '7EL' => 'E02003364',
        '7EN' => 'E02003364',
        '7EP' => 'E02003363',
        '7EQ' => 'E02003363',
        '7ER' => 'E02003363',
        '7ES' => 'E02003363',
        '7ET' => 'E02003364',
        '7EU' => 'E02003364',
        '7EW' => 'E02003363',
        '7EX' => 'E02003364',
        '7EY' => 'E02003364',
        '7EZ' => 'E02003363',
        '7FA' => 'E02003364',
        '7FB' => 'E02003363',
        '7FD' => 'E02003363',
        '7FE' => 'E02003363',
        '7FF' => 'E02003363',
        '7FG' => 'E02003363',
        '7FH' => 'E02003363',
        '7FJ' => 'E02003363',
        '7FL' => 'E02003363',
        '7FN' => 'E02003364',
        '7GT' => 'E02003364',
        '7GZ' => 'E02003363',
        '7HA' => 'E02003364',
        '7HB' => 'E02003364',
        '7HD' => 'E02003364',
        '7HE' => 'E02003364',
        '7HF' => 'E02003363',
        '7HG' => 'E02003364',
        '7HH' => 'E02003363',
        '7HJ' => 'E02003364',
        '7HL' => 'E02003364',
        '7HN' => 'E02003363',
        '7HP' => 'E02003364',
        '7HQ' => 'E02003355',
        '7HR' => 'E02003363',
        '7HS' => 'E02003363',
        '7HU' => 'E02003363',
        '7HW' => 'E02003363',
        '7HX' => 'E02003451',
        '7HY' => 'E02003363',
        '7HZ' => 'E02003363',
        '7JD' => 'E02003363',
        '7JE' => 'E02003363',
        '7JF' => 'E02003363',
        '7JG' => 'E02003363',
        '7JJ' => 'E02003363',
        '7JL' => 'E02003363',
        '7JN' => 'E02003363',
        '7JP' => 'E02003363',
        '7JQ' => 'E02003363',
        '7JR' => 'E02003363',
        '7JT' => 'E02003363',
        '7JU' => 'E02003363',
        '7JX' => 'E02003363',
        '7JY' => 'E02003363',
        '7JZ' => 'E02003363',
        '7LA' => 'E02003363',
        '7LB' => 'E02003363',
        '7LD' => 'E02003363',
        '7LE' => 'E02003363',
        '7LF' => 'E02003363',
        '7LG' => 'E02003363',
        '7LH' => 'E02003363',
        '7LJ' => 'E02003363',
        '7LL' => 'E02003363',
        '7LP' => 'E02003363',
        '7LR' => 'E02003363',
        '7LS' => 'E02003363',
        '7LT' => 'E02003363',
        '7LW' => 'E02003363',
        '7LX' => 'E02003363',
        '7LZ' => 'E02003363',
        '7NA' => 'E02003363',
        '7ND' => 'E02003363',
        '7NE' => 'E02003363',
        '7NF' => 'E02003363',
        '7NG' => 'E02003363',
        '7NH' => 'E02003363',
        '7NJ' => 'E02003363',
        '7NL' => 'E02003363',
        '7NN' => 'E02003363',
        '7NP' => 'E02003363',
        '7NQ' => 'E02003363',
        '7NR' => 'E02003363',
        '7NT' => 'E02003363',
        '7NU' => 'E02003363',
        '7NW' => 'E02003363',
        '7PA' => 'E02003363',
        '7PB' => 'E02003363',
        '7PD' => 'E02003363',
        '7PE' => 'E02003363',
        '7PH' => 'E02003363',
        '7PN' => 'E02003363',
        '7PP' => 'E02003365',
        '7PR' => 'E02003363',
        '7PS' => 'E02003365',
        '7PT' => 'E02003363',
        '7PU' => 'E02003363',
        '7PW' => 'E02003363',
        '7QA' => 'E02003363',
        '7QB' => 'E02003363',
        '7QD' => 'E02003363',
        '7QE' => 'E02003363',
        '7QF' => 'E02003363',
        '7QG' => 'E02003363',
        '7QH' => 'E02003363',
        '7QJ' => 'E02003363',
        '7QL' => 'E02003363',
        '7QN' => 'E02003363',
        '7QP' => 'E02003363',
        '7QQ' => 'E02003363',
        '7QR' => 'E02003363',
        '7QS' => 'E02003363',
        '7QT' => 'E02003363',
        '7QU' => 'E02003363',
        '7QW' => 'E02003363',
        '7UQ' => 'E02003451',
        '7WN' => 'E02003451',
        '7WX' => 'E02003363',
        '7WZ' => 'E02003451',
        '7XG' => 'E02003451',
        '7XH' => 'E02003355',
        '7XJ' => 'E02003363',
        '7XL' => 'E02003451',
        '7XN' => 'E02003363',
        '7XP' => 'E02003363',
        '7XR' => 'E02003363',
        '7XS' => 'E02003451',
        '7XT' => 'E02003363',
        '7XU' => 'E02003363',
        '7XW' => 'E02003451',
        '7XX' => 'E02003363',
        '7XY' => 'E02003451',
        '7XZ' => 'E02003451',
        '7YA' => 'E02003355',
        '7YB' => 'E02003363',
        '7YD' => 'E02003451',
        '7YE' => 'E02003363',
        '7YF' => 'E02003363',
        '7YG' => 'E02003451',
        '7YH' => 'E02003363',
        '7YJ' => 'E02003363',
        '7YL' => 'E02003451',
        '7YN' => 'E02003363',
        '7YP' => 'E02003363',
        '7YQ' => 'E02003363',
        '7YR' => 'E02003451',
        '7YS' => 'E02003363',
        '7YT' => 'E02003363',
        '7YU' => 'E02003363',
        '7YW' => 'E02003363',
        '7YX' => 'E02003451',
        '7YZ' => 'E02003363',
        '7ZB' => 'E02003451',
        '7ZJ' => 'E02003363',
        '7ZQ' => 'E02003451',
        '7ZX' => 'E02003451',
        '9AA' => 'E02003451',
        '9AB' => 'E02003451',
        '9AD' => 'E02003451',
        '9AF' => 'E02003355',
        '9AG' => 'E02003451',
        '9AH' => 'E02003355',
        '9AJ' => 'E02003451',
        '9AL' => 'E02003451',
        '9AN' => 'E02003355',
        '9AP' => 'E02003451',
        '9AQ' => 'E02003355',
        '9AR' => 'E02003451',
        '9AS' => 'E02003451',
        '9AT' => 'E02003451',
        '9AU' => 'E02003451',
        '9AW' => 'E02003451',
        '9AX' => 'E02003451',
        '9AY' => 'E02003451',
        '9AZ' => 'E02003451',
        '9BA' => 'E02003451',
        '9BB' => 'E02003451',
        '9BD' => 'E02003451',
        '9BE' => 'E02003451',
        '9BF' => 'E02003451',
        '9BH' => 'E02003451',
        '9DF' => 'E02003451',
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
