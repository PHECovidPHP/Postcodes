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
final class OL8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006860',
        '1AB' => 'E02006860',
        '1AD' => 'E02006860',
        '1AE' => 'E02006860',
        '1AF' => 'E02001121',
        '1AG' => 'E02001121',
        '1AH' => 'E02006860',
        '1AJ' => 'E02006860',
        '1AL' => 'E02001121',
        '1AN' => 'E02006860',
        '1AP' => 'E02006860',
        '1AQ' => 'E02001121',
        '1AR' => 'E02001121',
        '1AS' => 'E02001121',
        '1AT' => 'E02001121',
        '1AU' => 'E02001121',
        '1AW' => 'E02001121',
        '1AX' => 'E02006860',
        '1AY' => 'E02006860',
        '1AZ' => 'E02006860',
        '1BA' => 'E02006860',
        '1BB' => 'E02006860',
        '1BD' => 'E02006860',
        '1BE' => 'E02006860',
        '1BF' => 'E02001126',
        '1BG' => 'E02006860',
        '1BH' => 'E02006860',
        '1BJ' => 'E02001119',
        '1BL' => 'E02006860',
        '1BN' => 'E02006860',
        '1BP' => 'E02001121',
        '1BQ' => 'E02001121',
        '1BS' => 'E02001121',
        '1BT' => 'E02001121',
        '1BU' => 'E02001121',
        '1BW' => 'E02001121',
        '1BX' => 'E02006860',
        '1BY' => 'E02001121',
        '1BZ' => 'E02001121',
        '1DA' => 'E02001121',
        '1DB' => 'E02001121',
        '1DD' => 'E02001121',
        '1DE' => 'E02001121',
        '1DF' => 'E02001121',
        '1DG' => 'E02001121',
        '1DH' => 'E02001121',
        '1DJ' => 'E02001121',
        '1DL' => 'E02001121',
        '1DN' => 'E02001121',
        '1DP' => 'E02001121',
        '1DQ' => 'E02001121',
        '1DR' => 'E02001121',
        '1DS' => 'E02001121',
        '1DT' => 'E02001121',
        '1DU' => 'E02006860',
        '1DW' => 'E02001121',
        '1DX' => 'E02001121',
        '1DY' => 'E02001121',
        '1DZ' => 'E02001121',
        '1EA' => 'E02001121',
        '1EB' => 'E02001121',
        '1ED' => 'E02001121',
        '1EE' => 'E02001121',
        '1EF' => 'E02001121',
        '1EG' => 'E02001121',
        '1EH' => 'E02006860',
        '1EJ' => 'E02001121',
        '1EL' => 'E02001121',
        '1EN' => 'E02001121',
        '1EP' => 'E02001119',
        '1EQ' => 'E02001121',
        '1ER' => 'E02001121',
        '1ES' => 'E02001121',
        '1ET' => 'E02001121',
        '1EU' => 'E02001121',
        '1EW' => 'E02001121',
        '1EX' => 'E02001121',
        '1EY' => 'E02001121',
        '1EZ' => 'E02001121',
        '1FA' => 'E02006860',
        '1FB' => 'E02006860',
        '1FD' => 'E02006860',
        '1FE' => 'E02006860',
        '1FF' => 'E02006860',
        '1FG' => 'E02006860',
        '1FH' => 'E02006860',
        '1FJ' => 'E02006860',
        '1FL' => 'E02006860',
        '1FN' => 'E02006860',
        '1FP' => 'E02006860',
        '1FQ' => 'E02006860',
        '1FR' => 'E02001121',
        '1FS' => 'E02006860',
        '1GZ' => 'E02001121',
        '1HA' => 'E02001121',
        '1HB' => 'E02001121',
        '1HD' => 'E02001121',
        '1HE' => 'E02001121',
        '1HF' => 'E02001121',
        '1HG' => 'E02001121',
        '1HH' => 'E02001121',
        '1HJ' => 'E02001121',
        '1HL' => 'E02001121',
        '1HN' => 'E02006860',
        '1HP' => 'E02001121',
        '1HQ' => 'E02001121',
        '1HR' => 'E02006860',
        '1HS' => 'E02001121',
        '1HT' => 'E02001121',
        '1HU' => 'E02001121',
        '1HW' => 'E02001121',
        '1HX' => 'E02001121',
        '1HY' => 'E02001121',
        '1HZ' => 'E02001121',
        '1JA' => 'E02001121',
        '1JB' => 'E02001121',
        '1JD' => 'E02001121',
        '1JE' => 'E02001121',
        '1JF' => 'E02001121',
        '1JG' => 'E02006860',
        '1JH' => 'E02001121',
        '1JJ' => 'E02001121',
        '1JL' => 'E02001121',
        '1JN' => 'E02001121',
        '1JP' => 'E02001121',
        '1JQ' => 'E02001121',
        '1JR' => 'E02001121',
        '1JS' => 'E02001121',
        '1JT' => 'E02001121',
        '1JU' => 'E02001121',
        '1JW' => 'E02001121',
        '1JX' => 'E02001121',
        '1JY' => 'E02001121',
        '1JZ' => 'E02001121',
        '1LA' => 'E02001121',
        '1LB' => 'E02001121',
        '1LD' => 'E02001121',
        '1LE' => 'E02001121',
        '1LF' => 'E02001121',
        '1LG' => 'E02001121',
        '1LH' => 'E02001121',
        '1LJ' => 'E02001121',
        '1LL' => 'E02001121',
        '1LN' => 'E02001121',
        '1LP' => 'E02001121',
        '1LQ' => 'E02001121',
        '1LR' => 'E02001121',
        '1LS' => 'E02001121',
        '1LT' => 'E02001121',
        '1LU' => 'E02001121',
        '1LW' => 'E02001121',
        '1LX' => 'E02001121',
        '1LY' => 'E02001121',
        '1LZ' => 'E02001121',
        '1NA' => 'E02001121',
        '1NB' => 'E02001121',
        '1ND' => 'E02001121',
        '1NE' => 'E02001121',
        '1NF' => 'E02001121',
        '1NG' => 'E02001121',
        '1NH' => 'E02001121',
        '1NJ' => 'E02001121',
        '1NL' => 'E02001121',
        '1NN' => 'E02001121',
        '1NP' => 'E02001126',
        '1NQ' => 'E02001121',
        '1NR' => 'E02001126',
        '1NS' => 'E02001126',
        '1NT' => 'E02001126',
        '1NU' => 'E02001121',
        '1NW' => 'E02001126',
        '1NX' => 'E02001126',
        '1NY' => 'E02001121',
        '1NZ' => 'E02001121',
        '1PA' => 'E02001126',
        '1PB' => 'E02001121',
        '1PD' => 'E02001121',
        '1PE' => 'E02001121',
        '1PF' => 'E02001121',
        '1PG' => 'E02001121',
        '1PH' => 'E02001121',
        '1PJ' => 'E02001121',
        '1PL' => 'E02001121',
        '1PN' => 'E02001121',
        '1PP' => 'E02001121',
        '1PQ' => 'E02001121',
        '1PR' => 'E02001126',
        '1PS' => 'E02001121',
        '1PT' => 'E02001126',
        '1PU' => 'E02001121',
        '1PW' => 'E02001121',
        '1PY' => 'E02001121',
        '1PZ' => 'E02001119',
        '1QA' => 'E02001121',
        '1QB' => 'E02001121',
        '1QD' => 'E02001121',
        '1QE' => 'E02001121',
        '1QF' => 'E02001121',
        '1QG' => 'E02001121',
        '1QH' => 'E02001121',
        '1QJ' => 'E02001126',
        '1QL' => 'E02001126',
        '1QN' => 'E02001121',
        '1QP' => 'E02001126',
        '1QQ' => 'E02001121',
        '1QR' => 'E02001121',
        '1QS' => 'E02001121',
        '1QT' => 'E02001121',
        '1QU' => 'E02001126',
        '1QW' => 'E02001121',
        '1QX' => 'E02001121',
        '1QY' => 'E02001121',
        '1QZ' => 'E02006860',
        '1RA' => 'E02001126',
        '1RB' => 'E02006860',
        '1RD' => 'E02006860',
        '1RE' => 'E02006860',
        '1RF' => 'E02006860',
        '1RG' => 'E02006860',
        '1RH' => 'E02006860',
        '1RJ' => 'E02001121',
        '1RL' => 'E02001121',
        '1RN' => 'E02001121',
        '1RP' => 'E02006860',
        '1RQ' => 'E02006860',
        '1RR' => 'E02006860',
        '1RS' => 'E02006860',
        '1RT' => 'E02006860',
        '1RU' => 'E02006860',
        '1RW' => 'E02006860',
        '1RX' => 'E02001121',
        '1RY' => 'E02006860',
        '1RZ' => 'E02006860',
        '1SA' => 'E02006860',
        '1SB' => 'E02001119',
        '1SD' => 'E02006860',
        '1SE' => 'E02006860',
        '1SF' => 'E02006860',
        '1SG' => 'E02006860',
        '1SH' => 'E02006860',
        '1SJ' => 'E02006860',
        '1SL' => 'E02006860',
        '1SN' => 'E02006860',
        '1SP' => 'E02001121',
        '1SQ' => 'E02006860',
        '1SR' => 'E02001121',
        '1SS' => 'E02006860',
        '1ST' => 'E02001121',
        '1SU' => 'E02001119',
        '1SW' => 'E02006860',
        '1SX' => 'E02006860',
        '1SY' => 'E02006860',
        '1SZ' => 'E02006860',
        '1TA' => 'E02001121',
        '1TB' => 'E02001121',
        '1TD' => 'E02001121',
        '1TE' => 'E02001121',
        '1TF' => 'E02006860',
        '1TG' => 'E02006860',
        '1TH' => 'E02006860',
        '1TJ' => 'E02006860',
        '1TL' => 'E02006860',
        '1TN' => 'E02006860',
        '1TP' => 'E02006860',
        '1TQ' => 'E02001121',
        '1TR' => 'E02001121',
        '1TS' => 'E02006860',
        '1TT' => 'E02006860',
        '1TU' => 'E02006860',
        '1TW' => 'E02006860',
        '1TX' => 'E02006860',
        '1TY' => 'E02006860',
        '1TZ' => 'E02001121',
        '1UA' => 'E02001121',
        '1UB' => 'E02001121',
        '1UD' => 'E02001121',
        '1UF' => 'E02001121',
        '1UG' => 'E02001121',
        '1UJ' => 'E02001121',
        '1UL' => 'E02001121',
        '1UN' => 'E02001121',
        '1UP' => 'E02001121',
        '1UQ' => 'E02006860',
        '1UR' => 'E02001121',
        '1US' => 'E02001121',
        '1UT' => 'E02001121',
        '1UU' => 'E02006860',
        '1UW' => 'E02001121',
        '1UX' => 'E02001121',
        '1UY' => 'E02001121',
        '1UZ' => 'E02001121',
        '1WA' => 'E02001119',
        '1WQ' => 'E02001119',
        '1WR' => 'E02001119',
        '1WS' => 'E02001121',
        '1WT' => 'E02001121',
        '1WU' => 'E02001119',
        '1WW' => 'E02001119',
        '1WX' => 'E02001121',
        '1WY' => 'E02001121',
        '1WZ' => 'E02001121',
        '1XA' => 'E02001121',
        '1XB' => 'E02001121',
        '1XE' => 'E02001121',
        '1XF' => 'E02001121',
        '1XG' => 'E02001121',
        '1XH' => 'E02001121',
        '1XJ' => 'E02001121',
        '1XL' => 'E02001121',
        '1XN' => 'E02001121',
        '1XP' => 'E02001121',
        '1XQ' => 'E02006860',
        '1XR' => 'E02001121',
        '1XS' => 'E02001121',
        '1XT' => 'E02001121',
        '1XU' => 'E02001121',
        '1XW' => 'E02001121',
        '1ZU' => 'E02001119',
        '2AA' => 'E02001126',
        '2AB' => 'E02001126',
        '2AD' => 'E02001126',
        '2AE' => 'E02001126',
        '2AF' => 'E02001126',
        '2AG' => 'E02001126',
        '2AH' => 'E02001126',
        '2AJ' => 'E02001126',
        '2AL' => 'E02001126',
        '2AN' => 'E02001126',
        '2AP' => 'E02001126',
        '2AQ' => 'E02001126',
        '2AR' => 'E02001126',
        '2AS' => 'E02001126',
        '2AT' => 'E02001126',
        '2AU' => 'E02001119',
        '2AW' => 'E02001126',
        '2AX' => 'E02001119',
        '2AY' => 'E02001119',
        '2AZ' => 'E02001119',
        '2BA' => 'E02001119',
        '2BB' => 'E02001119',
        '2BD' => 'E02001119',
        '2BE' => 'E02001119',
        '2BF' => 'E02001119',
        '2BG' => 'E02001119',
        '2BH' => 'E02001119',
        '2BJ' => 'E02001119',
        '2BL' => 'E02001126',
        '2BN' => 'E02001119',
        '2BP' => 'E02001119',
        '2BQ' => 'E02001119',
        '2BS' => 'E02001119',
        '2BT' => 'E02001119',
        '2BU' => 'E02001119',
        '2BX' => 'E02001119',
        '2BY' => 'E02001119',
        '2BZ' => 'E02001119',
        '2DA' => 'E02001119',
        '2DB' => 'E02001119',
        '2DD' => 'E02001119',
        '2DE' => 'E02001119',
        '2DF' => 'E02001119',
        '2DG' => 'E02001119',
        '2DH' => 'E02001123',
        '2DJ' => 'E02001123',
        '2DL' => 'E02001123',
        '2DN' => 'E02001123',
        '2DP' => 'E02001123',
        '2DQ' => 'E02001123',
        '2DR' => 'E02001123',
        '2DS' => 'E02001123',
        '2DT' => 'E02001123',
        '2DU' => 'E02001123',
        '2DW' => 'E02001123',
        '2DX' => 'E02001123',
        '2DY' => 'E02001123',
        '2DZ' => 'E02001123',
        '2EA' => 'E02001123',
        '2EB' => 'E02001123',
        '2ED' => 'E02001123',
        '2EE' => 'E02001123',
        '2EF' => 'E02001123',
        '2EG' => 'E02001123',
        '2EH' => 'E02001123',
        '2EJ' => 'E02001123',
        '2EL' => 'E02001123',
        '2EN' => 'E02001123',
        '2EP' => 'E02001123',
        '2EQ' => 'E02001123',
        '2EW' => 'E02001123',
        '2EX' => 'E02001123',
        '2EY' => 'E02001123',
        '2EZ' => 'E02001123',
        '2FA' => 'E02001119',
        '2FB' => 'E02001126',
        '2FD' => 'E02001126',
        '2FE' => 'E02001126',
        '2FF' => 'E02001126',
        '2FG' => 'E02001126',
        '2FH' => 'E02001123',
        '2FJ' => 'E02001119',
        '2FL' => 'E02001123',
        '2GA' => 'E02001126',
        '2GZ' => 'E02001126',
        '2HA' => 'E02001123',
        '2HB' => 'E02001123',
        '2HD' => 'E02001123',
        '2HE' => 'E02001123',
        '2HF' => 'E02001123',
        '2HG' => 'E02001123',
        '2HH' => 'E02001123',
        '2HJ' => 'E02001123',
        '2HP' => 'E02001123',
        '2HQ' => 'E02001123',
        '2HR' => 'E02001123',
        '2HS' => 'E02001123',
        '2HT' => 'E02001123',
        '2HU' => 'E02001123',
        '2HX' => 'E02001123',
        '2HY' => 'E02001123',
        '2HZ' => 'E02001119',
        '2JA' => 'E02001119',
        '2JB' => 'E02001119',
        '2JD' => 'E02001119',
        '2JE' => 'E02001119',
        '2JF' => 'E02001119',
        '2JG' => 'E02001119',
        '2JH' => 'E02001119',
        '2JJ' => 'E02001119',
        '2JL' => 'E02001119',
        '2JN' => 'E02001119',
        '2JP' => 'E02001121',
        '2JR' => 'E02001121',
        '2JS' => 'E02001119',
        '2JT' => 'E02001121',
        '2JU' => 'E02001121',
        '2JW' => 'E02001119',
        '2JX' => 'E02001121',
        '2JY' => 'E02001121',
        '2JZ' => 'E02001121',
        '2LA' => 'E02001121',
        '2LB' => 'E02001121',
        '2LD' => 'E02001126',
        '2LE' => 'E02001126',
        '2LF' => 'E02001126',
        '2LG' => 'E02001126',
        '2LH' => 'E02001126',
        '2LJ' => 'E02001126',
        '2LL' => 'E02001126',
        '2LN' => 'E02001126',
        '2LP' => 'E02001126',
        '2LQ' => 'E02001126',
        '2LR' => 'E02001126',
        '2LS' => 'E02001126',
        '2LT' => 'E02001126',
        '2LU' => 'E02001121',
        '2LW' => 'E02001126',
        '2LX' => 'E02001126',
        '2LY' => 'E02001121',
        '2LZ' => 'E02001121',
        '2NA' => 'E02001126',
        '2NB' => 'E02001126',
        '2ND' => 'E02001126',
        '2NE' => 'E02001126',
        '2NF' => 'E02001126',
        '2NG' => 'E02001126',
        '2NH' => 'E02001126',
        '2NJ' => 'E02001126',
        '2NL' => 'E02001126',
        '2NN' => 'E02001126',
        '2NP' => 'E02001126',
        '2NQ' => 'E02001126',
        '2NR' => 'E02001126',
        '2NS' => 'E02001126',
        '2NT' => 'E02001126',
        '2NU' => 'E02001126',
        '2NW' => 'E02001126',
        '2NX' => 'E02001126',
        '2NY' => 'E02001126',
        '2NZ' => 'E02001126',
        '2PA' => 'E02001119',
        '2PB' => 'E02001126',
        '2PD' => 'E02001126',
        '2PE' => 'E02001126',
        '2PF' => 'E02001126',
        '2PH' => 'E02001126',
        '2PJ' => 'E02001126',
        '2PL' => 'E02001126',
        '2PN' => 'E02001126',
        '2PP' => 'E02001126',
        '2PR' => 'E02001126',
        '2PS' => 'E02001126',
        '2PT' => 'E02001126',
        '2PU' => 'E02001126',
        '2PW' => 'E02001126',
        '2PX' => 'E02001126',
        '2PY' => 'E02001126',
        '2PZ' => 'E02001126',
        '2QA' => 'E02001126',
        '2QB' => 'E02001126',
        '2QD' => 'E02001126',
        '2QE' => 'E02001126',
        '2QF' => 'E02001126',
        '2QG' => 'E02001126',
        '2QH' => 'E02001126',
        '2QJ' => 'E02001126',
        '2QL' => 'E02001126',
        '2QN' => 'E02001126',
        '2QP' => 'E02001126',
        '2QQ' => 'E02001126',
        '2QR' => 'E02001126',
        '2QS' => 'E02001126',
        '2QW' => 'E02001126',
        '2RA' => 'E02001126',
        '2RB' => 'E02001126',
        '2RD' => 'E02001126',
        '2RE' => 'E02001126',
        '2RF' => 'E02001126',
        '2RG' => 'E02001126',
        '2RH' => 'E02001126',
        '2RJ' => 'E02001126',
        '2RL' => 'E02001126',
        '2RN' => 'E02001126',
        '2RP' => 'E02001126',
        '2RQ' => 'E02001126',
        '2RR' => 'E02001130',
        '2RS' => 'E02001130',
        '2RT' => 'E02001130',
        '2RW' => 'E02001126',
        '2RX' => 'E02001126',
        '2RY' => 'E02001126',
        '2RZ' => 'E02001126',
        '2SA' => 'E02001126',
        '2SB' => 'E02001126',
        '2SD' => 'E02001126',
        '2SE' => 'E02001126',
        '2SF' => 'E02001126',
        '2SG' => 'E02001126',
        '2SH' => 'E02001126',
        '2SJ' => 'E02001126',
        '2SL' => 'E02001126',
        '2SN' => 'E02001126',
        '2SP' => 'E02001126',
        '2SQ' => 'E02001126',
        '2SR' => 'E02001126',
        '2ST' => 'E02001126',
        '2SU' => 'E02001126',
        '2SW' => 'E02001126',
        '2SX' => 'E02001126',
        '2SY' => 'E02001126',
        '2SZ' => 'E02001126',
        '2TA' => 'E02001126',
        '2TB' => 'E02001130',
        '2TD' => 'E02001130',
        '2TE' => 'E02001130',
        '2TF' => 'E02001130',
        '2TG' => 'E02001130',
        '2TH' => 'E02001130',
        '2TJ' => 'E02001130',
        '2TL' => 'E02001130',
        '2TN' => 'E02001130',
        '2TP' => 'E02001130',
        '2TQ' => 'E02001130',
        '2TR' => 'E02001130',
        '2TS' => 'E02001130',
        '2TT' => 'E02001130',
        '2TU' => 'E02001130',
        '2TW' => 'E02001130',
        '2TX' => 'E02001130',
        '2TY' => 'E02001130',
        '2TZ' => 'E02001130',
        '2UA' => 'E02001130',
        '2UB' => 'E02001130',
        '2UF' => 'E02001119',
        '2UJ' => 'E02001121',
        '2UL' => 'E02001121',
        '2WU' => 'E02001119',
        '2WW' => 'E02001119',
        '2WX' => 'E02001119',
        '2WY' => 'E02001119',
        '2WZ' => 'E02001119',
        '2XA' => 'E02001123',
        '2XB' => 'E02001123',
        '2XD' => 'E02001123',
        '2XE' => 'E02001123',
        '2XF' => 'E02001123',
        '2XG' => 'E02001123',
        '2XH' => 'E02001123',
        '2XL' => 'E02001123',
        '2XQ' => 'E02001123',
        '2YZ' => 'E02001119',
        '3AA' => 'E02001127',
        '3AB' => 'E02001127',
        '3AD' => 'E02001127',
        '3AE' => 'E02001127',
        '3AF' => 'E02001127',
        '3AG' => 'E02001127',
        '3AH' => 'E02001127',
        '3AJ' => 'E02001127',
        '3AL' => 'E02001127',
        '3AN' => 'E02001127',
        '3AP' => 'E02001127',
        '3AQ' => 'E02001127',
        '3AR' => 'E02001127',
        '3AS' => 'E02001127',
        '3AT' => 'E02001127',
        '3AU' => 'E02001127',
        '3AW' => 'E02001127',
        '3AX' => 'E02001127',
        '3AY' => 'E02001127',
        '3AZ' => 'E02001127',
        '3BA' => 'E02001127',
        '3BB' => 'E02001127',
        '3BD' => 'E02001127',
        '3BE' => 'E02001127',
        '3BF' => 'E02001127',
        '3BG' => 'E02001127',
        '3BH' => 'E02001127',
        '3BJ' => 'E02001127',
        '3BL' => 'E02001126',
        '3BN' => 'E02001127',
        '3BP' => 'E02001126',
        '3BQ' => 'E02001127',
        '3BS' => 'E02001127',
        '3BT' => 'E02001127',
        '3BU' => 'E02001126',
        '3BW' => 'E02001127',
        '3BX' => 'E02001126',
        '3BY' => 'E02001126',
        '3BZ' => 'E02001126',
        '3DA' => 'E02001126',
        '3DB' => 'E02001126',
        '3DD' => 'E02001121',
        '3DE' => 'E02001126',
        '3DF' => 'E02001126',
        '3DG' => 'E02001126',
        '3DH' => 'E02001126',
        '3DJ' => 'E02001126',
        '3DL' => 'E02001126',
        '3DN' => 'E02001126',
        '3DP' => 'E02001126',
        '3DQ' => 'E02001121',
        '3DR' => 'E02001126',
        '3DS' => 'E02001126',
        '3DT' => 'E02001126',
        '3DU' => 'E02001126',
        '3DW' => 'E02001126',
        '3DX' => 'E02001126',
        '3DY' => 'E02001126',
        '3DZ' => 'E02001126',
        '3EA' => 'E02001126',
        '3EB' => 'E02001126',
        '3ED' => 'E02001126',
        '3EE' => 'E02001126',
        '3EJ' => 'E02001126',
        '3EL' => 'E02001126',
        '3EN' => 'E02001126',
        '3EP' => 'E02001126',
        '3ER' => 'E02001126',
        '3ES' => 'E02001126',
        '3ET' => 'E02001126',
        '3EU' => 'E02001126',
        '3EW' => 'E02001126',
        '3EX' => 'E02001126',
        '3EY' => 'E02001126',
        '3EZ' => 'E02001126',
        '3FA' => 'E02001127',
        '3FB' => 'E02001119',
        '3FD' => 'E02001126',
        '3FE' => 'E02001127',
        '3FF' => 'E02001127',
        '3FG' => 'E02001119',
        '3HA' => 'E02001126',
        '3HB' => 'E02001126',
        '3HD' => 'E02001126',
        '3HE' => 'E02001126',
        '3HF' => 'E02001126',
        '3HG' => 'E02001126',
        '3HH' => 'E02001127',
        '3HJ' => 'E02001127',
        '3HN' => 'E02001126',
        '3HP' => 'E02001130',
        '3HR' => 'E02001130',
        '3HS' => 'E02001130',
        '3HT' => 'E02001130',
        '3HU' => 'E02001130',
        '3HW' => 'E02001126',
        '3HX' => 'E02001130',
        '3HY' => 'E02001126',
        '3HZ' => 'E02001130',
        '3JA' => 'E02001130',
        '3JB' => 'E02001130',
        '3JD' => 'E02001130',
        '3JE' => 'E02001130',
        '3JF' => 'E02001130',
        '3JG' => 'E02001130',
        '3JH' => 'E02001127',
        '3JJ' => 'E02001127',
        '3JL' => 'E02001127',
        '3JN' => 'E02001130',
        '3JP' => 'E02001130',
        '3JQ' => 'E02001127',
        '3JR' => 'E02001127',
        '3JS' => 'E02001130',
        '3JT' => 'E02001127',
        '3JU' => 'E02001127',
        '3JW' => 'E02001127',
        '3JX' => 'E02001127',
        '3JY' => 'E02001127',
        '3JZ' => 'E02001127',
        '3LA' => 'E02001127',
        '3LB' => 'E02001127',
        '3LD' => 'E02001127',
        '3LE' => 'E02001127',
        '3LF' => 'E02001127',
        '3LG' => 'E02001127',
        '3LH' => 'E02001127',
        '3LJ' => 'E02001127',
        '3LL' => 'E02001127',
        '3LN' => 'E02001127',
        '3LQ' => 'E02001127',
        '3LR' => 'E02001127',
        '3LS' => 'E02001127',
        '3LT' => 'E02001127',
        '3LU' => 'E02001128',
        '3LZ' => 'E02001128',
        '3NA' => 'E02001127',
        '3NB' => 'E02001128',
        '3NF' => 'E02001127',
        '3NG' => 'E02001127',
        '3NL' => 'E02001127',
        '3NN' => 'E02001127',
        '3NP' => 'E02001127',
        '3NQ' => 'E02001127',
        '3NR' => 'E02001127',
        '3NU' => 'E02001127',
        '3NW' => 'E02001127',
        '3NY' => 'E02001127',
        '3NZ' => 'E02001127',
        '3PA' => 'E02001127',
        '3PB' => 'E02001127',
        '3PD' => 'E02001127',
        '3PE' => 'E02001127',
        '3PF' => 'E02001127',
        '3PG' => 'E02001127',
        '3PH' => 'E02001128',
        '3PL' => 'E02001128',
        '3PN' => 'E02001128',
        '3PP' => 'E02001128',
        '3PQ' => 'E02001127',
        '3PR' => 'E02001128',
        '3PS' => 'E02001128',
        '3PT' => 'E02001128',
        '3PU' => 'E02001128',
        '3PW' => 'E02001128',
        '3PX' => 'E02001128',
        '3PY' => 'E02001128',
        '3PZ' => 'E02001128',
        '3QA' => 'E02001128',
        '3QB' => 'E02001128',
        '3QD' => 'E02001128',
        '3QE' => 'E02001128',
        '3QF' => 'E02001128',
        '3QG' => 'E02001128',
        '3QH' => 'E02001128',
        '3QJ' => 'E02001128',
        '3QL' => 'E02001128',
        '3QN' => 'E02001128',
        '3QP' => 'E02001128',
        '3QQ' => 'E02001128',
        '3QS' => 'E02001128',
        '3QU' => 'E02001128',
        '3QW' => 'E02001128',
        '3QX' => 'E02001128',
        '3QY' => 'E02001128',
        '3QZ' => 'E02001128',
        '3RA' => 'E02001128',
        '3RB' => 'E02001128',
        '3RD' => 'E02001128',
        '3RG' => 'E02001128',
        '3RH' => 'E02001128',
        '3RJ' => 'E02001128',
        '3RL' => 'E02001128',
        '3RN' => 'E02001128',
        '3RP' => 'E02001128',
        '3RQ' => 'E02001128',
        '3RR' => 'E02001127',
        '3RS' => 'E02001128',
        '3RT' => 'E02001127',
        '3RU' => 'E02001127',
        '3RW' => 'E02001127',
        '3RX' => 'E02001127',
        '3RY' => 'E02001127',
        '3RZ' => 'E02001127',
        '3SA' => 'E02001127',
        '3SB' => 'E02001127',
        '3SD' => 'E02001127',
        '3SE' => 'E02001127',
        '3SF' => 'E02001127',
        '3SG' => 'E02001127',
        '3SH' => 'E02001127',
        '3SJ' => 'E02001127',
        '3SL' => 'E02001127',
        '3SN' => 'E02001127',
        '3SP' => 'E02001127',
        '3SQ' => 'E02001127',
        '3SR' => 'E02001127',
        '3SS' => 'E02001127',
        '3ST' => 'E02001127',
        '3SU' => 'E02001128',
        '3SW' => 'E02001127',
        '3SX' => 'E02001128',
        '3SY' => 'E02001128',
        '3SZ' => 'E02001128',
        '3TA' => 'E02001127',
        '3TB' => 'E02001128',
        '3TD' => 'E02001128',
        '3TE' => 'E02001128',
        '3TH' => 'E02001127',
        '3TJ' => 'E02001127',
        '3TL' => 'E02001127',
        '3TN' => 'E02001127',
        '3TP' => 'E02001127',
        '3TR' => 'E02001127',
        '3TS' => 'E02001127',
        '3TT' => 'E02001127',
        '3TU' => 'E02001127',
        '3TW' => 'E02001127',
        '3TX' => 'E02001127',
        '3TY' => 'E02001127',
        '3TZ' => 'E02001127',
        '3UA' => 'E02001127',
        '3UB' => 'E02001127',
        '3UD' => 'E02001127',
        '3UE' => 'E02001127',
        '3UF' => 'E02001127',
        '3UG' => 'E02001126',
        '3UH' => 'E02001127',
        '3UJ' => 'E02001127',
        '3UL' => 'E02001127',
        '3UN' => 'E02001127',
        '3UP' => 'E02001127',
        '3UQ' => 'E02001127',
        '3UR' => 'E02001128',
        '3UT' => 'E02001127',
        '3UU' => 'E02001127',
        '3UW' => 'E02001127',
        '3UX' => 'E02001127',
        '3UY' => 'E02001127',
        '3UZ' => 'E02001127',
        '3WA' => 'E02001126',
        '3WB' => 'E02001126',
        '3WD' => 'E02001126',
        '3WE' => 'E02001126',
        '3WF' => 'E02001119',
        '3WG' => 'E02001126',
        '3WH' => 'E02001126',
        '3WJ' => 'E02001126',
        '3WL' => 'E02001126',
        '3WN' => 'E02001126',
        '3WP' => 'E02001119',
        '3WQ' => 'E02001126',
        '3WR' => 'E02001119',
        '3WS' => 'E02001119',
        '3WT' => 'E02001119',
        '3WU' => 'E02001119',
        '3WW' => 'E02001119',
        '3WX' => 'E02001119',
        '3WY' => 'E02001119',
        '3WZ' => 'E02001119',
        '3XA' => 'E02001124',
        '3XB' => 'E02001127',
        '3XD' => 'E02001128',
        '3XE' => 'E02001127',
        '3XF' => 'E02001127',
        '3XG' => 'E02001119',
        '3XH' => 'E02001119',
        '3XJ' => 'E02001119',
        '3XZ' => 'E02001119',
        '3YZ' => 'E02001119',
        '4AA' => 'E02006860',
        '4AB' => 'E02006860',
        '4AD' => 'E02006860',
        '4AE' => 'E02006860',
        '4AF' => 'E02006860',
        '4AG' => 'E02006860',
        '4AH' => 'E02006860',
        '4AJ' => 'E02006860',
        '4AL' => 'E02006860',
        '4AN' => 'E02006860',
        '4AP' => 'E02006860',
        '4AQ' => 'E02001119',
        '4AR' => 'E02006860',
        '4AS' => 'E02006860',
        '4AT' => 'E02006860',
        '4AU' => 'E02006860',
        '4AW' => 'E02001124',
        '4AX' => 'E02001124',
        '4AY' => 'E02006860',
        '4AZ' => 'E02006860',
        '4BA' => 'E02001121',
        '4BB' => 'E02006860',
        '4BD' => 'E02006860',
        '4BE' => 'E02006860',
        '4BF' => 'E02006860',
        '4BG' => 'E02006860',
        '4BH' => 'E02006860',
        '4BJ' => 'E02006860',
        '4BL' => 'E02006860',
        '4BN' => 'E02006860',
        '4BU' => 'E02006860',
        '4BW' => 'E02006860',
        '4BX' => 'E02006860',
        '4BY' => 'E02006860',
        '4BZ' => 'E02006860',
        '4DA' => 'E02006860',
        '4DB' => 'E02006860',
        '4DD' => 'E02006860',
        '4DE' => 'E02006860',
        '4DF' => 'E02006860',
        '4DG' => 'E02006860',
        '4DH' => 'E02006860',
        '4DJ' => 'E02006860',
        '4DL' => 'E02006860',
        '4DN' => 'E02006860',
        '4DP' => 'E02006860',
        '4DQ' => 'E02006860',
        '4DR' => 'E02006860',
        '4DS' => 'E02006860',
        '4DT' => 'E02006860',
        '4DU' => 'E02006860',
        '4DW' => 'E02006860',
        '4DX' => 'E02006860',
        '4DY' => 'E02006860',
        '4DZ' => 'E02006860',
        '4EA' => 'E02006860',
        '4EB' => 'E02006860',
        '4ED' => 'E02006860',
        '4EE' => 'E02006860',
        '4EF' => 'E02006860',
        '4EG' => 'E02006860',
        '4EH' => 'E02001128',
        '4EJ' => 'E02006860',
        '4EL' => 'E02006860',
        '4EN' => 'E02006860',
        '4EP' => 'E02006860',
        '4EQ' => 'E02006860',
        '4ER' => 'E02006860',
        '4ES' => 'E02006860',
        '4ET' => 'E02006860',
        '4EU' => 'E02006860',
        '4EW' => 'E02006860',
        '4EX' => 'E02006860',
        '4FA' => 'E02006860',
        '4FB' => 'E02001119',
        '4FD' => 'E02001124',
        '4FE' => 'E02001119',
        '4FF' => 'E02001124',
        '4FG' => 'E02001124',
        '4FH' => 'E02001124',
        '4FJ' => 'E02001124',
        '4FL' => 'E02001124',
        '4GW' => 'E02001119',
        '4GX' => 'E02001124',
        '4GY' => 'E02001119',
        '4GZ' => 'E02001119',
        '4HA' => 'E02001121',
        '4HB' => 'E02001121',
        '4HD' => 'E02001121',
        '4HE' => 'E02001121',
        '4HF' => 'E02001121',
        '4HG' => 'E02006860',
        '4HH' => 'E02001121',
        '4HJ' => 'E02001121',
        '4HL' => 'E02006860',
        '4HN' => 'E02006860',
        '4HP' => 'E02006860',
        '4HQ' => 'E02006860',
        '4HR' => 'E02006860',
        '4HS' => 'E02006860',
        '4HT' => 'E02006860',
        '4HU' => 'E02006860',
        '4HW' => 'E02001121',
        '4HX' => 'E02006860',
        '4HY' => 'E02006860',
        '4HZ' => 'E02006860',
        '4JA' => 'E02001127',
        '4JB' => 'E02001127',
        '4JD' => 'E02001127',
        '4JE' => 'E02006860',
        '4JF' => 'E02006860',
        '4JG' => 'E02001127',
        '4JH' => 'E02001127',
        '4JJ' => 'E02001127',
        '4JL' => 'E02001127',
        '4JN' => 'E02001127',
        '4JP' => 'E02001127',
        '4JQ' => 'E02001127',
        '4JR' => 'E02001127',
        '4JS' => 'E02001127',
        '4JT' => 'E02001127',
        '4JU' => 'E02001127',
        '4JW' => 'E02001127',
        '4JX' => 'E02001124',
        '4JY' => 'E02001127',
        '4JZ' => 'E02001127',
        '4LA' => 'E02001127',
        '4LB' => 'E02001127',
        '4LD' => 'E02001127',
        '4LE' => 'E02001127',
        '4LF' => 'E02001127',
        '4LG' => 'E02001124',
        '4LH' => 'E02006860',
        '4LJ' => 'E02006860',
        '4LL' => 'E02006860',
        '4LN' => 'E02001124',
        '4LP' => 'E02006860',
        '4LQ' => 'E02001124',
        '4LR' => 'E02006860',
        '4LS' => 'E02006860',
        '4LT' => 'E02006860',
        '4LU' => 'E02006860',
        '4LW' => 'E02006860',
        '4LX' => 'E02006860',
        '4LY' => 'E02006860',
        '4LZ' => 'E02006860',
        '4NA' => 'E02001124',
        '4NB' => 'E02001124',
        '4ND' => 'E02001124',
        '4NE' => 'E02001124',
        '4NF' => 'E02001124',
        '4NG' => 'E02001124',
        '4NH' => 'E02001124',
        '4NJ' => 'E02001124',
        '4NL' => 'E02001124',
        '4NN' => 'E02001124',
        '4NP' => 'E02001124',
        '4NQ' => 'E02001119',
        '4NR' => 'E02001124',
        '4NS' => 'E02001124',
        '4NT' => 'E02001124',
        '4NU' => 'E02001124',
        '4NW' => 'E02001124',
        '4NX' => 'E02001124',
        '4NY' => 'E02001124',
        '4NZ' => 'E02001124',
        '4PA' => 'E02001124',
        '4PB' => 'E02001124',
        '4PD' => 'E02001124',
        '4PE' => 'E02001124',
        '4PF' => 'E02001124',
        '4PG' => 'E02001124',
        '4PH' => 'E02001124',
        '4PJ' => 'E02001124',
        '4PL' => 'E02001124',
        '4PN' => 'E02001124',
        '4PP' => 'E02001124',
        '4PQ' => 'E02001124',
        '4PR' => 'E02001124',
        '4PS' => 'E02001124',
        '4PT' => 'E02001124',
        '4PU' => 'E02001124',
        '4PW' => 'E02001127',
        '4PX' => 'E02001124',
        '4PY' => 'E02001124',
        '4PZ' => 'E02006860',
        '4QA' => 'E02001124',
        '4QB' => 'E02001124',
        '4QE' => 'E02001128',
        '4QF' => 'E02001128',
        '4QG' => 'E02001124',
        '4QH' => 'E02001124',
        '4QJ' => 'E02001128',
        '4QL' => 'E02001128',
        '4QN' => 'E02001128',
        '4QP' => 'E02001128',
        '4QQ' => 'E02001124',
        '4QR' => 'E02001128',
        '4QS' => 'E02001128',
        '4QT' => 'E02001128',
        '4QU' => 'E02001128',
        '4QW' => 'E02001128',
        '4QX' => 'E02001128',
        '4QY' => 'E02001124',
        '4QZ' => 'E02001124',
        '4RA' => 'E02001124',
        '4RB' => 'E02001128',
        '4RD' => 'E02001128',
        '4RE' => 'E02001128',
        '4RF' => 'E02001128',
        '4RG' => 'E02001128',
        '4RH' => 'E02001128',
        '4RJ' => 'E02001128',
        '4RL' => 'E02001128',
        '4RN' => 'E02001128',
        '4RP' => 'E02001128',
        '4RQ' => 'E02001128',
        '4RR' => 'E02001128',
        '4RS' => 'E02001128',
        '4RT' => 'E02001124',
        '4RU' => 'E02001128',
        '4RW' => 'E02001128',
        '4RX' => 'E02001124',
        '4SA' => 'E02001128',
        '4SB' => 'E02001128',
        '4SD' => 'E02001128',
        '4SE' => 'E02001128',
        '4SF' => 'E02001128',
        '4SG' => 'E02001128',
        '4SH' => 'E02001128',
        '4SJ' => 'E02001128',
        '4SL' => 'E02001128',
        '4SN' => 'E02001128',
        '4SQ' => 'E02001128',
        '4SR' => 'E02001128',
        '4SS' => 'E02001128',
        '4ST' => 'E02001128',
        '4SU' => 'E02001128',
        '4TA' => 'E02001124',
        '4TB' => 'E02001124',
        '4TT' => 'E02001124',
        '4TY' => 'E02001119',
        '4TZ' => 'E02001124',
        '4UA' => 'E02001124',
        '4UB' => 'E02001124',
        '4UD' => 'E02001124',
        '4UE' => 'E02001124',
        '4UF' => 'E02001124',
        '4UG' => 'E02001124',
        '4UH' => 'E02001124',
        '4UJ' => 'E02001124',
        '4UL' => 'E02001124',
        '4UN' => 'E02001124',
        '4UP' => 'E02001124',
        '4UQ' => 'E02001124',
        '4UR' => 'E02001124',
        '4US' => 'E02001124',
        '4UT' => 'E02001124',
        '4UU' => 'E02001124',
        '4UW' => 'E02001124',
        '4UX' => 'E02001124',
        '4UY' => 'E02001124',
        '4UZ' => 'E02001124',
        '4WA' => 'E02001119',
        '4WW' => 'E02001124',
        '4WX' => 'E02001119',
        '4WY' => 'E02001119',
        '4WZ' => 'E02001124',
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
