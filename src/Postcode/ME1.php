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
final class ME1
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003327',
        '1AB' => 'E02003327',
        '1AD' => 'E02003327',
        '1AE' => 'E02003327',
        '1AF' => 'E02003327',
        '1AG' => 'E02003327',
        '1AH' => 'E02003318',
        '1AJ' => 'E02003327',
        '1AL' => 'E02003327',
        '1AN' => 'E02003327',
        '1AP' => 'E02003318',
        '1AQ' => 'E02003327',
        '1AR' => 'E02003327',
        '1AS' => 'E02003327',
        '1AT' => 'E02003327',
        '1AU' => 'E02003327',
        '1AW' => 'E02003327',
        '1AX' => 'E02003327',
        '1AY' => 'E02003327',
        '1AZ' => 'E02003327',
        '1BA' => 'E02003328',
        '1BB' => 'E02003328',
        '1BD' => 'E02003328',
        '1BE' => 'E02003327',
        '1BF' => 'E02003328',
        '1BG' => 'E02003328',
        '1BH' => 'E02003327',
        '1BJ' => 'E02003327',
        '1BL' => 'E02003328',
        '1BN' => 'E02003328',
        '1BP' => 'E02003328',
        '1BQ' => 'E02003327',
        '1BS' => 'E02003328',
        '1BT' => 'E02003328',
        '1BU' => 'E02003328',
        '1BW' => 'E02003328',
        '1BX' => 'E02003328',
        '1BY' => 'E02003328',
        '1BZ' => 'E02003328',
        '1DA' => 'E02003328',
        '1DB' => 'E02003327',
        '1DD' => 'E02003327',
        '1DE' => 'E02003327',
        '1DF' => 'E02003327',
        '1DG' => 'E02003328',
        '1DH' => 'E02003328',
        '1DJ' => 'E02003328',
        '1DL' => 'E02003328',
        '1DN' => 'E02003328',
        '1DP' => 'E02003328',
        '1DQ' => 'E02003327',
        '1DR' => 'E02003328',
        '1DS' => 'E02003328',
        '1DT' => 'E02003327',
        '1DU' => 'E02003328',
        '1DW' => 'E02003327',
        '1DX' => 'E02003328',
        '1DY' => 'E02003327',
        '1DZ' => 'E02003328',
        '1EA' => 'E02003328',
        '1EB' => 'E02003327',
        '1ED' => 'E02003327',
        '1EE' => 'E02003328',
        '1EF' => 'E02003327',
        '1EG' => 'E02003327',
        '1EH' => 'E02003327',
        '1EJ' => 'E02003327',
        '1EL' => 'E02003327',
        '1EN' => 'E02003327',
        '1EP' => 'E02003327',
        '1EQ' => 'E02003327',
        '1ER' => 'E02003327',
        '1ES' => 'E02003327',
        '1ET' => 'E02003327',
        '1EU' => 'E02003327',
        '1EW' => 'E02003327',
        '1EX' => 'E02003327',
        '1EY' => 'E02003327',
        '1EZ' => 'E02003327',
        '1FA' => 'E02003327',
        '1FB' => 'E02003327',
        '1FD' => 'E02003327',
        '1FE' => 'E02003327',
        '1FF' => 'E02003328',
        '1FG' => 'E02003328',
        '1FH' => 'E02003328',
        '1FJ' => 'E02003328',
        '1FL' => 'E02003327',
        '1FN' => 'E02003327',
        '1FP' => 'E02003327',
        '1FQ' => 'E02003328',
        '1FR' => 'E02003327',
        '1FS' => 'E02003327',
        '1FT' => 'E02003327',
        '1FW' => 'E02003328',
        '1FX' => 'E02003328',
        '1FY' => 'E02003328',
        '1FZ' => 'E02003327',
        '1GA' => 'E02003328',
        '1GB' => 'E02003327',
        '1GD' => 'E02003327',
        '1GE' => 'E02003328',
        '1GF' => 'E02003328',
        '1GN' => 'E02003328',
        '1GP' => 'E02003328',
        '1GQ' => 'E02003328',
        '1GR' => 'E02003328',
        '1GW' => 'E02003328',
        '1GX' => 'E02003328',
        '1GY' => 'E02003327',
        '1GZ' => 'E02003328',
        '1HA' => 'E02003327',
        '1HB' => 'E02003328',
        '1HD' => 'E02003327',
        '1HE' => 'E02003328',
        '1HF' => 'E02003328',
        '1HG' => 'E02003328',
        '1HH' => 'E02003328',
        '1HJ' => 'E02003328',
        '1HL' => 'E02003328',
        '1HN' => 'E02003328',
        '1HP' => 'E02003327',
        '1HQ' => 'E02003328',
        '1HR' => 'E02003327',
        '1HS' => 'E02003328',
        '1HT' => 'E02003328',
        '1HU' => 'E02003328',
        '1HW' => 'E02003328',
        '1HX' => 'E02003328',
        '1HY' => 'E02003328',
        '1HZ' => 'E02003328',
        '1JA' => 'E02003328',
        '1JB' => 'E02003327',
        '1JD' => 'E02003327',
        '1JE' => 'E02003328',
        '1JF' => 'E02003327',
        '1JG' => 'E02003328',
        '1JH' => 'E02003327',
        '1JJ' => 'E02003327',
        '1JL' => 'E02003327',
        '1JN' => 'E02003327',
        '1JP' => 'E02003327',
        '1JQ' => 'E02003327',
        '1JR' => 'E02003328',
        '1JS' => 'E02003327',
        '1JT' => 'E02003327',
        '1JU' => 'E02003327',
        '1JW' => 'E02003327',
        '1JX' => 'E02003327',
        '1JY' => 'E02003327',
        '1JZ' => 'E02003327',
        '1LA' => 'E02003327',
        '1LB' => 'E02003327',
        '1LD' => 'E02003327',
        '1LE' => 'E02003327',
        '1LF' => 'E02003327',
        '1LG' => 'E02003327',
        '1LH' => 'E02003327',
        '1LJ' => 'E02003327',
        '1LL' => 'E02003327',
        '1LN' => 'E02003327',
        '1LP' => 'E02003327',
        '1LQ' => 'E02003327',
        '1LR' => 'E02003327',
        '1LS' => 'E02003327',
        '1LT' => 'E02003328',
        '1LU' => 'E02003327',
        '1LW' => 'E02003327',
        '1LX' => 'E02003327',
        '1LY' => 'E02003327',
        '1LZ' => 'E02003327',
        '1NA' => 'E02003327',
        '1NB' => 'E02003327',
        '1ND' => 'E02003327',
        '1NE' => 'E02003327',
        '1NF' => 'E02003328',
        '1NG' => 'E02003328',
        '1NH' => 'E02003327',
        '1NJ' => 'E02003327',
        '1NL' => 'E02003327',
        '1NN' => 'E02003327',
        '1NP' => 'E02003327',
        '1NQ' => 'E02003327',
        '1NS' => 'E02003327',
        '1NU' => 'E02003327',
        '1NW' => 'E02003327',
        '1NX' => 'E02003327',
        '1NY' => 'E02003328',
        '1NZ' => 'E02003328',
        '1PA' => 'E02003328',
        '1PB' => 'E02003328',
        '1PD' => 'E02003327',
        '1PE' => 'E02003328',
        '1PF' => 'E02003327',
        '1PG' => 'E02003327',
        '1PH' => 'E02003328',
        '1PJ' => 'E02003328',
        '1PL' => 'E02003328',
        '1PN' => 'E02003328',
        '1PP' => 'E02003327',
        '1PQ' => 'E02003328',
        '1PR' => 'E02003328',
        '1PS' => 'E02003327',
        '1PT' => 'E02003327',
        '1PU' => 'E02003327',
        '1PW' => 'E02003328',
        '1PX' => 'E02003327',
        '1PY' => 'E02003327',
        '1PZ' => 'E02003328',
        '1QA' => 'E02003327',
        '1QB' => 'E02003327',
        '1QD' => 'E02003327',
        '1QE' => 'E02003327',
        '1QF' => 'E02003327',
        '1QG' => 'E02003328',
        '1QH' => 'E02003327',
        '1QJ' => 'E02003327',
        '1QL' => 'E02003327',
        '1QN' => 'E02003327',
        '1QP' => 'E02003327',
        '1QQ' => 'E02003327',
        '1QR' => 'E02003327',
        '1QS' => 'E02003327',
        '1QT' => 'E02003327',
        '1QU' => 'E02003327',
        '1QW' => 'E02003327',
        '1QX' => 'E02003327',
        '1QY' => 'E02003327',
        '1RA' => 'E02003327',
        '1RB' => 'E02003327',
        '1RD' => 'E02003328',
        '1RE' => 'E02003327',
        '1RF' => 'E02003327',
        '1RG' => 'E02003327',
        '1RH' => 'E02003327',
        '1RJ' => 'E02003327',
        '1RL' => 'E02003327',
        '1RN' => 'E02003327',
        '1RP' => 'E02003327',
        '1RQ' => 'E02003327',
        '1RR' => 'E02003327',
        '1RS' => 'E02003327',
        '1RT' => 'E02003327',
        '1RU' => 'E02003327',
        '1RW' => 'E02003327',
        '1RX' => 'E02003327',
        '1RY' => 'E02003327',
        '1RZ' => 'E02003327',
        '1SA' => 'E02003327',
        '1SB' => 'E02003327',
        '1SD' => 'E02003327',
        '1SE' => 'E02003327',
        '1SF' => 'E02003327',
        '1SG' => 'E02003327',
        '1SH' => 'E02003327',
        '1SJ' => 'E02003327',
        '1SL' => 'E02003327',
        '1SN' => 'E02003327',
        '1SP' => 'E02003327',
        '1SQ' => 'E02003327',
        '1SR' => 'E02003327',
        '1SS' => 'E02003327',
        '1ST' => 'E02003327',
        '1SU' => 'E02003327',
        '1SW' => 'E02003327',
        '1SX' => 'E02003327',
        '1SY' => 'E02003327',
        '1SZ' => 'E02003327',
        '1TA' => 'E02003327',
        '1TB' => 'E02003327',
        '1TD' => 'E02003327',
        '1TE' => 'E02003327',
        '1TF' => 'E02003327',
        '1TG' => 'E02003327',
        '1TH' => 'E02003328',
        '1TJ' => 'E02003327',
        '1TL' => 'E02003327',
        '1TN' => 'E02003327',
        '1TP' => 'E02003327',
        '1TQ' => 'E02003327',
        '1TR' => 'E02003327',
        '1TS' => 'E02003327',
        '1TT' => 'E02003327',
        '1TU' => 'E02003327',
        '1TX' => 'E02003328',
        '1TY' => 'E02003327',
        '1UA' => 'E02003327',
        '1UB' => 'E02003327',
        '1UD' => 'E02003327',
        '1UE' => 'E02003327',
        '1UF' => 'E02003327',
        '1UG' => 'E02003327',
        '1UH' => 'E02003327',
        '1UJ' => 'E02003327',
        '1UL' => 'E02003327',
        '1UN' => 'E02003327',
        '1UP' => 'E02003327',
        '1UQ' => 'E02003327',
        '1UR' => 'E02003327',
        '1UT' => 'E02003327',
        '1UU' => 'E02003327',
        '1UW' => 'E02003327',
        '1UX' => 'E02003327',
        '1UY' => 'E02003327',
        '1UZ' => 'E02003328',
        '1WA' => 'E02003327',
        '1WB' => 'E02003327',
        '1WD' => 'E02003327',
        '1WE' => 'E02003327',
        '1WG' => 'E02003327',
        '1WH' => 'E02003327',
        '1WL' => 'E02003327',
        '1WQ' => 'E02003327',
        '1WS' => 'E02003327',
        '1WT' => 'E02003327',
        '1WU' => 'E02003327',
        '1WW' => 'E02003327',
        '1WX' => 'E02003327',
        '1WY' => 'E02003327',
        '1WZ' => 'E02003327',
        '1XA' => 'E02003327',
        '1XB' => 'E02003327',
        '1XD' => 'E02003327',
        '1XE' => 'E02003328',
        '1XF' => 'E02003328',
        '1XG' => 'E02003327',
        '1XH' => 'E02003327',
        '1XJ' => 'E02003327',
        '1XL' => 'E02003327',
        '1XN' => 'E02003327',
        '1XP' => 'E02003327',
        '1XQ' => 'E02003327',
        '1XR' => 'E02003327',
        '1XS' => 'E02003327',
        '1XT' => 'E02003327',
        '1XU' => 'E02003327',
        '1XW' => 'E02003327',
        '1XX' => 'E02003327',
        '1XY' => 'E02003327',
        '1XZ' => 'E02003327',
        '1YA' => 'E02003327',
        '1YB' => 'E02003327',
        '1YD' => 'E02003327',
        '1YE' => 'E02003327',
        '1YF' => 'E02003327',
        '1YG' => 'E02003327',
        '1YH' => 'E02003327',
        '1YJ' => 'E02003327',
        '1YL' => 'E02003327',
        '1YN' => 'E02003327',
        '1YP' => 'E02003327',
        '1YQ' => 'E02003327',
        '1YR' => 'E02003327',
        '1YS' => 'E02003327',
        '1YT' => 'E02003327',
        '1YU' => 'E02003327',
        '1YW' => 'E02003327',
        '1YX' => 'E02003327',
        '1YY' => 'E02003327',
        '1YZ' => 'E02003327',
        '1ZB' => 'E02003327',
        '1ZD' => 'E02003327',
        '2AA' => 'E02003327',
        '2AB' => 'E02003330',
        '2AD' => 'E02003328',
        '2AE' => 'E02003330',
        '2AF' => 'E02003330',
        '2AG' => 'E02003327',
        '2AH' => 'E02003339',
        '2AJ' => 'E02003339',
        '2AL' => 'E02003330',
        '2AN' => 'E02003330',
        '2AP' => 'E02003330',
        '2AQ' => 'E02003327',
        '2AR' => 'E02003330',
        '2AS' => 'E02003330',
        '2AT' => 'E02003330',
        '2AU' => 'E02003330',
        '2AW' => 'E02003330',
        '2AX' => 'E02003339',
        '2AY' => 'E02003339',
        '2AZ' => 'E02003327',
        '2BA' => 'E02003339',
        '2BB' => 'E02003339',
        '2BD' => 'E02003339',
        '2BE' => 'E02003339',
        '2BF' => 'E02003327',
        '2BG' => 'E02003339',
        '2BH' => 'E02003337',
        '2BJ' => 'E02003330',
        '2BL' => 'E02003330',
        '2BN' => 'E02003330',
        '2BP' => 'E02003339',
        '2BQ' => 'E02003339',
        '2BS' => 'E02003339',
        '2BT' => 'E02003339',
        '2BU' => 'E02003327',
        '2BW' => 'E02003339',
        '2BX' => 'E02003327',
        '2BY' => 'E02003327',
        '2BZ' => 'E02003327',
        '2DA' => 'E02003327',
        '2DB' => 'E02003327',
        '2DD' => 'E02003327',
        '2DE' => 'E02003327',
        '2DF' => 'E02003327',
        '2DG' => 'E02003327',
        '2DH' => 'E02003327',
        '2DJ' => 'E02003339',
        '2DL' => 'E02003339',
        '2DN' => 'E02003339',
        '2DP' => 'E02003330',
        '2DQ' => 'E02003330',
        '2DR' => 'E02003330',
        '2DS' => 'E02003330',
        '2DT' => 'E02003330',
        '2DU' => 'E02003330',
        '2DW' => 'E02003327',
        '2DX' => 'E02003330',
        '2DY' => 'E02003330',
        '2DZ' => 'E02003339',
        '2EA' => 'E02003330',
        '2EB' => 'E02003330',
        '2ED' => 'E02003330',
        '2EE' => 'E02003330',
        '2EF' => 'E02003330',
        '2EG' => 'E02003330',
        '2EH' => 'E02003330',
        '2EJ' => 'E02003339',
        '2EL' => 'E02003330',
        '2EN' => 'E02003330',
        '2EP' => 'E02003330',
        '2EQ' => 'E02003330',
        '2ER' => 'E02003330',
        '2ES' => 'E02003330',
        '2ET' => 'E02003330',
        '2EU' => 'E02003330',
        '2EW' => 'E02003330',
        '2EX' => 'E02003327',
        '2EY' => 'E02003327',
        '2EZ' => 'E02003339',
        '2FA' => 'E02003330',
        '2FB' => 'E02003327',
        '2FD' => 'E02003339',
        '2FE' => 'E02003328',
        '2FF' => 'E02003339',
        '2FG' => 'E02003330',
        '2GA' => 'E02003327',
        '2GB' => 'E02003327',
        '2HA' => 'E02003330',
        '2HB' => 'E02003330',
        '2HD' => 'E02003330',
        '2HE' => 'E02003330',
        '2HF' => 'E02003330',
        '2HG' => 'E02003330',
        '2HH' => 'E02003330',
        '2HJ' => 'E02003330',
        '2HL' => 'E02003330',
        '2HN' => 'E02003330',
        '2HP' => 'E02003330',
        '2HQ' => 'E02003330',
        '2HR' => 'E02003330',
        '2HS' => 'E02003330',
        '2HT' => 'E02003330',
        '2HU' => 'E02003330',
        '2HW' => 'E02003330',
        '2HX' => 'E02003330',
        '2HY' => 'E02003330',
        '2HZ' => 'E02003330',
        '2JA' => 'E02003330',
        '2JB' => 'E02003330',
        '2JD' => 'E02003330',
        '2JE' => 'E02003330',
        '2JF' => 'E02003327',
        '2JG' => 'E02003327',
        '2JH' => 'E02003330',
        '2JJ' => 'E02003330',
        '2JL' => 'E02003330',
        '2JN' => 'E02003330',
        '2JP' => 'E02003330',
        '2JQ' => 'E02003330',
        '2JR' => 'E02003330',
        '2JS' => 'E02003330',
        '2JT' => 'E02003330',
        '2JU' => 'E02003330',
        '2JW' => 'E02003330',
        '2JX' => 'E02003327',
        '2JY' => 'E02003330',
        '2JZ' => 'E02003330',
        '2LA' => 'E02003330',
        '2LB' => 'E02003330',
        '2LD' => 'E02003330',
        '2LE' => 'E02003330',
        '2LF' => 'E02003330',
        '2LG' => 'E02003330',
        '2LH' => 'E02003330',
        '2LJ' => 'E02003330',
        '2LL' => 'E02003330',
        '2LN' => 'E02003330',
        '2LP' => 'E02003327',
        '2LQ' => 'E02003330',
        '2LR' => 'E02003330',
        '2LS' => 'E02003330',
        '2LT' => 'E02003337',
        '2LU' => 'E02003337',
        '2LW' => 'E02003330',
        '2LX' => 'E02003337',
        '2LY' => 'E02003337',
        '2LZ' => 'E02003337',
        '2NA' => 'E02003337',
        '2NB' => 'E02003337',
        '2ND' => 'E02003337',
        '2NE' => 'E02003337',
        '2NF' => 'E02003327',
        '2NG' => 'E02003337',
        '2NH' => 'E02003330',
        '2NJ' => 'E02003330',
        '2NL' => 'E02003330',
        '2NN' => 'E02003330',
        '2NP' => 'E02003327',
        '2NQ' => 'E02003337',
        '2NR' => 'E02003337',
        '2NS' => 'E02003330',
        '2NT' => 'E02003330',
        '2NU' => 'E02003330',
        '2NW' => 'E02003337',
        '2NX' => 'E02003330',
        '2NY' => 'E02003330',
        '2NZ' => 'E02003330',
        '2PA' => 'E02003330',
        '2PB' => 'E02003330',
        '2PD' => 'E02003330',
        '2PE' => 'E02003330',
        '2PF' => 'E02003337',
        '2PG' => 'E02003337',
        '2PH' => 'E02003337',
        '2PJ' => 'E02003337',
        '2PL' => 'E02003337',
        '2PN' => 'E02003337',
        '2PP' => 'E02003337',
        '2PQ' => 'E02003330',
        '2PR' => 'E02003337',
        '2PS' => 'E02003330',
        '2PT' => 'E02003337',
        '2PU' => 'E02003337',
        '2PW' => 'E02003337',
        '2PX' => 'E02003337',
        '2PY' => 'E02003337',
        '2PZ' => 'E02003337',
        '2QA' => 'E02003337',
        '2QB' => 'E02003330',
        '2QD' => 'E02003330',
        '2QE' => 'E02003330',
        '2QF' => 'E02003330',
        '2QG' => 'E02003330',
        '2QH' => 'E02003339',
        '2QJ' => 'E02003339',
        '2QL' => 'E02003339',
        '2QN' => 'E02003339',
        '2QP' => 'E02003339',
        '2QQ' => 'E02003337',
        '2QR' => 'E02003339',
        '2QS' => 'E02003339',
        '2QT' => 'E02003339',
        '2QU' => 'E02003339',
        '2QW' => 'E02003339',
        '2QX' => 'E02003334',
        '2QY' => 'E02003339',
        '2RA' => 'E02003339',
        '2RB' => 'E02003339',
        '2RD' => 'E02003339',
        '2RE' => 'E02003339',
        '2RF' => 'E02003339',
        '2RG' => 'E02003339',
        '2RH' => 'E02003339',
        '2RJ' => 'E02003339',
        '2RL' => 'E02003339',
        '2RN' => 'E02003339',
        '2RP' => 'E02003339',
        '2RQ' => 'E02003327',
        '2RR' => 'E02003339',
        '2RS' => 'E02003339',
        '2RT' => 'E02003339',
        '2RU' => 'E02003339',
        '2RW' => 'E02003339',
        '2RX' => 'E02003339',
        '2RY' => 'E02003339',
        '2RZ' => 'E02003339',
        '2SA' => 'E02003339',
        '2SB' => 'E02003334',
        '2SD' => 'E02003330',
        '2SE' => 'E02003346',
        '2SF' => 'E02003327',
        '2SG' => 'E02003339',
        '2SH' => 'E02003346',
        '2SJ' => 'E02003346',
        '2SL' => 'E02003339',
        '2SN' => 'E02003339',
        '2SP' => 'E02003339',
        '2SQ' => 'E02003339',
        '2SR' => 'E02003339',
        '2SS' => 'E02003339',
        '2ST' => 'E02003339',
        '2SU' => 'E02003339',
        '2SW' => 'E02003339',
        '2SX' => 'E02003339',
        '2SY' => 'E02003339',
        '2SZ' => 'E02003346',
        '2TA' => 'E02003339',
        '2TB' => 'E02003339',
        '2TD' => 'E02003330',
        '2TE' => 'E02003346',
        '2TF' => 'E02003346',
        '2TG' => 'E02003339',
        '2TH' => 'E02003330',
        '2TJ' => 'E02003339',
        '2TL' => 'E02003339',
        '2TN' => 'E02003339',
        '2TP' => 'E02003330',
        '2TQ' => 'E02003339',
        '2TR' => 'E02003339',
        '2TS' => 'E02003339',
        '2TT' => 'E02003330',
        '2TU' => 'E02003339',
        '2TW' => 'E02003339',
        '2TY' => 'E02003339',
        '2TZ' => 'E02003339',
        '2UA' => 'E02003339',
        '2UB' => 'E02003339',
        '2UD' => 'E02003339',
        '2UE' => 'E02003339',
        '2UF' => 'E02003339',
        '2UG' => 'E02003339',
        '2UH' => 'E02003339',
        '2UJ' => 'E02003339',
        '2UL' => 'E02003339',
        '2UN' => 'E02003339',
        '2UP' => 'E02003339',
        '2UQ' => 'E02003339',
        '2UR' => 'E02003339',
        '2UT' => 'E02003339',
        '2UU' => 'E02003339',
        '2UW' => 'E02003339',
        '2UX' => 'E02003339',
        '2UY' => 'E02003339',
        '2UZ' => 'E02003339',
        '2WA' => 'E02003327',
        '2WB' => 'E02003327',
        '2WD' => 'E02003327',
        '2WE' => 'E02003327',
        '2WF' => 'E02003327',
        '2WG' => 'E02003327',
        '2WJ' => 'E02003327',
        '2WP' => 'E02003327',
        '2WT' => 'E02003327',
        '2WU' => 'E02003339',
        '2WY' => 'E02003327',
        '2WZ' => 'E02003327',
        '2XA' => 'E02003339',
        '2XB' => 'E02003339',
        '2XD' => 'E02003339',
        '2XE' => 'E02003339',
        '2XF' => 'E02003339',
        '2XG' => 'E02003339',
        '2XJ' => 'E02003330',
        '2XL' => 'E02003339',
        '2XN' => 'E02003327',
        '2XP' => 'E02003337',
        '2XQ' => 'E02003339',
        '2XR' => 'E02003339',
        '2XS' => 'E02003337',
        '2XT' => 'E02003337',
        '2XX' => 'E02003339',
        '2XY' => 'E02003346',
        '2YA' => 'E02003327',
        '2YB' => 'E02003327',
        '2YF' => 'E02003327',
        '2YQ' => 'E02003327',
        '2YR' => 'E02003327',
        '2YW' => 'E02003327',
        '2YZ' => 'E02003327',
        '2ZY' => 'E02003327',
        '3AA' => 'E02003337',
        '3AB' => 'E02003337',
        '3AD' => 'E02003337',
        '3AE' => 'E02003337',
        '3AF' => 'E02003327',
        '3AG' => 'E02003337',
        '3AH' => 'E02003337',
        '3AJ' => 'E02003327',
        '3AL' => 'E02003327',
        '3AN' => 'E02003327',
        '3AP' => 'E02003327',
        '3AQ' => 'E02003337',
        '3AR' => 'E02003327',
        '3AS' => 'E02003327',
        '3AT' => 'E02003327',
        '3AU' => 'E02003337',
        '3AW' => 'E02003327',
        '3AX' => 'E02003330',
        '3AY' => 'E02003327',
        '3AZ' => 'E02003327',
        '3BA' => 'E02003337',
        '3BB' => 'E02003337',
        '3BD' => 'E02003327',
        '3BE' => 'E02003337',
        '3BF' => 'E02003330',
        '3BG' => 'E02003327',
        '3BH' => 'E02003327',
        '3BJ' => 'E02003327',
        '3BL' => 'E02003337',
        '3BN' => 'E02003327',
        '3BP' => 'E02003330',
        '3BQ' => 'E02003327',
        '3BS' => 'E02003327',
        '3BT' => 'E02003330',
        '3BU' => 'E02003330',
        '3BW' => 'E02003327',
        '3BX' => 'E02003327',
        '3BY' => 'E02003330',
        '3BZ' => 'E02003330',
        '3DA' => 'E02003330',
        '3DB' => 'E02003330',
        '3DD' => 'E02003330',
        '3DE' => 'E02003327',
        '3DF' => 'E02003337',
        '3DG' => 'E02003327',
        '3DH' => 'E02003337',
        '3DJ' => 'E02003327',
        '3DL' => 'E02003327',
        '3DN' => 'E02003327',
        '3DP' => 'E02003327',
        '3DQ' => 'E02003337',
        '3DR' => 'E02003327',
        '3DS' => 'E02003327',
        '3DT' => 'E02003327',
        '3DU' => 'E02003327',
        '3DW' => 'E02003327',
        '3DX' => 'E02003327',
        '3DY' => 'E02003327',
        '3DZ' => 'E02003327',
        '3EA' => 'E02003327',
        '3EB' => 'E02003327',
        '3ED' => 'E02003327',
        '3EE' => 'E02003330',
        '3EF' => 'E02003330',
        '3EG' => 'E02003337',
        '3EH' => 'E02003337',
        '3EJ' => 'E02003337',
        '3EL' => 'E02003337',
        '3EN' => 'E02003337',
        '3EP' => 'E02003327',
        '3EQ' => 'E02003327',
        '3ER' => 'E02003327',
        '3ES' => 'E02003330',
        '3ET' => 'E02003327',
        '3EU' => 'E02003327',
        '3EW' => 'E02003337',
        '3EX' => 'E02003337',
        '3EY' => 'E02003339',
        '3EZ' => 'E02005149',
        '3FA' => 'E02003337',
        '3FB' => 'E02003327',
        '3FD' => 'E02003327',
        '3FE' => 'E02005149',
        '3FF' => 'E02005149',
        '3FG' => 'E02005149',
        '3FH' => 'E02005149',
        '3FJ' => 'E02005149',
        '3FL' => 'E02005149',
        '3FN' => 'E02005149',
        '3FP' => 'E02005149',
        '3FQ' => 'E02005149',
        '3FR' => 'E02005149',
        '3FS' => 'E02005149',
        '3FT' => 'E02005149',
        '3FU' => 'E02005149',
        '3FW' => 'E02005149',
        '3FX' => 'E02005149',
        '3FY' => 'E02005149',
        '3FZ' => 'E02003337',
        '3GA' => 'E02003337',
        '3GB' => 'E02005149',
        '3GD' => 'E02005149',
        '3GE' => 'E02005149',
        '3GF' => 'E02005149',
        '3GN' => 'E02005149',
        '3GP' => 'E02005149',
        '3GQ' => 'E02005149',
        '3GR' => 'E02005149',
        '3GS' => 'E02005149',
        '3GT' => 'E02005149',
        '3GU' => 'E02003327',
        '3GW' => 'E02005149',
        '3GX' => 'E02003327',
        '3GY' => 'E02003337',
        '3GZ' => 'E02005149',
        '3HA' => 'E02003337',
        '3HB' => 'E02003337',
        '3HD' => 'E02003337',
        '3HE' => 'E02003337',
        '3HF' => 'E02003337',
        '3HG' => 'E02003337',
        '3HH' => 'E02003337',
        '3HJ' => 'E02003337',
        '3HL' => 'E02003337',
        '3HN' => 'E02003327',
        '3HP' => 'E02003337',
        '3HQ' => 'E02003337',
        '3HR' => 'E02003327',
        '3HS' => 'E02003337',
        '3HT' => 'E02003337',
        '3HU' => 'E02003337',
        '3HW' => 'E02003327',
        '3HX' => 'E02003327',
        '3HY' => 'E02003337',
        '3HZ' => 'E02003337',
        '3JA' => 'E02003337',
        '3JB' => 'E02003337',
        '3JD' => 'E02003327',
        '3JE' => 'E02003337',
        '3JF' => 'E02003327',
        '3JG' => 'E02003337',
        '3JH' => 'E02003337',
        '3JJ' => 'E02003337',
        '3JL' => 'E02003337',
        '3JN' => 'E02003337',
        '3JP' => 'E02003337',
        '3JQ' => 'E02003337',
        '3JR' => 'E02003337',
        '3JS' => 'E02003337',
        '3JT' => 'E02003337',
        '3JU' => 'E02003337',
        '3JW' => 'E02003327',
        '3JX' => 'E02003337',
        '3JY' => 'E02003337',
        '3JZ' => 'E02003337',
        '3LA' => 'E02003337',
        '3LB' => 'E02003337',
        '3LD' => 'E02003337',
        '3LE' => 'E02003337',
        '3LF' => 'E02003337',
        '3LG' => 'E02003337',
        '3LH' => 'E02003337',
        '3LJ' => 'E02003337',
        '3LL' => 'E02003337',
        '3LN' => 'E02003337',
        '3LP' => 'E02003337',
        '3LQ' => 'E02003337',
        '3LR' => 'E02003337',
        '3LS' => 'E02003337',
        '3LT' => 'E02003337',
        '3LU' => 'E02003337',
        '3LW' => 'E02003337',
        '3LX' => 'E02003327',
        '3LY' => 'E02003337',
        '3LZ' => 'E02003337',
        '3NA' => 'E02003337',
        '3NB' => 'E02003337',
        '3ND' => 'E02003337',
        '3NE' => 'E02003337',
        '3NF' => 'E02003337',
        '3NG' => 'E02003337',
        '3NH' => 'E02003337',
        '3NJ' => 'E02003337',
        '3NL' => 'E02003337',
        '3NN' => 'E02003337',
        '3NP' => 'E02003337',
        '3NQ' => 'E02003337',
        '3NR' => 'E02003337',
        '3NS' => 'E02003327',
        '3NT' => 'E02003337',
        '3NU' => 'E02003337',
        '3NW' => 'E02003337',
        '3NX' => 'E02003337',
        '3NY' => 'E02003337',
        '3NZ' => 'E02003337',
        '3PA' => 'E02003337',
        '3PB' => 'E02003337',
        '3PD' => 'E02003337',
        '3PE' => 'E02003337',
        '3PF' => 'E02003337',
        '3PG' => 'E02003337',
        '3PH' => 'E02003337',
        '3PJ' => 'E02003337',
        '3PL' => 'E02003337',
        '3PN' => 'E02003337',
        '3PP' => 'E02003337',
        '3PQ' => 'E02003337',
        '3PR' => 'E02003337',
        '3PS' => 'E02003337',
        '3PT' => 'E02003337',
        '3PU' => 'E02003339',
        '3PW' => 'E02003337',
        '3PX' => 'E02003337',
        '3PY' => 'E02003337',
        '3PZ' => 'E02003337',
        '3QA' => 'E02005149',
        '3QB' => 'E02003337',
        '3QD' => 'E02003337',
        '3QE' => 'E02003337',
        '3QF' => 'E02003337',
        '3QG' => 'E02003337',
        '3QH' => 'E02003327',
        '3QJ' => 'E02003339',
        '3QL' => 'E02003339',
        '3QN' => 'E02005149',
        '3QP' => 'E02003337',
        '3QQ' => 'E02003327',
        '3QR' => 'E02003339',
        '3QS' => 'E02003337',
        '3QT' => 'E02003337',
        '3QU' => 'E02003339',
        '3QW' => 'E02003339',
        '3QX' => 'E02003339',
        '3QY' => 'E02003339',
        '3QZ' => 'E02005149',
        '3RA' => 'E02003337',
        '3RB' => 'E02005149',
        '3RD' => 'E02005149',
        '3RE' => 'E02005149',
        '3RF' => 'E02003327',
        '3RG' => 'E02005149',
        '3RH' => 'E02005149',
        '3RJ' => 'E02005149',
        '3RL' => 'E02005149',
        '3RN' => 'E02005149',
        '3RP' => 'E02005149',
        '3RQ' => 'E02005149',
        '3RR' => 'E02005149',
        '3RS' => 'E02005149',
        '3RT' => 'E02005149',
        '3RU' => 'E02003337',
        '3RW' => 'E02005149',
        '3RX' => 'E02003337',
        '3RY' => 'E02005149',
        '3RZ' => 'E02005149',
        '3SA' => 'E02005149',
        '3SB' => 'E02005149',
        '3SD' => 'E02005149',
        '3SE' => 'E02005149',
        '3SF' => 'E02005149',
        '3SG' => 'E02005149',
        '3SH' => 'E02005149',
        '3SJ' => 'E02005149',
        '3SL' => 'E02005149',
        '3SN' => 'E02005149',
        '3SP' => 'E02005149',
        '3SQ' => 'E02005149',
        '3SR' => 'E02005149',
        '3SS' => 'E02005149',
        '3ST' => 'E02005149',
        '3SU' => 'E02005149',
        '3SW' => 'E02005149',
        '3SX' => 'E02005149',
        '3SY' => 'E02005149',
        '3SZ' => 'E02005149',
        '3TA' => 'E02005149',
        '3TB' => 'E02005149',
        '3TD' => 'E02005149',
        '3TE' => 'E02003327',
        '3TF' => 'E02003337',
        '3TG' => 'E02003337',
        '3TH' => 'E02005149',
        '3TJ' => 'E02003337',
        '3TL' => 'E02003337',
        '3TN' => 'E02003337',
        '3TP' => 'E02003337',
        '3TQ' => 'E02003337',
        '3TR' => 'E02005149',
        '3TS' => 'E02005149',
        '3TT' => 'E02005149',
        '3TU' => 'E02005149',
        '3TW' => 'E02003327',
        '3TX' => 'E02005149',
        '3TY' => 'E02005149',
        '3TZ' => 'E02005149',
        '3UA' => 'E02005149',
        '3UB' => 'E02005149',
        '3UD' => 'E02005149',
        '3UE' => 'E02005149',
        '3UF' => 'E02005149',
        '3UG' => 'E02005149',
        '3UH' => 'E02003327',
        '3UJ' => 'E02005149',
        '3UL' => 'E02005149',
        '3UN' => 'E02005149',
        '3UP' => 'E02005149',
        '3UQ' => 'E02005149',
        '3UR' => 'E02005149',
        '3US' => 'E02003337',
        '3UT' => 'E02005149',
        '3UU' => 'E02005149',
        '3UW' => 'E02005149',
        '3UX' => 'E02005149',
        '3UY' => 'E02005149',
        '3UZ' => 'E02005149',
        '3WA' => 'E02003327',
        '3WB' => 'E02003327',
        '3WE' => 'E02005149',
        '3WF' => 'E02005149',
        '3WG' => 'E02005149',
        '3WH' => 'E02005149',
        '3WJ' => 'E02005149',
        '3WL' => 'E02005149',
        '3WN' => 'E02003327',
        '3WP' => 'E02005149',
        '3WQ' => 'E02005149',
        '3WR' => 'E02005149',
        '3WS' => 'E02005149',
        '3WT' => 'E02003327',
        '3WU' => 'E02005149',
        '3WW' => 'E02003327',
        '3WX' => 'E02003327',
        '3WY' => 'E02003327',
        '3WZ' => 'E02005149',
        '3XA' => 'E02005149',
        '3XB' => 'E02005149',
        '3XD' => 'E02005149',
        '3XE' => 'E02005149',
        '3XF' => 'E02005149',
        '3XG' => 'E02005149',
        '3XH' => 'E02005149',
        '3XJ' => 'E02005149',
        '3XL' => 'E02005149',
        '3XN' => 'E02005149',
        '3XP' => 'E02005149',
        '3XQ' => 'E02005149',
        '3XR' => 'E02005149',
        '3XS' => 'E02005149',
        '3XT' => 'E02005149',
        '3XU' => 'E02005149',
        '3XW' => 'E02005149',
        '3XX' => 'E02005149',
        '3XY' => 'E02005149',
        '3XZ' => 'E02005149',
        '3YA' => 'E02005149',
        '3YB' => 'E02003337',
        '3YD' => 'E02005149',
        '3YE' => 'E02005149',
        '3YF' => 'E02005149',
        '3YG' => 'E02005149',
        '3YH' => 'E02005149',
        '3YJ' => 'E02005149',
        '3YL' => 'E02005149',
        '3YN' => 'E02005149',
        '3YQ' => 'E02003327',
        '3YT' => 'E02003327',
        '3ZY' => 'E02003327',
        '9AA' => 'E02003327',
        '9AB' => 'E02003327',
        '9AD' => 'E02003327',
        '9AE' => 'E02003327',
        '9AF' => 'E02003327',
        '9AG' => 'E02003327',
        '9AH' => 'E02003327',
        '9AJ' => 'E02003327',
        '9AL' => 'E02003327',
        '9AN' => 'E02003327',
        '9AP' => 'E02003324',
        '9AQ' => 'E02003327',
        '9AR' => 'E02003327',
        '9AS' => 'E02003327',
        '9AT' => 'E02003327',
        '9AU' => 'E02003327',
        '9AW' => 'E02003327',
        '9AX' => 'E02003327',
        '9AY' => 'E02003327',
        '9AZ' => 'E02003327',
        '9BA' => 'E02003327',
        '9BB' => 'E02003327',
        '9BD' => 'E02003327',
        '9BE' => 'E02003327',
        '9BF' => 'E02003327',
        '9BG' => 'E02003327',
        '9BH' => 'E02003327',
        '9BJ' => 'E02003327',
        '9BL' => 'E02003327',
        '9BN' => 'E02003327',
        '9BP' => 'E02003327',
        '9BQ' => 'E02003327',
        '9BR' => 'E02003327',
        '9BS' => 'E02003327',
        '9BT' => 'E02003327',
        '9BW' => 'E02003327',
        '9BX' => 'E02003327',
        '9BY' => 'E02003327',
        '9BZ' => 'E02003327',
        '9DA' => 'E02003327',
        '9DB' => 'E02003327',
        '9DD' => 'E02003327',
        '9DE' => 'E02003327',
        '9DF' => 'E02003327',
        '9DG' => 'E02003327',
        '9DH' => 'E02003327',
        '9DJ' => 'E02003327',
        '9DL' => 'E02003327',
        '9DN' => 'E02003327',
        '9DP' => 'E02003327',
        '9DQ' => 'E02003327',
        '9DR' => 'E02003327',
        '9DS' => 'E02003327',
        '9DT' => 'E02003327',
        '9DU' => 'E02003327',
        '9DW' => 'E02003327',
        '9DX' => 'E02003327',
        '9DY' => 'E02003327',
        '9DZ' => 'E02003327',
        '9EA' => 'E02003327',
        '9EB' => 'E02003327',
        '9ED' => 'E02003327',
        '9EE' => 'E02003327',
        '9EF' => 'E02003327',
        '9EG' => 'E02003327',
        '9EH' => 'E02003327',
        '9EJ' => 'E02003327',
        '9EL' => 'E02003327',
        '9EN' => 'E02003327',
        '9EP' => 'E02003327',
        '9EQ' => 'E02003327',
        '9ER' => 'E02003327',
        '9ES' => 'E02003327',
        '9ET' => 'E02003327',
        '9EU' => 'E02003327',
        '9EW' => 'E02003327',
        '9EX' => 'E02003327',
        '9EY' => 'E02003327',
        '9EZ' => 'E02003327',
        '9FA' => 'E02003327',
        '9FB' => 'E02003327',
        '9FD' => 'E02003327',
        '9FE' => 'E02003327',
        '9FF' => 'E02003327',
        '9FG' => 'E02003327',
        '9FH' => 'E02003327',
        '9FJ' => 'E02003327',
        '9FL' => 'E02003327',
        '9FN' => 'E02003327',
        '9FP' => 'E02003327',
        '9FQ' => 'E02003327',
        '9FR' => 'E02003327',
        '9FS' => 'E02003327',
        '9FT' => 'E02003327',
        '9FU' => 'E02003327',
        '9FX' => 'E02003327',
        '9FY' => 'E02003327',
        '9FZ' => 'E02003327',
        '9GA' => 'E02003327',
        '9GB' => 'E02003327',
        '9GD' => 'E02003327',
        '9GE' => 'E02003327',
        '9GF' => 'E02003327',
        '9GG' => 'E02003327',
        '9GH' => 'E02003327',
        '9GJ' => 'E02003327',
        '9GL' => 'E02003327',
        '9GN' => 'E02003327',
        '9GP' => 'E02003327',
        '9GQ' => 'E02003327',
        '9GR' => 'E02003327',
        '9GS' => 'E02003327',
        '9GT' => 'E02003327',
        '9GU' => 'E02003327',
        '9GW' => 'E02003327',
        '9GX' => 'E02003327',
        '9GY' => 'E02003327',
        '9GZ' => 'E02003327',
        '9HA' => 'E02003327',
        '9HB' => 'E02003327',
        '9HD' => 'E02003327',
        '9HE' => 'E02003327',
        '9HF' => 'E02003327',
        '9HG' => 'E02003327',
        '9HH' => 'E02003327',
        '9HJ' => 'E02003327',
        '9HL' => 'E02003327',
        '9HN' => 'E02003327',
        '9HP' => 'E02003327',
        '9HQ' => 'E02003327',
        '9HR' => 'E02003327',
        '9HS' => 'E02003327',
        '9HT' => 'E02003327',
        '9HU' => 'E02003327',
        '9HW' => 'E02003327',
        '9HX' => 'E02003327',
        '9HY' => 'E02003327',
        '9HZ' => 'E02003327',
        '9JA' => 'E02003327',
        '9JB' => 'E02003327',
        '9JD' => 'E02003327',
        '9JE' => 'E02003327',
        '9JF' => 'E02003327',
        '9JG' => 'E02003327',
        '9JH' => 'E02003327',
        '9JJ' => 'E02003327',
        '9JL' => 'E02003327',
        '9JN' => 'E02003327',
        '9JP' => 'E02003327',
        '9JQ' => 'E02003327',
        '9JR' => 'E02003327',
        '9JS' => 'E02003327',
        '9JT' => 'E02003327',
        '9JU' => 'E02003327',
        '9JW' => 'E02003327',
        '9JX' => 'E02003327',
        '9JY' => 'E02003327',
        '9JZ' => 'E02003327',
        '9LA' => 'E02003327',
        '9LB' => 'E02003327',
        '9LD' => 'E02003327',
        '9LE' => 'E02003327',
        '9LF' => 'E02003327',
        '9LG' => 'E02003327',
        '9LH' => 'E02003327',
        '9LJ' => 'E02003327',
        '9LL' => 'E02003327',
        '9LN' => 'E02003327',
        '9LP' => 'E02003327',
        '9LQ' => 'E02003327',
        '9LR' => 'E02003327',
        '9LS' => 'E02003327',
        '9LT' => 'E02003327',
        '9LU' => 'E02003327',
        '9LW' => 'E02003327',
        '9LX' => 'E02003327',
        '9LY' => 'E02003327',
        '9LZ' => 'E02003327',
        '9NA' => 'E02003327',
        '9NB' => 'E02003327',
        '9ND' => 'E02003327',
        '9NE' => 'E02003327',
        '9NF' => 'E02003327',
        '9NG' => 'E02003327',
        '9NH' => 'E02003327',
        '9NJ' => 'E02003327',
        '9NL' => 'E02003327',
        '9NN' => 'E02003327',
        '9NP' => 'E02003327',
        '9NQ' => 'E02003327',
        '9NR' => 'E02003327',
        '9NT' => 'E02003327',
        '9NU' => 'E02003327',
        '9NW' => 'E02003327',
        '9NX' => 'E02003327',
        '9NY' => 'E02003327',
        '9NZ' => 'E02003327',
        '9PA' => 'E02003327',
        '9PB' => 'E02003327',
        '9PD' => 'E02003327',
        '9PE' => 'E02003327',
        '9PF' => 'E02003327',
        '9PG' => 'E02003327',
        '9PH' => 'E02003327',
        '9PJ' => 'E02003327',
        '9PL' => 'E02003327',
        '9PN' => 'E02003327',
        '9PP' => 'E02003327',
        '9PQ' => 'E02003327',
        '9PR' => 'E02003327',
        '9PS' => 'E02003327',
        '9PT' => 'E02003327',
        '9SA' => 'E02003324',
        '9SB' => 'E02003324',
        '9SD' => 'E02003324',
        '9SE' => 'E02003324',
        '9SF' => 'E02003324',
        '9SG' => 'E02003324',
        '9SH' => 'E02003324',
        '9SJ' => 'E02003324',
        '9SL' => 'E02003324',
        '9SN' => 'E02003324',
        '9SP' => 'E02003324',
        '9SQ' => 'E02003324',
        '9SR' => 'E02003324',
        '9SS' => 'E02003324',
        '9ST' => 'E02003324',
        '9SU' => 'E02003324',
        '9SW' => 'E02003324',
        '9SX' => 'E02003324',
        '9SY' => 'E02003324',
        '9SZ' => 'E02003324',
        '9TA' => 'E02003324',
        '9TB' => 'E02003324',
        '9TD' => 'E02003324',
        '9TE' => 'E02003324',
        '9TF' => 'E02003324',
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
