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
final class W7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000253',
        '1AB' => 'E02000253',
        '1AD' => 'E02000253',
        '1AE' => 'E02000253',
        '1AF' => 'E02000253',
        '1AG' => 'E02000253',
        '1AH' => 'E02000253',
        '1AJ' => 'E02000253',
        '1AL' => 'E02000253',
        '1AN' => 'E02000253',
        '1AP' => 'E02000253',
        '1AQ' => 'E02000253',
        '1AR' => 'E02000253',
        '1AS' => 'E02000253',
        '1AT' => 'E02000253',
        '1AU' => 'E02000253',
        '1AW' => 'E02000253',
        '1AX' => 'E02000253',
        '1AY' => 'E02000255',
        '1AZ' => 'E02000255',
        '1BA' => 'E02000255',
        '1BB' => 'E02000255',
        '1BD' => 'E02000253',
        '1BE' => 'E02000253',
        '1BF' => 'E02000253',
        '1BG' => 'E02000253',
        '1BH' => 'E02000253',
        '1BJ' => 'E02000253',
        '1BL' => 'E02000253',
        '1BN' => 'E02000253',
        '1BP' => 'E02000253',
        '1BQ' => 'E02000253',
        '1BS' => 'E02000253',
        '1BT' => 'E02000253',
        '1BU' => 'E02000253',
        '1BW' => 'E02000253',
        '1BX' => 'E02000253',
        '1BY' => 'E02000253',
        '1BZ' => 'E02000253',
        '1DA' => 'E02000253',
        '1DB' => 'E02000255',
        '1DD' => 'E02000253',
        '1DE' => 'E02000253',
        '1DF' => 'E02000265',
        '1DG' => 'E02000267',
        '1DH' => 'E02000267',
        '1DJ' => 'E02000267',
        '1DL' => 'E02000267',
        '1DN' => 'E02000267',
        '1DP' => 'E02000267',
        '1DQ' => 'E02000253',
        '1DR' => 'E02000267',
        '1DS' => 'E02000267',
        '1DU' => 'E02000267',
        '1DW' => 'E02000267',
        '1DY' => 'E02000267',
        '1EH' => 'E02000259',
        '1EJ' => 'E02000259',
        '1EL' => 'E02000259',
        '1EN' => 'E02000253',
        '1EP' => 'E02000259',
        '1EQ' => 'E02000267',
        '1ER' => 'E02000259',
        '1ES' => 'E02000259',
        '1ET' => 'E02000259',
        '1EU' => 'E02000259',
        '1EW' => 'E02000253',
        '1EX' => 'E02000259',
        '1GZ' => 'E02000267',
        '1HA' => 'E02000259',
        '1HJ' => 'E02000265',
        '1HL' => 'E02000265',
        '1HN' => 'E02000265',
        '1HP' => 'E02000265',
        '1HR' => 'E02000265',
        '1HS' => 'E02000265',
        '1HT' => 'E02000265',
        '1HW' => 'E02000265',
        '1HX' => 'E02000265',
        '1JA' => 'E02000253',
        '1JB' => 'E02000253',
        '1JD' => 'E02000253',
        '1JE' => 'E02000253',
        '1JF' => 'E02000253',
        '1JG' => 'E02000253',
        '1JH' => 'E02000253',
        '1JJ' => 'E02000253',
        '1JL' => 'E02000253',
        '1JN' => 'E02000253',
        '1JP' => 'E02000253',
        '1JQ' => 'E02000253',
        '1JR' => 'E02000253',
        '1JS' => 'E02000253',
        '1JT' => 'E02000253',
        '1JU' => 'E02000253',
        '1JW' => 'E02000253',
        '1JX' => 'E02000253',
        '1JY' => 'E02000253',
        '1JZ' => 'E02000253',
        '1LA' => 'E02000267',
        '1LB' => 'E02000267',
        '1LD' => 'E02000259',
        '1LE' => 'E02000259',
        '1LF' => 'E02000259',
        '1LG' => 'E02000259',
        '1LH' => 'E02000259',
        '1LJ' => 'E02000259',
        '1LL' => 'E02000259',
        '1LN' => 'E02000259',
        '1LP' => 'E02000259',
        '1LQ' => 'E02000259',
        '1LR' => 'E02000259',
        '1LS' => 'E02000259',
        '1LT' => 'E02000259',
        '1LU' => 'E02000259',
        '1LW' => 'E02000259',
        '1LX' => 'E02000253',
        '1LY' => 'E02000253',
        '1LZ' => 'E02000259',
        '1NA' => 'E02000259',
        '1NB' => 'E02000259',
        '1ND' => 'E02000267',
        '1NE' => 'E02000259',
        '1NF' => 'E02000267',
        '1NG' => 'E02000259',
        '1NH' => 'E02000259',
        '1NJ' => 'E02000253',
        '1NL' => 'E02000253',
        '1NN' => 'E02000253',
        '1NP' => 'E02000253',
        '1NQ' => 'E02000253',
        '1NR' => 'E02000253',
        '1NS' => 'E02000253',
        '1NT' => 'E02000253',
        '1NU' => 'E02000253',
        '1NW' => 'E02000253',
        '1NX' => 'E02000253',
        '1NY' => 'E02000253',
        '1NZ' => 'E02000253',
        '1PA' => 'E02000253',
        '1PB' => 'E02000253',
        '1PD' => 'E02000253',
        '1PE' => 'E02000253',
        '1PF' => 'E02000253',
        '1PH' => 'E02000253',
        '1PJ' => 'E02000253',
        '1PL' => 'E02000253',
        '1PP' => 'E02000253',
        '1PR' => 'E02000253',
        '1PS' => 'E02000253',
        '1PT' => 'E02000253',
        '1PX' => 'E02000253',
        '1PY' => 'E02000255',
        '1PZ' => 'E02000255',
        '1QA' => 'E02000255',
        '1QE' => 'E02000255',
        '1QF' => 'E02000255',
        '1QG' => 'E02000255',
        '1QH' => 'E02000255',
        '1QJ' => 'E02000255',
        '1QL' => 'E02000255',
        '1QN' => 'E02000255',
        '1QP' => 'E02000255',
        '1QQ' => 'E02000255',
        '1QR' => 'E02000255',
        '1QS' => 'E02000255',
        '1QT' => 'E02000255',
        '1QW' => 'E02000255',
        '1UX' => 'E02000267',
        '1UY' => 'E02000255',
        '1UZ' => 'E02000255',
        '1WA' => 'E02000267',
        '1WB' => 'E02000267',
        '1WD' => 'E02000267',
        '1WE' => 'E02000267',
        '1WF' => 'E02000267',
        '1WG' => 'E02000267',
        '1WH' => 'E02000267',
        '1WJ' => 'E02000267',
        '1WL' => 'E02000267',
        '1WN' => 'E02000267',
        '1WP' => 'E02000267',
        '1WQ' => 'E02000267',
        '1WR' => 'E02000267',
        '1WS' => 'E02000253',
        '1WT' => 'E02000267',
        '1WU' => 'E02000253',
        '1WW' => 'E02000253',
        '1WX' => 'E02000267',
        '1WY' => 'E02000267',
        '1WZ' => 'E02000267',
        '1XA' => 'E02000267',
        '1XB' => 'E02000267',
        '1XD' => 'E02000267',
        '1XE' => 'E02000267',
        '1XF' => 'E02000267',
        '1XG' => 'E02000267',
        '1XH' => 'E02000267',
        '1XP' => 'E02000267',
        '1XQ' => 'E02000267',
        '1XR' => 'E02000267',
        '1XS' => 'E02000267',
        '1XT' => 'E02000267',
        '1XU' => 'E02000267',
        '1XW' => 'E02000267',
        '1XX' => 'E02000267',
        '1XY' => 'E02000267',
        '1XZ' => 'E02000255',
        '1YB' => 'E02000267',
        '1YF' => 'E02000267',
        '1YH' => 'E02000267',
        '1YQ' => 'E02000267',
        '1YS' => 'E02000267',
        '1ZA' => 'E02000267',
        '1ZB' => 'E02000253',
        '1ZD' => 'E02000255',
        '1ZE' => 'E02000267',
        '1ZF' => 'E02000267',
        '1ZG' => 'E02000267',
        '1ZH' => 'E02000253',
        '1ZJ' => 'E02000267',
        '1ZL' => 'E02000255',
        '1ZN' => 'E02000255',
        '1ZP' => 'E02000267',
        '1ZQ' => 'E02000255',
        '1ZR' => 'E02000253',
        '1ZS' => 'E02000253',
        '1ZT' => 'E02000253',
        '1ZU' => 'E02000253',
        '1ZW' => 'E02000267',
        '1ZX' => 'E02000253',
        '1ZY' => 'E02000253',
        '1ZZ' => 'E02000267',
        '2AA' => 'E02000272',
        '2AB' => 'E02000272',
        '2AD' => 'E02000272',
        '2AE' => 'E02000272',
        '2AF' => 'E02000272',
        '2AG' => 'E02000272',
        '2AH' => 'E02000272',
        '2AJ' => 'E02000272',
        '2AL' => 'E02000272',
        '2AN' => 'E02000272',
        '2AP' => 'E02000272',
        '2AQ' => 'E02000272',
        '2AR' => 'E02000272',
        '2AS' => 'E02000272',
        '2AT' => 'E02000272',
        '2AU' => 'E02000272',
        '2AW' => 'E02000272',
        '2AX' => 'E02000272',
        '2AY' => 'E02000272',
        '2AZ' => 'E02000272',
        '2BA' => 'E02000267',
        '2BB' => 'E02000272',
        '2BD' => 'E02000272',
        '2BG' => 'E02000272',
        '2BH' => 'E02000272',
        '2BJ' => 'E02000272',
        '2BL' => 'E02000272',
        '2BN' => 'E02000272',
        '2BP' => 'E02000272',
        '2BQ' => 'E02000272',
        '2BS' => 'E02000272',
        '2BT' => 'E02000272',
        '2BU' => 'E02000272',
        '2BW' => 'E02000272',
        '2BX' => 'E02000272',
        '2BY' => 'E02000272',
        '2BZ' => 'E02000267',
        '2DA' => 'E02000272',
        '2DB' => 'E02000272',
        '2DD' => 'E02000272',
        '2DF' => 'E02000272',
        '2DG' => 'E02000272',
        '2DH' => 'E02000272',
        '2DL' => 'E02000267',
        '2DP' => 'E02000267',
        '2DQ' => 'E02000272',
        '2DR' => 'E02000272',
        '2DS' => 'E02000267',
        '2DT' => 'E02000265',
        '2DU' => 'E02000265',
        '2DW' => 'E02000272',
        '2DX' => 'E02000265',
        '2DY' => 'E02000265',
        '2DZ' => 'E02000265',
        '2EA' => 'E02000272',
        '2EB' => 'E02000265',
        '2ED' => 'E02000272',
        '2EH' => 'E02000265',
        '2EN' => 'E02000267',
        '2EP' => 'E02000267',
        '2ER' => 'E02000267',
        '2ES' => 'E02000267',
        '2ET' => 'E02000267',
        '2EU' => 'E02000267',
        '2EW' => 'E02000267',
        '2EX' => 'E02000267',
        '2EY' => 'E02000267',
        '2EZ' => 'E02000267',
        '2HA' => 'E02000267',
        '2HB' => 'E02000267',
        '2HD' => 'E02000267',
        '2HE' => 'E02000267',
        '2HF' => 'E02000267',
        '2HG' => 'E02000267',
        '2HH' => 'E02000267',
        '2HJ' => 'E02000272',
        '2HL' => 'E02000272',
        '2HN' => 'E02000272',
        '2HP' => 'E02000272',
        '2HQ' => 'E02000267',
        '2HR' => 'E02000272',
        '2HS' => 'E02000267',
        '2HT' => 'E02000267',
        '2HU' => 'E02000267',
        '2HW' => 'E02000272',
        '2HX' => 'E02000267',
        '2HY' => 'E02000267',
        '2HZ' => 'E02000267',
        '2JA' => 'E02000272',
        '2JB' => 'E02000265',
        '2JD' => 'E02000272',
        '2JE' => 'E02000272',
        '2JF' => 'E02000272',
        '2JG' => 'E02000272',
        '2JH' => 'E02000265',
        '2JJ' => 'E02000272',
        '2JL' => 'E02000265',
        '2JN' => 'E02000265',
        '2JP' => 'E02000265',
        '2JQ' => 'E02000265',
        '2JR' => 'E02000265',
        '2JS' => 'E02000265',
        '2JT' => 'E02000265',
        '2JU' => 'E02000272',
        '2JW' => 'E02000265',
        '2JY' => 'E02000265',
        '2JZ' => 'E02000265',
        '2LH' => 'E02000267',
        '2LJ' => 'E02000267',
        '2LL' => 'E02000267',
        '2LN' => 'E02000272',
        '2LP' => 'E02000267',
        '2LR' => 'E02000267',
        '2LS' => 'E02000272',
        '2LT' => 'E02000267',
        '2LU' => 'E02000267',
        '2LW' => 'E02000267',
        '2LX' => 'E02000267',
        '2LY' => 'E02000272',
        '2LZ' => 'E02000272',
        '2NA' => 'E02000272',
        '2NB' => 'E02000266',
        '2ND' => 'E02000267',
        '2NJ' => 'E02000267',
        '2NL' => 'E02000267',
        '2NP' => 'E02000267',
        '2NR' => 'E02000267',
        '2NS' => 'E02000267',
        '2NT' => 'E02000267',
        '2NU' => 'E02000267',
        '2NX' => 'E02000267',
        '2NY' => 'E02000267',
        '2NZ' => 'E02000267',
        '2PA' => 'E02000267',
        '2PB' => 'E02000267',
        '2PD' => 'E02000272',
        '2PE' => 'E02000267',
        '2PF' => 'E02000267',
        '2PG' => 'E02000267',
        '2PH' => 'E02000266',
        '2PJ' => 'E02000267',
        '2PL' => 'E02000267',
        '2PN' => 'E02000267',
        '2PP' => 'E02000267',
        '2PR' => 'E02000267',
        '2PS' => 'E02000267',
        '2PT' => 'E02000267',
        '2PU' => 'E02000267',
        '2PW' => 'E02000267',
        '2PX' => 'E02000267',
        '2PY' => 'E02000267',
        '2QA' => 'E02000272',
        '2QB' => 'E02000272',
        '2QD' => 'E02000272',
        '2QE' => 'E02000272',
        '2QF' => 'E02000272',
        '2QH' => 'E02000272',
        '2QJ' => 'E02000267',
        '2QL' => 'E02000267',
        '2QN' => 'E02000267',
        '2QP' => 'E02000267',
        '2QQ' => 'E02000272',
        '2UZ' => 'E02000272',
        '2WA' => 'E02000272',
        '2WB' => 'E02000272',
        '2WD' => 'E02000267',
        '2WE' => 'E02000267',
        '2WF' => 'E02000267',
        '2WG' => 'E02000267',
        '2WH' => 'E02000267',
        '2WJ' => 'E02000272',
        '2WL' => 'E02000267',
        '2WN' => 'E02000267',
        '2WP' => 'E02000267',
        '2WQ' => 'E02000272',
        '2WR' => 'E02000272',
        '2WS' => 'E02000267',
        '2WT' => 'E02000267',
        '2WU' => 'E02000267',
        '2WW' => 'E02000267',
        '2WX' => 'E02000267',
        '2WY' => 'E02000267',
        '2WZ' => 'E02000267',
        '2XA' => 'E02000267',
        '2XB' => 'E02000267',
        '2XD' => 'E02000267',
        '2XE' => 'E02000272',
        '2XF' => 'E02000267',
        '2XG' => 'E02000267',
        '2XH' => 'E02000267',
        '2XJ' => 'E02000267',
        '2XL' => 'E02000267',
        '2XN' => 'E02000267',
        '2XP' => 'E02000272',
        '2XQ' => 'E02000267',
        '2XR' => 'E02000267',
        '2XS' => 'E02000267',
        '2XT' => 'E02000267',
        '2XU' => 'E02000267',
        '2XW' => 'E02000272',
        '2XX' => 'E02000267',
        '2XY' => 'E02000267',
        '2XZ' => 'E02000267',
        '2YF' => 'E02000267',
        '2YQ' => 'E02000267',
        '2YT' => 'E02000267',
        '2YZ' => 'E02000267',
        '2ZA' => 'E02000272',
        '2ZB' => 'E02000267',
        '2ZD' => 'E02000272',
        '2ZE' => 'E02000267',
        '2ZF' => 'E02000267',
        '2ZG' => 'E02000267',
        '2ZH' => 'E02000267',
        '2ZJ' => 'E02000272',
        '2ZL' => 'E02000267',
        '2ZN' => 'E02000272',
        '2ZP' => 'E02000267',
        '2ZQ' => 'E02000267',
        '2ZR' => 'E02000272',
        '2ZS' => 'E02000272',
        '2ZT' => 'E02000267',
        '2ZU' => 'E02000267',
        '2ZW' => 'E02000272',
        '2ZX' => 'E02000272',
        '2ZY' => 'E02000267',
        '2ZZ' => 'E02000272',
        '3AA' => 'E02000253',
        '3AB' => 'E02000253',
        '3AD' => 'E02000253',
        '3AE' => 'E02000259',
        '3AF' => 'E02000259',
        '3AG' => 'E02000259',
        '3AH' => 'E02000253',
        '3AJ' => 'E02000253',
        '3AL' => 'E02000259',
        '3AN' => 'E02000253',
        '3AP' => 'E02000259',
        '3AQ' => 'E02000259',
        '3AR' => 'E02000259',
        '3AS' => 'E02000253',
        '3AT' => 'E02000259',
        '3AU' => 'E02000253',
        '3AW' => 'E02000253',
        '3AX' => 'E02000259',
        '3AY' => 'E02000259',
        '3AZ' => 'E02000267',
        '3BA' => 'E02000267',
        '3BB' => 'E02000267',
        '3BD' => 'E02000259',
        '3BE' => 'E02000259',
        '3BF' => 'E02000267',
        '3BG' => 'E02000267',
        '3BH' => 'E02000259',
        '3BJ' => 'E02000259',
        '3BL' => 'E02000259',
        '3BN' => 'E02000259',
        '3BP' => 'E02000259',
        '3BQ' => 'E02000259',
        '3BS' => 'E02000267',
        '3BT' => 'E02000267',
        '3BU' => 'E02000267',
        '3BW' => 'E02000259',
        '3BX' => 'E02000259',
        '3BY' => 'E02000259',
        '3BZ' => 'E02000259',
        '3DA' => 'E02000259',
        '3DB' => 'E02000253',
        '3DD' => 'E02000253',
        '3DE' => 'E02000253',
        '3DF' => 'E02000259',
        '3DG' => 'E02000259',
        '3DH' => 'E02000267',
        '3DJ' => 'E02000259',
        '3DL' => 'E02000267',
        '3DN' => 'E02000259',
        '3DP' => 'E02000253',
        '3DQ' => 'E02000259',
        '3DR' => 'E02000259',
        '3DS' => 'E02000253',
        '3DT' => 'E02000259',
        '3DU' => 'E02000267',
        '3DW' => 'E02000259',
        '3DX' => 'E02000253',
        '3DY' => 'E02000267',
        '3DZ' => 'E02000253',
        '3EA' => 'E02000259',
        '3EB' => 'E02000259',
        '3ED' => 'E02000259',
        '3EE' => 'E02000259',
        '3EF' => 'E02000259',
        '3EG' => 'E02000259',
        '3EH' => 'E02000259',
        '3EJ' => 'E02000259',
        '3EL' => 'E02000259',
        '3EN' => 'E02000259',
        '3EP' => 'E02000259',
        '3EQ' => 'E02000259',
        '3ER' => 'E02000259',
        '3ES' => 'E02000259',
        '3ET' => 'E02000259',
        '3EU' => 'E02000259',
        '3EW' => 'E02000259',
        '3EX' => 'E02000259',
        '3EY' => 'E02000259',
        '3EZ' => 'E02000259',
        '3FA' => 'E02000265',
        '3FB' => 'E02000259',
        '3FD' => 'E02000265',
        '3GP' => 'E02000267',
        '3GQ' => 'E02000259',
        '3GR' => 'E02000259',
        '3GS' => 'E02000267',
        '3GT' => 'E02000267',
        '3GU' => 'E02000267',
        '3GW' => 'E02000259',
        '3GX' => 'E02000267',
        '3GY' => 'E02000259',
        '3GZ' => 'E02000259',
        '3HA' => 'E02000259',
        '3HB' => 'E02000259',
        '3HD' => 'E02000259',
        '3HE' => 'E02000259',
        '3HF' => 'E02000259',
        '3HG' => 'E02000259',
        '3HH' => 'E02000267',
        '3HJ' => 'E02000267',
        '3HL' => 'E02000267',
        '3HN' => 'E02000259',
        '3HP' => 'E02000267',
        '3HQ' => 'E02000259',
        '3HR' => 'E02000267',
        '3HS' => 'E02000267',
        '3HT' => 'E02000267',
        '3HU' => 'E02000267',
        '3HW' => 'E02000267',
        '3HX' => 'E02000267',
        '3HY' => 'E02000267',
        '3HZ' => 'E02000267',
        '3JA' => 'E02000267',
        '3JB' => 'E02000267',
        '3JD' => 'E02000267',
        '3JE' => 'E02000267',
        '3JF' => 'E02000267',
        '3JG' => 'E02000267',
        '3JH' => 'E02000267',
        '3JJ' => 'E02000267',
        '3JL' => 'E02000267',
        '3JN' => 'E02000267',
        '3JP' => 'E02000267',
        '3JQ' => 'E02000267',
        '3JR' => 'E02000267',
        '3JS' => 'E02000267',
        '3JW' => 'E02000267',
        '3JY' => 'E02000267',
        '3JZ' => 'E02000267',
        '3LX' => 'E02000267',
        '3NB' => 'E02000267',
        '3PA' => 'E02000267',
        '3PB' => 'E02000267',
        '3PD' => 'E02000267',
        '3PE' => 'E02000267',
        '3PF' => 'E02000267',
        '3PG' => 'E02000267',
        '3PH' => 'E02000267',
        '3PJ' => 'E02000267',
        '3PL' => 'E02000267',
        '3PN' => 'E02000267',
        '3PP' => 'E02000265',
        '3PQ' => 'E02000267',
        '3PR' => 'E02000265',
        '3PS' => 'E02000265',
        '3PT' => 'E02000265',
        '3PU' => 'E02000265',
        '3PW' => 'E02000265',
        '3PX' => 'E02000265',
        '3PY' => 'E02000265',
        '3PZ' => 'E02000265',
        '3QA' => 'E02000265',
        '3QB' => 'E02000267',
        '3QD' => 'E02000267',
        '3QE' => 'E02000265',
        '3QF' => 'E02000265',
        '3QG' => 'E02000265',
        '3QH' => 'E02000265',
        '3QJ' => 'E02000267',
        '3QL' => 'E02000267',
        '3QN' => 'E02000265',
        '3QP' => 'E02000259',
        '3QQ' => 'E02000265',
        '3QS' => 'E02000259',
        '3QT' => 'E02000259',
        '3QU' => 'E02000253',
        '3QW' => 'E02000267',
        '3QX' => 'E02000253',
        '3QY' => 'E02000259',
        '3QZ' => 'E02000259',
        '3RA' => 'E02000253',
        '3RB' => 'E02000253',
        '3RD' => 'E02000253',
        '3RE' => 'E02000253',
        '3RF' => 'E02000253',
        '3RG' => 'E02000253',
        '3RH' => 'E02000253',
        '3RJ' => 'E02000253',
        '3RL' => 'E02000253',
        '3RN' => 'E02000253',
        '3RP' => 'E02000253',
        '3RQ' => 'E02000253',
        '3RR' => 'E02000253',
        '3RS' => 'E02000253',
        '3RT' => 'E02000259',
        '3RW' => 'E02000253',
        '3SA' => 'E02000267',
        '3SB' => 'E02000267',
        '3SD' => 'E02000267',
        '3SE' => 'E02000267',
        '3SF' => 'E02000267',
        '3SG' => 'E02000267',
        '3SH' => 'E02000267',
        '3SJ' => 'E02000267',
        '3SL' => 'E02000267',
        '3SN' => 'E02000267',
        '3SP' => 'E02000267',
        '3SQ' => 'E02000267',
        '3SR' => 'E02000267',
        '3SS' => 'E02000267',
        '3ST' => 'E02000267',
        '3SU' => 'E02000267',
        '3SW' => 'E02000267',
        '3SX' => 'E02000267',
        '3SY' => 'E02000267',
        '3SZ' => 'E02000267',
        '3TA' => 'E02000267',
        '3TB' => 'E02000267',
        '3TD' => 'E02000267',
        '3TE' => 'E02000267',
        '3TF' => 'E02000267',
        '3TG' => 'E02000267',
        '3TH' => 'E02000267',
        '3TP' => 'E02000267',
        '3TQ' => 'E02000259',
        '3TR' => 'E02000267',
        '3TS' => 'E02000267',
        '3TT' => 'E02000267',
        '3TU' => 'E02000267',
        '3TW' => 'E02000267',
        '3TX' => 'E02000267',
        '3TY' => 'E02000267',
        '3TZ' => 'E02000267',
        '3UA' => 'E02000267',
        '3UB' => 'E02000267',
        '3UE' => 'E02000267',
        '3UF' => 'E02000267',
        '3UG' => 'E02000267',
        '3UP' => 'E02000267',
        '3UQ' => 'E02000267',
        '3UR' => 'E02000267',
        '3UX' => 'E02000267',
        '3UY' => 'E02000267',
        '3UZ' => 'E02000267',
        '3WA' => 'E02000267',
        '3WB' => 'E02000267',
        '3WD' => 'E02000267',
        '3WE' => 'E02000267',
        '3WF' => 'E02000267',
        '3WG' => 'E02000267',
        '3WH' => 'E02000267',
        '3WJ' => 'E02000267',
        '3WL' => 'E02000267',
        '3WN' => 'E02000267',
        '3WP' => 'E02000267',
        '3WQ' => 'E02000267',
        '3WR' => 'E02000267',
        '3WS' => 'E02000267',
        '3WT' => 'E02000267',
        '3WU' => 'E02000267',
        '3WW' => 'E02000267',
        '3WX' => 'E02000267',
        '3WY' => 'E02000267',
        '3WZ' => 'E02000267',
        '3XA' => 'E02000265',
        '3XB' => 'E02000267',
        '3XD' => 'E02000265',
        '3XE' => 'E02000267',
        '3XF' => 'E02000267',
        '3XG' => 'E02000267',
        '3XH' => 'E02000259',
        '3XJ' => 'E02000267',
        '3XL' => 'E02000267',
        '3XN' => 'E02000259',
        '3XP' => 'E02000259',
        '3XQ' => 'E02000267',
        '3XR' => 'E02000267',
        '3XS' => 'E02000267',
        '3XT' => 'E02000267',
        '3XU' => 'E02000267',
        '3XW' => 'E02000267',
        '3XY' => 'E02000267',
        '3XZ' => 'E02000259',
        '3YA' => 'E02000267',
        '3YB' => 'E02000267',
        '3YD' => 'E02000267',
        '3YE' => 'E02000267',
        '3YF' => 'E02000267',
        '3YG' => 'E02000267',
        '3YH' => 'E02000267',
        '3YJ' => 'E02000267',
        '3YT' => 'E02000259',
        '3YU' => 'E02000267',
        '3YW' => 'E02000259',
        '3YX' => 'E02000267',
        '3YY' => 'E02000267',
        '3YZ' => 'E02000267',
        '3ZA' => 'E02000259',
        '3ZB' => 'E02000259',
        '3ZD' => 'E02000259',
        '3ZE' => 'E02000267',
        '3ZF' => 'E02000259',
        '3ZG' => 'E02000267',
        '3ZH' => 'E02000267',
        '3ZJ' => 'E02000267',
        '3ZL' => 'E02000267',
        '3ZN' => 'E02000267',
        '3ZP' => 'E02000267',
        '3ZQ' => 'E02000267',
        '3ZR' => 'E02000267',
        '3ZS' => 'E02000259',
        '3ZT' => 'E02000267',
        '3ZU' => 'E02000267',
        '3ZW' => 'E02000267',
        '3ZX' => 'E02000267',
        '3ZY' => 'E02000267',
        '3ZZ' => 'E02000267',
        '9AB' => 'E02000267',
        '9AH' => 'E02000267',
        '9AN' => 'E02000267',
        '9AQ' => 'E02000267',
        '9AS' => 'E02000267',
        '9AT' => 'E02000267',
        '9AU' => 'E02000267',
        '9AX' => 'E02000267',
        '9AY' => 'E02000267',
        '9AZ' => 'E02000267',
        '9BA' => 'E02000267',
        '9BB' => 'E02000267',
        '9BD' => 'E02000267',
        '9BE' => 'E02000267',
        '9BF' => 'E02000267',
        '9BG' => 'E02000267',
        '9BH' => 'E02000267',
        '9BJ' => 'E02000267',
        '9BL' => 'E02000267',
        '9BN' => 'E02000267',
        '9BP' => 'E02000267',
        '9BQ' => 'E02000267',
        '9BR' => 'E02000267',
        '9BS' => 'E02000267',
        '9BT' => 'E02000267',
        '9BU' => 'E02000267',
        '9BW' => 'E02000267',
        '9BX' => 'E02000267',
        '9BY' => 'E02000267',
        '9BZ' => 'E02000267',
        '9DA' => 'E02000267',
        '9DB' => 'E02000267',
        '9DD' => 'E02000267',
        '9DE' => 'E02000267',
        '9DF' => 'E02000267',
        '9DG' => 'E02000267',
        '9DH' => 'E02000267',
        '9DJ' => 'E02000267',
        '9DL' => 'E02000267',
        '9DN' => 'E02000267',
        '9DP' => 'E02000267',
        '9DQ' => 'E02000267',
        '9DR' => 'E02000267',
        '9DS' => 'E02000267',
        '9DT' => 'E02000267',
        '9DU' => 'E02000267',
        '9DW' => 'E02000267',
        '9DX' => 'E02000267',
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