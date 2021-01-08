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
final class DL8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005755',
        '1AB' => 'E02005755',
        '1AD' => 'E02005755',
        '1AE' => 'E02005755',
        '1AF' => 'E02005755',
        '1AG' => 'E02005755',
        '1AH' => 'E02005755',
        '1AJ' => 'E02005787',
        '1AL' => 'E02005755',
        '1AN' => 'E02005755',
        '1AP' => 'E02005755',
        '1AQ' => 'E02005755',
        '1AR' => 'E02005755',
        '1AS' => 'E02005755',
        '1AT' => 'E02005755',
        '1AU' => 'E02005755',
        '1AW' => 'E02005755',
        '1AX' => 'E02005755',
        '1AY' => 'E02005755',
        '1AZ' => 'E02005755',
        '1BA' => 'E02005755',
        '1BB' => 'E02005755',
        '1BD' => 'E02005755',
        '1BE' => 'E02005755',
        '1BF' => 'E02005787',
        '1BG' => 'E02005755',
        '1BH' => 'E02005755',
        '1BJ' => 'E02005755',
        '1BL' => 'E02005755',
        '1BN' => 'E02005755',
        '1BP' => 'E02005755',
        '1BQ' => 'E02005755',
        '1BW' => 'E02005755',
        '1BZ' => 'E02005755',
        '1DA' => 'E02005755',
        '1DB' => 'E02005755',
        '1DD' => 'E02005755',
        '1DE' => 'E02005755',
        '1DF' => 'E02005755',
        '1DG' => 'E02005787',
        '1DH' => 'E02005755',
        '1DJ' => 'E02005755',
        '1DL' => 'E02005755',
        '1DN' => 'E02005755',
        '1DP' => 'E02005755',
        '1DQ' => 'E02005755',
        '1DR' => 'E02005755',
        '1DS' => 'E02005755',
        '1DT' => 'E02005755',
        '1DU' => 'E02005755',
        '1DW' => 'E02005755',
        '1DX' => 'E02005755',
        '1DY' => 'E02005755',
        '1DZ' => 'E02005755',
        '1EA' => 'E02005755',
        '1EB' => 'E02005755',
        '1ED' => 'E02005755',
        '1EE' => 'E02005755',
        '1EF' => 'E02005755',
        '1EG' => 'E02005755',
        '1EH' => 'E02005755',
        '1EJ' => 'E02005755',
        '1EL' => 'E02005755',
        '1EN' => 'E02005755',
        '1EP' => 'E02005755',
        '1EQ' => 'E02005755',
        '1ER' => 'E02005755',
        '1ES' => 'E02005755',
        '1ET' => 'E02005755',
        '1EU' => 'E02005755',
        '1EW' => 'E02005755',
        '1EX' => 'E02005755',
        '1EY' => 'E02005755',
        '1EZ' => 'E02005755',
        '1FA' => 'E02005755',
        '1FB' => 'E02005755',
        '1FD' => 'E02005755',
        '1FE' => 'E02005755',
        '1FF' => 'E02005755',
        '1FG' => 'E02005755',
        '1FH' => 'E02005755',
        '1FJ' => 'E02005755',
        '1FL' => 'E02005755',
        '1FN' => 'E02005787',
        '1FP' => 'E02005787',
        '1FQ' => 'E02005755',
        '1FR' => 'E02005787',
        '1GY' => 'E02005755',
        '1GZ' => 'E02005755',
        '1HA' => 'E02005755',
        '1HB' => 'E02005755',
        '1HD' => 'E02005755',
        '1HE' => 'E02005755',
        '1HF' => 'E02005755',
        '1HG' => 'E02005755',
        '1HH' => 'E02005755',
        '1HJ' => 'E02005755',
        '1HL' => 'E02005755',
        '1HN' => 'E02005755',
        '1HP' => 'E02005755',
        '1HQ' => 'E02005755',
        '1HR' => 'E02005755',
        '1HS' => 'E02005755',
        '1HT' => 'E02005755',
        '1HU' => 'E02005755',
        '1HW' => 'E02005755',
        '1HX' => 'E02005755',
        '1HY' => 'E02005755',
        '1HZ' => 'E02005755',
        '1JA' => 'E02005755',
        '1JB' => 'E02005755',
        '1JD' => 'E02005755',
        '1JE' => 'E02005755',
        '1JF' => 'E02005755',
        '1JG' => 'E02005755',
        '1JH' => 'E02005755',
        '1JJ' => 'E02005787',
        '1JL' => 'E02005787',
        '1JN' => 'E02005787',
        '1JP' => 'E02005787',
        '1JQ' => 'E02005755',
        '1JR' => 'E02005787',
        '1JS' => 'E02005787',
        '1JT' => 'E02005787',
        '1JU' => 'E02005787',
        '1JW' => 'E02005787',
        '1JX' => 'E02005787',
        '1JY' => 'E02005787',
        '1JZ' => 'E02005755',
        '1LA' => 'E02005755',
        '1LB' => 'E02005755',
        '1LD' => 'E02005755',
        '1LE' => 'E02005787',
        '1LF' => 'E02005755',
        '1LG' => 'E02005755',
        '1LH' => 'E02005787',
        '1LJ' => 'E02005755',
        '1LL' => 'E02005787',
        '1LN' => 'E02005787',
        '1LP' => 'E02005787',
        '1LQ' => 'E02005755',
        '1LR' => 'E02005787',
        '1LS' => 'E02005787',
        '1LT' => 'E02005787',
        '1LU' => 'E02005787',
        '1LW' => 'E02005787',
        '1LX' => 'E02005787',
        '1LY' => 'E02005787',
        '1LZ' => 'E02005787',
        '1NA' => 'E02005787',
        '1NB' => 'E02005755',
        '1ND' => 'E02005787',
        '1NE' => 'E02005787',
        '1NF' => 'E02005787',
        '1NG' => 'E02005787',
        '1NH' => 'E02005787',
        '1NJ' => 'E02005787',
        '1NL' => 'E02005787',
        '1NN' => 'E02005787',
        '1NP' => 'E02005755',
        '1NQ' => 'E02005787',
        '1NR' => 'E02005755',
        '1NS' => 'E02005755',
        '1NT' => 'E02005755',
        '1NU' => 'E02005755',
        '1NW' => 'E02005755',
        '1NX' => 'E02005755',
        '1NY' => 'E02005755',
        '1NZ' => 'E02005787',
        '1PA' => 'E02005755',
        '1PB' => 'E02005755',
        '1PD' => 'E02005755',
        '1PE' => 'E02005755',
        '1PF' => 'E02005755',
        '1PG' => 'E02005755',
        '1PH' => 'E02005755',
        '1PJ' => 'E02005755',
        '1PL' => 'E02005755',
        '1PN' => 'E02005755',
        '1PP' => 'E02005787',
        '1PQ' => 'E02005755',
        '1PR' => 'E02005787',
        '1PS' => 'E02005755',
        '1PW' => 'E02005755',
        '1PX' => 'E02005787',
        '1PY' => 'E02005787',
        '1PZ' => 'E02005787',
        '1QA' => 'E02005787',
        '1QB' => 'E02005787',
        '1QD' => 'E02005787',
        '1QE' => 'E02005787',
        '1QF' => 'E02005787',
        '1QG' => 'E02005787',
        '1QH' => 'E02005787',
        '1QJ' => 'E02005787',
        '1QL' => 'E02005787',
        '1QN' => 'E02005787',
        '1QP' => 'E02005787',
        '1QQ' => 'E02005787',
        '1QR' => 'E02005787',
        '1QS' => 'E02005787',
        '1QT' => 'E02005787',
        '1QU' => 'E02005787',
        '1QW' => 'E02005787',
        '1QX' => 'E02005787',
        '1QY' => 'E02005787',
        '1QZ' => 'E02005787',
        '1RD' => 'E02005755',
        '1RE' => 'E02005755',
        '1RF' => 'E02005755',
        '1RG' => 'E02005755',
        '1RH' => 'E02005755',
        '1RJ' => 'E02005755',
        '1RL' => 'E02005755',
        '1RN' => 'E02005755',
        '1RP' => 'E02005755',
        '1RQ' => 'E02005755',
        '1RR' => 'E02005755',
        '1RS' => 'E02005755',
        '1RT' => 'E02005755',
        '1RU' => 'E02005755',
        '1RW' => 'E02005755',
        '1RX' => 'E02005787',
        '1RY' => 'E02005787',
        '1RZ' => 'E02005787',
        '1SA' => 'E02005787',
        '1SB' => 'E02005787',
        '1SD' => 'E02005787',
        '1SE' => 'E02005787',
        '1SF' => 'E02005787',
        '1SG' => 'E02005787',
        '1SH' => 'E02005787',
        '1SJ' => 'E02005787',
        '1SL' => 'E02005787',
        '1SN' => 'E02005787',
        '1SP' => 'E02005787',
        '1SQ' => 'E02005787',
        '1SR' => 'E02005787',
        '1SS' => 'E02005787',
        '1ST' => 'E02005787',
        '1SU' => 'E02005787',
        '1SW' => 'E02005787',
        '1SX' => 'E02005787',
        '1SY' => 'E02005787',
        '1SZ' => 'E02005787',
        '1TA' => 'E02005787',
        '1TB' => 'E02005787',
        '1TD' => 'E02005787',
        '1TE' => 'E02005787',
        '1TF' => 'E02005787',
        '1TG' => 'E02005787',
        '1TH' => 'E02005755',
        '1TJ' => 'E02005787',
        '1TL' => 'E02005755',
        '1TN' => 'E02005755',
        '1TP' => 'E02005787',
        '1TQ' => 'E02005787',
        '1TR' => 'E02005755',
        '1TS' => 'E02005755',
        '1TT' => 'E02005755',
        '1TU' => 'E02005755',
        '1TW' => 'E02005787',
        '1TX' => 'E02005755',
        '1TY' => 'E02005755',
        '1TZ' => 'E02005787',
        '1UE' => 'E02005755',
        '1UF' => 'E02005755',
        '1UG' => 'E02005755',
        '1UH' => 'E02005755',
        '1UJ' => 'E02005755',
        '1UL' => 'E02005755',
        '1UN' => 'E02005755',
        '1UP' => 'E02005755',
        '1UQ' => 'E02005755',
        '1UR' => 'E02005755',
        '1UT' => 'E02005755',
        '1UU' => 'E02005755',
        '1UW' => 'E02005755',
        '1UX' => 'E02005755',
        '1UZ' => 'E02005755',
        '1XA' => 'E02005755',
        '1XB' => 'E02005755',
        '1XD' => 'E02005753',
        '1XE' => 'E02005753',
        '1XF' => 'E02005755',
        '1XG' => 'E02005755',
        '1XH' => 'E02005755',
        '1XJ' => 'E02005755',
        '1XL' => 'E02005755',
        '1XN' => 'E02005755',
        '1XP' => 'E02005755',
        '1XQ' => 'E02005755',
        '1XR' => 'E02005755',
        '1XS' => 'E02005755',
        '1XT' => 'E02005753',
        '1YA' => 'E02005755',
        '1YJ' => 'E02005753',
        '1YL' => 'E02005753',
        '1YN' => 'E02005755',
        '1YP' => 'E02005755',
        '1YR' => 'E02005753',
        '1YS' => 'E02005755',
        '1YT' => 'E02005755',
        '1YU' => 'E02005755',
        '1YW' => 'E02005755',
        '1YX' => 'E02005755',
        '1YY' => 'E02005755',
        '1YZ' => 'E02005755',
        '2AA' => 'E02005755',
        '2AB' => 'E02005755',
        '2AD' => 'E02005755',
        '2AE' => 'E02005755',
        '2AF' => 'E02005755',
        '2AG' => 'E02005755',
        '2AH' => 'E02005755',
        '2AJ' => 'E02005755',
        '2AL' => 'E02005755',
        '2AN' => 'E02005755',
        '2AP' => 'E02005755',
        '2AQ' => 'E02005755',
        '2AR' => 'E02005755',
        '2AS' => 'E02005755',
        '2AT' => 'E02005755',
        '2AU' => 'E02005755',
        '2AW' => 'E02005755',
        '2AX' => 'E02005755',
        '2AY' => 'E02005755',
        '2AZ' => 'E02005755',
        '2BA' => 'E02005755',
        '2BB' => 'E02005755',
        '2BD' => 'E02005755',
        '2BE' => 'E02005755',
        '2BF' => 'E02005755',
        '2BG' => 'E02005755',
        '2BH' => 'E02005755',
        '2BJ' => 'E02005755',
        '2BL' => 'E02005755',
        '2BN' => 'E02005755',
        '2BP' => 'E02005755',
        '2BQ' => 'E02005755',
        '2BW' => 'E02005755',
        '2DA' => 'E02005755',
        '2DB' => 'E02005755',
        '2DD' => 'E02005755',
        '2DE' => 'E02005755',
        '2DF' => 'E02005755',
        '2DG' => 'E02005755',
        '2DH' => 'E02005755',
        '2DJ' => 'E02005755',
        '2DL' => 'E02005755',
        '2DN' => 'E02005755',
        '2DP' => 'E02005755',
        '2DQ' => 'E02005755',
        '2DR' => 'E02005755',
        '2DS' => 'E02005755',
        '2DT' => 'E02005755',
        '2DU' => 'E02005755',
        '2DW' => 'E02005755',
        '2DX' => 'E02005755',
        '2DY' => 'E02005755',
        '2DZ' => 'E02005755',
        '2EA' => 'E02005755',
        '2EB' => 'E02005755',
        '2ED' => 'E02005755',
        '2EE' => 'E02005755',
        '2EF' => 'E02005755',
        '2EG' => 'E02005755',
        '2EH' => 'E02005755',
        '2EJ' => 'E02005755',
        '2EL' => 'E02005755',
        '2EN' => 'E02005755',
        '2EP' => 'E02005755',
        '2EQ' => 'E02005755',
        '2ER' => 'E02005755',
        '2ES' => 'E02005755',
        '2ET' => 'E02005755',
        '2EU' => 'E02005755',
        '2EW' => 'E02005755',
        '2EX' => 'E02005756',
        '2EY' => 'E02005756',
        '2EZ' => 'E02005756',
        '2FA' => 'E02005755',
        '2GA' => 'E02005756',
        '2HA' => 'E02005756',
        '2HB' => 'E02005756',
        '2HD' => 'E02005756',
        '2HE' => 'E02005756',
        '2HF' => 'E02005756',
        '2HG' => 'E02005756',
        '2HH' => 'E02005756',
        '2HJ' => 'E02005756',
        '2HL' => 'E02005756',
        '2HN' => 'E02005756',
        '2HP' => 'E02005756',
        '2HQ' => 'E02005756',
        '2HR' => 'E02005756',
        '2HS' => 'E02005756',
        '2HT' => 'E02005756',
        '2HU' => 'E02005756',
        '2HW' => 'E02005756',
        '2HX' => 'E02005756',
        '2HY' => 'E02005756',
        '2HZ' => 'E02005756',
        '2JA' => 'E02005756',
        '2JB' => 'E02005756',
        '2JD' => 'E02005756',
        '2JE' => 'E02005756',
        '2JF' => 'E02005756',
        '2JG' => 'E02005756',
        '2JH' => 'E02005756',
        '2JJ' => 'E02005756',
        '2JL' => 'E02005756',
        '2JN' => 'E02005756',
        '2JP' => 'E02005756',
        '2JQ' => 'E02005756',
        '2JR' => 'E02005756',
        '2JS' => 'E02005756',
        '2JT' => 'E02005756',
        '2JU' => 'E02005756',
        '2JW' => 'E02005756',
        '2LA' => 'E02005756',
        '2LB' => 'E02005756',
        '2LD' => 'E02005756',
        '2LE' => 'E02005756',
        '2LF' => 'E02005756',
        '2LG' => 'E02005756',
        '2LH' => 'E02005756',
        '2LJ' => 'E02005756',
        '2LL' => 'E02005756',
        '2LN' => 'E02005756',
        '2LP' => 'E02005756',
        '2LQ' => 'E02005756',
        '2LR' => 'E02005756',
        '2LS' => 'E02005756',
        '2LT' => 'E02005756',
        '2LU' => 'E02005756',
        '2LW' => 'E02005756',
        '2LX' => 'E02005756',
        '2LY' => 'E02005756',
        '2LZ' => 'E02005756',
        '2NA' => 'E02005756',
        '2NB' => 'E02005756',
        '2ND' => 'E02005756',
        '2NE' => 'E02005756',
        '2NF' => 'E02005756',
        '2NG' => 'E02005756',
        '2NH' => 'E02005756',
        '2NJ' => 'E02005756',
        '2NL' => 'E02005756',
        '2NN' => 'E02005756',
        '2NP' => 'E02005756',
        '2NQ' => 'E02005756',
        '2NR' => 'E02005756',
        '2NS' => 'E02005756',
        '2NT' => 'E02005756',
        '2NU' => 'E02005756',
        '2NW' => 'E02005756',
        '2NX' => 'E02005756',
        '2NY' => 'E02005756',
        '2PA' => 'E02005756',
        '2PD' => 'E02005756',
        '2PE' => 'E02005755',
        '2PF' => 'E02005756',
        '2PG' => 'E02005756',
        '2PL' => 'E02005756',
        '2PN' => 'E02005755',
        '2PP' => 'E02005755',
        '2PQ' => 'E02005756',
        '2PR' => 'E02005755',
        '2PS' => 'E02005755',
        '2PT' => 'E02005755',
        '2PU' => 'E02005755',
        '2PW' => 'E02005755',
        '2PX' => 'E02005756',
        '2PY' => 'E02005756',
        '2PZ' => 'E02005756',
        '2QA' => 'E02005756',
        '2QB' => 'E02005756',
        '2QD' => 'E02005756',
        '2QE' => 'E02005756',
        '2QF' => 'E02005756',
        '2QG' => 'E02005756',
        '2QH' => 'E02005756',
        '2QJ' => 'E02005756',
        '2QL' => 'E02005756',
        '2QN' => 'E02005756',
        '2QP' => 'E02005756',
        '2QQ' => 'E02005756',
        '2QR' => 'E02005756',
        '2QS' => 'E02005756',
        '2QT' => 'E02005756',
        '2QU' => 'E02005756',
        '2QW' => 'E02005756',
        '2QX' => 'E02005756',
        '2QY' => 'E02005756',
        '2QZ' => 'E02005756',
        '2RA' => 'E02005756',
        '2RB' => 'E02005756',
        '2RD' => 'E02005756',
        '2RE' => 'E02005756',
        '2RF' => 'E02005756',
        '2RG' => 'E02005756',
        '2RH' => 'E02005756',
        '2RJ' => 'E02005756',
        '2RL' => 'E02005756',
        '2RN' => 'E02005756',
        '2RP' => 'E02005755',
        '2RQ' => 'E02005756',
        '2RR' => 'E02005755',
        '2RS' => 'E02005755',
        '2RT' => 'E02005755',
        '2RU' => 'E02005756',
        '2RW' => 'E02005756',
        '2RX' => 'E02005756',
        '2RY' => 'E02005756',
        '2RZ' => 'E02005756',
        '2SD' => 'E02005755',
        '2SE' => 'E02005755',
        '2SF' => 'E02005755',
        '2SH' => 'E02005755',
        '2SJ' => 'E02005755',
        '2SL' => 'E02005755',
        '2SN' => 'E02005755',
        '2SP' => 'E02005755',
        '2SQ' => 'E02005755',
        '2ST' => 'E02005755',
        '2SU' => 'E02005755',
        '2SW' => 'E02005755',
        '2SX' => 'E02005755',
        '2SY' => 'E02005755',
        '2SZ' => 'E02005755',
        '2TA' => 'E02005755',
        '2TB' => 'E02005755',
        '2TD' => 'E02005755',
        '2TE' => 'E02005755',
        '2TF' => 'E02005755',
        '2TG' => 'E02005755',
        '2TH' => 'E02005755',
        '2TJ' => 'E02005755',
        '2TL' => 'E02005755',
        '2TN' => 'E02005755',
        '2TP' => 'E02005755',
        '2TQ' => 'E02005755',
        '2TR' => 'E02005755',
        '2TT' => 'E02005755',
        '2TU' => 'E02005755',
        '2TW' => 'E02005755',
        '2UA' => 'E02005755',
        '2UB' => 'E02005755',
        '2UD' => 'E02005755',
        '2UE' => 'E02005755',
        '2UF' => 'E02005755',
        '2UG' => 'E02005755',
        '2UH' => 'E02005755',
        '2UJ' => 'E02005755',
        '2UL' => 'E02005755',
        '2UN' => 'E02005755',
        '2UQ' => 'E02005755',
        '2UW' => 'E02005755',
        '2WY' => 'E02005755',
        '2WZ' => 'E02005755',
        '2YT' => 'E02005753',
        '2YU' => 'E02005753',
        '2YX' => 'E02005753',
        '2YY' => 'E02005755',
        '2YZ' => 'E02005753',
        '3AA' => 'E02005786',
        '3AB' => 'E02005786',
        '3AD' => 'E02005786',
        '3AE' => 'E02005786',
        '3AF' => 'E02005786',
        '3AG' => 'E02005786',
        '3AH' => 'E02005786',
        '3AJ' => 'E02005786',
        '3AL' => 'E02005786',
        '3AN' => 'E02005786',
        '3AP' => 'E02005786',
        '3AQ' => 'E02005786',
        '3AR' => 'E02005786',
        '3AS' => 'E02005786',
        '3AT' => 'E02005786',
        '3AU' => 'E02005786',
        '3AW' => 'E02005786',
        '3BD' => 'E02005786',
        '3BE' => 'E02005786',
        '3BJ' => 'E02005786',
        '3BL' => 'E02005786',
        '3BN' => 'E02005786',
        '3BP' => 'E02005786',
        '3BS' => 'E02005786',
        '3BW' => 'E02005786',
        '3DA' => 'E02005786',
        '3DB' => 'E02005786',
        '3DD' => 'E02005786',
        '3DE' => 'E02005786',
        '3DF' => 'E02005786',
        '3DG' => 'E02005786',
        '3DH' => 'E02005786',
        '3DJ' => 'E02005786',
        '3DL' => 'E02005786',
        '3DN' => 'E02005786',
        '3DQ' => 'E02005786',
        '3DX' => 'E02005786',
        '3DY' => 'E02005786',
        '3DZ' => 'E02005786',
        '3EA' => 'E02005786',
        '3EB' => 'E02005786',
        '3ED' => 'E02005786',
        '3EE' => 'E02005786',
        '3EF' => 'E02005786',
        '3EG' => 'E02005786',
        '3EH' => 'E02005786',
        '3EJ' => 'E02005786',
        '3EL' => 'E02005786',
        '3EN' => 'E02005786',
        '3EP' => 'E02005786',
        '3EQ' => 'E02005786',
        '3ER' => 'E02005786',
        '3ES' => 'E02005786',
        '3ET' => 'E02005786',
        '3EU' => 'E02005786',
        '3EW' => 'E02005786',
        '3EX' => 'E02005786',
        '3EY' => 'E02005786',
        '3EZ' => 'E02005786',
        '3FB' => 'E02005786',
        '3FD' => 'E02005786',
        '3GA' => 'E02005786',
        '3HA' => 'E02005786',
        '3HB' => 'E02005786',
        '3HD' => 'E02005786',
        '3HE' => 'E02005786',
        '3HF' => 'E02005786',
        '3HG' => 'E02005786',
        '3HH' => 'E02005786',
        '3HJ' => 'E02005786',
        '3HL' => 'E02005786',
        '3HN' => 'E02005786',
        '3HP' => 'E02005786',
        '3HQ' => 'E02005786',
        '3HR' => 'E02005786',
        '3HS' => 'E02005786',
        '3HT' => 'E02005786',
        '3HU' => 'E02005786',
        '3HW' => 'E02005786',
        '3HX' => 'E02005786',
        '3HY' => 'E02005786',
        '3HZ' => 'E02005786',
        '3JA' => 'E02005786',
        '3JB' => 'E02005786',
        '3JD' => 'E02005786',
        '3JE' => 'E02005786',
        '3JF' => 'E02005786',
        '3JG' => 'E02005786',
        '3JH' => 'E02005786',
        '3JJ' => 'E02005786',
        '3JL' => 'E02005786',
        '3JP' => 'E02005786',
        '3JQ' => 'E02005786',
        '3JR' => 'E02005786',
        '3JS' => 'E02005786',
        '3JT' => 'E02005786',
        '3JW' => 'E02005786',
        '3JX' => 'E02005786',
        '3JY' => 'E02005786',
        '3JZ' => 'E02005786',
        '3LA' => 'E02005786',
        '3LB' => 'E02005786',
        '3LH' => 'E02005786',
        '3LJ' => 'E02005786',
        '3LL' => 'E02005786',
        '3LN' => 'E02005786',
        '3LP' => 'E02005786',
        '3LQ' => 'E02005786',
        '3LR' => 'E02005786',
        '3LS' => 'E02005786',
        '3LT' => 'E02005786',
        '3LU' => 'E02005786',
        '3LW' => 'E02005786',
        '3LX' => 'E02005786',
        '3LY' => 'E02005786',
        '3LZ' => 'E02005786',
        '3NA' => 'E02005786',
        '3NB' => 'E02005786',
        '3ND' => 'E02005786',
        '3NH' => 'E02005786',
        '3NJ' => 'E02005786',
        '3NL' => 'E02005786',
        '3NN' => 'E02005786',
        '3NP' => 'E02005786',
        '3NR' => 'E02005786',
        '3NS' => 'E02005786',
        '3NT' => 'E02005786',
        '3NU' => 'E02005786',
        '3NW' => 'E02005786',
        '3NX' => 'E02005786',
        '3PA' => 'E02005786',
        '3PB' => 'E02005786',
        '3PD' => 'E02005786',
        '3PE' => 'E02005786',
        '3PF' => 'E02005786',
        '3PG' => 'E02005786',
        '3PH' => 'E02005786',
        '3PJ' => 'E02005786',
        '3PL' => 'E02005786',
        '3PN' => 'E02005786',
        '3PP' => 'E02005786',
        '3PQ' => 'E02005786',
        '3PR' => 'E02005786',
        '3PS' => 'E02005786',
        '3PT' => 'E02005786',
        '3PU' => 'E02005786',
        '3PW' => 'E02005786',
        '3PX' => 'E02005786',
        '3PY' => 'E02005786',
        '3PZ' => 'E02005786',
        '3QA' => 'E02005786',
        '3QB' => 'E02005786',
        '3QD' => 'E02005786',
        '3QE' => 'E02005786',
        '3QF' => 'E02005786',
        '3QG' => 'E02005786',
        '3QH' => 'E02005786',
        '3QJ' => 'E02005786',
        '3QL' => 'E02005786',
        '3QN' => 'E02005786',
        '3QP' => 'E02005786',
        '3QQ' => 'E02005786',
        '3QR' => 'E02005786',
        '3QS' => 'E02005786',
        '3QT' => 'E02005786',
        '3QU' => 'E02005786',
        '3QW' => 'E02005786',
        '3QX' => 'E02005786',
        '3QY' => 'E02005786',
        '3QZ' => 'E02005786',
        '3RA' => 'E02005786',
        '3RB' => 'E02005786',
        '3RD' => 'E02005786',
        '3RE' => 'E02005786',
        '3RF' => 'E02005786',
        '3RG' => 'E02005786',
        '3RH' => 'E02005786',
        '3RJ' => 'E02005786',
        '3RL' => 'E02005786',
        '3RN' => 'E02005786',
        '3RP' => 'E02005786',
        '3RQ' => 'E02005786',
        '3RR' => 'E02005786',
        '3RS' => 'E02005786',
        '3RT' => 'E02005786',
        '3RU' => 'E02005786',
        '3RW' => 'E02005786',
        '3RX' => 'E02005786',
        '3RY' => 'E02005786',
        '3RZ' => 'E02005786',
        '3SA' => 'E02005786',
        '3SB' => 'E02005786',
        '3SD' => 'E02005786',
        '3SE' => 'E02005786',
        '3SF' => 'E02005786',
        '3SG' => 'E02005786',
        '3SH' => 'E02005786',
        '3SJ' => 'E02005786',
        '3SL' => 'E02005786',
        '3SN' => 'E02005786',
        '3SP' => 'E02005786',
        '3SQ' => 'E02005786',
        '3SR' => 'E02005786',
        '3SS' => 'E02005786',
        '3ST' => 'E02005786',
        '3SU' => 'E02005786',
        '3SW' => 'E02005786',
        '3SX' => 'E02005786',
        '3SY' => 'E02005786',
        '3SZ' => 'E02005786',
        '3TA' => 'E02005786',
        '3TB' => 'E02005786',
        '3TD' => 'E02005786',
        '3TE' => 'E02005786',
        '3TF' => 'E02005786',
        '3TG' => 'E02005786',
        '3TH' => 'E02005787',
        '3TJ' => 'E02005786',
        '3TQ' => 'E02005786',
        '3UW' => 'E02005786',
        '3UZ' => 'E02005786',
        '3WY' => 'E02005786',
        '3WZ' => 'E02005787',
        '3YS' => 'E02005787',
        '3YT' => 'E02005787',
        '3YU' => 'E02005787',
        '3YW' => 'E02005787',
        '3YX' => 'E02005786',
        '3YY' => 'E02005787',
        '3YZ' => 'E02005786',
        '4AA' => 'E02005787',
        '4AB' => 'E02005787',
        '4AD' => 'E02005787',
        '4AE' => 'E02005787',
        '4AF' => 'E02005787',
        '4AG' => 'E02005787',
        '4AH' => 'E02005787',
        '4AJ' => 'E02005787',
        '4AL' => 'E02005787',
        '4AN' => 'E02005787',
        '4AP' => 'E02005787',
        '4AQ' => 'E02005787',
        '4AR' => 'E02005787',
        '4AS' => 'E02005787',
        '4AT' => 'E02005787',
        '4AY' => 'E02005786',
        '4AZ' => 'E02005786',
        '4BA' => 'E02005786',
        '4BB' => 'E02005786',
        '4BD' => 'E02005786',
        '4BE' => 'E02005786',
        '4BG' => 'E02005786',
        '4DA' => 'E02005787',
        '4DB' => 'E02005787',
        '4DD' => 'E02005787',
        '4DE' => 'E02005787',
        '4DF' => 'E02005787',
        '4DG' => 'E02005787',
        '4DH' => 'E02005787',
        '4DJ' => 'E02005787',
        '4DL' => 'E02005787',
        '4DN' => 'E02005787',
        '4DP' => 'E02005787',
        '4DQ' => 'E02005787',
        '4DR' => 'E02005787',
        '4DS' => 'E02005787',
        '4DT' => 'E02005787',
        '4DU' => 'E02005787',
        '4DW' => 'E02005786',
        '4DY' => 'E02005787',
        '4DZ' => 'E02005787',
        '4EA' => 'E02005787',
        '4EB' => 'E02005787',
        '4ED' => 'E02005787',
        '4EE' => 'E02005787',
        '4EF' => 'E02005787',
        '4EG' => 'E02005787',
        '4EH' => 'E02005787',
        '4EJ' => 'E02005787',
        '4EL' => 'E02005787',
        '4EN' => 'E02005787',
        '4EP' => 'E02005787',
        '4EQ' => 'E02005787',
        '4ER' => 'E02005787',
        '4ES' => 'E02005787',
        '4ET' => 'E02005787',
        '4EU' => 'E02005787',
        '4EW' => 'E02005787',
        '4EX' => 'E02005787',
        '4EY' => 'E02005787',
        '4EZ' => 'E02005787',
        '4FB' => 'E02005787',
        '4HA' => 'E02005787',
        '4HB' => 'E02005787',
        '4HD' => 'E02005787',
        '4HE' => 'E02005787',
        '4HF' => 'E02005787',
        '4HG' => 'E02005787',
        '4HJ' => 'E02005787',
        '4HL' => 'E02005787',
        '4HN' => 'E02005787',
        '4HP' => 'E02005787',
        '4HR' => 'E02005787',
        '4HS' => 'E02005787',
        '4HT' => 'E02005787',
        '4HU' => 'E02005787',
        '4HW' => 'E02005787',
        '4HX' => 'E02005787',
        '4HY' => 'E02005787',
        '4HZ' => 'E02005787',
        '4JA' => 'E02005787',
        '4JB' => 'E02005786',
        '4JD' => 'E02005786',
        '4JL' => 'E02005786',
        '4JN' => 'E02005786',
        '4JP' => 'E02005786',
        '4JR' => 'E02005786',
        '4JS' => 'E02005786',
        '4JT' => 'E02005786',
        '4JU' => 'E02005786',
        '4JW' => 'E02005786',
        '4JX' => 'E02005786',
        '4JY' => 'E02005786',
        '4JZ' => 'E02005786',
        '4LA' => 'E02005786',
        '4LB' => 'E02005786',
        '4LD' => 'E02005786',
        '4LE' => 'E02005786',
        '4LF' => 'E02005786',
        '4LG' => 'E02005786',
        '4LP' => 'E02005786',
        '4LQ' => 'E02005786',
        '4LR' => 'E02005786',
        '4LS' => 'E02005786',
        '4LT' => 'E02005786',
        '4LU' => 'E02005786',
        '4LX' => 'E02005786',
        '4LY' => 'E02005786',
        '4LZ' => 'E02005786',
        '4NA' => 'E02005786',
        '4NB' => 'E02005786',
        '4ND' => 'E02005786',
        '4NE' => 'E02005786',
        '4NF' => 'E02005786',
        '4NG' => 'E02005786',
        '4NL' => 'E02005787',
        '4NP' => 'E02005787',
        '4NR' => 'E02005787',
        '4NS' => 'E02005787',
        '4NT' => 'E02005787',
        '4NU' => 'E02005787',
        '4NX' => 'E02005787',
        '4PA' => 'E02005787',
        '4PB' => 'E02005787',
        '4PD' => 'E02005787',
        '4PE' => 'E02005787',
        '4PF' => 'E02005787',
        '4PG' => 'E02005787',
        '4PH' => 'E02005787',
        '4PJ' => 'E02005787',
        '4PL' => 'E02005787',
        '4PN' => 'E02005787',
        '4PP' => 'E02005787',
        '4PQ' => 'E02005787',
        '4PR' => 'E02005787',
        '4PS' => 'E02005787',
        '4PT' => 'E02005787',
        '4PU' => 'E02005787',
        '4PW' => 'E02005787',
        '4PX' => 'E02005787',
        '4PY' => 'E02005787',
        '4PZ' => 'E02005787',
        '4QA' => 'E02005787',
        '4QF' => 'E02005787',
        '4QG' => 'E02005787',
        '4QH' => 'E02005787',
        '4QJ' => 'E02005787',
        '4QL' => 'E02005787',
        '4QN' => 'E02005787',
        '4QP' => 'E02005787',
        '4QQ' => 'E02005787',
        '4QR' => 'E02005787',
        '4QS' => 'E02005787',
        '4QT' => 'E02005787',
        '4QU' => 'E02005787',
        '4QW' => 'E02005787',
        '4QX' => 'E02005787',
        '4QY' => 'E02005787',
        '4QZ' => 'E02005787',
        '4RA' => 'E02005787',
        '4RB' => 'E02005787',
        '4RD' => 'E02005787',
        '4RH' => 'E02005787',
        '4RJ' => 'E02005787',
        '4RL' => 'E02005787',
        '4RN' => 'E02005787',
        '4RP' => 'E02005787',
        '4RR' => 'E02005787',
        '4RS' => 'E02005787',
        '4RT' => 'E02005787',
        '4RU' => 'E02005787',
        '4RW' => 'E02005787',
        '4RX' => 'E02005786',
        '4RY' => 'E02005786',
        '4RZ' => 'E02005787',
        '4SG' => 'E02005787',
        '4SH' => 'E02005787',
        '4SJ' => 'E02005787',
        '4SL' => 'E02005787',
        '4SN' => 'E02005787',
        '4SP' => 'E02005787',
        '4SQ' => 'E02005787',
        '4SR' => 'E02005787',
        '4SS' => 'E02005787',
        '4ST' => 'E02005787',
        '4SU' => 'E02005787',
        '4SW' => 'E02005787',
        '4SX' => 'E02005787',
        '4SY' => 'E02005787',
        '4TG' => 'E02005787',
        '4TH' => 'E02005787',
        '4TJ' => 'E02005787',
        '4TL' => 'E02005787',
        '4TN' => 'E02005787',
        '4TP' => 'E02005786',
        '4TQ' => 'E02005787',
        '4TR' => 'E02005786',
        '4TS' => 'E02005786',
        '4TT' => 'E02005786',
        '4TU' => 'E02005786',
        '4TW' => 'E02005787',
        '4TX' => 'E02005786',
        '4TY' => 'E02005786',
        '4UE' => 'E02005787',
        '4UF' => 'E02005787',
        '4UG' => 'E02005786',
        '4UH' => 'E02005786',
        '4UJ' => 'E02005786',
        '4UL' => 'E02005786',
        '4UN' => 'E02005786',
        '4UQ' => 'E02005786',
        '4UW' => 'E02005786',
        '4WA' => 'E02005786',
        '4WS' => 'E02005787',
        '4WT' => 'E02005787',
        '4WU' => 'E02005787',
        '4WW' => 'E02005787',
        '4WX' => 'E02005787',
        '4WY' => 'E02005787',
        '4WZ' => 'E02005787',
        '4YJ' => 'E02005787',
        '4YL' => 'E02005786',
        '4YN' => 'E02005787',
        '4YP' => 'E02005787',
        '4YR' => 'E02005786',
        '4YS' => 'E02005786',
        '4YT' => 'E02005787',
        '4YU' => 'E02005786',
        '4YW' => 'E02005786',
        '4YX' => 'E02005786',
        '4YY' => 'E02005786',
        '4YZ' => 'E02005786',
        '4ZZ' => 'E02005786',
        '5AA' => 'E02005787',
        '5AB' => 'E02005787',
        '5AD' => 'E02005787',
        '5AE' => 'E02005787',
        '5AF' => 'E02005787',
        '5AG' => 'E02005787',
        '5AH' => 'E02005787',
        '5AJ' => 'E02005787',
        '5AL' => 'E02005787',
        '5AN' => 'E02005787',
        '5AP' => 'E02005787',
        '5AQ' => 'E02005787',
        '5AR' => 'E02005787',
        '5AS' => 'E02005787',
        '5AT' => 'E02005787',
        '5AU' => 'E02005787',
        '5AW' => 'E02005787',
        '5AX' => 'E02005787',
        '5AY' => 'E02005787',
        '5AZ' => 'E02005787',
        '5BA' => 'E02005787',
        '5BB' => 'E02005787',
        '5BD' => 'E02005787',
        '5BE' => 'E02005787',
        '5BF' => 'E02005787',
        '5BG' => 'E02005787',
        '5BH' => 'E02005787',
        '5BJ' => 'E02005787',
        '5BL' => 'E02005787',
        '5BN' => 'E02005787',
        '5BP' => 'E02005787',
        '5BQ' => 'E02005787',
        '5BU' => 'E02005787',
        '5BW' => 'E02005787',
        '5BX' => 'E02005787',
        '5BY' => 'E02005787',
        '5BZ' => 'E02005787',
        '5DA' => 'E02005787',
        '5DB' => 'E02005787',
        '5DD' => 'E02005787',
        '5DE' => 'E02005787',
        '5DF' => 'E02005787',
        '5DG' => 'E02005787',
        '5DH' => 'E02005787',
        '5DJ' => 'E02005787',
        '5DL' => 'E02005787',
        '5DN' => 'E02005787',
        '5DP' => 'E02005787',
        '5DQ' => 'E02005787',
        '5DR' => 'E02005787',
        '5DS' => 'E02005787',
        '5DT' => 'E02005787',
        '5DU' => 'E02005787',
        '5DW' => 'E02005787',
        '5DX' => 'E02005787',
        '5DY' => 'E02005787',
        '5DZ' => 'E02005787',
        '5EA' => 'E02005787',
        '5EB' => 'E02005787',
        '5ED' => 'E02005787',
        '5EE' => 'E02005787',
        '5EF' => 'E02005787',
        '5EG' => 'E02005787',
        '5EH' => 'E02005787',
        '5EJ' => 'E02005787',
        '5EL' => 'E02005787',
        '5EN' => 'E02005787',
        '5EP' => 'E02005787',
        '5EQ' => 'E02005787',
        '5ER' => 'E02005787',
        '5ES' => 'E02005787',
        '5ET' => 'E02005787',
        '5EU' => 'E02005787',
        '5EW' => 'E02005787',
        '5EX' => 'E02005787',
        '5EY' => 'E02005787',
        '5EZ' => 'E02005787',
        '5FB' => 'E02005787',
        '5FD' => 'E02005787',
        '5FE' => 'E02005787',
        '5GA' => 'E02005787',
        '5GB' => 'E02005787',
        '5HA' => 'E02005787',
        '5HB' => 'E02005787',
        '5HD' => 'E02005787',
        '5HE' => 'E02005787',
        '5HF' => 'E02005787',
        '5HG' => 'E02005787',
        '5HH' => 'E02005787',
        '5HJ' => 'E02005787',
        '5HL' => 'E02005787',
        '5HN' => 'E02005787',
        '5HP' => 'E02005787',
        '5HQ' => 'E02005787',
        '5HR' => 'E02005787',
        '5HS' => 'E02005787',
        '5HT' => 'E02005787',
        '5HU' => 'E02005787',
        '5HW' => 'E02005787',
        '5HX' => 'E02005787',
        '5HY' => 'E02005787',
        '5HZ' => 'E02005787',
        '5JA' => 'E02005787',
        '5JB' => 'E02005787',
        '5JD' => 'E02005787',
        '5JE' => 'E02005787',
        '5JF' => 'E02005787',
        '5JG' => 'E02005787',
        '5JH' => 'E02005787',
        '5JJ' => 'E02005787',
        '5JL' => 'E02005787',
        '5JN' => 'E02005787',
        '5JP' => 'E02005787',
        '5JQ' => 'E02005787',
        '5JR' => 'E02005787',
        '5JS' => 'E02005787',
        '5JT' => 'E02005787',
        '5JU' => 'E02005787',
        '5JW' => 'E02005787',
        '5JX' => 'E02005787',
        '5JY' => 'E02005787',
        '5JZ' => 'E02005787',
        '5LA' => 'E02005787',
        '5LB' => 'E02005787',
        '5LD' => 'E02005787',
        '5LE' => 'E02005787',
        '5LF' => 'E02005787',
        '5LG' => 'E02005787',
        '5LH' => 'E02005787',
        '5LJ' => 'E02005787',
        '5LL' => 'E02005787',
        '5LN' => 'E02005787',
        '5LP' => 'E02005787',
        '5LQ' => 'E02005787',
        '5LR' => 'E02005787',
        '5LS' => 'E02005787',
        '5LT' => 'E02005787',
        '5LU' => 'E02005787',
        '5LW' => 'E02005787',
        '5LX' => 'E02005787',
        '5LY' => 'E02005787',
        '5LZ' => 'E02005787',
        '5NA' => 'E02005787',
        '5NB' => 'E02005787',
        '5ND' => 'E02005787',
        '5NE' => 'E02005787',
        '5NF' => 'E02005787',
        '5NG' => 'E02005787',
        '5NH' => 'E02005787',
        '5NJ' => 'E02005787',
        '5NL' => 'E02005787',
        '5NN' => 'E02005787',
        '5NP' => 'E02005787',
        '5NQ' => 'E02005787',
        '5NR' => 'E02005787',
        '5NS' => 'E02005787',
        '5NT' => 'E02005787',
        '5NU' => 'E02005787',
        '5NX' => 'E02005787',
        '5NZ' => 'E02005787',
        '5PA' => 'E02005787',
        '5PB' => 'E02005787',
        '5PD' => 'E02005787',
        '5PE' => 'E02005787',
        '5PF' => 'E02005787',
        '5PG' => 'E02005787',
        '5PH' => 'E02005787',
        '5PJ' => 'E02005787',
        '5PL' => 'E02005787',
        '5PN' => 'E02005787',
        '5PP' => 'E02005787',
        '5PQ' => 'E02005787',
        '5PR' => 'E02005787',
        '5PS' => 'E02005787',
        '5PT' => 'E02005787',
        '5PU' => 'E02005787',
        '5PW' => 'E02005787',
        '5PX' => 'E02005787',
        '5PY' => 'E02005787',
        '5PZ' => 'E02005787',
        '5QA' => 'E02005787',
        '5QB' => 'E02005787',
        '5QD' => 'E02005787',
        '5QE' => 'E02005787',
        '5QF' => 'E02005787',
        '5QG' => 'E02005787',
        '5QH' => 'E02005787',
        '5QJ' => 'E02005787',
        '5QL' => 'E02005787',
        '5QN' => 'E02005787',
        '5QP' => 'E02005787',
        '5QQ' => 'E02005787',
        '5QR' => 'E02005787',
        '5QS' => 'E02005787',
        '5QT' => 'E02005787',
        '5QU' => 'E02005787',
        '5QW' => 'E02005787',
        '5QX' => 'E02005787',
        '5QY' => 'E02005787',
        '5QZ' => 'E02005787',
        '5RA' => 'E02005787',
        '5RB' => 'E02005787',
        '5RD' => 'E02005787',
        '5RE' => 'E02005787',
        '5RG' => 'E02005787',
        '5RH' => 'E02005787',
        '5RJ' => 'E02005787',
        '5RL' => 'E02005787',
        '5RN' => 'E02005787',
        '5RP' => 'E02005787',
        '5RQ' => 'E02005787',
        '5RR' => 'E02005787',
        '5RS' => 'E02005787',
        '5RW' => 'E02005787',
        '5SD' => 'E02005787',
        '5SE' => 'E02005787',
        '5SF' => 'E02005787',
        '5SG' => 'E02005787',
        '5SL' => 'E02005787',
        '5SN' => 'E02005787',
        '5SP' => 'E02005787',
        '5SR' => 'E02005787',
        '5SS' => 'E02005787',
        '5ST' => 'E02005787',
        '5SU' => 'E02005787',
        '5SW' => 'E02005787',
        '5WN' => 'E02005787',
        '5WP' => 'E02005787',
        '5WQ' => 'E02005787',
        '5WR' => 'E02005787',
        '5WT' => 'E02005787',
        '5WU' => 'E02005787',
        '5WW' => 'E02005787',
        '5WX' => 'E02005787',
        '5WY' => 'E02005787',
        '5WZ' => 'E02005787',
        '5YQ' => 'E02005787',
        '5YR' => 'E02005787',
        '5YS' => 'E02005787',
        '5YT' => 'E02005787',
        '5YU' => 'E02005787',
        '5YX' => 'E02005787',
        '5YY' => 'E02005787',
        '5YZ' => 'E02005787',
        '9AA' => 'E02002566',
        '9AB' => 'E02002566',
        '9AD' => 'E02002566',
        '9AE' => 'E02005787',
        '9AF' => 'E02005787',
        '9AG' => 'E02002566',
        '9AH' => 'E02002566',
        '9AJ' => 'E02005787',
        '9AL' => 'E02005787',
        '9AN' => 'E02005787',
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