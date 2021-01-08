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
final class DN17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002760',
        '1AB' => 'E02002760',
        '1AD' => 'E02002760',
        '1AE' => 'E02002760',
        '1AF' => 'E02002760',
        '1AG' => 'E02002760',
        '1AH' => 'E02002760',
        '1AJ' => 'E02002760',
        '1AL' => 'E02002760',
        '1AN' => 'E02005816',
        '1AP' => 'E02002756',
        '1AQ' => 'E02002760',
        '1AR' => 'E02002760',
        '1AS' => 'E02002760',
        '1AT' => 'E02002760',
        '1AU' => 'E02002760',
        '1AW' => 'E02002760',
        '1AX' => 'E02002760',
        '1AY' => 'E02002760',
        '1AZ' => 'E02002760',
        '1BA' => 'E02002760',
        '1BB' => 'E02002760',
        '1BD' => 'E02002760',
        '1BE' => 'E02002760',
        '1BF' => 'E02002760',
        '1BG' => 'E02002760',
        '1BH' => 'E02002760',
        '1BJ' => 'E02002760',
        '1BL' => 'E02002760',
        '1BN' => 'E02002760',
        '1BP' => 'E02002760',
        '1BQ' => 'E02002760',
        '1BS' => 'E02002760',
        '1BU' => 'E02002760',
        '1BX' => 'E02002760',
        '1BY' => 'E02002760',
        '1BZ' => 'E02002760',
        '1DA' => 'E02002760',
        '1DB' => 'E02002760',
        '1DD' => 'E02002760',
        '1DE' => 'E02002760',
        '1DF' => 'E02002760',
        '1DG' => 'E02002760',
        '1DH' => 'E02002760',
        '1DJ' => 'E02002760',
        '1DL' => 'E02002760',
        '1DN' => 'E02002760',
        '1DP' => 'E02002760',
        '1DQ' => 'E02002760',
        '1DR' => 'E02002760',
        '1DS' => 'E02002760',
        '1DT' => 'E02002760',
        '1DU' => 'E02002760',
        '1DW' => 'E02002760',
        '1DX' => 'E02002760',
        '1DY' => 'E02002760',
        '1DZ' => 'E02002760',
        '1EA' => 'E02002760',
        '1EB' => 'E02002760',
        '1EG' => 'E02002760',
        '1EH' => 'E02002760',
        '1EJ' => 'E02002762',
        '1EL' => 'E02002760',
        '1EN' => 'E02002760',
        '1EP' => 'E02002760',
        '1EQ' => 'E02002760',
        '1ER' => 'E02002760',
        '1ES' => 'E02002760',
        '1ET' => 'E02002762',
        '1EU' => 'E02002762',
        '1EW' => 'E02002760',
        '1EX' => 'E02002760',
        '1EY' => 'E02002760',
        '1EZ' => 'E02002760',
        '1GA' => 'E02002760',
        '1GB' => 'E02002760',
        '1GD' => 'E02002760',
        '1GE' => 'E02002756',
        '1GF' => 'E02002760',
        '1GG' => 'E02002756',
        '1GH' => 'E02002760',
        '1GJ' => 'E02002760',
        '1GL' => 'E02002756',
        '1GN' => 'E02002760',
        '1GP' => 'E02002756',
        '1GQ' => 'E02002756',
        '1GR' => 'E02002756',
        '1HA' => 'E02002760',
        '1HB' => 'E02002760',
        '1HD' => 'E02002762',
        '1HE' => 'E02002762',
        '1HF' => 'E02002762',
        '1HG' => 'E02002762',
        '1HH' => 'E02002762',
        '1HJ' => 'E02002762',
        '1HQ' => 'E02002762',
        '1HS' => 'E02002762',
        '1HT' => 'E02002762',
        '1HU' => 'E02002762',
        '1HW' => 'E02002762',
        '1HX' => 'E02002762',
        '1HY' => 'E02002762',
        '1HZ' => 'E02002762',
        '1JB' => 'E02002762',
        '1JD' => 'E02002762',
        '1JE' => 'E02002762',
        '1JF' => 'E02002762',
        '1JG' => 'E02002762',
        '1JH' => 'E02002762',
        '1JJ' => 'E02002762',
        '1JL' => 'E02002762',
        '1JN' => 'E02002762',
        '1JP' => 'E02002762',
        '1JQ' => 'E02002762',
        '1JR' => 'E02002762',
        '1JT' => 'E02002762',
        '1JW' => 'E02002762',
        '1JX' => 'E02002760',
        '1LB' => 'E02002762',
        '1LE' => 'E02002762',
        '1LF' => 'E02002762',
        '1LG' => 'E02002762',
        '1LH' => 'E02002762',
        '1LJ' => 'E02002762',
        '1LL' => 'E02002762',
        '1LN' => 'E02002762',
        '1LP' => 'E02002762',
        '1LQ' => 'E02002762',
        '1LR' => 'E02002762',
        '1LS' => 'E02002764',
        '1LT' => 'E02002762',
        '1LU' => 'E02002762',
        '1LW' => 'E02002762',
        '1LX' => 'E02002762',
        '1LY' => 'E02002762',
        '1LZ' => 'E02002762',
        '1NA' => 'E02002762',
        '1NB' => 'E02002762',
        '1ND' => 'E02002762',
        '1NE' => 'E02002762',
        '1NN' => 'E02002760',
        '1NP' => 'E02002760',
        '1NR' => 'E02002764',
        '1NS' => 'E02002764',
        '1NT' => 'E02002764',
        '1NU' => 'E02002760',
        '1NW' => 'E02002760',
        '1NX' => 'E02002764',
        '1NY' => 'E02002760',
        '1PA' => 'E02002760',
        '1PB' => 'E02002760',
        '1PD' => 'E02002760',
        '1PE' => 'E02002760',
        '1PF' => 'E02002760',
        '1PG' => 'E02002764',
        '1PH' => 'E02002764',
        '1PJ' => 'E02002764',
        '1PL' => 'E02002764',
        '1PN' => 'E02002764',
        '1PP' => 'E02002764',
        '1PQ' => 'E02002764',
        '1PR' => 'E02002764',
        '1PS' => 'E02002764',
        '1PT' => 'E02002764',
        '1PU' => 'E02002764',
        '1PW' => 'E02002764',
        '1PX' => 'E02002764',
        '1PY' => 'E02002764',
        '1PZ' => 'E02002764',
        '1QA' => 'E02002760',
        '1QB' => 'E02002764',
        '1QD' => 'E02002764',
        '1QF' => 'E02002764',
        '1QG' => 'E02002764',
        '1QH' => 'E02002760',
        '1QL' => 'E02002764',
        '1QN' => 'E02002764',
        '1QP' => 'E02002764',
        '1QQ' => 'E02002764',
        '1QR' => 'E02002764',
        '1QS' => 'E02002764',
        '1QT' => 'E02002764',
        '1QU' => 'E02002764',
        '1QW' => 'E02002764',
        '1QX' => 'E02002764',
        '1QY' => 'E02002764',
        '1QZ' => 'E02002764',
        '1RA' => 'E02002753',
        '1RB' => 'E02002764',
        '1RD' => 'E02002764',
        '1RE' => 'E02002764',
        '1RF' => 'E02002764',
        '1RG' => 'E02002764',
        '1RH' => 'E02002764',
        '1RJ' => 'E02002764',
        '1RL' => 'E02002764',
        '1RP' => 'E02002764',
        '1RQ' => 'E02002764',
        '1RR' => 'E02002764',
        '1RS' => 'E02002764',
        '1RT' => 'E02002764',
        '1RU' => 'E02002764',
        '1RW' => 'E02002764',
        '1RX' => 'E02002764',
        '1RY' => 'E02002764',
        '1RZ' => 'E02002764',
        '1SA' => 'E02002764',
        '1SB' => 'E02002764',
        '1SD' => 'E02002764',
        '1SE' => 'E02002764',
        '1SF' => 'E02002764',
        '1SH' => 'E02002760',
        '1SJ' => 'E02002760',
        '1SL' => 'E02002760',
        '1SN' => 'E02002760',
        '1SP' => 'E02002760',
        '1SQ' => 'E02002753',
        '1SR' => 'E02002760',
        '1SS' => 'E02002760',
        '1ST' => 'E02002760',
        '1SU' => 'E02002753',
        '1SW' => 'E02002753',
        '1SX' => 'E02002764',
        '1SY' => 'E02002753',
        '1SZ' => 'E02002753',
        '1TA' => 'E02002753',
        '1TB' => 'E02002753',
        '1TD' => 'E02002753',
        '1TE' => 'E02002753',
        '1TF' => 'E02002760',
        '1TG' => 'E02002760',
        '1TH' => 'E02002760',
        '1TJ' => 'E02002760',
        '1TL' => 'E02002760',
        '1TN' => 'E02002760',
        '1TP' => 'E02002760',
        '1TQ' => 'E02002760',
        '1TR' => 'E02002760',
        '1TS' => 'E02002760',
        '1TT' => 'E02002760',
        '1TU' => 'E02002760',
        '1TW' => 'E02002760',
        '1TX' => 'E02002760',
        '1TY' => 'E02002760',
        '1TZ' => 'E02002760',
        '1UA' => 'E02002760',
        '1UB' => 'E02002760',
        '1UD' => 'E02002760',
        '1UE' => 'E02002760',
        '1UF' => 'E02002760',
        '1UG' => 'E02002760',
        '1UH' => 'E02002760',
        '1UJ' => 'E02002760',
        '1UL' => 'E02002760',
        '1UN' => 'E02002760',
        '1UP' => 'E02002760',
        '1UQ' => 'E02002760',
        '1UR' => 'E02002760',
        '1US' => 'E02002753',
        '1UT' => 'E02002760',
        '1UU' => 'E02002760',
        '1UW' => 'E02002760',
        '1UX' => 'E02002760',
        '1UY' => 'E02002760',
        '1UZ' => 'E02002760',
        '1WA' => 'E02002762',
        '1WD' => 'E02002762',
        '1WE' => 'E02002762',
        '1WF' => 'E02002753',
        '1WG' => 'E02002764',
        '1WX' => 'E02002762',
        '1WY' => 'E02002756',
        '1WZ' => 'E02002760',
        '1XA' => 'E02002760',
        '1XB' => 'E02002760',
        '1XD' => 'E02002760',
        '1XE' => 'E02002760',
        '1XF' => 'E02002760',
        '1XG' => 'E02002760',
        '1XH' => 'E02002760',
        '1XJ' => 'E02002760',
        '1XL' => 'E02002760',
        '1XN' => 'E02002760',
        '1XP' => 'E02002760',
        '1XQ' => 'E02002760',
        '1XR' => 'E02002760',
        '1XS' => 'E02002760',
        '1XT' => 'E02002760',
        '1XU' => 'E02002760',
        '1XW' => 'E02002760',
        '1XX' => 'E02002760',
        '1XY' => 'E02002760',
        '1XZ' => 'E02002760',
        '1YA' => 'E02002764',
        '1YB' => 'E02002764',
        '1YD' => 'E02002760',
        '1YE' => 'E02002760',
        '1YF' => 'E02002760',
        '1YG' => 'E02002760',
        '1YH' => 'E02002760',
        '1YJ' => 'E02002760',
        '1YL' => 'E02002760',
        '1YN' => 'E02002756',
        '1YP' => 'E02002756',
        '1YQ' => 'E02002756',
        '1YZ' => 'E02002756',
        '2AA' => 'E02002753',
        '2AB' => 'E02002753',
        '2AD' => 'E02002753',
        '2AE' => 'E02002764',
        '2AF' => 'E02002764',
        '2AG' => 'E02002764',
        '2AH' => 'E02002764',
        '2AJ' => 'E02002764',
        '2AL' => 'E02002753',
        '2AN' => 'E02002753',
        '2AP' => 'E02002753',
        '2AQ' => 'E02002764',
        '2AR' => 'E02002753',
        '2AS' => 'E02002753',
        '2AT' => 'E02002767',
        '2AU' => 'E02002767',
        '2AW' => 'E02002753',
        '2AX' => 'E02002767',
        '2AY' => 'E02002767',
        '2AZ' => 'E02002767',
        '2BA' => 'E02002762',
        '2BB' => 'E02002765',
        '2BD' => 'E02002762',
        '2BE' => 'E02002767',
        '2BF' => 'E02002765',
        '2BG' => 'E02002764',
        '2BH' => 'E02002764',
        '2BJ' => 'E02002764',
        '2BL' => 'E02002764',
        '2BN' => 'E02002764',
        '2BP' => 'E02002764',
        '2BQ' => 'E02002764',
        '2BS' => 'E02002767',
        '2BT' => 'E02002767',
        '2BU' => 'E02002767',
        '2BW' => 'E02002767',
        '2BX' => 'E02002764',
        '2BY' => 'E02002767',
        '2BZ' => 'E02002764',
        '2DA' => 'E02002765',
        '2DB' => 'E02002765',
        '2DD' => 'E02002765',
        '2DE' => 'E02002765',
        '2DF' => 'E02002762',
        '2DG' => 'E02002765',
        '2DH' => 'E02002765',
        '2DJ' => 'E02002765',
        '2DL' => 'E02002765',
        '2DN' => 'E02002765',
        '2DP' => 'E02002765',
        '2DQ' => 'E02002765',
        '2DR' => 'E02002765',
        '2DS' => 'E02002765',
        '2DT' => 'E02002765',
        '2DU' => 'E02002765',
        '2DW' => 'E02002765',
        '2DX' => 'E02002765',
        '2DY' => 'E02002765',
        '2DZ' => 'E02002756',
        '2EA' => 'E02002753',
        '2EB' => 'E02002767',
        '2ED' => 'E02002767',
        '2EE' => 'E02002767',
        '2EF' => 'E02002764',
        '2EG' => 'E02002764',
        '2EH' => 'E02002765',
        '2EJ' => 'E02002765',
        '2EL' => 'E02002765',
        '2EN' => 'E02002765',
        '2EP' => 'E02002764',
        '2EQ' => 'E02002764',
        '2ER' => 'E02002764',
        '2ES' => 'E02002764',
        '2ET' => 'E02002764',
        '2EU' => 'E02002764',
        '2EW' => 'E02002765',
        '2EX' => 'E02002764',
        '2EY' => 'E02002764',
        '2EZ' => 'E02002764',
        '2FA' => 'E02002767',
        '2FB' => 'E02002753',
        '2FD' => 'E02002765',
        '2FJ' => 'E02002765',
        '2FL' => 'E02002765',
        '2FN' => 'E02002767',
        '2FP' => 'E02002765',
        '2GA' => 'E02002767',
        '2GB' => 'E02002767',
        '2GD' => 'E02002767',
        '2GE' => 'E02002767',
        '2GF' => 'E02002767',
        '2GG' => 'E02002767',
        '2GH' => 'E02002767',
        '2GJ' => 'E02002767',
        '2GL' => 'E02002767',
        '2HA' => 'E02002764',
        '2HB' => 'E02002764',
        '2HD' => 'E02002764',
        '2HE' => 'E02002764',
        '2HF' => 'E02002764',
        '2HG' => 'E02002764',
        '2HH' => 'E02002764',
        '2HJ' => 'E02002764',
        '2HL' => 'E02002764',
        '2HN' => 'E02002764',
        '2HQ' => 'E02002764',
        '2HR' => 'E02002764',
        '2HU' => 'E02002765',
        '2HX' => 'E02002765',
        '2HY' => 'E02002765',
        '2HZ' => 'E02002765',
        '2JA' => 'E02002765',
        '2JB' => 'E02002765',
        '2JD' => 'E02002765',
        '2JE' => 'E02002765',
        '2JF' => 'E02002765',
        '2JG' => 'E02002764',
        '2JH' => 'E02002764',
        '2JJ' => 'E02002764',
        '2JL' => 'E02002764',
        '2JN' => 'E02002764',
        '2JP' => 'E02002764',
        '2JQ' => 'E02002764',
        '2JR' => 'E02002764',
        '2JS' => 'E02002764',
        '2JT' => 'E02002764',
        '2JU' => 'E02002764',
        '2JW' => 'E02002764',
        '2JX' => 'E02002767',
        '2JY' => 'E02002765',
        '2JZ' => 'E02002765',
        '2LA' => 'E02002765',
        '2LB' => 'E02002765',
        '2LD' => 'E02002765',
        '2LE' => 'E02002765',
        '2LL' => 'E02002765',
        '2LN' => 'E02002765',
        '2LP' => 'E02002765',
        '2LR' => 'E02002765',
        '2LS' => 'E02002765',
        '2LT' => 'E02002765',
        '2LU' => 'E02002765',
        '2LW' => 'E02002765',
        '2LX' => 'E02002765',
        '2LY' => 'E02002765',
        '2LZ' => 'E02002765',
        '2NA' => 'E02002765',
        '2NB' => 'E02002765',
        '2ND' => 'E02002765',
        '2NE' => 'E02002765',
        '2NF' => 'E02002765',
        '2NG' => 'E02002765',
        '2NH' => 'E02002767',
        '2NJ' => 'E02002767',
        '2NL' => 'E02002765',
        '2NN' => 'E02002765',
        '2NP' => 'E02002765',
        '2NQ' => 'E02002767',
        '2NR' => 'E02002765',
        '2NT' => 'E02002767',
        '2NU' => 'E02002765',
        '2NW' => 'E02002765',
        '2NY' => 'E02002765',
        '2NZ' => 'E02002765',
        '2PA' => 'E02002767',
        '2PB' => 'E02002767',
        '2PD' => 'E02002767',
        '2PE' => 'E02002767',
        '2PF' => 'E02002767',
        '2PG' => 'E02002767',
        '2PH' => 'E02002767',
        '2PJ' => 'E02002767',
        '2PL' => 'E02002767',
        '2PN' => 'E02002767',
        '2PP' => 'E02002767',
        '2PQ' => 'E02002767',
        '2PR' => 'E02002767',
        '2PS' => 'E02002767',
        '2PT' => 'E02002767',
        '2PU' => 'E02002767',
        '2PW' => 'E02002767',
        '2PX' => 'E02002767',
        '2PY' => 'E02002767',
        '2PZ' => 'E02002767',
        '2QA' => 'E02002767',
        '2QB' => 'E02002767',
        '2QD' => 'E02002767',
        '2QE' => 'E02002767',
        '2QF' => 'E02002767',
        '2QG' => 'E02002767',
        '2QH' => 'E02002767',
        '2QJ' => 'E02002767',
        '2QN' => 'E02002767',
        '2QP' => 'E02002767',
        '2QQ' => 'E02002767',
        '2QR' => 'E02002767',
        '2QS' => 'E02002767',
        '2QT' => 'E02002767',
        '2QU' => 'E02002767',
        '2QW' => 'E02002767',
        '2QX' => 'E02002767',
        '2QY' => 'E02002767',
        '2QZ' => 'E02002767',
        '2RA' => 'E02002767',
        '2RB' => 'E02002767',
        '2RD' => 'E02002767',
        '2RE' => 'E02002767',
        '2RF' => 'E02002767',
        '2RG' => 'E02002767',
        '2RH' => 'E02002767',
        '2RJ' => 'E02002767',
        '2RL' => 'E02002767',
        '2RN' => 'E02002767',
        '2RP' => 'E02002767',
        '2RQ' => 'E02002767',
        '2RR' => 'E02002767',
        '2RS' => 'E02002767',
        '2RU' => 'E02002767',
        '2RW' => 'E02002767',
        '2RX' => 'E02002767',
        '2RY' => 'E02002767',
        '2RZ' => 'E02002767',
        '2SA' => 'E02002767',
        '2SB' => 'E02002767',
        '2SD' => 'E02002767',
        '2SE' => 'E02002767',
        '2SF' => 'E02002767',
        '2SG' => 'E02002767',
        '2SH' => 'E02002767',
        '2SJ' => 'E02002767',
        '2SL' => 'E02002767',
        '2SN' => 'E02002767',
        '2SP' => 'E02002767',
        '2SQ' => 'E02002767',
        '2SR' => 'E02002767',
        '2SS' => 'E02002767',
        '2ST' => 'E02002767',
        '2SU' => 'E02002767',
        '2SW' => 'E02002767',
        '2SX' => 'E02002767',
        '2SY' => 'E02002767',
        '2SZ' => 'E02002767',
        '2TA' => 'E02002767',
        '2TB' => 'E02002767',
        '2TD' => 'E02002767',
        '2TE' => 'E02002767',
        '2TF' => 'E02002767',
        '2TG' => 'E02002767',
        '2TH' => 'E02002767',
        '2TJ' => 'E02002767',
        '2TL' => 'E02002767',
        '2TN' => 'E02002767',
        '2TP' => 'E02002767',
        '2TQ' => 'E02002767',
        '2TR' => 'E02002767',
        '2TS' => 'E02002767',
        '2TT' => 'E02002767',
        '2TU' => 'E02002767',
        '2TW' => 'E02002767',
        '2TX' => 'E02002767',
        '2TY' => 'E02002767',
        '2UB' => 'E02002767',
        '2UE' => 'E02002767',
        '2UF' => 'E02002765',
        '2UH' => 'E02002767',
        '2UJ' => 'E02002767',
        '2UL' => 'E02002767',
        '2UN' => 'E02002767',
        '2UP' => 'E02002767',
        '2UR' => 'E02002767',
        '2WA' => 'E02002756',
        '2WT' => 'E02002756',
        '2WU' => 'E02002756',
        '2WW' => 'E02002756',
        '2WX' => 'E02002756',
        '2WY' => 'E02002756',
        '2WZ' => 'E02002756',
        '2XA' => 'E02002764',
        '2XB' => 'E02002764',
        '2XD' => 'E02002764',
        '2XE' => 'E02002764',
        '2XF' => 'E02002764',
        '2XG' => 'E02002764',
        '2XH' => 'E02002764',
        '2XJ' => 'E02002764',
        '2XL' => 'E02002764',
        '2XN' => 'E02002765',
        '2XP' => 'E02002765',
        '2XQ' => 'E02002756',
        '2XR' => 'E02002756',
        '2XS' => 'E02002756',
        '2XU' => 'E02002767',
        '2XX' => 'E02002756',
        '2XY' => 'E02002756',
        '2XZ' => 'E02002765',
        '2YA' => 'E02002756',
        '2YB' => 'E02002765',
        '2YD' => 'E02002765',
        '2YE' => 'E02002756',
        '2YF' => 'E02002756',
        '2YG' => 'E02002756',
        '2YZ' => 'E02002756',
        '2ZP' => 'E02002756',
        '2ZU' => 'E02002756',
        '3AA' => 'E02002753',
        '3AB' => 'E02002753',
        '3AD' => 'E02002769',
        '3AE' => 'E02002769',
        '3AF' => 'E02002769',
        '3AG' => 'E02002769',
        '3AH' => 'E02002769',
        '3AJ' => 'E02002769',
        '3AL' => 'E02002769',
        '3AN' => 'E02002769',
        '3AP' => 'E02005493',
        '3AQ' => 'E02002769',
        '3AR' => 'E02005493',
        '3AS' => 'E02005493',
        '3AT' => 'E02005493',
        '3AU' => 'E02002769',
        '3AW' => 'E02005493',
        '3AX' => 'E02002769',
        '3AZ' => 'E02002769',
        '3BA' => 'E02002756',
        '3BB' => 'E02002769',
        '3BD' => 'E02002754',
        '3BE' => 'E02002754',
        '3BF' => 'E02002771',
        '3BG' => 'E02002769',
        '3BL' => 'E02002754',
        '3BN' => 'E02002754',
        '3BP' => 'E02002754',
        '3BS' => 'E02002754',
        '3BT' => 'E02002754',
        '3BU' => 'E02002754',
        '3BW' => 'E02002754',
        '3BX' => 'E02002754',
        '3BY' => 'E02002754',
        '3BZ' => 'E02002754',
        '3DA' => 'E02002754',
        '3DB' => 'E02002754',
        '3DD' => 'E02002754',
        '3DE' => 'E02002754',
        '3DF' => 'E02002754',
        '3DG' => 'E02002754',
        '3DH' => 'E02002754',
        '3DJ' => 'E02002754',
        '3DL' => 'E02002754',
        '3DN' => 'E02002754',
        '3DP' => 'E02002754',
        '3DQ' => 'E02002754',
        '3DR' => 'E02002754',
        '3DS' => 'E02002754',
        '3DT' => 'E02002754',
        '3DU' => 'E02002754',
        '3DW' => 'E02002754',
        '3EB' => 'E02002754',
        '3ED' => 'E02002754',
        '3EE' => 'E02002754',
        '3EF' => 'E02002754',
        '3EH' => 'E02002754',
        '3EJ' => 'E02002754',
        '3EL' => 'E02002754',
        '3EN' => 'E02002754',
        '3EP' => 'E02002754',
        '3EQ' => 'E02002754',
        '3ER' => 'E02002754',
        '3ES' => 'E02002754',
        '3ET' => 'E02002754',
        '3EU' => 'E02002754',
        '3EW' => 'E02002754',
        '3EX' => 'E02002754',
        '3EY' => 'E02002754',
        '3EZ' => 'E02002754',
        '3GA' => 'E02002769',
        '3GB' => 'E02002769',
        '3GD' => 'E02002769',
        '3GE' => 'E02002756',
        '3GF' => 'E02002756',
        '3GG' => 'E02002756',
        '3GJ' => 'E02002769',
        '3HA' => 'E02002754',
        '3HB' => 'E02002754',
        '3HH' => 'E02002754',
        '3HJ' => 'E02002754',
        '3HL' => 'E02002754',
        '3HN' => 'E02002754',
        '3HP' => 'E02002754',
        '3HQ' => 'E02002754',
        '3HR' => 'E02002754',
        '3HS' => 'E02002754',
        '3HT' => 'E02002754',
        '3HU' => 'E02002754',
        '3HW' => 'E02002754',
        '3HX' => 'E02002754',
        '3HY' => 'E02002754',
        '3HZ' => 'E02002754',
        '3JA' => 'E02002754',
        '3JB' => 'E02002754',
        '3JD' => 'E02002754',
        '3JE' => 'E02002771',
        '3JF' => 'E02002754',
        '3JJ' => 'E02002771',
        '3JL' => 'E02002771',
        '3JN' => 'E02002768',
        '3JP' => 'E02002771',
        '3JQ' => 'E02002771',
        '3JR' => 'E02002771',
        '3JS' => 'E02002771',
        '3JT' => 'E02002771',
        '3JU' => 'E02002771',
        '3JW' => 'E02002771',
        '3JX' => 'E02002771',
        '3JY' => 'E02002771',
        '3JZ' => 'E02002771',
        '3LA' => 'E02002771',
        '3LB' => 'E02002771',
        '3LD' => 'E02002771',
        '3LE' => 'E02002771',
        '3LF' => 'E02002771',
        '3LG' => 'E02002771',
        '3LH' => 'E02002771',
        '3LJ' => 'E02002771',
        '3LL' => 'E02002771',
        '3LN' => 'E02002771',
        '3LP' => 'E02002753',
        '3LQ' => 'E02002771',
        '3LR' => 'E02002753',
        '3LS' => 'E02002753',
        '3LT' => 'E02002753',
        '3LU' => 'E02002753',
        '3LW' => 'E02002753',
        '3LX' => 'E02002753',
        '3LY' => 'E02002753',
        '3LZ' => 'E02002753',
        '3NA' => 'E02002753',
        '3NB' => 'E02002753',
        '3ND' => 'E02002753',
        '3NE' => 'E02002753',
        '3NF' => 'E02002753',
        '3NG' => 'E02002753',
        '3NH' => 'E02002753',
        '3NJ' => 'E02002753',
        '3NL' => 'E02002753',
        '3NN' => 'E02002753',
        '3NP' => 'E02002769',
        '3NQ' => 'E02002753',
        '3NT' => 'E02002769',
        '3NU' => 'E02002769',
        '3NW' => 'E02002769',
        '3NX' => 'E02002769',
        '3NY' => 'E02002769',
        '3PA' => 'E02002769',
        '3PB' => 'E02002769',
        '3PD' => 'E02002769',
        '3PE' => 'E02002769',
        '3PF' => 'E02002769',
        '3PG' => 'E02002769',
        '3PH' => 'E02002769',
        '3PJ' => 'E02002769',
        '3PL' => 'E02002769',
        '3PN' => 'E02002769',
        '3PP' => 'E02002769',
        '3PQ' => 'E02002769',
        '3PR' => 'E02002769',
        '3PS' => 'E02002769',
        '3PT' => 'E02002769',
        '3PU' => 'E02002769',
        '3PW' => 'E02002769',
        '3PX' => 'E02002769',
        '3PY' => 'E02002769',
        '3PZ' => 'E02002769',
        '3QA' => 'E02002769',
        '3QB' => 'E02002769',
        '3QD' => 'E02002769',
        '3QE' => 'E02002769',
        '3QF' => 'E02002769',
        '3QG' => 'E02002769',
        '3QN' => 'E02002769',
        '3QP' => 'E02002769',
        '3QR' => 'E02002769',
        '3QS' => 'E02002769',
        '3QT' => 'E02002769',
        '3QU' => 'E02002769',
        '3QX' => 'E02002769',
        '3QY' => 'E02002769',
        '3QZ' => 'E02002769',
        '3RA' => 'E02002769',
        '3RB' => 'E02002769',
        '3RD' => 'E02002769',
        '3RE' => 'E02002769',
        '3RF' => 'E02002769',
        '3RG' => 'E02002769',
        '3RH' => 'E02002769',
        '3RJ' => 'E02002769',
        '3RL' => 'E02002769',
        '3RN' => 'E02002769',
        '3RQ' => 'E02002769',
        '3RS' => 'E02002769',
        '3RT' => 'E02002769',
        '3RU' => 'E02002769',
        '3RX' => 'E02002769',
        '3RY' => 'E02002769',
        '3RZ' => 'E02002769',
        '3SA' => 'E02002769',
        '3SB' => 'E02002769',
        '3SD' => 'E02002769',
        '3SE' => 'E02002769',
        '3SF' => 'E02002769',
        '3SG' => 'E02002769',
        '3SH' => 'E02002769',
        '3SJ' => 'E02002769',
        '3SL' => 'E02002769',
        '3SN' => 'E02002769',
        '3SP' => 'E02002769',
        '3SQ' => 'E02002769',
        '3SR' => 'E02002769',
        '3SS' => 'E02002769',
        '3ST' => 'E02002769',
        '3SU' => 'E02002769',
        '3SW' => 'E02002769',
        '3SX' => 'E02002769',
        '3SY' => 'E02002769',
        '3SZ' => 'E02002769',
        '3TA' => 'E02002769',
        '3TB' => 'E02002769',
        '3TD' => 'E02002769',
        '3TE' => 'E02002769',
        '3TF' => 'E02002769',
        '3TG' => 'E02002769',
        '3TH' => 'E02002769',
        '3TJ' => 'E02002769',
        '3TL' => 'E02002769',
        '3TN' => 'E02002769',
        '3TP' => 'E02002769',
        '3TQ' => 'E02002769',
        '3TR' => 'E02002769',
        '3TS' => 'E02002769',
        '3TT' => 'E02002769',
        '3TU' => 'E02002769',
        '3TW' => 'E02002769',
        '3TX' => 'E02002769',
        '3TY' => 'E02002769',
        '3TZ' => 'E02002769',
        '3UA' => 'E02002769',
        '3UB' => 'E02002769',
        '3UD' => 'E02002769',
        '3UE' => 'E02002769',
        '3UF' => 'E02002769',
        '3UG' => 'E02002769',
        '3UH' => 'E02002769',
        '3UJ' => 'E02002769',
        '3UL' => 'E02002769',
        '3UN' => 'E02002769',
        '3UP' => 'E02002769',
        '3UQ' => 'E02002769',
        '3UR' => 'E02002769',
        '3US' => 'E02002769',
        '3UT' => 'E02002753',
        '3UU' => 'E02002769',
        '3UW' => 'E02002769',
        '3UX' => 'E02002769',
        '3UY' => 'E02002769',
        '3UZ' => 'E02002769',
        '3WZ' => 'E02002769',
        '3XA' => 'E02002756',
        '4AA' => 'E02002754',
        '4AB' => 'E02002754',
        '4AD' => 'E02002754',
        '4AE' => 'E02002754',
        '4AF' => 'E02002754',
        '4AG' => 'E02002754',
        '4AH' => 'E02002754',
        '4AJ' => 'E02002754',
        '4AL' => 'E02002754',
        '4AN' => 'E02002754',
        '4AP' => 'E02002754',
        '4AQ' => 'E02002754',
        '4AR' => 'E02002754',
        '4AS' => 'E02002754',
        '4AT' => 'E02002754',
        '4AU' => 'E02002754',
        '4AW' => 'E02002754',
        '4AX' => 'E02002754',
        '4AY' => 'E02002754',
        '4AZ' => 'E02002754',
        '4BA' => 'E02002754',
        '4BB' => 'E02002754',
        '4BD' => 'E02002754',
        '4BF' => 'E02002754',
        '4BG' => 'E02002754',
        '4BH' => 'E02002754',
        '4BJ' => 'E02002754',
        '4BL' => 'E02002754',
        '4BN' => 'E02002754',
        '4BP' => 'E02002768',
        '4BQ' => 'E02002754',
        '4BS' => 'E02002754',
        '4BT' => 'E02002768',
        '4BU' => 'E02002768',
        '4BW' => 'E02002754',
        '4BX' => 'E02002768',
        '4BY' => 'E02002768',
        '4BZ' => 'E02002768',
        '4DA' => 'E02002768',
        '4DB' => 'E02002754',
        '4DD' => 'E02002754',
        '4DE' => 'E02002754',
        '4DF' => 'E02002754',
        '4DG' => 'E02002754',
        '4DH' => 'E02002754',
        '4DL' => 'E02002754',
        '4DN' => 'E02002754',
        '4DP' => 'E02002754',
        '4DQ' => 'E02002754',
        '4DR' => 'E02002754',
        '4DS' => 'E02002754',
        '4DT' => 'E02002754',
        '4DU' => 'E02002754',
        '4DW' => 'E02002754',
        '4DX' => 'E02002754',
        '4DY' => 'E02002754',
        '4DZ' => 'E02002754',
        '4EA' => 'E02002754',
        '4EB' => 'E02002754',
        '4ED' => 'E02002754',
        '4EE' => 'E02002754',
        '4EF' => 'E02002754',
        '4EG' => 'E02002754',
        '4EH' => 'E02002754',
        '4EJ' => 'E02002754',
        '4EL' => 'E02002754',
        '4EN' => 'E02002754',
        '4EP' => 'E02002754',
        '4EQ' => 'E02002754',
        '4ER' => 'E02002754',
        '4ES' => 'E02002754',
        '4ET' => 'E02002754',
        '4EU' => 'E02002754',
        '4EW' => 'E02002754',
        '4EX' => 'E02002754',
        '4EY' => 'E02002754',
        '4EZ' => 'E02002754',
        '4FA' => 'E02002754',
        '4FB' => 'E02002754',
        '4FL' => 'E02002754',
        '4GA' => 'E02002754',
        '4GB' => 'E02002754',
        '4GD' => 'E02002754',
        '4GE' => 'E02002754',
        '4GG' => 'E02002754',
        '4GH' => 'E02002754',
        '4GJ' => 'E02002754',
        '4GL' => 'E02002754',
        '4HA' => 'E02002754',
        '4HB' => 'E02002754',
        '4HH' => 'E02002754',
        '4HJ' => 'E02002754',
        '4HL' => 'E02002754',
        '4HN' => 'E02002754',
        '4HP' => 'E02002754',
        '4HR' => 'E02002754',
        '4HS' => 'E02002754',
        '4HT' => 'E02002754',
        '4HU' => 'E02002754',
        '4HW' => 'E02002754',
        '4HX' => 'E02002754',
        '4HY' => 'E02002754',
        '4HZ' => 'E02002754',
        '4JA' => 'E02002754',
        '4JB' => 'E02002754',
        '4JD' => 'E02002754',
        '4JE' => 'E02002754',
        '4JF' => 'E02002754',
        '4JG' => 'E02002754',
        '4JH' => 'E02002754',
        '4JJ' => 'E02002754',
        '4JL' => 'E02002754',
        '4JN' => 'E02002754',
        '4JP' => 'E02002754',
        '4JQ' => 'E02002754',
        '4JR' => 'E02002754',
        '4JS' => 'E02002754',
        '4JT' => 'E02002754',
        '4JU' => 'E02002754',
        '4JW' => 'E02002754',
        '4LA' => 'E02002754',
        '4LB' => 'E02002754',
        '4LD' => 'E02002754',
        '4LE' => 'E02002754',
        '4LF' => 'E02002754',
        '4LG' => 'E02002754',
        '4LH' => 'E02002754',
        '4LJ' => 'E02002754',
        '4LL' => 'E02002754',
        '4LN' => 'E02002754',
        '4LP' => 'E02002754',
        '4LQ' => 'E02002754',
        '4LR' => 'E02002754',
        '4LS' => 'E02002754',
        '4LT' => 'E02002754',
        '4LU' => 'E02002754',
        '4LW' => 'E02002754',
        '4LX' => 'E02002754',
        '4LY' => 'E02002754',
        '4LZ' => 'E02002754',
        '4NA' => 'E02002754',
        '4NB' => 'E02002754',
        '4ND' => 'E02002754',
        '4NE' => 'E02002754',
        '4NF' => 'E02002754',
        '4NG' => 'E02002754',
        '4NH' => 'E02002754',
        '4NJ' => 'E02002754',
        '4NL' => 'E02002754',
        '4NN' => 'E02002754',
        '4NP' => 'E02002754',
        '4NQ' => 'E02002754',
        '4NR' => 'E02002754',
        '4NS' => 'E02002754',
        '4NT' => 'E02002754',
        '4NU' => 'E02002754',
        '4NW' => 'E02002754',
        '4NX' => 'E02002754',
        '4NY' => 'E02002754',
        '4NZ' => 'E02002754',
        '4PA' => 'E02002754',
        '4PB' => 'E02002754',
        '4PE' => 'E02002754',
        '4PF' => 'E02002754',
        '4PG' => 'E02002754',
        '4PH' => 'E02002754',
        '4PJ' => 'E02002754',
        '4PL' => 'E02002754',
        '4PN' => 'E02002754',
        '4PP' => 'E02002754',
        '4PQ' => 'E02002754',
        '4PR' => 'E02002754',
        '4PS' => 'E02002754',
        '4PT' => 'E02002754',
        '4PU' => 'E02002754',
        '4PW' => 'E02002754',
        '4PX' => 'E02002754',
        '4PY' => 'E02002754',
        '4PZ' => 'E02002754',
        '4QA' => 'E02002754',
        '4QB' => 'E02002754',
        '4QD' => 'E02002754',
        '4QJ' => 'E02002754',
        '4QL' => 'E02002754',
        '4QN' => 'E02002754',
        '4QP' => 'E02002754',
        '4QR' => 'E02002754',
        '4QS' => 'E02002754',
        '4QT' => 'E02002754',
        '4QU' => 'E02002754',
        '4QW' => 'E02002754',
        '4QX' => 'E02002754',
        '4QY' => 'E02002754',
        '4QZ' => 'E02002754',
        '4RA' => 'E02002754',
        '4RB' => 'E02002754',
        '4RD' => 'E02002754',
        '4RE' => 'E02002754',
        '4RF' => 'E02002754',
        '4RL' => 'E02002754',
        '4RP' => 'E02002754',
        '4RR' => 'E02002754',
        '4RS' => 'E02002754',
        '4RT' => 'E02002754',
        '4RU' => 'E02002754',
        '4RX' => 'E02002754',
        '4RY' => 'E02002754',
        '4RZ' => 'E02002754',
        '4SA' => 'E02002754',
        '4SB' => 'E02002754',
        '4SD' => 'E02002754',
        '4SE' => 'E02002754',
        '4SF' => 'E02002754',
        '4TA' => 'E02002754',
        '4TB' => 'E02002754',
        '4TD' => 'E02002754',
        '4TE' => 'E02002754',
        '4TF' => 'E02002754',
        '4UB' => 'E02002754',
        '4WQ' => 'E02002756',
        '4WR' => 'E02002754',
        '4WS' => 'E02002756',
        '4WT' => 'E02002754',
        '4WU' => 'E02002756',
        '4WW' => 'E02002756',
        '4WX' => 'E02002756',
        '4WY' => 'E02002756',
        '4WZ' => 'E02002754',
        '4XB' => 'E02002756',
        '4YJ' => 'E02002756',
        '4YL' => 'E02002756',
        '4YN' => 'E02002756',
        '4YP' => 'E02002756',
        '4YQ' => 'E02002756',
        '4YR' => 'E02002756',
        '4YS' => 'E02002756',
        '4YT' => 'E02002754',
        '4YU' => 'E02002756',
        '4YW' => 'E02002756',
        '4YX' => 'E02002756',
        '4YY' => 'E02002754',
        '4YZ' => 'E02002754',
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