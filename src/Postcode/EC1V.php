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
final class EC1V
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000575',
        '0AB' => 'E02000575',
        '0AD' => 'E02000576',
        '0AE' => 'E02000575',
        '0AF' => 'E02000576',
        '0AG' => 'E02000576',
        '0AH' => 'E02000575',
        '0AJ' => 'E02000575',
        '0AL' => 'E02000575',
        '0AN' => 'E02000575',
        '0AP' => 'E02000576',
        '0AQ' => 'E02000575',
        '0AR' => 'E02000576',
        '0AS' => 'E02000575',
        '0AT' => 'E02000575',
        '0AU' => 'E02000575',
        '0AW' => 'E02000575',
        '0AX' => 'E02000575',
        '0AY' => 'E02000575',
        '0AZ' => 'E02000575',
        '0BA' => 'E02000575',
        '0BB' => 'E02000575',
        '0BD' => 'E02000576',
        '0BE' => 'E02000576',
        '0BG' => 'E02000575',
        '0BH' => 'E02000575',
        '0BJ' => 'E02000575',
        '0BL' => 'E02000575',
        '0BN' => 'E02000575',
        '0BP' => 'E02000576',
        '0BQ' => 'E02000575',
        '0BR' => 'E02000576',
        '0BS' => 'E02000576',
        '0BT' => 'E02000576',
        '0BU' => 'E02000576',
        '0BW' => 'E02000575',
        '0BX' => 'E02000575',
        '0BY' => 'E02000575',
        '0BZ' => 'E02000575',
        '0DA' => 'E02000575',
        '0DB' => 'E02000575',
        '0DD' => 'E02000575',
        '0DE' => 'E02000575',
        '0DF' => 'E02000575',
        '0DG' => 'E02000575',
        '0DH' => 'E02000575',
        '0DJ' => 'E02000575',
        '0DL' => 'E02000575',
        '0DN' => 'E02000575',
        '0DP' => 'E02000575',
        '0DQ' => 'E02000575',
        '0DR' => 'E02000575',
        '0DS' => 'E02000575',
        '0DT' => 'E02000575',
        '0DU' => 'E02000575',
        '0DX' => 'E02000575',
        '0DY' => 'E02000575',
        '0EA' => 'E02000575',
        '0EB' => 'E02000576',
        '0ED' => 'E02000575',
        '0EE' => 'E02000575',
        '0EH' => 'E02000575',
        '0EJ' => 'E02000575',
        '0EL' => 'E02000575',
        '0EN' => 'E02000575',
        '0EP' => 'E02000575',
        '0EQ' => 'E02000575',
        '0ER' => 'E02000575',
        '0ES' => 'E02000575',
        '0ET' => 'E02000575',
        '0EU' => 'E02000576',
        '0HA' => 'E02000576',
        '0HB' => 'E02000575',
        '0HD' => 'E02000575',
        '0HE' => 'E02000575',
        '0HF' => 'E02000575',
        '0HG' => 'E02000575',
        '0HH' => 'E02000575',
        '0HJ' => 'E02000575',
        '0HL' => 'E02000575',
        '0HN' => 'E02000575',
        '0HP' => 'E02000575',
        '0HR' => 'E02000575',
        '0HS' => 'E02000576',
        '0HT' => 'E02000576',
        '0HU' => 'E02000576',
        '0HX' => 'E02000576',
        '0HY' => 'E02000576',
        '0JA' => 'E02000575',
        '0JB' => 'E02000575',
        '0JD' => 'E02000575',
        '0JE' => 'E02000576',
        '0JF' => 'E02000575',
        '0JG' => 'E02000575',
        '0JH' => 'E02000576',
        '0JJ' => 'E02000575',
        '0JL' => 'E02000575',
        '0JN' => 'E02000575',
        '0JP' => 'E02000575',
        '0JQ' => 'E02000575',
        '0JR' => 'E02000575',
        '0LA' => 'E02000575',
        '0LB' => 'E02000576',
        '0LD' => 'E02000575',
        '0LH' => 'E02000575',
        '0LJ' => 'E02000575',
        '0LL' => 'E02000575',
        '0LN' => 'E02000575',
        '0LP' => 'E02000575',
        '0LQ' => 'E02000575',
        '0LR' => 'E02000575',
        '0LT' => 'E02000575',
        '0NA' => 'E02000575',
        '0NB' => 'E02000575',
        '0PA' => 'E02000575',
        '0PB' => 'E02000575',
        '0PD' => 'E02000576',
        '0PE' => 'E02000576',
        '0PF' => 'E02000576',
        '0PH' => 'E02000575',
        '0PJ' => 'E02000575',
        '0PP' => 'E02000575',
        '0PQ' => 'E02000575',
        '0PR' => 'E02000575',
        '0WB' => 'E02000575',
        '0WD' => 'E02000575',
        '0WF' => 'E02000576',
        '0WG' => 'E02000575',
        '0WL' => 'E02000575',
        '0WN' => 'E02000575',
        '0WU' => 'E02000575',
        '0WX' => 'E02000575',
        '0YB' => 'E02000575',
        '0YF' => 'E02000575',
        '0YQ' => 'E02000575',
        '0YZ' => 'E02000575',
        '1AA' => 'E02000371',
        '1AB' => 'E02000573',
        '1AD' => 'E02000573',
        '1AE' => 'E02000573',
        '1AF' => 'E02000573',
        '1AG' => 'E02000573',
        '1AH' => 'E02000573',
        '1AJ' => 'E02000573',
        '1AL' => 'E02000573',
        '1AN' => 'E02000573',
        '1AP' => 'E02000573',
        '1AQ' => 'E02000371',
        '1AR' => 'E02000371',
        '1AS' => 'E02000573',
        '1AT' => 'E02000371',
        '1AU' => 'E02000573',
        '1AW' => 'E02000371',
        '1AX' => 'E02000371',
        '1AY' => 'E02000371',
        '1AZ' => 'E02000371',
        '1HG' => 'E02000573',
        '1HH' => 'E02000573',
        '1JA' => 'E02000573',
        '1JB' => 'E02000371',
        '1JD' => 'E02000575',
        '1JE' => 'E02000573',
        '1JH' => 'E02000371',
        '1JJ' => 'E02000573',
        '1JL' => 'E02000576',
        '1JN' => 'E02000370',
        '1JP' => 'E02000576',
        '1JQ' => 'E02000370',
        '1JR' => 'E02000576',
        '1JS' => 'E02000576',
        '1JT' => 'E02000370',
        '1JU' => 'E02000370',
        '1JX' => 'E02000573',
        '1JY' => 'E02000371',
        '1JZ' => 'E02000576',
        '1LA' => 'E02000573',
        '1LB' => 'E02000575',
        '1LD' => 'E02000575',
        '1LE' => 'E02000575',
        '1LG' => 'E02000573',
        '1LH' => 'E02000573',
        '1LJ' => 'E02000573',
        '1LL' => 'E02000575',
        '1LN' => 'E02000575',
        '1LP' => 'E02000371',
        '1LQ' => 'E02000573',
        '1LR' => 'E02000573',
        '1LS' => 'E02000575',
        '1LT' => 'E02000575',
        '1LU' => 'E02000575',
        '1LX' => 'E02000575',
        '1LY' => 'E02000575',
        '1NA' => 'E02000573',
        '1NB' => 'E02000573',
        '1ND' => 'E02000573',
        '1NE' => 'E02000573',
        '1NF' => 'E02000573',
        '1NG' => 'E02000573',
        '1NH' => 'E02000573',
        '1NJ' => 'E02000575',
        '1NL' => 'E02000575',
        '1NP' => 'E02000575',
        '1NQ' => 'E02000573',
        '1NR' => 'E02000371',
        '1NS' => 'E02000573',
        '1NT' => 'E02000575',
        '1NU' => 'E02000573',
        '1NW' => 'E02000573',
        '1NX' => 'E02000575',
        '1NY' => 'E02000573',
        '1PA' => 'E02000371',
        '1PB' => 'E02000573',
        '1PD' => 'E02000573',
        '1PH' => 'E02000573',
        '1PJ' => 'E02000573',
        '1PL' => 'E02000573',
        '1PN' => 'E02000576',
        '1PP' => 'E02000573',
        '1PQ' => 'E02000573',
        '1PT' => 'E02000576',
        '1QA' => 'E02000370',
        '1QB' => 'E02000575',
        '1QD' => 'E02000573',
        '1QE' => 'E02000370',
        '1QH' => 'E02000370',
        '1QL' => 'E02000370',
        '1QQ' => 'E02000370',
        '1RQ' => 'E02000573',
        '1RR' => 'E02000575',
        '1SX' => 'E02000573',
        '1TA' => 'E02000573',
        '1TB' => 'E02000573',
        '1TD' => 'E02000575',
        '1TE' => 'E02000575',
        '1TF' => 'E02000573',
        '1TG' => 'E02000575',
        '1TH' => 'E02000575',
        '1WE' => 'E02000575',
        '1WJ' => 'E02000575',
        '2AA' => 'E02000575',
        '2AB' => 'E02000576',
        '2AD' => 'E02000576',
        '2AE' => 'E02000576',
        '2AF' => 'E02000576',
        '2AG' => 'E02000576',
        '2AH' => 'E02000576',
        '2AL' => 'E02000576',
        '2AN' => 'E02000576',
        '2AP' => 'E02000576',
        '2DW' => 'E02000576',
        '2FB' => 'E02000576',
        '2HH' => 'E02000576',
        '2HN' => 'E02000576',
        '2NA' => 'E02000576',
        '2NB' => 'E02000576',
        '2ND' => 'E02000576',
        '2NE' => 'E02000576',
        '2NH' => 'E02000576',
        '2NJ' => 'E02000576',
        '2NL' => 'E02000576',
        '2NP' => 'E02000576',
        '2NQ' => 'E02000576',
        '2NR' => 'E02000576',
        '2NS' => 'E02000576',
        '2NT' => 'E02000576',
        '2NU' => 'E02000575',
        '2NW' => 'E02000576',
        '2NX' => 'E02000576',
        '2NY' => 'E02000576',
        '2NZ' => 'E02000575',
        '2PA' => 'E02000576',
        '2PB' => 'E02000575',
        '2PD' => 'E02000576',
        '2PE' => 'E02000576',
        '2PG' => 'E02000575',
        '2PH' => 'E02000576',
        '2PJ' => 'E02000576',
        '2PL' => 'E02000576',
        '2PN' => 'E02000576',
        '2PP' => 'E02000576',
        '2PQ' => 'E02000576',
        '2PR' => 'E02000576',
        '2PS' => 'E02000575',
        '2PT' => 'E02000575',
        '2PU' => 'E02000576',
        '2PW' => 'E02000575',
        '2PX' => 'E02000575',
        '2PY' => 'E02000575',
        '2PZ' => 'E02000575',
        '2QA' => 'E02000575',
        '2QB' => 'E02000576',
        '2QD' => 'E02000576',
        '2QE' => 'E02000576',
        '2QH' => 'E02000576',
        '2QJ' => 'E02000575',
        '2QL' => 'E02000576',
        '2QN' => 'E02000576',
        '2QP' => 'E02000576',
        '2QQ' => 'E02000576',
        '2QR' => 'E02000576',
        '2QS' => 'E02000576',
        '2QT' => 'E02000576',
        '2QX' => 'E02000576',
        '2QY' => 'E02000576',
        '2QZ' => 'E02000576',
        '2RA' => 'E02000576',
        '2RB' => 'E02000576',
        '2RD' => 'E02000576',
        '2RE' => 'E02000576',
        '2RF' => 'E02000576',
        '2RG' => 'E02000575',
        '2RH' => 'E02000575',
        '2RJ' => 'E02000575',
        '2RL' => 'E02000576',
        '2RP' => 'E02000575',
        '2RQ' => 'E02000576',
        '2RS' => 'E02000575',
        '2SA' => 'E02000575',
        '2SB' => 'E02000575',
        '2SD' => 'E02000575',
        '2SE' => 'E02000575',
        '2SF' => 'E02000575',
        '2SG' => 'E02000575',
        '2SH' => 'E02000575',
        '2SJ' => 'E02000575',
        '2SL' => 'E02000575',
        '2SP' => 'E02000575',
        '2SS' => 'E02000576',
        '2TA' => 'E02000576',
        '2TB' => 'E02000575',
        '2TH' => 'E02000576',
        '2TL' => 'E02000576',
        '2TQ' => 'E02000575',
        '2TT' => 'E02000576',
        '2UA' => 'E02000576',
        '2WA' => 'E02000576',
        '2WB' => 'E02000576',
        '2WD' => 'E02000575',
        '2WE' => 'E02000576',
        '2WS' => 'E02000575',
        '2XA' => 'E02000575',
        '2XB' => 'E02000575',
        '3AA' => 'E02000576',
        '3AB' => 'E02000576',
        '3AD' => 'E02000576',
        '3AF' => 'E02000576',
        '3AG' => 'E02000576',
        '3AH' => 'E02000576',
        '3AJ' => 'E02000576',
        '3AL' => 'E02000576',
        '3AN' => 'E02000576',
        '3AP' => 'E02000576',
        '3AQ' => 'E02000575',
        '3AR' => 'E02000576',
        '3AS' => 'E02000575',
        '3AT' => 'E02000575',
        '3GB' => 'E02000576',
        '3NU' => 'E02000575',
        '3NW' => 'E02000575',
        '3NX' => 'E02000576',
        '3NY' => 'E02000576',
        '3NZ' => 'E02000576',
        '3PA' => 'E02000576',
        '3PB' => 'E02000575',
        '3PD' => 'E02000576',
        '3PE' => 'E02000575',
        '3PF' => 'E02000575',
        '3PG' => 'E02000575',
        '3PH' => 'E02000575',
        '3PJ' => 'E02000575',
        '3PL' => 'E02000575',
        '3PN' => 'E02000575',
        '3PP' => 'E02000575',
        '3PQ' => 'E02000576',
        '3PR' => 'E02000575',
        '3PS' => 'E02000575',
        '3PT' => 'E02000576',
        '3PU' => 'E02000576',
        '3PW' => 'E02000576',
        '3PX' => 'E02000576',
        '3PY' => 'E02000576',
        '3PZ' => 'E02000575',
        '3QA' => 'E02000576',
        '3QB' => 'E02000576',
        '3QD' => 'E02000576',
        '3QE' => 'E02000576',
        '3QF' => 'E02000576',
        '3QG' => 'E02000576',
        '3QH' => 'E02000576',
        '3QJ' => 'E02000576',
        '3QL' => 'E02000576',
        '3QN' => 'E02000576',
        '3QP' => 'E02000576',
        '3QQ' => 'E02000576',
        '3QR' => 'E02000576',
        '3QS' => 'E02000576',
        '3QT' => 'E02000576',
        '3QU' => 'E02000576',
        '3QW' => 'E02000576',
        '3QX' => 'E02000576',
        '3QY' => 'E02000576',
        '3QZ' => 'E02000576',
        '3RA' => 'E02000576',
        '3RB' => 'E02000576',
        '3RD' => 'E02000575',
        '3RE' => 'E02000575',
        '3RF' => 'E02000576',
        '3RG' => 'E02000576',
        '3RH' => 'E02000576',
        '3RJ' => 'E02000576',
        '3RL' => 'E02000576',
        '3RN' => 'E02000575',
        '3RP' => 'E02000575',
        '3RQ' => 'E02000576',
        '3RR' => 'E02000575',
        '3RS' => 'E02000575',
        '3RT' => 'E02000575',
        '3RU' => 'E02000575',
        '3RX' => 'E02000575',
        '3RY' => 'E02000576',
        '3SB' => 'E02000575',
        '3SD' => 'E02000576',
        '3SE' => 'E02000575',
        '3SF' => 'E02000575',
        '3SG' => 'E02000575',
        '3SH' => 'E02000575',
        '3SJ' => 'E02000576',
        '3SL' => 'E02000576',
        '3SN' => 'E02000576',
        '3SP' => 'E02000576',
        '3SQ' => 'E02000575',
        '3SR' => 'E02000576',
        '3SS' => 'E02000576',
        '3ST' => 'E02000576',
        '3SU' => 'E02000576',
        '3SW' => 'E02000576',
        '3SX' => 'E02000576',
        '3SY' => 'E02000576',
        '3TA' => 'E02000575',
        '3TB' => 'E02000576',
        '3TD' => 'E02000576',
        '3TE' => 'E02000576',
        '3TH' => 'E02000576',
        '3TJ' => 'E02000576',
        '3TL' => 'E02000576',
        '3TN' => 'E02000575',
        '3TP' => 'E02000575',
        '3TQ' => 'E02000576',
        '3TR' => 'E02000576',
        '3TT' => 'E02000575',
        '3TU' => 'E02000575',
        '3TX' => 'E02000575',
        '3TY' => 'E02000576',
        '3WA' => 'E02000575',
        '3WB' => 'E02000575',
        '3WG' => 'E02000575',
        '3WT' => 'E02000575',
        '3XA' => 'E02000575',
        '3XB' => 'E02000575',
        '3XD' => 'E02000575',
        '3XE' => 'E02000575',
        '3XF' => 'E02000575',
        '3XG' => 'E02000575',
        '3XP' => 'E02000575',
        '3XT' => 'E02000575',
        '3XZ' => 'E02000575',
        '3YF' => 'E02000575',
        '4AB' => 'E02000574',
        '4AD' => 'E02000574',
        '4AT' => 'E02000575',
        '4DE' => 'E02000575',
        '4DG' => 'E02000575',
        '4DR' => 'E02000575',
        '4DU' => 'E02000575',
        '4EX' => 'E02000574',
        '4JA' => 'E02000575',
        '4JB' => 'E02000575',
        '4JD' => 'E02000575',
        '4JE' => 'E02000575',
        '4JF' => 'E02000575',
        '4JG' => 'E02000575',
        '4JH' => 'E02000575',
        '4JJ' => 'E02000575',
        '4JL' => 'E02000575',
        '4JN' => 'E02000575',
        '4JP' => 'E02000575',
        '4JQ' => 'E02000575',
        '4JR' => 'E02000575',
        '4JS' => 'E02000575',
        '4JT' => 'E02000575',
        '4JU' => 'E02000575',
        '4JW' => 'E02000575',
        '4JX' => 'E02000575',
        '4JY' => 'E02000575',
        '4JZ' => 'E02000575',
        '4LA' => 'E02000575',
        '4LB' => 'E02000574',
        '4LD' => 'E02000574',
        '4LE' => 'E02000575',
        '4LF' => 'E02000575',
        '4LH' => 'E02000575',
        '4LJ' => 'E02000575',
        '4LL' => 'E02000575',
        '4LN' => 'E02000574',
        '4LP' => 'E02000574',
        '4LQ' => 'E02000574',
        '4LR' => 'E02000574',
        '4LS' => 'E02000575',
        '4LT' => 'E02000575',
        '4LW' => 'E02000575',
        '4LX' => 'E02000575',
        '4LY' => 'E02000575',
        '4LZ' => 'E02000575',
        '4NA' => 'E02000575',
        '4NB' => 'E02000575',
        '4ND' => 'E02000575',
        '4NE' => 'E02000575',
        '4NG' => 'E02000575',
        '4NH' => 'E02000575',
        '4NJ' => 'E02000575',
        '4NL' => 'E02000575',
        '4NN' => 'E02000575',
        '4NP' => 'E02000575',
        '4NQ' => 'E02000575',
        '4NR' => 'E02000575',
        '4NS' => 'E02000574',
        '4NT' => 'E02000574',
        '4NU' => 'E02000574',
        '4NW' => 'E02000575',
        '4NX' => 'E02000574',
        '4NY' => 'E02000575',
        '4PA' => 'E02000575',
        '4PB' => 'E02000575',
        '4PD' => 'E02000575',
        '4PE' => 'E02000575',
        '4PG' => 'E02000575',
        '4PH' => 'E02000575',
        '4PJ' => 'E02000575',
        '4PL' => 'E02000574',
        '4PP' => 'E02000575',
        '4PQ' => 'E02000575',
        '4PR' => 'E02000575',
        '4PS' => 'E02000575',
        '4PT' => 'E02000575',
        '4PU' => 'E02000575',
        '4PW' => 'E02000575',
        '4PX' => 'E02000575',
        '4PY' => 'E02000575',
        '4QA' => 'E02000575',
        '4QB' => 'E02000575',
        '4QE' => 'E02000574',
        '4QH' => 'E02000574',
        '4QJ' => 'E02000575',
        '4QN' => 'E02000575',
        '4QP' => 'E02000575',
        '4QQ' => 'E02000575',
        '4QR' => 'E02000575',
        '4RB' => 'E02000575',
        '4RD' => 'E02000575',
        '4RE' => 'E02000575',
        '4RF' => 'E02000575',
        '4RG' => 'E02000575',
        '4RH' => 'E02000575',
        '4RJ' => 'E02000575',
        '4RL' => 'E02000575',
        '4RN' => 'E02000575',
        '4RP' => 'E02000575',
        '4RQ' => 'E02000575',
        '4RR' => 'E02000574',
        '4RS' => 'E02000575',
        '4RU' => 'E02000575',
        '4RW' => 'E02000574',
        '4RX' => 'E02000575',
        '4RY' => 'E02000575',
        '4RZ' => 'E02000575',
        '4SA' => 'E02000575',
        '4SB' => 'E02000575',
        '4SD' => 'E02000575',
        '4SE' => 'E02000575',
        '4SF' => 'E02000575',
        '4UA' => 'E02000575',
        '4UB' => 'E02000575',
        '4UD' => 'E02000575',
        '4WA' => 'E02000575',
        '4WB' => 'E02000575',
        '4WD' => 'E02000575',
        '4WE' => 'E02000575',
        '4WQ' => 'E02000575',
        '4WZ' => 'E02000575',
        '4XF' => 'E02000575',
        '4XQ' => 'E02000575',
        '4YQ' => 'E02000575',
        '4YZ' => 'E02000575',
        '7AB' => 'E02000575',
        '7AD' => 'E02000575',
        '7AE' => 'E02000575',
        '7AF' => 'E02000575',
        '7AG' => 'E02000575',
        '7AH' => 'E02000575',
        '7AJ' => 'E02000575',
        '7AL' => 'E02000575',
        '7AN' => 'E02000576',
        '7AP' => 'E02000575',
        '7AZ' => 'E02000575',
        '7DA' => 'E02000575',
        '7DB' => 'E02000575',
        '7DD' => 'E02000575',
        '7DE' => 'E02000575',
        '7DF' => 'E02000575',
        '7DG' => 'E02000575',
        '7DH' => 'E02000575',
        '7DJ' => 'E02000575',
        '7DL' => 'E02000575',
        '7DN' => 'E02000575',
        '7DP' => 'E02000575',
        '7DQ' => 'E02000575',
        '7DR' => 'E02000575',
        '7DS' => 'E02000575',
        '7DT' => 'E02000576',
        '7DU' => 'E02000575',
        '7DW' => 'E02000575',
        '7DX' => 'E02000575',
        '7DY' => 'E02000575',
        '7EA' => 'E02000575',
        '7EB' => 'E02000575',
        '7ED' => 'E02000575',
        '7EE' => 'E02000575',
        '7EH' => 'E02000575',
        '7EJ' => 'E02000575',
        '7EN' => 'E02000575',
        '7EP' => 'E02000575',
        '7EQ' => 'E02000575',
        '7ER' => 'E02000575',
        '7ES' => 'E02000576',
        '7ET' => 'E02000575',
        '7EU' => 'E02000576',
        '7EX' => 'E02000576',
        '7EY' => 'E02000576',
        '7EZ' => 'E02000576',
        '7HA' => 'E02000576',
        '7HD' => 'E02000575',
        '7HE' => 'E02000575',
        '7HH' => 'E02000575',
        '7HJ' => 'E02000575',
        '7HN' => 'E02000575',
        '7HP' => 'E02000575',
        '7HR' => 'E02000575',
        '7HT' => 'E02000575',
        '7HU' => 'E02000575',
        '7HX' => 'E02000575',
        '7HY' => 'E02000575',
        '7JA' => 'E02000575',
        '7JB' => 'E02000575',
        '7JD' => 'E02000575',
        '7JE' => 'E02000575',
        '7JH' => 'E02000575',
        '7JJ' => 'E02000575',
        '7JL' => 'E02000575',
        '7JN' => 'E02000575',
        '7JP' => 'E02000575',
        '7JQ' => 'E02000575',
        '7JT' => 'E02000575',
        '7JU' => 'E02000574',
        '7JW' => 'E02000575',
        '7JX' => 'E02000575',
        '7JY' => 'E02000576',
        '7LA' => 'E02000575',
        '7LB' => 'E02000575',
        '7LD' => 'E02000575',
        '7LE' => 'E02000575',
        '7LH' => 'E02000575',
        '7LJ' => 'E02000575',
        '7LL' => 'E02000575',
        '7LN' => 'E02000575',
        '7LP' => 'E02000575',
        '7LQ' => 'E02000575',
        '7LR' => 'E02000575',
        '7LS' => 'E02000575',
        '7LT' => 'E02000575',
        '7LU' => 'E02000575',
        '7LW' => 'E02000575',
        '7LX' => 'E02000575',
        '7NA' => 'E02000575',
        '7NB' => 'E02000575',
        '7ND' => 'E02000575',
        '7NE' => 'E02000575',
        '7NH' => 'E02000575',
        '7NJ' => 'E02000574',
        '7NL' => 'E02000574',
        '7NN' => 'E02000574',
        '7NP' => 'E02000574',
        '7NQ' => 'E02000575',
        '7NR' => 'E02000575',
        '7NS' => 'E02000575',
        '7NT' => 'E02000575',
        '7NU' => 'E02000575',
        '7NX' => 'E02000575',
        '7PA' => 'E02000575',
        '7PB' => 'E02000576',
        '7PD' => 'E02000576',
        '7PE' => 'E02000576',
        '7PH' => 'E02000575',
        '7PN' => 'E02000575',
        '7PP' => 'E02000575',
        '7PQ' => 'E02000575',
        '7PR' => 'E02000575',
        '7PS' => 'E02000575',
        '7PT' => 'E02000575',
        '7PY' => 'E02000575',
        '7QA' => 'E02000576',
        '7QB' => 'E02000575',
        '7QD' => 'E02000575',
        '7QE' => 'E02000575',
        '7QH' => 'E02000575',
        '7QJ' => 'E02000575',
        '7QL' => 'E02000575',
        '7QN' => 'E02000575',
        '7QP' => 'E02000575',
        '7QQ' => 'E02000575',
        '7QR' => 'E02000575',
        '7QT' => 'E02000575',
        '7QX' => 'E02000575',
        '7RB' => 'E02000575',
        '7RD' => 'E02000575',
        '7RE' => 'E02000575',
        '7RH' => 'E02000575',
        '7RJ' => 'E02000575',
        '7RL' => 'E02000575',
        '7RP' => 'E02000575',
        '7RQ' => 'E02000575',
        '7RR' => 'E02000575',
        '7RT' => 'E02000575',
        '7RU' => 'E02000576',
        '7SS' => 'E02000575',
        '7ST' => 'E02000575',
        '7UW' => 'E02000575',
        '7WA' => 'E02000575',
        '7WB' => 'E02000575',
        '7WD' => 'E02000575',
        '7WE' => 'E02000575',
        '7WF' => 'E02000575',
        '7WG' => 'E02000575',
        '7WH' => 'E02000575',
        '7WJ' => 'E02000575',
        '7WL' => 'E02000575',
        '7WN' => 'E02000575',
        '7WP' => 'E02000575',
        '7WQ' => 'E02000575',
        '7WR' => 'E02000575',
        '7WW' => 'E02000575',
        '7XP' => 'E02000575',
        '7XT' => 'E02000575',
        '7XY' => 'E02000575',
        '7XZ' => 'E02000575',
        '7YQ' => 'E02000575',
        '7YR' => 'E02000575',
        '7YT' => 'E02000575',
        '7ZA' => 'E02000575',
        '7ZP' => 'E02000575',
        '8AA' => 'E02000576',
        '8AB' => 'E02000575',
        '8AD' => 'E02000576',
        '8AE' => 'E02000576',
        '8AF' => 'E02000576',
        '8AG' => 'E02000576',
        '8AH' => 'E02000576',
        '8AJ' => 'E02000576',
        '8AL' => 'E02000576',
        '8AN' => 'E02000576',
        '8AP' => 'E02000576',
        '8AQ' => 'E02000576',
        '8AR' => 'E02000576',
        '8AS' => 'E02000576',
        '8AT' => 'E02000576',
        '8AU' => 'E02000576',
        '8AW' => 'E02000576',
        '8AX' => 'E02000576',
        '8AY' => 'E02000576',
        '8AZ' => 'E02000576',
        '8BA' => 'E02000576',
        '8BB' => 'E02000575',
        '8BD' => 'E02000576',
        '8BE' => 'E02000576',
        '8BF' => 'E02000576',
        '8BG' => 'E02000576',
        '8BH' => 'E02000576',
        '8BJ' => 'E02000576',
        '8BL' => 'E02000576',
        '8BN' => 'E02000576',
        '8BP' => 'E02000576',
        '8BQ' => 'E02000575',
        '8BR' => 'E02000576',
        '8BS' => 'E02000576',
        '8BT' => 'E02000576',
        '8BU' => 'E02000576',
        '8BW' => 'E02000576',
        '8BX' => 'E02000576',
        '8BY' => 'E02000576',
        '8BZ' => 'E02000576',
        '8DA' => 'E02000576',
        '8DB' => 'E02000575',
        '8DD' => 'E02000575',
        '8DE' => 'E02000576',
        '8DF' => 'E02000576',
        '8DG' => 'E02000576',
        '8DH' => 'E02000576',
        '8DJ' => 'E02000576',
        '8DL' => 'E02000576',
        '8DN' => 'E02000575',
        '8DP' => 'E02000576',
        '8DQ' => 'E02000576',
        '8DR' => 'E02000576',
        '8DS' => 'E02000576',
        '8DT' => 'E02000576',
        '8DU' => 'E02000575',
        '8DW' => 'E02000576',
        '8DX' => 'E02000575',
        '8DY' => 'E02000576',
        '8EA' => 'E02000576',
        '8EB' => 'E02000576',
        '8ED' => 'E02000575',
        '8EH' => 'E02000576',
        '8EJ' => 'E02000576',
        '8EL' => 'E02000575',
        '8EN' => 'E02000575',
        '8HA' => 'E02000575',
        '8HW' => 'E02000575',
        '8HX' => 'E02000576',
        '8HY' => 'E02000575',
        '8PX' => 'E02000576',
        '8WA' => 'E02000575',
        '8YE' => 'E02000575',
        '8ZY' => 'E02000575',
        '9AA' => 'E02000575',
        '9AB' => 'E02000575',
        '9AD' => 'E02000575',
        '9AE' => 'E02000575',
        '9AF' => 'E02000576',
        '9AG' => 'E02000575',
        '9AH' => 'E02000575',
        '9AJ' => 'E02000575',
        '9AL' => 'E02000575',
        '9AN' => 'E02000576',
        '9AP' => 'E02000575',
        '9AQ' => 'E02000575',
        '9AR' => 'E02000575',
        '9AS' => 'E02000575',
        '9AT' => 'E02000575',
        '9AU' => 'E02000371',
        '9AW' => 'E02000576',
        '9AX' => 'E02000576',
        '9AY' => 'E02000576',
        '9AZ' => 'E02000576',
        '9BA' => 'E02000575',
        '9BB' => 'E02000576',
        '9BD' => 'E02000576',
        '9BE' => 'E02000575',
        '9BF' => 'E02000576',
        '9BG' => 'E02000576',
        '9BH' => 'E02000575',
        '9BJ' => 'E02000576',
        '9BL' => 'E02000576',
        '9BN' => 'E02000576',
        '9BP' => 'E02000576',
        '9BQ' => 'E02000576',
        '9BR' => 'E02000576',
        '9BS' => 'E02000576',
        '9BT' => 'E02000576',
        '9BU' => 'E02000576',
        '9BW' => 'E02000576',
        '9BX' => 'E02000576',
        '9BY' => 'E02000575',
        '9BZ' => 'E02000576',
        '9DA' => 'E02000575',
        '9DB' => 'E02000576',
        '9DD' => 'E02000576',
        '9DE' => 'E02000576',
        '9DH' => 'E02000371',
        '9DJ' => 'E02000576',
        '9DL' => 'E02000371',
        '9DP' => 'E02000576',
        '9DQ' => 'E02000371',
        '9DR' => 'E02000371',
        '9DS' => 'E02000371',
        '9DT' => 'E02000371',
        '9DU' => 'E02000576',
        '9DX' => 'E02000576',
        '9DY' => 'E02000371',
        '9ED' => 'E02000576',
        '9EE' => 'E02000371',
        '9EH' => 'E02000576',
        '9EJ' => 'E02000576',
        '9EL' => 'E02000576',
        '9EP' => 'E02000576',
        '9ER' => 'E02000576',
        '9ES' => 'E02000576',
        '9ET' => 'E02000576',
        '9EU' => 'E02000576',
        '9EX' => 'E02000576',
        '9EY' => 'E02000371',
        '9EZ' => 'E02000576',
        '9FL' => 'E02000576',
        '9FN' => 'E02000575',
        '9FP' => 'E02000576',
        '9FQ' => 'E02000576',
        '9FR' => 'E02000576',
        '9FS' => 'E02000576',
        '9FT' => 'E02000576',
        '9FW' => 'E02000575',
        '9GA' => 'E02000576',
        '9GR' => 'E02000371',
        '9GT' => 'E02000371',
        '9HB' => 'E02000371',
        '9HD' => 'E02000371',
        '9HE' => 'E02000371',
        '9HF' => 'E02000575',
        '9HG' => 'E02000575',
        '9HH' => 'E02000371',
        '9HJ' => 'E02000575',
        '9HL' => 'E02000575',
        '9HN' => 'E02000575',
        '9HP' => 'E02000575',
        '9HQ' => 'E02000576',
        '9HR' => 'E02000575',
        '9HS' => 'E02000575',
        '9HT' => 'E02000575',
        '9HU' => 'E02000576',
        '9HW' => 'E02000575',
        '9HX' => 'E02000575',
        '9JA' => 'E02000575',
        '9JB' => 'E02000576',
        '9JD' => 'E02000575',
        '9JH' => 'E02000576',
        '9JJ' => 'E02000576',
        '9JL' => 'E02000576',
        '9JN' => 'E02000576',
        '9JP' => 'E02000576',
        '9JQ' => 'E02000576',
        '9JR' => 'E02000576',
        '9JS' => 'E02000576',
        '9JT' => 'E02000371',
        '9JU' => 'E02000371',
        '9JX' => 'E02000576',
        '9LA' => 'E02000371',
        '9LB' => 'E02000576',
        '9LD' => 'E02000371',
        '9LE' => 'E02000371',
        '9LF' => 'E02000576',
        '9LH' => 'E02000371',
        '9LJ' => 'E02000371',
        '9LL' => 'E02000371',
        '9LN' => 'E02000371',
        '9LP' => 'E02000371',
        '9LQ' => 'E02000371',
        '9LT' => 'E02000371',
        '9LY' => 'E02000575',
        '9NA' => 'E02000575',
        '9NB' => 'E02000371',
        '9ND' => 'E02000576',
        '9NE' => 'E02000576',
        '9NG' => 'E02000576',
        '9NH' => 'E02000576',
        '9NJ' => 'E02000576',
        '9NN' => 'E02000576',
        '9NP' => 'E02000576',
        '9NQ' => 'E02000371',
        '9NR' => 'E02000576',
        '9NS' => 'E02000576',
        '9NT' => 'E02000576',
        '9NU' => 'E02000576',
        '9NX' => 'E02000371',
        '9PA' => 'E02000371',
        '9PB' => 'E02000371',
        '9PD' => 'E02000371',
        '9PE' => 'E02000371',
        '9PG' => 'E02000371',
        '9PH' => 'E02000575',
        '9PJ' => 'E02000576',
        '9PL' => 'E02000576',
        '9PN' => 'E02000575',
        '9PP' => 'E02000576',
        '9PQ' => 'E02000576',
        '9PR' => 'E02000576',
        '9PS' => 'E02000576',
        '9PT' => 'E02000575',
        '9PU' => 'E02000575',
        '9PY' => 'E02000576',
        '9QA' => 'E02000576',
        '9QB' => 'E02000576',
        '9QD' => 'E02000576',
        '9QH' => 'E02000576',
        '9QJ' => 'E02000575',
        '9QL' => 'E02000576',
        '9QN' => 'E02000576',
        '9QP' => 'E02000371',
        '9QQ' => 'E02000575',
        '9QR' => 'E02000575',
        '9QS' => 'E02000371',
        '9QT' => 'E02000576',
        '9QX' => 'E02000575',
        '9QY' => 'E02000576',
        '9RB' => 'E02000371',
        '9RE' => 'E02000576',
        '9RH' => 'E02000576',
        '9RJ' => 'E02000371',
        '9RL' => 'E02000576',
        '9RP' => 'E02000576',
        '9RQ' => 'E02000576',
        '9RR' => 'E02000575',
        '9RT' => 'E02000576',
        '9RU' => 'E02000576',
        '9RX' => 'E02000576',
        '9SD' => 'E02000575',
        '9TA' => 'E02000576',
        '9TX' => 'E02000575',
        '9TY' => 'E02000575',
        '9UA' => 'E02000576',
        '9UD' => 'E02000575',
        '9UN' => 'E02000576',
        '9UU' => 'E02000576',
        '9WA' => 'E02000576',
        '9WB' => 'E02000575',
        '9WD' => 'E02000575',
        '9WE' => 'E02000575',
        '9WQ' => 'E02000575',
        '9WR' => 'E02000575',
        '9WX' => 'E02000575',
        '9WZ' => 'E02000575',
        '9XA' => 'E02000575',
        '9XB' => 'E02000575',
        '9XD' => 'E02000575',
        '9XE' => 'E02000576',
        '9XF' => 'E02000576',
        '9XG' => 'E02000575',
        '9XH' => 'E02000575',
        '9XJ' => 'E02000575',
        '9XL' => 'E02000575',
        '9XN' => 'E02000575',
        '9XQ' => 'E02000575',
        '9XZ' => 'E02000575',
        '9YZ' => 'E02000575',
        '9ZA' => 'E02000576',
        '9ZB' => 'E02000576',
        '9ZH' => 'E02000576',
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
