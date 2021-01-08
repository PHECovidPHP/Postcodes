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
final class CB10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004592',
        '1AB' => 'E02004592',
        '1AD' => 'E02004592',
        '1AE' => 'E02004592',
        '1AF' => 'E02004592',
        '1AG' => 'E02004592',
        '1AH' => 'E02004592',
        '1AJ' => 'E02004591',
        '1AL' => 'E02004592',
        '1AN' => 'E02004592',
        '1AP' => 'E02004592',
        '1AQ' => 'E02004592',
        '1AR' => 'E02004592',
        '1AS' => 'E02004592',
        '1AT' => 'E02004592',
        '1AU' => 'E02004592',
        '1AW' => 'E02004592',
        '1AX' => 'E02004592',
        '1AY' => 'E02004592',
        '1AZ' => 'E02004592',
        '1BA' => 'E02004591',
        '1BB' => 'E02004592',
        '1BD' => 'E02004592',
        '1BE' => 'E02004592',
        '1BF' => 'E02004592',
        '1BG' => 'E02004592',
        '1BH' => 'E02004592',
        '1BJ' => 'E02004592',
        '1BL' => 'E02004592',
        '1BN' => 'E02004592',
        '1BP' => 'E02004592',
        '1BQ' => 'E02004592',
        '1BS' => 'E02004592',
        '1BT' => 'E02004592',
        '1BU' => 'E02004592',
        '1BW' => 'E02004592',
        '1BX' => 'E02004591',
        '1BY' => 'E02004592',
        '1BZ' => 'E02004592',
        '1DA' => 'E02004592',
        '1DB' => 'E02004592',
        '1DD' => 'E02004592',
        '1DE' => 'E02004592',
        '1DF' => 'E02004592',
        '1DG' => 'E02004592',
        '1DH' => 'E02004592',
        '1DJ' => 'E02004592',
        '1DL' => 'E02004592',
        '1DN' => 'E02004591',
        '1DP' => 'E02004591',
        '1DQ' => 'E02004592',
        '1DR' => 'E02003791',
        '1DS' => 'E02004592',
        '1DT' => 'E02004592',
        '1DU' => 'E02004592',
        '1DW' => 'E02004591',
        '1DX' => 'E02004592',
        '1DY' => 'E02004592',
        '1DZ' => 'E02004592',
        '1EA' => 'E02004592',
        '1EB' => 'E02004592',
        '1ED' => 'E02004592',
        '1EE' => 'E02004592',
        '1EF' => 'E02004592',
        '1EG' => 'E02004592',
        '1EH' => 'E02004592',
        '1EJ' => 'E02004592',
        '1EL' => 'E02004592',
        '1EN' => 'E02004592',
        '1EP' => 'E02004592',
        '1EQ' => 'E02004592',
        '1ER' => 'E02004592',
        '1ES' => 'E02004592',
        '1ET' => 'E02004592',
        '1EU' => 'E02004592',
        '1EW' => 'E02004592',
        '1EX' => 'E02004592',
        '1EY' => 'E02004592',
        '1EZ' => 'E02004592',
        '1FA' => 'E02004592',
        '1FB' => 'E02004592',
        '1FD' => 'E02004592',
        '1FE' => 'E02004591',
        '1FF' => 'E02004591',
        '1FG' => 'E02004591',
        '1FH' => 'E02004592',
        '1FJ' => 'E02004592',
        '1FP' => 'E02004592',
        '1GG' => 'E02004592',
        '1GH' => 'E02004591',
        '1HA' => 'E02004592',
        '1HB' => 'E02004592',
        '1HD' => 'E02004592',
        '1HE' => 'E02004592',
        '1HF' => 'E02004592',
        '1HG' => 'E02004592',
        '1HH' => 'E02004592',
        '1HJ' => 'E02004592',
        '1HL' => 'E02004592',
        '1HN' => 'E02004592',
        '1HP' => 'E02004592',
        '1HQ' => 'E02004592',
        '1HR' => 'E02004592',
        '1HS' => 'E02004592',
        '1HT' => 'E02004592',
        '1HU' => 'E02004592',
        '1HW' => 'E02004592',
        '1HX' => 'E02004592',
        '1HY' => 'E02004592',
        '1HZ' => 'E02004592',
        '1JA' => 'E02004592',
        '1JB' => 'E02004592',
        '1JD' => 'E02004592',
        '1JE' => 'E02004592',
        '1JF' => 'E02004592',
        '1JG' => 'E02004592',
        '1JH' => 'E02004592',
        '1JJ' => 'E02004592',
        '1JL' => 'E02004592',
        '1JN' => 'E02004592',
        '1JP' => 'E02004592',
        '1JQ' => 'E02004592',
        '1JR' => 'E02004592',
        '1JS' => 'E02004592',
        '1JT' => 'E02004592',
        '1JU' => 'E02004592',
        '1JW' => 'E02004592',
        '1JX' => 'E02004592',
        '1JY' => 'E02004592',
        '1JZ' => 'E02004592',
        '1LB' => 'E02004592',
        '1LD' => 'E02004592',
        '1LG' => 'E02004592',
        '1LH' => 'E02004592',
        '1LL' => 'E02004592',
        '1LN' => 'E02004592',
        '1LP' => 'E02004592',
        '1LQ' => 'E02004592',
        '1LR' => 'E02004592',
        '1LS' => 'E02004592',
        '1LT' => 'E02004592',
        '1LU' => 'E02004592',
        '1LW' => 'E02004592',
        '1LX' => 'E02004592',
        '1LY' => 'E02004592',
        '1LZ' => 'E02004592',
        '1NA' => 'E02004592',
        '1NB' => 'E02004592',
        '1ND' => 'E02004592',
        '1NE' => 'E02004591',
        '1NG' => 'E02004592',
        '1NH' => 'E02004592',
        '1NJ' => 'E02004591',
        '1NN' => 'E02004591',
        '1NP' => 'E02004591',
        '1NQ' => 'E02004592',
        '1NR' => 'E02004591',
        '1NS' => 'E02004591',
        '1NT' => 'E02004591',
        '1NU' => 'E02004591',
        '1NW' => 'E02004591',
        '1NX' => 'E02004591',
        '1NY' => 'E02004591',
        '1NZ' => 'E02004591',
        '1PA' => 'E02004591',
        '1PB' => 'E02004591',
        '1PD' => 'E02004591',
        '1PE' => 'E02004591',
        '1PF' => 'E02004591',
        '1PG' => 'E02004591',
        '1PH' => 'E02004591',
        '1PJ' => 'E02004591',
        '1PL' => 'E02004591',
        '1PN' => 'E02004591',
        '1PP' => 'E02004591',
        '1PQ' => 'E02004591',
        '1PR' => 'E02004591',
        '1PS' => 'E02004591',
        '1PT' => 'E02004591',
        '1PU' => 'E02004591',
        '1PW' => 'E02004591',
        '1PX' => 'E02004591',
        '1PY' => 'E02004591',
        '1PZ' => 'E02004591',
        '1QA' => 'E02004591',
        '1QB' => 'E02004591',
        '1QD' => 'E02004591',
        '1QE' => 'E02004591',
        '1QF' => 'E02004591',
        '1QG' => 'E02004591',
        '1QH' => 'E02004591',
        '1QJ' => 'E02004592',
        '1QL' => 'E02004591',
        '1QN' => 'E02004591',
        '1QP' => 'E02004591',
        '1QQ' => 'E02004591',
        '1QR' => 'E02004591',
        '1QS' => 'E02004591',
        '1QT' => 'E02004592',
        '1QW' => 'E02004591',
        '1QX' => 'E02003791',
        '1QY' => 'E02003791',
        '1QZ' => 'E02003791',
        '1RA' => 'E02003791',
        '1RB' => 'E02003791',
        '1RD' => 'E02003791',
        '1RE' => 'E02003791',
        '1RF' => 'E02003791',
        '1RG' => 'E02003791',
        '1RH' => 'E02003791',
        '1RJ' => 'E02004591',
        '1RL' => 'E02004591',
        '1RN' => 'E02004591',
        '1RP' => 'E02004591',
        '1RQ' => 'E02003791',
        '1RR' => 'E02004591',
        '1RS' => 'E02003791',
        '1RT' => 'E02003733',
        '1RU' => 'E02003740',
        '1RW' => 'E02004591',
        '1RX' => 'E02004592',
        '1SA' => 'E02003791',
        '1SB' => 'E02003791',
        '1SD' => 'E02003791',
        '1SE' => 'E02003791',
        '1SG' => 'E02003791',
        '1SH' => 'E02003791',
        '1SJ' => 'E02003791',
        '1SL' => 'E02003791',
        '1SP' => 'E02003791',
        '1SR' => 'E02003791',
        '1SS' => 'E02003791',
        '1ST' => 'E02003791',
        '1SU' => 'E02003791',
        '1SW' => 'E02003791',
        '1SX' => 'E02003791',
        '1SY' => 'E02004592',
        '1SZ' => 'E02003791',
        '1TA' => 'E02003791',
        '1TB' => 'E02003791',
        '1TD' => 'E02003791',
        '1TE' => 'E02003791',
        '1TF' => 'E02003791',
        '1TG' => 'E02003791',
        '1TH' => 'E02004591',
        '1TL' => 'E02003791',
        '1TQ' => 'E02004591',
        '1TS' => 'E02004591',
        '1TT' => 'E02004591',
        '1TU' => 'E02004591',
        '1TX' => 'E02004591',
        '1TY' => 'E02004591',
        '1TZ' => 'E02004591',
        '1UA' => 'E02004591',
        '1UB' => 'E02004591',
        '1UD' => 'E02004591',
        '1UE' => 'E02004591',
        '1UF' => 'E02004593',
        '1UG' => 'E02004592',
        '1UH' => 'E02004592',
        '1UJ' => 'E02004591',
        '1UL' => 'E02004592',
        '1UN' => 'E02004592',
        '1UQ' => 'E02004593',
        '1UW' => 'E02004591',
        '1UX' => 'E02004591',
        '1UY' => 'E02004591',
        '1UZ' => 'E02004591',
        '1WA' => 'E02004591',
        '1WB' => 'E02004591',
        '1WD' => 'E02004592',
        '1WE' => 'E02004591',
        '1WG' => 'E02004592',
        '1WQ' => 'E02004592',
        '1WU' => 'E02004592',
        '1WW' => 'E02004592',
        '1WX' => 'E02004591',
        '1WY' => 'E02004592',
        '1WZ' => 'E02004592',
        '1XA' => 'E02004591',
        '1XB' => 'E02004591',
        '1XD' => 'E02004592',
        '1XE' => 'E02004591',
        '1XF' => 'E02004591',
        '1XG' => 'E02004591',
        '1XH' => 'E02004591',
        '1XJ' => 'E02004591',
        '1XL' => 'E02004591',
        '1XN' => 'E02004591',
        '1XP' => 'E02004591',
        '1XQ' => 'E02004591',
        '1XR' => 'E02004592',
        '1XT' => 'E02004591',
        '1XX' => 'E02004592',
        '1XY' => 'E02004591',
        '1XZ' => 'E02004592',
        '1YD' => 'E02004591',
        '1YH' => 'E02004592',
        '1YJ' => 'E02004591',
        '1YL' => 'E02004591',
        '1YN' => 'E02004591',
        '1YP' => 'E02004591',
        '1YQ' => 'E02004592',
        '1YW' => 'E02004591',
        '1YX' => 'E02004591',
        '1YY' => 'E02004591',
        '1ZJ' => 'E02004591',
        '1ZL' => 'E02004592',
        '1ZN' => 'E02004592',
        '1ZP' => 'E02004592',
        '1ZQ' => 'E02004592',
        '1ZR' => 'E02004591',
        '1ZS' => 'E02004592',
        '2AA' => 'E02004592',
        '2AB' => 'E02004592',
        '2AD' => 'E02004592',
        '2AE' => 'E02004592',
        '2AF' => 'E02004592',
        '2AG' => 'E02004592',
        '2AH' => 'E02004592',
        '2AJ' => 'E02004592',
        '2AL' => 'E02004591',
        '2AN' => 'E02004591',
        '2AP' => 'E02004591',
        '2AQ' => 'E02004592',
        '2AR' => 'E02004591',
        '2AS' => 'E02004592',
        '2AT' => 'E02004592',
        '2AU' => 'E02004592',
        '2AW' => 'E02004591',
        '2AX' => 'E02004592',
        '2AY' => 'E02004591',
        '2AZ' => 'E02004592',
        '2BA' => 'E02004592',
        '2BB' => 'E02004592',
        '2BD' => 'E02004592',
        '2BE' => 'E02004592',
        '2BF' => 'E02004592',
        '2BG' => 'E02004592',
        '2BH' => 'E02004592',
        '2BJ' => 'E02004592',
        '2BL' => 'E02004592',
        '2BN' => 'E02004591',
        '2BP' => 'E02004592',
        '2BQ' => 'E02004592',
        '2BS' => 'E02004592',
        '2BT' => 'E02004592',
        '2BU' => 'E02004592',
        '2BW' => 'E02004592',
        '2BX' => 'E02004592',
        '2BY' => 'E02004592',
        '2BZ' => 'E02004592',
        '2DA' => 'E02004592',
        '2DB' => 'E02004592',
        '2DD' => 'E02004592',
        '2DE' => 'E02004592',
        '2DF' => 'E02004592',
        '2DG' => 'E02004592',
        '2DH' => 'E02004591',
        '2DJ' => 'E02004592',
        '2DL' => 'E02004592',
        '2DN' => 'E02004592',
        '2DP' => 'E02004591',
        '2DQ' => 'E02004592',
        '2DR' => 'E02004591',
        '2DS' => 'E02004592',
        '2DT' => 'E02004592',
        '2DU' => 'E02004592',
        '2DW' => 'E02004592',
        '2DX' => 'E02004591',
        '2DY' => 'E02004592',
        '2DZ' => 'E02004592',
        '2EA' => 'E02004592',
        '2EB' => 'E02004591',
        '2ED' => 'E02004591',
        '2EE' => 'E02004591',
        '2EF' => 'E02004591',
        '2EG' => 'E02004591',
        '2EH' => 'E02004591',
        '2EJ' => 'E02004592',
        '2EL' => 'E02004592',
        '2EN' => 'E02004591',
        '2EP' => 'E02004592',
        '2EQ' => 'E02004592',
        '2ER' => 'E02004591',
        '2ES' => 'E02004592',
        '2ET' => 'E02004591',
        '2EU' => 'E02004591',
        '2EW' => 'E02004592',
        '2EX' => 'E02004591',
        '2EY' => 'E02004591',
        '2EZ' => 'E02004591',
        '2FB' => 'E02004591',
        '2FF' => 'E02004591',
        '2FG' => 'E02004592',
        '2FH' => 'E02004591',
        '2FJ' => 'E02004592',
        '2FL' => 'E02004591',
        '2FN' => 'E02004594',
        '2FP' => 'E02004592',
        '2FQ' => 'E02004592',
        '2FR' => 'E02004591',
        '2FS' => 'E02004591',
        '2FT' => 'E02004592',
        '2FU' => 'E02004594',
        '2FW' => 'E02004594',
        '2FX' => 'E02004592',
        '2FY' => 'E02004592',
        '2GA' => 'E02004592',
        '2GB' => 'E02004592',
        '2GD' => 'E02004591',
        '2GE' => 'E02004591',
        '2GF' => 'E02004591',
        '2GG' => 'E02004591',
        '2GH' => 'E02004592',
        '2GJ' => 'E02004591',
        '2GL' => 'E02004592',
        '2GN' => 'E02004592',
        '2GP' => 'E02004591',
        '2GQ' => 'E02004592',
        '2GR' => 'E02004592',
        '2GT' => 'E02004592',
        '2GU' => 'E02004591',
        '2GW' => 'E02004591',
        '2GX' => 'E02004591',
        '2GY' => 'E02004591',
        '2GZ' => 'E02004591',
        '2HA' => 'E02004591',
        '2HB' => 'E02004591',
        '2HD' => 'E02004591',
        '2HF' => 'E02004591',
        '2HG' => 'E02004591',
        '2HH' => 'E02004591',
        '2HJ' => 'E02004591',
        '2HL' => 'E02004591',
        '2HN' => 'E02004591',
        '2HP' => 'E02004591',
        '2HQ' => 'E02004591',
        '2HR' => 'E02004591',
        '2HS' => 'E02004591',
        '2HT' => 'E02004591',
        '2HU' => 'E02004591',
        '2HW' => 'E02004591',
        '2HX' => 'E02004591',
        '2HY' => 'E02004591',
        '2HZ' => 'E02004591',
        '2JA' => 'E02004591',
        '2JB' => 'E02004591',
        '2JD' => 'E02004591',
        '2JE' => 'E02004591',
        '2JF' => 'E02004591',
        '2JG' => 'E02003790',
        '2JH' => 'E02004591',
        '2JJ' => 'E02004591',
        '2JL' => 'E02004591',
        '2JN' => 'E02004592',
        '2JP' => 'E02004592',
        '2JQ' => 'E02003790',
        '2JR' => 'E02004591',
        '2JS' => 'E02004591',
        '2JT' => 'E02004592',
        '2JU' => 'E02004591',
        '2JW' => 'E02004592',
        '2JX' => 'E02004591',
        '2JZ' => 'E02004592',
        '2LA' => 'E02004592',
        '2LB' => 'E02004592',
        '2LD' => 'E02004592',
        '2LE' => 'E02004591',
        '2LF' => 'E02004591',
        '2LG' => 'E02004591',
        '2LH' => 'E02004591',
        '2LJ' => 'E02004594',
        '2LL' => 'E02004591',
        '2LN' => 'E02004591',
        '2LP' => 'E02004591',
        '2LQ' => 'E02004591',
        '2LR' => 'E02004591',
        '2LS' => 'E02004591',
        '2LT' => 'E02004591',
        '2LU' => 'E02004591',
        '2LW' => 'E02004591',
        '2LX' => 'E02004591',
        '2LY' => 'E02004591',
        '2LZ' => 'E02004591',
        '2NA' => 'E02004591',
        '2NB' => 'E02004591',
        '2ND' => 'E02004591',
        '2NE' => 'E02004591',
        '2NF' => 'E02004592',
        '2NG' => 'E02004592',
        '2NH' => 'E02004591',
        '2NJ' => 'E02004592',
        '2NL' => 'E02004592',
        '2NN' => 'E02004592',
        '2NP' => 'E02004592',
        '2NQ' => 'E02004591',
        '2NR' => 'E02004592',
        '2NS' => 'E02004592',
        '2NT' => 'E02004592',
        '2NU' => 'E02004594',
        '2NW' => 'E02004592',
        '2NX' => 'E02004594',
        '2NY' => 'E02004594',
        '2NZ' => 'E02004594',
        '2PA' => 'E02004594',
        '2PB' => 'E02004594',
        '2PD' => 'E02004594',
        '2PE' => 'E02004594',
        '2PF' => 'E02004594',
        '2PG' => 'E02004594',
        '2PH' => 'E02004594',
        '2PJ' => 'E02004594',
        '2PL' => 'E02004594',
        '2PN' => 'E02004594',
        '2PP' => 'E02004594',
        '2PQ' => 'E02004594',
        '2PR' => 'E02004594',
        '2PS' => 'E02004592',
        '2PT' => 'E02004592',
        '2PU' => 'E02004594',
        '2PW' => 'E02004594',
        '2PX' => 'E02004594',
        '2PY' => 'E02004594',
        '2PZ' => 'E02004594',
        '2QA' => 'E02004591',
        '2QB' => 'E02004594',
        '2QD' => 'E02004594',
        '2QE' => 'E02004594',
        '2QF' => 'E02004594',
        '2QG' => 'E02004594',
        '2QH' => 'E02004594',
        '2QJ' => 'E02004594',
        '2QL' => 'E02004594',
        '2QN' => 'E02004594',
        '2QP' => 'E02004594',
        '2QQ' => 'E02004594',
        '2QR' => 'E02004594',
        '2QS' => 'E02004594',
        '2QT' => 'E02004594',
        '2QU' => 'E02004594',
        '2QW' => 'E02004594',
        '2QZ' => 'E02004592',
        '2RB' => 'E02004592',
        '2RE' => 'E02004592',
        '2RF' => 'E02004594',
        '2RG' => 'E02004594',
        '2RH' => 'E02004594',
        '2RJ' => 'E02004594',
        '2RL' => 'E02004594',
        '2RN' => 'E02004594',
        '2RP' => 'E02004594',
        '2RQ' => 'E02004594',
        '2RR' => 'E02004594',
        '2RS' => 'E02004594',
        '2RT' => 'E02004594',
        '2RU' => 'E02004594',
        '2RW' => 'E02004594',
        '2RX' => 'E02004594',
        '2RY' => 'E02004594',
        '2RZ' => 'E02004594',
        '2SA' => 'E02004594',
        '2SB' => 'E02004594',
        '2SD' => 'E02004591',
        '2SE' => 'E02004594',
        '2SF' => 'E02004591',
        '2SG' => 'E02004592',
        '2SN' => 'E02004594',
        '2SP' => 'E02004594',
        '2SR' => 'E02004594',
        '2SS' => 'E02004594',
        '2ST' => 'E02004591',
        '2SU' => 'E02004594',
        '2SW' => 'E02004594',
        '2SX' => 'E02004594',
        '2TE' => 'E02004594',
        '2TF' => 'E02004594',
        '2TG' => 'E02004594',
        '2TH' => 'E02004594',
        '2TJ' => 'E02004594',
        '2TL' => 'E02004594',
        '2TN' => 'E02004592',
        '2TQ' => 'E02004594',
        '2TX' => 'E02004594',
        '2TY' => 'E02004594',
        '2TZ' => 'E02004594',
        '2UA' => 'E02004594',
        '2UB' => 'E02004594',
        '2UD' => 'E02004594',
        '2UE' => 'E02004594',
        '2UP' => 'E02004592',
        '2UQ' => 'E02004592',
        '2UR' => 'E02004592',
        '2UT' => 'E02004594',
        '2UU' => 'E02004591',
        '2UW' => 'E02004592',
        '2UX' => 'E02004594',
        '2UY' => 'E02004594',
        '2UZ' => 'E02004594',
        '2WA' => 'E02004591',
        '2WB' => 'E02004591',
        '2WD' => 'E02004594',
        '2WE' => 'E02004591',
        '2WF' => 'E02004592',
        '2WG' => 'E02004592',
        '2WH' => 'E02004592',
        '2WJ' => 'E02004592',
        '2WL' => 'E02004591',
        '2WN' => 'E02004591',
        '2WP' => 'E02004592',
        '2WQ' => 'E02004591',
        '2WR' => 'E02004592',
        '2WS' => 'E02004592',
        '2WT' => 'E02004592',
        '2WU' => 'E02004592',
        '2WW' => 'E02004592',
        '2WX' => 'E02004591',
        '2WY' => 'E02004592',
        '2WZ' => 'E02004592',
        '2XA' => 'E02004594',
        '2XB' => 'E02004594',
        '2XD' => 'E02004594',
        '2XE' => 'E02004594',
        '2XF' => 'E02004594',
        '2XG' => 'E02004594',
        '2XH' => 'E02004594',
        '2XJ' => 'E02004594',
        '2XL' => 'E02004594',
        '2XN' => 'E02004594',
        '2XP' => 'E02004594',
        '2XQ' => 'E02004594',
        '2XR' => 'E02004594',
        '2XS' => 'E02004594',
        '2XT' => 'E02004594',
        '2XU' => 'E02004594',
        '2XW' => 'E02004594',
        '2XX' => 'E02004594',
        '2XY' => 'E02004592',
        '2XZ' => 'E02004592',
        '2YA' => 'E02004594',
        '2YB' => 'E02004594',
        '2YD' => 'E02004594',
        '2YE' => 'E02004594',
        '2YF' => 'E02004594',
        '2YG' => 'E02004594',
        '2YH' => 'E02004594',
        '2YJ' => 'E02004594',
        '2YL' => 'E02004594',
        '2YN' => 'E02004594',
        '2YP' => 'E02004592',
        '2YQ' => 'E02004594',
        '2YR' => 'E02004591',
        '2YS' => 'E02004591',
        '2YT' => 'E02004591',
        '2YU' => 'E02004591',
        '2YW' => 'E02004591',
        '2YX' => 'E02004594',
        '2YY' => 'E02004592',
        '2YZ' => 'E02004592',
        '2ZB' => 'E02004592',
        '2ZD' => 'E02004592',
        '2ZE' => 'E02004592',
        '2ZF' => 'E02004592',
        '2ZG' => 'E02004592',
        '2ZH' => 'E02004592',
        '2ZJ' => 'E02004592',
        '2ZL' => 'E02004592',
        '2ZN' => 'E02004592',
        '2ZP' => 'E02004592',
        '2ZQ' => 'E02004592',
        '2ZR' => 'E02004592',
        '2ZS' => 'E02004592',
        '2ZU' => 'E02004591',
        '2ZX' => 'E02004592',
        '2ZZ' => 'E02004592',
        '4QZ' => 'E02004593',
        '9AA' => 'E02004592',
        '9AB' => 'E02004592',
        '9AD' => 'E02004592',
        '9AE' => 'E02004592',
        '9AF' => 'E02004592',
        '9AG' => 'E02004592',
        '9AH' => 'E02004592',
        '9AJ' => 'E02004592',
        '9AL' => 'E02004592',
        '9AN' => 'E02004592',
        '9AP' => 'E02004592',
        '9AQ' => 'E02004592',
        '9AR' => 'E02004592',
        '9AS' => 'E02004592',
        '9AT' => 'E02004592',
        '9AU' => 'E02004592',
        '9AW' => 'E02004592',
        '9AX' => 'E02004592',
        '9AY' => 'E02004592',
        '9AZ' => 'E02004592',
        '9BA' => 'E02004592',
        '9BB' => 'E02004592',
        '9BD' => 'E02004592',
        '9BE' => 'E02004592',
        '9BF' => 'E02004592',
        '9BG' => 'E02004592',
        '9BH' => 'E02004592',
        '9BJ' => 'E02004592',
        '9BL' => 'E02004592',
        '9BN' => 'E02004592',
        '9BP' => 'E02004592',
        '9BQ' => 'E02004592',
        '9BR' => 'E02004592',
        '9BS' => 'E02004592',
        '9BT' => 'E02004592',
        '9BU' => 'E02004592',
        '9BW' => 'E02004592',
        '9BX' => 'E02004591',
        '9BY' => 'E02004592',
        '9BZ' => 'E02004592',
        '9DA' => 'E02004592',
        '9DB' => 'E02004592',
        '9DD' => 'E02004592',
        '9DE' => 'E02004592',
        '9DF' => 'E02004592',
        '9DG' => 'E02004592',
        '9DH' => 'E02004592',
        '9DJ' => 'E02004592',
        '9DL' => 'E02004592',
        '9DN' => 'E02004592',
        '9DP' => 'E02004592',
        '9DQ' => 'E02004592',
        '9DR' => 'E02004592',
        '9DS' => 'E02004592',
        '9DT' => 'E02004592',
        '9DU' => 'E02004592',
        '9DW' => 'E02004592',
        '9DX' => 'E02004592',
        '9DY' => 'E02004592',
        '9DZ' => 'E02004592',
        '9EA' => 'E02004592',
        '9EB' => 'E02004592',
        '9ED' => 'E02004591',
        '9EE' => 'E02004592',
        '9EG' => 'E02004592',
        '9EH' => 'E02004592',
        '9EJ' => 'E02004592',
        '9EL' => 'E02004592',
        '9EN' => 'E02004592',
        '9EP' => 'E02004592',
        '9EQ' => 'E02004592',
        '9ES' => 'E02004592',
        '9ET' => 'E02004592',
        '9EU' => 'E02004592',
        '9EW' => 'E02004592',
        '9EX' => 'E02004592',
        '9EY' => 'E02004592',
        '9EZ' => 'E02004592',
        '9FA' => 'E02004592',
        '9FB' => 'E02004592',
        '9FD' => 'E02004592',
        '9FE' => 'E02004592',
        '9SA' => 'E02004591',
        '9SB' => 'E02004591',
        '9SD' => 'E02004591',
        '9SE' => 'E02004591',
        '9SF' => 'E02004591',
        '9SG' => 'E02004591',
        '9SH' => 'E02004591',
        '9SJ' => 'E02004591',
        '9SL' => 'E02004591',
        '9SN' => 'E02004591',
        '9SP' => 'E02004591',
        '9SQ' => 'E02004591',
        '9SR' => 'E02004591',
        '9SS' => 'E02004591',
        '9ST' => 'E02004591',
        '9SU' => 'E02004591',
        '9SW' => 'E02004591',
        '9SX' => 'E02004591',
        '9SY' => 'E02004591',
        '9SZ' => 'E02004591',
        '9TA' => 'E02004591',
        '9TB' => 'E02004591',
        '9TD' => 'E02004591',
        '9TE' => 'E02004591',
        '9TF' => 'E02004591',
        '9TG' => 'E02004591',
        '9TH' => 'E02004591',
        '9TJ' => 'E02004591',
        '9TL' => 'E02004591',
        '9TN' => 'E02004591',
        '9TP' => 'E02004591',
        '9TQ' => 'E02004591',
        '9TR' => 'E02004591',
        '9ZZ' => 'E02004592',
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