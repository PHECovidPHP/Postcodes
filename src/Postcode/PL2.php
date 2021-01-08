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
final class PL2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003141',
        '1AB' => 'E02003141',
        '1AD' => 'E02003141',
        '1AE' => 'E02003141',
        '1AF' => 'E02003141',
        '1AG' => 'E02003147',
        '1AH' => 'E02003147',
        '1AJ' => 'E02003147',
        '1AL' => 'E02003147',
        '1AN' => 'E02003141',
        '1AP' => 'E02003141',
        '1AQ' => 'E02003141',
        '1AR' => 'E02003147',
        '1AS' => 'E02003147',
        '1AT' => 'E02003141',
        '1AU' => 'E02003141',
        '1AW' => 'E02003147',
        '1AX' => 'E02003141',
        '1AY' => 'E02003141',
        '1AZ' => 'E02003141',
        '1BA' => 'E02003141',
        '1BB' => 'E02003141',
        '1BD' => 'E02003147',
        '1BE' => 'E02003147',
        '1BG' => 'E02003141',
        '1BH' => 'E02003145',
        '1BJ' => 'E02003141',
        '1BL' => 'E02003141',
        '1BN' => 'E02003141',
        '1BP' => 'E02003141',
        '1BQ' => 'E02003141',
        '1BR' => 'E02003141',
        '1BS' => 'E02003141',
        '1BT' => 'E02003141',
        '1BU' => 'E02003141',
        '1BW' => 'E02003141',
        '1BX' => 'E02003141',
        '1BY' => 'E02003141',
        '1BZ' => 'E02003141',
        '1DA' => 'E02003147',
        '1DB' => 'E02003147',
        '1DD' => 'E02003147',
        '1DE' => 'E02003147',
        '1DF' => 'E02003147',
        '1DG' => 'E02003147',
        '1DH' => 'E02003147',
        '1DJ' => 'E02003147',
        '1DL' => 'E02003147',
        '1DN' => 'E02003147',
        '1DP' => 'E02003141',
        '1DQ' => 'E02003141',
        '1DR' => 'E02003141',
        '1DS' => 'E02003141',
        '1DT' => 'E02003141',
        '1DU' => 'E02003141',
        '1DW' => 'E02003141',
        '1DX' => 'E02003141',
        '1DY' => 'E02003141',
        '1DZ' => 'E02003141',
        '1EA' => 'E02003147',
        '1EB' => 'E02003141',
        '1ED' => 'E02003141',
        '1EE' => 'E02003141',
        '1EF' => 'E02003141',
        '1EG' => 'E02003141',
        '1EH' => 'E02003141',
        '1EJ' => 'E02003141',
        '1EL' => 'E02003141',
        '1EN' => 'E02003141',
        '1EP' => 'E02003141',
        '1EQ' => 'E02003141',
        '1ER' => 'E02003145',
        '1ES' => 'E02003145',
        '1ET' => 'E02003145',
        '1EU' => 'E02003145',
        '1EW' => 'E02003141',
        '1EX' => 'E02003141',
        '1EY' => 'E02003141',
        '1EZ' => 'E02003141',
        '1FA' => 'E02003141',
        '1FB' => 'E02003147',
        '1FD' => 'E02003141',
        '1FE' => 'E02003141',
        '1HA' => 'E02003145',
        '1HH' => 'E02003145',
        '1HJ' => 'E02003141',
        '1HL' => 'E02003141',
        '1HN' => 'E02003141',
        '1HP' => 'E02003141',
        '1HR' => 'E02003141',
        '1HS' => 'E02003141',
        '1HT' => 'E02003141',
        '1HU' => 'E02003141',
        '1HW' => 'E02003141',
        '1HX' => 'E02003141',
        '1HY' => 'E02003141',
        '1HZ' => 'E02003141',
        '1JA' => 'E02003141',
        '1JB' => 'E02003141',
        '1JD' => 'E02003141',
        '1JE' => 'E02003141',
        '1JF' => 'E02003141',
        '1JG' => 'E02003141',
        '1JH' => 'E02003141',
        '1JJ' => 'E02003141',
        '1JL' => 'E02003141',
        '1JN' => 'E02003141',
        '1JP' => 'E02003141',
        '1JQ' => 'E02003141',
        '1JR' => 'E02003135',
        '1JS' => 'E02003147',
        '1JT' => 'E02003141',
        '1JU' => 'E02003141',
        '1JW' => 'E02003141',
        '1JX' => 'E02003141',
        '1JY' => 'E02003141',
        '1JZ' => 'E02003141',
        '1LA' => 'E02003141',
        '1LB' => 'E02003141',
        '1LD' => 'E02003141',
        '1LE' => 'E02003141',
        '1LF' => 'E02003135',
        '1LG' => 'E02003135',
        '1LH' => 'E02003135',
        '1LJ' => 'E02003141',
        '1LL' => 'E02003135',
        '1LN' => 'E02003141',
        '1LP' => 'E02003141',
        '1LQ' => 'E02003135',
        '1LR' => 'E02003141',
        '1LS' => 'E02003141',
        '1LT' => 'E02003141',
        '1LU' => 'E02003141',
        '1LW' => 'E02003141',
        '1LX' => 'E02003135',
        '1LY' => 'E02003141',
        '1NA' => 'E02003141',
        '1NE' => 'E02003141',
        '1NF' => 'E02003141',
        '1NG' => 'E02003141',
        '1NH' => 'E02003141',
        '1NJ' => 'E02003141',
        '1NL' => 'E02003141',
        '1NN' => 'E02003135',
        '1NP' => 'E02003141',
        '1NQ' => 'E02003141',
        '1NR' => 'E02003141',
        '1NS' => 'E02003141',
        '1NT' => 'E02003141',
        '1NU' => 'E02003141',
        '1NW' => 'E02003141',
        '1NX' => 'E02003135',
        '1NY' => 'E02003141',
        '1NZ' => 'E02003135',
        '1PA' => 'E02003141',
        '1PB' => 'E02003135',
        '1PH' => 'E02003141',
        '1PJ' => 'E02003141',
        '1PL' => 'E02003141',
        '1PN' => 'E02003141',
        '1PP' => 'E02003141',
        '1PQ' => 'E02003135',
        '1PR' => 'E02003141',
        '1PS' => 'E02003141',
        '1PT' => 'E02003141',
        '1PU' => 'E02003141',
        '1PW' => 'E02003141',
        '1PY' => 'E02003141',
        '1PZ' => 'E02003141',
        '1QA' => 'E02003141',
        '1QB' => 'E02003141',
        '1QD' => 'E02003141',
        '1QE' => 'E02003141',
        '1QF' => 'E02003141',
        '1QG' => 'E02003141',
        '1QH' => 'E02003141',
        '1QJ' => 'E02003141',
        '1QL' => 'E02003135',
        '1QQ' => 'E02003141',
        '1QR' => 'E02003147',
        '1QS' => 'E02003135',
        '1QT' => 'E02003135',
        '1QU' => 'E02003147',
        '1QX' => 'E02003147',
        '1QZ' => 'E02003147',
        '1RA' => 'E02003147',
        '1RB' => 'E02003147',
        '1RD' => 'E02003147',
        '1RE' => 'E02003135',
        '1RF' => 'E02003147',
        '1RG' => 'E02003147',
        '1RH' => 'E02003147',
        '1RJ' => 'E02003147',
        '1RL' => 'E02003147',
        '1RN' => 'E02003147',
        '1RP' => 'E02003141',
        '1RQ' => 'E02003147',
        '1RR' => 'E02003141',
        '1RS' => 'E02003147',
        '1RT' => 'E02003147',
        '1RU' => 'E02003147',
        '1RW' => 'E02003141',
        '1RX' => 'E02003147',
        '1RZ' => 'E02003147',
        '1SA' => 'E02003147',
        '1SB' => 'E02003147',
        '1SD' => 'E02003147',
        '1SE' => 'E02003147',
        '1SF' => 'E02003147',
        '1SG' => 'E02003147',
        '1SQ' => 'E02003147',
        '1UZ' => 'E02003147',
        '1WA' => 'E02003147',
        '1WB' => 'E02003147',
        '1WD' => 'E02003147',
        '1WE' => 'E02003152',
        '1WF' => 'E02003147',
        '1WG' => 'E02003152',
        '1WP' => 'E02003152',
        '1WQ' => 'E02003152',
        '1WR' => 'E02003152',
        '1WS' => 'E02003152',
        '1WT' => 'E02003152',
        '1WU' => 'E02003152',
        '1WW' => 'E02003152',
        '1WX' => 'E02003152',
        '1WY' => 'E02003152',
        '1WZ' => 'E02003147',
        '1XJ' => 'E02003152',
        '1XX' => 'E02003152',
        '1XY' => 'E02003152',
        '1XZ' => 'E02003152',
        '1YA' => 'E02003152',
        '1YB' => 'E02003152',
        '1YD' => 'E02003141',
        '1YE' => 'E02003141',
        '1YF' => 'E02003141',
        '1YG' => 'E02003152',
        '1YH' => 'E02003141',
        '1YJ' => 'E02003147',
        '1YL' => 'E02003141',
        '1YN' => 'E02003152',
        '1YP' => 'E02003152',
        '1YQ' => 'E02003152',
        '1YR' => 'E02003141',
        '1YS' => 'E02003141',
        '1YT' => 'E02003152',
        '1YU' => 'E02003152',
        '1YW' => 'E02003152',
        '1YX' => 'E02003152',
        '1YY' => 'E02003141',
        '1YZ' => 'E02003147',
        '1ZJ' => 'E02003152',
        '1ZN' => 'E02003152',
        '1ZQ' => 'E02003152',
        '1ZX' => 'E02003152',
        '2AA' => 'E02003135',
        '2AB' => 'E02003141',
        '2AD' => 'E02003135',
        '2AE' => 'E02003135',
        '2AF' => 'E02003135',
        '2AG' => 'E02003135',
        '2AH' => 'E02003135',
        '2AJ' => 'E02003135',
        '2AL' => 'E02003135',
        '2AN' => 'E02003135',
        '2AP' => 'E02003135',
        '2AQ' => 'E02003135',
        '2AR' => 'E02003135',
        '2AS' => 'E02003135',
        '2AT' => 'E02003135',
        '2AU' => 'E02003135',
        '2AW' => 'E02003135',
        '2AX' => 'E02003135',
        '2AY' => 'E02003135',
        '2AZ' => 'E02003135',
        '2BA' => 'E02003135',
        '2BB' => 'E02003135',
        '2BD' => 'E02003135',
        '2BE' => 'E02003135',
        '2BG' => 'E02003135',
        '2BH' => 'E02003135',
        '2BJ' => 'E02003135',
        '2BL' => 'E02003135',
        '2BN' => 'E02003135',
        '2BP' => 'E02003135',
        '2BQ' => 'E02003135',
        '2BR' => 'E02003135',
        '2BS' => 'E02003135',
        '2BT' => 'E02003135',
        '2BU' => 'E02003135',
        '2BW' => 'E02003134',
        '2BX' => 'E02003135',
        '2BY' => 'E02003135',
        '2BZ' => 'E02003135',
        '2DA' => 'E02003135',
        '2DB' => 'E02003135',
        '2DD' => 'E02003135',
        '2DE' => 'E02003135',
        '2DF' => 'E02003135',
        '2DG' => 'E02003135',
        '2DH' => 'E02003135',
        '2DJ' => 'E02003135',
        '2DL' => 'E02003135',
        '2DN' => 'E02003135',
        '2DP' => 'E02003135',
        '2DQ' => 'E02003135',
        '2DR' => 'E02003135',
        '2DS' => 'E02003134',
        '2DT' => 'E02003135',
        '2DU' => 'E02003135',
        '2DW' => 'E02003135',
        '2DX' => 'E02003135',
        '2DY' => 'E02003135',
        '2DZ' => 'E02003134',
        '2EA' => 'E02003134',
        '2EB' => 'E02003135',
        '2ED' => 'E02003135',
        '2EE' => 'E02003134',
        '2EF' => 'E02003134',
        '2EG' => 'E02003135',
        '2EH' => 'E02003135',
        '2EJ' => 'E02003135',
        '2EL' => 'E02003135',
        '2EN' => 'E02003135',
        '2EP' => 'E02003135',
        '2EQ' => 'E02003135',
        '2ER' => 'E02003135',
        '2ES' => 'E02003135',
        '2ET' => 'E02003135',
        '2EU' => 'E02003134',
        '2EW' => 'E02003135',
        '2EX' => 'E02003134',
        '2EY' => 'E02003134',
        '2EZ' => 'E02003132',
        '2FA' => 'E02003132',
        '2FB' => 'E02003135',
        '2FD' => 'E02003134',
        '2FF' => 'E02003134',
        '2FL' => 'E02003134',
        '2HA' => 'E02003134',
        '2HD' => 'E02003134',
        '2HE' => 'E02003134',
        '2HF' => 'E02003134',
        '2HG' => 'E02003134',
        '2HH' => 'E02003134',
        '2HJ' => 'E02003134',
        '2HL' => 'E02003134',
        '2HN' => 'E02003134',
        '2HP' => 'E02003134',
        '2HQ' => 'E02003134',
        '2HR' => 'E02003134',
        '2HS' => 'E02003134',
        '2HT' => 'E02003134',
        '2HU' => 'E02003134',
        '2HW' => 'E02003134',
        '2JA' => 'E02003134',
        '2JB' => 'E02003134',
        '2JD' => 'E02003134',
        '2JE' => 'E02003134',
        '2JF' => 'E02003134',
        '2JG' => 'E02003135',
        '2JH' => 'E02003134',
        '2JJ' => 'E02003134',
        '2JL' => 'E02003134',
        '2JN' => 'E02003134',
        '2JP' => 'E02003135',
        '2JQ' => 'E02003134',
        '2JR' => 'E02003134',
        '2JS' => 'E02003134',
        '2JT' => 'E02003134',
        '2JU' => 'E02003134',
        '2JW' => 'E02003135',
        '2JX' => 'E02003134',
        '2JY' => 'E02003134',
        '2JZ' => 'E02003134',
        '2LA' => 'E02003134',
        '2LB' => 'E02003134',
        '2LD' => 'E02003134',
        '2LE' => 'E02003134',
        '2LF' => 'E02003134',
        '2LG' => 'E02003134',
        '2LH' => 'E02003134',
        '2LJ' => 'E02003134',
        '2LL' => 'E02003134',
        '2LN' => 'E02003134',
        '2LP' => 'E02003134',
        '2LQ' => 'E02003134',
        '2LR' => 'E02003134',
        '2LS' => 'E02003132',
        '2LT' => 'E02003134',
        '2LU' => 'E02003134',
        '2LW' => 'E02003134',
        '2LX' => 'E02003134',
        '2LY' => 'E02003134',
        '2LZ' => 'E02003134',
        '2NA' => 'E02003134',
        '2NB' => 'E02003134',
        '2ND' => 'E02003134',
        '2NE' => 'E02003134',
        '2NF' => 'E02003134',
        '2NG' => 'E02003134',
        '2NH' => 'E02003132',
        '2NJ' => 'E02003134',
        '2NL' => 'E02003134',
        '2NN' => 'E02003132',
        '2NP' => 'E02003132',
        '2NQ' => 'E02003134',
        '2NR' => 'E02003132',
        '2NS' => 'E02003132',
        '2NT' => 'E02003134',
        '2NU' => 'E02003134',
        '2NW' => 'E02003132',
        '2NX' => 'E02003134',
        '2NY' => 'E02003132',
        '2NZ' => 'E02003132',
        '2PA' => 'E02003134',
        '2PB' => 'E02003134',
        '2PD' => 'E02003134',
        '2PE' => 'E02003134',
        '2PF' => 'E02003134',
        '2PG' => 'E02003134',
        '2PH' => 'E02003134',
        '2PJ' => 'E02003134',
        '2PL' => 'E02003134',
        '2PN' => 'E02003134',
        '2PP' => 'E02003134',
        '2PQ' => 'E02003134',
        '2PR' => 'E02003134',
        '2PS' => 'E02003134',
        '2PT' => 'E02003134',
        '2PU' => 'E02003134',
        '2PW' => 'E02003134',
        '2PX' => 'E02003134',
        '2PY' => 'E02003134',
        '2QA' => 'E02003134',
        '2QB' => 'E02003134',
        '2QD' => 'E02003134',
        '2QE' => 'E02003134',
        '2QF' => 'E02003134',
        '2QG' => 'E02003134',
        '2QH' => 'E02003134',
        '2QJ' => 'E02003134',
        '2QL' => 'E02003132',
        '2QN' => 'E02003134',
        '2QP' => 'E02003132',
        '2QQ' => 'E02003134',
        '2QR' => 'E02003132',
        '2QS' => 'E02003132',
        '2QT' => 'E02003132',
        '2QU' => 'E02003132',
        '2QW' => 'E02003134',
        '2QX' => 'E02003134',
        '2QY' => 'E02003132',
        '2QZ' => 'E02003132',
        '2RA' => 'E02003132',
        '2RB' => 'E02003132',
        '2RD' => 'E02003132',
        '2RE' => 'E02003132',
        '2RF' => 'E02003132',
        '2RG' => 'E02003132',
        '2RH' => 'E02003132',
        '2RJ' => 'E02003132',
        '2RL' => 'E02003132',
        '2RN' => 'E02003134',
        '2RP' => 'E02003132',
        '2RQ' => 'E02003132',
        '2RR' => 'E02003132',
        '2RS' => 'E02003134',
        '2RT' => 'E02003132',
        '2RU' => 'E02003132',
        '2RW' => 'E02003132',
        '2RX' => 'E02003132',
        '2RY' => 'E02003132',
        '2RZ' => 'E02003134',
        '2SA' => 'E02003134',
        '2SB' => 'E02003134',
        '2SD' => 'E02003134',
        '2SE' => 'E02003134',
        '2SF' => 'E02003134',
        '2SG' => 'E02003134',
        '2SH' => 'E02003132',
        '2SJ' => 'E02003132',
        '2SN' => 'E02003135',
        '2WA' => 'E02003134',
        '2WY' => 'E02003152',
        '2WZ' => 'E02003152',
        '2XZ' => 'E02003134',
        '2YG' => 'E02003152',
        '2YH' => 'E02003152',
        '2YJ' => 'E02003152',
        '2YL' => 'E02003152',
        '2YN' => 'E02003152',
        '2YP' => 'E02003134',
        '2YQ' => 'E02003152',
        '2YR' => 'E02003134',
        '2YS' => 'E02003134',
        '2YT' => 'E02003152',
        '2YU' => 'E02003152',
        '2YW' => 'E02003152',
        '2YX' => 'E02003132',
        '2YY' => 'E02003152',
        '2YZ' => 'E02003152',
        '2ZJ' => 'E02003152',
        '2ZR' => 'E02003152',
        '2ZX' => 'E02003152',
        '3AA' => 'E02003145',
        '3AB' => 'E02003145',
        '3AD' => 'E02003141',
        '3AE' => 'E02003145',
        '3AF' => 'E02003141',
        '3AG' => 'E02003145',
        '3AH' => 'E02003145',
        '3AJ' => 'E02003145',
        '3AL' => 'E02003145',
        '3AN' => 'E02003145',
        '3AP' => 'E02003145',
        '3AQ' => 'E02003145',
        '3AR' => 'E02003145',
        '3AS' => 'E02003145',
        '3AT' => 'E02003145',
        '3AU' => 'E02003145',
        '3AW' => 'E02003145',
        '3AX' => 'E02003145',
        '3AY' => 'E02003145',
        '3AZ' => 'E02003145',
        '3BA' => 'E02003145',
        '3BB' => 'E02003145',
        '3BD' => 'E02003145',
        '3BE' => 'E02003145',
        '3BG' => 'E02003145',
        '3BH' => 'E02003134',
        '3BJ' => 'E02003141',
        '3BL' => 'E02003141',
        '3BN' => 'E02003141',
        '3BP' => 'E02003134',
        '3BQ' => 'E02003141',
        '3BR' => 'E02003134',
        '3BS' => 'E02003141',
        '3BT' => 'E02003141',
        '3BU' => 'E02003141',
        '3BW' => 'E02003141',
        '3BX' => 'E02003141',
        '3BY' => 'E02003141',
        '3BZ' => 'E02003134',
        '3DA' => 'E02003134',
        '3DB' => 'E02003141',
        '3DD' => 'E02003134',
        '3DE' => 'E02003134',
        '3DF' => 'E02003138',
        '3DG' => 'E02003138',
        '3DH' => 'E02003132',
        '3DJ' => 'E02003134',
        '3DL' => 'E02003132',
        '3DN' => 'E02003132',
        '3DP' => 'E02003134',
        '3DQ' => 'E02003134',
        '3DR' => 'E02003134',
        '3DS' => 'E02003134',
        '3DT' => 'E02003134',
        '3DU' => 'E02003134',
        '3DW' => 'E02003132',
        '3DX' => 'E02003134',
        '3DY' => 'E02003134',
        '3DZ' => 'E02003132',
        '3EA' => 'E02003134',
        '3EB' => 'E02003132',
        '3ED' => 'E02003132',
        '3EE' => 'E02003132',
        '3EF' => 'E02003132',
        '3EG' => 'E02003132',
        '3EH' => 'E02003134',
        '3EJ' => 'E02003134',
        '3EL' => 'E02003134',
        '3EN' => 'E02003134',
        '3EP' => 'E02003134',
        '3EQ' => 'E02003132',
        '3ER' => 'E02003134',
        '3ES' => 'E02003134',
        '3ET' => 'E02003134',
        '3EU' => 'E02003134',
        '3EW' => 'E02003134',
        '3EX' => 'E02003132',
        '3EY' => 'E02003134',
        '3EZ' => 'E02003134',
        '3FA' => 'E02003132',
        '3FB' => 'E02003132',
        '3FD' => 'E02003132',
        '3FE' => 'E02003132',
        '3FG' => 'E02003132',
        '3HA' => 'E02003134',
        '3HB' => 'E02003134',
        '3HD' => 'E02003132',
        '3HE' => 'E02003132',
        '3HF' => 'E02003134',
        '3HG' => 'E02003134',
        '3HH' => 'E02003132',
        '3HJ' => 'E02003132',
        '3HL' => 'E02003132',
        '3HN' => 'E02003132',
        '3HP' => 'E02003132',
        '3HQ' => 'E02003134',
        '3HR' => 'E02003134',
        '3HS' => 'E02003134',
        '3HW' => 'E02003132',
        '3HX' => 'E02003134',
        '3HY' => 'E02003134',
        '3HZ' => 'E02003134',
        '3JA' => 'E02003134',
        '3JB' => 'E02003134',
        '3JD' => 'E02003134',
        '3JE' => 'E02003134',
        '3JF' => 'E02003134',
        '3JG' => 'E02003134',
        '3JH' => 'E02003134',
        '3JJ' => 'E02003134',
        '3JP' => 'E02003132',
        '3JQ' => 'E02003134',
        '3JR' => 'E02003132',
        '3JS' => 'E02003132',
        '3JT' => 'E02003132',
        '3JU' => 'E02003132',
        '3JX' => 'E02003132',
        '3JY' => 'E02003132',
        '3JZ' => 'E02003132',
        '3LA' => 'E02003132',
        '3LB' => 'E02003132',
        '3LD' => 'E02003132',
        '3LE' => 'E02003132',
        '3LF' => 'E02003132',
        '3LG' => 'E02003132',
        '3LH' => 'E02003132',
        '3LJ' => 'E02003132',
        '3LP' => 'E02003132',
        '3LQ' => 'E02003132',
        '3LR' => 'E02003132',
        '3LS' => 'E02003132',
        '3LT' => 'E02003132',
        '3LU' => 'E02003132',
        '3LX' => 'E02003132',
        '3LY' => 'E02003132',
        '3LZ' => 'E02003132',
        '3NA' => 'E02003132',
        '3NB' => 'E02003132',
        '3ND' => 'E02003132',
        '3NE' => 'E02003132',
        '3NF' => 'E02003132',
        '3NG' => 'E02003132',
        '3NH' => 'E02003132',
        '3NJ' => 'E02003138',
        '3NL' => 'E02003132',
        '3NN' => 'E02003132',
        '3NP' => 'E02003132',
        '3NQ' => 'E02003132',
        '3NR' => 'E02003132',
        '3NS' => 'E02003132',
        '3NT' => 'E02003138',
        '3NU' => 'E02003138',
        '3NW' => 'E02003132',
        '3NX' => 'E02003132',
        '3NY' => 'E02003132',
        '3NZ' => 'E02003138',
        '3PA' => 'E02003132',
        '3PB' => 'E02003132',
        '3PD' => 'E02003132',
        '3PE' => 'E02003138',
        '3PF' => 'E02003138',
        '3PG' => 'E02003132',
        '3PH' => 'E02003138',
        '3PJ' => 'E02003138',
        '3PL' => 'E02003138',
        '3PN' => 'E02003138',
        '3PP' => 'E02003138',
        '3PQ' => 'E02003138',
        '3PR' => 'E02003132',
        '3PS' => 'E02003132',
        '3PT' => 'E02003132',
        '3PU' => 'E02003134',
        '3PW' => 'E02003138',
        '3PX' => 'E02003132',
        '3PY' => 'E02003138',
        '3PZ' => 'E02003132',
        '3QA' => 'E02003138',
        '3QB' => 'E02003138',
        '3QD' => 'E02003138',
        '3QE' => 'E02003132',
        '3QF' => 'E02003138',
        '3QG' => 'E02003132',
        '3QH' => 'E02003132',
        '3QJ' => 'E02003132',
        '3QL' => 'E02003138',
        '3QN' => 'E02003132',
        '3QP' => 'E02003132',
        '3QQ' => 'E02003132',
        '3QR' => 'E02003132',
        '3QS' => 'E02003132',
        '3QT' => 'E02003132',
        '3QU' => 'E02003132',
        '3QW' => 'E02003132',
        '3QX' => 'E02003132',
        '3QY' => 'E02003132',
        '3QZ' => 'E02003132',
        '3RA' => 'E02003132',
        '3RB' => 'E02003132',
        '3RD' => 'E02003132',
        '3RE' => 'E02003132',
        '3RF' => 'E02003132',
        '3RG' => 'E02003132',
        '3RH' => 'E02003132',
        '3RJ' => 'E02003132',
        '3RL' => 'E02003132',
        '3RN' => 'E02003132',
        '3RP' => 'E02003132',
        '3RQ' => 'E02003132',
        '3RR' => 'E02003132',
        '3RS' => 'E02003132',
        '3RU' => 'E02003132',
        '3RW' => 'E02003132',
        '3RX' => 'E02003132',
        '3RY' => 'E02003132',
        '3RZ' => 'E02003132',
        '3SA' => 'E02003132',
        '3SB' => 'E02003132',
        '3SD' => 'E02003132',
        '3SE' => 'E02003132',
        '3SF' => 'E02003132',
        '3SG' => 'E02003132',
        '3SH' => 'E02003132',
        '3SJ' => 'E02003132',
        '3SL' => 'E02003132',
        '3SN' => 'E02003132',
        '3SP' => 'E02003132',
        '3SQ' => 'E02003132',
        '3ST' => 'E02003132',
        '3SU' => 'E02003132',
        '3SW' => 'E02003132',
        '3SX' => 'E02003132',
        '3SY' => 'E02003132',
        '3SZ' => 'E02003132',
        '3TA' => 'E02003132',
        '3TB' => 'E02003132',
        '3TG' => 'E02003132',
        '3TH' => 'E02003132',
        '3TJ' => 'E02003132',
        '3TL' => 'E02003132',
        '3TN' => 'E02003132',
        '3TP' => 'E02003132',
        '3TR' => 'E02003132',
        '3TS' => 'E02003132',
        '3TW' => 'E02003132',
        '3WA' => 'E02003152',
        '3WB' => 'E02003145',
        '3WJ' => 'E02003152',
        '3WL' => 'E02003152',
        '3WN' => 'E02003152',
        '3WP' => 'E02003152',
        '3WQ' => 'E02003152',
        '3WR' => 'E02003152',
        '3WS' => 'E02003152',
        '3WT' => 'E02003152',
        '3WU' => 'E02003152',
        '3WW' => 'E02003152',
        '3WX' => 'E02003152',
        '3WY' => 'E02003132',
        '3WZ' => 'E02003132',
        '3XJ' => 'E02003152',
        '3YD' => 'E02003152',
        '3YE' => 'E02003152',
        '3YF' => 'E02003152',
        '3YG' => 'E02003132',
        '3YH' => 'E02003152',
        '3YJ' => 'E02003152',
        '3YL' => 'E02003132',
        '3YN' => 'E02003152',
        '3YP' => 'E02003132',
        '3YQ' => 'E02003132',
        '3YR' => 'E02003152',
        '3YS' => 'E02003132',
        '3YT' => 'E02003132',
        '3YU' => 'E02003132',
        '3YW' => 'E02003132',
        '3YX' => 'E02003152',
        '3YY' => 'E02003152',
        '3YZ' => 'E02003132',
        '3ZN' => 'E02003152',
        '3ZX' => 'E02003152',
        '9AB' => 'E02003152',
        '9AE' => 'E02003152',
        '9AF' => 'E02003152',
        '9AL' => 'E02003152',
        '9AN' => 'E02003152',
        '9AQ' => 'E02003152',
        '9AS' => 'E02003152',
        '9AU' => 'E02003152',
        '9AW' => 'E02003152',
        '9AX' => 'E02003152',
        '9AY' => 'E02003152',
        '9AZ' => 'E02003152',
        '9BA' => 'E02003152',
        '9BB' => 'E02003152',
        '9BD' => 'E02003152',
        '9BE' => 'E02003152',
        '9BF' => 'E02003152',
        '9BG' => 'E02003152',
        '9BH' => 'E02003152',
        '9BJ' => 'E02003152',
        '9BL' => 'E02003152',
        '9BN' => 'E02003152',
        '9BP' => 'E02003152',
        '9BQ' => 'E02003152',
        '9BR' => 'E02003152',
        '9BS' => 'E02003152',
        '9BT' => 'E02003152',
        '9BU' => 'E02003152',
        '9BX' => 'E02003152',
        '9BY' => 'E02003152',
        '9BZ' => 'E02003152',
        '9DA' => 'E02003152',
        '9DB' => 'E02003152',
        '9DD' => 'E02003152',
        '9DE' => 'E02003152',
        '9DF' => 'E02003152',
        '9DG' => 'E02003152',
        '9DH' => 'E02003152',
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
