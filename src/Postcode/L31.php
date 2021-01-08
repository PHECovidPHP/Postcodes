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
final class L31
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001446',
        '0AB' => 'E02001446',
        '0AD' => 'E02001446',
        '0AE' => 'E02001446',
        '0AF' => 'E02001446',
        '0AG' => 'E02001446',
        '0AH' => 'E02001446',
        '0AJ' => 'E02001446',
        '0AL' => 'E02001446',
        '0AN' => 'E02001446',
        '0AP' => 'E02001446',
        '0AQ' => 'E02001446',
        '0AR' => 'E02001446',
        '0AS' => 'E02001446',
        '0AT' => 'E02001445',
        '0AU' => 'E02001445',
        '0AW' => 'E02001446',
        '0AX' => 'E02001445',
        '0AY' => 'E02001445',
        '0AZ' => 'E02001445',
        '0BA' => 'E02001445',
        '0BB' => 'E02001445',
        '0BD' => 'E02001446',
        '0BE' => 'E02001446',
        '0BG' => 'E02001445',
        '0BH' => 'E02001446',
        '0BJ' => 'E02001446',
        '0BL' => 'E02001446',
        '0BN' => 'E02001446',
        '0BP' => 'E02001446',
        '0BQ' => 'E02001445',
        '0BR' => 'E02001446',
        '0BS' => 'E02001446',
        '0BT' => 'E02001446',
        '0BU' => 'E02001445',
        '0BW' => 'E02001446',
        '0BX' => 'E02001446',
        '0BY' => 'E02001446',
        '0BZ' => 'E02001445',
        '0DA' => 'E02001446',
        '0DB' => 'E02001446',
        '0DD' => 'E02001446',
        '0DE' => 'E02001446',
        '0DF' => 'E02001446',
        '0DG' => 'E02001446',
        '0DH' => 'E02001446',
        '0DJ' => 'E02001446',
        '0DP' => 'E02001448',
        '0DQ' => 'E02001446',
        '0DR' => 'E02001446',
        '0DS' => 'E02001445',
        '0DT' => 'E02001445',
        '0DU' => 'E02001445',
        '0DX' => 'E02001445',
        '0DY' => 'E02001448',
        '0DZ' => 'E02001445',
        '0EA' => 'E02001448',
        '0EB' => 'E02001446',
        '0ED' => 'E02001445',
        '0WA' => 'E02001448',
        '0WB' => 'E02001448',
        '0WD' => 'E02001448',
        '0WE' => 'E02001448',
        '0WX' => 'E02001448',
        '0WY' => 'E02001448',
        '0WZ' => 'E02001448',
        '0YX' => 'E02001448',
        '1AA' => 'E02001448',
        '1AD' => 'E02001447',
        '1AE' => 'E02001454',
        '1AF' => 'E02001454',
        '1AG' => 'E02001454',
        '1AH' => 'E02001454',
        '1AJ' => 'E02001454',
        '1AL' => 'E02001454',
        '1AN' => 'E02001454',
        '1AP' => 'E02001454',
        '1AQ' => 'E02001454',
        '1AR' => 'E02001454',
        '1AS' => 'E02001454',
        '1AT' => 'E02001454',
        '1AU' => 'E02001454',
        '1AW' => 'E02001454',
        '1AX' => 'E02001454',
        '1AY' => 'E02001454',
        '1AZ' => 'E02001454',
        '1BA' => 'E02001454',
        '1BB' => 'E02001446',
        '1BD' => 'E02001446',
        '1BE' => 'E02001447',
        '1BF' => 'E02001447',
        '1BG' => 'E02001447',
        '1BH' => 'E02001454',
        '1BJ' => 'E02001454',
        '1BL' => 'E02001454',
        '1BN' => 'E02001454',
        '1BP' => 'E02001454',
        '1BQ' => 'E02001454',
        '1BR' => 'E02001454',
        '1BS' => 'E02001454',
        '1BT' => 'E02001454',
        '1BU' => 'E02001454',
        '1BW' => 'E02001454',
        '1BX' => 'E02001454',
        '1BY' => 'E02001454',
        '1BZ' => 'E02001454',
        '1DA' => 'E02001454',
        '1DB' => 'E02001454',
        '1DD' => 'E02001454',
        '1DE' => 'E02001454',
        '1DF' => 'E02001454',
        '1DG' => 'E02001454',
        '1DH' => 'E02001454',
        '1DJ' => 'E02001454',
        '1DL' => 'E02001454',
        '1DN' => 'E02001454',
        '1DP' => 'E02001454',
        '1DQ' => 'E02001454',
        '1DR' => 'E02001454',
        '1DS' => 'E02001454',
        '1DT' => 'E02001454',
        '1DU' => 'E02001454',
        '1DW' => 'E02001454',
        '1DX' => 'E02001454',
        '1DY' => 'E02001454',
        '1DZ' => 'E02001454',
        '1EA' => 'E02001454',
        '1EB' => 'E02001454',
        '1ED' => 'E02001454',
        '1EE' => 'E02001454',
        '1EF' => 'E02001454',
        '1EG' => 'E02001454',
        '1EH' => 'E02001454',
        '1EJ' => 'E02001454',
        '1EL' => 'E02001454',
        '1EN' => 'E02001454',
        '1EP' => 'E02001454',
        '1EQ' => 'E02001454',
        '1ER' => 'E02001454',
        '1ES' => 'E02001454',
        '1ET' => 'E02001454',
        '1EU' => 'E02001454',
        '1EW' => 'E02001454',
        '1EX' => 'E02001454',
        '1EY' => 'E02001454',
        '1EZ' => 'E02001454',
        '1FA' => 'E02001454',
        '1FB' => 'E02001454',
        '1FD' => 'E02001454',
        '1FE' => 'E02001454',
        '1FF' => 'E02001454',
        '1FJ' => 'E02001454',
        '1GA' => 'E02001454',
        '1GB' => 'E02001454',
        '1HA' => 'E02001454',
        '1HB' => 'E02001454',
        '1HD' => 'E02001454',
        '1HE' => 'E02001446',
        '1HF' => 'E02001454',
        '1HG' => 'E02001446',
        '1HH' => 'E02001446',
        '1HJ' => 'E02001446',
        '1HN' => 'E02005311',
        '1HP' => 'E02001454',
        '1HQ' => 'E02001446',
        '1HW' => 'E02001446',
        '1HX' => 'E02001454',
        '1HZ' => 'E02001454',
        '1JB' => 'E02001446',
        '1JD' => 'E02001446',
        '1JE' => 'E02001454',
        '1JF' => 'E02001454',
        '1JG' => 'E02001454',
        '1JH' => 'E02001454',
        '1JJ' => 'E02001454',
        '1JN' => 'E02001328',
        '1JP' => 'E02001328',
        '1JQ' => 'E02001454',
        '1JR' => 'E02001328',
        '1JS' => 'E02001328',
        '1JT' => 'E02001454',
        '1JU' => 'E02001328',
        '1JW' => 'E02001328',
        '1JX' => 'E02001454',
        '1JY' => 'E02001454',
        '1JZ' => 'E02001454',
        '1LA' => 'E02001454',
        '1LB' => 'E02001454',
        '1LD' => 'E02001454',
        '1LE' => 'E02001454',
        '1LF' => 'E02001454',
        '1LG' => 'E02001448',
        '1LH' => 'E02001446',
        '1LJ' => 'E02001454',
        '1LL' => 'E02001454',
        '1LN' => 'E02001447',
        '1LP' => 'E02001447',
        '1LQ' => 'E02001454',
        '1LR' => 'E02001454',
        '1LS' => 'E02001446',
        '1LT' => 'E02001446',
        '1LU' => 'E02001446',
        '1LW' => 'E02001446',
        '1LX' => 'E02001446',
        '1WA' => 'E02001448',
        '1WB' => 'E02001448',
        '1WD' => 'E02001448',
        '1WW' => 'E02001448',
        '1WX' => 'E02001448',
        '1WY' => 'E02001448',
        '1WZ' => 'E02001448',
        '2HA' => 'E02001448',
        '2HB' => 'E02001448',
        '2HD' => 'E02001445',
        '2HE' => 'E02001448',
        '2HF' => 'E02001448',
        '2HG' => 'E02001446',
        '2HH' => 'E02001446',
        '2HJ' => 'E02001448',
        '2HL' => 'E02001448',
        '2HN' => 'E02001446',
        '2HP' => 'E02001446',
        '2HQ' => 'E02001446',
        '2HR' => 'E02001446',
        '2HS' => 'E02001446',
        '2HT' => 'E02001446',
        '2HU' => 'E02001446',
        '2HW' => 'E02001446',
        '2HX' => 'E02001445',
        '2HY' => 'E02001445',
        '2HZ' => 'E02001445',
        '2JA' => 'E02001445',
        '2JB' => 'E02001445',
        '2JD' => 'E02001446',
        '2JE' => 'E02001445',
        '2JF' => 'E02001445',
        '2JG' => 'E02001445',
        '2JH' => 'E02001445',
        '2JJ' => 'E02001445',
        '2JL' => 'E02001445',
        '2JN' => 'E02001445',
        '2JP' => 'E02001445',
        '2JQ' => 'E02001445',
        '2JR' => 'E02001445',
        '2JS' => 'E02001445',
        '2JT' => 'E02001445',
        '2JU' => 'E02001445',
        '2JW' => 'E02001445',
        '2JX' => 'E02001445',
        '2JY' => 'E02001445',
        '2JZ' => 'E02001445',
        '2LA' => 'E02001445',
        '2LB' => 'E02001445',
        '2LD' => 'E02001445',
        '2LE' => 'E02001445',
        '2LF' => 'E02001445',
        '2LG' => 'E02001445',
        '2LH' => 'E02001445',
        '2LJ' => 'E02001445',
        '2LL' => 'E02001445',
        '2LN' => 'E02001445',
        '2LP' => 'E02001445',
        '2LQ' => 'E02001445',
        '2LR' => 'E02001445',
        '2LS' => 'E02001445',
        '2LT' => 'E02001445',
        '2LU' => 'E02001445',
        '2LW' => 'E02001445',
        '2LX' => 'E02001445',
        '2LY' => 'E02001445',
        '2LZ' => 'E02001445',
        '2NA' => 'E02001445',
        '2NB' => 'E02001446',
        '2ND' => 'E02001446',
        '2NE' => 'E02001445',
        '2NF' => 'E02001445',
        '2NG' => 'E02001445',
        '2NH' => 'E02001445',
        '2NJ' => 'E02001445',
        '2NL' => 'E02001445',
        '2NN' => 'E02001445',
        '2NP' => 'E02001445',
        '2NQ' => 'E02001445',
        '2NR' => 'E02001445',
        '2NS' => 'E02001445',
        '2NT' => 'E02001445',
        '2NU' => 'E02001445',
        '2NW' => 'E02001445',
        '2NX' => 'E02001445',
        '2NY' => 'E02001446',
        '2NZ' => 'E02001445',
        '2PA' => 'E02001448',
        '2PB' => 'E02001445',
        '2PE' => 'E02001445',
        '2PF' => 'E02001445',
        '2PG' => 'E02001445',
        '2PH' => 'E02001448',
        '2PJ' => 'E02001445',
        '2PL' => 'E02001448',
        '2PN' => 'E02001448',
        '2PP' => 'E02001445',
        '2PQ' => 'E02001446',
        '2PR' => 'E02001445',
        '2PS' => 'E02001445',
        '2PT' => 'E02001445',
        '2PU' => 'E02001448',
        '2PW' => 'E02001445',
        '2PX' => 'E02001445',
        '2PY' => 'E02001448',
        '2PZ' => 'E02001445',
        '2QA' => 'E02001445',
        '2QB' => 'E02001445',
        '2QD' => 'E02001448',
        '2WU' => 'E02001448',
        '2WW' => 'E02001448',
        '2WX' => 'E02001448',
        '2WY' => 'E02001448',
        '2WZ' => 'E02001448',
        '3AA' => 'E02001447',
        '3AB' => 'E02001447',
        '3DA' => 'E02001447',
        '3DB' => 'E02001447',
        '3DD' => 'E02001447',
        '3DE' => 'E02001447',
        '3DF' => 'E02001447',
        '3DG' => 'E02001447',
        '3DH' => 'E02001447',
        '3DJ' => 'E02001447',
        '3DL' => 'E02001447',
        '3DN' => 'E02001447',
        '3DP' => 'E02001447',
        '3DQ' => 'E02001447',
        '3DR' => 'E02001447',
        '3DS' => 'E02001447',
        '3DT' => 'E02001447',
        '3DU' => 'E02001447',
        '3DW' => 'E02001447',
        '3DX' => 'E02001447',
        '3DY' => 'E02001447',
        '3DZ' => 'E02001447',
        '3EA' => 'E02001447',
        '3EB' => 'E02001447',
        '3ED' => 'E02001447',
        '3EE' => 'E02001447',
        '3EF' => 'E02001447',
        '3EG' => 'E02001447',
        '3EH' => 'E02001447',
        '3EJ' => 'E02001447',
        '3EL' => 'E02001447',
        '3EN' => 'E02001447',
        '3EP' => 'E02001447',
        '3EQ' => 'E02001447',
        '3ER' => 'E02001447',
        '3ES' => 'E02001447',
        '3ET' => 'E02001447',
        '3EU' => 'E02001447',
        '3EW' => 'E02001447',
        '3EX' => 'E02001447',
        '3EY' => 'E02001447',
        '3EZ' => 'E02001447',
        '3FA' => 'E02001447',
        '3FB' => 'E02001447',
        '3HA' => 'E02001447',
        '3HB' => 'E02001447',
        '3HD' => 'E02001447',
        '3HE' => 'E02001447',
        '3HF' => 'E02001447',
        '3HG' => 'E02001447',
        '3HH' => 'E02001447',
        '3HJ' => 'E02001447',
        '3HL' => 'E02001447',
        '3HN' => 'E02001447',
        '3HP' => 'E02001447',
        '3HR' => 'E02001447',
        '3HS' => 'E02001447',
        '3HT' => 'E02001447',
        '3HU' => 'E02001447',
        '3HW' => 'E02001447',
        '3HY' => 'E02001447',
        '3JA' => 'E02001447',
        '3JB' => 'E02001447',
        '3JD' => 'E02001447',
        '3WA' => 'E02001448',
        '3WB' => 'E02001448',
        '3WD' => 'E02001448',
        '3WE' => 'E02001448',
        '3WZ' => 'E02001448',
        '3YX' => 'E02001448',
        '4AA' => 'E02001445',
        '4AB' => 'E02001445',
        '4AD' => 'E02001445',
        '4AE' => 'E02001445',
        '4AF' => 'E02001445',
        '4DA' => 'E02001445',
        '4DB' => 'E02001445',
        '4DD' => 'E02001445',
        '4DE' => 'E02001445',
        '4DF' => 'E02001445',
        '4DG' => 'E02001445',
        '4DH' => 'E02001445',
        '4DJ' => 'E02001445',
        '4DL' => 'E02001445',
        '4DN' => 'E02001445',
        '4DP' => 'E02001445',
        '4DQ' => 'E02001445',
        '4DR' => 'E02001445',
        '4DS' => 'E02001445',
        '4DT' => 'E02001445',
        '4DU' => 'E02001445',
        '4DW' => 'E02001445',
        '4DX' => 'E02001445',
        '4DY' => 'E02001445',
        '4DZ' => 'E02001445',
        '4EA' => 'E02001445',
        '4EB' => 'E02001445',
        '4ED' => 'E02001445',
        '4EE' => 'E02001445',
        '4EF' => 'E02001445',
        '4EG' => 'E02001445',
        '4EH' => 'E02001446',
        '4EJ' => 'E02001446',
        '4EL' => 'E02001445',
        '4EN' => 'E02001445',
        '4EP' => 'E02001445',
        '4EQ' => 'E02001445',
        '4ER' => 'E02001445',
        '4ES' => 'E02001445',
        '4ET' => 'E02005306',
        '4EU' => 'E02005306',
        '4EW' => 'E02005306',
        '4EX' => 'E02005306',
        '4EY' => 'E02001445',
        '4EZ' => 'E02001445',
        '4FA' => 'E02001445',
        '4HA' => 'E02001445',
        '4HB' => 'E02001445',
        '4HD' => 'E02001445',
        '4HE' => 'E02001445',
        '4HF' => 'E02001445',
        '4HG' => 'E02001445',
        '4HH' => 'E02001445',
        '4HJ' => 'E02001445',
        '4HL' => 'E02001445',
        '4HN' => 'E02001445',
        '4HP' => 'E02001445',
        '4HQ' => 'E02001445',
        '4HR' => 'E02001445',
        '4HS' => 'E02005306',
        '4HT' => 'E02001445',
        '4HU' => 'E02001445',
        '4HW' => 'E02001445',
        '4HX' => 'E02005306',
        '4HY' => 'E02005306',
        '4HZ' => 'E02005306',
        '4JA' => 'E02001445',
        '4JB' => 'E02001445',
        '4JD' => 'E02001445',
        '4JE' => 'E02001445',
        '4JF' => 'E02001445',
        '4JG' => 'E02001445',
        '4JH' => 'E02001445',
        '4JJ' => 'E02001445',
        '4JL' => 'E02001445',
        '4JN' => 'E02001445',
        '4JP' => 'E02001445',
        '4JQ' => 'E02001445',
        '4JR' => 'E02001445',
        '4JS' => 'E02001445',
        '4JT' => 'E02001445',
        '4JU' => 'E02001445',
        '4JW' => 'E02001445',
        '4JX' => 'E02001445',
        '4JY' => 'E02001445',
        '4JZ' => 'E02001445',
        '4LA' => 'E02001445',
        '4LB' => 'E02001445',
        '4LD' => 'E02001445',
        '4LE' => 'E02001445',
        '4LF' => 'E02005306',
        '4LG' => 'E02001445',
        '4LH' => 'E02001445',
        '4LJ' => 'E02001445',
        '4LL' => 'E02001445',
        '4LN' => 'E02001445',
        '4LP' => 'E02001448',
        '4LQ' => 'E02001445',
        '4LS' => 'E02005306',
        '4LT' => 'E02005306',
        '4LW' => 'E02001448',
        '4WA' => 'E02001448',
        '4WB' => 'E02005306',
        '4WD' => 'E02001448',
        '4WQ' => 'E02001448',
        '4WR' => 'E02001448',
        '4WS' => 'E02001448',
        '4WT' => 'E02001448',
        '4WU' => 'E02001448',
        '4WW' => 'E02001448',
        '4WX' => 'E02001448',
        '4WY' => 'E02001448',
        '4WZ' => 'E02001448',
        '4YW' => 'E02001448',
        '4YX' => 'E02001448',
        '5JA' => 'E02001448',
        '5JB' => 'E02001448',
        '5JD' => 'E02001448',
        '5JE' => 'E02001448',
        '5JF' => 'E02001448',
        '5JG' => 'E02001448',
        '5JH' => 'E02001448',
        '5JJ' => 'E02001448',
        '5JL' => 'E02001448',
        '5JN' => 'E02001448',
        '5JP' => 'E02001448',
        '5JQ' => 'E02001448',
        '5JR' => 'E02001448',
        '5JS' => 'E02001448',
        '5JT' => 'E02001448',
        '5JU' => 'E02001448',
        '5JW' => 'E02001448',
        '5JX' => 'E02001448',
        '5JY' => 'E02001448',
        '5JZ' => 'E02001448',
        '5LA' => 'E02001448',
        '5LB' => 'E02001448',
        '5LD' => 'E02001448',
        '5LE' => 'E02001447',
        '5LF' => 'E02001447',
        '5LG' => 'E02001447',
        '5LH' => 'E02001448',
        '5LJ' => 'E02001448',
        '5LN' => 'E02001448',
        '5LP' => 'E02001447',
        '5LQ' => 'E02001448',
        '5LR' => 'E02001447',
        '5LS' => 'E02001448',
        '5LT' => 'E02001448',
        '5LU' => 'E02001447',
        '5LW' => 'E02001447',
        '5LX' => 'E02001447',
        '5LY' => 'E02001447',
        '5LZ' => 'E02001447',
        '5NA' => 'E02001447',
        '5NB' => 'E02001447',
        '5ND' => 'E02001447',
        '5NE' => 'E02001448',
        '5NF' => 'E02001448',
        '5NG' => 'E02001447',
        '5NH' => 'E02001447',
        '5NJ' => 'E02001447',
        '5NL' => 'E02001447',
        '5NN' => 'E02001448',
        '5NP' => 'E02001447',
        '5NQ' => 'E02001448',
        '5NR' => 'E02001447',
        '5NS' => 'E02001447',
        '5NT' => 'E02001447',
        '5NU' => 'E02001447',
        '5NW' => 'E02001447',
        '5NX' => 'E02001447',
        '5NY' => 'E02001448',
        '5NZ' => 'E02001448',
        '5PA' => 'E02001447',
        '5PB' => 'E02001447',
        '5PD' => 'E02001448',
        '5PF' => 'E02001448',
        '5PG' => 'E02001448',
        '5PH' => 'E02001447',
        '5PJ' => 'E02001448',
        '5PL' => 'E02001447',
        '5PN' => 'E02001447',
        '5PP' => 'E02001447',
        '5PQ' => 'E02001448',
        '5PS' => 'E02001448',
        '5PT' => 'E02001448',
        '5PU' => 'E02001448',
        '5PW' => 'E02001447',
        '5WA' => 'E02001448',
        '5WB' => 'E02001448',
        '5WX' => 'E02001448',
        '5WY' => 'E02001448',
        '5WZ' => 'E02001447',
        '5XU' => 'E02001448',
        '5YX' => 'E02001448',
        '6AA' => 'E02001447',
        '6AB' => 'E02001447',
        '6AD' => 'E02001447',
        '6AE' => 'E02001447',
        '6AF' => 'E02001447',
        '6AG' => 'E02001447',
        '6AH' => 'E02001447',
        '6AJ' => 'E02001447',
        '6AL' => 'E02001447',
        '6AN' => 'E02001447',
        '6AP' => 'E02001447',
        '6AQ' => 'E02001447',
        '6AR' => 'E02001447',
        '6AS' => 'E02001447',
        '6AT' => 'E02001447',
        '6AU' => 'E02001447',
        '6AW' => 'E02001447',
        '6AX' => 'E02001447',
        '6AY' => 'E02001447',
        '6AZ' => 'E02001447',
        '6BA' => 'E02001447',
        '6BB' => 'E02001447',
        '6BD' => 'E02001447',
        '6BE' => 'E02001447',
        '6BG' => 'E02001447',
        '6BH' => 'E02001446',
        '6BJ' => 'E02001447',
        '6BL' => 'E02001447',
        '6BN' => 'E02001447',
        '6BP' => 'E02001447',
        '6BQ' => 'E02001446',
        '6BR' => 'E02001447',
        '6BS' => 'E02001446',
        '6BT' => 'E02001447',
        '6BU' => 'E02001446',
        '6BW' => 'E02001447',
        '6BX' => 'E02001447',
        '6BY' => 'E02001446',
        '6BZ' => 'E02001446',
        '6DA' => 'E02001447',
        '6DB' => 'E02001447',
        '6DD' => 'E02001447',
        '6DE' => 'E02001447',
        '6DF' => 'E02001447',
        '6DG' => 'E02001447',
        '6DH' => 'E02001446',
        '6DJ' => 'E02001447',
        '6DL' => 'E02001447',
        '6DN' => 'E02001447',
        '6DP' => 'E02001447',
        '6DQ' => 'E02001446',
        '6DR' => 'E02001447',
        '6DS' => 'E02001447',
        '6DT' => 'E02001447',
        '6DU' => 'E02001447',
        '6DW' => 'E02001447',
        '6DX' => 'E02001447',
        '6DY' => 'E02001447',
        '6DZ' => 'E02001447',
        '6EA' => 'E02001447',
        '6EB' => 'E02001447',
        '6ED' => 'E02001447',
        '6EE' => 'E02001447',
        '6EF' => 'E02001447',
        '6EG' => 'E02001447',
        '6EH' => 'E02001446',
        '6EJ' => 'E02001448',
        '6EN' => 'E02001447',
        '6EP' => 'E02001447',
        '6EQ' => 'E02001447',
        '6ER' => 'E02001447',
        '6ES' => 'E02001448',
        '6ET' => 'E02001447',
        '6EU' => 'E02001447',
        '6EW' => 'E02001448',
        '6EY' => 'E02001447',
        '6FB' => 'E02001447',
        '6WA' => 'E02001448',
        '6WB' => 'E02001448',
        '6WU' => 'E02001448',
        '6WW' => 'E02001448',
        '6WX' => 'E02001448',
        '6WY' => 'E02001447',
        '6WZ' => 'E02001448',
        '6YW' => 'E02001448',
        '6YX' => 'E02001448',
        '7AA' => 'E02001448',
        '7AB' => 'E02001448',
        '7AD' => 'E02001448',
        '7AE' => 'E02001448',
        '7AF' => 'E02001448',
        '7AG' => 'E02001448',
        '7AH' => 'E02001448',
        '7AJ' => 'E02001448',
        '7AL' => 'E02001448',
        '7AN' => 'E02001448',
        '7AP' => 'E02001448',
        '7AQ' => 'E02001448',
        '7AR' => 'E02001448',
        '7AS' => 'E02001448',
        '7AT' => 'E02001448',
        '7AU' => 'E02001448',
        '7AW' => 'E02001448',
        '7AX' => 'E02001448',
        '7AY' => 'E02001448',
        '7AZ' => 'E02001448',
        '7BA' => 'E02001448',
        '7BB' => 'E02001448',
        '7BD' => 'E02001448',
        '7BE' => 'E02001448',
        '7BF' => 'E02001448',
        '7BG' => 'E02001448',
        '7BH' => 'E02001447',
        '7BJ' => 'E02001448',
        '7BL' => 'E02001448',
        '7BN' => 'E02001448',
        '7BP' => 'E02001448',
        '7BQ' => 'E02001448',
        '7BR' => 'E02001448',
        '7BS' => 'E02001448',
        '7BT' => 'E02001448',
        '7BU' => 'E02001448',
        '7BW' => 'E02001448',
        '7BX' => 'E02001448',
        '7BY' => 'E02001448',
        '7BZ' => 'E02001448',
        '7DA' => 'E02001448',
        '7DB' => 'E02001448',
        '7DD' => 'E02001448',
        '7DE' => 'E02001448',
        '7DF' => 'E02001448',
        '7DG' => 'E02001448',
        '7DH' => 'E02001448',
        '7DJ' => 'E02001448',
        '7DL' => 'E02001448',
        '7DN' => 'E02001448',
        '7DP' => 'E02001448',
        '7DQ' => 'E02001448',
        '7DR' => 'E02001448',
        '7DS' => 'E02001448',
        '7DT' => 'E02001448',
        '7DW' => 'E02001448',
        '7DX' => 'E02001448',
        '7DZ' => 'E02001448',
        '7EA' => 'E02001448',
        '7EB' => 'E02001448',
        '7EE' => 'E02001448',
        '7EF' => 'E02001448',
        '7EG' => 'E02001448',
        '7EH' => 'E02001448',
        '7EJ' => 'E02001448',
        '7EN' => 'E02001448',
        '7EQ' => 'E02001448',
        '7ER' => 'E02001448',
        '7FB' => 'E02001448',
        '7WY' => 'E02001448',
        '7WZ' => 'E02001448',
        '7XA' => 'E02001448',
        '7ZY' => 'E02001448',
        '8AA' => 'E02001448',
        '8AB' => 'E02001448',
        '8AD' => 'E02001448',
        '8AE' => 'E02001448',
        '8AF' => 'E02001448',
        '8AG' => 'E02001448',
        '8AH' => 'E02001448',
        '8AJ' => 'E02001448',
        '8AL' => 'E02001448',
        '8AN' => 'E02001448',
        '8AP' => 'E02001448',
        '8AQ' => 'E02001448',
        '8AR' => 'E02001448',
        '8AS' => 'E02001448',
        '8AT' => 'E02001448',
        '8AU' => 'E02001448',
        '8AW' => 'E02001448',
        '8AX' => 'E02001448',
        '8AY' => 'E02001445',
        '8AZ' => 'E02001445',
        '8BA' => 'E02001448',
        '8BB' => 'E02001445',
        '8BD' => 'E02001445',
        '8BE' => 'E02001445',
        '8BF' => 'E02001448',
        '8BG' => 'E02001445',
        '8BH' => 'E02001445',
        '8BJ' => 'E02001448',
        '8BL' => 'E02001448',
        '8BN' => 'E02001445',
        '8BP' => 'E02001448',
        '8BQ' => 'E02001445',
        '8BR' => 'E02001448',
        '8BS' => 'E02001448',
        '8BT' => 'E02001448',
        '8BU' => 'E02001448',
        '8BW' => 'E02001445',
        '8BX' => 'E02001448',
        '8BY' => 'E02001448',
        '8BZ' => 'E02001448',
        '8DB' => 'E02001448',
        '8DD' => 'E02001445',
        '8DE' => 'E02001445',
        '8DF' => 'E02001445',
        '8DG' => 'E02001445',
        '8DH' => 'E02001445',
        '8DJ' => 'E02001448',
        '8DL' => 'E02001448',
        '8DN' => 'E02001448',
        '8DP' => 'E02001445',
        '8DQ' => 'E02001445',
        '8DR' => 'E02001445',
        '8DS' => 'E02001445',
        '8DT' => 'E02001445',
        '8DU' => 'E02001445',
        '8DW' => 'E02001445',
        '8DX' => 'E02001445',
        '8DY' => 'E02001445',
        '8DZ' => 'E02001445',
        '8EA' => 'E02001445',
        '8EB' => 'E02001445',
        '8ED' => 'E02001445',
        '8EE' => 'E02001448',
        '8EF' => 'E02001448',
        '8EG' => 'E02001448',
        '8EH' => 'E02001448',
        '8EJ' => 'E02001448',
        '8EL' => 'E02001448',
        '8EN' => 'E02001448',
        '8EP' => 'E02001448',
        '8EQ' => 'E02001448',
        '8ER' => 'E02001448',
        '8ES' => 'E02001448',
        '8ET' => 'E02001448',
        '8EU' => 'E02001448',
        '8EW' => 'E02001448',
        '8EX' => 'E02001445',
        '8EY' => 'E02001448',
        '8EZ' => 'E02001448',
        '8FA' => 'E02001448',
        '8HA' => 'E02001448',
        '8HB' => 'E02001448',
        '8HD' => 'E02001448',
        '8HE' => 'E02001448',
        '8HF' => 'E02001448',
        '8HG' => 'E02001448',
        '8WA' => 'E02001448',
        '8WX' => 'E02001448',
        '8WY' => 'E02001448',
        '8WZ' => 'E02001448',
        '8YX' => 'E02001448',
        '8ZJ' => 'E02001448',
        '9AA' => 'E02001446',
        '9AB' => 'E02001446',
        '9AD' => 'E02001446',
        '9AE' => 'E02001446',
        '9AF' => 'E02001446',
        '9AG' => 'E02001446',
        '9AH' => 'E02001446',
        '9AJ' => 'E02001446',
        '9AL' => 'E02001446',
        '9AN' => 'E02001446',
        '9AP' => 'E02001447',
        '9AQ' => 'E02001446',
        '9AR' => 'E02001446',
        '9AS' => 'E02001446',
        '9AT' => 'E02001446',
        '9AU' => 'E02001446',
        '9AW' => 'E02001446',
        '9AX' => 'E02001446',
        '9AY' => 'E02001446',
        '9AZ' => 'E02001446',
        '9BA' => 'E02001446',
        '9BB' => 'E02001446',
        '9BD' => 'E02001446',
        '9BE' => 'E02001446',
        '9BG' => 'E02001446',
        '9BH' => 'E02001446',
        '9BJ' => 'E02001446',
        '9BL' => 'E02001446',
        '9BN' => 'E02001446',
        '9BP' => 'E02001446',
        '9BQ' => 'E02001446',
        '9BR' => 'E02001446',
        '9BS' => 'E02001446',
        '9BT' => 'E02001446',
        '9BU' => 'E02001446',
        '9BW' => 'E02001446',
        '9BX' => 'E02001446',
        '9BY' => 'E02001446',
        '9BZ' => 'E02001446',
        '9DA' => 'E02001446',
        '9DB' => 'E02001446',
        '9DD' => 'E02001446',
        '9DE' => 'E02001446',
        '9DF' => 'E02001446',
        '9DG' => 'E02001446',
        '9DH' => 'E02001446',
        '9DJ' => 'E02001446',
        '9DL' => 'E02001446',
        '9DN' => 'E02001446',
        '9DP' => 'E02001446',
        '9DQ' => 'E02001446',
        '9DR' => 'E02001446',
        '9DS' => 'E02001446',
        '9DT' => 'E02001446',
        '9DU' => 'E02001446',
        '9DW' => 'E02001446',
        '9DX' => 'E02001446',
        '9DY' => 'E02001446',
        '9DZ' => 'E02001446',
        '9FA' => 'E02001446',
        '9FD' => 'E02001446',
        '9FE' => 'E02001446',
        '9PA' => 'E02001446',
        '9PB' => 'E02001446',
        '9PD' => 'E02001446',
        '9PE' => 'E02001446',
        '9PF' => 'E02001446',
        '9PG' => 'E02001446',
        '9PJ' => 'E02001446',
        '9PL' => 'E02001446',
        '9PN' => 'E02001446',
        '9PQ' => 'E02001446',
        '9PR' => 'E02001446',
        '9PS' => 'E02001446',
        '9PT' => 'E02001446',
        '9PU' => 'E02001446',
        '9PW' => 'E02001446',
        '9PX' => 'E02001448',
        '9PY' => 'E02001445',
        '9PZ' => 'E02001446',
        '9QA' => 'E02001446',
        '9QB' => 'E02001448',
        '9QD' => 'E02001446',
        '9QE' => 'E02001448',
        '9QF' => 'E02001446',
        '9WA' => 'E02001448',
        '9WB' => 'E02001448',
        '9WD' => 'E02001448',
        '9WS' => 'E02001448',
        '9WT' => 'E02001448',
        '9WU' => 'E02001448',
        '9WW' => 'E02001448',
        '9WX' => 'E02001448',
        '9WY' => 'E02001448',
        '9WZ' => 'E02001448',
        '9YT' => 'E02001448',
        '9YU' => 'E02001448',
        '9YW' => 'E02001448',
        '9YX' => 'E02001448',
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