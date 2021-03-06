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
final class WR10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006759',
        '1AB' => 'E02006759',
        '1AD' => 'E02006759',
        '1AE' => 'E02006759',
        '1AF' => 'E02006759',
        '1AG' => 'E02006759',
        '1AH' => 'E02006759',
        '1AJ' => 'E02006759',
        '1AL' => 'E02006759',
        '1AN' => 'E02006759',
        '1AP' => 'E02006759',
        '1AQ' => 'E02006759',
        '1AR' => 'E02006759',
        '1AS' => 'E02006759',
        '1AT' => 'E02006759',
        '1AU' => 'E02006759',
        '1AW' => 'E02006759',
        '1AX' => 'E02006759',
        '1AY' => 'E02006759',
        '1AZ' => 'E02006759',
        '1BA' => 'E02006759',
        '1BB' => 'E02006759',
        '1BD' => 'E02006759',
        '1BE' => 'E02006759',
        '1BF' => 'E02006759',
        '1BG' => 'E02006759',
        '1BH' => 'E02006759',
        '1BJ' => 'E02006759',
        '1BL' => 'E02006759',
        '1BN' => 'E02006759',
        '1BP' => 'E02006759',
        '1BQ' => 'E02006759',
        '1BS' => 'E02006759',
        '1BT' => 'E02006759',
        '1BU' => 'E02006759',
        '1BW' => 'E02006759',
        '1BX' => 'E02006759',
        '1BY' => 'E02006759',
        '1BZ' => 'E02006759',
        '1DA' => 'E02006759',
        '1DB' => 'E02006759',
        '1DD' => 'E02006759',
        '1DE' => 'E02006759',
        '1DF' => 'E02006759',
        '1DG' => 'E02006759',
        '1DH' => 'E02006759',
        '1DJ' => 'E02006759',
        '1DL' => 'E02006759',
        '1DN' => 'E02006759',
        '1DP' => 'E02006759',
        '1DQ' => 'E02006759',
        '1DR' => 'E02006759',
        '1DS' => 'E02006759',
        '1DT' => 'E02006759',
        '1DU' => 'E02006759',
        '1DW' => 'E02006759',
        '1DX' => 'E02006759',
        '1DY' => 'E02006759',
        '1DZ' => 'E02006759',
        '1EA' => 'E02006759',
        '1EB' => 'E02006759',
        '1ED' => 'E02006759',
        '1EE' => 'E02006759',
        '1EF' => 'E02006759',
        '1EG' => 'E02006759',
        '1EH' => 'E02006759',
        '1EJ' => 'E02006759',
        '1EL' => 'E02006759',
        '1EN' => 'E02006759',
        '1EP' => 'E02006759',
        '1EQ' => 'E02006759',
        '1ER' => 'E02006759',
        '1ES' => 'E02006759',
        '1ET' => 'E02006759',
        '1EU' => 'E02006759',
        '1EW' => 'E02006759',
        '1EX' => 'E02006759',
        '1EY' => 'E02006759',
        '1EZ' => 'E02006759',
        '1FA' => 'E02006759',
        '1FB' => 'E02006759',
        '1FD' => 'E02006759',
        '1FE' => 'E02006759',
        '1FF' => 'E02006759',
        '1FG' => 'E02006759',
        '1GA' => 'E02006759',
        '1GB' => 'E02006759',
        '1HA' => 'E02006759',
        '1HB' => 'E02006759',
        '1HD' => 'E02006759',
        '1HE' => 'E02006759',
        '1HF' => 'E02006759',
        '1HG' => 'E02006759',
        '1HH' => 'E02006759',
        '1HJ' => 'E02006759',
        '1HL' => 'E02006759',
        '1HN' => 'E02006759',
        '1HP' => 'E02006759',
        '1HQ' => 'E02006759',
        '1HR' => 'E02006759',
        '1HS' => 'E02006759',
        '1HT' => 'E02006759',
        '1HU' => 'E02006759',
        '1HW' => 'E02006759',
        '1HX' => 'E02006759',
        '1HY' => 'E02006759',
        '1HZ' => 'E02006759',
        '1JA' => 'E02006759',
        '1JB' => 'E02006759',
        '1JD' => 'E02006759',
        '1JE' => 'E02006759',
        '1JF' => 'E02006759',
        '1JG' => 'E02006759',
        '1JH' => 'E02006759',
        '1JJ' => 'E02006759',
        '1JL' => 'E02006759',
        '1JN' => 'E02006759',
        '1JP' => 'E02006759',
        '1JQ' => 'E02006759',
        '1JR' => 'E02006759',
        '1JS' => 'E02006759',
        '1JT' => 'E02006759',
        '1JU' => 'E02006759',
        '1JW' => 'E02006759',
        '1JX' => 'E02006759',
        '1JY' => 'E02006759',
        '1JZ' => 'E02006759',
        '1LA' => 'E02006759',
        '1LB' => 'E02006759',
        '1LD' => 'E02006759',
        '1LE' => 'E02006759',
        '1LF' => 'E02006759',
        '1LG' => 'E02006759',
        '1LH' => 'E02006759',
        '1LJ' => 'E02006759',
        '1LL' => 'E02006759',
        '1LN' => 'E02006759',
        '1LP' => 'E02006759',
        '1LQ' => 'E02006759',
        '1LR' => 'E02006759',
        '1LS' => 'E02006759',
        '1LT' => 'E02006759',
        '1LU' => 'E02006759',
        '1LW' => 'E02006759',
        '1LX' => 'E02006759',
        '1LY' => 'E02006759',
        '1LZ' => 'E02006759',
        '1NA' => 'E02006759',
        '1NB' => 'E02006759',
        '1ND' => 'E02006759',
        '1NE' => 'E02006759',
        '1NF' => 'E02006759',
        '1NG' => 'E02006759',
        '1NH' => 'E02006759',
        '1NJ' => 'E02006759',
        '1NL' => 'E02006759',
        '1NN' => 'E02006759',
        '1NP' => 'E02006759',
        '1NQ' => 'E02006759',
        '1NR' => 'E02006759',
        '1NS' => 'E02006759',
        '1NT' => 'E02006759',
        '1NU' => 'E02006759',
        '1NW' => 'E02006759',
        '1NX' => 'E02006759',
        '1NY' => 'E02006759',
        '1NZ' => 'E02006759',
        '1PA' => 'E02006759',
        '1PB' => 'E02006759',
        '1PD' => 'E02006759',
        '1PE' => 'E02006759',
        '1PF' => 'E02006759',
        '1PG' => 'E02006759',
        '1PH' => 'E02006759',
        '1PJ' => 'E02006759',
        '1PL' => 'E02006759',
        '1PN' => 'E02006759',
        '1PP' => 'E02006759',
        '1PQ' => 'E02006759',
        '1PR' => 'E02006759',
        '1PS' => 'E02006759',
        '1PT' => 'E02006759',
        '1PU' => 'E02006759',
        '1PW' => 'E02006759',
        '1PX' => 'E02006759',
        '1PY' => 'E02006759',
        '1PZ' => 'E02006759',
        '1QB' => 'E02006759',
        '1QD' => 'E02006759',
        '1QE' => 'E02006759',
        '1QF' => 'E02006759',
        '1QG' => 'E02006759',
        '1QH' => 'E02006759',
        '1QJ' => 'E02006759',
        '1QL' => 'E02006759',
        '1QN' => 'E02006759',
        '1QP' => 'E02006759',
        '1QQ' => 'E02006759',
        '1QR' => 'E02006759',
        '1QS' => 'E02006759',
        '1QT' => 'E02006759',
        '1QU' => 'E02006759',
        '1QW' => 'E02006759',
        '1QX' => 'E02006759',
        '1QY' => 'E02006759',
        '1QZ' => 'E02006759',
        '1RA' => 'E02006759',
        '1RB' => 'E02006759',
        '1RD' => 'E02006759',
        '1RE' => 'E02006759',
        '1RF' => 'E02006759',
        '1RG' => 'E02006759',
        '1RH' => 'E02006759',
        '1RJ' => 'E02006759',
        '1RL' => 'E02006759',
        '1RN' => 'E02006759',
        '1RP' => 'E02006759',
        '1RQ' => 'E02006759',
        '1RS' => 'E02006759',
        '1RT' => 'E02006759',
        '1RU' => 'E02006759',
        '1RW' => 'E02006759',
        '1RY' => 'E02006759',
        '1RZ' => 'E02006759',
        '1WY' => 'E02006759',
        '1WZ' => 'E02006759',
        '1YA' => 'E02006759',
        '1YB' => 'E02006759',
        '1YD' => 'E02006759',
        '1YE' => 'E02006759',
        '1YF' => 'E02006759',
        '1YG' => 'E02006759',
        '1YH' => 'E02006759',
        '1YJ' => 'E02006759',
        '1YL' => 'E02006759',
        '1YN' => 'E02006759',
        '1YP' => 'E02006759',
        '1YQ' => 'E02006759',
        '1YR' => 'E02006759',
        '1YS' => 'E02006759',
        '1YT' => 'E02006759',
        '1YU' => 'E02006759',
        '1YW' => 'E02006759',
        '1YX' => 'E02006759',
        '1YY' => 'E02006759',
        '1YZ' => 'E02006759',
        '1ZG' => 'E02006759',
        '1ZH' => 'E02006759',
        '1ZJ' => 'E02006759',
        '1ZL' => 'E02006759',
        '1ZN' => 'E02006759',
        '1ZP' => 'E02006759',
        '1ZQ' => 'E02006759',
        '1ZR' => 'E02006759',
        '1ZY' => 'E02006759',
        '2AA' => 'E02006759',
        '2AB' => 'E02006759',
        '2AD' => 'E02006766',
        '2AE' => 'E02006756',
        '2AF' => 'E02006756',
        '2AG' => 'E02006756',
        '2AH' => 'E02006756',
        '2AJ' => 'E02006756',
        '2AL' => 'E02006756',
        '2AN' => 'E02006756',
        '2AP' => 'E02006756',
        '2AQ' => 'E02006756',
        '2AR' => 'E02006756',
        '2AS' => 'E02006756',
        '2AT' => 'E02006756',
        '2AU' => 'E02006756',
        '2AW' => 'E02006756',
        '2AX' => 'E02006756',
        '2AY' => 'E02006756',
        '2AZ' => 'E02006756',
        '2BA' => 'E02006756',
        '2BB' => 'E02006756',
        '2BD' => 'E02006756',
        '2BE' => 'E02006756',
        '2BF' => 'E02006754',
        '2BG' => 'E02006756',
        '2BH' => 'E02006756',
        '2BJ' => 'E02006756',
        '2BL' => 'E02006756',
        '2BN' => 'E02006756',
        '2BP' => 'E02006756',
        '2BQ' => 'E02006756',
        '2BS' => 'E02006756',
        '2BT' => 'E02006759',
        '2BU' => 'E02006759',
        '2BW' => 'E02006756',
        '2BX' => 'E02006759',
        '2BY' => 'E02006759',
        '2BZ' => 'E02006759',
        '2DA' => 'E02006759',
        '2DB' => 'E02006759',
        '2DD' => 'E02006759',
        '2DE' => 'E02006757',
        '2DF' => 'E02006759',
        '2DG' => 'E02006759',
        '2DH' => 'E02006757',
        '2DJ' => 'E02006757',
        '2DL' => 'E02006759',
        '2DN' => 'E02006757',
        '2DP' => 'E02006757',
        '2DQ' => 'E02006757',
        '2DR' => 'E02006757',
        '2DS' => 'E02006757',
        '2DT' => 'E02006757',
        '2DU' => 'E02006757',
        '2DW' => 'E02006757',
        '2DX' => 'E02006757',
        '2DY' => 'E02006756',
        '2DZ' => 'E02006754',
        '2EA' => 'E02006754',
        '2EB' => 'E02006754',
        '2ED' => 'E02006754',
        '2EE' => 'E02006754',
        '2EF' => 'E02006754',
        '2EG' => 'E02006754',
        '2EH' => 'E02006754',
        '2EJ' => 'E02006754',
        '2EL' => 'E02006754',
        '2EN' => 'E02006754',
        '2EP' => 'E02006757',
        '2EQ' => 'E02006754',
        '2ER' => 'E02006757',
        '2ES' => 'E02006757',
        '2ET' => 'E02006757',
        '2EU' => 'E02006757',
        '2EW' => 'E02006754',
        '2EX' => 'E02006757',
        '2EY' => 'E02006759',
        '2EZ' => 'E02006754',
        '2FA' => 'E02006757',
        '2FB' => 'E02006759',
        '2FD' => 'E02006757',
        '2FN' => 'E02006756',
        '2FR' => 'E02006756',
        '2FS' => 'E02006756',
        '2FT' => 'E02006757',
        '2FU' => 'E02006756',
        '2FW' => 'E02006757',
        '2FX' => 'E02006756',
        '2FY' => 'E02006756',
        '2FZ' => 'E02006756',
        '2GA' => 'E02006759',
        '2GD' => 'E02006756',
        '2GR' => 'E02006759',
        '2HA' => 'E02006754',
        '2HB' => 'E02006757',
        '2HD' => 'E02006757',
        '2HN' => 'E02006755',
        '2HP' => 'E02006757',
        '2HQ' => 'E02006754',
        '2HR' => 'E02006757',
        '2HS' => 'E02006757',
        '2HT' => 'E02006757',
        '2HU' => 'E02006757',
        '2HW' => 'E02006757',
        '2HX' => 'E02006757',
        '2HY' => 'E02006757',
        '2HZ' => 'E02006757',
        '2JA' => 'E02006757',
        '2JB' => 'E02006757',
        '2JD' => 'E02006757',
        '2JE' => 'E02006757',
        '2JF' => 'E02006757',
        '2JG' => 'E02006757',
        '2JH' => 'E02006757',
        '2JJ' => 'E02006759',
        '2JL' => 'E02006759',
        '2JN' => 'E02006759',
        '2JP' => 'E02006759',
        '2JQ' => 'E02006757',
        '2JR' => 'E02006757',
        '2JS' => 'E02006757',
        '2JT' => 'E02006757',
        '2JU' => 'E02006757',
        '2JW' => 'E02006757',
        '2JX' => 'E02006757',
        '2JY' => 'E02006757',
        '2JZ' => 'E02006757',
        '2LA' => 'E02006757',
        '2LB' => 'E02006757',
        '2LD' => 'E02006757',
        '2LE' => 'E02006757',
        '2LF' => 'E02006754',
        '2LG' => 'E02006755',
        '2LH' => 'E02006755',
        '2LJ' => 'E02006755',
        '2LL' => 'E02006755',
        '2LN' => 'E02006755',
        '2LP' => 'E02006757',
        '2LQ' => 'E02006755',
        '2LR' => 'E02006757',
        '2LS' => 'E02006755',
        '2LT' => 'E02006757',
        '2LU' => 'E02006757',
        '2LW' => 'E02006757',
        '2LX' => 'E02006757',
        '2LY' => 'E02006757',
        '2LZ' => 'E02006757',
        '2NA' => 'E02006757',
        '2NB' => 'E02006757',
        '2ND' => 'E02006757',
        '2NE' => 'E02006757',
        '2NF' => 'E02006757',
        '2NG' => 'E02006759',
        '2NH' => 'E02006757',
        '2NJ' => 'E02006757',
        '2NL' => 'E02006757',
        '2NN' => 'E02006757',
        '2NP' => 'E02006755',
        '2NQ' => 'E02006757',
        '2NR' => 'E02006755',
        '2NS' => 'E02006757',
        '2NT' => 'E02006756',
        '2NU' => 'E02006757',
        '2NW' => 'E02006757',
        '2NX' => 'E02006757',
        '2NY' => 'E02006757',
        '2NZ' => 'E02006757',
        '2PA' => 'E02006757',
        '2PB' => 'E02006757',
        '2PD' => 'E02006757',
        '2PE' => 'E02006757',
        '2PF' => 'E02006757',
        '2PG' => 'E02006757',
        '2PH' => 'E02006757',
        '2PJ' => 'E02006757',
        '2PL' => 'E02006757',
        '2PN' => 'E02006757',
        '2PP' => 'E02006757',
        '2PQ' => 'E02006757',
        '2PR' => 'E02006757',
        '2PS' => 'E02006757',
        '2PT' => 'E02006757',
        '2PU' => 'E02006757',
        '2PW' => 'E02006757',
        '2PX' => 'E02006757',
        '2PY' => 'E02006757',
        '2PZ' => 'E02006757',
        '2QA' => 'E02006757',
        '2QB' => 'E02006757',
        '2QD' => 'E02006757',
        '2QE' => 'E02006757',
        '2QF' => 'E02006757',
        '2QG' => 'E02006757',
        '2QH' => 'E02006757',
        '2QJ' => 'E02006757',
        '2QL' => 'E02006757',
        '2QN' => 'E02006757',
        '2QP' => 'E02006757',
        '2QQ' => 'E02006757',
        '2QR' => 'E02006757',
        '2QS' => 'E02006757',
        '2QT' => 'E02006757',
        '2QU' => 'E02006757',
        '2QW' => 'E02006757',
        '2QX' => 'E02006757',
        '2QY' => 'E02006757',
        '2QZ' => 'E02006757',
        '2RA' => 'E02006757',
        '2RB' => 'E02006757',
        '2RD' => 'E02006759',
        '2RE' => 'E02006757',
        '2RF' => 'E02006755',
        '2RG' => 'E02006757',
        '2RH' => 'E02006759',
        '2RJ' => 'E02006757',
        '2RL' => 'E02006757',
        '2RN' => 'E02006757',
        '2RP' => 'E02006757',
        '2RQ' => 'E02006757',
        '2RR' => 'E02006757',
        '2RS' => 'E02006757',
        '2RY' => 'E02006759',
        '2RZ' => 'E02006757',
        '2SA' => 'E02006756',
        '2TA' => 'E02006759',
        '2TZ' => 'E02006757',
        '2UW' => 'E02006759',
        '2UX' => 'E02006759',
        '2UY' => 'E02006759',
        '2UZ' => 'E02006759',
        '2WA' => 'E02006757',
        '2WB' => 'E02006759',
        '2WD' => 'E02006759',
        '2WE' => 'E02006759',
        '2WF' => 'E02006759',
        '2WG' => 'E02006759',
        '2WH' => 'E02006759',
        '2WJ' => 'E02006759',
        '2WL' => 'E02006759',
        '2WN' => 'E02006759',
        '2WP' => 'E02006759',
        '2WQ' => 'E02006759',
        '2WR' => 'E02006759',
        '2WS' => 'E02006759',
        '2WT' => 'E02006759',
        '2WU' => 'E02006759',
        '2WX' => 'E02006759',
        '2WY' => 'E02006759',
        '2WZ' => 'E02006759',
        '2XA' => 'E02006759',
        '2XB' => 'E02006759',
        '2XD' => 'E02006759',
        '2XE' => 'E02006759',
        '2XF' => 'E02006759',
        '2XG' => 'E02006759',
        '2XP' => 'E02006759',
        '2XQ' => 'E02006759',
        '2XR' => 'E02006759',
        '2XS' => 'E02006759',
        '2XT' => 'E02006759',
        '2XU' => 'E02006759',
        '2XW' => 'E02006759',
        '2XX' => 'E02006759',
        '2XY' => 'E02006759',
        '2XZ' => 'E02006759',
        '2YA' => 'E02006759',
        '2YB' => 'E02006759',
        '2YD' => 'E02006757',
        '2YE' => 'E02006759',
        '2YF' => 'E02006759',
        '2YG' => 'E02006759',
        '2YH' => 'E02006759',
        '2YJ' => 'E02006759',
        '2YL' => 'E02006757',
        '2YN' => 'E02006759',
        '2YP' => 'E02006759',
        '2YQ' => 'E02006759',
        '2YR' => 'E02006759',
        '2YS' => 'E02006756',
        '2YT' => 'E02006759',
        '2YU' => 'E02006759',
        '2YW' => 'E02006759',
        '2YX' => 'E02006757',
        '2YY' => 'E02006759',
        '2YZ' => 'E02006757',
        '2ZB' => 'E02006759',
        '2ZF' => 'E02006756',
        '2ZG' => 'E02006759',
        '2ZH' => 'E02006759',
        '2ZJ' => 'E02006757',
        '2ZL' => 'E02006759',
        '2ZN' => 'E02006759',
        '2ZP' => 'E02006759',
        '2ZQ' => 'E02006759',
        '2ZR' => 'E02006759',
        '2ZS' => 'E02006759',
        '2ZT' => 'E02006759',
        '2ZU' => 'E02006759',
        '2ZW' => 'E02006759',
        '2ZY' => 'E02006759',
        '3AA' => 'E02006766',
        '3AB' => 'E02006766',
        '3AD' => 'E02006766',
        '3AE' => 'E02006766',
        '3AF' => 'E02006766',
        '3AG' => 'E02006766',
        '3AH' => 'E02006766',
        '3AJ' => 'E02006766',
        '3AL' => 'E02006766',
        '3AN' => 'E02006766',
        '3AP' => 'E02006766',
        '3AQ' => 'E02006766',
        '3AR' => 'E02006766',
        '3AS' => 'E02006766',
        '3AT' => 'E02006766',
        '3AU' => 'E02006766',
        '3AW' => 'E02006766',
        '3AX' => 'E02006766',
        '3AY' => 'E02006766',
        '3AZ' => 'E02006766',
        '3BA' => 'E02006766',
        '3BB' => 'E02006766',
        '3BD' => 'E02006766',
        '3BE' => 'E02006766',
        '3BF' => 'E02006757',
        '3BG' => 'E02006766',
        '3BH' => 'E02006766',
        '3BJ' => 'E02006766',
        '3BL' => 'E02006766',
        '3BN' => 'E02006766',
        '3BP' => 'E02006766',
        '3BQ' => 'E02006766',
        '3BS' => 'E02006766',
        '3BT' => 'E02006766',
        '3BU' => 'E02006766',
        '3BW' => 'E02006766',
        '3BX' => 'E02006759',
        '3BY' => 'E02006759',
        '3BZ' => 'E02006766',
        '3DA' => 'E02006766',
        '3DB' => 'E02006766',
        '3DD' => 'E02006766',
        '3DE' => 'E02006766',
        '3DF' => 'E02006766',
        '3DG' => 'E02006766',
        '3DH' => 'E02006766',
        '3DJ' => 'E02006766',
        '3DL' => 'E02006766',
        '3DN' => 'E02006766',
        '3DP' => 'E02006757',
        '3DQ' => 'E02006766',
        '3DR' => 'E02006757',
        '3DS' => 'E02006757',
        '3DT' => 'E02006757',
        '3DU' => 'E02006757',
        '3DW' => 'E02006757',
        '3DX' => 'E02006757',
        '3DY' => 'E02006757',
        '3DZ' => 'E02006757',
        '3EA' => 'E02006759',
        '3EB' => 'E02006759',
        '3ED' => 'E02006759',
        '3EE' => 'E02006759',
        '3EF' => 'E02006759',
        '3EG' => 'E02006757',
        '3EH' => 'E02006757',
        '3EJ' => 'E02006759',
        '3EL' => 'E02006757',
        '3EN' => 'E02006757',
        '3EP' => 'E02006757',
        '3EQ' => 'E02006757',
        '3ER' => 'E02006757',
        '3ES' => 'E02006757',
        '3ET' => 'E02006759',
        '3EU' => 'E02006759',
        '3EW' => 'E02006757',
        '3EX' => 'E02006759',
        '3EY' => 'E02006759',
        '3EZ' => 'E02006766',
        '3FA' => 'E02006766',
        '3FB' => 'E02006766',
        '3GA' => 'E02006759',
        '3GZ' => 'E02006757',
        '3HA' => 'E02006759',
        '3HB' => 'E02006759',
        '3HD' => 'E02006759',
        '3HE' => 'E02006759',
        '3HF' => 'E02006757',
        '3HG' => 'E02006757',
        '3HH' => 'E02006757',
        '3HJ' => 'E02006757',
        '3HL' => 'E02006757',
        '3HN' => 'E02006757',
        '3HP' => 'E02006757',
        '3HQ' => 'E02006757',
        '3HR' => 'E02006757',
        '3HS' => 'E02006757',
        '3HT' => 'E02006757',
        '3HU' => 'E02006757',
        '3HW' => 'E02006757',
        '3HX' => 'E02006757',
        '3HY' => 'E02006757',
        '3HZ' => 'E02006757',
        '3JA' => 'E02006757',
        '3JB' => 'E02006757',
        '3JD' => 'E02006757',
        '3JE' => 'E02006757',
        '3JF' => 'E02006757',
        '3JG' => 'E02006757',
        '3JH' => 'E02006757',
        '3JJ' => 'E02006757',
        '3JL' => 'E02006757',
        '3JN' => 'E02006757',
        '3JP' => 'E02006757',
        '3JQ' => 'E02006757',
        '3JR' => 'E02006757',
        '3JS' => 'E02006757',
        '3JT' => 'E02006757',
        '3JU' => 'E02006757',
        '3JW' => 'E02006757',
        '3JX' => 'E02006757',
        '3JY' => 'E02006757',
        '3JZ' => 'E02006757',
        '3LA' => 'E02006757',
        '3LB' => 'E02006757',
        '3LD' => 'E02006757',
        '3LE' => 'E02006757',
        '3LF' => 'E02006757',
        '3LG' => 'E02006757',
        '3LH' => 'E02006757',
        '3LJ' => 'E02006757',
        '3LL' => 'E02006757',
        '3LN' => 'E02006757',
        '3LP' => 'E02006757',
        '3LQ' => 'E02006757',
        '3LR' => 'E02006757',
        '3LT' => 'E02006757',
        '3LU' => 'E02006757',
        '3LW' => 'E02006757',
        '3LX' => 'E02006757',
        '3LY' => 'E02006757',
        '3LZ' => 'E02006757',
        '3NA' => 'E02006757',
        '3NB' => 'E02006757',
        '3ND' => 'E02006757',
        '3NE' => 'E02006757',
        '3NF' => 'E02006757',
        '3NG' => 'E02006757',
        '3NH' => 'E02006757',
        '3NJ' => 'E02006757',
        '3NQ' => 'E02006757',
        '3NS' => 'E02006757',
        '3NT' => 'E02006757',
        '3NU' => 'E02006757',
        '3NW' => 'E02006757',
        '3NX' => 'E02006757',
        '3NY' => 'E02006757',
        '3NZ' => 'E02006757',
        '3PA' => 'E02006757',
        '3PB' => 'E02006757',
        '3PD' => 'E02006757',
        '3PE' => 'E02006766',
        '3PF' => 'E02006766',
        '3PX' => 'E02006757',
        '3PY' => 'E02006766',
        '3PZ' => 'E02006766',
        '3WY' => 'E02006759',
        '3WZ' => 'E02006759',
        '3XB' => 'E02006766',
        '3YA' => 'E02006757',
        '3YB' => 'E02006757',
        '3YD' => 'E02006759',
        '3YE' => 'E02006759',
        '3YF' => 'E02006766',
        '3YG' => 'E02006759',
        '3YH' => 'E02006759',
        '3YJ' => 'E02006759',
        '3YL' => 'E02006759',
        '3YN' => 'E02006757',
        '3YP' => 'E02006759',
        '3YQ' => 'E02006759',
        '3YR' => 'E02006759',
        '3YS' => 'E02006757',
        '3YT' => 'E02006757',
        '3YU' => 'E02006766',
        '3YW' => 'E02006757',
        '3YX' => 'E02006759',
        '3YY' => 'E02006766',
        '3YZ' => 'E02006759',
        '3ZE' => 'E02006759',
        '3ZF' => 'E02006759',
        '3ZG' => 'E02006759',
        '3ZH' => 'E02006759',
        '3ZX' => 'E02006759',
        '3ZY' => 'E02006759',
        '9AA' => 'E02006759',
        '9AB' => 'E02006759',
        '9AD' => 'E02006759',
        '9AE' => 'E02006759',
        '9AF' => 'E02006759',
        '9AG' => 'E02006759',
        '9AH' => 'E02006759',
        '9AJ' => 'E02006759',
        '9AL' => 'E02006759',
        '9AN' => 'E02006759',
        '9AP' => 'E02006759',
        '9AQ' => 'E02006759',
        '9AR' => 'E02006759',
        '9AS' => 'E02006759',
        '9AT' => 'E02006759',
        '9AU' => 'E02006759',
        '9AW' => 'E02006759',
        '9AX' => 'E02006759',
        '9AY' => 'E02006759',
        '9BA' => 'E02006759',
        '9BB' => 'E02006759',
        '9BD' => 'E02006759',
        '9BE' => 'E02006759',
        '9BF' => 'E02006759',
        '9BG' => 'E02006759',
        '9BH' => 'E02006759',
        '9BJ' => 'E02006759',
        '9BL' => 'E02006759',
        '9BN' => 'E02006759',
        '9BP' => 'E02006759',
        '9BQ' => 'E02006759',
        '9BR' => 'E02006759',
        '9BS' => 'E02006759',
        '9BT' => 'E02006759',
        '9BU' => 'E02006759',
        '9BW' => 'E02006759',
        '9BX' => 'E02006759',
        '9BY' => 'E02006759',
        '9BZ' => 'E02006759',
        '9DA' => 'E02006759',
        '9DB' => 'E02006759',
        '9DD' => 'E02006759',
        '9DE' => 'E02006759',
        '9DF' => 'E02006759',
        '9DG' => 'E02006759',
        '9DH' => 'E02006759',
        '9DJ' => 'E02006759',
        '9DL' => 'E02006759',
        '9DN' => 'E02006759',
        '9DP' => 'E02006759',
        '9DQ' => 'E02006759',
        '9DR' => 'E02006759',
        '9DS' => 'E02006759',
        '9DT' => 'E02006759',
        '9DU' => 'E02006759',
        '9DW' => 'E02006759',
        '9DX' => 'E02006759',
        '9DY' => 'E02006759',
        '9DZ' => 'E02006759',
        '9EA' => 'E02006759',
        '9EB' => 'E02006759',
        '9EE' => 'E02006759',
        '9EF' => 'E02006759',
        '9EG' => 'E02006759',
        '9EH' => 'E02006759',
        '9EJ' => 'E02006759',
        '9EL' => 'E02006759',
        '9EN' => 'E02006759',
        '9EP' => 'E02006759',
        '9EQ' => 'E02006759',
        '9ER' => 'E02006759',
        '9SA' => 'E02006759',
        '9SB' => 'E02006759',
        '9SD' => 'E02006759',
        '9SE' => 'E02006759',
        '9SF' => 'E02006759',
        '9SG' => 'E02006759',
        '9SH' => 'E02006759',
        '9SJ' => 'E02006759',
        '9SL' => 'E02006759',
        '9SN' => 'E02006759',
        '9SP' => 'E02006759',
        '9SQ' => 'E02006759',
        '9SR' => 'E02006759',
        '9SS' => 'E02006759',
        '9ST' => 'E02006759',
        '9SU' => 'E02006759',
        '9SW' => 'E02006759',
        '9SX' => 'E02006759',
        '9SY' => 'E02006759',
        '9SZ' => 'E02006759',
        '9TA' => 'E02006759',
        '9TB' => 'E02006759',
        '9TD' => 'E02006759',
        '9TE' => 'E02006759',
        '9TF' => 'E02006759',
        '9TG' => 'E02006759',
        '9TH' => 'E02006759',
        '9TJ' => 'E02006759',
        '9TL' => 'E02006759',
        '9TN' => 'E02006759',
        '9TP' => 'E02006759',
        '9TQ' => 'E02006759',
        '9TR' => 'E02006759',
        '9TS' => 'E02006759',
        '9ZZ' => 'E02006759',
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
