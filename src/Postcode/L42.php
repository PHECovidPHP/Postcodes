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
final class L42
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0HA' => 'E02001482',
        '0HB' => 'E02001487',
        '0HD' => 'E02001487',
        '0HE' => 'E02001488',
        '0HF' => 'E02001488',
        '0HH' => 'E02001487',
        '0HJ' => 'E02001482',
        '0HL' => 'E02001487',
        '0HN' => 'E02001487',
        '0HP' => 'E02001487',
        '0HQ' => 'E02001488',
        '0HR' => 'E02001487',
        '0HS' => 'E02001487',
        '0HT' => 'E02001487',
        '0HU' => 'E02001487',
        '0HW' => 'E02001487',
        '0HX' => 'E02001482',
        '0HY' => 'E02001487',
        '0HZ' => 'E02001487',
        '0JA' => 'E02001487',
        '0JB' => 'E02001487',
        '0JD' => 'E02001487',
        '0JE' => 'E02001487',
        '0JF' => 'E02001487',
        '0JG' => 'E02001482',
        '0JH' => 'E02001487',
        '0JJ' => 'E02001487',
        '0JL' => 'E02001487',
        '0JN' => 'E02001487',
        '0JP' => 'E02001487',
        '0JQ' => 'E02001487',
        '0JR' => 'E02001487',
        '0JS' => 'E02001487',
        '0JT' => 'E02001487',
        '0JU' => 'E02001487',
        '0JW' => 'E02001487',
        '0JX' => 'E02001487',
        '0JY' => 'E02001487',
        '0JZ' => 'E02001487',
        '0LA' => 'E02001487',
        '0LB' => 'E02001487',
        '0LD' => 'E02001487',
        '0LE' => 'E02001487',
        '0LF' => 'E02001487',
        '0LG' => 'E02001487',
        '0LH' => 'E02001487',
        '0LJ' => 'E02001487',
        '0LL' => 'E02001487',
        '0LN' => 'E02001487',
        '0LP' => 'E02001487',
        '0LQ' => 'E02001487',
        '0LR' => 'E02001487',
        '0LS' => 'E02001487',
        '0LU' => 'E02001487',
        '0LW' => 'E02001487',
        '0LX' => 'E02001487',
        '0LY' => 'E02001487',
        '0LZ' => 'E02001487',
        '0NA' => 'E02001487',
        '0NB' => 'E02001488',
        '0ND' => 'E02001487',
        '0NE' => 'E02001487',
        '0NF' => 'E02001487',
        '0NG' => 'E02001487',
        '0NH' => 'E02001487',
        '0NJ' => 'E02001487',
        '0NL' => 'E02001487',
        '0NN' => 'E02001487',
        '0NP' => 'E02001487',
        '0NQ' => 'E02001487',
        '0NR' => 'E02001487',
        '0NS' => 'E02001487',
        '0NT' => 'E02001487',
        '0NU' => 'E02001487',
        '0NW' => 'E02001487',
        '0NX' => 'E02001487',
        '0NY' => 'E02001487',
        '0PA' => 'E02001487',
        '0PB' => 'E02001487',
        '0PD' => 'E02001487',
        '0PE' => 'E02001487',
        '0PF' => 'E02001487',
        '0PG' => 'E02001487',
        '0PH' => 'E02001487',
        '0PJ' => 'E02001487',
        '0PL' => 'E02001487',
        '0PQ' => 'E02001487',
        '1LA' => 'E02001493',
        '1LB' => 'E02001493',
        '1LD' => 'E02001493',
        '1LE' => 'E02001493',
        '1LF' => 'E02001493',
        '1LG' => 'E02001493',
        '1LH' => 'E02001493',
        '1LJ' => 'E02001493',
        '1LL' => 'E02001493',
        '1LN' => 'E02001493',
        '1LQ' => 'E02001493',
        '1LR' => 'E02001493',
        '1LS' => 'E02001493',
        '1LT' => 'E02001493',
        '1LU' => 'E02001493',
        '1LW' => 'E02001493',
        '1LY' => 'E02001493',
        '1NA' => 'E02001493',
        '1NE' => 'E02001493',
        '1NF' => 'E02001493',
        '1NG' => 'E02001493',
        '1NH' => 'E02001493',
        '1NN' => 'E02001493',
        '1NP' => 'E02001493',
        '1NQ' => 'E02001493',
        '1NR' => 'E02001493',
        '1NS' => 'E02001493',
        '1NT' => 'E02001493',
        '1NW' => 'E02001493',
        '1NX' => 'E02001493',
        '1NY' => 'E02001493',
        '1NZ' => 'E02001493',
        '1PA' => 'E02001493',
        '1PB' => 'E02001493',
        '1PD' => 'E02001493',
        '1PE' => 'E02001493',
        '1PF' => 'E02001493',
        '1PG' => 'E02001493',
        '1PH' => 'E02001493',
        '1PJ' => 'E02001493',
        '1PL' => 'E02001493',
        '1PN' => 'E02001497',
        '1PP' => 'E02001493',
        '1PQ' => 'E02001493',
        '1PR' => 'E02001493',
        '1PS' => 'E02001497',
        '1PT' => 'E02001493',
        '1PU' => 'E02001493',
        '1PW' => 'E02001493',
        '1PX' => 'E02001497',
        '1PY' => 'E02001497',
        '1PZ' => 'E02001493',
        '1QA' => 'E02001493',
        '1QB' => 'E02001493',
        '1QD' => 'E02001493',
        '1QE' => 'E02001497',
        '1QF' => 'E02001497',
        '1QG' => 'E02001497',
        '1QH' => 'E02001497',
        '1QJ' => 'E02001497',
        '1QL' => 'E02001497',
        '1QP' => 'E02001497',
        '1QR' => 'E02001497',
        '1QS' => 'E02001495',
        '1QT' => 'E02001497',
        '1QU' => 'E02001497',
        '1QX' => 'E02001493',
        '1QY' => 'E02001497',
        '1QZ' => 'E02001493',
        '1RA' => 'E02001497',
        '1RB' => 'E02001497',
        '1RD' => 'E02001493',
        '1RE' => 'E02001493',
        '1RF' => 'E02001493',
        '1RG' => 'E02001497',
        '1RJ' => 'E02001497',
        '1RL' => 'E02001497',
        '1RN' => 'E02001497',
        '1RP' => 'E02001493',
        '1RQ' => 'E02001497',
        '1RR' => 'E02001493',
        '1RS' => 'E02001493',
        '1RT' => 'E02001497',
        '1RU' => 'E02001497',
        '1RW' => 'E02001493',
        '1RX' => 'E02001497',
        '1RY' => 'E02001493',
        '1SA' => 'E02001493',
        '1SB' => 'E02001493',
        '1SD' => 'E02001493',
        '1SE' => 'E02001493',
        '1TP' => 'E02001493',
        '2AD' => 'E02001493',
        '2AE' => 'E02001493',
        '2AF' => 'E02001493',
        '2AG' => 'E02001493',
        '2AJ' => 'E02001497',
        '2AL' => 'E02001493',
        '2AN' => 'E02001493',
        '2AQ' => 'E02001493',
        '2AS' => 'E02001493',
        '2AT' => 'E02001493',
        '2AU' => 'E02001493',
        '2AW' => 'E02001493',
        '2AX' => 'E02001493',
        '2AY' => 'E02001493',
        '2AZ' => 'E02001493',
        '2BA' => 'E02001493',
        '2BB' => 'E02001493',
        '2BD' => 'E02001493',
        '2BE' => 'E02001493',
        '2BG' => 'E02001493',
        '2BH' => 'E02001493',
        '2BJ' => 'E02001493',
        '2BL' => 'E02001493',
        '2BN' => 'E02001493',
        '2BP' => 'E02001493',
        '2BQ' => 'E02001497',
        '2BR' => 'E02001493',
        '2BS' => 'E02001493',
        '2BT' => 'E02001493',
        '2BU' => 'E02001495',
        '2BW' => 'E02001493',
        '2BX' => 'E02001495',
        '2BY' => 'E02001495',
        '2BZ' => 'E02001493',
        '2DA' => 'E02001495',
        '2DB' => 'E02001495',
        '2DD' => 'E02001495',
        '2DE' => 'E02001495',
        '2DF' => 'E02001495',
        '2DG' => 'E02001495',
        '2DH' => 'E02001495',
        '2DJ' => 'E02001495',
        '2DL' => 'E02001495',
        '2DN' => 'E02001495',
        '2DP' => 'E02001495',
        '2DQ' => 'E02001495',
        '2DR' => 'E02001495',
        '2DS' => 'E02001495',
        '2DT' => 'E02001493',
        '2DU' => 'E02001493',
        '2DW' => 'E02001495',
        '2DX' => 'E02001495',
        '2DY' => 'E02001495',
        '2DZ' => 'E02001495',
        '2EA' => 'E02001495',
        '2EB' => 'E02001493',
        '2ED' => 'E02001493',
        '2EE' => 'E02001493',
        '2EF' => 'E02001493',
        '2EG' => 'E02001493',
        '2EL' => 'E02001493',
        '2EN' => 'E02001493',
        '2EP' => 'E02001493',
        '2EQ' => 'E02001493',
        '2ER' => 'E02001495',
        '2ES' => 'E02001493',
        '2EU' => 'E02001493',
        '2EW' => 'E02001495',
        '2EX' => 'E02001493',
        '2NN' => 'E02001493',
        '3SZ' => 'E02001493',
        '3TA' => 'E02001493',
        '3TB' => 'E02001493',
        '3TD' => 'E02001493',
        '3TE' => 'E02001493',
        '3TF' => 'E02001493',
        '3TL' => 'E02001493',
        '3TZ' => 'E02001493',
        '3UN' => 'E02001493',
        '3UP' => 'E02001493',
        '3UR' => 'E02001493',
        '3UT' => 'E02001493',
        '3UU' => 'E02001493',
        '3UW' => 'E02001493',
        '3UX' => 'E02001493',
        '3UY' => 'E02001493',
        '3UZ' => 'E02001493',
        '3XD' => 'E02001493',
        '3XE' => 'E02001493',
        '3XF' => 'E02001493',
        '3XG' => 'E02001493',
        '3XH' => 'E02001493',
        '3XJ' => 'E02001493',
        '3XL' => 'E02001493',
        '3XN' => 'E02001493',
        '3XP' => 'E02001493',
        '3XQ' => 'E02001493',
        '3XR' => 'E02001493',
        '3XS' => 'E02001493',
        '3XT' => 'E02001493',
        '3XU' => 'E02001493',
        '3XW' => 'E02001493',
        '3XX' => 'E02001493',
        '3XY' => 'E02001493',
        '3XZ' => 'E02001493',
        '3YA' => 'E02001493',
        '3YB' => 'E02001493',
        '3YD' => 'E02001493',
        '3YE' => 'E02001493',
        '3YF' => 'E02001493',
        '3YG' => 'E02001493',
        '3YH' => 'E02001493',
        '3YJ' => 'E02001493',
        '3YL' => 'E02001493',
        '3YN' => 'E02001493',
        '3YP' => 'E02001493',
        '3YQ' => 'E02001493',
        '3YR' => 'E02001493',
        '3YS' => 'E02001493',
        '3YT' => 'E02001493',
        '3YU' => 'E02001493',
        '3YW' => 'E02001493',
        '3YX' => 'E02001493',
        '3YZ' => 'E02001493',
        '4LY' => 'E02001493',
        '4LZ' => 'E02001493',
        '4NA' => 'E02001497',
        '4NB' => 'E02001495',
        '4ND' => 'E02001497',
        '4NE' => 'E02001495',
        '4NF' => 'E02001495',
        '4NG' => 'E02001495',
        '4NH' => 'E02001495',
        '4NJ' => 'E02001498',
        '4NL' => 'E02001497',
        '4NN' => 'E02001495',
        '4NP' => 'E02001495',
        '4NQ' => 'E02001495',
        '4NR' => 'E02001495',
        '4NS' => 'E02001495',
        '4NT' => 'E02001495',
        '4NU' => 'E02001495',
        '4NW' => 'E02001495',
        '4NX' => 'E02001495',
        '4NY' => 'E02001495',
        '4NZ' => 'E02001495',
        '4PA' => 'E02001495',
        '4PB' => 'E02001493',
        '4PD' => 'E02001495',
        '4PE' => 'E02001495',
        '4PF' => 'E02001495',
        '4PG' => 'E02001493',
        '4PH' => 'E02001495',
        '4PJ' => 'E02001495',
        '4PL' => 'E02001495',
        '4PN' => 'E02001493',
        '4PP' => 'E02001493',
        '4PQ' => 'E02001493',
        '4PR' => 'E02001493',
        '4PS' => 'E02001493',
        '4PT' => 'E02001495',
        '4PU' => 'E02001495',
        '4PW' => 'E02001493',
        '4PX' => 'E02001495',
        '4PY' => 'E02001495',
        '4PZ' => 'E02001495',
        '4QA' => 'E02001495',
        '4QB' => 'E02001495',
        '4QD' => 'E02001495',
        '4QE' => 'E02001495',
        '4QF' => 'E02001495',
        '4QG' => 'E02001493',
        '4QH' => 'E02001493',
        '4QJ' => 'E02001493',
        '4QL' => 'E02001493',
        '4QN' => 'E02001493',
        '4QP' => 'E02001495',
        '4QQ' => 'E02001487',
        '4QR' => 'E02001495',
        '4QS' => 'E02001493',
        '4QT' => 'E02001495',
        '4QU' => 'E02001495',
        '4QW' => 'E02001493',
        '4QX' => 'E02001493',
        '4QY' => 'E02001495',
        '4QZ' => 'E02001493',
        '4RA' => 'E02001493',
        '4RB' => 'E02001493',
        '4RD' => 'E02001493',
        '4RE' => 'E02001493',
        '4RF' => 'E02001495',
        '4RG' => 'E02001495',
        '4RH' => 'E02001495',
        '4RJ' => 'E02001495',
        '4RL' => 'E02001495',
        '4RN' => 'E02001498',
        '4RQ' => 'E02001495',
        '4RR' => 'E02001493',
        '4RS' => 'E02001493',
        '4RT' => 'E02001498',
        '4RU' => 'E02001493',
        '4RW' => 'E02001495',
        '4RX' => 'E02001493',
        '4RY' => 'E02001493',
        '4RZ' => 'E02001493',
        '4SA' => 'E02001493',
        '4SB' => 'E02001498',
        '4SD' => 'E02001498',
        '5ET' => 'E02001487',
        '5LA' => 'E02001487',
        '5LB' => 'E02001487',
        '5LD' => 'E02001487',
        '5LE' => 'E02001487',
        '5LF' => 'E02001487',
        '5LG' => 'E02001487',
        '5LH' => 'E02001487',
        '5LJ' => 'E02001487',
        '5LL' => 'E02001487',
        '5LN' => 'E02001487',
        '5LP' => 'E02001487',
        '5LQ' => 'E02001487',
        '5LR' => 'E02001487',
        '5LS' => 'E02001487',
        '5LT' => 'E02001487',
        '5LU' => 'E02001487',
        '5LW' => 'E02001487',
        '5LX' => 'E02001487',
        '5LY' => 'E02001487',
        '5LZ' => 'E02001487',
        '5NA' => 'E02001487',
        '5NB' => 'E02001487',
        '5ND' => 'E02001487',
        '5NE' => 'E02001487',
        '5NF' => 'E02001487',
        '5NG' => 'E02001487',
        '5NH' => 'E02001493',
        '5NJ' => 'E02001487',
        '5NL' => 'E02001493',
        '5NN' => 'E02001493',
        '5NP' => 'E02001487',
        '5NQ' => 'E02001493',
        '5NR' => 'E02001493',
        '5NS' => 'E02001493',
        '5NT' => 'E02001493',
        '5NU' => 'E02001487',
        '5NW' => 'E02001493',
        '5NX' => 'E02001493',
        '5NY' => 'E02001493',
        '5NZ' => 'E02001493',
        '5PA' => 'E02001493',
        '5PB' => 'E02001493',
        '5PD' => 'E02001493',
        '5PE' => 'E02001493',
        '5PF' => 'E02001493',
        '5PG' => 'E02001487',
        '5PH' => 'E02001493',
        '5PJ' => 'E02001493',
        '5PL' => 'E02001493',
        '5PN' => 'E02001487',
        '5PP' => 'E02001493',
        '5PQ' => 'E02001487',
        '5PR' => 'E02001493',
        '5PS' => 'E02001493',
        '5PT' => 'E02001487',
        '5PU' => 'E02001487',
        '5PW' => 'E02001487',
        '5PX' => 'E02001487',
        '5PY' => 'E02001487',
        '5PZ' => 'E02001487',
        '5QA' => 'E02001487',
        '5QB' => 'E02001487',
        '6NY' => 'E02001487',
        '6NZ' => 'E02001487',
        '6PA' => 'E02001487',
        '6PB' => 'E02001487',
        '6PD' => 'E02001487',
        '6PE' => 'E02001487',
        '6PF' => 'E02001487',
        '6PG' => 'E02001493',
        '6PH' => 'E02001487',
        '6PJ' => 'E02001487',
        '6PL' => 'E02001487',
        '6PN' => 'E02001487',
        '6PP' => 'E02001488',
        '6PQ' => 'E02001487',
        '6PR' => 'E02001487',
        '6PS' => 'E02001495',
        '6PU' => 'E02001487',
        '6PW' => 'E02001495',
        '6PX' => 'E02001495',
        '6PY' => 'E02001495',
        '6PZ' => 'E02001495',
        '6QA' => 'E02001495',
        '6QB' => 'E02001495',
        '6QD' => 'E02001495',
        '6QE' => 'E02001495',
        '6QF' => 'E02001495',
        '6QG' => 'E02001495',
        '6QH' => 'E02001495',
        '6QJ' => 'E02001495',
        '6QL' => 'E02001495',
        '6QN' => 'E02001495',
        '6QP' => 'E02001495',
        '6QQ' => 'E02001488',
        '6QR' => 'E02001488',
        '6QS' => 'E02001487',
        '6QT' => 'E02001495',
        '6QU' => 'E02001495',
        '6QW' => 'E02001488',
        '6QX' => 'E02001495',
        '6QY' => 'E02001495',
        '6QZ' => 'E02001495',
        '6RA' => 'E02001495',
        '6RB' => 'E02001495',
        '6RD' => 'E02001488',
        '6RE' => 'E02001487',
        '6RF' => 'E02001487',
        '6RG' => 'E02001495',
        '6RH' => 'E02001495',
        '6RJ' => 'E02001495',
        '6RL' => 'E02001495',
        '6RN' => 'E02001495',
        '6RP' => 'E02001495',
        '6RQ' => 'E02001495',
        '6RR' => 'E02001495',
        '6RS' => 'E02001495',
        '6RT' => 'E02001495',
        '6RU' => 'E02001495',
        '6RW' => 'E02001495',
        '6RX' => 'E02001495',
        '6RY' => 'E02001495',
        '6RZ' => 'E02001495',
        '6SA' => 'E02001495',
        '6SB' => 'E02001495',
        '6SD' => 'E02001495',
        '6SE' => 'E02001495',
        '6SF' => 'E02001495',
        '6SG' => 'E02001495',
        '6SH' => 'E02001495',
        '6SQ' => 'E02001495',
        '6SR' => 'E02001495',
        '6SS' => 'E02001488',
        '6ST' => 'E02001495',
        '6SU' => 'E02001495',
        '6SW' => 'E02001495',
        '6SX' => 'E02001495',
        '6SY' => 'E02001495',
        '6SZ' => 'E02001495',
        '7HA' => 'E02001487',
        '7HB' => 'E02001487',
        '7HD' => 'E02001487',
        '7HE' => 'E02001487',
        '7HF' => 'E02001487',
        '7HG' => 'E02001487',
        '7HH' => 'E02001487',
        '7HJ' => 'E02001487',
        '7HL' => 'E02001487',
        '7HN' => 'E02001487',
        '7HP' => 'E02001487',
        '7HQ' => 'E02001487',
        '7HR' => 'E02001487',
        '7HS' => 'E02001487',
        '7HT' => 'E02001487',
        '7HU' => 'E02001487',
        '7HW' => 'E02001487',
        '7HX' => 'E02001487',
        '7HY' => 'E02001487',
        '7HZ' => 'E02001487',
        '7JA' => 'E02001487',
        '7JB' => 'E02001487',
        '7JD' => 'E02001487',
        '7JE' => 'E02001487',
        '7JF' => 'E02001487',
        '7JG' => 'E02001487',
        '7JH' => 'E02001487',
        '7JJ' => 'E02001487',
        '7JL' => 'E02001488',
        '7JN' => 'E02001488',
        '7JP' => 'E02001488',
        '7JQ' => 'E02001487',
        '7JR' => 'E02001488',
        '7JS' => 'E02001488',
        '7JT' => 'E02001488',
        '7JU' => 'E02001487',
        '7JW' => 'E02001488',
        '7JX' => 'E02001488',
        '7JY' => 'E02001488',
        '7JZ' => 'E02001487',
        '7LA' => 'E02001487',
        '7LB' => 'E02001488',
        '7LD' => 'E02001487',
        '7LE' => 'E02001487',
        '7LF' => 'E02001488',
        '7LG' => 'E02001488',
        '7LH' => 'E02001488',
        '7LJ' => 'E02001487',
        '7LN' => 'E02001487',
        '7LP' => 'E02001488',
        '7LQ' => 'E02001488',
        '7LS' => 'E02001487',
        '7LT' => 'E02001487',
        '7LU' => 'E02001487',
        '8JR' => 'E02001496',
        '8JS' => 'E02001496',
        '8JT' => 'E02001496',
        '8JU' => 'E02001496',
        '8JX' => 'E02001496',
        '8JY' => 'E02001496',
        '8JZ' => 'E02001496',
        '8LA' => 'E02001496',
        '8LB' => 'E02001496',
        '8LD' => 'E02001495',
        '8LE' => 'E02001496',
        '8LF' => 'E02001496',
        '8LG' => 'E02001496',
        '8LH' => 'E02001496',
        '8LJ' => 'E02001496',
        '8LL' => 'E02001496',
        '8LN' => 'E02001496',
        '8LP' => 'E02001496',
        '8LQ' => 'E02001496',
        '8LR' => 'E02001496',
        '8LS' => 'E02001496',
        '8LT' => 'E02001496',
        '8LU' => 'E02001496',
        '8LW' => 'E02001496',
        '8LX' => 'E02001496',
        '8LY' => 'E02001488',
        '8LZ' => 'E02001495',
        '8NA' => 'E02001495',
        '8NB' => 'E02001495',
        '8ND' => 'E02001496',
        '8NE' => 'E02001496',
        '8NF' => 'E02001496',
        '8NG' => 'E02001496',
        '8NH' => 'E02001496',
        '8NJ' => 'E02001498',
        '8NL' => 'E02001498',
        '8NN' => 'E02001498',
        '8NP' => 'E02001495',
        '8NQ' => 'E02001495',
        '8NR' => 'E02001495',
        '8NS' => 'E02001495',
        '8NT' => 'E02001495',
        '8NU' => 'E02001495',
        '8NW' => 'E02001495',
        '8NX' => 'E02001495',
        '8NY' => 'E02001495',
        '8NZ' => 'E02001495',
        '8PA' => 'E02001495',
        '8PD' => 'E02001496',
        '8PE' => 'E02001496',
        '8PF' => 'E02001496',
        '8PG' => 'E02001496',
        '8PH' => 'E02001496',
        '8PJ' => 'E02001496',
        '8PL' => 'E02001496',
        '8PN' => 'E02001496',
        '8PP' => 'E02001496',
        '8PQ' => 'E02001496',
        '8PR' => 'E02001496',
        '8PS' => 'E02001496',
        '8PT' => 'E02001496',
        '8PU' => 'E02001496',
        '8PW' => 'E02001496',
        '8PX' => 'E02001496',
        '8PY' => 'E02001496',
        '8PZ' => 'E02001490',
        '8QA' => 'E02001496',
        '8QD' => 'E02001496',
        '8QE' => 'E02001496',
        '8QG' => 'E02001496',
        '8QH' => 'E02001496',
        '8QJ' => 'E02001496',
        '8QL' => 'E02001496',
        '8QN' => 'E02001496',
        '8QQ' => 'E02001490',
        '8QR' => 'E02001496',
        '8QS' => 'E02001496',
        '8QT' => 'E02001496',
        '8QU' => 'E02001496',
        '8QX' => 'E02001496',
        '8QY' => 'E02001496',
        '9GD' => 'E02001488',
        '9GE' => 'E02001488',
        '9GF' => 'E02001496',
        '9GL' => 'E02001488',
        '9GN' => 'E02001488',
        '9GP' => 'E02001496',
        '9GQ' => 'E02001488',
        '9JA' => 'E02001488',
        '9JB' => 'E02001488',
        '9JD' => 'E02001488',
        '9JE' => 'E02001488',
        '9JF' => 'E02001488',
        '9JG' => 'E02001488',
        '9JH' => 'E02001488',
        '9JJ' => 'E02001488',
        '9JL' => 'E02001488',
        '9JN' => 'E02001488',
        '9JP' => 'E02001488',
        '9JQ' => 'E02001487',
        '9JR' => 'E02001488',
        '9JS' => 'E02001488',
        '9JT' => 'E02001488',
        '9JU' => 'E02001488',
        '9JW' => 'E02001488',
        '9JX' => 'E02001488',
        '9JY' => 'E02001488',
        '9JZ' => 'E02001488',
        '9LA' => 'E02001488',
        '9LB' => 'E02001488',
        '9LD' => 'E02001488',
        '9LE' => 'E02001488',
        '9LF' => 'E02001496',
        '9LG' => 'E02001488',
        '9LH' => 'E02001488',
        '9LJ' => 'E02001488',
        '9LL' => 'E02001488',
        '9LN' => 'E02001488',
        '9LP' => 'E02001488',
        '9LQ' => 'E02001488',
        '9LR' => 'E02001488',
        '9LS' => 'E02001488',
        '9LU' => 'E02001488',
        '9LW' => 'E02001488',
        '9LX' => 'E02001488',
        '9LY' => 'E02001488',
        '9LZ' => 'E02001488',
        '9NA' => 'E02001488',
        '9NB' => 'E02001488',
        '9ND' => 'E02001488',
        '9NE' => 'E02001488',
        '9NF' => 'E02001488',
        '9NG' => 'E02001488',
        '9NH' => 'E02001488',
        '9NJ' => 'E02001488',
        '9NL' => 'E02001488',
        '9NN' => 'E02001488',
        '9NP' => 'E02001488',
        '9NQ' => 'E02001488',
        '9NR' => 'E02001488',
        '9NS' => 'E02001488',
        '9NT' => 'E02001488',
        '9NU' => 'E02001488',
        '9NW' => 'E02001488',
        '9NX' => 'E02001496',
        '9NY' => 'E02001496',
        '9NZ' => 'E02001496',
        '9PA' => 'E02001496',
        '9PB' => 'E02001496',
        '9PD' => 'E02001496',
        '9PE' => 'E02001496',
        '9PF' => 'E02001496',
        '9PG' => 'E02001488',
        '9PH' => 'E02001496',
        '9PJ' => 'E02001488',
        '9PL' => 'E02001488',
        '9PN' => 'E02001488',
        '9PP' => 'E02001496',
        '9PQ' => 'E02001488',
        '9PR' => 'E02001488',
        '9PS' => 'E02001488',
        '9PT' => 'E02001488',
        '9PU' => 'E02001488',
        '9PW' => 'E02001488',
        '9PX' => 'E02001488',
        '9PY' => 'E02001488',
        '9PZ' => 'E02001488',
        '9QA' => 'E02001488',
        '9QB' => 'E02001488',
        '9QD' => 'E02001487',
        '9QE' => 'E02001488',
        '9QF' => 'E02001488',
        '9QH' => 'E02001488',
        '9QJ' => 'E02001488',
        '9QP' => 'E02001488',
        '9QQ' => 'E02001488',
        '9QR' => 'E02001488',
        '9QS' => 'E02001488',
        '9QT' => 'E02001488',
        '9QU' => 'E02001488',
        '9QW' => 'E02001488',
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