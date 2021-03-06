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
final class SO32
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004840',
        '1AB' => 'E02004840',
        '1AD' => 'E02004840',
        '1AE' => 'E02004840',
        '1AF' => 'E02004840',
        '1AG' => 'E02004840',
        '1AH' => 'E02004840',
        '1AJ' => 'E02004840',
        '1AL' => 'E02004840',
        '1AN' => 'E02004840',
        '1AP' => 'E02004840',
        '1AQ' => 'E02004840',
        '1AR' => 'E02004840',
        '1AS' => 'E02004840',
        '1AT' => 'E02004840',
        '1AU' => 'E02004840',
        '1AW' => 'E02004840',
        '1AX' => 'E02004840',
        '1AY' => 'E02004840',
        '1AZ' => 'E02004840',
        '1BA' => 'E02004840',
        '1BB' => 'E02004840',
        '1BD' => 'E02004840',
        '1BE' => 'E02004840',
        '1BF' => 'E02004722',
        '1BG' => 'E02004840',
        '1BH' => 'E02004840',
        '1BJ' => 'E02004840',
        '1BL' => 'E02004840',
        '1BN' => 'E02004840',
        '1BP' => 'E02004840',
        '1BQ' => 'E02004840',
        '1BR' => 'E02004840',
        '1BS' => 'E02004840',
        '1BT' => 'E02004840',
        '1BU' => 'E02004840',
        '1BW' => 'E02004840',
        '1BX' => 'E02004840',
        '1BY' => 'E02004840',
        '1BZ' => 'E02004840',
        '1DA' => 'E02004840',
        '1DB' => 'E02004840',
        '1DD' => 'E02004840',
        '1DE' => 'E02004840',
        '1DF' => 'E02004840',
        '1DG' => 'E02004840',
        '1DH' => 'E02004840',
        '1DJ' => 'E02004840',
        '1DL' => 'E02004840',
        '1DN' => 'E02004840',
        '1DP' => 'E02004840',
        '1DQ' => 'E02004840',
        '1DR' => 'E02004840',
        '1DS' => 'E02004840',
        '1DT' => 'E02004840',
        '1DU' => 'E02004840',
        '1DW' => 'E02004840',
        '1DX' => 'E02004840',
        '1DY' => 'E02004840',
        '1DZ' => 'E02004840',
        '1EA' => 'E02004840',
        '1EB' => 'E02004840',
        '1ED' => 'E02004840',
        '1EE' => 'E02004840',
        '1EF' => 'E02004840',
        '1EG' => 'E02004840',
        '1EH' => 'E02004840',
        '1EJ' => 'E02004840',
        '1EL' => 'E02004840',
        '1EN' => 'E02004840',
        '1EP' => 'E02004840',
        '1EQ' => 'E02004840',
        '1ER' => 'E02004840',
        '1ES' => 'E02004840',
        '1ET' => 'E02004840',
        '1EU' => 'E02004840',
        '1EW' => 'E02004840',
        '1EX' => 'E02004840',
        '1EY' => 'E02004840',
        '1EZ' => 'E02004840',
        '1FB' => 'E02004840',
        '1FD' => 'E02004840',
        '1FE' => 'E02004840',
        '1FF' => 'E02004840',
        '1FG' => 'E02004840',
        '1FH' => 'E02004840',
        '1FJ' => 'E02004840',
        '1FL' => 'E02004840',
        '1FN' => 'E02004840',
        '1FP' => 'E02004840',
        '1FQ' => 'E02004840',
        '1FR' => 'E02004840',
        '1FS' => 'E02004840',
        '1FT' => 'E02004840',
        '1FU' => 'E02004840',
        '1FW' => 'E02004840',
        '1FX' => 'E02004840',
        '1FY' => 'E02004840',
        '1FZ' => 'E02004840',
        '1GA' => 'E02004839',
        '1GB' => 'E02004839',
        '1GD' => 'E02004840',
        '1GE' => 'E02004840',
        '1GF' => 'E02004840',
        '1GG' => 'E02004840',
        '1GH' => 'E02004840',
        '1GJ' => 'E02004840',
        '1GL' => 'E02004840',
        '1GN' => 'E02004840',
        '1GP' => 'E02004840',
        '1GQ' => 'E02004840',
        '1GR' => 'E02004840',
        '1GS' => 'E02004840',
        '1GT' => 'E02004840',
        '1GX' => 'E02004840',
        '1GY' => 'E02004840',
        '1GZ' => 'E02004840',
        '1HA' => 'E02004838',
        '1HB' => 'E02004838',
        '1HD' => 'E02004838',
        '1HE' => 'E02004838',
        '1HF' => 'E02004719',
        '1HG' => 'E02004719',
        '1HH' => 'E02004719',
        '1HJ' => 'E02004838',
        '1HL' => 'E02004838',
        '1HN' => 'E02004838',
        '1HP' => 'E02004839',
        '1HQ' => 'E02004838',
        '1HR' => 'E02004838',
        '1HS' => 'E02004838',
        '1HT' => 'E02004838',
        '1HU' => 'E02004838',
        '1HW' => 'E02004838',
        '1HX' => 'E02004840',
        '1HY' => 'E02004840',
        '1HZ' => 'E02004840',
        '1JA' => 'E02004838',
        '1JB' => 'E02004838',
        '1JD' => 'E02004838',
        '1JE' => 'E02004838',
        '1JF' => 'E02004838',
        '1JG' => 'E02004838',
        '1JH' => 'E02004838',
        '1JJ' => 'E02004838',
        '1JL' => 'E02004838',
        '1JN' => 'E02004838',
        '1JP' => 'E02004838',
        '1JQ' => 'E02004838',
        '1JR' => 'E02004840',
        '1JS' => 'E02004840',
        '1JT' => 'E02004840',
        '1JU' => 'E02004840',
        '1JW' => 'E02004840',
        '1JX' => 'E02004840',
        '1JY' => 'E02004840',
        '1LS' => 'E02004840',
        '1LT' => 'E02004840',
        '1LU' => 'E02004840',
        '1LW' => 'E02004840',
        '1LX' => 'E02004840',
        '1LY' => 'E02004840',
        '1LZ' => 'E02004840',
        '1NF' => 'E02004722',
        '1NG' => 'E02004840',
        '1NH' => 'E02004722',
        '1NJ' => 'E02004840',
        '1NL' => 'E02004840',
        '1NN' => 'E02004840',
        '1NP' => 'E02004840',
        '1NQ' => 'E02004838',
        '1NR' => 'E02004840',
        '1NS' => 'E02004840',
        '1NT' => 'E02004840',
        '1NU' => 'E02004840',
        '1NW' => 'E02004840',
        '1NX' => 'E02004840',
        '1NY' => 'E02004840',
        '1NZ' => 'E02004840',
        '1PA' => 'E02004840',
        '1PB' => 'E02004840',
        '1PD' => 'E02004840',
        '1PE' => 'E02004840',
        '1PF' => 'E02004840',
        '1PG' => 'E02004840',
        '1PH' => 'E02004838',
        '1PJ' => 'E02004840',
        '1PL' => 'E02004840',
        '1PN' => 'E02004840',
        '1PP' => 'E02004840',
        '1PQ' => 'E02004840',
        '1PR' => 'E02004840',
        '1PS' => 'E02004840',
        '1PT' => 'E02004840',
        '1PU' => 'E02004840',
        '1PW' => 'E02004840',
        '1PZ' => 'E02004838',
        '1QA' => 'E02004838',
        '1QB' => 'E02004840',
        '1QD' => 'E02004840',
        '1QE' => 'E02004840',
        '1QF' => 'E02004838',
        '1QG' => 'E02004840',
        '1QH' => 'E02004840',
        '1QJ' => 'E02004840',
        '1QL' => 'E02004840',
        '1QN' => 'E02004838',
        '1QP' => 'E02004840',
        '1QQ' => 'E02004840',
        '1QR' => 'E02004840',
        '1QS' => 'E02004840',
        '1QT' => 'E02004840',
        '1QU' => 'E02004840',
        '1QW' => 'E02004840',
        '1QX' => 'E02004840',
        '1QY' => 'E02004840',
        '1QZ' => 'E02004840',
        '1RG' => 'E02004840',
        '1RH' => 'E02004840',
        '1RL' => 'E02004840',
        '1RN' => 'E02004840',
        '1RP' => 'E02004840',
        '1RQ' => 'E02004840',
        '1RR' => 'E02004840',
        '1RS' => 'E02004840',
        '1RT' => 'E02004840',
        '1RU' => 'E02004840',
        '1RW' => 'E02004840',
        '1RX' => 'E02004840',
        '1RY' => 'E02004840',
        '1RZ' => 'E02004840',
        '1SA' => 'E02004840',
        '1SB' => 'E02004840',
        '1SD' => 'E02004840',
        '1SE' => 'E02004840',
        '1SF' => 'E02004840',
        '1SG' => 'E02004840',
        '1SH' => 'E02004840',
        '1SJ' => 'E02004840',
        '1SL' => 'E02004840',
        '1SP' => 'E02004840',
        '1SQ' => 'E02004840',
        '1SR' => 'E02004840',
        '1SS' => 'E02004840',
        '1ST' => 'E02004840',
        '1SU' => 'E02004839',
        '1SX' => 'E02004840',
        '1SY' => 'E02004840',
        '1TA' => 'E02004840',
        '1UN' => 'E02004840',
        '1UP' => 'E02004840',
        '1UQ' => 'E02004840',
        '1UR' => 'E02004840',
        '1US' => 'E02004840',
        '1UT' => 'E02004840',
        '1UU' => 'E02004840',
        '1UW' => 'E02004840',
        '1UX' => 'E02004840',
        '1UY' => 'E02004840',
        '1UZ' => 'E02004840',
        '1WA' => 'E02004840',
        '1WB' => 'E02004840',
        '1WD' => 'E02004722',
        '1WE' => 'E02004840',
        '1WF' => 'E02004840',
        '1WG' => 'E02004840',
        '1WH' => 'E02004840',
        '1WJ' => 'E02004840',
        '1WL' => 'E02004840',
        '1WN' => 'E02004840',
        '1WP' => 'E02004840',
        '1WQ' => 'E02004722',
        '1WR' => 'E02004840',
        '1WS' => 'E02004722',
        '1WT' => 'E02004722',
        '1WU' => 'E02004840',
        '1WW' => 'E02004840',
        '1WX' => 'E02004722',
        '1WY' => 'E02004840',
        '1WZ' => 'E02004840',
        '1XA' => 'E02004722',
        '1XB' => 'E02004840',
        '1XD' => 'E02004722',
        '1XE' => 'E02004840',
        '1XF' => 'E02004840',
        '1XG' => 'E02004840',
        '1XH' => 'E02004722',
        '1XJ' => 'E02004840',
        '1XL' => 'E02004722',
        '1XN' => 'E02004840',
        '1XP' => 'E02004840',
        '1XQ' => 'E02004840',
        '1XR' => 'E02004840',
        '1XS' => 'E02004722',
        '1XT' => 'E02004840',
        '1XU' => 'E02004722',
        '1XW' => 'E02004722',
        '1XX' => 'E02004840',
        '1XY' => 'E02004840',
        '1XZ' => 'E02004722',
        '1YA' => 'E02004840',
        '1YB' => 'E02004722',
        '1YD' => 'E02004840',
        '1YE' => 'E02004840',
        '1YF' => 'E02004840',
        '1YG' => 'E02004840',
        '1YH' => 'E02004722',
        '1YJ' => 'E02004840',
        '1YL' => 'E02004840',
        '1YN' => 'E02004840',
        '1YP' => 'E02004840',
        '1YQ' => 'E02004722',
        '1YR' => 'E02004722',
        '1YS' => 'E02004722',
        '1YT' => 'E02004840',
        '1YU' => 'E02004840',
        '1YW' => 'E02004840',
        '1YY' => 'E02004722',
        '1YZ' => 'E02004722',
        '1ZA' => 'E02004722',
        '1ZB' => 'E02004840',
        '1ZD' => 'E02004840',
        '1ZE' => 'E02004840',
        '1ZG' => 'E02004840',
        '1ZH' => 'E02004840',
        '1ZJ' => 'E02004840',
        '1ZL' => 'E02004840',
        '1ZN' => 'E02004722',
        '1ZQ' => 'E02004840',
        '1ZR' => 'E02004840',
        '1ZS' => 'E02004840',
        '1ZT' => 'E02004840',
        '1ZU' => 'E02004840',
        '1ZX' => 'E02004840',
        '1ZY' => 'E02004840',
        '2AA' => 'E02004841',
        '2AB' => 'E02004841',
        '2AD' => 'E02004841',
        '2AE' => 'E02004841',
        '2AF' => 'E02004841',
        '2AG' => 'E02004841',
        '2AH' => 'E02004840',
        '2AJ' => 'E02004840',
        '2AL' => 'E02004838',
        '2AN' => 'E02004841',
        '2AP' => 'E02004841',
        '2AQ' => 'E02004841',
        '2AR' => 'E02004841',
        '2AS' => 'E02004841',
        '2AT' => 'E02004839',
        '2AU' => 'E02004839',
        '2AW' => 'E02004841',
        '2BA' => 'E02004841',
        '2BB' => 'E02004841',
        '2BD' => 'E02004841',
        '2BE' => 'E02004841',
        '2BF' => 'E02004840',
        '2BG' => 'E02004841',
        '2BH' => 'E02004841',
        '2BJ' => 'E02004841',
        '2BL' => 'E02004841',
        '2BN' => 'E02004841',
        '2BP' => 'E02004841',
        '2BQ' => 'E02004841',
        '2BR' => 'E02004841',
        '2BS' => 'E02004841',
        '2BT' => 'E02004841',
        '2BU' => 'E02004841',
        '2BW' => 'E02004841',
        '2BX' => 'E02004721',
        '2BY' => 'E02004721',
        '2DA' => 'E02004841',
        '2DB' => 'E02004721',
        '2DD' => 'E02004721',
        '2DE' => 'E02004721',
        '2DF' => 'E02004721',
        '2DG' => 'E02004721',
        '2DH' => 'E02004721',
        '2DP' => 'E02004841',
        '2DQ' => 'E02004841',
        '2DR' => 'E02004841',
        '2DS' => 'E02004841',
        '2DT' => 'E02004841',
        '2DU' => 'E02004841',
        '2DW' => 'E02004721',
        '2EF' => 'E02004722',
        '2EG' => 'E02004722',
        '2EH' => 'E02004841',
        '2EJ' => 'E02004841',
        '2EL' => 'E02004839',
        '2EN' => 'E02004721',
        '2EP' => 'E02004840',
        '2EQ' => 'E02004721',
        '2ER' => 'E02004841',
        '2ES' => 'E02004840',
        '2ET' => 'E02004839',
        '2EU' => 'E02004839',
        '2EW' => 'E02004839',
        '2EX' => 'E02004840',
        '2EY' => 'E02004841',
        '2EZ' => 'E02004839',
        '2FF' => 'E02004839',
        '2FH' => 'E02004840',
        '2FJ' => 'E02004839',
        '2FL' => 'E02004839',
        '2FN' => 'E02004839',
        '2FP' => 'E02004839',
        '2FQ' => 'E02004839',
        '2FR' => 'E02004839',
        '2FS' => 'E02004839',
        '2FT' => 'E02004839',
        '2FU' => 'E02004721',
        '2FW' => 'E02004721',
        '2FX' => 'E02004721',
        '2FY' => 'E02004721',
        '2FZ' => 'E02004721',
        '2GA' => 'E02004721',
        '2GB' => 'E02004721',
        '2GD' => 'E02004721',
        '2GE' => 'E02004721',
        '2GF' => 'E02004721',
        '2GG' => 'E02004721',
        '2GH' => 'E02004839',
        '2GJ' => 'E02004721',
        '2GL' => 'E02004721',
        '2GN' => 'E02004721',
        '2GP' => 'E02004721',
        '2GQ' => 'E02004721',
        '2GR' => 'E02004721',
        '2GS' => 'E02004721',
        '2GT' => 'E02004840',
        '2GU' => 'E02004840',
        '2GW' => 'E02004840',
        '2GX' => 'E02004840',
        '2GY' => 'E02004840',
        '2GZ' => 'E02004840',
        '2HA' => 'E02004840',
        '2HB' => 'E02004841',
        '2HD' => 'E02004841',
        '2HE' => 'E02004841',
        '2HF' => 'E02004841',
        '2HG' => 'E02004841',
        '2HH' => 'E02004841',
        '2HJ' => 'E02004841',
        '2HL' => 'E02004841',
        '2HN' => 'E02004841',
        '2HP' => 'E02004841',
        '2HQ' => 'E02004841',
        '2HR' => 'E02004841',
        '2HS' => 'E02004841',
        '2HT' => 'E02004840',
        '2HU' => 'E02004840',
        '2HW' => 'E02004841',
        '2HX' => 'E02004841',
        '2HY' => 'E02004841',
        '2HZ' => 'E02004841',
        '2JA' => 'E02004841',
        '2JB' => 'E02004841',
        '2JD' => 'E02004841',
        '2JE' => 'E02004841',
        '2JF' => 'E02004841',
        '2JG' => 'E02004841',
        '2JH' => 'E02004841',
        '2JJ' => 'E02004841',
        '2JL' => 'E02004841',
        '2JN' => 'E02004840',
        '2JP' => 'E02004840',
        '2JQ' => 'E02004840',
        '2JR' => 'E02004841',
        '2JS' => 'E02004840',
        '2JT' => 'E02004840',
        '2JU' => 'E02004841',
        '2JW' => 'E02004841',
        '2JX' => 'E02004840',
        '2JY' => 'E02004841',
        '2JZ' => 'E02004841',
        '2LA' => 'E02004840',
        '2LB' => 'E02004840',
        '2LD' => 'E02004840',
        '2LE' => 'E02004840',
        '2LF' => 'E02004840',
        '2LG' => 'E02004840',
        '2LH' => 'E02004839',
        '2LJ' => 'E02004840',
        '2LL' => 'E02004840',
        '2LN' => 'E02004840',
        '2LP' => 'E02004840',
        '2LQ' => 'E02004840',
        '2LR' => 'E02004840',
        '2LS' => 'E02004840',
        '2LT' => 'E02004840',
        '2LU' => 'E02004840',
        '2LW' => 'E02004840',
        '2LX' => 'E02004840',
        '2LY' => 'E02004840',
        '2LZ' => 'E02004840',
        '2NA' => 'E02004840',
        '2NB' => 'E02004840',
        '2ND' => 'E02004840',
        '2NE' => 'E02004839',
        '2NF' => 'E02004840',
        '2NG' => 'E02004841',
        '2NH' => 'E02004840',
        '2NJ' => 'E02004840',
        '2NL' => 'E02004840',
        '2NN' => 'E02004840',
        '2NP' => 'E02004839',
        '2NQ' => 'E02004840',
        '2NR' => 'E02004841',
        '2NS' => 'E02004839',
        '2NT' => 'E02004839',
        '2NU' => 'E02004841',
        '2NW' => 'E02004839',
        '2NX' => 'E02004839',
        '2NY' => 'E02004840',
        '2NZ' => 'E02004839',
        '2PA' => 'E02004839',
        '2PB' => 'E02004839',
        '2PD' => 'E02004839',
        '2PE' => 'E02004839',
        '2PF' => 'E02004839',
        '2PG' => 'E02004839',
        '2PH' => 'E02004839',
        '2PJ' => 'E02004839',
        '2PL' => 'E02004839',
        '2PN' => 'E02004839',
        '2PP' => 'E02004839',
        '2PQ' => 'E02004839',
        '2PR' => 'E02004839',
        '2PS' => 'E02004839',
        '2PT' => 'E02004839',
        '2PU' => 'E02004839',
        '2PW' => 'E02004839',
        '2PX' => 'E02004839',
        '2PY' => 'E02004839',
        '2PZ' => 'E02004839',
        '2QA' => 'E02004839',
        '2QB' => 'E02004839',
        '2QD' => 'E02004839',
        '2QE' => 'E02004839',
        '2QF' => 'E02004839',
        '2QG' => 'E02004839',
        '2QH' => 'E02004839',
        '2QJ' => 'E02004839',
        '2QL' => 'E02004839',
        '2QN' => 'E02004839',
        '2QP' => 'E02004839',
        '2QQ' => 'E02004839',
        '2QR' => 'E02004839',
        '2QS' => 'E02004839',
        '2QT' => 'E02004839',
        '2QU' => 'E02004839',
        '2QW' => 'E02004839',
        '2QX' => 'E02004839',
        '2QY' => 'E02004839',
        '2QZ' => 'E02004839',
        '2RA' => 'E02004839',
        '2RB' => 'E02004839',
        '2RD' => 'E02004839',
        '2RE' => 'E02004839',
        '2RF' => 'E02004839',
        '2RG' => 'E02004839',
        '2RH' => 'E02004840',
        '2RJ' => 'E02004839',
        '2RL' => 'E02004839',
        '2RN' => 'E02004839',
        '2RP' => 'E02004839',
        '2RQ' => 'E02004721',
        '2RR' => 'E02004721',
        '2RS' => 'E02004839',
        '2RT' => 'E02004839',
        '2RU' => 'E02004839',
        '2RW' => 'E02004840',
        '2RX' => 'E02004721',
        '2RY' => 'E02004840',
        '2RZ' => 'E02004840',
        '2SA' => 'E02004839',
        '2SB' => 'E02004721',
        '2SF' => 'E02004721',
        '2SG' => 'E02004721',
        '2SH' => 'E02004721',
        '2SN' => 'E02004721',
        '2SS' => 'E02004721',
        '2ST' => 'E02004721',
        '2SW' => 'E02004721',
        '2SY' => 'E02004841',
        '2SZ' => 'E02004721',
        '2TA' => 'E02004841',
        '2TB' => 'E02004721',
        '2TD' => 'E02004840',
        '2TE' => 'E02004721',
        '2TF' => 'E02004840',
        '2TG' => 'E02004721',
        '2TH' => 'E02004840',
        '2TJ' => 'E02004840',
        '2TL' => 'E02004839',
        '2TN' => 'E02004839',
        '2TP' => 'E02004722',
        '2TQ' => 'E02004840',
        '2TR' => 'E02004840',
        '2TS' => 'E02004840',
        '2TT' => 'E02004840',
        '2TU' => 'E02004840',
        '2TY' => 'E02004722',
        '2TZ' => 'E02004840',
        '2UA' => 'E02004721',
        '2UB' => 'E02004840',
        '2UD' => 'E02004840',
        '2UE' => 'E02004722',
        '2UG' => 'E02004722',
        '2UJ' => 'E02004839',
        '2UN' => 'E02004839',
        '2UQ' => 'E02004839',
        '2UT' => 'E02004722',
        '2UU' => 'E02004722',
        '2UW' => 'E02004722',
        '2UY' => 'E02004839',
        '2UZ' => 'E02004722',
        '2WA' => 'E02004839',
        '2WB' => 'E02004839',
        '2WD' => 'E02004839',
        '2WE' => 'E02004722',
        '2WF' => 'E02004722',
        '2WG' => 'E02004722',
        '2WH' => 'E02004722',
        '2WJ' => 'E02004722',
        '2WL' => 'E02004722',
        '2WN' => 'E02004722',
        '2WP' => 'E02004839',
        '2WQ' => 'E02004722',
        '2WR' => 'E02004840',
        '2WS' => 'E02004839',
        '2WT' => 'E02004840',
        '2WU' => 'E02004840',
        '2WW' => 'E02004722',
        '2WX' => 'E02004840',
        '2WY' => 'E02004840',
        '2WZ' => 'E02004722',
        '2XA' => 'E02004841',
        '2XB' => 'E02004841',
        '2XD' => 'E02004722',
        '2XE' => 'E02004722',
        '2XF' => 'E02004841',
        '2XG' => 'E02004841',
        '2XH' => 'E02004722',
        '2XJ' => 'E02004840',
        '2XL' => 'E02004840',
        '2XN' => 'E02004722',
        '2XP' => 'E02004840',
        '2XQ' => 'E02004722',
        '2XR' => 'E02004840',
        '2XS' => 'E02004722',
        '2XT' => 'E02004722',
        '2XU' => 'E02004722',
        '2XW' => 'E02004722',
        '2XX' => 'E02004840',
        '2XY' => 'E02004841',
        '2XZ' => 'E02004722',
        '2YA' => 'E02004722',
        '2YB' => 'E02004839',
        '2YD' => 'E02004722',
        '2YE' => 'E02004839',
        '2YF' => 'E02004722',
        '2YG' => 'E02004722',
        '2YH' => 'E02004839',
        '2YJ' => 'E02004722',
        '2YL' => 'E02004839',
        '2YN' => 'E02004722',
        '2YP' => 'E02004839',
        '2YQ' => 'E02004722',
        '2YR' => 'E02004839',
        '2YS' => 'E02004722',
        '2YT' => 'E02004722',
        '2YZ' => 'E02004722',
        '2ZA' => 'E02004840',
        '2ZB' => 'E02004722',
        '2ZD' => 'E02004840',
        '2ZE' => 'E02004840',
        '2ZF' => 'E02004839',
        '2ZG' => 'E02004722',
        '2ZH' => 'E02004722',
        '2ZJ' => 'E02004840',
        '2ZL' => 'E02004840',
        '2ZP' => 'E02004840',
        '2ZQ' => 'E02004840',
        '2ZR' => 'E02004722',
        '2ZS' => 'E02004840',
        '2ZT' => 'E02004722',
        '2ZU' => 'E02004839',
        '3AE' => 'E02004839',
        '3AF' => 'E02004839',
        '3AG' => 'E02004839',
        '3AH' => 'E02004839',
        '3AL' => 'E02004839',
        '3AN' => 'E02004839',
        '3AP' => 'E02004839',
        '3AQ' => 'E02004839',
        '3AR' => 'E02004839',
        '3AS' => 'E02004839',
        '3DA' => 'E02004839',
        '3DB' => 'E02004839',
        '3GZ' => 'E02004839',
        '3HA' => 'E02004839',
        '3LA' => 'E02004839',
        '3LB' => 'E02004839',
        '3LD' => 'E02004839',
        '3LE' => 'E02004839',
        '3LF' => 'E02004839',
        '3LG' => 'E02004839',
        '3LH' => 'E02004839',
        '3LJ' => 'E02004839',
        '3LL' => 'E02004839',
        '3LN' => 'E02004839',
        '3LP' => 'E02004839',
        '3LQ' => 'E02004839',
        '3LR' => 'E02004839',
        '3LS' => 'E02004839',
        '3LT' => 'E02004839',
        '3LU' => 'E02004839',
        '3LW' => 'E02004839',
        '3NA' => 'E02004839',
        '3NB' => 'E02004839',
        '3ND' => 'E02004839',
        '3NE' => 'E02004839',
        '3NF' => 'E02004839',
        '3NG' => 'E02004839',
        '3NH' => 'E02004839',
        '3NJ' => 'E02004839',
        '3NL' => 'E02004839',
        '3NN' => 'E02004839',
        '3NP' => 'E02004839',
        '3NQ' => 'E02004839',
        '3NR' => 'E02004839',
        '3NS' => 'E02004839',
        '3NT' => 'E02004839',
        '3NU' => 'E02004839',
        '3NW' => 'E02004839',
        '3NX' => 'E02004839',
        '3NY' => 'E02004839',
        '3NZ' => 'E02004839',
        '3PA' => 'E02004839',
        '3PB' => 'E02004839',
        '3PD' => 'E02004839',
        '3PE' => 'E02004839',
        '3PF' => 'E02004839',
        '3PG' => 'E02004839',
        '3PH' => 'E02004839',
        '3PJ' => 'E02004839',
        '3PL' => 'E02004839',
        '3PN' => 'E02004839',
        '3PP' => 'E02004839',
        '3PQ' => 'E02004839',
        '3PR' => 'E02004839',
        '3PS' => 'E02004839',
        '3PT' => 'E02004839',
        '3PU' => 'E02004839',
        '3PW' => 'E02004839',
        '3PX' => 'E02004839',
        '3PY' => 'E02004839',
        '3PZ' => 'E02004839',
        '3QA' => 'E02004839',
        '3QB' => 'E02004839',
        '3QD' => 'E02004839',
        '3QE' => 'E02004839',
        '3QF' => 'E02004839',
        '3QG' => 'E02004839',
        '3QH' => 'E02004839',
        '3QJ' => 'E02004839',
        '3QL' => 'E02004839',
        '3QN' => 'E02004839',
        '3QP' => 'E02004839',
        '3QQ' => 'E02004839',
        '3QR' => 'E02004839',
        '3QS' => 'E02004839',
        '3QT' => 'E02004839',
        '3QU' => 'E02004839',
        '3QW' => 'E02004839',
        '3QX' => 'E02004839',
        '3QY' => 'E02004839',
        '3QZ' => 'E02004839',
        '3RA' => 'E02004839',
        '3RB' => 'E02004839',
        '3RD' => 'E02004839',
        '3RE' => 'E02004839',
        '3RF' => 'E02004839',
        '3RJ' => 'E02004839',
        '3SN' => 'E02004839',
        '3UA' => 'E02004840',
        '3UB' => 'E02004722',
        '3WA' => 'E02004722',
        '3WB' => 'E02004839',
        '3WD' => 'E02004722',
        '3WE' => 'E02004839',
        '3WF' => 'E02004839',
        '3WG' => 'E02004839',
        '3WH' => 'E02004722',
        '3WJ' => 'E02004722',
        '3WL' => 'E02004839',
        '3WP' => 'E02004722',
        '3WQ' => 'E02004839',
        '3WR' => 'E02004722',
        '3WS' => 'E02004722',
        '3WT' => 'E02004722',
        '3WU' => 'E02004722',
        '3WX' => 'E02004722',
        '3WY' => 'E02004722',
        '3WZ' => 'E02004722',
        '3YB' => 'E02004839',
        '3YD' => 'E02004722',
        '3ZN' => 'E02004722',
        '3ZS' => 'E02004840',
        '3ZW' => 'E02004840',
        '3ZX' => 'E02004839',
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
