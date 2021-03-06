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
final class HD3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AB' => 'E02002300',
        '2AD' => 'E02002300',
        '2AE' => 'E02002300',
        '2AG' => 'E02002300',
        '3AA' => 'E02002304',
        '3AB' => 'E02002304',
        '3AD' => 'E02002304',
        '3AE' => 'E02002304',
        '3AF' => 'E02002304',
        '3AG' => 'E02002304',
        '3AH' => 'E02002304',
        '3AJ' => 'E02002304',
        '3AL' => 'E02002304',
        '3AN' => 'E02002304',
        '3AP' => 'E02002304',
        '3AQ' => 'E02002304',
        '3AR' => 'E02002304',
        '3AS' => 'E02002303',
        '3AT' => 'E02002304',
        '3AU' => 'E02002303',
        '3AW' => 'E02002303',
        '3AX' => 'E02002303',
        '3AY' => 'E02002303',
        '3AZ' => 'E02002303',
        '3BA' => 'E02002303',
        '3BB' => 'E02002303',
        '3BD' => 'E02002303',
        '3BE' => 'E02002297',
        '3BG' => 'E02002303',
        '3BH' => 'E02002303',
        '3BJ' => 'E02002303',
        '3BL' => 'E02002303',
        '3BN' => 'E02002303',
        '3BP' => 'E02002303',
        '3BQ' => 'E02002303',
        '3BR' => 'E02002297',
        '3BS' => 'E02002297',
        '3BT' => 'E02002297',
        '3BU' => 'E02002297',
        '3BW' => 'E02002300',
        '3BX' => 'E02002297',
        '3BY' => 'E02002297',
        '3BZ' => 'E02002303',
        '3DA' => 'E02002304',
        '3DB' => 'E02002304',
        '3DD' => 'E02002304',
        '3DE' => 'E02002304',
        '3DF' => 'E02002303',
        '3DG' => 'E02002303',
        '3DH' => 'E02002303',
        '3DJ' => 'E02002303',
        '3DL' => 'E02002303',
        '3DN' => 'E02002303',
        '3DP' => 'E02002303',
        '3DQ' => 'E02002303',
        '3DR' => 'E02002303',
        '3DT' => 'E02002303',
        '3DU' => 'E02002303',
        '3DW' => 'E02002303',
        '3DX' => 'E02002303',
        '3DY' => 'E02002303',
        '3DZ' => 'E02002303',
        '3EA' => 'E02002303',
        '3EB' => 'E02002303',
        '3ED' => 'E02002303',
        '3EE' => 'E02002303',
        '3EF' => 'E02002303',
        '3EG' => 'E02002300',
        '3EH' => 'E02002300',
        '3EJ' => 'E02002300',
        '3EL' => 'E02002300',
        '3EN' => 'E02002303',
        '3EP' => 'E02002303',
        '3EQ' => 'E02002300',
        '3ER' => 'E02002303',
        '3ES' => 'E02002303',
        '3ET' => 'E02002303',
        '3EU' => 'E02002303',
        '3EW' => 'E02002303',
        '3EX' => 'E02002303',
        '3EY' => 'E02002303',
        '3EZ' => 'E02002303',
        '3FA' => 'E02002306',
        '3FB' => 'E02002269',
        '3FD' => 'E02002269',
        '3FE' => 'E02002306',
        '3FF' => 'E02002269',
        '3FG' => 'E02002306',
        '3FH' => 'E02002306',
        '3FJ' => 'E02002306',
        '3FL' => 'E02002269',
        '3FN' => 'E02002306',
        '3FP' => 'E02002269',
        '3FQ' => 'E02002306',
        '3FR' => 'E02002270',
        '3FS' => 'E02002300',
        '3FT' => 'E02002322',
        '3FU' => 'E02002269',
        '3FW' => 'E02002322',
        '3FX' => 'E02002300',
        '3FY' => 'E02002306',
        '3FZ' => 'E02002306',
        '3GA' => 'E02002269',
        '3GB' => 'E02002306',
        '3GD' => 'E02002268',
        '3GE' => 'E02002303',
        '3GF' => 'E02002269',
        '3GG' => 'E02002300',
        '3GH' => 'E02002300',
        '3GJ' => 'E02002300',
        '3GL' => 'E02002300',
        '3GN' => 'E02002300',
        '3GP' => 'E02002300',
        '3GQ' => 'E02002306',
        '3GR' => 'E02002300',
        '3GS' => 'E02002300',
        '3GT' => 'E02002300',
        '3GU' => 'E02002300',
        '3GW' => 'E02002300',
        '3GX' => 'E02002306',
        '3GY' => 'E02002300',
        '3GZ' => 'E02002300',
        '3HA' => 'E02002303',
        '3HB' => 'E02002303',
        '3HD' => 'E02002303',
        '3HE' => 'E02002303',
        '3HF' => 'E02002300',
        '3HG' => 'E02002269',
        '3HH' => 'E02002300',
        '3HJ' => 'E02002300',
        '3HL' => 'E02002303',
        '3HN' => 'E02002297',
        '3HP' => 'E02002270',
        '3HQ' => 'E02002297',
        '3HR' => 'E02002303',
        '3HS' => 'E02002303',
        '3HT' => 'E02002300',
        '3HU' => 'E02002300',
        '3HW' => 'E02002303',
        '3HX' => 'E02002300',
        '3HY' => 'E02002300',
        '3HZ' => 'E02002300',
        '3JA' => 'E02002300',
        '3JB' => 'E02002300',
        '3JD' => 'E02002300',
        '3JE' => 'E02002300',
        '3JF' => 'E02002300',
        '3JG' => 'E02002300',
        '3JH' => 'E02002300',
        '3JJ' => 'E02002300',
        '3JL' => 'E02002297',
        '3JN' => 'E02002300',
        '3JP' => 'E02002300',
        '3JQ' => 'E02002300',
        '3JR' => 'E02002300',
        '3JS' => 'E02002297',
        '3JT' => 'E02002297',
        '3JU' => 'E02002300',
        '3JW' => 'E02002300',
        '3JX' => 'E02002300',
        '3JY' => 'E02002300',
        '3JZ' => 'E02002300',
        '3LA' => 'E02002300',
        '3LB' => 'E02002300',
        '3LD' => 'E02002300',
        '3LF' => 'E02002300',
        '3LG' => 'E02002300',
        '3LH' => 'E02002297',
        '3LJ' => 'E02002300',
        '3LL' => 'E02002303',
        '3LN' => 'E02002303',
        '3LP' => 'E02002303',
        '3LQ' => 'E02002297',
        '3LR' => 'E02002303',
        '3LS' => 'E02002303',
        '3LT' => 'E02002297',
        '3LU' => 'E02002303',
        '3LW' => 'E02002297',
        '3LX' => 'E02002300',
        '3LY' => 'E02002297',
        '3LZ' => 'E02002300',
        '3NA' => 'E02002300',
        '3NB' => 'E02002300',
        '3ND' => 'E02002297',
        '3NE' => 'E02002297',
        '3NF' => 'E02002297',
        '3NG' => 'E02002297',
        '3NH' => 'E02002297',
        '3NJ' => 'E02002297',
        '3NL' => 'E02002300',
        '3NN' => 'E02002300',
        '3NP' => 'E02002300',
        '3NQ' => 'E02002297',
        '3NR' => 'E02002300',
        '3NS' => 'E02002297',
        '3NT' => 'E02002300',
        '3NU' => 'E02002297',
        '3NW' => 'E02002300',
        '3NX' => 'E02002297',
        '3NY' => 'E02002303',
        '3NZ' => 'E02002303',
        '3PA' => 'E02002303',
        '3PB' => 'E02002303',
        '3PD' => 'E02002303',
        '3PE' => 'E02002300',
        '3PF' => 'E02002300',
        '3PG' => 'E02002303',
        '3PH' => 'E02002297',
        '3PJ' => 'E02002303',
        '3PL' => 'E02002300',
        '3PN' => 'E02002300',
        '3PP' => 'E02002303',
        '3PQ' => 'E02002300',
        '3PR' => 'E02002308',
        '3PS' => 'E02002303',
        '3PT' => 'E02002303',
        '3PU' => 'E02002308',
        '3PW' => 'E02002300',
        '3PX' => 'E02002308',
        '3PY' => 'E02002308',
        '3PZ' => 'E02002300',
        '3QA' => 'E02002308',
        '3QB' => 'E02002300',
        '3QD' => 'E02002300',
        '3QE' => 'E02002300',
        '3QF' => 'E02002300',
        '3QG' => 'E02002300',
        '3QH' => 'E02002300',
        '3QJ' => 'E02002300',
        '3QL' => 'E02002297',
        '3QN' => 'E02002297',
        '3QP' => 'E02002297',
        '3QQ' => 'E02002297',
        '3QR' => 'E02002297',
        '3QS' => 'E02002300',
        '3QT' => 'E02002300',
        '3QU' => 'E02002300',
        '3QW' => 'E02002297',
        '3QX' => 'E02002300',
        '3QY' => 'E02002300',
        '3QZ' => 'E02002300',
        '3RA' => 'E02002300',
        '3RB' => 'E02002300',
        '3RD' => 'E02002300',
        '3RE' => 'E02002300',
        '3RF' => 'E02002300',
        '3RG' => 'E02002297',
        '3RH' => 'E02002268',
        '3RJ' => 'E02002300',
        '3RL' => 'E02002300',
        '3RN' => 'E02002268',
        '3RP' => 'E02002268',
        '3RQ' => 'E02002300',
        '3RR' => 'E02002300',
        '3RS' => 'E02002300',
        '3RT' => 'E02002268',
        '3RU' => 'E02002268',
        '3RW' => 'E02002268',
        '3RX' => 'E02002268',
        '3RY' => 'E02002268',
        '3RZ' => 'E02002268',
        '3SA' => 'E02002268',
        '3SB' => 'E02002300',
        '3SD' => 'E02002300',
        '3SE' => 'E02002306',
        '3SF' => 'E02002306',
        '3SG' => 'E02002300',
        '3SH' => 'E02002300',
        '3SJ' => 'E02002300',
        '3SL' => 'E02002300',
        '3SN' => 'E02002300',
        '3SP' => 'E02002300',
        '3SQ' => 'E02002306',
        '3SR' => 'E02002300',
        '3SS' => 'E02002300',
        '3ST' => 'E02002300',
        '3SU' => 'E02002300',
        '3SW' => 'E02002300',
        '3SX' => 'E02002300',
        '3SY' => 'E02002300',
        '3SZ' => 'E02002300',
        '3TA' => 'E02002306',
        '3TB' => 'E02002300',
        '3TD' => 'E02002300',
        '3TE' => 'E02002300',
        '3TF' => 'E02002306',
        '3TG' => 'E02002306',
        '3TH' => 'E02002306',
        '3TJ' => 'E02002306',
        '3TL' => 'E02002300',
        '3TN' => 'E02002300',
        '3TP' => 'E02002306',
        '3TQ' => 'E02002300',
        '3TR' => 'E02002306',
        '3TS' => 'E02002306',
        '3TT' => 'E02002306',
        '3TU' => 'E02002300',
        '3TW' => 'E02002300',
        '3TX' => 'E02002300',
        '3TY' => 'E02002300',
        '3TZ' => 'E02002300',
        '3UA' => 'E02002300',
        '3UB' => 'E02002300',
        '3UD' => 'E02002300',
        '3UE' => 'E02002300',
        '3UF' => 'E02002300',
        '3UG' => 'E02002300',
        '3UH' => 'E02002306',
        '3UJ' => 'E02002300',
        '3UL' => 'E02002306',
        '3UN' => 'E02002306',
        '3UP' => 'E02002306',
        '3UQ' => 'E02002306',
        '3UR' => 'E02002300',
        '3US' => 'E02002308',
        '3UT' => 'E02002306',
        '3UU' => 'E02002306',
        '3UW' => 'E02002300',
        '3UX' => 'E02002306',
        '3UY' => 'E02002306',
        '3UZ' => 'E02002306',
        '3WA' => 'E02002300',
        '3WB' => 'E02002303',
        '3WD' => 'E02002300',
        '3WE' => 'E02002300',
        '3WF' => 'E02002300',
        '3WG' => 'E02002300',
        '3WH' => 'E02002300',
        '3WJ' => 'E02002303',
        '3WL' => 'E02002300',
        '3WN' => 'E02002300',
        '3WP' => 'E02002306',
        '3WQ' => 'E02002300',
        '3WR' => 'E02002300',
        '3WS' => 'E02002306',
        '3WT' => 'E02002300',
        '3WU' => 'E02002300',
        '3WW' => 'E02002306',
        '3WX' => 'E02002300',
        '3WY' => 'E02002300',
        '3WZ' => 'E02002300',
        '3XA' => 'E02002306',
        '3XB' => 'E02002306',
        '3XD' => 'E02002306',
        '3XE' => 'E02002306',
        '3XF' => 'E02002306',
        '3XG' => 'E02002306',
        '3XH' => 'E02002306',
        '3XJ' => 'E02002306',
        '3XL' => 'E02002306',
        '3XN' => 'E02002306',
        '3XP' => 'E02002306',
        '3XQ' => 'E02002306',
        '3XR' => 'E02002306',
        '3XS' => 'E02002306',
        '3XT' => 'E02002300',
        '3XU' => 'E02002306',
        '3XW' => 'E02002306',
        '3XX' => 'E02002306',
        '3XY' => 'E02002306',
        '3XZ' => 'E02002306',
        '3YA' => 'E02002306',
        '3YB' => 'E02002306',
        '3YD' => 'E02002300',
        '3YE' => 'E02002306',
        '3YF' => 'E02002300',
        '3YG' => 'E02002306',
        '3YH' => 'E02002269',
        '3YJ' => 'E02002306',
        '3YL' => 'E02002306',
        '3YN' => 'E02002306',
        '3YP' => 'E02002306',
        '3YQ' => 'E02002306',
        '3YR' => 'E02002306',
        '3YS' => 'E02002306',
        '3YT' => 'E02002306',
        '3YU' => 'E02002269',
        '3YW' => 'E02002306',
        '3YX' => 'E02002269',
        '3YY' => 'E02002269',
        '3YZ' => 'E02002306',
        '3ZA' => 'E02002300',
        '3ZB' => 'E02002299',
        '3ZD' => 'E02002300',
        '3ZE' => 'E02002300',
        '3ZF' => 'E02002303',
        '3ZG' => 'E02002300',
        '3ZH' => 'E02002300',
        '3ZJ' => 'E02002300',
        '3ZL' => 'E02002300',
        '3ZN' => 'E02002300',
        '3ZP' => 'E02002300',
        '3ZQ' => 'E02002300',
        '3ZR' => 'E02002300',
        '3ZS' => 'E02002297',
        '3ZT' => 'E02002300',
        '3ZU' => 'E02002299',
        '3ZW' => 'E02002300',
        '3ZX' => 'E02002300',
        '3ZY' => 'E02002300',
        '3ZZ' => 'E02002303',
        '4AA' => 'E02002303',
        '4AB' => 'E02002303',
        '4AD' => 'E02002308',
        '4AE' => 'E02002303',
        '4AF' => 'E02002303',
        '4AG' => 'E02002303',
        '4AH' => 'E02002303',
        '4AJ' => 'E02002303',
        '4AL' => 'E02002303',
        '4AN' => 'E02002303',
        '4AP' => 'E02002303',
        '4AQ' => 'E02002303',
        '4AR' => 'E02002303',
        '4AS' => 'E02002303',
        '4AT' => 'E02002303',
        '4AU' => 'E02002303',
        '4AW' => 'E02002303',
        '4AX' => 'E02002303',
        '4AY' => 'E02002303',
        '4AZ' => 'E02002303',
        '4BA' => 'E02002303',
        '4BB' => 'E02002303',
        '4BD' => 'E02002303',
        '4BE' => 'E02002303',
        '4BG' => 'E02002309',
        '4BH' => 'E02002309',
        '4BJ' => 'E02002309',
        '4BL' => 'E02002303',
        '4BN' => 'E02002303',
        '4BP' => 'E02002303',
        '4BQ' => 'E02002303',
        '4BR' => 'E02002303',
        '4BS' => 'E02002303',
        '4BT' => 'E02002303',
        '4BU' => 'E02002303',
        '4BW' => 'E02002303',
        '4BX' => 'E02002303',
        '4BY' => 'E02002303',
        '4BZ' => 'E02002303',
        '4DA' => 'E02002308',
        '4DB' => 'E02002303',
        '4DD' => 'E02002303',
        '4DE' => 'E02002303',
        '4DF' => 'E02002303',
        '4DH' => 'E02002303',
        '4DJ' => 'E02002303',
        '4DL' => 'E02002303',
        '4DN' => 'E02002303',
        '4DP' => 'E02002303',
        '4DQ' => 'E02002303',
        '4DR' => 'E02002308',
        '4DS' => 'E02002308',
        '4DT' => 'E02002308',
        '4DU' => 'E02002308',
        '4DW' => 'E02002303',
        '4DX' => 'E02002308',
        '4DY' => 'E02002308',
        '4DZ' => 'E02002308',
        '4EA' => 'E02002308',
        '4EB' => 'E02002308',
        '4ED' => 'E02002308',
        '4EE' => 'E02002308',
        '4EF' => 'E02002309',
        '4EG' => 'E02002303',
        '4EH' => 'E02002308',
        '4EJ' => 'E02002308',
        '4EL' => 'E02002315',
        '4EN' => 'E02002308',
        '4EP' => 'E02002309',
        '4EQ' => 'E02002308',
        '4ER' => 'E02002309',
        '4ES' => 'E02002303',
        '4ET' => 'E02002309',
        '4EU' => 'E02002309',
        '4EW' => 'E02002315',
        '4EX' => 'E02002308',
        '4EY' => 'E02002308',
        '4EZ' => 'E02002309',
        '4FA' => 'E02002308',
        '4FB' => 'E02002308',
        '4FD' => 'E02002308',
        '4FE' => 'E02002308',
        '4FF' => 'E02002308',
        '4FG' => 'E02002308',
        '4FH' => 'E02002308',
        '4FJ' => 'E02002303',
        '4FL' => 'E02002303',
        '4FN' => 'E02002303',
        '4FP' => 'E02002303',
        '4FQ' => 'E02002308',
        '4FR' => 'E02002308',
        '4FS' => 'E02002308',
        '4FT' => 'E02002308',
        '4FU' => 'E02002311',
        '4FW' => 'E02002303',
        '4FX' => 'E02002308',
        '4FY' => 'E02002308',
        '4FZ' => 'E02002308',
        '4GA' => 'E02002308',
        '4GB' => 'E02002303',
        '4GD' => 'E02002303',
        '4GE' => 'E02002303',
        '4GF' => 'E02002303',
        '4GG' => 'E02002303',
        '4GH' => 'E02002308',
        '4GJ' => 'E02002308',
        '4GL' => 'E02002308',
        '4GN' => 'E02002308',
        '4GP' => 'E02002308',
        '4GQ' => 'E02002308',
        '4GR' => 'E02002308',
        '4GS' => 'E02002308',
        '4GT' => 'E02002308',
        '4GU' => 'E02002315',
        '4GW' => 'E02002308',
        '4GX' => 'E02002300',
        '4GY' => 'E02002308',
        '4GZ' => 'E02002315',
        '4HA' => 'E02002309',
        '4HB' => 'E02002308',
        '4HD' => 'E02002308',
        '4HE' => 'E02002308',
        '4HF' => 'E02002308',
        '4HG' => 'E02002309',
        '4HH' => 'E02002308',
        '4HJ' => 'E02002308',
        '4HL' => 'E02002308',
        '4HP' => 'E02002308',
        '4HQ' => 'E02002308',
        '4HR' => 'E02002308',
        '4HS' => 'E02002308',
        '4HT' => 'E02002315',
        '4HU' => 'E02002315',
        '4HW' => 'E02002308',
        '4HX' => 'E02002315',
        '4HY' => 'E02002315',
        '4HZ' => 'E02002315',
        '4JA' => 'E02002315',
        '4JB' => 'E02002315',
        '4JD' => 'E02002315',
        '4JE' => 'E02002308',
        '4JF' => 'E02002315',
        '4JG' => 'E02002315',
        '4JH' => 'E02002308',
        '4JJ' => 'E02002315',
        '4JL' => 'E02002308',
        '4JN' => 'E02002315',
        '4JP' => 'E02002315',
        '4JQ' => 'E02002303',
        '4JR' => 'E02002315',
        '4JS' => 'E02002315',
        '4JT' => 'E02002315',
        '4JU' => 'E02002315',
        '4JW' => 'E02002315',
        '4JX' => 'E02002315',
        '4JY' => 'E02002315',
        '4JZ' => 'E02002315',
        '4LA' => 'E02002311',
        '4LB' => 'E02002315',
        '4LD' => 'E02002315',
        '4LE' => 'E02002315',
        '4LF' => 'E02002315',
        '4LG' => 'E02002315',
        '4LH' => 'E02002315',
        '4LJ' => 'E02002315',
        '4LL' => 'E02002315',
        '4LN' => 'E02002315',
        '4LP' => 'E02002315',
        '4LQ' => 'E02002315',
        '4LR' => 'E02002315',
        '4LS' => 'E02002315',
        '4LT' => 'E02002315',
        '4LU' => 'E02002315',
        '4LW' => 'E02002315',
        '4LX' => 'E02002315',
        '4LY' => 'E02002315',
        '4LZ' => 'E02002315',
        '4NA' => 'E02002308',
        '4NB' => 'E02002315',
        '4ND' => 'E02002315',
        '4NE' => 'E02002315',
        '4NF' => 'E02002315',
        '4NG' => 'E02002315',
        '4NH' => 'E02002315',
        '4NJ' => 'E02002315',
        '4NL' => 'E02002315',
        '4NN' => 'E02002315',
        '4NP' => 'E02002315',
        '4NQ' => 'E02002315',
        '4NR' => 'E02002315',
        '4NS' => 'E02002315',
        '4NT' => 'E02002299',
        '4NU' => 'E02002315',
        '4NW' => 'E02002315',
        '4NX' => 'E02002308',
        '4NY' => 'E02002315',
        '4NZ' => 'E02002315',
        '4PA' => 'E02002315',
        '4PB' => 'E02002308',
        '4PD' => 'E02002315',
        '4PE' => 'E02002315',
        '4PF' => 'E02002315',
        '4PG' => 'E02002315',
        '4PH' => 'E02002315',
        '4PJ' => 'E02002311',
        '4PL' => 'E02002315',
        '4PN' => 'E02002315',
        '4PP' => 'E02002315',
        '4PQ' => 'E02002315',
        '4PR' => 'E02002315',
        '4PS' => 'E02002315',
        '4PT' => 'E02002311',
        '4PU' => 'E02002315',
        '4PW' => 'E02002315',
        '4PX' => 'E02002311',
        '4PY' => 'E02002311',
        '4PZ' => 'E02002311',
        '4QA' => 'E02002311',
        '4QB' => 'E02002311',
        '4QD' => 'E02002315',
        '4QE' => 'E02002311',
        '4QF' => 'E02002311',
        '4QG' => 'E02002315',
        '4QH' => 'E02002315',
        '4QJ' => 'E02002315',
        '4QL' => 'E02002315',
        '4QN' => 'E02002315',
        '4QP' => 'E02002308',
        '4QQ' => 'E02002315',
        '4QR' => 'E02002315',
        '4QS' => 'E02002315',
        '4QT' => 'E02002315',
        '4QU' => 'E02002315',
        '4QW' => 'E02002315',
        '4QX' => 'E02002315',
        '4QY' => 'E02002308',
        '4QZ' => 'E02002308',
        '4RA' => 'E02002308',
        '4RB' => 'E02002308',
        '4RD' => 'E02002308',
        '4RE' => 'E02002308',
        '4RF' => 'E02002308',
        '4RG' => 'E02002308',
        '4RH' => 'E02002308',
        '4RJ' => 'E02002311',
        '4RL' => 'E02002311',
        '4RN' => 'E02002311',
        '4RP' => 'E02002308',
        '4RQ' => 'E02002311',
        '4RR' => 'E02002311',
        '4RS' => 'E02002311',
        '4RT' => 'E02002308',
        '4RU' => 'E02002308',
        '4RW' => 'E02002308',
        '4RX' => 'E02002308',
        '4RY' => 'E02002311',
        '4RZ' => 'E02002311',
        '4SA' => 'E02002311',
        '4SB' => 'E02002311',
        '4SD' => 'E02002311',
        '4SE' => 'E02002311',
        '4SF' => 'E02002311',
        '4SG' => 'E02002311',
        '4SH' => 'E02002311',
        '4SJ' => 'E02002311',
        '4SL' => 'E02002311',
        '4SN' => 'E02002308',
        '4SP' => 'E02002308',
        '4SQ' => 'E02002311',
        '4SR' => 'E02002311',
        '4SS' => 'E02002311',
        '4ST' => 'E02002311',
        '4SU' => 'E02002311',
        '4SW' => 'E02002311',
        '4SX' => 'E02002308',
        '4SY' => 'E02002308',
        '4SZ' => 'E02002308',
        '4TA' => 'E02002308',
        '4TB' => 'E02002308',
        '4TD' => 'E02002308',
        '4TE' => 'E02002308',
        '4TF' => 'E02002308',
        '4TG' => 'E02002308',
        '4TH' => 'E02002308',
        '4TJ' => 'E02002308',
        '4TL' => 'E02002308',
        '4TN' => 'E02002308',
        '4TP' => 'E02002308',
        '4TQ' => 'E02002308',
        '4TR' => 'E02002308',
        '4TS' => 'E02002308',
        '4TT' => 'E02002308',
        '4TU' => 'E02002308',
        '4TW' => 'E02002308',
        '4TX' => 'E02002306',
        '4TY' => 'E02002306',
        '4TZ' => 'E02002308',
        '4UA' => 'E02002308',
        '4UB' => 'E02002308',
        '4UD' => 'E02002308',
        '4UE' => 'E02002299',
        '4UF' => 'E02002299',
        '4UG' => 'E02002308',
        '4UH' => 'E02002308',
        '4UJ' => 'E02002308',
        '4UL' => 'E02002308',
        '4UN' => 'E02002308',
        '4UP' => 'E02002308',
        '4UQ' => 'E02002308',
        '4UR' => 'E02002308',
        '4US' => 'E02002308',
        '4UT' => 'E02002308',
        '4UU' => 'E02002308',
        '4UW' => 'E02002308',
        '4UX' => 'E02002308',
        '4UY' => 'E02002308',
        '4UZ' => 'E02002308',
        '4WA' => 'E02002299',
        '4WB' => 'E02002299',
        '4WD' => 'E02002308',
        '4WE' => 'E02002308',
        '4WF' => 'E02002299',
        '4WG' => 'E02002308',
        '4WH' => 'E02002299',
        '4WJ' => 'E02002308',
        '4WL' => 'E02002311',
        '4WN' => 'E02002311',
        '4WP' => 'E02002308',
        '4WQ' => 'E02002315',
        '4WR' => 'E02002299',
        '4WS' => 'E02002308',
        '4WT' => 'E02002299',
        '4WU' => 'E02002308',
        '4WW' => 'E02002311',
        '4WX' => 'E02002299',
        '4WY' => 'E02002308',
        '4WZ' => 'E02002299',
        '4XA' => 'E02002308',
        '4XB' => 'E02002308',
        '4XD' => 'E02002308',
        '4XE' => 'E02002308',
        '4XF' => 'E02002308',
        '4XG' => 'E02002308',
        '4XH' => 'E02002308',
        '4XJ' => 'E02002308',
        '4XL' => 'E02002308',
        '4XN' => 'E02002308',
        '4XP' => 'E02002308',
        '4XQ' => 'E02002308',
        '4XR' => 'E02002308',
        '4XS' => 'E02002299',
        '4XT' => 'E02002303',
        '4XU' => 'E02002308',
        '4XW' => 'E02002308',
        '4XX' => 'E02002303',
        '4XY' => 'E02002303',
        '4XZ' => 'E02002303',
        '4YA' => 'E02002303',
        '4YB' => 'E02002303',
        '4YD' => 'E02002308',
        '4YF' => 'E02002308',
        '4YG' => 'E02002303',
        '4YH' => 'E02002303',
        '4YJ' => 'E02002303',
        '4YL' => 'E02002303',
        '4YN' => 'E02002303',
        '4YP' => 'E02002303',
        '4YQ' => 'E02002303',
        '4YR' => 'E02002308',
        '4YS' => 'E02002308',
        '4YT' => 'E02002308',
        '4YU' => 'E02002308',
        '4YW' => 'E02002303',
        '4YX' => 'E02002308',
        '4YY' => 'E02002308',
        '4YZ' => 'E02002308',
        '4ZA' => 'E02002308',
        '4ZB' => 'E02002308',
        '4ZD' => 'E02002299',
        '4ZE' => 'E02002299',
        '4ZF' => 'E02002299',
        '4ZG' => 'E02002299',
        '4ZH' => 'E02002299',
        '4ZJ' => 'E02002299',
        '4ZL' => 'E02002308',
        '4ZN' => 'E02002308',
        '4ZP' => 'E02002308',
        '4ZQ' => 'E02002308',
        '4ZT' => 'E02002299',
        '4ZW' => 'E02002308',
        '4ZX' => 'E02002308',
        '4ZY' => 'E02002308',
        '4ZZ' => 'E02002299',
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
