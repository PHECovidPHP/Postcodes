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
final class LE19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AL' => 'E02005339',
        '0GJ' => 'E02005336',
        '0LF' => 'E02005339',
        '0TZ' => 'E02005336',
        '0US' => 'E02005386',
        '0WA' => 'E02005336',
        '0XE' => 'E02005336',
        '0XF' => 'E02005339',
        '0ZJ' => 'E02005336',
        '0ZL' => 'E02005336',
        '0ZX' => 'E02005336',
        '1AU' => 'E02005336',
        '1AW' => 'E02005386',
        '1AX' => 'E02005386',
        '1BY' => 'E02005338',
        '1BZ' => 'E02005338',
        '1DU' => 'E02005337',
        '1DX' => 'E02005337',
        '1DY' => 'E02005337',
        '1ES' => 'E02005338',
        '1HF' => 'E02005386',
        '1HJ' => 'E02005338',
        '1HP' => 'E02005338',
        '1HQ' => 'E02005338',
        '1HX' => 'E02005338',
        '1HY' => 'E02005338',
        '1JZ' => 'E02005337',
        '1LE' => 'E02005336',
        '1LU' => 'E02005336',
        '1LW' => 'E02005336',
        '1NH' => 'E02005386',
        '1NJ' => 'E02005386',
        '1NL' => 'E02005386',
        '1NN' => 'E02005386',
        '1NX' => 'E02005386',
        '1NY' => 'E02005386',
        '1PX' => 'E02005336',
        '1PZ' => 'E02005336',
        '1QE' => 'E02005336',
        '1QG' => 'E02005386',
        '1QP' => 'E02005336',
        '1QW' => 'E02005336',
        '1RJ' => 'E02005336',
        '1RL' => 'E02005336',
        '1RP' => 'E02005336',
        '1RQ' => 'E02005386',
        '1RR' => 'E02005336',
        '1RZ' => 'E02005386',
        '1SA' => 'E02005338',
        '1SD' => 'E02005338',
        '1SH' => 'E02005338',
        '1SJ' => 'E02005338',
        '1SN' => 'E02005338',
        '1SP' => 'E02005337',
        '1SR' => 'E02005338',
        '1SS' => 'E02005336',
        '1ST' => 'E02005338',
        '1SU' => 'E02005338',
        '1SW' => 'E02005338',
        '1SX' => 'E02005338',
        '1SY' => 'E02005338',
        '1SZ' => 'E02005338',
        '1TH' => 'E02005336',
        '1TJ' => 'E02005386',
        '1TN' => 'E02005337',
        '1TP' => 'E02005336',
        '1TR' => 'E02005336',
        '1TS' => 'E02005336',
        '1UR' => 'E02005336',
        '1US' => 'E02005336',
        '1UT' => 'E02005338',
        '1UU' => 'E02005336',
        '1UX' => 'E02005336',
        '1UY' => 'E02005336',
        '1UZ' => 'E02005336',
        '1WA' => 'E02005336',
        '1WD' => 'E02005336',
        '1WE' => 'E02005336',
        '1WF' => 'E02005336',
        '1WG' => 'E02005336',
        '1WH' => 'E02005336',
        '1WJ' => 'E02005336',
        '1WL' => 'E02005336',
        '1WN' => 'E02005336',
        '1WP' => 'E02005336',
        '1WQ' => 'E02005337',
        '1WR' => 'E02005336',
        '1WT' => 'E02005338',
        '1WU' => 'E02005336',
        '1WW' => 'E02005338',
        '1WX' => 'E02005336',
        '1WY' => 'E02005336',
        '1WZ' => 'E02005336',
        '1XR' => 'E02005336',
        '1XT' => 'E02005336',
        '1XU' => 'E02005336',
        '1XW' => 'E02005336',
        '1XY' => 'E02005336',
        '1YA' => 'E02005336',
        '1YD' => 'E02005336',
        '1YE' => 'E02005386',
        '1YF' => 'E02005336',
        '1YG' => 'E02005336',
        '1YN' => 'E02005386',
        '1YR' => 'E02005336',
        '1YT' => 'E02005336',
        '1YY' => 'E02005336',
        '1ZA' => 'E02005336',
        '1ZE' => 'E02005336',
        '1ZR' => 'E02005336',
        '1ZT' => 'E02005336',
        '2AA' => 'E02005339',
        '2AB' => 'E02005338',
        '2AE' => 'E02005339',
        '2AF' => 'E02005338',
        '2AG' => 'E02005338',
        '2AH' => 'E02005338',
        '2AJ' => 'E02005338',
        '2AL' => 'E02005339',
        '2AN' => 'E02005338',
        '2AP' => 'E02005338',
        '2AR' => 'E02005338',
        '2AW' => 'E02005338',
        '2AZ' => 'E02005339',
        '2BA' => 'E02005338',
        '2BB' => 'E02005338',
        '2BD' => 'E02005338',
        '2BE' => 'E02005338',
        '2BF' => 'E02005338',
        '2BG' => 'E02005338',
        '2BH' => 'E02005338',
        '2BJ' => 'E02005338',
        '2BL' => 'E02005338',
        '2BN' => 'E02005338',
        '2BP' => 'E02005338',
        '2BQ' => 'E02005338',
        '2BR' => 'E02005338',
        '2BS' => 'E02005338',
        '2BT' => 'E02005338',
        '2BU' => 'E02005338',
        '2BW' => 'E02005338',
        '2BX' => 'E02005338',
        '2BY' => 'E02005338',
        '2DA' => 'E02005338',
        '2DB' => 'E02005338',
        '2DD' => 'E02005339',
        '2DE' => 'E02005339',
        '2DF' => 'E02005339',
        '2DG' => 'E02005339',
        '2DH' => 'E02005339',
        '2DJ' => 'E02005339',
        '2DL' => 'E02005339',
        '2DN' => 'E02005339',
        '2DP' => 'E02005339',
        '2DQ' => 'E02005339',
        '2DR' => 'E02005338',
        '2DS' => 'E02005339',
        '2DT' => 'E02005339',
        '2DU' => 'E02005339',
        '2DW' => 'E02005339',
        '2DX' => 'E02005339',
        '2DZ' => 'E02005338',
        '2EA' => 'E02005339',
        '2EB' => 'E02005338',
        '2ED' => 'E02005338',
        '2EE' => 'E02005338',
        '2EG' => 'E02005339',
        '2EL' => 'E02005339',
        '2EP' => 'E02005339',
        '2FT' => 'E02005339',
        '2FU' => 'E02005339',
        '2FX' => 'E02005339',
        '2FY' => 'E02005339',
        '2FZ' => 'E02005339',
        '2GA' => 'E02005339',
        '2GB' => 'E02005339',
        '2GD' => 'E02005339',
        '2GE' => 'E02005339',
        '2GF' => 'E02005339',
        '2GG' => 'E02005339',
        '2GH' => 'E02005339',
        '2GJ' => 'E02005339',
        '2GL' => 'E02005339',
        '2GN' => 'E02005339',
        '2GP' => 'E02005339',
        '2GQ' => 'E02005339',
        '2GR' => 'E02005339',
        '2GS' => 'E02005339',
        '2GT' => 'E02005339',
        '2GU' => 'E02005339',
        '2GW' => 'E02005339',
        '2GX' => 'E02005339',
        '2GY' => 'E02005339',
        '2GZ' => 'E02005339',
        '2HA' => 'E02005339',
        '2HB' => 'E02005339',
        '2HD' => 'E02005339',
        '2HE' => 'E02005339',
        '2HF' => 'E02005339',
        '2HG' => 'E02005339',
        '2HH' => 'E02005339',
        '2HJ' => 'E02005339',
        '2HL' => 'E02005339',
        '2HN' => 'E02005339',
        '2HP' => 'E02005339',
        '2HQ' => 'E02005339',
        '2HR' => 'E02005339',
        '2HS' => 'E02005339',
        '2HT' => 'E02005339',
        '2HU' => 'E02005339',
        '2HW' => 'E02005339',
        '2HX' => 'E02005339',
        '2HY' => 'E02005339',
        '2HZ' => 'E02005339',
        '2JA' => 'E02005339',
        '2JB' => 'E02005341',
        '2JD' => 'E02005339',
        '2JE' => 'E02005339',
        '2JF' => 'E02005339',
        '2JG' => 'E02005339',
        '2JH' => 'E02005339',
        '2JJ' => 'E02005339',
        '2JL' => 'E02005339',
        '2JN' => 'E02005339',
        '2JP' => 'E02005339',
        '2JQ' => 'E02005339',
        '2JR' => 'E02005339',
        '2JS' => 'E02005339',
        '2JT' => 'E02005339',
        '2JU' => 'E02005339',
        '2JW' => 'E02005339',
        '2JX' => 'E02005339',
        '2JY' => 'E02005339',
        '2JZ' => 'E02005339',
        '2LA' => 'E02005339',
        '2LB' => 'E02005338',
        '2LD' => 'E02005339',
        '2LE' => 'E02005339',
        '2LF' => 'E02005339',
        '2LJ' => 'E02005338',
        '2LL' => 'E02005338',
        '2LP' => 'E02005338',
        '2LU' => 'E02005339',
        '2NH' => 'E02005338',
        '2PT' => 'E02005339',
        '2PU' => 'E02005339',
        '2PW' => 'E02005339',
        '2PX' => 'E02005339',
        '2RA' => 'E02005339',
        '2RB' => 'E02005339',
        '2RD' => 'E02005339',
        '2RE' => 'E02005339',
        '2RF' => 'E02005339',
        '2RG' => 'E02005339',
        '2RH' => 'E02005339',
        '2RJ' => 'E02005339',
        '2RN' => 'E02005338',
        '2RP' => 'E02005338',
        '2RR' => 'E02005386',
        '2SW' => 'E02005339',
        '2TP' => 'E02005339',
        '2TQ' => 'E02005339',
        '2TR' => 'E02005339',
        '2WA' => 'E02005336',
        '2WB' => 'E02005336',
        '2WD' => 'E02005339',
        '2WE' => 'E02005339',
        '2WU' => 'E02005339',
        '2WY' => 'E02005336',
        '2WZ' => 'E02005336',
        '2XA' => 'E02005339',
        '2XQ' => 'E02005386',
        '2XR' => 'E02005336',
        '2XU' => 'E02005386',
        '2XW' => 'E02005339',
        '2YJ' => 'E02005336',
        '2YL' => 'E02005336',
        '2ZF' => 'E02005386',
        '2ZN' => 'E02005386',
        '2ZQ' => 'E02005386',
        '2ZX' => 'E02005336',
        '2ZY' => 'E02005336',
        '3AA' => 'E02005339',
        '3AD' => 'E02005339',
        '3AY' => 'E02005339',
        '3BT' => 'E02005339',
        '3DS' => 'E02005339',
        '3DT' => 'E02005339',
        '3DU' => 'E02005339',
        '3DW' => 'E02005339',
        '3DX' => 'E02005339',
        '3DY' => 'E02005339',
        '3DZ' => 'E02005339',
        '3EA' => 'E02005339',
        '3EB' => 'E02005339',
        '3ED' => 'E02005339',
        '3EE' => 'E02005339',
        '3EF' => 'E02005339',
        '3EG' => 'E02005339',
        '3EH' => 'E02005339',
        '3EJ' => 'E02005339',
        '3EL' => 'E02005339',
        '3EN' => 'E02005339',
        '3EP' => 'E02005338',
        '3EQ' => 'E02005339',
        '3ER' => 'E02005339',
        '3ES' => 'E02005339',
        '3ET' => 'E02005339',
        '3EU' => 'E02005339',
        '3EW' => 'E02005339',
        '3EX' => 'E02005339',
        '3EY' => 'E02005339',
        '3EZ' => 'E02005339',
        '3FA' => 'E02005339',
        '3FB' => 'E02005339',
        '3FD' => 'E02005339',
        '3FE' => 'E02005339',
        '3FF' => 'E02005339',
        '3FG' => 'E02005339',
        '3FH' => 'E02005339',
        '3FJ' => 'E02005339',
        '3FL' => 'E02005339',
        '3FN' => 'E02005339',
        '3FP' => 'E02005339',
        '3FQ' => 'E02005339',
        '3FR' => 'E02005339',
        '3FS' => 'E02005339',
        '3FT' => 'E02005339',
        '3FU' => 'E02005339',
        '3FW' => 'E02005339',
        '3FX' => 'E02005339',
        '3FY' => 'E02005339',
        '3GA' => 'E02005339',
        '3GN' => 'E02005339',
        '3GP' => 'E02005339',
        '3GQ' => 'E02005339',
        '3GR' => 'E02005339',
        '3HA' => 'E02005339',
        '3LD' => 'E02005339',
        '3LR' => 'E02005338',
        '3LU' => 'E02005339',
        '3LW' => 'E02005339',
        '3LX' => 'E02005339',
        '3LY' => 'E02005339',
        '3LZ' => 'E02005339',
        '3PS' => 'E02005339',
        '3PZ' => 'E02005339',
        '3RQ' => 'E02005342',
        '3RX' => 'E02005339',
        '3RY' => 'E02005339',
        '3RZ' => 'E02005339',
        '3SP' => 'E02005344',
        '3SR' => 'E02005386',
        '3SS' => 'E02005336',
        '3SZ' => 'E02005339',
        '3TN' => 'E02005386',
        '3TW' => 'E02005386',
        '3TY' => 'E02005336',
        '3WA' => 'E02005339',
        '3WB' => 'E02005339',
        '3WD' => 'E02005339',
        '3WE' => 'E02005339',
        '3WF' => 'E02005339',
        '3WG' => 'E02005339',
        '3WH' => 'E02005339',
        '3WJ' => 'E02005339',
        '3WL' => 'E02005339',
        '3WN' => 'E02005339',
        '3WP' => 'E02005339',
        '3WQ' => 'E02005339',
        '3WS' => 'E02005339',
        '3WY' => 'E02005339',
        '3XH' => 'E02005336',
        '3XP' => 'E02005339',
        '3XU' => 'E02005336',
        '3YA' => 'E02005339',
        '3YB' => 'E02005339',
        '3YD' => 'E02005339',
        '3YE' => 'E02005339',
        '3YF' => 'E02005339',
        '3YH' => 'E02005339',
        '3YJ' => 'E02005339',
        '3YL' => 'E02005339',
        '3YP' => 'E02005339',
        '3YQ' => 'E02005339',
        '3YR' => 'E02005339',
        '3YS' => 'E02005339',
        '3YT' => 'E02005339',
        '3YU' => 'E02005339',
        '3YW' => 'E02005339',
        '3YX' => 'E02005339',
        '3YY' => 'E02005339',
        '3YZ' => 'E02005339',
        '3ZA' => 'E02005339',
        '3ZB' => 'E02005339',
        '3ZD' => 'E02005339',
        '3ZP' => 'E02005336',
        '3ZR' => 'E02005336',
        '3ZS' => 'E02005386',
        '3ZW' => 'E02005386',
        '3ZZ' => 'E02005336',
        '4AA' => 'E02005338',
        '4AB' => 'E02005338',
        '4AD' => 'E02005338',
        '4AE' => 'E02005338',
        '4AF' => 'E02005338',
        '4AG' => 'E02005338',
        '4AH' => 'E02005338',
        '4AJ' => 'E02005338',
        '4AL' => 'E02005338',
        '4AN' => 'E02005338',
        '4AP' => 'E02005338',
        '4AQ' => 'E02005338',
        '4AR' => 'E02005338',
        '4AS' => 'E02005338',
        '4AT' => 'E02005338',
        '4AU' => 'E02005338',
        '4AW' => 'E02005338',
        '4AX' => 'E02005338',
        '4AZ' => 'E02005338',
        '4BA' => 'E02005338',
        '4BB' => 'E02005338',
        '4BD' => 'E02005338',
        '4BE' => 'E02005338',
        '4BF' => 'E02005338',
        '4BG' => 'E02005338',
        '4BH' => 'E02005338',
        '4BJ' => 'E02005338',
        '4BL' => 'E02005338',
        '4BN' => 'E02005338',
        '4BP' => 'E02005338',
        '4BQ' => 'E02005338',
        '4BS' => 'E02005338',
        '4BT' => 'E02005338',
        '4BU' => 'E02005338',
        '4BW' => 'E02005338',
        '4BX' => 'E02005338',
        '4BY' => 'E02005338',
        '4BZ' => 'E02005338',
        '4DA' => 'E02005338',
        '4DB' => 'E02005338',
        '4DD' => 'E02005338',
        '4DG' => 'E02005338',
        '4DH' => 'E02005338',
        '4DP' => 'E02005338',
        '4JS' => 'E02005338',
        '4LA' => 'E02005338',
        '4LB' => 'E02005338',
        '4LD' => 'E02005338',
        '4LE' => 'E02005338',
        '4LF' => 'E02005338',
        '4LG' => 'E02005338',
        '4LH' => 'E02005338',
        '4LJ' => 'E02005338',
        '4LL' => 'E02005338',
        '4LN' => 'E02005338',
        '4LP' => 'E02005338',
        '4LQ' => 'E02005338',
        '4LR' => 'E02005338',
        '4LS' => 'E02005338',
        '4LT' => 'E02005338',
        '4LU' => 'E02005338',
        '4LW' => 'E02005338',
        '4LX' => 'E02005338',
        '4LY' => 'E02005338',
        '4LZ' => 'E02005338',
        '4NA' => 'E02005338',
        '4NB' => 'E02005338',
        '4ND' => 'E02005338',
        '4NE' => 'E02005338',
        '4NF' => 'E02005338',
        '4NG' => 'E02005338',
        '4NH' => 'E02005338',
        '4NJ' => 'E02005338',
        '4NL' => 'E02005338',
        '4NN' => 'E02005338',
        '4NP' => 'E02005338',
        '4NQ' => 'E02005338',
        '4NR' => 'E02005338',
        '4NS' => 'E02005338',
        '4NT' => 'E02005338',
        '4NU' => 'E02005338',
        '4NW' => 'E02005338',
        '4NX' => 'E02005338',
        '4NY' => 'E02005338',
        '4NZ' => 'E02005338',
        '4PA' => 'E02005338',
        '4PB' => 'E02005338',
        '4PD' => 'E02005338',
        '4PE' => 'E02005338',
        '4PF' => 'E02005338',
        '4PG' => 'E02005338',
        '4PH' => 'E02005338',
        '4PJ' => 'E02005338',
        '4PL' => 'E02005338',
        '4PN' => 'E02005338',
        '4PP' => 'E02005338',
        '4PQ' => 'E02005338',
        '4PZ' => 'E02005338',
        '4QA' => 'E02005338',
        '4QB' => 'E02005338',
        '4QD' => 'E02005338',
        '4QE' => 'E02005338',
        '4QF' => 'E02005338',
        '4QG' => 'E02005338',
        '4QH' => 'E02005338',
        '4QJ' => 'E02005338',
        '4QL' => 'E02005338',
        '4QN' => 'E02005338',
        '4QP' => 'E02005338',
        '4QQ' => 'E02005338',
        '4QR' => 'E02005338',
        '4QS' => 'E02005338',
        '4QT' => 'E02005338',
        '4QU' => 'E02005338',
        '4QW' => 'E02005338',
        '4QX' => 'E02005338',
        '4QY' => 'E02005338',
        '4QZ' => 'E02005338',
        '4RL' => 'E02005338',
        '4RS' => 'E02005338',
        '4RT' => 'E02005338',
        '4RU' => 'E02005338',
        '4RW' => 'E02005338',
        '4SA' => 'E02005338',
        '4SB' => 'E02005338',
        '4SD' => 'E02005338',
        '4SE' => 'E02005338',
        '4SG' => 'E02005338',
        '4SH' => 'E02005338',
        '4SL' => 'E02005339',
        '4SN' => 'E02005338',
        '4SQ' => 'E02005338',
        '4ST' => 'E02005386',
        '4TG' => 'E02005386',
        '4UL' => 'E02005336',
        '4WA' => 'E02005336',
        '4WB' => 'E02005386',
        '4WH' => 'E02005336',
        '4WR' => 'E02005386',
        '4WS' => 'E02005336',
        '4WU' => 'E02005336',
        '4WZ' => 'E02005336',
        '4XJ' => 'E02005336',
        '4XL' => 'E02005338',
        '4XT' => 'E02005338',
        '4ZS' => 'E02005336',
        '4ZT' => 'E02005386',
        '4ZW' => 'E02005336',
        '9AB' => 'E02005336',
        '9AD' => 'E02005336',
        '9AE' => 'E02005336',
        '9AF' => 'E02005336',
        '9AG' => 'E02005336',
        '9AH' => 'E02005338',
        '9AJ' => 'E02005336',
        '9AL' => 'E02005336',
        '9AN' => 'E02005336',
        '9AP' => 'E02005336',
        '9AQ' => 'E02005336',
        '9AR' => 'E02005336',
        '9AS' => 'E02005336',
        '9AT' => 'E02005336',
        '9AU' => 'E02005336',
        '9AX' => 'E02005336',
        '9AY' => 'E02005336',
        '9AZ' => 'E02005336',
        '9BA' => 'E02005336',
        '9BB' => 'E02005336',
        '9BD' => 'E02005336',
        '9BE' => 'E02005336',
        '9BF' => 'E02005336',
        '9BG' => 'E02005336',
        '9BH' => 'E02005336',
        '9BJ' => 'E02005336',
        '9BL' => 'E02005336',
        '9BN' => 'E02005336',
        '9BP' => 'E02005336',
        '9BQ' => 'E02005336',
        '9BR' => 'E02005336',
        '9BS' => 'E02005336',
        '9BT' => 'E02005336',
        '9BU' => 'E02005336',
        '9BW' => 'E02005336',
        '9BX' => 'E02005336',
        '9BY' => 'E02005336',
        '9BZ' => 'E02005336',
        '9DB' => 'E02005336',
        '9DD' => 'E02005336',
        '9DE' => 'E02005336',
        '9DF' => 'E02005336',
        '9DG' => 'E02005336',
        '9DH' => 'E02005336',
        '9DL' => 'E02005336',
        '9DN' => 'E02005336',
        '9DP' => 'E02005336',
        '9DQ' => 'E02005336',
        '9DR' => 'E02005336',
        '9DS' => 'E02005336',
        '9SA' => 'E02005339',
        '9SB' => 'E02005339',
        '9SD' => 'E02005339',
        '9SE' => 'E02005339',
        '9SF' => 'E02005339',
        '9SG' => 'E02005339',
        '9SH' => 'E02005339',
        '9SJ' => 'E02005339',
        '9SL' => 'E02005339',
        '9SN' => 'E02005339',
        '9SP' => 'E02005339',
        '9SQ' => 'E02005339',
        '9SR' => 'E02005339',
        '9SS' => 'E02005339',
        '9ST' => 'E02005339',
        '9SU' => 'E02005339',
        '9SW' => 'E02005339',
        '9SY' => 'E02005339',
        '9SZ' => 'E02005339',
        '9ZZ' => 'E02005339',
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
