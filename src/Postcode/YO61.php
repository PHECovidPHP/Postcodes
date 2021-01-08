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
final class YO61
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005760',
        '1AB' => 'E02005759',
        '1AD' => 'E02005759',
        '1AF' => 'E02005759',
        '1AG' => 'E02005760',
        '1DE' => 'E02005759',
        '1DG' => 'E02005759',
        '1DH' => 'E02005759',
        '1DJ' => 'E02005759',
        '1DL' => 'E02005759',
        '1DN' => 'E02005759',
        '1DP' => 'E02005759',
        '1DQ' => 'E02005759',
        '1DR' => 'E02005759',
        '1DS' => 'E02005759',
        '1DT' => 'E02005759',
        '1DU' => 'E02005759',
        '1DW' => 'E02005759',
        '1DX' => 'E02005759',
        '1DY' => 'E02005759',
        '1DZ' => 'E02005759',
        '1EA' => 'E02005759',
        '1EB' => 'E02005759',
        '1ED' => 'E02005759',
        '1EE' => 'E02005759',
        '1EF' => 'E02005759',
        '1EG' => 'E02005759',
        '1EH' => 'E02005759',
        '1EJ' => 'E02005759',
        '1EL' => 'E02005759',
        '1EN' => 'E02005759',
        '1EP' => 'E02005759',
        '1EQ' => 'E02005759',
        '1ER' => 'E02005759',
        '1ES' => 'E02005759',
        '1ET' => 'E02005759',
        '1EU' => 'E02005759',
        '1EW' => 'E02005759',
        '1EX' => 'E02005759',
        '1EY' => 'E02005759',
        '1EZ' => 'E02005759',
        '1HA' => 'E02005759',
        '1HB' => 'E02005759',
        '1HD' => 'E02005759',
        '1HE' => 'E02005759',
        '1HF' => 'E02005759',
        '1HH' => 'E02005759',
        '1HJ' => 'E02005759',
        '1HL' => 'E02005759',
        '1HN' => 'E02005759',
        '1HP' => 'E02005759',
        '1HQ' => 'E02005759',
        '1HR' => 'E02005759',
        '1HS' => 'E02005759',
        '1HT' => 'E02005759',
        '1HU' => 'E02005759',
        '1HW' => 'E02005759',
        '1HX' => 'E02005759',
        '1HY' => 'E02005759',
        '1HZ' => 'E02005759',
        '1JA' => 'E02005759',
        '1JB' => 'E02005759',
        '1JD' => 'E02005759',
        '1JE' => 'E02005760',
        '1JF' => 'E02005759',
        '1JG' => 'E02005759',
        '1JH' => 'E02005759',
        '1JL' => 'E02005759',
        '1JN' => 'E02005759',
        '1JP' => 'E02005759',
        '1JQ' => 'E02005759',
        '1JR' => 'E02005759',
        '1JS' => 'E02005759',
        '1JT' => 'E02005759',
        '1JU' => 'E02005759',
        '1JW' => 'E02005759',
        '1JX' => 'E02005759',
        '1JY' => 'E02005759',
        '1JZ' => 'E02005759',
        '1LA' => 'E02005759',
        '1LB' => 'E02005759',
        '1LD' => 'E02005759',
        '1LE' => 'E02005759',
        '1LF' => 'E02005759',
        '1LG' => 'E02005759',
        '1LH' => 'E02005759',
        '1LJ' => 'E02005759',
        '1LL' => 'E02005759',
        '1LN' => 'E02005759',
        '1LP' => 'E02005759',
        '1LQ' => 'E02005759',
        '1LR' => 'E02005759',
        '1LS' => 'E02005759',
        '1LT' => 'E02005759',
        '1LU' => 'E02005759',
        '1LW' => 'E02005759',
        '1LX' => 'E02005759',
        '1LY' => 'E02005759',
        '1LZ' => 'E02005759',
        '1NA' => 'E02005759',
        '1NB' => 'E02005759',
        '1ND' => 'E02005759',
        '1NF' => 'E02005759',
        '1NG' => 'E02005759',
        '1NH' => 'E02005759',
        '1NJ' => 'E02005759',
        '1NL' => 'E02005759',
        '1NN' => 'E02005759',
        '1NP' => 'E02005759',
        '1NQ' => 'E02005759',
        '1NR' => 'E02005759',
        '1NS' => 'E02005759',
        '1NT' => 'E02005759',
        '1NU' => 'E02005759',
        '1NW' => 'E02005759',
        '1NX' => 'E02005759',
        '1NY' => 'E02005759',
        '1PR' => 'E02005760',
        '1PS' => 'E02005760',
        '1PT' => 'E02005760',
        '1PU' => 'E02005760',
        '1PX' => 'E02005760',
        '1PY' => 'E02005760',
        '1PZ' => 'E02005760',
        '1QA' => 'E02005760',
        '1QB' => 'E02005760',
        '1QD' => 'E02005760',
        '1QE' => 'E02005760',
        '1QF' => 'E02005760',
        '1QG' => 'E02005760',
        '1QH' => 'E02005760',
        '1QJ' => 'E02005760',
        '1QL' => 'E02005760',
        '1QN' => 'E02005760',
        '1QP' => 'E02005760',
        '1QQ' => 'E02005760',
        '1QR' => 'E02005760',
        '1QS' => 'E02005760',
        '1QT' => 'E02005760',
        '1QU' => 'E02005760',
        '1QW' => 'E02005760',
        '1QX' => 'E02005760',
        '1QY' => 'E02005760',
        '1QZ' => 'E02005760',
        '1RA' => 'E02005760',
        '1RB' => 'E02005760',
        '1RD' => 'E02005760',
        '1RE' => 'E02005760',
        '1RF' => 'E02005760',
        '1RG' => 'E02005760',
        '1RH' => 'E02005760',
        '1RJ' => 'E02005760',
        '1RL' => 'E02005760',
        '1RN' => 'E02005760',
        '1RP' => 'E02005760',
        '1RQ' => 'E02005760',
        '1RR' => 'E02005760',
        '1RS' => 'E02005760',
        '1RT' => 'E02005760',
        '1RU' => 'E02005760',
        '1RW' => 'E02005760',
        '1RX' => 'E02005760',
        '1RY' => 'E02005760',
        '1RZ' => 'E02005760',
        '1SA' => 'E02005760',
        '1SB' => 'E02005760',
        '1SD' => 'E02005760',
        '1SE' => 'E02005760',
        '1SF' => 'E02005760',
        '1SG' => 'E02005760',
        '1SH' => 'E02005760',
        '1SJ' => 'E02005760',
        '1SL' => 'E02005760',
        '1SN' => 'E02005760',
        '1SP' => 'E02005760',
        '1SQ' => 'E02005760',
        '1SR' => 'E02005760',
        '1SS' => 'E02005760',
        '1ST' => 'E02005760',
        '1SU' => 'E02005760',
        '1SW' => 'E02005760',
        '1SX' => 'E02005760',
        '1TA' => 'E02005760',
        '1TB' => 'E02005760',
        '1TD' => 'E02005760',
        '1TE' => 'E02005760',
        '1TF' => 'E02005760',
        '1TG' => 'E02005760',
        '1TH' => 'E02005760',
        '1TJ' => 'E02005760',
        '1TL' => 'E02005760',
        '1TN' => 'E02005760',
        '1TP' => 'E02005760',
        '1TQ' => 'E02005760',
        '1TR' => 'E02005760',
        '1TS' => 'E02005760',
        '1TT' => 'E02005760',
        '1TU' => 'E02005760',
        '1TW' => 'E02005760',
        '1TX' => 'E02005760',
        '1TY' => 'E02005760',
        '1TZ' => 'E02005760',
        '1UA' => 'E02005760',
        '1UB' => 'E02005760',
        '1UD' => 'E02005760',
        '1UE' => 'E02005760',
        '1UF' => 'E02005760',
        '1WA' => 'E02005760',
        '1WB' => 'E02005759',
        '1WD' => 'E02005760',
        '1WE' => 'E02005759',
        '1WF' => 'E02005759',
        '1WG' => 'E02005759',
        '1WH' => 'E02005759',
        '1WN' => 'E02005759',
        '1WP' => 'E02005759',
        '1WQ' => 'E02005759',
        '1WR' => 'E02005759',
        '1WS' => 'E02005759',
        '1WT' => 'E02005759',
        '1WU' => 'E02005759',
        '1WW' => 'E02005759',
        '1WX' => 'E02005759',
        '1WY' => 'E02005759',
        '1WZ' => 'E02005759',
        '1YA' => 'E02005759',
        '1YB' => 'E02005759',
        '1YD' => 'E02005759',
        '1YE' => 'E02005759',
        '1YF' => 'E02005759',
        '1YG' => 'E02005759',
        '1YH' => 'E02005759',
        '1YL' => 'E02005759',
        '1YN' => 'E02005759',
        '1YS' => 'E02005759',
        '1YT' => 'E02005759',
        '1YU' => 'E02002784',
        '1YW' => 'E02005759',
        '1YX' => 'E02005759',
        '1YY' => 'E02005759',
        '1YZ' => 'E02005759',
        '1ZU' => 'E02005759',
        '1ZW' => 'E02005759',
        '2NH' => 'E02005760',
        '2NP' => 'E02005760',
        '2NQ' => 'E02005760',
        '2NR' => 'E02005760',
        '2NS' => 'E02005760',
        '2NT' => 'E02005760',
        '2NU' => 'E02005760',
        '2NW' => 'E02005760',
        '2NX' => 'E02005760',
        '2NY' => 'E02005760',
        '2NZ' => 'E02005760',
        '2PA' => 'E02005760',
        '2PB' => 'E02005760',
        '2PD' => 'E02005760',
        '2PE' => 'E02005760',
        '2PF' => 'E02005760',
        '2PG' => 'E02005760',
        '2PH' => 'E02005760',
        '2PJ' => 'E02005760',
        '2PL' => 'E02005760',
        '2PN' => 'E02005760',
        '2PP' => 'E02005760',
        '2PQ' => 'E02005760',
        '2PR' => 'E02005760',
        '2PS' => 'E02005760',
        '2PT' => 'E02005760',
        '2PU' => 'E02005760',
        '2PW' => 'E02005760',
        '2PX' => 'E02005760',
        '2PY' => 'E02005760',
        '2PZ' => 'E02005760',
        '2QA' => 'E02005760',
        '2QB' => 'E02005760',
        '2QD' => 'E02005760',
        '2QE' => 'E02005760',
        '2QF' => 'E02005760',
        '2QG' => 'E02005758',
        '2QH' => 'E02005760',
        '2QJ' => 'E02005760',
        '2QL' => 'E02005760',
        '2QN' => 'E02005760',
        '2QP' => 'E02005760',
        '2QQ' => 'E02005760',
        '2QR' => 'E02005760',
        '2QS' => 'E02005760',
        '2QT' => 'E02005760',
        '2QU' => 'E02005760',
        '2QX' => 'E02005760',
        '2QY' => 'E02005760',
        '2QZ' => 'E02005760',
        '2RA' => 'E02005760',
        '2RB' => 'E02005760',
        '2RD' => 'E02005760',
        '2RE' => 'E02005760',
        '2RF' => 'E02005760',
        '2RG' => 'E02005760',
        '2RH' => 'E02005765',
        '2RJ' => 'E02005763',
        '2RL' => 'E02005763',
        '2RN' => 'E02005763',
        '2RP' => 'E02005763',
        '2RQ' => 'E02005760',
        '2RR' => 'E02005763',
        '2RS' => 'E02005763',
        '2RT' => 'E02005763',
        '2RU' => 'E02005765',
        '2RW' => 'E02005763',
        '2RX' => 'E02005765',
        '2RY' => 'E02005765',
        '2RZ' => 'E02005765',
        '2SA' => 'E02005765',
        '2SB' => 'E02005765',
        '2SE' => 'E02005760',
        '2SF' => 'E02005763',
        '2WY' => 'E02005760',
        '2WZ' => 'E02005760',
        '2YZ' => 'E02005760',
        '3AA' => 'E02005759',
        '3AB' => 'E02005759',
        '3AD' => 'E02005759',
        '3AE' => 'E02005759',
        '3AF' => 'E02005759',
        '3AG' => 'E02005759',
        '3AH' => 'E02005759',
        '3AJ' => 'E02005759',
        '3AL' => 'E02005759',
        '3AN' => 'E02005759',
        '3AP' => 'E02005759',
        '3AQ' => 'E02005759',
        '3AR' => 'E02005759',
        '3AS' => 'E02005759',
        '3AT' => 'E02005759',
        '3AU' => 'E02005759',
        '3AW' => 'E02005759',
        '3AX' => 'E02005759',
        '3AY' => 'E02005759',
        '3AZ' => 'E02005759',
        '3BA' => 'E02005759',
        '3BB' => 'E02005759',
        '3BD' => 'E02005759',
        '3BE' => 'E02005759',
        '3BF' => 'E02005759',
        '3BG' => 'E02005759',
        '3BH' => 'E02005759',
        '3BJ' => 'E02005759',
        '3BL' => 'E02005759',
        '3BN' => 'E02005759',
        '3BP' => 'E02005759',
        '3BQ' => 'E02005759',
        '3BR' => 'E02005759',
        '3BS' => 'E02005759',
        '3BT' => 'E02005759',
        '3BU' => 'E02005759',
        '3BW' => 'E02005759',
        '3BX' => 'E02005759',
        '3BY' => 'E02005759',
        '3BZ' => 'E02005759',
        '3DA' => 'E02005759',
        '3DB' => 'E02005759',
        '3DD' => 'E02005759',
        '3DE' => 'E02005759',
        '3DF' => 'E02005759',
        '3DG' => 'E02005759',
        '3DH' => 'E02005759',
        '3DJ' => 'E02005759',
        '3DL' => 'E02005759',
        '3DN' => 'E02005759',
        '3DP' => 'E02005759',
        '3DQ' => 'E02005759',
        '3DR' => 'E02005759',
        '3DS' => 'E02005759',
        '3DT' => 'E02005759',
        '3DU' => 'E02005759',
        '3DW' => 'E02005759',
        '3DX' => 'E02005759',
        '3DY' => 'E02005759',
        '3DZ' => 'E02005759',
        '3EA' => 'E02005759',
        '3EB' => 'E02005759',
        '3ED' => 'E02005759',
        '3EE' => 'E02005759',
        '3EF' => 'E02005759',
        '3EG' => 'E02005759',
        '3EH' => 'E02005759',
        '3EJ' => 'E02005760',
        '3EL' => 'E02005760',
        '3EN' => 'E02005760',
        '3EP' => 'E02005759',
        '3EQ' => 'E02005759',
        '3ER' => 'E02005759',
        '3ES' => 'E02005759',
        '3ET' => 'E02005759',
        '3EU' => 'E02005759',
        '3EW' => 'E02005759',
        '3EX' => 'E02005759',
        '3EY' => 'E02005759',
        '3EZ' => 'E02005759',
        '3FA' => 'E02005759',
        '3FB' => 'E02005759',
        '3FD' => 'E02005759',
        '3FE' => 'E02005759',
        '3FG' => 'E02005759',
        '3FH' => 'E02005759',
        '3FJ' => 'E02005759',
        '3FL' => 'E02005759',
        '3FN' => 'E02005759',
        '3FP' => 'E02005759',
        '3FQ' => 'E02005759',
        '3FR' => 'E02005759',
        '3FS' => 'E02005759',
        '3FT' => 'E02005759',
        '3FU' => 'E02005759',
        '3FW' => 'E02005759',
        '3FX' => 'E02005759',
        '3FY' => 'E02005759',
        '3FZ' => 'E02005759',
        '3GA' => 'E02005759',
        '3GB' => 'E02005759',
        '3GD' => 'E02005759',
        '3GE' => 'E02005759',
        '3GF' => 'E02005759',
        '3GG' => 'E02005759',
        '3GH' => 'E02005759',
        '3GJ' => 'E02005759',
        '3GL' => 'E02005759',
        '3GN' => 'E02005759',
        '3GP' => 'E02005759',
        '3GQ' => 'E02005759',
        '3GR' => 'E02005759',
        '3GS' => 'E02005759',
        '3GT' => 'E02005759',
        '3GU' => 'E02005759',
        '3GW' => 'E02005759',
        '3GX' => 'E02005759',
        '3GY' => 'E02005759',
        '3GZ' => 'E02005759',
        '3HA' => 'E02005759',
        '3HB' => 'E02005759',
        '3HD' => 'E02005759',
        '3HE' => 'E02005759',
        '3HF' => 'E02005759',
        '3HG' => 'E02005759',
        '3HH' => 'E02005759',
        '3HJ' => 'E02005759',
        '3HL' => 'E02005759',
        '3HN' => 'E02005759',
        '3HP' => 'E02005759',
        '3HQ' => 'E02005759',
        '3HR' => 'E02005759',
        '3HS' => 'E02005759',
        '3HT' => 'E02005759',
        '3HU' => 'E02005759',
        '3HW' => 'E02005759',
        '3HX' => 'E02005759',
        '3HY' => 'E02005759',
        '3HZ' => 'E02005759',
        '3JA' => 'E02005759',
        '3JB' => 'E02005759',
        '3JD' => 'E02005759',
        '3JE' => 'E02005759',
        '3JF' => 'E02005759',
        '3JG' => 'E02005759',
        '3JH' => 'E02005759',
        '3JJ' => 'E02005759',
        '3JL' => 'E02005759',
        '3JN' => 'E02005759',
        '3JP' => 'E02005759',
        '3JQ' => 'E02005759',
        '3JR' => 'E02005759',
        '3JS' => 'E02005759',
        '3JT' => 'E02005759',
        '3JU' => 'E02005759',
        '3JW' => 'E02005759',
        '3JX' => 'E02005759',
        '3JY' => 'E02005759',
        '3JZ' => 'E02005759',
        '3LA' => 'E02005759',
        '3LB' => 'E02005760',
        '3LD' => 'E02005760',
        '3LE' => 'E02005760',
        '3LF' => 'E02005760',
        '3LG' => 'E02005760',
        '3LH' => 'E02005760',
        '3LJ' => 'E02005760',
        '3LL' => 'E02005760',
        '3LN' => 'E02005760',
        '3LP' => 'E02005759',
        '3LQ' => 'E02005760',
        '3LR' => 'E02005760',
        '3LS' => 'E02005760',
        '3LT' => 'E02005760',
        '3LU' => 'E02005760',
        '3LW' => 'E02005760',
        '3LX' => 'E02005759',
        '3LY' => 'E02005759',
        '3LZ' => 'E02005759',
        '3NA' => 'E02005759',
        '3NB' => 'E02005759',
        '3ND' => 'E02005759',
        '3NE' => 'E02005759',
        '3NF' => 'E02005759',
        '3NG' => 'E02005759',
        '3NH' => 'E02005760',
        '3NJ' => 'E02005760',
        '3NL' => 'E02005759',
        '3NN' => 'E02005759',
        '3NP' => 'E02005759',
        '3NQ' => 'E02005760',
        '3NR' => 'E02005759',
        '3NS' => 'E02005759',
        '3NT' => 'E02005759',
        '3NU' => 'E02005759',
        '3NW' => 'E02005759',
        '3NX' => 'E02005759',
        '3NY' => 'E02005759',
        '3NZ' => 'E02005759',
        '3PA' => 'E02005759',
        '3PB' => 'E02005759',
        '3PD' => 'E02005759',
        '3PE' => 'E02005760',
        '3PF' => 'E02005759',
        '3PG' => 'E02005759',
        '3PH' => 'E02005759',
        '3PJ' => 'E02005759',
        '3PL' => 'E02005759',
        '3PN' => 'E02005759',
        '3PP' => 'E02005759',
        '3PQ' => 'E02005759',
        '3PR' => 'E02005759',
        '3PS' => 'E02005759',
        '3PT' => 'E02005759',
        '3PU' => 'E02005759',
        '3PW' => 'E02005759',
        '3PX' => 'E02005758',
        '3PY' => 'E02005758',
        '3PZ' => 'E02005758',
        '3QA' => 'E02005758',
        '3QB' => 'E02005758',
        '3QD' => 'E02005759',
        '3QE' => 'E02005759',
        '3QF' => 'E02005759',
        '3QG' => 'E02005759',
        '3QH' => 'E02005759',
        '3QJ' => 'E02005759',
        '3QL' => 'E02005759',
        '3QN' => 'E02005759',
        '3QP' => 'E02005759',
        '3QQ' => 'E02005759',
        '3QR' => 'E02005759',
        '3QS' => 'E02005759',
        '3QT' => 'E02005759',
        '3QU' => 'E02005759',
        '3QW' => 'E02005759',
        '3QX' => 'E02005759',
        '3QY' => 'E02005759',
        '3QZ' => 'E02005759',
        '3RA' => 'E02005758',
        '3RB' => 'E02005758',
        '3RD' => 'E02005758',
        '3RE' => 'E02005758',
        '3RF' => 'E02005759',
        '3RG' => 'E02005758',
        '3RJ' => 'E02005759',
        '3RN' => 'E02005759',
        '3RP' => 'E02005759',
        '3RQ' => 'E02005758',
        '3RR' => 'E02005759',
        '3RS' => 'E02005759',
        '3RT' => 'E02005759',
        '3RU' => 'E02005759',
        '3RW' => 'E02005759',
        '3RX' => 'E02005759',
        '3RY' => 'E02005759',
        '3RZ' => 'E02005759',
        '3SA' => 'E02005759',
        '3SB' => 'E02005759',
        '3SF' => 'E02005759',
        '3UF' => 'E02005760',
        '3UY' => 'E02005760',
        '3UZ' => 'E02005760',
        '3WA' => 'E02005760',
        '3WB' => 'E02005758',
        '3WQ' => 'E02005758',
        '3WR' => 'E02005758',
        '3WS' => 'E02005759',
        '3WT' => 'E02005758',
        '3WU' => 'E02005758',
        '3WW' => 'E02005758',
        '3WX' => 'E02005758',
        '3WY' => 'E02005760',
        '3WZ' => 'E02005759',
        '3YF' => 'E02002784',
        '3YG' => 'E02005759',
        '3YH' => 'E02005758',
        '3YJ' => 'E02002784',
        '3YL' => 'E02002784',
        '3YN' => 'E02005759',
        '3YP' => 'E02002784',
        '3YQ' => 'E02002784',
        '3YR' => 'E02005759',
        '3YS' => 'E02005758',
        '3YT' => 'E02005758',
        '3YW' => 'E02005758',
        '3YX' => 'E02005758',
        '3YY' => 'E02005758',
        '3YZ' => 'E02005758',
        '3ZW' => 'E02005759',
        '4AA' => 'E02005758',
        '4AB' => 'E02005758',
        '4AD' => 'E02005758',
        '4AE' => 'E02005758',
        '4AF' => 'E02005758',
        '4AG' => 'E02005758',
        '4AH' => 'E02005758',
        '4AJ' => 'E02005758',
        '4AL' => 'E02005758',
        '4AN' => 'E02005758',
        '4AP' => 'E02005758',
        '4AQ' => 'E02005758',
        '4AR' => 'E02005758',
        '4AS' => 'E02005758',
        '4AT' => 'E02005758',
        '4AU' => 'E02005758',
        '4AW' => 'E02005758',
        '4AX' => 'E02005790',
        '4AY' => 'E02005790',
        '4BB' => 'E02005758',
        '4BD' => 'E02005790',
        '4BE' => 'E02005790',
        '4BG' => 'E02005790',
        '4BH' => 'E02005790',
        '4BJ' => 'E02005790',
        '4BL' => 'E02005790',
        '4BN' => 'E02005790',
        '4BP' => 'E02005790',
        '4BQ' => 'E02005790',
        '4BR' => 'E02005758',
        '4BW' => 'E02005790',
        '4NL' => 'E02005760',
        '4NN' => 'E02005760',
        '4NW' => 'E02005760',
        '4PA' => 'E02005758',
        '4PB' => 'E02005758',
        '4PD' => 'E02005758',
        '4PE' => 'E02005758',
        '4PF' => 'E02005758',
        '4PG' => 'E02005758',
        '4PH' => 'E02005758',
        '4PJ' => 'E02005758',
        '4PL' => 'E02005758',
        '4PN' => 'E02005758',
        '4PQ' => 'E02005758',
        '4PT' => 'E02005758',
        '4PU' => 'E02005758',
        '4PW' => 'E02005758',
        '4PX' => 'E02005758',
        '4PY' => 'E02005758',
        '4PZ' => 'E02005758',
        '4QA' => 'E02005758',
        '4QB' => 'E02005758',
        '4QD' => 'E02005758',
        '4QE' => 'E02005758',
        '4QF' => 'E02005758',
        '4QG' => 'E02005758',
        '4QH' => 'E02005758',
        '4QQ' => 'E02005758',
        '4RA' => 'E02005759',
        '4RB' => 'E02005759',
        '4RD' => 'E02005759',
        '4RE' => 'E02005759',
        '4RF' => 'E02005759',
        '4RG' => 'E02005759',
        '4RH' => 'E02005759',
        '4RJ' => 'E02005759',
        '4RL' => 'E02005759',
        '4RN' => 'E02005759',
        '4RP' => 'E02005759',
        '4RQ' => 'E02005759',
        '4RR' => 'E02005759',
        '4RS' => 'E02005759',
        '4RT' => 'E02005759',
        '4RW' => 'E02005759',
        '4SA' => 'E02005759',
        '4SB' => 'E02005759',
        '4SD' => 'E02005759',
        '4SE' => 'E02005759',
        '4SF' => 'E02005759',
        '4SG' => 'E02005759',
        '4SH' => 'E02005759',
        '4SJ' => 'E02005759',
        '4SL' => 'E02005759',
        '4SN' => 'E02005759',
        '4SP' => 'E02005759',
        '4SQ' => 'E02005759',
        '4SW' => 'E02005759',
        '4TA' => 'E02005759',
        '4TB' => 'E02005759',
        '4TD' => 'E02005759',
        '4TE' => 'E02005759',
        '4TF' => 'E02005759',
        '4TG' => 'E02005759',
        '4TH' => 'E02005759',
        '4TJ' => 'E02005759',
        '4TL' => 'E02005759',
        '4TN' => 'E02005759',
        '4TP' => 'E02005759',
        '4TQ' => 'E02005759',
        '4TR' => 'E02005759',
        '4TS' => 'E02005759',
        '4TT' => 'E02005759',
        '4TU' => 'E02005759',
        '4TW' => 'E02005759',
        '4TX' => 'E02005759',
        '4TY' => 'E02005759',
        '4TZ' => 'E02005759',
        '4UA' => 'E02005759',
        '4UB' => 'E02005759',
        '4UD' => 'E02005759',
        '4WR' => 'E02005758',
        '4WS' => 'E02005758',
        '4WT' => 'E02005758',
        '4WU' => 'E02005758',
        '4WW' => 'E02005758',
        '4WX' => 'E02005758',
        '4WY' => 'E02005758',
        '4WZ' => 'E02005758',
        '4XA' => 'E02005758',
        '4XB' => 'E02005758',
        '4YY' => 'E02005758',
        '4YZ' => 'E02005758',
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
