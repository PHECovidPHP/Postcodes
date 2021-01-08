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
final class DA8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000068',
        '1AB' => 'E02000068',
        '1AD' => 'E02000068',
        '1AE' => 'E02000068',
        '1AF' => 'E02000068',
        '1AG' => 'E02000068',
        '1AH' => 'E02000068',
        '1AJ' => 'E02000068',
        '1AL' => 'E02000068',
        '1AN' => 'E02000068',
        '1AP' => 'E02000068',
        '1AQ' => 'E02000068',
        '1AR' => 'E02000068',
        '1AS' => 'E02000068',
        '1AT' => 'E02000068',
        '1AU' => 'E02000068',
        '1AW' => 'E02000068',
        '1AX' => 'E02000068',
        '1AY' => 'E02000068',
        '1AZ' => 'E02000072',
        '1BA' => 'E02000068',
        '1BB' => 'E02000068',
        '1BD' => 'E02000068',
        '1BE' => 'E02000068',
        '1BF' => 'E02000068',
        '1BG' => 'E02000068',
        '1BH' => 'E02000068',
        '1BJ' => 'E02000068',
        '1BL' => 'E02000068',
        '1BN' => 'E02000068',
        '1BP' => 'E02000068',
        '1BQ' => 'E02000068',
        '1BS' => 'E02000068',
        '1BT' => 'E02000068',
        '1BU' => 'E02000068',
        '1BW' => 'E02000068',
        '1BX' => 'E02000068',
        '1BY' => 'E02000069',
        '1BZ' => 'E02000069',
        '1DA' => 'E02000068',
        '1DB' => 'E02000069',
        '1DD' => 'E02000068',
        '1DE' => 'E02000068',
        '1DF' => 'E02000068',
        '1DG' => 'E02000068',
        '1DH' => 'E02000068',
        '1DJ' => 'E02000072',
        '1DL' => 'E02000068',
        '1DN' => 'E02000069',
        '1DP' => 'E02000069',
        '1DQ' => 'E02000068',
        '1DR' => 'E02000069',
        '1DS' => 'E02000069',
        '1DT' => 'E02000069',
        '1DU' => 'E02000069',
        '1DW' => 'E02000069',
        '1DX' => 'E02000069',
        '1DY' => 'E02000071',
        '1DZ' => 'E02000071',
        '1EA' => 'E02000071',
        '1EB' => 'E02000071',
        '1ED' => 'E02000071',
        '1EE' => 'E02000071',
        '1EF' => 'E02000071',
        '1EG' => 'E02000069',
        '1EH' => 'E02000071',
        '1EJ' => 'E02000071',
        '1EL' => 'E02000071',
        '1EN' => 'E02000071',
        '1EP' => 'E02000071',
        '1EQ' => 'E02000069',
        '1ER' => 'E02000071',
        '1ES' => 'E02000071',
        '1ET' => 'E02000069',
        '1EU' => 'E02000069',
        '1EW' => 'E02000068',
        '1EX' => 'E02000068',
        '1EY' => 'E02000071',
        '1EZ' => 'E02000071',
        '1FA' => 'E02000068',
        '1FB' => 'E02000068',
        '1FD' => 'E02000068',
        '1FE' => 'E02000068',
        '1FF' => 'E02000068',
        '1FG' => 'E02000068',
        '1FH' => 'E02000069',
        '1FJ' => 'E02000068',
        '1FL' => 'E02000069',
        '1FN' => 'E02000069',
        '1FP' => 'E02000069',
        '1GL' => 'E02000068',
        '1GU' => 'E02000068',
        '1GX' => 'E02000068',
        '1GZ' => 'E02000068',
        '1HA' => 'E02000071',
        '1HB' => 'E02000071',
        '1HD' => 'E02000071',
        '1HE' => 'E02000071',
        '1HF' => 'E02000071',
        '1HG' => 'E02000071',
        '1HH' => 'E02000071',
        '1HJ' => 'E02000071',
        '1HL' => 'E02000071',
        '1HN' => 'E02000071',
        '1HP' => 'E02000071',
        '1HQ' => 'E02000071',
        '1HR' => 'E02000071',
        '1HS' => 'E02000068',
        '1HT' => 'E02000068',
        '1HU' => 'E02000068',
        '1HW' => 'E02000071',
        '1HX' => 'E02000071',
        '1HZ' => 'E02000068',
        '1JA' => 'E02000071',
        '1JB' => 'E02000071',
        '1JD' => 'E02000071',
        '1JE' => 'E02000071',
        '1JF' => 'E02000071',
        '1JG' => 'E02000071',
        '1JH' => 'E02000071',
        '1JJ' => 'E02000071',
        '1JL' => 'E02000071',
        '1JN' => 'E02000071',
        '1JP' => 'E02000071',
        '1JQ' => 'E02000071',
        '1JR' => 'E02000071',
        '1JS' => 'E02000071',
        '1JT' => 'E02000071',
        '1JU' => 'E02000071',
        '1JW' => 'E02000071',
        '1JX' => 'E02000071',
        '1JY' => 'E02000071',
        '1JZ' => 'E02000071',
        '1LA' => 'E02000071',
        '1LB' => 'E02000071',
        '1LD' => 'E02000071',
        '1LE' => 'E02000071',
        '1LF' => 'E02000071',
        '1LG' => 'E02000071',
        '1LH' => 'E02000072',
        '1LJ' => 'E02000071',
        '1LL' => 'E02000068',
        '1LN' => 'E02000068',
        '1LP' => 'E02000071',
        '1LQ' => 'E02000071',
        '1LR' => 'E02000071',
        '1LS' => 'E02000071',
        '1LT' => 'E02000071',
        '1LU' => 'E02000071',
        '1LW' => 'E02000068',
        '1LX' => 'E02000071',
        '1LY' => 'E02000071',
        '1LZ' => 'E02000070',
        '1NA' => 'E02000071',
        '1NB' => 'E02000068',
        '1ND' => 'E02000068',
        '1NE' => 'E02000070',
        '1NF' => 'E02000071',
        '1NG' => 'E02000071',
        '1NH' => 'E02000071',
        '1NJ' => 'E02000071',
        '1NL' => 'E02000071',
        '1NN' => 'E02000071',
        '1NP' => 'E02000068',
        '1NQ' => 'E02000071',
        '1NR' => 'E02000068',
        '1NS' => 'E02000068',
        '1NT' => 'E02000068',
        '1NU' => 'E02000071',
        '1NW' => 'E02000071',
        '1NX' => 'E02000068',
        '1NY' => 'E02000068',
        '1NZ' => 'E02000068',
        '1PA' => 'E02000069',
        '1PB' => 'E02000068',
        '1PD' => 'E02000068',
        '1PE' => 'E02000068',
        '1PF' => 'E02000068',
        '1PG' => 'E02000068',
        '1PH' => 'E02000068',
        '1PJ' => 'E02000068',
        '1PL' => 'E02000068',
        '1PN' => 'E02000068',
        '1PP' => 'E02000069',
        '1PQ' => 'E02000068',
        '1PR' => 'E02000069',
        '1PS' => 'E02000069',
        '1PT' => 'E02000069',
        '1PU' => 'E02000069',
        '1PW' => 'E02000068',
        '1PX' => 'E02000069',
        '1PY' => 'E02000069',
        '1PZ' => 'E02000069',
        '1QA' => 'E02000069',
        '1QB' => 'E02000069',
        '1QD' => 'E02000069',
        '1QE' => 'E02000069',
        '1QF' => 'E02000069',
        '1QG' => 'E02000069',
        '1QH' => 'E02000068',
        '1QJ' => 'E02000069',
        '1QL' => 'E02000068',
        '1QN' => 'E02000069',
        '1QP' => 'E02000069',
        '1QQ' => 'E02000069',
        '1QR' => 'E02000068',
        '1QS' => 'E02000069',
        '1QT' => 'E02000069',
        '1QU' => 'E02000069',
        '1QW' => 'E02000068',
        '1QX' => 'E02000069',
        '1QY' => 'E02000068',
        '1QZ' => 'E02000068',
        '1RA' => 'E02000068',
        '1RB' => 'E02000068',
        '1RD' => 'E02000068',
        '1RE' => 'E02000068',
        '1RF' => 'E02000068',
        '1RG' => 'E02000068',
        '1RH' => 'E02000068',
        '1RJ' => 'E02000068',
        '1RL' => 'E02000068',
        '1RN' => 'E02000068',
        '1RP' => 'E02000068',
        '1RQ' => 'E02000068',
        '1RR' => 'E02000068',
        '1RS' => 'E02000068',
        '1RT' => 'E02000068',
        '1RU' => 'E02000068',
        '1RW' => 'E02000068',
        '1RX' => 'E02000068',
        '1RY' => 'E02000068',
        '1RZ' => 'E02000068',
        '1SA' => 'E02000068',
        '1SB' => 'E02000068',
        '1SD' => 'E02000068',
        '1SE' => 'E02000068',
        '1SF' => 'E02000068',
        '1SG' => 'E02000068',
        '1SH' => 'E02000068',
        '1SJ' => 'E02000068',
        '1SL' => 'E02000068',
        '1SN' => 'E02000068',
        '1SP' => 'E02000068',
        '1SQ' => 'E02000068',
        '1SR' => 'E02000068',
        '1TA' => 'E02000068',
        '1TB' => 'E02000068',
        '1TD' => 'E02000068',
        '1TE' => 'E02000069',
        '1TF' => 'E02000069',
        '1TG' => 'E02000068',
        '1TH' => 'E02000068',
        '1TJ' => 'E02000068',
        '1TL' => 'E02000068',
        '1TN' => 'E02000069',
        '1TP' => 'E02000068',
        '1TR' => 'E02000068',
        '1TS' => 'E02000068',
        '1TT' => 'E02000068',
        '1TU' => 'E02000068',
        '1TW' => 'E02000068',
        '1TX' => 'E02000068',
        '1TY' => 'E02000068',
        '1TZ' => 'E02000068',
        '1UA' => 'E02000072',
        '1UB' => 'E02000072',
        '1UD' => 'E02000072',
        '1UE' => 'E02000068',
        '1UF' => 'E02000072',
        '1UG' => 'E02000072',
        '1UH' => 'E02000068',
        '1UJ' => 'E02000069',
        '1UL' => 'E02000069',
        '1UN' => 'E02000072',
        '1UQ' => 'E02000068',
        '1UW' => 'E02000069',
        '1WA' => 'E02000072',
        '1WB' => 'E02000072',
        '1WD' => 'E02000072',
        '1WE' => 'E02000072',
        '1WF' => 'E02000069',
        '1WG' => 'E02000072',
        '1WH' => 'E02000072',
        '1WJ' => 'E02000072',
        '1WQ' => 'E02000072',
        '1WT' => 'E02000072',
        '1WW' => 'E02000072',
        '1WX' => 'E02000072',
        '1WY' => 'E02000072',
        '1WZ' => 'E02000072',
        '1XA' => 'E02000072',
        '1XE' => 'E02000072',
        '1XF' => 'E02000072',
        '1XQ' => 'E02000072',
        '1XT' => 'E02000072',
        '1XW' => 'E02000072',
        '1XZ' => 'E02000072',
        '1YA' => 'E02000071',
        '1YB' => 'E02000071',
        '1YD' => 'E02000071',
        '1YE' => 'E02000071',
        '1YF' => 'E02000071',
        '1YG' => 'E02000071',
        '1YH' => 'E02000071',
        '1YJ' => 'E02000071',
        '1YP' => 'E02000072',
        '1YQ' => 'E02000072',
        '1YT' => 'E02000072',
        '1YZ' => 'E02000072',
        '1ZD' => 'E02000072',
        '1ZF' => 'E02000072',
        '1ZG' => 'E02000072',
        '1ZH' => 'E02000072',
        '1ZJ' => 'E02000072',
        '1ZL' => 'E02000072',
        '1ZN' => 'E02000069',
        '1ZP' => 'E02000072',
        '1ZQ' => 'E02000069',
        '1ZR' => 'E02000072',
        '1ZS' => 'E02000072',
        '1ZT' => 'E02000072',
        '1ZU' => 'E02000069',
        '1ZW' => 'E02000069',
        '1ZX' => 'E02000072',
        '1ZY' => 'E02000069',
        '1ZZ' => 'E02000069',
        '2AA' => 'E02000072',
        '2AB' => 'E02000072',
        '2AD' => 'E02000072',
        '2AE' => 'E02000072',
        '2AF' => 'E02000072',
        '2AG' => 'E02000072',
        '2AH' => 'E02000068',
        '2AJ' => 'E02000072',
        '2AL' => 'E02000072',
        '2AN' => 'E02000072',
        '2AP' => 'E02000072',
        '2AQ' => 'E02000072',
        '2AR' => 'E02000072',
        '2AS' => 'E02000072',
        '2AT' => 'E02000072',
        '2AU' => 'E02000072',
        '2AW' => 'E02000072',
        '2AX' => 'E02000072',
        '2AY' => 'E02000072',
        '2AZ' => 'E02000072',
        '2BA' => 'E02000072',
        '2BB' => 'E02000072',
        '2BD' => 'E02000072',
        '2BE' => 'E02000072',
        '2BF' => 'E02000072',
        '2BG' => 'E02000072',
        '2BH' => 'E02000072',
        '2BJ' => 'E02000068',
        '2BL' => 'E02000072',
        '2BN' => 'E02000072',
        '2BP' => 'E02000072',
        '2BQ' => 'E02000072',
        '2BS' => 'E02000072',
        '2BT' => 'E02000072',
        '2BU' => 'E02000072',
        '2BW' => 'E02000072',
        '2BX' => 'E02000072',
        '2BY' => 'E02000072',
        '2BZ' => 'E02000072',
        '2DA' => 'E02000072',
        '2DB' => 'E02000072',
        '2DD' => 'E02000072',
        '2DE' => 'E02000072',
        '2DF' => 'E02000072',
        '2DG' => 'E02000072',
        '2DH' => 'E02000072',
        '2DJ' => 'E02000072',
        '2DL' => 'E02000072',
        '2DN' => 'E02000072',
        '2DP' => 'E02000072',
        '2DQ' => 'E02000072',
        '2DR' => 'E02000072',
        '2DS' => 'E02000072',
        '2DT' => 'E02000074',
        '2DU' => 'E02000072',
        '2DW' => 'E02000072',
        '2DX' => 'E02000074',
        '2DY' => 'E02000072',
        '2DZ' => 'E02000072',
        '2EA' => 'E02000074',
        '2EB' => 'E02000074',
        '2ED' => 'E02000072',
        '2EE' => 'E02000074',
        '2EF' => 'E02000074',
        '2EG' => 'E02000074',
        '2EH' => 'E02000072',
        '2EL' => 'E02000072',
        '2EN' => 'E02000072',
        '2EP' => 'E02000072',
        '2EQ' => 'E02000072',
        '2ER' => 'E02000072',
        '2ES' => 'E02000072',
        '2ET' => 'E02000072',
        '2EU' => 'E02000072',
        '2EW' => 'E02000072',
        '2EX' => 'E02000072',
        '2EY' => 'E02000072',
        '2EZ' => 'E02000072',
        '2FA' => 'E02000072',
        '2FB' => 'E02000072',
        '2FD' => 'E02000072',
        '2FE' => 'E02000072',
        '2FF' => 'E02000072',
        '2FG' => 'E02000072',
        '2FH' => 'E02000072',
        '2FJ' => 'E02000072',
        '2FL' => 'E02000072',
        '2FP' => 'E02000072',
        '2FR' => 'E02000072',
        '2FX' => 'E02000072',
        '2GQ' => 'E02000068',
        '2GR' => 'E02000072',
        '2HA' => 'E02000072',
        '2HB' => 'E02000072',
        '2HD' => 'E02000072',
        '2HE' => 'E02000072',
        '2HF' => 'E02000072',
        '2HG' => 'E02000072',
        '2HH' => 'E02000072',
        '2HJ' => 'E02000072',
        '2HL' => 'E02000072',
        '2HN' => 'E02000072',
        '2HP' => 'E02000072',
        '2HQ' => 'E02000072',
        '2HR' => 'E02000072',
        '2HS' => 'E02000072',
        '2HT' => 'E02000072',
        '2HU' => 'E02000072',
        '2HW' => 'E02000072',
        '2HX' => 'E02000072',
        '2HY' => 'E02000072',
        '2HZ' => 'E02000072',
        '2JA' => 'E02000072',
        '2JB' => 'E02000072',
        '2JD' => 'E02000072',
        '2JE' => 'E02000072',
        '2JF' => 'E02000072',
        '2JG' => 'E02000072',
        '2JH' => 'E02000072',
        '2JJ' => 'E02000072',
        '2JL' => 'E02000072',
        '2JN' => 'E02000072',
        '2JP' => 'E02000072',
        '2JQ' => 'E02000072',
        '2JR' => 'E02000072',
        '2JS' => 'E02000072',
        '2JT' => 'E02000072',
        '2JU' => 'E02000072',
        '2JW' => 'E02000072',
        '2JX' => 'E02000072',
        '2JY' => 'E02000072',
        '2JZ' => 'E02000072',
        '2LA' => 'E02000072',
        '2LB' => 'E02000072',
        '2LD' => 'E02000072',
        '2LE' => 'E02000072',
        '2LF' => 'E02000072',
        '2LG' => 'E02000072',
        '2LH' => 'E02000072',
        '2LJ' => 'E02000072',
        '2LL' => 'E02000072',
        '2LN' => 'E02000072',
        '2LP' => 'E02000072',
        '2LQ' => 'E02000072',
        '2LR' => 'E02000072',
        '2LS' => 'E02000072',
        '2LT' => 'E02000072',
        '2LU' => 'E02000072',
        '2LW' => 'E02000072',
        '2LX' => 'E02000072',
        '2LY' => 'E02000072',
        '2LZ' => 'E02000072',
        '2NA' => 'E02000072',
        '2NB' => 'E02000072',
        '2ND' => 'E02000072',
        '2NE' => 'E02000072',
        '2NF' => 'E02000072',
        '2NG' => 'E02000072',
        '2NH' => 'E02000072',
        '2NJ' => 'E02000072',
        '2NL' => 'E02000072',
        '2NN' => 'E02000072',
        '2NP' => 'E02000072',
        '2NQ' => 'E02000072',
        '2NR' => 'E02000072',
        '2NS' => 'E02000072',
        '2NT' => 'E02000072',
        '2NU' => 'E02000072',
        '2NW' => 'E02000072',
        '2NX' => 'E02000072',
        '2NY' => 'E02000072',
        '2NZ' => 'E02000072',
        '2PA' => 'E02000072',
        '2PB' => 'E02000072',
        '2PD' => 'E02000072',
        '2PE' => 'E02000072',
        '2PF' => 'E02000072',
        '2PG' => 'E02000072',
        '2PH' => 'E02000072',
        '2PJ' => 'E02000072',
        '2PL' => 'E02000072',
        '2PN' => 'E02000072',
        '2PP' => 'E02000072',
        '2PQ' => 'E02000072',
        '2PR' => 'E02000072',
        '2PS' => 'E02000072',
        '2PT' => 'E02000072',
        '2PU' => 'E02000072',
        '2PW' => 'E02000072',
        '2PX' => 'E02000072',
        '2PY' => 'E02000072',
        '2PZ' => 'E02000072',
        '2QA' => 'E02000072',
        '2QB' => 'E02000072',
        '2QD' => 'E02000072',
        '2QE' => 'E02000072',
        '2QF' => 'E02000072',
        '2QG' => 'E02000072',
        '2QH' => 'E02000072',
        '2QQ' => 'E02000072',
        '2SP' => 'E02000072',
        '2UA' => 'E02000072',
        '2UD' => 'E02000072',
        '2UE' => 'E02000072',
        '2WA' => 'E02000072',
        '2WB' => 'E02000072',
        '2WD' => 'E02000072',
        '2WE' => 'E02000072',
        '2WF' => 'E02000072',
        '2WJ' => 'E02000072',
        '2WN' => 'E02000072',
        '2WP' => 'E02000072',
        '2WT' => 'E02000072',
        '2WW' => 'E02000072',
        '2WX' => 'E02000072',
        '2WY' => 'E02000072',
        '2WZ' => 'E02000072',
        '2XA' => 'E02000072',
        '2YB' => 'E02000072',
        '2ZG' => 'E02000072',
        '2ZH' => 'E02000072',
        '2ZJ' => 'E02000072',
        '2ZL' => 'E02000072',
        '2ZN' => 'E02000072',
        '2ZP' => 'E02000072',
        '2ZQ' => 'E02000072',
        '2ZR' => 'E02000072',
        '2ZS' => 'E02000072',
        '2ZT' => 'E02000072',
        '2ZU' => 'E02000072',
        '2ZW' => 'E02000072',
        '2ZX' => 'E02000072',
        '2ZY' => 'E02000072',
        '2ZZ' => 'E02000072',
        '3AA' => 'E02000074',
        '3AB' => 'E02000074',
        '3AD' => 'E02000074',
        '3AE' => 'E02000074',
        '3AF' => 'E02000074',
        '3AG' => 'E02000072',
        '3AH' => 'E02000072',
        '3AJ' => 'E02000072',
        '3AL' => 'E02000071',
        '3AN' => 'E02000068',
        '3AP' => 'E02000068',
        '3AQ' => 'E02000072',
        '3AR' => 'E02000068',
        '3AS' => 'E02000068',
        '3AT' => 'E02000074',
        '3AU' => 'E02000074',
        '3AW' => 'E02000068',
        '3AX' => 'E02000074',
        '3AY' => 'E02000074',
        '3AZ' => 'E02000074',
        '3BA' => 'E02000074',
        '3BB' => 'E02000074',
        '3BD' => 'E02000074',
        '3BE' => 'E02000074',
        '3BF' => 'E02000074',
        '3BG' => 'E02000071',
        '3BH' => 'E02000074',
        '3BJ' => 'E02000074',
        '3BL' => 'E02000074',
        '3BN' => 'E02000071',
        '3BP' => 'E02000071',
        '3BQ' => 'E02000071',
        '3BS' => 'E02000071',
        '3BT' => 'E02000071',
        '3BU' => 'E02000074',
        '3BW' => 'E02000071',
        '3BX' => 'E02000071',
        '3BY' => 'E02000068',
        '3BZ' => 'E02000068',
        '3DA' => 'E02000071',
        '3DB' => 'E02000069',
        '3DD' => 'E02000074',
        '3DE' => 'E02000068',
        '3DF' => 'E02000068',
        '3DG' => 'E02000069',
        '3DH' => 'E02000068',
        '3DJ' => 'E02000069',
        '3DL' => 'E02000069',
        '3DN' => 'E02000074',
        '3DP' => 'E02000074',
        '3DQ' => 'E02000069',
        '3DR' => 'E02000074',
        '3DS' => 'E02000074',
        '3DT' => 'E02000069',
        '3DU' => 'E02000069',
        '3DW' => 'E02000074',
        '3DX' => 'E02000068',
        '3DY' => 'E02000069',
        '3DZ' => 'E02000068',
        '3EA' => 'E02000069',
        '3EB' => 'E02000069',
        '3ED' => 'E02000069',
        '3EE' => 'E02000069',
        '3EF' => 'E02000069',
        '3EG' => 'E02000071',
        '3EH' => 'E02000069',
        '3EJ' => 'E02000071',
        '3EL' => 'E02000071',
        '3EN' => 'E02000071',
        '3EP' => 'E02000069',
        '3EQ' => 'E02000071',
        '3ER' => 'E02000069',
        '3ES' => 'E02000069',
        '3ET' => 'E02000074',
        '3EU' => 'E02000071',
        '3EW' => 'E02000071',
        '3EX' => 'E02000071',
        '3EY' => 'E02000074',
        '3EZ' => 'E02000071',
        '3FA' => 'E02000072',
        '3FB' => 'E02000069',
        '3FD' => 'E02000074',
        '3FE' => 'E02000074',
        '3FF' => 'E02000072',
        '3FG' => 'E02000072',
        '3FH' => 'E02000072',
        '3FJ' => 'E02000072',
        '3FL' => 'E02000072',
        '3FN' => 'E02000072',
        '3FP' => 'E02000072',
        '3FQ' => 'E02000072',
        '3FR' => 'E02000074',
        '3FS' => 'E02000074',
        '3HA' => 'E02000071',
        '3HB' => 'E02000071',
        '3HD' => 'E02000071',
        '3HE' => 'E02000071',
        '3HF' => 'E02000071',
        '3HG' => 'E02000071',
        '3HH' => 'E02000071',
        '3HJ' => 'E02000074',
        '3HL' => 'E02000074',
        '3HQ' => 'E02000071',
        '3HR' => 'E02000074',
        '3HS' => 'E02000074',
        '3HT' => 'E02000074',
        '3HU' => 'E02000074',
        '3HX' => 'E02000074',
        '3HY' => 'E02000074',
        '3HZ' => 'E02000074',
        '3JA' => 'E02000074',
        '3JB' => 'E02000074',
        '3JD' => 'E02000074',
        '3JE' => 'E02000074',
        '3JF' => 'E02000078',
        '3JG' => 'E02000074',
        '3JH' => 'E02000074',
        '3JJ' => 'E02000074',
        '3JL' => 'E02000074',
        '3JN' => 'E02000074',
        '3JP' => 'E02000074',
        '3JQ' => 'E02000074',
        '3JR' => 'E02000074',
        '3JS' => 'E02000074',
        '3JT' => 'E02000074',
        '3JU' => 'E02000074',
        '3JW' => 'E02000074',
        '3JX' => 'E02000074',
        '3JY' => 'E02000074',
        '3JZ' => 'E02000074',
        '3LA' => 'E02000074',
        '3LB' => 'E02000074',
        '3LD' => 'E02000074',
        '3LE' => 'E02000074',
        '3LF' => 'E02000074',
        '3LG' => 'E02000074',
        '3LP' => 'E02000075',
        '3LQ' => 'E02000074',
        '3LT' => 'E02000078',
        '3LU' => 'E02000078',
        '3LX' => 'E02000078',
        '3LY' => 'E02000078',
        '3LZ' => 'E02000078',
        '3NA' => 'E02000078',
        '3NB' => 'E02000078',
        '3ND' => 'E02000078',
        '3NE' => 'E02000078',
        '3NF' => 'E02000078',
        '3NG' => 'E02000078',
        '3NH' => 'E02000078',
        '3NJ' => 'E02000078',
        '3NL' => 'E02000078',
        '3NN' => 'E02000078',
        '3NP' => 'E02000078',
        '3NQ' => 'E02000078',
        '3NR' => 'E02000078',
        '3NS' => 'E02000078',
        '3NT' => 'E02000078',
        '3NU' => 'E02000078',
        '3NW' => 'E02000078',
        '3NX' => 'E02000078',
        '3NY' => 'E02000078',
        '3NZ' => 'E02000078',
        '3PA' => 'E02000078',
        '3PB' => 'E02000078',
        '3PD' => 'E02000074',
        '3PE' => 'E02000078',
        '3PL' => 'E02000072',
        '3PP' => 'E02000074',
        '3PQ' => 'E02000074',
        '3PR' => 'E02000072',
        '3PS' => 'E02000074',
        '3PT' => 'E02000074',
        '3PU' => 'E02000074',
        '3PW' => 'E02000072',
        '3PX' => 'E02000074',
        '3PY' => 'E02000072',
        '3PZ' => 'E02000072',
        '3QA' => 'E02000074',
        '3QB' => 'E02000074',
        '3QD' => 'E02000074',
        '3QE' => 'E02000072',
        '3QF' => 'E02000074',
        '3QH' => 'E02000074',
        '3QP' => 'E02000074',
        '3QR' => 'E02000074',
        '3QS' => 'E02000074',
        '3QT' => 'E02000074',
        '3QU' => 'E02000074',
        '3QX' => 'E02000074',
        '3RA' => 'E02000072',
        '3RB' => 'E02000072',
        '3RD' => 'E02000072',
        '3RE' => 'E02000072',
        '3RF' => 'E02000072',
        '3RG' => 'E02000072',
        '3RH' => 'E02000072',
        '3RJ' => 'E02000072',
        '3RL' => 'E02000072',
        '3RN' => 'E02000072',
        '3RP' => 'E02000072',
        '3RQ' => 'E02000072',
        '3RR' => 'E02000072',
        '3RS' => 'E02000072',
        '3RT' => 'E02000072',
        '3RU' => 'E02000074',
        '3RW' => 'E02000072',
        '3RX' => 'E02000074',
        '3RY' => 'E02000074',
        '3RZ' => 'E02000072',
        '3SA' => 'E02000072',
        '3SH' => 'E02000068',
        '3SJ' => 'E02000069',
        '3SL' => 'E02000069',
        '3SN' => 'E02000069',
        '3SP' => 'E02000069',
        '3SR' => 'E02000069',
        '3SW' => 'E02000069',
        '3TA' => 'E02000069',
        '3TB' => 'E02000069',
        '3TD' => 'E02000072',
        '3TE' => 'E02000074',
        '3TF' => 'E02000074',
        '3TG' => 'E02000074',
        '3TH' => 'E02000072',
        '3UA' => 'E02000072',
        '3UG' => 'E02000072',
        '3WA' => 'E02000072',
        '3WB' => 'E02000072',
        '3WD' => 'E02000072',
        '3WE' => 'E02000072',
        '3WY' => 'E02000072',
        '3WZ' => 'E02000072',
        '3XF' => 'E02000072',
        '3XX' => 'E02000071',
        '3ZA' => 'E02000072',
        '3ZB' => 'E02000072',
        '3ZF' => 'E02000072',
        '3ZP' => 'E02000072',
        '3ZQ' => 'E02000072',
        '3ZR' => 'E02000074',
        '3ZS' => 'E02000072',
        '3ZT' => 'E02000069',
        '3ZU' => 'E02000069',
        '3ZW' => 'E02000072',
        '3ZX' => 'E02000071',
        '3ZY' => 'E02000074',
        '3ZZ' => 'E02000074',
        '9AA' => 'E02000072',
        '9AB' => 'E02000072',
        '9AD' => 'E02000072',
        '9AE' => 'E02000072',
        '9AF' => 'E02000072',
        '9AG' => 'E02000072',
        '9AH' => 'E02000072',
        '9AJ' => 'E02000072',
        '9AL' => 'E02000072',
        '9AN' => 'E02000072',
        '9AP' => 'E02000072',
        '9AQ' => 'E02000072',
        '9AR' => 'E02000072',
        '9AS' => 'E02000072',
        '9AT' => 'E02000072',
        '9AU' => 'E02000072',
        '9AW' => 'E02000072',
        '9AY' => 'E02000072',
        '9AZ' => 'E02000072',
        '9BA' => 'E02000072',
        '9BB' => 'E02000072',
        '9BD' => 'E02000072',
        '9BE' => 'E02000072',
        '9BF' => 'E02000072',
        '9BG' => 'E02000072',
        '9BH' => 'E02000072',
        '9BJ' => 'E02000072',
        '9BL' => 'E02000072',
        '9BN' => 'E02000072',
        '9BP' => 'E02000072',
        '9BQ' => 'E02000072',
        '9BR' => 'E02000072',
        '9BS' => 'E02000072',
        '9BT' => 'E02000072',
        '9BU' => 'E02000072',
        '9BW' => 'E02000072',
        '9BX' => 'E02000072',
        '9BY' => 'E02000072',
        '9BZ' => 'E02000072',
        '9DA' => 'E02000072',
        '9DB' => 'E02000072',
        '9DD' => 'E02000072',
        '9DE' => 'E02000072',
        '9DF' => 'E02000072',
        '9DG' => 'E02000072',
        '9DH' => 'E02000072',
        '9DJ' => 'E02000072',
        '9DL' => 'E02000072',
        '9DN' => 'E02000072',
        '9DP' => 'E02000072',
        '9DQ' => 'E02000072',
        '9DR' => 'E02000072',
        '9DS' => 'E02000072',
        '9DT' => 'E02000072',
        '9DU' => 'E02000072',
        '9DW' => 'E02000072',
        '9DX' => 'E02000072',
        '9DY' => 'E02000072',
        '9DZ' => 'E02000072',
        '9EA' => 'E02000072',
        '9ED' => 'E02000072',
        '9EE' => 'E02000072',
        '9EF' => 'E02000072',
        '9EG' => 'E02000072',
        '9EH' => 'E02000072',
        '9EJ' => 'E02000072',
        '9EL' => 'E02000072',
        '9EN' => 'E02000072',
        '9EP' => 'E02000072',
        '9EQ' => 'E02000072',
        '9ER' => 'E02000072',
        '9ES' => 'E02000072',
        '9ET' => 'E02000072',
        '9EU' => 'E02000072',
        '9EW' => 'E02000072',
        '9EX' => 'E02000072',
        '9EY' => 'E02000072',
        '9EZ' => 'E02000072',
        '9FA' => 'E02000072',
        '9FB' => 'E02000072',
        '9FD' => 'E02000072',
        '9FE' => 'E02000072',
        '9FF' => 'E02000072',
        '9FG' => 'E02000072',
        '9FH' => 'E02000072',
        '9FJ' => 'E02000072',
        '9FL' => 'E02000072',
        '9FN' => 'E02000072',
        '9FP' => 'E02000072',
        '9FQ' => 'E02000072',
        '9FR' => 'E02000072',
        '9FS' => 'E02000072',
        '9FT' => 'E02000072',
        '9FU' => 'E02000072',
        '9FW' => 'E02000072',
        '9FX' => 'E02000072',
        '9FY' => 'E02000072',
        '9FZ' => 'E02000072',
        '9GA' => 'E02000072',
        '9GB' => 'E02000072',
        '9GD' => 'E02000072',
        '9GE' => 'E02000072',
        '9GF' => 'E02000072',
        '9GG' => 'E02000072',
        '9GJ' => 'E02000072',
        '9GL' => 'E02000072',
        '9GN' => 'E02000072',
        '9GP' => 'E02000072',
        '9GQ' => 'E02000072',
        '9GR' => 'E02000072',
        '9GS' => 'E02000072',
        '9GT' => 'E02000072',
        '9GU' => 'E02000072',
        '9GW' => 'E02000072',
        '9GX' => 'E02000072',
        '9GY' => 'E02000072',
        '9GZ' => 'E02000072',
        '9HA' => 'E02000072',
        '9HB' => 'E02000072',
        '9HD' => 'E02000072',
        '9HE' => 'E02000072',
        '9HF' => 'E02000072',
        '9HG' => 'E02000072',
        '9HH' => 'E02000072',
        '9HJ' => 'E02000072',
        '9HL' => 'E02000072',
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
