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
final class GU27
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006454',
        '1AB' => 'E02006454',
        '1AD' => 'E02006454',
        '1AE' => 'E02006454',
        '1AF' => 'E02006454',
        '1AG' => 'E02006454',
        '1AH' => 'E02006454',
        '1AJ' => 'E02006454',
        '1AL' => 'E02006450',
        '1AN' => 'E02006450',
        '1AP' => 'E02006454',
        '1AQ' => 'E02006454',
        '1AR' => 'E02006454',
        '1AS' => 'E02006454',
        '1AT' => 'E02006454',
        '1AU' => 'E02006454',
        '1AW' => 'E02006455',
        '1AX' => 'E02006454',
        '1AY' => 'E02006454',
        '1AZ' => 'E02006454',
        '1BA' => 'E02006454',
        '1BB' => 'E02006454',
        '1BD' => 'E02006454',
        '1BE' => 'E02006454',
        '1BF' => 'E02006454',
        '1BG' => 'E02006455',
        '1BH' => 'E02006454',
        '1BJ' => 'E02006454',
        '1BL' => 'E02006454',
        '1BN' => 'E02006454',
        '1BP' => 'E02006454',
        '1BQ' => 'E02006455',
        '1BS' => 'E02006454',
        '1BT' => 'E02006454',
        '1BU' => 'E02006454',
        '1BW' => 'E02006454',
        '1BX' => 'E02006455',
        '1BY' => 'E02006455',
        '1BZ' => 'E02006455',
        '1DA' => 'E02006455',
        '1DB' => 'E02006454',
        '1DD' => 'E02006455',
        '1DE' => 'E02006455',
        '1DF' => 'E02006455',
        '1DG' => 'E02006455',
        '1DH' => 'E02006455',
        '1DJ' => 'E02006455',
        '1DL' => 'E02006455',
        '1DN' => 'E02006454',
        '1DP' => 'E02006454',
        '1DQ' => 'E02006455',
        '1DR' => 'E02006454',
        '1DS' => 'E02006454',
        '1DT' => 'E02006454',
        '1DU' => 'E02006454',
        '1DW' => 'E02006454',
        '1DX' => 'E02006454',
        '1DY' => 'E02006454',
        '1DZ' => 'E02006454',
        '1EA' => 'E02006454',
        '1EB' => 'E02006454',
        '1ED' => 'E02006454',
        '1EE' => 'E02006454',
        '1EF' => 'E02006454',
        '1EG' => 'E02006454',
        '1EH' => 'E02006454',
        '1EJ' => 'E02006454',
        '1EL' => 'E02006454',
        '1EN' => 'E02006454',
        '1EP' => 'E02006455',
        '1EQ' => 'E02006454',
        '1ER' => 'E02006454',
        '1ES' => 'E02006455',
        '1ET' => 'E02006454',
        '1EU' => 'E02006455',
        '1EW' => 'E02006454',
        '1EX' => 'E02006455',
        '1EY' => 'E02006455',
        '1EZ' => 'E02006455',
        '1FA' => 'E02006454',
        '1FB' => 'E02006454',
        '1FD' => 'E02006455',
        '1FE' => 'E02006455',
        '1FF' => 'E02006455',
        '1FG' => 'E02006454',
        '1HA' => 'E02006455',
        '1HB' => 'E02006455',
        '1HD' => 'E02006455',
        '1HE' => 'E02006455',
        '1HF' => 'E02006455',
        '1HG' => 'E02006455',
        '1HH' => 'E02006454',
        '1HJ' => 'E02006455',
        '1HN' => 'E02006455',
        '1HP' => 'E02006455',
        '1HQ' => 'E02006455',
        '1HR' => 'E02006454',
        '1HS' => 'E02006455',
        '1HT' => 'E02006455',
        '1HU' => 'E02006455',
        '1HW' => 'E02006455',
        '1HX' => 'E02006455',
        '1HY' => 'E02006455',
        '1HZ' => 'E02006455',
        '1JA' => 'E02006455',
        '1JB' => 'E02006455',
        '1JD' => 'E02006455',
        '1JE' => 'E02006455',
        '1JF' => 'E02006455',
        '1JG' => 'E02006455',
        '1JH' => 'E02006455',
        '1JJ' => 'E02006455',
        '1JL' => 'E02006455',
        '1JN' => 'E02006455',
        '1JP' => 'E02006455',
        '1JQ' => 'E02006455',
        '1JR' => 'E02006455',
        '1JS' => 'E02006455',
        '1JT' => 'E02006455',
        '1JU' => 'E02006455',
        '1JW' => 'E02006455',
        '1JX' => 'E02006455',
        '1JY' => 'E02006455',
        '1JZ' => 'E02006455',
        '1LA' => 'E02006455',
        '1LB' => 'E02006455',
        '1LD' => 'E02006455',
        '1LE' => 'E02006455',
        '1LF' => 'E02006455',
        '1LG' => 'E02006455',
        '1LH' => 'E02006455',
        '1LJ' => 'E02006455',
        '1LL' => 'E02006455',
        '1LN' => 'E02006455',
        '1LP' => 'E02006455',
        '1LQ' => 'E02006455',
        '1LR' => 'E02006455',
        '1LS' => 'E02006455',
        '1LT' => 'E02006455',
        '1LU' => 'E02006455',
        '1LW' => 'E02006455',
        '1LX' => 'E02006455',
        '1LY' => 'E02006455',
        '1LZ' => 'E02006455',
        '1NA' => 'E02006455',
        '1NB' => 'E02006455',
        '1ND' => 'E02006455',
        '1NE' => 'E02006455',
        '1NF' => 'E02006455',
        '1NG' => 'E02006455',
        '1NH' => 'E02006455',
        '1NJ' => 'E02006455',
        '1NL' => 'E02006455',
        '1NN' => 'E02006455',
        '1NP' => 'E02006455',
        '1NQ' => 'E02006455',
        '1NR' => 'E02006455',
        '1NS' => 'E02006455',
        '1NT' => 'E02006455',
        '1NU' => 'E02006455',
        '1NW' => 'E02006455',
        '1NX' => 'E02006455',
        '1NY' => 'E02006455',
        '1NZ' => 'E02006455',
        '1PA' => 'E02006455',
        '1PB' => 'E02006455',
        '1PD' => 'E02006455',
        '1PE' => 'E02006455',
        '1PF' => 'E02006455',
        '1PG' => 'E02006455',
        '1PH' => 'E02006455',
        '1PJ' => 'E02006455',
        '1PL' => 'E02006455',
        '1PN' => 'E02006455',
        '1PP' => 'E02006455',
        '1PQ' => 'E02006455',
        '1PR' => 'E02006455',
        '1PS' => 'E02006455',
        '1PT' => 'E02006455',
        '1PU' => 'E02006455',
        '1PW' => 'E02006455',
        '1PX' => 'E02006455',
        '1PY' => 'E02006455',
        '1PZ' => 'E02006455',
        '1QA' => 'E02006455',
        '1QB' => 'E02006455',
        '1QD' => 'E02006455',
        '1QE' => 'E02004705',
        '1QF' => 'E02004705',
        '1QG' => 'E02004705',
        '1QH' => 'E02004705',
        '1QJ' => 'E02004705',
        '1QL' => 'E02004705',
        '1QN' => 'E02004705',
        '1QP' => 'E02004705',
        '1QQ' => 'E02004705',
        '1QR' => 'E02004700',
        '1QU' => 'E02006455',
        '1RA' => 'E02006455',
        '1RD' => 'E02006455',
        '1RE' => 'E02006455',
        '1RF' => 'E02006455',
        '1RG' => 'E02006455',
        '1RL' => 'E02006455',
        '1RN' => 'E02006455',
        '1RQ' => 'E02006455',
        '1RT' => 'E02006455',
        '1RW' => 'E02006455',
        '1SA' => 'E02006455',
        '1SP' => 'E02006454',
        '1WA' => 'E02006455',
        '1WT' => 'E02006455',
        '1WU' => 'E02006455',
        '1WW' => 'E02006454',
        '1WX' => 'E02006455',
        '1WY' => 'E02006455',
        '1WZ' => 'E02006455',
        '1XA' => 'E02006455',
        '1XB' => 'E02006455',
        '1XD' => 'E02006455',
        '1XF' => 'E02006455',
        '1XG' => 'E02006455',
        '1XH' => 'E02006454',
        '1XJ' => 'E02006454',
        '1XL' => 'E02006454',
        '1XN' => 'E02006454',
        '1XP' => 'E02006454',
        '1XQ' => 'E02006455',
        '1XR' => 'E02006455',
        '1XS' => 'E02006455',
        '1XT' => 'E02006455',
        '1XU' => 'E02006454',
        '1XW' => 'E02006455',
        '1XX' => 'E02006455',
        '1XY' => 'E02006455',
        '1XZ' => 'E02006455',
        '1YA' => 'E02006455',
        '1YB' => 'E02006454',
        '1YD' => 'E02006455',
        '1YE' => 'E02006454',
        '1YF' => 'E02006455',
        '1YG' => 'E02006455',
        '1YH' => 'E02006455',
        '1YJ' => 'E02006455',
        '1YL' => 'E02006454',
        '1YN' => 'E02006455',
        '1YP' => 'E02006455',
        '1YQ' => 'E02006455',
        '1YR' => 'E02006455',
        '1YS' => 'E02006454',
        '1YT' => 'E02006455',
        '1YU' => 'E02006455',
        '1YW' => 'E02006455',
        '1YX' => 'E02006454',
        '1YY' => 'E02006454',
        '1YZ' => 'E02006455',
        '1ZJ' => 'E02006455',
        '1ZN' => 'E02006455',
        '1ZQ' => 'E02006454',
        '1ZR' => 'E02006455',
        '1ZT' => 'E02006455',
        '1ZX' => 'E02006454',
        '1ZY' => 'E02006455',
        '2AA' => 'E02006455',
        '2AB' => 'E02006454',
        '2AD' => 'E02006454',
        '2AE' => 'E02006454',
        '2AF' => 'E02006454',
        '2AG' => 'E02006454',
        '2AH' => 'E02006454',
        '2AJ' => 'E02006454',
        '2AL' => 'E02006454',
        '2AN' => 'E02006454',
        '2AP' => 'E02006454',
        '2AQ' => 'E02006454',
        '2AR' => 'E02006454',
        '2AS' => 'E02006454',
        '2AT' => 'E02006454',
        '2AU' => 'E02006454',
        '2AW' => 'E02006454',
        '2AX' => 'E02006454',
        '2AY' => 'E02006454',
        '2AZ' => 'E02006454',
        '2BA' => 'E02006454',
        '2BB' => 'E02006454',
        '2BD' => 'E02006454',
        '2BE' => 'E02006454',
        '2BF' => 'E02006455',
        '2BG' => 'E02006454',
        '2BH' => 'E02006454',
        '2BJ' => 'E02006454',
        '2BL' => 'E02006454',
        '2BN' => 'E02006454',
        '2BP' => 'E02006454',
        '2BQ' => 'E02006454',
        '2BS' => 'E02006454',
        '2BT' => 'E02006454',
        '2BU' => 'E02006454',
        '2BW' => 'E02006454',
        '2BX' => 'E02006454',
        '2BY' => 'E02006454',
        '2BZ' => 'E02006454',
        '2DA' => 'E02006454',
        '2DB' => 'E02006454',
        '2DD' => 'E02006450',
        '2DE' => 'E02006454',
        '2DF' => 'E02006454',
        '2DG' => 'E02006454',
        '2DH' => 'E02006454',
        '2DJ' => 'E02006454',
        '2DL' => 'E02006450',
        '2DN' => 'E02006454',
        '2DP' => 'E02006454',
        '2DQ' => 'E02006450',
        '2DR' => 'E02006454',
        '2DS' => 'E02006454',
        '2DT' => 'E02006454',
        '2DU' => 'E02006454',
        '2DW' => 'E02006454',
        '2DX' => 'E02006454',
        '2DY' => 'E02006454',
        '2DZ' => 'E02006454',
        '2EA' => 'E02006454',
        '2EB' => 'E02006454',
        '2ED' => 'E02006454',
        '2EE' => 'E02006454',
        '2EF' => 'E02006453',
        '2EG' => 'E02006454',
        '2EH' => 'E02006453',
        '2EJ' => 'E02006453',
        '2EL' => 'E02006453',
        '2EN' => 'E02006453',
        '2EP' => 'E02006454',
        '2EQ' => 'E02006453',
        '2ER' => 'E02006454',
        '2ES' => 'E02006454',
        '2ET' => 'E02006454',
        '2EU' => 'E02006454',
        '2EW' => 'E02006453',
        '2EX' => 'E02006453',
        '2EY' => 'E02006454',
        '2EZ' => 'E02006454',
        '2FD' => 'E02006454',
        '2FE' => 'E02006454',
        '2FG' => 'E02006561',
        '2FH' => 'E02006454',
        '2FJ' => 'E02006454',
        '2HA' => 'E02006454',
        '2HD' => 'E02006454',
        '2HE' => 'E02006454',
        '2HG' => 'E02006454',
        '2HH' => 'E02006454',
        '2HJ' => 'E02006454',
        '2HL' => 'E02006454',
        '2HN' => 'E02006454',
        '2HP' => 'E02006454',
        '2HQ' => 'E02006454',
        '2HR' => 'E02006454',
        '2HT' => 'E02006454',
        '2HU' => 'E02006454',
        '2HW' => 'E02006454',
        '2HX' => 'E02006454',
        '2HY' => 'E02006454',
        '2HZ' => 'E02006454',
        '2JA' => 'E02006454',
        '2JB' => 'E02006454',
        '2JD' => 'E02006454',
        '2JE' => 'E02006454',
        '2JF' => 'E02006454',
        '2JG' => 'E02006454',
        '2JH' => 'E02006454',
        '2JJ' => 'E02006454',
        '2JL' => 'E02006454',
        '2JN' => 'E02006454',
        '2JP' => 'E02006454',
        '2JQ' => 'E02006454',
        '2JR' => 'E02006454',
        '2JS' => 'E02006454',
        '2JT' => 'E02006454',
        '2JU' => 'E02006454',
        '2JW' => 'E02006454',
        '2JX' => 'E02006454',
        '2JY' => 'E02006454',
        '2JZ' => 'E02006454',
        '2LA' => 'E02006454',
        '2LB' => 'E02006454',
        '2LD' => 'E02006454',
        '2LE' => 'E02006454',
        '2LF' => 'E02006454',
        '2LG' => 'E02006454',
        '2LH' => 'E02006454',
        '2LJ' => 'E02006454',
        '2LL' => 'E02006454',
        '2LN' => 'E02006454',
        '2LP' => 'E02006454',
        '2LQ' => 'E02006454',
        '2LS' => 'E02006454',
        '2LT' => 'E02006454',
        '2LW' => 'E02006454',
        '2LY' => 'E02006454',
        '2LZ' => 'E02006454',
        '2NA' => 'E02006454',
        '2NB' => 'E02006454',
        '2ND' => 'E02006454',
        '2NE' => 'E02006454',
        '2NF' => 'E02006454',
        '2NG' => 'E02006454',
        '2NH' => 'E02006454',
        '2NJ' => 'E02006454',
        '2NL' => 'E02006454',
        '2NN' => 'E02006454',
        '2NP' => 'E02006454',
        '2NQ' => 'E02006454',
        '2NR' => 'E02006454',
        '2NS' => 'E02006454',
        '2NT' => 'E02006454',
        '2NU' => 'E02006454',
        '2NW' => 'E02006454',
        '2NX' => 'E02006454',
        '2NY' => 'E02006454',
        '2NZ' => 'E02006454',
        '2PA' => 'E02006454',
        '2PB' => 'E02006454',
        '2PD' => 'E02006454',
        '2PE' => 'E02006454',
        '2PF' => 'E02006454',
        '2PG' => 'E02006454',
        '2PH' => 'E02006454',
        '2PJ' => 'E02006454',
        '2PL' => 'E02006454',
        '2PN' => 'E02006454',
        '2PP' => 'E02006454',
        '2PQ' => 'E02006454',
        '2PR' => 'E02006454',
        '2PS' => 'E02006454',
        '2PT' => 'E02006454',
        '2PU' => 'E02006454',
        '2PW' => 'E02006454',
        '2PX' => 'E02006454',
        '2PY' => 'E02006454',
        '2PZ' => 'E02006454',
        '2QA' => 'E02006455',
        '2QB' => 'E02006455',
        '2QD' => 'E02006455',
        '2QE' => 'E02006454',
        '2QF' => 'E02006455',
        '2QG' => 'E02006455',
        '2QH' => 'E02006455',
        '2QJ' => 'E02006455',
        '2QL' => 'E02006455',
        '2QN' => 'E02006455',
        '2QP' => 'E02006455',
        '2QQ' => 'E02006455',
        '2QR' => 'E02006455',
        '2QS' => 'E02006455',
        '2QT' => 'E02006455',
        '2QU' => 'E02006455',
        '2QW' => 'E02006455',
        '2QY' => 'E02006454',
        '2RD' => 'E02006454',
        '2RF' => 'E02006450',
        '2RJ' => 'E02006450',
        '2RL' => 'E02006454',
        '2RN' => 'E02006450',
        '2RP' => 'E02006450',
        '2RR' => 'E02006454',
        '2RU' => 'E02006454',
        '2RW' => 'E02006454',
        '2WA' => 'E02006455',
        '2WW' => 'E02006455',
        '2WX' => 'E02006455',
        '2WY' => 'E02006455',
        '2WZ' => 'E02006454',
        '2XA' => 'E02006454',
        '2XG' => 'E02006455',
        '2XH' => 'E02006454',
        '2XJ' => 'E02006454',
        '2XL' => 'E02006454',
        '2XN' => 'E02006454',
        '2XP' => 'E02006454',
        '2XQ' => 'E02006455',
        '2XR' => 'E02006450',
        '2XS' => 'E02006454',
        '2XT' => 'E02006450',
        '2XU' => 'E02006455',
        '2XW' => 'E02006454',
        '2XX' => 'E02006454',
        '2XY' => 'E02006454',
        '2XZ' => 'E02006454',
        '2YA' => 'E02006455',
        '2YB' => 'E02006454',
        '2YD' => 'E02006454',
        '2YE' => 'E02006455',
        '2YF' => 'E02006454',
        '2YG' => 'E02006455',
        '2YH' => 'E02006450',
        '2YJ' => 'E02006454',
        '2YL' => 'E02006454',
        '2YN' => 'E02006454',
        '2YP' => 'E02006455',
        '2YQ' => 'E02006455',
        '2YR' => 'E02006454',
        '2YS' => 'E02006455',
        '2YT' => 'E02006455',
        '2YU' => 'E02006450',
        '2YW' => 'E02006450',
        '2YX' => 'E02006450',
        '2YY' => 'E02006450',
        '2YZ' => 'E02006455',
        '2ZN' => 'E02006455',
        '2ZX' => 'E02006455',
        '3AA' => 'E02006454',
        '3AB' => 'E02006454',
        '3AD' => 'E02006454',
        '3AE' => 'E02006454',
        '3AF' => 'E02006454',
        '3AG' => 'E02006454',
        '3AH' => 'E02006455',
        '3AJ' => 'E02006561',
        '3AL' => 'E02006454',
        '3AN' => 'E02006454',
        '3AP' => 'E02006454',
        '3AQ' => 'E02006454',
        '3AR' => 'E02006454',
        '3AS' => 'E02006454',
        '3AT' => 'E02006454',
        '3AU' => 'E02006454',
        '3AW' => 'E02006454',
        '3AX' => 'E02006454',
        '3AY' => 'E02006454',
        '3AZ' => 'E02006454',
        '3BA' => 'E02006454',
        '3BB' => 'E02006454',
        '3BD' => 'E02006454',
        '3BE' => 'E02006453',
        '3BF' => 'E02006454',
        '3BG' => 'E02006453',
        '3BH' => 'E02006561',
        '3BJ' => 'E02006561',
        '3BL' => 'E02006561',
        '3BN' => 'E02006561',
        '3BP' => 'E02006561',
        '3BQ' => 'E02006453',
        '3BS' => 'E02006561',
        '3BT' => 'E02006561',
        '3BU' => 'E02006561',
        '3BW' => 'E02006561',
        '3BX' => 'E02006561',
        '3BY' => 'E02006561',
        '3BZ' => 'E02006561',
        '3DA' => 'E02006561',
        '3DB' => 'E02006561',
        '3DE' => 'E02006561',
        '3DF' => 'E02006454',
        '3DG' => 'E02006454',
        '3DH' => 'E02006561',
        '3DJ' => 'E02006561',
        '3DL' => 'E02006561',
        '3DN' => 'E02006561',
        '3DP' => 'E02006561',
        '3DQ' => 'E02006454',
        '3DR' => 'E02006561',
        '3DS' => 'E02006455',
        '3DT' => 'E02006561',
        '3DU' => 'E02006454',
        '3DW' => 'E02006561',
        '3DX' => 'E02006561',
        '3DY' => 'E02006561',
        '3DZ' => 'E02006561',
        '3EA' => 'E02006561',
        '3EB' => 'E02006561',
        '3ED' => 'E02006561',
        '3EE' => 'E02006561',
        '3EF' => 'E02006561',
        '3EG' => 'E02006561',
        '3EH' => 'E02006561',
        '3EJ' => 'E02006561',
        '3EL' => 'E02006561',
        '3EN' => 'E02006561',
        '3EP' => 'E02006561',
        '3EQ' => 'E02006561',
        '3ER' => 'E02006561',
        '3ES' => 'E02006561',
        '3ET' => 'E02006561',
        '3EU' => 'E02006561',
        '3EW' => 'E02006561',
        '3EX' => 'E02006561',
        '3EY' => 'E02006561',
        '3EZ' => 'E02006561',
        '3FA' => 'E02006454',
        '3HA' => 'E02006561',
        '3HB' => 'E02006561',
        '3HD' => 'E02006454',
        '3HE' => 'E02006561',
        '3HF' => 'E02006561',
        '3HG' => 'E02006561',
        '3HH' => 'E02006561',
        '3HJ' => 'E02006561',
        '3HL' => 'E02006561',
        '3HN' => 'E02006561',
        '3HP' => 'E02006561',
        '3HQ' => 'E02006564',
        '3HR' => 'E02006561',
        '3HS' => 'E02006561',
        '3HT' => 'E02006561',
        '3HU' => 'E02006561',
        '3HW' => 'E02006561',
        '3HX' => 'E02006561',
        '3HY' => 'E02006561',
        '3HZ' => 'E02006561',
        '3JA' => 'E02006561',
        '3JB' => 'E02006561',
        '3JD' => 'E02006561',
        '3JE' => 'E02006561',
        '3JF' => 'E02006561',
        '3JG' => 'E02006561',
        '3JH' => 'E02006561',
        '3JJ' => 'E02006565',
        '3JL' => 'E02006561',
        '3JN' => 'E02006561',
        '3JP' => 'E02006561',
        '3JQ' => 'E02006561',
        '3JR' => 'E02006561',
        '3JS' => 'E02006561',
        '3JT' => 'E02006561',
        '3JU' => 'E02006561',
        '3JW' => 'E02006561',
        '3JX' => 'E02006561',
        '3JY' => 'E02006561',
        '3JZ' => 'E02006561',
        '3LA' => 'E02006561',
        '3LB' => 'E02006561',
        '3LD' => 'E02006561',
        '3LE' => 'E02006561',
        '3LF' => 'E02006561',
        '3LG' => 'E02006561',
        '3LH' => 'E02006561',
        '3LJ' => 'E02006561',
        '3LL' => 'E02006561',
        '3LN' => 'E02006561',
        '3LP' => 'E02006561',
        '3LQ' => 'E02006561',
        '3LR' => 'E02006561',
        '3LS' => 'E02006561',
        '3LT' => 'E02006561',
        '3LU' => 'E02006561',
        '3LW' => 'E02006561',
        '3LX' => 'E02006561',
        '3LY' => 'E02006455',
        '3LZ' => 'E02006561',
        '3NA' => 'E02006561',
        '3NB' => 'E02006561',
        '3ND' => 'E02006561',
        '3NE' => 'E02006561',
        '3NF' => 'E02006561',
        '3NG' => 'E02006561',
        '3NH' => 'E02006561',
        '3NJ' => 'E02006561',
        '3NL' => 'E02006561',
        '3NN' => 'E02006561',
        '3NP' => 'E02006561',
        '3NQ' => 'E02006561',
        '3NR' => 'E02006561',
        '3NS' => 'E02006561',
        '3NT' => 'E02006561',
        '3NU' => 'E02006561',
        '3NW' => 'E02006561',
        '3NX' => 'E02006454',
        '3NY' => 'E02006561',
        '3NZ' => 'E02006561',
        '3PA' => 'E02006561',
        '3PB' => 'E02006561',
        '3PD' => 'E02006561',
        '3PE' => 'E02006561',
        '3PF' => 'E02006561',
        '3PG' => 'E02006561',
        '3PH' => 'E02006561',
        '3PJ' => 'E02006455',
        '3PL' => 'E02006455',
        '3PN' => 'E02006455',
        '3PP' => 'E02006561',
        '3PQ' => 'E02006454',
        '3PR' => 'E02006561',
        '3PS' => 'E02006561',
        '3PT' => 'E02006561',
        '3PU' => 'E02006561',
        '3PW' => 'E02006455',
        '3PX' => 'E02006561',
        '3PY' => 'E02006561',
        '3PZ' => 'E02006561',
        '3QA' => 'E02006561',
        '3QB' => 'E02006561',
        '3QD' => 'E02006561',
        '3QE' => 'E02006561',
        '3QF' => 'E02006561',
        '3QG' => 'E02006561',
        '3QH' => 'E02006561',
        '3QJ' => 'E02006561',
        '3QL' => 'E02006561',
        '3QN' => 'E02006561',
        '3QP' => 'E02006561',
        '3QQ' => 'E02006561',
        '3QR' => 'E02006561',
        '3QS' => 'E02006561',
        '3QT' => 'E02006561',
        '3QU' => 'E02006561',
        '3QW' => 'E02006561',
        '3QX' => 'E02006561',
        '3QY' => 'E02006561',
        '3QZ' => 'E02006561',
        '3RA' => 'E02006455',
        '3RB' => 'E02006561',
        '3RD' => 'E02006454',
        '3RE' => 'E02006561',
        '3RF' => 'E02006561',
        '3RG' => 'E02006561',
        '3RH' => 'E02006561',
        '3RJ' => 'E02006561',
        '3RL' => 'E02006561',
        '3RN' => 'E02006561',
        '3RP' => 'E02006561',
        '3RQ' => 'E02006561',
        '3RR' => 'E02006561',
        '3RS' => 'E02006455',
        '3RT' => 'E02006455',
        '3RU' => 'E02006455',
        '3RW' => 'E02006561',
        '3RX' => 'E02006455',
        '3RY' => 'E02006561',
        '3RZ' => 'E02006455',
        '3SA' => 'E02006561',
        '3SB' => 'E02006455',
        '3SD' => 'E02006455',
        '3SE' => 'E02006455',
        '3SF' => 'E02006454',
        '3SG' => 'E02006561',
        '3SH' => 'E02006561',
        '3SJ' => 'E02006561',
        '3SL' => 'E02006561',
        '3SN' => 'E02006561',
        '3SP' => 'E02006561',
        '3SQ' => 'E02006561',
        '3SR' => 'E02006561',
        '3SS' => 'E02006561',
        '3ST' => 'E02006561',
        '3SU' => 'E02006561',
        '3SW' => 'E02006561',
        '3SX' => 'E02006561',
        '3SY' => 'E02006454',
        '3SZ' => 'E02006561',
        '3TA' => 'E02006561',
        '3TB' => 'E02006561',
        '3TD' => 'E02006454',
        '3TE' => 'E02006454',
        '3TF' => 'E02006454',
        '3TG' => 'E02006561',
        '3TJ' => 'E02006561',
        '3TL' => 'E02006561',
        '3TN' => 'E02006561',
        '3TQ' => 'E02006561',
        '3UA' => 'E02006454',
        '3WA' => 'E02006455',
        '3WB' => 'E02006455',
        '3WD' => 'E02006455',
        '3WE' => 'E02006454',
        '3WF' => 'E02006455',
        '3WY' => 'E02006455',
        '3WZ' => 'E02006455',
        '3XB' => 'E02006455',
        '3XD' => 'E02006561',
        '3XE' => 'E02006455',
        '3XF' => 'E02006561',
        '3XG' => 'E02006454',
        '3XH' => 'E02006455',
        '3XJ' => 'E02006455',
        '3XL' => 'E02006454',
        '3XN' => 'E02006561',
        '3XP' => 'E02006455',
        '3XQ' => 'E02006454',
        '3XR' => 'E02006454',
        '3XS' => 'E02006561',
        '3XT' => 'E02006561',
        '3XU' => 'E02006454',
        '3XW' => 'E02006454',
        '3XX' => 'E02006454',
        '3XY' => 'E02006561',
        '3XZ' => 'E02006454',
        '3YA' => 'E02006454',
        '3YB' => 'E02006455',
        '3YD' => 'E02006561',
        '3YE' => 'E02006454',
        '3YF' => 'E02006454',
        '3YG' => 'E02006455',
        '3YH' => 'E02006455',
        '3YJ' => 'E02006455',
        '3YL' => 'E02006454',
        '3YN' => 'E02006454',
        '3YP' => 'E02006454',
        '3YR' => 'E02006454',
        '3YS' => 'E02006561',
        '3YT' => 'E02006454',
        '3YU' => 'E02006454',
        '3YW' => 'E02006454',
        '3YX' => 'E02006455',
        '3YY' => 'E02006454',
        '3YZ' => 'E02006455',
        '3ZJ' => 'E02006455',
        '3ZL' => 'E02006455',
        '3ZN' => 'E02006455',
        '3ZP' => 'E02006455',
        '3ZQ' => 'E02006454',
        '3ZR' => 'E02006455',
        '3ZU' => 'E02006455',
        '3ZX' => 'E02006454',
        '3ZY' => 'E02006454',
        '9AA' => 'E02006455',
        '9AB' => 'E02006455',
        '9AD' => 'E02006455',
        '9AE' => 'E02006455',
        '9AF' => 'E02006455',
        '9AG' => 'E02006455',
        '9AH' => 'E02006455',
        '9AJ' => 'E02006455',
        '9AL' => 'E02006455',
        '9AN' => 'E02006455',
        '9AP' => 'E02006455',
        '9AQ' => 'E02006455',
        '9AS' => 'E02006455',
        '9AT' => 'E02006455',
        '9AU' => 'E02006455',
        '9AW' => 'E02006455',
        '9AX' => 'E02006455',
        '9AY' => 'E02006455',
        '9AZ' => 'E02006455',
        '9BA' => 'E02006455',
        '9BB' => 'E02006455',
        '9BD' => 'E02006455',
        '9BE' => 'E02006455',
        '9BF' => 'E02006455',
        '9BG' => 'E02006455',
        '9BH' => 'E02006455',
        '9BJ' => 'E02006455',
        '9BL' => 'E02006455',
        '9BN' => 'E02006455',
        '9BP' => 'E02006455',
        '9BQ' => 'E02006455',
        '9BR' => 'E02006455',
        '9BS' => 'E02006455',
        '9BT' => 'E02006455',
        '9BU' => 'E02006455',
        '9BW' => 'E02006455',
        '9BX' => 'E02006455',
        '9BY' => 'E02006455',
        '9BZ' => 'E02006455',
        '9DA' => 'E02006455',
        '9DB' => 'E02006455',
        '9DD' => 'E02006455',
        '9DE' => 'E02006455',
        '9DF' => 'E02006455',
        '9DG' => 'E02006455',
        '9DH' => 'E02006455',
        '9DJ' => 'E02006455',
        '9DL' => 'E02006455',
        '9DN' => 'E02006455',
        '9DP' => 'E02006455',
        '9DQ' => 'E02006455',
        '9DR' => 'E02006455',
        '9DS' => 'E02006455',
        '9DT' => 'E02006455',
        '9DU' => 'E02006455',
        '9DW' => 'E02006455',
        '9DX' => 'E02006455',
        '9DY' => 'E02006455',
        '9DZ' => 'E02006455',
        '9EA' => 'E02006455',
        '9EB' => 'E02006455',
        '9ED' => 'E02006455',
        '9EE' => 'E02006455',
        '9EF' => 'E02006455',
        '9EG' => 'E02006455',
        '9EH' => 'E02006455',
        '9EJ' => 'E02006455',
        '9EL' => 'E02006455',
        '9EN' => 'E02006455',
        '9EP' => 'E02006455',
        '9EQ' => 'E02006455',
        '9ER' => 'E02006455',
        '9ES' => 'E02006455',
        '9ET' => 'E02006455',
        '9EU' => 'E02006455',
        '9EW' => 'E02006455',
        '9EX' => 'E02006455',
        '9EY' => 'E02006455',
        '9EZ' => 'E02006455',
        '9FA' => 'E02006455',
        '9FB' => 'E02006455',
        '9FD' => 'E02006455',
        '9FE' => 'E02006455',
        '9FF' => 'E02006455',
        '9FG' => 'E02006455',
        '9FH' => 'E02006455',
        '9FJ' => 'E02006455',
        '9FL' => 'E02006455',
        '9FN' => 'E02006455',
        '9FP' => 'E02006455',
        '9FQ' => 'E02006455',
        '9FR' => 'E02006455',
        '9FS' => 'E02006455',
        '9FT' => 'E02006455',
        '9FU' => 'E02006455',
        '9FW' => 'E02006455',
        '9FX' => 'E02006455',
        '9FY' => 'E02006455',
        '9FZ' => 'E02006455',
        '9GA' => 'E02006455',
        '9GB' => 'E02006455',
        '9GD' => 'E02006455',
        '9GE' => 'E02006455',
        '9GF' => 'E02006455',
        '9GG' => 'E02006455',
        '9GH' => 'E02006455',
        '9GJ' => 'E02006455',
        '9GL' => 'E02006455',
        '9GN' => 'E02006455',
        '9GP' => 'E02006455',
        '9GQ' => 'E02006455',
        '9GR' => 'E02006455',
        '9GS' => 'E02006455',
        '9GT' => 'E02006455',
        '9GU' => 'E02006455',
        '9GW' => 'E02006455',
        '9GX' => 'E02006455',
        '9GY' => 'E02006455',
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
