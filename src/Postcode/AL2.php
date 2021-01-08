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
final class AL2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004941',
        '1AB' => 'E02004941',
        '1AD' => 'E02004941',
        '1AE' => 'E02004941',
        '1AF' => 'E02004941',
        '1AG' => 'E02004941',
        '1AH' => 'E02004941',
        '1AJ' => 'E02004941',
        '1AL' => 'E02004941',
        '1AN' => 'E02004941',
        '1AP' => 'E02004939',
        '1AQ' => 'E02004941',
        '1AR' => 'E02004941',
        '1AS' => 'E02004941',
        '1AT' => 'E02004941',
        '1AU' => 'E02004941',
        '1AW' => 'E02004941',
        '1AX' => 'E02004941',
        '1AY' => 'E02004941',
        '1AZ' => 'E02004941',
        '1BA' => 'E02004941',
        '1BB' => 'E02004899',
        '1BD' => 'E02004941',
        '1BE' => 'E02004941',
        '1BF' => 'E02004941',
        '1BG' => 'E02004941',
        '1BH' => 'E02004941',
        '1BJ' => 'E02004941',
        '1BL' => 'E02004941',
        '1BN' => 'E02004941',
        '1BP' => 'E02004941',
        '1BQ' => 'E02004941',
        '1BS' => 'E02004941',
        '1BT' => 'E02004899',
        '1BU' => 'E02004899',
        '1BW' => 'E02004941',
        '1BX' => 'E02004899',
        '1BY' => 'E02004899',
        '1BZ' => 'E02004899',
        '1DA' => 'E02004899',
        '1DB' => 'E02004941',
        '1DD' => 'E02004941',
        '1DE' => 'E02004899',
        '1DF' => 'E02004899',
        '1DG' => 'E02004941',
        '1DH' => 'E02004939',
        '1DJ' => 'E02004939',
        '1DL' => 'E02004939',
        '1DN' => 'E02004939',
        '1DP' => 'E02004941',
        '1DQ' => 'E02004941',
        '1DR' => 'E02004899',
        '1DS' => 'E02004936',
        '1DT' => 'E02004941',
        '1DU' => 'E02004899',
        '1DW' => 'E02004941',
        '1DX' => 'E02004941',
        '1DY' => 'E02004941',
        '1DZ' => 'E02004941',
        '1EA' => 'E02004941',
        '1EB' => 'E02004941',
        '1ED' => 'E02004941',
        '1EE' => 'E02004941',
        '1EF' => 'E02004941',
        '1EG' => 'E02004941',
        '1EH' => 'E02004941',
        '1EJ' => 'E02004941',
        '1EL' => 'E02004936',
        '1EN' => 'E02004941',
        '1EP' => 'E02004941',
        '1EQ' => 'E02004941',
        '1ER' => 'E02004941',
        '1ES' => 'E02004941',
        '1ET' => 'E02004941',
        '1EU' => 'E02004941',
        '1EW' => 'E02004941',
        '1EX' => 'E02004936',
        '1EY' => 'E02004941',
        '1EZ' => 'E02004941',
        '1FA' => 'E02004936',
        '1FB' => 'E02004941',
        '1FD' => 'E02004941',
        '1FE' => 'E02004941',
        '1FF' => 'E02004899',
        '1FG' => 'E02004941',
        '1FH' => 'E02004941',
        '1FN' => 'E02004941',
        '1FP' => 'E02004941',
        '1FQ' => 'E02004941',
        '1FR' => 'E02004941',
        '1FS' => 'E02004941',
        '1GA' => 'E02004941',
        '1GB' => 'E02004941',
        '1GD' => 'E02004941',
        '1GE' => 'E02004941',
        '1GF' => 'E02004941',
        '1GG' => 'E02004941',
        '1GH' => 'E02004941',
        '1GJ' => 'E02004941',
        '1GL' => 'E02004941',
        '1GN' => 'E02004941',
        '1GP' => 'E02004941',
        '1GQ' => 'E02004941',
        '1GR' => 'E02004941',
        '1GX' => 'E02004941',
        '1GY' => 'E02004941',
        '1GZ' => 'E02004941',
        '1HA' => 'E02004941',
        '1HB' => 'E02004941',
        '1HD' => 'E02004941',
        '1HE' => 'E02004941',
        '1HF' => 'E02004941',
        '1HG' => 'E02004941',
        '1HH' => 'E02004936',
        '1HJ' => 'E02004941',
        '1HL' => 'E02004941',
        '1HN' => 'E02004941',
        '1HP' => 'E02004941',
        '1HQ' => 'E02004941',
        '1HR' => 'E02004941',
        '1HS' => 'E02004941',
        '1HT' => 'E02004941',
        '1HU' => 'E02004941',
        '1HW' => 'E02004941',
        '1HX' => 'E02004941',
        '1HY' => 'E02004941',
        '1HZ' => 'E02004941',
        '1JA' => 'E02004941',
        '1JB' => 'E02004941',
        '1JD' => 'E02004941',
        '1JE' => 'E02004941',
        '1JF' => 'E02004941',
        '1JG' => 'E02004941',
        '1JH' => 'E02004941',
        '1JJ' => 'E02004941',
        '1JL' => 'E02004941',
        '1JN' => 'E02004941',
        '1JP' => 'E02004941',
        '1JQ' => 'E02004941',
        '1JR' => 'E02004941',
        '1JS' => 'E02004941',
        '1JT' => 'E02004941',
        '1JU' => 'E02004941',
        '1JW' => 'E02004941',
        '1JX' => 'E02004941',
        '1JY' => 'E02004941',
        '1JZ' => 'E02004941',
        '1LA' => 'E02004941',
        '1LB' => 'E02004941',
        '1LD' => 'E02004941',
        '1LE' => 'E02004941',
        '1LF' => 'E02004941',
        '1LG' => 'E02004941',
        '1LH' => 'E02004941',
        '1LJ' => 'E02004941',
        '1LL' => 'E02004941',
        '1LN' => 'E02004941',
        '1LP' => 'E02004941',
        '1LQ' => 'E02004941',
        '1LR' => 'E02004941',
        '1LS' => 'E02004941',
        '1LT' => 'E02004941',
        '1LU' => 'E02004941',
        '1LW' => 'E02004941',
        '1LX' => 'E02004941',
        '1LY' => 'E02004941',
        '1LZ' => 'E02004941',
        '1NA' => 'E02004941',
        '1NB' => 'E02004941',
        '1ND' => 'E02004941',
        '1NE' => 'E02004941',
        '1NF' => 'E02004941',
        '1NG' => 'E02004941',
        '1NH' => 'E02004941',
        '1NJ' => 'E02004941',
        '1NL' => 'E02004941',
        '1NN' => 'E02004941',
        '1NP' => 'E02004941',
        '1NQ' => 'E02004941',
        '1NR' => 'E02004936',
        '1NS' => 'E02004941',
        '1NT' => 'E02004941',
        '1NU' => 'E02004941',
        '1NW' => 'E02004941',
        '1NX' => 'E02004941',
        '1NY' => 'E02004941',
        '1NZ' => 'E02004941',
        '1PA' => 'E02004941',
        '1PB' => 'E02004941',
        '1PD' => 'E02004941',
        '1PE' => 'E02004941',
        '1PF' => 'E02004941',
        '1PG' => 'E02004941',
        '1PH' => 'E02004941',
        '1PJ' => 'E02004941',
        '1PL' => 'E02004941',
        '1PN' => 'E02004941',
        '1PP' => 'E02004941',
        '1PQ' => 'E02004941',
        '1PR' => 'E02004941',
        '1PS' => 'E02004941',
        '1PT' => 'E02004941',
        '1PU' => 'E02004941',
        '1PW' => 'E02004941',
        '1PX' => 'E02004941',
        '1PY' => 'E02004941',
        '1PZ' => 'E02004941',
        '1QA' => 'E02004941',
        '1QB' => 'E02004941',
        '1QD' => 'E02004941',
        '1QE' => 'E02004936',
        '1QF' => 'E02004941',
        '1QG' => 'E02004941',
        '1QH' => 'E02004941',
        '1QJ' => 'E02004941',
        '1QL' => 'E02004941',
        '1QN' => 'E02004941',
        '1QP' => 'E02004941',
        '1QQ' => 'E02004941',
        '1QR' => 'E02004941',
        '1QS' => 'E02004941',
        '1QT' => 'E02004941',
        '1QU' => 'E02004941',
        '1QW' => 'E02004941',
        '1QX' => 'E02004941',
        '1QY' => 'E02004941',
        '1QZ' => 'E02004941',
        '1RA' => 'E02004936',
        '1RB' => 'E02004941',
        '1RD' => 'E02004941',
        '1RE' => 'E02004941',
        '1RF' => 'E02004941',
        '1RG' => 'E02004941',
        '1RH' => 'E02004941',
        '1RJ' => 'E02004941',
        '1RL' => 'E02004941',
        '1RN' => 'E02004941',
        '1RP' => 'E02004941',
        '1RQ' => 'E02004941',
        '1RR' => 'E02004941',
        '1RS' => 'E02004941',
        '1RT' => 'E02004941',
        '1RU' => 'E02004941',
        '1RW' => 'E02004941',
        '1RX' => 'E02004941',
        '1RY' => 'E02004941',
        '1RZ' => 'E02004941',
        '1SA' => 'E02004941',
        '1SB' => 'E02004941',
        '1SD' => 'E02004941',
        '1SE' => 'E02004936',
        '1SF' => 'E02004941',
        '1SG' => 'E02004941',
        '1SH' => 'E02004941',
        '1SJ' => 'E02004941',
        '1SL' => 'E02004941',
        '1SN' => 'E02004941',
        '1SP' => 'E02004936',
        '1SQ' => 'E02004941',
        '1SR' => 'E02004936',
        '1SS' => 'E02004941',
        '1SW' => 'E02004941',
        '1TA' => 'E02004941',
        '1TB' => 'E02004941',
        '1TD' => 'E02004941',
        '1TE' => 'E02004941',
        '1TF' => 'E02004941',
        '1TG' => 'E02004941',
        '1TH' => 'E02004941',
        '1TJ' => 'E02004941',
        '1TL' => 'E02004941',
        '1TN' => 'E02004941',
        '1TP' => 'E02004941',
        '1TT' => 'E02004941',
        '1TW' => 'E02004941',
        '1UA' => 'E02004941',
        '1UB' => 'E02004941',
        '1UD' => 'E02004941',
        '1UE' => 'E02004941',
        '1UF' => 'E02004941',
        '1UG' => 'E02004941',
        '1UH' => 'E02004941',
        '1UJ' => 'E02004941',
        '1UL' => 'E02004941',
        '1UN' => 'E02004941',
        '1UP' => 'E02004941',
        '1UQ' => 'E02004941',
        '1UR' => 'E02004941',
        '1US' => 'E02004941',
        '1UT' => 'E02004941',
        '1UW' => 'E02004941',
        '1UX' => 'E02004941',
        '1WA' => 'E02004941',
        '1WB' => 'E02004936',
        '1WD' => 'E02004941',
        '1WH' => 'E02004941',
        '1WJ' => 'E02004936',
        '1WW' => 'E02004941',
        '1WX' => 'E02004941',
        '1WZ' => 'E02004936',
        '1XA' => 'E02004936',
        '1XB' => 'E02004936',
        '1XD' => 'E02004941',
        '1XE' => 'E02004941',
        '1XF' => 'E02004936',
        '1XN' => 'E02004936',
        '1XP' => 'E02004936',
        '1XQ' => 'E02004936',
        '1XR' => 'E02004936',
        '1XZ' => 'E02004936',
        '1YL' => 'E02004936',
        '1YZ' => 'E02004936',
        '1ZD' => 'E02004936',
        '1ZE' => 'E02004941',
        '1ZF' => 'E02004941',
        '1ZG' => 'E02004941',
        '1ZH' => 'E02004936',
        '1ZJ' => 'E02004936',
        '1ZL' => 'E02004936',
        '1ZN' => 'E02004936',
        '1ZP' => 'E02004936',
        '1ZQ' => 'E02004936',
        '1ZR' => 'E02004936',
        '1ZS' => 'E02004936',
        '1ZT' => 'E02004941',
        '1ZU' => 'E02004936',
        '1ZW' => 'E02004936',
        '1ZX' => 'E02004936',
        '1ZY' => 'E02004941',
        '1ZZ' => 'E02004941',
        '2AA' => 'E02004943',
        '2AB' => 'E02004943',
        '2AD' => 'E02004942',
        '2AE' => 'E02004942',
        '2AF' => 'E02004942',
        '2AG' => 'E02004943',
        '2AH' => 'E02004942',
        '2AJ' => 'E02004942',
        '2AL' => 'E02004942',
        '2AN' => 'E02004942',
        '2AP' => 'E02004942',
        '2AQ' => 'E02004942',
        '2AR' => 'E02004942',
        '2AS' => 'E02004942',
        '2AT' => 'E02004942',
        '2AU' => 'E02004942',
        '2AW' => 'E02004942',
        '2AX' => 'E02004942',
        '2AY' => 'E02004942',
        '2AZ' => 'E02004942',
        '2BA' => 'E02004942',
        '2BB' => 'E02004942',
        '2BD' => 'E02004942',
        '2BE' => 'E02004942',
        '2BF' => 'E02004936',
        '2BG' => 'E02004942',
        '2BH' => 'E02004942',
        '2BJ' => 'E02004942',
        '2BL' => 'E02004942',
        '2BN' => 'E02004942',
        '2BP' => 'E02004936',
        '2BQ' => 'E02004942',
        '2BS' => 'E02004942',
        '2BT' => 'E02004942',
        '2BU' => 'E02004936',
        '2BW' => 'E02004936',
        '2BX' => 'E02004936',
        '2BY' => 'E02004936',
        '2BZ' => 'E02004936',
        '2DA' => 'E02004936',
        '2DB' => 'E02004942',
        '2DD' => 'E02004942',
        '2DE' => 'E02004942',
        '2DF' => 'E02004942',
        '2DG' => 'E02004936',
        '2DH' => 'E02004936',
        '2DJ' => 'E02004942',
        '2DL' => 'E02004942',
        '2DN' => 'E02004936',
        '2DP' => 'E02004942',
        '2DQ' => 'E02004942',
        '2DR' => 'E02004942',
        '2DS' => 'E02004943',
        '2DU' => 'E02004943',
        '2DW' => 'E02004942',
        '2DX' => 'E02004942',
        '2DY' => 'E02004942',
        '2DZ' => 'E02004942',
        '2EA' => 'E02004942',
        '2EB' => 'E02004942',
        '2ED' => 'E02004942',
        '2EE' => 'E02004942',
        '2EF' => 'E02004942',
        '2EG' => 'E02004942',
        '2EH' => 'E02004942',
        '2EJ' => 'E02004900',
        '2EL' => 'E02004942',
        '2EN' => 'E02004942',
        '2EP' => 'E02004942',
        '2EQ' => 'E02004942',
        '2ER' => 'E02004942',
        '2ES' => 'E02004942',
        '2ET' => 'E02004942',
        '2EU' => 'E02004941',
        '2EW' => 'E02004942',
        '2EX' => 'E02004940',
        '2EY' => 'E02004942',
        '2EZ' => 'E02004942',
        '2FA' => 'E02004942',
        '2FB' => 'E02004942',
        '2FD' => 'E02004942',
        '2FE' => 'E02004942',
        '2FF' => 'E02004942',
        '2FG' => 'E02004942',
        '2FH' => 'E02004942',
        '2FJ' => 'E02004942',
        '2FL' => 'E02004942',
        '2FN' => 'E02004942',
        '2GA' => 'E02004942',
        '2GP' => 'E02004942',
        '2GZ' => 'E02004942',
        '2HA' => 'E02004942',
        '2HB' => 'E02004942',
        '2HD' => 'E02004942',
        '2HE' => 'E02004942',
        '2HF' => 'E02004942',
        '2HG' => 'E02004942',
        '2HH' => 'E02004942',
        '2HJ' => 'E02004942',
        '2HL' => 'E02004942',
        '2HN' => 'E02004942',
        '2HP' => 'E02004942',
        '2HQ' => 'E02004942',
        '2HR' => 'E02004942',
        '2HS' => 'E02004942',
        '2HT' => 'E02004942',
        '2HU' => 'E02004942',
        '2HW' => 'E02004942',
        '2HX' => 'E02004942',
        '2HY' => 'E02004942',
        '2HZ' => 'E02004942',
        '2JA' => 'E02004942',
        '2JB' => 'E02004942',
        '2JD' => 'E02004942',
        '2JE' => 'E02004942',
        '2JF' => 'E02004942',
        '2JG' => 'E02004942',
        '2JH' => 'E02004942',
        '2JJ' => 'E02004942',
        '2JL' => 'E02004942',
        '2JN' => 'E02004942',
        '2JP' => 'E02004942',
        '2JQ' => 'E02004942',
        '2JR' => 'E02004942',
        '2JS' => 'E02004942',
        '2JT' => 'E02004942',
        '2JU' => 'E02004942',
        '2JX' => 'E02004942',
        '2JY' => 'E02004942',
        '2JZ' => 'E02004942',
        '2LA' => 'E02004942',
        '2LB' => 'E02004942',
        '2LD' => 'E02004942',
        '2LE' => 'E02004942',
        '2LF' => 'E02004942',
        '2LG' => 'E02004942',
        '2LH' => 'E02004942',
        '2LJ' => 'E02004943',
        '2LL' => 'E02004942',
        '2LN' => 'E02004942',
        '2LP' => 'E02004942',
        '2LQ' => 'E02004942',
        '2LR' => 'E02004942',
        '2LS' => 'E02004942',
        '2LT' => 'E02004942',
        '2LU' => 'E02004942',
        '2LW' => 'E02004942',
        '2LX' => 'E02004942',
        '2LY' => 'E02004942',
        '2LZ' => 'E02004942',
        '2NA' => 'E02004942',
        '2NB' => 'E02004942',
        '2ND' => 'E02004942',
        '2NE' => 'E02004942',
        '2NF' => 'E02004942',
        '2NG' => 'E02004942',
        '2NH' => 'E02004942',
        '2NJ' => 'E02004942',
        '2NL' => 'E02004942',
        '2NN' => 'E02004942',
        '2NP' => 'E02004942',
        '2NQ' => 'E02004942',
        '2NR' => 'E02004942',
        '2NS' => 'E02004942',
        '2NT' => 'E02004942',
        '2NU' => 'E02004942',
        '2NW' => 'E02004942',
        '2NX' => 'E02004942',
        '2NY' => 'E02004942',
        '2NZ' => 'E02004942',
        '2PA' => 'E02004942',
        '2PB' => 'E02004942',
        '2PD' => 'E02004942',
        '2PE' => 'E02004942',
        '2PF' => 'E02004942',
        '2PG' => 'E02004942',
        '2PH' => 'E02004942',
        '2PJ' => 'E02004942',
        '2PL' => 'E02004942',
        '2PN' => 'E02004942',
        '2PP' => 'E02004942',
        '2PQ' => 'E02004942',
        '2PR' => 'E02004942',
        '2PS' => 'E02004942',
        '2PT' => 'E02004942',
        '2PU' => 'E02004942',
        '2PW' => 'E02004942',
        '2PX' => 'E02004942',
        '2PY' => 'E02004942',
        '2PZ' => 'E02004942',
        '2QA' => 'E02004942',
        '2QB' => 'E02004942',
        '2QD' => 'E02004942',
        '2QE' => 'E02004942',
        '2QF' => 'E02004942',
        '2QG' => 'E02004942',
        '2QH' => 'E02004942',
        '2QJ' => 'E02004942',
        '2QL' => 'E02004942',
        '2QN' => 'E02004942',
        '2QP' => 'E02004942',
        '2QQ' => 'E02004942',
        '2QR' => 'E02004942',
        '2QS' => 'E02004942',
        '2QT' => 'E02004942',
        '2QU' => 'E02004942',
        '2QW' => 'E02004942',
        '2QX' => 'E02004942',
        '2QY' => 'E02004942',
        '2QZ' => 'E02004942',
        '2RA' => 'E02004942',
        '2RB' => 'E02004942',
        '2RD' => 'E02004942',
        '2RE' => 'E02004942',
        '2RF' => 'E02004942',
        '2RG' => 'E02004942',
        '2RH' => 'E02004942',
        '2RJ' => 'E02004942',
        '2RL' => 'E02004942',
        '2RN' => 'E02004942',
        '2RP' => 'E02004942',
        '2RQ' => 'E02004942',
        '2RR' => 'E02004942',
        '2RS' => 'E02004942',
        '2RT' => 'E02004942',
        '2RU' => 'E02004942',
        '2RW' => 'E02004942',
        '2RX' => 'E02004942',
        '2RY' => 'E02004942',
        '2RZ' => 'E02004942',
        '2SA' => 'E02004942',
        '2SB' => 'E02004942',
        '2SD' => 'E02004942',
        '2SE' => 'E02004942',
        '2SF' => 'E02004942',
        '2SG' => 'E02004942',
        '2SH' => 'E02004942',
        '2SJ' => 'E02004942',
        '2SL' => 'E02004942',
        '2SN' => 'E02004942',
        '2SP' => 'E02004942',
        '2SQ' => 'E02004942',
        '2SS' => 'E02004942',
        '2SW' => 'E02004942',
        '2TB' => 'E02004942',
        '2TS' => 'E02004942',
        '2TT' => 'E02004942',
        '2TU' => 'E02004942',
        '2TX' => 'E02004942',
        '2TY' => 'E02004942',
        '2TZ' => 'E02004942',
        '2UA' => 'E02004942',
        '2UZ' => 'E02004936',
        '2WA' => 'E02004936',
        '2WD' => 'E02004936',
        '2WG' => 'E02004942',
        '2WH' => 'E02004942',
        '2WZ' => 'E02004936',
        '2XA' => 'E02004942',
        '2XJ' => 'E02004942',
        '2XN' => 'E02004936',
        '2XP' => 'E02004936',
        '2XQ' => 'E02004936',
        '2XR' => 'E02004936',
        '2XY' => 'E02004936',
        '2XZ' => 'E02004936',
        '2YA' => 'E02004936',
        '2YY' => 'E02004942',
        '2YZ' => 'E02004936',
        '2ZD' => 'E02004936',
        '2ZE' => 'E02004936',
        '2ZF' => 'E02004942',
        '2ZG' => 'E02004942',
        '2ZH' => 'E02004942',
        '2ZJ' => 'E02004936',
        '2ZL' => 'E02004936',
        '2ZP' => 'E02004936',
        '2ZQ' => 'E02004936',
        '2ZS' => 'E02004936',
        '2ZT' => 'E02004942',
        '2ZU' => 'E02004936',
        '2ZW' => 'E02004936',
        '2ZX' => 'E02004936',
        '2ZY' => 'E02004942',
        '3AA' => 'E02004943',
        '3AB' => 'E02004943',
        '3AD' => 'E02004943',
        '3AE' => 'E02004943',
        '3AF' => 'E02004943',
        '3AG' => 'E02004943',
        '3AH' => 'E02004943',
        '3AJ' => 'E02004943',
        '3AL' => 'E02004943',
        '3AN' => 'E02004943',
        '3AP' => 'E02004943',
        '3AQ' => 'E02004943',
        '3AR' => 'E02004943',
        '3AS' => 'E02004943',
        '3AT' => 'E02004943',
        '3AU' => 'E02004936',
        '3AW' => 'E02004943',
        '3AX' => 'E02004943',
        '3AY' => 'E02004943',
        '3AZ' => 'E02004943',
        '3BA' => 'E02004943',
        '3BB' => 'E02004943',
        '3BD' => 'E02004943',
        '3BE' => 'E02004943',
        '3BF' => 'E02004936',
        '3BG' => 'E02004943',
        '3BH' => 'E02004943',
        '3BJ' => 'E02004943',
        '3BL' => 'E02004936',
        '3BN' => 'E02004943',
        '3BP' => 'E02004943',
        '3BQ' => 'E02004943',
        '3BS' => 'E02004943',
        '3BT' => 'E02004936',
        '3BU' => 'E02004936',
        '3BW' => 'E02004936',
        '3BX' => 'E02004943',
        '3BY' => 'E02004943',
        '3BZ' => 'E02004943',
        '3DA' => 'E02004943',
        '3DB' => 'E02004943',
        '3DD' => 'E02004943',
        '3DE' => 'E02004943',
        '3DF' => 'E02004943',
        '3DG' => 'E02004943',
        '3DH' => 'E02004943',
        '3DJ' => 'E02004943',
        '3DL' => 'E02004943',
        '3DN' => 'E02004943',
        '3DP' => 'E02004943',
        '3DQ' => 'E02004943',
        '3DR' => 'E02004943',
        '3DS' => 'E02004943',
        '3DT' => 'E02004943',
        '3DU' => 'E02004943',
        '3DW' => 'E02004943',
        '3DX' => 'E02004943',
        '3DY' => 'E02004943',
        '3DZ' => 'E02004943',
        '3EA' => 'E02004943',
        '3EB' => 'E02004943',
        '3ED' => 'E02004943',
        '3EE' => 'E02004943',
        '3EF' => 'E02004943',
        '3EG' => 'E02004943',
        '3EH' => 'E02004943',
        '3EJ' => 'E02004943',
        '3EL' => 'E02004943',
        '3EN' => 'E02004943',
        '3EP' => 'E02004943',
        '3EQ' => 'E02004943',
        '3ER' => 'E02004943',
        '3ES' => 'E02004943',
        '3ET' => 'E02004943',
        '3EU' => 'E02004943',
        '3EW' => 'E02004936',
        '3EX' => 'E02004943',
        '3EY' => 'E02004943',
        '3EZ' => 'E02004943',
        '3FA' => 'E02004943',
        '3FB' => 'E02004943',
        '3FD' => 'E02004943',
        '3FE' => 'E02004943',
        '3FF' => 'E02004943',
        '3FG' => 'E02004943',
        '3FH' => 'E02004943',
        '3FJ' => 'E02004943',
        '3FL' => 'E02004943',
        '3FN' => 'E02004943',
        '3FP' => 'E02004943',
        '3FQ' => 'E02004943',
        '3FR' => 'E02004943',
        '3FS' => 'E02004943',
        '3FU' => 'E02004943',
        '3FW' => 'E02004943',
        '3FX' => 'E02004943',
        '3FY' => 'E02004943',
        '3GA' => 'E02004943',
        '3HA' => 'E02004943',
        '3HB' => 'E02004943',
        '3HD' => 'E02004943',
        '3HE' => 'E02004943',
        '3HF' => 'E02004943',
        '3HG' => 'E02004943',
        '3HH' => 'E02004943',
        '3HJ' => 'E02004943',
        '3HL' => 'E02004943',
        '3HN' => 'E02004943',
        '3HP' => 'E02004943',
        '3HQ' => 'E02004943',
        '3HR' => 'E02004943',
        '3HS' => 'E02004943',
        '3HT' => 'E02004943',
        '3HU' => 'E02004943',
        '3HW' => 'E02004943',
        '3HX' => 'E02004943',
        '3HY' => 'E02004943',
        '3HZ' => 'E02004943',
        '3JB' => 'E02004943',
        '3JD' => 'E02004936',
        '3JE' => 'E02004943',
        '3JF' => 'E02004943',
        '3JG' => 'E02004943',
        '3JH' => 'E02004943',
        '3JJ' => 'E02004943',
        '3JL' => 'E02004936',
        '3JQ' => 'E02004936',
        '3JT' => 'E02004943',
        '3JX' => 'E02004942',
        '3JY' => 'E02004943',
        '3JZ' => 'E02004943',
        '3LA' => 'E02004943',
        '3LB' => 'E02004943',
        '3LD' => 'E02004929',
        '3LE' => 'E02004929',
        '3LF' => 'E02004929',
        '3LG' => 'E02004943',
        '3LH' => 'E02004943',
        '3LJ' => 'E02004943',
        '3LL' => 'E02004943',
        '3LN' => 'E02004943',
        '3LP' => 'E02004943',
        '3LQ' => 'E02004943',
        '3LR' => 'E02004943',
        '3LS' => 'E02004943',
        '3LT' => 'E02004943',
        '3LU' => 'E02004943',
        '3LW' => 'E02004943',
        '3LX' => 'E02004943',
        '3LY' => 'E02004943',
        '3LZ' => 'E02004943',
        '3NA' => 'E02004943',
        '3NB' => 'E02004943',
        '3ND' => 'E02004943',
        '3NE' => 'E02004943',
        '3NF' => 'E02004943',
        '3NG' => 'E02004943',
        '3NH' => 'E02004943',
        '3NJ' => 'E02004943',
        '3NL' => 'E02004929',
        '3NN' => 'E02004929',
        '3NP' => 'E02004943',
        '3NQ' => 'E02004943',
        '3NR' => 'E02004943',
        '3NS' => 'E02004943',
        '3NT' => 'E02004943',
        '3NU' => 'E02004943',
        '3NW' => 'E02004929',
        '3NX' => 'E02004943',
        '3NY' => 'E02004943',
        '3NZ' => 'E02004943',
        '3PA' => 'E02004943',
        '3PB' => 'E02004943',
        '3PD' => 'E02004943',
        '3PE' => 'E02004943',
        '3PF' => 'E02004943',
        '3PG' => 'E02004943',
        '3PH' => 'E02004943',
        '3PJ' => 'E02004943',
        '3PL' => 'E02004943',
        '3PN' => 'E02004943',
        '3PP' => 'E02004943',
        '3PQ' => 'E02004943',
        '3PR' => 'E02004936',
        '3PS' => 'E02004943',
        '3PT' => 'E02004943',
        '3PU' => 'E02004943',
        '3PW' => 'E02004943',
        '3PX' => 'E02004943',
        '3PY' => 'E02004943',
        '3PZ' => 'E02004943',
        '3QA' => 'E02004943',
        '3QB' => 'E02004943',
        '3QD' => 'E02004943',
        '3QE' => 'E02004943',
        '3QF' => 'E02004943',
        '3QG' => 'E02004943',
        '3QH' => 'E02004943',
        '3QJ' => 'E02004943',
        '3QL' => 'E02004943',
        '3QN' => 'E02004943',
        '3QP' => 'E02004943',
        '3QQ' => 'E02004943',
        '3QR' => 'E02004943',
        '3QS' => 'E02004943',
        '3QT' => 'E02004943',
        '3QU' => 'E02004943',
        '3QW' => 'E02004943',
        '3QX' => 'E02004943',
        '3QY' => 'E02004943',
        '3QZ' => 'E02004943',
        '3RB' => 'E02004943',
        '3RE' => 'E02004943',
        '3RH' => 'E02004943',
        '3RN' => 'E02004936',
        '3RP' => 'E02004943',
        '3RQ' => 'E02004936',
        '3RR' => 'E02004943',
        '3RS' => 'E02004943',
        '3RT' => 'E02004943',
        '3RU' => 'E02004943',
        '3RW' => 'E02004943',
        '3RX' => 'E02004943',
        '3RY' => 'E02004943',
        '3RZ' => 'E02004943',
        '3SA' => 'E02004943',
        '3SB' => 'E02004943',
        '3SD' => 'E02004943',
        '3SE' => 'E02004943',
        '3SF' => 'E02004943',
        '3SG' => 'E02004943',
        '3SH' => 'E02004943',
        '3SJ' => 'E02004943',
        '3SL' => 'E02004943',
        '3SN' => 'E02004943',
        '3SP' => 'E02004943',
        '3SQ' => 'E02004943',
        '3SR' => 'E02004943',
        '3SS' => 'E02004943',
        '3ST' => 'E02004943',
        '3SU' => 'E02004943',
        '3SW' => 'E02004943',
        '3SX' => 'E02004943',
        '3SY' => 'E02004943',
        '3SZ' => 'E02004943',
        '3TA' => 'E02004943',
        '3TB' => 'E02004943',
        '3TD' => 'E02004943',
        '3TE' => 'E02004943',
        '3TF' => 'E02004943',
        '3TG' => 'E02004943',
        '3TH' => 'E02004943',
        '3TJ' => 'E02004943',
        '3TL' => 'E02004943',
        '3TN' => 'E02004943',
        '3TP' => 'E02004943',
        '3TQ' => 'E02004943',
        '3TR' => 'E02004943',
        '3TS' => 'E02004943',
        '3TT' => 'E02004943',
        '3TU' => 'E02004936',
        '3TW' => 'E02004943',
        '3TX' => 'E02004943',
        '3TY' => 'E02004942',
        '3TZ' => 'E02004943',
        '3UA' => 'E02004942',
        '3UB' => 'E02004942',
        '3UD' => 'E02004943',
        '3UE' => 'E02004943',
        '3UF' => 'E02004943',
        '3UG' => 'E02004943',
        '3UH' => 'E02004943',
        '3UJ' => 'E02004943',
        '3UL' => 'E02004943',
        '3UN' => 'E02004943',
        '3UP' => 'E02004943',
        '3UQ' => 'E02004943',
        '3UR' => 'E02004943',
        '3US' => 'E02004943',
        '3UT' => 'E02004943',
        '3UU' => 'E02004943',
        '3UW' => 'E02004943',
        '3UX' => 'E02004943',
        '3UY' => 'E02004943',
        '3UZ' => 'E02004943',
        '3WA' => 'E02004936',
        '3WB' => 'E02004936',
        '3WD' => 'E02004936',
        '3WE' => 'E02004936',
        '3WF' => 'E02004943',
        '3WG' => 'E02004943',
        '3WH' => 'E02004936',
        '3WJ' => 'E02004936',
        '3WL' => 'E02004936',
        '3WN' => 'E02004936',
        '3WP' => 'E02004936',
        '3WQ' => 'E02004936',
        '3WR' => 'E02004936',
        '3WS' => 'E02004936',
        '3WT' => 'E02004936',
        '3WU' => 'E02004936',
        '3WW' => 'E02004936',
        '3WX' => 'E02004936',
        '3WY' => 'E02004936',
        '3WZ' => 'E02004936',
        '3XA' => 'E02004943',
        '3XB' => 'E02004943',
        '3XD' => 'E02004943',
        '3XE' => 'E02004943',
        '3XF' => 'E02004943',
        '3XG' => 'E02004943',
        '3XH' => 'E02004943',
        '3XJ' => 'E02004943',
        '3XL' => 'E02004943',
        '3XN' => 'E02004943',
        '3XP' => 'E02004943',
        '3XQ' => 'E02004943',
        '3XR' => 'E02004943',
        '3XS' => 'E02004943',
        '3XT' => 'E02004943',
        '3XU' => 'E02004943',
        '3XW' => 'E02004943',
        '3XX' => 'E02004943',
        '3XY' => 'E02004943',
        '3XZ' => 'E02004943',
        '3YA' => 'E02004943',
        '3YB' => 'E02004943',
        '3YD' => 'E02004936',
        '3YE' => 'E02004936',
        '3YF' => 'E02004936',
        '3YG' => 'E02004943',
        '3YH' => 'E02004943',
        '3YJ' => 'E02004936',
        '3YL' => 'E02004943',
        '3YN' => 'E02004943',
        '3YP' => 'E02004936',
        '3YQ' => 'E02004943',
        '3YR' => 'E02004936',
        '3YS' => 'E02004943',
        '3YT' => 'E02004943',
        '3YU' => 'E02004943',
        '3YW' => 'E02004943',
        '3YX' => 'E02004943',
        '3YY' => 'E02004936',
        '3YZ' => 'E02004936',
        '3ZD' => 'E02004943',
        '3ZE' => 'E02004936',
        '3ZF' => 'E02004936',
        '3ZG' => 'E02004943',
        '3ZH' => 'E02004936',
        '3ZJ' => 'E02004943',
        '3ZL' => 'E02004936',
        '3ZN' => 'E02004936',
        '3ZP' => 'E02004936',
        '3ZQ' => 'E02004936',
        '3ZR' => 'E02004936',
        '3ZS' => 'E02004936',
        '3ZT' => 'E02004936',
        '3ZU' => 'E02004936',
        '3ZW' => 'E02004936',
        '3ZX' => 'E02004936',
        '3ZY' => 'E02004936',
        '3ZZ' => 'E02004936',
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
