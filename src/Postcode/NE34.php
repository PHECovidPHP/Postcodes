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
final class NE34
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001779',
        '0AB' => 'E02001779',
        '0AD' => 'E02001779',
        '0AE' => 'E02001779',
        '0AF' => 'E02001779',
        '0AG' => 'E02001779',
        '0AH' => 'E02001778',
        '0AJ' => 'E02001778',
        '0AL' => 'E02001783',
        '0AN' => 'E02001778',
        '0AP' => 'E02001778',
        '0AQ' => 'E02001770',
        '0AR' => 'E02001778',
        '0AS' => 'E02001778',
        '0AT' => 'E02001778',
        '0AU' => 'E02001778',
        '0AW' => 'E02001778',
        '0AX' => 'E02001778',
        '0AY' => 'E02001778',
        '0AZ' => 'E02001778',
        '0BA' => 'E02001778',
        '0BB' => 'E02001783',
        '0BD' => 'E02001783',
        '0BE' => 'E02001783',
        '0BF' => 'E02001783',
        '0BG' => 'E02001783',
        '0BH' => 'E02001783',
        '0BJ' => 'E02001783',
        '0BL' => 'E02001783',
        '0BN' => 'E02001783',
        '0BP' => 'E02001783',
        '0BQ' => 'E02001783',
        '0BR' => 'E02001778',
        '0BS' => 'E02001783',
        '0BT' => 'E02001783',
        '0BU' => 'E02001778',
        '0BW' => 'E02001783',
        '0BX' => 'E02001778',
        '0BY' => 'E02001778',
        '0BZ' => 'E02001783',
        '0DA' => 'E02001779',
        '0DB' => 'E02001778',
        '0DD' => 'E02001778',
        '0DE' => 'E02001778',
        '0DG' => 'E02001779',
        '0DH' => 'E02001783',
        '0DJ' => 'E02001783',
        '0DL' => 'E02001773',
        '0DN' => 'E02001772',
        '0DP' => 'E02001772',
        '0DQ' => 'E02001772',
        '0DR' => 'E02001772',
        '0DS' => 'E02001772',
        '0DT' => 'E02001772',
        '0DU' => 'E02001773',
        '0DW' => 'E02001772',
        '0DX' => 'E02001772',
        '0DY' => 'E02001772',
        '0DZ' => 'E02001772',
        '0EA' => 'E02001772',
        '0EB' => 'E02001772',
        '0EE' => 'E02001772',
        '0EF' => 'E02001772',
        '0EG' => 'E02001772',
        '0EH' => 'E02001773',
        '0EJ' => 'E02001773',
        '0EL' => 'E02001773',
        '0EN' => 'E02001772',
        '0EQ' => 'E02001773',
        '0ES' => 'E02001773',
        '0ET' => 'E02001773',
        '0EU' => 'E02001773',
        '0EW' => 'E02001772',
        '0EX' => 'E02001773',
        '0HA' => 'E02001783',
        '0HB' => 'E02001778',
        '0HD' => 'E02001772',
        '0HG' => 'E02001772',
        '0HH' => 'E02001772',
        '0HJ' => 'E02001772',
        '0HL' => 'E02001772',
        '0HN' => 'E02001772',
        '0HP' => 'E02001772',
        '0HQ' => 'E02001772',
        '0HR' => 'E02001772',
        '0HS' => 'E02001772',
        '0HT' => 'E02001772',
        '0HU' => 'E02001772',
        '0HW' => 'E02001772',
        '0HX' => 'E02001772',
        '0HY' => 'E02001772',
        '0HZ' => 'E02001772',
        '0JA' => 'E02001772',
        '0JB' => 'E02001772',
        '0JP' => 'E02001778',
        '0JR' => 'E02001778',
        '0JS' => 'E02001778',
        '0JT' => 'E02001778',
        '0JU' => 'E02001778',
        '0JX' => 'E02001778',
        '0JZ' => 'E02001778',
        '0LA' => 'E02001778',
        '0LB' => 'E02001778',
        '0LD' => 'E02001778',
        '0LE' => 'E02001778',
        '0LF' => 'E02001778',
        '0LG' => 'E02001778',
        '0LH' => 'E02001778',
        '0LJ' => 'E02001778',
        '0LN' => 'E02001778',
        '0LR' => 'E02001778',
        '0LU' => 'E02001778',
        '0LW' => 'E02001779',
        '0LX' => 'E02001778',
        '0LY' => 'E02001778',
        '0LZ' => 'E02001778',
        '0NA' => 'E02001778',
        '0NB' => 'E02001778',
        '0ND' => 'E02001778',
        '0NE' => 'E02001778',
        '0NF' => 'E02001778',
        '0NG' => 'E02001778',
        '0NH' => 'E02001778',
        '0NJ' => 'E02001778',
        '0NL' => 'E02001778',
        '0NN' => 'E02001778',
        '0NP' => 'E02001778',
        '0NQ' => 'E02001778',
        '0NR' => 'E02001778',
        '0NS' => 'E02001778',
        '0NT' => 'E02001779',
        '0NU' => 'E02001779',
        '0NW' => 'E02001778',
        '0NX' => 'E02001779',
        '0PA' => 'E02001778',
        '0PB' => 'E02001778',
        '0PD' => 'E02001778',
        '0PE' => 'E02001778',
        '0PF' => 'E02001772',
        '0PG' => 'E02001778',
        '0PH' => 'E02001772',
        '0PJ' => 'E02001772',
        '0PL' => 'E02001778',
        '0PN' => 'E02001778',
        '0PP' => 'E02001772',
        '0PQ' => 'E02001778',
        '0PR' => 'E02001772',
        '0PS' => 'E02001772',
        '0PT' => 'E02001772',
        '0PU' => 'E02001772',
        '0PW' => 'E02001772',
        '0PX' => 'E02001772',
        '0PY' => 'E02001772',
        '0PZ' => 'E02001772',
        '0QA' => 'E02001772',
        '0QB' => 'E02001778',
        '0QD' => 'E02001778',
        '0QE' => 'E02001772',
        '0QF' => 'E02001772',
        '0QG' => 'E02001778',
        '0QH' => 'E02001778',
        '0QJ' => 'E02001778',
        '0QL' => 'E02001778',
        '0QN' => 'E02001778',
        '0QP' => 'E02001778',
        '0QQ' => 'E02001778',
        '0QR' => 'E02001778',
        '0QS' => 'E02001778',
        '0QT' => 'E02001778',
        '0QU' => 'E02001778',
        '0QW' => 'E02001778',
        '0QX' => 'E02001778',
        '0QY' => 'E02001778',
        '0QZ' => 'E02001778',
        '0RA' => 'E02001778',
        '0RB' => 'E02001778',
        '0RD' => 'E02001778',
        '0RE' => 'E02001778',
        '0RF' => 'E02001778',
        '0RG' => 'E02001778',
        '0RH' => 'E02001778',
        '0RP' => 'E02001772',
        '0RR' => 'E02001770',
        '0RS' => 'E02001770',
        '0RT' => 'E02001770',
        '0RU' => 'E02001772',
        '0RW' => 'E02001772',
        '0RX' => 'E02001772',
        '0RY' => 'E02001772',
        '0RZ' => 'E02001772',
        '0SA' => 'E02001772',
        '0SB' => 'E02001770',
        '0SD' => 'E02001772',
        '0SE' => 'E02001770',
        '0SF' => 'E02001770',
        '0SG' => 'E02001770',
        '0SN' => 'E02001772',
        '0SP' => 'E02001772',
        '0SQ' => 'E02001770',
        '0SR' => 'E02001772',
        '0SS' => 'E02001772',
        '0ST' => 'E02001773',
        '0SU' => 'E02001772',
        '0SW' => 'E02001770',
        '0SX' => 'E02001772',
        '0SY' => 'E02001772',
        '0TB' => 'E02001783',
        '0TD' => 'E02001783',
        '0TE' => 'E02001783',
        '0TF' => 'E02001783',
        '0TG' => 'E02001783',
        '0TH' => 'E02001778',
        '0TL' => 'E02001778',
        '0TN' => 'E02001783',
        '0TP' => 'E02001778',
        '0TQ' => 'E02001783',
        '0TR' => 'E02001778',
        '0TS' => 'E02001783',
        '0TT' => 'E02001783',
        '0TU' => 'E02001783',
        '0TW' => 'E02001778',
        '0TX' => 'E02001783',
        '0TY' => 'E02001783',
        '0TZ' => 'E02001783',
        '0WA' => 'E02001778',
        '0WB' => 'E02001778',
        '0WD' => 'E02001778',
        '0WE' => 'E02001783',
        '0WF' => 'E02001769',
        '0WG' => 'E02001778',
        '0WH' => 'E02001783',
        '0WJ' => 'E02001783',
        '0WL' => 'E02001769',
        '0WN' => 'E02001769',
        '0WP' => 'E02001769',
        '0WQ' => 'E02001769',
        '0WS' => 'E02001769',
        '0WT' => 'E02001769',
        '0WU' => 'E02001769',
        '0WW' => 'E02001778',
        '0WX' => 'E02001769',
        '0WY' => 'E02001769',
        '0WZ' => 'E02001769',
        '0XA' => 'E02001778',
        '0XB' => 'E02001778',
        '0XD' => 'E02001778',
        '0XE' => 'E02001778',
        '0XF' => 'E02001778',
        '0XG' => 'E02001769',
        '0XH' => 'E02001778',
        '0XJ' => 'E02001778',
        '0XL' => 'E02001778',
        '0XN' => 'E02001778',
        '0XP' => 'E02001778',
        '0XQ' => 'E02001778',
        '0XR' => 'E02001778',
        '0YA' => 'E02001778',
        '0YB' => 'E02001778',
        '0YD' => 'E02001778',
        '0YE' => 'E02001778',
        '0YH' => 'E02001778',
        '0YJ' => 'E02001778',
        '0YL' => 'E02001778',
        '0YQ' => 'E02001778',
        '0ZX' => 'E02001769',
        '6AA' => 'E02001773',
        '6AB' => 'E02001773',
        '6AD' => 'E02001773',
        '6AE' => 'E02001773',
        '6AF' => 'E02001773',
        '6AG' => 'E02001773',
        '6AH' => 'E02001773',
        '6AJ' => 'E02001773',
        '6AL' => 'E02001773',
        '6AN' => 'E02001773',
        '6AP' => 'E02001773',
        '6AQ' => 'E02001773',
        '6AR' => 'E02001773',
        '6AS' => 'E02001773',
        '6AT' => 'E02001773',
        '6AU' => 'E02001773',
        '6AW' => 'E02001773',
        '6AX' => 'E02001773',
        '6AY' => 'E02001773',
        '6AZ' => 'E02001773',
        '6BA' => 'E02001773',
        '6BB' => 'E02001773',
        '6BD' => 'E02001773',
        '6BE' => 'E02001773',
        '6BG' => 'E02001773',
        '6BH' => 'E02001773',
        '6BJ' => 'E02001775',
        '6BQ' => 'E02001773',
        '6BZ' => 'E02001773',
        '6DA' => 'E02001773',
        '6DB' => 'E02001773',
        '6DD' => 'E02001773',
        '6DE' => 'E02001773',
        '6DF' => 'E02001773',
        '6DG' => 'E02001773',
        '6DH' => 'E02001773',
        '6DJ' => 'E02001773',
        '6DL' => 'E02001773',
        '6DN' => 'E02001775',
        '6DP' => 'E02001773',
        '6DQ' => 'E02001773',
        '6DR' => 'E02001775',
        '6DS' => 'E02001773',
        '6DT' => 'E02001773',
        '6DU' => 'E02001773',
        '6DW' => 'E02001773',
        '6DX' => 'E02001773',
        '6DY' => 'E02001773',
        '6DZ' => 'E02001773',
        '6EA' => 'E02001773',
        '6EB' => 'E02001773',
        '6ED' => 'E02001773',
        '6EE' => 'E02001773',
        '6EF' => 'E02001773',
        '6EG' => 'E02001773',
        '6ER' => 'E02001775',
        '6ES' => 'E02001771',
        '6ET' => 'E02001770',
        '6EU' => 'E02001773',
        '6EX' => 'E02001773',
        '6EY' => 'E02001773',
        '6EZ' => 'E02001773',
        '6HA' => 'E02001773',
        '6HB' => 'E02001770',
        '6HD' => 'E02001770',
        '6HE' => 'E02001771',
        '6HF' => 'E02001771',
        '6HG' => 'E02001771',
        '6HH' => 'E02001771',
        '6HJ' => 'E02001771',
        '6HL' => 'E02001771',
        '6HN' => 'E02001771',
        '6HP' => 'E02001771',
        '6HQ' => 'E02001771',
        '6HR' => 'E02001770',
        '6HS' => 'E02001770',
        '6HT' => 'E02001773',
        '6HU' => 'E02001773',
        '6HW' => 'E02001771',
        '6HX' => 'E02001771',
        '6HY' => 'E02001771',
        '6JA' => 'E02001773',
        '6JD' => 'E02001773',
        '6JE' => 'E02001773',
        '6JF' => 'E02001773',
        '6JG' => 'E02001773',
        '6JH' => 'E02001773',
        '6JJ' => 'E02001773',
        '6JL' => 'E02001773',
        '6JN' => 'E02001771',
        '6JP' => 'E02001773',
        '6JQ' => 'E02001773',
        '6JR' => 'E02001773',
        '6JS' => 'E02001773',
        '6JT' => 'E02001773',
        '6JU' => 'E02001773',
        '6JW' => 'E02001771',
        '6JX' => 'E02001773',
        '6JY' => 'E02001773',
        '6JZ' => 'E02001773',
        '6LA' => 'E02001773',
        '6LB' => 'E02001771',
        '6LD' => 'E02001771',
        '6LE' => 'E02001771',
        '6LF' => 'E02001771',
        '6LG' => 'E02001773',
        '6LH' => 'E02001771',
        '6LQ' => 'E02001771',
        '6LT' => 'E02001772',
        '6LU' => 'E02001772',
        '6LX' => 'E02001772',
        '6LY' => 'E02001773',
        '6LZ' => 'E02001773',
        '6NA' => 'E02001773',
        '6NB' => 'E02001773',
        '6ND' => 'E02001773',
        '6NE' => 'E02001772',
        '6NF' => 'E02001772',
        '6NG' => 'E02001773',
        '6NH' => 'E02001773',
        '6NJ' => 'E02001772',
        '6NL' => 'E02001773',
        '6NN' => 'E02001773',
        '6NQ' => 'E02001773',
        '6NR' => 'E02001773',
        '6NW' => 'E02001773',
        '6NX' => 'E02001775',
        '6PA' => 'E02001775',
        '6PB' => 'E02001775',
        '6PD' => 'E02001775',
        '6PE' => 'E02001775',
        '6PF' => 'E02001775',
        '6PG' => 'E02001775',
        '6PH' => 'E02001775',
        '6PJ' => 'E02001775',
        '6PL' => 'E02001775',
        '6PN' => 'E02001775',
        '6PP' => 'E02001775',
        '6PQ' => 'E02001775',
        '6PR' => 'E02001775',
        '6PS' => 'E02001775',
        '6PT' => 'E02001775',
        '6PU' => 'E02001773',
        '6PW' => 'E02001775',
        '6PX' => 'E02001773',
        '6PY' => 'E02001775',
        '6PZ' => 'E02001773',
        '6QA' => 'E02001773',
        '6QB' => 'E02001773',
        '6QD' => 'E02001773',
        '6QE' => 'E02001773',
        '6QF' => 'E02001775',
        '6QG' => 'E02001775',
        '6QH' => 'E02001775',
        '6QJ' => 'E02001773',
        '6QQ' => 'E02001775',
        '6QT' => 'E02001773',
        '6QU' => 'E02001773',
        '6QX' => 'E02001773',
        '6QY' => 'E02001773',
        '6QZ' => 'E02001773',
        '6RA' => 'E02001773',
        '6RB' => 'E02001775',
        '6RD' => 'E02001773',
        '6RE' => 'E02001775',
        '6RF' => 'E02001775',
        '6RG' => 'E02001773',
        '6RH' => 'E02001773',
        '6RJ' => 'E02001775',
        '6RL' => 'E02001775',
        '6RN' => 'E02001775',
        '6RP' => 'E02001775',
        '6RQ' => 'E02001773',
        '6RR' => 'E02001775',
        '6RS' => 'E02001775',
        '6RT' => 'E02001775',
        '6RU' => 'E02001775',
        '6RW' => 'E02001775',
        '6RX' => 'E02001775',
        '6RY' => 'E02001775',
        '6RZ' => 'E02001773',
        '6SA' => 'E02001775',
        '6SB' => 'E02001775',
        '6SD' => 'E02001775',
        '6SE' => 'E02001775',
        '6SF' => 'E02001775',
        '6SG' => 'E02001775',
        '6SH' => 'E02001775',
        '6SQ' => 'E02001775',
        '6SS' => 'E02001771',
        '6ST' => 'E02001771',
        '6SU' => 'E02001771',
        '6TZ' => 'E02001771',
        '6WT' => 'E02001769',
        '6WU' => 'E02001771',
        '6WW' => 'E02001769',
        '6WX' => 'E02001771',
        '6WY' => 'E02001771',
        '6WZ' => 'E02001769',
        '6YT' => 'E02001769',
        '6YU' => 'E02001773',
        '6YW' => 'E02001769',
        '6YX' => 'E02001769',
        '6YY' => 'E02001769',
        '6YZ' => 'E02001769',
        '7AA' => 'E02001785',
        '7AB' => 'E02001785',
        '7AD' => 'E02001785',
        '7AE' => 'E02001785',
        '7AF' => 'E02001785',
        '7AG' => 'E02001785',
        '7AH' => 'E02001785',
        '7AJ' => 'E02001785',
        '7AL' => 'E02001785',
        '7AN' => 'E02001785',
        '7AP' => 'E02001785',
        '7AQ' => 'E02001785',
        '7AR' => 'E02001785',
        '7AS' => 'E02001785',
        '7AT' => 'E02001785',
        '7AU' => 'E02001785',
        '7AW' => 'E02001785',
        '7AX' => 'E02001785',
        '7AY' => 'E02001785',
        '7AZ' => 'E02001785',
        '7BA' => 'E02001785',
        '7BB' => 'E02001785',
        '7BD' => 'E02001785',
        '7BE' => 'E02001785',
        '7BG' => 'E02001785',
        '7BH' => 'E02001775',
        '7BJ' => 'E02001775',
        '7BL' => 'E02001775',
        '7BN' => 'E02001775',
        '7BP' => 'E02001775',
        '7BQ' => 'E02001785',
        '7BS' => 'E02001785',
        '7BT' => 'E02001785',
        '7BU' => 'E02001785',
        '7BW' => 'E02001775',
        '7DA' => 'E02001775',
        '7DB' => 'E02001775',
        '7DD' => 'E02001775',
        '7DE' => 'E02001775',
        '7DF' => 'E02001775',
        '7DG' => 'E02001775',
        '7DH' => 'E02001775',
        '7DJ' => 'E02001775',
        '7DL' => 'E02001775',
        '7DN' => 'E02001775',
        '7DP' => 'E02001775',
        '7DQ' => 'E02001775',
        '7DR' => 'E02001775',
        '7DS' => 'E02001775',
        '7DT' => 'E02001775',
        '7DU' => 'E02001775',
        '7DW' => 'E02001775',
        '7DX' => 'E02001775',
        '7DY' => 'E02001775',
        '7DZ' => 'E02001775',
        '7EA' => 'E02001775',
        '7EB' => 'E02001775',
        '7ED' => 'E02001775',
        '7EE' => 'E02001775',
        '7EF' => 'E02001775',
        '7EG' => 'E02001775',
        '7EH' => 'E02001775',
        '7EJ' => 'E02001775',
        '7EL' => 'E02001775',
        '7EN' => 'E02001775',
        '7EP' => 'E02001775',
        '7EQ' => 'E02001775',
        '7ER' => 'E02001775',
        '7ES' => 'E02001775',
        '7EW' => 'E02001775',
        '7EX' => 'E02001785',
        '7EY' => 'E02001785',
        '7EZ' => 'E02001785',
        '7HA' => 'E02001785',
        '7HE' => 'E02001771',
        '7HF' => 'E02001771',
        '7HG' => 'E02001771',
        '7HH' => 'E02001775',
        '7HJ' => 'E02001775',
        '7HL' => 'E02001775',
        '7HN' => 'E02001771',
        '7HP' => 'E02001771',
        '7HQ' => 'E02001771',
        '7HR' => 'E02001771',
        '7HS' => 'E02001771',
        '7HT' => 'E02001771',
        '7HU' => 'E02001771',
        '7HW' => 'E02001771',
        '7HX' => 'E02001771',
        '7HY' => 'E02001771',
        '7HZ' => 'E02001771',
        '7JA' => 'E02001771',
        '7JB' => 'E02001771',
        '7JD' => 'E02001771',
        '7JE' => 'E02001771',
        '7JF' => 'E02001771',
        '7JG' => 'E02001771',
        '7JH' => 'E02001771',
        '7JJ' => 'E02001771',
        '7JL' => 'E02001771',
        '7JN' => 'E02001771',
        '7JP' => 'E02001771',
        '7JQ' => 'E02001771',
        '7JR' => 'E02001785',
        '7JS' => 'E02001785',
        '7JT' => 'E02001771',
        '7JW' => 'E02001771',
        '7JY' => 'E02001771',
        '7LG' => 'E02001771',
        '7LH' => 'E02001771',
        '7LJ' => 'E02001771',
        '7LL' => 'E02001771',
        '7LN' => 'E02001771',
        '7LP' => 'E02001771',
        '7LQ' => 'E02001771',
        '7LR' => 'E02001771',
        '7LS' => 'E02001771',
        '7LT' => 'E02001771',
        '7LW' => 'E02001771',
        '7LZ' => 'E02001775',
        '7ND' => 'E02001775',
        '7NE' => 'E02001775',
        '7NF' => 'E02001775',
        '7NG' => 'E02001775',
        '7NJ' => 'E02001780',
        '7NL' => 'E02001780',
        '7NN' => 'E02001780',
        '7NP' => 'E02001780',
        '7NR' => 'E02001780',
        '7NS' => 'E02001780',
        '7NT' => 'E02001780',
        '7NU' => 'E02001780',
        '7NW' => 'E02001780',
        '7NX' => 'E02001780',
        '7PA' => 'E02001780',
        '7PB' => 'E02001780',
        '7PD' => 'E02001780',
        '7PE' => 'E02001780',
        '7PF' => 'E02001780',
        '7PG' => 'E02001780',
        '7PH' => 'E02001780',
        '7PJ' => 'E02001780',
        '7PL' => 'E02001780',
        '7PN' => 'E02001780',
        '7PP' => 'E02001780',
        '7PQ' => 'E02001780',
        '7PR' => 'E02001780',
        '7PS' => 'E02001785',
        '7PT' => 'E02001785',
        '7PU' => 'E02001785',
        '7PW' => 'E02001780',
        '7PX' => 'E02001785',
        '7PY' => 'E02001785',
        '7PZ' => 'E02001780',
        '7QA' => 'E02001780',
        '7QB' => 'E02001780',
        '7QD' => 'E02001780',
        '7QE' => 'E02001780',
        '7QF' => 'E02001780',
        '7QG' => 'E02001780',
        '7QH' => 'E02001780',
        '7QJ' => 'E02001780',
        '7QL' => 'E02001780',
        '7QN' => 'E02001780',
        '7QP' => 'E02001785',
        '7QQ' => 'E02001780',
        '7QR' => 'E02001785',
        '7QS' => 'E02001785',
        '7QT' => 'E02001785',
        '7QU' => 'E02001785',
        '7QW' => 'E02001785',
        '7QX' => 'E02001785',
        '7QY' => 'E02001785',
        '7QZ' => 'E02001785',
        '7RA' => 'E02001780',
        '7RB' => 'E02001780',
        '7RD' => 'E02001780',
        '7RE' => 'E02001780',
        '7RF' => 'E02001780',
        '7RH' => 'E02001775',
        '7RJ' => 'E02001775',
        '7RL' => 'E02001775',
        '7RN' => 'E02001775',
        '7RP' => 'E02001780',
        '7RQ' => 'E02001775',
        '7RW' => 'E02001775',
        '7SA' => 'E02001775',
        '7SB' => 'E02001775',
        '7SD' => 'E02001775',
        '7SE' => 'E02001775',
        '7SF' => 'E02001775',
        '7SG' => 'E02001775',
        '7SJ' => 'E02001771',
        '7SL' => 'E02001771',
        '7SN' => 'E02001771',
        '7SP' => 'E02001771',
        '7SQ' => 'E02001775',
        '7SR' => 'E02001771',
        '7SS' => 'E02001771',
        '7ST' => 'E02001771',
        '7SU' => 'E02001771',
        '7SW' => 'E02001771',
        '7SX' => 'E02001771',
        '7SY' => 'E02001771',
        '7SZ' => 'E02001771',
        '7TA' => 'E02001771',
        '7TB' => 'E02001771',
        '7TD' => 'E02001771',
        '7TE' => 'E02001771',
        '7TF' => 'E02001771',
        '7TG' => 'E02001771',
        '7TH' => 'E02001771',
        '7TJ' => 'E02001771',
        '7TL' => 'E02001771',
        '7TN' => 'E02001771',
        '7TP' => 'E02001771',
        '7TQ' => 'E02001771',
        '7TR' => 'E02001771',
        '7TS' => 'E02001771',
        '7TU' => 'E02001771',
        '7TW' => 'E02001771',
        '7TX' => 'E02001771',
        '7TY' => 'E02001771',
        '7TZ' => 'E02001771',
        '7WT' => 'E02001769',
        '7WU' => 'E02001769',
        '7WW' => 'E02001769',
        '7WX' => 'E02001769',
        '7WY' => 'E02001769',
        '7WZ' => 'E02001769',
        '7YT' => 'E02001769',
        '7YU' => 'E02001769',
        '7YW' => 'E02001769',
        '7YX' => 'E02001775',
        '7YY' => 'E02001771',
        '7YZ' => 'E02001771',
        '7ZS' => 'E02001769',
        '8AA' => 'E02001780',
        '8AB' => 'E02001780',
        '8AD' => 'E02001780',
        '8AE' => 'E02001780',
        '8AF' => 'E02001780',
        '8AG' => 'E02001780',
        '8AH' => 'E02001780',
        '8AJ' => 'E02001780',
        '8AL' => 'E02001780',
        '8AN' => 'E02001780',
        '8AP' => 'E02001780',
        '8AQ' => 'E02001780',
        '8AR' => 'E02001780',
        '8AS' => 'E02001780',
        '8AT' => 'E02001780',
        '8AU' => 'E02001780',
        '8AW' => 'E02001780',
        '8AX' => 'E02001780',
        '8AY' => 'E02001780',
        '8AZ' => 'E02001780',
        '8BA' => 'E02001780',
        '8BB' => 'E02001780',
        '8BD' => 'E02001780',
        '8BE' => 'E02001780',
        '8BG' => 'E02001780',
        '8BH' => 'E02001780',
        '8BJ' => 'E02001780',
        '8BL' => 'E02001780',
        '8BN' => 'E02001780',
        '8BP' => 'E02001780',
        '8BQ' => 'E02001780',
        '8BS' => 'E02001780',
        '8BT' => 'E02001786',
        '8BU' => 'E02001780',
        '8BW' => 'E02001780',
        '8BX' => 'E02001780',
        '8BY' => 'E02001780',
        '8BZ' => 'E02001780',
        '8DA' => 'E02001780',
        '8DB' => 'E02001780',
        '8DD' => 'E02001780',
        '8DE' => 'E02001780',
        '8DF' => 'E02001780',
        '8DG' => 'E02001780',
        '8DH' => 'E02001780',
        '8DJ' => 'E02001780',
        '8DL' => 'E02001780',
        '8DN' => 'E02001780',
        '8DP' => 'E02001780',
        '8DQ' => 'E02001780',
        '8DR' => 'E02001780',
        '8DS' => 'E02001780',
        '8DT' => 'E02001780',
        '8DU' => 'E02001780',
        '8DW' => 'E02001780',
        '8DX' => 'E02001780',
        '8DY' => 'E02001780',
        '8DZ' => 'E02001789',
        '8EA' => 'E02001780',
        '8EB' => 'E02001780',
        '8ED' => 'E02001780',
        '8EE' => 'E02001780',
        '8EF' => 'E02001785',
        '8EG' => 'E02001789',
        '8EH' => 'E02001785',
        '8EJ' => 'E02001780',
        '8EL' => 'E02001780',
        '8EN' => 'E02001780',
        '8EP' => 'E02001786',
        '8EQ' => 'E02001780',
        '8ER' => 'E02001780',
        '8ES' => 'E02001780',
        '8ET' => 'E02001780',
        '8EU' => 'E02001780',
        '8EW' => 'E02001780',
        '8EX' => 'E02001780',
        '8EZ' => 'E02001786',
        '8FS' => 'E02001786',
        '8HA' => 'E02001786',
        '8HB' => 'E02001786',
        '8HD' => 'E02001786',
        '8HE' => 'E02001786',
        '8HF' => 'E02001786',
        '8HG' => 'E02001786',
        '8HH' => 'E02001786',
        '8HJ' => 'E02001786',
        '8HL' => 'E02001786',
        '8HN' => 'E02001786',
        '8HP' => 'E02001786',
        '8HQ' => 'E02001786',
        '8HR' => 'E02001786',
        '8HS' => 'E02001786',
        '8HT' => 'E02001786',
        '8HU' => 'E02001786',
        '8HW' => 'E02001786',
        '8HX' => 'E02001786',
        '8HY' => 'E02001786',
        '8HZ' => 'E02001786',
        '8JA' => 'E02001786',
        '8JB' => 'E02001786',
        '8JD' => 'E02001786',
        '8JE' => 'E02001786',
        '8JF' => 'E02001786',
        '8JG' => 'E02001786',
        '8JH' => 'E02001786',
        '8JN' => 'E02001786',
        '8JP' => 'E02001786',
        '8JQ' => 'E02001786',
        '8JR' => 'E02001786',
        '8JS' => 'E02001786',
        '8JT' => 'E02001786',
        '8JU' => 'E02001786',
        '8JW' => 'E02001786',
        '8JX' => 'E02001786',
        '8JY' => 'E02001786',
        '8JZ' => 'E02001786',
        '8LA' => 'E02001786',
        '8LB' => 'E02001786',
        '8LH' => 'E02001786',
        '8LJ' => 'E02001786',
        '8LL' => 'E02001786',
        '8LP' => 'E02001786',
        '8LR' => 'E02001786',
        '8LS' => 'E02001786',
        '8LT' => 'E02001786',
        '8LU' => 'E02001786',
        '8LX' => 'E02001786',
        '8LY' => 'E02001786',
        '8LZ' => 'E02001786',
        '8NA' => 'E02001786',
        '8NB' => 'E02001786',
        '8ND' => 'E02001786',
        '8NE' => 'E02001786',
        '8NF' => 'E02001786',
        '8NG' => 'E02001786',
        '8NH' => 'E02001786',
        '8NJ' => 'E02001786',
        '8NL' => 'E02001786',
        '8NN' => 'E02001786',
        '8NP' => 'E02001786',
        '8NQ' => 'E02001786',
        '8NR' => 'E02001786',
        '8NS' => 'E02001786',
        '8NT' => 'E02001786',
        '8NW' => 'E02001786',
        '8PA' => 'E02001780',
        '8PB' => 'E02001786',
        '8PD' => 'E02001780',
        '8PE' => 'E02001780',
        '8PF' => 'E02001780',
        '8PG' => 'E02001780',
        '8PH' => 'E02001780',
        '8PJ' => 'E02001773',
        '8PL' => 'E02001773',
        '8PN' => 'E02001780',
        '8PP' => 'E02001780',
        '8PQ' => 'E02001780',
        '8PR' => 'E02001780',
        '8PS' => 'E02001780',
        '8PT' => 'E02001780',
        '8PU' => 'E02001780',
        '8PW' => 'E02001780',
        '8PX' => 'E02001780',
        '8PY' => 'E02001780',
        '8PZ' => 'E02001780',
        '8QA' => 'E02001780',
        '8QB' => 'E02001780',
        '8QD' => 'E02001780',
        '8QE' => 'E02001780',
        '8QF' => 'E02001780',
        '8QG' => 'E02001780',
        '8QH' => 'E02001780',
        '8QJ' => 'E02001780',
        '8QL' => 'E02001780',
        '8QN' => 'E02001786',
        '8QQ' => 'E02001780',
        '8QU' => 'E02001780',
        '8QX' => 'E02001785',
        '8QY' => 'E02001785',
        '8RA' => 'E02001786',
        '8RB' => 'E02001786',
        '8RE' => 'E02001786',
        '8RF' => 'E02001786',
        '8RG' => 'E02001786',
        '8RH' => 'E02001786',
        '8RJ' => 'E02001786',
        '8RL' => 'E02001786',
        '8RN' => 'E02001786',
        '8RP' => 'E02001786',
        '8RR' => 'E02001786',
        '8RS' => 'E02001786',
        '8RT' => 'E02001786',
        '8RU' => 'E02001786',
        '8RW' => 'E02001786',
        '8RX' => 'E02001786',
        '8RY' => 'E02001786',
        '8RZ' => 'E02001786',
        '8SA' => 'E02001786',
        '8SB' => 'E02001786',
        '8SD' => 'E02001786',
        '8SE' => 'E02001786',
        '8SH' => 'E02001786',
        '8TA' => 'E02001786',
        '8TB' => 'E02001786',
        '8TD' => 'E02001786',
        '8TE' => 'E02001786',
        '8TF' => 'E02001786',
        '8TG' => 'E02001786',
        '8TH' => 'E02001786',
        '8TJ' => 'E02001786',
        '8TL' => 'E02001786',
        '8TN' => 'E02001786',
        '8TP' => 'E02001786',
        '8TQ' => 'E02001786',
        '8TR' => 'E02001786',
        '8TS' => 'E02001786',
        '8TT' => 'E02001786',
        '8TU' => 'E02001786',
        '8TW' => 'E02001786',
        '8TX' => 'E02001786',
        '8TY' => 'E02001786',
        '8TZ' => 'E02001786',
        '8UA' => 'E02001786',
        '8UB' => 'E02001786',
        '8UD' => 'E02001786',
        '8UE' => 'E02001786',
        '8UF' => 'E02001786',
        '8UG' => 'E02001786',
        '8UH' => 'E02001786',
        '8UQ' => 'E02001786',
        '8WA' => 'E02001769',
        '8WX' => 'E02001769',
        '8WY' => 'E02001769',
        '8WZ' => 'E02001769',
        '8YR' => 'E02001769',
        '8YS' => 'E02001769',
        '8YT' => 'E02001769',
        '8YU' => 'E02001769',
        '8YW' => 'E02001769',
        '8YX' => 'E02001786',
        '8YY' => 'E02001786',
        '8YZ' => 'E02001786',
        '9AA' => 'E02001779',
        '9AB' => 'E02001779',
        '9AD' => 'E02001779',
        '9AE' => 'E02001779',
        '9AF' => 'E02001779',
        '9AG' => 'E02001779',
        '9AH' => 'E02001779',
        '9AJ' => 'E02001779',
        '9AL' => 'E02001779',
        '9AN' => 'E02001779',
        '9AP' => 'E02001779',
        '9AQ' => 'E02001779',
        '9AR' => 'E02001779',
        '9AS' => 'E02001779',
        '9AT' => 'E02001779',
        '9AU' => 'E02001779',
        '9AW' => 'E02001779',
        '9AX' => 'E02001779',
        '9AY' => 'E02001779',
        '9AZ' => 'E02001779',
        '9BA' => 'E02001779',
        '9BB' => 'E02001779',
        '9BD' => 'E02001779',
        '9BE' => 'E02001779',
        '9BF' => 'E02001779',
        '9BG' => 'E02001781',
        '9BH' => 'E02001781',
        '9BJ' => 'E02001779',
        '9BL' => 'E02001779',
        '9BN' => 'E02001779',
        '9BP' => 'E02001779',
        '9BQ' => 'E02001781',
        '9BR' => 'E02001779',
        '9BS' => 'E02001779',
        '9BT' => 'E02001779',
        '9BU' => 'E02001779',
        '9BW' => 'E02001779',
        '9BX' => 'E02001779',
        '9BY' => 'E02001779',
        '9BZ' => 'E02001779',
        '9DA' => 'E02001779',
        '9DB' => 'E02001779',
        '9DD' => 'E02001779',
        '9DE' => 'E02001779',
        '9DF' => 'E02001781',
        '9DG' => 'E02001781',
        '9DH' => 'E02001781',
        '9DJ' => 'E02001781',
        '9DL' => 'E02001781',
        '9DN' => 'E02001781',
        '9DP' => 'E02001781',
        '9DQ' => 'E02001781',
        '9DR' => 'E02001781',
        '9DS' => 'E02001781',
        '9DT' => 'E02001783',
        '9DU' => 'E02001781',
        '9DW' => 'E02001781',
        '9DX' => 'E02001781',
        '9DY' => 'E02001781',
        '9DZ' => 'E02001781',
        '9EA' => 'E02001781',
        '9EB' => 'E02001781',
        '9ED' => 'E02001781',
        '9EE' => 'E02001781',
        '9EF' => 'E02001781',
        '9EG' => 'E02001781',
        '9EH' => 'E02001781',
        '9EJ' => 'E02001781',
        '9EL' => 'E02001781',
        '9EN' => 'E02001781',
        '9EP' => 'E02001781',
        '9EQ' => 'E02001781',
        '9ER' => 'E02001781',
        '9ES' => 'E02001779',
        '9ET' => 'E02001779',
        '9EU' => 'E02001779',
        '9EW' => 'E02001781',
        '9EX' => 'E02001779',
        '9EY' => 'E02001779',
        '9EZ' => 'E02001779',
        '9FA' => 'E02001779',
        '9FB' => 'E02001779',
        '9FD' => 'E02001779',
        '9FE' => 'E02001779',
        '9FF' => 'E02001779',
        '9HA' => 'E02001783',
        '9HB' => 'E02001783',
        '9HD' => 'E02001783',
        '9HE' => 'E02001783',
        '9HF' => 'E02001783',
        '9HG' => 'E02001783',
        '9HH' => 'E02001783',
        '9HJ' => 'E02001783',
        '9HL' => 'E02001783',
        '9HN' => 'E02001783',
        '9HP' => 'E02001783',
        '9HQ' => 'E02001783',
        '9HR' => 'E02001783',
        '9HS' => 'E02001783',
        '9HT' => 'E02001783',
        '9HU' => 'E02001783',
        '9HW' => 'E02001783',
        '9HX' => 'E02001783',
        '9HY' => 'E02001783',
        '9HZ' => 'E02001783',
        '9JA' => 'E02001783',
        '9JB' => 'E02001783',
        '9JD' => 'E02001783',
        '9JE' => 'E02001783',
        '9JF' => 'E02001783',
        '9JG' => 'E02001783',
        '9JH' => 'E02001783',
        '9JJ' => 'E02001783',
        '9JL' => 'E02001783',
        '9JN' => 'E02001783',
        '9JP' => 'E02001783',
        '9JQ' => 'E02001783',
        '9JR' => 'E02001783',
        '9JS' => 'E02001783',
        '9JT' => 'E02001783',
        '9JU' => 'E02001783',
        '9JW' => 'E02001783',
        '9JX' => 'E02001783',
        '9JY' => 'E02001783',
        '9JZ' => 'E02001783',
        '9LA' => 'E02001783',
        '9LB' => 'E02001783',
        '9LD' => 'E02001783',
        '9LE' => 'E02001783',
        '9LF' => 'E02001783',
        '9LG' => 'E02001783',
        '9LH' => 'E02001783',
        '9LJ' => 'E02001783',
        '9LL' => 'E02001783',
        '9LN' => 'E02001783',
        '9LP' => 'E02001783',
        '9LQ' => 'E02001783',
        '9LR' => 'E02001783',
        '9LS' => 'E02001783',
        '9LT' => 'E02001783',
        '9LU' => 'E02001783',
        '9LW' => 'E02001783',
        '9LX' => 'E02001783',
        '9LY' => 'E02001783',
        '9LZ' => 'E02001783',
        '9NA' => 'E02001783',
        '9NB' => 'E02001783',
        '9ND' => 'E02001783',
        '9NE' => 'E02001783',
        '9NF' => 'E02001783',
        '9NG' => 'E02001783',
        '9NQ' => 'E02001783',
        '9NR' => 'E02001779',
        '9NU' => 'E02001779',
        '9NX' => 'E02001779',
        '9PA' => 'E02001779',
        '9PB' => 'E02001779',
        '9PD' => 'E02001779',
        '9PE' => 'E02001779',
        '9PF' => 'E02001779',
        '9PG' => 'E02001779',
        '9PH' => 'E02001779',
        '9PJ' => 'E02001774',
        '9PL' => 'E02001779',
        '9PN' => 'E02001774',
        '9PP' => 'E02001779',
        '9PQ' => 'E02001779',
        '9PR' => 'E02001774',
        '9PS' => 'E02001779',
        '9PT' => 'E02001779',
        '9PU' => 'E02001779',
        '9PW' => 'E02001779',
        '9PX' => 'E02001779',
        '9PY' => 'E02001779',
        '9PZ' => 'E02001779',
        '9QA' => 'E02001779',
        '9QB' => 'E02001779',
        '9QD' => 'E02001779',
        '9QE' => 'E02001779',
        '9QF' => 'E02001781',
        '9QH' => 'E02001781',
        '9QJ' => 'E02001781',
        '9QL' => 'E02001781',
        '9QN' => 'E02001781',
        '9QP' => 'E02001781',
        '9QR' => 'E02001781',
        '9QS' => 'E02001781',
        '9QT' => 'E02001779',
        '9QU' => 'E02001781',
        '9QW' => 'E02001781',
        '9QY' => 'E02001781',
        '9QZ' => 'E02001781',
        '9RA' => 'E02001781',
        '9RB' => 'E02001781',
        '9RD' => 'E02001781',
        '9RE' => 'E02001781',
        '9RF' => 'E02001781',
        '9RG' => 'E02001781',
        '9RH' => 'E02001779',
        '9RJ' => 'E02001779',
        '9RL' => 'E02001779',
        '9RN' => 'E02001779',
        '9RP' => 'E02001781',
        '9RQ' => 'E02001781',
        '9RR' => 'E02001779',
        '9RS' => 'E02001781',
        '9RT' => 'E02001779',
        '9RU' => 'E02001779',
        '9RW' => 'E02001781',
        '9RX' => 'E02001779',
        '9RY' => 'E02001779',
        '9RZ' => 'E02001779',
        '9SA' => 'E02001779',
        '9SB' => 'E02001779',
        '9SD' => 'E02001779',
        '9SE' => 'E02001779',
        '9SF' => 'E02001779',
        '9SP' => 'E02001783',
        '9SR' => 'E02001783',
        '9SS' => 'E02001783',
        '9ST' => 'E02001783',
        '9SU' => 'E02001783',
        '9SX' => 'E02001783',
        '9SY' => 'E02001783',
        '9SZ' => 'E02001783',
        '9TA' => 'E02001783',
        '9TB' => 'E02001783',
        '9TD' => 'E02001783',
        '9TE' => 'E02001783',
        '9TF' => 'E02001783',
        '9TG' => 'E02001783',
        '9TH' => 'E02001783',
        '9TJ' => 'E02001783',
        '9TL' => 'E02001783',
        '9TN' => 'E02001783',
        '9TQ' => 'E02001783',
        '9TW' => 'E02001783',
        '9TX' => 'E02001783',
        '9TY' => 'E02001783',
        '9TZ' => 'E02001783',
        '9UA' => 'E02001783',
        '9UB' => 'E02001783',
        '9UD' => 'E02001783',
        '9UE' => 'E02001783',
        '9UF' => 'E02001783',
        '9UG' => 'E02001783',
        '9UH' => 'E02001783',
        '9WY' => 'E02001769',
        '9WZ' => 'E02001783',
        '9YS' => 'E02001769',
        '9YT' => 'E02001783',
        '9YU' => 'E02001769',
        '9YW' => 'E02001779',
        '9YX' => 'E02001769',
        '9YY' => 'E02001779',
        '9YZ' => 'E02001779',
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
