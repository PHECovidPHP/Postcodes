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
final class GU32
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004707',
        '1AB' => 'E02004707',
        '1AD' => 'E02004707',
        '1AE' => 'E02004707',
        '1AF' => 'E02004707',
        '1AG' => 'E02004707',
        '1AH' => 'E02004707',
        '1AJ' => 'E02004707',
        '1AL' => 'E02004707',
        '1AN' => 'E02004707',
        '1AP' => 'E02004839',
        '1AQ' => 'E02004707',
        '1AR' => 'E02004839',
        '1AS' => 'E02004707',
        '1AT' => 'E02004707',
        '1AU' => 'E02004707',
        '1AW' => 'E02004707',
        '1AX' => 'E02004707',
        '1AY' => 'E02004707',
        '1AZ' => 'E02004707',
        '1BA' => 'E02004706',
        '1BB' => 'E02004707',
        '1BD' => 'E02004707',
        '1BE' => 'E02004707',
        '1BF' => 'E02004707',
        '1BG' => 'E02004707',
        '1BH' => 'E02004707',
        '1BJ' => 'E02004707',
        '1BL' => 'E02004707',
        '1BN' => 'E02004707',
        '1BP' => 'E02004707',
        '1BQ' => 'E02004707',
        '1BS' => 'E02004707',
        '1BT' => 'E02004707',
        '1BU' => 'E02004707',
        '1BW' => 'E02004707',
        '1BX' => 'E02004707',
        '1BY' => 'E02004707',
        '1BZ' => 'E02004707',
        '1DA' => 'E02004707',
        '1DB' => 'E02004707',
        '1DD' => 'E02004707',
        '1DE' => 'E02004707',
        '1DF' => 'E02004707',
        '1DG' => 'E02004707',
        '1DH' => 'E02004707',
        '1DJ' => 'E02004707',
        '1DL' => 'E02004707',
        '1DN' => 'E02004707',
        '1DP' => 'E02004707',
        '1DQ' => 'E02004707',
        '1DR' => 'E02004707',
        '1DS' => 'E02004707',
        '1DT' => 'E02004707',
        '1DU' => 'E02004707',
        '1DW' => 'E02004707',
        '1DX' => 'E02004707',
        '1DY' => 'E02004707',
        '1DZ' => 'E02004707',
        '1EA' => 'E02004707',
        '1EB' => 'E02004707',
        '1ED' => 'E02004707',
        '1EE' => 'E02004707',
        '1EF' => 'E02004707',
        '1EG' => 'E02004707',
        '1EH' => 'E02004707',
        '1EJ' => 'E02004707',
        '1EL' => 'E02004707',
        '1EN' => 'E02004707',
        '1EP' => 'E02004707',
        '1EQ' => 'E02004707',
        '1ER' => 'E02004707',
        '1ES' => 'E02004707',
        '1ET' => 'E02004707',
        '1EU' => 'E02004707',
        '1EX' => 'E02004707',
        '1EY' => 'E02004707',
        '1EZ' => 'E02004707',
        '1HA' => 'E02004707',
        '1HB' => 'E02004707',
        '1HD' => 'E02004707',
        '1HE' => 'E02004707',
        '1HF' => 'E02004707',
        '1HG' => 'E02004707',
        '1HH' => 'E02004707',
        '1HJ' => 'E02004707',
        '1HL' => 'E02004707',
        '1HN' => 'E02004839',
        '1HP' => 'E02004707',
        '1HQ' => 'E02004707',
        '1HR' => 'E02004707',
        '1HS' => 'E02004839',
        '1HT' => 'E02004707',
        '1HU' => 'E02004707',
        '1HW' => 'E02004707',
        '1HX' => 'E02004707',
        '1HY' => 'E02004707',
        '1HZ' => 'E02004839',
        '1JA' => 'E02004839',
        '1JB' => 'E02004839',
        '1JD' => 'E02004839',
        '1JE' => 'E02004839',
        '1JF' => 'E02004839',
        '1JG' => 'E02004839',
        '1JH' => 'E02004839',
        '1JJ' => 'E02004839',
        '1JL' => 'E02004839',
        '1JN' => 'E02004839',
        '1JP' => 'E02004839',
        '1JQ' => 'E02004839',
        '1JR' => 'E02004839',
        '1JS' => 'E02004839',
        '1JT' => 'E02004707',
        '1JU' => 'E02004707',
        '1JW' => 'E02004839',
        '1JX' => 'E02004839',
        '1JY' => 'E02004839',
        '1JZ' => 'E02004839',
        '1LA' => 'E02004707',
        '1LB' => 'E02004839',
        '1LD' => 'E02004839',
        '1LE' => 'E02004839',
        '1LF' => 'E02004839',
        '1LG' => 'E02004839',
        '1LH' => 'E02004839',
        '1LJ' => 'E02004839',
        '1LN' => 'E02004839',
        '1LP' => 'E02004839',
        '1LQ' => 'E02004839',
        '1LR' => 'E02004839',
        '1LS' => 'E02004839',
        '1LT' => 'E02004839',
        '1LU' => 'E02004839',
        '1LW' => 'E02004839',
        '1LX' => 'E02004839',
        '1LY' => 'E02004839',
        '1LZ' => 'E02004839',
        '1NA' => 'E02004839',
        '1NB' => 'E02004839',
        '1ND' => 'E02004839',
        '1NE' => 'E02004839',
        '1NF' => 'E02004708',
        '1NH' => 'E02004707',
        '1NJ' => 'E02004707',
        '1NL' => 'E02004707',
        '1NN' => 'E02004707',
        '1NP' => 'E02004707',
        '1NR' => 'E02004707',
        '1NS' => 'E02004707',
        '1NT' => 'E02004707',
        '1NU' => 'E02004707',
        '1NW' => 'E02004707',
        '1NX' => 'E02004707',
        '1NY' => 'E02004707',
        '1NZ' => 'E02004707',
        '1PA' => 'E02004707',
        '1PB' => 'E02004707',
        '1PD' => 'E02004707',
        '1PE' => 'E02004707',
        '1PF' => 'E02004707',
        '1PG' => 'E02004707',
        '1PH' => 'E02004707',
        '1PJ' => 'E02004707',
        '1PL' => 'E02004707',
        '1PN' => 'E02004707',
        '1PP' => 'E02004707',
        '1PQ' => 'E02004707',
        '1PR' => 'E02004707',
        '1PS' => 'E02004707',
        '1PT' => 'E02004707',
        '1PU' => 'E02004707',
        '1PW' => 'E02004707',
        '1PX' => 'E02004707',
        '1PY' => 'E02004707',
        '1PZ' => 'E02004707',
        '1QA' => 'E02004707',
        '1QB' => 'E02004707',
        '1QD' => 'E02004707',
        '1QE' => 'E02004707',
        '1QF' => 'E02004707',
        '1QG' => 'E02004707',
        '1QH' => 'E02004707',
        '1QJ' => 'E02004707',
        '1QL' => 'E02004707',
        '1QN' => 'E02004707',
        '1QP' => 'E02004707',
        '1QQ' => 'E02004707',
        '1QR' => 'E02004707',
        '1QS' => 'E02004707',
        '1QT' => 'E02004707',
        '1QU' => 'E02004707',
        '1QW' => 'E02004707',
        '1QX' => 'E02004707',
        '1QY' => 'E02004707',
        '1QZ' => 'E02004707',
        '1RB' => 'E02004707',
        '1RD' => 'E02004707',
        '1RF' => 'E02004707',
        '1RG' => 'E02004707',
        '1RH' => 'E02004707',
        '1RJ' => 'E02004707',
        '1RL' => 'E02004707',
        '1RN' => 'E02004707',
        '1RP' => 'E02004707',
        '1RQ' => 'E02004707',
        '1RR' => 'E02004707',
        '1RS' => 'E02004707',
        '1RT' => 'E02004707',
        '1RU' => 'E02004707',
        '1RW' => 'E02004707',
        '1RX' => 'E02004707',
        '1WA' => 'E02004707',
        '1WB' => 'E02004707',
        '1WD' => 'E02004706',
        '1WY' => 'E02004708',
        '1WZ' => 'E02004708',
        '1XN' => 'E02004708',
        '1XQ' => 'E02004708',
        '1XZ' => 'E02004708',
        '1YA' => 'E02004706',
        '1YB' => 'E02004708',
        '1YD' => 'E02004708',
        '1YE' => 'E02004708',
        '1YF' => 'E02004708',
        '1YG' => 'E02004708',
        '1YH' => 'E02004707',
        '1YJ' => 'E02004707',
        '1YL' => 'E02004707',
        '1YN' => 'E02004708',
        '1YP' => 'E02004708',
        '1YQ' => 'E02004708',
        '1YR' => 'E02004707',
        '1YS' => 'E02004707',
        '1YT' => 'E02004707',
        '1YU' => 'E02004707',
        '1YW' => 'E02004707',
        '1YX' => 'E02004707',
        '1YY' => 'E02004707',
        '1YZ' => 'E02004707',
        '1ZA' => 'E02004708',
        '1ZQ' => 'E02004708',
        '1ZR' => 'E02004708',
        '1ZX' => 'E02004708',
        '2AA' => 'E02004708',
        '2AB' => 'E02004708',
        '2AD' => 'E02004708',
        '2AE' => 'E02004708',
        '2AF' => 'E02004707',
        '2AG' => 'E02004707',
        '2AH' => 'E02004707',
        '2AJ' => 'E02004707',
        '2AL' => 'E02004707',
        '2AN' => 'E02004707',
        '2AP' => 'E02004707',
        '2AQ' => 'E02004707',
        '2AR' => 'E02004707',
        '2AS' => 'E02004707',
        '2AT' => 'E02004707',
        '2AU' => 'E02004707',
        '2AW' => 'E02004707',
        '2AX' => 'E02004708',
        '2AY' => 'E02004707',
        '2AZ' => 'E02004707',
        '2BA' => 'E02004707',
        '2BB' => 'E02004707',
        '2BD' => 'E02004707',
        '2BE' => 'E02004707',
        '2BF' => 'E02004708',
        '2BG' => 'E02004707',
        '2BH' => 'E02004707',
        '2BJ' => 'E02004707',
        '2BL' => 'E02004707',
        '2BN' => 'E02004707',
        '2BP' => 'E02004707',
        '2BQ' => 'E02004707',
        '2BS' => 'E02004707',
        '2BT' => 'E02004707',
        '2BU' => 'E02004707',
        '2BW' => 'E02004707',
        '2BY' => 'E02004707',
        '2BZ' => 'E02004707',
        '2DA' => 'E02004707',
        '2DB' => 'E02004707',
        '2DD' => 'E02004707',
        '2DE' => 'E02004707',
        '2DF' => 'E02004707',
        '2DG' => 'E02004707',
        '2DH' => 'E02004707',
        '2DJ' => 'E02004707',
        '2DL' => 'E02004707',
        '2DN' => 'E02004707',
        '2DP' => 'E02004707',
        '2DQ' => 'E02004707',
        '2DR' => 'E02004707',
        '2DU' => 'E02004707',
        '2DW' => 'E02004707',
        '2DX' => 'E02004707',
        '2DY' => 'E02004707',
        '2DZ' => 'E02004707',
        '2EA' => 'E02004707',
        '2EB' => 'E02004707',
        '2ED' => 'E02004707',
        '2EE' => 'E02004707',
        '2EF' => 'E02004707',
        '2EG' => 'E02004707',
        '2EH' => 'E02004707',
        '2EJ' => 'E02004708',
        '2EL' => 'E02004707',
        '2EN' => 'E02004707',
        '2EP' => 'E02004707',
        '2EQ' => 'E02004707',
        '2ER' => 'E02004707',
        '2ES' => 'E02004708',
        '2EW' => 'E02004707',
        '2EX' => 'E02004707',
        '2EY' => 'E02004707',
        '2EZ' => 'E02004707',
        '2FA' => 'E02004708',
        '2HA' => 'E02004707',
        '2HD' => 'E02004708',
        '2HE' => 'E02004708',
        '2HF' => 'E02004708',
        '2HG' => 'E02004708',
        '2HH' => 'E02004708',
        '2HJ' => 'E02004708',
        '2HL' => 'E02004708',
        '2HN' => 'E02004708',
        '2HP' => 'E02004708',
        '2HQ' => 'E02004708',
        '2HR' => 'E02004708',
        '2HS' => 'E02004707',
        '2HT' => 'E02004707',
        '2HU' => 'E02004707',
        '2HW' => 'E02004708',
        '2HX' => 'E02004707',
        '2HY' => 'E02004707',
        '2HZ' => 'E02004707',
        '2JA' => 'E02004707',
        '2JB' => 'E02004707',
        '2JD' => 'E02004707',
        '2JE' => 'E02004707',
        '2JF' => 'E02004707',
        '2JG' => 'E02004707',
        '2JH' => 'E02004707',
        '2JJ' => 'E02004707',
        '2JL' => 'E02004708',
        '2JN' => 'E02004708',
        '2JP' => 'E02004707',
        '2JQ' => 'E02004707',
        '2JW' => 'E02004707',
        '2LF' => 'E02004708',
        '2NA' => 'E02004707',
        '2WA' => 'E02004708',
        '2WG' => 'E02004707',
        '2WY' => 'E02004708',
        '2WZ' => 'E02004708',
        '2XN' => 'E02004708',
        '2XQ' => 'E02004708',
        '2XZ' => 'E02004708',
        '2YA' => 'E02004708',
        '2YB' => 'E02004707',
        '2YD' => 'E02004707',
        '2YE' => 'E02004708',
        '2YF' => 'E02004708',
        '2YG' => 'E02004708',
        '2YH' => 'E02004708',
        '2YJ' => 'E02004708',
        '2YL' => 'E02004707',
        '2YN' => 'E02004708',
        '2YP' => 'E02004708',
        '2YQ' => 'E02004708',
        '2YR' => 'E02004707',
        '2YS' => 'E02004707',
        '2YT' => 'E02004707',
        '2YU' => 'E02004708',
        '2YW' => 'E02004708',
        '2YX' => 'E02004707',
        '2YY' => 'E02004707',
        '2YZ' => 'E02004707',
        '2ZJ' => 'E02004708',
        '2ZN' => 'E02004708',
        '2ZQ' => 'E02004708',
        '2ZX' => 'E02004708',
        '3AA' => 'E02004708',
        '3AB' => 'E02004708',
        '3AD' => 'E02004708',
        '3AE' => 'E02004708',
        '3AF' => 'E02004708',
        '3AG' => 'E02004708',
        '3AH' => 'E02004708',
        '3AJ' => 'E02004708',
        '3AL' => 'E02004708',
        '3AN' => 'E02004708',
        '3AP' => 'E02004707',
        '3AQ' => 'E02004708',
        '3AR' => 'E02004708',
        '3AS' => 'E02004708',
        '3AT' => 'E02004708',
        '3AU' => 'E02004708',
        '3AW' => 'E02004707',
        '3AX' => 'E02004708',
        '3AY' => 'E02004708',
        '3AZ' => 'E02004708',
        '3BA' => 'E02004708',
        '3BB' => 'E02004708',
        '3BD' => 'E02004708',
        '3BE' => 'E02004708',
        '3BF' => 'E02004708',
        '3BG' => 'E02004708',
        '3BH' => 'E02004708',
        '3BJ' => 'E02004708',
        '3BL' => 'E02004708',
        '3BN' => 'E02004708',
        '3BP' => 'E02004708',
        '3BQ' => 'E02004708',
        '3BS' => 'E02004707',
        '3BT' => 'E02004707',
        '3BU' => 'E02004707',
        '3BW' => 'E02004708',
        '3BX' => 'E02004707',
        '3BY' => 'E02004707',
        '3BZ' => 'E02004707',
        '3DA' => 'E02004707',
        '3DB' => 'E02004707',
        '3DD' => 'E02004708',
        '3DE' => 'E02004707',
        '3DF' => 'E02004708',
        '3DG' => 'E02004708',
        '3DH' => 'E02004708',
        '3DJ' => 'E02004707',
        '3DL' => 'E02004708',
        '3DN' => 'E02004708',
        '3DP' => 'E02004708',
        '3DQ' => 'E02004707',
        '3DR' => 'E02004708',
        '3DS' => 'E02004708',
        '3DT' => 'E02004708',
        '3DU' => 'E02004708',
        '3DW' => 'E02004707',
        '3DX' => 'E02004708',
        '3DY' => 'E02004708',
        '3DZ' => 'E02004708',
        '3EA' => 'E02004708',
        '3EB' => 'E02004708',
        '3ED' => 'E02004708',
        '3EE' => 'E02004708',
        '3EF' => 'E02004708',
        '3EG' => 'E02004708',
        '3EH' => 'E02004708',
        '3EJ' => 'E02004708',
        '3EL' => 'E02004708',
        '3EN' => 'E02004708',
        '3EP' => 'E02004708',
        '3EQ' => 'E02004708',
        '3ER' => 'E02004708',
        '3ES' => 'E02004708',
        '3ET' => 'E02004708',
        '3EU' => 'E02004708',
        '3EW' => 'E02004708',
        '3EX' => 'E02004708',
        '3EY' => 'E02004708',
        '3EZ' => 'E02004708',
        '3FA' => 'E02004708',
        '3FB' => 'E02004708',
        '3FD' => 'E02004708',
        '3FE' => 'E02004708',
        '3FF' => 'E02004708',
        '3FG' => 'E02004708',
        '3FH' => 'E02004708',
        '3FJ' => 'E02004708',
        '3FL' => 'E02004708',
        '3FN' => 'E02004708',
        '3FP' => 'E02004708',
        '3FQ' => 'E02004708',
        '3FR' => 'E02004708',
        '3FS' => 'E02004707',
        '3HA' => 'E02004708',
        '3HB' => 'E02004708',
        '3HD' => 'E02004708',
        '3HE' => 'E02004708',
        '3HF' => 'E02004708',
        '3HG' => 'E02004708',
        '3HH' => 'E02004708',
        '3HJ' => 'E02004708',
        '3HL' => 'E02004708',
        '3HN' => 'E02004708',
        '3HP' => 'E02004708',
        '3HQ' => 'E02004708',
        '3HR' => 'E02004708',
        '3HS' => 'E02004708',
        '3HT' => 'E02004708',
        '3HU' => 'E02004708',
        '3HW' => 'E02004708',
        '3HX' => 'E02004708',
        '3HY' => 'E02004708',
        '3HZ' => 'E02004708',
        '3JA' => 'E02004708',
        '3JB' => 'E02004708',
        '3JD' => 'E02004708',
        '3JE' => 'E02004708',
        '3JF' => 'E02004708',
        '3JG' => 'E02004708',
        '3JH' => 'E02004708',
        '3JJ' => 'E02004708',
        '3JL' => 'E02004708',
        '3JN' => 'E02004708',
        '3JP' => 'E02004708',
        '3JQ' => 'E02004708',
        '3JR' => 'E02004708',
        '3JS' => 'E02004708',
        '3JT' => 'E02004708',
        '3JU' => 'E02004708',
        '3JW' => 'E02004708',
        '3JX' => 'E02004708',
        '3JY' => 'E02004708',
        '3JZ' => 'E02004708',
        '3LA' => 'E02004708',
        '3LB' => 'E02004708',
        '3LD' => 'E02004708',
        '3LE' => 'E02004708',
        '3LF' => 'E02004708',
        '3LG' => 'E02004708',
        '3LH' => 'E02004708',
        '3LJ' => 'E02004708',
        '3LL' => 'E02004708',
        '3LN' => 'E02004708',
        '3LP' => 'E02004708',
        '3LQ' => 'E02004708',
        '3LR' => 'E02004708',
        '3LS' => 'E02004708',
        '3LT' => 'E02004708',
        '3LU' => 'E02004708',
        '3LW' => 'E02004708',
        '3LX' => 'E02004708',
        '3LY' => 'E02004708',
        '3LZ' => 'E02004708',
        '3NA' => 'E02004708',
        '3NB' => 'E02004708',
        '3ND' => 'E02004708',
        '3NE' => 'E02004708',
        '3NF' => 'E02004708',
        '3NG' => 'E02004708',
        '3NH' => 'E02004708',
        '3NJ' => 'E02004707',
        '3NL' => 'E02004707',
        '3NN' => 'E02004707',
        '3NP' => 'E02004707',
        '3NQ' => 'E02004708',
        '3NR' => 'E02004707',
        '3NS' => 'E02004707',
        '3NT' => 'E02004708',
        '3NU' => 'E02004708',
        '3NW' => 'E02004707',
        '3NX' => 'E02004708',
        '3NY' => 'E02004708',
        '3NZ' => 'E02004708',
        '3PA' => 'E02004707',
        '3PB' => 'E02004707',
        '3PD' => 'E02004707',
        '3PE' => 'E02004707',
        '3PF' => 'E02004707',
        '3PG' => 'E02004707',
        '3PH' => 'E02004707',
        '3PJ' => 'E02004707',
        '3PL' => 'E02004707',
        '3PN' => 'E02004707',
        '3PP' => 'E02004707',
        '3PQ' => 'E02004707',
        '3PR' => 'E02004707',
        '3PS' => 'E02004707',
        '3PT' => 'E02004707',
        '3PU' => 'E02004707',
        '3PW' => 'E02004707',
        '3PX' => 'E02004708',
        '3PY' => 'E02004708',
        '3PZ' => 'E02004708',
        '3QA' => 'E02004708',
        '3QB' => 'E02004708',
        '3QD' => 'E02004708',
        '3QE' => 'E02004708',
        '3QF' => 'E02004708',
        '3QG' => 'E02004708',
        '3QH' => 'E02004708',
        '3QJ' => 'E02004708',
        '3QL' => 'E02004708',
        '3QN' => 'E02004708',
        '3QY' => 'E02004708',
        '3QZ' => 'E02004707',
        '3RB' => 'E02004708',
        '3RD' => 'E02004708',
        '3RG' => 'E02004708',
        '3RR' => 'E02004708',
        '3WA' => 'E02004708',
        '3WB' => 'E02004708',
        '3WG' => 'E02004708',
        '3WJ' => 'E02004708',
        '3WW' => 'E02004708',
        '3WX' => 'E02004708',
        '3WY' => 'E02004708',
        '3XA' => 'E02004708',
        '3XB' => 'E02004708',
        '3XG' => 'E02004708',
        '3XH' => 'E02004708',
        '3XJ' => 'E02004708',
        '3XL' => 'E02004708',
        '3XN' => 'E02004708',
        '3XP' => 'E02004708',
        '3XQ' => 'E02004708',
        '3XR' => 'E02004708',
        '3XS' => 'E02004708',
        '3XT' => 'E02004708',
        '3XU' => 'E02004708',
        '3XW' => 'E02004708',
        '3XX' => 'E02004708',
        '3XY' => 'E02004708',
        '3XZ' => 'E02004708',
        '3YA' => 'E02004708',
        '3YB' => 'E02004708',
        '3YD' => 'E02004708',
        '3YE' => 'E02004708',
        '3YF' => 'E02004708',
        '3YG' => 'E02004708',
        '3YH' => 'E02004708',
        '3YJ' => 'E02004708',
        '3YL' => 'E02004708',
        '3YN' => 'E02004708',
        '3YP' => 'E02004708',
        '3YQ' => 'E02004708',
        '3YR' => 'E02004708',
        '3YT' => 'E02004708',
        '3YU' => 'E02004708',
        '3YW' => 'E02004708',
        '3YX' => 'E02004708',
        '3ZH' => 'E02004708',
        '3ZJ' => 'E02004708',
        '3ZX' => 'E02004708',
        '9AA' => 'E02004708',
        '9AB' => 'E02004708',
        '9AD' => 'E02004708',
        '9AE' => 'E02004708',
        '9AF' => 'E02004708',
        '9AG' => 'E02004708',
        '9AH' => 'E02004708',
        '9AJ' => 'E02004708',
        '9AL' => 'E02004708',
        '9AN' => 'E02004708',
        '9AP' => 'E02004708',
        '9AQ' => 'E02004708',
        '9AR' => 'E02004708',
        '9AS' => 'E02004708',
        '9AT' => 'E02004708',
        '9AU' => 'E02004708',
        '9AW' => 'E02004708',
        '9AX' => 'E02004708',
        '9AY' => 'E02004708',
        '9AZ' => 'E02004708',
        '9BA' => 'E02004708',
        '9BB' => 'E02004708',
        '9BD' => 'E02004708',
        '9BE' => 'E02004708',
        '9BF' => 'E02004708',
        '9BG' => 'E02004708',
        '9BH' => 'E02004708',
        '9BJ' => 'E02004708',
        '9BL' => 'E02004708',
        '9BN' => 'E02004708',
        '9BP' => 'E02004708',
        '9BQ' => 'E02004708',
        '9BR' => 'E02004708',
        '9BS' => 'E02004708',
        '9BT' => 'E02004708',
        '9BU' => 'E02004708',
        '9BW' => 'E02004708',
        '9BX' => 'E02004708',
        '9BY' => 'E02004708',
        '9BZ' => 'E02004708',
        '9DA' => 'E02004708',
        '9DB' => 'E02004708',
        '9DD' => 'E02004708',
        '9DE' => 'E02004708',
        '9DF' => 'E02004708',
        '9DG' => 'E02004708',
        '9DH' => 'E02004708',
        '9DJ' => 'E02004708',
        '9DL' => 'E02004708',
        '9DN' => 'E02004708',
        '9DP' => 'E02004708',
        '9DQ' => 'E02004708',
        '9DR' => 'E02004708',
        '9DS' => 'E02004708',
        '9DT' => 'E02004708',
        '9DU' => 'E02004708',
        '9DW' => 'E02004708',
        '9DX' => 'E02004708',
        '9DY' => 'E02004708',
        '9DZ' => 'E02004708',
        '9EA' => 'E02004708',
        '9EB' => 'E02004708',
        '9ED' => 'E02004708',
        '9EE' => 'E02004708',
        '9EF' => 'E02004708',
        '9EG' => 'E02004708',
        '9EH' => 'E02004708',
        '9EJ' => 'E02004708',
        '9EL' => 'E02004708',
        '9EN' => 'E02004708',
        '9EP' => 'E02004708',
        '9EQ' => 'E02004708',
        '9ER' => 'E02004708',
        '9ES' => 'E02004708',
        '9ET' => 'E02004708',
        '9EU' => 'E02004708',
        '9EW' => 'E02004708',
        '9EX' => 'E02004708',
        '9EY' => 'E02004708',
        '9EZ' => 'E02004708',
        '9FA' => 'E02004708',
        '9FB' => 'E02004708',
        '9FD' => 'E02004708',
        '9FE' => 'E02004708',
        '9FF' => 'E02004708',
        '9FG' => 'E02004708',
        '9FH' => 'E02004708',
        '9FJ' => 'E02004708',
        '9FL' => 'E02004708',
        '9FN' => 'E02004708',
        '9FP' => 'E02004708',
        '9FQ' => 'E02004708',
        '9FR' => 'E02004708',
        '9FS' => 'E02004708',
        '9FT' => 'E02004708',
        '9FU' => 'E02004708',
        '9FW' => 'E02004708',
        '9FX' => 'E02004708',
        '9FY' => 'E02004708',
        '9FZ' => 'E02004708',
        '9GA' => 'E02004708',
        '9GB' => 'E02004708',
        '9GD' => 'E02004708',
        '9GE' => 'E02004708',
        '9GF' => 'E02004708',
        '9GG' => 'E02004708',
        '9GH' => 'E02004708',
        '9GJ' => 'E02004708',
        '9GL' => 'E02004708',
        '9GN' => 'E02004708',
        '9GP' => 'E02004708',
        '9SA' => 'E02004707',
        '9SB' => 'E02004707',
        '9SD' => 'E02004707',
        '9SE' => 'E02004707',
        '9SF' => 'E02004707',
        '9SG' => 'E02004707',
        '9SH' => 'E02004707',
        '9SJ' => 'E02004707',
        '9SL' => 'E02004707',
        '9SN' => 'E02004707',
        '9SP' => 'E02004707',
        '9SQ' => 'E02004707',
        '9SR' => 'E02004707',
        '9SS' => 'E02004707',
        '9ST' => 'E02004707',
        '9SU' => 'E02004707',
        '9SW' => 'E02004707',
        '9SX' => 'E02004707',
        '9SY' => 'E02004707',
        '9SZ' => 'E02004707',
        '9TA' => 'E02004707',
        '9TB' => 'E02004707',
        '9TD' => 'E02004707',
        '9TE' => 'E02004707',
        '9TF' => 'E02004707',
        '9TG' => 'E02004707',
        '9TH' => 'E02004707',
        '9TJ' => 'E02004707',
        '9TL' => 'E02004707',
        '9TN' => 'E02004707',
        '9TP' => 'E02004707',
        '9TQ' => 'E02004707',
        '9TR' => 'E02004707',
        '9TS' => 'E02004707',
        '9TT' => 'E02004707',
        '9TU' => 'E02004707',
        '9TW' => 'E02004707',
        '9TX' => 'E02004707',
        '9TY' => 'E02004707',
        '9ZZ' => 'E02004708',
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