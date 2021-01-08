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
final class CH63
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0BR' => 'E02001504',
        '0EA' => 'E02001504',
        '0EB' => 'E02001504',
        '0ED' => 'E02001504',
        '0EE' => 'E02001504',
        '0EF' => 'E02001504',
        '0EG' => 'E02001504',
        '0EH' => 'E02001507',
        '0EJ' => 'E02001507',
        '0EL' => 'E02001507',
        '0EN' => 'E02001507',
        '0EP' => 'E02001507',
        '0EQ' => 'E02001507',
        '0ER' => 'E02001507',
        '0ES' => 'E02001507',
        '0ET' => 'E02001507',
        '0EU' => 'E02001507',
        '0EW' => 'E02001507',
        '0EX' => 'E02001507',
        '0EY' => 'E02001507',
        '0EZ' => 'E02001507',
        '0HA' => 'E02001507',
        '0HB' => 'E02001507',
        '0HD' => 'E02001504',
        '0HE' => 'E02001504',
        '0HF' => 'E02001504',
        '0HG' => 'E02001507',
        '0HH' => 'E02001507',
        '0HJ' => 'E02001504',
        '0HL' => 'E02001504',
        '0HN' => 'E02001504',
        '0HP' => 'E02001504',
        '0HQ' => 'E02001504',
        '0HR' => 'E02001507',
        '0HS' => 'E02001507',
        '0HT' => 'E02001507',
        '0HU' => 'E02001507',
        '0HW' => 'E02001504',
        '0HX' => 'E02001507',
        '0HY' => 'E02001507',
        '0HZ' => 'E02001507',
        '0JA' => 'E02001507',
        '0JB' => 'E02001507',
        '0JD' => 'E02001507',
        '0JE' => 'E02001507',
        '0JG' => 'E02001507',
        '0JH' => 'E02001507',
        '0JJ' => 'E02001504',
        '0JL' => 'E02001504',
        '0JN' => 'E02001507',
        '0JP' => 'E02001507',
        '0JQ' => 'E02001507',
        '0JR' => 'E02001507',
        '0JS' => 'E02001507',
        '0JT' => 'E02001507',
        '0JU' => 'E02001504',
        '0JW' => 'E02001507',
        '0JX' => 'E02001504',
        '0JY' => 'E02001504',
        '0JZ' => 'E02001504',
        '0LA' => 'E02001507',
        '0LB' => 'E02001507',
        '0LD' => 'E02001507',
        '0LE' => 'E02001507',
        '0LF' => 'E02001507',
        '0LG' => 'E02001507',
        '0LH' => 'E02001507',
        '0LJ' => 'E02001507',
        '0LL' => 'E02001507',
        '0LN' => 'E02001507',
        '0LP' => 'E02001507',
        '0LQ' => 'E02001507',
        '0LR' => 'E02001507',
        '0LT' => 'E02001504',
        '0LU' => 'E02001504',
        '0LW' => 'E02001507',
        '0LX' => 'E02001504',
        '0LY' => 'E02001504',
        '0LZ' => 'E02001504',
        '0NA' => 'E02001504',
        '0NB' => 'E02001504',
        '0ND' => 'E02001504',
        '0NE' => 'E02001504',
        '0NF' => 'E02001504',
        '0NG' => 'E02001504',
        '0NH' => 'E02001504',
        '0NJ' => 'E02001504',
        '0NL' => 'E02001504',
        '0NN' => 'E02001504',
        '0NP' => 'E02001507',
        '0NQ' => 'E02001504',
        '0NR' => 'E02001507',
        '0NS' => 'E02001504',
        '0NT' => 'E02001507',
        '0NU' => 'E02001507',
        '0NW' => 'E02001504',
        '0NX' => 'E02001507',
        '0NY' => 'E02001507',
        '0NZ' => 'E02001507',
        '0PA' => 'E02001507',
        '0PB' => 'E02001507',
        '0PD' => 'E02001507',
        '0PE' => 'E02001507',
        '0PF' => 'E02001507',
        '0PG' => 'E02001507',
        '0PH' => 'E02001504',
        '0PJ' => 'E02001504',
        '0PL' => 'E02001504',
        '0PN' => 'E02001507',
        '0PP' => 'E02001504',
        '0PQ' => 'E02001504',
        '0PR' => 'E02001507',
        '0PS' => 'E02001504',
        '0PT' => 'E02001504',
        '0PU' => 'E02001504',
        '0PW' => 'E02001507',
        '0PX' => 'E02001504',
        '0PY' => 'E02001507',
        '0QA' => 'E02001504',
        '0QD' => 'E02001504',
        '0QE' => 'E02001504',
        '0QF' => 'E02001504',
        '0QH' => 'E02001507',
        '0QQ' => 'E02001507',
        '0QR' => 'E02001497',
        '0QS' => 'E02001507',
        '0QT' => 'E02001497',
        '0QU' => 'E02001507',
        '0QX' => 'E02001497',
        '0WE' => 'E02001497',
        '0WR' => 'E02001497',
        '0YY' => 'E02001497',
        '1BR' => 'E02001504',
        '1JA' => 'E02001504',
        '1JB' => 'E02001504',
        '1JD' => 'E02001504',
        '1JE' => 'E02001504',
        '1JF' => 'E02001504',
        '1JG' => 'E02001504',
        '1JH' => 'E02001504',
        '1JJ' => 'E02001504',
        '1JL' => 'E02001504',
        '1JN' => 'E02001504',
        '1JP' => 'E02001504',
        '1JQ' => 'E02001504',
        '1JR' => 'E02001504',
        '1JS' => 'E02001504',
        '1JT' => 'E02001504',
        '1JU' => 'E02001504',
        '1JW' => 'E02001504',
        '1JX' => 'E02001504',
        '1LA' => 'E02001497',
        '1WA' => 'E02001497',
        '1YY' => 'E02001497',
        '1YZ' => 'E02001497',
        '1ZZ' => 'E02001497',
        '2BR' => 'E02001501',
        '2HA' => 'E02001501',
        '2HB' => 'E02001501',
        '2HD' => 'E02001502',
        '2HE' => 'E02001501',
        '2HF' => 'E02001501',
        '2HG' => 'E02001501',
        '2HH' => 'E02001501',
        '2HJ' => 'E02001501',
        '2HL' => 'E02001501',
        '2HN' => 'E02001501',
        '2HP' => 'E02001501',
        '2HQ' => 'E02001501',
        '2HR' => 'E02001501',
        '2HS' => 'E02001501',
        '2HT' => 'E02001502',
        '2HU' => 'E02001501',
        '2HW' => 'E02001501',
        '2HX' => 'E02001501',
        '2HY' => 'E02001501',
        '2HZ' => 'E02001501',
        '2JA' => 'E02001501',
        '2JB' => 'E02001501',
        '2JD' => 'E02001501',
        '2JE' => 'E02001501',
        '2JF' => 'E02001501',
        '2JG' => 'E02001501',
        '2JH' => 'E02001501',
        '2JJ' => 'E02001501',
        '2JL' => 'E02001501',
        '2JN' => 'E02001501',
        '2JP' => 'E02001501',
        '2JQ' => 'E02001501',
        '2JR' => 'E02001501',
        '2JS' => 'E02001501',
        '2JT' => 'E02001501',
        '2JU' => 'E02001501',
        '2JW' => 'E02001501',
        '2JX' => 'E02001501',
        '2JY' => 'E02001501',
        '2JZ' => 'E02001501',
        '2LA' => 'E02001501',
        '2LB' => 'E02001501',
        '2LD' => 'E02001501',
        '2LE' => 'E02001501',
        '2LF' => 'E02001501',
        '2LG' => 'E02001501',
        '2LH' => 'E02001501',
        '2LN' => 'E02001501',
        '2LP' => 'E02001501',
        '2LQ' => 'E02001501',
        '2LR' => 'E02001501',
        '2LS' => 'E02001501',
        '2LT' => 'E02001501',
        '2LU' => 'E02001501',
        '2LW' => 'E02001501',
        '2LX' => 'E02001501',
        '2LY' => 'E02001501',
        '2LZ' => 'E02001501',
        '2NA' => 'E02001501',
        '2NB' => 'E02001501',
        '2ND' => 'E02001501',
        '2NE' => 'E02001501',
        '2NF' => 'E02001501',
        '2NG' => 'E02001501',
        '2NH' => 'E02001501',
        '2NJ' => 'E02001501',
        '2NL' => 'E02001501',
        '2NN' => 'E02001501',
        '2NP' => 'E02001501',
        '2NQ' => 'E02001501',
        '2NR' => 'E02001501',
        '2NS' => 'E02001501',
        '2NT' => 'E02001501',
        '2NU' => 'E02001501',
        '2NW' => 'E02001501',
        '2NX' => 'E02001501',
        '2NY' => 'E02001501',
        '2NZ' => 'E02001501',
        '2PA' => 'E02001501',
        '2PB' => 'E02001501',
        '2PD' => 'E02001501',
        '2PE' => 'E02001501',
        '2PF' => 'E02001501',
        '2PG' => 'E02001501',
        '2PH' => 'E02001501',
        '2PJ' => 'E02001501',
        '2PL' => 'E02001501',
        '2PN' => 'E02001501',
        '2PP' => 'E02001501',
        '2PQ' => 'E02001501',
        '2PR' => 'E02001501',
        '2PS' => 'E02001501',
        '2PT' => 'E02001501',
        '2PU' => 'E02001501',
        '2PW' => 'E02001501',
        '2PX' => 'E02001501',
        '2PY' => 'E02001501',
        '2PZ' => 'E02001501',
        '2QA' => 'E02001501',
        '2QB' => 'E02001501',
        '2QD' => 'E02001501',
        '2QE' => 'E02001501',
        '2QF' => 'E02001501',
        '2QG' => 'E02001501',
        '2QH' => 'E02001501',
        '2QJ' => 'E02001501',
        '2QN' => 'E02001501',
        '2QP' => 'E02001501',
        '2QQ' => 'E02001501',
        '2QR' => 'E02001501',
        '2QT' => 'E02001501',
        '2QU' => 'E02001501',
        '2QX' => 'E02001501',
        '2RF' => 'E02001501',
        '2RG' => 'E02001501',
        '2RH' => 'E02001501',
        '2RL' => 'E02001497',
        '2RN' => 'E02001501',
        '2RQ' => 'E02001501',
        '2RW' => 'E02001497',
        '2WA' => 'E02001497',
        '2WB' => 'E02001497',
        '2WD' => 'E02001497',
        '2WE' => 'E02001497',
        '2WF' => 'E02001497',
        '2WG' => 'E02001497',
        '2WH' => 'E02001497',
        '2WJ' => 'E02001497',
        '2WL' => 'E02001497',
        '2WN' => 'E02001497',
        '2YY' => 'E02001497',
        '3AB' => 'E02001501',
        '3AD' => 'E02001501',
        '3AF' => 'E02001501',
        '3AG' => 'E02001501',
        '3AH' => 'E02001501',
        '3AJ' => 'E02001501',
        '3AL' => 'E02001501',
        '3AN' => 'E02001501',
        '3AP' => 'E02001501',
        '3AQ' => 'E02001501',
        '3AR' => 'E02001501',
        '3AS' => 'E02001501',
        '3AT' => 'E02001501',
        '3AU' => 'E02001501',
        '3AW' => 'E02001501',
        '3AX' => 'E02001504',
        '3AY' => 'E02001501',
        '3AZ' => 'E02001501',
        '3BA' => 'E02001504',
        '3BB' => 'E02001504',
        '3BD' => 'E02001501',
        '3BE' => 'E02001501',
        '3BG' => 'E02001504',
        '3BH' => 'E02001504',
        '3BJ' => 'E02001504',
        '3BL' => 'E02001504',
        '3BN' => 'E02001501',
        '3BP' => 'E02001501',
        '3BQ' => 'E02001501',
        '3BR' => 'E02001501',
        '3BS' => 'E02001501',
        '3BT' => 'E02001502',
        '3BU' => 'E02001502',
        '3BW' => 'E02001502',
        '3BX' => 'E02001502',
        '3BY' => 'E02001501',
        '3BZ' => 'E02001501',
        '3DA' => 'E02001502',
        '3DB' => 'E02001502',
        '3DD' => 'E02001502',
        '3DE' => 'E02001502',
        '3DF' => 'E02001502',
        '3DG' => 'E02001504',
        '3DH' => 'E02001502',
        '3DJ' => 'E02001501',
        '3DL' => 'E02001502',
        '3DN' => 'E02001502',
        '3DP' => 'E02001502',
        '3DQ' => 'E02001502',
        '3DR' => 'E02001501',
        '3DS' => 'E02001504',
        '3DT' => 'E02001501',
        '3DU' => 'E02001501',
        '3DW' => 'E02001502',
        '3DX' => 'E02001502',
        '3DY' => 'E02001502',
        '3DZ' => 'E02001502',
        '3EA' => 'E02001501',
        '3EB' => 'E02001502',
        '3ED' => 'E02001502',
        '3EE' => 'E02001501',
        '3EF' => 'E02001501',
        '3EG' => 'E02001501',
        '3EH' => 'E02001501',
        '3EJ' => 'E02001501',
        '3EL' => 'E02001501',
        '3EN' => 'E02001501',
        '3EP' => 'E02001501',
        '3EQ' => 'E02001501',
        '3ER' => 'E02001501',
        '3ES' => 'E02001501',
        '3ET' => 'E02001501',
        '3EU' => 'E02001501',
        '3EW' => 'E02001501',
        '3EX' => 'E02001502',
        '3EY' => 'E02001502',
        '3EZ' => 'E02001502',
        '3HA' => 'E02001502',
        '3HB' => 'E02001502',
        '3HD' => 'E02001502',
        '3HE' => 'E02001502',
        '3HF' => 'E02001502',
        '3HG' => 'E02001502',
        '3HH' => 'E02001502',
        '3HJ' => 'E02001502',
        '3HL' => 'E02001501',
        '3HN' => 'E02001502',
        '3HP' => 'E02001502',
        '3HQ' => 'E02001502',
        '3HR' => 'E02001501',
        '3HS' => 'E02001501',
        '3HT' => 'E02001501',
        '3HU' => 'E02001501',
        '3HW' => 'E02001501',
        '3HX' => 'E02001502',
        '3HY' => 'E02001502',
        '3HZ' => 'E02001502',
        '3JA' => 'E02001502',
        '3JB' => 'E02001502',
        '3JD' => 'E02001502',
        '3JE' => 'E02001502',
        '3JF' => 'E02001502',
        '3JG' => 'E02001502',
        '3JH' => 'E02001502',
        '3JL' => 'E02001502',
        '3JP' => 'E02001502',
        '3JQ' => 'E02001502',
        '3JR' => 'E02001502',
        '3JU' => 'E02001502',
        '3JW' => 'E02001502',
        '3JX' => 'E02001502',
        '3QQ' => 'E02001502',
        '3WA' => 'E02001497',
        '3WB' => 'E02001497',
        '3WE' => 'E02001497',
        '3WF' => 'E02001497',
        '3WQ' => 'E02001497',
        '3YL' => 'E02001497',
        '3YQ' => 'E02001497',
        '3YY' => 'E02001497',
        '3YZ' => 'E02001497',
        '4BR' => 'E02001504',
        '4JA' => 'E02001504',
        '4JB' => 'E02001504',
        '4JD' => 'E02001504',
        '4JE' => 'E02001504',
        '4JF' => 'E02001504',
        '4JG' => 'E02001504',
        '4JH' => 'E02001504',
        '4JJ' => 'E02001504',
        '4JL' => 'E02001504',
        '4JN' => 'E02001504',
        '4JP' => 'E02001504',
        '4JQ' => 'E02001504',
        '4JR' => 'E02001504',
        '4JS' => 'E02001504',
        '4JT' => 'E02001504',
        '4JU' => 'E02001504',
        '4JW' => 'E02001504',
        '4JX' => 'E02001504',
        '4JY' => 'E02001504',
        '4JZ' => 'E02001504',
        '4LA' => 'E02001504',
        '4LB' => 'E02001504',
        '4LD' => 'E02001504',
        '4LE' => 'E02001504',
        '4LG' => 'E02003841',
        '4WH' => 'E02001497',
        '4WS' => 'E02001497',
        '4YY' => 'E02001504',
        '5BR' => 'E02001498',
        '5FE' => 'E02001498',
        '5JA' => 'E02001498',
        '5JB' => 'E02001498',
        '5JD' => 'E02001498',
        '5JE' => 'E02001498',
        '5JF' => 'E02001498',
        '5JG' => 'E02001498',
        '5JH' => 'E02001498',
        '5JJ' => 'E02001498',
        '5JL' => 'E02001498',
        '5JN' => 'E02001498',
        '5JP' => 'E02001498',
        '5JQ' => 'E02001498',
        '5JR' => 'E02001498',
        '5JS' => 'E02001498',
        '5JT' => 'E02001498',
        '5JU' => 'E02001498',
        '5JW' => 'E02001498',
        '5JX' => 'E02001498',
        '5JY' => 'E02001498',
        '5JZ' => 'E02001498',
        '5LA' => 'E02001498',
        '5LB' => 'E02001498',
        '5LD' => 'E02001498',
        '5LE' => 'E02001498',
        '5LF' => 'E02001498',
        '5LG' => 'E02001498',
        '5LH' => 'E02001498',
        '5LJ' => 'E02001498',
        '5LL' => 'E02001498',
        '5LN' => 'E02001498',
        '5LP' => 'E02001498',
        '5LQ' => 'E02001498',
        '5LR' => 'E02001498',
        '5LS' => 'E02001498',
        '5LT' => 'E02001498',
        '5LU' => 'E02001498',
        '5LW' => 'E02001498',
        '5LX' => 'E02001498',
        '5LY' => 'E02001498',
        '5LZ' => 'E02001498',
        '5NA' => 'E02001498',
        '5NB' => 'E02001498',
        '5ND' => 'E02001498',
        '5NE' => 'E02001498',
        '5NF' => 'E02001498',
        '5NG' => 'E02001495',
        '5NH' => 'E02001498',
        '5NJ' => 'E02001498',
        '5NL' => 'E02001498',
        '5NN' => 'E02001498',
        '5NP' => 'E02001498',
        '5NQ' => 'E02001498',
        '5NR' => 'E02001498',
        '5NS' => 'E02001498',
        '5NT' => 'E02001498',
        '5NU' => 'E02001498',
        '5NW' => 'E02001498',
        '5NX' => 'E02001498',
        '5NY' => 'E02001501',
        '5NZ' => 'E02001501',
        '5PA' => 'E02001501',
        '5PB' => 'E02001501',
        '5PD' => 'E02001498',
        '5PE' => 'E02001498',
        '5PF' => 'E02001498',
        '5PG' => 'E02001498',
        '5PH' => 'E02001498',
        '5PJ' => 'E02001498',
        '5PL' => 'E02001498',
        '5PN' => 'E02001495',
        '5PP' => 'E02001501',
        '5PQ' => 'E02001498',
        '5PR' => 'E02001498',
        '5PS' => 'E02001495',
        '5PT' => 'E02001498',
        '5PU' => 'E02001495',
        '5PW' => 'E02001498',
        '5PX' => 'E02001495',
        '5PY' => 'E02001498',
        '5PZ' => 'E02001498',
        '5QA' => 'E02001498',
        '5QB' => 'E02001498',
        '5QD' => 'E02001498',
        '5QE' => 'E02001498',
        '5QF' => 'E02001498',
        '5QG' => 'E02001498',
        '5QH' => 'E02001498',
        '5QJ' => 'E02001498',
        '5QL' => 'E02001498',
        '5QN' => 'E02001498',
        '5QP' => 'E02001498',
        '5QQ' => 'E02001498',
        '5QR' => 'E02001498',
        '5QS' => 'E02001498',
        '5QT' => 'E02001498',
        '5QU' => 'E02001498',
        '5QW' => 'E02001498',
        '5QX' => 'E02001497',
        '5QY' => 'E02001498',
        '5QZ' => 'E02001498',
        '5RA' => 'E02001498',
        '5RB' => 'E02001498',
        '5RD' => 'E02001498',
        '5RE' => 'E02001498',
        '5RF' => 'E02001498',
        '5RG' => 'E02001498',
        '5RN' => 'E02001498',
        '5RR' => 'E02001498',
        '5RU' => 'E02001498',
        '5RX' => 'E02001498',
        '5RZ' => 'E02001497',
        '5SA' => 'E02001498',
        '5SB' => 'E02001497',
        '5WA' => 'E02001498',
        '5WB' => 'E02001497',
        '5WD' => 'E02001497',
        '5WE' => 'E02001497',
        '5WF' => 'E02001497',
        '5WG' => 'E02001497',
        '5WH' => 'E02001497',
        '5WJ' => 'E02001497',
        '5WT' => 'E02001497',
        '5XA' => 'E02001497',
        '5XR' => 'E02001497',
        '5YY' => 'E02001497',
        '6BR' => 'E02001501',
        '6HA' => 'E02001501',
        '6HB' => 'E02001501',
        '6HD' => 'E02001504',
        '6HE' => 'E02001504',
        '6HF' => 'E02001504',
        '6HG' => 'E02001501',
        '6HJ' => 'E02001501',
        '6HL' => 'E02001501',
        '6HN' => 'E02001501',
        '6HP' => 'E02001501',
        '6HQ' => 'E02001501',
        '6HR' => 'E02001501',
        '6HS' => 'E02001501',
        '6HT' => 'E02001501',
        '6HU' => 'E02001501',
        '6HW' => 'E02001501',
        '6HX' => 'E02001501',
        '6HY' => 'E02001504',
        '6HZ' => 'E02001504',
        '6JA' => 'E02001504',
        '6JB' => 'E02001504',
        '6JE' => 'E02001504',
        '6YY' => 'E02001504',
        '7AA' => 'E02001502',
        '7BR' => 'E02001497',
        '7LA' => 'E02001497',
        '7LB' => 'E02001502',
        '7LD' => 'E02001497',
        '7LE' => 'E02001497',
        '7LF' => 'E02001498',
        '7LG' => 'E02001498',
        '7LH' => 'E02001498',
        '7LJ' => 'E02001498',
        '7LL' => 'E02001498',
        '7LN' => 'E02001498',
        '7LP' => 'E02001497',
        '7LQ' => 'E02001497',
        '7LR' => 'E02001498',
        '7LS' => 'E02001498',
        '7LT' => 'E02001497',
        '7LU' => 'E02001497',
        '7LW' => 'E02001498',
        '7LX' => 'E02001498',
        '7LY' => 'E02001497',
        '7LZ' => 'E02001497',
        '7NA' => 'E02001497',
        '7NB' => 'E02001497',
        '7ND' => 'E02001497',
        '7NE' => 'E02001497',
        '7NF' => 'E02001497',
        '7NG' => 'E02001498',
        '7NH' => 'E02001497',
        '7NJ' => 'E02001497',
        '7NL' => 'E02001497',
        '7NN' => 'E02001497',
        '7NP' => 'E02001497',
        '7NQ' => 'E02001497',
        '7NR' => 'E02001497',
        '7NS' => 'E02001497',
        '7NT' => 'E02001497',
        '7NU' => 'E02001497',
        '7NW' => 'E02001497',
        '7NX' => 'E02001497',
        '7NY' => 'E02001497',
        '7PD' => 'E02001497',
        '7PE' => 'E02001497',
        '7PF' => 'E02001497',
        '7PG' => 'E02001502',
        '7PH' => 'E02001502',
        '7PJ' => 'E02001502',
        '7PL' => 'E02001502',
        '7PN' => 'E02001502',
        '7PR' => 'E02001502',
        '7PT' => 'E02001502',
        '7PW' => 'E02001497',
        '7PX' => 'E02001502',
        '7PY' => 'E02001502',
        '7QA' => 'E02001502',
        '7QB' => 'E02001502',
        '7QD' => 'E02001502',
        '7QE' => 'E02001501',
        '7QF' => 'E02001501',
        '7QG' => 'E02001497',
        '7QH' => 'E02001501',
        '7QJ' => 'E02001502',
        '7QL' => 'E02001502',
        '7QN' => 'E02001497',
        '7QP' => 'E02001497',
        '7QQ' => 'E02001497',
        '7QR' => 'E02001501',
        '7QS' => 'E02001501',
        '7QT' => 'E02001501',
        '7QU' => 'E02001497',
        '7QW' => 'E02001501',
        '7QX' => 'E02001497',
        '7QY' => 'E02001502',
        '7QZ' => 'E02001502',
        '7RA' => 'E02001502',
        '7RB' => 'E02001502',
        '7RD' => 'E02001502',
        '7RE' => 'E02001502',
        '7RF' => 'E02001502',
        '7RG' => 'E02001502',
        '7RH' => 'E02001502',
        '7RJ' => 'E02001502',
        '7RL' => 'E02001502',
        '7RN' => 'E02001502',
        '7RP' => 'E02001502',
        '7RQ' => 'E02001502',
        '7RR' => 'E02001502',
        '7RS' => 'E02001502',
        '7RT' => 'E02001502',
        '7RU' => 'E02001497',
        '7RW' => 'E02001502',
        '7RX' => 'E02001502',
        '7RY' => 'E02001502',
        '7RZ' => 'E02001502',
        '7SA' => 'E02001502',
        '7SD' => 'E02001502',
        '7SF' => 'E02001502',
        '7SN' => 'E02001502',
        '7SS' => 'E02001497',
        '7ST' => 'E02001502',
        '7SX' => 'E02001497',
        '7TA' => 'E02001497',
        '7TB' => 'E02001497',
        '7TD' => 'E02001502',
        '7WA' => 'E02001497',
        '7WB' => 'E02001497',
        '7WD' => 'E02001497',
        '7WE' => 'E02001497',
        '7WF' => 'E02001497',
        '7WH' => 'E02001497',
        '7WL' => 'E02001497',
        '7XU' => 'E02001497',
        '7YY' => 'E02001497',
        '8AB' => 'E02001498',
        '8AE' => 'E02001498',
        '8AG' => 'E02001501',
        '8BR' => 'E02001498',
        '8LA' => 'E02001498',
        '8LB' => 'E02001498',
        '8LD' => 'E02001501',
        '8LE' => 'E02001498',
        '8LF' => 'E02001498',
        '8LG' => 'E02001498',
        '8LH' => 'E02001498',
        '8LJ' => 'E02001498',
        '8LL' => 'E02001498',
        '8LN' => 'E02001498',
        '8LP' => 'E02001498',
        '8LQ' => 'E02001498',
        '8LR' => 'E02001498',
        '8LS' => 'E02001498',
        '8LT' => 'E02001498',
        '8LU' => 'E02001498',
        '8LW' => 'E02001498',
        '8LX' => 'E02001498',
        '8LY' => 'E02001498',
        '8LZ' => 'E02001498',
        '8NA' => 'E02001498',
        '8NB' => 'E02001498',
        '8ND' => 'E02001498',
        '8NE' => 'E02001498',
        '8NF' => 'E02001498',
        '8NG' => 'E02001498',
        '8NH' => 'E02001498',
        '8NJ' => 'E02001498',
        '8NL' => 'E02001498',
        '8NN' => 'E02001498',
        '8NP' => 'E02001498',
        '8NQ' => 'E02001498',
        '8NR' => 'E02001498',
        '8NS' => 'E02001498',
        '8NT' => 'E02001498',
        '8NU' => 'E02001498',
        '8NW' => 'E02001498',
        '8NX' => 'E02001498',
        '8NY' => 'E02001498',
        '8NZ' => 'E02001498',
        '8PA' => 'E02001498',
        '8PB' => 'E02001498',
        '8PD' => 'E02001498',
        '8PE' => 'E02001498',
        '8PF' => 'E02001498',
        '8PG' => 'E02001498',
        '8PH' => 'E02001498',
        '8PJ' => 'E02001501',
        '8PL' => 'E02001501',
        '8PN' => 'E02001501',
        '8PP' => 'E02001498',
        '8PQ' => 'E02001498',
        '8PR' => 'E02001501',
        '8PS' => 'E02001501',
        '8PT' => 'E02001498',
        '8PU' => 'E02001501',
        '8PW' => 'E02001501',
        '8PX' => 'E02001498',
        '8PY' => 'E02001501',
        '8PZ' => 'E02001498',
        '8QA' => 'E02001498',
        '8QB' => 'E02001501',
        '8QD' => 'E02001498',
        '8QE' => 'E02001501',
        '8QF' => 'E02001501',
        '8QG' => 'E02001498',
        '8QH' => 'E02001501',
        '8QJ' => 'E02001498',
        '8QL' => 'E02001498',
        '8QN' => 'E02001498',
        '8QP' => 'E02001498',
        '8QQ' => 'E02001501',
        '8QR' => 'E02001501',
        '8QS' => 'E02001498',
        '8QT' => 'E02001498',
        '8QU' => 'E02001498',
        '8QW' => 'E02001501',
        '8QX' => 'E02001501',
        '8QY' => 'E02001498',
        '8QZ' => 'E02001498',
        '8RA' => 'E02001498',
        '8RB' => 'E02001498',
        '8RD' => 'E02001498',
        '8RF' => 'E02001501',
        '8RH' => 'E02001498',
        '8RL' => 'E02001501',
        '8RN' => 'E02001497',
        '8RQ' => 'E02001501',
        '8RT' => 'E02001498',
        '8RU' => 'E02001498',
        '8WA' => 'E02001498',
        '8WB' => 'E02001497',
        '8WD' => 'E02001497',
        '8WE' => 'E02001497',
        '8WF' => 'E02001497',
        '8WU' => 'E02001497',
        '8WZ' => 'E02001497',
        '8YR' => 'E02001497',
        '8YY' => 'E02001497',
        '8ZR' => 'E02001497',
        '9AA' => 'E02001504',
        '9AB' => 'E02001504',
        '9AD' => 'E02001504',
        '9AE' => 'E02001504',
        '9AF' => 'E02001504',
        '9AG' => 'E02001504',
        '9AH' => 'E02001504',
        '9AJ' => 'E02001502',
        '9AL' => 'E02001502',
        '9AN' => 'E02001502',
        '9AP' => 'E02001504',
        '9AQ' => 'E02001504',
        '9AR' => 'E02001504',
        '9AS' => 'E02001504',
        '9AT' => 'E02001504',
        '9AU' => 'E02001504',
        '9AW' => 'E02001504',
        '9AX' => 'E02001504',
        '9AY' => 'E02001504',
        '9BR' => 'E02001504',
        '9FE' => 'E02001504',
        '9FF' => 'E02001504',
        '9FG' => 'E02001504',
        '9FH' => 'E02001504',
        '9FL' => 'E02001504',
        '9FN' => 'E02001504',
        '9FP' => 'E02001504',
        '9FQ' => 'E02001504',
        '9FR' => 'E02001504',
        '9FS' => 'E02001504',
        '9FW' => 'E02001504',
        '9FZ' => 'E02001497',
        '9GE' => 'E02001497',
        '9GG' => 'E02001504',
        '9HA' => 'E02001504',
        '9HB' => 'E02001504',
        '9HD' => 'E02001504',
        '9HE' => 'E02001504',
        '9HF' => 'E02001504',
        '9HG' => 'E02001504',
        '9HH' => 'E02001504',
        '9HJ' => 'E02001504',
        '9HL' => 'E02001504',
        '9HN' => 'E02001504',
        '9HP' => 'E02001504',
        '9HQ' => 'E02001504',
        '9HR' => 'E02001504',
        '9HS' => 'E02001504',
        '9HT' => 'E02001504',
        '9HU' => 'E02001504',
        '9HW' => 'E02001504',
        '9HX' => 'E02001504',
        '9HY' => 'E02001504',
        '9HZ' => 'E02001504',
        '9JA' => 'E02001504',
        '9JB' => 'E02001504',
        '9JD' => 'E02001504',
        '9JE' => 'E02001504',
        '9JF' => 'E02001504',
        '9JG' => 'E02001504',
        '9JH' => 'E02001504',
        '9JJ' => 'E02001504',
        '9JL' => 'E02001504',
        '9JN' => 'E02001504',
        '9JP' => 'E02001504',
        '9JQ' => 'E02001504',
        '9JR' => 'E02001504',
        '9JS' => 'E02001504',
        '9JT' => 'E02001504',
        '9JU' => 'E02001504',
        '9JW' => 'E02001504',
        '9JX' => 'E02001504',
        '9JY' => 'E02001504',
        '9JZ' => 'E02001504',
        '9LA' => 'E02001504',
        '9LB' => 'E02001504',
        '9LD' => 'E02001504',
        '9LE' => 'E02001504',
        '9LF' => 'E02001504',
        '9LG' => 'E02001504',
        '9LH' => 'E02001504',
        '9LJ' => 'E02001504',
        '9LL' => 'E02001504',
        '9LN' => 'E02001504',
        '9LP' => 'E02001504',
        '9LQ' => 'E02001504',
        '9LR' => 'E02001504',
        '9LS' => 'E02001504',
        '9LT' => 'E02001504',
        '9LU' => 'E02001504',
        '9LW' => 'E02001504',
        '9LX' => 'E02001504',
        '9LY' => 'E02001504',
        '9LZ' => 'E02001504',
        '9NA' => 'E02001504',
        '9NB' => 'E02001504',
        '9ND' => 'E02001504',
        '9NE' => 'E02001504',
        '9NF' => 'E02001504',
        '9NG' => 'E02001504',
        '9NH' => 'E02001504',
        '9NJ' => 'E02001504',
        '9NL' => 'E02001504',
        '9NN' => 'E02001504',
        '9NP' => 'E02001504',
        '9NQ' => 'E02001504',
        '9NR' => 'E02001504',
        '9NS' => 'E02001504',
        '9NT' => 'E02001504',
        '9NW' => 'E02001504',
        '9NX' => 'E02001504',
        '9NY' => 'E02001504',
        '9NZ' => 'E02001504',
        '9WA' => 'E02001497',
        '9WB' => 'E02001497',
        '9WD' => 'E02001497',
        '9WE' => 'E02001497',
        '9WF' => 'E02001497',
        '9WG' => 'E02001497',
        '9WQ' => 'E02001497',
        '9WU' => 'E02001497',
        '9WW' => 'E02001497',
        '9WY' => 'E02001497',
        '9WZ' => 'E02001497',
        '9YF' => 'E02001504',
        '9YG' => 'E02001504',
        '9YH' => 'E02001501',
        '9YJ' => 'E02001504',
        '9YL' => 'E02001504',
        '9YN' => 'E02001504',
        '9YP' => 'E02001504',
        '9YQ' => 'E02001504',
        '9YR' => 'E02001504',
        '9YS' => 'E02001504',
        '9YT' => 'E02001504',
        '9YU' => 'E02001504',
        '9YW' => 'E02001504',
        '9YX' => 'E02001504',
        '9YY' => 'E02001504',
        '9YZ' => 'E02001504',
        '9ZX' => 'E02001497',
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