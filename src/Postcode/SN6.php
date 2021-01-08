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
final class SN6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02006644',
        '6AB' => 'E02006644',
        '6AD' => 'E02006644',
        '6AE' => 'E02006644',
        '6AF' => 'E02006644',
        '6AG' => 'E02006644',
        '6AH' => 'E02006644',
        '6AJ' => 'E02006644',
        '6AL' => 'E02006644',
        '6AN' => 'E02006644',
        '6AP' => 'E02006644',
        '6AQ' => 'E02006644',
        '6AR' => 'E02006644',
        '6AS' => 'E02006644',
        '6AT' => 'E02006644',
        '6AU' => 'E02006644',
        '6AW' => 'E02006644',
        '6AX' => 'E02006644',
        '6AY' => 'E02006644',
        '6AZ' => 'E02006644',
        '6BA' => 'E02006644',
        '6BB' => 'E02006644',
        '6BD' => 'E02006644',
        '6BE' => 'E02006644',
        '6BF' => 'E02006644',
        '6BG' => 'E02006644',
        '6BH' => 'E02006644',
        '6BJ' => 'E02006644',
        '6BL' => 'E02006644',
        '6BN' => 'E02006644',
        '6BP' => 'E02006644',
        '6BQ' => 'E02006644',
        '6BS' => 'E02006644',
        '6BT' => 'E02006644',
        '6BU' => 'E02006644',
        '6BW' => 'E02006644',
        '6BX' => 'E02006644',
        '6BY' => 'E02006644',
        '6BZ' => 'E02006644',
        '6DA' => 'E02006644',
        '6DB' => 'E02006644',
        '6DD' => 'E02006644',
        '6DE' => 'E02006644',
        '6DF' => 'E02006644',
        '6DG' => 'E02006644',
        '6DH' => 'E02006644',
        '6DJ' => 'E02006644',
        '6DL' => 'E02006644',
        '6DN' => 'E02006644',
        '6DP' => 'E02006644',
        '6DQ' => 'E02006644',
        '6DR' => 'E02006644',
        '6DS' => 'E02006644',
        '6DT' => 'E02006644',
        '6DU' => 'E02006644',
        '6DW' => 'E02006644',
        '6DX' => 'E02006644',
        '6DY' => 'E02006644',
        '6DZ' => 'E02006644',
        '6EA' => 'E02006644',
        '6EB' => 'E02006644',
        '6ED' => 'E02006644',
        '6EE' => 'E02006644',
        '6EF' => 'E02006644',
        '6EG' => 'E02006644',
        '6EH' => 'E02006644',
        '6EJ' => 'E02006644',
        '6EL' => 'E02006644',
        '6EN' => 'E02006644',
        '6EP' => 'E02006644',
        '6EQ' => 'E02006644',
        '6ER' => 'E02006644',
        '6ES' => 'E02006644',
        '6ET' => 'E02006644',
        '6EU' => 'E02006644',
        '6EW' => 'E02006644',
        '6EX' => 'E02006644',
        '6EY' => 'E02006644',
        '6EZ' => 'E02006644',
        '6FA' => 'E02006644',
        '6FB' => 'E02006644',
        '6FD' => 'E02006644',
        '6FE' => 'E02006644',
        '6FF' => 'E02006644',
        '6FG' => 'E02006644',
        '6FH' => 'E02006644',
        '6FJ' => 'E02006644',
        '6FL' => 'E02006644',
        '6FP' => 'E02006644',
        '6FQ' => 'E02006644',
        '6FR' => 'E02006644',
        '6FW' => 'E02006644',
        '6GH' => 'E02006644',
        '6GP' => 'E02006644',
        '6HA' => 'E02006644',
        '6HB' => 'E02006644',
        '6HD' => 'E02006644',
        '6HE' => 'E02006644',
        '6HF' => 'E02006644',
        '6HG' => 'E02006644',
        '6HH' => 'E02006644',
        '6HJ' => 'E02006644',
        '6HL' => 'E02006644',
        '6HN' => 'E02006644',
        '6HP' => 'E02006644',
        '6HQ' => 'E02006644',
        '6HR' => 'E02006644',
        '6HS' => 'E02006644',
        '6HT' => 'E02006644',
        '6HU' => 'E02006644',
        '6HW' => 'E02006644',
        '6HX' => 'E02006644',
        '6HY' => 'E02006644',
        '6HZ' => 'E02006644',
        '6JA' => 'E02006644',
        '6JB' => 'E02006644',
        '6JD' => 'E02006644',
        '6JE' => 'E02006644',
        '6JF' => 'E02006644',
        '6JG' => 'E02006644',
        '6JH' => 'E02006646',
        '6JJ' => 'E02003219',
        '6JL' => 'E02006644',
        '6JN' => 'E02006644',
        '6JP' => 'E02006644',
        '6JQ' => 'E02006644',
        '6JR' => 'E02006644',
        '6JS' => 'E02006644',
        '6JT' => 'E02006644',
        '6JU' => 'E02006644',
        '6JW' => 'E02006644',
        '6JX' => 'E02003219',
        '6JY' => 'E02003219',
        '6JZ' => 'E02003219',
        '6LA' => 'E02003219',
        '6LB' => 'E02003219',
        '6LD' => 'E02003219',
        '6LE' => 'E02003219',
        '6LF' => 'E02003219',
        '6LG' => 'E02006644',
        '6LH' => 'E02006644',
        '6LJ' => 'E02006644',
        '6LL' => 'E02006644',
        '6LN' => 'E02004619',
        '6LP' => 'E02006644',
        '6LQ' => 'E02006644',
        '6LR' => 'E02006644',
        '6LS' => 'E02006644',
        '6LT' => 'E02006644',
        '6LU' => 'E02006644',
        '6LW' => 'E02006644',
        '6LX' => 'E02006644',
        '6LY' => 'E02006644',
        '6LZ' => 'E02006644',
        '6NA' => 'E02006644',
        '6NB' => 'E02006644',
        '6ND' => 'E02006644',
        '6NE' => 'E02006644',
        '6NF' => 'E02006644',
        '6NG' => 'E02006644',
        '6NH' => 'E02006644',
        '6NJ' => 'E02006644',
        '6NL' => 'E02006644',
        '6NN' => 'E02006644',
        '6NP' => 'E02006644',
        '6NQ' => 'E02006644',
        '6NR' => 'E02006644',
        '6NS' => 'E02006644',
        '6NT' => 'E02006644',
        '6NU' => 'E02006644',
        '6NW' => 'E02006644',
        '6NX' => 'E02006644',
        '6NY' => 'E02006644',
        '6NZ' => 'E02006644',
        '6PA' => 'E02006644',
        '6PB' => 'E02006644',
        '6PD' => 'E02006644',
        '6PE' => 'E02006644',
        '6PF' => 'E02006644',
        '6PG' => 'E02006644',
        '6PH' => 'E02006644',
        '6PJ' => 'E02006644',
        '6PL' => 'E02006644',
        '6PN' => 'E02006644',
        '6PP' => 'E02006644',
        '6PQ' => 'E02006644',
        '6PR' => 'E02006644',
        '6PS' => 'E02006644',
        '6PT' => 'E02006644',
        '6PU' => 'E02006644',
        '6PW' => 'E02006644',
        '6PX' => 'E02006644',
        '6PY' => 'E02006644',
        '6PZ' => 'E02006644',
        '6QA' => 'E02006644',
        '6QB' => 'E02006644',
        '6QD' => 'E02006644',
        '6QE' => 'E02006644',
        '6QJ' => 'E02006644',
        '6QL' => 'E02006644',
        '6QN' => 'E02006644',
        '6QP' => 'E02006644',
        '6QR' => 'E02006644',
        '6QS' => 'E02006644',
        '6QT' => 'E02006644',
        '6QU' => 'E02006644',
        '6QW' => 'E02006644',
        '6QX' => 'E02006644',
        '6QY' => 'E02006644',
        '6QZ' => 'E02006644',
        '6RA' => 'E02006644',
        '6RB' => 'E02006644',
        '6RD' => 'E02006644',
        '6RE' => 'E02006644',
        '6RF' => 'E02006644',
        '6RG' => 'E02006644',
        '6RH' => 'E02006644',
        '6RJ' => 'E02006644',
        '6RL' => 'E02006644',
        '6RN' => 'E02006644',
        '6RP' => 'E02006644',
        '6RQ' => 'E02006644',
        '6RS' => 'E02006644',
        '6RT' => 'E02006644',
        '6RU' => 'E02006644',
        '6RW' => 'E02006644',
        '6RX' => 'E02006644',
        '6SA' => 'E02006644',
        '6SB' => 'E02006644',
        '6SD' => 'E02006644',
        '6SE' => 'E02006644',
        '6SF' => 'E02006644',
        '6SG' => 'E02006644',
        '6SH' => 'E02006644',
        '6SJ' => 'E02006644',
        '6SL' => 'E02006644',
        '6SN' => 'E02006644',
        '6SQ' => 'E02006644',
        '6SY' => 'E02006644',
        '6SZ' => 'E02006644',
        '6TA' => 'E02006644',
        '6TB' => 'E02006644',
        '6TD' => 'E02006646',
        '6TE' => 'E02006644',
        '6TF' => 'E02006644',
        '6WA' => 'E02006644',
        '6WB' => 'E02006644',
        '6WD' => 'E02003225',
        '6WE' => 'E02006644',
        '6WG' => 'E02006644',
        '6WR' => 'E02003225',
        '6WS' => 'E02006644',
        '6WT' => 'E02006644',
        '6WU' => 'E02006644',
        '6WX' => 'E02006644',
        '6WZ' => 'E02006644',
        '6XN' => 'E02006644',
        '6XQ' => 'E02006644',
        '6XZ' => 'E02006644',
        '6YZ' => 'E02006646',
        '6ZA' => 'E02006646',
        '6ZB' => 'E02006644',
        '6ZN' => 'E02006644',
        '6ZW' => 'E02006644',
        '6ZX' => 'E02006644',
        '7AA' => 'E02003212',
        '7AB' => 'E02003212',
        '7AD' => 'E02003212',
        '7AE' => 'E02003212',
        '7AF' => 'E02003212',
        '7AG' => 'E02003212',
        '7AH' => 'E02003212',
        '7AJ' => 'E02003212',
        '7AL' => 'E02003212',
        '7AN' => 'E02003212',
        '7AP' => 'E02003212',
        '7AQ' => 'E02003212',
        '7AR' => 'E02003212',
        '7AS' => 'E02003212',
        '7AT' => 'E02003212',
        '7AU' => 'E02003212',
        '7AW' => 'E02003212',
        '7AX' => 'E02003212',
        '7AY' => 'E02003212',
        '7AZ' => 'E02003212',
        '7BA' => 'E02003212',
        '7BB' => 'E02003212',
        '7BD' => 'E02003212',
        '7BE' => 'E02003212',
        '7BF' => 'E02003212',
        '7BG' => 'E02003212',
        '7BH' => 'E02003212',
        '7BJ' => 'E02003212',
        '7BL' => 'E02003212',
        '7BN' => 'E02003212',
        '7BP' => 'E02003212',
        '7BQ' => 'E02003212',
        '7BS' => 'E02003212',
        '7BT' => 'E02003212',
        '7BU' => 'E02003212',
        '7BW' => 'E02003212',
        '7BX' => 'E02003212',
        '7BY' => 'E02003212',
        '7BZ' => 'E02003212',
        '7DA' => 'E02003212',
        '7DB' => 'E02003212',
        '7DD' => 'E02003212',
        '7DE' => 'E02003212',
        '7DF' => 'E02003212',
        '7DG' => 'E02003212',
        '7DH' => 'E02003212',
        '7DJ' => 'E02003212',
        '7DL' => 'E02003212',
        '7DN' => 'E02003212',
        '7DP' => 'E02003212',
        '7DQ' => 'E02003212',
        '7DR' => 'E02003212',
        '7DS' => 'E02003212',
        '7DT' => 'E02003212',
        '7DU' => 'E02003212',
        '7DW' => 'E02003212',
        '7DX' => 'E02003212',
        '7DY' => 'E02003212',
        '7DZ' => 'E02003212',
        '7EA' => 'E02003212',
        '7EB' => 'E02003212',
        '7ED' => 'E02003212',
        '7EE' => 'E02003212',
        '7EF' => 'E02003212',
        '7EG' => 'E02003212',
        '7EH' => 'E02003212',
        '7EJ' => 'E02003212',
        '7EL' => 'E02003212',
        '7EN' => 'E02003212',
        '7EP' => 'E02003212',
        '7EQ' => 'E02003212',
        '7ER' => 'E02003212',
        '7ES' => 'E02003212',
        '7ET' => 'E02003212',
        '7EU' => 'E02003212',
        '7EW' => 'E02003212',
        '7EZ' => 'E02003212',
        '7FB' => 'E02003212',
        '7FD' => 'E02003212',
        '7FE' => 'E02003212',
        '7FG' => 'E02003212',
        '7FH' => 'E02003212',
        '7GA' => 'E02003212',
        '7GP' => 'E02003212',
        '7GQ' => 'E02003212',
        '7HA' => 'E02003212',
        '7HF' => 'E02003212',
        '7HG' => 'E02003212',
        '7HH' => 'E02003212',
        '7HJ' => 'E02003212',
        '7HL' => 'E02003212',
        '7HN' => 'E02003212',
        '7HP' => 'E02003212',
        '7HQ' => 'E02003212',
        '7HR' => 'E02003212',
        '7HS' => 'E02003212',
        '7HT' => 'E02003212',
        '7HU' => 'E02003212',
        '7HW' => 'E02003212',
        '7HX' => 'E02003212',
        '7HY' => 'E02003212',
        '7HZ' => 'E02003212',
        '7JA' => 'E02003212',
        '7JB' => 'E02003212',
        '7JJ' => 'E02003212',
        '7JL' => 'E02003212',
        '7JN' => 'E02003212',
        '7JP' => 'E02003212',
        '7JQ' => 'E02003212',
        '7JR' => 'E02003212',
        '7JS' => 'E02003212',
        '7JT' => 'E02003212',
        '7JU' => 'E02003212',
        '7JW' => 'E02003212',
        '7JX' => 'E02003212',
        '7JY' => 'E02003212',
        '7JZ' => 'E02003212',
        '7LA' => 'E02003212',
        '7LB' => 'E02003212',
        '7LE' => 'E02003212',
        '7LF' => 'E02003212',
        '7LG' => 'E02003212',
        '7NA' => 'E02003212',
        '7NB' => 'E02003212',
        '7ND' => 'E02003212',
        '7NE' => 'E02003212',
        '7NF' => 'E02003212',
        '7NG' => 'E02003212',
        '7NH' => 'E02003212',
        '7NJ' => 'E02003212',
        '7NL' => 'E02003212',
        '7NN' => 'E02003212',
        '7NP' => 'E02003212',
        '7NQ' => 'E02003212',
        '7NR' => 'E02003212',
        '7NS' => 'E02003212',
        '7NT' => 'E02003212',
        '7NU' => 'E02003212',
        '7NW' => 'E02003212',
        '7NX' => 'E02003212',
        '7NY' => 'E02003212',
        '7NZ' => 'E02003212',
        '7PA' => 'E02003212',
        '7PB' => 'E02003212',
        '7PD' => 'E02003212',
        '7PE' => 'E02003212',
        '7PF' => 'E02003212',
        '7PG' => 'E02003212',
        '7PH' => 'E02003212',
        '7PJ' => 'E02003212',
        '7PP' => 'E02003212',
        '7PQ' => 'E02003212',
        '7PR' => 'E02006886',
        '7PS' => 'E02006886',
        '7PT' => 'E02006886',
        '7PU' => 'E02006886',
        '7PX' => 'E02003212',
        '7PY' => 'E02003212',
        '7PZ' => 'E02006886',
        '7QA' => 'E02003212',
        '7QB' => 'E02003212',
        '7QD' => 'E02003212',
        '7QE' => 'E02003212',
        '7QF' => 'E02003212',
        '7QG' => 'E02003212',
        '7QH' => 'E02003212',
        '7QJ' => 'E02003212',
        '7QP' => 'E02003212',
        '7QQ' => 'E02003212',
        '7QR' => 'E02003212',
        '7QS' => 'E02003212',
        '7QT' => 'E02003212',
        '7QU' => 'E02003212',
        '7QW' => 'E02003212',
        '7QX' => 'E02003212',
        '7QY' => 'E02003212',
        '7QZ' => 'E02003212',
        '7RA' => 'E02003212',
        '7RB' => 'E02003212',
        '7RD' => 'E02003212',
        '7RE' => 'E02003212',
        '7RF' => 'E02003212',
        '7RG' => 'E02003219',
        '7RJ' => 'E02003212',
        '7RL' => 'E02003212',
        '7RN' => 'E02003219',
        '7RP' => 'E02003219',
        '7RR' => 'E02003219',
        '7RS' => 'E02003219',
        '7RT' => 'E02003219',
        '7RU' => 'E02003219',
        '7RW' => 'E02003219',
        '7RX' => 'E02003219',
        '7RY' => 'E02003219',
        '7RZ' => 'E02003219',
        '7SA' => 'E02003219',
        '7SB' => 'E02003219',
        '7SD' => 'E02003219',
        '7SE' => 'E02003219',
        '7SF' => 'E02003219',
        '7SG' => 'E02003219',
        '7SH' => 'E02003212',
        '7SJ' => 'E02003212',
        '7SL' => 'E02003212',
        '7SN' => 'E02003212',
        '7SP' => 'E02003212',
        '7SQ' => 'E02003212',
        '7SR' => 'E02003212',
        '7SS' => 'E02003212',
        '7ST' => 'E02003219',
        '7SW' => 'E02003212',
        '7SX' => 'E02003219',
        '7SY' => 'E02003219',
        '7SZ' => 'E02003219',
        '7TA' => 'E02003219',
        '7TB' => 'E02003219',
        '7TD' => 'E02003219',
        '7TE' => 'E02006642',
        '7TF' => 'E02003219',
        '7TG' => 'E02003212',
        '7TJ' => 'E02003212',
        '7TL' => 'E02003212',
        '7TT' => 'E02003212',
        '7TU' => 'E02003212',
        '7TX' => 'E02006642',
        '7TY' => 'E02006642',
        '7TZ' => 'E02006642',
        '7UA' => 'E02006642',
        '7UB' => 'E02006642',
        '7UD' => 'E02003212',
        '7UE' => 'E02006642',
        '7UF' => 'E02003212',
        '7UG' => 'E02003212',
        '7UH' => 'E02003212',
        '7UJ' => 'E02003212',
        '7UL' => 'E02003212',
        '7UN' => 'E02003212',
        '7UP' => 'E02003212',
        '7UQ' => 'E02003212',
        '7UR' => 'E02003212',
        '7US' => 'E02003212',
        '7UW' => 'E02003212',
        '7UY' => 'E02003234',
        '7WA' => 'E02003234',
        '7WB' => 'E02003212',
        '7WE' => 'E02003234',
        '7WF' => 'E02003212',
        '7WG' => 'E02003212',
        '7WH' => 'E02003234',
        '7WJ' => 'E02003234',
        '7WL' => 'E02003212',
        '7WN' => 'E02003212',
        '7WP' => 'E02003234',
        '7WQ' => 'E02003212',
        '7WR' => 'E02003234',
        '7WS' => 'E02003234',
        '7WT' => 'E02003234',
        '7WU' => 'E02003212',
        '7WX' => 'E02003212',
        '7XA' => 'E02003234',
        '7XB' => 'E02006642',
        '7XJ' => 'E02003212',
        '7XN' => 'E02003212',
        '7XQ' => 'E02003234',
        '7XZ' => 'E02003212',
        '7ZA' => 'E02003212',
        '7ZZ' => 'E02006642',
        '8AA' => 'E02006886',
        '8AB' => 'E02006886',
        '8AD' => 'E02006886',
        '8AE' => 'E02006886',
        '8AF' => 'E02006886',
        '8AG' => 'E02006886',
        '8AH' => 'E02006886',
        '8AJ' => 'E02006886',
        '8AL' => 'E02006886',
        '8AN' => 'E02006886',
        '8AP' => 'E02006886',
        '8AQ' => 'E02006886',
        '8AR' => 'E02006886',
        '8AS' => 'E02006886',
        '8AT' => 'E02006886',
        '8AU' => 'E02006886',
        '8AW' => 'E02006886',
        '8AX' => 'E02006886',
        '8AY' => 'E02006886',
        '8AZ' => 'E02006886',
        '8BA' => 'E02006886',
        '8BB' => 'E02006886',
        '8BD' => 'E02006886',
        '8BE' => 'E02006886',
        '8BF' => 'E02006886',
        '8BG' => 'E02006886',
        '8BH' => 'E02006886',
        '8BJ' => 'E02006886',
        '8BL' => 'E02006886',
        '8BN' => 'E02006886',
        '8BP' => 'E02006886',
        '8BQ' => 'E02006886',
        '8BS' => 'E02003234',
        '8BU' => 'E02006886',
        '8BW' => 'E02006886',
        '8BX' => 'E02006886',
        '8BY' => 'E02006886',
        '8BZ' => 'E02006886',
        '8DA' => 'E02006886',
        '8DB' => 'E02006886',
        '8DD' => 'E02006886',
        '8DE' => 'E02006886',
        '8DF' => 'E02006886',
        '8DG' => 'E02006886',
        '8DH' => 'E02006886',
        '8DJ' => 'E02006886',
        '8DL' => 'E02006886',
        '8DN' => 'E02006886',
        '8DP' => 'E02006886',
        '8DQ' => 'E02003234',
        '8DR' => 'E02006886',
        '8DS' => 'E02006886',
        '8DT' => 'E02006886',
        '8DU' => 'E02006886',
        '8DW' => 'E02006886',
        '8DX' => 'E02006886',
        '8DY' => 'E02006886',
        '8DZ' => 'E02006886',
        '8EA' => 'E02006886',
        '8EB' => 'E02006886',
        '8ED' => 'E02006886',
        '8EE' => 'E02006886',
        '8EF' => 'E02006886',
        '8EG' => 'E02006886',
        '8EH' => 'E02006886',
        '8EJ' => 'E02006886',
        '8EL' => 'E02006886',
        '8EN' => 'E02006886',
        '8EP' => 'E02006886',
        '8EQ' => 'E02006886',
        '8ER' => 'E02006886',
        '8ES' => 'E02006886',
        '8ET' => 'E02006886',
        '8EU' => 'E02006886',
        '8EW' => 'E02006886',
        '8EX' => 'E02006886',
        '8EY' => 'E02006886',
        '8EZ' => 'E02006886',
        '8FA' => 'E02006886',
        '8FB' => 'E02006886',
        '8FD' => 'E02006886',
        '8FE' => 'E02006886',
        '8FF' => 'E02006886',
        '8FG' => 'E02006886',
        '8FH' => 'E02006886',
        '8FJ' => 'E02006886',
        '8FL' => 'E02006886',
        '8FN' => 'E02006886',
        '8FP' => 'E02006886',
        '8FQ' => 'E02006886',
        '8FR' => 'E02006886',
        '8FS' => 'E02006886',
        '8FU' => 'E02006886',
        '8FX' => 'E02006886',
        '8HA' => 'E02006886',
        '8HB' => 'E02006886',
        '8HD' => 'E02006886',
        '8HE' => 'E02006886',
        '8HF' => 'E02006886',
        '8HG' => 'E02006886',
        '8HH' => 'E02006886',
        '8HJ' => 'E02006886',
        '8HL' => 'E02006886',
        '8HN' => 'E02003234',
        '8HQ' => 'E02006886',
        '8HR' => 'E02006886',
        '8HS' => 'E02006886',
        '8HT' => 'E02006886',
        '8HU' => 'E02006886',
        '8HX' => 'E02006886',
        '8HY' => 'E02006886',
        '8HZ' => 'E02006886',
        '8JA' => 'E02006886',
        '8JB' => 'E02006886',
        '8JD' => 'E02006886',
        '8JE' => 'E02006886',
        '8JF' => 'E02006886',
        '8JG' => 'E02006886',
        '8JH' => 'E02006886',
        '8JJ' => 'E02003219',
        '8JL' => 'E02006886',
        '8JN' => 'E02006886',
        '8JP' => 'E02006886',
        '8JQ' => 'E02006886',
        '8JR' => 'E02006886',
        '8JU' => 'E02006886',
        '8JW' => 'E02006886',
        '8JX' => 'E02006886',
        '8JY' => 'E02006886',
        '8LA' => 'E02006886',
        '8LB' => 'E02006886',
        '8LD' => 'E02006886',
        '8LE' => 'E02006886',
        '8LF' => 'E02006886',
        '8LG' => 'E02006886',
        '8LH' => 'E02006886',
        '8LJ' => 'E02006886',
        '8LL' => 'E02006886',
        '8LN' => 'E02006886',
        '8LP' => 'E02006886',
        '8LQ' => 'E02006886',
        '8LR' => 'E02006886',
        '8LS' => 'E02006886',
        '8LT' => 'E02006886',
        '8LU' => 'E02006886',
        '8LW' => 'E02006886',
        '8LX' => 'E02006886',
        '8LY' => 'E02006886',
        '8LZ' => 'E02006886',
        '8NA' => 'E02006886',
        '8NB' => 'E02006886',
        '8ND' => 'E02006886',
        '8NE' => 'E02006886',
        '8NF' => 'E02006886',
        '8NG' => 'E02006886',
        '8NH' => 'E02006886',
        '8NJ' => 'E02006886',
        '8NL' => 'E02006886',
        '8NN' => 'E02006886',
        '8NP' => 'E02006886',
        '8NQ' => 'E02006886',
        '8NR' => 'E02006886',
        '8NS' => 'E02006886',
        '8NT' => 'E02006886',
        '8NU' => 'E02006886',
        '8NW' => 'E02006886',
        '8NX' => 'E02006886',
        '8NY' => 'E02006886',
        '8NZ' => 'E02003219',
        '8PA' => 'E02003219',
        '8PB' => 'E02006886',
        '8PD' => 'E02003234',
        '8PE' => 'E02003219',
        '8PF' => 'E02003219',
        '8PH' => 'E02003219',
        '8PJ' => 'E02003219',
        '8PL' => 'E02003219',
        '8PN' => 'E02003219',
        '8PP' => 'E02003219',
        '8PQ' => 'E02003219',
        '8PR' => 'E02003219',
        '8PS' => 'E02003219',
        '8PT' => 'E02003219',
        '8PU' => 'E02003219',
        '8PW' => 'E02003219',
        '8PX' => 'E02003219',
        '8PY' => 'E02003219',
        '8PZ' => 'E02003219',
        '8QA' => 'E02003219',
        '8QB' => 'E02003219',
        '8QD' => 'E02003234',
        '8QE' => 'E02003219',
        '8QU' => 'E02006886',
        '8QX' => 'E02003234',
        '8QY' => 'E02006886',
        '8QZ' => 'E02003234',
        '8RA' => 'E02003219',
        '8RB' => 'E02003219',
        '8RD' => 'E02006886',
        '8RE' => 'E02006886',
        '8RF' => 'E02006886',
        '8RG' => 'E02006886',
        '8RH' => 'E02006886',
        '8RJ' => 'E02006886',
        '8RL' => 'E02006886',
        '8RN' => 'E02006886',
        '8RP' => 'E02006886',
        '8RQ' => 'E02006886',
        '8RS' => 'E02006886',
        '8RT' => 'E02006886',
        '8RW' => 'E02006886',
        '8RZ' => 'E02003219',
        '8SA' => 'E02006886',
        '8SB' => 'E02006886',
        '8SD' => 'E02006886',
        '8SE' => 'E02006886',
        '8SF' => 'E02006886',
        '8SG' => 'E02006886',
        '8SH' => 'E02006886',
        '8SJ' => 'E02006886',
        '8SL' => 'E02006886',
        '8SN' => 'E02006886',
        '8SP' => 'E02006886',
        '8SQ' => 'E02006886',
        '8SR' => 'E02006886',
        '8SS' => 'E02006886',
        '8ST' => 'E02006886',
        '8SU' => 'E02006886',
        '8SW' => 'E02006886',
        '8SX' => 'E02006886',
        '8SY' => 'E02006886',
        '8SZ' => 'E02006886',
        '8TA' => 'E02006886',
        '8TB' => 'E02006886',
        '8TD' => 'E02006886',
        '8TE' => 'E02006886',
        '8TF' => 'E02006886',
        '8TG' => 'E02006886',
        '8TH' => 'E02006886',
        '8TJ' => 'E02006886',
        '8TL' => 'E02006886',
        '8TN' => 'E02006886',
        '8TP' => 'E02006886',
        '8TQ' => 'E02006886',
        '8TR' => 'E02006886',
        '8TS' => 'E02006886',
        '8TT' => 'E02003234',
        '8TU' => 'E02006886',
        '8TW' => 'E02006886',
        '8TX' => 'E02006886',
        '8TY' => 'E02006886',
        '8TZ' => 'E02006886',
        '8UA' => 'E02006886',
        '8UB' => 'E02006886',
        '8UD' => 'E02006886',
        '8UE' => 'E02003234',
        '8UF' => 'E02006886',
        '8UG' => 'E02003234',
        '8UH' => 'E02006886',
        '8UJ' => 'E02006886',
        '8UL' => 'E02003234',
        '8UN' => 'E02003234',
        '8UP' => 'E02006886',
        '8UQ' => 'E02006886',
        '8UR' => 'E02006886',
        '8US' => 'E02003234',
        '8UT' => 'E02003234',
        '8UU' => 'E02003234',
        '8UW' => 'E02003234',
        '8WA' => 'E02003234',
        '8WB' => 'E02003234',
        '8WD' => 'E02003234',
        '8WR' => 'E02003234',
        '8WS' => 'E02003234',
        '8WT' => 'E02003234',
        '8WU' => 'E02003234',
        '8WX' => 'E02003234',
        '8WZ' => 'E02003234',
        '8XA' => 'E02003234',
        '8XJ' => 'E02003234',
        '8XN' => 'E02003234',
        '8ZJ' => 'E02003234',
        '8ZN' => 'E02003234',
        '8ZY' => 'E02003234',
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
