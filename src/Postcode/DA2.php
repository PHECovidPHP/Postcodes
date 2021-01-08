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
final class DA2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005035',
        '6AB' => 'E02005032',
        '6AD' => 'E02005032',
        '6AE' => 'E02005032',
        '6AF' => 'E02005032',
        '6AG' => 'E02005032',
        '6AH' => 'E02005032',
        '6AJ' => 'E02005032',
        '6AL' => 'E02005032',
        '6AN' => 'E02005032',
        '6AP' => 'E02005032',
        '6AQ' => 'E02005032',
        '6AR' => 'E02005032',
        '6AS' => 'E02005032',
        '6AT' => 'E02005030',
        '6AU' => 'E02005033',
        '6AW' => 'E02005033',
        '6AX' => 'E02005032',
        '6AY' => 'E02005032',
        '6AZ' => 'E02005032',
        '6BA' => 'E02005033',
        '6BB' => 'E02005033',
        '6BD' => 'E02005033',
        '6BE' => 'E02005033',
        '6BF' => 'E02005033',
        '6BG' => 'E02005033',
        '6BH' => 'E02005033',
        '6BJ' => 'E02005033',
        '6BL' => 'E02005033',
        '6BN' => 'E02005033',
        '6BP' => 'E02005033',
        '6BQ' => 'E02005033',
        '6BS' => 'E02005033',
        '6BT' => 'E02005033',
        '6BU' => 'E02005033',
        '6BW' => 'E02005033',
        '6BX' => 'E02005033',
        '6BY' => 'E02005033',
        '6BZ' => 'E02005033',
        '6DA' => 'E02005032',
        '6DB' => 'E02005032',
        '6DD' => 'E02005032',
        '6DE' => 'E02005032',
        '6DF' => 'E02005032',
        '6DG' => 'E02005032',
        '6DH' => 'E02005032',
        '6DJ' => 'E02005032',
        '6DL' => 'E02005032',
        '6DN' => 'E02005032',
        '6DP' => 'E02005032',
        '6DQ' => 'E02005032',
        '6DR' => 'E02005030',
        '6DS' => 'E02005033',
        '6DT' => 'E02005033',
        '6DU' => 'E02005033',
        '6DW' => 'E02005032',
        '6DX' => 'E02005035',
        '6DY' => 'E02005035',
        '6DZ' => 'E02005035',
        '6EA' => 'E02005035',
        '6EB' => 'E02005035',
        '6ED' => 'E02005035',
        '6EE' => 'E02005035',
        '6EF' => 'E02005035',
        '6EG' => 'E02005035',
        '6EH' => 'E02005035',
        '6EJ' => 'E02005035',
        '6EL' => 'E02005035',
        '6EN' => 'E02005033',
        '6EP' => 'E02005035',
        '6EQ' => 'E02005035',
        '6ER' => 'E02005033',
        '6ES' => 'E02005033',
        '6ET' => 'E02005033',
        '6EU' => 'E02005033',
        '6EW' => 'E02005033',
        '6EX' => 'E02005033',
        '6EY' => 'E02005033',
        '6EZ' => 'E02005033',
        '6FA' => 'E02005032',
        '6FB' => 'E02005033',
        '6FD' => 'E02005033',
        '6FE' => 'E02005033',
        '6FF' => 'E02005033',
        '6FG' => 'E02005033',
        '6FH' => 'E02005033',
        '6FJ' => 'E02005033',
        '6FL' => 'E02005033',
        '6FN' => 'E02005033',
        '6FP' => 'E02005035',
        '6FQ' => 'E02005032',
        '6FR' => 'E02005033',
        '6FS' => 'E02005033',
        '6FT' => 'E02005032',
        '6FU' => 'E02005033',
        '6FW' => 'E02005032',
        '6FX' => 'E02005032',
        '6GA' => 'E02005033',
        '6GB' => 'E02005035',
        '6GD' => 'E02005035',
        '6GE' => 'E02005035',
        '6GW' => 'E02005035',
        '6GY' => 'E02005035',
        '6HA' => 'E02005033',
        '6HB' => 'E02005033',
        '6HD' => 'E02005033',
        '6HE' => 'E02005033',
        '6HF' => 'E02005033',
        '6HG' => 'E02005033',
        '6HH' => 'E02005035',
        '6HJ' => 'E02005035',
        '6HL' => 'E02005033',
        '6HN' => 'E02005033',
        '6HP' => 'E02005033',
        '6HQ' => 'E02005033',
        '6HR' => 'E02005033',
        '6HS' => 'E02005035',
        '6HT' => 'E02005035',
        '6HU' => 'E02005035',
        '6HX' => 'E02005035',
        '6HY' => 'E02005035',
        '6HZ' => 'E02005035',
        '6JA' => 'E02005035',
        '6JB' => 'E02005035',
        '6JD' => 'E02005035',
        '6JE' => 'E02005035',
        '6JF' => 'E02005035',
        '6JG' => 'E02005035',
        '6JH' => 'E02005035',
        '6JJ' => 'E02005035',
        '6JL' => 'E02005035',
        '6JN' => 'E02005035',
        '6JP' => 'E02005035',
        '6JQ' => 'E02005035',
        '6JR' => 'E02005035',
        '6JS' => 'E02005035',
        '6JT' => 'E02005035',
        '6JU' => 'E02005035',
        '6JW' => 'E02005035',
        '6JX' => 'E02005035',
        '6JY' => 'E02005035',
        '6JZ' => 'E02005035',
        '6LA' => 'E02005035',
        '6LB' => 'E02005035',
        '6LD' => 'E02005035',
        '6LE' => 'E02005035',
        '6LF' => 'E02005035',
        '6LG' => 'E02005035',
        '6LH' => 'E02005035',
        '6LJ' => 'E02005035',
        '6LL' => 'E02005035',
        '6LN' => 'E02005035',
        '6LP' => 'E02005035',
        '6LQ' => 'E02005035',
        '6LR' => 'E02005035',
        '6LS' => 'E02005035',
        '6LT' => 'E02005035',
        '6LU' => 'E02005035',
        '6LW' => 'E02005035',
        '6LX' => 'E02005035',
        '6LY' => 'E02005035',
        '6LZ' => 'E02005035',
        '6NA' => 'E02005035',
        '6NB' => 'E02005035',
        '6ND' => 'E02005035',
        '6NE' => 'E02005035',
        '6NF' => 'E02005035',
        '6NG' => 'E02005035',
        '6NH' => 'E02005035',
        '6NJ' => 'E02005035',
        '6NL' => 'E02005035',
        '6NN' => 'E02005035',
        '6NP' => 'E02005035',
        '6NQ' => 'E02005035',
        '6NR' => 'E02005035',
        '6NS' => 'E02005035',
        '6NT' => 'E02005035',
        '6NU' => 'E02005030',
        '6NW' => 'E02005033',
        '6NX' => 'E02005033',
        '6PA' => 'E02005032',
        '6PB' => 'E02005032',
        '6PD' => 'E02005033',
        '6PE' => 'E02005032',
        '6PF' => 'E02005032',
        '6PG' => 'E02005032',
        '6PH' => 'E02005032',
        '6PJ' => 'E02005032',
        '6PL' => 'E02005032',
        '6PN' => 'E02005032',
        '6PP' => 'E02005032',
        '6PQ' => 'E02005033',
        '6PR' => 'E02005032',
        '6PS' => 'E02005035',
        '6PT' => 'E02005033',
        '6PU' => 'E02005035',
        '6PW' => 'E02005032',
        '6PX' => 'E02005035',
        '6PY' => 'E02005032',
        '6PZ' => 'E02005033',
        '6QA' => 'E02005033',
        '6QB' => 'E02005033',
        '6QD' => 'E02005033',
        '6QE' => 'E02005033',
        '6QF' => 'E02005033',
        '6QG' => 'E02005033',
        '6QH' => 'E02005033',
        '6QJ' => 'E02005033',
        '6QL' => 'E02005033',
        '6QN' => 'E02005033',
        '6QP' => 'E02005033',
        '6QQ' => 'E02005033',
        '6QR' => 'E02005033',
        '6QS' => 'E02005033',
        '6QT' => 'E02005033',
        '6QU' => 'E02005030',
        '6QW' => 'E02005030',
        '6QX' => 'E02005033',
        '6QY' => 'E02005033',
        '6QZ' => 'E02005033',
        '6RA' => 'E02005032',
        '6RB' => 'E02005032',
        '6RD' => 'E02005032',
        '6RE' => 'E02005032',
        '6RF' => 'E02005032',
        '6RG' => 'E02005032',
        '6RH' => 'E02005032',
        '6RJ' => 'E02005032',
        '6RL' => 'E02005032',
        '6RN' => 'E02005032',
        '6RP' => 'E02005032',
        '6RQ' => 'E02005032',
        '6RR' => 'E02005032',
        '6RS' => 'E02005032',
        '6RT' => 'E02005032',
        '6RU' => 'E02005032',
        '6RW' => 'E02005032',
        '6RX' => 'E02005032',
        '6RY' => 'E02005032',
        '6RZ' => 'E02005032',
        '6SA' => 'E02005032',
        '6SB' => 'E02005033',
        '6SD' => 'E02005032',
        '6SE' => 'E02005032',
        '6SF' => 'E02005032',
        '6SG' => 'E02005032',
        '6SH' => 'E02005032',
        '6SJ' => 'E02005032',
        '6SL' => 'E02005033',
        '6SN' => 'E02005033',
        '6TA' => 'E02005030',
        '6TB' => 'E02005033',
        '6TD' => 'E02005033',
        '6TE' => 'E02005030',
        '6UA' => 'E02005030',
        '6UB' => 'E02005033',
        '6UP' => 'E02005030',
        '6WA' => 'E02005030',
        '6WB' => 'E02005030',
        '6WE' => 'E02005030',
        '6WH' => 'E02005030',
        '6WX' => 'E02005030',
        '6WY' => 'E02005030',
        '6WZ' => 'E02005030',
        '6XQ' => 'E02005030',
        '6YF' => 'E02005030',
        '6YQ' => 'E02005030',
        '6YR' => 'E02005030',
        '6YT' => 'E02005030',
        '6ZD' => 'E02005030',
        '6ZE' => 'E02005030',
        '6ZF' => 'E02005032',
        '6ZG' => 'E02005030',
        '6ZH' => 'E02005032',
        '6ZJ' => 'E02005032',
        '6ZL' => 'E02005033',
        '6ZN' => 'E02005030',
        '6ZP' => 'E02005030',
        '6ZQ' => 'E02005033',
        '6ZR' => 'E02005033',
        '6ZS' => 'E02005033',
        '6ZT' => 'E02005033',
        '6ZU' => 'E02005033',
        '6ZW' => 'E02005033',
        '6ZX' => 'E02005033',
        '6ZY' => 'E02005030',
        '6ZZ' => 'E02005030',
        '7AA' => 'E02005038',
        '7AB' => 'E02005038',
        '7AD' => 'E02005038',
        '7AE' => 'E02005038',
        '7AF' => 'E02005037',
        '7AG' => 'E02005038',
        '7AH' => 'E02005038',
        '7AJ' => 'E02005038',
        '7AL' => 'E02005038',
        '7AN' => 'E02005038',
        '7AP' => 'E02005038',
        '7AQ' => 'E02005038',
        '7AR' => 'E02005038',
        '7AS' => 'E02005038',
        '7AT' => 'E02005038',
        '7AU' => 'E02005038',
        '7AW' => 'E02005038',
        '7AX' => 'E02005038',
        '7AY' => 'E02005038',
        '7AZ' => 'E02005038',
        '7BA' => 'E02005038',
        '7BB' => 'E02005038',
        '7BD' => 'E02005038',
        '7BE' => 'E02005038',
        '7BF' => 'E02005039',
        '7BG' => 'E02005038',
        '7BH' => 'E02005038',
        '7BJ' => 'E02005038',
        '7BL' => 'E02005038',
        '7BN' => 'E02005038',
        '7BP' => 'E02005038',
        '7BQ' => 'E02005038',
        '7BS' => 'E02005038',
        '7BT' => 'E02005038',
        '7BU' => 'E02005038',
        '7BW' => 'E02005038',
        '7BX' => 'E02005038',
        '7BY' => 'E02005038',
        '7BZ' => 'E02005038',
        '7DA' => 'E02005038',
        '7DB' => 'E02005038',
        '7DD' => 'E02005038',
        '7DE' => 'E02005038',
        '7DF' => 'E02005038',
        '7DG' => 'E02005038',
        '7DH' => 'E02005038',
        '7DJ' => 'E02005038',
        '7DL' => 'E02005038',
        '7DN' => 'E02005038',
        '7DP' => 'E02005038',
        '7DQ' => 'E02005038',
        '7DR' => 'E02005038',
        '7DS' => 'E02005038',
        '7DT' => 'E02005038',
        '7DU' => 'E02005038',
        '7DW' => 'E02005038',
        '7DX' => 'E02005038',
        '7DY' => 'E02005038',
        '7DZ' => 'E02005038',
        '7EA' => 'E02005036',
        '7EB' => 'E02005038',
        '7ED' => 'E02005038',
        '7EE' => 'E02005038',
        '7EF' => 'E02005038',
        '7EG' => 'E02005038',
        '7EH' => 'E02005038',
        '7EJ' => 'E02005038',
        '7EL' => 'E02005038',
        '7EN' => 'E02005038',
        '7EP' => 'E02005038',
        '7EQ' => 'E02005038',
        '7ER' => 'E02005038',
        '7ES' => 'E02005038',
        '7ET' => 'E02005038',
        '7EU' => 'E02005038',
        '7EW' => 'E02005038',
        '7EX' => 'E02005038',
        '7EY' => 'E02005038',
        '7GA' => 'E02005037',
        '7GB' => 'E02005037',
        '7HA' => 'E02005037',
        '7HB' => 'E02005037',
        '7HD' => 'E02005037',
        '7HE' => 'E02005037',
        '7HF' => 'E02005037',
        '7HG' => 'E02005037',
        '7HH' => 'E02005037',
        '7HJ' => 'E02005037',
        '7HL' => 'E02005037',
        '7HN' => 'E02005037',
        '7HP' => 'E02005039',
        '7HQ' => 'E02005037',
        '7HR' => 'E02005039',
        '7HS' => 'E02005035',
        '7HT' => 'E02005039',
        '7HU' => 'E02005039',
        '7HX' => 'E02005039',
        '7HY' => 'E02005039',
        '7HZ' => 'E02005039',
        '7JA' => 'E02005039',
        '7JB' => 'E02005039',
        '7JD' => 'E02005039',
        '7JE' => 'E02005039',
        '7JF' => 'E02005039',
        '7JG' => 'E02005039',
        '7JH' => 'E02005039',
        '7JJ' => 'E02005039',
        '7JL' => 'E02005039',
        '7JN' => 'E02005039',
        '7JP' => 'E02005035',
        '7JQ' => 'E02005035',
        '7JR' => 'E02005035',
        '7JS' => 'E02005035',
        '7JT' => 'E02005039',
        '7JU' => 'E02005039',
        '7JW' => 'E02005039',
        '7JX' => 'E02005039',
        '7JY' => 'E02005039',
        '7JZ' => 'E02005039',
        '7LB' => 'E02005039',
        '7LD' => 'E02005039',
        '7LE' => 'E02005039',
        '7LF' => 'E02005039',
        '7LG' => 'E02005039',
        '7LH' => 'E02005039',
        '7LJ' => 'E02005039',
        '7LL' => 'E02005039',
        '7LN' => 'E02005039',
        '7LP' => 'E02005039',
        '7LQ' => 'E02005039',
        '7LR' => 'E02005035',
        '7LS' => 'E02005039',
        '7LT' => 'E02005039',
        '7LU' => 'E02005039',
        '7LW' => 'E02005039',
        '7LX' => 'E02005039',
        '7NA' => 'E02005037',
        '7NB' => 'E02005037',
        '7ND' => 'E02005037',
        '7NE' => 'E02005037',
        '7NF' => 'E02005037',
        '7NG' => 'E02005037',
        '7NH' => 'E02005037',
        '7NJ' => 'E02005037',
        '7NL' => 'E02005034',
        '7NN' => 'E02005037',
        '7NP' => 'E02005037',
        '7NQ' => 'E02005037',
        '7NW' => 'E02005037',
        '7NY' => 'E02005037',
        '7NZ' => 'E02005037',
        '7PA' => 'E02005037',
        '7PB' => 'E02005037',
        '7PD' => 'E02005037',
        '7PE' => 'E02005037',
        '7PF' => 'E02005037',
        '7PG' => 'E02005037',
        '7PH' => 'E02005037',
        '7PJ' => 'E02005038',
        '7PL' => 'E02005038',
        '7PP' => 'E02005038',
        '7PQ' => 'E02005037',
        '7PR' => 'E02005038',
        '7PS' => 'E02005038',
        '7PT' => 'E02005038',
        '7PU' => 'E02005038',
        '7PW' => 'E02005038',
        '7PX' => 'E02005038',
        '7PY' => 'E02005038',
        '7PZ' => 'E02005038',
        '7QA' => 'E02005038',
        '7QB' => 'E02005087',
        '7QD' => 'E02005087',
        '7QE' => 'E02005087',
        '7QF' => 'E02005037',
        '7QG' => 'E02005038',
        '7QH' => 'E02005038',
        '7QJ' => 'E02005038',
        '7QL' => 'E02005038',
        '7QP' => 'E02005039',
        '7QQ' => 'E02005038',
        '7QR' => 'E02005039',
        '7QS' => 'E02005039',
        '7QT' => 'E02005039',
        '7QX' => 'E02005038',
        '7QY' => 'E02005039',
        '7QZ' => 'E02005039',
        '7RA' => 'E02005038',
        '7RB' => 'E02005038',
        '7RD' => 'E02005038',
        '7RE' => 'E02005038',
        '7RF' => 'E02005038',
        '7RG' => 'E02005038',
        '7RH' => 'E02005038',
        '7RJ' => 'E02005038',
        '7RL' => 'E02005038',
        '7RN' => 'E02005038',
        '7RP' => 'E02005038',
        '7RQ' => 'E02005038',
        '7RR' => 'E02005038',
        '7RS' => 'E02005038',
        '7RT' => 'E02005038',
        '7RU' => 'E02005038',
        '7RW' => 'E02005038',
        '7RX' => 'E02005038',
        '7RY' => 'E02005038',
        '7RZ' => 'E02005038',
        '7SA' => 'E02005038',
        '7SB' => 'E02005038',
        '7SD' => 'E02005038',
        '7SE' => 'E02005038',
        '7SF' => 'E02005038',
        '7SG' => 'E02005038',
        '7SH' => 'E02005038',
        '7SJ' => 'E02005038',
        '7SL' => 'E02005038',
        '7SN' => 'E02005038',
        '7SP' => 'E02005038',
        '7SQ' => 'E02005038',
        '7SR' => 'E02005038',
        '7SS' => 'E02005038',
        '7ST' => 'E02005038',
        '7SU' => 'E02005038',
        '7SW' => 'E02005038',
        '7SX' => 'E02005038',
        '7SY' => 'E02005038',
        '7SZ' => 'E02005038',
        '7TA' => 'E02005038',
        '7TD' => 'E02005030',
        '7TE' => 'E02005038',
        '7TF' => 'E02005038',
        '7TG' => 'E02005038',
        '7TH' => 'E02005038',
        '7TJ' => 'E02005038',
        '7TQ' => 'E02005030',
        '7UA' => 'E02005038',
        '7UB' => 'E02005038',
        '7UD' => 'E02005038',
        '7UE' => 'E02005038',
        '7UZ' => 'E02005037',
        '7WA' => 'E02005037',
        '7WB' => 'E02005037',
        '7WD' => 'E02005037',
        '7WE' => 'E02005037',
        '7WF' => 'E02005037',
        '7WG' => 'E02005037',
        '7WH' => 'E02005030',
        '7WJ' => 'E02005037',
        '7WL' => 'E02005037',
        '7WN' => 'E02005037',
        '7WP' => 'E02005037',
        '7WQ' => 'E02005037',
        '7WR' => 'E02005037',
        '7WS' => 'E02005037',
        '7WT' => 'E02005037',
        '7WU' => 'E02005030',
        '7WW' => 'E02005037',
        '7WX' => 'E02005037',
        '7WY' => 'E02005037',
        '7WZ' => 'E02005037',
        '7XA' => 'E02005037',
        '7XB' => 'E02005030',
        '7XY' => 'E02005030',
        '7XZ' => 'E02005030',
        '7YE' => 'E02005030',
        '7YZ' => 'E02005038',
        '7ZA' => 'E02005038',
        '7ZD' => 'E02005030',
        '7ZE' => 'E02005030',
        '7ZF' => 'E02005030',
        '7ZG' => 'E02005030',
        '7ZH' => 'E02005030',
        '7ZJ' => 'E02005038',
        '7ZL' => 'E02005030',
        '7ZN' => 'E02005038',
        '7ZP' => 'E02005038',
        '7ZQ' => 'E02005038',
        '7ZR' => 'E02005030',
        '7ZS' => 'E02005038',
        '7ZT' => 'E02005038',
        '7ZU' => 'E02005030',
        '7ZW' => 'E02005030',
        '7ZX' => 'E02005038',
        '7ZY' => 'E02005030',
        '7ZZ' => 'E02005030',
        '8AA' => 'E02005035',
        '8AB' => 'E02005035',
        '8AD' => 'E02005039',
        '8AE' => 'E02005039',
        '8AF' => 'E02005039',
        '8AG' => 'E02005039',
        '8AH' => 'E02005039',
        '8AJ' => 'E02005039',
        '8AL' => 'E02005039',
        '8AN' => 'E02005039',
        '8AP' => 'E02005039',
        '8AQ' => 'E02005039',
        '8AR' => 'E02005039',
        '8AS' => 'E02005039',
        '8AT' => 'E02005039',
        '8AU' => 'E02005039',
        '8AW' => 'E02005039',
        '8AX' => 'E02005039',
        '8AY' => 'E02005039',
        '8AZ' => 'E02005039',
        '8BA' => 'E02005039',
        '8BB' => 'E02005039',
        '8BD' => 'E02005039',
        '8BE' => 'E02005039',
        '8BF' => 'E02005039',
        '8BG' => 'E02005039',
        '8BH' => 'E02005039',
        '8BJ' => 'E02005039',
        '8BL' => 'E02005039',
        '8BN' => 'E02005039',
        '8BP' => 'E02005039',
        '8BQ' => 'E02005039',
        '8BS' => 'E02005039',
        '8BT' => 'E02005035',
        '8BU' => 'E02005039',
        '8BW' => 'E02005039',
        '8BX' => 'E02005039',
        '8BY' => 'E02005039',
        '8BZ' => 'E02005039',
        '8DA' => 'E02005035',
        '8DB' => 'E02005039',
        '8DD' => 'E02005039',
        '8DE' => 'E02005035',
        '8DH' => 'E02005039',
        '8DJ' => 'E02005039',
        '8DL' => 'E02005039',
        '8DN' => 'E02005039',
        '8DP' => 'E02005039',
        '8DR' => 'E02005039',
        '8DS' => 'E02005039',
        '8DT' => 'E02005039',
        '8DU' => 'E02005039',
        '8DW' => 'E02005039',
        '8DX' => 'E02005039',
        '8DY' => 'E02005039',
        '8DZ' => 'E02005039',
        '8EA' => 'E02005040',
        '8EB' => 'E02005040',
        '8ED' => 'E02005040',
        '8EE' => 'E02005035',
        '8EH' => 'E02005039',
        '8UA' => 'E02005040',
        '8WA' => 'E02005030',
        '8WB' => 'E02005039',
        '8WF' => 'E02005030',
        '8WQ' => 'E02005030',
        '8WT' => 'E02005030',
        '8ZW' => 'E02005030',
        '8ZX' => 'E02005039',
        '8ZY' => 'E02005039',
        '8ZZ' => 'E02005039',
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