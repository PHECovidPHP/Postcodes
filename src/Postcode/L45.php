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
final class L45
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0JA' => 'E02001469',
        '0JB' => 'E02001469',
        '0JD' => 'E02001469',
        '0JE' => 'E02001469',
        '0JF' => 'E02001469',
        '0JH' => 'E02001469',
        '0JJ' => 'E02001469',
        '0JL' => 'E02001469',
        '0JN' => 'E02001470',
        '0JP' => 'E02001470',
        '0JQ' => 'E02001469',
        '0JR' => 'E02001470',
        '0JS' => 'E02001470',
        '0JT' => 'E02001469',
        '0JU' => 'E02001469',
        '0JW' => 'E02001469',
        '0JX' => 'E02001469',
        '0JY' => 'E02001467',
        '0JZ' => 'E02001467',
        '0LA' => 'E02001470',
        '0LB' => 'E02001470',
        '0LD' => 'E02001470',
        '0LE' => 'E02001469',
        '0LF' => 'E02001470',
        '0LG' => 'E02001470',
        '0LH' => 'E02001470',
        '0LJ' => 'E02001469',
        '0LL' => 'E02001469',
        '0LN' => 'E02001469',
        '0LP' => 'E02001469',
        '0LQ' => 'E02001470',
        '0LR' => 'E02001469',
        '0LS' => 'E02001469',
        '0LT' => 'E02001469',
        '0LU' => 'E02001467',
        '0LW' => 'E02001470',
        '0LX' => 'E02001469',
        '0LY' => 'E02001469',
        '0LZ' => 'E02001469',
        '0NA' => 'E02001470',
        '0NB' => 'E02001467',
        '0ND' => 'E02001467',
        '0NE' => 'E02001469',
        '0NF' => 'E02001470',
        '0NH' => 'E02001469',
        '0NJ' => 'E02001469',
        '0NL' => 'E02001469',
        '0NN' => 'E02001469',
        '0NP' => 'E02001469',
        '0NQ' => 'E02001469',
        '0NR' => 'E02001469',
        '0NS' => 'E02001469',
        '0NT' => 'E02001469',
        '0NW' => 'E02001469',
        '0NX' => 'E02001469',
        '0NY' => 'E02001469',
        '0RF' => 'E02001469',
        '0ZZ' => 'E02001476',
        '1GB' => 'E02001467',
        '1GD' => 'E02001467',
        '1GE' => 'E02001467',
        '1GF' => 'E02001467',
        '1GH' => 'E02001467',
        '1GJ' => 'E02001467',
        '1GL' => 'E02001467',
        '1GN' => 'E02001467',
        '1GP' => 'E02001467',
        '1GR' => 'E02001467',
        '1GS' => 'E02001467',
        '1GT' => 'E02001467',
        '1GU' => 'E02001467',
        '1GW' => 'E02001467',
        '1HA' => 'E02001468',
        '1HB' => 'E02001468',
        '1HD' => 'E02001468',
        '1HE' => 'E02001468',
        '1HF' => 'E02001468',
        '1HG' => 'E02001467',
        '1HJ' => 'E02001468',
        '1HL' => 'E02001468',
        '1HN' => 'E02001468',
        '1HP' => 'E02001468',
        '1HQ' => 'E02001468',
        '1HR' => 'E02001468',
        '1HS' => 'E02001468',
        '1HT' => 'E02001468',
        '1HU' => 'E02001468',
        '1HW' => 'E02001468',
        '1HX' => 'E02001468',
        '1HY' => 'E02001468',
        '1HZ' => 'E02001468',
        '1JA' => 'E02001468',
        '1JB' => 'E02001468',
        '1JD' => 'E02001468',
        '1JE' => 'E02001468',
        '1JF' => 'E02001468',
        '1JG' => 'E02001468',
        '1JH' => 'E02001468',
        '1JJ' => 'E02001468',
        '1JL' => 'E02001468',
        '1JN' => 'E02001468',
        '1JP' => 'E02001468',
        '1JQ' => 'E02001468',
        '1JR' => 'E02001468',
        '1JS' => 'E02001467',
        '1JT' => 'E02001467',
        '1JU' => 'E02001467',
        '1JW' => 'E02001468',
        '1JX' => 'E02001467',
        '1JY' => 'E02001467',
        '1JZ' => 'E02001467',
        '1LA' => 'E02001467',
        '1LD' => 'E02001467',
        '1LE' => 'E02001467',
        '1LF' => 'E02001467',
        '1LG' => 'E02001467',
        '1LH' => 'E02001467',
        '1LJ' => 'E02001467',
        '1LL' => 'E02001467',
        '1LN' => 'E02001467',
        '1LP' => 'E02001467',
        '1LQ' => 'E02001467',
        '1LR' => 'E02001467',
        '1LS' => 'E02001467',
        '1LT' => 'E02001467',
        '1LU' => 'E02001467',
        '1LW' => 'E02001468',
        '1LX' => 'E02001467',
        '1LY' => 'E02001467',
        '1LZ' => 'E02001467',
        '1NA' => 'E02001467',
        '1NB' => 'E02001467',
        '1ND' => 'E02001467',
        '1NE' => 'E02001467',
        '1NF' => 'E02001467',
        '1NG' => 'E02001468',
        '1NH' => 'E02001468',
        '1NJ' => 'E02001468',
        '1NN' => 'E02001467',
        '1NP' => 'E02001467',
        '1NQ' => 'E02001468',
        '1NR' => 'E02001467',
        '1NS' => 'E02001467',
        '1NT' => 'E02001467',
        '1NU' => 'E02001467',
        '1NW' => 'E02001467',
        '1NX' => 'E02001467',
        '1NZ' => 'E02001468',
        '2HZ' => 'E02001467',
        '2JA' => 'E02001467',
        '2JB' => 'E02001467',
        '2JD' => 'E02001467',
        '2JE' => 'E02001467',
        '2JF' => 'E02001467',
        '2JH' => 'E02001467',
        '2JJ' => 'E02001467',
        '2JN' => 'E02001467',
        '2JP' => 'E02001467',
        '2JQ' => 'E02001467',
        '2JR' => 'E02001467',
        '2JS' => 'E02001467',
        '2JT' => 'E02001467',
        '2JU' => 'E02001467',
        '2JW' => 'E02001467',
        '2JX' => 'E02001467',
        '2JY' => 'E02001467',
        '2JZ' => 'E02001467',
        '2LA' => 'E02001467',
        '2LB' => 'E02001467',
        '2LD' => 'E02001467',
        '2LE' => 'E02001467',
        '2LF' => 'E02001467',
        '2LG' => 'E02001467',
        '2LH' => 'E02001467',
        '2LJ' => 'E02001467',
        '2LL' => 'E02001467',
        '2LN' => 'E02001467',
        '2LQ' => 'E02001467',
        '2LR' => 'E02001467',
        '2LS' => 'E02001467',
        '2LT' => 'E02001467',
        '2LU' => 'E02001467',
        '2LW' => 'E02001467',
        '2LX' => 'E02001467',
        '2LY' => 'E02001467',
        '2LZ' => 'E02001467',
        '2NA' => 'E02001467',
        '2NB' => 'E02001467',
        '2ND' => 'E02001467',
        '2NE' => 'E02001467',
        '2NF' => 'E02001467',
        '2NG' => 'E02001467',
        '2NH' => 'E02001467',
        '2NJ' => 'E02001467',
        '2NL' => 'E02001467',
        '2NN' => 'E02001467',
        '2NP' => 'E02001467',
        '2NQ' => 'E02001467',
        '2NR' => 'E02001467',
        '2NS' => 'E02001467',
        '2NT' => 'E02001467',
        '2NU' => 'E02001467',
        '2NW' => 'E02001467',
        '2NX' => 'E02001467',
        '2NY' => 'E02001467',
        '2NZ' => 'E02001467',
        '2PA' => 'E02001467',
        '2PB' => 'E02001467',
        '2PE' => 'E02001467',
        '2PG' => 'E02001467',
        '2PH' => 'E02001467',
        '2PJ' => 'E02001467',
        '2PL' => 'E02001467',
        '2PN' => 'E02001467',
        '2PP' => 'E02001467',
        '2PQ' => 'E02001467',
        '2PR' => 'E02001467',
        '2PS' => 'E02001467',
        '2PT' => 'E02001467',
        '2PU' => 'E02001467',
        '2PW' => 'E02001467',
        '2PX' => 'E02001467',
        '2PY' => 'E02001467',
        '2PZ' => 'E02001467',
        '2QA' => 'E02001467',
        '3GH' => 'E02001470',
        '3HA' => 'E02001469',
        '3HB' => 'E02001469',
        '3HD' => 'E02001469',
        '3HE' => 'E02001469',
        '3HF' => 'E02001469',
        '3HG' => 'E02001469',
        '3HH' => 'E02001469',
        '3HJ' => 'E02001469',
        '3HL' => 'E02001469',
        '3HN' => 'E02001469',
        '3HP' => 'E02001469',
        '3HQ' => 'E02001469',
        '3HR' => 'E02001469',
        '3HS' => 'E02001469',
        '3HT' => 'E02001469',
        '3HU' => 'E02001469',
        '3HW' => 'E02001469',
        '3HX' => 'E02001469',
        '3HY' => 'E02001469',
        '3HZ' => 'E02001469',
        '3JA' => 'E02001469',
        '3JB' => 'E02001469',
        '3JD' => 'E02001469',
        '3JE' => 'E02001469',
        '3JF' => 'E02001469',
        '3JG' => 'E02001469',
        '3JH' => 'E02001469',
        '3JJ' => 'E02001469',
        '3JL' => 'E02001469',
        '3JN' => 'E02001469',
        '3JP' => 'E02001469',
        '3JQ' => 'E02001469',
        '3JR' => 'E02001469',
        '3JS' => 'E02001469',
        '3JT' => 'E02001469',
        '3JU' => 'E02001469',
        '3JW' => 'E02001469',
        '3JX' => 'E02001469',
        '3JY' => 'E02001469',
        '3JZ' => 'E02001469',
        '3LA' => 'E02001469',
        '3LD' => 'E02001469',
        '3LE' => 'E02001469',
        '3LF' => 'E02001469',
        '3LG' => 'E02001469',
        '3LH' => 'E02001469',
        '3LJ' => 'E02001472',
        '3LL' => 'E02001469',
        '3LN' => 'E02001469',
        '3LP' => 'E02001469',
        '3LQ' => 'E02001469',
        '3LR' => 'E02001469',
        '3LS' => 'E02001469',
        '3LT' => 'E02001469',
        '3LU' => 'E02001469',
        '3LX' => 'E02001469',
        '3LY' => 'E02001469',
        '3LZ' => 'E02001469',
        '3NA' => 'E02001469',
        '3NB' => 'E02001469',
        '3ND' => 'E02001469',
        '3NE' => 'E02001469',
        '3NF' => 'E02001469',
        '3NG' => 'E02001469',
        '3NH' => 'E02001470',
        '3NL' => 'E02001469',
        '3NN' => 'E02001469',
        '3NP' => 'E02001469',
        '3NQ' => 'E02001469',
        '3NR' => 'E02001469',
        '3NS' => 'E02001469',
        '3NT' => 'E02001469',
        '3NU' => 'E02001469',
        '3NW' => 'E02001469',
        '3NX' => 'E02001469',
        '3NY' => 'E02001469',
        '3NZ' => 'E02001469',
        '3PA' => 'E02001469',
        '3PB' => 'E02001469',
        '3PD' => 'E02001469',
        '3PG' => 'E02001469',
        '3PJ' => 'E02001469',
        '3PN' => 'E02001469',
        '3PS' => 'E02001469',
        '3PU' => 'E02001469',
        '3PW' => 'E02001469',
        '3PZ' => 'E02001469',
        '3QA' => 'E02001469',
        '3QD' => 'E02001469',
        '3QE' => 'E02001469',
        '3QF' => 'E02001469',
        '3QG' => 'E02001469',
        '3QH' => 'E02001469',
        '3QJ' => 'E02001469',
        '3QL' => 'E02001469',
        '3QN' => 'E02001469',
        '3QP' => 'E02001469',
        '3QQ' => 'E02001469',
        '3QR' => 'E02001469',
        '3QS' => 'E02001469',
        '3QW' => 'E02001469',
        '4FA' => 'E02001470',
        '4FB' => 'E02001473',
        '4FD' => 'E02001473',
        '4FH' => 'E02001473',
        '4FJ' => 'E02001473',
        '4FL' => 'E02001470',
        '4FN' => 'E02001470',
        '4FP' => 'E02001473',
        '4FQ' => 'E02001470',
        '4FR' => 'E02001470',
        '4FU' => 'E02001470',
        '4FW' => 'E02001470',
        '4FX' => 'E02001470',
        '4FY' => 'E02001473',
        '4FZ' => 'E02001473',
        '4JA' => 'E02001473',
        '4JB' => 'E02001473',
        '4JF' => 'E02001473',
        '4JG' => 'E02001473',
        '4JH' => 'E02001473',
        '4JJ' => 'E02001473',
        '4JL' => 'E02001473',
        '4JN' => 'E02001473',
        '4JP' => 'E02001473',
        '4JQ' => 'E02001473',
        '4JR' => 'E02001473',
        '4JS' => 'E02001473',
        '4JT' => 'E02001473',
        '4JU' => 'E02001473',
        '4JW' => 'E02001473',
        '4JX' => 'E02001473',
        '4JY' => 'E02001473',
        '4LA' => 'E02001468',
        '4LB' => 'E02001473',
        '4LD' => 'E02001467',
        '4LE' => 'E02001467',
        '4LF' => 'E02001470',
        '4LG' => 'E02001473',
        '4LJ' => 'E02001470',
        '4LL' => 'E02001470',
        '4LN' => 'E02001470',
        '4LP' => 'E02001470',
        '4LQ' => 'E02001470',
        '4LR' => 'E02001470',
        '4LS' => 'E02001470',
        '4LT' => 'E02001470',
        '4LU' => 'E02001468',
        '4LW' => 'E02001470',
        '4LX' => 'E02001470',
        '4LY' => 'E02001473',
        '4LZ' => 'E02001473',
        '4NB' => 'E02001473',
        '4ND' => 'E02001473',
        '4NE' => 'E02001473',
        '4NF' => 'E02001473',
        '4NG' => 'E02001473',
        '4NH' => 'E02001473',
        '4NL' => 'E02001473',
        '4NN' => 'E02001473',
        '4NP' => 'E02001473',
        '4NQ' => 'E02001473',
        '4NS' => 'E02001473',
        '4NW' => 'E02001473',
        '4NZ' => 'E02001473',
        '4PA' => 'E02001473',
        '4PB' => 'E02001473',
        '4PD' => 'E02001473',
        '4PE' => 'E02001473',
        '4PF' => 'E02001470',
        '4PG' => 'E02001473',
        '4PH' => 'E02001470',
        '4PJ' => 'E02001470',
        '4PL' => 'E02001470',
        '4PN' => 'E02001470',
        '4PP' => 'E02001470',
        '4PQ' => 'E02001470',
        '4PR' => 'E02001470',
        '4PS' => 'E02001470',
        '4PT' => 'E02001470',
        '4PU' => 'E02001470',
        '4PW' => 'E02001470',
        '4PX' => 'E02001470',
        '4PY' => 'E02001470',
        '4PZ' => 'E02001469',
        '4QA' => 'E02001470',
        '4QB' => 'E02001470',
        '4QD' => 'E02001470',
        '4QE' => 'E02001470',
        '4QF' => 'E02001470',
        '4QG' => 'E02001470',
        '4QH' => 'E02001470',
        '4QJ' => 'E02001470',
        '4QL' => 'E02001470',
        '4QN' => 'E02001470',
        '4QP' => 'E02001473',
        '4QQ' => 'E02001470',
        '4QR' => 'E02001473',
        '4QS' => 'E02001473',
        '4QT' => 'E02001473',
        '4QU' => 'E02001473',
        '4QW' => 'E02001470',
        '4QX' => 'E02001473',
        '4QY' => 'E02001473',
        '4QZ' => 'E02001473',
        '4RA' => 'E02001473',
        '4RB' => 'E02001473',
        '4RD' => 'E02001470',
        '4RE' => 'E02001473',
        '4RF' => 'E02001473',
        '4RG' => 'E02001470',
        '4RH' => 'E02001470',
        '4RJ' => 'E02001470',
        '4RL' => 'E02001473',
        '4RN' => 'E02001473',
        '4RP' => 'E02001473',
        '4RQ' => 'E02001470',
        '4RR' => 'E02001473',
        '4RS' => 'E02001470',
        '4RT' => 'E02001470',
        '4RU' => 'E02001473',
        '4RW' => 'E02001473',
        '4RX' => 'E02001470',
        '4RY' => 'E02001470',
        '4RZ' => 'E02001473',
        '4SB' => 'E02001470',
        '4SD' => 'E02001470',
        '4SE' => 'E02001470',
        '4SF' => 'E02001470',
        '4SG' => 'E02001470',
        '4SH' => 'E02001473',
        '4SJ' => 'E02001470',
        '4SL' => 'E02001473',
        '4SN' => 'E02001473',
        '4SP' => 'E02001473',
        '4SQ' => 'E02001470',
        '4SS' => 'E02001470',
        '4ST' => 'E02001473',
        '4SU' => 'E02001470',
        '4SW' => 'E02001473',
        '4SY' => 'E02001473',
        '4TB' => 'E02001473',
        '4TD' => 'E02001473',
        '4TE' => 'E02001473',
        '4TF' => 'E02001473',
        '4TH' => 'E02001473',
        '5AA' => 'E02001473',
        '5AD' => 'E02001467',
        '5AE' => 'E02001467',
        '5AF' => 'E02001467',
        '5AG' => 'E02001467',
        '5AH' => 'E02001468',
        '5AJ' => 'E02001467',
        '5AL' => 'E02001468',
        '5AN' => 'E02001467',
        '5AP' => 'E02001467',
        '5AQ' => 'E02001467',
        '5AR' => 'E02001467',
        '5AS' => 'E02001467',
        '5AT' => 'E02001467',
        '5AU' => 'E02001467',
        '5AW' => 'E02001467',
        '5AX' => 'E02001467',
        '5AY' => 'E02001468',
        '5AZ' => 'E02001468',
        '5BA' => 'E02001467',
        '5BB' => 'E02001467',
        '5BD' => 'E02001467',
        '5BE' => 'E02001467',
        '5BG' => 'E02001467',
        '5BN' => 'E02001467',
        '5BP' => 'E02001467',
        '5BQ' => 'E02001467',
        '5BR' => 'E02001467',
        '5BS' => 'E02001467',
        '5BT' => 'E02001467',
        '5BU' => 'E02001467',
        '5BW' => 'E02001467',
        '5BX' => 'E02001467',
        '5BY' => 'E02001467',
        '5BZ' => 'E02001467',
        '5DA' => 'E02001467',
        '5DB' => 'E02001467',
        '5DD' => 'E02001468',
        '5DE' => 'E02001468',
        '5DF' => 'E02001468',
        '5DG' => 'E02001468',
        '5DH' => 'E02001468',
        '5DJ' => 'E02001468',
        '5DL' => 'E02001468',
        '5DN' => 'E02001468',
        '5DP' => 'E02001470',
        '5DQ' => 'E02001468',
        '5DR' => 'E02001468',
        '5DS' => 'E02001468',
        '5DT' => 'E02001468',
        '5DU' => 'E02001468',
        '5DW' => 'E02001468',
        '5DX' => 'E02001468',
        '5DY' => 'E02001470',
        '5DZ' => 'E02001470',
        '5EA' => 'E02001470',
        '5EB' => 'E02001468',
        '5ED' => 'E02001468',
        '5EE' => 'E02001468',
        '5EF' => 'E02001468',
        '5EG' => 'E02001468',
        '5EH' => 'E02001468',
        '5EJ' => 'E02001470',
        '5EL' => 'E02001467',
        '5EN' => 'E02001467',
        '5EP' => 'E02001468',
        '5EQ' => 'E02001468',
        '5ER' => 'E02001468',
        '5ES' => 'E02001468',
        '5ET' => 'E02001467',
        '5EU' => 'E02001467',
        '5EW' => 'E02001467',
        '5EX' => 'E02001467',
        '5EY' => 'E02001467',
        '5EZ' => 'E02001467',
        '5HA' => 'E02001470',
        '5HB' => 'E02001470',
        '5HD' => 'E02001470',
        '5HE' => 'E02001470',
        '5HF' => 'E02001470',
        '5HG' => 'E02001470',
        '5HH' => 'E02001470',
        '5HJ' => 'E02001470',
        '5HL' => 'E02001470',
        '5HN' => 'E02001470',
        '5HP' => 'E02001470',
        '5HQ' => 'E02001470',
        '5HR' => 'E02001470',
        '5HS' => 'E02001470',
        '5HT' => 'E02001470',
        '5HU' => 'E02001470',
        '5HW' => 'E02001470',
        '5HX' => 'E02001470',
        '5HY' => 'E02001470',
        '5HZ' => 'E02001470',
        '5JA' => 'E02001470',
        '5JB' => 'E02001467',
        '5JD' => 'E02001467',
        '5JE' => 'E02001467',
        '5JG' => 'E02001470',
        '5JH' => 'E02001467',
        '5JJ' => 'E02001470',
        '5JL' => 'E02001470',
        '5JN' => 'E02001467',
        '5JP' => 'E02001467',
        '5JQ' => 'E02001467',
        '5JU' => 'E02001467',
        '5JW' => 'E02001470',
        '5JX' => 'E02001470',
        '5JZ' => 'E02001467',
        '5LA' => 'E02001470',
        '5LB' => 'E02001470',
        '5LD' => 'E02001468',
        '5LE' => 'E02001470',
        '5LF' => 'E02001468',
        '5LG' => 'E02001468',
        '5LH' => 'E02001468',
        '5LL' => 'E02001468',
        '5LN' => 'E02001468',
        '5LQ' => 'E02001468',
        '5LW' => 'E02001468',
        '6TA' => 'E02001470',
        '6TB' => 'E02001469',
        '6TD' => 'E02001470',
        '6TE' => 'E02001469',
        '6TF' => 'E02001469',
        '6TG' => 'E02001469',
        '6TH' => 'E02001470',
        '6TJ' => 'E02001470',
        '6TL' => 'E02001469',
        '6TN' => 'E02001470',
        '6TP' => 'E02001470',
        '6TQ' => 'E02001470',
        '6TR' => 'E02001470',
        '6TS' => 'E02001470',
        '6TT' => 'E02001470',
        '6TU' => 'E02001469',
        '6TW' => 'E02001470',
        '6TX' => 'E02001470',
        '6TY' => 'E02001469',
        '6TZ' => 'E02001469',
        '6UA' => 'E02001470',
        '6UB' => 'E02001469',
        '6UD' => 'E02001470',
        '6UE' => 'E02001469',
        '6UF' => 'E02001469',
        '6UG' => 'E02001470',
        '6UH' => 'E02001470',
        '6UJ' => 'E02001470',
        '6UL' => 'E02001470',
        '6UN' => 'E02001470',
        '6UP' => 'E02001470',
        '6UQ' => 'E02001477',
        '6UR' => 'E02001470',
        '6US' => 'E02001470',
        '6UT' => 'E02001470',
        '6UU' => 'E02001470',
        '6UW' => 'E02001470',
        '6UX' => 'E02001470',
        '6UY' => 'E02001470',
        '6UZ' => 'E02001470',
        '6XA' => 'E02001469',
        '6XB' => 'E02001469',
        '6XD' => 'E02001469',
        '6XE' => 'E02001470',
        '6XF' => 'E02001470',
        '6XG' => 'E02001470',
        '6XH' => 'E02001470',
        '6XJ' => 'E02001470',
        '6XL' => 'E02001470',
        '6XN' => 'E02001470',
        '6XP' => 'E02001470',
        '6XQ' => 'E02001470',
        '6XS' => 'E02001470',
        '6XT' => 'E02001469',
        '6XW' => 'E02001470',
        '6XX' => 'E02001470',
        '6XY' => 'E02001470',
        '6YA' => 'E02001470',
        '6YB' => 'E02001470',
        '6YD' => 'E02001470',
        '6YE' => 'E02001470',
        '6YF' => 'E02001470',
        '6YG' => 'E02001470',
        '6YH' => 'E02001470',
        '6YJ' => 'E02001470',
        '6YQ' => 'E02001470',
        '7LA' => 'E02001471',
        '7LB' => 'E02001471',
        '7LD' => 'E02001471',
        '7LE' => 'E02001471',
        '7LF' => 'E02001471',
        '7LG' => 'E02001471',
        '7LH' => 'E02001473',
        '7LJ' => 'E02001471',
        '7LL' => 'E02001471',
        '7LN' => 'E02001468',
        '7LP' => 'E02001468',
        '7LQ' => 'E02001471',
        '7LR' => 'E02001468',
        '7LT' => 'E02001468',
        '7LU' => 'E02001468',
        '7LW' => 'E02001471',
        '7LX' => 'E02001468',
        '7LY' => 'E02001468',
        '7LZ' => 'E02001468',
        '7NA' => 'E02001468',
        '7NB' => 'E02001468',
        '7ND' => 'E02001468',
        '7NE' => 'E02001468',
        '7NF' => 'E02001468',
        '7NG' => 'E02001468',
        '7NH' => 'E02001468',
        '7NJ' => 'E02001468',
        '7NL' => 'E02001468',
        '7NN' => 'E02001468',
        '7NP' => 'E02001468',
        '7NQ' => 'E02001468',
        '7NR' => 'E02001468',
        '7NS' => 'E02001468',
        '7NT' => 'E02001468',
        '7NU' => 'E02001468',
        '7NW' => 'E02001468',
        '7NX' => 'E02001468',
        '7NY' => 'E02001468',
        '7NZ' => 'E02001468',
        '7PA' => 'E02001468',
        '7PB' => 'E02001468',
        '7PD' => 'E02001468',
        '7PE' => 'E02001468',
        '7PF' => 'E02001468',
        '7PG' => 'E02001468',
        '7PH' => 'E02001468',
        '7PJ' => 'E02001468',
        '7PL' => 'E02001468',
        '7PN' => 'E02001468',
        '7PP' => 'E02001468',
        '7PQ' => 'E02001471',
        '7PR' => 'E02001468',
        '7PS' => 'E02001468',
        '7PT' => 'E02001468',
        '7PU' => 'E02001468',
        '7PW' => 'E02001468',
        '7PX' => 'E02001468',
        '7PY' => 'E02001471',
        '7PZ' => 'E02001468',
        '7QA' => 'E02001468',
        '7QD' => 'E02001468',
        '7QE' => 'E02001468',
        '7QF' => 'E02001468',
        '7QG' => 'E02001470',
        '7QH' => 'E02001468',
        '7QJ' => 'E02001468',
        '7QL' => 'E02001468',
        '7QN' => 'E02001468',
        '7QP' => 'E02001468',
        '7QQ' => 'E02001468',
        '7QR' => 'E02001468',
        '7QS' => 'E02001468',
        '7QT' => 'E02001468',
        '7QU' => 'E02001468',
        '7QW' => 'E02001468',
        '7QX' => 'E02001468',
        '7QY' => 'E02001471',
        '7QZ' => 'E02001468',
        '7RA' => 'E02001468',
        '7RB' => 'E02001468',
        '7RD' => 'E02001468',
        '7RE' => 'E02001471',
        '7RG' => 'E02001471',
        '7RH' => 'E02001471',
        '7RJ' => 'E02001468',
        '7RN' => 'E02001468',
        '7RP' => 'E02001468',
        '7RQ' => 'E02001471',
        '7RR' => 'E02001468',
        '7RT' => 'E02001468',
        '7RU' => 'E02001468',
        '7RX' => 'E02001468',
        '7RY' => 'E02001468',
        '7RZ' => 'E02001468',
        '7SA' => 'E02001468',
        '7SD' => 'E02001471',
        '7SF' => 'E02001468',
        '7SG' => 'E02001468',
        '7SH' => 'E02001471',
        '7SQ' => 'E02001468',
        '8JA' => 'E02001472',
        '8JB' => 'E02001472',
        '8JD' => 'E02001472',
        '8JE' => 'E02001472',
        '8JG' => 'E02001472',
        '8JH' => 'E02001472',
        '8JJ' => 'E02001472',
        '8JL' => 'E02001469',
        '8JN' => 'E02001472',
        '8JP' => 'E02001472',
        '8JQ' => 'E02001472',
        '8JR' => 'E02001469',
        '8JS' => 'E02001469',
        '8JT' => 'E02001469',
        '8JU' => 'E02001469',
        '8JW' => 'E02001472',
        '8JX' => 'E02001469',
        '8JY' => 'E02001469',
        '8JZ' => 'E02001469',
        '8LA' => 'E02001469',
        '8LB' => 'E02001469',
        '8LD' => 'E02001469',
        '8LE' => 'E02001472',
        '8LF' => 'E02001472',
        '8LG' => 'E02001472',
        '8LH' => 'E02001472',
        '8LJ' => 'E02001472',
        '8LL' => 'E02001469',
        '8LN' => 'E02001469',
        '8LP' => 'E02001469',
        '8LQ' => 'E02001472',
        '8LR' => 'E02001472',
        '8LS' => 'E02001469',
        '8LT' => 'E02001470',
        '8LU' => 'E02001470',
        '8LW' => 'E02001472',
        '8LX' => 'E02001469',
        '8LY' => 'E02001472',
        '8LZ' => 'E02001472',
        '8NA' => 'E02001472',
        '8NB' => 'E02001472',
        '8ND' => 'E02001472',
        '8NE' => 'E02001472',
        '8NF' => 'E02001472',
        '8NG' => 'E02001469',
        '8NH' => 'E02001472',
        '8NJ' => 'E02001472',
        '8NL' => 'E02001472',
        '8NN' => 'E02001469',
        '8NP' => 'E02001469',
        '8NQ' => 'E02001469',
        '8NR' => 'E02001469',
        '8NS' => 'E02001472',
        '8NT' => 'E02001469',
        '8NU' => 'E02001469',
        '8NW' => 'E02001469',
        '8NX' => 'E02001469',
        '8NY' => 'E02001469',
        '8NZ' => 'E02001469',
        '8PA' => 'E02001469',
        '8PB' => 'E02001469',
        '8PD' => 'E02001469',
        '8PE' => 'E02001469',
        '8PF' => 'E02001469',
        '8PG' => 'E02001469',
        '8PH' => 'E02001469',
        '8PJ' => 'E02001469',
        '8PL' => 'E02001469',
        '8PN' => 'E02001469',
        '8PP' => 'E02001469',
        '8PQ' => 'E02001469',
        '8PR' => 'E02001469',
        '8PS' => 'E02001469',
        '8PT' => 'E02001469',
        '8PU' => 'E02001469',
        '8PW' => 'E02001469',
        '8PX' => 'E02001469',
        '8PY' => 'E02001469',
        '8PZ' => 'E02001469',
        '8QA' => 'E02001469',
        '8QB' => 'E02001469',
        '8QD' => 'E02001469',
        '8QE' => 'E02001469',
        '8QF' => 'E02001469',
        '8QG' => 'E02001469',
        '8QH' => 'E02001469',
        '8QJ' => 'E02001472',
        '8QL' => 'E02001472',
        '8QN' => 'E02001472',
        '8QP' => 'E02001469',
        '8QQ' => 'E02001469',
        '8QR' => 'E02001469',
        '8QS' => 'E02001469',
        '8QT' => 'E02001469',
        '8QU' => 'E02001469',
        '8QW' => 'E02001472',
        '8QZ' => 'E02001469',
        '8RA' => 'E02001469',
        '8RB' => 'E02001469',
        '8RD' => 'E02001469',
        '8RE' => 'E02001469',
        '8RG' => 'E02001469',
        '8RH' => 'E02001469',
        '8RJ' => 'E02001469',
        '8RL' => 'E02001469',
        '8RN' => 'E02001469',
        '8RP' => 'E02001469',
        '8RQ' => 'E02001469',
        '8RW' => 'E02001469',
        '9HZ' => 'E02001467',
        '9JA' => 'E02001467',
        '9JB' => 'E02001467',
        '9JD' => 'E02001467',
        '9JE' => 'E02001467',
        '9JF' => 'E02001467',
        '9JG' => 'E02001467',
        '9JH' => 'E02001467',
        '9JJ' => 'E02001467',
        '9JL' => 'E02001467',
        '9JN' => 'E02001467',
        '9JP' => 'E02001467',
        '9JQ' => 'E02001467',
        '9JR' => 'E02001467',
        '9JS' => 'E02001467',
        '9JT' => 'E02001467',
        '9JU' => 'E02001467',
        '9JW' => 'E02001467',
        '9JX' => 'E02001467',
        '9JY' => 'E02001467',
        '9JZ' => 'E02001467',
        '9LA' => 'E02001467',
        '9LB' => 'E02001467',
        '9LD' => 'E02001467',
        '9LE' => 'E02001467',
        '9LF' => 'E02001467',
        '9LG' => 'E02001467',
        '9LJ' => 'E02001467',
        '9LL' => 'E02001467',
        '9LN' => 'E02001467',
        '9LP' => 'E02001467',
        '9LQ' => 'E02001467',
        '9LR' => 'E02001467',
        '9LS' => 'E02001467',
        '9LT' => 'E02001467',
        '9LU' => 'E02001467',
        '9LW' => 'E02001467',
        '9LY' => 'E02001467',
        '9LZ' => 'E02001467',
        '9NA' => 'E02001469',
        '9NB' => 'E02001467',
        '9NE' => 'E02001469',
        '9NF' => 'E02001467',
        '9NH' => 'E02001467',
        '9NJ' => 'E02001467',
        '9NL' => 'E02001469',
        '9NN' => 'E02001467',
        '9NP' => 'E02001469',
        '9NR' => 'E02001469',
        '9NS' => 'E02001469',
        '9NT' => 'E02001467',
        '9NU' => 'E02001469',
        '9NW' => 'E02001469',
        '9NX' => 'E02001467',
        '9NY' => 'E02001469',
        '9NZ' => 'E02001467',
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