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
final class L25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001397',
        '0LA' => 'E02001401',
        '0LB' => 'E02001401',
        '0LD' => 'E02001401',
        '0LE' => 'E02001401',
        '0LF' => 'E02001401',
        '0LG' => 'E02001401',
        '0LH' => 'E02001401',
        '0LJ' => 'E02001346',
        '0LL' => 'E02001344',
        '0LN' => 'E02001401',
        '0LP' => 'E02001401',
        '0LQ' => 'E02001346',
        '0LR' => 'E02001401',
        '0LS' => 'E02001401',
        '0LT' => 'E02001401',
        '0LU' => 'E02001401',
        '0LW' => 'E02001401',
        '0LX' => 'E02001401',
        '0LY' => 'E02001401',
        '0LZ' => 'E02001401',
        '0NA' => 'E02001401',
        '0NB' => 'E02001401',
        '0ND' => 'E02001401',
        '0NE' => 'E02001401',
        '0NF' => 'E02001401',
        '0NG' => 'E02001401',
        '0NH' => 'E02001401',
        '0NJ' => 'E02001401',
        '0NL' => 'E02001401',
        '0NN' => 'E02001401',
        '0NP' => 'E02001401',
        '0NQ' => 'E02001401',
        '0NR' => 'E02001401',
        '0NS' => 'E02001401',
        '0NT' => 'E02001401',
        '0NU' => 'E02001401',
        '0NW' => 'E02001401',
        '0NX' => 'E02001401',
        '0NY' => 'E02001401',
        '0NZ' => 'E02001401',
        '0PA' => 'E02001401',
        '0PB' => 'E02001401',
        '0PD' => 'E02001401',
        '0PE' => 'E02001401',
        '0PF' => 'E02001401',
        '0PG' => 'E02001401',
        '0PH' => 'E02001401',
        '0PJ' => 'E02001401',
        '0PL' => 'E02001401',
        '0PN' => 'E02001401',
        '0PP' => 'E02001401',
        '0PQ' => 'E02001401',
        '0PR' => 'E02001401',
        '0PS' => 'E02001401',
        '0PT' => 'E02001401',
        '0PU' => 'E02001401',
        '0PW' => 'E02001401',
        '0PX' => 'E02001401',
        '0PY' => 'E02001401',
        '0PZ' => 'E02001401',
        '0QA' => 'E02001401',
        '0QB' => 'E02001346',
        '0QD' => 'E02001346',
        '0QE' => 'E02001346',
        '0QF' => 'E02001346',
        '0QG' => 'E02001346',
        '0QH' => 'E02001346',
        '0QJ' => 'E02001346',
        '0QL' => 'E02001346',
        '0QP' => 'E02001346',
        '0QQ' => 'E02001346',
        '0QR' => 'E02001401',
        '0QS' => 'E02001401',
        '0QT' => 'E02001346',
        '0QU' => 'E02001401',
        '0QW' => 'E02001401',
        '0QX' => 'E02001401',
        '0QY' => 'E02001346',
        '0QZ' => 'E02001401',
        '0RA' => 'E02001397',
        '0RB' => 'E02001401',
        '0RD' => 'E02001401',
        '0RE' => 'E02001401',
        '0WA' => 'E02001397',
        '0WB' => 'E02001397',
        '0WD' => 'E02001397',
        '0WE' => 'E02001397',
        '0WX' => 'E02001397',
        '0WY' => 'E02001397',
        '0WZ' => 'E02001397',
        '0YX' => 'E02001397',
        '0ZY' => 'E02001397',
        '1AB' => 'E02001386',
        '1AD' => 'E02001386',
        '1BA' => 'E02001386',
        '1BB' => 'E02001386',
        '1GA' => 'E02001386',
        '1JA' => 'E02001386',
        '1JB' => 'E02001386',
        '1LN' => 'E02001386',
        '1NA' => 'E02001386',
        '1NB' => 'E02001386',
        '1ND' => 'E02001386',
        '1NE' => 'E02001386',
        '1NF' => 'E02001386',
        '1NG' => 'E02001386',
        '1NH' => 'E02001386',
        '1NJ' => 'E02001386',
        '1NL' => 'E02001386',
        '1NN' => 'E02001386',
        '1NP' => 'E02001386',
        '1NQ' => 'E02001386',
        '1NR' => 'E02001386',
        '1NS' => 'E02001386',
        '1NT' => 'E02001386',
        '1NU' => 'E02001386',
        '1NW' => 'E02001386',
        '1NX' => 'E02001386',
        '1NY' => 'E02001386',
        '1NZ' => 'E02001386',
        '1PA' => 'E02001392',
        '1PB' => 'E02001392',
        '1PD' => 'E02001392',
        '1PE' => 'E02001392',
        '1PF' => 'E02001392',
        '1PG' => 'E02001392',
        '1PH' => 'E02001392',
        '1PJ' => 'E02001392',
        '1PL' => 'E02001392',
        '1PN' => 'E02001392',
        '1PP' => 'E02001392',
        '1PQ' => 'E02001392',
        '1PR' => 'E02001392',
        '1PS' => 'E02001392',
        '1PT' => 'E02001386',
        '1PU' => 'E02001386',
        '1PW' => 'E02001392',
        '1PX' => 'E02001386',
        '1PY' => 'E02001386',
        '1PZ' => 'E02001386',
        '1QA' => 'E02001386',
        '1QB' => 'E02001386',
        '1QD' => 'E02001386',
        '1QE' => 'E02001386',
        '1QF' => 'E02001386',
        '1QG' => 'E02001386',
        '1QH' => 'E02001386',
        '1QJ' => 'E02001386',
        '1QL' => 'E02001386',
        '1QN' => 'E02001386',
        '1QP' => 'E02001386',
        '1QQ' => 'E02001386',
        '1QR' => 'E02001386',
        '1QS' => 'E02001386',
        '1QT' => 'E02001386',
        '1QU' => 'E02001386',
        '1QW' => 'E02001386',
        '1QX' => 'E02001386',
        '1QY' => 'E02001386',
        '1QZ' => 'E02001386',
        '1RA' => 'E02001386',
        '1RB' => 'E02001386',
        '1RD' => 'E02001386',
        '1RE' => 'E02001386',
        '1RF' => 'E02001386',
        '1RG' => 'E02001386',
        '1RH' => 'E02001392',
        '1RJ' => 'E02001392',
        '1RL' => 'E02001392',
        '1RN' => 'E02001392',
        '1RP' => 'E02001397',
        '1RQ' => 'E02001386',
        '1RR' => 'E02001386',
        '1RS' => 'E02001386',
        '1RT' => 'E02001386',
        '1RU' => 'E02001386',
        '1RW' => 'E02001392',
        '1RX' => 'E02001386',
        '1RY' => 'E02001386',
        '1WX' => 'E02001397',
        '1WY' => 'E02001397',
        '1WZ' => 'E02001397',
        '1YX' => 'E02001397',
        '2BA' => 'E02001392',
        '2NA' => 'E02001386',
        '2NB' => 'E02001386',
        '2ND' => 'E02001386',
        '2NE' => 'E02001386',
        '2NH' => 'E02001386',
        '2NJ' => 'E02001386',
        '2NL' => 'E02001386',
        '2NN' => 'E02001386',
        '2NP' => 'E02001386',
        '2NQ' => 'E02001386',
        '2NR' => 'E02001386',
        '2NS' => 'E02001386',
        '2NT' => 'E02001386',
        '2NU' => 'E02001386',
        '2NW' => 'E02001386',
        '2NX' => 'E02001386',
        '2NY' => 'E02001386',
        '2NZ' => 'E02001386',
        '2PA' => 'E02001386',
        '2PB' => 'E02001386',
        '2PD' => 'E02001386',
        '2PE' => 'E02001386',
        '2PF' => 'E02001386',
        '2PG' => 'E02001386',
        '2PH' => 'E02001386',
        '2PJ' => 'E02001386',
        '2PL' => 'E02001391',
        '2PN' => 'E02001391',
        '2PQ' => 'E02001386',
        '2PR' => 'E02001386',
        '2PS' => 'E02001386',
        '2PT' => 'E02001391',
        '2PU' => 'E02001391',
        '2PW' => 'E02001386',
        '2PX' => 'E02001391',
        '2PY' => 'E02001392',
        '2PZ' => 'E02001392',
        '2QA' => 'E02001386',
        '2QB' => 'E02001392',
        '2QD' => 'E02001386',
        '2QF' => 'E02001386',
        '2QH' => 'E02001386',
        '2QJ' => 'E02001386',
        '2QL' => 'E02001386',
        '2QN' => 'E02001386',
        '2QP' => 'E02001386',
        '2QR' => 'E02001386',
        '2QS' => 'E02001386',
        '2QT' => 'E02001386',
        '2QW' => 'E02001386',
        '2QY' => 'E02001386',
        '2QZ' => 'E02001386',
        '2RA' => 'E02001386',
        '2RB' => 'E02001386',
        '2RD' => 'E02001386',
        '2RE' => 'E02001386',
        '2RF' => 'E02001386',
        '2RG' => 'E02001386',
        '2RH' => 'E02001386',
        '2RJ' => 'E02001386',
        '2RL' => 'E02001386',
        '2RN' => 'E02001386',
        '2RP' => 'E02001386',
        '2RQ' => 'E02001386',
        '2RR' => 'E02001386',
        '2RS' => 'E02001386',
        '2RT' => 'E02001386',
        '2RU' => 'E02001386',
        '2RW' => 'E02001386',
        '2RX' => 'E02001386',
        '2RY' => 'E02001386',
        '2RZ' => 'E02001386',
        '2SA' => 'E02001386',
        '2SB' => 'E02001386',
        '2SD' => 'E02001386',
        '2SE' => 'E02001386',
        '2SF' => 'E02001386',
        '2SG' => 'E02001386',
        '2SH' => 'E02001386',
        '2SJ' => 'E02001386',
        '2SL' => 'E02001386',
        '2SN' => 'E02001386',
        '2SP' => 'E02001386',
        '2SQ' => 'E02001386',
        '2SR' => 'E02001386',
        '2SS' => 'E02001386',
        '2ST' => 'E02001386',
        '2SU' => 'E02001386',
        '2SW' => 'E02001386',
        '2SX' => 'E02001386',
        '2SY' => 'E02001386',
        '2SZ' => 'E02001386',
        '2TA' => 'E02001386',
        '2TB' => 'E02001386',
        '2TD' => 'E02001386',
        '2TE' => 'E02001386',
        '2TF' => 'E02001386',
        '2TG' => 'E02001386',
        '2TH' => 'E02001386',
        '2TJ' => 'E02001386',
        '2TL' => 'E02001386',
        '2TN' => 'E02001386',
        '2TP' => 'E02001386',
        '2TQ' => 'E02001386',
        '2TR' => 'E02001386',
        '2TS' => 'E02001386',
        '2TT' => 'E02001386',
        '2TU' => 'E02001386',
        '2TW' => 'E02001386',
        '2TX' => 'E02001386',
        '2TY' => 'E02001386',
        '2TZ' => 'E02001386',
        '2UA' => 'E02001386',
        '2UB' => 'E02001386',
        '2UD' => 'E02001386',
        '2UE' => 'E02001386',
        '2UF' => 'E02001386',
        '2UN' => 'E02001386',
        '2UQ' => 'E02001386',
        '2US' => 'E02001386',
        '2UT' => 'E02001386',
        '2UU' => 'E02001386',
        '2UW' => 'E02001386',
        '2UY' => 'E02001386',
        '2WA' => 'E02001397',
        '2WB' => 'E02001397',
        '2WD' => 'E02001386',
        '2WW' => 'E02001397',
        '2WX' => 'E02001397',
        '2WY' => 'E02001397',
        '2WZ' => 'E02001397',
        '2XD' => 'E02001386',
        '2XE' => 'E02001386',
        '2XF' => 'E02001386',
        '2XH' => 'E02001386',
        '2XJ' => 'E02001386',
        '2XN' => 'E02001386',
        '2XP' => 'E02001386',
        '2XQ' => 'E02001386',
        '2XS' => 'E02001386',
        '2XT' => 'E02001386',
        '2XU' => 'E02001386',
        '2XW' => 'E02001386',
        '2XX' => 'E02001386',
        '2XY' => 'E02001386',
        '2XZ' => 'E02001386',
        '2YA' => 'E02001397',
        '2YB' => 'E02001392',
        '2YD' => 'E02001386',
        '2YE' => 'E02001386',
        '2YF' => 'E02001386',
        '2YG' => 'E02001386',
        '2YH' => 'E02001386',
        '2YJ' => 'E02001386',
        '2YL' => 'E02001386',
        '2YN' => 'E02001391',
        '2YP' => 'E02001386',
        '2YQ' => 'E02001386',
        '2YR' => 'E02001386',
        '2YS' => 'E02001386',
        '2YT' => 'E02001386',
        '2YU' => 'E02001386',
        '2YW' => 'E02001386',
        '2YX' => 'E02001397',
        '3NF' => 'E02001391',
        '3NR' => 'E02001386',
        '3NS' => 'E02001391',
        '3NT' => 'E02001391',
        '3NU' => 'E02001391',
        '3NW' => 'E02001391',
        '3NX' => 'E02001391',
        '3NY' => 'E02001391',
        '3NZ' => 'E02001391',
        '3PA' => 'E02001392',
        '3PB' => 'E02001392',
        '3PD' => 'E02001392',
        '3PE' => 'E02001392',
        '3PF' => 'E02001392',
        '3PG' => 'E02001392',
        '3PH' => 'E02001392',
        '3PJ' => 'E02001392',
        '3PL' => 'E02001392',
        '3PN' => 'E02001392',
        '3PP' => 'E02001392',
        '3PQ' => 'E02001392',
        '3PR' => 'E02001392',
        '3PS' => 'E02001392',
        '3PT' => 'E02001392',
        '3PU' => 'E02001392',
        '3PW' => 'E02001392',
        '3PX' => 'E02001392',
        '3PY' => 'E02001392',
        '3PZ' => 'E02001392',
        '3QA' => 'E02001392',
        '3QB' => 'E02001392',
        '3QD' => 'E02001392',
        '3QE' => 'E02001392',
        '3QF' => 'E02001392',
        '3QG' => 'E02001392',
        '3QH' => 'E02001392',
        '3QJ' => 'E02001392',
        '3QL' => 'E02001392',
        '3QN' => 'E02001392',
        '3QP' => 'E02001391',
        '3QQ' => 'E02001392',
        '3QR' => 'E02001391',
        '3QS' => 'E02001386',
        '3QT' => 'E02001386',
        '3QU' => 'E02001386',
        '3QW' => 'E02001386',
        '3QX' => 'E02001391',
        '3QY' => 'E02001391',
        '3QZ' => 'E02001391',
        '3RA' => 'E02001391',
        '3RB' => 'E02001386',
        '3RD' => 'E02001386',
        '3RE' => 'E02001386',
        '3RF' => 'E02001386',
        '3RG' => 'E02001386',
        '3RH' => 'E02001386',
        '3RJ' => 'E02001386',
        '3RL' => 'E02001386',
        '3RN' => 'E02001386',
        '3RP' => 'E02001386',
        '3RQ' => 'E02001386',
        '3RR' => 'E02001386',
        '3RS' => 'E02001386',
        '3RT' => 'E02001386',
        '3RU' => 'E02001386',
        '3RW' => 'E02001386',
        '3RX' => 'E02001386',
        '3RY' => 'E02001386',
        '3RZ' => 'E02001386',
        '3SA' => 'E02001386',
        '3SB' => 'E02001386',
        '3SD' => 'E02001386',
        '3SE' => 'E02001386',
        '3SF' => 'E02001386',
        '3SG' => 'E02001386',
        '3SH' => 'E02001386',
        '3SJ' => 'E02001386',
        '3SL' => 'E02001392',
        '3SN' => 'E02001392',
        '3SQ' => 'E02001386',
        '3SR' => 'E02001386',
        '3SS' => 'E02001386',
        '3ST' => 'E02001386',
        '3SU' => 'E02001386',
        '3SX' => 'E02001386',
        '3SY' => 'E02001386',
        '3SZ' => 'E02001392',
        '3TA' => 'E02001392',
        '3TB' => 'E02001397',
        '3TD' => 'E02001386',
        '3TE' => 'E02001386',
        '3TF' => 'E02001397',
        '3TG' => 'E02001392',
        '3TH' => 'E02001397',
        '3TJ' => 'E02001397',
        '3TQ' => 'E02001397',
        '3WA' => 'E02001397',
        '3WU' => 'E02001397',
        '3WW' => 'E02001397',
        '3WX' => 'E02001397',
        '3WY' => 'E02001397',
        '3WZ' => 'E02001397',
        '3YX' => 'E02001397',
        '3ZY' => 'E02001397',
        '4AA' => 'E02001392',
        '4AB' => 'E02001392',
        '4AD' => 'E02001392',
        '4AE' => 'E02001392',
        '4AF' => 'E02001392',
        '4AG' => 'E02001392',
        '4AH' => 'E02001392',
        '4AJ' => 'E02001392',
        '4AL' => 'E02001392',
        '4RA' => 'E02001392',
        '4RB' => 'E02001392',
        '4RD' => 'E02001392',
        '4RE' => 'E02001392',
        '4RF' => 'E02001392',
        '4RG' => 'E02001392',
        '4RH' => 'E02001392',
        '4RJ' => 'E02001392',
        '4RL' => 'E02001392',
        '4RN' => 'E02001392',
        '4RP' => 'E02001392',
        '4RQ' => 'E02001392',
        '4RR' => 'E02001392',
        '4RS' => 'E02001392',
        '4RT' => 'E02001392',
        '4RU' => 'E02001392',
        '4RW' => 'E02001392',
        '4RX' => 'E02001392',
        '4RY' => 'E02001392',
        '4RZ' => 'E02001392',
        '4SA' => 'E02001392',
        '4SB' => 'E02001392',
        '4SD' => 'E02001392',
        '4SE' => 'E02001392',
        '4SF' => 'E02001392',
        '4SG' => 'E02001392',
        '4SH' => 'E02001392',
        '4SJ' => 'E02001392',
        '4SL' => 'E02001392',
        '4SN' => 'E02001392',
        '4SP' => 'E02001392',
        '4SQ' => 'E02001392',
        '4SR' => 'E02001392',
        '4SS' => 'E02001392',
        '4ST' => 'E02001392',
        '4SU' => 'E02001392',
        '4SW' => 'E02001392',
        '4SX' => 'E02001393',
        '4SY' => 'E02001392',
        '4SZ' => 'E02001392',
        '4TA' => 'E02001392',
        '4TB' => 'E02001393',
        '4TD' => 'E02001392',
        '4TE' => 'E02001392',
        '4TF' => 'E02001392',
        '4TG' => 'E02001393',
        '4TH' => 'E02001392',
        '4TJ' => 'E02001393',
        '4TL' => 'E02001392',
        '4TN' => 'E02001392',
        '4TP' => 'E02001392',
        '4TQ' => 'E02001393',
        '4TR' => 'E02001392',
        '4TS' => 'E02001393',
        '4TT' => 'E02001393',
        '4TU' => 'E02001393',
        '4TW' => 'E02001393',
        '4TX' => 'E02001392',
        '4TY' => 'E02001392',
        '4TZ' => 'E02001393',
        '4UA' => 'E02001392',
        '4UB' => 'E02001392',
        '4UD' => 'E02001392',
        '4UE' => 'E02001392',
        '4UF' => 'E02001392',
        '4UG' => 'E02001392',
        '4UH' => 'E02001392',
        '4UJ' => 'E02001392',
        '4UL' => 'E02001392',
        '4UN' => 'E02001392',
        '4UP' => 'E02001392',
        '4UQ' => 'E02001392',
        '4UR' => 'E02001392',
        '4US' => 'E02001392',
        '4UU' => 'E02001392',
        '4UW' => 'E02001397',
        '4UX' => 'E02001397',
        '4UY' => 'E02001392',
        '4UZ' => 'E02001392',
        '4WA' => 'E02001397',
        '4WB' => 'E02001397',
        '4WD' => 'E02001397',
        '4WE' => 'E02001397',
        '4WF' => 'E02001397',
        '4WG' => 'E02001397',
        '4WH' => 'E02001397',
        '4WR' => 'E02001397',
        '4WS' => 'E02001397',
        '4WT' => 'E02001397',
        '4WU' => 'E02001397',
        '4WW' => 'E02001397',
        '4WX' => 'E02001397',
        '4WY' => 'E02001397',
        '4WZ' => 'E02001397',
        '4XA' => 'E02001397',
        '4XB' => 'E02001392',
        '4XD' => 'E02001392',
        '4XE' => 'E02001392',
        '4XF' => 'E02001397',
        '4XG' => 'E02001397',
        '4XH' => 'E02001397',
        '4YX' => 'E02001397',
        '4ZY' => 'E02001397',
        '5BA' => 'E02001344',
        '5FA' => 'E02001392',
        '5FB' => 'E02001397',
        '5HA' => 'E02001397',
        '5HJ' => 'E02001344',
        '5HL' => 'E02001344',
        '5HN' => 'E02001344',
        '5HP' => 'E02001397',
        '5HR' => 'E02001397',
        '5HS' => 'E02001397',
        '5HT' => 'E02001397',
        '5HU' => 'E02001397',
        '5HW' => 'E02001344',
        '5HX' => 'E02001397',
        '5HY' => 'E02001392',
        '5JA' => 'E02001397',
        '5JB' => 'E02001401',
        '5JD' => 'E02001397',
        '5JE' => 'E02001397',
        '5JF' => 'E02001397',
        '5JG' => 'E02001397',
        '5JH' => 'E02001397',
        '5JJ' => 'E02001397',
        '5JL' => 'E02001397',
        '5JN' => 'E02001392',
        '5JP' => 'E02001397',
        '5JQ' => 'E02001397',
        '5JR' => 'E02001392',
        '5JS' => 'E02001397',
        '5JT' => 'E02001392',
        '5JU' => 'E02001392',
        '5JW' => 'E02001392',
        '5JX' => 'E02001392',
        '5JY' => 'E02001392',
        '5JZ' => 'E02001392',
        '5LA' => 'E02001392',
        '5LB' => 'E02001392',
        '5LD' => 'E02001392',
        '5LE' => 'E02001392',
        '5LF' => 'E02001392',
        '5LG' => 'E02001344',
        '5LH' => 'E02001397',
        '5LJ' => 'E02001397',
        '5LL' => 'E02001397',
        '5LN' => 'E02001397',
        '5LP' => 'E02001397',
        '5LQ' => 'E02001344',
        '5LR' => 'E02001397',
        '5LS' => 'E02001397',
        '5LT' => 'E02001397',
        '5LU' => 'E02001397',
        '5LW' => 'E02001397',
        '5LX' => 'E02001344',
        '5LY' => 'E02001397',
        '5LZ' => 'E02001397',
        '5NA' => 'E02001344',
        '5NB' => 'E02001344',
        '5ND' => 'E02001344',
        '5NE' => 'E02001344',
        '5NF' => 'E02001344',
        '5NG' => 'E02001344',
        '5NH' => 'E02001397',
        '5NJ' => 'E02001392',
        '5NL' => 'E02001397',
        '5NN' => 'E02001397',
        '5NP' => 'E02001397',
        '5NQ' => 'E02001344',
        '5NR' => 'E02001397',
        '5NS' => 'E02001397',
        '5NT' => 'E02001397',
        '5NU' => 'E02001397',
        '5NW' => 'E02001397',
        '5NX' => 'E02001397',
        '5NY' => 'E02001392',
        '5NZ' => 'E02001397',
        '5PA' => 'E02001397',
        '5PB' => 'E02001392',
        '5PD' => 'E02001392',
        '5PE' => 'E02001397',
        '5PF' => 'E02001397',
        '5PG' => 'E02001397',
        '5PH' => 'E02001397',
        '5PJ' => 'E02001397',
        '5PL' => 'E02001392',
        '5PN' => 'E02001397',
        '5PP' => 'E02001397',
        '5PQ' => 'E02001392',
        '5PR' => 'E02001397',
        '5PS' => 'E02001397',
        '5PT' => 'E02001397',
        '5PU' => 'E02001392',
        '5PW' => 'E02001397',
        '5PX' => 'E02001392',
        '5PY' => 'E02001397',
        '5PZ' => 'E02001392',
        '5QA' => 'E02001397',
        '5QB' => 'E02001392',
        '5QD' => 'E02001397',
        '5QE' => 'E02001397',
        '5QG' => 'E02001392',
        '5QH' => 'E02001397',
        '5QJ' => 'E02001397',
        '5QL' => 'E02001397',
        '5QN' => 'E02001397',
        '5QP' => 'E02001397',
        '5QQ' => 'E02001397',
        '5QR' => 'E02001397',
        '5QW' => 'E02001397',
        '5WA' => 'E02001397',
        '5WB' => 'E02001397',
        '5WD' => 'E02001397',
        '5WE' => 'E02001397',
        '5WF' => 'E02001397',
        '5WG' => 'E02001397',
        '5WH' => 'E02001397',
        '5WL' => 'E02001397',
        '5WN' => 'E02001397',
        '5WP' => 'E02001397',
        '5WQ' => 'E02001397',
        '5WR' => 'E02001397',
        '5WS' => 'E02001397',
        '5WT' => 'E02001397',
        '5WU' => 'E02001397',
        '5WW' => 'E02001397',
        '5WX' => 'E02001397',
        '5WY' => 'E02001397',
        '5WZ' => 'E02001397',
        '5YW' => 'E02001397',
        '5YX' => 'E02001397',
        '5ZB' => 'E02001397',
        '5ZG' => 'E02001397',
        '6AA' => 'E02001397',
        '6AB' => 'E02001397',
        '6DA' => 'E02001397',
        '6DB' => 'E02001392',
        '6DD' => 'E02001397',
        '6DF' => 'E02001392',
        '6DG' => 'E02001397',
        '6DH' => 'E02001397',
        '6DJ' => 'E02001397',
        '6DL' => 'E02001397',
        '6DN' => 'E02001392',
        '6DP' => 'E02001397',
        '6DQ' => 'E02001397',
        '6DR' => 'E02001392',
        '6DS' => 'E02001392',
        '6DT' => 'E02001392',
        '6DU' => 'E02001397',
        '6DW' => 'E02001397',
        '6DX' => 'E02001392',
        '6DY' => 'E02001393',
        '6DZ' => 'E02001393',
        '6EA' => 'E02001392',
        '6EB' => 'E02001392',
        '6ED' => 'E02001392',
        '6EE' => 'E02001393',
        '6EF' => 'E02001393',
        '6EG' => 'E02001393',
        '6EH' => 'E02001392',
        '6EJ' => 'E02001393',
        '6EL' => 'E02001392',
        '6EN' => 'E02001393',
        '6EP' => 'E02001392',
        '6EQ' => 'E02001392',
        '6ER' => 'E02001392',
        '6ES' => 'E02001393',
        '6ET' => 'E02001393',
        '6EU' => 'E02001393',
        '6EW' => 'E02001393',
        '6EX' => 'E02001393',
        '6EY' => 'E02001397',
        '6EZ' => 'E02001397',
        '6FA' => 'E02001393',
        '6HA' => 'E02001397',
        '6HB' => 'E02001397',
        '6HD' => 'E02001393',
        '6HE' => 'E02001397',
        '6HF' => 'E02001397',
        '6HG' => 'E02001397',
        '6HH' => 'E02001397',
        '6HJ' => 'E02001397',
        '6HL' => 'E02001397',
        '6HN' => 'E02001397',
        '6HP' => 'E02001397',
        '6HQ' => 'E02001397',
        '6HR' => 'E02001392',
        '6HS' => 'E02001392',
        '6HT' => 'E02001392',
        '6HU' => 'E02001392',
        '6HW' => 'E02001397',
        '6HX' => 'E02001393',
        '6HY' => 'E02001392',
        '6HZ' => 'E02001392',
        '6JA' => 'E02001392',
        '6JB' => 'E02001392',
        '6JD' => 'E02001393',
        '6JE' => 'E02001393',
        '6JF' => 'E02001393',
        '6JG' => 'E02001393',
        '6JJ' => 'E02001392',
        '6JL' => 'E02001397',
        '6JN' => 'E02001397',
        '6JP' => 'E02001397',
        '6JQ' => 'E02001392',
        '6JR' => 'E02001392',
        '6JU' => 'E02001392',
        '6JW' => 'E02001397',
        '6JX' => 'E02001397',
        '6JY' => 'E02001397',
        '6JZ' => 'E02001397',
        '6LB' => 'E02001397',
        '6LD' => 'E02001397',
        '6LE' => 'E02001397',
        '6LF' => 'E02001397',
        '6LG' => 'E02001397',
        '6LH' => 'E02001397',
        '6LJ' => 'E02001397',
        '6LL' => 'E02001397',
        '6LN' => 'E02001397',
        '6LP' => 'E02001397',
        '6LQ' => 'E02001397',
        '6LR' => 'E02001397',
        '6LS' => 'E02001397',
        '6LT' => 'E02001397',
        '6LU' => 'E02001397',
        '6LW' => 'E02001397',
        '6LX' => 'E02001397',
        '6LY' => 'E02001397',
        '6WA' => 'E02001397',
        '6WP' => 'E02001397',
        '6WQ' => 'E02001397',
        '6WR' => 'E02001397',
        '6WS' => 'E02001397',
        '6WT' => 'E02001397',
        '6WU' => 'E02001397',
        '6WW' => 'E02001397',
        '6WX' => 'E02001397',
        '6WY' => 'E02001397',
        '6WZ' => 'E02001397',
        '6YU' => 'E02001397',
        '6YW' => 'E02001397',
        '6YX' => 'E02001397',
        '6ZX' => 'E02001397',
        '7AA' => 'E02001397',
        '7AB' => 'E02001401',
        '7AD' => 'E02001397',
        '7AE' => 'E02001397',
        '7AF' => 'E02001397',
        '7AG' => 'E02001397',
        '7AH' => 'E02001397',
        '7AJ' => 'E02001401',
        '7AP' => 'E02001401',
        '7AQ' => 'E02001393',
        '7AR' => 'E02001401',
        '7AS' => 'E02001397',
        '7AT' => 'E02001397',
        '7AU' => 'E02001397',
        '7AW' => 'E02001401',
        '7AX' => 'E02001401',
        '7AY' => 'E02001400',
        '7AZ' => 'E02001397',
        '7BA' => 'E02001397',
        '7BB' => 'E02001397',
        '7BD' => 'E02001393',
        '7BE' => 'E02001397',
        '7BG' => 'E02001400',
        '7DA' => 'E02001393',
        '7DB' => 'E02001393',
        '7DD' => 'E02001393',
        '7FB' => 'E02001397',
        '7GA' => 'E02001397',
        '7GB' => 'E02001397',
        '7RA' => 'E02001397',
        '7RB' => 'E02001397',
        '7RD' => 'E02001397',
        '7RE' => 'E02001397',
        '7RF' => 'E02001397',
        '7RG' => 'E02001397',
        '7RH' => 'E02001397',
        '7RJ' => 'E02001397',
        '7RL' => 'E02001397',
        '7RN' => 'E02001397',
        '7RP' => 'E02001397',
        '7RQ' => 'E02001397',
        '7RR' => 'E02001397',
        '7RS' => 'E02001397',
        '7RT' => 'E02001397',
        '7RU' => 'E02001397',
        '7RW' => 'E02001397',
        '7RX' => 'E02001397',
        '7RY' => 'E02001397',
        '7RZ' => 'E02001397',
        '7SA' => 'E02001397',
        '7SB' => 'E02001397',
        '7SD' => 'E02001397',
        '7SE' => 'E02001397',
        '7SF' => 'E02001397',
        '7SG' => 'E02001397',
        '7SH' => 'E02001397',
        '7SJ' => 'E02001397',
        '7SL' => 'E02001397',
        '7SN' => 'E02001397',
        '7SP' => 'E02001397',
        '7SQ' => 'E02001397',
        '7SR' => 'E02001401',
        '7SS' => 'E02001397',
        '7ST' => 'E02001397',
        '7SU' => 'E02001397',
        '7SW' => 'E02001397',
        '7SX' => 'E02001397',
        '7SY' => 'E02001397',
        '7SZ' => 'E02001397',
        '7TA' => 'E02001401',
        '7TB' => 'E02001401',
        '7TD' => 'E02001401',
        '7TE' => 'E02001397',
        '7TF' => 'E02001397',
        '7TG' => 'E02001401',
        '7TH' => 'E02001397',
        '7TJ' => 'E02001401',
        '7TL' => 'E02001401',
        '7TN' => 'E02001401',
        '7TP' => 'E02001401',
        '7TQ' => 'E02001401',
        '7TR' => 'E02001401',
        '7TS' => 'E02001401',
        '7TT' => 'E02001401',
        '7TU' => 'E02001401',
        '7TW' => 'E02001401',
        '7TX' => 'E02001401',
        '7TY' => 'E02001401',
        '7TZ' => 'E02001401',
        '7UA' => 'E02001401',
        '7UB' => 'E02001397',
        '7UD' => 'E02001401',
        '7UE' => 'E02001401',
        '7UF' => 'E02001401',
        '7UG' => 'E02001401',
        '7UH' => 'E02001401',
        '7UJ' => 'E02001401',
        '7UL' => 'E02001400',
        '7UN' => 'E02001401',
        '7UP' => 'E02001397',
        '7UQ' => 'E02001401',
        '7UR' => 'E02001397',
        '7US' => 'E02001397',
        '7UT' => 'E02001397',
        '7UU' => 'E02001397',
        '7UW' => 'E02001400',
        '7UX' => 'E02001397',
        '7UY' => 'E02001397',
        '7UZ' => 'E02001397',
        '7WA' => 'E02001397',
        '7WB' => 'E02001397',
        '7WN' => 'E02001397',
        '7WP' => 'E02001397',
        '7WQ' => 'E02001397',
        '7WR' => 'E02001397',
        '7WS' => 'E02001397',
        '7WT' => 'E02001397',
        '7WW' => 'E02001397',
        '7WX' => 'E02001397',
        '7WY' => 'E02001397',
        '7WZ' => 'E02001397',
        '7XA' => 'E02001397',
        '7XB' => 'E02001397',
        '7XD' => 'E02001397',
        '7XE' => 'E02001393',
        '7XF' => 'E02001397',
        '7XG' => 'E02001397',
        '7XH' => 'E02001393',
        '7XJ' => 'E02001401',
        '7XQ' => 'E02001393',
        '7XR' => 'E02001401',
        '7YA' => 'E02001401',
        '7YD' => 'E02001401',
        '7YE' => 'E02001401',
        '7YF' => 'E02001401',
        '7YH' => 'E02001401',
        '7YJ' => 'E02001397',
        '7YL' => 'E02001397',
        '7YN' => 'E02001401',
        '7YQ' => 'E02001401',
        '7YW' => 'E02001397',
        '7YZ' => 'E02001397',
        '8AA' => 'E02001397',
        '8QA' => 'E02001397',
        '8QB' => 'E02001397',
        '8QD' => 'E02001401',
        '8QE' => 'E02001397',
        '8QF' => 'E02001401',
        '8QG' => 'E02001401',
        '8QH' => 'E02001397',
        '8QJ' => 'E02001397',
        '8QL' => 'E02001401',
        '8QN' => 'E02001401',
        '8QP' => 'E02001401',
        '8QQ' => 'E02001401',
        '8QR' => 'E02001401',
        '8QS' => 'E02001397',
        '8QT' => 'E02001401',
        '8QU' => 'E02001397',
        '8QW' => 'E02001401',
        '8QX' => 'E02001397',
        '8QY' => 'E02001397',
        '8QZ' => 'E02001401',
        '8RA' => 'E02001397',
        '8RB' => 'E02001397',
        '8RD' => 'E02001397',
        '8RE' => 'E02001397',
        '8RF' => 'E02001397',
        '8RG' => 'E02001397',
        '8RH' => 'E02001397',
        '8RJ' => 'E02001397',
        '8RL' => 'E02001401',
        '8RN' => 'E02001397',
        '8RP' => 'E02001397',
        '8RQ' => 'E02001397',
        '8RR' => 'E02001397',
        '8RS' => 'E02001397',
        '8RT' => 'E02001397',
        '8RU' => 'E02001397',
        '8RW' => 'E02001397',
        '8RX' => 'E02001397',
        '8RY' => 'E02001397',
        '8RZ' => 'E02001397',
        '8SA' => 'E02001401',
        '8SB' => 'E02001401',
        '8SD' => 'E02001401',
        '8SE' => 'E02001397',
        '8SF' => 'E02001397',
        '8SG' => 'E02001397',
        '8SH' => 'E02001401',
        '8SJ' => 'E02001401',
        '8SL' => 'E02001401',
        '8SN' => 'E02001401',
        '8SP' => 'E02001401',
        '8SQ' => 'E02001397',
        '8SR' => 'E02001401',
        '8SS' => 'E02001401',
        '8ST' => 'E02001401',
        '8SU' => 'E02001401',
        '8SW' => 'E02001401',
        '8SX' => 'E02001401',
        '8SY' => 'E02001401',
        '8SZ' => 'E02001401',
        '8TA' => 'E02001401',
        '8TB' => 'E02001401',
        '8TD' => 'E02001401',
        '8TE' => 'E02001401',
        '8TF' => 'E02001401',
        '8TG' => 'E02001401',
        '8TH' => 'E02001401',
        '8TJ' => 'E02001397',
        '8TL' => 'E02001397',
        '8TN' => 'E02001397',
        '8TP' => 'E02001397',
        '8TQ' => 'E02001344',
        '8TR' => 'E02001397',
        '8TS' => 'E02001401',
        '8TT' => 'E02001397',
        '8TU' => 'E02001397',
        '8TW' => 'E02001397',
        '8TX' => 'E02001401',
        '8TY' => 'E02001397',
        '8TZ' => 'E02001397',
        '8UA' => 'E02001397',
        '8UB' => 'E02001401',
        '8UD' => 'E02001397',
        '8UE' => 'E02001397',
        '8UG' => 'E02001397',
        '8UH' => 'E02001397',
        '8UJ' => 'E02001397',
        '8UQ' => 'E02001397',
        '8WA' => 'E02001397',
        '8WB' => 'E02001397',
        '8WR' => 'E02001397',
        '8WS' => 'E02001397',
        '8WT' => 'E02001397',
        '8WU' => 'E02001397',
        '8WW' => 'E02001397',
        '8WY' => 'E02001397',
        '8WZ' => 'E02001397',
        '9AA' => 'E02001344',
        '9AB' => 'E02001344',
        '9GA' => 'E02001346',
        '9GB' => 'E02001346',
        '9GD' => 'E02001346',
        '9GE' => 'E02001344',
        '9GF' => 'E02001346',
        '9GG' => 'E02001346',
        '9GH' => 'E02001397',
        '9JE' => 'E02001346',
        '9LR' => 'E02001344',
        '9LS' => 'E02001344',
        '9NA' => 'E02001397',
        '9NB' => 'E02001397',
        '9ND' => 'E02001401',
        '9NE' => 'E02001397',
        '9NF' => 'E02001397',
        '9NG' => 'E02001401',
        '9NH' => 'E02001344',
        '9NJ' => 'E02001397',
        '9NL' => 'E02001401',
        '9NN' => 'E02001397',
        '9NP' => 'E02001401',
        '9NQ' => 'E02001397',
        '9NR' => 'E02001401',
        '9NS' => 'E02001401',
        '9NT' => 'E02001401',
        '9NU' => 'E02001401',
        '9NW' => 'E02001401',
        '9NX' => 'E02001401',
        '9NY' => 'E02001401',
        '9NZ' => 'E02001344',
        '9PA' => 'E02001344',
        '9PB' => 'E02001344',
        '9PD' => 'E02001344',
        '9PE' => 'E02001344',
        '9PF' => 'E02001344',
        '9PG' => 'E02001344',
        '9PH' => 'E02001344',
        '9PJ' => 'E02001344',
        '9PL' => 'E02001344',
        '9PN' => 'E02001344',
        '9PP' => 'E02001344',
        '9PQ' => 'E02001344',
        '9PR' => 'E02001344',
        '9PS' => 'E02001344',
        '9PT' => 'E02001344',
        '9PU' => 'E02001344',
        '9PW' => 'E02001344',
        '9PX' => 'E02001344',
        '9PY' => 'E02001344',
        '9PZ' => 'E02001344',
        '9QA' => 'E02001344',
        '9QB' => 'E02001344',
        '9QD' => 'E02001344',
        '9QE' => 'E02001344',
        '9QF' => 'E02001344',
        '9QG' => 'E02001344',
        '9QH' => 'E02001344',
        '9QJ' => 'E02001344',
        '9QL' => 'E02001344',
        '9QN' => 'E02001346',
        '9QP' => 'E02001344',
        '9QQ' => 'E02001344',
        '9QR' => 'E02001344',
        '9QS' => 'E02001344',
        '9QT' => 'E02001346',
        '9QU' => 'E02001346',
        '9QW' => 'E02001346',
        '9QX' => 'E02001346',
        '9QY' => 'E02001346',
        '9QZ' => 'E02001346',
        '9RA' => 'E02001346',
        '9RB' => 'E02001346',
        '9RD' => 'E02001346',
        '9RE' => 'E02001344',
        '9RF' => 'E02001344',
        '9RG' => 'E02001344',
        '9RH' => 'E02001346',
        '9RJ' => 'E02001344',
        '9RL' => 'E02001344',
        '9RN' => 'E02001344',
        '9RP' => 'E02001344',
        '9RQ' => 'E02001344',
        '9RR' => 'E02001344',
        '9RS' => 'E02001344',
        '9RT' => 'E02001344',
        '9RU' => 'E02001344',
        '9RW' => 'E02001344',
        '9RX' => 'E02001344',
        '9RY' => 'E02001344',
        '9RZ' => 'E02001344',
        '9SA' => 'E02001344',
        '9SB' => 'E02001344',
        '9SD' => 'E02001344',
        '9SE' => 'E02001344',
        '9SF' => 'E02001344',
        '9SG' => 'E02001344',
        '9SH' => 'E02001344',
        '9SJ' => 'E02001344',
        '9SN' => 'E02001344',
        '9SP' => 'E02001344',
        '9SQ' => 'E02001344',
        '9SR' => 'E02001397',
        '9SS' => 'E02001344',
        '9ST' => 'E02001344',
        '9SU' => 'E02001344',
        '9SW' => 'E02001344',
        '9SX' => 'E02001344',
        '9TA' => 'E02001344',
        '9UF' => 'E02001344',
        '9WA' => 'E02001397',
        '9WB' => 'E02001397',
        '9WY' => 'E02001397',
        '9WZ' => 'E02001344',
        '9YU' => 'E02001397',
        '9YW' => 'E02001397',
        '9YX' => 'E02001344',
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
