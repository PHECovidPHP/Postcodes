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
final class CM13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004468',
        '1AB' => 'E02004468',
        '1AD' => 'E02004468',
        '1AE' => 'E02004468',
        '1AF' => 'E02004468',
        '1AG' => 'E02004468',
        '1AH' => 'E02004468',
        '1AJ' => 'E02004468',
        '1AL' => 'E02004468',
        '1AN' => 'E02004468',
        '1AP' => 'E02004468',
        '1AQ' => 'E02004468',
        '1AR' => 'E02004468',
        '1AS' => 'E02004468',
        '1AT' => 'E02004468',
        '1AU' => 'E02004468',
        '1AW' => 'E02004470',
        '1AX' => 'E02004468',
        '1AY' => 'E02004468',
        '1AZ' => 'E02004468',
        '1BA' => 'E02004468',
        '1BB' => 'E02004470',
        '1BD' => 'E02004468',
        '1BE' => 'E02004468',
        '1BG' => 'E02004468',
        '1BH' => 'E02004468',
        '1BJ' => 'E02004468',
        '1BL' => 'E02004468',
        '1BN' => 'E02004468',
        '1BP' => 'E02004466',
        '1BQ' => 'E02004468',
        '1BS' => 'E02004466',
        '1BT' => 'E02004466',
        '1BU' => 'E02004466',
        '1BW' => 'E02004466',
        '1BX' => 'E02004466',
        '1BY' => 'E02004466',
        '1BZ' => 'E02004466',
        '1DA' => 'E02004466',
        '1DB' => 'E02004466',
        '1DD' => 'E02004466',
        '1DE' => 'E02004466',
        '1DF' => 'E02004466',
        '1DG' => 'E02004466',
        '1DH' => 'E02004466',
        '1DJ' => 'E02004466',
        '1DL' => 'E02004466',
        '1DN' => 'E02004466',
        '1DP' => 'E02004466',
        '1DQ' => 'E02004466',
        '1DR' => 'E02004466',
        '1DS' => 'E02004468',
        '1DT' => 'E02004468',
        '1DU' => 'E02004468',
        '1DW' => 'E02004466',
        '1DX' => 'E02004468',
        '1DY' => 'E02004468',
        '1DZ' => 'E02004468',
        '1EA' => 'E02004466',
        '1EB' => 'E02004468',
        '1ED' => 'E02004466',
        '1EE' => 'E02004466',
        '1EF' => 'E02004468',
        '1EG' => 'E02004468',
        '1EH' => 'E02004466',
        '1EJ' => 'E02004466',
        '1EL' => 'E02004468',
        '1EN' => 'E02004466',
        '1EP' => 'E02004466',
        '1EQ' => 'E02004466',
        '1ER' => 'E02004466',
        '1ES' => 'E02004466',
        '1ET' => 'E02004466',
        '1EU' => 'E02004466',
        '1EW' => 'E02004466',
        '1EX' => 'E02004466',
        '1EY' => 'E02004466',
        '1EZ' => 'E02004466',
        '1FA' => 'E02004466',
        '1FB' => 'E02004466',
        '1FE' => 'E02004470',
        '1FL' => 'E02004470',
        '1GA' => 'E02004466',
        '1GB' => 'E02004466',
        '1GH' => 'E02004470',
        '1GJ' => 'E02004466',
        '1HA' => 'E02004466',
        '1HB' => 'E02004466',
        '1HD' => 'E02004466',
        '1HE' => 'E02004468',
        '1HG' => 'E02004468',
        '1HH' => 'E02004466',
        '1HJ' => 'E02004468',
        '1HL' => 'E02004466',
        '1HN' => 'E02004466',
        '1HP' => 'E02004466',
        '1HQ' => 'E02004466',
        '1HR' => 'E02004466',
        '1HS' => 'E02004466',
        '1HT' => 'E02004466',
        '1HU' => 'E02004466',
        '1HW' => 'E02004466',
        '1HX' => 'E02004466',
        '1HY' => 'E02004466',
        '1HZ' => 'E02004466',
        '1JA' => 'E02004466',
        '1JB' => 'E02004466',
        '1JD' => 'E02004466',
        '1JE' => 'E02004466',
        '1JF' => 'E02004470',
        '1JG' => 'E02004466',
        '1JJ' => 'E02004466',
        '1JL' => 'E02004466',
        '1JN' => 'E02004466',
        '1JP' => 'E02004466',
        '1JQ' => 'E02004466',
        '1JR' => 'E02004466',
        '1JS' => 'E02004466',
        '1JT' => 'E02004466',
        '1JU' => 'E02004466',
        '1JW' => 'E02004466',
        '1JX' => 'E02004466',
        '1JY' => 'E02004468',
        '1JZ' => 'E02004466',
        '1LA' => 'E02004466',
        '1LB' => 'E02004466',
        '1LD' => 'E02004466',
        '1LE' => 'E02004466',
        '1LF' => 'E02004466',
        '1LG' => 'E02004466',
        '1LH' => 'E02004466',
        '1LJ' => 'E02004466',
        '1LL' => 'E02004466',
        '1LN' => 'E02004466',
        '1LP' => 'E02004466',
        '1LQ' => 'E02004466',
        '1LR' => 'E02004466',
        '1LS' => 'E02004466',
        '1LT' => 'E02004470',
        '1LU' => 'E02004466',
        '1LW' => 'E02004466',
        '1LX' => 'E02004466',
        '1LY' => 'E02004466',
        '1LZ' => 'E02004466',
        '1NA' => 'E02004466',
        '1NB' => 'E02004466',
        '1ND' => 'E02004466',
        '1NE' => 'E02004466',
        '1NF' => 'E02004466',
        '1NG' => 'E02004466',
        '1NH' => 'E02004466',
        '1NJ' => 'E02004466',
        '1NL' => 'E02004466',
        '1NN' => 'E02004466',
        '1NP' => 'E02004466',
        '1NQ' => 'E02004466',
        '1NR' => 'E02004466',
        '1NS' => 'E02004466',
        '1NT' => 'E02004466',
        '1NU' => 'E02004466',
        '1NW' => 'E02004466',
        '1NX' => 'E02004466',
        '1NY' => 'E02004466',
        '1NZ' => 'E02004466',
        '1PA' => 'E02004466',
        '1PB' => 'E02004466',
        '1PD' => 'E02004466',
        '1PE' => 'E02004466',
        '1PF' => 'E02004466',
        '1PH' => 'E02004466',
        '1PJ' => 'E02004466',
        '1PL' => 'E02004466',
        '1PN' => 'E02004466',
        '1PP' => 'E02004466',
        '1PQ' => 'E02004470',
        '1PR' => 'E02004466',
        '1PS' => 'E02004466',
        '1PT' => 'E02004466',
        '1PU' => 'E02004466',
        '1PW' => 'E02004466',
        '1PX' => 'E02004466',
        '1PY' => 'E02004466',
        '1PZ' => 'E02004466',
        '1QA' => 'E02004466',
        '1QD' => 'E02004466',
        '1QE' => 'E02004466',
        '1QG' => 'E02004466',
        '1QH' => 'E02004466',
        '1QJ' => 'E02004470',
        '1QL' => 'E02004470',
        '1QN' => 'E02004466',
        '1QP' => 'E02004466',
        '1QQ' => 'E02004466',
        '1QR' => 'E02004466',
        '1QS' => 'E02004466',
        '1QT' => 'E02004466',
        '1QU' => 'E02004466',
        '1QW' => 'E02004466',
        '1QX' => 'E02004466',
        '1QY' => 'E02004466',
        '1QZ' => 'E02004466',
        '1RA' => 'E02004466',
        '1RB' => 'E02004466',
        '1RD' => 'E02004466',
        '1RE' => 'E02004466',
        '1RF' => 'E02004466',
        '1RG' => 'E02004466',
        '1RH' => 'E02004466',
        '1RJ' => 'E02004466',
        '1RL' => 'E02004466',
        '1RN' => 'E02004466',
        '1RP' => 'E02004466',
        '1RQ' => 'E02004466',
        '1RR' => 'E02004466',
        '1RS' => 'E02004466',
        '1RT' => 'E02004466',
        '1RU' => 'E02004466',
        '1RW' => 'E02004466',
        '1RX' => 'E02004466',
        '1RY' => 'E02004466',
        '1RZ' => 'E02004466',
        '1SA' => 'E02004466',
        '1SB' => 'E02004466',
        '1SD' => 'E02004466',
        '1SE' => 'E02004466',
        '1SF' => 'E02004470',
        '1SG' => 'E02004466',
        '1SH' => 'E02004466',
        '1SJ' => 'E02004466',
        '1SL' => 'E02004466',
        '1SN' => 'E02004466',
        '1SP' => 'E02004466',
        '1SQ' => 'E02004466',
        '1SR' => 'E02004466',
        '1SS' => 'E02004466',
        '1ST' => 'E02004466',
        '1SU' => 'E02004466',
        '1SW' => 'E02004466',
        '1SX' => 'E02004470',
        '1SY' => 'E02004466',
        '1SZ' => 'E02004466',
        '1TA' => 'E02004466',
        '1TB' => 'E02004466',
        '1TD' => 'E02004466',
        '1TE' => 'E02004466',
        '1TF' => 'E02004466',
        '1TG' => 'E02004466',
        '1TH' => 'E02004466',
        '1TJ' => 'E02004466',
        '1TL' => 'E02004466',
        '1TN' => 'E02004466',
        '1TP' => 'E02004466',
        '1TQ' => 'E02004466',
        '1TS' => 'E02004466',
        '1TT' => 'E02004466',
        '1TU' => 'E02004466',
        '1TW' => 'E02004466',
        '1TX' => 'E02004470',
        '1TY' => 'E02004466',
        '1TZ' => 'E02004466',
        '1UA' => 'E02004466',
        '1UB' => 'E02004466',
        '1UD' => 'E02004466',
        '1UE' => 'E02004466',
        '1UG' => 'E02004465',
        '1UH' => 'E02004465',
        '1UJ' => 'E02004465',
        '1UL' => 'E02004465',
        '1UN' => 'E02004465',
        '1UP' => 'E02004465',
        '1UR' => 'E02004465',
        '1UT' => 'E02004465',
        '1WA' => 'E02004470',
        '1WB' => 'E02004470',
        '1WD' => 'E02004470',
        '1WE' => 'E02004470',
        '1WF' => 'E02004470',
        '1WG' => 'E02004470',
        '1WH' => 'E02004470',
        '1WL' => 'E02004470',
        '1WN' => 'E02004470',
        '1WR' => 'E02004470',
        '1WS' => 'E02004470',
        '1WT' => 'E02004470',
        '1WU' => 'E02004470',
        '1WW' => 'E02004470',
        '1WX' => 'E02004470',
        '1WY' => 'E02004470',
        '1WZ' => 'E02004470',
        '1XA' => 'E02004466',
        '1XB' => 'E02004466',
        '1XD' => 'E02004466',
        '1XE' => 'E02004466',
        '1XG' => 'E02004466',
        '1XL' => 'E02004470',
        '1XP' => 'E02004468',
        '1XQ' => 'E02004466',
        '1XR' => 'E02004470',
        '1XS' => 'E02004468',
        '1XT' => 'E02004470',
        '1XU' => 'E02004466',
        '1XW' => 'E02004470',
        '1XX' => 'E02004466',
        '1XY' => 'E02004466',
        '1XZ' => 'E02004470',
        '1YA' => 'E02004466',
        '1YB' => 'E02004470',
        '1YD' => 'E02004470',
        '1YE' => 'E02004468',
        '1YF' => 'E02004468',
        '1YG' => 'E02004468',
        '1YH' => 'E02004468',
        '1YJ' => 'E02004468',
        '1YL' => 'E02004468',
        '1YN' => 'E02004468',
        '1YP' => 'E02004468',
        '1YQ' => 'E02004468',
        '1YR' => 'E02004468',
        '1YS' => 'E02004468',
        '1YT' => 'E02004468',
        '1YU' => 'E02004468',
        '1YW' => 'E02004468',
        '1YX' => 'E02004468',
        '1YY' => 'E02004468',
        '1YZ' => 'E02004468',
        '1ZB' => 'E02004468',
        '1ZQ' => 'E02004468',
        '1ZT' => 'E02004470',
        '2AA' => 'E02004471',
        '2AB' => 'E02004471',
        '2AD' => 'E02004471',
        '2AE' => 'E02004470',
        '2AF' => 'E02004471',
        '2AG' => 'E02004471',
        '2AH' => 'E02004471',
        '2AJ' => 'E02004471',
        '2AL' => 'E02004472',
        '2AN' => 'E02004472',
        '2AP' => 'E02004471',
        '2AQ' => 'E02004471',
        '2AR' => 'E02004471',
        '2AS' => 'E02004471',
        '2AT' => 'E02004471',
        '2AU' => 'E02004471',
        '2AW' => 'E02004470',
        '2AX' => 'E02004471',
        '2AY' => 'E02004471',
        '2AZ' => 'E02004471',
        '2BA' => 'E02004471',
        '2BB' => 'E02004471',
        '2BD' => 'E02004471',
        '2BE' => 'E02004471',
        '2BF' => 'E02004471',
        '2BG' => 'E02004471',
        '2BH' => 'E02004471',
        '2BJ' => 'E02004471',
        '2BL' => 'E02004471',
        '2BN' => 'E02004471',
        '2BP' => 'E02004471',
        '2BQ' => 'E02004471',
        '2BS' => 'E02004471',
        '2BT' => 'E02004471',
        '2BU' => 'E02004471',
        '2BW' => 'E02004471',
        '2BX' => 'E02004471',
        '2BY' => 'E02004471',
        '2BZ' => 'E02004471',
        '2DA' => 'E02004471',
        '2DB' => 'E02004471',
        '2DD' => 'E02004471',
        '2DE' => 'E02004471',
        '2DF' => 'E02004471',
        '2DG' => 'E02004471',
        '2DH' => 'E02004472',
        '2DJ' => 'E02004472',
        '2DL' => 'E02004471',
        '2DN' => 'E02004472',
        '2DP' => 'E02004471',
        '2DQ' => 'E02004471',
        '2DR' => 'E02004471',
        '2DS' => 'E02004471',
        '2DT' => 'E02004471',
        '2DU' => 'E02004471',
        '2DX' => 'E02004471',
        '2DY' => 'E02004471',
        '2DZ' => 'E02004471',
        '2EA' => 'E02004471',
        '2EB' => 'E02004471',
        '2ED' => 'E02004471',
        '2EE' => 'E02004471',
        '2EF' => 'E02004471',
        '2EG' => 'E02004471',
        '2EH' => 'E02004471',
        '2EJ' => 'E02004471',
        '2EL' => 'E02004471',
        '2EN' => 'E02004471',
        '2EP' => 'E02004471',
        '2EQ' => 'E02004471',
        '2ER' => 'E02004471',
        '2ES' => 'E02004471',
        '2ET' => 'E02004471',
        '2EU' => 'E02004471',
        '2EW' => 'E02004471',
        '2EX' => 'E02004471',
        '2EY' => 'E02004471',
        '2EZ' => 'E02004470',
        '2FA' => 'E02004466',
        '2FB' => 'E02004468',
        '2FX' => 'E02004470',
        '2GL' => 'E02004470',
        '2HB' => 'E02004470',
        '2HD' => 'E02004472',
        '2HE' => 'E02004468',
        '2HF' => 'E02004468',
        '2HG' => 'E02004468',
        '2HH' => 'E02004468',
        '2HJ' => 'E02004468',
        '2HL' => 'E02004468',
        '2HN' => 'E02004472',
        '2HP' => 'E02004472',
        '2HQ' => 'E02004468',
        '2HR' => 'E02004472',
        '2HS' => 'E02004472',
        '2HT' => 'E02004472',
        '2HU' => 'E02004472',
        '2HW' => 'E02004468',
        '2HX' => 'E02004472',
        '2HY' => 'E02004472',
        '2HZ' => 'E02004472',
        '2JA' => 'E02004472',
        '2JB' => 'E02004472',
        '2JD' => 'E02004468',
        '2JE' => 'E02004472',
        '2JF' => 'E02004468',
        '2JG' => 'E02004468',
        '2JH' => 'E02004468',
        '2JJ' => 'E02004468',
        '2JL' => 'E02004468',
        '2JN' => 'E02004468',
        '2JP' => 'E02004468',
        '2JQ' => 'E02004470',
        '2JR' => 'E02004468',
        '2JS' => 'E02004468',
        '2JT' => 'E02004468',
        '2JU' => 'E02004468',
        '2JW' => 'E02004472',
        '2JX' => 'E02004472',
        '2JY' => 'E02004470',
        '2JZ' => 'E02004472',
        '2LA' => 'E02004468',
        '2LB' => 'E02004472',
        '2LD' => 'E02004471',
        '2LE' => 'E02004470',
        '2LF' => 'E02004472',
        '2LG' => 'E02004472',
        '2LH' => 'E02004472',
        '2LJ' => 'E02004472',
        '2LL' => 'E02004472',
        '2LN' => 'E02004472',
        '2LP' => 'E02004472',
        '2LQ' => 'E02004472',
        '2LR' => 'E02004472',
        '2LS' => 'E02004472',
        '2LT' => 'E02004468',
        '2LU' => 'E02004472',
        '2LW' => 'E02004468',
        '2LX' => 'E02004468',
        '2LY' => 'E02004472',
        '2LZ' => 'E02004468',
        '2NA' => 'E02004468',
        '2NB' => 'E02004468',
        '2ND' => 'E02004468',
        '2NE' => 'E02004468',
        '2NF' => 'E02004468',
        '2NG' => 'E02004468',
        '2NH' => 'E02004468',
        '2NJ' => 'E02004468',
        '2NL' => 'E02004468',
        '2NN' => 'E02004468',
        '2NP' => 'E02004468',
        '2NQ' => 'E02004470',
        '2NR' => 'E02004468',
        '2NS' => 'E02004468',
        '2NT' => 'E02004468',
        '2NU' => 'E02004468',
        '2NW' => 'E02004468',
        '2NX' => 'E02004468',
        '2NY' => 'E02004468',
        '2NZ' => 'E02004468',
        '2PA' => 'E02004468',
        '2PB' => 'E02004468',
        '2PD' => 'E02004468',
        '2PE' => 'E02004472',
        '2PF' => 'E02004472',
        '2PG' => 'E02004468',
        '2PH' => 'E02004468',
        '2PJ' => 'E02004468',
        '2PL' => 'E02004468',
        '2PN' => 'E02004468',
        '2PP' => 'E02004468',
        '2PQ' => 'E02004470',
        '2PR' => 'E02004468',
        '2PS' => 'E02004468',
        '2PT' => 'E02004468',
        '2PU' => 'E02004468',
        '2PW' => 'E02004468',
        '2PX' => 'E02004468',
        '2PY' => 'E02004468',
        '2PZ' => 'E02004468',
        '2QA' => 'E02004472',
        '2QB' => 'E02004472',
        '2QD' => 'E02004468',
        '2QE' => 'E02004468',
        '2QF' => 'E02004468',
        '2QG' => 'E02004468',
        '2QH' => 'E02004468',
        '2QJ' => 'E02004468',
        '2QL' => 'E02004468',
        '2QN' => 'E02004468',
        '2QP' => 'E02004468',
        '2QQ' => 'E02004468',
        '2QR' => 'E02004468',
        '2QS' => 'E02004470',
        '2QT' => 'E02004468',
        '2QU' => 'E02004468',
        '2QW' => 'E02004468',
        '2QX' => 'E02004468',
        '2QY' => 'E02004468',
        '2QZ' => 'E02004468',
        '2RA' => 'E02004468',
        '2RB' => 'E02004468',
        '2RD' => 'E02004468',
        '2RE' => 'E02004468',
        '2RF' => 'E02004468',
        '2RG' => 'E02004466',
        '2RH' => 'E02004466',
        '2RJ' => 'E02004466',
        '2RL' => 'E02004466',
        '2RN' => 'E02004466',
        '2RP' => 'E02004466',
        '2RQ' => 'E02004466',
        '2RR' => 'E02004466',
        '2RS' => 'E02004466',
        '2RT' => 'E02004466',
        '2RU' => 'E02004466',
        '2RW' => 'E02004466',
        '2RX' => 'E02004466',
        '2RY' => 'E02004468',
        '2RZ' => 'E02004468',
        '2SA' => 'E02004466',
        '2SB' => 'E02004466',
        '2SD' => 'E02004466',
        '2SE' => 'E02004466',
        '2SF' => 'E02004466',
        '2SG' => 'E02004466',
        '2SH' => 'E02004468',
        '2SJ' => 'E02004468',
        '2SL' => 'E02004468',
        '2SN' => 'E02004470',
        '2SP' => 'E02004470',
        '2SQ' => 'E02004468',
        '2SR' => 'E02004466',
        '2SS' => 'E02004466',
        '2ST' => 'E02004466',
        '2SU' => 'E02004466',
        '2SW' => 'E02004472',
        '2SX' => 'E02004466',
        '2SY' => 'E02004466',
        '2SZ' => 'E02004466',
        '2TA' => 'E02004466',
        '2TB' => 'E02004466',
        '2TD' => 'E02004466',
        '2TE' => 'E02004470',
        '2TF' => 'E02004470',
        '2TG' => 'E02004472',
        '2TH' => 'E02004472',
        '2TJ' => 'E02004472',
        '2TL' => 'E02004472',
        '2TN' => 'E02004472',
        '2TP' => 'E02004472',
        '2TQ' => 'E02004470',
        '2TR' => 'E02004472',
        '2TS' => 'E02004472',
        '2TT' => 'E02004472',
        '2TU' => 'E02004466',
        '2TW' => 'E02004472',
        '2TX' => 'E02004470',
        '2TY' => 'E02004472',
        '2TZ' => 'E02004472',
        '2UA' => 'E02004472',
        '2UB' => 'E02004472',
        '2UD' => 'E02004472',
        '2UE' => 'E02004472',
        '2UF' => 'E02004472',
        '2UG' => 'E02004472',
        '2UH' => 'E02004472',
        '2UJ' => 'E02004470',
        '2UL' => 'E02004472',
        '2UN' => 'E02004472',
        '2UP' => 'E02004472',
        '2UQ' => 'E02004472',
        '2UW' => 'E02004472',
        '2WA' => 'E02004470',
        '2WB' => 'E02004472',
        '2WD' => 'E02004470',
        '2WE' => 'E02004470',
        '2WF' => 'E02004470',
        '2WG' => 'E02004472',
        '2WP' => 'E02004470',
        '2WQ' => 'E02004470',
        '2WS' => 'E02004470',
        '2WT' => 'E02004472',
        '2WZ' => 'E02004470',
        '2XA' => 'E02004468',
        '2XB' => 'E02004468',
        '2XD' => 'E02004468',
        '2XE' => 'E02004427',
        '2XT' => 'E02004470',
        '2YR' => 'E02004468',
        '2ZP' => 'E02004468',
        '2ZQ' => 'E02004470',
        '3AA' => 'E02004471',
        '3AB' => 'E02004471',
        '3AD' => 'E02004471',
        '3AE' => 'E02004471',
        '3AF' => 'E02004470',
        '3AG' => 'E02004471',
        '3AH' => 'E02004471',
        '3AJ' => 'E02004471',
        '3AL' => 'E02004471',
        '3AN' => 'E02004471',
        '3AP' => 'E02004471',
        '3AQ' => 'E02004471',
        '3AR' => 'E02004471',
        '3AS' => 'E02004471',
        '3AT' => 'E02004471',
        '3AU' => 'E02004471',
        '3AW' => 'E02004470',
        '3AX' => 'E02004471',
        '3AY' => 'E02004471',
        '3AZ' => 'E02004471',
        '3BA' => 'E02004471',
        '3BB' => 'E02004471',
        '3BD' => 'E02004471',
        '3BE' => 'E02004471',
        '3BG' => 'E02004471',
        '3BH' => 'E02004471',
        '3BJ' => 'E02004471',
        '3BL' => 'E02004471',
        '3BN' => 'E02004471',
        '3BP' => 'E02004471',
        '3BQ' => 'E02004472',
        '3BS' => 'E02004471',
        '3BT' => 'E02004472',
        '3BU' => 'E02004471',
        '3BW' => 'E02004471',
        '3BX' => 'E02004471',
        '3BY' => 'E02004471',
        '3BZ' => 'E02004471',
        '3DA' => 'E02004471',
        '3DB' => 'E02004471',
        '3DD' => 'E02004471',
        '3DE' => 'E02004471',
        '3DF' => 'E02004471',
        '3DG' => 'E02004471',
        '3DH' => 'E02004471',
        '3DJ' => 'E02004471',
        '3DL' => 'E02004470',
        '3DN' => 'E02004470',
        '3DP' => 'E02004471',
        '3DQ' => 'E02004471',
        '3DR' => 'E02004471',
        '3DS' => 'E02004471',
        '3DT' => 'E02004471',
        '3DU' => 'E02004470',
        '3DW' => 'E02004472',
        '3DX' => 'E02004471',
        '3DY' => 'E02004472',
        '3DZ' => 'E02004471',
        '3EA' => 'E02004471',
        '3EB' => 'E02004471',
        '3ED' => 'E02004472',
        '3EE' => 'E02004471',
        '3EF' => 'E02004470',
        '3EG' => 'E02004471',
        '3EH' => 'E02004472',
        '3EJ' => 'E02004472',
        '3EL' => 'E02003299',
        '3EN' => 'E02004472',
        '3EP' => 'E02004471',
        '3EQ' => 'E02004471',
        '3ER' => 'E02004471',
        '3ES' => 'E02004471',
        '3ET' => 'E02004471',
        '3EU' => 'E02004471',
        '3EW' => 'E02004471',
        '3EX' => 'E02004471',
        '3EY' => 'E02004471',
        '3EZ' => 'E02004471',
        '3FA' => 'E02004471',
        '3FB' => 'E02004471',
        '3FD' => 'E02004471',
        '3FE' => 'E02004472',
        '3FF' => 'E02004471',
        '3FG' => 'E02004471',
        '3FH' => 'E02004471',
        '3FJ' => 'E02004471',
        '3FL' => 'E02004471',
        '3FN' => 'E02004471',
        '3FP' => 'E02004471',
        '3FQ' => 'E02004471',
        '3FR' => 'E02004471',
        '3FS' => 'E02004437',
        '3FT' => 'E02004472',
        '3FU' => 'E02004472',
        '3FW' => 'E02004470',
        '3FX' => 'E02004471',
        '3FZ' => 'E02004472',
        '3GA' => 'E02004472',
        '3GB' => 'E02004472',
        '3GD' => 'E02004472',
        '3GG' => 'E02004470',
        '3GR' => 'E02004470',
        '3GS' => 'E02004472',
        '3GZ' => 'E02004470',
        '3HA' => 'E02004471',
        '3HB' => 'E02004471',
        '3HD' => 'E02004471',
        '3HE' => 'E02003299',
        '3HF' => 'E02003299',
        '3HG' => 'E02003299',
        '3HH' => 'E02003299',
        '3HJ' => 'E02003299',
        '3HL' => 'E02004472',
        '3HN' => 'E02004472',
        '3HP' => 'E02004470',
        '3HQ' => 'E02003299',
        '3HR' => 'E02004471',
        '3HS' => 'E02004471',
        '3HT' => 'E02004471',
        '3HU' => 'E02004471',
        '3HW' => 'E02004472',
        '3HX' => 'E02004471',
        '3HY' => 'E02004470',
        '3HZ' => 'E02004471',
        '3JA' => 'E02000470',
        '3JB' => 'E02004471',
        '3JD' => 'E02004471',
        '3JE' => 'E02004471',
        '3JF' => 'E02004471',
        '3JG' => 'E02004471',
        '3JH' => 'E02004471',
        '3JJ' => 'E02004471',
        '3JL' => 'E02004471',
        '3JN' => 'E02004471',
        '3JP' => 'E02004471',
        '3JQ' => 'E02004471',
        '3JR' => 'E02004471',
        '3JS' => 'E02004471',
        '3JT' => 'E02004471',
        '3JU' => 'E02004471',
        '3JW' => 'E02004471',
        '3JX' => 'E02004471',
        '3JY' => 'E02004470',
        '3JZ' => 'E02004471',
        '3LA' => 'E02004471',
        '3LB' => 'E02004471',
        '3LD' => 'E02004471',
        '3LE' => 'E02004471',
        '3LF' => 'E02004471',
        '3LG' => 'E02004471',
        '3LH' => 'E02004472',
        '3LJ' => 'E02004472',
        '3LL' => 'E02004472',
        '3LN' => 'E02004472',
        '3LP' => 'E02004472',
        '3LQ' => 'E02004472',
        '3LR' => 'E02004472',
        '3LS' => 'E02004472',
        '3LT' => 'E02004472',
        '3LU' => 'E02004472',
        '3LW' => 'E02004472',
        '3LX' => 'E02003299',
        '3LY' => 'E02004472',
        '3LZ' => 'E02004472',
        '3NA' => 'E02004472',
        '3NB' => 'E02004472',
        '3ND' => 'E02004472',
        '3NE' => 'E02004472',
        '3NF' => 'E02004472',
        '3NG' => 'E02004472',
        '3NH' => 'E02004472',
        '3NJ' => 'E02004472',
        '3NL' => 'E02004472',
        '3NN' => 'E02004472',
        '3NQ' => 'E02004472',
        '3NR' => 'E02004472',
        '3NS' => 'E02004472',
        '3NT' => 'E02004472',
        '3NU' => 'E02004472',
        '3NW' => 'E02004472',
        '3NX' => 'E02004472',
        '3NY' => 'E02004472',
        '3NZ' => 'E02004472',
        '3PA' => 'E02004472',
        '3PB' => 'E02004472',
        '3PD' => 'E02004472',
        '3PE' => 'E02004472',
        '3PF' => 'E02004472',
        '3PG' => 'E02004472',
        '3PH' => 'E02004472',
        '3PJ' => 'E02004472',
        '3PL' => 'E02004472',
        '3PN' => 'E02004472',
        '3PP' => 'E02004472',
        '3PQ' => 'E02004472',
        '3PR' => 'E02004472',
        '3PS' => 'E02004472',
        '3PT' => 'E02004472',
        '3PU' => 'E02004472',
        '3PW' => 'E02004470',
        '3PX' => 'E02004472',
        '3PY' => 'E02004470',
        '3PZ' => 'E02004472',
        '3QA' => 'E02004472',
        '3QB' => 'E02004472',
        '3QD' => 'E02004472',
        '3QE' => 'E02004472',
        '3QF' => 'E02004472',
        '3QG' => 'E02004472',
        '3QH' => 'E02004472',
        '3QJ' => 'E02004472',
        '3QL' => 'E02004472',
        '3QN' => 'E02004472',
        '3QP' => 'E02004472',
        '3QQ' => 'E02004472',
        '3QR' => 'E02004472',
        '3QS' => 'E02004472',
        '3QT' => 'E02004472',
        '3QU' => 'E02004472',
        '3QW' => 'E02004472',
        '3QX' => 'E02004472',
        '3QY' => 'E02004472',
        '3QZ' => 'E02004472',
        '3RA' => 'E02004472',
        '3RB' => 'E02004472',
        '3RD' => 'E02004472',
        '3RE' => 'E02004472',
        '3RF' => 'E02004472',
        '3RG' => 'E02004472',
        '3RH' => 'E02004472',
        '3RJ' => 'E02004472',
        '3RL' => 'E02004472',
        '3RN' => 'E02004472',
        '3RP' => 'E02004472',
        '3RQ' => 'E02004472',
        '3RR' => 'E02004472',
        '3RS' => 'E02004472',
        '3RT' => 'E02004472',
        '3RU' => 'E02004471',
        '3RW' => 'E02004472',
        '3RX' => 'E02004471',
        '3RY' => 'E02004471',
        '3RZ' => 'E02004471',
        '3SA' => 'E02004471',
        '3SB' => 'E02004472',
        '3SD' => 'E02004472',
        '3SE' => 'E02004472',
        '3SF' => 'E02004472',
        '3SG' => 'E02004472',
        '3SH' => 'E02004433',
        '3SJ' => 'E02004437',
        '3SL' => 'E02004437',
        '3SN' => 'E02004437',
        '3SP' => 'E02004437',
        '3SR' => 'E02004437',
        '3SS' => 'E02004437',
        '3ST' => 'E02004470',
        '3SU' => 'E02004437',
        '3SW' => 'E02004437',
        '3SX' => 'E02004437',
        '3SY' => 'E02004437',
        '3SZ' => 'E02004472',
        '3TA' => 'E02004433',
        '3TB' => 'E02004472',
        '3TD' => 'E02004472',
        '3TE' => 'E02004470',
        '3TG' => 'E02004472',
        '3TJ' => 'E02004472',
        '3TL' => 'E02004472',
        '3TN' => 'E02004472',
        '3TP' => 'E02004472',
        '3TQ' => 'E02004472',
        '3TR' => 'E02004472',
        '3TS' => 'E02004472',
        '3TT' => 'E02004472',
        '3TU' => 'E02004472',
        '3TW' => 'E02004472',
        '3TX' => 'E02004472',
        '3TY' => 'E02004472',
        '3TZ' => 'E02004472',
        '3UA' => 'E02004472',
        '3UB' => 'E02004472',
        '3UD' => 'E02004470',
        '3UE' => 'E02004470',
        '3UF' => 'E02004470',
        '3UG' => 'E02004470',
        '3UH' => 'E02004470',
        '3UJ' => 'E02004471',
        '3UL' => 'E02004470',
        '3UP' => 'E02004470',
        '3WA' => 'E02004470',
        '3WB' => 'E02004470',
        '3WD' => 'E02004470',
        '3WE' => 'E02004470',
        '3WF' => 'E02004470',
        '3WG' => 'E02004470',
        '3WH' => 'E02004470',
        '3WJ' => 'E02004470',
        '3WL' => 'E02004470',
        '3WN' => 'E02004470',
        '3WT' => 'E02004470',
        '3WW' => 'E02004470',
        '3WX' => 'E02004470',
        '3WY' => 'E02004470',
        '3WZ' => 'E02004470',
        '3XA' => 'E02004472',
        '3XB' => 'E02004470',
        '3XD' => 'E02004472',
        '3XE' => 'E02004472',
        '3XF' => 'E02004472',
        '3XG' => 'E02003299',
        '3XH' => 'E02003299',
        '3XJ' => 'E02004470',
        '3XL' => 'E02004472',
        '3XN' => 'E02003299',
        '3XP' => 'E02003299',
        '3XQ' => 'E02003299',
        '3XR' => 'E02003299',
        '3XS' => 'E02004472',
        '3XT' => 'E02004470',
        '3XU' => 'E02004471',
        '3XW' => 'E02004472',
        '3YD' => 'E02004472',
        '3YE' => 'E02004472',
        '3YF' => 'E02004470',
        '3YG' => 'E02004470',
        '3YP' => 'E02004472',
        '3YQ' => 'E02004472',
        '3YT' => 'E02004470',
        '3YW' => 'E02004470',
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