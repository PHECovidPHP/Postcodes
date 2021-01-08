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
final class NR20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02005508',
        '3AB' => 'E02005508',
        '3AD' => 'E02005503',
        '3AE' => 'E02005507',
        '3AF' => 'E02005507',
        '3AG' => 'E02005507',
        '3AH' => 'E02005508',
        '3AJ' => 'E02005508',
        '3AL' => 'E02005505',
        '3AN' => 'E02005507',
        '3AP' => 'E02005505',
        '3AQ' => 'E02005507',
        '3AR' => 'E02005507',
        '3AS' => 'E02005505',
        '3AT' => 'E02005507',
        '3AU' => 'E02005507',
        '3AW' => 'E02005507',
        '3AX' => 'E02005505',
        '3AY' => 'E02005505',
        '3AZ' => 'E02005505',
        '3BA' => 'E02005507',
        '3BB' => 'E02005505',
        '3BD' => 'E02005505',
        '3BE' => 'E02005505',
        '3BF' => 'E02005508',
        '3BG' => 'E02005505',
        '3BH' => 'E02005505',
        '3BJ' => 'E02005505',
        '3BL' => 'E02005505',
        '3BN' => 'E02005507',
        '3BP' => 'E02005505',
        '3BQ' => 'E02005505',
        '3BS' => 'E02005505',
        '3BT' => 'E02005505',
        '3BU' => 'E02005505',
        '3BW' => 'E02005505',
        '3BX' => 'E02005505',
        '3BY' => 'E02005505',
        '3BZ' => 'E02005505',
        '3DA' => 'E02005508',
        '3DB' => 'E02005508',
        '3DD' => 'E02005508',
        '3DE' => 'E02005508',
        '3DF' => 'E02005508',
        '3DG' => 'E02005508',
        '3DH' => 'E02005508',
        '3DJ' => 'E02005508',
        '3DL' => 'E02005508',
        '3DN' => 'E02005508',
        '3DP' => 'E02005508',
        '3DQ' => 'E02005508',
        '3DR' => 'E02005508',
        '3DS' => 'E02005508',
        '3DT' => 'E02005508',
        '3DU' => 'E02005503',
        '3DW' => 'E02005508',
        '3DX' => 'E02005503',
        '3DY' => 'E02005503',
        '3DZ' => 'E02005503',
        '3EA' => 'E02005503',
        '3EB' => 'E02005503',
        '3ED' => 'E02005503',
        '3EE' => 'E02005503',
        '3EF' => 'E02005503',
        '3EG' => 'E02005503',
        '3EH' => 'E02005503',
        '3EJ' => 'E02005503',
        '3EL' => 'E02005505',
        '3EN' => 'E02005503',
        '3EP' => 'E02005503',
        '3EQ' => 'E02005503',
        '3ER' => 'E02005507',
        '3ES' => 'E02005505',
        '3ET' => 'E02005505',
        '3EU' => 'E02005505',
        '3EW' => 'E02005503',
        '3EX' => 'E02005505',
        '3EY' => 'E02005505',
        '3EZ' => 'E02005505',
        '3FA' => 'E02005508',
        '3FB' => 'E02005505',
        '3FD' => 'E02005505',
        '3FE' => 'E02005505',
        '3FF' => 'E02005505',
        '3FG' => 'E02005508',
        '3FH' => 'E02005600',
        '3FJ' => 'E02005600',
        '3FL' => 'E02005600',
        '3FN' => 'E02005505',
        '3FP' => 'E02005505',
        '3FQ' => 'E02005505',
        '3FR' => 'E02005505',
        '3FS' => 'E02005505',
        '3FT' => 'E02005505',
        '3FU' => 'E02005508',
        '3FW' => 'E02005505',
        '3FX' => 'E02005505',
        '3FY' => 'E02005505',
        '3FZ' => 'E02005505',
        '3GA' => 'E02005508',
        '3GD' => 'E02005505',
        '3GE' => 'E02005505',
        '3GG' => 'E02005507',
        '3GH' => 'E02005505',
        '3GJ' => 'E02005505',
        '3GL' => 'E02005505',
        '3GN' => 'E02005505',
        '3GP' => 'E02005505',
        '3GQ' => 'E02005505',
        '3GR' => 'E02005508',
        '3GS' => 'E02005508',
        '3GT' => 'E02005508',
        '3GZ' => 'E02005508',
        '3HA' => 'E02005505',
        '3HB' => 'E02005505',
        '3HD' => 'E02005508',
        '3HE' => 'E02005508',
        '3HF' => 'E02005508',
        '3HG' => 'E02005508',
        '3HH' => 'E02005508',
        '3HJ' => 'E02005508',
        '3HL' => 'E02005508',
        '3HN' => 'E02005508',
        '3HP' => 'E02005508',
        '3HQ' => 'E02005508',
        '3HR' => 'E02005508',
        '3HS' => 'E02005508',
        '3HT' => 'E02005508',
        '3HU' => 'E02005508',
        '3HW' => 'E02005508',
        '3HX' => 'E02005508',
        '3HY' => 'E02005508',
        '3HZ' => 'E02005508',
        '3JA' => 'E02005508',
        '3JB' => 'E02005508',
        '3JD' => 'E02005508',
        '3JE' => 'E02005508',
        '3JF' => 'E02005508',
        '3JG' => 'E02005508',
        '3JH' => 'E02005508',
        '3JJ' => 'E02005508',
        '3JL' => 'E02005508',
        '3JN' => 'E02005508',
        '3JP' => 'E02005508',
        '3JQ' => 'E02005508',
        '3JR' => 'E02005508',
        '3JS' => 'E02005508',
        '3JT' => 'E02005508',
        '3JU' => 'E02005508',
        '3JW' => 'E02005508',
        '3JX' => 'E02005508',
        '3JY' => 'E02005508',
        '3JZ' => 'E02005508',
        '3LA' => 'E02005508',
        '3LB' => 'E02005508',
        '3LD' => 'E02005600',
        '3LE' => 'E02005600',
        '3LF' => 'E02005600',
        '3LG' => 'E02005600',
        '3LH' => 'E02005600',
        '3LJ' => 'E02005508',
        '3LL' => 'E02005508',
        '3LN' => 'E02005600',
        '3LP' => 'E02005508',
        '3LQ' => 'E02005600',
        '3LR' => 'E02005508',
        '3LS' => 'E02005508',
        '3LT' => 'E02005508',
        '3LU' => 'E02005508',
        '3LW' => 'E02005508',
        '3LX' => 'E02005508',
        '3LY' => 'E02005508',
        '3LZ' => 'E02005508',
        '3NA' => 'E02005508',
        '3NB' => 'E02005508',
        '3ND' => 'E02005508',
        '3NE' => 'E02005508',
        '3NF' => 'E02005508',
        '3NG' => 'E02005508',
        '3NH' => 'E02005508',
        '3NJ' => 'E02005508',
        '3NL' => 'E02005508',
        '3NN' => 'E02005508',
        '3NP' => 'E02005508',
        '3NQ' => 'E02005508',
        '3NR' => 'E02005508',
        '3NS' => 'E02005508',
        '3NT' => 'E02005508',
        '3NU' => 'E02005508',
        '3NW' => 'E02005508',
        '3NX' => 'E02005508',
        '3NY' => 'E02005508',
        '3NZ' => 'E02005508',
        '3PA' => 'E02005508',
        '3PB' => 'E02005508',
        '3PD' => 'E02005508',
        '3PE' => 'E02005508',
        '3PF' => 'E02005508',
        '3PG' => 'E02005508',
        '3PH' => 'E02005508',
        '3PJ' => 'E02005508',
        '3PL' => 'E02005508',
        '3PN' => 'E02005508',
        '3PP' => 'E02005508',
        '3PQ' => 'E02005508',
        '3PR' => 'E02005508',
        '3PS' => 'E02005508',
        '3PT' => 'E02005508',
        '3PU' => 'E02005508',
        '3PW' => 'E02005508',
        '3PX' => 'E02005505',
        '3PY' => 'E02005507',
        '3PZ' => 'E02005508',
        '3QA' => 'E02005508',
        '3QB' => 'E02005508',
        '3QD' => 'E02005508',
        '3QE' => 'E02005508',
        '3QF' => 'E02005508',
        '3QG' => 'E02005508',
        '3QH' => 'E02005508',
        '3QJ' => 'E02005508',
        '3QL' => 'E02005508',
        '3QN' => 'E02005508',
        '3QP' => 'E02005508',
        '3QQ' => 'E02005508',
        '3QR' => 'E02005508',
        '3QS' => 'E02005508',
        '3QT' => 'E02005508',
        '3QU' => 'E02005508',
        '3QW' => 'E02005508',
        '3QX' => 'E02005508',
        '3QY' => 'E02005508',
        '3QZ' => 'E02005508',
        '3RA' => 'E02005508',
        '3RB' => 'E02005508',
        '3RD' => 'E02005508',
        '3RE' => 'E02005508',
        '3RF' => 'E02005508',
        '3RG' => 'E02005508',
        '3RH' => 'E02005508',
        '3RJ' => 'E02005508',
        '3RL' => 'E02005508',
        '3RN' => 'E02005508',
        '3RP' => 'E02005508',
        '3RQ' => 'E02005508',
        '3RR' => 'E02005508',
        '3RS' => 'E02005508',
        '3RT' => 'E02005508',
        '3RU' => 'E02005508',
        '3RW' => 'E02005508',
        '3RX' => 'E02005508',
        '3RY' => 'E02005508',
        '3RZ' => 'E02005508',
        '3SA' => 'E02005505',
        '3SB' => 'E02005505',
        '3SD' => 'E02005505',
        '3SE' => 'E02005508',
        '3SF' => 'E02005508',
        '3SG' => 'E02005508',
        '3SH' => 'E02005508',
        '3SJ' => 'E02005505',
        '3SL' => 'E02005600',
        '3SN' => 'E02005508',
        '3SP' => 'E02005508',
        '3SQ' => 'E02005505',
        '3SR' => 'E02005508',
        '3SS' => 'E02005505',
        '3ST' => 'E02005505',
        '3SU' => 'E02005505',
        '3SW' => 'E02005508',
        '3SX' => 'E02005508',
        '3SY' => 'E02005508',
        '3SZ' => 'E02005508',
        '3TB' => 'E02005505',
        '3TD' => 'E02005507',
        '3TE' => 'E02005507',
        '3TF' => 'E02005508',
        '3TG' => 'E02005507',
        '3TH' => 'E02005507',
        '3TJ' => 'E02005507',
        '3TL' => 'E02005507',
        '3TN' => 'E02005507',
        '3TP' => 'E02005507',
        '3TQ' => 'E02005508',
        '3TR' => 'E02005507',
        '3TS' => 'E02005508',
        '3TT' => 'E02005507',
        '3TU' => 'E02005507',
        '3TW' => 'E02005507',
        '3TX' => 'E02005508',
        '3TY' => 'E02005507',
        '3TZ' => 'E02005507',
        '3UA' => 'E02005505',
        '3UD' => 'E02005508',
        '3UQ' => 'E02005508',
        '3WB' => 'E02005507',
        '3WR' => 'E02005507',
        '3WW' => 'E02005507',
        '3WX' => 'E02005507',
        '3WY' => 'E02005507',
        '3WZ' => 'E02005507',
        '3XA' => 'E02005507',
        '3XR' => 'E02005507',
        '3XU' => 'E02005508',
        '3YJ' => 'E02005508',
        '3YN' => 'E02005507',
        '3YR' => 'E02005507',
        '3YU' => 'E02005507',
        '4AA' => 'E02005503',
        '4AB' => 'E02005504',
        '4AD' => 'E02005503',
        '4AE' => 'E02005505',
        '4AF' => 'E02005504',
        '4AG' => 'E02005505',
        '4AH' => 'E02005503',
        '4AJ' => 'E02005503',
        '4AL' => 'E02005504',
        '4AN' => 'E02005505',
        '4AP' => 'E02005504',
        '4AQ' => 'E02005505',
        '4AR' => 'E02005506',
        '4AS' => 'E02005505',
        '4AT' => 'E02005505',
        '4AU' => 'E02005505',
        '4AW' => 'E02005505',
        '4AX' => 'E02005505',
        '4AY' => 'E02005505',
        '4AZ' => 'E02005505',
        '4BA' => 'E02005505',
        '4BB' => 'E02005503',
        '4BD' => 'E02005503',
        '4BE' => 'E02005503',
        '4BF' => 'E02005506',
        '4BG' => 'E02005503',
        '4BH' => 'E02005503',
        '4BJ' => 'E02005504',
        '4BL' => 'E02005506',
        '4BN' => 'E02005504',
        '4BP' => 'E02005504',
        '4BQ' => 'E02005503',
        '4BS' => 'E02005504',
        '4BT' => 'E02005504',
        '4BU' => 'E02005504',
        '4BW' => 'E02005504',
        '4BX' => 'E02005504',
        '4BY' => 'E02005504',
        '4BZ' => 'E02005504',
        '4DA' => 'E02005504',
        '4DB' => 'E02005504',
        '4DD' => 'E02005504',
        '4DE' => 'E02005504',
        '4DF' => 'E02005503',
        '4DG' => 'E02005504',
        '4DH' => 'E02005504',
        '4DJ' => 'E02005504',
        '4DL' => 'E02005504',
        '4DN' => 'E02005504',
        '4DP' => 'E02005504',
        '4DQ' => 'E02005504',
        '4DR' => 'E02005506',
        '4DS' => 'E02005506',
        '4DT' => 'E02005506',
        '4DU' => 'E02005506',
        '4DW' => 'E02005505',
        '4DX' => 'E02005506',
        '4DY' => 'E02005506',
        '4DZ' => 'E02005506',
        '4EA' => 'E02005506',
        '4EB' => 'E02005506',
        '4ED' => 'E02005506',
        '4EE' => 'E02005506',
        '4EF' => 'E02005506',
        '4EG' => 'E02005506',
        '4EH' => 'E02005506',
        '4EJ' => 'E02005506',
        '4EL' => 'E02005506',
        '4EN' => 'E02005506',
        '4EP' => 'E02005504',
        '4EQ' => 'E02005506',
        '4ER' => 'E02005504',
        '4ES' => 'E02005504',
        '4ET' => 'E02005504',
        '4EU' => 'E02005506',
        '4EW' => 'E02005506',
        '4EX' => 'E02005506',
        '4EY' => 'E02005504',
        '4EZ' => 'E02005504',
        '4FA' => 'E02005503',
        '4FB' => 'E02005504',
        '4FD' => 'E02005505',
        '4FE' => 'E02005504',
        '4FF' => 'E02005504',
        '4FG' => 'E02005506',
        '4FH' => 'E02005503',
        '4FJ' => 'E02005503',
        '4FL' => 'E02005503',
        '4FN' => 'E02005503',
        '4FP' => 'E02005503',
        '4FQ' => 'E02005503',
        '4FR' => 'E02005503',
        '4FS' => 'E02005503',
        '4FT' => 'E02005503',
        '4FU' => 'E02005503',
        '4FW' => 'E02005503',
        '4GA' => 'E02005504',
        '4GB' => 'E02005504',
        '4GD' => 'E02005503',
        '4GE' => 'E02005503',
        '4GS' => 'E02005503',
        '4GU' => 'E02005503',
        '4GW' => 'E02005507',
        '4GX' => 'E02005507',
        '4GY' => 'E02005507',
        '4GZ' => 'E02005507',
        '4HA' => 'E02005503',
        '4HB' => 'E02005503',
        '4HD' => 'E02005503',
        '4HE' => 'E02005504',
        '4HF' => 'E02005506',
        '4HG' => 'E02005506',
        '4HH' => 'E02005504',
        '4HJ' => 'E02005504',
        '4HL' => 'E02005504',
        '4HN' => 'E02005504',
        '4HP' => 'E02005504',
        '4HQ' => 'E02005506',
        '4HR' => 'E02005504',
        '4HS' => 'E02005504',
        '4HT' => 'E02005504',
        '4HU' => 'E02005504',
        '4HW' => 'E02005504',
        '4HX' => 'E02005504',
        '4HY' => 'E02005504',
        '4HZ' => 'E02005504',
        '4JA' => 'E02005504',
        '4JB' => 'E02005504',
        '4JD' => 'E02005504',
        '4JE' => 'E02005504',
        '4JF' => 'E02005504',
        '4JG' => 'E02005504',
        '4JH' => 'E02005504',
        '4JJ' => 'E02005504',
        '4JL' => 'E02005504',
        '4JN' => 'E02005504',
        '4JP' => 'E02005504',
        '4JQ' => 'E02005504',
        '4JR' => 'E02005504',
        '4JS' => 'E02005503',
        '4JT' => 'E02005503',
        '4JU' => 'E02005503',
        '4JW' => 'E02005504',
        '4JX' => 'E02005503',
        '4JY' => 'E02005503',
        '4JZ' => 'E02005503',
        '4LA' => 'E02005503',
        '4LB' => 'E02005503',
        '4LD' => 'E02005503',
        '4LE' => 'E02005503',
        '4LF' => 'E02005503',
        '4LG' => 'E02005503',
        '4LH' => 'E02005503',
        '4LJ' => 'E02005503',
        '4LL' => 'E02005503',
        '4LN' => 'E02005503',
        '4LP' => 'E02005506',
        '4LQ' => 'E02005503',
        '4LR' => 'E02005506',
        '4LS' => 'E02005504',
        '4LT' => 'E02005503',
        '4LU' => 'E02005503',
        '4LW' => 'E02005503',
        '4LX' => 'E02005503',
        '4LY' => 'E02005503',
        '4LZ' => 'E02005503',
        '4NA' => 'E02005503',
        '4NB' => 'E02005503',
        '4ND' => 'E02005503',
        '4NE' => 'E02005503',
        '4NF' => 'E02005503',
        '4NG' => 'E02005503',
        '4NH' => 'E02005503',
        '4NJ' => 'E02005503',
        '4NL' => 'E02005503',
        '4NN' => 'E02005503',
        '4NP' => 'E02005503',
        '4NQ' => 'E02005503',
        '4NR' => 'E02005503',
        '4NS' => 'E02005503',
        '4NT' => 'E02005503',
        '4NU' => 'E02005503',
        '4NW' => 'E02005503',
        '4NX' => 'E02005503',
        '4NY' => 'E02005503',
        '4NZ' => 'E02005503',
        '4PA' => 'E02005503',
        '4PB' => 'E02005503',
        '4PD' => 'E02005503',
        '4PE' => 'E02005503',
        '4PF' => 'E02005503',
        '4PG' => 'E02005503',
        '4PH' => 'E02005503',
        '4PJ' => 'E02005503',
        '4PL' => 'E02005503',
        '4PN' => 'E02005503',
        '4PP' => 'E02005503',
        '4PQ' => 'E02005503',
        '4PR' => 'E02005505',
        '4PS' => 'E02005505',
        '4PT' => 'E02005505',
        '4PU' => 'E02005503',
        '4PW' => 'E02005504',
        '4PX' => 'E02005503',
        '4PY' => 'E02005503',
        '4PZ' => 'E02005503',
        '4QA' => 'E02005503',
        '4QB' => 'E02005503',
        '4QD' => 'E02005503',
        '4QE' => 'E02005503',
        '4QF' => 'E02005503',
        '4QG' => 'E02005503',
        '4QH' => 'E02005503',
        '4QJ' => 'E02005503',
        '4QL' => 'E02005503',
        '4QN' => 'E02005503',
        '4QP' => 'E02005503',
        '4QQ' => 'E02005503',
        '4QR' => 'E02005503',
        '4QS' => 'E02005503',
        '4QT' => 'E02005503',
        '4QU' => 'E02005503',
        '4QW' => 'E02005503',
        '4QX' => 'E02005503',
        '4QY' => 'E02005503',
        '4QZ' => 'E02005503',
        '4RA' => 'E02005503',
        '4RB' => 'E02005503',
        '4RD' => 'E02005503',
        '4RE' => 'E02005503',
        '4RF' => 'E02005503',
        '4RG' => 'E02005503',
        '4RH' => 'E02005503',
        '4RJ' => 'E02005503',
        '4RL' => 'E02005503',
        '4RN' => 'E02005503',
        '4RP' => 'E02005503',
        '4RQ' => 'E02005503',
        '4RR' => 'E02005503',
        '4RS' => 'E02005503',
        '4RT' => 'E02005503',
        '4RU' => 'E02005503',
        '4RW' => 'E02005503',
        '4RX' => 'E02005503',
        '4RY' => 'E02005503',
        '4RZ' => 'E02005503',
        '4SA' => 'E02005503',
        '4SB' => 'E02005503',
        '4SD' => 'E02005503',
        '4SE' => 'E02005503',
        '4SF' => 'E02005503',
        '4SG' => 'E02005503',
        '4SH' => 'E02005503',
        '4SJ' => 'E02005503',
        '4SL' => 'E02005503',
        '4SN' => 'E02005503',
        '4SP' => 'E02005503',
        '4SQ' => 'E02005503',
        '4SR' => 'E02005504',
        '4SS' => 'E02005503',
        '4ST' => 'E02005503',
        '4SU' => 'E02005506',
        '4SW' => 'E02005506',
        '4SX' => 'E02005503',
        '4SY' => 'E02005507',
        '4SZ' => 'E02005503',
        '4TA' => 'E02005504',
        '4TB' => 'E02005504',
        '4TD' => 'E02005504',
        '4TE' => 'E02005504',
        '4TF' => 'E02005503',
        '4TG' => 'E02005503',
        '4TH' => 'E02005506',
        '4TJ' => 'E02005503',
        '4TL' => 'E02005503',
        '4TN' => 'E02005506',
        '4TP' => 'E02005506',
        '4TQ' => 'E02005503',
        '4TR' => 'E02005503',
        '4TS' => 'E02005503',
        '4TT' => 'E02005503',
        '4TU' => 'E02005503',
        '4TW' => 'E02005506',
        '4TX' => 'E02005503',
        '4TY' => 'E02005507',
        '4TZ' => 'E02005507',
        '4UA' => 'E02005505',
        '4UB' => 'E02005503',
        '4UD' => 'E02005503',
        '4UE' => 'E02005507',
        '4UF' => 'E02005507',
        '4UG' => 'E02005503',
        '4UH' => 'E02005503',
        '4UJ' => 'E02005505',
        '4UL' => 'E02005507',
        '4UN' => 'E02005503',
        '4UP' => 'E02005503',
        '4UQ' => 'E02005505',
        '4UR' => 'E02005507',
        '4US' => 'E02005503',
        '4UU' => 'E02005504',
        '4UW' => 'E02005503',
        '4UX' => 'E02005503',
        '4UY' => 'E02005504',
        '4UZ' => 'E02005507',
        '4WA' => 'E02005507',
        '4WB' => 'E02005504',
        '4WD' => 'E02005507',
        '4WE' => 'E02005503',
        '4WF' => 'E02005503',
        '4WG' => 'E02005503',
        '4WH' => 'E02005503',
        '4WX' => 'E02005507',
        '4WY' => 'E02005504',
        '4WZ' => 'E02005507',
        '4XA' => 'E02005507',
        '4XB' => 'E02005503',
        '4YS' => 'E02005507',
        '4ZG' => 'E02005507',
        '4ZR' => 'E02005504',
        '4ZS' => 'E02005507',
        '5AA' => 'E02005504',
        '5AB' => 'E02005503',
        '5AD' => 'E02005521',
        '5AE' => 'E02005504',
        '5AF' => 'E02005507',
        '5AG' => 'E02005503',
        '5AH' => 'E02005503',
        '5AJ' => 'E02005503',
        '5AL' => 'E02005521',
        '5AN' => 'E02005521',
        '5AP' => 'E02005504',
        '5AQ' => 'E02005503',
        '5AR' => 'E02005577',
        '5AS' => 'E02005577',
        '5AT' => 'E02005504',
        '5AU' => 'E02005578',
        '5AW' => 'E02005577',
        '5AX' => 'E02005577',
        '5AY' => 'E02005577',
        '5AZ' => 'E02005577',
        '5BA' => 'E02005577',
        '5BB' => 'E02005577',
        '5BD' => 'E02005577',
        '5BE' => 'E02005577',
        '5BF' => 'E02005577',
        '5BG' => 'E02005577',
        '5BH' => 'E02005577',
        '5BJ' => 'E02005577',
        '5BL' => 'E02005577',
        '5BN' => 'E02005577',
        '5BP' => 'E02005577',
        '5BQ' => 'E02005577',
        '5BS' => 'E02005577',
        '5BT' => 'E02005577',
        '5BU' => 'E02005577',
        '5BW' => 'E02005577',
        '5BX' => 'E02005577',
        '5BY' => 'E02005577',
        '5BZ' => 'E02005577',
        '5DA' => 'E02005577',
        '5DB' => 'E02005577',
        '5DD' => 'E02005577',
        '5DE' => 'E02005577',
        '5DF' => 'E02005577',
        '5DG' => 'E02005577',
        '5DH' => 'E02005577',
        '5DJ' => 'E02005504',
        '5DL' => 'E02005503',
        '5DN' => 'E02005503',
        '5DP' => 'E02005504',
        '5DQ' => 'E02005577',
        '5DR' => 'E02005504',
        '5DS' => 'E02005504',
        '5DT' => 'E02005504',
        '5DU' => 'E02005504',
        '5DW' => 'E02005504',
        '5DX' => 'E02005504',
        '5DY' => 'E02005504',
        '5DZ' => 'E02005504',
        '5EA' => 'E02005504',
        '5EB' => 'E02005504',
        '5ED' => 'E02005504',
        '5EE' => 'E02005504',
        '5EF' => 'E02005503',
        '5EG' => 'E02005503',
        '5EH' => 'E02005503',
        '5EJ' => 'E02005503',
        '5EL' => 'E02005503',
        '5EN' => 'E02005503',
        '5EP' => 'E02005503',
        '5EQ' => 'E02005503',
        '5ER' => 'E02005503',
        '5ES' => 'E02005503',
        '5ET' => 'E02005503',
        '5EU' => 'E02005503',
        '5EW' => 'E02005503',
        '5EX' => 'E02005503',
        '5EY' => 'E02005503',
        '5EZ' => 'E02005503',
        '5FA' => 'E02005577',
        '5FB' => 'E02005503',
        '5GD' => 'E02005504',
        '5GY' => 'E02005521',
        '5GZ' => 'E02005503',
        '5HA' => 'E02005503',
        '5HB' => 'E02005503',
        '5HD' => 'E02005503',
        '5HE' => 'E02005503',
        '5HF' => 'E02005503',
        '5HG' => 'E02005503',
        '5HH' => 'E02005503',
        '5HJ' => 'E02005503',
        '5HL' => 'E02005503',
        '5HN' => 'E02005503',
        '5HP' => 'E02005503',
        '5HQ' => 'E02005503',
        '5HR' => 'E02005503',
        '5HS' => 'E02005503',
        '5HT' => 'E02005503',
        '5HU' => 'E02005503',
        '5HW' => 'E02005503',
        '5HX' => 'E02005503',
        '5HY' => 'E02005504',
        '5HZ' => 'E02005503',
        '5JA' => 'E02005503',
        '5JB' => 'E02005503',
        '5JD' => 'E02005503',
        '5JE' => 'E02005503',
        '5JF' => 'E02005503',
        '5JG' => 'E02005503',
        '5JH' => 'E02005503',
        '5JJ' => 'E02005503',
        '5JL' => 'E02005503',
        '5JN' => 'E02005503',
        '5JP' => 'E02005503',
        '5JQ' => 'E02005503',
        '5JR' => 'E02005503',
        '5JS' => 'E02005503',
        '5JT' => 'E02005503',
        '5JU' => 'E02005503',
        '5JW' => 'E02005503',
        '5JX' => 'E02005503',
        '5JY' => 'E02005503',
        '5JZ' => 'E02005503',
        '5LA' => 'E02005503',
        '5LB' => 'E02005503',
        '5LD' => 'E02005503',
        '5LE' => 'E02005503',
        '5LF' => 'E02005503',
        '5LG' => 'E02005507',
        '5LH' => 'E02005504',
        '5LJ' => 'E02005504',
        '5LL' => 'E02005504',
        '5LN' => 'E02005504',
        '5LP' => 'E02005504',
        '5LQ' => 'E02005504',
        '5LR' => 'E02005504',
        '5LS' => 'E02005503',
        '5LT' => 'E02005503',
        '5LU' => 'E02005503',
        '5LW' => 'E02005504',
        '5LX' => 'E02005503',
        '5LY' => 'E02005503',
        '5LZ' => 'E02005503',
        '5NA' => 'E02005503',
        '5NB' => 'E02005503',
        '5ND' => 'E02005503',
        '5NE' => 'E02005503',
        '5NF' => 'E02005503',
        '5NG' => 'E02005503',
        '5NH' => 'E02005503',
        '5NJ' => 'E02005503',
        '5NL' => 'E02005503',
        '5NN' => 'E02005503',
        '5NP' => 'E02005503',
        '5NQ' => 'E02005503',
        '5NR' => 'E02005504',
        '5NS' => 'E02005503',
        '5NT' => 'E02005503',
        '5NU' => 'E02005503',
        '5NW' => 'E02005503',
        '5NX' => 'E02005503',
        '5NY' => 'E02005503',
        '5NZ' => 'E02005503',
        '5PA' => 'E02005503',
        '5PB' => 'E02005578',
        '5PD' => 'E02005578',
        '5PE' => 'E02005578',
        '5PF' => 'E02005578',
        '5PG' => 'E02005503',
        '5PH' => 'E02005503',
        '5PJ' => 'E02005503',
        '5PL' => 'E02005503',
        '5PN' => 'E02005521',
        '5PP' => 'E02005521',
        '5PQ' => 'E02005503',
        '5PR' => 'E02005521',
        '5PS' => 'E02005521',
        '5PT' => 'E02005521',
        '5PU' => 'E02005521',
        '5PW' => 'E02005503',
        '5PX' => 'E02005521',
        '5PY' => 'E02005521',
        '5PZ' => 'E02005507',
        '5QA' => 'E02005521',
        '5QB' => 'E02005521',
        '5QD' => 'E02005521',
        '5QE' => 'E02005521',
        '5QF' => 'E02005521',
        '5QG' => 'E02005521',
        '5QH' => 'E02005521',
        '5QJ' => 'E02005521',
        '5QL' => 'E02005521',
        '5QN' => 'E02005521',
        '5QP' => 'E02005577',
        '5QQ' => 'E02005521',
        '5QR' => 'E02005577',
        '5QS' => 'E02005577',
        '5QT' => 'E02005577',
        '5QU' => 'E02005577',
        '5QW' => 'E02005521',
        '5QX' => 'E02005577',
        '5QY' => 'E02005577',
        '5QZ' => 'E02005577',
        '5RA' => 'E02005521',
        '5RB' => 'E02005521',
        '5RD' => 'E02005521',
        '5RE' => 'E02005521',
        '5RF' => 'E02005521',
        '5RG' => 'E02005521',
        '5RH' => 'E02005521',
        '5RJ' => 'E02005521',
        '5RL' => 'E02005521',
        '5RN' => 'E02005521',
        '5RP' => 'E02005521',
        '5RQ' => 'E02005521',
        '5RR' => 'E02005521',
        '5RS' => 'E02005521',
        '5RT' => 'E02005521',
        '5RU' => 'E02005521',
        '5RW' => 'E02005521',
        '5RX' => 'E02005521',
        '5RY' => 'E02005521',
        '5RZ' => 'E02005521',
        '5SA' => 'E02005521',
        '5SB' => 'E02005521',
        '5SD' => 'E02005521',
        '5SE' => 'E02005521',
        '5SF' => 'E02005521',
        '5SG' => 'E02005521',
        '5SH' => 'E02005521',
        '5SJ' => 'E02005521',
        '5SL' => 'E02005521',
        '5SN' => 'E02005521',
        '5SP' => 'E02005504',
        '5SQ' => 'E02005521',
        '5SR' => 'E02005504',
        '5SS' => 'E02005504',
        '5ST' => 'E02005504',
        '5SU' => 'E02005504',
        '5SW' => 'E02005521',
        '5SX' => 'E02005504',
        '5SY' => 'E02005504',
        '5SZ' => 'E02005504',
        '5TA' => 'E02005504',
        '5TB' => 'E02005504',
        '5TD' => 'E02005504',
        '5TE' => 'E02005504',
        '5TF' => 'E02005504',
        '5TG' => 'E02005504',
        '5TH' => 'E02005504',
        '5TJ' => 'E02005521',
        '5TL' => 'E02005504',
        '5TN' => 'E02005521',
        '5TP' => 'E02005504',
        '5TQ' => 'E02005504',
        '5TR' => 'E02005521',
        '5TS' => 'E02005503',
        '5TT' => 'E02005521',
        '5TU' => 'E02005504',
        '5TW' => 'E02005521',
        '5TX' => 'E02005521',
        '5TY' => 'E02005521',
        '5UA' => 'E02005577',
        '5UB' => 'E02005577',
        '5WB' => 'E02005507',
        '5WG' => 'E02005577',
        '5WH' => 'E02005577',
        '5WW' => 'E02005507',
        '5WX' => 'E02005577',
        '5WY' => 'E02005507',
        '5WZ' => 'E02005507',
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
