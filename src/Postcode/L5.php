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
final class L5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0BA' => 'E02001369',
        '0BB' => 'E02001369',
        '0BD' => 'E02001369',
        '0BL' => 'E02001369',
        '0BN' => 'E02001364',
        '0BR' => 'E02001364',
        '0PA' => 'E02001369',
        '0PB' => 'E02001369',
        '0PD' => 'E02001369',
        '0PJ' => 'E02001369',
        '0PP' => 'E02001369',
        '0PR' => 'E02001369',
        '0PS' => 'E02001369',
        '0PZ' => 'E02001364',
        '0QD' => 'E02001369',
        '0QP' => 'E02001369',
        '0QU' => 'E02001369',
        '0QW' => 'E02001369',
        '0QX' => 'E02001369',
        '0RA' => 'E02001369',
        '0RB' => 'E02001369',
        '0RD' => 'E02001369',
        '0RE' => 'E02001369',
        '0RF' => 'E02001369',
        '0RG' => 'E02001369',
        '0RH' => 'E02001369',
        '0RJ' => 'E02001369',
        '0RL' => 'E02001369',
        '0RN' => 'E02001369',
        '0RP' => 'E02001369',
        '0RQ' => 'E02001369',
        '0RR' => 'E02001369',
        '0RS' => 'E02001369',
        '0RT' => 'E02001369',
        '0RU' => 'E02001369',
        '0RW' => 'E02001369',
        '0RX' => 'E02001369',
        '0RY' => 'E02001369',
        '0RZ' => 'E02001364',
        '0SB' => 'E02001369',
        '0SD' => 'E02001369',
        '0SE' => 'E02001369',
        '0SF' => 'E02001369',
        '0SG' => 'E02001369',
        '0SH' => 'E02001369',
        '0SJ' => 'E02001369',
        '0SL' => 'E02001369',
        '0SN' => 'E02001369',
        '0SP' => 'E02001368',
        '0SQ' => 'E02001369',
        '0SR' => 'E02001369',
        '0SS' => 'E02001369',
        '0ST' => 'E02001369',
        '0SU' => 'E02001369',
        '0SW' => 'E02001369',
        '0SX' => 'E02001369',
        '0SY' => 'E02001369',
        '0SZ' => 'E02001369',
        '0TA' => 'E02001369',
        '0TB' => 'E02001369',
        '0TD' => 'E02001369',
        '0TE' => 'E02001369',
        '0TF' => 'E02001369',
        '0TU' => 'E02001369',
        '1AA' => 'E02001364',
        '1AB' => 'E02001364',
        '1AD' => 'E02001364',
        '1AE' => 'E02001364',
        '1AF' => 'E02001364',
        '1AG' => 'E02001364',
        '1AH' => 'E02001364',
        '1AJ' => 'E02001364',
        '1AL' => 'E02001364',
        '1TA' => 'E02001364',
        '1TG' => 'E02001364',
        '1TH' => 'E02001364',
        '1TJ' => 'E02001364',
        '1TP' => 'E02001364',
        '1TQ' => 'E02001364',
        '1TR' => 'E02001364',
        '1TS' => 'E02001364',
        '1TT' => 'E02001364',
        '1TU' => 'E02001364',
        '1TW' => 'E02001364',
        '1TX' => 'E02001364',
        '1TY' => 'E02001364',
        '1TZ' => 'E02001364',
        '1UA' => 'E02001364',
        '1UB' => 'E02001364',
        '1UD' => 'E02001364',
        '1UE' => 'E02001364',
        '1UF' => 'E02001364',
        '1UG' => 'E02001364',
        '1UH' => 'E02001364',
        '1UJ' => 'E02001364',
        '1UL' => 'E02001364',
        '1UN' => 'E02001364',
        '1UP' => 'E02001364',
        '1UQ' => 'E02001364',
        '1UR' => 'E02001364',
        '1US' => 'E02001364',
        '1UT' => 'E02001364',
        '1UU' => 'E02001364',
        '1UW' => 'E02001364',
        '1UX' => 'E02001364',
        '1UY' => 'E02001364',
        '1UZ' => 'E02001364',
        '1XA' => 'E02001364',
        '1XB' => 'E02001364',
        '1XD' => 'E02001364',
        '1XE' => 'E02001364',
        '1XF' => 'E02001364',
        '1XG' => 'E02001364',
        '1XH' => 'E02001364',
        '1XJ' => 'E02001364',
        '1XL' => 'E02001364',
        '1XN' => 'E02001364',
        '1XP' => 'E02001364',
        '1XQ' => 'E02001364',
        '2AR' => 'E02001368',
        '2AT' => 'E02001368',
        '2BD' => 'E02001368',
        '2BG' => 'E02001368',
        '2BH' => 'E02001368',
        '2BJ' => 'E02001368',
        '2BP' => 'E02001368',
        '2PA' => 'E02001368',
        '2PB' => 'E02001368',
        '2PD' => 'E02001368',
        '2PE' => 'E02001368',
        '2PG' => 'E02001368',
        '2PJ' => 'E02001368',
        '2PL' => 'E02001368',
        '2PT' => 'E02001368',
        '2PW' => 'E02001368',
        '2PX' => 'E02001368',
        '2PY' => 'E02001368',
        '2QA' => 'E02001368',
        '2QB' => 'E02001368',
        '2QD' => 'E02001368',
        '2QE' => 'E02001368',
        '2QF' => 'E02001360',
        '2QG' => 'E02001368',
        '2QH' => 'E02001368',
        '2QJ' => 'E02001368',
        '2QL' => 'E02001368',
        '2QN' => 'E02001368',
        '2QP' => 'E02001360',
        '2QQ' => 'E02001368',
        '2QR' => 'E02001360',
        '2QS' => 'E02001368',
        '2QT' => 'E02001368',
        '2QU' => 'E02001368',
        '2QW' => 'E02001360',
        '2QX' => 'E02001368',
        '2QY' => 'E02001368',
        '2QZ' => 'E02001360',
        '2RA' => 'E02001368',
        '2RB' => 'E02001368',
        '2RD' => 'E02001360',
        '2RE' => 'E02001368',
        '2RF' => 'E02001368',
        '2RG' => 'E02001368',
        '2RH' => 'E02001368',
        '2RJ' => 'E02001368',
        '2RL' => 'E02001368',
        '2RP' => 'E02001368',
        '2RQ' => 'E02001368',
        '2RR' => 'E02001368',
        '2RT' => 'E02001368',
        '2RU' => 'E02001368',
        '2RW' => 'E02001368',
        '2RX' => 'E02001360',
        '2RY' => 'E02001368',
        '2RZ' => 'E02001368',
        '2SA' => 'E02001368',
        '2SB' => 'E02001368',
        '2SD' => 'E02001368',
        '2SE' => 'E02001368',
        '2SF' => 'E02001368',
        '2SG' => 'E02001368',
        '2SH' => 'E02001368',
        '2SJ' => 'E02001368',
        '2SL' => 'E02001368',
        '2SN' => 'E02001368',
        '2SP' => 'E02001368',
        '2SQ' => 'E02001368',
        '2SR' => 'E02001368',
        '2SS' => 'E02001368',
        '2ST' => 'E02001368',
        '2SU' => 'E02001368',
        '2SW' => 'E02001368',
        '2SX' => 'E02001368',
        '2SY' => 'E02001368',
        '2SZ' => 'E02001368',
        '3AA' => 'E02001369',
        '3BA' => 'E02001369',
        '3BB' => 'E02001369',
        '3LA' => 'E02001369',
        '3LB' => 'E02001369',
        '3LD' => 'E02001369',
        '3LE' => 'E02001369',
        '3LF' => 'E02001369',
        '3LH' => 'E02001369',
        '3LJ' => 'E02001369',
        '3LL' => 'E02001369',
        '3LN' => 'E02001369',
        '3LP' => 'E02001369',
        '3LQ' => 'E02001369',
        '3LR' => 'E02001369',
        '3LS' => 'E02001369',
        '3LT' => 'E02001369',
        '3LU' => 'E02001369',
        '3LW' => 'E02001369',
        '3LX' => 'E02001369',
        '3LY' => 'E02001369',
        '3LZ' => 'E02001369',
        '3NA' => 'E02001369',
        '3NB' => 'E02001369',
        '3ND' => 'E02001369',
        '3NE' => 'E02001369',
        '3NG' => 'E02001369',
        '3NH' => 'E02001369',
        '3NJ' => 'E02001369',
        '3NL' => 'E02001369',
        '3NN' => 'E02001369',
        '3NP' => 'E02001369',
        '3NQ' => 'E02001369',
        '3NR' => 'E02001369',
        '3NS' => 'E02001369',
        '3NT' => 'E02001369',
        '3NU' => 'E02001369',
        '3NW' => 'E02001369',
        '3NX' => 'E02001369',
        '3NY' => 'E02001369',
        '3NZ' => 'E02001369',
        '3PA' => 'E02001369',
        '3PB' => 'E02001369',
        '3PD' => 'E02001369',
        '3PE' => 'E02001369',
        '3PF' => 'E02001369',
        '3PG' => 'E02001369',
        '3PH' => 'E02001369',
        '3PJ' => 'E02001369',
        '3PL' => 'E02001369',
        '3PN' => 'E02001368',
        '3PP' => 'E02001369',
        '3PQ' => 'E02001369',
        '3PR' => 'E02001369',
        '3PT' => 'E02001369',
        '3PU' => 'E02001369',
        '3PW' => 'E02001369',
        '3QE' => 'E02001369',
        '3QF' => 'E02001369',
        '3QG' => 'E02001369',
        '3QH' => 'E02001369',
        '3QN' => 'E02001369',
        '3QQ' => 'E02001369',
        '3QU' => 'E02001369',
        '3QW' => 'E02001369',
        '3QX' => 'E02001369',
        '3QY' => 'E02001369',
        '3QZ' => 'E02001369',
        '3RA' => 'E02001369',
        '3RB' => 'E02001369',
        '3RD' => 'E02001369',
        '3RE' => 'E02001369',
        '3RF' => 'E02001369',
        '3RG' => 'E02001369',
        '3RH' => 'E02001369',
        '3RJ' => 'E02001369',
        '3RL' => 'E02001369',
        '3RN' => 'E02001369',
        '3RP' => 'E02001369',
        '3RQ' => 'E02001369',
        '3RR' => 'E02001369',
        '3RS' => 'E02001369',
        '3RT' => 'E02001369',
        '3RU' => 'E02001369',
        '3RW' => 'E02001369',
        '3RX' => 'E02001369',
        '3RY' => 'E02001369',
        '3RZ' => 'E02001369',
        '3SA' => 'E02001369',
        '3SB' => 'E02001369',
        '3SD' => 'E02001369',
        '3SE' => 'E02001369',
        '3SF' => 'E02001369',
        '3SG' => 'E02001369',
        '3SH' => 'E02001369',
        '3SJ' => 'E02001369',
        '3SL' => 'E02001369',
        '3SN' => 'E02001369',
        '3SP' => 'E02001369',
        '3SQ' => 'E02001368',
        '3SR' => 'E02001369',
        '3SS' => 'E02001369',
        '3ST' => 'E02001369',
        '3SU' => 'E02001369',
        '3SW' => 'E02001369',
        '3SX' => 'E02001369',
        '3SY' => 'E02001369',
        '3SZ' => 'E02001369',
        '3TA' => 'E02001369',
        '3YX' => 'E02001369',
        '4LA' => 'E02001369',
        '4LB' => 'E02001369',
        '4LE' => 'E02001369',
        '4LF' => 'E02001369',
        '4LH' => 'E02001369',
        '4LJ' => 'E02001369',
        '4LS' => 'E02001369',
        '4LT' => 'E02001369',
        '4LX' => 'E02001369',
        '4LY' => 'E02001369',
        '4LZ' => 'E02001369',
        '4NA' => 'E02001369',
        '4NB' => 'E02001369',
        '4NE' => 'E02001369',
        '4NG' => 'E02001369',
        '4NH' => 'E02001370',
        '4NJ' => 'E02001364',
        '4NQ' => 'E02001369',
        '4PJ' => 'E02001369',
        '4PN' => 'E02001369',
        '4PY' => 'E02001369',
        '4QA' => 'E02001369',
        '4QB' => 'E02001370',
        '4QF' => 'E02001370',
        '4QG' => 'E02001370',
        '4QP' => 'E02001369',
        '4QR' => 'E02001369',
        '4QT' => 'E02001369',
        '4QU' => 'E02001369',
        '4QY' => 'E02001369',
        '4QZ' => 'E02001369',
        '4RP' => 'E02001370',
        '4RT' => 'E02001369',
        '4RX' => 'E02001369',
        '4SB' => 'E02001369',
        '4SU' => 'E02001369',
        '4SX' => 'E02001369',
        '4SY' => 'E02001369',
        '4SZ' => 'E02001369',
        '4TA' => 'E02001369',
        '4TB' => 'E02001369',
        '4TD' => 'E02001369',
        '4TE' => 'E02001369',
        '4TF' => 'E02001369',
        '4TG' => 'E02001369',
        '4TH' => 'E02001369',
        '4TJ' => 'E02001369',
        '4TL' => 'E02001369',
        '4TN' => 'E02001370',
        '4TP' => 'E02001369',
        '4TQ' => 'E02001369',
        '4TR' => 'E02001370',
        '4TW' => 'E02001370',
        '5AA' => 'E02001368',
        '5AD' => 'E02001368',
        '5AE' => 'E02001368',
        '5AF' => 'E02001369',
        '5AH' => 'E02001368',
        '5AJ' => 'E02001368',
        '5AL' => 'E02001368',
        '5AQ' => 'E02001368',
        '5AR' => 'E02001368',
        '5AS' => 'E02001368',
        '5AT' => 'E02001368',
        '5AU' => 'E02001368',
        '5AW' => 'E02001368',
        '5AX' => 'E02001368',
        '5AY' => 'E02001368',
        '5BA' => 'E02001368',
        '5BB' => 'E02001368',
        '5BD' => 'E02001368',
        '5BE' => 'E02001368',
        '5BH' => 'E02001368',
        '5BJ' => 'E02001368',
        '5BL' => 'E02001368',
        '5BN' => 'E02001368',
        '5BP' => 'E02001368',
        '5BQ' => 'E02001368',
        '5BR' => 'E02001368',
        '5BT' => 'E02001368',
        '5BU' => 'E02001368',
        '5BY' => 'E02001368',
        '5DB' => 'E02001368',
        '5DF' => 'E02001369',
        '5DH' => 'E02001368',
        '5DJ' => 'E02001368',
        '5DS' => 'E02001368',
        '5DX' => 'E02001368',
        '5DY' => 'E02001368',
        '5DZ' => 'E02001368',
        '5EA' => 'E02001368',
        '5EB' => 'E02001368',
        '5ED' => 'E02001368',
        '5EE' => 'E02001369',
        '5EF' => 'E02001369',
        '5EG' => 'E02001369',
        '5EH' => 'E02001369',
        '5EJ' => 'E02001368',
        '5EL' => 'E02001368',
        '5EN' => 'E02001368',
        '5EP' => 'E02001368',
        '5EQ' => 'E02001369',
        '5ER' => 'E02001368',
        '5ES' => 'E02001368',
        '5ET' => 'E02001369',
        '5EU' => 'E02001369',
        '5EW' => 'E02001368',
        '5EX' => 'E02001369',
        '5EY' => 'E02001368',
        '5EZ' => 'E02001368',
        '5FA' => 'E02001368',
        '5FB' => 'E02001368',
        '5FD' => 'E02001368',
        '5HA' => 'E02001369',
        '5HB' => 'E02001368',
        '5HD' => 'E02001368',
        '5HE' => 'E02001368',
        '5HH' => 'E02001368',
        '5HJ' => 'E02001368',
        '5HL' => 'E02001368',
        '5HN' => 'E02001368',
        '5HR' => 'E02001368',
        '5HU' => 'E02001368',
        '5HX' => 'E02001368',
        '5HY' => 'E02001369',
        '5HZ' => 'E02001368',
        '5JA' => 'E02001369',
        '5PH' => 'E02001369',
        '6AB' => 'E02001364',
        '6AD' => 'E02001364',
        '6PA' => 'E02001364',
        '6PB' => 'E02001364',
        '6PD' => 'E02001364',
        '6PE' => 'E02001364',
        '6PF' => 'E02001364',
        '6PG' => 'E02001370',
        '6PH' => 'E02001364',
        '6PJ' => 'E02001364',
        '6PL' => 'E02001370',
        '6PN' => 'E02001364',
        '6PP' => 'E02001370',
        '6PQ' => 'E02001370',
        '6PR' => 'E02001364',
        '6PS' => 'E02001370',
        '6PT' => 'E02001370',
        '6PU' => 'E02001364',
        '6PW' => 'E02001364',
        '6PX' => 'E02001370',
        '6PY' => 'E02001370',
        '6PZ' => 'E02001370',
        '6QB' => 'E02001370',
        '6QD' => 'E02001370',
        '6QE' => 'E02001370',
        '6QF' => 'E02001370',
        '6QG' => 'E02001364',
        '6QH' => 'E02001370',
        '6QJ' => 'E02001364',
        '6QL' => 'E02001364',
        '6QN' => 'E02001364',
        '6QP' => 'E02001370',
        '6QQ' => 'E02001370',
        '6QR' => 'E02001364',
        '6QS' => 'E02001370',
        '6QT' => 'E02001370',
        '6QU' => 'E02001364',
        '6QW' => 'E02001364',
        '6QX' => 'E02001370',
        '6QY' => 'E02001364',
        '6QZ' => 'E02001364',
        '6RA' => 'E02001364',
        '6RB' => 'E02001364',
        '6RD' => 'E02001364',
        '6RE' => 'E02001364',
        '6RF' => 'E02001364',
        '6RG' => 'E02001364',
        '6RH' => 'E02001364',
        '6RJ' => 'E02001364',
        '6RL' => 'E02001364',
        '6RN' => 'E02001364',
        '6RP' => 'E02001364',
        '6RQ' => 'E02001364',
        '6RR' => 'E02001364',
        '6RS' => 'E02001364',
        '6RT' => 'E02001364',
        '6RU' => 'E02001364',
        '6RW' => 'E02001364',
        '6RX' => 'E02001364',
        '6RY' => 'E02001364',
        '6RZ' => 'E02001364',
        '6SA' => 'E02001364',
        '6SB' => 'E02001364',
        '6SD' => 'E02001364',
        '6SE' => 'E02001364',
        '6SF' => 'E02001364',
        '6SG' => 'E02001364',
        '6SH' => 'E02001390',
        '6SL' => 'E02001369',
        '6SN' => 'E02001370',
        '6SP' => 'E02001370',
        '6SQ' => 'E02001364',
        '6SR' => 'E02001370',
        '6SS' => 'E02001370',
        '6SU' => 'E02001370',
        '6SW' => 'E02001370',
        '6SX' => 'E02001370',
        '7QA' => 'E02001360',
        '7QB' => 'E02001360',
        '7QD' => 'E02001360',
        '7QE' => 'E02001360',
        '7QF' => 'E02001360',
        '7QG' => 'E02001360',
        '7QJ' => 'E02001360',
        '7QL' => 'E02001360',
        '7QP' => 'E02001360',
        '7QQ' => 'E02001368',
        '7QW' => 'E02001360',
        '7QY' => 'E02001360',
        '7QZ' => 'E02001360',
        '7RA' => 'E02001360',
        '7RB' => 'E02001360',
        '7RD' => 'E02001360',
        '7RE' => 'E02001360',
        '7RF' => 'E02001368',
        '7RG' => 'E02001368',
        '7RL' => 'E02001360',
        '7RN' => 'E02001360',
        '7RP' => 'E02001360',
        '7RQ' => 'E02001368',
        '7RR' => 'E02001360',
        '7RS' => 'E02001360',
        '7RT' => 'E02001360',
        '7RU' => 'E02001360',
        '7RW' => 'E02001360',
        '7RX' => 'E02001360',
        '7RY' => 'E02001360',
        '7RZ' => 'E02001368',
        '7SA' => 'E02001368',
        '7SB' => 'E02001368',
        '7SD' => 'E02001368',
        '7SE' => 'E02001360',
        '7SF' => 'E02001360',
        '7SG' => 'E02001368',
        '7SH' => 'E02001368',
        '7SL' => 'E02001360',
        '7SN' => 'E02001368',
        '7SP' => 'E02001360',
        '7SQ' => 'E02001368',
        '7SS' => 'E02001360',
        '7SU' => 'E02001368',
        '7SW' => 'E02001368',
        '7TA' => 'E02001360',
        '7TB' => 'E02001360',
        '7TD' => 'E02001368',
        '7TH' => 'E02001360',
        '7TJ' => 'E02001360',
        '7TP' => 'E02001368',
        '7TR' => 'E02001368',
        '7TS' => 'E02001360',
        '7TT' => 'E02001360',
        '7TU' => 'E02001368',
        '7TX' => 'E02001360',
        '7TY' => 'E02001368',
        '7TZ' => 'E02001368',
        '7UA' => 'E02001368',
        '7UB' => 'E02001360',
        '7UD' => 'E02001368',
        '8AA' => 'E02001368',
        '8AB' => 'E02001368',
        '8AD' => 'E02001368',
        '8SA' => 'E02001368',
        '8SB' => 'E02001368',
        '8SE' => 'E02001368',
        '8SF' => 'E02001368',
        '8SG' => 'E02001368',
        '8SJ' => 'E02001368',
        '8SL' => 'E02001368',
        '8SN' => 'E02001368',
        '8SS' => 'E02001368',
        '8ST' => 'E02001368',
        '8SU' => 'E02001368',
        '8SX' => 'E02001368',
        '8SY' => 'E02001368',
        '8SZ' => 'E02001368',
        '8TA' => 'E02001368',
        '8TB' => 'E02001368',
        '8TE' => 'E02001368',
        '8TF' => 'E02001368',
        '8TG' => 'E02001368',
        '8TH' => 'E02001368',
        '8TJ' => 'E02001368',
        '8TN' => 'E02001368',
        '8TQ' => 'E02001368',
        '8TR' => 'E02001368',
        '8TS' => 'E02001368',
        '8TY' => 'E02001368',
        '8TZ' => 'E02001368',
        '8UA' => 'E02001368',
        '8UB' => 'E02001368',
        '8UD' => 'E02001368',
        '8UE' => 'E02001368',
        '8UF' => 'E02001368',
        '8UG' => 'E02001368',
        '8UQ' => 'E02001368',
        '8UR' => 'E02001368',
        '8US' => 'E02001368',
        '8UT' => 'E02001368',
        '8UX' => 'E02001368',
        '8UY' => 'E02001368',
        '8UZ' => 'E02001368',
        '8XA' => 'E02001368',
        '8XB' => 'E02001368',
        '8XD' => 'E02001368',
        '8XE' => 'E02001368',
        '8XG' => 'E02001368',
        '8XH' => 'E02001368',
        '8XJ' => 'E02001368',
        '8XL' => 'E02001368',
        '8XN' => 'E02001368',
        '8XP' => 'E02001368',
        '8XQ' => 'E02001368',
        '8XR' => 'E02001368',
        '8XS' => 'E02001368',
        '8XT' => 'E02001368',
        '8XU' => 'E02001368',
        '8XW' => 'E02001368',
        '8XX' => 'E02001368',
        '8XY' => 'E02001368',
        '8XZ' => 'E02001368',
        '8YB' => 'E02001368',
        '8YD' => 'E02001368',
        '8YE' => 'E02001368',
        '8YF' => 'E02001368',
        '8YG' => 'E02001368',
        '8YH' => 'E02001368',
        '8YJ' => 'E02001368',
        '8YL' => 'E02001368',
        '8YP' => 'E02001368',
        '8YQ' => 'E02001368',
        '8YR' => 'E02001368',
        '8YS' => 'E02001368',
        '8YT' => 'E02001368',
        '8YU' => 'E02001368',
        '8YW' => 'E02001368',
        '9AA' => 'E02001360',
        '9PR' => 'E02001360',
        '9RA' => 'E02001368',
        '9RB' => 'E02001368',
        '9RD' => 'E02001360',
        '9RE' => 'E02001368',
        '9RF' => 'E02001368',
        '9RG' => 'E02001368',
        '9RH' => 'E02001360',
        '9RJ' => 'E02001360',
        '9RL' => 'E02001360',
        '9RN' => 'E02001360',
        '9RP' => 'E02001368',
        '9RQ' => 'E02001368',
        '9RR' => 'E02001368',
        '9RS' => 'E02001360',
        '9RT' => 'E02001360',
        '9RU' => 'E02001368',
        '9RW' => 'E02001360',
        '9RX' => 'E02001360',
        '9RY' => 'E02001368',
        '9RZ' => 'E02001360',
        '9SA' => 'E02001360',
        '9SB' => 'E02001360',
        '9SD' => 'E02001360',
        '9SE' => 'E02001360',
        '9SG' => 'E02001360',
        '9SH' => 'E02001368',
        '9SJ' => 'E02001368',
        '9SL' => 'E02001368',
        '9SN' => 'E02001368',
        '9SR' => 'E02001360',
        '9SS' => 'E02001360',
        '9ST' => 'E02001368',
        '9SU' => 'E02001360',
        '9SY' => 'E02001360',
        '9SZ' => 'E02001360',
        '9TA' => 'E02001360',
        '9TB' => 'E02001360',
        '9TD' => 'E02001360',
        '9TE' => 'E02001368',
        '9TF' => 'E02001368',
        '9TG' => 'E02001360',
        '9TH' => 'E02001368',
        '9TJ' => 'E02001360',
        '9TN' => 'E02001368',
        '9TP' => 'E02001360',
        '9TR' => 'E02001368',
        '9TS' => 'E02001368',
        '9TT' => 'E02001368',
        '9TU' => 'E02001368',
        '9TX' => 'E02001368',
        '9TY' => 'E02001360',
        '9TZ' => 'E02001360',
        '9UA' => 'E02001368',
        '9UB' => 'E02001360',
        '9UD' => 'E02001368',
        '9UF' => 'E02001360',
        '9UG' => 'E02001368',
        '9UJ' => 'E02001368',
        '9UL' => 'E02001368',
        '9UN' => 'E02001368',
        '9UP' => 'E02001368',
        '9UQ' => 'E02001360',
        '9UR' => 'E02001368',
        '9US' => 'E02001368',
        '9UT' => 'E02001360',
        '9UU' => 'E02001368',
        '9UW' => 'E02001368',
        '9UY' => 'E02001368',
        '9UZ' => 'E02001368',
        '9XA' => 'E02001368',
        '9XB' => 'E02001360',
        '9XD' => 'E02001368',
        '9XE' => 'E02001360',
        '9XJ' => 'E02001360',
        '9XL' => 'E02001360',
        '9XN' => 'E02001368',
        '9XP' => 'E02001360',
        '9XR' => 'E02001360',
        '9XS' => 'E02001360',
        '9XT' => 'E02001368',
        '9XU' => 'E02001360',
        '9XW' => 'E02001360',
        '9XX' => 'E02001360',
        '9XY' => 'E02001360',
        '9XZ' => 'E02001360',
        '9YA' => 'E02001368',
        '9YB' => 'E02001360',
        '9YD' => 'E02001360',
        '9YE' => 'E02001360',
        '9YF' => 'E02001368',
        '9YJ' => 'E02001360',
        '9YN' => 'E02001368',
        '9YT' => 'E02001360',
        '9YW' => 'E02001360',
        '9ZA' => 'E02001368',
        '9ZD' => 'E02001360',
        '9ZE' => 'E02001360',
        '9ZH' => 'E02001360',
        '9ZQ' => 'E02001360',
        '9ZS' => 'E02001360',
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
