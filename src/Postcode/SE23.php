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
final class SE23
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000671',
        '1AB' => 'E02000671',
        '1AD' => 'E02000671',
        '1AE' => 'E02000671',
        '1AF' => 'E02000671',
        '1AG' => 'E02000671',
        '1AH' => 'E02000671',
        '1AJ' => 'E02000671',
        '1AL' => 'E02000671',
        '1AN' => 'E02000671',
        '1AP' => 'E02000679',
        '1AQ' => 'E02000671',
        '1AR' => 'E02000671',
        '1AS' => 'E02000671',
        '1AT' => 'E02000671',
        '1AU' => 'E02000671',
        '1AW' => 'E02000679',
        '1AX' => 'E02000671',
        '1AY' => 'E02000671',
        '1AZ' => 'E02000671',
        '1BB' => 'E02000671',
        '1BD' => 'E02000671',
        '1BE' => 'E02000671',
        '1BF' => 'E02000671',
        '1BG' => 'E02000671',
        '1BQ' => 'E02000671',
        '1BS' => 'E02000676',
        '1BT' => 'E02000676',
        '1BU' => 'E02000676',
        '1BW' => 'E02000676',
        '1BX' => 'E02000676',
        '1BY' => 'E02000671',
        '1BZ' => 'E02000676',
        '1DA' => 'E02000676',
        '1DB' => 'E02000676',
        '1DD' => 'E02000676',
        '1DE' => 'E02000676',
        '1DF' => 'E02000671',
        '1DG' => 'E02000671',
        '1DH' => 'E02000671',
        '1DJ' => 'E02000671',
        '1DL' => 'E02000671',
        '1DN' => 'E02000671',
        '1DP' => 'E02000671',
        '1DQ' => 'E02000671',
        '1DR' => 'E02000671',
        '1DS' => 'E02000671',
        '1DT' => 'E02000671',
        '1DU' => 'E02000671',
        '1DW' => 'E02000671',
        '1DX' => 'E02000671',
        '1DY' => 'E02000671',
        '1DZ' => 'E02000671',
        '1EA' => 'E02000671',
        '1EB' => 'E02000671',
        '1ED' => 'E02000679',
        '1EF' => 'E02000671',
        '1EG' => 'E02000671',
        '1EH' => 'E02000679',
        '1EJ' => 'E02000671',
        '1EL' => 'E02000671',
        '1EN' => 'E02000671',
        '1EP' => 'E02000671',
        '1EQ' => 'E02000671',
        '1ER' => 'E02000671',
        '1ES' => 'E02000671',
        '1ET' => 'E02000671',
        '1EU' => 'E02000671',
        '1EW' => 'E02000671',
        '1EX' => 'E02000671',
        '1EY' => 'E02000671',
        '1EZ' => 'E02000671',
        '1GA' => 'E02000671',
        '1HA' => 'E02000671',
        '1HB' => 'E02000671',
        '1HD' => 'E02000671',
        '1HE' => 'E02000676',
        '1HF' => 'E02000671',
        '1HG' => 'E02000676',
        '1HH' => 'E02000671',
        '1HJ' => 'E02000671',
        '1HL' => 'E02000671',
        '1HN' => 'E02000671',
        '1HP' => 'E02000671',
        '1HQ' => 'E02000671',
        '1HR' => 'E02000671',
        '1HS' => 'E02000673',
        '1HT' => 'E02000673',
        '1HU' => 'E02000671',
        '1HW' => 'E02000671',
        '1HX' => 'E02000671',
        '1HY' => 'E02000671',
        '1HZ' => 'E02000671',
        '1JA' => 'E02000671',
        '1JB' => 'E02000671',
        '1JD' => 'E02000671',
        '1JE' => 'E02000671',
        '1JF' => 'E02000671',
        '1JG' => 'E02000671',
        '1JH' => 'E02000671',
        '1JL' => 'E02000671',
        '1JN' => 'E02000671',
        '1JP' => 'E02000671',
        '1JQ' => 'E02000671',
        '1JS' => 'E02000671',
        '1JT' => 'E02000671',
        '1JU' => 'E02000671',
        '1JW' => 'E02000671',
        '1JX' => 'E02000671',
        '1JY' => 'E02000671',
        '1JZ' => 'E02000671',
        '1LA' => 'E02000667',
        '1LB' => 'E02000671',
        '1LD' => 'E02000671',
        '1LE' => 'E02000671',
        '1LF' => 'E02000671',
        '1LH' => 'E02000671',
        '1LJ' => 'E02000671',
        '1LL' => 'E02000671',
        '1LN' => 'E02000671',
        '1LP' => 'E02000671',
        '1LR' => 'E02000671',
        '1LS' => 'E02000671',
        '1LT' => 'E02000671',
        '1LW' => 'E02000671',
        '1LZ' => 'E02000671',
        '1NA' => 'E02000671',
        '1ND' => 'E02000671',
        '1NE' => 'E02000671',
        '1NF' => 'E02000671',
        '1NG' => 'E02000671',
        '1NH' => 'E02000671',
        '1NJ' => 'E02000671',
        '1NL' => 'E02000671',
        '1NN' => 'E02000671',
        '1NP' => 'E02000671',
        '1NQ' => 'E02000671',
        '1NR' => 'E02000671',
        '1NS' => 'E02000679',
        '1NT' => 'E02000671',
        '1NU' => 'E02000671',
        '1NW' => 'E02000667',
        '1NX' => 'E02000671',
        '1NY' => 'E02000671',
        '1NZ' => 'E02000671',
        '1PA' => 'E02000667',
        '1PB' => 'E02000667',
        '1PD' => 'E02000667',
        '1PE' => 'E02000671',
        '1PF' => 'E02000671',
        '1PG' => 'E02000667',
        '1PH' => 'E02000667',
        '1PJ' => 'E02000667',
        '1PL' => 'E02000667',
        '1PN' => 'E02000671',
        '1PP' => 'E02000671',
        '1PQ' => 'E02000667',
        '1PR' => 'E02000671',
        '1PS' => 'E02000671',
        '1PT' => 'E02000671',
        '1PU' => 'E02000671',
        '1PW' => 'E02000671',
        '1PX' => 'E02000671',
        '1PY' => 'E02000671',
        '1PZ' => 'E02000671',
        '1QA' => 'E02000671',
        '1QB' => 'E02000671',
        '1QD' => 'E02000671',
        '1QE' => 'E02000671',
        '1QF' => 'E02000671',
        '1QG' => 'E02000671',
        '1QJ' => 'E02000671',
        '1QQ' => 'E02000671',
        '1QY' => 'E02000671',
        '1RD' => 'E02000671',
        '1RE' => 'E02000671',
        '1RF' => 'E02000671',
        '1RH' => 'E02000671',
        '1RJ' => 'E02000671',
        '1RL' => 'E02000671',
        '1RN' => 'E02000671',
        '1RP' => 'E02000671',
        '1RQ' => 'E02000671',
        '1RR' => 'E02000671',
        '1RS' => 'E02000671',
        '1RT' => 'E02000671',
        '1RU' => 'E02000671',
        '1RW' => 'E02000671',
        '1RX' => 'E02000671',
        '1RY' => 'E02000671',
        '1RZ' => 'E02000671',
        '1SA' => 'E02000671',
        '1SB' => 'E02000671',
        '1SD' => 'E02000671',
        '1SE' => 'E02000671',
        '1SH' => 'E02000671',
        '1SJ' => 'E02000671',
        '1SL' => 'E02000671',
        '1SN' => 'E02000671',
        '1SP' => 'E02000671',
        '1SQ' => 'E02000679',
        '1SW' => 'E02000671',
        '1UW' => 'E02000679',
        '1UX' => 'E02000679',
        '1UY' => 'E02000679',
        '1UZ' => 'E02000679',
        '1WA' => 'E02000679',
        '1WB' => 'E02000679',
        '1WD' => 'E02000679',
        '1WE' => 'E02000679',
        '1WF' => 'E02000679',
        '1WG' => 'E02000671',
        '1WH' => 'E02000679',
        '1WJ' => 'E02000679',
        '1WL' => 'E02000679',
        '1WN' => 'E02000679',
        '1WP' => 'E02000679',
        '1WQ' => 'E02000679',
        '1WR' => 'E02000679',
        '1WS' => 'E02000679',
        '1WT' => 'E02000679',
        '1WU' => 'E02000679',
        '1WW' => 'E02000679',
        '1WX' => 'E02000679',
        '1WY' => 'E02000679',
        '1WZ' => 'E02000679',
        '1XA' => 'E02000679',
        '1XB' => 'E02000679',
        '1XD' => 'E02000679',
        '1XE' => 'E02000679',
        '1XF' => 'E02000679',
        '1XG' => 'E02000679',
        '1XH' => 'E02000679',
        '1XJ' => 'E02000679',
        '1XL' => 'E02000679',
        '1XN' => 'E02000679',
        '1XP' => 'E02000679',
        '1XQ' => 'E02000679',
        '1XR' => 'E02000679',
        '1XS' => 'E02000679',
        '1XT' => 'E02000679',
        '1XU' => 'E02000679',
        '1XW' => 'E02000679',
        '1XX' => 'E02000679',
        '1XY' => 'E02000679',
        '1XZ' => 'E02000679',
        '1YA' => 'E02000679',
        '1YB' => 'E02000679',
        '1YD' => 'E02000679',
        '1YH' => 'E02000679',
        '1YQ' => 'E02000679',
        '1YT' => 'E02000679',
        '1YU' => 'E02000679',
        '1YW' => 'E02000679',
        '1YX' => 'E02000679',
        '1YY' => 'E02000679',
        '1ZA' => 'E02000671',
        '1ZB' => 'E02000679',
        '1ZD' => 'E02000679',
        '1ZE' => 'E02000671',
        '1ZF' => 'E02000671',
        '1ZG' => 'E02000671',
        '1ZH' => 'E02000671',
        '1ZJ' => 'E02000679',
        '1ZL' => 'E02000679',
        '1ZN' => 'E02000671',
        '1ZP' => 'E02000671',
        '1ZQ' => 'E02000679',
        '1ZR' => 'E02000679',
        '1ZS' => 'E02000671',
        '1ZT' => 'E02000671',
        '1ZU' => 'E02000671',
        '1ZW' => 'E02000671',
        '1ZX' => 'E02000679',
        '2AA' => 'E02000676',
        '2AB' => 'E02000676',
        '2AD' => 'E02000676',
        '2AE' => 'E02000676',
        '2AF' => 'E02000676',
        '2AG' => 'E02000676',
        '2AH' => 'E02000676',
        '2AJ' => 'E02000676',
        '2AL' => 'E02000676',
        '2AN' => 'E02000679',
        '2AP' => 'E02000676',
        '2AQ' => 'E02000676',
        '2AR' => 'E02000679',
        '2AS' => 'E02000676',
        '2AT' => 'E02000676',
        '2AU' => 'E02000676',
        '2AX' => 'E02000679',
        '2AY' => 'E02000679',
        '2AZ' => 'E02000679',
        '2BA' => 'E02000679',
        '2BB' => 'E02000679',
        '2BD' => 'E02000679',
        '2BE' => 'E02000679',
        '2BG' => 'E02000679',
        '2BH' => 'E02000679',
        '2BJ' => 'E02000679',
        '2BL' => 'E02000679',
        '2BN' => 'E02000679',
        '2BQ' => 'E02000679',
        '2BT' => 'E02000679',
        '2BU' => 'E02000679',
        '2BW' => 'E02000679',
        '2BY' => 'E02000676',
        '2BZ' => 'E02000676',
        '2DA' => 'E02000676',
        '2DB' => 'E02000676',
        '2DD' => 'E02000676',
        '2DE' => 'E02000676',
        '2DF' => 'E02000676',
        '2DG' => 'E02000676',
        '2DH' => 'E02000676',
        '2DJ' => 'E02000676',
        '2DL' => 'E02000676',
        '2DN' => 'E02000676',
        '2DP' => 'E02000676',
        '2DQ' => 'E02000676',
        '2DR' => 'E02000676',
        '2DS' => 'E02000676',
        '2DT' => 'E02000676',
        '2DU' => 'E02000676',
        '2DW' => 'E02000676',
        '2DX' => 'E02000676',
        '2DY' => 'E02000676',
        '2DZ' => 'E02000676',
        '2EA' => 'E02000676',
        '2EB' => 'E02000676',
        '2ED' => 'E02000676',
        '2EE' => 'E02000676',
        '2EF' => 'E02000676',
        '2EP' => 'E02000676',
        '2ER' => 'E02000676',
        '2ES' => 'E02000676',
        '2ET' => 'E02000676',
        '2EU' => 'E02000676',
        '2EX' => 'E02000676',
        '2EY' => 'E02000676',
        '2EZ' => 'E02000676',
        '2GY' => 'E02000679',
        '2GZ' => 'E02000679',
        '2HA' => 'E02000676',
        '2HB' => 'E02000676',
        '2HN' => 'E02000676',
        '2HP' => 'E02000676',
        '2HR' => 'E02000676',
        '2HS' => 'E02000676',
        '2HT' => 'E02000676',
        '2HU' => 'E02000676',
        '2HW' => 'E02000676',
        '2HX' => 'E02000679',
        '2JA' => 'E02000679',
        '2JB' => 'E02000679',
        '2JD' => 'E02000676',
        '2JE' => 'E02000676',
        '2JF' => 'E02000679',
        '2JG' => 'E02000676',
        '2JH' => 'E02000676',
        '2JJ' => 'E02000676',
        '2JL' => 'E02000676',
        '2JN' => 'E02000676',
        '2JP' => 'E02000676',
        '2JQ' => 'E02000676',
        '2JR' => 'E02000679',
        '2JS' => 'E02000676',
        '2JW' => 'E02000676',
        '2LA' => 'E02000679',
        '2LB' => 'E02000679',
        '2LD' => 'E02000679',
        '2LE' => 'E02000673',
        '2LF' => 'E02000679',
        '2LG' => 'E02000679',
        '2LH' => 'E02000679',
        '2LJ' => 'E02000679',
        '2LL' => 'E02000679',
        '2LN' => 'E02000679',
        '2LP' => 'E02000679',
        '2LQ' => 'E02000679',
        '2LR' => 'E02000679',
        '2LS' => 'E02000679',
        '2LT' => 'E02000679',
        '2LU' => 'E02000679',
        '2LW' => 'E02000679',
        '2LX' => 'E02000679',
        '2LY' => 'E02000676',
        '2LZ' => 'E02000679',
        '2ND' => 'E02000679',
        '2NE' => 'E02000679',
        '2NF' => 'E02000679',
        '2NG' => 'E02000679',
        '2NH' => 'E02000679',
        '2NJ' => 'E02000679',
        '2NL' => 'E02000679',
        '2NN' => 'E02000679',
        '2NP' => 'E02000679',
        '2NQ' => 'E02000679',
        '2NR' => 'E02000679',
        '2NS' => 'E02000679',
        '2NT' => 'E02000679',
        '2NU' => 'E02000679',
        '2NW' => 'E02000679',
        '2NX' => 'E02000679',
        '2NY' => 'E02000679',
        '2NZ' => 'E02000679',
        '2PA' => 'E02000679',
        '2PB' => 'E02000679',
        '2PD' => 'E02000679',
        '2PH' => 'E02000679',
        '2PJ' => 'E02000676',
        '2PL' => 'E02000676',
        '2PN' => 'E02000679',
        '2PP' => 'E02000676',
        '2PQ' => 'E02000676',
        '2PR' => 'E02000676',
        '2PS' => 'E02000676',
        '2PT' => 'E02000676',
        '2PU' => 'E02000676',
        '2PW' => 'E02000676',
        '2PX' => 'E02000679',
        '2PY' => 'E02000679',
        '2PZ' => 'E02000676',
        '2QA' => 'E02000676',
        '2QB' => 'E02000676',
        '2QD' => 'E02000679',
        '2QG' => 'E02000679',
        '2QH' => 'E02000679',
        '2QJ' => 'E02000679',
        '2QL' => 'E02000679',
        '2QN' => 'E02000679',
        '2QP' => 'E02000679',
        '2QQ' => 'E02000679',
        '2QR' => 'E02000679',
        '2QS' => 'E02000679',
        '2QT' => 'E02000679',
        '2QU' => 'E02000681',
        '2QW' => 'E02000679',
        '2QX' => 'E02000679',
        '2QY' => 'E02000679',
        '2QZ' => 'E02000679',
        '2RA' => 'E02000679',
        '2RB' => 'E02000679',
        '2RD' => 'E02000679',
        '2RE' => 'E02000679',
        '2RF' => 'E02000679',
        '2RG' => 'E02000679',
        '2RH' => 'E02000679',
        '2RJ' => 'E02000679',
        '2RL' => 'E02000679',
        '2RN' => 'E02000681',
        '2RP' => 'E02000681',
        '2RQ' => 'E02000679',
        '2RR' => 'E02000681',
        '2RS' => 'E02000679',
        '2RT' => 'E02000679',
        '2RU' => 'E02000679',
        '2RW' => 'E02000681',
        '2RX' => 'E02000679',
        '2RY' => 'E02000679',
        '2RZ' => 'E02000679',
        '2SA' => 'E02000679',
        '2SB' => 'E02000679',
        '2SD' => 'E02000679',
        '2SE' => 'E02000676',
        '2SF' => 'E02000676',
        '2SG' => 'E02000676',
        '2SH' => 'E02000676',
        '2SJ' => 'E02000676',
        '2SL' => 'E02000676',
        '2SN' => 'E02000676',
        '2SP' => 'E02000676',
        '2SQ' => 'E02000676',
        '2SR' => 'E02000676',
        '2SS' => 'E02000676',
        '2ST' => 'E02000676',
        '2SU' => 'E02000676',
        '2SW' => 'E02000676',
        '2SX' => 'E02000676',
        '2SY' => 'E02000676',
        '2SZ' => 'E02000676',
        '2TA' => 'E02000679',
        '2TB' => 'E02000679',
        '2TD' => 'E02000679',
        '2TE' => 'E02000676',
        '2TF' => 'E02000676',
        '2TG' => 'E02000679',
        '2TH' => 'E02000679',
        '2TJ' => 'E02000679',
        '2TL' => 'E02000679',
        '2TN' => 'E02000679',
        '2TP' => 'E02000679',
        '2TQ' => 'E02000679',
        '2TR' => 'E02000676',
        '2TS' => 'E02000679',
        '2TT' => 'E02000679',
        '2TU' => 'E02000679',
        '2TW' => 'E02000679',
        '2TX' => 'E02000679',
        '2TY' => 'E02000679',
        '2TZ' => 'E02000679',
        '2UA' => 'E02000679',
        '2UB' => 'E02000679',
        '2UD' => 'E02000676',
        '2UE' => 'E02000679',
        '2UF' => 'E02000679',
        '2UG' => 'E02000679',
        '2UH' => 'E02000679',
        '2UJ' => 'E02000676',
        '2UL' => 'E02000679',
        '2UN' => 'E02000679',
        '2UP' => 'E02000679',
        '2UQ' => 'E02000679',
        '2UR' => 'E02000679',
        '2US' => 'E02000679',
        '2UT' => 'E02000679',
        '2UU' => 'E02000679',
        '2UW' => 'E02000679',
        '2UX' => 'E02000679',
        '2UY' => 'E02000679',
        '2UZ' => 'E02000679',
        '2WA' => 'E02000679',
        '2WB' => 'E02000679',
        '2WD' => 'E02000679',
        '2WE' => 'E02000679',
        '2WF' => 'E02000679',
        '2WG' => 'E02000679',
        '2WH' => 'E02000679',
        '2WJ' => 'E02000679',
        '2WL' => 'E02000679',
        '2WN' => 'E02000679',
        '2WP' => 'E02000679',
        '2WQ' => 'E02000679',
        '2WR' => 'E02000679',
        '2WS' => 'E02000679',
        '2WT' => 'E02000679',
        '2WU' => 'E02000679',
        '2WW' => 'E02000679',
        '2WX' => 'E02000679',
        '2WY' => 'E02000679',
        '2WZ' => 'E02000679',
        '2XA' => 'E02000679',
        '2XB' => 'E02000679',
        '2XD' => 'E02000679',
        '2XE' => 'E02000679',
        '2XF' => 'E02000679',
        '2XG' => 'E02000679',
        '2XH' => 'E02000679',
        '2XJ' => 'E02000679',
        '2XL' => 'E02000679',
        '2XN' => 'E02000679',
        '2XP' => 'E02000679',
        '2XQ' => 'E02000679',
        '2XR' => 'E02000679',
        '2XS' => 'E02000679',
        '2XT' => 'E02000679',
        '2XU' => 'E02000679',
        '2XW' => 'E02000679',
        '2XX' => 'E02000679',
        '2XY' => 'E02000679',
        '2YA' => 'E02000679',
        '2YB' => 'E02000679',
        '2YD' => 'E02000679',
        '2YE' => 'E02000679',
        '2YF' => 'E02000679',
        '2YG' => 'E02000679',
        '2YH' => 'E02000679',
        '2YJ' => 'E02000679',
        '2YL' => 'E02000679',
        '2YN' => 'E02000679',
        '2YP' => 'E02000679',
        '2YQ' => 'E02000679',
        '2YR' => 'E02000679',
        '2YS' => 'E02000679',
        '2YT' => 'E02000679',
        '2YU' => 'E02000679',
        '2YW' => 'E02000679',
        '2YX' => 'E02000679',
        '2YY' => 'E02000679',
        '2ZA' => 'E02000679',
        '2ZB' => 'E02000679',
        '2ZD' => 'E02000679',
        '2ZE' => 'E02000679',
        '2ZF' => 'E02000679',
        '2ZG' => 'E02000679',
        '2ZH' => 'E02000679',
        '2ZJ' => 'E02000679',
        '2ZL' => 'E02000679',
        '2ZN' => 'E02000679',
        '2ZP' => 'E02000679',
        '2ZQ' => 'E02000679',
        '2ZR' => 'E02000679',
        '2ZS' => 'E02000679',
        '2ZT' => 'E02000679',
        '2ZU' => 'E02000676',
        '2ZW' => 'E02000679',
        '2ZX' => 'E02000676',
        '3AA' => 'E02000673',
        '3AB' => 'E02000673',
        '3AD' => 'E02000673',
        '3AE' => 'E02000673',
        '3AF' => 'E02000673',
        '3AG' => 'E02000673',
        '3AH' => 'E02000673',
        '3AJ' => 'E02000673',
        '3AL' => 'E02000673',
        '3AN' => 'E02000673',
        '3AP' => 'E02000673',
        '3AQ' => 'E02000673',
        '3AR' => 'E02000673',
        '3AS' => 'E02000680',
        '3AT' => 'E02000673',
        '3AU' => 'E02000680',
        '3AW' => 'E02000673',
        '3AX' => 'E02000673',
        '3AY' => 'E02000673',
        '3AZ' => 'E02000679',
        '3BA' => 'E02000680',
        '3BB' => 'E02000673',
        '3BD' => 'E02000673',
        '3BE' => 'E02000673',
        '3BF' => 'E02000673',
        '3BG' => 'E02000673',
        '3BH' => 'E02000673',
        '3BJ' => 'E02000673',
        '3BL' => 'E02000673',
        '3BN' => 'E02000673',
        '3BP' => 'E02000673',
        '3BQ' => 'E02000673',
        '3BS' => 'E02000673',
        '3BT' => 'E02000673',
        '3BU' => 'E02000673',
        '3BW' => 'E02000673',
        '3BX' => 'E02000673',
        '3BY' => 'E02000673',
        '3BZ' => 'E02000673',
        '3DA' => 'E02000673',
        '3DB' => 'E02000673',
        '3DD' => 'E02000673',
        '3DE' => 'E02000673',
        '3DF' => 'E02000673',
        '3DG' => 'E02000673',
        '3DH' => 'E02000673',
        '3DJ' => 'E02000673',
        '3DL' => 'E02000673',
        '3DN' => 'E02000673',
        '3DP' => 'E02000838',
        '3DQ' => 'E02000673',
        '3DR' => 'E02000838',
        '3DS' => 'E02000838',
        '3DT' => 'E02000838',
        '3DU' => 'E02000838',
        '3DW' => 'E02000838',
        '3DX' => 'E02000838',
        '3DY' => 'E02000673',
        '3DZ' => 'E02000673',
        '3EA' => 'E02000673',
        '3EB' => 'E02000673',
        '3ED' => 'E02000673',
        '3EE' => 'E02000673',
        '3EF' => 'E02000673',
        '3EG' => 'E02000673',
        '3EH' => 'E02000680',
        '3EJ' => 'E02000673',
        '3EL' => 'E02000673',
        '3EN' => 'E02000673',
        '3EP' => 'E02000673',
        '3EQ' => 'E02000673',
        '3ER' => 'E02000673',
        '3ES' => 'E02000673',
        '3ET' => 'E02000673',
        '3EU' => 'E02000673',
        '3EW' => 'E02000673',
        '3EX' => 'E02000673',
        '3EZ' => 'E02000679',
        '3FZ' => 'E02000679',
        '3GD' => 'E02000679',
        '3GE' => 'E02000679',
        '3GF' => 'E02000679',
        '3GG' => 'E02000673',
        '3GH' => 'E02000679',
        '3GJ' => 'E02000679',
        '3GL' => 'E02000679',
        '3GN' => 'E02000673',
        '3GP' => 'E02000679',
        '3GQ' => 'E02000679',
        '3GR' => 'E02000679',
        '3GS' => 'E02000679',
        '3GT' => 'E02000679',
        '3GU' => 'E02000679',
        '3GW' => 'E02000679',
        '3GX' => 'E02000673',
        '3GY' => 'E02000679',
        '3GZ' => 'E02000679',
        '3HA' => 'E02000673',
        '3HB' => 'E02000673',
        '3HD' => 'E02000673',
        '3HE' => 'E02000673',
        '3HF' => 'E02000673',
        '3HG' => 'E02000673',
        '3HH' => 'E02000680',
        '3HJ' => 'E02000680',
        '3HL' => 'E02000679',
        '3HN' => 'E02000673',
        '3HP' => 'E02000680',
        '3HQ' => 'E02000673',
        '3HR' => 'E02000680',
        '3HS' => 'E02000680',
        '3HT' => 'E02000680',
        '3HU' => 'E02000680',
        '3HW' => 'E02000680',
        '3HX' => 'E02000680',
        '3HY' => 'E02000680',
        '3HZ' => 'E02000680',
        '3JA' => 'E02000673',
        '3JB' => 'E02000673',
        '3JF' => 'E02000680',
        '3JG' => 'E02000680',
        '3JH' => 'E02000680',
        '3JJ' => 'E02000680',
        '3JL' => 'E02000680',
        '3JN' => 'E02000680',
        '3JP' => 'E02000679',
        '3JQ' => 'E02000680',
        '3JR' => 'E02000679',
        '3JX' => 'E02000679',
        '3JY' => 'E02000679',
        '3JZ' => 'E02000679',
        '3LA' => 'E02000835',
        '3LB' => 'E02000673',
        '3LD' => 'E02000673',
        '3LE' => 'E02000835',
        '3LF' => 'E02000835',
        '3LG' => 'E02000679',
        '3LH' => 'E02000673',
        '3LJ' => 'E02000679',
        '3LL' => 'E02000679',
        '3LN' => 'E02000673',
        '3LP' => 'E02000679',
        '3LR' => 'E02000835',
        '3LS' => 'E02000679',
        '3LT' => 'E02000673',
        '3LU' => 'E02000673',
        '3LW' => 'E02000673',
        '3LX' => 'E02000673',
        '3LY' => 'E02000673',
        '3LZ' => 'E02000673',
        '3NA' => 'E02000673',
        '3NB' => 'E02000673',
        '3ND' => 'E02000673',
        '3NE' => 'E02000679',
        '3NF' => 'E02000673',
        '3NG' => 'E02000673',
        '3NH' => 'E02000673',
        '3NJ' => 'E02000673',
        '3NL' => 'E02000673',
        '3NN' => 'E02000673',
        '3NP' => 'E02000673',
        '3NQ' => 'E02000673',
        '3NR' => 'E02000673',
        '3NS' => 'E02000673',
        '3NT' => 'E02000673',
        '3NU' => 'E02000679',
        '3NW' => 'E02000673',
        '3NX' => 'E02000679',
        '3NY' => 'E02000679',
        '3NZ' => 'E02000673',
        '3PA' => 'E02000673',
        '3PB' => 'E02000679',
        '3PD' => 'E02000679',
        '3PE' => 'E02000673',
        '3PF' => 'E02000673',
        '3PG' => 'E02000673',
        '3PH' => 'E02000839',
        '3PJ' => 'E02000839',
        '3PL' => 'E02000839',
        '3PN' => 'E02000839',
        '3PP' => 'E02000839',
        '3PQ' => 'E02000673',
        '3PR' => 'E02000839',
        '3PS' => 'E02000839',
        '3PT' => 'E02000679',
        '3PU' => 'E02000673',
        '3PW' => 'E02000839',
        '3PX' => 'E02000679',
        '3PY' => 'E02000673',
        '3PZ' => 'E02000673',
        '3QA' => 'E02000673',
        '3QB' => 'E02000673',
        '3QD' => 'E02000673',
        '3QE' => 'E02000673',
        '3QF' => 'E02000673',
        '3QG' => 'E02000673',
        '3QH' => 'E02000673',
        '3QJ' => 'E02000679',
        '3QL' => 'E02000673',
        '3QN' => 'E02000835',
        '3QP' => 'E02000673',
        '3QQ' => 'E02000673',
        '3QR' => 'E02000673',
        '3QS' => 'E02000835',
        '3QT' => 'E02000835',
        '3QU' => 'E02000835',
        '3QW' => 'E02000679',
        '3QX' => 'E02000835',
        '3QY' => 'E02000835',
        '3QZ' => 'E02000835',
        '3RA' => 'E02000835',
        '3RB' => 'E02000679',
        '3RD' => 'E02000835',
        '3RE' => 'E02000835',
        '3RF' => 'E02000835',
        '3RG' => 'E02000673',
        '3RH' => 'E02000679',
        '3RJ' => 'E02000673',
        '3RL' => 'E02000673',
        '3RN' => 'E02000673',
        '3RP' => 'E02000673',
        '3RQ' => 'E02000679',
        '3RR' => 'E02000673',
        '3RS' => 'E02000673',
        '3RT' => 'E02000673',
        '3RU' => 'E02000673',
        '3RW' => 'E02000673',
        '3RX' => 'E02000673',
        '3RY' => 'E02000673',
        '3RZ' => 'E02000673',
        '3SA' => 'E02000673',
        '3SB' => 'E02000673',
        '3SD' => 'E02000673',
        '3SE' => 'E02000673',
        '3SF' => 'E02000673',
        '3SG' => 'E02000673',
        '3SH' => 'E02000673',
        '3SJ' => 'E02000673',
        '3SL' => 'E02000673',
        '3SN' => 'E02000679',
        '3SP' => 'E02000679',
        '3SQ' => 'E02000673',
        '3SR' => 'E02000673',
        '3SS' => 'E02000679',
        '3ST' => 'E02000679',
        '3SU' => 'E02000673',
        '3SW' => 'E02000673',
        '3SX' => 'E02000673',
        '3SY' => 'E02000673',
        '3SZ' => 'E02000673',
        '3TA' => 'E02000673',
        '3TB' => 'E02000673',
        '3TD' => 'E02000673',
        '3TE' => 'E02000673',
        '3TF' => 'E02000673',
        '3TG' => 'E02000673',
        '3TH' => 'E02000673',
        '3TJ' => 'E02000673',
        '3TL' => 'E02000673',
        '3TN' => 'E02000679',
        '3TP' => 'E02000673',
        '3TQ' => 'E02000673',
        '3TR' => 'E02000673',
        '3TS' => 'E02000673',
        '3TT' => 'E02000673',
        '3TU' => 'E02000673',
        '3TW' => 'E02000673',
        '3TX' => 'E02000673',
        '3TY' => 'E02000673',
        '3TZ' => 'E02000680',
        '3UA' => 'E02000679',
        '3UB' => 'E02000673',
        '3UD' => 'E02000673',
        '3UE' => 'E02000673',
        '3UF' => 'E02000673',
        '3UG' => 'E02000673',
        '3UH' => 'E02000673',
        '3UJ' => 'E02000673',
        '3UL' => 'E02000680',
        '3UN' => 'E02000680',
        '3UP' => 'E02000680',
        '3UQ' => 'E02000673',
        '3UR' => 'E02000673',
        '3US' => 'E02000680',
        '3UT' => 'E02000680',
        '3UU' => 'E02000680',
        '3UW' => 'E02000680',
        '3UX' => 'E02000680',
        '3UY' => 'E02000680',
        '3UZ' => 'E02000673',
        '3WA' => 'E02000679',
        '3WB' => 'E02000679',
        '3WD' => 'E02000679',
        '3WE' => 'E02000679',
        '3WF' => 'E02000679',
        '3WG' => 'E02000679',
        '3WH' => 'E02000679',
        '3WJ' => 'E02000679',
        '3WL' => 'E02000679',
        '3WN' => 'E02000679',
        '3WP' => 'E02000679',
        '3WQ' => 'E02000679',
        '3WR' => 'E02000679',
        '3WS' => 'E02000679',
        '3WT' => 'E02000679',
        '3WU' => 'E02000679',
        '3WW' => 'E02000679',
        '3WX' => 'E02000679',
        '3WY' => 'E02000679',
        '3WZ' => 'E02000679',
        '3XA' => 'E02000673',
        '3XB' => 'E02000673',
        '3XD' => 'E02000680',
        '3XE' => 'E02000680',
        '3XF' => 'E02000680',
        '3XG' => 'E02000680',
        '3XH' => 'E02000680',
        '3XJ' => 'E02000680',
        '3XL' => 'E02000680',
        '3XN' => 'E02000680',
        '3XP' => 'E02000673',
        '3XQ' => 'E02000680',
        '3XR' => 'E02000680',
        '3XS' => 'E02000679',
        '3XT' => 'E02000673',
        '3XU' => 'E02000673',
        '3XW' => 'E02000680',
        '3XX' => 'E02000679',
        '3XY' => 'E02000673',
        '3XZ' => 'E02000673',
        '3YA' => 'E02000673',
        '3YB' => 'E02000680',
        '3YD' => 'E02000680',
        '3YE' => 'E02000680',
        '3YF' => 'E02000680',
        '3YG' => 'E02000680',
        '3YH' => 'E02000680',
        '3YJ' => 'E02000680',
        '3YL' => 'E02000680',
        '3YN' => 'E02000680',
        '3YP' => 'E02000680',
        '3YQ' => 'E02000680',
        '3YR' => 'E02000680',
        '3YS' => 'E02000680',
        '3YT' => 'E02000679',
        '3YU' => 'E02000679',
        '3YW' => 'E02000680',
        '3YX' => 'E02000680',
        '3YY' => 'E02000679',
        '3YZ' => 'E02000679',
        '3ZA' => 'E02000679',
        '3ZB' => 'E02000679',
        '3ZD' => 'E02000679',
        '3ZE' => 'E02000679',
        '3ZF' => 'E02000679',
        '3ZG' => 'E02000679',
        '3ZH' => 'E02000679',
        '3ZJ' => 'E02000679',
        '3ZL' => 'E02000679',
        '3ZN' => 'E02000673',
        '3ZP' => 'E02000679',
        '3ZQ' => 'E02000679',
        '3ZR' => 'E02000679',
        '3ZS' => 'E02000679',
        '3ZT' => 'E02000679',
        '3ZU' => 'E02000679',
        '3ZW' => 'E02000679',
        '3ZX' => 'E02000673',
        '9AB' => 'E02000679',
        '9AJ' => 'E02000679',
        '9AL' => 'E02000679',
        '9AP' => 'E02000679',
        '9AQ' => 'E02000679',
        '9AS' => 'E02000679',
        '9AZ' => 'E02000679',
        '9BB' => 'E02000679',
        '9BD' => 'E02000679',
        '9BE' => 'E02000679',
        '9BF' => 'E02000679',
        '9BG' => 'E02000679',
        '9BN' => 'E02000679',
        '9BP' => 'E02000679',
        '9BS' => 'E02000679',
        '9BT' => 'E02000679',
        '9BU' => 'E02000679',
        '9BW' => 'E02000679',
        '9BX' => 'E02000679',
        '9BY' => 'E02000679',
        '9BZ' => 'E02000679',
        '9DA' => 'E02000679',
        '9DB' => 'E02000679',
        '9DD' => 'E02000679',
        '9DE' => 'E02000679',
        '9DF' => 'E02000679',
        '9DG' => 'E02000679',
        '9DH' => 'E02000679',
        '9DJ' => 'E02000679',
        '9DL' => 'E02000679',
        '9DN' => 'E02000679',
        '9DP' => 'E02000679',
        '9DQ' => 'E02000679',
        '9DR' => 'E02000679',
        '9DS' => 'E02000679',
        '9DT' => 'E02000679',
        '9DU' => 'E02000679',
        '9DW' => 'E02000679',
        '9DX' => 'E02000679',
        '9DY' => 'E02000679',
        '9DZ' => 'E02000679',
        '9EA' => 'E02000679',
        '9EB' => 'E02000679',
        '9ED' => 'E02000679',
        '9EE' => 'E02000679',
        '9EF' => 'E02000679',
        '9EG' => 'E02000679',
        '9EH' => 'E02000679',
        '9EJ' => 'E02000679',
        '9EL' => 'E02000679',
        '9EN' => 'E02000679',
        '9EP' => 'E02000679',
        '9ER' => 'E02000679',
        '9ES' => 'E02000679',
        '9ET' => 'E02000679',
        '9EU' => 'E02000679',
        '9EW' => 'E02000679',
        '9EX' => 'E02000679',
        '9EY' => 'E02000679',
        '9EZ' => 'E02000679',
        '9FA' => 'E02000679',
        '9FB' => 'E02000679',
        '9FD' => 'E02000679',
        '9FE' => 'E02000679',
        '9FF' => 'E02000679',
        '9FG' => 'E02000679',
        '9FH' => 'E02000679',
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
