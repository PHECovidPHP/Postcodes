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
final class BS9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AE' => 'E02003017',
        '0AG' => 'E02003017',
        '0AJ' => 'E02003017',
        '0AN' => 'E02003017',
        '0AQ' => 'E02003017',
        '0AR' => 'E02003017',
        '0AT' => 'E02003017',
        '0AU' => 'E02003017',
        '0BD' => 'E02003017',
        '0BE' => 'E02003017',
        '0BF' => 'E02003017',
        '0BH' => 'E02003017',
        '0BJ' => 'E02003017',
        '0BP' => 'E02003017',
        '0BW' => 'E02003017',
        '0BX' => 'E02003017',
        '0BY' => 'E02003017',
        '0BZ' => 'E02003017',
        '0DA' => 'E02003017',
        '0DB' => 'E02003017',
        '0DD' => 'E02003017',
        '0DE' => 'E02003017',
        '0DF' => 'E02003017',
        '0DG' => 'E02003017',
        '0DH' => 'E02003017',
        '0DJ' => 'E02003017',
        '0DL' => 'E02003017',
        '0DN' => 'E02003017',
        '0DP' => 'E02003017',
        '0DQ' => 'E02003017',
        '0DR' => 'E02003017',
        '0DS' => 'E02003017',
        '0DT' => 'E02003017',
        '0DU' => 'E02003017',
        '0DW' => 'E02003017',
        '0DX' => 'E02003017',
        '0DY' => 'E02003017',
        '0DZ' => 'E02003017',
        '0EA' => 'E02003017',
        '0EB' => 'E02003017',
        '0ED' => 'E02003017',
        '0EE' => 'E02003017',
        '0EF' => 'E02003017',
        '0EG' => 'E02003017',
        '0EH' => 'E02003017',
        '0EJ' => 'E02003017',
        '0EL' => 'E02003017',
        '0EN' => 'E02003017',
        '0EP' => 'E02003017',
        '0EQ' => 'E02003017',
        '0ER' => 'E02003017',
        '0ES' => 'E02003017',
        '0ET' => 'E02003017',
        '1AA' => 'E02003020',
        '1AB' => 'E02003020',
        '1AD' => 'E02003026',
        '1AE' => 'E02003026',
        '1AF' => 'E02003026',
        '1AG' => 'E02003026',
        '1AH' => 'E02003026',
        '1AJ' => 'E02003020',
        '1AL' => 'E02003020',
        '1AN' => 'E02003026',
        '1AP' => 'E02003020',
        '1AQ' => 'E02003020',
        '1AR' => 'E02003026',
        '1AS' => 'E02003020',
        '1AT' => 'E02003017',
        '1AU' => 'E02003026',
        '1AW' => 'E02003026',
        '1AX' => 'E02003026',
        '1AY' => 'E02003026',
        '1AZ' => 'E02003026',
        '1BA' => 'E02003026',
        '1BB' => 'E02003026',
        '1BD' => 'E02003026',
        '1BE' => 'E02003026',
        '1BF' => 'E02003026',
        '1BG' => 'E02003026',
        '1BH' => 'E02003026',
        '1BJ' => 'E02003026',
        '1BL' => 'E02003026',
        '1BN' => 'E02003026',
        '1BP' => 'E02003026',
        '1BQ' => 'E02003026',
        '1BS' => 'E02003026',
        '1BT' => 'E02003026',
        '1BU' => 'E02003026',
        '1BW' => 'E02003026',
        '1BX' => 'E02003026',
        '1BY' => 'E02003026',
        '1BZ' => 'E02003026',
        '1DA' => 'E02003026',
        '1DB' => 'E02003026',
        '1DD' => 'E02003026',
        '1DE' => 'E02003026',
        '1DF' => 'E02003026',
        '1DG' => 'E02003026',
        '1DH' => 'E02003026',
        '1DJ' => 'E02003026',
        '1DL' => 'E02003026',
        '1DN' => 'E02003026',
        '1DP' => 'E02003026',
        '1DQ' => 'E02003026',
        '1DR' => 'E02003026',
        '1DS' => 'E02003026',
        '1DT' => 'E02003026',
        '1DU' => 'E02003026',
        '1DW' => 'E02003026',
        '1DX' => 'E02003026',
        '1DY' => 'E02003026',
        '1DZ' => 'E02003026',
        '1EA' => 'E02003026',
        '1EB' => 'E02003026',
        '1ED' => 'E02003026',
        '1EE' => 'E02003017',
        '1EF' => 'E02003017',
        '1EG' => 'E02003026',
        '1EH' => 'E02003026',
        '1EJ' => 'E02003026',
        '1EL' => 'E02003026',
        '1EN' => 'E02003026',
        '1EP' => 'E02003026',
        '1EQ' => 'E02003026',
        '1ER' => 'E02003026',
        '1ES' => 'E02003026',
        '1ET' => 'E02003026',
        '1EU' => 'E02003026',
        '1EW' => 'E02003026',
        '1EX' => 'E02003026',
        '1EY' => 'E02003026',
        '1EZ' => 'E02003026',
        '1FB' => 'E02003026',
        '1FD' => 'E02003017',
        '1FE' => 'E02003026',
        '1FF' => 'E02003026',
        '1FG' => 'E02003026',
        '1FH' => 'E02003026',
        '1FJ' => 'E02003026',
        '1FL' => 'E02003026',
        '1FN' => 'E02003026',
        '1FP' => 'E02003026',
        '1HA' => 'E02003026',
        '1HB' => 'E02003026',
        '1HD' => 'E02003026',
        '1HE' => 'E02003026',
        '1HF' => 'E02003026',
        '1HG' => 'E02003026',
        '1HH' => 'E02003026',
        '1HJ' => 'E02003026',
        '1HL' => 'E02003026',
        '1HN' => 'E02003026',
        '1HP' => 'E02003026',
        '1HQ' => 'E02003026',
        '1HR' => 'E02003026',
        '1HS' => 'E02003017',
        '1HT' => 'E02003017',
        '1HU' => 'E02003017',
        '1HW' => 'E02003026',
        '1HX' => 'E02003026',
        '1HY' => 'E02003017',
        '1HZ' => 'E02003026',
        '1JA' => 'E02003026',
        '1JB' => 'E02003026',
        '1JD' => 'E02003026',
        '1JE' => 'E02003026',
        '1JF' => 'E02003026',
        '1JG' => 'E02003026',
        '1JH' => 'E02003026',
        '1JJ' => 'E02003026',
        '1JL' => 'E02003026',
        '1JN' => 'E02003026',
        '1JP' => 'E02003026',
        '1JQ' => 'E02003026',
        '1JR' => 'E02003026',
        '1JS' => 'E02003026',
        '1JT' => 'E02003026',
        '1JU' => 'E02003026',
        '1JW' => 'E02003026',
        '1JX' => 'E02003026',
        '1JY' => 'E02003026',
        '1JZ' => 'E02003026',
        '1LA' => 'E02003026',
        '1LB' => 'E02003026',
        '1LD' => 'E02003026',
        '1LE' => 'E02003026',
        '1LF' => 'E02003026',
        '1LG' => 'E02003026',
        '1LH' => 'E02003026',
        '1LJ' => 'E02003026',
        '1LL' => 'E02003026',
        '1LN' => 'E02003026',
        '1LP' => 'E02003026',
        '1LQ' => 'E02003026',
        '1LR' => 'E02003026',
        '1LS' => 'E02003026',
        '1LT' => 'E02003026',
        '1LU' => 'E02003026',
        '1LW' => 'E02003026',
        '1LX' => 'E02003026',
        '1LY' => 'E02003026',
        '1LZ' => 'E02003026',
        '1NA' => 'E02003026',
        '1NB' => 'E02003026',
        '1ND' => 'E02003026',
        '1NE' => 'E02003026',
        '1NF' => 'E02003026',
        '1NG' => 'E02003026',
        '1NH' => 'E02003026',
        '1NJ' => 'E02003026',
        '1NL' => 'E02003026',
        '1NN' => 'E02003026',
        '1NP' => 'E02003026',
        '1NQ' => 'E02003026',
        '1NR' => 'E02003026',
        '1NS' => 'E02003026',
        '1NT' => 'E02003026',
        '1NU' => 'E02003026',
        '1NW' => 'E02003026',
        '1NX' => 'E02003026',
        '1NY' => 'E02003026',
        '1NZ' => 'E02003026',
        '1PA' => 'E02003026',
        '1PB' => 'E02003026',
        '1PD' => 'E02003026',
        '1PE' => 'E02003026',
        '1PF' => 'E02003026',
        '1PG' => 'E02003026',
        '1PH' => 'E02003026',
        '1PJ' => 'E02003026',
        '1PL' => 'E02003026',
        '1PN' => 'E02003026',
        '1PP' => 'E02003026',
        '1PQ' => 'E02003026',
        '1PR' => 'E02003026',
        '1PS' => 'E02003026',
        '1PT' => 'E02003026',
        '1PU' => 'E02003026',
        '1PW' => 'E02003026',
        '1PX' => 'E02003026',
        '1PY' => 'E02003026',
        '1PZ' => 'E02003026',
        '1QA' => 'E02003026',
        '1QB' => 'E02003026',
        '1QD' => 'E02003026',
        '1QE' => 'E02003026',
        '1QF' => 'E02003026',
        '1QG' => 'E02003026',
        '1QH' => 'E02003026',
        '1QJ' => 'E02003026',
        '1QL' => 'E02003026',
        '1QN' => 'E02003026',
        '1QP' => 'E02003026',
        '1QQ' => 'E02003026',
        '1QR' => 'E02003026',
        '1QS' => 'E02003026',
        '1QT' => 'E02003026',
        '1QU' => 'E02003026',
        '1QW' => 'E02003026',
        '1QX' => 'E02003026',
        '1QY' => 'E02003026',
        '1QZ' => 'E02003026',
        '1RA' => 'E02003026',
        '1RB' => 'E02003026',
        '1RD' => 'E02003026',
        '1RE' => 'E02003026',
        '1RF' => 'E02003026',
        '1RG' => 'E02003026',
        '1RH' => 'E02003026',
        '1RJ' => 'E02003026',
        '1RL' => 'E02003026',
        '1RN' => 'E02003026',
        '1RP' => 'E02003026',
        '1RQ' => 'E02003026',
        '1RR' => 'E02003026',
        '1RS' => 'E02003026',
        '1RT' => 'E02003026',
        '1RU' => 'E02003026',
        '1RW' => 'E02003026',
        '1RX' => 'E02003026',
        '1RY' => 'E02003017',
        '1RZ' => 'E02003026',
        '1SA' => 'E02003026',
        '1SB' => 'E02003026',
        '1SD' => 'E02003026',
        '1SE' => 'E02003026',
        '1SF' => 'E02003026',
        '1SG' => 'E02003026',
        '1SH' => 'E02003026',
        '1SJ' => 'E02003026',
        '1SL' => 'E02003026',
        '1SN' => 'E02003026',
        '1SP' => 'E02003026',
        '1SQ' => 'E02003026',
        '1SR' => 'E02003026',
        '1SS' => 'E02003026',
        '1ST' => 'E02003026',
        '1SU' => 'E02003026',
        '1SW' => 'E02003026',
        '1SX' => 'E02003026',
        '1SY' => 'E02003026',
        '1SZ' => 'E02003026',
        '1TA' => 'E02003017',
        '1TB' => 'E02003026',
        '1TD' => 'E02003026',
        '1TE' => 'E02003026',
        '1TF' => 'E02003017',
        '1TG' => 'E02003026',
        '1TH' => 'E02003026',
        '1TJ' => 'E02003026',
        '1TP' => 'E02003026',
        '1TQ' => 'E02003017',
        '1TR' => 'E02003026',
        '1TT' => 'E02003026',
        '1TU' => 'E02003026',
        '1TW' => 'E02003026',
        '1TX' => 'E02003026',
        '1TY' => 'E02003026',
        '1TZ' => 'E02003026',
        '1UA' => 'E02003017',
        '1UB' => 'E02003026',
        '1UD' => 'E02003017',
        '1UX' => 'E02003017',
        '1UY' => 'E02003017',
        '1UZ' => 'E02003017',
        '1WB' => 'E02003017',
        '1WD' => 'E02003017',
        '1WE' => 'E02003017',
        '1WF' => 'E02003017',
        '1WG' => 'E02003017',
        '1WH' => 'E02003026',
        '1WJ' => 'E02003017',
        '1WL' => 'E02003017',
        '1WN' => 'E02003017',
        '1WP' => 'E02003017',
        '1WQ' => 'E02003017',
        '1WR' => 'E02003017',
        '1WS' => 'E02003017',
        '1WT' => 'E02003017',
        '1WU' => 'E02003017',
        '1WW' => 'E02003017',
        '1WX' => 'E02003017',
        '1WY' => 'E02003017',
        '1WZ' => 'E02003017',
        '1XA' => 'E02003017',
        '1XJ' => 'E02003017',
        '1XL' => 'E02003017',
        '1XN' => 'E02003017',
        '1XQ' => 'E02003017',
        '1XX' => 'E02003017',
        '1XY' => 'E02003017',
        '1XZ' => 'E02003017',
        '1YA' => 'E02003017',
        '1YB' => 'E02003017',
        '1YD' => 'E02003026',
        '1YE' => 'E02003017',
        '1YF' => 'E02003017',
        '1YG' => 'E02003026',
        '1YH' => 'E02003017',
        '1YJ' => 'E02003017',
        '1YL' => 'E02003026',
        '1YN' => 'E02003017',
        '1YP' => 'E02003017',
        '1YQ' => 'E02003017',
        '1YR' => 'E02003017',
        '1YS' => 'E02003017',
        '1YT' => 'E02003017',
        '1YU' => 'E02003017',
        '1YW' => 'E02003017',
        '1ZH' => 'E02003017',
        '1ZJ' => 'E02003017',
        '1ZN' => 'E02003017',
        '1ZQ' => 'E02003017',
        '1ZR' => 'E02003017',
        '1ZX' => 'E02003017',
        '2AA' => 'E02003020',
        '2AB' => 'E02003026',
        '2AD' => 'E02003020',
        '2AE' => 'E02003020',
        '2AF' => 'E02003026',
        '2AG' => 'E02003020',
        '2AH' => 'E02003020',
        '2AJ' => 'E02003026',
        '2AL' => 'E02003026',
        '2AN' => 'E02003026',
        '2AP' => 'E02003020',
        '2AQ' => 'E02003026',
        '2AR' => 'E02003026',
        '2AS' => 'E02003020',
        '2AT' => 'E02003026',
        '2AU' => 'E02003020',
        '2AW' => 'E02003026',
        '2AX' => 'E02003020',
        '2AY' => 'E02003020',
        '2AZ' => 'E02003026',
        '2BA' => 'E02003026',
        '2BB' => 'E02003026',
        '2BD' => 'E02003026',
        '2BE' => 'E02003026',
        '2BF' => 'E02003017',
        '2BG' => 'E02003026',
        '2BH' => 'E02003026',
        '2BJ' => 'E02003020',
        '2BL' => 'E02003026',
        '2BN' => 'E02003026',
        '2BP' => 'E02003026',
        '2BQ' => 'E02003026',
        '2BS' => 'E02003026',
        '2BT' => 'E02003026',
        '2BU' => 'E02003018',
        '2BW' => 'E02003026',
        '2BX' => 'E02003018',
        '2BY' => 'E02003017',
        '2BZ' => 'E02003017',
        '2DA' => 'E02003026',
        '2DB' => 'E02003026',
        '2DD' => 'E02003018',
        '2DE' => 'E02003026',
        '2DF' => 'E02003026',
        '2DG' => 'E02003026',
        '2DH' => 'E02003026',
        '2DJ' => 'E02003026',
        '2DL' => 'E02003026',
        '2DN' => 'E02003026',
        '2DP' => 'E02003026',
        '2DQ' => 'E02003026',
        '2DR' => 'E02003026',
        '2DS' => 'E02003026',
        '2DT' => 'E02003018',
        '2DU' => 'E02003018',
        '2DW' => 'E02003026',
        '2DX' => 'E02003018',
        '2DY' => 'E02003018',
        '2DZ' => 'E02003018',
        '2EA' => 'E02003018',
        '2EB' => 'E02003018',
        '2ED' => 'E02003018',
        '2EE' => 'E02003018',
        '2EF' => 'E02003018',
        '2EG' => 'E02003018',
        '2EH' => 'E02003018',
        '2EJ' => 'E02003018',
        '2EP' => 'E02003018',
        '2EQ' => 'E02003018',
        '2ER' => 'E02003018',
        '2ES' => 'E02003018',
        '2ET' => 'E02003018',
        '2EU' => 'E02003018',
        '2EX' => 'E02003018',
        '2EY' => 'E02003018',
        '2EZ' => 'E02003018',
        '2HA' => 'E02003018',
        '2HB' => 'E02003018',
        '2HD' => 'E02003018',
        '2HE' => 'E02003018',
        '2HF' => 'E02003018',
        '2HG' => 'E02003018',
        '2HH' => 'E02003018',
        '2HJ' => 'E02003018',
        '2HL' => 'E02003018',
        '2HN' => 'E02003018',
        '2HP' => 'E02003018',
        '2HQ' => 'E02003018',
        '2HR' => 'E02003018',
        '2HS' => 'E02003018',
        '2HT' => 'E02003018',
        '2HU' => 'E02003018',
        '2HW' => 'E02003018',
        '2HX' => 'E02003018',
        '2HY' => 'E02003018',
        '2HZ' => 'E02003018',
        '2JA' => 'E02003018',
        '2JB' => 'E02003018',
        '2JD' => 'E02003018',
        '2JE' => 'E02003018',
        '2JF' => 'E02003018',
        '2JG' => 'E02003018',
        '2JH' => 'E02003018',
        '2JJ' => 'E02003018',
        '2JL' => 'E02003018',
        '2JN' => 'E02003018',
        '2JP' => 'E02003018',
        '2JQ' => 'E02003018',
        '2JR' => 'E02003018',
        '2JS' => 'E02003018',
        '2JT' => 'E02003018',
        '2JU' => 'E02003018',
        '2JW' => 'E02003018',
        '2JX' => 'E02003018',
        '2JY' => 'E02003018',
        '2JZ' => 'E02003018',
        '2LA' => 'E02003018',
        '2LB' => 'E02003018',
        '2LD' => 'E02003018',
        '2LE' => 'E02003018',
        '2LF' => 'E02003018',
        '2LG' => 'E02003018',
        '2LL' => 'E02003026',
        '2LN' => 'E02003026',
        '2LP' => 'E02003026',
        '2LQ' => 'E02003018',
        '2LR' => 'E02003026',
        '2LS' => 'E02003026',
        '2LT' => 'E02003026',
        '2LU' => 'E02003018',
        '2LW' => 'E02003018',
        '2LX' => 'E02003018',
        '2LY' => 'E02003018',
        '2LZ' => 'E02003018',
        '2NA' => 'E02003018',
        '2NB' => 'E02003018',
        '2ND' => 'E02003018',
        '2NE' => 'E02003018',
        '2NF' => 'E02003018',
        '2NG' => 'E02003018',
        '2NH' => 'E02003018',
        '2NJ' => 'E02003018',
        '2NL' => 'E02003018',
        '2NN' => 'E02003018',
        '2NP' => 'E02003018',
        '2NQ' => 'E02003018',
        '2NR' => 'E02003018',
        '2NS' => 'E02003018',
        '2NT' => 'E02003018',
        '2NU' => 'E02003018',
        '2NW' => 'E02003018',
        '2NX' => 'E02003018',
        '2NY' => 'E02003018',
        '2PA' => 'E02003018',
        '2PB' => 'E02003018',
        '2PD' => 'E02003018',
        '2PE' => 'E02003018',
        '2PF' => 'E02003018',
        '2PG' => 'E02003018',
        '2PH' => 'E02003018',
        '2PJ' => 'E02003018',
        '2PL' => 'E02003018',
        '2PN' => 'E02003018',
        '2PP' => 'E02003018',
        '2PQ' => 'E02003018',
        '2PR' => 'E02003018',
        '2PS' => 'E02003018',
        '2PT' => 'E02003018',
        '2PU' => 'E02003018',
        '2PW' => 'E02003018',
        '2PX' => 'E02003018',
        '2PY' => 'E02003018',
        '2PZ' => 'E02003018',
        '2QA' => 'E02003018',
        '2QB' => 'E02003018',
        '2QD' => 'E02003018',
        '2QE' => 'E02003018',
        '2QF' => 'E02003018',
        '2QG' => 'E02003018',
        '2QH' => 'E02003018',
        '2QJ' => 'E02003018',
        '2QL' => 'E02003018',
        '2QN' => 'E02003018',
        '2QP' => 'E02003018',
        '2QQ' => 'E02003018',
        '2QR' => 'E02003018',
        '2QS' => 'E02003018',
        '2QT' => 'E02003018',
        '2QU' => 'E02003018',
        '2QW' => 'E02003018',
        '2QX' => 'E02003018',
        '2QY' => 'E02003018',
        '2QZ' => 'E02003018',
        '2RA' => 'E02003018',
        '2RB' => 'E02003018',
        '2RD' => 'E02003018',
        '2RE' => 'E02003018',
        '2RF' => 'E02003018',
        '2RG' => 'E02003020',
        '2RH' => 'E02003018',
        '2RJ' => 'E02003018',
        '2RL' => 'E02003018',
        '2RN' => 'E02003018',
        '2RP' => 'E02003018',
        '2RQ' => 'E02003018',
        '2RR' => 'E02003018',
        '2RS' => 'E02003018',
        '2RT' => 'E02003018',
        '2RU' => 'E02003018',
        '2RW' => 'E02003018',
        '2RX' => 'E02003018',
        '2RY' => 'E02003018',
        '2RZ' => 'E02003018',
        '2SA' => 'E02003018',
        '2SB' => 'E02003018',
        '2SD' => 'E02003026',
        '2SE' => 'E02003026',
        '2SZ' => 'E02003026',
        '2WA' => 'E02003017',
        '2WB' => 'E02003017',
        '2WD' => 'E02003017',
        '2WE' => 'E02003017',
        '2WG' => 'E02003017',
        '2WH' => 'E02003017',
        '2WJ' => 'E02003017',
        '2WL' => 'E02003017',
        '2WN' => 'E02003017',
        '2WP' => 'E02003017',
        '2WQ' => 'E02003017',
        '2WR' => 'E02003017',
        '2WS' => 'E02003017',
        '2WT' => 'E02003017',
        '2WU' => 'E02003017',
        '2WW' => 'E02003017',
        '2WX' => 'E02003017',
        '2WY' => 'E02003017',
        '2WZ' => 'E02003017',
        '2XN' => 'E02003017',
        '2YA' => 'E02003017',
        '2YB' => 'E02003018',
        '2YD' => 'E02003017',
        '2YE' => 'E02003017',
        '2YF' => 'E02003017',
        '2YG' => 'E02003018',
        '2YH' => 'E02003017',
        '2YJ' => 'E02003017',
        '2YL' => 'E02003017',
        '2YN' => 'E02003017',
        '2YP' => 'E02003017',
        '2ZQ' => 'E02003017',
        '3AA' => 'E02003017',
        '3AB' => 'E02003017',
        '3AD' => 'E02003017',
        '3AE' => 'E02003017',
        '3AF' => 'E02003017',
        '3AG' => 'E02003017',
        '3AH' => 'E02003017',
        '3AJ' => 'E02003017',
        '3AL' => 'E02003017',
        '3AN' => 'E02003017',
        '3AP' => 'E02003017',
        '3AQ' => 'E02003017',
        '3AR' => 'E02003020',
        '3AS' => 'E02003017',
        '3AT' => 'E02003017',
        '3AU' => 'E02003017',
        '3AW' => 'E02003017',
        '3AX' => 'E02003028',
        '3AY' => 'E02003028',
        '3AZ' => 'E02003020',
        '3BA' => 'E02003020',
        '3BB' => 'E02003017',
        '3BD' => 'E02003017',
        '3BE' => 'E02003017',
        '3BF' => 'E02003017',
        '3BG' => 'E02003017',
        '3BH' => 'E02003017',
        '3BJ' => 'E02003017',
        '3BL' => 'E02003017',
        '3BN' => 'E02003017',
        '3BP' => 'E02003017',
        '3BQ' => 'E02003017',
        '3BS' => 'E02003017',
        '3BT' => 'E02003017',
        '3BU' => 'E02003017',
        '3BW' => 'E02003017',
        '3BX' => 'E02003020',
        '3BY' => 'E02003017',
        '3BZ' => 'E02003020',
        '3DA' => 'E02003017',
        '3DB' => 'E02003017',
        '3DD' => 'E02003017',
        '3DE' => 'E02003017',
        '3DF' => 'E02003017',
        '3DG' => 'E02003017',
        '3DH' => 'E02003017',
        '3DJ' => 'E02003017',
        '3DL' => 'E02003017',
        '3DN' => 'E02003017',
        '3DP' => 'E02003017',
        '3DQ' => 'E02003017',
        '3DR' => 'E02003017',
        '3DS' => 'E02003020',
        '3DT' => 'E02003017',
        '3DU' => 'E02003017',
        '3DW' => 'E02003017',
        '3DX' => 'E02003017',
        '3DY' => 'E02003017',
        '3DZ' => 'E02003017',
        '3EA' => 'E02003017',
        '3EB' => 'E02003017',
        '3ED' => 'E02003017',
        '3EE' => 'E02003017',
        '3EF' => 'E02003017',
        '3EG' => 'E02003017',
        '3EH' => 'E02003017',
        '3EJ' => 'E02003017',
        '3EL' => 'E02003017',
        '3EN' => 'E02003017',
        '3EP' => 'E02003017',
        '3EQ' => 'E02003017',
        '3ER' => 'E02003017',
        '3ES' => 'E02003017',
        '3ET' => 'E02003017',
        '3EU' => 'E02003017',
        '3EW' => 'E02003017',
        '3EX' => 'E02003017',
        '3EY' => 'E02003017',
        '3EZ' => 'E02003017',
        '3FB' => 'E02003017',
        '3FD' => 'E02003020',
        '3FE' => 'E02003017',
        '3FG' => 'E02003017',
        '3GG' => 'E02003017',
        '3HA' => 'E02003017',
        '3HB' => 'E02003013',
        '3HD' => 'E02003013',
        '3HE' => 'E02003013',
        '3HF' => 'E02003017',
        '3HG' => 'E02003017',
        '3HH' => 'E02003017',
        '3HJ' => 'E02003017',
        '3HL' => 'E02003017',
        '3HN' => 'E02003017',
        '3HP' => 'E02003017',
        '3HQ' => 'E02003017',
        '3HR' => 'E02003017',
        '3HS' => 'E02003017',
        '3HT' => 'E02003017',
        '3HU' => 'E02003017',
        '3HW' => 'E02003017',
        '3HX' => 'E02003017',
        '3HY' => 'E02003017',
        '3HZ' => 'E02003017',
        '3JA' => 'E02003020',
        '3JB' => 'E02003020',
        '3JD' => 'E02003020',
        '3JE' => 'E02003017',
        '3JF' => 'E02003017',
        '3JG' => 'E02003017',
        '3JH' => 'E02003017',
        '3JJ' => 'E02003017',
        '3JL' => 'E02003017',
        '3JN' => 'E02003017',
        '3JP' => 'E02003017',
        '3JQ' => 'E02003020',
        '3JR' => 'E02003017',
        '3JS' => 'E02003017',
        '3JT' => 'E02003017',
        '3JU' => 'E02003017',
        '3JW' => 'E02003020',
        '3JX' => 'E02003020',
        '3JY' => 'E02003020',
        '3JZ' => 'E02003020',
        '3LA' => 'E02003020',
        '3LB' => 'E02003020',
        '3LD' => 'E02003020',
        '3LE' => 'E02003020',
        '3LF' => 'E02003020',
        '3LG' => 'E02003020',
        '3LH' => 'E02003020',
        '3LJ' => 'E02003020',
        '3LL' => 'E02003020',
        '3LN' => 'E02003020',
        '3LP' => 'E02003020',
        '3LQ' => 'E02003020',
        '3LR' => 'E02003020',
        '3LS' => 'E02003020',
        '3LT' => 'E02003020',
        '3LU' => 'E02003020',
        '3LW' => 'E02003020',
        '3LX' => 'E02003020',
        '3LY' => 'E02003020',
        '3LZ' => 'E02003020',
        '3NA' => 'E02003020',
        '3NB' => 'E02003020',
        '3ND' => 'E02003017',
        '3NE' => 'E02003020',
        '3NF' => 'E02003020',
        '3NG' => 'E02003020',
        '3NH' => 'E02003020',
        '3NJ' => 'E02003020',
        '3NL' => 'E02003020',
        '3NN' => 'E02003017',
        '3NP' => 'E02003020',
        '3NQ' => 'E02003020',
        '3NR' => 'E02003020',
        '3NS' => 'E02003020',
        '3NT' => 'E02003020',
        '3NU' => 'E02003020',
        '3NW' => 'E02003020',
        '3NX' => 'E02003020',
        '3NY' => 'E02003020',
        '3NZ' => 'E02003020',
        '3PA' => 'E02003017',
        '3PB' => 'E02003020',
        '3PD' => 'E02003020',
        '3PE' => 'E02003020',
        '3PF' => 'E02003020',
        '3PG' => 'E02003020',
        '3PH' => 'E02003020',
        '3PJ' => 'E02003020',
        '3PL' => 'E02003020',
        '3PN' => 'E02003020',
        '3PP' => 'E02003020',
        '3PQ' => 'E02003020',
        '3PR' => 'E02003020',
        '3PS' => 'E02003020',
        '3PT' => 'E02003020',
        '3PU' => 'E02003020',
        '3PW' => 'E02003020',
        '3PX' => 'E02003020',
        '3PY' => 'E02003020',
        '3PZ' => 'E02003020',
        '3QA' => 'E02003017',
        '3QB' => 'E02003020',
        '3QG' => 'E02003017',
        '3QH' => 'E02003020',
        '3QJ' => 'E02003020',
        '3QL' => 'E02003020',
        '3QN' => 'E02003020',
        '3QP' => 'E02003020',
        '3QQ' => 'E02003017',
        '3QR' => 'E02003020',
        '3QS' => 'E02003020',
        '3QT' => 'E02003020',
        '3QU' => 'E02003020',
        '3QW' => 'E02003020',
        '3QX' => 'E02003020',
        '3QY' => 'E02003020',
        '3QZ' => 'E02003020',
        '3RA' => 'E02003020',
        '3RB' => 'E02003020',
        '3RH' => 'E02003020',
        '3RJ' => 'E02003020',
        '3RL' => 'E02003020',
        '3RN' => 'E02003020',
        '3RP' => 'E02003020',
        '3RQ' => 'E02003017',
        '3RR' => 'E02003020',
        '3RS' => 'E02003020',
        '3RT' => 'E02003020',
        '3RU' => 'E02003020',
        '3RW' => 'E02003020',
        '3RX' => 'E02003020',
        '3RY' => 'E02003020',
        '3RZ' => 'E02003020',
        '3SA' => 'E02003020',
        '3SB' => 'E02003020',
        '3SD' => 'E02003020',
        '3SE' => 'E02003020',
        '3SF' => 'E02003020',
        '3SJ' => 'E02003020',
        '3SL' => 'E02003020',
        '3SN' => 'E02003020',
        '3SP' => 'E02003020',
        '3SR' => 'E02003020',
        '3SS' => 'E02003020',
        '3ST' => 'E02003020',
        '3SU' => 'E02003020',
        '3SW' => 'E02003020',
        '3SX' => 'E02003020',
        '3SY' => 'E02003020',
        '3SZ' => 'E02003020',
        '3TA' => 'E02003020',
        '3TB' => 'E02003020',
        '3TD' => 'E02003020',
        '3TE' => 'E02003020',
        '3TF' => 'E02003020',
        '3TG' => 'E02003020',
        '3TJ' => 'E02003020',
        '3TL' => 'E02003020',
        '3TN' => 'E02003020',
        '3TP' => 'E02003020',
        '3TQ' => 'E02003020',
        '3TR' => 'E02003020',
        '3TS' => 'E02003020',
        '3TT' => 'E02003020',
        '3TU' => 'E02003020',
        '3TW' => 'E02003020',
        '3TX' => 'E02003020',
        '3TY' => 'E02003020',
        '3TZ' => 'E02003020',
        '3UA' => 'E02003020',
        '3UB' => 'E02003020',
        '3UD' => 'E02003020',
        '3UE' => 'E02003020',
        '3UF' => 'E02003020',
        '3UG' => 'E02003020',
        '3UH' => 'E02003020',
        '3UJ' => 'E02003017',
        '3UL' => 'E02003020',
        '3UN' => 'E02003020',
        '3UP' => 'E02003020',
        '3UQ' => 'E02003020',
        '3UR' => 'E02003020',
        '3US' => 'E02003020',
        '3UT' => 'E02003020',
        '3UU' => 'E02003020',
        '3UW' => 'E02003020',
        '3UX' => 'E02003020',
        '3UZ' => 'E02003020',
        '3WA' => 'E02003017',
        '3WW' => 'E02003017',
        '3WX' => 'E02003017',
        '3WY' => 'E02003017',
        '3WZ' => 'E02003017',
        '3XJ' => 'E02003020',
        '3XN' => 'E02003017',
        '3XZ' => 'E02003017',
        '3YA' => 'E02003020',
        '3YB' => 'E02003020',
        '3YD' => 'E02003017',
        '3YE' => 'E02003020',
        '3YF' => 'E02003020',
        '3YG' => 'E02003017',
        '3YH' => 'E02003020',
        '3YJ' => 'E02003017',
        '3YL' => 'E02003020',
        '3YN' => 'E02003017',
        '3YP' => 'E02003017',
        '3YQ' => 'E02003017',
        '3YR' => 'E02003017',
        '3YS' => 'E02003017',
        '3YW' => 'E02003017',
        '3YX' => 'E02003017',
        '3ZN' => 'E02003017',
        '4AA' => 'E02003017',
        '4AB' => 'E02003017',
        '4AD' => 'E02003017',
        '4AE' => 'E02003017',
        '4AF' => 'E02003017',
        '4AG' => 'E02003017',
        '4AH' => 'E02003017',
        '4AJ' => 'E02003017',
        '4AL' => 'E02003017',
        '4AN' => 'E02003022',
        '4AP' => 'E02003022',
        '4AQ' => 'E02003017',
        '4AR' => 'E02003022',
        '4AS' => 'E02003022',
        '4AT' => 'E02003017',
        '4AU' => 'E02003022',
        '4AW' => 'E02003022',
        '4AX' => 'E02003022',
        '4AZ' => 'E02003017',
        '4BA' => 'E02003017',
        '4BB' => 'E02003017',
        '4BD' => 'E02003022',
        '4BE' => 'E02003022',
        '4BF' => 'E02003017',
        '4BG' => 'E02003017',
        '4BH' => 'E02003022',
        '4BJ' => 'E02003017',
        '4BL' => 'E02003017',
        '4BN' => 'E02003017',
        '4BP' => 'E02003017',
        '4BQ' => 'E02003022',
        '4BS' => 'E02003017',
        '4BT' => 'E02003017',
        '4BU' => 'E02003017',
        '4BW' => 'E02003017',
        '4BX' => 'E02003022',
        '4BY' => 'E02003017',
        '4BZ' => 'E02003017',
        '4DA' => 'E02003017',
        '4DB' => 'E02003017',
        '4DD' => 'E02003017',
        '4DE' => 'E02003017',
        '4DF' => 'E02003017',
        '4DG' => 'E02003017',
        '4DH' => 'E02003017',
        '4DJ' => 'E02003015',
        '4DP' => 'E02003017',
        '4DQ' => 'E02003017',
        '4DR' => 'E02003017',
        '4DS' => 'E02003017',
        '4DT' => 'E02003017',
        '4DU' => 'E02003017',
        '4DW' => 'E02003017',
        '4DX' => 'E02003017',
        '4DY' => 'E02003017',
        '4DZ' => 'E02003017',
        '4EA' => 'E02003017',
        '4EB' => 'E02003022',
        '4ED' => 'E02003022',
        '4EE' => 'E02003022',
        '4EF' => 'E02003022',
        '4EG' => 'E02003022',
        '4EH' => 'E02003022',
        '4EJ' => 'E02003022',
        '4EL' => 'E02003022',
        '4EN' => 'E02003017',
        '4EP' => 'E02003017',
        '4EQ' => 'E02003022',
        '4ET' => 'E02003017',
        '4EU' => 'E02003017',
        '4EW' => 'E02003017',
        '4EX' => 'E02003028',
        '4EY' => 'E02003028',
        '4EZ' => 'E02003017',
        '4HE' => 'E02003022',
        '4HF' => 'E02003022',
        '4HG' => 'E02003022',
        '4HH' => 'E02003028',
        '4HJ' => 'E02003028',
        '4HL' => 'E02003028',
        '4HN' => 'E02003028',
        '4HP' => 'E02003028',
        '4HQ' => 'E02003022',
        '4HR' => 'E02003022',
        '4HS' => 'E02003028',
        '4HT' => 'E02003022',
        '4HU' => 'E02003022',
        '4HW' => 'E02003028',
        '4HX' => 'E02003022',
        '4HY' => 'E02003022',
        '4HZ' => 'E02003022',
        '4JA' => 'E02003022',
        '4JB' => 'E02003028',
        '4JD' => 'E02003028',
        '4JE' => 'E02003022',
        '4JF' => 'E02003028',
        '4JG' => 'E02003028',
        '4JH' => 'E02003017',
        '4JJ' => 'E02003017',
        '4JL' => 'E02003017',
        '4JN' => 'E02003017',
        '4JP' => 'E02003017',
        '4JQ' => 'E02003022',
        '4JR' => 'E02003017',
        '4JS' => 'E02003017',
        '4JT' => 'E02003017',
        '4JU' => 'E02003017',
        '4JW' => 'E02003017',
        '4JX' => 'E02003017',
        '4JY' => 'E02003017',
        '4JZ' => 'E02003017',
        '4LA' => 'E02003017',
        '4LB' => 'E02003017',
        '4LD' => 'E02003022',
        '4LE' => 'E02003022',
        '4LF' => 'E02003022',
        '4LG' => 'E02003022',
        '4LH' => 'E02003022',
        '4LJ' => 'E02003022',
        '4LL' => 'E02003022',
        '4LN' => 'E02003022',
        '4LP' => 'E02003022',
        '4LQ' => 'E02003022',
        '4LR' => 'E02003022',
        '4LS' => 'E02003022',
        '4LT' => 'E02003022',
        '4LU' => 'E02003022',
        '4LW' => 'E02003022',
        '4LX' => 'E02003022',
        '4LY' => 'E02003022',
        '4LZ' => 'E02003022',
        '4NA' => 'E02003017',
        '4NB' => 'E02003017',
        '4ND' => 'E02003017',
        '4NE' => 'E02003017',
        '4NF' => 'E02003017',
        '4NG' => 'E02003017',
        '4NH' => 'E02003022',
        '4NJ' => 'E02003017',
        '4NL' => 'E02003022',
        '4NN' => 'E02003017',
        '4NP' => 'E02003022',
        '4NQ' => 'E02003017',
        '4NR' => 'E02003022',
        '4NS' => 'E02003022',
        '4NT' => 'E02003022',
        '4NU' => 'E02003022',
        '4NW' => 'E02003022',
        '4NX' => 'E02003022',
        '4NY' => 'E02003022',
        '4NZ' => 'E02003022',
        '4PA' => 'E02003022',
        '4PF' => 'E02003022',
        '4PG' => 'E02003022',
        '4PH' => 'E02003022',
        '4PJ' => 'E02003022',
        '4PL' => 'E02003022',
        '4PN' => 'E02003022',
        '4PP' => 'E02003022',
        '4PQ' => 'E02003022',
        '4PR' => 'E02003022',
        '4PS' => 'E02003022',
        '4PT' => 'E02003022',
        '4PU' => 'E02003022',
        '4PW' => 'E02003022',
        '4PX' => 'E02003022',
        '4PY' => 'E02003022',
        '4PZ' => 'E02003022',
        '4QA' => 'E02003022',
        '4QB' => 'E02003022',
        '4QD' => 'E02003022',
        '4QE' => 'E02003022',
        '4QF' => 'E02003022',
        '4QG' => 'E02003022',
        '4QH' => 'E02003017',
        '4QJ' => 'E02003022',
        '4QL' => 'E02003022',
        '4QN' => 'E02003015',
        '4QP' => 'E02003015',
        '4QQ' => 'E02003022',
        '4QR' => 'E02003015',
        '4QS' => 'E02003022',
        '4QT' => 'E02003015',
        '4QU' => 'E02003015',
        '4QW' => 'E02003022',
        '4QX' => 'E02003022',
        '4QY' => 'E02003015',
        '4QZ' => 'E02003022',
        '4RG' => 'E02003022',
        '4RH' => 'E02003022',
        '4RJ' => 'E02003022',
        '4RL' => 'E02003022',
        '4RN' => 'E02003022',
        '4RP' => 'E02003022',
        '4RQ' => 'E02003022',
        '4RR' => 'E02003022',
        '4RS' => 'E02003022',
        '4RT' => 'E02003022',
        '4RU' => 'E02003022',
        '4RW' => 'E02003022',
        '4RX' => 'E02003022',
        '4RY' => 'E02003022',
        '4RZ' => 'E02003022',
        '4SA' => 'E02003022',
        '4SB' => 'E02003022',
        '4SD' => 'E02003022',
        '4SE' => 'E02003022',
        '4SF' => 'E02003022',
        '4SG' => 'E02003022',
        '4SH' => 'E02003022',
        '4SJ' => 'E02003022',
        '4SL' => 'E02003015',
        '4SN' => 'E02003015',
        '4SP' => 'E02003022',
        '4SR' => 'E02003022',
        '4SS' => 'E02003022',
        '4ST' => 'E02003022',
        '4SU' => 'E02003022',
        '4SW' => 'E02003015',
        '4SX' => 'E02003022',
        '4SY' => 'E02003022',
        '4SZ' => 'E02003022',
        '4TA' => 'E02003022',
        '4TB' => 'E02003022',
        '4TD' => 'E02003022',
        '4TE' => 'E02003022',
        '4TF' => 'E02003022',
        '4UA' => 'E02003017',
        '4UB' => 'E02003017',
        '4UD' => 'E02003017',
        '4UE' => 'E02003017',
        '4UF' => 'E02003017',
        '4UG' => 'E02003017',
        '4UH' => 'E02003017',
        '4UJ' => 'E02003017',
        '4UL' => 'E02003017',
        '4UN' => 'E02003017',
        '4UP' => 'E02003022',
        '4UQ' => 'E02003017',
        '4WA' => 'E02003017',
        '4WB' => 'E02003017',
        '4WD' => 'E02003017',
        '4WS' => 'E02003017',
        '4WT' => 'E02003017',
        '4WU' => 'E02003017',
        '4WW' => 'E02003017',
        '4WX' => 'E02003017',
        '4WY' => 'E02003017',
        '4WZ' => 'E02003017',
        '4XJ' => 'E02003017',
        '4XQ' => 'E02003017',
        '4YA' => 'E02003022',
        '4YB' => 'E02003022',
        '4YD' => 'E02003017',
        '4YE' => 'E02003017',
        '4YF' => 'E02003017',
        '4YG' => 'E02003017',
        '4YH' => 'E02003017',
        '4YJ' => 'E02003017',
        '4YL' => 'E02003017',
        '4YS' => 'E02003017',
        '4ZN' => 'E02003017',
        '4ZQ' => 'E02003017',
        '4ZR' => 'E02003017',
        '4ZX' => 'E02003017',
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
