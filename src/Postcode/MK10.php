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
final class MK10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003475',
        '0AB' => 'E02003475',
        '0AD' => 'E02003475',
        '0AE' => 'E02003475',
        '0AF' => 'E02003475',
        '0AG' => 'E02003475',
        '0AH' => 'E02003475',
        '0AJ' => 'E02003475',
        '0AL' => 'E02003475',
        '0AN' => 'E02003475',
        '0AP' => 'E02003475',
        '0AQ' => 'E02003475',
        '0AR' => 'E02003475',
        '0AS' => 'E02003475',
        '0AT' => 'E02003475',
        '0AU' => 'E02003475',
        '0AW' => 'E02003475',
        '0AX' => 'E02003475',
        '0AY' => 'E02003475',
        '0AZ' => 'E02003475',
        '0BA' => 'E02003475',
        '0BB' => 'E02003475',
        '0BD' => 'E02003475',
        '0BE' => 'E02003475',
        '0BF' => 'E02003475',
        '0BG' => 'E02003475',
        '0BH' => 'E02003475',
        '0BJ' => 'E02003475',
        '0BL' => 'E02003475',
        '0BN' => 'E02003475',
        '0BP' => 'E02003475',
        '0BQ' => 'E02003475',
        '0BS' => 'E02003475',
        '0BT' => 'E02003475',
        '0BU' => 'E02003475',
        '0BX' => 'E02003475',
        '0BY' => 'E02003475',
        '0BZ' => 'E02003475',
        '0DA' => 'E02003475',
        '0DB' => 'E02003475',
        '0DD' => 'E02003475',
        '0DE' => 'E02003475',
        '0DF' => 'E02003475',
        '0DG' => 'E02003475',
        '0EE' => 'E02003475',
        '0JT' => 'E02003475',
        '0WA' => 'E02003475',
        '0WZ' => 'E02003475',
        '0ZR' => 'E02003475',
        '0ZX' => 'E02003475',
        '0ZY' => 'E02003475',
        '1AA' => 'E02003475',
        '1AB' => 'E02003475',
        '1AD' => 'E02003475',
        '1AE' => 'E02003475',
        '1AF' => 'E02003475',
        '1AG' => 'E02003475',
        '1AH' => 'E02003475',
        '1AJ' => 'E02003475',
        '1AL' => 'E02003475',
        '1AN' => 'E02003475',
        '1AP' => 'E02003475',
        '1AQ' => 'E02003475',
        '1AR' => 'E02003475',
        '1AS' => 'E02003475',
        '1AT' => 'E02003475',
        '1AU' => 'E02003475',
        '1AW' => 'E02003475',
        '1AX' => 'E02003475',
        '1AY' => 'E02003475',
        '1AZ' => 'E02003475',
        '1BA' => 'E02003475',
        '1BB' => 'E02003475',
        '1BD' => 'E02003475',
        '1BE' => 'E02003475',
        '1BF' => 'E02003475',
        '1BG' => 'E02003475',
        '1BH' => 'E02003475',
        '1BJ' => 'E02003475',
        '1BL' => 'E02003475',
        '1BN' => 'E02003475',
        '1BP' => 'E02003475',
        '1BQ' => 'E02003475',
        '1BR' => 'E02003475',
        '1BS' => 'E02003475',
        '1BT' => 'E02003475',
        '1BU' => 'E02003475',
        '1BW' => 'E02003475',
        '1BX' => 'E02003475',
        '1BY' => 'E02003475',
        '1BZ' => 'E02003475',
        '1DA' => 'E02003475',
        '1DB' => 'E02003475',
        '1DD' => 'E02003475',
        '1DE' => 'E02003475',
        '1DF' => 'E02003475',
        '1DG' => 'E02003475',
        '1DH' => 'E02003475',
        '1DJ' => 'E02003475',
        '1DL' => 'E02003475',
        '1DN' => 'E02003475',
        '1DP' => 'E02003475',
        '1DQ' => 'E02003475',
        '1DR' => 'E02003475',
        '1DS' => 'E02003475',
        '1DT' => 'E02003475',
        '1DU' => 'E02003475',
        '1DW' => 'E02003475',
        '1DX' => 'E02003475',
        '1DY' => 'E02003475',
        '1DZ' => 'E02003475',
        '1EA' => 'E02003475',
        '1EB' => 'E02003475',
        '1ED' => 'E02003475',
        '1EE' => 'E02003475',
        '1EF' => 'E02003475',
        '1EG' => 'E02003475',
        '1EH' => 'E02003475',
        '1EJ' => 'E02003475',
        '1EL' => 'E02003475',
        '1EN' => 'E02003475',
        '1EP' => 'E02003475',
        '1EQ' => 'E02003475',
        '1ER' => 'E02003475',
        '1ES' => 'E02003475',
        '1ET' => 'E02003475',
        '1EU' => 'E02003475',
        '1EW' => 'E02003475',
        '1EX' => 'E02003475',
        '1EY' => 'E02003475',
        '1EZ' => 'E02003475',
        '1FA' => 'E02003475',
        '1FB' => 'E02003475',
        '1FD' => 'E02003475',
        '1FE' => 'E02003475',
        '1FF' => 'E02003475',
        '1FG' => 'E02003475',
        '1FH' => 'E02003475',
        '1FJ' => 'E02003475',
        '1FL' => 'E02003475',
        '1FN' => 'E02003475',
        '1FP' => 'E02003475',
        '1FQ' => 'E02003475',
        '1FR' => 'E02003475',
        '1FS' => 'E02003475',
        '1FT' => 'E02003475',
        '1FU' => 'E02003475',
        '1FW' => 'E02003475',
        '1FX' => 'E02003475',
        '1FY' => 'E02003475',
        '1FZ' => 'E02003475',
        '1GA' => 'E02003475',
        '1GB' => 'E02003475',
        '1GD' => 'E02003475',
        '1GE' => 'E02003475',
        '1GF' => 'E02003475',
        '1GG' => 'E02003475',
        '1GH' => 'E02003475',
        '1GJ' => 'E02003475',
        '1GL' => 'E02003475',
        '1GN' => 'E02003475',
        '1GP' => 'E02003475',
        '1GQ' => 'E02003475',
        '1GR' => 'E02003475',
        '1GS' => 'E02003475',
        '1GT' => 'E02003475',
        '1GU' => 'E02003475',
        '1GW' => 'E02003475',
        '1GX' => 'E02003475',
        '1GY' => 'E02003475',
        '1GZ' => 'E02003475',
        '1HA' => 'E02003475',
        '1HB' => 'E02003475',
        '1HD' => 'E02003475',
        '1HE' => 'E02003475',
        '1HF' => 'E02003475',
        '1HG' => 'E02003475',
        '1HH' => 'E02003475',
        '1HJ' => 'E02003475',
        '1HL' => 'E02003475',
        '1HN' => 'E02003475',
        '1HP' => 'E02003475',
        '1HQ' => 'E02003475',
        '1HR' => 'E02003475',
        '1HS' => 'E02003475',
        '1HT' => 'E02003475',
        '1HU' => 'E02003475',
        '1HW' => 'E02003475',
        '1HX' => 'E02003475',
        '1HY' => 'E02003475',
        '1HZ' => 'E02003475',
        '1JA' => 'E02003475',
        '1JB' => 'E02003475',
        '1JD' => 'E02003475',
        '1JE' => 'E02003475',
        '1JF' => 'E02003475',
        '1JG' => 'E02003475',
        '1JH' => 'E02003475',
        '1JJ' => 'E02003475',
        '1JL' => 'E02003475',
        '1JN' => 'E02003475',
        '1JP' => 'E02003475',
        '1JQ' => 'E02003475',
        '1JR' => 'E02003475',
        '1JS' => 'E02003475',
        '1JT' => 'E02003475',
        '1JU' => 'E02003475',
        '1JW' => 'E02003475',
        '1JX' => 'E02003475',
        '1JY' => 'E02003475',
        '1JZ' => 'E02003475',
        '1LA' => 'E02003475',
        '1LB' => 'E02003475',
        '1LD' => 'E02003475',
        '1LE' => 'E02003475',
        '1LF' => 'E02003475',
        '1LG' => 'E02003475',
        '1LH' => 'E02003475',
        '1LJ' => 'E02003475',
        '1LL' => 'E02003475',
        '1LN' => 'E02003475',
        '1LP' => 'E02003475',
        '1LQ' => 'E02003475',
        '1LR' => 'E02003475',
        '1LS' => 'E02003475',
        '1LT' => 'E02003475',
        '1LU' => 'E02003475',
        '1LW' => 'E02003475',
        '1LX' => 'E02003475',
        '1LY' => 'E02003475',
        '1LZ' => 'E02003475',
        '1NA' => 'E02003475',
        '1NB' => 'E02003475',
        '1ND' => 'E02003475',
        '1NE' => 'E02003475',
        '1NF' => 'E02003475',
        '1NG' => 'E02003475',
        '1NH' => 'E02003475',
        '1NJ' => 'E02003475',
        '1NL' => 'E02003475',
        '1NN' => 'E02003475',
        '1NP' => 'E02003475',
        '1NQ' => 'E02003475',
        '1NS' => 'E02003475',
        '1NT' => 'E02003475',
        '1NU' => 'E02003475',
        '1NW' => 'E02003475',
        '1NX' => 'E02003475',
        '1NY' => 'E02003475',
        '1NZ' => 'E02003475',
        '1PA' => 'E02003475',
        '1PB' => 'E02003475',
        '1PD' => 'E02003475',
        '1PE' => 'E02003475',
        '1PF' => 'E02003475',
        '1PG' => 'E02003475',
        '1PH' => 'E02003475',
        '1PJ' => 'E02003475',
        '1PL' => 'E02003475',
        '1PN' => 'E02003475',
        '1PP' => 'E02003475',
        '1PQ' => 'E02003475',
        '1PR' => 'E02003475',
        '1PS' => 'E02003475',
        '1PT' => 'E02003475',
        '1PU' => 'E02003475',
        '1PW' => 'E02003475',
        '1PX' => 'E02003475',
        '1PY' => 'E02003475',
        '1PZ' => 'E02003475',
        '1QA' => 'E02003475',
        '1QB' => 'E02003475',
        '1QD' => 'E02003475',
        '1QE' => 'E02003475',
        '1QF' => 'E02003475',
        '1QG' => 'E02003475',
        '1QH' => 'E02003475',
        '1QJ' => 'E02003475',
        '1QL' => 'E02003475',
        '1QN' => 'E02003475',
        '1QP' => 'E02003475',
        '1QQ' => 'E02003475',
        '1QR' => 'E02003475',
        '1QS' => 'E02003475',
        '1QT' => 'E02003475',
        '1QU' => 'E02003475',
        '1QW' => 'E02003475',
        '1QX' => 'E02003475',
        '1QY' => 'E02003475',
        '1QZ' => 'E02003475',
        '1RA' => 'E02003475',
        '1RB' => 'E02003475',
        '1RD' => 'E02003475',
        '1RE' => 'E02003475',
        '1RF' => 'E02003475',
        '1RG' => 'E02003475',
        '1RJ' => 'E02003475',
        '1RL' => 'E02003475',
        '1RN' => 'E02003475',
        '1RP' => 'E02003475',
        '1RQ' => 'E02003475',
        '1RR' => 'E02003475',
        '1RS' => 'E02003475',
        '1RT' => 'E02003475',
        '1RU' => 'E02003475',
        '1RW' => 'E02003475',
        '1RX' => 'E02003475',
        '1RY' => 'E02003475',
        '1RZ' => 'E02003475',
        '1SA' => 'E02003472',
        '1SB' => 'E02003472',
        '1SD' => 'E02003472',
        '1SE' => 'E02003472',
        '1SF' => 'E02003472',
        '1SG' => 'E02003472',
        '1SH' => 'E02003472',
        '1SJ' => 'E02003472',
        '1SL' => 'E02003472',
        '1SN' => 'E02003472',
        '1SP' => 'E02003472',
        '1SQ' => 'E02003472',
        '1SR' => 'E02003472',
        '1SS' => 'E02003472',
        '1ST' => 'E02003472',
        '1SU' => 'E02003472',
        '1SW' => 'E02003472',
        '1SX' => 'E02003472',
        '1SY' => 'E02003472',
        '1SZ' => 'E02003472',
        '1TA' => 'E02003472',
        '1TB' => 'E02003472',
        '1TD' => 'E02003472',
        '1TE' => 'E02003472',
        '1TF' => 'E02003472',
        '1TG' => 'E02003472',
        '1TH' => 'E02003475',
        '1TJ' => 'E02003475',
        '1TL' => 'E02003475',
        '1TN' => 'E02003475',
        '1TP' => 'E02003475',
        '1TQ' => 'E02003475',
        '1TR' => 'E02003475',
        '1TS' => 'E02003475',
        '1TT' => 'E02003475',
        '1TU' => 'E02003475',
        '1TW' => 'E02003475',
        '1TX' => 'E02003475',
        '1TY' => 'E02003475',
        '1TZ' => 'E02003475',
        '1UA' => 'E02003475',
        '1UB' => 'E02003475',
        '1UD' => 'E02003475',
        '1UE' => 'E02003475',
        '1UF' => 'E02003475',
        '1UG' => 'E02003475',
        '1UH' => 'E02003475',
        '1UJ' => 'E02003475',
        '1UL' => 'E02003475',
        '1UN' => 'E02003475',
        '1UP' => 'E02003475',
        '1UQ' => 'E02003475',
        '1UR' => 'E02003475',
        '1US' => 'E02003475',
        '1UT' => 'E02003475',
        '1UU' => 'E02003475',
        '1UW' => 'E02003475',
        '1UX' => 'E02003475',
        '1UY' => 'E02003475',
        '1UZ' => 'E02003475',
        '1WA' => 'E02003475',
        '1WB' => 'E02003475',
        '1WD' => 'E02003475',
        '1WE' => 'E02003475',
        '1WF' => 'E02003475',
        '1WG' => 'E02003475',
        '1WH' => 'E02003475',
        '1WJ' => 'E02003475',
        '1WL' => 'E02003475',
        '1WN' => 'E02003475',
        '1WP' => 'E02003475',
        '1WQ' => 'E02003475',
        '1WS' => 'E02003475',
        '1WT' => 'E02003475',
        '1WU' => 'E02003475',
        '1WW' => 'E02003475',
        '1WX' => 'E02003475',
        '1WY' => 'E02003475',
        '1WZ' => 'E02003475',
        '1XA' => 'E02003475',
        '1XB' => 'E02003475',
        '1XD' => 'E02003475',
        '1XE' => 'E02003475',
        '1XF' => 'E02003475',
        '1XG' => 'E02003475',
        '1XH' => 'E02003475',
        '1XJ' => 'E02003475',
        '1XL' => 'E02003475',
        '1XN' => 'E02003475',
        '1XP' => 'E02003475',
        '1XQ' => 'E02003475',
        '1XR' => 'E02003475',
        '1XS' => 'E02003475',
        '1XT' => 'E02003475',
        '1XU' => 'E02003475',
        '1XW' => 'E02003475',
        '1XX' => 'E02003475',
        '1XY' => 'E02003475',
        '1XZ' => 'E02003475',
        '1YA' => 'E02003475',
        '1YB' => 'E02003475',
        '1YD' => 'E02003475',
        '1YE' => 'E02003475',
        '1YF' => 'E02003475',
        '1YG' => 'E02003475',
        '1YH' => 'E02003475',
        '1YJ' => 'E02003475',
        '1YL' => 'E02003475',
        '1YN' => 'E02003475',
        '1YP' => 'E02003475',
        '1YQ' => 'E02003475',
        '1YR' => 'E02003475',
        '1YS' => 'E02003475',
        '1YT' => 'E02003475',
        '1YU' => 'E02003475',
        '1YW' => 'E02003475',
        '1YX' => 'E02003475',
        '1YZ' => 'E02003475',
        '1ZA' => 'E02003475',
        '1ZB' => 'E02003475',
        '1ZD' => 'E02003475',
        '1ZE' => 'E02003475',
        '1ZF' => 'E02003475',
        '1ZG' => 'E02003475',
        '1ZH' => 'E02003475',
        '1ZJ' => 'E02003475',
        '1ZL' => 'E02003475',
        '1ZN' => 'E02003475',
        '1ZP' => 'E02003475',
        '1ZQ' => 'E02003475',
        '1ZR' => 'E02003475',
        '1ZS' => 'E02003475',
        '1ZT' => 'E02003475',
        '1ZU' => 'E02003475',
        '1ZW' => 'E02003475',
        '1ZX' => 'E02003475',
        '1ZY' => 'E02003475',
        '1ZZ' => 'E02003475',
        '7AA' => 'E02003475',
        '7AB' => 'E02003475',
        '7AD' => 'E02003475',
        '7AE' => 'E02003475',
        '7AF' => 'E02003475',
        '7AG' => 'E02003475',
        '7AH' => 'E02003475',
        '7AJ' => 'E02003475',
        '7AL' => 'E02003475',
        '7AN' => 'E02003475',
        '7AP' => 'E02003475',
        '7AQ' => 'E02003475',
        '7AR' => 'E02003475',
        '7AS' => 'E02003475',
        '7AT' => 'E02003475',
        '7AU' => 'E02003475',
        '7AW' => 'E02003475',
        '7AX' => 'E02003475',
        '7AY' => 'E02003475',
        '7AZ' => 'E02003475',
        '7BA' => 'E02003475',
        '7BB' => 'E02003475',
        '7BD' => 'E02003475',
        '7BE' => 'E02003475',
        '7BF' => 'E02003475',
        '7BG' => 'E02003475',
        '7BH' => 'E02003475',
        '7BJ' => 'E02003475',
        '7BL' => 'E02003475',
        '7BN' => 'E02003475',
        '7BP' => 'E02003475',
        '7BQ' => 'E02003475',
        '7BR' => 'E02003475',
        '7BS' => 'E02003475',
        '7BT' => 'E02003475',
        '7BU' => 'E02003475',
        '7BW' => 'E02003475',
        '7BX' => 'E02003475',
        '7BY' => 'E02003475',
        '7BZ' => 'E02003475',
        '7DA' => 'E02003475',
        '7DB' => 'E02003475',
        '7DD' => 'E02003475',
        '7DE' => 'E02003475',
        '7DF' => 'E02003475',
        '7DG' => 'E02003475',
        '7DH' => 'E02003475',
        '7DJ' => 'E02003475',
        '7DL' => 'E02003475',
        '7DN' => 'E02003475',
        '7DP' => 'E02003475',
        '7DQ' => 'E02003475',
        '7DR' => 'E02003475',
        '7DS' => 'E02003475',
        '7DT' => 'E02003475',
        '7DU' => 'E02003475',
        '7DW' => 'E02003475',
        '7DX' => 'E02003475',
        '7DY' => 'E02003475',
        '7DZ' => 'E02003475',
        '7EA' => 'E02003475',
        '7EB' => 'E02003475',
        '7ED' => 'E02003475',
        '7EE' => 'E02003475',
        '7EF' => 'E02003475',
        '7EG' => 'E02003475',
        '7EH' => 'E02003475',
        '7EJ' => 'E02003475',
        '7EL' => 'E02003475',
        '7EN' => 'E02003475',
        '7EP' => 'E02003475',
        '7EQ' => 'E02003475',
        '7ER' => 'E02003475',
        '7ES' => 'E02003475',
        '7ET' => 'E02003475',
        '7EU' => 'E02003475',
        '7EW' => 'E02003475',
        '7EX' => 'E02003475',
        '7EY' => 'E02003475',
        '7EZ' => 'E02003475',
        '7FA' => 'E02003475',
        '7FB' => 'E02003475',
        '7FD' => 'E02003475',
        '7FE' => 'E02003475',
        '7FF' => 'E02003475',
        '7FG' => 'E02003475',
        '7FH' => 'E02003475',
        '7FJ' => 'E02003475',
        '7FL' => 'E02003475',
        '7FN' => 'E02003475',
        '7FP' => 'E02003475',
        '7FQ' => 'E02003475',
        '7FR' => 'E02003475',
        '7FS' => 'E02003475',
        '7FT' => 'E02003475',
        '7FU' => 'E02003475',
        '7FW' => 'E02003475',
        '7FX' => 'E02003475',
        '7FY' => 'E02003475',
        '7FZ' => 'E02003475',
        '7GA' => 'E02003475',
        '7GB' => 'E02003475',
        '7GD' => 'E02003475',
        '7GE' => 'E02003475',
        '7GF' => 'E02003475',
        '7GG' => 'E02003475',
        '7GH' => 'E02003475',
        '7GJ' => 'E02003475',
        '7GL' => 'E02003475',
        '7GN' => 'E02003475',
        '7GP' => 'E02003475',
        '7GQ' => 'E02003475',
        '7GR' => 'E02003475',
        '7GS' => 'E02003475',
        '7GT' => 'E02003475',
        '7GU' => 'E02003475',
        '7GW' => 'E02003475',
        '7GZ' => 'E02003475',
        '7HA' => 'E02003475',
        '7HB' => 'E02003475',
        '7HD' => 'E02003475',
        '7HE' => 'E02003475',
        '7HG' => 'E02003475',
        '7HH' => 'E02003475',
        '7HJ' => 'E02003475',
        '7HL' => 'E02003475',
        '7HN' => 'E02003475',
        '7HP' => 'E02003475',
        '7HQ' => 'E02003475',
        '7HR' => 'E02003475',
        '7HS' => 'E02003475',
        '7HT' => 'E02003475',
        '7HU' => 'E02003475',
        '7HW' => 'E02003475',
        '7HX' => 'E02003475',
        '7HZ' => 'E02003475',
        '7JA' => 'E02003475',
        '7JB' => 'E02003475',
        '7JD' => 'E02003475',
        '7JE' => 'E02003475',
        '7JF' => 'E02003475',
        '7JG' => 'E02003475',
        '7JH' => 'E02003475',
        '7JJ' => 'E02003475',
        '7JL' => 'E02003475',
        '7JN' => 'E02003475',
        '7JQ' => 'E02003475',
        '7JR' => 'E02003475',
        '7JS' => 'E02003482',
        '7JU' => 'E02003475',
        '7JW' => 'E02003475',
        '7JX' => 'E02003475',
        '7JY' => 'E02003475',
        '7JZ' => 'E02003475',
        '7LA' => 'E02003475',
        '7LB' => 'E02003475',
        '7LD' => 'E02003475',
        '7LE' => 'E02003475',
        '7LF' => 'E02003475',
        '7LG' => 'E02003475',
        '7LH' => 'E02003475',
        '7LJ' => 'E02003475',
        '7LL' => 'E02003482',
        '7LN' => 'E02003475',
        '7LQ' => 'E02003482',
        '7LT' => 'E02003482',
        '7LW' => 'E02003482',
        '7LY' => 'E02003482',
        '7NA' => 'E02003475',
        '7NB' => 'E02003475',
        '7ND' => 'E02003475',
        '7NE' => 'E02003475',
        '7NF' => 'E02003475',
        '7NG' => 'E02003475',
        '7NH' => 'E02003475',
        '7NJ' => 'E02003475',
        '7NL' => 'E02003475',
        '7NN' => 'E02003475',
        '7NP' => 'E02003475',
        '7PB' => 'E02003482',
        '7PG' => 'E02003475',
        '7RL' => 'E02003475',
        '9AA' => 'E02003475',
        '9AB' => 'E02003475',
        '9AD' => 'E02003475',
        '9AE' => 'E02003475',
        '9AF' => 'E02003475',
        '9AG' => 'E02003475',
        '9AH' => 'E02003475',
        '9AJ' => 'E02003475',
        '9AL' => 'E02003475',
        '9AN' => 'E02003475',
        '9AP' => 'E02003475',
        '9AQ' => 'E02003475',
        '9AR' => 'E02003475',
        '9AS' => 'E02003475',
        '9AT' => 'E02003475',
        '9AU' => 'E02003475',
        '9AW' => 'E02003475',
        '9AX' => 'E02003475',
        '9AY' => 'E02003475',
        '9AZ' => 'E02003475',
        '9BA' => 'E02003474',
        '9BB' => 'E02003475',
        '9BD' => 'E02003475',
        '9BE' => 'E02003475',
        '9BF' => 'E02003475',
        '9BG' => 'E02003475',
        '9BH' => 'E02003475',
        '9BJ' => 'E02003475',
        '9BL' => 'E02003475',
        '9BN' => 'E02003475',
        '9BP' => 'E02003475',
        '9BQ' => 'E02003475',
        '9BR' => 'E02003474',
        '9BS' => 'E02003475',
        '9BT' => 'E02003475',
        '9BU' => 'E02003474',
        '9BW' => 'E02003474',
        '9BX' => 'E02003474',
        '9BY' => 'E02003475',
        '9BZ' => 'E02003475',
        '9DA' => 'E02003475',
        '9DB' => 'E02003475',
        '9DD' => 'E02003475',
        '9DE' => 'E02003475',
        '9DF' => 'E02003475',
        '9DG' => 'E02003475',
        '9DH' => 'E02003475',
        '9DJ' => 'E02003475',
        '9DL' => 'E02003475',
        '9DN' => 'E02003475',
        '9DP' => 'E02003475',
        '9DQ' => 'E02003475',
        '9DR' => 'E02003474',
        '9DS' => 'E02003475',
        '9DT' => 'E02003475',
        '9DU' => 'E02003475',
        '9DW' => 'E02003474',
        '9DX' => 'E02003474',
        '9DY' => 'E02003475',
        '9DZ' => 'E02003474',
        '9EA' => 'E02003475',
        '9EB' => 'E02003475',
        '9ED' => 'E02003475',
        '9EE' => 'E02003475',
        '9EF' => 'E02003475',
        '9EG' => 'E02003475',
        '9EH' => 'E02003475',
        '9EJ' => 'E02003475',
        '9EL' => 'E02003475',
        '9EN' => 'E02003475',
        '9EP' => 'E02003475',
        '9EQ' => 'E02003475',
        '9ER' => 'E02003475',
        '9ES' => 'E02003475',
        '9ET' => 'E02003474',
        '9EU' => 'E02003474',
        '9EW' => 'E02003474',
        '9EX' => 'E02003474',
        '9EY' => 'E02003474',
        '9EZ' => 'E02003475',
        '9FA' => 'E02003475',
        '9FB' => 'E02003475',
        '9FD' => 'E02003474',
        '9FE' => 'E02003474',
        '9FF' => 'E02003474',
        '9FG' => 'E02003474',
        '9FH' => 'E02003474',
        '9FJ' => 'E02003474',
        '9FL' => 'E02003474',
        '9FN' => 'E02003474',
        '9FP' => 'E02003475',
        '9FQ' => 'E02003475',
        '9FR' => 'E02003475',
        '9FS' => 'E02003475',
        '9FT' => 'E02003475',
        '9FU' => 'E02003474',
        '9FW' => 'E02003474',
        '9FX' => 'E02003474',
        '9FY' => 'E02003474',
        '9FZ' => 'E02003474',
        '9GB' => 'E02003475',
        '9GD' => 'E02003475',
        '9GE' => 'E02003474',
        '9GF' => 'E02003475',
        '9GG' => 'E02003475',
        '9GH' => 'E02003474',
        '9GJ' => 'E02003475',
        '9GL' => 'E02003475',
        '9GN' => 'E02003474',
        '9GP' => 'E02003474',
        '9GQ' => 'E02003475',
        '9GR' => 'E02003474',
        '9GS' => 'E02003475',
        '9GT' => 'E02003474',
        '9GU' => 'E02003474',
        '9GW' => 'E02003475',
        '9GY' => 'E02003474',
        '9GZ' => 'E02003475',
        '9HA' => 'E02003475',
        '9HB' => 'E02003475',
        '9HD' => 'E02003475',
        '9HE' => 'E02003475',
        '9HG' => 'E02003474',
        '9HH' => 'E02003474',
        '9HJ' => 'E02003474',
        '9HL' => 'E02003475',
        '9HN' => 'E02003475',
        '9HP' => 'E02003475',
        '9HQ' => 'E02003474',
        '9HR' => 'E02003474',
        '9HS' => 'E02003474',
        '9HT' => 'E02003474',
        '9HU' => 'E02003474',
        '9HW' => 'E02003474',
        '9HX' => 'E02003474',
        '9HY' => 'E02003474',
        '9HZ' => 'E02003475',
        '9JA' => 'E02003475',
        '9JB' => 'E02003474',
        '9JD' => 'E02003474',
        '9JE' => 'E02003474',
        '9JG' => 'E02003475',
        '9JH' => 'E02003474',
        '9JJ' => 'E02003475',
        '9JL' => 'E02003475',
        '9JN' => 'E02003475',
        '9JP' => 'E02003475',
        '9JQ' => 'E02003475',
        '9JR' => 'E02003475',
        '9JS' => 'E02003475',
        '9JT' => 'E02003475',
        '9JU' => 'E02003475',
        '9JW' => 'E02003475',
        '9JX' => 'E02003475',
        '9JY' => 'E02003474',
        '9JZ' => 'E02003475',
        '9LA' => 'E02003475',
        '9LB' => 'E02003475',
        '9LD' => 'E02003475',
        '9LE' => 'E02003475',
        '9LF' => 'E02003475',
        '9LG' => 'E02003475',
        '9LH' => 'E02003475',
        '9LJ' => 'E02003475',
        '9LL' => 'E02003475',
        '9LN' => 'E02003475',
        '9LP' => 'E02003475',
        '9LQ' => 'E02003475',
        '9LR' => 'E02003475',
        '9LS' => 'E02003475',
        '9LT' => 'E02003475',
        '9LU' => 'E02003475',
        '9LW' => 'E02003475',
        '9LX' => 'E02003475',
        '9LY' => 'E02003475',
        '9LZ' => 'E02003475',
        '9NA' => 'E02003475',
        '9NB' => 'E02003475',
        '9ND' => 'E02003475',
        '9NE' => 'E02003475',
        '9NF' => 'E02003475',
        '9NG' => 'E02003475',
        '9NH' => 'E02003475',
        '9NJ' => 'E02003475',
        '9NL' => 'E02003475',
        '9NN' => 'E02003475',
        '9NP' => 'E02003475',
        '9NQ' => 'E02003475',
        '9NR' => 'E02003475',
        '9NS' => 'E02003475',
        '9NT' => 'E02003475',
        '9NU' => 'E02003475',
        '9NW' => 'E02003475',
        '9NX' => 'E02003475',
        '9NY' => 'E02003475',
        '9NZ' => 'E02003475',
        '9PA' => 'E02003474',
        '9PB' => 'E02003474',
        '9PD' => 'E02003474',
        '9PE' => 'E02003474',
        '9PF' => 'E02003474',
        '9PG' => 'E02003474',
        '9PH' => 'E02003474',
        '9PJ' => 'E02003474',
        '9PL' => 'E02003474',
        '9PN' => 'E02003474',
        '9PP' => 'E02003474',
        '9PQ' => 'E02003474',
        '9PS' => 'E02003474',
        '9PT' => 'E02003474',
        '9PU' => 'E02003474',
        '9PW' => 'E02003474',
        '9PX' => 'E02003474',
        '9PY' => 'E02003474',
        '9PZ' => 'E02003474',
        '9QA' => 'E02003474',
        '9QB' => 'E02003474',
        '9QD' => 'E02003474',
        '9QE' => 'E02003474',
        '9QF' => 'E02003474',
        '9QG' => 'E02003475',
        '9QH' => 'E02003475',
        '9QJ' => 'E02003475',
        '9QL' => 'E02003475',
        '9QN' => 'E02003475',
        '9QP' => 'E02003475',
        '9QQ' => 'E02003475',
        '9QR' => 'E02003475',
        '9QS' => 'E02003475',
        '9QT' => 'E02003475',
        '9QU' => 'E02003475',
        '9QW' => 'E02003475',
        '9QX' => 'E02003475',
        '9QY' => 'E02003475',
        '9QZ' => 'E02003475',
        '9RA' => 'E02003475',
        '9RB' => 'E02003475',
        '9RD' => 'E02003474',
        '9RE' => 'E02003474',
        '9RF' => 'E02003474',
        '9RG' => 'E02003475',
        '9RH' => 'E02003474',
        '9RJ' => 'E02003475',
        '9RN' => 'E02003475',
        '9RP' => 'E02003475',
        '9RQ' => 'E02003475',
        '9RR' => 'E02003475',
        '9RS' => 'E02003475',
        '9RT' => 'E02003475',
        '9RU' => 'E02003475',
        '9RW' => 'E02003475',
        '9RX' => 'E02003475',
        '9RY' => 'E02003475',
        '9RZ' => 'E02003475',
        '9SA' => 'E02003475',
        '9SF' => 'E02003475',
        '9SG' => 'E02003475',
        '9SH' => 'E02003474',
        '9SJ' => 'E02003475',
        '9SL' => 'E02003475',
        '9SN' => 'E02003475',
        '9SP' => 'E02003475',
        '9SQ' => 'E02003475',
        '9SR' => 'E02003475',
        '9SS' => 'E02003475',
        '9ST' => 'E02003475',
        '9SU' => 'E02003475',
        '9SW' => 'E02003475',
        '9SX' => 'E02003475',
        '9SY' => 'E02003475',
        '9SZ' => 'E02003475',
        '9TA' => 'E02003475',
        '9TB' => 'E02003475',
        '9TD' => 'E02003475',
        '9TE' => 'E02003475',
        '9TF' => 'E02003475',
        '9TG' => 'E02003475',
        '9TH' => 'E02003475',
        '9TJ' => 'E02003475',
        '9TL' => 'E02003475',
        '9TN' => 'E02003475',
        '9TP' => 'E02003475',
        '9TQ' => 'E02003475',
        '9TR' => 'E02003475',
        '9TS' => 'E02003475',
        '9TT' => 'E02003475',
        '9TU' => 'E02003475',
        '9TW' => 'E02003475',
        '9TX' => 'E02003475',
        '9TY' => 'E02003475',
        '9TZ' => 'E02003475',
        '9UA' => 'E02003475',
        '9UB' => 'E02003475',
        '9UD' => 'E02003475',
        '9UE' => 'E02003475',
        '9UF' => 'E02003475',
        '9UG' => 'E02003475',
        '9UH' => 'E02003475',
        '9UJ' => 'E02003475',
        '9UL' => 'E02003475',
        '9UN' => 'E02003475',
        '9UP' => 'E02003475',
        '9UQ' => 'E02003474',
        '9UR' => 'E02003474',
        '9US' => 'E02003475',
        '9UT' => 'E02003475',
        '9UW' => 'E02003475',
        '9UX' => 'E02003475',
        '9UY' => 'E02003475',
        '9WA' => 'E02003474',
        '9WB' => 'E02003474',
        '9WD' => 'E02003474',
        '9WE' => 'E02003474',
        '9WF' => 'E02003474',
        '9WG' => 'E02003475',
        '9WH' => 'E02003475',
        '9WJ' => 'E02003475',
        '9WN' => 'E02003475',
        '9WQ' => 'E02003475',
        '9WR' => 'E02003475',
        '9WS' => 'E02003475',
        '9WT' => 'E02003475',
        '9WU' => 'E02003475',
        '9WW' => 'E02003475',
        '9WX' => 'E02003475',
        '9WY' => 'E02003475',
        '9WZ' => 'E02003475',
        '9XD' => 'E02003475',
        '9XJ' => 'E02003475',
        '9XL' => 'E02003474',
        '9XN' => 'E02003475',
        '9XP' => 'E02003475',
        '9XQ' => 'E02003475',
        '9XR' => 'E02003475',
        '9XY' => 'E02003475',
        '9XZ' => 'E02003475',
        '9YQ' => 'E02003475',
        '9YX' => 'E02003475',
        '9ZE' => 'E02003475',
        '9ZG' => 'E02003475',
        '9ZH' => 'E02003475',
        '9ZJ' => 'E02003475',
        '9ZL' => 'E02003475',
        '9ZN' => 'E02003475',
        '9ZP' => 'E02003475',
        '9ZQ' => 'E02003475',
        '9ZR' => 'E02003475',
        '9ZS' => 'E02003475',
        '9ZT' => 'E02003475',
        '9ZW' => 'E02003475',
        '9ZX' => 'E02003475',
        '9ZY' => 'E02003475',
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
