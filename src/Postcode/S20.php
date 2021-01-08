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
final class S20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001666',
        '1AB' => 'E02001666',
        '1AD' => 'E02001666',
        '1AE' => 'E02001666',
        '1AF' => 'E02001666',
        '1AG' => 'E02001666',
        '1AH' => 'E02001604',
        '1AJ' => 'E02001666',
        '1AL' => 'E02001666',
        '1AN' => 'E02001666',
        '1AP' => 'E02001666',
        '1AQ' => 'E02001666',
        '1AR' => 'E02001666',
        '1AS' => 'E02001666',
        '1AT' => 'E02001666',
        '1AU' => 'E02001666',
        '1AW' => 'E02001666',
        '1AX' => 'E02001666',
        '1AY' => 'E02001666',
        '1AZ' => 'E02001666',
        '1BA' => 'E02001666',
        '1BB' => 'E02001666',
        '1BD' => 'E02001666',
        '1BE' => 'E02001666',
        '1BF' => 'E02001666',
        '1BG' => 'E02001666',
        '1BH' => 'E02001666',
        '1BJ' => 'E02001666',
        '1BL' => 'E02001666',
        '1BN' => 'E02001666',
        '1BP' => 'E02001666',
        '1BQ' => 'E02001666',
        '1BR' => 'E02001666',
        '1BS' => 'E02001666',
        '1BT' => 'E02001666',
        '1BU' => 'E02001673',
        '1BW' => 'E02001673',
        '1BX' => 'E02001666',
        '1BY' => 'E02001666',
        '1BZ' => 'E02001666',
        '1DA' => 'E02001666',
        '1DB' => 'E02001666',
        '1DD' => 'E02001673',
        '1DE' => 'E02001666',
        '1DF' => 'E02001666',
        '1DG' => 'E02001673',
        '1DH' => 'E02001673',
        '1DJ' => 'E02001604',
        '1DL' => 'E02001666',
        '1DN' => 'E02001673',
        '1DP' => 'E02001666',
        '1DQ' => 'E02001673',
        '1DR' => 'E02001673',
        '1DU' => 'E02001666',
        '1DW' => 'E02001666',
        '1DX' => 'E02001673',
        '1EA' => 'E02001673',
        '1EB' => 'E02001673',
        '1ED' => 'E02001673',
        '1EE' => 'E02001673',
        '1EF' => 'E02001673',
        '1EG' => 'E02001673',
        '1EH' => 'E02001673',
        '1EJ' => 'E02001673',
        '1EL' => 'E02001673',
        '1EN' => 'E02001673',
        '1EP' => 'E02001673',
        '1EQ' => 'E02001673',
        '1ER' => 'E02001673',
        '1ES' => 'E02001673',
        '1ET' => 'E02001673',
        '1EU' => 'E02001673',
        '1EW' => 'E02001673',
        '1EX' => 'E02001675',
        '1EY' => 'E02001675',
        '1EZ' => 'E02001675',
        '1FA' => 'E02001673',
        '1FB' => 'E02001666',
        '1FD' => 'E02001666',
        '1FE' => 'E02001666',
        '1FF' => 'E02001673',
        '1FG' => 'E02001666',
        '1FH' => 'E02001666',
        '1FJ' => 'E02001666',
        '1FL' => 'E02001666',
        '1FN' => 'E02001666',
        '1FP' => 'E02001666',
        '1FQ' => 'E02001666',
        '1FR' => 'E02001666',
        '1FS' => 'E02001666',
        '1FT' => 'E02001666',
        '1FU' => 'E02001675',
        '1FW' => 'E02001675',
        '1FX' => 'E02001666',
        '1FY' => 'E02001675',
        '1FZ' => 'E02001666',
        '1GA' => 'E02001673',
        '1GB' => 'E02001666',
        '1GD' => 'E02001666',
        '1GE' => 'E02001666',
        '1GF' => 'E02001673',
        '1GG' => 'E02001673',
        '1GP' => 'E02001673',
        '1GQ' => 'E02001673',
        '1GW' => 'E02001666',
        '1GX' => 'E02001675',
        '1GY' => 'E02001675',
        '1HA' => 'E02001673',
        '1HB' => 'E02001673',
        '1HD' => 'E02001673',
        '1HE' => 'E02001673',
        '1HQ' => 'E02001675',
        '1JR' => 'E02001675',
        '1JS' => 'E02001666',
        '1JT' => 'E02001666',
        '1JU' => 'E02001666',
        '1JW' => 'E02001673',
        '1JX' => 'E02001673',
        '1JY' => 'E02001666',
        '1JZ' => 'E02001666',
        '1NY' => 'E02001666',
        '1NZ' => 'E02001666',
        '1WA' => 'E02001666',
        '1WW' => 'E02001673',
        '1WX' => 'E02001666',
        '1WY' => 'E02001673',
        '1WZ' => 'E02001666',
        '1XA' => 'E02001666',
        '1XB' => 'E02001666',
        '1XD' => 'E02001666',
        '1XE' => 'E02001666',
        '1XF' => 'E02001673',
        '1XG' => 'E02001673',
        '1XH' => 'E02001673',
        '1XJ' => 'E02001666',
        '1XL' => 'E02001666',
        '1XN' => 'E02001673',
        '1YF' => 'E02001673',
        '1YG' => 'E02001666',
        '1YJ' => 'E02001666',
        '2BP' => 'E02001673',
        '2BQ' => 'E02001673',
        '2BS' => 'E02001673',
        '2BT' => 'E02001673',
        '2BU' => 'E02001673',
        '2BW' => 'E02001673',
        '2BX' => 'E02001673',
        '2BY' => 'E02001673',
        '2BZ' => 'E02001673',
        '2DG' => 'E02001673',
        '2DH' => 'E02001673',
        '2DJ' => 'E02001673',
        '2DL' => 'E02001673',
        '2DP' => 'E02001673',
        '2DS' => 'E02001673',
        '2DT' => 'E02001673',
        '2DU' => 'E02001673',
        '2DW' => 'E02001673',
        '2DY' => 'E02001673',
        '2DZ' => 'E02001673',
        '2GL' => 'E02001673',
        '2GN' => 'E02001673',
        '2GR' => 'E02001673',
        '2GS' => 'E02001675',
        '2GT' => 'E02001673',
        '2GU' => 'E02001673',
        '2GY' => 'E02001673',
        '2NS' => 'E02001673',
        '2NT' => 'E02001673',
        '2NY' => 'E02001673',
        '2PA' => 'E02001673',
        '2PB' => 'E02001673',
        '2PD' => 'E02001673',
        '2PE' => 'E02001673',
        '2PF' => 'E02001673',
        '2PG' => 'E02001673',
        '2PH' => 'E02001673',
        '2PJ' => 'E02001673',
        '2PL' => 'E02001673',
        '2PN' => 'E02001673',
        '2PP' => 'E02001673',
        '2PQ' => 'E02001673',
        '2PR' => 'E02001673',
        '2PS' => 'E02001673',
        '2PT' => 'E02001673',
        '2PU' => 'E02001673',
        '2PW' => 'E02001673',
        '2PX' => 'E02001673',
        '2PY' => 'E02001673',
        '2PZ' => 'E02001673',
        '2QA' => 'E02001673',
        '2QB' => 'E02001673',
        '2QD' => 'E02001673',
        '2QE' => 'E02001673',
        '2QF' => 'E02001673',
        '2QG' => 'E02001673',
        '2QH' => 'E02001673',
        '2QJ' => 'E02001673',
        '2QL' => 'E02001673',
        '2QN' => 'E02001673',
        '2QP' => 'E02001673',
        '2QQ' => 'E02001673',
        '2QR' => 'E02001673',
        '2QS' => 'E02001673',
        '2QT' => 'E02001673',
        '2QU' => 'E02001673',
        '2QW' => 'E02001673',
        '2QX' => 'E02001673',
        '2QY' => 'E02001673',
        '2QZ' => 'E02001673',
        '2RR' => 'E02001673',
        '2RS' => 'E02001673',
        '2UA' => 'E02001673',
        '2UB' => 'E02001673',
        '2WA' => 'E02001673',
        '2WX' => 'E02001673',
        '2WY' => 'E02001673',
        '2WZ' => 'E02001673',
        '2XA' => 'E02001673',
        '2YN' => 'E02001673',
        '2YR' => 'E02001673',
        '2YS' => 'E02001673',
        '3AA' => 'E02001673',
        '3AB' => 'E02001673',
        '3AD' => 'E02001673',
        '3FE' => 'E02001673',
        '3FF' => 'E02001673',
        '3FG' => 'E02001673',
        '3FH' => 'E02001675',
        '3FJ' => 'E02001673',
        '3FR' => 'E02001673',
        '3FS' => 'E02001673',
        '3FU' => 'E02001673',
        '3GA' => 'E02001675',
        '3GB' => 'E02001673',
        '3GD' => 'E02001675',
        '3GE' => 'E02001673',
        '3GF' => 'E02001673',
        '3GH' => 'E02001673',
        '3GL' => 'E02001673',
        '3GN' => 'E02001675',
        '3GP' => 'E02001675',
        '3GQ' => 'E02001675',
        '3GR' => 'E02001675',
        '3GS' => 'E02001675',
        '3GT' => 'E02001673',
        '3GU' => 'E02001675',
        '3GW' => 'E02001675',
        '3GX' => 'E02001673',
        '3GY' => 'E02001675',
        '3GZ' => 'E02001675',
        '3PJ' => 'E02001673',
        '3PP' => 'E02001673',
        '3RP' => 'E02001673',
        '3RW' => 'E02001673',
        '3RX' => 'E02001673',
        '3RY' => 'E02001673',
        '3US' => 'E02001673',
        '3WZ' => 'E02001673',
        '3YP' => 'E02001673',
        '4AA' => 'E02006803',
        '4AD' => 'E02006803',
        '4AH' => 'E02006803',
        '4BR' => 'E02001673',
        '4BS' => 'E02001673',
        '4BT' => 'E02006803',
        '4BU' => 'E02001673',
        '4BW' => 'E02006803',
        '4BX' => 'E02006803',
        '4BY' => 'E02006803',
        '4BZ' => 'E02006803',
        '4GA' => 'E02006803',
        '4GB' => 'E02001675',
        '4GF' => 'E02006803',
        '4GG' => 'E02001675',
        '4GJ' => 'E02001675',
        '4GN' => 'E02001675',
        '4GQ' => 'E02006803',
        '4GX' => 'E02001675',
        '4HA' => 'E02006803',
        '4HB' => 'E02006803',
        '4HD' => 'E02001675',
        '4HE' => 'E02006803',
        '4HF' => 'E02006803',
        '4HG' => 'E02006803',
        '4HH' => 'E02006803',
        '4HL' => 'E02006803',
        '4HN' => 'E02006803',
        '4HP' => 'E02006803',
        '4HQ' => 'E02006803',
        '4HR' => 'E02006803',
        '4HS' => 'E02006803',
        '4HT' => 'E02006803',
        '4HU' => 'E02006803',
        '4HW' => 'E02006803',
        '4HX' => 'E02006803',
        '4HY' => 'E02006803',
        '4RW' => 'E02006803',
        '4RY' => 'E02001675',
        '4RZ' => 'E02001675',
        '4SA' => 'E02006803',
        '4SB' => 'E02006803',
        '4SD' => 'E02006803',
        '4SE' => 'E02006803',
        '4SF' => 'E02006803',
        '4SG' => 'E02001675',
        '4SH' => 'E02001675',
        '4SJ' => 'E02006803',
        '4SL' => 'E02006803',
        '4SN' => 'E02006803',
        '4SP' => 'E02006803',
        '4SQ' => 'E02006803',
        '4SR' => 'E02006803',
        '4SS' => 'E02006803',
        '4ST' => 'E02006803',
        '4SU' => 'E02006803',
        '4SW' => 'E02006803',
        '4SX' => 'E02006803',
        '4SY' => 'E02006803',
        '4SZ' => 'E02006803',
        '4TA' => 'E02001675',
        '4TB' => 'E02001675',
        '4TD' => 'E02001675',
        '4TE' => 'E02001675',
        '4TF' => 'E02001675',
        '4TG' => 'E02001675',
        '4TH' => 'E02001675',
        '4TJ' => 'E02001675',
        '4TL' => 'E02001675',
        '4TN' => 'E02001675',
        '4TP' => 'E02006803',
        '4TQ' => 'E02006803',
        '4TR' => 'E02006803',
        '4TS' => 'E02006803',
        '4TT' => 'E02006803',
        '4TU' => 'E02006803',
        '4TW' => 'E02006803',
        '4TX' => 'E02006803',
        '4TY' => 'E02006803',
        '4UA' => 'E02006803',
        '4UB' => 'E02006803',
        '4UD' => 'E02006803',
        '4UE' => 'E02006803',
        '4WW' => 'E02006803',
        '4WX' => 'E02006803',
        '4WY' => 'E02001673',
        '4WZ' => 'E02006803',
        '4XA' => 'E02006803',
        '4XB' => 'E02006803',
        '4XD' => 'E02006803',
        '4XE' => 'E02006803',
        '4XF' => 'E02001673',
        '4XG' => 'E02001673',
        '4YN' => 'E02006803',
        '4YR' => 'E02006803',
        '4YT' => 'E02001673',
        '5AA' => 'E02001675',
        '5AB' => 'E02001675',
        '5AD' => 'E02006803',
        '5AE' => 'E02006803',
        '5AF' => 'E02006803',
        '5AG' => 'E02006803',
        '5AH' => 'E02006803',
        '5AJ' => 'E02006803',
        '5AL' => 'E02006803',
        '5AN' => 'E02006803',
        '5AP' => 'E02006803',
        '5AQ' => 'E02006803',
        '5AR' => 'E02006803',
        '5AS' => 'E02006803',
        '5AT' => 'E02006803',
        '5AU' => 'E02006803',
        '5AW' => 'E02006803',
        '5AX' => 'E02006803',
        '5AY' => 'E02006803',
        '5AZ' => 'E02006803',
        '5BA' => 'E02006803',
        '5BB' => 'E02006803',
        '5BD' => 'E02006803',
        '5BE' => 'E02006803',
        '5BF' => 'E02006803',
        '5BG' => 'E02006803',
        '5BH' => 'E02006803',
        '5BJ' => 'E02006803',
        '5BL' => 'E02006803',
        '5BN' => 'E02006803',
        '5BP' => 'E02006803',
        '5BQ' => 'E02006803',
        '5BR' => 'E02006803',
        '5BS' => 'E02006803',
        '5BT' => 'E02006803',
        '5BU' => 'E02006803',
        '5BW' => 'E02006803',
        '5BX' => 'E02006803',
        '5BY' => 'E02006803',
        '5BZ' => 'E02006803',
        '5DA' => 'E02006803',
        '5DB' => 'E02006803',
        '5DD' => 'E02006803',
        '5DE' => 'E02006803',
        '5DF' => 'E02006803',
        '5DG' => 'E02006803',
        '5DH' => 'E02001675',
        '5DJ' => 'E02006803',
        '5DL' => 'E02006803',
        '5DN' => 'E02006803',
        '5DP' => 'E02006803',
        '5DQ' => 'E02006803',
        '5DR' => 'E02006803',
        '5DS' => 'E02006803',
        '5DT' => 'E02006803',
        '5DU' => 'E02006803',
        '5DW' => 'E02006803',
        '5DX' => 'E02006803',
        '5DY' => 'E02006803',
        '5DZ' => 'E02006803',
        '5EA' => 'E02006803',
        '5EB' => 'E02001675',
        '5ED' => 'E02006803',
        '5EE' => 'E02006803',
        '5EF' => 'E02006803',
        '5EG' => 'E02006803',
        '5EH' => 'E02006803',
        '5EJ' => 'E02006803',
        '5EL' => 'E02006803',
        '5EN' => 'E02006803',
        '5EP' => 'E02006803',
        '5EQ' => 'E02006803',
        '5ER' => 'E02006803',
        '5ES' => 'E02006803',
        '5ET' => 'E02006803',
        '5EU' => 'E02006803',
        '5EW' => 'E02006803',
        '5EX' => 'E02006803',
        '5EY' => 'E02006803',
        '5EZ' => 'E02006803',
        '5FA' => 'E02006803',
        '5FB' => 'E02006803',
        '5FD' => 'E02006803',
        '5FE' => 'E02001675',
        '5FF' => 'E02001675',
        '5FG' => 'E02006803',
        '5FH' => 'E02006803',
        '5FJ' => 'E02006803',
        '5FL' => 'E02006803',
        '5FN' => 'E02006803',
        '5FP' => 'E02006803',
        '5FQ' => 'E02006803',
        '5FR' => 'E02006803',
        '5FS' => 'E02006803',
        '5FT' => 'E02006803',
        '5JP' => 'E02006803',
        '5JR' => 'E02006803',
        '5JS' => 'E02006803',
        '5JT' => 'E02006803',
        '5JU' => 'E02006803',
        '5JW' => 'E02006803',
        '5JX' => 'E02006803',
        '5PA' => 'E02006803',
        '5PB' => 'E02006803',
        '5PD' => 'E02006803',
        '5PE' => 'E02006803',
        '5PG' => 'E02006803',
        '5PH' => 'E02006803',
        '5PJ' => 'E02006803',
        '5PL' => 'E02006803',
        '5PN' => 'E02006803',
        '5PP' => 'E02006803',
        '5PQ' => 'E02006803',
        '5PR' => 'E02006803',
        '5PZ' => 'E02006803',
        '5WA' => 'E02006803',
        '5WS' => 'E02001673',
        '5WT' => 'E02006803',
        '5WU' => 'E02006803',
        '5WW' => 'E02001673',
        '5WX' => 'E02001673',
        '5WY' => 'E02006803',
        '5WZ' => 'E02001673',
        '5XW' => 'E02001673',
        '5XX' => 'E02001673',
        '5XY' => 'E02001673',
        '5XZ' => 'E02001673',
        '5YT' => 'E02001673',
        '5YU' => 'E02001673',
        '5YW' => 'E02001673',
        '5YX' => 'E02001673',
        '5YY' => 'E02006803',
        '6BQ' => 'E02001671',
        '6BS' => 'E02001671',
        '6BU' => 'E02001673',
        '6BW' => 'E02001673',
        '6BX' => 'E02001671',
        '6BY' => 'E02001671',
        '6BZ' => 'E02001671',
        '6PA' => 'E02001671',
        '6PB' => 'E02001671',
        '6PD' => 'E02001671',
        '6QA' => 'E02001671',
        '6QB' => 'E02001671',
        '6QD' => 'E02001671',
        '6QE' => 'E02001671',
        '6QF' => 'E02001671',
        '6QG' => 'E02001671',
        '6QH' => 'E02001671',
        '6QJ' => 'E02001671',
        '6QL' => 'E02001671',
        '6RA' => 'E02001671',
        '6RB' => 'E02001671',
        '6RD' => 'E02001671',
        '6RE' => 'E02001671',
        '6RF' => 'E02001671',
        '6RG' => 'E02001671',
        '6RH' => 'E02001671',
        '6RJ' => 'E02001671',
        '6RL' => 'E02001671',
        '6RN' => 'E02001671',
        '6RP' => 'E02001671',
        '6RQ' => 'E02001671',
        '6RR' => 'E02001671',
        '6RS' => 'E02001671',
        '6RT' => 'E02001671',
        '6RU' => 'E02001671',
        '6RW' => 'E02001671',
        '6RX' => 'E02001671',
        '6RY' => 'E02001671',
        '6RZ' => 'E02001671',
        '6SA' => 'E02001671',
        '6SB' => 'E02001671',
        '6SD' => 'E02001671',
        '6SE' => 'E02001671',
        '6SF' => 'E02001671',
        '6SG' => 'E02001671',
        '6SH' => 'E02001671',
        '6SJ' => 'E02001671',
        '6SL' => 'E02001671',
        '6SN' => 'E02001671',
        '6SP' => 'E02001671',
        '6SQ' => 'E02001671',
        '6SR' => 'E02001671',
        '6SS' => 'E02001671',
        '6ST' => 'E02001671',
        '6SU' => 'E02001671',
        '6SW' => 'E02001671',
        '6SX' => 'E02001671',
        '6SY' => 'E02001671',
        '6SZ' => 'E02001671',
        '6TA' => 'E02001671',
        '6TB' => 'E02001671',
        '6TD' => 'E02001671',
        '6TE' => 'E02001671',
        '6TF' => 'E02001671',
        '6TG' => 'E02001671',
        '6TH' => 'E02001671',
        '6TR' => 'E02001671',
        '6WA' => 'E02001673',
        '6WY' => 'E02001673',
        '6WZ' => 'E02001673',
        '6YH' => 'E02001671',
        '6YZ' => 'E02001671',
        '7AB' => 'E02001671',
        '7BS' => 'E02001673',
        '7BT' => 'E02001673',
        '7BU' => 'E02001673',
        '7BW' => 'E02001673',
        '7BX' => 'E02001675',
        '7BY' => 'E02001673',
        '7BZ' => 'E02001673',
        '7HA' => 'E02001675',
        '7HB' => 'E02001675',
        '7HD' => 'E02001675',
        '7HE' => 'E02001675',
        '7HF' => 'E02001675',
        '7HG' => 'E02001675',
        '7HH' => 'E02001675',
        '7HJ' => 'E02001675',
        '7HL' => 'E02001675',
        '7HN' => 'E02001675',
        '7HP' => 'E02001675',
        '7HQ' => 'E02001675',
        '7HR' => 'E02001675',
        '7HS' => 'E02001675',
        '7HT' => 'E02001666',
        '7HU' => 'E02001675',
        '7HW' => 'E02001675',
        '7HX' => 'E02001675',
        '7HY' => 'E02001675',
        '7HZ' => 'E02001666',
        '7JA' => 'E02001671',
        '7JB' => 'E02001675',
        '7JD' => 'E02001666',
        '7JE' => 'E02001675',
        '7JG' => 'E02001666',
        '7JH' => 'E02001675',
        '7JJ' => 'E02001671',
        '7JL' => 'E02001666',
        '7JN' => 'E02001675',
        '7JS' => 'E02001671',
        '7JU' => 'E02001675',
        '7JZ' => 'E02001671',
        '7LA' => 'E02001675',
        '7LB' => 'E02001675',
        '7LD' => 'E02001675',
        '7LE' => 'E02001675',
        '7LF' => 'E02001675',
        '7LG' => 'E02001675',
        '7LH' => 'E02001675',
        '7LJ' => 'E02001675',
        '7LL' => 'E02001675',
        '7LN' => 'E02001675',
        '7LP' => 'E02001675',
        '7LQ' => 'E02001675',
        '7LR' => 'E02001671',
        '7LS' => 'E02001675',
        '7LT' => 'E02001675',
        '7LU' => 'E02001675',
        '7LW' => 'E02001675',
        '7LX' => 'E02001675',
        '7LY' => 'E02001671',
        '7LZ' => 'E02001675',
        '7NA' => 'E02001675',
        '7NB' => 'E02001671',
        '7ND' => 'E02001671',
        '7NE' => 'E02001675',
        '7NF' => 'E02001675',
        '7NG' => 'E02001675',
        '7NH' => 'E02001675',
        '7NJ' => 'E02001675',
        '7NL' => 'E02001675',
        '7NN' => 'E02001675',
        '7NP' => 'E02001675',
        '7NQ' => 'E02001671',
        '7NR' => 'E02001675',
        '7NU' => 'E02001675',
        '7PH' => 'E02001666',
        '7PJ' => 'E02001666',
        '7PL' => 'E02001666',
        '7PN' => 'E02001666',
        '7PP' => 'E02001675',
        '7PQ' => 'E02001675',
        '7PU' => 'E02001675',
        '7WT' => 'E02001675',
        '7WU' => 'E02001675',
        '7WW' => 'E02001675',
        '7WX' => 'E02001675',
        '7WY' => 'E02001673',
        '7WZ' => 'E02001675',
        '7XA' => 'E02001666',
        '7XB' => 'E02001673',
        '7XX' => 'E02001671',
        '7YL' => 'E02001673',
        '7YQ' => 'E02001673',
        '7YW' => 'E02001673',
        '8BY' => 'E02001673',
        '8BZ' => 'E02001675',
        '8EA' => 'E02001675',
        '8EB' => 'E02006803',
        '8ED' => 'E02006803',
        '8EE' => 'E02006803',
        '8EF' => 'E02006803',
        '8EG' => 'E02001675',
        '8EH' => 'E02006803',
        '8EJ' => 'E02001675',
        '8EL' => 'E02001675',
        '8EN' => 'E02001675',
        '8EP' => 'E02001675',
        '8EQ' => 'E02001675',
        '8ER' => 'E02001675',
        '8ES' => 'E02001675',
        '8ET' => 'E02001675',
        '8EU' => 'E02001675',
        '8EW' => 'E02001675',
        '8EX' => 'E02001675',
        '8EY' => 'E02001675',
        '8EZ' => 'E02001675',
        '8FA' => 'E02001675',
        '8FB' => 'E02001675',
        '8FJ' => 'E02001675',
        '8GD' => 'E02001675',
        '8GE' => 'E02001675',
        '8GF' => 'E02001675',
        '8GH' => 'E02006803',
        '8GJ' => 'E02001675',
        '8GL' => 'E02006803',
        '8GN' => 'E02006803',
        '8GP' => 'E02001675',
        '8GQ' => 'E02006803',
        '8GR' => 'E02006803',
        '8GS' => 'E02006803',
        '8GW' => 'E02006803',
        '8JA' => 'E02001675',
        '8JB' => 'E02001675',
        '8JD' => 'E02001675',
        '8JE' => 'E02001675',
        '8JF' => 'E02001675',
        '8JG' => 'E02001675',
        '8JH' => 'E02001675',
        '8JJ' => 'E02001675',
        '8JL' => 'E02001675',
        '8JN' => 'E02001675',
        '8LA' => 'E02001675',
        '8LB' => 'E02001675',
        '8LD' => 'E02001675',
        '8LE' => 'E02001675',
        '8LF' => 'E02001675',
        '8LG' => 'E02001675',
        '8LH' => 'E02001675',
        '8LJ' => 'E02001675',
        '8LL' => 'E02001675',
        '8LN' => 'E02001675',
        '8LP' => 'E02001675',
        '8LQ' => 'E02001675',
        '8LR' => 'E02001675',
        '8LS' => 'E02001675',
        '8LT' => 'E02001675',
        '8LU' => 'E02001675',
        '8LW' => 'E02001675',
        '8LX' => 'E02001675',
        '8LY' => 'E02001675',
        '8LZ' => 'E02001675',
        '8NA' => 'E02001675',
        '8NB' => 'E02001675',
        '8ND' => 'E02001675',
        '8NE' => 'E02001675',
        '8NF' => 'E02001675',
        '8NG' => 'E02001675',
        '8NH' => 'E02001675',
        '8NJ' => 'E02001675',
        '8NL' => 'E02001675',
        '8NN' => 'E02001675',
        '8NP' => 'E02001675',
        '8NQ' => 'E02001675',
        '8NZ' => 'E02001675',
        '8WT' => 'E02001673',
        '8WU' => 'E02001673',
        '8WW' => 'E02001675',
        '8WX' => 'E02001673',
        '8WY' => 'E02001673',
        '8WZ' => 'E02001673',
        '8YU' => 'E02001673',
        '8YW' => 'E02001673',
        '8YZ' => 'E02001673',
        '8ZU' => 'E02001673',
        '9AA' => 'E02001673',
        '9AB' => 'E02001673',
        '9AD' => 'E02001673',
        '9AE' => 'E02001673',
        '9AF' => 'E02001673',
        '9AG' => 'E02001673',
        '9AH' => 'E02001673',
        '9AJ' => 'E02001673',
        '9AL' => 'E02001673',
        '9AN' => 'E02001673',
        '9AP' => 'E02001673',
        '9AQ' => 'E02001673',
        '9AR' => 'E02001673',
        '9AS' => 'E02001673',
        '9AT' => 'E02001673',
        '9AU' => 'E02001673',
        '9AW' => 'E02001673',
        '9AX' => 'E02001673',
        '9AY' => 'E02001673',
        '9AZ' => 'E02001673',
        '9BA' => 'E02001673',
        '9BB' => 'E02001673',
        '9BD' => 'E02001673',
        '9BE' => 'E02001673',
        '9BF' => 'E02001673',
        '9BG' => 'E02001673',
        '9BH' => 'E02001673',
        '9BJ' => 'E02001673',
        '9BL' => 'E02001673',
        '9BN' => 'E02001673',
        '9BP' => 'E02001673',
        '9BQ' => 'E02001673',
        '9BR' => 'E02001673',
        '9BS' => 'E02001673',
        '9BT' => 'E02001673',
        '9BU' => 'E02001673',
        '9BW' => 'E02001673',
        '9BX' => 'E02001673',
        '9BY' => 'E02001673',
        '9BZ' => 'E02001673',
        '9DA' => 'E02001673',
        '9DB' => 'E02001673',
        '9DD' => 'E02001673',
        '9DE' => 'E02001673',
        '9DF' => 'E02001673',
        '9DG' => 'E02001673',
        '9DH' => 'E02001673',
        '9DJ' => 'E02001673',
        '9DL' => 'E02001673',
        '9DN' => 'E02001673',
        '9DP' => 'E02001673',
        '9DQ' => 'E02001673',
        '9DR' => 'E02001673',
        '9DS' => 'E02001673',
        '9DT' => 'E02001673',
        '9DU' => 'E02001673',
        '9DW' => 'E02001673',
        '9DX' => 'E02001673',
        '9DY' => 'E02001673',
        '9DZ' => 'E02001673',
        '9EA' => 'E02001673',
        '9EB' => 'E02001673',
        '9ED' => 'E02001673',
        '9EE' => 'E02001673',
        '9EF' => 'E02001673',
        '9EG' => 'E02001673',
        '9EH' => 'E02001673',
        '9EJ' => 'E02001673',
        '9EL' => 'E02001673',
        '9EN' => 'E02001673',
        '9EP' => 'E02001673',
        '9EQ' => 'E02001673',
        '9ER' => 'E02001673',
        '9ES' => 'E02001673',
        '9ET' => 'E02001673',
        '9EU' => 'E02001673',
        '9EW' => 'E02001673',
        '9EX' => 'E02001673',
        '9EY' => 'E02001673',
        '9EZ' => 'E02001673',
        '9FA' => 'E02001673',
        '9FB' => 'E02001673',
        '9FD' => 'E02001673',
        '9FE' => 'E02001673',
        '9FF' => 'E02001673',
        '9FG' => 'E02001673',
        '9FH' => 'E02001673',
        '9FJ' => 'E02001673',
        '9FL' => 'E02001673',
        '9FN' => 'E02001673',
        '9FP' => 'E02001673',
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