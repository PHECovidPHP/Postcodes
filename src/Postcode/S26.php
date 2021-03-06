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
final class S26
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AB' => 'E02001610',
        '1AD' => 'E02001610',
        '1DJ' => 'E02001610',
        '1DL' => 'E02001610',
        '1DP' => 'E02001609',
        '1HA' => 'E02001610',
        '1HB' => 'E02001610',
        '1HD' => 'E02001610',
        '1HE' => 'E02001610',
        '1HF' => 'E02001610',
        '1HG' => 'E02001610',
        '1HH' => 'E02001610',
        '1HJ' => 'E02001610',
        '1HL' => 'E02001610',
        '1HN' => 'E02001610',
        '1HP' => 'E02001610',
        '1HQ' => 'E02001610',
        '1HR' => 'E02001610',
        '1HS' => 'E02001610',
        '1HT' => 'E02001610',
        '1HU' => 'E02001610',
        '1HW' => 'E02001610',
        '1HX' => 'E02001610',
        '1HY' => 'E02001610',
        '1HZ' => 'E02001610',
        '1JA' => 'E02001610',
        '1JB' => 'E02001610',
        '1JD' => 'E02001610',
        '1JE' => 'E02001610',
        '1JF' => 'E02001610',
        '1JG' => 'E02001610',
        '1JH' => 'E02001610',
        '1JJ' => 'E02001610',
        '1JL' => 'E02001610',
        '1JN' => 'E02001610',
        '1JP' => 'E02001610',
        '1JQ' => 'E02001610',
        '1JR' => 'E02001610',
        '1JS' => 'E02001610',
        '1JT' => 'E02001610',
        '1JU' => 'E02001610',
        '1JW' => 'E02001610',
        '1JX' => 'E02001610',
        '1JY' => 'E02001610',
        '1JZ' => 'E02001610',
        '1QP' => 'E02001609',
        '1QR' => 'E02001609',
        '1QS' => 'E02001571',
        '1QU' => 'E02001610',
        '2AA' => 'E02001607',
        '2AB' => 'E02001607',
        '2AD' => 'E02001607',
        '2AE' => 'E02001607',
        '2AF' => 'E02001608',
        '2AG' => 'E02001607',
        '2AH' => 'E02001608',
        '2AJ' => 'E02001607',
        '2AL' => 'E02001607',
        '2AN' => 'E02001607',
        '2AP' => 'E02001607',
        '2AQ' => 'E02001607',
        '2AR' => 'E02001607',
        '2AS' => 'E02001607',
        '2AT' => 'E02001607',
        '2AU' => 'E02001607',
        '2AW' => 'E02001607',
        '2AX' => 'E02001608',
        '2AY' => 'E02001607',
        '2AZ' => 'E02001607',
        '2BA' => 'E02001607',
        '2BB' => 'E02001607',
        '2BD' => 'E02001607',
        '2BE' => 'E02001607',
        '2BG' => 'E02001607',
        '2BH' => 'E02001607',
        '2BJ' => 'E02001607',
        '2BL' => 'E02001607',
        '2BN' => 'E02001607',
        '2BP' => 'E02001607',
        '2BQ' => 'E02001607',
        '2BR' => 'E02001607',
        '2BS' => 'E02001608',
        '2BT' => 'E02001607',
        '2BU' => 'E02001607',
        '2BW' => 'E02001607',
        '2BX' => 'E02001607',
        '2BY' => 'E02001607',
        '2BZ' => 'E02001607',
        '2DA' => 'E02001607',
        '2DB' => 'E02001607',
        '2DD' => 'E02001607',
        '2DE' => 'E02001607',
        '2DF' => 'E02001607',
        '2DG' => 'E02001607',
        '2DH' => 'E02001607',
        '2DJ' => 'E02001607',
        '2DL' => 'E02001608',
        '2DN' => 'E02001607',
        '2DP' => 'E02001607',
        '2DQ' => 'E02001607',
        '2DR' => 'E02001607',
        '2DS' => 'E02001607',
        '2DT' => 'E02001608',
        '2DU' => 'E02001607',
        '2DW' => 'E02001607',
        '2DX' => 'E02001607',
        '2DY' => 'E02001607',
        '2DZ' => 'E02001608',
        '2EA' => 'E02001607',
        '2EB' => 'E02001607',
        '2ED' => 'E02001607',
        '2EE' => 'E02001607',
        '2EF' => 'E02001607',
        '2EG' => 'E02001607',
        '2EH' => 'E02001608',
        '2EJ' => 'E02001607',
        '2EL' => 'E02001608',
        '2EN' => 'E02001608',
        '2EP' => 'E02001607',
        '2EQ' => 'E02001607',
        '2ER' => 'E02001607',
        '2ES' => 'E02001607',
        '2ET' => 'E02001608',
        '2EU' => 'E02001607',
        '2EW' => 'E02001607',
        '2EX' => 'E02001607',
        '2EY' => 'E02001607',
        '2EZ' => 'E02001607',
        '2FA' => 'E02001607',
        '2FB' => 'E02001607',
        '2FD' => 'E02001607',
        '2FE' => 'E02001607',
        '2FF' => 'E02001607',
        '2FG' => 'E02001607',
        '2FH' => 'E02001607',
        '2FJ' => 'E02001607',
        '2FL' => 'E02001607',
        '2FN' => 'E02001607',
        '2FP' => 'E02001607',
        '2FQ' => 'E02001607',
        '2FR' => 'E02001607',
        '2FS' => 'E02001607',
        '2FT' => 'E02001607',
        '2FU' => 'E02001607',
        '2FW' => 'E02001607',
        '2FX' => 'E02001607',
        '2FY' => 'E02001607',
        '2FZ' => 'E02001607',
        '2GA' => 'E02001607',
        '2GB' => 'E02001607',
        '2GD' => 'E02001607',
        '2GE' => 'E02001607',
        '2GF' => 'E02001607',
        '2GG' => 'E02001607',
        '2GH' => 'E02001608',
        '2GJ' => 'E02001608',
        '2GL' => 'E02001608',
        '2GN' => 'E02001608',
        '2GP' => 'E02001608',
        '2GQ' => 'E02001607',
        '2GR' => 'E02001607',
        '2GS' => 'E02001608',
        '2GT' => 'E02001607',
        '2GU' => 'E02001607',
        '2GW' => 'E02001608',
        '2GX' => 'E02001608',
        '2GY' => 'E02001608',
        '2GZ' => 'E02001607',
        '2HA' => 'E02001608',
        '2HB' => 'E02001608',
        '2QL' => 'E02001607',
        '2QW' => 'E02001607',
        '2RL' => 'E02001607',
        '2WW' => 'E02001609',
        '2WX' => 'E02001607',
        '2WY' => 'E02001607',
        '2WZ' => 'E02001607',
        '2XT' => 'E02001609',
        '2XU' => 'E02001571',
        '2XW' => 'E02001609',
        '2XX' => 'E02001609',
        '2XY' => 'E02001607',
        '2XZ' => 'E02001571',
        '2YU' => 'E02001607',
        '2YZ' => 'E02001609',
        '2ZU' => 'E02001609',
        '3AR' => 'E02001607',
        '3BX' => 'E02001571',
        '3BY' => 'E02001571',
        '3BZ' => 'E02001571',
        '3NF' => 'E02001607',
        '3NT' => 'E02001607',
        '3RA' => 'E02001603',
        '3RB' => 'E02001603',
        '3RE' => 'E02001603',
        '3RF' => 'E02001603',
        '3RG' => 'E02001603',
        '3RH' => 'E02001603',
        '3RJ' => 'E02001603',
        '3RT' => 'E02001603',
        '3RU' => 'E02001607',
        '3RW' => 'E02001607',
        '3RX' => 'E02001603',
        '3RZ' => 'E02001603',
        '3SA' => 'E02001607',
        '3SB' => 'E02001607',
        '3SD' => 'E02001607',
        '3UA' => 'E02001607',
        '3UB' => 'E02001607',
        '3UE' => 'E02001607',
        '3UF' => 'E02001607',
        '3US' => 'E02001607',
        '3UT' => 'E02001607',
        '3UZ' => 'E02001607',
        '3WY' => 'E02001609',
        '3WZ' => 'E02001609',
        '3XA' => 'E02001607',
        '3XB' => 'E02001603',
        '3XD' => 'E02001607',
        '3XE' => 'E02001607',
        '3XF' => 'E02001607',
        '3XG' => 'E02001603',
        '3XH' => 'E02001603',
        '3XJ' => 'E02001603',
        '3XL' => 'E02001603',
        '3XN' => 'E02001603',
        '3XP' => 'E02001603',
        '3XQ' => 'E02001607',
        '3XR' => 'E02001607',
        '3XS' => 'E02001603',
        '3XT' => 'E02001607',
        '3XU' => 'E02001603',
        '3XW' => 'E02001603',
        '3XX' => 'E02001603',
        '3XY' => 'E02001603',
        '3XZ' => 'E02001603',
        '3YA' => 'E02001603',
        '3YB' => 'E02001603',
        '3YD' => 'E02001603',
        '3YE' => 'E02001603',
        '3YF' => 'E02001603',
        '3YG' => 'E02001603',
        '3YH' => 'E02001603',
        '3YJ' => 'E02001603',
        '3YL' => 'E02001607',
        '3YN' => 'E02001607',
        '3YR' => 'E02001609',
        '4BT' => 'E02001608',
        '4BU' => 'E02001608',
        '4BW' => 'E02001609',
        '4BX' => 'E02001608',
        '4BY' => 'E02001571',
        '4BZ' => 'E02001608',
        '4NA' => 'E02001607',
        '4NB' => 'E02001607',
        '4ND' => 'E02001607',
        '4NE' => 'E02001607',
        '4NF' => 'E02001608',
        '4NG' => 'E02001608',
        '4NH' => 'E02001608',
        '4NJ' => 'E02001608',
        '4NN' => 'E02001608',
        '4NP' => 'E02001608',
        '4NQ' => 'E02001608',
        '4NR' => 'E02001608',
        '4NS' => 'E02001608',
        '4NU' => 'E02001608',
        '4NW' => 'E02001608',
        '4NX' => 'E02001608',
        '4NY' => 'E02001608',
        '4NZ' => 'E02001608',
        '4PA' => 'E02001608',
        '4QA' => 'E02001608',
        '4QB' => 'E02001607',
        '4QD' => 'E02001607',
        '4QE' => 'E02001607',
        '4QN' => 'E02001608',
        '4QY' => 'E02001571',
        '4QZ' => 'E02001571',
        '4RA' => 'E02001607',
        '4RB' => 'E02001607',
        '4RD' => 'E02001607',
        '4RL' => 'E02001607',
        '4RN' => 'E02001607',
        '4RP' => 'E02001607',
        '4RQ' => 'E02001607',
        '4RR' => 'E02001607',
        '4RS' => 'E02001607',
        '4RY' => 'E02001608',
        '4RZ' => 'E02001608',
        '4SA' => 'E02001604',
        '4SB' => 'E02001604',
        '4SD' => 'E02001608',
        '4SE' => 'E02001604',
        '4SF' => 'E02001603',
        '4SG' => 'E02001608',
        '4SH' => 'E02001608',
        '4SJ' => 'E02001608',
        '4SL' => 'E02001608',
        '4SN' => 'E02001608',
        '4SP' => 'E02001608',
        '4SQ' => 'E02001608',
        '4SR' => 'E02001608',
        '4SS' => 'E02001608',
        '4ST' => 'E02001608',
        '4SU' => 'E02001604',
        '4SW' => 'E02001608',
        '4SX' => 'E02001604',
        '4SY' => 'E02001608',
        '4SZ' => 'E02001604',
        '4TA' => 'E02001607',
        '4TB' => 'E02001607',
        '4TD' => 'E02001607',
        '4TE' => 'E02001607',
        '4TF' => 'E02001608',
        '4TG' => 'E02001608',
        '4TH' => 'E02001607',
        '4TJ' => 'E02001607',
        '4TL' => 'E02001604',
        '4TN' => 'E02001607',
        '4TP' => 'E02001607',
        '4TQ' => 'E02001607',
        '4TR' => 'E02001607',
        '4TS' => 'E02001607',
        '4TT' => 'E02001608',
        '4TU' => 'E02001608',
        '4TW' => 'E02001607',
        '4TX' => 'E02001608',
        '4TY' => 'E02001607',
        '4TZ' => 'E02001608',
        '4UA' => 'E02001608',
        '4UB' => 'E02001607',
        '4UD' => 'E02001607',
        '4UE' => 'E02001607',
        '4UF' => 'E02001608',
        '4UG' => 'E02001607',
        '4UH' => 'E02001608',
        '4UJ' => 'E02001607',
        '4UL' => 'E02001608',
        '4UN' => 'E02001608',
        '4UP' => 'E02001608',
        '4UQ' => 'E02001608',
        '4UR' => 'E02001608',
        '4US' => 'E02001608',
        '4UT' => 'E02001607',
        '4UU' => 'E02001607',
        '4UW' => 'E02001607',
        '4UX' => 'E02001604',
        '4UY' => 'E02001604',
        '4UZ' => 'E02001608',
        '4WA' => 'E02001607',
        '4WB' => 'E02001607',
        '4WD' => 'E02001607',
        '4WE' => 'E02001607',
        '4WF' => 'E02001607',
        '4WG' => 'E02001607',
        '4WH' => 'E02001607',
        '4WJ' => 'E02001607',
        '4WL' => 'E02001608',
        '4WN' => 'E02001607',
        '4WW' => 'E02001609',
        '4WX' => 'E02001609',
        '4WY' => 'E02001607',
        '4WZ' => 'E02001609',
        '4XA' => 'E02001608',
        '4XB' => 'E02001608',
        '4XZ' => 'E02001609',
        '5AA' => 'E02001608',
        '5AB' => 'E02001608',
        '5BX' => 'E02001609',
        '5BY' => 'E02001608',
        '5BZ' => 'E02001608',
        '5LB' => 'E02001608',
        '5LE' => 'E02001608',
        '5LH' => 'E02001608',
        '5LL' => 'E02001608',
        '5LN' => 'E02001608',
        '5LP' => 'E02001610',
        '5LQ' => 'E02001610',
        '5LS' => 'E02001610',
        '5LT' => 'E02001610',
        '5LX' => 'E02001608',
        '5LY' => 'E02001608',
        '5LZ' => 'E02001608',
        '5NA' => 'E02001608',
        '5NB' => 'E02001610',
        '5ND' => 'E02001608',
        '5NF' => 'E02001608',
        '5NS' => 'E02001610',
        '5NT' => 'E02001610',
        '5NU' => 'E02001608',
        '5NW' => 'E02001610',
        '5NX' => 'E02001608',
        '5NY' => 'E02001608',
        '5NZ' => 'E02001608',
        '5PA' => 'E02001610',
        '5PB' => 'E02001608',
        '5PD' => 'E02001608',
        '5PE' => 'E02001608',
        '5PF' => 'E02001608',
        '5PG' => 'E02001608',
        '5PH' => 'E02001608',
        '5PJ' => 'E02001608',
        '5PL' => 'E02001610',
        '5PN' => 'E02001608',
        '5PP' => 'E02001610',
        '5PQ' => 'E02001608',
        '5PR' => 'E02001608',
        '5PS' => 'E02001608',
        '5PT' => 'E02001610',
        '5PU' => 'E02001610',
        '5PW' => 'E02001608',
        '5PX' => 'E02001610',
        '5PY' => 'E02001608',
        '5PZ' => 'E02001608',
        '5QA' => 'E02001608',
        '5QB' => 'E02001608',
        '5QD' => 'E02001608',
        '5QE' => 'E02001610',
        '5QF' => 'E02001610',
        '5QG' => 'E02001610',
        '5QH' => 'E02001608',
        '5QJ' => 'E02001608',
        '5QL' => 'E02001608',
        '5QN' => 'E02001608',
        '5QP' => 'E02001610',
        '5QQ' => 'E02001608',
        '5QR' => 'E02001610',
        '5QS' => 'E02001608',
        '5QT' => 'E02001608',
        '5QU' => 'E02001608',
        '5QW' => 'E02001608',
        '5RB' => 'E02001608',
        '5RD' => 'E02001608',
        '5RE' => 'E02001608',
        '5RF' => 'E02001608',
        '5RG' => 'E02001608',
        '5RH' => 'E02001608',
        '5RL' => 'E02001608',
        '5RN' => 'E02001608',
        '5RP' => 'E02001608',
        '5RR' => 'E02001608',
        '5RS' => 'E02001608',
        '5RT' => 'E02001608',
        '5RU' => 'E02001608',
        '5RW' => 'E02001608',
        '5SA' => 'E02001608',
        '5UA' => 'E02001608',
        '5UX' => 'E02001609',
        '5WJ' => 'E02001609',
        '5WN' => 'E02001571',
        '5XA' => 'E02001609',
        '5YA' => 'E02001571',
        '5YB' => 'E02001609',
        '6BU' => 'E02001609',
        '6BW' => 'E02001571',
        '6BX' => 'E02001609',
        '6BY' => 'E02001609',
        '6BZ' => 'E02001609',
        '6LD' => 'E02001610',
        '6LF' => 'E02001610',
        '6LG' => 'E02001610',
        '6LJ' => 'E02001610',
        '6LN' => 'E02001610',
        '6LR' => 'E02001610',
        '6LU' => 'E02001610',
        '6LW' => 'E02001610',
        '6LX' => 'E02001608',
        '6NA' => 'E02001610',
        '6NB' => 'E02001610',
        '6ND' => 'E02001610',
        '6NE' => 'E02001610',
        '6NF' => 'E02001610',
        '6NG' => 'E02001609',
        '6NH' => 'E02001608',
        '6NJ' => 'E02001610',
        '6NL' => 'E02001610',
        '6NN' => 'E02001609',
        '6NP' => 'E02001609',
        '6NQ' => 'E02001609',
        '6NR' => 'E02001610',
        '6NS' => 'E02001609',
        '6NU' => 'E02001610',
        '6PB' => 'E02001610',
        '6PD' => 'E02001610',
        '6PQ' => 'E02001610',
        '6PR' => 'E02001610',
        '6PT' => 'E02001610',
        '6PU' => 'E02001608',
        '6QA' => 'E02001610',
        '6QB' => 'E02001610',
        '6QE' => 'E02001610',
        '6QF' => 'E02001610',
        '6QJ' => 'E02001610',
        '6QL' => 'E02001608',
        '6QN' => 'E02001610',
        '6QP' => 'E02001610',
        '6QQ' => 'E02001610',
        '6QR' => 'E02001610',
        '6QS' => 'E02001610',
        '6QT' => 'E02001610',
        '6QU' => 'E02001610',
        '6QW' => 'E02001610',
        '6QX' => 'E02001610',
        '6QY' => 'E02001610',
        '6RA' => 'E02001610',
        '6RB' => 'E02001608',
        '6RD' => 'E02001608',
        '6RE' => 'E02001608',
        '6RH' => 'E02001608',
        '6RJ' => 'E02001608',
        '6RL' => 'E02001608',
        '6RN' => 'E02001608',
        '6RP' => 'E02001610',
        '6RQ' => 'E02001610',
        '6RX' => 'E02001610',
        '6RY' => 'E02001610',
        '6SA' => 'E02001610',
        '6SB' => 'E02001610',
        '6SD' => 'E02001610',
        '6SE' => 'E02001610',
        '6SF' => 'E02001610',
        '6SG' => 'E02001610',
        '6SH' => 'E02001610',
        '6SJ' => 'E02001610',
        '6SL' => 'E02001610',
        '6SN' => 'E02001610',
        '6SP' => 'E02001610',
        '6SQ' => 'E02001610',
        '6SR' => 'E02001610',
        '6SS' => 'E02001610',
        '6ST' => 'E02001610',
        '6SU' => 'E02001610',
        '6SW' => 'E02001610',
        '6SZ' => 'E02004105',
        '6UY' => 'E02001610',
        '6WA' => 'E02001610',
        '6WY' => 'E02001609',
        '6WZ' => 'E02001610',
        '6YU' => 'E02001571',
        '6YW' => 'E02001609',
        '6ZP' => 'E02001571',
        '6ZR' => 'E02001609',
        '7AB' => 'E02001610',
        '7BY' => 'E02001610',
        '7BZ' => 'E02001610',
        '7UA' => 'E02001610',
        '7UH' => 'E02001610',
        '7UJ' => 'E02001610',
        '7UL' => 'E02001610',
        '7UN' => 'E02001610',
        '7UP' => 'E02001610',
        '7WA' => 'E02001610',
        '7WB' => 'E02001610',
        '7WD' => 'E02001610',
        '7WE' => 'E02001610',
        '7WF' => 'E02001610',
        '7WG' => 'E02001610',
        '7WL' => 'E02001610',
        '7WY' => 'E02001610',
        '7XA' => 'E02001610',
        '7XB' => 'E02001610',
        '7XD' => 'E02001610',
        '7XE' => 'E02001610',
        '7XF' => 'E02001610',
        '7XG' => 'E02001610',
        '7XH' => 'E02001610',
        '7XJ' => 'E02001610',
        '7XL' => 'E02001610',
        '7XN' => 'E02001610',
        '7XP' => 'E02001610',
        '7XQ' => 'E02001610',
        '7XR' => 'E02001610',
        '7XS' => 'E02001610',
        '7XT' => 'E02001610',
        '7XU' => 'E02001610',
        '7XW' => 'E02001610',
        '7XX' => 'E02001610',
        '7XY' => 'E02001610',
        '7XZ' => 'E02001610',
        '7YA' => 'E02001610',
        '7YB' => 'E02001610',
        '7YD' => 'E02001610',
        '7YE' => 'E02001610',
        '7YF' => 'E02001610',
        '7YG' => 'E02001610',
        '7YH' => 'E02001610',
        '7YJ' => 'E02001610',
        '7YL' => 'E02001610',
        '7YN' => 'E02001610',
        '7YP' => 'E02001610',
        '7YQ' => 'E02001610',
        '7YR' => 'E02001610',
        '7YS' => 'E02001610',
        '7YT' => 'E02001610',
        '7YU' => 'E02001610',
        '7YW' => 'E02001610',
        '7YX' => 'E02001610',
        '7YY' => 'E02001610',
        '7YZ' => 'E02001610',
        '7ZA' => 'E02001610',
        '7ZD' => 'E02001610',
        '7ZE' => 'E02001610',
        '7ZN' => 'E02001610',
        '7ZS' => 'E02006843',
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
