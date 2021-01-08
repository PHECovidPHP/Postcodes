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
final class BH12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003211',
        '1AB' => 'E02003211',
        '1AD' => 'E02003211',
        '1AE' => 'E02003211',
        '1AF' => 'E02003211',
        '1AG' => 'E02003202',
        '1AH' => 'E02003202',
        '1AJ' => 'E02003202',
        '1AL' => 'E02003202',
        '1AN' => 'E02003202',
        '1AP' => 'E02003202',
        '1AQ' => 'E02003202',
        '1AR' => 'E02003202',
        '1AS' => 'E02003202',
        '1AT' => 'E02003202',
        '1AU' => 'E02003211',
        '1AW' => 'E02003202',
        '1AX' => 'E02003211',
        '1AY' => 'E02003202',
        '1AZ' => 'E02003202',
        '1BA' => 'E02003202',
        '1BB' => 'E02003202',
        '1BD' => 'E02003202',
        '1BE' => 'E02003202',
        '1BG' => 'E02003202',
        '1BH' => 'E02003202',
        '1BJ' => 'E02003202',
        '1BL' => 'E02003202',
        '1BN' => 'E02003202',
        '1BP' => 'E02003202',
        '1BQ' => 'E02003202',
        '1BS' => 'E02003202',
        '1BT' => 'E02003202',
        '1BU' => 'E02003202',
        '1BW' => 'E02003202',
        '1BX' => 'E02003202',
        '1BY' => 'E02003202',
        '1BZ' => 'E02003202',
        '1DA' => 'E02003202',
        '1DB' => 'E02003202',
        '1DD' => 'E02003202',
        '1DE' => 'E02003202',
        '1DF' => 'E02003202',
        '1DG' => 'E02003203',
        '1DH' => 'E02003211',
        '1DJ' => 'E02003202',
        '1DL' => 'E02003203',
        '1DN' => 'E02003203',
        '1DP' => 'E02003202',
        '1DQ' => 'E02003211',
        '1DR' => 'E02003202',
        '1DS' => 'E02003202',
        '1DT' => 'E02003202',
        '1DU' => 'E02003203',
        '1DW' => 'E02003202',
        '1DX' => 'E02003202',
        '1DY' => 'E02003202',
        '1DZ' => 'E02003202',
        '1EA' => 'E02003203',
        '1EB' => 'E02003202',
        '1ED' => 'E02003202',
        '1EE' => 'E02003202',
        '1EF' => 'E02003202',
        '1EG' => 'E02003202',
        '1EH' => 'E02003202',
        '1EJ' => 'E02003202',
        '1EP' => 'E02003202',
        '1EQ' => 'E02003202',
        '1ER' => 'E02003202',
        '1ES' => 'E02003202',
        '1EW' => 'E02003202',
        '1EX' => 'E02003202',
        '1EZ' => 'E02003202',
        '1HA' => 'E02003203',
        '1HB' => 'E02003203',
        '1HD' => 'E02003203',
        '1HE' => 'E02003203',
        '1HF' => 'E02003202',
        '1HG' => 'E02003202',
        '1HH' => 'E02003202',
        '1HJ' => 'E02003202',
        '1HQ' => 'E02003202',
        '1HR' => 'E02003202',
        '1HS' => 'E02003202',
        '1HT' => 'E02003202',
        '1HX' => 'E02003202',
        '1HY' => 'E02003202',
        '1JA' => 'E02003202',
        '1JB' => 'E02003203',
        '1JF' => 'E02003202',
        '1JG' => 'E02003203',
        '1JH' => 'E02003203',
        '1JJ' => 'E02003203',
        '1JL' => 'E02003203',
        '1JN' => 'E02003202',
        '1JQ' => 'E02003203',
        '1JS' => 'E02003202',
        '1JT' => 'E02003202',
        '1JU' => 'E02003202',
        '1JW' => 'E02003202',
        '1JX' => 'E02003202',
        '1JY' => 'E02003202',
        '1LA' => 'E02003202',
        '1LB' => 'E02003202',
        '1LD' => 'E02003202',
        '1LE' => 'E02003202',
        '1LG' => 'E02003202',
        '1LP' => 'E02003202',
        '1LR' => 'E02003202',
        '1LS' => 'E02003202',
        '1LT' => 'E02003202',
        '1LU' => 'E02003202',
        '1LX' => 'E02003203',
        '1LY' => 'E02003203',
        '1LZ' => 'E02003203',
        '1NA' => 'E02003202',
        '1NB' => 'E02003202',
        '1ND' => 'E02003203',
        '1NE' => 'E02003203',
        '1NF' => 'E02003203',
        '1NG' => 'E02003202',
        '1NH' => 'E02003202',
        '1NJ' => 'E02003203',
        '1NL' => 'E02003203',
        '1NN' => 'E02003203',
        '1NP' => 'E02003203',
        '1NQ' => 'E02003202',
        '1NR' => 'E02003203',
        '1NS' => 'E02003203',
        '1NT' => 'E02003203',
        '1NU' => 'E02003203',
        '1NW' => 'E02003202',
        '1NX' => 'E02003203',
        '1NY' => 'E02003203',
        '1PA' => 'E02003202',
        '1PB' => 'E02003202',
        '1PD' => 'E02003202',
        '1PE' => 'E02003203',
        '1PF' => 'E02003202',
        '1PG' => 'E02003202',
        '1PH' => 'E02003202',
        '1PJ' => 'E02003202',
        '1PL' => 'E02003202',
        '1PN' => 'E02003202',
        '1PP' => 'E02003202',
        '1PQ' => 'E02003202',
        '1PR' => 'E02003202',
        '1PS' => 'E02003202',
        '1PT' => 'E02003202',
        '1PU' => 'E02003202',
        '1PW' => 'E02003202',
        '1PX' => 'E02003202',
        '1PY' => 'E02003202',
        '1PZ' => 'E02003202',
        '1QA' => 'E02003202',
        '1QB' => 'E02003203',
        '1QD' => 'E02003203',
        '1QE' => 'E02003203',
        '1QH' => 'E02003211',
        '1QU' => 'E02003202',
        '1QX' => 'E02003202',
        '1RA' => 'E02003202',
        '1TP' => 'E02003202',
        '1TR' => 'E02003202',
        '1WA' => 'E02003202',
        '1WG' => 'E02003202',
        '1WH' => 'E02003200',
        '1WJ' => 'E02003202',
        '1XN' => 'E02003200',
        '1XW' => 'E02003200',
        '1XZ' => 'E02003202',
        '1YA' => 'E02003202',
        '1YB' => 'E02003200',
        '1YD' => 'E02003200',
        '1YE' => 'E02003202',
        '1YF' => 'E02003202',
        '1YG' => 'E02003202',
        '1YH' => 'E02003200',
        '1YJ' => 'E02003202',
        '1YL' => 'E02003202',
        '1YN' => 'E02003202',
        '1YP' => 'E02003200',
        '1YQ' => 'E02003211',
        '1YR' => 'E02003202',
        '1YS' => 'E02003200',
        '1YT' => 'E02003200',
        '1YU' => 'E02003200',
        '1YW' => 'E02003200',
        '1YX' => 'E02003202',
        '1YY' => 'E02003211',
        '1YZ' => 'E02003202',
        '1ZA' => 'E02003200',
        '1ZB' => 'E02003211',
        '1ZE' => 'E02003202',
        '1ZF' => 'E02003202',
        '1ZG' => 'E02003202',
        '1ZH' => 'E02003200',
        '1ZJ' => 'E02003200',
        '1ZL' => 'E02003200',
        '1ZN' => 'E02003200',
        '1ZY' => 'E02003211',
        '2AA' => 'E02003203',
        '2AB' => 'E02003203',
        '2AD' => 'E02003203',
        '2AE' => 'E02003203',
        '2AF' => 'E02003203',
        '2AG' => 'E02003203',
        '2AH' => 'E02003203',
        '2AJ' => 'E02003203',
        '2AL' => 'E02003203',
        '2AN' => 'E02003203',
        '2AP' => 'E02003203',
        '2AQ' => 'E02003203',
        '2AR' => 'E02003203',
        '2AS' => 'E02003203',
        '2AT' => 'E02003203',
        '2AU' => 'E02003203',
        '2AW' => 'E02003203',
        '2AX' => 'E02003203',
        '2AY' => 'E02003211',
        '2AZ' => 'E02003203',
        '2BA' => 'E02003203',
        '2BB' => 'E02003203',
        '2BD' => 'E02003203',
        '2BE' => 'E02003203',
        '2BF' => 'E02003203',
        '2BG' => 'E02003203',
        '2BH' => 'E02003203',
        '2BJ' => 'E02003203',
        '2BL' => 'E02003203',
        '2BN' => 'E02003203',
        '2BP' => 'E02003203',
        '2BQ' => 'E02003203',
        '2BS' => 'E02003203',
        '2BT' => 'E02003203',
        '2BU' => 'E02003203',
        '2BW' => 'E02003203',
        '2BX' => 'E02003203',
        '2BY' => 'E02003203',
        '2BZ' => 'E02003203',
        '2DA' => 'E02003203',
        '2DB' => 'E02003203',
        '2DD' => 'E02003203',
        '2DE' => 'E02003203',
        '2DF' => 'E02003203',
        '2DG' => 'E02003203',
        '2DH' => 'E02003203',
        '2DJ' => 'E02003203',
        '2DL' => 'E02003203',
        '2DN' => 'E02003203',
        '2DP' => 'E02003203',
        '2DQ' => 'E02003203',
        '2DR' => 'E02003203',
        '2DS' => 'E02003203',
        '2DT' => 'E02003203',
        '2DU' => 'E02003203',
        '2DW' => 'E02003203',
        '2DX' => 'E02003203',
        '2DY' => 'E02003210',
        '2DZ' => 'E02003203',
        '2EA' => 'E02003203',
        '2EB' => 'E02003203',
        '2ED' => 'E02003203',
        '2EE' => 'E02003203',
        '2EF' => 'E02003203',
        '2EG' => 'E02003203',
        '2EH' => 'E02003203',
        '2EJ' => 'E02003203',
        '2EL' => 'E02003203',
        '2EN' => 'E02003203',
        '2EP' => 'E02003203',
        '2EQ' => 'E02003203',
        '2ER' => 'E02003203',
        '2ES' => 'E02003203',
        '2EW' => 'E02003203',
        '2EX' => 'E02003203',
        '2EY' => 'E02003203',
        '2EZ' => 'E02003201',
        '2HA' => 'E02003203',
        '2HB' => 'E02003203',
        '2HD' => 'E02003203',
        '2HE' => 'E02003203',
        '2HF' => 'E02003203',
        '2HG' => 'E02003200',
        '2HH' => 'E02003201',
        '2HJ' => 'E02003201',
        '2HL' => 'E02003201',
        '2HN' => 'E02003203',
        '2HP' => 'E02003200',
        '2HQ' => 'E02003200',
        '2HR' => 'E02003200',
        '2HS' => 'E02003200',
        '2HT' => 'E02003201',
        '2HU' => 'E02003201',
        '2HW' => 'E02003200',
        '2HX' => 'E02003201',
        '2HY' => 'E02003201',
        '2HZ' => 'E02003203',
        '2JA' => 'E02003201',
        '2JB' => 'E02003201',
        '2JD' => 'E02003201',
        '2JE' => 'E02003203',
        '2JF' => 'E02003203',
        '2JG' => 'E02003201',
        '2JH' => 'E02003203',
        '2JJ' => 'E02003203',
        '2JL' => 'E02003203',
        '2JN' => 'E02003203',
        '2JP' => 'E02003203',
        '2JQ' => 'E02003203',
        '2JR' => 'E02003203',
        '2JS' => 'E02003203',
        '2JU' => 'E02003203',
        '2JW' => 'E02003203',
        '2LA' => 'E02003201',
        '2LB' => 'E02003201',
        '2LD' => 'E02003201',
        '2LE' => 'E02003201',
        '2LF' => 'E02003201',
        '2LG' => 'E02003201',
        '2LH' => 'E02003201',
        '2LJ' => 'E02003201',
        '2LL' => 'E02003201',
        '2LN' => 'E02003203',
        '2LP' => 'E02003201',
        '2LQ' => 'E02003203',
        '2LR' => 'E02003201',
        '2LS' => 'E02003203',
        '2LT' => 'E02003203',
        '2LU' => 'E02003203',
        '2LW' => 'E02003201',
        '2LX' => 'E02003203',
        '2LY' => 'E02003201',
        '2LZ' => 'E02003201',
        '2NA' => 'E02003201',
        '2NB' => 'E02003201',
        '2ND' => 'E02003201',
        '2NE' => 'E02003201',
        '2NF' => 'E02003201',
        '2NG' => 'E02003201',
        '2NH' => 'E02003203',
        '2NJ' => 'E02003203',
        '2NL' => 'E02003203',
        '2NN' => 'E02003203',
        '2NP' => 'E02003203',
        '2NQ' => 'E02003203',
        '2NR' => 'E02003203',
        '2NS' => 'E02003203',
        '2NT' => 'E02003203',
        '2NU' => 'E02003203',
        '2NW' => 'E02003203',
        '2NX' => 'E02003203',
        '2NY' => 'E02003203',
        '2NZ' => 'E02003203',
        '2PA' => 'E02003203',
        '2WA' => 'E02003200',
        '2YA' => 'E02003200',
        '2YB' => 'E02003203',
        '2YD' => 'E02003200',
        '2YE' => 'E02003203',
        '2YF' => 'E02003203',
        '2YG' => 'E02003203',
        '2YH' => 'E02003203',
        '2YJ' => 'E02003203',
        '2YL' => 'E02003203',
        '2YN' => 'E02003200',
        '2YQ' => 'E02003203',
        '2YR' => 'E02003203',
        '2YS' => 'E02003203',
        '2YT' => 'E02003203',
        '2YU' => 'E02003203',
        '2YW' => 'E02003200',
        '2YX' => 'E02003203',
        '2YY' => 'E02003203',
        '2ZA' => 'E02003200',
        '2ZB' => 'E02003200',
        '2ZD' => 'E02003203',
        '2ZE' => 'E02003203',
        '2ZF' => 'E02003203',
        '2ZG' => 'E02003203',
        '2ZH' => 'E02003200',
        '2ZJ' => 'E02003203',
        '2ZL' => 'E02003203',
        '2ZN' => 'E02003203',
        '2ZP' => 'E02003203',
        '2ZQ' => 'E02003200',
        '2ZR' => 'E02003203',
        '2ZS' => 'E02003200',
        '2ZT' => 'E02003200',
        '2ZU' => 'E02003200',
        '2ZW' => 'E02003200',
        '2ZX' => 'E02003200',
        '3AA' => 'E02003201',
        '3AB' => 'E02003201',
        '3AD' => 'E02003201',
        '3AE' => 'E02003201',
        '3AF' => 'E02003201',
        '3AG' => 'E02003201',
        '3AH' => 'E02003201',
        '3AJ' => 'E02003201',
        '3AL' => 'E02003201',
        '3AN' => 'E02003201',
        '3AP' => 'E02003201',
        '3AQ' => 'E02003201',
        '3AR' => 'E02003201',
        '3AS' => 'E02003201',
        '3AT' => 'E02003201',
        '3AU' => 'E02003201',
        '3AW' => 'E02003201',
        '3AX' => 'E02003201',
        '3AY' => 'E02003201',
        '3AZ' => 'E02003201',
        '3BA' => 'E02003201',
        '3BB' => 'E02003201',
        '3BD' => 'E02003201',
        '3BE' => 'E02003201',
        '3BG' => 'E02003201',
        '3BH' => 'E02003201',
        '3BJ' => 'E02003201',
        '3BL' => 'E02003201',
        '3BN' => 'E02003201',
        '3BP' => 'E02003201',
        '3BQ' => 'E02003201',
        '3BR' => 'E02003201',
        '3BS' => 'E02003201',
        '3BT' => 'E02003201',
        '3BU' => 'E02003201',
        '3BW' => 'E02003201',
        '3BX' => 'E02003201',
        '3BY' => 'E02003201',
        '3BZ' => 'E02003201',
        '3DA' => 'E02003201',
        '3DB' => 'E02003201',
        '3DD' => 'E02003201',
        '3DE' => 'E02003201',
        '3DF' => 'E02003201',
        '3DG' => 'E02003201',
        '3DH' => 'E02003201',
        '3DJ' => 'E02003201',
        '3DL' => 'E02003201',
        '3DN' => 'E02003200',
        '3DP' => 'E02003200',
        '3DQ' => 'E02003201',
        '3DR' => 'E02003201',
        '3DS' => 'E02003201',
        '3DT' => 'E02003201',
        '3DU' => 'E02003201',
        '3DW' => 'E02003200',
        '3DX' => 'E02003201',
        '3DY' => 'E02003201',
        '3DZ' => 'E02003201',
        '3EA' => 'E02003204',
        '3EB' => 'E02003201',
        '3ED' => 'E02003201',
        '3EE' => 'E02003201',
        '3EF' => 'E02003201',
        '3EG' => 'E02003201',
        '3EH' => 'E02003201',
        '3EN' => 'E02003201',
        '3EP' => 'E02003201',
        '3EW' => 'E02003201',
        '3EY' => 'E02003201',
        '3EZ' => 'E02003201',
        '3GE' => 'E02003201',
        '3GF' => 'E02003201',
        '3HA' => 'E02003201',
        '3HB' => 'E02003201',
        '3HD' => 'E02003201',
        '3HE' => 'E02003201',
        '3HF' => 'E02003201',
        '3HG' => 'E02003201',
        '3HH' => 'E02003201',
        '3HJ' => 'E02003201',
        '3HL' => 'E02003201',
        '3HN' => 'E02003201',
        '3HP' => 'E02003201',
        '3HQ' => 'E02003201',
        '3HR' => 'E02003201',
        '3HS' => 'E02003200',
        '3HT' => 'E02003201',
        '3HU' => 'E02003201',
        '3HW' => 'E02003201',
        '3HX' => 'E02003201',
        '3HY' => 'E02003201',
        '3HZ' => 'E02003201',
        '3JA' => 'E02003201',
        '3JB' => 'E02003201',
        '3JD' => 'E02003201',
        '3JE' => 'E02003201',
        '3JF' => 'E02003201',
        '3JG' => 'E02003201',
        '3JH' => 'E02003201',
        '3JJ' => 'E02003201',
        '3JL' => 'E02003201',
        '3JN' => 'E02003201',
        '3JP' => 'E02003201',
        '3JQ' => 'E02003201',
        '3JR' => 'E02003201',
        '3JS' => 'E02003201',
        '3JU' => 'E02003201',
        '3JW' => 'E02003201',
        '3JX' => 'E02003201',
        '3JY' => 'E02003201',
        '3JZ' => 'E02003201',
        '3LA' => 'E02003201',
        '3LB' => 'E02003201',
        '3LD' => 'E02003201',
        '3LE' => 'E02003201',
        '3LF' => 'E02003201',
        '3LG' => 'E02003201',
        '3LH' => 'E02003201',
        '3LJ' => 'E02003204',
        '3LL' => 'E02003201',
        '3LN' => 'E02003201',
        '3LP' => 'E02003204',
        '3LQ' => 'E02003201',
        '3LR' => 'E02003204',
        '3LS' => 'E02003201',
        '3LT' => 'E02003201',
        '3LU' => 'E02003204',
        '3LW' => 'E02003201',
        '3LX' => 'E02003201',
        '3LY' => 'E02003201',
        '3LZ' => 'E02003200',
        '3NA' => 'E02003200',
        '3NB' => 'E02003201',
        '3ND' => 'E02003201',
        '3NE' => 'E02003201',
        '3NF' => 'E02003201',
        '3NG' => 'E02003201',
        '3NH' => 'E02003201',
        '3NJ' => 'E02003201',
        '3NL' => 'E02003201',
        '3NN' => 'E02003201',
        '3NP' => 'E02003201',
        '3NQ' => 'E02003201',
        '3NR' => 'E02003201',
        '3NS' => 'E02003201',
        '3NT' => 'E02003201',
        '3NU' => 'E02003201',
        '3NW' => 'E02003201',
        '3NX' => 'E02003201',
        '3NY' => 'E02003201',
        '3NZ' => 'E02003201',
        '3PA' => 'E02003201',
        '3PB' => 'E02003201',
        '3PD' => 'E02003201',
        '3PE' => 'E02003201',
        '3PF' => 'E02003201',
        '3PG' => 'E02003201',
        '3PH' => 'E02003201',
        '3PJ' => 'E02003201',
        '3PL' => 'E02003201',
        '3PN' => 'E02003201',
        '3PP' => 'E02003201',
        '3PQ' => 'E02003201',
        '3PR' => 'E02003201',
        '3WA' => 'E02003201',
        '3WB' => 'E02003201',
        '3WE' => 'E02003200',
        '3WF' => 'E02003200',
        '3WG' => 'E02003201',
        '3WY' => 'E02003200',
        '3XY' => 'E02003200',
        '3XZ' => 'E02003200',
        '3YA' => 'E02003201',
        '3YB' => 'E02003201',
        '3YD' => 'E02003200',
        '3YE' => 'E02003200',
        '3YF' => 'E02003201',
        '3YG' => 'E02003201',
        '3YH' => 'E02003201',
        '3YJ' => 'E02003200',
        '3YL' => 'E02003200',
        '3YN' => 'E02003201',
        '3YP' => 'E02003201',
        '3YQ' => 'E02003201',
        '3YR' => 'E02003201',
        '3YS' => 'E02003200',
        '3YT' => 'E02003201',
        '3YU' => 'E02003201',
        '3YW' => 'E02003200',
        '3YX' => 'E02003201',
        '3YY' => 'E02003201',
        '3YZ' => 'E02003201',
        '3ZA' => 'E02003201',
        '3ZB' => 'E02003201',
        '3ZD' => 'E02003201',
        '3ZG' => 'E02003200',
        '3ZP' => 'E02003200',
        '3ZQ' => 'E02003200',
        '3ZX' => 'E02003200',
        '4AA' => 'E02003200',
        '4AB' => 'E02003203',
        '4AD' => 'E02003200',
        '4AE' => 'E02003200',
        '4AF' => 'E02003200',
        '4AG' => 'E02003200',
        '4AH' => 'E02003200',
        '4AJ' => 'E02003200',
        '4AL' => 'E02003200',
        '4AN' => 'E02003200',
        '4AP' => 'E02003200',
        '4AQ' => 'E02003200',
        '4AR' => 'E02003200',
        '4AS' => 'E02003200',
        '4AT' => 'E02003200',
        '4AU' => 'E02003200',
        '4AW' => 'E02003200',
        '4AX' => 'E02003202',
        '4AY' => 'E02003202',
        '4AZ' => 'E02003200',
        '4BA' => 'E02003202',
        '4BB' => 'E02003200',
        '4BD' => 'E02003200',
        '4BE' => 'E02003200',
        '4BF' => 'E02003200',
        '4BG' => 'E02003202',
        '4BH' => 'E02003202',
        '4BJ' => 'E02003202',
        '4BL' => 'E02003200',
        '4BN' => 'E02003200',
        '4BP' => 'E02003200',
        '4BQ' => 'E02003202',
        '4BR' => 'E02003200',
        '4BS' => 'E02003200',
        '4BT' => 'E02003200',
        '4BU' => 'E02003200',
        '4BW' => 'E02003200',
        '4BX' => 'E02003200',
        '4BY' => 'E02003200',
        '4BZ' => 'E02003200',
        '4DA' => 'E02003200',
        '4DB' => 'E02003200',
        '4DD' => 'E02003200',
        '4DE' => 'E02003200',
        '4DF' => 'E02003200',
        '4DG' => 'E02003200',
        '4DH' => 'E02003200',
        '4DJ' => 'E02003200',
        '4DL' => 'E02003200',
        '4DN' => 'E02003200',
        '4DP' => 'E02003200',
        '4DQ' => 'E02003200',
        '4DR' => 'E02003200',
        '4DS' => 'E02003200',
        '4DT' => 'E02003200',
        '4DU' => 'E02003200',
        '4DW' => 'E02003200',
        '4DX' => 'E02003200',
        '4DY' => 'E02003200',
        '4DZ' => 'E02003200',
        '4EA' => 'E02003200',
        '4EB' => 'E02003200',
        '4ED' => 'E02003200',
        '4EE' => 'E02003203',
        '4EF' => 'E02003200',
        '4EG' => 'E02003200',
        '4EH' => 'E02003200',
        '4EJ' => 'E02003200',
        '4EL' => 'E02003200',
        '4EN' => 'E02003200',
        '4EP' => 'E02003200',
        '4EQ' => 'E02003200',
        '4ER' => 'E02003200',
        '4ES' => 'E02003200',
        '4ET' => 'E02003200',
        '4EU' => 'E02003200',
        '4EW' => 'E02003200',
        '4EX' => 'E02003200',
        '4EY' => 'E02003200',
        '4EZ' => 'E02003200',
        '4FA' => 'E02003200',
        '4FB' => 'E02003201',
        '4FD' => 'E02003201',
        '4FE' => 'E02003201',
        '4FF' => 'E02003201',
        '4FG' => 'E02003201',
        '4FH' => 'E02003201',
        '4FJ' => 'E02003200',
        '4FL' => 'E02003201',
        '4FN' => 'E02003201',
        '4FP' => 'E02003201',
        '4FQ' => 'E02003201',
        '4GP' => 'E02003204',
        '4HA' => 'E02003200',
        '4HB' => 'E02003200',
        '4HD' => 'E02003200',
        '4HE' => 'E02003200',
        '4HF' => 'E02003200',
        '4HG' => 'E02003200',
        '4HH' => 'E02003200',
        '4HJ' => 'E02003200',
        '4HL' => 'E02003200',
        '4HN' => 'E02003200',
        '4HP' => 'E02003200',
        '4HR' => 'E02003200',
        '4HS' => 'E02003200',
        '4HT' => 'E02003200',
        '4HU' => 'E02003200',
        '4HW' => 'E02003200',
        '4HX' => 'E02003201',
        '4HY' => 'E02003201',
        '4HZ' => 'E02003200',
        '4JF' => 'E02003200',
        '4JG' => 'E02003200',
        '4JH' => 'E02003200',
        '4JJ' => 'E02003200',
        '4JL' => 'E02003200',
        '4JN' => 'E02003200',
        '4JP' => 'E02003200',
        '4JQ' => 'E02003200',
        '4JR' => 'E02003200',
        '4JS' => 'E02003200',
        '4JT' => 'E02003200',
        '4JW' => 'E02003200',
        '4LB' => 'E02003200',
        '4LD' => 'E02003200',
        '4LE' => 'E02003200',
        '4LF' => 'E02003200',
        '4LG' => 'E02003200',
        '4LH' => 'E02003195',
        '4LJ' => 'E02003200',
        '4LL' => 'E02003200',
        '4LN' => 'E02003200',
        '4LQ' => 'E02003200',
        '4LS' => 'E02003201',
        '4LT' => 'E02003201',
        '4LU' => 'E02003201',
        '4LW' => 'E02003201',
        '4LX' => 'E02003200',
        '4LY' => 'E02003201',
        '4LZ' => 'E02003200',
        '4NA' => 'E02003195',
        '4NB' => 'E02003195',
        '4ND' => 'E02003201',
        '4NE' => 'E02003201',
        '4NF' => 'E02003201',
        '4NG' => 'E02003201',
        '4NH' => 'E02003201',
        '4NJ' => 'E02003200',
        '4NL' => 'E02003200',
        '4NN' => 'E02003201',
        '4NP' => 'E02003200',
        '4NQ' => 'E02003201',
        '4NR' => 'E02003195',
        '4NS' => 'E02003201',
        '4NT' => 'E02003200',
        '4NU' => 'E02003195',
        '4NW' => 'E02003200',
        '4NX' => 'E02003201',
        '4NY' => 'E02003201',
        '4NZ' => 'E02003201',
        '4PA' => 'E02003195',
        '4PB' => 'E02003201',
        '4PD' => 'E02003200',
        '4PE' => 'E02003204',
        '4PF' => 'E02003204',
        '4PG' => 'E02003195',
        '4PH' => 'E02003195',
        '4PJ' => 'E02003195',
        '4PL' => 'E02003195',
        '4PN' => 'E02003195',
        '4PP' => 'E02003195',
        '4PQ' => 'E02003195',
        '4PR' => 'E02003195',
        '4PS' => 'E02003195',
        '4PT' => 'E02003195',
        '4PU' => 'E02003195',
        '4PW' => 'E02003195',
        '4PX' => 'E02003195',
        '4PY' => 'E02003201',
        '4PZ' => 'E02003201',
        '4QA' => 'E02003204',
        '4QD' => 'E02003201',
        '4QH' => 'E02003201',
        '4QL' => 'E02003204',
        '4QN' => 'E02003201',
        '4QR' => 'E02003201',
        '4QS' => 'E02003201',
        '4QT' => 'E02003201',
        '4QU' => 'E02003197',
        '4QW' => 'E02003201',
        '4QY' => 'E02003204',
        '4QZ' => 'E02003201',
        '4RG' => 'E02003198',
        '4RH' => 'E02003201',
        '4TS' => 'E02003201',
        '4WA' => 'E02003195',
        '4WB' => 'E02003195',
        '4WD' => 'E02003195',
        '4WP' => 'E02003195',
        '4WZ' => 'E02003200',
        '4XJ' => 'E02003200',
        '4XN' => 'E02003200',
        '4XQ' => 'E02003200',
        '4XR' => 'E02003201',
        '4XY' => 'E02003200',
        '4XZ' => 'E02003200',
        '4YA' => 'E02003200',
        '4YB' => 'E02003200',
        '4YD' => 'E02003200',
        '4YE' => 'E02003200',
        '4YF' => 'E02003200',
        '4YG' => 'E02003200',
        '4YH' => 'E02003200',
        '4YJ' => 'E02003200',
        '4YL' => 'E02003200',
        '4YN' => 'E02003200',
        '4YP' => 'E02003200',
        '4YQ' => 'E02003200',
        '4YR' => 'E02003200',
        '4YS' => 'E02003200',
        '4YT' => 'E02003200',
        '4YU' => 'E02003200',
        '4YW' => 'E02003200',
        '4YX' => 'E02003200',
        '4YY' => 'E02003200',
        '4YZ' => 'E02003200',
        '4ZA' => 'E02003200',
        '4ZB' => 'E02003200',
        '4ZD' => 'E02003200',
        '4ZE' => 'E02003200',
        '4ZF' => 'E02003200',
        '4ZH' => 'E02003200',
        '4ZL' => 'E02003200',
        '4ZQ' => 'E02003200',
        '4ZW' => 'E02003200',
        '5AA' => 'E02003200',
        '5AB' => 'E02003200',
        '5AD' => 'E02003195',
        '5AE' => 'E02003195',
        '5AF' => 'E02003195',
        '5AG' => 'E02003195',
        '5AH' => 'E02003200',
        '5AJ' => 'E02003200',
        '5AL' => 'E02003200',
        '5AN' => 'E02003200',
        '5AP' => 'E02003200',
        '5AQ' => 'E02003200',
        '5AR' => 'E02003200',
        '5AS' => 'E02003200',
        '5AT' => 'E02003200',
        '5AU' => 'E02003200',
        '5AW' => 'E02003200',
        '5AX' => 'E02003200',
        '5AY' => 'E02003200',
        '5AZ' => 'E02003195',
        '5BA' => 'E02003195',
        '5BB' => 'E02003202',
        '5BD' => 'E02003202',
        '5BE' => 'E02003200',
        '5BF' => 'E02003202',
        '5BG' => 'E02003200',
        '5BH' => 'E02003200',
        '5BJ' => 'E02003200',
        '5BL' => 'E02003200',
        '5BN' => 'E02003200',
        '5BP' => 'E02003200',
        '5BQ' => 'E02003200',
        '5BS' => 'E02003200',
        '5BT' => 'E02003200',
        '5BU' => 'E02003200',
        '5BW' => 'E02003200',
        '5BX' => 'E02003200',
        '5BY' => 'E02003200',
        '5BZ' => 'E02003200',
        '5DA' => 'E02003200',
        '5DB' => 'E02003200',
        '5DF' => 'E02003200',
        '5DG' => 'E02003202',
        '5DH' => 'E02003200',
        '5DJ' => 'E02003200',
        '5DL' => 'E02003200',
        '5DN' => 'E02003200',
        '5DP' => 'E02003200',
        '5DQ' => 'E02003200',
        '5DR' => 'E02003200',
        '5DS' => 'E02003200',
        '5DT' => 'E02003200',
        '5DU' => 'E02003200',
        '5DW' => 'E02003200',
        '5DX' => 'E02003200',
        '5DY' => 'E02003200',
        '5DZ' => 'E02003200',
        '5EA' => 'E02003200',
        '5EB' => 'E02003200',
        '5ED' => 'E02003200',
        '5EE' => 'E02003202',
        '5EF' => 'E02003202',
        '5EG' => 'E02003202',
        '5EH' => 'E02003202',
        '5EJ' => 'E02003202',
        '5EL' => 'E02003202',
        '5EN' => 'E02003202',
        '5EP' => 'E02003202',
        '5EQ' => 'E02003202',
        '5ER' => 'E02003202',
        '5ES' => 'E02003202',
        '5ET' => 'E02003202',
        '5EU' => 'E02003202',
        '5EW' => 'E02003202',
        '5EX' => 'E02003202',
        '5EY' => 'E02003202',
        '5EZ' => 'E02003202',
        '5HA' => 'E02003195',
        '5HB' => 'E02003195',
        '5HD' => 'E02003195',
        '5HE' => 'E02003202',
        '5HF' => 'E02003195',
        '5HG' => 'E02003202',
        '5HH' => 'E02003202',
        '5HJ' => 'E02003202',
        '5HL' => 'E02003202',
        '5HN' => 'E02003195',
        '5HP' => 'E02003202',
        '5HQ' => 'E02003195',
        '5HR' => 'E02003202',
        '5HS' => 'E02003202',
        '5HT' => 'E02003202',
        '5JB' => 'E02003195',
        '5WA' => 'E02003200',
        '5WB' => 'E02003200',
        '5WJ' => 'E02003200',
        '5XA' => 'E02003200',
        '5XZ' => 'E02003200',
        '5YA' => 'E02003200',
        '5YB' => 'E02003200',
        '5YD' => 'E02003200',
        '5YE' => 'E02003202',
        '5YF' => 'E02003200',
        '5YG' => 'E02003200',
        '5YH' => 'E02003200',
        '5YL' => 'E02003202',
        '5YN' => 'E02003200',
        '5YP' => 'E02003200',
        '5YQ' => 'E02003200',
        '5YR' => 'E02003200',
        '5YS' => 'E02003200',
        '5YT' => 'E02003200',
        '5YU' => 'E02003200',
        '5YW' => 'E02003200',
        '5YX' => 'E02003200',
        '5YY' => 'E02003200',
        '5YZ' => 'E02003200',
        '5ZX' => 'E02003200',
        '9AA' => 'E02003200',
        '9AB' => 'E02003200',
        '9AD' => 'E02003200',
        '9AE' => 'E02003200',
        '9AF' => 'E02003200',
        '9AG' => 'E02003200',
        '9AH' => 'E02003200',
        '9AJ' => 'E02003200',
        '9AL' => 'E02003200',
        '9AN' => 'E02003200',
        '9AP' => 'E02003200',
        '9AQ' => 'E02003200',
        '9AR' => 'E02003200',
        '9AS' => 'E02003200',
        '9AT' => 'E02003200',
        '9AU' => 'E02003200',
        '9AW' => 'E02003200',
        '9AX' => 'E02003200',
        '9AY' => 'E02003200',
        '9AZ' => 'E02003200',
        '9BA' => 'E02003200',
        '9BB' => 'E02003200',
        '9BD' => 'E02003200',
        '9BE' => 'E02003200',
        '9BF' => 'E02003200',
        '9BG' => 'E02003200',
        '9BH' => 'E02003200',
        '9BJ' => 'E02003200',
        '9BL' => 'E02003200',
        '9BN' => 'E02003200',
        '9BP' => 'E02003200',
        '9BQ' => 'E02003200',
        '9BR' => 'E02003200',
        '9BS' => 'E02003200',
        '9BT' => 'E02003200',
        '9BU' => 'E02003200',
        '9BW' => 'E02003200',
        '9BX' => 'E02003200',
        '9BY' => 'E02003200',
        '9BZ' => 'E02003200',
        '9DA' => 'E02003200',
        '9DB' => 'E02003200',
        '9DD' => 'E02003200',
        '9DE' => 'E02003200',
        '9DF' => 'E02003200',
        '9DG' => 'E02003200',
        '9DH' => 'E02003200',
        '9DJ' => 'E02003200',
        '9DL' => 'E02003200',
        '9DN' => 'E02003200',
        '9DP' => 'E02003200',
        '9DQ' => 'E02003200',
        '9DR' => 'E02003200',
        '9DS' => 'E02003200',
        '9DT' => 'E02003200',
        '9DU' => 'E02003200',
        '9DW' => 'E02003200',
        '9DX' => 'E02003200',
        '9DY' => 'E02003200',
        '9DZ' => 'E02003200',
        '9EA' => 'E02003200',
        '9EB' => 'E02003200',
        '9ED' => 'E02003200',
        '9EE' => 'E02003200',
        '9EF' => 'E02003200',
        '9EG' => 'E02003200',
        '9EH' => 'E02003200',
        '9EJ' => 'E02003200',
        '9EL' => 'E02003200',
        '9EN' => 'E02003200',
        '9EP' => 'E02003200',
        '9EQ' => 'E02003200',
        '9ER' => 'E02003200',
        '9ES' => 'E02003200',
        '9ET' => 'E02003200',
        '9EU' => 'E02003200',
        '9EW' => 'E02003200',
        '9EX' => 'E02003200',
        '9FA' => 'E02003200',
        '9FB' => 'E02003200',
        '9FD' => 'E02003200',
        '9FE' => 'E02003200',
        '9FF' => 'E02003200',
        '9FG' => 'E02003200',
        '9FH' => 'E02003200',
        '9FJ' => 'E02003200',
        '9FL' => 'E02003200',
        '9FN' => 'E02003200',
        '9FP' => 'E02003200',
        '9FQ' => 'E02003200',
        '9FR' => 'E02003200',
        '9FS' => 'E02003200',
        '9FT' => 'E02003200',
        '9FU' => 'E02003200',
        '9FW' => 'E02003200',
        '9FX' => 'E02003200',
        '9FY' => 'E02003200',
        '9FZ' => 'E02003200',
        '9GA' => 'E02003200',
        '9GB' => 'E02003200',
        '9GD' => 'E02003200',
        '9GE' => 'E02003200',
        '9GF' => 'E02003200',
        '9GG' => 'E02003200',
        '9GH' => 'E02003200',
        '9GJ' => 'E02003200',
        '9GL' => 'E02003200',
        '9GN' => 'E02003200',
        '9GQ' => 'E02003200',
        '9GR' => 'E02003200',
        '9GS' => 'E02003200',
        '9GU' => 'E02003200',
        '9GW' => 'E02003200',
        '9GX' => 'E02003200',
        '9GY' => 'E02003200',
        '9GZ' => 'E02003200',
        '9HA' => 'E02003200',
        '9HB' => 'E02003200',
        '9HD' => 'E02003200',
        '9HE' => 'E02003200',
        '9HF' => 'E02003200',
        '9HG' => 'E02003200',
        '9HJ' => 'E02003200',
        '9HL' => 'E02003200',
        '9HN' => 'E02003200',
        '9HP' => 'E02003200',
        '9HQ' => 'E02003200',
        '9HR' => 'E02003200',
        '9HS' => 'E02003200',
        '9HT' => 'E02003200',
        '9HU' => 'E02003200',
        '9HW' => 'E02003200',
        '9HX' => 'E02003200',
        '9HY' => 'E02003200',
        '9HZ' => 'E02003200',
        '9JA' => 'E02003200',
        '9JB' => 'E02003200',
        '9JD' => 'E02003200',
        '9JE' => 'E02003200',
        '9JF' => 'E02003200',
        '9JH' => 'E02003200',
        '9JJ' => 'E02003200',
        '9JL' => 'E02003200',
        '9JN' => 'E02003200',
        '9JP' => 'E02003200',
        '9JQ' => 'E02003200',
        '9JR' => 'E02003200',
        '9JS' => 'E02003200',
        '9JT' => 'E02003200',
        '9JU' => 'E02003200',
        '9JW' => 'E02003200',
        '9JX' => 'E02003200',
        '9JY' => 'E02003200',
        '9JZ' => 'E02003200',
        '9LA' => 'E02003200',
        '9LB' => 'E02003200',
        '9LD' => 'E02003200',
        '9LE' => 'E02003200',
        '9LF' => 'E02003200',
        '9LG' => 'E02003200',
        '9LH' => 'E02003200',
        '9LJ' => 'E02003200',
        '9LL' => 'E02003200',
        '9LN' => 'E02003200',
        '9LP' => 'E02003200',
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