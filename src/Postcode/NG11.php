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
final class NG11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005919',
        '0AB' => 'E02005919',
        '0AD' => 'E02005919',
        '0AE' => 'E02005919',
        '0AF' => 'E02005919',
        '0AG' => 'E02005919',
        '0AH' => 'E02005919',
        '0AJ' => 'E02005919',
        '0AL' => 'E02005919',
        '0AN' => 'E02005919',
        '0AQ' => 'E02002902',
        '0AS' => 'E02005919',
        '0AU' => 'E02005919',
        '0AW' => 'E02005919',
        '0AX' => 'E02005919',
        '0AY' => 'E02005919',
        '0AZ' => 'E02005919',
        '0BA' => 'E02005919',
        '0BB' => 'E02002902',
        '0BL' => 'E02005919',
        '0DA' => 'E02005919',
        '0DB' => 'E02005919',
        '0DD' => 'E02005919',
        '0DE' => 'E02005919',
        '0DF' => 'E02005919',
        '0DG' => 'E02005920',
        '0DH' => 'E02005919',
        '0DJ' => 'E02005919',
        '0DL' => 'E02005919',
        '0DN' => 'E02005919',
        '0DP' => 'E02005919',
        '0DQ' => 'E02005919',
        '0DR' => 'E02005919',
        '0EA' => 'E02005919',
        '0EB' => 'E02005919',
        '0ED' => 'E02005919',
        '0EE' => 'E02005919',
        '0EF' => 'E02005919',
        '0EG' => 'E02005919',
        '0GZ' => 'E02005919',
        '0HA' => 'E02005919',
        '0HB' => 'E02005919',
        '0HD' => 'E02005919',
        '0HE' => 'E02005919',
        '0HF' => 'E02005919',
        '0HG' => 'E02005919',
        '0HH' => 'E02005919',
        '0HJ' => 'E02005919',
        '0HL' => 'E02005919',
        '0HN' => 'E02005919',
        '0HP' => 'E02005919',
        '0HQ' => 'E02005919',
        '0HR' => 'E02005919',
        '0HS' => 'E02005919',
        '0HT' => 'E02005919',
        '0HU' => 'E02005919',
        '0HW' => 'E02005919',
        '0HX' => 'E02005919',
        '0HY' => 'E02005919',
        '0HZ' => 'E02005919',
        '0JA' => 'E02005919',
        '0JB' => 'E02005919',
        '0JD' => 'E02005919',
        '0JE' => 'E02005919',
        '0JF' => 'E02005919',
        '0JG' => 'E02002902',
        '0JJ' => 'E02005919',
        '0JL' => 'E02005919',
        '0JN' => 'E02005919',
        '0JP' => 'E02005919',
        '0JQ' => 'E02005919',
        '0JR' => 'E02005919',
        '0JS' => 'E02005919',
        '0JT' => 'E02005919',
        '0JU' => 'E02005919',
        '0JW' => 'E02005919',
        '0JX' => 'E02005919',
        '0JY' => 'E02005919',
        '0LA' => 'E02005919',
        '0LB' => 'E02005919',
        '0LD' => 'E02005919',
        '0LE' => 'E02005919',
        '0LF' => 'E02005919',
        '0LG' => 'E02005919',
        '0LH' => 'E02005919',
        '0LN' => 'E02002902',
        '0LQ' => 'E02005919',
        '0LR' => 'E02005919',
        '0PA' => 'E02002902',
        '0PT' => 'E02002902',
        '0WY' => 'E02002902',
        '0WZ' => 'E02002902',
        '0YD' => 'E02002902',
        '0YE' => 'E02002902',
        '0YQ' => 'E02002902',
        '0YU' => 'E02002902',
        '1AA' => 'E02002902',
        '1AB' => 'E02002902',
        '1AD' => 'E02002902',
        '1AE' => 'E02002902',
        '1AF' => 'E02002902',
        '1AG' => 'E02002902',
        '1AH' => 'E02002902',
        '1AJ' => 'E02002902',
        '1AL' => 'E02002902',
        '1AN' => 'E02002902',
        '1AP' => 'E02002902',
        '1AQ' => 'E02002902',
        '1AR' => 'E02002902',
        '1AS' => 'E02002902',
        '1AT' => 'E02002902',
        '1AU' => 'E02002902',
        '1AW' => 'E02002902',
        '1AX' => 'E02002902',
        '1AY' => 'E02002902',
        '1AZ' => 'E02002902',
        '1BA' => 'E02002902',
        '1BB' => 'E02002902',
        '1BE' => 'E02002902',
        '1BF' => 'E02002902',
        '1BG' => 'E02002902',
        '1BH' => 'E02002902',
        '1BJ' => 'E02002902',
        '1BL' => 'E02002902',
        '1BN' => 'E02002902',
        '1BP' => 'E02002902',
        '1BQ' => 'E02002902',
        '1BR' => 'E02002902',
        '1BS' => 'E02002902',
        '1BT' => 'E02002902',
        '1BU' => 'E02002902',
        '1BW' => 'E02002902',
        '1BX' => 'E02002902',
        '1BY' => 'E02002902',
        '1BZ' => 'E02002902',
        '1DA' => 'E02002902',
        '1DB' => 'E02002902',
        '1DD' => 'E02002902',
        '1DE' => 'E02002902',
        '1DF' => 'E02002902',
        '1DG' => 'E02002902',
        '1DH' => 'E02002902',
        '1DJ' => 'E02002902',
        '1DL' => 'E02002902',
        '1DN' => 'E02002902',
        '1DP' => 'E02002902',
        '1DQ' => 'E02002902',
        '1DR' => 'E02002902',
        '1DS' => 'E02002902',
        '1DT' => 'E02002902',
        '6AA' => 'E02005916',
        '6AB' => 'E02005916',
        '6AD' => 'E02005916',
        '6AE' => 'E02005916',
        '6AF' => 'E02005916',
        '6AG' => 'E02005916',
        '6AH' => 'E02005916',
        '6AJ' => 'E02005916',
        '6AL' => 'E02005916',
        '6AN' => 'E02005916',
        '6AP' => 'E02005916',
        '6AQ' => 'E02005916',
        '6AR' => 'E02005916',
        '6AS' => 'E02005916',
        '6AT' => 'E02005916',
        '6AU' => 'E02005916',
        '6AW' => 'E02005916',
        '6AX' => 'E02005916',
        '6AY' => 'E02005916',
        '6AZ' => 'E02005916',
        '6BA' => 'E02005916',
        '6BB' => 'E02005916',
        '6BD' => 'E02005916',
        '6BE' => 'E02005916',
        '6BF' => 'E02005916',
        '6BG' => 'E02005916',
        '6BH' => 'E02005916',
        '6BJ' => 'E02005916',
        '6BL' => 'E02005916',
        '6BN' => 'E02005916',
        '6BP' => 'E02005916',
        '6BQ' => 'E02005916',
        '6BR' => 'E02005916',
        '6BS' => 'E02005916',
        '6BT' => 'E02005916',
        '6BU' => 'E02005916',
        '6BW' => 'E02005916',
        '6BX' => 'E02005916',
        '6BY' => 'E02002902',
        '6BZ' => 'E02005916',
        '6DA' => 'E02005916',
        '6DB' => 'E02005916',
        '6DD' => 'E02005916',
        '6DE' => 'E02005916',
        '6DF' => 'E02005916',
        '6DG' => 'E02005916',
        '6DH' => 'E02005916',
        '6DJ' => 'E02005916',
        '6DL' => 'E02005916',
        '6DN' => 'E02005916',
        '6DP' => 'E02005916',
        '6DQ' => 'E02005916',
        '6DR' => 'E02005916',
        '6DS' => 'E02005916',
        '6DT' => 'E02005916',
        '6DU' => 'E02002902',
        '6DW' => 'E02005916',
        '6DX' => 'E02005916',
        '6DY' => 'E02005916',
        '6DZ' => 'E02005916',
        '6EA' => 'E02005916',
        '6EB' => 'E02005916',
        '6ED' => 'E02005916',
        '6EE' => 'E02005916',
        '6EF' => 'E02005916',
        '6EG' => 'E02005916',
        '6EH' => 'E02005916',
        '6EJ' => 'E02005916',
        '6EL' => 'E02005916',
        '6EN' => 'E02005916',
        '6EP' => 'E02005916',
        '6EQ' => 'E02005916',
        '6ER' => 'E02005916',
        '6ES' => 'E02005916',
        '6ET' => 'E02005916',
        '6EU' => 'E02005916',
        '6EW' => 'E02005916',
        '6EX' => 'E02005916',
        '6EY' => 'E02005916',
        '6EZ' => 'E02005916',
        '6FA' => 'E02005916',
        '6FB' => 'E02005916',
        '6FD' => 'E02005916',
        '6FE' => 'E02005916',
        '6FF' => 'E02005916',
        '6FG' => 'E02005912',
        '6FH' => 'E02005916',
        '6FJ' => 'E02005916',
        '6FN' => 'E02002902',
        '6FP' => 'E02005916',
        '6FQ' => 'E02005916',
        '6FR' => 'E02005916',
        '6FS' => 'E02005916',
        '6FT' => 'E02005916',
        '6FU' => 'E02005916',
        '6FW' => 'E02005916',
        '6FX' => 'E02005916',
        '6FY' => 'E02005916',
        '6FZ' => 'E02005916',
        '6GA' => 'E02005916',
        '6GB' => 'E02005916',
        '6GD' => 'E02005916',
        '6GE' => 'E02005916',
        '6GF' => 'E02005916',
        '6GG' => 'E02005916',
        '6GH' => 'E02002902',
        '6GJ' => 'E02002902',
        '6GL' => 'E02005916',
        '6GN' => 'E02002902',
        '6GP' => 'E02002902',
        '6GQ' => 'E02005916',
        '6GR' => 'E02002902',
        '6GS' => 'E02002902',
        '6GT' => 'E02005916',
        '6GU' => 'E02005916',
        '6GW' => 'E02002902',
        '6GX' => 'E02005916',
        '6GY' => 'E02005916',
        '6GZ' => 'E02005916',
        '6HA' => 'E02005916',
        '6HB' => 'E02005916',
        '6HD' => 'E02005916',
        '6HE' => 'E02005916',
        '6HF' => 'E02005916',
        '6HG' => 'E02005916',
        '6HH' => 'E02005916',
        '6HJ' => 'E02005916',
        '6HL' => 'E02005916',
        '6HN' => 'E02002902',
        '6HP' => 'E02005916',
        '6HQ' => 'E02005916',
        '6HR' => 'E02002902',
        '6HS' => 'E02005916',
        '6HT' => 'E02005916',
        '6HU' => 'E02005916',
        '6HW' => 'E02005916',
        '6HX' => 'E02005916',
        '6HY' => 'E02005916',
        '6HZ' => 'E02005916',
        '6JA' => 'E02005916',
        '6JB' => 'E02005916',
        '6JD' => 'E02005916',
        '6JE' => 'E02005916',
        '6JF' => 'E02005916',
        '6JG' => 'E02005916',
        '6JH' => 'E02005916',
        '6JJ' => 'E02005916',
        '6JL' => 'E02005916',
        '6JN' => 'E02005916',
        '6JP' => 'E02005916',
        '6JQ' => 'E02005916',
        '6JR' => 'E02005916',
        '6JS' => 'E02005916',
        '6JT' => 'E02005916',
        '6JU' => 'E02005916',
        '6JW' => 'E02005916',
        '6JX' => 'E02005916',
        '6JY' => 'E02005916',
        '6JZ' => 'E02005916',
        '6LA' => 'E02005916',
        '6LB' => 'E02005916',
        '6LD' => 'E02005916',
        '6LE' => 'E02005916',
        '6LF' => 'E02005916',
        '6LG' => 'E02005916',
        '6LH' => 'E02005916',
        '6LJ' => 'E02005916',
        '6LL' => 'E02005916',
        '6LN' => 'E02005912',
        '6LP' => 'E02005912',
        '6LQ' => 'E02005916',
        '6LR' => 'E02005916',
        '6LS' => 'E02005912',
        '6LT' => 'E02005912',
        '6LU' => 'E02005912',
        '6LW' => 'E02005916',
        '6LX' => 'E02005916',
        '6LY' => 'E02005916',
        '6LZ' => 'E02005916',
        '6NA' => 'E02005916',
        '6NB' => 'E02005916',
        '6ND' => 'E02005916',
        '6NE' => 'E02005920',
        '6NF' => 'E02005916',
        '6NG' => 'E02005916',
        '6NH' => 'E02005916',
        '6NJ' => 'E02005916',
        '6NL' => 'E02005916',
        '6NN' => 'E02005916',
        '6NP' => 'E02005916',
        '6NQ' => 'E02005916',
        '6NR' => 'E02005916',
        '6NS' => 'E02005916',
        '6NT' => 'E02005916',
        '6NU' => 'E02005916',
        '6NW' => 'E02005916',
        '6NX' => 'E02005916',
        '6NY' => 'E02005916',
        '6NZ' => 'E02005916',
        '6PA' => 'E02005920',
        '6PB' => 'E02005920',
        '6PD' => 'E02005920',
        '6PE' => 'E02005920',
        '6PF' => 'E02005920',
        '6PG' => 'E02005920',
        '6PH' => 'E02005916',
        '6PJ' => 'E02005920',
        '6PL' => 'E02005916',
        '6PN' => 'E02005920',
        '6PP' => 'E02005916',
        '6PQ' => 'E02005920',
        '6PR' => 'E02002902',
        '6PS' => 'E02005920',
        '6PT' => 'E02005916',
        '6PU' => 'E02005916',
        '6PW' => 'E02002902',
        '6PX' => 'E02002902',
        '6PY' => 'E02005916',
        '6PZ' => 'E02005916',
        '6QA' => 'E02005920',
        '6QB' => 'E02005920',
        '6QD' => 'E02005920',
        '6QE' => 'E02005920',
        '6QF' => 'E02005920',
        '6QG' => 'E02005920',
        '6QH' => 'E02005920',
        '6QJ' => 'E02005920',
        '6QL' => 'E02005920',
        '6QN' => 'E02005920',
        '6QP' => 'E02005920',
        '6QQ' => 'E02005920',
        '6QR' => 'E02005920',
        '6QS' => 'E02005920',
        '6QT' => 'E02005920',
        '6QU' => 'E02005920',
        '6QW' => 'E02005920',
        '6QX' => 'E02005920',
        '6QY' => 'E02005920',
        '6QZ' => 'E02005920',
        '6RA' => 'E02002902',
        '6RB' => 'E02002902',
        '6RD' => 'E02005920',
        '6RE' => 'E02005916',
        '6RF' => 'E02005916',
        '6RJ' => 'E02005920',
        '6WA' => 'E02002902',
        '6WB' => 'E02002902',
        '6WD' => 'E02002902',
        '6WE' => 'E02002902',
        '6WF' => 'E02002902',
        '6WH' => 'E02002902',
        '6WL' => 'E02002902',
        '6WN' => 'E02002902',
        '6WP' => 'E02002902',
        '6WQ' => 'E02002902',
        '6WT' => 'E02002902',
        '6WU' => 'E02002902',
        '6WW' => 'E02002902',
        '6WX' => 'E02002902',
        '6WY' => 'E02002902',
        '6WZ' => 'E02002902',
        '6YQ' => 'E02002902',
        '6YR' => 'E02002902',
        '6ZA' => 'E02002902',
        '6ZG' => 'E02002902',
        '6ZR' => 'E02002902',
        '6ZS' => 'E02002902',
        '6ZX' => 'E02002902',
        '6ZY' => 'E02002902',
        '6ZZ' => 'E02002902',
        '7AA' => 'E02002901',
        '7AB' => 'E02002901',
        '7AD' => 'E02005912',
        '7AE' => 'E02002901',
        '7AF' => 'E02002901',
        '7AG' => 'E02002901',
        '7AH' => 'E02002901',
        '7AJ' => 'E02002901',
        '7AL' => 'E02002901',
        '7AN' => 'E02002901',
        '7AP' => 'E02002901',
        '7AQ' => 'E02002901',
        '7AR' => 'E02002901',
        '7AS' => 'E02002901',
        '7AT' => 'E02002901',
        '7AU' => 'E02002901',
        '7AW' => 'E02002901',
        '7AX' => 'E02002901',
        '7AY' => 'E02002901',
        '7AZ' => 'E02002901',
        '7BA' => 'E02002901',
        '7BB' => 'E02002901',
        '7BD' => 'E02002901',
        '7BE' => 'E02002901',
        '7BF' => 'E02002901',
        '7BG' => 'E02002901',
        '7BH' => 'E02002901',
        '7BJ' => 'E02002901',
        '7BL' => 'E02002901',
        '7BN' => 'E02002901',
        '7BP' => 'E02002901',
        '7BQ' => 'E02002901',
        '7BR' => 'E02002901',
        '7BS' => 'E02002901',
        '7BT' => 'E02002901',
        '7BU' => 'E02002901',
        '7BW' => 'E02002901',
        '7BX' => 'E02002901',
        '7BY' => 'E02002901',
        '7BZ' => 'E02002901',
        '7DA' => 'E02002901',
        '7DB' => 'E02002901',
        '7DD' => 'E02005912',
        '7DE' => 'E02002901',
        '7DF' => 'E02002901',
        '7DG' => 'E02002901',
        '7DH' => 'E02002901',
        '7DJ' => 'E02002901',
        '7DL' => 'E02002901',
        '7DN' => 'E02002901',
        '7DP' => 'E02002901',
        '7DQ' => 'E02002901',
        '7DR' => 'E02002901',
        '7DS' => 'E02002901',
        '7DT' => 'E02002901',
        '7DU' => 'E02002901',
        '7DW' => 'E02002901',
        '7DX' => 'E02002901',
        '7DY' => 'E02002901',
        '7DZ' => 'E02002901',
        '7EA' => 'E02002901',
        '7EB' => 'E02002901',
        '7ED' => 'E02002901',
        '7EE' => 'E02002901',
        '7EF' => 'E02002901',
        '7EG' => 'E02002901',
        '7EH' => 'E02002901',
        '7EJ' => 'E02002901',
        '7EL' => 'E02002901',
        '7EN' => 'E02002901',
        '7EP' => 'E02005912',
        '7EQ' => 'E02002901',
        '7ER' => 'E02002901',
        '7ES' => 'E02002901',
        '7ET' => 'E02002901',
        '7EU' => 'E02002901',
        '7EW' => 'E02002901',
        '7EX' => 'E02002901',
        '7EY' => 'E02002901',
        '7EZ' => 'E02002901',
        '7FA' => 'E02002901',
        '7FB' => 'E02002901',
        '7FD' => 'E02002901',
        '7FE' => 'E02002901',
        '7FF' => 'E02002901',
        '7FG' => 'E02002901',
        '7FH' => 'E02002901',
        '7FJ' => 'E02002901',
        '7FL' => 'E02002901',
        '7FN' => 'E02002901',
        '7FP' => 'E02002901',
        '7FQ' => 'E02002901',
        '7FR' => 'E02002901',
        '7FS' => 'E02002901',
        '7FT' => 'E02002901',
        '7FU' => 'E02002901',
        '7FW' => 'E02002901',
        '7FX' => 'E02002901',
        '7FY' => 'E02002901',
        '7FZ' => 'E02002901',
        '7GA' => 'E02002901',
        '7GB' => 'E02002901',
        '7GD' => 'E02002901',
        '7GE' => 'E02002901',
        '7GF' => 'E02005912',
        '7GG' => 'E02002901',
        '7GH' => 'E02002901',
        '7GJ' => 'E02002901',
        '7GL' => 'E02002901',
        '7GN' => 'E02002902',
        '7GP' => 'E02002901',
        '7GQ' => 'E02002901',
        '7GR' => 'E02005880',
        '7GS' => 'E02002902',
        '7GT' => 'E02002902',
        '7GU' => 'E02002901',
        '7GW' => 'E02002902',
        '7GX' => 'E02002901',
        '7GY' => 'E02002901',
        '7GZ' => 'E02002901',
        '7HA' => 'E02002901',
        '7HB' => 'E02002901',
        '7HD' => 'E02002901',
        '7HE' => 'E02002901',
        '7HF' => 'E02002901',
        '7HG' => 'E02002901',
        '7HH' => 'E02002901',
        '7HJ' => 'E02002901',
        '7HL' => 'E02005912',
        '7HQ' => 'E02005912',
        '7WA' => 'E02005912',
        '7WB' => 'E02002902',
        '7WD' => 'E02002902',
        '7WF' => 'E02002902',
        '7WG' => 'E02005912',
        '7ZR' => 'E02005912',
        '8AA' => 'E02002902',
        '8AB' => 'E02002902',
        '8AD' => 'E02002902',
        '8AE' => 'E02002902',
        '8AF' => 'E02002902',
        '8AG' => 'E02002902',
        '8AH' => 'E02002902',
        '8AJ' => 'E02002902',
        '8AL' => 'E02002902',
        '8AN' => 'E02002902',
        '8AP' => 'E02002902',
        '8AQ' => 'E02002902',
        '8AR' => 'E02002901',
        '8AS' => 'E02002902',
        '8AT' => 'E02002902',
        '8AU' => 'E02002902',
        '8AW' => 'E02002902',
        '8AX' => 'E02002902',
        '8AY' => 'E02002902',
        '8AZ' => 'E02002902',
        '8BA' => 'E02002902',
        '8BB' => 'E02002902',
        '8BD' => 'E02002902',
        '8BE' => 'E02002902',
        '8BF' => 'E02002903',
        '8BG' => 'E02002902',
        '8BH' => 'E02002903',
        '8BJ' => 'E02002902',
        '8BL' => 'E02002902',
        '8BN' => 'E02002902',
        '8BP' => 'E02002902',
        '8BQ' => 'E02002902',
        '8BS' => 'E02002902',
        '8BT' => 'E02002902',
        '8BU' => 'E02002902',
        '8BW' => 'E02002902',
        '8BX' => 'E02002902',
        '8BY' => 'E02002902',
        '8BZ' => 'E02002903',
        '8DA' => 'E02002903',
        '8DB' => 'E02002903',
        '8DD' => 'E02002902',
        '8DE' => 'E02002902',
        '8DF' => 'E02002902',
        '8DG' => 'E02002902',
        '8DH' => 'E02002902',
        '8DJ' => 'E02002902',
        '8DL' => 'E02002902',
        '8DN' => 'E02002902',
        '8DP' => 'E02002902',
        '8DQ' => 'E02002902',
        '8DR' => 'E02002902',
        '8DS' => 'E02002902',
        '8DT' => 'E02002902',
        '8DU' => 'E02002902',
        '8DW' => 'E02002902',
        '8DX' => 'E02002902',
        '8DY' => 'E02002902',
        '8DZ' => 'E02002902',
        '8EA' => 'E02002902',
        '8EB' => 'E02002902',
        '8ED' => 'E02002902',
        '8EE' => 'E02002902',
        '8EF' => 'E02002902',
        '8EG' => 'E02002902',
        '8EH' => 'E02002902',
        '8EJ' => 'E02002902',
        '8EL' => 'E02002902',
        '8EN' => 'E02002902',
        '8EP' => 'E02002902',
        '8EQ' => 'E02002902',
        '8ER' => 'E02002902',
        '8ES' => 'E02002903',
        '8ET' => 'E02002902',
        '8EW' => 'E02002902',
        '8EX' => 'E02002901',
        '8EY' => 'E02002901',
        '8EZ' => 'E02002902',
        '8FB' => 'E02002902',
        '8FD' => 'E02002902',
        '8FE' => 'E02002902',
        '8FF' => 'E02002902',
        '8FG' => 'E02002902',
        '8FH' => 'E02002902',
        '8FJ' => 'E02002902',
        '8FL' => 'E02002902',
        '8FN' => 'E02002902',
        '8FP' => 'E02002902',
        '8FQ' => 'E02002902',
        '8FR' => 'E02002902',
        '8FS' => 'E02002902',
        '8FT' => 'E02002902',
        '8FU' => 'E02002902',
        '8FW' => 'E02002902',
        '8FX' => 'E02002902',
        '8FY' => 'E02002902',
        '8FZ' => 'E02002902',
        '8GA' => 'E02002902',
        '8GD' => 'E02002902',
        '8GE' => 'E02002901',
        '8GF' => 'E02002902',
        '8GG' => 'E02002902',
        '8GH' => 'E02002901',
        '8GJ' => 'E02002901',
        '8GL' => 'E02002901',
        '8GN' => 'E02002902',
        '8GP' => 'E02002902',
        '8GQ' => 'E02002902',
        '8GR' => 'E02002902',
        '8GS' => 'E02002902',
        '8GT' => 'E02002902',
        '8GU' => 'E02002902',
        '8GW' => 'E02002902',
        '8GX' => 'E02002901',
        '8GY' => 'E02002901',
        '8GZ' => 'E02002901',
        '8HA' => 'E02002901',
        '8HB' => 'E02002901',
        '8HD' => 'E02002901',
        '8HE' => 'E02002901',
        '8HF' => 'E02002901',
        '8HG' => 'E02002901',
        '8HH' => 'E02002901',
        '8HJ' => 'E02002901',
        '8HL' => 'E02002901',
        '8HN' => 'E02002901',
        '8HP' => 'E02002902',
        '8HQ' => 'E02002901',
        '8HR' => 'E02002901',
        '8HS' => 'E02002901',
        '8HT' => 'E02002902',
        '8HU' => 'E02002902',
        '8HW' => 'E02002902',
        '8HX' => 'E02002902',
        '8HY' => 'E02002902',
        '8HZ' => 'E02002902',
        '8JA' => 'E02002902',
        '8JB' => 'E02002902',
        '8JD' => 'E02002902',
        '8JE' => 'E02002902',
        '8JF' => 'E02002902',
        '8JG' => 'E02002902',
        '8JH' => 'E02002902',
        '8JJ' => 'E02002902',
        '8JL' => 'E02002902',
        '8JN' => 'E02002902',
        '8JP' => 'E02002902',
        '8JQ' => 'E02002902',
        '8JR' => 'E02002902',
        '8JS' => 'E02002902',
        '8JT' => 'E02002902',
        '8JU' => 'E02002902',
        '8JW' => 'E02002902',
        '8JX' => 'E02002902',
        '8JY' => 'E02002902',
        '8JZ' => 'E02002904',
        '8LA' => 'E02002902',
        '8LB' => 'E02002903',
        '8LD' => 'E02002904',
        '8LE' => 'E02002904',
        '8LF' => 'E02002902',
        '8LG' => 'E02002902',
        '8LH' => 'E02002902',
        '8LJ' => 'E02002902',
        '8LL' => 'E02002904',
        '8LN' => 'E02002904',
        '8LP' => 'E02002904',
        '8LQ' => 'E02002904',
        '8LR' => 'E02002904',
        '8LS' => 'E02002904',
        '8LT' => 'E02002904',
        '8LU' => 'E02002902',
        '8LW' => 'E02002904',
        '8LX' => 'E02002902',
        '8LY' => 'E02002902',
        '8LZ' => 'E02002903',
        '8NA' => 'E02002903',
        '8NB' => 'E02002903',
        '8ND' => 'E02002903',
        '8NE' => 'E02002903',
        '8NF' => 'E02002903',
        '8NG' => 'E02002903',
        '8NH' => 'E02002903',
        '8NJ' => 'E02002903',
        '8NL' => 'E02002903',
        '8NN' => 'E02002903',
        '8NP' => 'E02002903',
        '8NQ' => 'E02002903',
        '8NR' => 'E02005919',
        '8NS' => 'E02002902',
        '8NT' => 'E02002903',
        '8NU' => 'E02002903',
        '8NW' => 'E02002903',
        '8NX' => 'E02002903',
        '8NY' => 'E02002902',
        '8NZ' => 'E02002902',
        '8PA' => 'E02002902',
        '8PB' => 'E02002902',
        '8PD' => 'E02002901',
        '8PE' => 'E02002902',
        '8PF' => 'E02002902',
        '8PG' => 'E02002902',
        '8PH' => 'E02002902',
        '8PJ' => 'E02002902',
        '8PL' => 'E02002902',
        '8PN' => 'E02002902',
        '8PP' => 'E02002902',
        '8PQ' => 'E02002902',
        '8PR' => 'E02002902',
        '8PS' => 'E02002903',
        '8PT' => 'E02002902',
        '8PU' => 'E02002903',
        '8PW' => 'E02002903',
        '8PX' => 'E02002903',
        '8PY' => 'E02002903',
        '8PZ' => 'E02002902',
        '8QA' => 'E02002902',
        '8QB' => 'E02002902',
        '8QD' => 'E02002902',
        '8QE' => 'E02002902',
        '8QF' => 'E02002902',
        '8QG' => 'E02002902',
        '8QH' => 'E02002903',
        '8QJ' => 'E02002903',
        '8QL' => 'E02002903',
        '8QN' => 'E02002903',
        '8QP' => 'E02002903',
        '8QQ' => 'E02002903',
        '8QR' => 'E02002903',
        '8QS' => 'E02002903',
        '8QT' => 'E02002903',
        '8QU' => 'E02002903',
        '8QW' => 'E02002903',
        '8QX' => 'E02002903',
        '8QY' => 'E02002903',
        '8QZ' => 'E02002903',
        '8RA' => 'E02002903',
        '8RB' => 'E02002903',
        '8RD' => 'E02002903',
        '8RE' => 'E02002903',
        '8RF' => 'E02002903',
        '8RG' => 'E02002903',
        '8RH' => 'E02002903',
        '8RJ' => 'E02002903',
        '8RL' => 'E02002903',
        '8RN' => 'E02002903',
        '8RP' => 'E02002903',
        '8RQ' => 'E02002903',
        '8RR' => 'E02002903',
        '8RS' => 'E02002903',
        '8RT' => 'E02002903',
        '8RU' => 'E02002903',
        '8RW' => 'E02002903',
        '8RX' => 'E02002903',
        '8RY' => 'E02002902',
        '8RZ' => 'E02002902',
        '8SA' => 'E02002903',
        '8SB' => 'E02002903',
        '8SD' => 'E02002903',
        '8SE' => 'E02002903',
        '8SF' => 'E02002903',
        '8SG' => 'E02002903',
        '8SH' => 'E02002903',
        '8SJ' => 'E02002903',
        '8SL' => 'E02002903',
        '8SN' => 'E02002903',
        '8SP' => 'E02002903',
        '8SQ' => 'E02002903',
        '8SR' => 'E02002903',
        '8SS' => 'E02002903',
        '8ST' => 'E02002903',
        '8SU' => 'E02002903',
        '8SW' => 'E02002903',
        '8SX' => 'E02002903',
        '8SY' => 'E02002903',
        '8SZ' => 'E02002903',
        '8TA' => 'E02002903',
        '8TB' => 'E02002903',
        '8TD' => 'E02002903',
        '8TE' => 'E02002903',
        '8TF' => 'E02002902',
        '8TG' => 'E02002902',
        '8TH' => 'E02002903',
        '8TJ' => 'E02002902',
        '8TL' => 'E02002902',
        '8TN' => 'E02002902',
        '8TP' => 'E02002902',
        '8TQ' => 'E02002902',
        '8TR' => 'E02002902',
        '8TW' => 'E02002902',
        '8WA' => 'E02002902',
        '8WB' => 'E02002902',
        '8WE' => 'E02002902',
        '8WF' => 'E02002902',
        '8WN' => 'E02002902',
        '8WQ' => 'E02002902',
        '8WZ' => 'E02002902',
        '9AA' => 'E02002904',
        '9AB' => 'E02002904',
        '9AD' => 'E02002904',
        '9AE' => 'E02002904',
        '9AF' => 'E02002904',
        '9AG' => 'E02002904',
        '9AH' => 'E02002904',
        '9AJ' => 'E02002904',
        '9AL' => 'E02002904',
        '9AN' => 'E02002904',
        '9AP' => 'E02002904',
        '9AQ' => 'E02002904',
        '9AR' => 'E02002904',
        '9AS' => 'E02005916',
        '9AU' => 'E02002903',
        '9AW' => 'E02002902',
        '9AX' => 'E02002904',
        '9AY' => 'E02002902',
        '9AZ' => 'E02002904',
        '9BA' => 'E02002904',
        '9BB' => 'E02002904',
        '9BD' => 'E02002904',
        '9BE' => 'E02002904',
        '9BG' => 'E02002904',
        '9BH' => 'E02002904',
        '9BJ' => 'E02002904',
        '9BL' => 'E02002904',
        '9BN' => 'E02002904',
        '9BP' => 'E02002904',
        '9BQ' => 'E02002904',
        '9BS' => 'E02002904',
        '9BT' => 'E02002904',
        '9BU' => 'E02002904',
        '9BW' => 'E02002904',
        '9BX' => 'E02002904',
        '9BY' => 'E02002904',
        '9BZ' => 'E02002904',
        '9DA' => 'E02002904',
        '9DB' => 'E02002902',
        '9DE' => 'E02002902',
        '9DF' => 'E02002904',
        '9DG' => 'E02002904',
        '9DH' => 'E02002904',
        '9DJ' => 'E02002904',
        '9DL' => 'E02002904',
        '9DN' => 'E02002904',
        '9DP' => 'E02002904',
        '9DQ' => 'E02002904',
        '9DR' => 'E02002904',
        '9DS' => 'E02002904',
        '9DT' => 'E02002904',
        '9DU' => 'E02002904',
        '9DW' => 'E02002904',
        '9DX' => 'E02002904',
        '9DY' => 'E02002904',
        '9DZ' => 'E02002904',
        '9EA' => 'E02002904',
        '9EB' => 'E02002904',
        '9ED' => 'E02002904',
        '9EE' => 'E02002904',
        '9EF' => 'E02002904',
        '9EG' => 'E02002904',
        '9EH' => 'E02002904',
        '9EJ' => 'E02002904',
        '9EP' => 'E02002904',
        '9EQ' => 'E02002904',
        '9ER' => 'E02002904',
        '9ES' => 'E02002904',
        '9ET' => 'E02002904',
        '9EU' => 'E02002904',
        '9EW' => 'E02002904',
        '9EX' => 'E02002904',
        '9EZ' => 'E02002904',
        '9FA' => 'E02002904',
        '9FB' => 'E02002902',
        '9FD' => 'E02002904',
        '9FE' => 'E02002904',
        '9FF' => 'E02002904',
        '9FG' => 'E02002904',
        '9FH' => 'E02002904',
        '9FJ' => 'E02002904',
        '9FL' => 'E02002904',
        '9FN' => 'E02002904',
        '9FP' => 'E02002904',
        '9FQ' => 'E02002904',
        '9FR' => 'E02002903',
        '9FS' => 'E02002904',
        '9FT' => 'E02002904',
        '9FU' => 'E02002903',
        '9FW' => 'E02002903',
        '9FX' => 'E02002903',
        '9FY' => 'E02002903',
        '9FZ' => 'E02002903',
        '9GA' => 'E02002904',
        '9GB' => 'E02002903',
        '9GD' => 'E02002904',
        '9GE' => 'E02002903',
        '9GF' => 'E02002903',
        '9GG' => 'E02002903',
        '9GH' => 'E02002904',
        '9GJ' => 'E02002904',
        '9GL' => 'E02002904',
        '9GN' => 'E02002904',
        '9GP' => 'E02002904',
        '9GQ' => 'E02002904',
        '9GR' => 'E02002904',
        '9GS' => 'E02002904',
        '9GT' => 'E02002903',
        '9GU' => 'E02002903',
        '9GW' => 'E02002903',
        '9GX' => 'E02002904',
        '9GY' => 'E02002903',
        '9GZ' => 'E02002904',
        '9HA' => 'E02002904',
        '9HB' => 'E02002904',
        '9HD' => 'E02002904',
        '9HE' => 'E02002904',
        '9HF' => 'E02002903',
        '9HG' => 'E02002903',
        '9HH' => 'E02002903',
        '9HJ' => 'E02002903',
        '9HL' => 'E02002903',
        '9HN' => 'E02002903',
        '9HP' => 'E02002903',
        '9HQ' => 'E02002903',
        '9HR' => 'E02002902',
        '9HS' => 'E02002903',
        '9HT' => 'E02002903',
        '9HU' => 'E02002903',
        '9HW' => 'E02002903',
        '9HX' => 'E02002903',
        '9HY' => 'E02002903',
        '9HZ' => 'E02002903',
        '9JA' => 'E02002903',
        '9JB' => 'E02002903',
        '9JD' => 'E02002903',
        '9JE' => 'E02002903',
        '9JF' => 'E02002903',
        '9JG' => 'E02002903',
        '9JH' => 'E02002903',
        '9JJ' => 'E02002903',
        '9JL' => 'E02002903',
        '9JN' => 'E02002903',
        '9JP' => 'E02002903',
        '9JQ' => 'E02002903',
        '9JR' => 'E02002903',
        '9JS' => 'E02002903',
        '9JT' => 'E02002903',
        '9JU' => 'E02002903',
        '9JW' => 'E02002903',
        '9JX' => 'E02002903',
        '9JY' => 'E02002902',
        '9JZ' => 'E02002903',
        '9LA' => 'E02002903',
        '9LB' => 'E02002903',
        '9LD' => 'E02002903',
        '9LE' => 'E02002903',
        '9LF' => 'E02002903',
        '9LG' => 'E02002902',
        '9LH' => 'E02002902',
        '9LJ' => 'E02002903',
        '9LL' => 'E02002902',
        '9LN' => 'E02002902',
        '9LP' => 'E02002902',
        '9LQ' => 'E02002902',
        '9LR' => 'E02002902',
        '9LS' => 'E02002902',
        '9LT' => 'E02002902',
        '9LU' => 'E02002902',
        '9LW' => 'E02002902',
        '9LX' => 'E02002902',
        '9LY' => 'E02002904',
        '9LZ' => 'E02002902',
        '9NA' => 'E02002904',
        '9NB' => 'E02002904',
        '9ND' => 'E02002904',
        '9NE' => 'E02002904',
        '9NF' => 'E02002904',
        '9NG' => 'E02002904',
        '9NH' => 'E02002904',
        '9NJ' => 'E02002904',
        '9NL' => 'E02002904',
        '9NN' => 'E02002904',
        '9NP' => 'E02002902',
        '9NQ' => 'E02002902',
        '9NW' => 'E02002902',
        '9WA' => 'E02002902',
        '9WB' => 'E02002902',
        '9WD' => 'E02002902',
        '9WQ' => 'E02002902',
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
