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
final class NE31
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001777',
        '1AB' => 'E02001777',
        '1AD' => 'E02001777',
        '1AE' => 'E02001777',
        '1AF' => 'E02001777',
        '1AG' => 'E02001777',
        '1AJ' => 'E02001777',
        '1AL' => 'E02001777',
        '1AN' => 'E02001777',
        '1AQ' => 'E02001777',
        '1AR' => 'E02001776',
        '1AS' => 'E02001776',
        '1AT' => 'E02001776',
        '1AU' => 'E02001777',
        '1AW' => 'E02001776',
        '1AX' => 'E02001777',
        '1AY' => 'E02001777',
        '1AZ' => 'E02001777',
        '1BA' => 'E02001777',
        '1BB' => 'E02001777',
        '1BD' => 'E02001777',
        '1BE' => 'E02001777',
        '1BF' => 'E02001777',
        '1BG' => 'E02001777',
        '1BH' => 'E02001777',
        '1BJ' => 'E02001777',
        '1BL' => 'E02001777',
        '1BN' => 'E02001777',
        '1BP' => 'E02001777',
        '1BQ' => 'E02001776',
        '1BS' => 'E02001777',
        '1BT' => 'E02001777',
        '1BU' => 'E02001777',
        '1BW' => 'E02001777',
        '1BX' => 'E02001777',
        '1BY' => 'E02001776',
        '1BZ' => 'E02001777',
        '1DA' => 'E02001777',
        '1DB' => 'E02001777',
        '1DD' => 'E02001777',
        '1DE' => 'E02001777',
        '1DF' => 'E02001777',
        '1DG' => 'E02001777',
        '1DH' => 'E02001777',
        '1DJ' => 'E02001777',
        '1DL' => 'E02001777',
        '1DN' => 'E02001777',
        '1DP' => 'E02001777',
        '1DQ' => 'E02001777',
        '1DR' => 'E02001777',
        '1DS' => 'E02001777',
        '1DT' => 'E02001777',
        '1DU' => 'E02001777',
        '1DW' => 'E02001777',
        '1DX' => 'E02001777',
        '1DY' => 'E02001777',
        '1DZ' => 'E02001777',
        '1EA' => 'E02001777',
        '1EB' => 'E02001777',
        '1ED' => 'E02001777',
        '1EE' => 'E02001777',
        '1EF' => 'E02001777',
        '1EG' => 'E02001777',
        '1EH' => 'E02001777',
        '1EJ' => 'E02001774',
        '1EL' => 'E02001777',
        '1EN' => 'E02001777',
        '1EP' => 'E02001777',
        '1EQ' => 'E02001777',
        '1ER' => 'E02001777',
        '1ES' => 'E02001777',
        '1ET' => 'E02001777',
        '1EU' => 'E02001777',
        '1EW' => 'E02001777',
        '1EX' => 'E02001777',
        '1EY' => 'E02001776',
        '1EZ' => 'E02001776',
        '1FA' => 'E02001777',
        '1FB' => 'E02001776',
        '1FD' => 'E02001776',
        '1FE' => 'E02001776',
        '1FF' => 'E02001776',
        '1FG' => 'E02001776',
        '1FH' => 'E02001776',
        '1FJ' => 'E02001776',
        '1FL' => 'E02001777',
        '1FN' => 'E02001776',
        '1HA' => 'E02001776',
        '1HB' => 'E02001776',
        '1HD' => 'E02001776',
        '1HE' => 'E02001776',
        '1HF' => 'E02001776',
        '1HG' => 'E02001776',
        '1HH' => 'E02001776',
        '1HJ' => 'E02001776',
        '1HL' => 'E02001776',
        '1HN' => 'E02001776',
        '1HP' => 'E02001776',
        '1HQ' => 'E02001776',
        '1HR' => 'E02001776',
        '1HS' => 'E02001776',
        '1HT' => 'E02001776',
        '1HU' => 'E02001776',
        '1HW' => 'E02001776',
        '1HX' => 'E02001776',
        '1HY' => 'E02001776',
        '1HZ' => 'E02001776',
        '1JA' => 'E02001776',
        '1JB' => 'E02001776',
        '1JD' => 'E02001776',
        '1JE' => 'E02001776',
        '1JF' => 'E02001776',
        '1JG' => 'E02001776',
        '1JH' => 'E02001776',
        '1JJ' => 'E02001776',
        '1JL' => 'E02001776',
        '1JN' => 'E02001776',
        '1JP' => 'E02001776',
        '1JQ' => 'E02001776',
        '1JR' => 'E02001776',
        '1JS' => 'E02001777',
        '1JT' => 'E02001777',
        '1JU' => 'E02001777',
        '1JW' => 'E02001776',
        '1JX' => 'E02001777',
        '1JY' => 'E02001777',
        '1JZ' => 'E02001777',
        '1LA' => 'E02001777',
        '1LB' => 'E02001777',
        '1LD' => 'E02001777',
        '1LE' => 'E02001777',
        '1LF' => 'E02001777',
        '1LG' => 'E02001777',
        '1LH' => 'E02001777',
        '1LJ' => 'E02001777',
        '1LL' => 'E02001777',
        '1LN' => 'E02001777',
        '1LP' => 'E02001777',
        '1LQ' => 'E02001777',
        '1LR' => 'E02001777',
        '1LS' => 'E02001777',
        '1LT' => 'E02001777',
        '1LU' => 'E02001777',
        '1LW' => 'E02001777',
        '1LX' => 'E02001777',
        '1LY' => 'E02001777',
        '1LZ' => 'E02001777',
        '1NA' => 'E02001777',
        '1NB' => 'E02001777',
        '1ND' => 'E02001777',
        '1NE' => 'E02001777',
        '1NG' => 'E02001777',
        '1NH' => 'E02001777',
        '1NJ' => 'E02001777',
        '1NL' => 'E02001777',
        '1NN' => 'E02001777',
        '1NP' => 'E02001777',
        '1NQ' => 'E02001777',
        '1NR' => 'E02001777',
        '1NS' => 'E02001777',
        '1NT' => 'E02001777',
        '1NU' => 'E02001777',
        '1NW' => 'E02001777',
        '1NX' => 'E02001777',
        '1NY' => 'E02001777',
        '1NZ' => 'E02001777',
        '1PA' => 'E02001777',
        '1PB' => 'E02001777',
        '1PD' => 'E02001777',
        '1PE' => 'E02001777',
        '1PF' => 'E02001777',
        '1PG' => 'E02001777',
        '1PH' => 'E02001777',
        '1PJ' => 'E02001777',
        '1PL' => 'E02001777',
        '1PN' => 'E02001777',
        '1PP' => 'E02001776',
        '1PQ' => 'E02001777',
        '1PR' => 'E02001776',
        '1PS' => 'E02001776',
        '1PT' => 'E02001776',
        '1PU' => 'E02001776',
        '1PW' => 'E02001777',
        '1PX' => 'E02001776',
        '1PY' => 'E02001776',
        '1PZ' => 'E02001776',
        '1QA' => 'E02001776',
        '1QB' => 'E02001776',
        '1QD' => 'E02001776',
        '1QE' => 'E02001776',
        '1QF' => 'E02001776',
        '1QG' => 'E02001776',
        '1QH' => 'E02001776',
        '1QJ' => 'E02001776',
        '1QL' => 'E02001777',
        '1QN' => 'E02001777',
        '1QP' => 'E02001777',
        '1QQ' => 'E02001776',
        '1QR' => 'E02001776',
        '1QS' => 'E02001777',
        '1QT' => 'E02001777',
        '1QU' => 'E02001777',
        '1QW' => 'E02001777',
        '1QX' => 'E02001777',
        '1QY' => 'E02001776',
        '1QZ' => 'E02001777',
        '1RA' => 'E02001777',
        '1RB' => 'E02001777',
        '1RD' => 'E02001777',
        '1RE' => 'E02001776',
        '1RF' => 'E02001776',
        '1RG' => 'E02001777',
        '1RH' => 'E02001777',
        '1RJ' => 'E02001777',
        '1RL' => 'E02001777',
        '1RN' => 'E02001776',
        '1RP' => 'E02001777',
        '1RQ' => 'E02001777',
        '1RR' => 'E02001777',
        '1RS' => 'E02001777',
        '1RT' => 'E02001776',
        '1RU' => 'E02001777',
        '1RW' => 'E02001777',
        '1RX' => 'E02001777',
        '1RY' => 'E02001777',
        '1RZ' => 'E02001776',
        '1SA' => 'E02001776',
        '1SB' => 'E02001776',
        '1SD' => 'E02001776',
        '1SE' => 'E02001776',
        '1SF' => 'E02001776',
        '1SG' => 'E02001774',
        '1SH' => 'E02001776',
        '1SJ' => 'E02001776',
        '1SL' => 'E02001776',
        '1SN' => 'E02001776',
        '1SP' => 'E02001776',
        '1SQ' => 'E02001776',
        '1SR' => 'E02001776',
        '1SS' => 'E02001776',
        '1ST' => 'E02001774',
        '1SU' => 'E02001776',
        '1SW' => 'E02001776',
        '1SX' => 'E02001776',
        '1SY' => 'E02001776',
        '1SZ' => 'E02001777',
        '1TA' => 'E02001776',
        '1TB' => 'E02001776',
        '1TD' => 'E02001776',
        '1TE' => 'E02001776',
        '1TF' => 'E02001776',
        '1TG' => 'E02001776',
        '1TH' => 'E02001776',
        '1TJ' => 'E02001777',
        '1TL' => 'E02001777',
        '1TN' => 'E02001777',
        '1TP' => 'E02001777',
        '1TQ' => 'E02001776',
        '1TR' => 'E02001776',
        '1TT' => 'E02001776',
        '1TU' => 'E02001776',
        '1TW' => 'E02001776',
        '1TX' => 'E02001777',
        '1TZ' => 'E02001774',
        '1UA' => 'E02001774',
        '1UB' => 'E02001777',
        '1UD' => 'E02001777',
        '1UE' => 'E02001777',
        '1UF' => 'E02001777',
        '1UG' => 'E02001777',
        '1UH' => 'E02001782',
        '1UJ' => 'E02001782',
        '1UL' => 'E02001782',
        '1UN' => 'E02001777',
        '1UP' => 'E02001777',
        '1UQ' => 'E02001777',
        '1UR' => 'E02001782',
        '1US' => 'E02001777',
        '1UT' => 'E02001777',
        '1UU' => 'E02001777',
        '1UW' => 'E02001777',
        '1UX' => 'E02001777',
        '1UY' => 'E02001777',
        '1UZ' => 'E02001777',
        '1WA' => 'E02001774',
        '1WB' => 'E02001776',
        '1WD' => 'E02001776',
        '1WE' => 'E02001776',
        '1WF' => 'E02001777',
        '1WH' => 'E02001777',
        '1WU' => 'E02001774',
        '1WW' => 'E02001774',
        '1WX' => 'E02001774',
        '1WY' => 'E02001774',
        '1WZ' => 'E02001774',
        '1XA' => 'E02001777',
        '1XB' => 'E02001777',
        '1XD' => 'E02001774',
        '1XF' => 'E02001776',
        '1XG' => 'E02001777',
        '1XH' => 'E02001777',
        '1XJ' => 'E02001776',
        '1XL' => 'E02001777',
        '1XN' => 'E02001777',
        '1XP' => 'E02001777',
        '1XQ' => 'E02001777',
        '1XR' => 'E02001776',
        '1XS' => 'E02001777',
        '1XT' => 'E02001777',
        '1XW' => 'E02001777',
        '1XZ' => 'E02001774',
        '1YA' => 'E02001774',
        '1YB' => 'E02001776',
        '1YD' => 'E02001776',
        '1YE' => 'E02001776',
        '1YF' => 'E02001776',
        '1YG' => 'E02001776',
        '1YH' => 'E02001776',
        '1YJ' => 'E02001776',
        '1YL' => 'E02001774',
        '1YN' => 'E02001782',
        '1YP' => 'E02001777',
        '1YQ' => 'E02001776',
        '1YR' => 'E02001777',
        '1YS' => 'E02001774',
        '1YT' => 'E02001774',
        '1YU' => 'E02001774',
        '1YW' => 'E02001782',
        '1YX' => 'E02001776',
        '1YZ' => 'E02001774',
        '2AA' => 'E02001782',
        '2AB' => 'E02001782',
        '2AD' => 'E02001782',
        '2AE' => 'E02001782',
        '2AF' => 'E02001782',
        '2AG' => 'E02001782',
        '2AH' => 'E02001782',
        '2AJ' => 'E02001784',
        '2AL' => 'E02001782',
        '2AN' => 'E02001782',
        '2AP' => 'E02001782',
        '2AQ' => 'E02001782',
        '2AR' => 'E02001782',
        '2AS' => 'E02001782',
        '2AT' => 'E02001782',
        '2AU' => 'E02001782',
        '2AW' => 'E02001782',
        '2AX' => 'E02001782',
        '2AY' => 'E02001782',
        '2AZ' => 'E02001782',
        '2BA' => 'E02001782',
        '2BB' => 'E02001782',
        '2BD' => 'E02001782',
        '2BE' => 'E02001782',
        '2BF' => 'E02001782',
        '2BG' => 'E02001782',
        '2BH' => 'E02001782',
        '2BJ' => 'E02001782',
        '2BL' => 'E02001782',
        '2BN' => 'E02001782',
        '2BP' => 'E02001782',
        '2BQ' => 'E02001782',
        '2BR' => 'E02001782',
        '2BS' => 'E02001776',
        '2BT' => 'E02001782',
        '2BU' => 'E02001782',
        '2BW' => 'E02001782',
        '2BX' => 'E02001782',
        '2BY' => 'E02001782',
        '2BZ' => 'E02001776',
        '2DA' => 'E02001782',
        '2DB' => 'E02001782',
        '2DD' => 'E02001782',
        '2DE' => 'E02001782',
        '2DF' => 'E02001782',
        '2DG' => 'E02001782',
        '2DH' => 'E02001782',
        '2DJ' => 'E02001782',
        '2DL' => 'E02001782',
        '2DN' => 'E02001782',
        '2DP' => 'E02001782',
        '2DQ' => 'E02001782',
        '2DR' => 'E02001782',
        '2DS' => 'E02001782',
        '2DT' => 'E02001782',
        '2DU' => 'E02001782',
        '2DW' => 'E02001782',
        '2DX' => 'E02001782',
        '2DY' => 'E02001782',
        '2DZ' => 'E02001782',
        '2EA' => 'E02001782',
        '2EB' => 'E02001782',
        '2ED' => 'E02001782',
        '2EE' => 'E02001782',
        '2EF' => 'E02001782',
        '2EG' => 'E02001782',
        '2EH' => 'E02001776',
        '2EJ' => 'E02001776',
        '2EL' => 'E02001776',
        '2EN' => 'E02001782',
        '2EP' => 'E02001782',
        '2EQ' => 'E02001787',
        '2ER' => 'E02001782',
        '2ES' => 'E02001787',
        '2ET' => 'E02001782',
        '2EU' => 'E02001782',
        '2EW' => 'E02001782',
        '2EX' => 'E02001787',
        '2EY' => 'E02001782',
        '2EZ' => 'E02001787',
        '2FA' => 'E02001776',
        '2FB' => 'E02001776',
        '2FD' => 'E02001776',
        '2FE' => 'E02001776',
        '2GA' => 'E02001782',
        '2GB' => 'E02001782',
        '2GD' => 'E02001782',
        '2GE' => 'E02001782',
        '2GF' => 'E02001782',
        '2GG' => 'E02001782',
        '2GH' => 'E02001782',
        '2HA' => 'E02001776',
        '2HB' => 'E02001782',
        '2HG' => 'E02001776',
        '2HH' => 'E02001782',
        '2HJ' => 'E02001782',
        '2HL' => 'E02001782',
        '2HN' => 'E02001782',
        '2HP' => 'E02001782',
        '2HQ' => 'E02001776',
        '2HR' => 'E02001782',
        '2HS' => 'E02001782',
        '2HT' => 'E02001782',
        '2HU' => 'E02001782',
        '2HW' => 'E02001782',
        '2HX' => 'E02001782',
        '2HY' => 'E02001782',
        '2HZ' => 'E02001782',
        '2JA' => 'E02001782',
        '2JB' => 'E02001782',
        '2JD' => 'E02001782',
        '2JE' => 'E02001782',
        '2JF' => 'E02001782',
        '2JG' => 'E02001782',
        '2JH' => 'E02001782',
        '2JJ' => 'E02001782',
        '2JL' => 'E02001782',
        '2JN' => 'E02001782',
        '2JP' => 'E02001782',
        '2JQ' => 'E02001782',
        '2JR' => 'E02001782',
        '2JS' => 'E02001782',
        '2JT' => 'E02001782',
        '2JW' => 'E02001782',
        '2JZ' => 'E02001782',
        '2LF' => 'E02001782',
        '2LG' => 'E02001782',
        '2LH' => 'E02001782',
        '2LJ' => 'E02001782',
        '2LL' => 'E02001782',
        '2LN' => 'E02001782',
        '2LP' => 'E02001782',
        '2LQ' => 'E02001782',
        '2LR' => 'E02001782',
        '2LS' => 'E02001782',
        '2LT' => 'E02001782',
        '2LU' => 'E02001782',
        '2LW' => 'E02001782',
        '2LX' => 'E02001782',
        '2LY' => 'E02001782',
        '2LZ' => 'E02001782',
        '2NA' => 'E02001782',
        '2NB' => 'E02001782',
        '2ND' => 'E02001782',
        '2NE' => 'E02001782',
        '2NF' => 'E02001782',
        '2NG' => 'E02001782',
        '2NH' => 'E02001782',
        '2NJ' => 'E02001782',
        '2NQ' => 'E02001782',
        '2NX' => 'E02001782',
        '2PA' => 'E02001782',
        '2PB' => 'E02001782',
        '2PD' => 'E02001782',
        '2PE' => 'E02001782',
        '2PF' => 'E02001782',
        '2PG' => 'E02001782',
        '2PH' => 'E02001782',
        '2PJ' => 'E02001782',
        '2PL' => 'E02001782',
        '2PN' => 'E02001782',
        '2PP' => 'E02001782',
        '2PQ' => 'E02001782',
        '2PR' => 'E02001782',
        '2PS' => 'E02001782',
        '2PT' => 'E02001782',
        '2PU' => 'E02001782',
        '2PW' => 'E02001782',
        '2PX' => 'E02001782',
        '2PY' => 'E02001782',
        '2PZ' => 'E02001782',
        '2QA' => 'E02001782',
        '2QB' => 'E02001782',
        '2QD' => 'E02001782',
        '2QE' => 'E02001782',
        '2QF' => 'E02001782',
        '2QG' => 'E02001782',
        '2QH' => 'E02001782',
        '2QJ' => 'E02001782',
        '2QL' => 'E02001782',
        '2QN' => 'E02001782',
        '2QP' => 'E02001782',
        '2QQ' => 'E02001782',
        '2QR' => 'E02001782',
        '2QS' => 'E02001782',
        '2QT' => 'E02001782',
        '2QU' => 'E02001782',
        '2QW' => 'E02001782',
        '2RG' => 'E02001782',
        '2RH' => 'E02001782',
        '2RJ' => 'E02001782',
        '2RL' => 'E02001782',
        '2RN' => 'E02001782',
        '2RP' => 'E02001782',
        '2RQ' => 'E02001782',
        '2RR' => 'E02001782',
        '2RT' => 'E02001776',
        '2RW' => 'E02001782',
        '2RX' => 'E02001776',
        '2RY' => 'E02001776',
        '2RZ' => 'E02001776',
        '2SA' => 'E02001776',
        '2SB' => 'E02001776',
        '2SD' => 'E02001776',
        '2SE' => 'E02001776',
        '2SF' => 'E02001776',
        '2SG' => 'E02001776',
        '2SH' => 'E02001776',
        '2SJ' => 'E02001776',
        '2SL' => 'E02001782',
        '2SN' => 'E02001776',
        '2SP' => 'E02001776',
        '2SQ' => 'E02001776',
        '2SR' => 'E02001776',
        '2SS' => 'E02001776',
        '2SW' => 'E02001776',
        '2TA' => 'E02001782',
        '2TB' => 'E02001782',
        '2TD' => 'E02001782',
        '2TE' => 'E02001782',
        '2TF' => 'E02001782',
        '2TG' => 'E02001782',
        '2TH' => 'E02001782',
        '2TJ' => 'E02001777',
        '2TL' => 'E02001777',
        '2TN' => 'E02001777',
        '2TP' => 'E02001777',
        '2TQ' => 'E02001782',
        '2TW' => 'E02001777',
        '2TY' => 'E02001777',
        '2TZ' => 'E02001777',
        '2UA' => 'E02001777',
        '2UB' => 'E02001782',
        '2UD' => 'E02001782',
        '2UE' => 'E02001777',
        '2UF' => 'E02001782',
        '2UG' => 'E02001777',
        '2UH' => 'E02001777',
        '2UJ' => 'E02001782',
        '2UL' => 'E02001777',
        '2UN' => 'E02001777',
        '2UP' => 'E02001782',
        '2UQ' => 'E02001777',
        '2UR' => 'E02001782',
        '2UW' => 'E02001777',
        '2UZ' => 'E02001776',
        '2WQ' => 'E02001774',
        '2WR' => 'E02001774',
        '2WS' => 'E02001774',
        '2WT' => 'E02001774',
        '2WU' => 'E02001774',
        '2WW' => 'E02001774',
        '2WX' => 'E02001774',
        '2WY' => 'E02001776',
        '2WZ' => 'E02001774',
        '2XA' => 'E02001776',
        '2XB' => 'E02001776',
        '2XD' => 'E02001776',
        '2XE' => 'E02001776',
        '2XF' => 'E02001776',
        '2XG' => 'E02001776',
        '2XH' => 'E02001776',
        '2XJ' => 'E02001776',
        '2XL' => 'E02001776',
        '2XP' => 'E02001776',
        '2XQ' => 'E02001776',
        '2XR' => 'E02001776',
        '2XS' => 'E02001776',
        '2XT' => 'E02001776',
        '2XU' => 'E02001776',
        '2XW' => 'E02001776',
        '2XX' => 'E02001776',
        '2XY' => 'E02001776',
        '2XZ' => 'E02001776',
        '2YA' => 'E02001776',
        '2YB' => 'E02001776',
        '2YD' => 'E02001776',
        '2YE' => 'E02001776',
        '2YN' => 'E02001776',
        '2YQ' => 'E02001774',
        '2YR' => 'E02001776',
        '2YS' => 'E02001776',
        '2YT' => 'E02001782',
        '2YU' => 'E02001782',
        '2YW' => 'E02001782',
        '2YX' => 'E02001782',
        '2YY' => 'E02001776',
        '2YZ' => 'E02001776',
        '2ZS' => 'E02001774',
        '9AA' => 'E02001774',
        '9AD' => 'E02001774',
        '9AE' => 'E02001774',
        '9AF' => 'E02001774',
        '9AG' => 'E02001774',
        '9AH' => 'E02001774',
        '9AJ' => 'E02001774',
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