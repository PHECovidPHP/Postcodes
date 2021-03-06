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
final class SO45
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004792',
        '1AB' => 'E02004792',
        '1AD' => 'E02004795',
        '1AE' => 'E02004795',
        '1AF' => 'E02004795',
        '1AG' => 'E02004795',
        '1AH' => 'E02004795',
        '1AJ' => 'E02004795',
        '1AL' => 'E02004795',
        '1AN' => 'E02004795',
        '1AP' => 'E02004792',
        '1AQ' => 'E02004792',
        '1AR' => 'E02004795',
        '1AZ' => 'E02004795',
        '1BB' => 'E02004792',
        '1BD' => 'E02004792',
        '1BE' => 'E02004792',
        '1BG' => 'E02004792',
        '1BH' => 'E02004792',
        '1BJ' => 'E02004792',
        '1BL' => 'E02004792',
        '1BN' => 'E02004792',
        '1BP' => 'E02004792',
        '1BR' => 'E02004792',
        '1BS' => 'E02004792',
        '1BT' => 'E02004792',
        '1BU' => 'E02004792',
        '1BW' => 'E02004792',
        '1BX' => 'E02004792',
        '1BY' => 'E02004792',
        '1BZ' => 'E02004792',
        '1DA' => 'E02004792',
        '1DB' => 'E02004792',
        '1DD' => 'E02004792',
        '1DE' => 'E02004792',
        '1DF' => 'E02004792',
        '1DG' => 'E02004792',
        '1DH' => 'E02004792',
        '1DJ' => 'E02004792',
        '1DL' => 'E02004792',
        '1DP' => 'E02004792',
        '1DQ' => 'E02004791',
        '1DR' => 'E02004792',
        '1DS' => 'E02004792',
        '1DT' => 'E02004792',
        '1DU' => 'E02004792',
        '1DW' => 'E02004792',
        '1DX' => 'E02004792',
        '1DY' => 'E02004792',
        '1DZ' => 'E02004791',
        '1EA' => 'E02004792',
        '1EB' => 'E02004792',
        '1ED' => 'E02004792',
        '1EE' => 'E02004792',
        '1EF' => 'E02004792',
        '1EG' => 'E02004792',
        '1EH' => 'E02004791',
        '1EJ' => 'E02004791',
        '1EL' => 'E02004791',
        '1EN' => 'E02004791',
        '1EP' => 'E02004791',
        '1EQ' => 'E02004791',
        '1ER' => 'E02004791',
        '1ET' => 'E02004792',
        '1EU' => 'E02004791',
        '1EW' => 'E02004791',
        '1EX' => 'E02004791',
        '1EY' => 'E02004792',
        '1EZ' => 'E02004792',
        '1FA' => 'E02004792',
        '1FB' => 'E02004792',
        '1FD' => 'E02004792',
        '1FE' => 'E02004792',
        '1FG' => 'E02004792',
        '1FH' => 'E02004792',
        '1FJ' => 'E02004792',
        '1FL' => 'E02004792',
        '1FN' => 'E02004792',
        '1FP' => 'E02004792',
        '1FQ' => 'E02004792',
        '1FR' => 'E02004792',
        '1FT' => 'E02004792',
        '1FW' => 'E02004792',
        '1FX' => 'E02004792',
        '1FY' => 'E02004792',
        '1FZ' => 'E02004792',
        '1GA' => 'E02004791',
        '1GD' => 'E02004792',
        '1GW' => 'E02004792',
        '1HA' => 'E02004792',
        '1HB' => 'E02004792',
        '1QP' => 'E02004791',
        '1QQ' => 'E02004791',
        '1RB' => 'E02004791',
        '1RD' => 'E02004791',
        '1RE' => 'E02004791',
        '1RF' => 'E02004791',
        '1RG' => 'E02004791',
        '1RH' => 'E02004791',
        '1RJ' => 'E02004791',
        '1RL' => 'E02004791',
        '1RN' => 'E02004791',
        '1RP' => 'E02004791',
        '1RQ' => 'E02004787',
        '1RS' => 'E02004792',
        '1RT' => 'E02004787',
        '1RU' => 'E02004787',
        '1RW' => 'E02004787',
        '1RX' => 'E02004787',
        '1RY' => 'E02004792',
        '1RZ' => 'E02004787',
        '1SA' => 'E02004792',
        '1SB' => 'E02004792',
        '1SD' => 'E02004792',
        '1SE' => 'E02004792',
        '1SF' => 'E02004791',
        '1SG' => 'E02004791',
        '1SH' => 'E02004791',
        '1SJ' => 'E02004791',
        '1SL' => 'E02004791',
        '1SN' => 'E02004792',
        '1SP' => 'E02004792',
        '1SQ' => 'E02004792',
        '1SR' => 'E02004792',
        '1SS' => 'E02004792',
        '1ST' => 'E02004787',
        '1SU' => 'E02004787',
        '1SX' => 'E02004787',
        '1SY' => 'E02004792',
        '1SZ' => 'E02004787',
        '1TA' => 'E02004792',
        '1TB' => 'E02004792',
        '1TD' => 'E02004787',
        '1TE' => 'E02004792',
        '1TF' => 'E02004787',
        '1TG' => 'E02004792',
        '1TH' => 'E02004795',
        '1TJ' => 'E02004792',
        '1TL' => 'E02004795',
        '1TN' => 'E02004792',
        '1TP' => 'E02004787',
        '1TQ' => 'E02004787',
        '1TR' => 'E02004792',
        '1TS' => 'E02004792',
        '1TT' => 'E02004787',
        '1TU' => 'E02004792',
        '1TW' => 'E02004792',
        '1TX' => 'E02004792',
        '1TY' => 'E02004792',
        '1TZ' => 'E02004787',
        '1UA' => 'E02004792',
        '1UB' => 'E02004792',
        '1UD' => 'E02004787',
        '1UE' => 'E02004792',
        '1UF' => 'E02004792',
        '1UG' => 'E02004787',
        '1UH' => 'E02004787',
        '1UJ' => 'E02004792',
        '1UL' => 'E02004787',
        '1UN' => 'E02004787',
        '1UP' => 'E02004787',
        '1UQ' => 'E02004792',
        '1UR' => 'E02004787',
        '1US' => 'E02004792',
        '1UT' => 'E02004787',
        '1UU' => 'E02004787',
        '1UW' => 'E02004787',
        '1UX' => 'E02004787',
        '1UY' => 'E02004787',
        '1UZ' => 'E02004792',
        '1WA' => 'E02004792',
        '1WB' => 'E02004792',
        '1WD' => 'E02004792',
        '1WE' => 'E02004792',
        '1WF' => 'E02004792',
        '1WG' => 'E02004792',
        '1WH' => 'E02004792',
        '1WJ' => 'E02004792',
        '1WL' => 'E02004792',
        '1WN' => 'E02004792',
        '1WP' => 'E02004792',
        '1WQ' => 'E02004792',
        '1WR' => 'E02004792',
        '1WS' => 'E02004792',
        '1WT' => 'E02004792',
        '1WU' => 'E02004791',
        '1WW' => 'E02004792',
        '1WX' => 'E02004792',
        '1WY' => 'E02004792',
        '1WZ' => 'E02004792',
        '1XA' => 'E02004792',
        '1XB' => 'E02004792',
        '1XD' => 'E02004792',
        '1XE' => 'E02004792',
        '1XF' => 'E02004792',
        '1XG' => 'E02004795',
        '1XH' => 'E02004795',
        '1XJ' => 'E02004792',
        '1XL' => 'E02004792',
        '1XN' => 'E02004792',
        '1XP' => 'E02004792',
        '1XQ' => 'E02004792',
        '1XR' => 'E02004792',
        '1XS' => 'E02004792',
        '1XT' => 'E02004792',
        '1XU' => 'E02004792',
        '1XW' => 'E02004791',
        '1XX' => 'E02004792',
        '1XY' => 'E02004792',
        '1XZ' => 'E02004792',
        '1YA' => 'E02004792',
        '1YB' => 'E02004792',
        '1YD' => 'E02004792',
        '1YE' => 'E02004792',
        '1YF' => 'E02004792',
        '1YG' => 'E02004792',
        '1YH' => 'E02004792',
        '1YJ' => 'E02004792',
        '1YL' => 'E02004792',
        '1YN' => 'E02004792',
        '1YP' => 'E02004792',
        '1YQ' => 'E02004792',
        '1YR' => 'E02004792',
        '1YS' => 'E02004792',
        '1YT' => 'E02004792',
        '1YU' => 'E02004792',
        '1YW' => 'E02004792',
        '1YX' => 'E02004792',
        '1YY' => 'E02004792',
        '1YZ' => 'E02004792',
        '1ZA' => 'E02004792',
        '1ZB' => 'E02004787',
        '1ZD' => 'E02004787',
        '1ZE' => 'E02004787',
        '1ZF' => 'E02004787',
        '1ZG' => 'E02004787',
        '1ZH' => 'E02004792',
        '1ZJ' => 'E02004787',
        '1ZL' => 'E02004792',
        '1ZN' => 'E02004792',
        '1ZP' => 'E02004792',
        '1ZQ' => 'E02004792',
        '1ZR' => 'E02004792',
        '1ZS' => 'E02004792',
        '1ZT' => 'E02004792',
        '1ZU' => 'E02004792',
        '1ZW' => 'E02004792',
        '1ZX' => 'E02004792',
        '1ZY' => 'E02004792',
        '1ZZ' => 'E02004792',
        '2AN' => 'E02004792',
        '2AP' => 'E02004791',
        '2AQ' => 'E02004792',
        '2AR' => 'E02004792',
        '2EY' => 'E02004792',
        '2EZ' => 'E02004792',
        '2FB' => 'E02004791',
        '2FD' => 'E02004791',
        '2FE' => 'E02004791',
        '2FF' => 'E02004791',
        '2FG' => 'E02004791',
        '2FH' => 'E02004791',
        '2FJ' => 'E02004791',
        '2FS' => 'E02004791',
        '2FT' => 'E02004791',
        '2GA' => 'E02004792',
        '2GB' => 'E02004791',
        '2GD' => 'E02004792',
        '2GE' => 'E02004791',
        '2GF' => 'E02004791',
        '2GG' => 'E02004791',
        '2GH' => 'E02004791',
        '2GJ' => 'E02004791',
        '2GL' => 'E02004791',
        '2GN' => 'E02004791',
        '2GP' => 'E02004791',
        '2GQ' => 'E02004791',
        '2GR' => 'E02004791',
        '2GS' => 'E02004791',
        '2GT' => 'E02004791',
        '2GU' => 'E02004792',
        '2GX' => 'E02004791',
        '2GY' => 'E02004791',
        '2GZ' => 'E02004791',
        '2HA' => 'E02004791',
        '2HB' => 'E02004792',
        '2HD' => 'E02004791',
        '2HE' => 'E02004792',
        '2HF' => 'E02004792',
        '2HH' => 'E02004792',
        '2HJ' => 'E02004792',
        '2HL' => 'E02004791',
        '2HN' => 'E02004791',
        '2HP' => 'E02004791',
        '2HQ' => 'E02004791',
        '2HR' => 'E02004791',
        '2HS' => 'E02004791',
        '2HT' => 'E02004791',
        '2HU' => 'E02004791',
        '2HW' => 'E02004791',
        '2HX' => 'E02004791',
        '2HY' => 'E02004792',
        '2HZ' => 'E02004791',
        '2JA' => 'E02004791',
        '2JB' => 'E02004791',
        '2JD' => 'E02004791',
        '2JE' => 'E02004791',
        '2JF' => 'E02004791',
        '2JG' => 'E02004792',
        '2JH' => 'E02004791',
        '2JJ' => 'E02004791',
        '2JL' => 'E02004791',
        '2JN' => 'E02004791',
        '2JP' => 'E02004791',
        '2JQ' => 'E02004791',
        '2JR' => 'E02004792',
        '2JS' => 'E02004792',
        '2JT' => 'E02004791',
        '2JU' => 'E02004791',
        '2JW' => 'E02004792',
        '2JX' => 'E02004792',
        '2JY' => 'E02004792',
        '2JZ' => 'E02004792',
        '2LA' => 'E02004791',
        '2LB' => 'E02004791',
        '2LD' => 'E02004791',
        '2LE' => 'E02004791',
        '2LF' => 'E02004791',
        '2LG' => 'E02004792',
        '2LH' => 'E02004791',
        '2LJ' => 'E02004791',
        '2LL' => 'E02004791',
        '2LN' => 'E02004791',
        '2LP' => 'E02004791',
        '2LQ' => 'E02004791',
        '2LR' => 'E02004791',
        '2LS' => 'E02004792',
        '2LT' => 'E02004791',
        '2LU' => 'E02004792',
        '2LW' => 'E02004791',
        '2LX' => 'E02004792',
        '2LY' => 'E02004792',
        '2LZ' => 'E02004792',
        '2NA' => 'E02004791',
        '2NB' => 'E02004792',
        '2ND' => 'E02004792',
        '2NE' => 'E02004792',
        '2NF' => 'E02004792',
        '2NG' => 'E02004791',
        '2NH' => 'E02004792',
        '2NJ' => 'E02004792',
        '2NL' => 'E02004792',
        '2NN' => 'E02004792',
        '2NP' => 'E02004792',
        '2NQ' => 'E02004792',
        '2NR' => 'E02004791',
        '2NS' => 'E02004792',
        '2NT' => 'E02004792',
        '2NU' => 'E02004792',
        '2NW' => 'E02004792',
        '2NX' => 'E02004792',
        '2NY' => 'E02004792',
        '2NZ' => 'E02004792',
        '2PA' => 'E02004792',
        '2PB' => 'E02004792',
        '2PD' => 'E02004792',
        '2PE' => 'E02004792',
        '2PF' => 'E02004792',
        '2PG' => 'E02004791',
        '2PH' => 'E02004791',
        '2PJ' => 'E02004791',
        '2PL' => 'E02004791',
        '2PN' => 'E02004791',
        '2PP' => 'E02004791',
        '2PQ' => 'E02004791',
        '2PR' => 'E02004791',
        '2PS' => 'E02004791',
        '2PT' => 'E02004791',
        '2PU' => 'E02004791',
        '2PW' => 'E02004791',
        '2PX' => 'E02004791',
        '2PY' => 'E02004792',
        '2PZ' => 'E02004792',
        '2QA' => 'E02004792',
        '2QB' => 'E02004792',
        '2QD' => 'E02004792',
        '2QE' => 'E02004791',
        '2QF' => 'E02004792',
        '2QG' => 'E02004792',
        '2QH' => 'E02004792',
        '2QJ' => 'E02004791',
        '2QL' => 'E02004792',
        '2QN' => 'E02004792',
        '2QP' => 'E02004792',
        '2QZ' => 'E02004792',
        '2RB' => 'E02004792',
        '2UW' => 'E02004791',
        '2UZ' => 'E02004791',
        '2WA' => 'E02004792',
        '2WB' => 'E02004787',
        '2WD' => 'E02004792',
        '2WE' => 'E02004787',
        '2WF' => 'E02004787',
        '2WG' => 'E02004791',
        '2WH' => 'E02004787',
        '2WJ' => 'E02004792',
        '2WL' => 'E02004787',
        '2WN' => 'E02004787',
        '2WP' => 'E02004791',
        '2WQ' => 'E02004787',
        '2WR' => 'E02004792',
        '2WS' => 'E02004791',
        '2WT' => 'E02004787',
        '2WU' => 'E02004787',
        '2WW' => 'E02004791',
        '2WX' => 'E02004787',
        '2WY' => 'E02004787',
        '2WZ' => 'E02004787',
        '2XJ' => 'E02004787',
        '2XN' => 'E02004792',
        '2XS' => 'E02004787',
        '2XT' => 'E02004792',
        '2XW' => 'E02004787',
        '2XY' => 'E02004787',
        '2XZ' => 'E02004787',
        '2YA' => 'E02004787',
        '2YZ' => 'E02004787',
        '2ZA' => 'E02004792',
        '2ZB' => 'E02004792',
        '2ZD' => 'E02004791',
        '2ZE' => 'E02004787',
        '2ZF' => 'E02004791',
        '2ZG' => 'E02004791',
        '2ZH' => 'E02004791',
        '2ZJ' => 'E02004787',
        '2ZL' => 'E02004787',
        '2ZN' => 'E02004791',
        '2ZP' => 'E02004787',
        '2ZQ' => 'E02004787',
        '2ZR' => 'E02004787',
        '2ZS' => 'E02004791',
        '2ZT' => 'E02004791',
        '2ZU' => 'E02004787',
        '2ZX' => 'E02004787',
        '3AB' => 'E02004789',
        '3AE' => 'E02004792',
        '3BA' => 'E02004787',
        '3BB' => 'E02004787',
        '3BL' => 'E02004789',
        '3BP' => 'E02004792',
        '3BU' => 'E02004787',
        '3BW' => 'E02004789',
        '3BX' => 'E02004789',
        '3DA' => 'E02004789',
        '3DJ' => 'E02004789',
        '3FH' => 'E02004792',
        '3FX' => 'E02004789',
        '3FY' => 'E02004789',
        '3FZ' => 'E02004789',
        '3GA' => 'E02004789',
        '3GB' => 'E02004789',
        '3GD' => 'E02004789',
        '3GE' => 'E02004789',
        '3GF' => 'E02004789',
        '3GG' => 'E02004789',
        '3GH' => 'E02004789',
        '3GJ' => 'E02004789',
        '3GL' => 'E02004789',
        '3GP' => 'E02004789',
        '3GQ' => 'E02004789',
        '3GR' => 'E02004789',
        '3GS' => 'E02004789',
        '3GT' => 'E02004789',
        '3GU' => 'E02004789',
        '3GW' => 'E02004789',
        '3GX' => 'E02004789',
        '3GY' => 'E02004789',
        '3GZ' => 'E02004789',
        '3HA' => 'E02004789',
        '3HB' => 'E02004789',
        '3HD' => 'E02004789',
        '3HE' => 'E02004789',
        '3HF' => 'E02004789',
        '3HG' => 'E02004789',
        '3HH' => 'E02004789',
        '3HJ' => 'E02004789',
        '3HL' => 'E02004789',
        '3HN' => 'E02004789',
        '3HP' => 'E02004789',
        '3HQ' => 'E02004789',
        '3HR' => 'E02004789',
        '3HS' => 'E02004789',
        '3HT' => 'E02004789',
        '3HU' => 'E02004789',
        '3HW' => 'E02004789',
        '3HX' => 'E02004789',
        '3HY' => 'E02004789',
        '3HZ' => 'E02004789',
        '3JA' => 'E02004789',
        '3JB' => 'E02004789',
        '3JD' => 'E02004789',
        '3JR' => 'E02004789',
        '3JS' => 'E02004789',
        '3JT' => 'E02004789',
        '3JU' => 'E02004789',
        '3JW' => 'E02004789',
        '3JX' => 'E02004789',
        '3JY' => 'E02004789',
        '3LA' => 'E02004789',
        '3LB' => 'E02004789',
        '3LD' => 'E02004789',
        '3LE' => 'E02004789',
        '3LF' => 'E02004789',
        '3LG' => 'E02004789',
        '3LH' => 'E02004789',
        '3LJ' => 'E02004789',
        '3LL' => 'E02004789',
        '3LN' => 'E02004789',
        '3LP' => 'E02004789',
        '3LQ' => 'E02004789',
        '3LS' => 'E02004789',
        '3NA' => 'E02004792',
        '3NB' => 'E02004789',
        '3ND' => 'E02004789',
        '3NE' => 'E02004789',
        '3NF' => 'E02004789',
        '3NG' => 'E02004789',
        '3NH' => 'E02004789',
        '3NJ' => 'E02004789',
        '3NL' => 'E02004792',
        '3NN' => 'E02004792',
        '3NP' => 'E02004792',
        '3NQ' => 'E02004792',
        '3NR' => 'E02004792',
        '3NS' => 'E02004789',
        '3NT' => 'E02004789',
        '3NU' => 'E02004792',
        '3NW' => 'E02004792',
        '3NX' => 'E02004792',
        '3NY' => 'E02004792',
        '3NZ' => 'E02004792',
        '3PA' => 'E02004789',
        '3PB' => 'E02004789',
        '3PD' => 'E02004789',
        '3PE' => 'E02004789',
        '3PF' => 'E02004789',
        '3PG' => 'E02004789',
        '3PH' => 'E02004789',
        '3PJ' => 'E02004789',
        '3PL' => 'E02004789',
        '3PN' => 'E02004789',
        '3PP' => 'E02004789',
        '3PQ' => 'E02004789',
        '3PR' => 'E02004789',
        '3PS' => 'E02004789',
        '3PT' => 'E02004789',
        '3PU' => 'E02004789',
        '3PW' => 'E02004789',
        '3PX' => 'E02004789',
        '3PY' => 'E02004789',
        '3PZ' => 'E02004789',
        '3QA' => 'E02004789',
        '3QB' => 'E02004789',
        '3QD' => 'E02004789',
        '3QE' => 'E02004789',
        '3QF' => 'E02004789',
        '3QG' => 'E02004789',
        '3QH' => 'E02004789',
        '3QJ' => 'E02004789',
        '3QL' => 'E02004789',
        '3QN' => 'E02004789',
        '3QP' => 'E02004789',
        '3QQ' => 'E02004789',
        '3QR' => 'E02004789',
        '3QS' => 'E02004789',
        '3QT' => 'E02004789',
        '3QU' => 'E02004789',
        '3QW' => 'E02004789',
        '3QX' => 'E02004789',
        '3QY' => 'E02004789',
        '3QZ' => 'E02004789',
        '3RA' => 'E02004789',
        '3RB' => 'E02004789',
        '3RD' => 'E02004789',
        '3RE' => 'E02004789',
        '3RF' => 'E02004789',
        '3RG' => 'E02004789',
        '3RH' => 'E02004789',
        '3RJ' => 'E02004789',
        '3RL' => 'E02004789',
        '3RN' => 'E02004789',
        '3RP' => 'E02004789',
        '3RQ' => 'E02004789',
        '3RR' => 'E02004789',
        '3RS' => 'E02004789',
        '3RT' => 'E02004789',
        '3SA' => 'E02004789',
        '3SB' => 'E02004789',
        '3TY' => 'E02004792',
        '3WA' => 'E02004787',
        '3WB' => 'E02004787',
        '3WD' => 'E02004787',
        '3WG' => 'E02004787',
        '3WH' => 'E02004789',
        '3WJ' => 'E02004787',
        '3WL' => 'E02004789',
        '3WN' => 'E02004789',
        '3WP' => 'E02004787',
        '3WQ' => 'E02004787',
        '3WR' => 'E02004789',
        '3WS' => 'E02004789',
        '3WT' => 'E02004789',
        '3WU' => 'E02004787',
        '3WW' => 'E02004787',
        '3WX' => 'E02004787',
        '3WY' => 'E02004787',
        '3WZ' => 'E02004787',
        '3XN' => 'E02004787',
        '3XW' => 'E02004792',
        '3XZ' => 'E02004787',
        '3YH' => 'E02004792',
        '3YL' => 'E02004787',
        '3YN' => 'E02004792',
        '3YQ' => 'E02004792',
        '3YR' => 'E02004792',
        '3YY' => 'E02004792',
        '3ZA' => 'E02004792',
        '3ZB' => 'E02004787',
        '3ZD' => 'E02004789',
        '3ZE' => 'E02004789',
        '3ZF' => 'E02004792',
        '3ZG' => 'E02004792',
        '3ZH' => 'E02004792',
        '3ZJ' => 'E02004792',
        '3ZN' => 'E02004792',
        '3ZT' => 'E02004787',
        '3ZW' => 'E02004792',
        '3ZX' => 'E02004792',
        '3ZY' => 'E02004792',
        '4AB' => 'E02004789',
        '4AH' => 'E02004787',
        '4AJ' => 'E02004787',
        '4AL' => 'E02004787',
        '4AN' => 'E02004787',
        '4AP' => 'E02004787',
        '4AS' => 'E02004787',
        '4AT' => 'E02004787',
        '4AX' => 'E02004789',
        '4AY' => 'E02004789',
        '4AZ' => 'E02004789',
        '4BA' => 'E02004789',
        '4BB' => 'E02004789',
        '4BU' => 'E02004787',
        '4BW' => 'E02004789',
        '4BX' => 'E02004787',
        '4BY' => 'E02004787',
        '4BZ' => 'E02004789',
        '4DR' => 'E02004789',
        '4EY' => 'E02004787',
        '4GZ' => 'E02004789',
        '4HA' => 'E02004789',
        '4HB' => 'E02004789',
        '4HD' => 'E02004789',
        '4HE' => 'E02004789',
        '4HF' => 'E02004789',
        '4HG' => 'E02004789',
        '4HH' => 'E02004789',
        '4HJ' => 'E02004789',
        '4HN' => 'E02004789',
        '4HP' => 'E02004789',
        '4HQ' => 'E02004789',
        '4HR' => 'E02004789',
        '4HS' => 'E02004789',
        '4HU' => 'E02004787',
        '4HW' => 'E02004789',
        '4HX' => 'E02004787',
        '4HY' => 'E02004787',
        '4HZ' => 'E02004787',
        '4JA' => 'E02004789',
        '4JB' => 'E02004789',
        '4JD' => 'E02004789',
        '4JE' => 'E02004789',
        '4JF' => 'E02004789',
        '4JG' => 'E02004789',
        '4JH' => 'E02004789',
        '4JJ' => 'E02004789',
        '4JL' => 'E02004789',
        '4JN' => 'E02004789',
        '4JP' => 'E02004789',
        '4JQ' => 'E02004789',
        '4JR' => 'E02004789',
        '4JS' => 'E02004789',
        '4JT' => 'E02004789',
        '4JU' => 'E02004789',
        '4JW' => 'E02004789',
        '4JX' => 'E02004789',
        '4JY' => 'E02004789',
        '4JZ' => 'E02004789',
        '4LA' => 'E02004789',
        '4LB' => 'E02004789',
        '4LD' => 'E02004789',
        '4LE' => 'E02004789',
        '4LF' => 'E02004789',
        '4LG' => 'E02004789',
        '4LH' => 'E02004789',
        '4LJ' => 'E02004789',
        '4LL' => 'E02004789',
        '4LN' => 'E02004789',
        '4LP' => 'E02004789',
        '4LQ' => 'E02004789',
        '4LR' => 'E02004789',
        '4LS' => 'E02004789',
        '4LT' => 'E02004789',
        '4LU' => 'E02004789',
        '4LX' => 'E02004789',
        '4LY' => 'E02004789',
        '4LZ' => 'E02004789',
        '4NA' => 'E02004787',
        '4NB' => 'E02004789',
        '4ND' => 'E02004789',
        '4NE' => 'E02004789',
        '4NF' => 'E02004789',
        '4NG' => 'E02004787',
        '4NH' => 'E02004789',
        '4NJ' => 'E02004789',
        '4NL' => 'E02004787',
        '4NN' => 'E02004789',
        '4NP' => 'E02004787',
        '4NR' => 'E02004787',
        '4NS' => 'E02004787',
        '4NT' => 'E02004787',
        '4NU' => 'E02004789',
        '4NW' => 'E02004789',
        '4NX' => 'E02004789',
        '4NY' => 'E02004789',
        '4NZ' => 'E02004789',
        '4PA' => 'E02004787',
        '4PB' => 'E02004789',
        '4PD' => 'E02004789',
        '4PE' => 'E02004789',
        '4PF' => 'E02004789',
        '4PG' => 'E02004789',
        '4PH' => 'E02004789',
        '4PJ' => 'E02004789',
        '4PL' => 'E02004789',
        '4PN' => 'E02004789',
        '4PP' => 'E02004789',
        '4PQ' => 'E02004789',
        '4PR' => 'E02004789',
        '4PS' => 'E02004789',
        '4PT' => 'E02004789',
        '4PU' => 'E02004789',
        '4PW' => 'E02004789',
        '4PX' => 'E02004789',
        '4PY' => 'E02004789',
        '4PZ' => 'E02004789',
        '4QA' => 'E02004789',
        '4QB' => 'E02004789',
        '4QD' => 'E02004789',
        '4QF' => 'E02004789',
        '4QG' => 'E02004789',
        '4QH' => 'E02004789',
        '4QJ' => 'E02004789',
        '4QL' => 'E02004789',
        '4QN' => 'E02004789',
        '4QP' => 'E02004789',
        '4QS' => 'E02004789',
        '4RA' => 'E02004789',
        '4RB' => 'E02004789',
        '4RD' => 'E02004789',
        '4RE' => 'E02004789',
        '4RF' => 'E02004789',
        '4RG' => 'E02004789',
        '4RH' => 'E02004789',
        '4RJ' => 'E02004789',
        '4RL' => 'E02004789',
        '4RN' => 'E02004789',
        '4RP' => 'E02004789',
        '4RQ' => 'E02004787',
        '4RR' => 'E02004787',
        '4RS' => 'E02004789',
        '4RT' => 'E02004789',
        '4RU' => 'E02004787',
        '4RW' => 'E02004787',
        '4RX' => 'E02004789',
        '4SB' => 'E02004787',
        '4SD' => 'E02004789',
        '4SE' => 'E02004789',
        '4UA' => 'E02004787',
        '4UB' => 'E02004787',
        '4UD' => 'E02004787',
        '4UE' => 'E02004787',
        '4UF' => 'E02004789',
        '4UG' => 'E02004787',
        '4UH' => 'E02004789',
        '4UJ' => 'E02004787',
        '4UL' => 'E02004789',
        '4UN' => 'E02004787',
        '4UP' => 'E02004787',
        '4UQ' => 'E02004789',
        '4UR' => 'E02004789',
        '4US' => 'E02004789',
        '4UU' => 'E02004789',
        '4UW' => 'E02004787',
        '4UX' => 'E02004787',
        '4UY' => 'E02004789',
        '4WA' => 'E02004787',
        '4WB' => 'E02004787',
        '4WD' => 'E02004787',
        '4WG' => 'E02004787',
        '4WJ' => 'E02004787',
        '4WQ' => 'E02004787',
        '4WS' => 'E02004787',
        '4WU' => 'E02004787',
        '4WW' => 'E02004787',
        '4WX' => 'E02004787',
        '4WY' => 'E02004787',
        '4XA' => 'E02004789',
        '4XB' => 'E02004789',
        '4XD' => 'E02004787',
        '4XE' => 'E02004787',
        '4XF' => 'E02004789',
        '4XH' => 'E02004787',
        '4XZ' => 'E02004787',
        '4ZA' => 'E02004789',
        '4ZB' => 'E02004787',
        '4ZD' => 'E02004787',
        '4ZE' => 'E02004787',
        '4ZF' => 'E02004787',
        '4ZG' => 'E02004787',
        '4ZH' => 'E02004787',
        '4ZJ' => 'E02004787',
        '4ZQ' => 'E02004787',
        '4ZX' => 'E02004787',
        '5AA' => 'E02004787',
        '5AB' => 'E02004787',
        '5AD' => 'E02004787',
        '5AE' => 'E02004787',
        '5AF' => 'E02004787',
        '5AG' => 'E02004787',
        '5AH' => 'E02004789',
        '5AQ' => 'E02004787',
        '5AR' => 'E02004787',
        '5AU' => 'E02004787',
        '5AW' => 'E02004787',
        '5AX' => 'E02004787',
        '5AY' => 'E02004787',
        '5AZ' => 'E02004787',
        '5BA' => 'E02004787',
        '5BB' => 'E02004787',
        '5BD' => 'E02004787',
        '5BE' => 'E02004787',
        '5BG' => 'E02004787',
        '5BH' => 'E02004787',
        '5BJ' => 'E02004787',
        '5BL' => 'E02004787',
        '5BN' => 'E02004787',
        '5BP' => 'E02004787',
        '5BQ' => 'E02004787',
        '5BR' => 'E02004787',
        '5BS' => 'E02004787',
        '5BT' => 'E02004787',
        '5DA' => 'E02004787',
        '5DB' => 'E02004787',
        '5DD' => 'E02004787',
        '5DE' => 'E02004787',
        '5DF' => 'E02004787',
        '5DG' => 'E02004787',
        '5DH' => 'E02004787',
        '5DJ' => 'E02004787',
        '5DL' => 'E02004787',
        '5DN' => 'E02004787',
        '5DP' => 'E02004787',
        '5DQ' => 'E02004787',
        '5DR' => 'E02004787',
        '5DS' => 'E02004787',
        '5DT' => 'E02004787',
        '5DU' => 'E02004787',
        '5DW' => 'E02004787',
        '5DX' => 'E02004787',
        '5DY' => 'E02004787',
        '5DZ' => 'E02004787',
        '5EA' => 'E02004787',
        '5EB' => 'E02004787',
        '5ED' => 'E02004787',
        '5EE' => 'E02004787',
        '5EF' => 'E02004787',
        '5EG' => 'E02004787',
        '5EH' => 'E02004787',
        '5EJ' => 'E02004787',
        '5EL' => 'E02004787',
        '5EN' => 'E02004787',
        '5EP' => 'E02004787',
        '5EQ' => 'E02004787',
        '5ER' => 'E02004787',
        '5ES' => 'E02004787',
        '5ET' => 'E02004787',
        '5EU' => 'E02004787',
        '5EW' => 'E02004789',
        '5EX' => 'E02004787',
        '5EZ' => 'E02004787',
        '5FB' => 'E02004787',
        '5FD' => 'E02004787',
        '5FE' => 'E02004787',
        '5FF' => 'E02004787',
        '5FG' => 'E02004787',
        '5FH' => 'E02004787',
        '5FJ' => 'E02004787',
        '5FL' => 'E02004787',
        '5FN' => 'E02004787',
        '5FP' => 'E02004787',
        '5FQ' => 'E02004787',
        '5FR' => 'E02004787',
        '5FS' => 'E02004787',
        '5FT' => 'E02004787',
        '5FU' => 'E02004787',
        '5FW' => 'E02004787',
        '5FX' => 'E02004787',
        '5FY' => 'E02004787',
        '5FZ' => 'E02004787',
        '5GA' => 'E02004787',
        '5GB' => 'E02004787',
        '5GD' => 'E02004787',
        '5GE' => 'E02004787',
        '5GF' => 'E02004787',
        '5GG' => 'E02004787',
        '5GH' => 'E02004787',
        '5GJ' => 'E02004787',
        '5GL' => 'E02004787',
        '5GN' => 'E02004787',
        '5GP' => 'E02004787',
        '5GQ' => 'E02004787',
        '5GR' => 'E02004787',
        '5GS' => 'E02004789',
        '5GT' => 'E02004787',
        '5GU' => 'E02004787',
        '5GW' => 'E02004787',
        '5GX' => 'E02004787',
        '5GY' => 'E02004787',
        '5HE' => 'E02004786',
        '5HF' => 'E02004786',
        '5HT' => 'E02004787',
        '5JA' => 'E02004786',
        '5LR' => 'E02004789',
        '5LW' => 'E02004787',
        '5NQ' => 'E02004787',
        '5QQ' => 'E02004789',
        '5QR' => 'E02004787',
        '5QS' => 'E02004787',
        '5QT' => 'E02004787',
        '5QU' => 'E02004787',
        '5QW' => 'E02004787',
        '5QX' => 'E02004787',
        '5QY' => 'E02004787',
        '5RX' => 'E02004787',
        '5RY' => 'E02004787',
        '5RZ' => 'E02004787',
        '5SF' => 'E02004787',
        '5SG' => 'E02004787',
        '5SH' => 'E02004787',
        '5SJ' => 'E02004787',
        '5SL' => 'E02004787',
        '5SN' => 'E02004787',
        '5SP' => 'E02004787',
        '5SQ' => 'E02004787',
        '5SR' => 'E02004787',
        '5SS' => 'E02004787',
        '5ST' => 'E02004787',
        '5SU' => 'E02004787',
        '5SW' => 'E02004787',
        '5SX' => 'E02004786',
        '5SY' => 'E02004787',
        '5SZ' => 'E02004787',
        '5TA' => 'E02004787',
        '5TB' => 'E02004786',
        '5TD' => 'E02004786',
        '5TE' => 'E02004786',
        '5TF' => 'E02004786',
        '5TG' => 'E02004786',
        '5TH' => 'E02004786',
        '5TJ' => 'E02004786',
        '5TL' => 'E02004795',
        '5TN' => 'E02004786',
        '5TP' => 'E02004786',
        '5TQ' => 'E02004786',
        '5TR' => 'E02004786',
        '5TS' => 'E02004786',
        '5TT' => 'E02004786',
        '5TU' => 'E02004786',
        '5TW' => 'E02004786',
        '5TX' => 'E02004786',
        '5TY' => 'E02004786',
        '5TZ' => 'E02004786',
        '5UA' => 'E02004786',
        '5UB' => 'E02004787',
        '5UD' => 'E02004787',
        '5UE' => 'E02004786',
        '5UF' => 'E02004786',
        '5UG' => 'E02004786',
        '5UH' => 'E02004786',
        '5UJ' => 'E02004786',
        '5UL' => 'E02004786',
        '5UN' => 'E02004786',
        '5UP' => 'E02004786',
        '5UQ' => 'E02004786',
        '5UR' => 'E02004786',
        '5UT' => 'E02004787',
        '5UU' => 'E02004786',
        '5UW' => 'E02004786',
        '5UX' => 'E02004786',
        '5UY' => 'E02004786',
        '5UZ' => 'E02004786',
        '5WA' => 'E02004786',
        '5WB' => 'E02004786',
        '5WD' => 'E02004786',
        '5WE' => 'E02004786',
        '5WF' => 'E02004786',
        '5WG' => 'E02004786',
        '5WH' => 'E02004786',
        '5WJ' => 'E02004786',
        '5WL' => 'E02004786',
        '5WN' => 'E02004786',
        '5WP' => 'E02004786',
        '5WQ' => 'E02004787',
        '5WR' => 'E02004787',
        '5WS' => 'E02004787',
        '5WT' => 'E02004787',
        '5WU' => 'E02004787',
        '5WW' => 'E02004787',
        '5WX' => 'E02004787',
        '5WY' => 'E02004787',
        '5WZ' => 'E02004787',
        '5XA' => 'E02004787',
        '5XB' => 'E02004787',
        '5XD' => 'E02004787',
        '5XE' => 'E02004787',
        '5XL' => 'E02004787',
        '5XN' => 'E02004787',
        '5XP' => 'E02004787',
        '5XQ' => 'E02004787',
        '5XR' => 'E02004787',
        '5XS' => 'E02003569',
        '5XT' => 'E02004787',
        '5XU' => 'E02004787',
        '5XW' => 'E02004787',
        '5XX' => 'E02004787',
        '5XY' => 'E02004787',
        '5XZ' => 'E02004787',
        '5YG' => 'E02004787',
        '5YH' => 'E02004787',
        '5YJ' => 'E02004792',
        '5YL' => 'E02004787',
        '5YP' => 'E02004787',
        '5YR' => 'E02004787',
        '5YS' => 'E02004787',
        '5YT' => 'E02004787',
        '5YU' => 'E02004787',
        '5YW' => 'E02004787',
        '5YX' => 'E02004787',
        '5YY' => 'E02004787',
        '5YZ' => 'E02004787',
        '5ZA' => 'E02004787',
        '5ZB' => 'E02004787',
        '5ZD' => 'E02004787',
        '5ZE' => 'E02004787',
        '5ZF' => 'E02004787',
        '5ZG' => 'E02004787',
        '5ZH' => 'E02004787',
        '5ZJ' => 'E02004787',
        '5ZL' => 'E02004787',
        '5ZN' => 'E02004787',
        '5ZP' => 'E02004787',
        '5ZQ' => 'E02004787',
        '5ZR' => 'E02004787',
        '5ZS' => 'E02004787',
        '5ZT' => 'E02004787',
        '5ZU' => 'E02004787',
        '5ZX' => 'E02004787',
        '6AA' => 'E02004787',
        '6AB' => 'E02004787',
        '6AD' => 'E02004787',
        '6AE' => 'E02004787',
        '6AF' => 'E02004787',
        '6AG' => 'E02004787',
        '6AH' => 'E02004787',
        '6AJ' => 'E02004787',
        '6AL' => 'E02004787',
        '6AN' => 'E02004787',
        '6AP' => 'E02004787',
        '6AQ' => 'E02004787',
        '6AR' => 'E02004787',
        '6AS' => 'E02004787',
        '6AT' => 'E02004787',
        '6AU' => 'E02004787',
        '6AW' => 'E02004787',
        '6AX' => 'E02004787',
        '6AY' => 'E02004787',
        '6AZ' => 'E02004787',
        '6BA' => 'E02004787',
        '6BB' => 'E02004787',
        '6BD' => 'E02004787',
        '6BE' => 'E02004787',
        '6BG' => 'E02004787',
        '6BH' => 'E02004787',
        '6BJ' => 'E02004787',
        '6BL' => 'E02004787',
        '6BN' => 'E02004787',
        '6BP' => 'E02004787',
        '6BQ' => 'E02004787',
        '6BR' => 'E02004787',
        '6BS' => 'E02004787',
        '6BT' => 'E02004787',
        '6BY' => 'E02004787',
        '6BZ' => 'E02004787',
        '6DA' => 'E02004787',
        '6DB' => 'E02004789',
        '6DD' => 'E02004789',
        '6DF' => 'E02004789',
        '6DG' => 'E02004787',
        '6DH' => 'E02004787',
        '6DJ' => 'E02004787',
        '6DL' => 'E02004787',
        '6DN' => 'E02004787',
        '6DP' => 'E02004787',
        '6DQ' => 'E02004787',
        '6DR' => 'E02004787',
        '6DS' => 'E02004787',
        '6DT' => 'E02004787',
        '6DU' => 'E02004787',
        '6DW' => 'E02004787',
        '6DX' => 'E02004787',
        '6DY' => 'E02004787',
        '6DZ' => 'E02004787',
        '6EA' => 'E02004789',
        '6EB' => 'E02004787',
        '6ED' => 'E02004789',
        '6EE' => 'E02004787',
        '6EF' => 'E02004787',
        '6EG' => 'E02004789',
        '6EH' => 'E02004789',
        '6EJ' => 'E02004787',
        '6EL' => 'E02004787',
        '6EN' => 'E02004787',
        '6EP' => 'E02004789',
        '6EQ' => 'E02004789',
        '6ER' => 'E02004789',
        '6ES' => 'E02004789',
        '6ET' => 'E02004787',
        '6EU' => 'E02004789',
        '6EW' => 'E02004787',
        '6EX' => 'E02004789',
        '6EY' => 'E02004789',
        '6EZ' => 'E02004789',
        '6FB' => 'E02004789',
        '6FD' => 'E02004789',
        '6FE' => 'E02004789',
        '6FF' => 'E02004789',
        '6FG' => 'E02004789',
        '6FH' => 'E02004789',
        '6FJ' => 'E02004789',
        '6FL' => 'E02004789',
        '6FN' => 'E02004789',
        '6FP' => 'E02004789',
        '6FQ' => 'E02004789',
        '6FR' => 'E02004789',
        '6FW' => 'E02004787',
        '6GE' => 'E02004787',
        '6GF' => 'E02004787',
        '6GH' => 'E02004787',
        '6GJ' => 'E02004789',
        '6GL' => 'E02004787',
        '6GN' => 'E02004789',
        '6GP' => 'E02004789',
        '6GQ' => 'E02004789',
        '6GR' => 'E02004787',
        '6GS' => 'E02004787',
        '6HA' => 'E02004789',
        '6HB' => 'E02004789',
        '6HD' => 'E02004787',
        '6HE' => 'E02004789',
        '6JA' => 'E02004787',
        '6JB' => 'E02004789',
        '6JD' => 'E02004789',
        '6JE' => 'E02004787',
        '6JF' => 'E02004789',
        '6JG' => 'E02004789',
        '6JH' => 'E02004789',
        '6JJ' => 'E02004787',
        '6JL' => 'E02004789',
        '6JN' => 'E02004789',
        '6JP' => 'E02004789',
        '6JQ' => 'E02004789',
        '6JR' => 'E02004789',
        '6JS' => 'E02004789',
        '6JT' => 'E02004789',
        '6JU' => 'E02004789',
        '6JW' => 'E02004789',
        '6JX' => 'E02004789',
        '6JY' => 'E02004789',
        '6JZ' => 'E02004789',
        '6LA' => 'E02004787',
        '6PA' => 'E02004787',
        '6QA' => 'E02004787',
        '6RU' => 'E02004787',
        '6UX' => 'E02004787',
        '6WD' => 'E02003569',
        '6WF' => 'E02004789',
        '6WG' => 'E02004787',
        '6WH' => 'E02004787',
        '6WJ' => 'E02004787',
        '6WL' => 'E02004787',
        '6WN' => 'E02004787',
        '6WP' => 'E02004787',
        '6WQ' => 'E02004787',
        '6WR' => 'E02004787',
        '6WS' => 'E02004787',
        '6WT' => 'E02004787',
        '6WU' => 'E02004787',
        '6WW' => 'E02004787',
        '6WX' => 'E02004787',
        '6WY' => 'E02004787',
        '6WZ' => 'E02004787',
        '6XA' => 'E02004787',
        '6XX' => 'E02004792',
        '6XZ' => 'E02004787',
        '6YA' => 'E02004787',
        '6YP' => 'E02004787',
        '6YU' => 'E02004787',
        '6YW' => 'E02004787',
        '6YX' => 'E02004787',
        '6ZA' => 'E02004787',
        '6ZB' => 'E02004787',
        '6ZD' => 'E02004789',
        '6ZE' => 'E02004787',
        '6ZF' => 'E02004787',
        '6ZG' => 'E02004787',
        '6ZH' => 'E02004787',
        '6ZJ' => 'E02004787',
        '6ZL' => 'E02004787',
        '6ZN' => 'E02004787',
        '6ZP' => 'E02004787',
        '6ZR' => 'E02004787',
        '6ZS' => 'E02004787',
        '6ZT' => 'E02004787',
        '9AF' => 'E02004787',
        '9AN' => 'E02004787',
        '9AP' => 'E02004787',
        '9AQ' => 'E02004787',
        '9AR' => 'E02004787',
        '9AS' => 'E02004787',
        '9AT' => 'E02004787',
        '9AU' => 'E02004787',
        '9AW' => 'E02004787',
        '9AX' => 'E02004787',
        '9AY' => 'E02004787',
        '9AZ' => 'E02004787',
        '9BA' => 'E02004787',
        '9BB' => 'E02004787',
        '9BD' => 'E02004787',
        '9BE' => 'E02004787',
        '9BF' => 'E02004787',
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
