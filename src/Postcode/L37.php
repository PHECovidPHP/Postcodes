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
final class L37
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005306',
        '0AB' => 'E02001441',
        '0AD' => 'E02001441',
        '0AE' => 'E02001442',
        '0AF' => 'E02001442',
        '0AG' => 'E02001441',
        '0AH' => 'E02001441',
        '0AJ' => 'E02001441',
        '0AL' => 'E02001441',
        '0AN' => 'E02001441',
        '0AP' => 'E02001441',
        '0AQ' => 'E02001441',
        '0AR' => 'E02001441',
        '0AS' => 'E02001442',
        '0AW' => 'E02001441',
        '0WA' => 'E02001442',
        '0WZ' => 'E02001442',
        '0YX' => 'E02001442',
        '1LA' => 'E02001441',
        '1LB' => 'E02001441',
        '1LD' => 'E02001441',
        '1LE' => 'E02001441',
        '1LF' => 'E02001441',
        '1LG' => 'E02001441',
        '1LH' => 'E02001441',
        '1LJ' => 'E02001441',
        '1LL' => 'E02001441',
        '1LN' => 'E02001441',
        '1LP' => 'E02001441',
        '1LQ' => 'E02001441',
        '1LR' => 'E02001441',
        '1LS' => 'E02001441',
        '1LT' => 'E02001441',
        '1LU' => 'E02001441',
        '1LW' => 'E02001441',
        '1LX' => 'E02001441',
        '1LY' => 'E02001441',
        '1LZ' => 'E02001441',
        '1NA' => 'E02001441',
        '1NB' => 'E02001441',
        '1ND' => 'E02001441',
        '1NE' => 'E02001441',
        '1NF' => 'E02001441',
        '1NG' => 'E02001441',
        '1NH' => 'E02001441',
        '1NJ' => 'E02001441',
        '1NL' => 'E02001441',
        '1NN' => 'E02001441',
        '1NP' => 'E02001441',
        '1NQ' => 'E02001441',
        '1NR' => 'E02001441',
        '1NS' => 'E02001441',
        '1NT' => 'E02001441',
        '1NU' => 'E02001441',
        '1NW' => 'E02001441',
        '1NX' => 'E02001441',
        '1NY' => 'E02001441',
        '1NZ' => 'E02001441',
        '1PA' => 'E02001441',
        '1PB' => 'E02001441',
        '1PD' => 'E02001441',
        '1PE' => 'E02001441',
        '1PF' => 'E02001441',
        '1PG' => 'E02001441',
        '1PH' => 'E02001441',
        '1PJ' => 'E02001443',
        '1PL' => 'E02001441',
        '1PN' => 'E02001441',
        '1PP' => 'E02001441',
        '1PQ' => 'E02001441',
        '1PR' => 'E02001441',
        '1PS' => 'E02001443',
        '1PT' => 'E02001441',
        '1PU' => 'E02001441',
        '1PW' => 'E02001441',
        '1PX' => 'E02001441',
        '1PY' => 'E02001441',
        '1PZ' => 'E02001441',
        '1QA' => 'E02001441',
        '1QB' => 'E02001441',
        '1QD' => 'E02001441',
        '1QE' => 'E02001441',
        '1QF' => 'E02001441',
        '1QG' => 'E02001442',
        '1QH' => 'E02001442',
        '1QJ' => 'E02001442',
        '1QL' => 'E02001442',
        '1QN' => 'E02001441',
        '1QQ' => 'E02001441',
        '1WA' => 'E02001442',
        '1WB' => 'E02001442',
        '1WE' => 'E02001441',
        '1WF' => 'E02001441',
        '1WG' => 'E02001441',
        '1WH' => 'E02001442',
        '1WT' => 'E02001442',
        '1WU' => 'E02001442',
        '1WW' => 'E02001442',
        '1WX' => 'E02001442',
        '1WY' => 'E02001442',
        '1WZ' => 'E02001442',
        '1XN' => 'E02001441',
        '1XP' => 'E02001441',
        '1XQ' => 'E02001442',
        '1XR' => 'E02001441',
        '1XS' => 'E02001441',
        '1XT' => 'E02001441',
        '1XU' => 'E02001441',
        '1XW' => 'E02001441',
        '1XX' => 'E02001441',
        '1XY' => 'E02001441',
        '1XZ' => 'E02001441',
        '1YA' => 'E02001441',
        '1YB' => 'E02001441',
        '1YD' => 'E02001441',
        '1YE' => 'E02001442',
        '1YF' => 'E02001441',
        '1YG' => 'E02001441',
        '1YH' => 'E02001441',
        '1YJ' => 'E02001442',
        '1YN' => 'E02001441',
        '1YP' => 'E02001441',
        '1YQ' => 'E02001442',
        '1YR' => 'E02001441',
        '1YS' => 'E02001441',
        '1YT' => 'E02001441',
        '1YU' => 'E02001442',
        '1YW' => 'E02001441',
        '1YX' => 'E02001441',
        '1ZT' => 'E02001442',
        '2AA' => 'E02001442',
        '2DA' => 'E02001443',
        '2DB' => 'E02001443',
        '2DD' => 'E02001443',
        '2DE' => 'E02001443',
        '2DF' => 'E02001443',
        '2DG' => 'E02001443',
        '2DH' => 'E02001443',
        '2DJ' => 'E02001443',
        '2DL' => 'E02001443',
        '2DN' => 'E02001443',
        '2DP' => 'E02001443',
        '2DQ' => 'E02001443',
        '2DR' => 'E02001443',
        '2DS' => 'E02001443',
        '2DT' => 'E02001443',
        '2DU' => 'E02001443',
        '2DW' => 'E02001443',
        '2DX' => 'E02001443',
        '2DY' => 'E02001443',
        '2DZ' => 'E02001443',
        '2EA' => 'E02001441',
        '2EB' => 'E02001443',
        '2ED' => 'E02001443',
        '2EE' => 'E02001443',
        '2EF' => 'E02001443',
        '2EG' => 'E02001443',
        '2EH' => 'E02001443',
        '2EJ' => 'E02001443',
        '2EL' => 'E02001443',
        '2EN' => 'E02001443',
        '2EP' => 'E02001443',
        '2EQ' => 'E02001443',
        '2ER' => 'E02001443',
        '2ES' => 'E02001443',
        '2ET' => 'E02001443',
        '2EU' => 'E02001443',
        '2EW' => 'E02001443',
        '2EX' => 'E02001443',
        '2EY' => 'E02001443',
        '2EZ' => 'E02001443',
        '2FB' => 'E02001441',
        '2FD' => 'E02001443',
        '2FE' => 'E02001443',
        '2FF' => 'E02001441',
        '2FG' => 'E02001443',
        '2FH' => 'E02001443',
        '2FJ' => 'E02001443',
        '2FL' => 'E02001443',
        '2FN' => 'E02001443',
        '2FP' => 'E02001443',
        '2FQ' => 'E02001443',
        '2FR' => 'E02001443',
        '2FS' => 'E02001443',
        '2FW' => 'E02001443',
        '2FX' => 'E02001443',
        '2FY' => 'E02001443',
        '2FZ' => 'E02001443',
        '2HA' => 'E02001443',
        '2HB' => 'E02001443',
        '2HD' => 'E02001443',
        '2HE' => 'E02001443',
        '2HF' => 'E02001443',
        '2HG' => 'E02001443',
        '2HH' => 'E02001443',
        '2HJ' => 'E02001443',
        '2HL' => 'E02001443',
        '2HN' => 'E02001443',
        '2HP' => 'E02001443',
        '2HQ' => 'E02001443',
        '2HR' => 'E02001443',
        '2HS' => 'E02001443',
        '2HT' => 'E02001443',
        '2HU' => 'E02001443',
        '2HW' => 'E02001443',
        '2HX' => 'E02001443',
        '2HY' => 'E02001443',
        '2HZ' => 'E02001443',
        '2JA' => 'E02001443',
        '2JB' => 'E02001443',
        '2JD' => 'E02001443',
        '2JE' => 'E02001443',
        '2JF' => 'E02001443',
        '2JG' => 'E02001443',
        '2JH' => 'E02001443',
        '2JJ' => 'E02001443',
        '2JL' => 'E02001443',
        '2JN' => 'E02001441',
        '2JP' => 'E02001443',
        '2JQ' => 'E02001443',
        '2JR' => 'E02001443',
        '2JS' => 'E02001443',
        '2JT' => 'E02001443',
        '2JU' => 'E02001441',
        '2JW' => 'E02001441',
        '2JX' => 'E02001441',
        '2JY' => 'E02001441',
        '2JZ' => 'E02001441',
        '2LA' => 'E02001441',
        '2LB' => 'E02001441',
        '2LD' => 'E02001441',
        '2LE' => 'E02001443',
        '2LF' => 'E02001443',
        '2LG' => 'E02001443',
        '2LH' => 'E02001443',
        '2LJ' => 'E02001443',
        '2LL' => 'E02001443',
        '2LN' => 'E02001443',
        '2LP' => 'E02001443',
        '2LQ' => 'E02001443',
        '2LR' => 'E02001443',
        '2LS' => 'E02001443',
        '2LT' => 'E02001443',
        '2LU' => 'E02001443',
        '2LW' => 'E02001443',
        '2LX' => 'E02001443',
        '2LY' => 'E02001443',
        '2LZ' => 'E02001443',
        '2NA' => 'E02001443',
        '2NB' => 'E02001443',
        '2ND' => 'E02001443',
        '2NE' => 'E02001442',
        '2NF' => 'E02001442',
        '2NG' => 'E02001442',
        '2NH' => 'E02001442',
        '2NJ' => 'E02001443',
        '2NL' => 'E02001442',
        '2NN' => 'E02001443',
        '2NP' => 'E02001443',
        '2NQ' => 'E02001443',
        '2NR' => 'E02001443',
        '2NS' => 'E02001443',
        '2NT' => 'E02001442',
        '2NU' => 'E02001442',
        '2NW' => 'E02001443',
        '2NX' => 'E02001442',
        '2UW' => 'E02001442',
        '2UX' => 'E02001442',
        '2UY' => 'E02001442',
        '2UZ' => 'E02001442',
        '2WA' => 'E02001442',
        '2WB' => 'E02001442',
        '2WD' => 'E02001442',
        '2WE' => 'E02001442',
        '2WF' => 'E02001442',
        '2WG' => 'E02001442',
        '2WH' => 'E02001442',
        '2WJ' => 'E02001442',
        '2WL' => 'E02001442',
        '2WN' => 'E02001442',
        '2WP' => 'E02001442',
        '2WQ' => 'E02001442',
        '2WR' => 'E02001442',
        '2WS' => 'E02001442',
        '2WT' => 'E02001442',
        '2WU' => 'E02001442',
        '2WW' => 'E02001442',
        '2WX' => 'E02001442',
        '2WY' => 'E02001442',
        '2WZ' => 'E02001442',
        '2XA' => 'E02001442',
        '2XB' => 'E02001442',
        '2XD' => 'E02001442',
        '2XE' => 'E02001442',
        '2XF' => 'E02001442',
        '2YA' => 'E02001441',
        '2YB' => 'E02001441',
        '2YD' => 'E02001441',
        '2YE' => 'E02001441',
        '2YF' => 'E02001443',
        '2YG' => 'E02001443',
        '2YH' => 'E02001443',
        '2YJ' => 'E02001443',
        '2YN' => 'E02001443',
        '2YP' => 'E02001443',
        '2YQ' => 'E02001441',
        '2YR' => 'E02001441',
        '2YS' => 'E02001443',
        '2YT' => 'E02001443',
        '2YU' => 'E02001443',
        '2YW' => 'E02001443',
        '2YX' => 'E02001443',
        '2YY' => 'E02001443',
        '2YZ' => 'E02001443',
        '3AA' => 'E02001442',
        '3AB' => 'E02001442',
        '3AD' => 'E02001442',
        '3AE' => 'E02001442',
        '3HA' => 'E02001442',
        '3HB' => 'E02001442',
        '3HD' => 'E02001442',
        '3HE' => 'E02001442',
        '3HF' => 'E02001442',
        '3HG' => 'E02001442',
        '3HH' => 'E02001442',
        '3HJ' => 'E02001442',
        '3HL' => 'E02001442',
        '3HN' => 'E02001442',
        '3HP' => 'E02001442',
        '3HQ' => 'E02001442',
        '3HR' => 'E02001442',
        '3HS' => 'E02001442',
        '3HT' => 'E02001442',
        '3HU' => 'E02001442',
        '3HW' => 'E02001442',
        '3HX' => 'E02001442',
        '3HY' => 'E02001442',
        '3HZ' => 'E02001442',
        '3JA' => 'E02001442',
        '3JB' => 'E02001442',
        '3JD' => 'E02001442',
        '3JE' => 'E02001442',
        '3JF' => 'E02001441',
        '3JG' => 'E02001441',
        '3JH' => 'E02001442',
        '3JJ' => 'E02001441',
        '3JL' => 'E02001441',
        '3JN' => 'E02001441',
        '3JP' => 'E02001441',
        '3JQ' => 'E02001442',
        '3JR' => 'E02001441',
        '3JS' => 'E02001442',
        '3JT' => 'E02001442',
        '3JU' => 'E02001442',
        '3JW' => 'E02001441',
        '3JX' => 'E02001442',
        '3JY' => 'E02001442',
        '3JZ' => 'E02001442',
        '3LA' => 'E02001442',
        '3LB' => 'E02001442',
        '3LD' => 'E02001441',
        '3LE' => 'E02001442',
        '3LF' => 'E02001442',
        '3LG' => 'E02001442',
        '3LH' => 'E02001442',
        '3LJ' => 'E02001442',
        '3LL' => 'E02001441',
        '3LN' => 'E02001442',
        '3LP' => 'E02001442',
        '3LQ' => 'E02001442',
        '3LR' => 'E02001442',
        '3LS' => 'E02001442',
        '3LT' => 'E02001442',
        '3LU' => 'E02001442',
        '3LW' => 'E02001442',
        '3LX' => 'E02001442',
        '3LY' => 'E02001442',
        '3LZ' => 'E02001442',
        '3NA' => 'E02001442',
        '3NB' => 'E02001442',
        '3ND' => 'E02001442',
        '3NE' => 'E02001442',
        '3NF' => 'E02001442',
        '3NG' => 'E02001442',
        '3NH' => 'E02001442',
        '3NJ' => 'E02001442',
        '3NL' => 'E02001442',
        '3NN' => 'E02001442',
        '3NP' => 'E02001442',
        '3NQ' => 'E02001442',
        '3NR' => 'E02001442',
        '3NS' => 'E02001442',
        '3NT' => 'E02001442',
        '3NU' => 'E02001442',
        '3NW' => 'E02001442',
        '3NX' => 'E02001442',
        '3NY' => 'E02001442',
        '3NZ' => 'E02001442',
        '3PA' => 'E02001442',
        '3PB' => 'E02001442',
        '3PD' => 'E02001442',
        '3PE' => 'E02001442',
        '3PF' => 'E02001442',
        '3PG' => 'E02001442',
        '3PH' => 'E02001442',
        '3PJ' => 'E02001442',
        '3PL' => 'E02001442',
        '3PN' => 'E02001442',
        '3PP' => 'E02001442',
        '3PQ' => 'E02001442',
        '3PR' => 'E02001442',
        '3PS' => 'E02001442',
        '3PT' => 'E02001442',
        '3PU' => 'E02001442',
        '3PX' => 'E02001442',
        '3PY' => 'E02001442',
        '3QB' => 'E02001442',
        '3QD' => 'E02001442',
        '3QE' => 'E02001442',
        '3QF' => 'E02001442',
        '3QG' => 'E02001441',
        '3QH' => 'E02001442',
        '3QJ' => 'E02001442',
        '3QL' => 'E02001442',
        '3QN' => 'E02001442',
        '3QP' => 'E02001442',
        '3QQ' => 'E02001442',
        '3QR' => 'E02001442',
        '3QS' => 'E02001441',
        '3QT' => 'E02001441',
        '3QW' => 'E02001442',
        '3QX' => 'E02001442',
        '3QY' => 'E02001442',
        '3QZ' => 'E02001442',
        '3RA' => 'E02001442',
        '3RB' => 'E02001441',
        '3RD' => 'E02001442',
        '3RE' => 'E02001442',
        '3RF' => 'E02001442',
        '3RG' => 'E02001442',
        '3RH' => 'E02001442',
        '3RJ' => 'E02001442',
        '3RL' => 'E02001442',
        '3RN' => 'E02001442',
        '3RP' => 'E02001442',
        '3RQ' => 'E02001442',
        '3RR' => 'E02001442',
        '3RS' => 'E02001442',
        '3RT' => 'E02001442',
        '3RU' => 'E02001442',
        '3RW' => 'E02001441',
        '3RX' => 'E02001442',
        '3RY' => 'E02001442',
        '3RZ' => 'E02001442',
        '3WA' => 'E02001442',
        '3WB' => 'E02001442',
        '3WD' => 'E02001442',
        '3WE' => 'E02001442',
        '3WF' => 'E02001442',
        '3WG' => 'E02001442',
        '3WH' => 'E02001442',
        '3WP' => 'E02001442',
        '3WQ' => 'E02001442',
        '3WR' => 'E02001442',
        '3WS' => 'E02001442',
        '3WU' => 'E02001442',
        '3WW' => 'E02001442',
        '3WX' => 'E02001442',
        '3WY' => 'E02001442',
        '3WZ' => 'E02001442',
        '3YX' => 'E02001442',
        '3ZA' => 'E02001442',
        '4AA' => 'E02001443',
        '4AB' => 'E02001442',
        '4AD' => 'E02001442',
        '4AF' => 'E02001442',
        '4AG' => 'E02001442',
        '4AH' => 'E02001442',
        '4AJ' => 'E02001444',
        '4AL' => 'E02001442',
        '4AN' => 'E02001442',
        '4AP' => 'E02001442',
        '4AQ' => 'E02001442',
        '4AR' => 'E02001442',
        '4AS' => 'E02001442',
        '4AT' => 'E02001443',
        '4AU' => 'E02001443',
        '4AW' => 'E02001442',
        '4AX' => 'E02001442',
        '4AY' => 'E02001443',
        '4AZ' => 'E02001443',
        '4BA' => 'E02001443',
        '4BB' => 'E02001443',
        '4BD' => 'E02001443',
        '4BE' => 'E02001443',
        '4BG' => 'E02001443',
        '4BH' => 'E02001444',
        '4BJ' => 'E02001444',
        '4BL' => 'E02001443',
        '4BN' => 'E02001443',
        '4BP' => 'E02001443',
        '4BQ' => 'E02001443',
        '4BR' => 'E02001444',
        '4BS' => 'E02001443',
        '4BT' => 'E02001443',
        '4BU' => 'E02001444',
        '4BW' => 'E02001444',
        '4BX' => 'E02001443',
        '4BY' => 'E02001443',
        '4BZ' => 'E02001443',
        '4DA' => 'E02001443',
        '4DB' => 'E02001444',
        '4DD' => 'E02001444',
        '4DE' => 'E02001444',
        '4DF' => 'E02001443',
        '4DG' => 'E02001444',
        '4DH' => 'E02001443',
        '4DJ' => 'E02001443',
        '4DL' => 'E02001442',
        '4DN' => 'E02001442',
        '4DP' => 'E02001442',
        '4DQ' => 'E02001444',
        '4DR' => 'E02001442',
        '4DS' => 'E02001442',
        '4DT' => 'E02001442',
        '4DU' => 'E02001442',
        '4DX' => 'E02001442',
        '4DY' => 'E02001442',
        '4DZ' => 'E02001442',
        '4EA' => 'E02001442',
        '4ED' => 'E02001442',
        '4EE' => 'E02001442',
        '4EF' => 'E02001442',
        '4EG' => 'E02001444',
        '4EH' => 'E02001444',
        '4EJ' => 'E02001444',
        '4EL' => 'E02001444',
        '4EN' => 'E02001444',
        '4EP' => 'E02001444',
        '4EQ' => 'E02001444',
        '4ER' => 'E02001444',
        '4ES' => 'E02001444',
        '4ET' => 'E02001444',
        '4EU' => 'E02001444',
        '4EW' => 'E02001444',
        '4EX' => 'E02001444',
        '4EY' => 'E02001444',
        '4EZ' => 'E02001444',
        '4FA' => 'E02001442',
        '4FB' => 'E02001442',
        '4HA' => 'E02001444',
        '4HB' => 'E02001444',
        '4HD' => 'E02001444',
        '4HE' => 'E02001444',
        '4HF' => 'E02001444',
        '4HG' => 'E02001444',
        '4HH' => 'E02001444',
        '4HJ' => 'E02001444',
        '4HL' => 'E02001444',
        '4HN' => 'E02001442',
        '4HP' => 'E02001444',
        '4HQ' => 'E02001444',
        '4HR' => 'E02001442',
        '4HS' => 'E02001442',
        '4HT' => 'E02001443',
        '4HU' => 'E02001442',
        '4HX' => 'E02001444',
        '4HY' => 'E02001443',
        '4HZ' => 'E02001444',
        '4JA' => 'E02001444',
        '4JF' => 'E02001444',
        '4JG' => 'E02001444',
        '4JP' => 'E02001444',
        '4JQ' => 'E02001444',
        '4JR' => 'E02001444',
        '4JS' => 'E02001442',
        '4JT' => 'E02001442',
        '4JU' => 'E02001442',
        '4JW' => 'E02001444',
        '4JX' => 'E02001442',
        '4JY' => 'E02001444',
        '4JZ' => 'E02001444',
        '4LA' => 'E02001442',
        '4LB' => 'E02001442',
        '4LD' => 'E02001444',
        '4LE' => 'E02001444',
        '4LF' => 'E02001444',
        '4LG' => 'E02001444',
        '4LH' => 'E02001442',
        '4LQ' => 'E02001442',
        '4WA' => 'E02001442',
        '4WB' => 'E02001442',
        '4WD' => 'E02001442',
        '4WE' => 'E02001442',
        '4WF' => 'E02001442',
        '4WG' => 'E02001442',
        '4WH' => 'E02001442',
        '4WJ' => 'E02001442',
        '4WL' => 'E02001442',
        '4WN' => 'E02001442',
        '4WP' => 'E02001442',
        '4WQ' => 'E02001442',
        '4WR' => 'E02001442',
        '4WS' => 'E02001442',
        '4WT' => 'E02001442',
        '4WU' => 'E02001442',
        '4WW' => 'E02001442',
        '4WX' => 'E02001442',
        '4WY' => 'E02001442',
        '4WZ' => 'E02001442',
        '4XA' => 'E02001442',
        '4YA' => 'E02001442',
        '4YW' => 'E02001442',
        '5AA' => 'E02005306',
        '5AB' => 'E02005306',
        '5AD' => 'E02005306',
        '5AE' => 'E02005306',
        '5AF' => 'E02005306',
        '5AG' => 'E02005306',
        '5AH' => 'E02005306',
        '5AJ' => 'E02005306',
        '5AL' => 'E02005306',
        '5AN' => 'E02005306',
        '5AQ' => 'E02005306',
        '5WA' => 'E02001442',
        '5WZ' => 'E02001442',
        '6AA' => 'E02001444',
        '6AB' => 'E02001444',
        '6AD' => 'E02001444',
        '6AE' => 'E02001444',
        '6AF' => 'E02001444',
        '6AG' => 'E02001444',
        '6AH' => 'E02001444',
        '6AJ' => 'E02001444',
        '6AL' => 'E02001444',
        '6AN' => 'E02001444',
        '6AP' => 'E02001443',
        '6AQ' => 'E02001444',
        '6AR' => 'E02001443',
        '6AS' => 'E02001443',
        '6AT' => 'E02001443',
        '6AU' => 'E02001444',
        '6AW' => 'E02001444',
        '6AX' => 'E02001444',
        '6AY' => 'E02001444',
        '6AZ' => 'E02001444',
        '6BA' => 'E02001444',
        '6BB' => 'E02001444',
        '6BD' => 'E02001444',
        '6BE' => 'E02001444',
        '6BF' => 'E02001444',
        '6BG' => 'E02001444',
        '6BH' => 'E02001444',
        '6BJ' => 'E02001444',
        '6BL' => 'E02001444',
        '6BN' => 'E02001444',
        '6BP' => 'E02001444',
        '6BQ' => 'E02001444',
        '6BR' => 'E02001444',
        '6BS' => 'E02001444',
        '6BT' => 'E02001444',
        '6BU' => 'E02001444',
        '6BW' => 'E02001444',
        '6BX' => 'E02001444',
        '6BY' => 'E02001444',
        '6BZ' => 'E02001444',
        '6DA' => 'E02001444',
        '6DB' => 'E02001444',
        '6DD' => 'E02001444',
        '6DE' => 'E02001444',
        '6DF' => 'E02001444',
        '6DG' => 'E02001444',
        '6DH' => 'E02001444',
        '6DJ' => 'E02001444',
        '6DL' => 'E02001444',
        '6DN' => 'E02001444',
        '6DP' => 'E02001444',
        '6DQ' => 'E02001444',
        '6DR' => 'E02001444',
        '6DS' => 'E02001444',
        '6DT' => 'E02001444',
        '6DU' => 'E02001443',
        '6DW' => 'E02001444',
        '6DX' => 'E02001444',
        '6DY' => 'E02001443',
        '6DZ' => 'E02001444',
        '6EA' => 'E02001444',
        '6EB' => 'E02001444',
        '6ED' => 'E02001444',
        '6EE' => 'E02001443',
        '6EF' => 'E02001443',
        '6EG' => 'E02001443',
        '6EH' => 'E02001444',
        '6EJ' => 'E02001443',
        '6EL' => 'E02001443',
        '6EN' => 'E02001443',
        '6EP' => 'E02001443',
        '6EQ' => 'E02001443',
        '6ER' => 'E02001443',
        '6ES' => 'E02001443',
        '6ET' => 'E02001443',
        '6EU' => 'E02001444',
        '6EW' => 'E02001443',
        '6EX' => 'E02001444',
        '6EY' => 'E02001444',
        '6EZ' => 'E02001444',
        '6FA' => 'E02001444',
        '6FB' => 'E02001444',
        '6HA' => 'E02001444',
        '6HB' => 'E02001444',
        '6HD' => 'E02001444',
        '6HE' => 'E02001444',
        '6HF' => 'E02001444',
        '6HG' => 'E02001444',
        '6HH' => 'E02001444',
        '6HJ' => 'E02001444',
        '6HL' => 'E02001444',
        '6HN' => 'E02001444',
        '6HP' => 'E02001442',
        '6HQ' => 'E02001444',
        '6HR' => 'E02001442',
        '6HW' => 'E02001444',
        '6WR' => 'E02001442',
        '6WS' => 'E02001442',
        '6WT' => 'E02001442',
        '6WU' => 'E02001442',
        '6WW' => 'E02001442',
        '6WX' => 'E02001442',
        '6WY' => 'E02001442',
        '6WZ' => 'E02001444',
        '7AA' => 'E02001442',
        '7AD' => 'E02001441',
        '7AE' => 'E02001441',
        '7AF' => 'E02001441',
        '7AG' => 'E02001441',
        '7AH' => 'E02001441',
        '7AJ' => 'E02001441',
        '7AL' => 'E02001441',
        '7AN' => 'E02001441',
        '7AP' => 'E02001441',
        '7AQ' => 'E02001441',
        '7AR' => 'E02001441',
        '7AS' => 'E02001441',
        '7AT' => 'E02001441',
        '7AU' => 'E02001441',
        '7AW' => 'E02001441',
        '7AX' => 'E02001441',
        '7AY' => 'E02001441',
        '7AZ' => 'E02001441',
        '7BA' => 'E02001441',
        '7BB' => 'E02001441',
        '7BD' => 'E02001441',
        '7BE' => 'E02001441',
        '7BF' => 'E02001442',
        '7BG' => 'E02001442',
        '7BH' => 'E02001441',
        '7BJ' => 'E02001441',
        '7BL' => 'E02001442',
        '7BN' => 'E02001442',
        '7BP' => 'E02001442',
        '7BQ' => 'E02001442',
        '7BR' => 'E02001442',
        '7BS' => 'E02001441',
        '7BT' => 'E02001441',
        '7BU' => 'E02001441',
        '7BW' => 'E02001442',
        '7BX' => 'E02001441',
        '7BY' => 'E02001441',
        '7BZ' => 'E02001441',
        '7DA' => 'E02001441',
        '7DB' => 'E02001441',
        '7DD' => 'E02001441',
        '7DE' => 'E02001442',
        '7DF' => 'E02001442',
        '7DG' => 'E02001442',
        '7DH' => 'E02001441',
        '7DJ' => 'E02001442',
        '7DL' => 'E02001441',
        '7DN' => 'E02001442',
        '7DP' => 'E02001442',
        '7DQ' => 'E02001442',
        '7DR' => 'E02001441',
        '7DS' => 'E02001441',
        '7DT' => 'E02001441',
        '7DU' => 'E02001441',
        '7DW' => 'E02001441',
        '7DX' => 'E02001441',
        '7DY' => 'E02001441',
        '7DZ' => 'E02001441',
        '7EA' => 'E02001441',
        '7EB' => 'E02001442',
        '7ED' => 'E02001442',
        '7EE' => 'E02001442',
        '7EF' => 'E02001442',
        '7EG' => 'E02001442',
        '7EH' => 'E02001441',
        '7EJ' => 'E02001441',
        '7EL' => 'E02001441',
        '7EN' => 'E02001441',
        '7EP' => 'E02001441',
        '7EQ' => 'E02001442',
        '7ER' => 'E02001441',
        '7ES' => 'E02001441',
        '7ET' => 'E02001441',
        '7EU' => 'E02001441',
        '7EW' => 'E02001442',
        '7EX' => 'E02001441',
        '7EY' => 'E02001441',
        '7EZ' => 'E02001441',
        '7FD' => 'E02001442',
        '7HA' => 'E02001441',
        '7HB' => 'E02001441',
        '7HD' => 'E02001441',
        '7HE' => 'E02001441',
        '7HF' => 'E02001441',
        '7HG' => 'E02001441',
        '7HH' => 'E02001441',
        '7HJ' => 'E02001441',
        '7HL' => 'E02001441',
        '7HN' => 'E02001441',
        '7HP' => 'E02001441',
        '7HQ' => 'E02001441',
        '7HR' => 'E02001442',
        '7HS' => 'E02001442',
        '7HT' => 'E02001442',
        '7HW' => 'E02001441',
        '7HX' => 'E02001441',
        '7HY' => 'E02001441',
        '7HZ' => 'E02001441',
        '7JA' => 'E02001442',
        '7JB' => 'E02001442',
        '7JD' => 'E02001441',
        '7JE' => 'E02001441',
        '7JF' => 'E02001441',
        '7JG' => 'E02001442',
        '7JH' => 'E02001441',
        '7JJ' => 'E02001441',
        '7JL' => 'E02001441',
        '7JN' => 'E02001441',
        '7JP' => 'E02001441',
        '7JQ' => 'E02001442',
        '7JR' => 'E02001441',
        '7JS' => 'E02001441',
        '7JT' => 'E02001441',
        '7JU' => 'E02001441',
        '7JW' => 'E02001441',
        '7JX' => 'E02001441',
        '7JY' => 'E02001442',
        '7JZ' => 'E02001442',
        '7LA' => 'E02001442',
        '7LB' => 'E02001441',
        '7WA' => 'E02001441',
        '7WB' => 'E02001442',
        '7WD' => 'E02001442',
        '7WE' => 'E02001442',
        '7WF' => 'E02001442',
        '7WG' => 'E02001442',
        '7WH' => 'E02001442',
        '7WJ' => 'E02001442',
        '7WQ' => 'E02001442',
        '7WR' => 'E02001442',
        '7WS' => 'E02001442',
        '7WT' => 'E02001442',
        '7WU' => 'E02001442',
        '7WW' => 'E02001442',
        '7WX' => 'E02001442',
        '7WY' => 'E02001442',
        '7WZ' => 'E02001442',
        '7YX' => 'E02001442',
        '7ZX' => 'E02001442',
        '8BA' => 'E02001444',
        '8BB' => 'E02001444',
        '8BD' => 'E02001444',
        '8BE' => 'E02001444',
        '8BG' => 'E02001444',
        '8BH' => 'E02001444',
        '8BJ' => 'E02001444',
        '8BL' => 'E02001444',
        '8BN' => 'E02001444',
        '8BP' => 'E02001444',
        '8BQ' => 'E02001442',
        '8BR' => 'E02001444',
        '8BS' => 'E02001444',
        '8BT' => 'E02001444',
        '8BU' => 'E02001442',
        '8BW' => 'E02001444',
        '8BX' => 'E02001442',
        '8BY' => 'E02001444',
        '8BZ' => 'E02001444',
        '8DA' => 'E02001442',
        '8DB' => 'E02001442',
        '8DD' => 'E02001442',
        '8DE' => 'E02001442',
        '8DF' => 'E02001442',
        '8DG' => 'E02001442',
        '8DH' => 'E02001442',
        '8DJ' => 'E02001442',
        '8DL' => 'E02001444',
        '8DN' => 'E02001444',
        '8DP' => 'E02001444',
        '8DQ' => 'E02001442',
        '8DR' => 'E02001444',
        '8DS' => 'E02001444',
        '8DT' => 'E02001444',
        '8DU' => 'E02001444',
        '8DW' => 'E02001444',
        '8DX' => 'E02001444',
        '8DY' => 'E02001444',
        '8DZ' => 'E02001444',
        '8EA' => 'E02001444',
        '8EB' => 'E02001444',
        '8ED' => 'E02001444',
        '8EE' => 'E02001444',
        '8EF' => 'E02001444',
        '8EG' => 'E02001444',
        '8EH' => 'E02001444',
        '8EN' => 'E02001444',
        '8EQ' => 'E02001444',
        '8ER' => 'E02001444',
        '8ES' => 'E02001444',
        '8ET' => 'E02001444',
        '8EW' => 'E02001444',
        '8EY' => 'E02001442',
        '8EZ' => 'E02001442',
        '8HA' => 'E02001444',
        '8HB' => 'E02001444',
        '8HD' => 'E02001442',
        '8HE' => 'E02001444',
        '8HF' => 'E02001442',
        '8HG' => 'E02001442',
        '8HH' => 'E02001444',
        '8HJ' => 'E02001442',
        '8HL' => 'E02001444',
        '8HN' => 'E02001442',
        '8HQ' => 'E02001444',
        '8RP' => 'E02001443',
        '8WA' => 'E02001442',
        '8WT' => 'E02001442',
        '8WU' => 'E02001442',
        '8WW' => 'E02001442',
        '8WX' => 'E02001442',
        '8WY' => 'E02001442',
        '8WZ' => 'E02001442',
        '9BA' => 'E02005306',
        '9BB' => 'E02005306',
        '9BD' => 'E02005306',
        '9BE' => 'E02005306',
        '9BG' => 'E02005306',
        '9BQ' => 'E02005306',
        '9WZ' => 'E02001442',
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
