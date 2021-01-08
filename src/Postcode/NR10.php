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
final class NR10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02005523',
        '3AB' => 'E02005523',
        '3AD' => 'E02005524',
        '3AE' => 'E02005524',
        '3AF' => 'E02005524',
        '3AG' => 'E02005523',
        '3AH' => 'E02005524',
        '3AJ' => 'E02005526',
        '3AL' => 'E02005523',
        '3AN' => 'E02005523',
        '3AP' => 'E02005523',
        '3AQ' => 'E02005523',
        '3AR' => 'E02005524',
        '3AS' => 'E02005524',
        '3AT' => 'E02005523',
        '3AU' => 'E02005523',
        '3AW' => 'E02005523',
        '3AX' => 'E02005523',
        '3AY' => 'E02005523',
        '3AZ' => 'E02005523',
        '3BA' => 'E02005523',
        '3BB' => 'E02005523',
        '3BD' => 'E02005524',
        '3BE' => 'E02005523',
        '3BF' => 'E02005524',
        '3BG' => 'E02005523',
        '3BH' => 'E02005523',
        '3BJ' => 'E02005523',
        '3BL' => 'E02005523',
        '3BN' => 'E02005523',
        '3BP' => 'E02005523',
        '3BQ' => 'E02005523',
        '3BS' => 'E02005523',
        '3BT' => 'E02005523',
        '3BU' => 'E02005523',
        '3BW' => 'E02005523',
        '3BX' => 'E02005523',
        '3BY' => 'E02005524',
        '3BZ' => 'E02005524',
        '3DA' => 'E02005524',
        '3DB' => 'E02005523',
        '3DD' => 'E02005523',
        '3DE' => 'E02005523',
        '3DF' => 'E02005523',
        '3DG' => 'E02005523',
        '3DH' => 'E02005523',
        '3DJ' => 'E02005523',
        '3DL' => 'E02005523',
        '3DN' => 'E02005523',
        '3DP' => 'E02005523',
        '3DQ' => 'E02005523',
        '3DR' => 'E02005523',
        '3DS' => 'E02005523',
        '3DT' => 'E02005523',
        '3DU' => 'E02005523',
        '3DW' => 'E02005523',
        '3DX' => 'E02005523',
        '3DY' => 'E02005523',
        '3DZ' => 'E02005523',
        '3EA' => 'E02005523',
        '3EB' => 'E02005523',
        '3ED' => 'E02005523',
        '3EE' => 'E02005523',
        '3EF' => 'E02005523',
        '3EG' => 'E02005523',
        '3EH' => 'E02005523',
        '3EJ' => 'E02005523',
        '3EL' => 'E02005523',
        '3EN' => 'E02005523',
        '3EP' => 'E02005523',
        '3EQ' => 'E02005523',
        '3ER' => 'E02005523',
        '3ES' => 'E02005523',
        '3ET' => 'E02005523',
        '3EU' => 'E02005523',
        '3EW' => 'E02005523',
        '3EX' => 'E02005523',
        '3EY' => 'E02005523',
        '3EZ' => 'E02005523',
        '3FA' => 'E02005523',
        '3FB' => 'E02005523',
        '3FD' => 'E02005523',
        '3FE' => 'E02005524',
        '3FF' => 'E02005523',
        '3FG' => 'E02005523',
        '3FH' => 'E02005523',
        '3FJ' => 'E02005524',
        '3FL' => 'E02005524',
        '3FN' => 'E02005523',
        '3FP' => 'E02005523',
        '3FQ' => 'E02005523',
        '3FR' => 'E02005523',
        '3FS' => 'E02005523',
        '3FT' => 'E02005523',
        '3FU' => 'E02005523',
        '3FW' => 'E02005523',
        '3FX' => 'E02005523',
        '3FY' => 'E02005523',
        '3FZ' => 'E02005523',
        '3GA' => 'E02005523',
        '3GB' => 'E02005523',
        '3GG' => 'E02005523',
        '3GH' => 'E02005532',
        '3GJ' => 'E02005524',
        '3GL' => 'E02005523',
        '3GN' => 'E02005523',
        '3GP' => 'E02005523',
        '3HA' => 'E02005523',
        '3HB' => 'E02005523',
        '3HD' => 'E02005523',
        '3HE' => 'E02005523',
        '3HF' => 'E02005523',
        '3HG' => 'E02005523',
        '3HH' => 'E02005524',
        '3HJ' => 'E02005524',
        '3HL' => 'E02005524',
        '3HN' => 'E02005524',
        '3HP' => 'E02005524',
        '3HQ' => 'E02005523',
        '3HR' => 'E02005524',
        '3HS' => 'E02005524',
        '3HT' => 'E02005524',
        '3HU' => 'E02005524',
        '3HW' => 'E02005524',
        '3HX' => 'E02005524',
        '3HY' => 'E02005524',
        '3HZ' => 'E02005524',
        '3JA' => 'E02005524',
        '3JB' => 'E02005524',
        '3JD' => 'E02005524',
        '3JE' => 'E02005524',
        '3JF' => 'E02005524',
        '3JG' => 'E02005524',
        '3JH' => 'E02005524',
        '3JJ' => 'E02005524',
        '3JL' => 'E02005524',
        '3JN' => 'E02005524',
        '3JP' => 'E02005524',
        '3JQ' => 'E02005524',
        '3JR' => 'E02005524',
        '3JS' => 'E02005524',
        '3JT' => 'E02005524',
        '3JU' => 'E02005524',
        '3JW' => 'E02005524',
        '3JX' => 'E02005524',
        '3JY' => 'E02005524',
        '3JZ' => 'E02005524',
        '3LA' => 'E02005524',
        '3LB' => 'E02005524',
        '3LD' => 'E02005524',
        '3LE' => 'E02005524',
        '3LF' => 'E02005524',
        '3LG' => 'E02005524',
        '3LH' => 'E02005524',
        '3LJ' => 'E02005524',
        '3LL' => 'E02005524',
        '3LN' => 'E02005524',
        '3LP' => 'E02005524',
        '3LQ' => 'E02005524',
        '3LR' => 'E02005524',
        '3LS' => 'E02005524',
        '3LT' => 'E02005523',
        '3LU' => 'E02005523',
        '3LW' => 'E02005524',
        '3LX' => 'E02005523',
        '3LY' => 'E02005523',
        '3LZ' => 'E02005523',
        '3NA' => 'E02005523',
        '3NB' => 'E02005523',
        '3ND' => 'E02005524',
        '3NE' => 'E02005524',
        '3NF' => 'E02005524',
        '3NG' => 'E02005524',
        '3NH' => 'E02005524',
        '3NJ' => 'E02005524',
        '3NL' => 'E02005524',
        '3NN' => 'E02005524',
        '3NP' => 'E02005524',
        '3NQ' => 'E02005524',
        '3NR' => 'E02005524',
        '3NS' => 'E02005524',
        '3NT' => 'E02005524',
        '3NU' => 'E02005524',
        '3NW' => 'E02005524',
        '3NX' => 'E02005524',
        '3NY' => 'E02005524',
        '3NZ' => 'E02005524',
        '3PA' => 'E02005524',
        '3PB' => 'E02005524',
        '3PD' => 'E02005524',
        '3PE' => 'E02005524',
        '3PF' => 'E02005524',
        '3PG' => 'E02005524',
        '3PH' => 'E02005524',
        '3PJ' => 'E02005524',
        '3PL' => 'E02005524',
        '3PN' => 'E02005524',
        '3PP' => 'E02005524',
        '3PQ' => 'E02005524',
        '3PR' => 'E02005524',
        '3PS' => 'E02005524',
        '3PT' => 'E02005524',
        '3PU' => 'E02005524',
        '3PW' => 'E02005524',
        '3PX' => 'E02005524',
        '3PY' => 'E02005524',
        '3PZ' => 'E02005524',
        '3QA' => 'E02005524',
        '3QB' => 'E02005524',
        '3QD' => 'E02005524',
        '3QE' => 'E02005524',
        '3QF' => 'E02005524',
        '3QG' => 'E02005524',
        '3QH' => 'E02005524',
        '3QJ' => 'E02005524',
        '3QL' => 'E02005522',
        '3QN' => 'E02005522',
        '3QP' => 'E02005524',
        '3QQ' => 'E02005524',
        '3QR' => 'E02005524',
        '3QS' => 'E02005524',
        '3QT' => 'E02005524',
        '3QU' => 'E02005524',
        '3QW' => 'E02005524',
        '3QX' => 'E02005524',
        '3QY' => 'E02005524',
        '3QZ' => 'E02005524',
        '3RA' => 'E02005524',
        '3RB' => 'E02005524',
        '3RD' => 'E02005524',
        '3RE' => 'E02005524',
        '3RF' => 'E02005524',
        '3RG' => 'E02005524',
        '3RH' => 'E02005524',
        '3RJ' => 'E02005524',
        '3RL' => 'E02005524',
        '3RN' => 'E02005523',
        '3RP' => 'E02005523',
        '3RQ' => 'E02005523',
        '3RR' => 'E02005523',
        '3RS' => 'E02005523',
        '3RT' => 'E02005523',
        '3RU' => 'E02005524',
        '3RW' => 'E02005532',
        '3RY' => 'E02005524',
        '3RZ' => 'E02005524',
        '3SA' => 'E02005523',
        '3SB' => 'E02005523',
        '3SD' => 'E02005523',
        '3SE' => 'E02005523',
        '3SF' => 'E02005523',
        '3SG' => 'E02005523',
        '3SH' => 'E02005523',
        '3SJ' => 'E02005523',
        '3SL' => 'E02005523',
        '3SN' => 'E02005523',
        '3SP' => 'E02005523',
        '3SQ' => 'E02005523',
        '3SR' => 'E02005523',
        '3SS' => 'E02005523',
        '3ST' => 'E02005523',
        '3SU' => 'E02005523',
        '3SW' => 'E02005523',
        '3SX' => 'E02005532',
        '3SY' => 'E02005523',
        '3SZ' => 'E02005523',
        '3TA' => 'E02005523',
        '3TJ' => 'E02005532',
        '3TN' => 'E02005524',
        '3TQ' => 'E02005523',
        '3UZ' => 'E02005532',
        '3WA' => 'E02005532',
        '3WB' => 'E02005532',
        '3WD' => 'E02005523',
        '3WE' => 'E02005532',
        '3WF' => 'E02005523',
        '3WG' => 'E02005523',
        '3WH' => 'E02005523',
        '3WJ' => 'E02005523',
        '3WL' => 'E02005523',
        '3WN' => 'E02005523',
        '3WP' => 'E02005523',
        '3WQ' => 'E02005523',
        '3WR' => 'E02005523',
        '3WS' => 'E02005523',
        '3WT' => 'E02005523',
        '3WU' => 'E02005523',
        '3WW' => 'E02005523',
        '3WX' => 'E02005523',
        '3WY' => 'E02005523',
        '3WZ' => 'E02005523',
        '3XA' => 'E02005523',
        '3XB' => 'E02005523',
        '3XD' => 'E02005523',
        '3XE' => 'E02005532',
        '3XF' => 'E02005532',
        '3ZD' => 'E02005523',
        '4AA' => 'E02005521',
        '4AB' => 'E02005523',
        '4AD' => 'E02005521',
        '4AE' => 'E02005521',
        '4AF' => 'E02005521',
        '4AG' => 'E02005521',
        '4AH' => 'E02005521',
        '4AJ' => 'E02005521',
        '4AL' => 'E02005521',
        '4AN' => 'E02005521',
        '4AP' => 'E02005521',
        '4AQ' => 'E02005521',
        '4AR' => 'E02005521',
        '4AS' => 'E02005521',
        '4AT' => 'E02005521',
        '4AU' => 'E02005521',
        '4AW' => 'E02005521',
        '4AX' => 'E02005521',
        '4AY' => 'E02005521',
        '4AZ' => 'E02005521',
        '4BA' => 'E02005521',
        '4BB' => 'E02005521',
        '4BD' => 'E02005521',
        '4BE' => 'E02005521',
        '4BF' => 'E02005521',
        '4BG' => 'E02005521',
        '4BH' => 'E02005523',
        '4BJ' => 'E02005521',
        '4BL' => 'E02005521',
        '4BN' => 'E02005521',
        '4BP' => 'E02005521',
        '4BQ' => 'E02005521',
        '4BS' => 'E02005521',
        '4BT' => 'E02005523',
        '4BU' => 'E02005523',
        '4BW' => 'E02005521',
        '4BX' => 'E02005523',
        '4BY' => 'E02005523',
        '4BZ' => 'E02005523',
        '4DA' => 'E02005523',
        '4DB' => 'E02005523',
        '4DD' => 'E02005523',
        '4DE' => 'E02005523',
        '4DF' => 'E02005523',
        '4DG' => 'E02005523',
        '4DH' => 'E02005523',
        '4DJ' => 'E02005523',
        '4DL' => 'E02005523',
        '4DN' => 'E02005523',
        '4DP' => 'E02005523',
        '4DQ' => 'E02005523',
        '4DR' => 'E02005523',
        '4DS' => 'E02005523',
        '4DT' => 'E02005525',
        '4DU' => 'E02005523',
        '4DW' => 'E02005521',
        '4DX' => 'E02005523',
        '4DY' => 'E02005525',
        '4DZ' => 'E02005523',
        '4EA' => 'E02005523',
        '4EB' => 'E02005523',
        '4ED' => 'E02005523',
        '4EE' => 'E02005523',
        '4EF' => 'E02005521',
        '4EG' => 'E02005521',
        '4EH' => 'E02005521',
        '4EJ' => 'E02005521',
        '4EL' => 'E02005521',
        '4EN' => 'E02005521',
        '4EP' => 'E02005521',
        '4EQ' => 'E02005521',
        '4ER' => 'E02005521',
        '4ES' => 'E02005521',
        '4ET' => 'E02005521',
        '4EU' => 'E02005521',
        '4EW' => 'E02005521',
        '4EX' => 'E02005521',
        '4EY' => 'E02005521',
        '4EZ' => 'E02005521',
        '4FA' => 'E02005521',
        '4FB' => 'E02005521',
        '4FD' => 'E02005521',
        '4FE' => 'E02005521',
        '4FF' => 'E02005521',
        '4FG' => 'E02005521',
        '4FH' => 'E02005521',
        '4FJ' => 'E02005521',
        '4FL' => 'E02005523',
        '4FN' => 'E02005521',
        '4FP' => 'E02005521',
        '4FQ' => 'E02005521',
        '4GA' => 'E02005521',
        '4GL' => 'E02005521',
        '4HA' => 'E02005521',
        '4HB' => 'E02005521',
        '4HD' => 'E02005521',
        '4HE' => 'E02005521',
        '4HF' => 'E02005521',
        '4HG' => 'E02005521',
        '4HH' => 'E02005521',
        '4HJ' => 'E02005521',
        '4HL' => 'E02005521',
        '4HN' => 'E02005521',
        '4HP' => 'E02005521',
        '4HQ' => 'E02005521',
        '4HR' => 'E02005521',
        '4HS' => 'E02005521',
        '4HT' => 'E02005521',
        '4HU' => 'E02005521',
        '4HW' => 'E02005521',
        '4HX' => 'E02005521',
        '4HY' => 'E02005521',
        '4HZ' => 'E02005521',
        '4JA' => 'E02005521',
        '4JB' => 'E02005521',
        '4JD' => 'E02005521',
        '4JE' => 'E02005521',
        '4JF' => 'E02005521',
        '4JG' => 'E02005521',
        '4JH' => 'E02005521',
        '4JJ' => 'E02005521',
        '4JL' => 'E02005521',
        '4JN' => 'E02005521',
        '4JP' => 'E02005521',
        '4JQ' => 'E02005521',
        '4JR' => 'E02005521',
        '4JS' => 'E02005521',
        '4JT' => 'E02005521',
        '4JU' => 'E02005521',
        '4JW' => 'E02005521',
        '4JX' => 'E02005521',
        '4JY' => 'E02005521',
        '4JZ' => 'E02005521',
        '4LA' => 'E02005521',
        '4LB' => 'E02005521',
        '4LD' => 'E02005521',
        '4LE' => 'E02005521',
        '4LF' => 'E02005521',
        '4LG' => 'E02005521',
        '4LH' => 'E02005521',
        '4LJ' => 'E02005521',
        '4LL' => 'E02005521',
        '4LN' => 'E02005521',
        '4LP' => 'E02005521',
        '4LQ' => 'E02005521',
        '4LR' => 'E02005521',
        '4LS' => 'E02005521',
        '4LT' => 'E02005521',
        '4LU' => 'E02005521',
        '4LW' => 'E02005521',
        '4LX' => 'E02005521',
        '4LY' => 'E02005521',
        '4LZ' => 'E02005521',
        '4NA' => 'E02005521',
        '4NB' => 'E02005521',
        '4ND' => 'E02005521',
        '4NE' => 'E02005521',
        '4NF' => 'E02005521',
        '4NG' => 'E02005521',
        '4NH' => 'E02005521',
        '4NJ' => 'E02005521',
        '4NL' => 'E02005521',
        '4NN' => 'E02005521',
        '4NP' => 'E02005521',
        '4NQ' => 'E02005521',
        '4NR' => 'E02005521',
        '4NS' => 'E02005521',
        '4NT' => 'E02005521',
        '4NU' => 'E02005521',
        '4NW' => 'E02005521',
        '4NX' => 'E02005521',
        '4NY' => 'E02005521',
        '4NZ' => 'E02005521',
        '4PA' => 'E02005521',
        '4PB' => 'E02005521',
        '4PD' => 'E02005521',
        '4PE' => 'E02005521',
        '4PF' => 'E02005521',
        '4PG' => 'E02005521',
        '4PH' => 'E02005521',
        '4PJ' => 'E02005521',
        '4PL' => 'E02005521',
        '4PN' => 'E02005521',
        '4PP' => 'E02005521',
        '4PQ' => 'E02005521',
        '4PR' => 'E02005521',
        '4PS' => 'E02005521',
        '4PT' => 'E02005521',
        '4PU' => 'E02005521',
        '4PW' => 'E02005521',
        '4PX' => 'E02005521',
        '4PY' => 'E02005521',
        '4PZ' => 'E02005521',
        '4QA' => 'E02005521',
        '4QB' => 'E02005521',
        '4QD' => 'E02005521',
        '4QE' => 'E02005521',
        '4QF' => 'E02005521',
        '4QG' => 'E02005521',
        '4QH' => 'E02005521',
        '4QJ' => 'E02005521',
        '4QL' => 'E02005521',
        '4QN' => 'E02005521',
        '4QP' => 'E02005521',
        '4QQ' => 'E02005521',
        '4QR' => 'E02005521',
        '4QS' => 'E02005521',
        '4QT' => 'E02005521',
        '4QU' => 'E02005521',
        '4QW' => 'E02005521',
        '4QX' => 'E02005521',
        '4QY' => 'E02005521',
        '4QZ' => 'E02005521',
        '4RA' => 'E02005521',
        '4RB' => 'E02005521',
        '4RD' => 'E02005521',
        '4RE' => 'E02005521',
        '4RF' => 'E02005521',
        '4RG' => 'E02005521',
        '4RH' => 'E02005521',
        '4RJ' => 'E02005521',
        '4RL' => 'E02005521',
        '4RN' => 'E02005521',
        '4RP' => 'E02005521',
        '4RQ' => 'E02005521',
        '4RR' => 'E02005521',
        '4RS' => 'E02005521',
        '4RT' => 'E02005521',
        '4RU' => 'E02005521',
        '4RW' => 'E02005521',
        '4RX' => 'E02005521',
        '4RY' => 'E02005521',
        '4RZ' => 'E02005521',
        '4SA' => 'E02005521',
        '4SB' => 'E02005521',
        '4SD' => 'E02005521',
        '4SE' => 'E02005521',
        '4SF' => 'E02005521',
        '4SG' => 'E02005521',
        '4SH' => 'E02005521',
        '4SJ' => 'E02005521',
        '4SL' => 'E02005521',
        '4SN' => 'E02005523',
        '4SP' => 'E02005521',
        '4SQ' => 'E02005521',
        '4SR' => 'E02005521',
        '4ST' => 'E02005521',
        '4SU' => 'E02005521',
        '4SW' => 'E02005521',
        '4SX' => 'E02005521',
        '4SY' => 'E02005521',
        '4SZ' => 'E02005521',
        '4TA' => 'E02005521',
        '4TB' => 'E02005521',
        '4TD' => 'E02005521',
        '4TJ' => 'E02005521',
        '4TX' => 'E02005521',
        '4UA' => 'E02005523',
        '4UT' => 'E02005521',
        '4UU' => 'E02005521',
        '4UX' => 'E02005521',
        '4WA' => 'E02005523',
        '4WB' => 'E02005523',
        '4WJ' => 'E02005507',
        '4WT' => 'E02005507',
        '4WU' => 'E02005507',
        '4WW' => 'E02005523',
        '4WX' => 'E02005523',
        '4WY' => 'E02005521',
        '4WZ' => 'E02005521',
        '4XW' => 'E02005521',
        '4YA' => 'E02005523',
        '4YD' => 'E02005532',
        '4YG' => 'E02005532',
        '5AA' => 'E02005522',
        '5AB' => 'E02005522',
        '5AD' => 'E02005523',
        '5AE' => 'E02005520',
        '5AF' => 'E02005522',
        '5AG' => 'E02005523',
        '5AH' => 'E02005581',
        '5AJ' => 'E02005581',
        '5AL' => 'E02005581',
        '5AN' => 'E02005581',
        '5AP' => 'E02005581',
        '5AQ' => 'E02005581',
        '5AR' => 'E02005581',
        '5AS' => 'E02005581',
        '5AT' => 'E02005581',
        '5AU' => 'E02005581',
        '5AW' => 'E02005581',
        '5AX' => 'E02005581',
        '5AY' => 'E02005581',
        '5AZ' => 'E02005581',
        '5BA' => 'E02005581',
        '5BB' => 'E02005581',
        '5BD' => 'E02005522',
        '5BE' => 'E02005581',
        '5BF' => 'E02005523',
        '5BG' => 'E02005581',
        '5BH' => 'E02005581',
        '5BJ' => 'E02005581',
        '5BL' => 'E02005581',
        '5BN' => 'E02005581',
        '5BP' => 'E02005581',
        '5BQ' => 'E02005581',
        '5BS' => 'E02005581',
        '5BT' => 'E02005581',
        '5BU' => 'E02005581',
        '5BW' => 'E02005581',
        '5BX' => 'E02005581',
        '5BY' => 'E02005581',
        '5BZ' => 'E02005581',
        '5DA' => 'E02005581',
        '5DB' => 'E02005581',
        '5DD' => 'E02005581',
        '5DE' => 'E02005581',
        '5DF' => 'E02005581',
        '5DG' => 'E02005581',
        '5DH' => 'E02005581',
        '5DJ' => 'E02005581',
        '5DL' => 'E02005581',
        '5DN' => 'E02005581',
        '5DP' => 'E02005581',
        '5DQ' => 'E02005522',
        '5DR' => 'E02005581',
        '5DS' => 'E02005581',
        '5DT' => 'E02005581',
        '5DU' => 'E02005581',
        '5DW' => 'E02005581',
        '5DX' => 'E02005581',
        '5DY' => 'E02005581',
        '5DZ' => 'E02005581',
        '5EA' => 'E02005581',
        '5EB' => 'E02005581',
        '5ED' => 'E02005581',
        '5EE' => 'E02005581',
        '5EF' => 'E02005522',
        '5EG' => 'E02005522',
        '5EH' => 'E02005522',
        '5EJ' => 'E02005522',
        '5EL' => 'E02005522',
        '5EN' => 'E02005522',
        '5EP' => 'E02005522',
        '5EQ' => 'E02005522',
        '5ER' => 'E02005522',
        '5ES' => 'E02005522',
        '5ET' => 'E02005522',
        '5EU' => 'E02005522',
        '5EW' => 'E02005522',
        '5EX' => 'E02005522',
        '5EY' => 'E02005522',
        '5EZ' => 'E02005522',
        '5FA' => 'E02005523',
        '5FB' => 'E02005581',
        '5FD' => 'E02005581',
        '5FE' => 'E02005581',
        '5FF' => 'E02005522',
        '5GA' => 'E02005522',
        '5GB' => 'E02005581',
        '5GD' => 'E02005581',
        '5HA' => 'E02005522',
        '5HB' => 'E02005522',
        '5HD' => 'E02005522',
        '5HE' => 'E02005522',
        '5HF' => 'E02005522',
        '5HG' => 'E02005522',
        '5HH' => 'E02005522',
        '5HJ' => 'E02005522',
        '5HL' => 'E02005522',
        '5HN' => 'E02005522',
        '5HP' => 'E02005522',
        '5HQ' => 'E02005522',
        '5HR' => 'E02005522',
        '5HS' => 'E02005522',
        '5HT' => 'E02005522',
        '5HU' => 'E02005522',
        '5HW' => 'E02005522',
        '5HX' => 'E02005522',
        '5HY' => 'E02005522',
        '5HZ' => 'E02005522',
        '5JA' => 'E02005522',
        '5JB' => 'E02005522',
        '5JD' => 'E02005522',
        '5JE' => 'E02005522',
        '5JF' => 'E02005522',
        '5JG' => 'E02005522',
        '5JH' => 'E02005522',
        '5JJ' => 'E02005522',
        '5JL' => 'E02005522',
        '5JN' => 'E02005522',
        '5JP' => 'E02005581',
        '5JQ' => 'E02005522',
        '5JR' => 'E02005581',
        '5JS' => 'E02005581',
        '5JT' => 'E02005581',
        '5JU' => 'E02005581',
        '5JW' => 'E02005522',
        '5JX' => 'E02005581',
        '5JY' => 'E02005581',
        '5JZ' => 'E02005581',
        '5LA' => 'E02005581',
        '5LB' => 'E02005581',
        '5LD' => 'E02005522',
        '5LE' => 'E02005523',
        '5LF' => 'E02005522',
        '5LG' => 'E02005581',
        '5LH' => 'E02005523',
        '5LJ' => 'E02005523',
        '5LL' => 'E02005523',
        '5LN' => 'E02005523',
        '5LP' => 'E02005523',
        '5LQ' => 'E02005522',
        '5LR' => 'E02005523',
        '5LS' => 'E02005523',
        '5LT' => 'E02005523',
        '5LU' => 'E02005523',
        '5LW' => 'E02005523',
        '5LX' => 'E02005523',
        '5LY' => 'E02005523',
        '5LZ' => 'E02005523',
        '5NA' => 'E02005523',
        '5NB' => 'E02005523',
        '5ND' => 'E02005523',
        '5NE' => 'E02005523',
        '5NF' => 'E02005523',
        '5NG' => 'E02005523',
        '5NH' => 'E02005523',
        '5NJ' => 'E02005523',
        '5NL' => 'E02005523',
        '5NN' => 'E02005523',
        '5NP' => 'E02005523',
        '5NQ' => 'E02005523',
        '5NR' => 'E02005523',
        '5NS' => 'E02005521',
        '5NT' => 'E02005523',
        '5NU' => 'E02005523',
        '5NW' => 'E02005523',
        '5NX' => 'E02005523',
        '5NY' => 'E02005523',
        '5NZ' => 'E02005523',
        '5PA' => 'E02005523',
        '5PB' => 'E02005523',
        '5PD' => 'E02005523',
        '5PE' => 'E02005522',
        '5PF' => 'E02005522',
        '5PG' => 'E02005523',
        '5PH' => 'E02005520',
        '5PJ' => 'E02005520',
        '5PL' => 'E02005520',
        '5PN' => 'E02005520',
        '5PP' => 'E02005520',
        '5PQ' => 'E02005520',
        '5PR' => 'E02005520',
        '5PS' => 'E02005520',
        '5PT' => 'E02005520',
        '5PU' => 'E02005520',
        '5PW' => 'E02005520',
        '5PX' => 'E02005520',
        '5PY' => 'E02005520',
        '5PZ' => 'E02005520',
        '5QA' => 'E02005520',
        '5QB' => 'E02005520',
        '5QD' => 'E02005520',
        '5QE' => 'E02005520',
        '5QF' => 'E02005520',
        '5QG' => 'E02005520',
        '5QH' => 'E02005520',
        '5QJ' => 'E02005521',
        '5QL' => 'E02005523',
        '5QN' => 'E02005523',
        '5QP' => 'E02005523',
        '5QQ' => 'E02005523',
        '5QR' => 'E02005523',
        '5QS' => 'E02005523',
        '5QT' => 'E02005523',
        '5QU' => 'E02005523',
        '5QW' => 'E02005523',
        '5QX' => 'E02005523',
        '5QY' => 'E02005523',
        '5QZ' => 'E02005520',
        '5RA' => 'E02005520',
        '5RB' => 'E02005520',
        '5RD' => 'E02005523',
        '5RE' => 'E02005522',
        '5RF' => 'E02005523',
        '5RG' => 'E02005523',
        '5RH' => 'E02005520',
        '5RJ' => 'E02005579',
        '5RL' => 'E02005579',
        '5RN' => 'E02005523',
        '5RP' => 'E02005523',
        '5RQ' => 'E02005520',
        '5RS' => 'E02005579',
        '5RT' => 'E02005579',
        '5RU' => 'E02005522',
        '5RX' => 'E02005579',
        '5RY' => 'E02005523',
        '5RZ' => 'E02005522',
        '5SA' => 'E02005579',
        '5SB' => 'E02005520',
        '5SD' => 'E02005520',
        '5SE' => 'E02005520',
        '5SF' => 'E02005579',
        '5SG' => 'E02005522',
        '5SJ' => 'E02005522',
        '5SQ' => 'E02005522',
        '5SR' => 'E02005520',
        '5TA' => 'E02005581',
        '5UZ' => 'E02005522',
        '5WA' => 'E02005581',
        '5WB' => 'E02005581',
        '5WD' => 'E02005579',
        '5WE' => 'E02005579',
        '5WF' => 'E02005579',
        '5WG' => 'E02005522',
        '5WH' => 'E02005522',
        '5WJ' => 'E02005579',
        '5WL' => 'E02005579',
        '5WN' => 'E02005522',
        '5WP' => 'E02005579',
        '5WQ' => 'E02005581',
        '5WR' => 'E02005522',
        '5WT' => 'E02005522',
        '5WU' => 'E02005522',
        '5WW' => 'E02005522',
        '5WX' => 'E02005579',
        '5WY' => 'E02005522',
        '5WZ' => 'E02005579',
        '5XA' => 'E02005522',
        '5ZB' => 'E02005579',
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
