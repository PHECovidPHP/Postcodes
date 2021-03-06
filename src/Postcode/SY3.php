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
final class SY3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006038',
        '0AB' => 'E02006038',
        '0AD' => 'E02006038',
        '0AE' => 'E02006038',
        '0AF' => 'E02006038',
        '0AG' => 'E02006038',
        '0AH' => 'E02006038',
        '0AJ' => 'E02006038',
        '0AL' => 'E02006038',
        '0AN' => 'E02006038',
        '0AP' => 'E02006038',
        '0AQ' => 'E02006038',
        '0AR' => 'E02006038',
        '0AS' => 'E02006038',
        '0AT' => 'E02006038',
        '0AU' => 'E02006038',
        '0AW' => 'E02006038',
        '0AX' => 'E02006038',
        '0AY' => 'E02006040',
        '0AZ' => 'E02006040',
        '0BA' => 'E02006039',
        '0BB' => 'E02006039',
        '0BD' => 'E02006039',
        '0BE' => 'E02006039',
        '0BF' => 'E02006038',
        '0BG' => 'E02006039',
        '0BH' => 'E02006039',
        '0BJ' => 'E02006039',
        '0BN' => 'E02006039',
        '0BP' => 'E02006039',
        '0BQ' => 'E02006039',
        '0BS' => 'E02006039',
        '0BT' => 'E02006039',
        '0BU' => 'E02006038',
        '0BW' => 'E02006039',
        '0BY' => 'E02006038',
        '0DA' => 'E02006038',
        '0DB' => 'E02006038',
        '0DD' => 'E02006038',
        '0DE' => 'E02006038',
        '0DF' => 'E02006038',
        '0DG' => 'E02006038',
        '0DH' => 'E02006038',
        '0DJ' => 'E02006038',
        '0DL' => 'E02006038',
        '0DN' => 'E02006038',
        '0DP' => 'E02006038',
        '0DQ' => 'E02006038',
        '0DR' => 'E02006038',
        '0DS' => 'E02006038',
        '0DT' => 'E02006038',
        '0DU' => 'E02006038',
        '0DW' => 'E02006038',
        '0DX' => 'E02006038',
        '0DY' => 'E02006038',
        '0DZ' => 'E02006038',
        '0EA' => 'E02006038',
        '0EB' => 'E02006038',
        '0ED' => 'E02006038',
        '0EE' => 'E02006038',
        '0EF' => 'E02006038',
        '0EG' => 'E02006038',
        '0EH' => 'E02006038',
        '0EJ' => 'E02006038',
        '0EL' => 'E02006038',
        '0EN' => 'E02006038',
        '0EP' => 'E02006038',
        '0EQ' => 'E02006038',
        '0ER' => 'E02006038',
        '0ES' => 'E02006038',
        '0ET' => 'E02006038',
        '0EU' => 'E02006038',
        '0EW' => 'E02006038',
        '0EX' => 'E02006038',
        '0EY' => 'E02006038',
        '0EZ' => 'E02006038',
        '0HA' => 'E02006038',
        '0HB' => 'E02006038',
        '0HD' => 'E02006038',
        '0HE' => 'E02006038',
        '0HF' => 'E02006038',
        '0HG' => 'E02006038',
        '0HH' => 'E02006038',
        '0HJ' => 'E02006038',
        '0HL' => 'E02006038',
        '0HN' => 'E02006038',
        '0HP' => 'E02006038',
        '0HQ' => 'E02006038',
        '0HR' => 'E02006038',
        '0HT' => 'E02006038',
        '0HU' => 'E02006038',
        '0HW' => 'E02006038',
        '0HX' => 'E02006038',
        '0HY' => 'E02006038',
        '0HZ' => 'E02006038',
        '0JA' => 'E02006038',
        '0JB' => 'E02006038',
        '0JD' => 'E02006038',
        '0JE' => 'E02006038',
        '0JF' => 'E02006038',
        '0JG' => 'E02006038',
        '0JH' => 'E02006038',
        '0JJ' => 'E02006038',
        '0JL' => 'E02006038',
        '0JN' => 'E02006038',
        '0JP' => 'E02006038',
        '0JQ' => 'E02006038',
        '0JR' => 'E02006038',
        '0JS' => 'E02006038',
        '0JT' => 'E02006038',
        '0JU' => 'E02006038',
        '0JW' => 'E02006038',
        '0JX' => 'E02006038',
        '0JY' => 'E02006038',
        '0JZ' => 'E02006038',
        '0LA' => 'E02006038',
        '0LB' => 'E02006038',
        '0LD' => 'E02006038',
        '0LE' => 'E02006038',
        '0LF' => 'E02006038',
        '0LG' => 'E02006038',
        '0LH' => 'E02006038',
        '0LJ' => 'E02006038',
        '0LL' => 'E02006038',
        '0LN' => 'E02006038',
        '0LP' => 'E02006038',
        '0LQ' => 'E02006038',
        '0LR' => 'E02006038',
        '0LS' => 'E02006038',
        '0LU' => 'E02006038',
        '0LW' => 'E02006038',
        '0LX' => 'E02006038',
        '0LY' => 'E02006038',
        '0LZ' => 'E02006038',
        '0NA' => 'E02006038',
        '0NB' => 'E02006038',
        '0ND' => 'E02006038',
        '0NE' => 'E02006038',
        '0NF' => 'E02006038',
        '0NG' => 'E02006038',
        '0NH' => 'E02006038',
        '0NJ' => 'E02006038',
        '0NL' => 'E02006038',
        '0NN' => 'E02006038',
        '0NP' => 'E02006038',
        '0NQ' => 'E02006038',
        '0NR' => 'E02006038',
        '0NS' => 'E02006038',
        '0NT' => 'E02006038',
        '0NU' => 'E02006038',
        '0NW' => 'E02006038',
        '0NX' => 'E02006038',
        '0NY' => 'E02006038',
        '0NZ' => 'E02006038',
        '0PA' => 'E02006038',
        '0PB' => 'E02006038',
        '0PD' => 'E02006038',
        '0PE' => 'E02006038',
        '0PF' => 'E02006038',
        '0PG' => 'E02006038',
        '0PH' => 'E02006038',
        '0PJ' => 'E02006038',
        '0PL' => 'E02006038',
        '0PN' => 'E02006038',
        '0PP' => 'E02006038',
        '0PQ' => 'E02006038',
        '0PR' => 'E02006038',
        '0PS' => 'E02006038',
        '0PT' => 'E02006038',
        '0PU' => 'E02006038',
        '0PW' => 'E02006038',
        '0PX' => 'E02006038',
        '0PY' => 'E02006038',
        '0PZ' => 'E02006038',
        '0QA' => 'E02006038',
        '0QB' => 'E02006038',
        '0QD' => 'E02006038',
        '0QE' => 'E02006038',
        '0QF' => 'E02006038',
        '0QG' => 'E02006038',
        '0QH' => 'E02006038',
        '0QQ' => 'E02006038',
        '0WA' => 'E02006033',
        '0WB' => 'E02006033',
        '0WD' => 'E02006033',
        '0WE' => 'E02006033',
        '0WF' => 'E02006038',
        '0WG' => 'E02006033',
        '0WH' => 'E02006033',
        '0WJ' => 'E02006038',
        '0WL' => 'E02006033',
        '0WN' => 'E02006033',
        '0WP' => 'E02006033',
        '0WY' => 'E02006033',
        '0WZ' => 'E02006033',
        '0XA' => 'E02006033',
        '0XP' => 'E02006033',
        '0YS' => 'E02006033',
        '5AA' => 'E02006034',
        '5AB' => 'E02006034',
        '5AD' => 'E02006034',
        '5AE' => 'E02006034',
        '5AF' => 'E02006034',
        '5AG' => 'E02006034',
        '5AH' => 'E02006034',
        '5AJ' => 'E02006034',
        '5AL' => 'E02006034',
        '5AN' => 'E02006034',
        '5AP' => 'E02006034',
        '5AQ' => 'E02006034',
        '5AR' => 'E02006034',
        '5AS' => 'E02006034',
        '5AT' => 'E02006034',
        '5AU' => 'E02006034',
        '5AW' => 'E02006034',
        '5AX' => 'E02006034',
        '5AY' => 'E02006034',
        '5AZ' => 'E02006034',
        '5BA' => 'E02006034',
        '5BB' => 'E02006034',
        '5BD' => 'E02006034',
        '5BE' => 'E02006034',
        '5BF' => 'E02006034',
        '5BG' => 'E02006034',
        '5BH' => 'E02006034',
        '5BJ' => 'E02006034',
        '5BL' => 'E02006034',
        '5BN' => 'E02006034',
        '5BP' => 'E02006034',
        '5BQ' => 'E02006034',
        '5BS' => 'E02006034',
        '5BT' => 'E02006034',
        '5BU' => 'E02006034',
        '5BW' => 'E02006034',
        '5BX' => 'E02006034',
        '5BY' => 'E02006034',
        '5BZ' => 'E02006034',
        '5DA' => 'E02006034',
        '5DB' => 'E02006034',
        '5DD' => 'E02006034',
        '5DE' => 'E02006034',
        '5DF' => 'E02006034',
        '5DG' => 'E02006034',
        '5DH' => 'E02006034',
        '5DJ' => 'E02006034',
        '5DL' => 'E02006034',
        '5DN' => 'E02006034',
        '5DP' => 'E02006034',
        '5DQ' => 'E02006034',
        '5DR' => 'E02006034',
        '5DS' => 'E02006034',
        '5DT' => 'E02006034',
        '5DU' => 'E02006034',
        '5DW' => 'E02006034',
        '5DX' => 'E02006034',
        '5DY' => 'E02006034',
        '5DZ' => 'E02006028',
        '5EA' => 'E02006028',
        '5EB' => 'E02006028',
        '5ED' => 'E02006028',
        '5EE' => 'E02006028',
        '5EF' => 'E02006028',
        '5EG' => 'E02006028',
        '5EH' => 'E02006034',
        '5EJ' => 'E02006034',
        '5EL' => 'E02006034',
        '5EN' => 'E02006034',
        '5EP' => 'E02006034',
        '5EQ' => 'E02006034',
        '5ER' => 'E02006034',
        '5ES' => 'E02006034',
        '5ET' => 'E02006034',
        '5EU' => 'E02006034',
        '5EW' => 'E02006034',
        '5EX' => 'E02006034',
        '5EY' => 'E02006034',
        '5EZ' => 'E02006034',
        '5FA' => 'E02006034',
        '5FB' => 'E02006028',
        '5FE' => 'E02006034',
        '5FF' => 'E02006034',
        '5FR' => 'E02006034',
        '5FS' => 'E02006034',
        '5FT' => 'E02006034',
        '5FU' => 'E02006034',
        '5FW' => 'E02006034',
        '5FX' => 'E02006034',
        '5FY' => 'E02006034',
        '5FZ' => 'E02006034',
        '5GA' => 'E02006034',
        '5HA' => 'E02006034',
        '5HB' => 'E02006034',
        '5HD' => 'E02006034',
        '5HE' => 'E02006034',
        '5HF' => 'E02006034',
        '5HG' => 'E02006034',
        '5HH' => 'E02006034',
        '5HJ' => 'E02006034',
        '5HL' => 'E02006034',
        '5HN' => 'E02006034',
        '5HP' => 'E02006034',
        '5HQ' => 'E02006034',
        '5HR' => 'E02006034',
        '5HS' => 'E02006034',
        '5HT' => 'E02006028',
        '5HZ' => 'E02006034',
        '5JA' => 'E02006034',
        '5JB' => 'E02006034',
        '5JD' => 'E02006034',
        '5JE' => 'E02006034',
        '5LA' => 'E02006034',
        '5LB' => 'E02006034',
        '5LD' => 'E02006034',
        '5LE' => 'E02006034',
        '5LF' => 'E02006034',
        '5LG' => 'E02006034',
        '5LZ' => 'E02006034',
        '5NA' => 'E02006034',
        '5NB' => 'E02006034',
        '5ND' => 'E02006034',
        '5NE' => 'E02006034',
        '5NF' => 'E02006034',
        '5NP' => 'E02006034',
        '5PA' => 'E02006034',
        '5PB' => 'E02006034',
        '5PD' => 'E02006034',
        '5PE' => 'E02006034',
        '5PF' => 'E02006034',
        '5PG' => 'E02006034',
        '5PH' => 'E02006034',
        '5PJ' => 'E02006034',
        '5PL' => 'E02006034',
        '5PN' => 'E02006034',
        '5PP' => 'E02006034',
        '5PQ' => 'E02006034',
        '5PR' => 'E02006034',
        '5PS' => 'E02006034',
        '5PT' => 'E02006034',
        '5PU' => 'E02006034',
        '5WA' => 'E02006033',
        '5WB' => 'E02006033',
        '5WD' => 'E02006033',
        '5WE' => 'E02006033',
        '5WF' => 'E02006033',
        '5WG' => 'E02006033',
        '5WH' => 'E02006033',
        '5WJ' => 'E02006034',
        '5WL' => 'E02006033',
        '5WN' => 'E02006034',
        '5WP' => 'E02006034',
        '5WQ' => 'E02006033',
        '5WR' => 'E02006033',
        '5WS' => 'E02006034',
        '5WT' => 'E02006034',
        '5WU' => 'E02006034',
        '5WW' => 'E02006034',
        '5WX' => 'E02006033',
        '5WY' => 'E02006033',
        '5WZ' => 'E02006033',
        '5XA' => 'E02006033',
        '5XB' => 'E02006033',
        '5XZ' => 'E02006033',
        '5YQ' => 'E02006033',
        '5YR' => 'E02006033',
        '5ZH' => 'E02006033',
        '5ZR' => 'E02006033',
        '5ZZ' => 'E02006033',
        '6AA' => 'E02006037',
        '6AB' => 'E02006037',
        '6AD' => 'E02006037',
        '6AE' => 'E02006037',
        '6AF' => 'E02006037',
        '6AG' => 'E02006037',
        '6AH' => 'E02006037',
        '6AJ' => 'E02006037',
        '6AL' => 'E02006037',
        '6AN' => 'E02006037',
        '6AP' => 'E02006034',
        '6AQ' => 'E02006037',
        '6AR' => 'E02006034',
        '6AS' => 'E02006037',
        '6AT' => 'E02006034',
        '6AU' => 'E02006037',
        '6AW' => 'E02006037',
        '6AX' => 'E02006037',
        '6AY' => 'E02006037',
        '6AZ' => 'E02006037',
        '6BA' => 'E02006037',
        '6BB' => 'E02006037',
        '6BD' => 'E02006037',
        '6BE' => 'E02006037',
        '6BG' => 'E02006037',
        '6BH' => 'E02006037',
        '6BJ' => 'E02006037',
        '6BL' => 'E02006037',
        '6BN' => 'E02006037',
        '6BP' => 'E02006037',
        '6BQ' => 'E02006037',
        '6BS' => 'E02006037',
        '6BT' => 'E02006037',
        '6BU' => 'E02006034',
        '6BW' => 'E02006037',
        '6BX' => 'E02006034',
        '6BY' => 'E02006037',
        '6BZ' => 'E02006034',
        '6DA' => 'E02006037',
        '6DB' => 'E02006037',
        '6DD' => 'E02006037',
        '6DE' => 'E02006037',
        '6DF' => 'E02006037',
        '6DG' => 'E02006037',
        '6DH' => 'E02006037',
        '6DJ' => 'E02006037',
        '6DL' => 'E02006037',
        '6DN' => 'E02006037',
        '6DP' => 'E02006037',
        '6DQ' => 'E02006034',
        '6DR' => 'E02006037',
        '6DS' => 'E02006037',
        '6DT' => 'E02006037',
        '6DU' => 'E02006037',
        '6DW' => 'E02006037',
        '6DX' => 'E02006037',
        '6DZ' => 'E02006037',
        '6WA' => 'E02006033',
        '6WB' => 'E02006033',
        '6WD' => 'E02006033',
        '6WE' => 'E02006033',
        '6WF' => 'E02006037',
        '6WG' => 'E02006037',
        '6WR' => 'E02006037',
        '6WX' => 'E02006033',
        '6WY' => 'E02006033',
        '7AA' => 'E02006037',
        '7AB' => 'E02006037',
        '7AD' => 'E02006037',
        '7AE' => 'E02006037',
        '7AF' => 'E02006037',
        '7AG' => 'E02006037',
        '7AH' => 'E02006037',
        '7AJ' => 'E02006037',
        '7AL' => 'E02006037',
        '7AN' => 'E02006037',
        '7AP' => 'E02006037',
        '7AQ' => 'E02006037',
        '7AR' => 'E02006037',
        '7AS' => 'E02006037',
        '7AT' => 'E02006037',
        '7AU' => 'E02006037',
        '7AW' => 'E02006037',
        '7AX' => 'E02006037',
        '7AY' => 'E02006036',
        '7AZ' => 'E02006037',
        '7BA' => 'E02006037',
        '7BB' => 'E02006037',
        '7BD' => 'E02006037',
        '7BE' => 'E02006036',
        '7BF' => 'E02006036',
        '7BG' => 'E02006036',
        '7BH' => 'E02006036',
        '7BJ' => 'E02006036',
        '7BL' => 'E02006036',
        '7BN' => 'E02006036',
        '7BP' => 'E02006036',
        '7BS' => 'E02006036',
        '7BT' => 'E02006036',
        '7BU' => 'E02006036',
        '7BW' => 'E02006036',
        '7BX' => 'E02006036',
        '7BY' => 'E02006036',
        '7BZ' => 'E02006036',
        '7DA' => 'E02006036',
        '7DB' => 'E02006036',
        '7DD' => 'E02006036',
        '7DE' => 'E02006036',
        '7DF' => 'E02006037',
        '7DG' => 'E02006036',
        '7DH' => 'E02006036',
        '7DJ' => 'E02006036',
        '7DL' => 'E02006036',
        '7DN' => 'E02006036',
        '7DP' => 'E02006036',
        '7DQ' => 'E02006036',
        '7DR' => 'E02006036',
        '7DS' => 'E02006036',
        '7DT' => 'E02006036',
        '7DU' => 'E02006036',
        '7DW' => 'E02006036',
        '7DX' => 'E02006036',
        '7DY' => 'E02006036',
        '7DZ' => 'E02006036',
        '7EA' => 'E02006036',
        '7EB' => 'E02006036',
        '7ED' => 'E02006036',
        '7EE' => 'E02006036',
        '7EF' => 'E02006036',
        '7EG' => 'E02006036',
        '7EH' => 'E02006036',
        '7EJ' => 'E02006036',
        '7EL' => 'E02006036',
        '7EN' => 'E02006036',
        '7EP' => 'E02006036',
        '7EQ' => 'E02006036',
        '7ER' => 'E02006036',
        '7ES' => 'E02006036',
        '7ET' => 'E02006036',
        '7EU' => 'E02006036',
        '7EW' => 'E02006036',
        '7EX' => 'E02006036',
        '7EY' => 'E02006037',
        '7EZ' => 'E02006037',
        '7FA' => 'E02006036',
        '7FB' => 'E02006036',
        '7HA' => 'E02006037',
        '7HB' => 'E02006037',
        '7HD' => 'E02006037',
        '7HE' => 'E02006037',
        '7HF' => 'E02006037',
        '7HG' => 'E02006037',
        '7HH' => 'E02006037',
        '7HJ' => 'E02006037',
        '7HL' => 'E02006037',
        '7HN' => 'E02006037',
        '7HP' => 'E02006037',
        '7HQ' => 'E02006037',
        '7HR' => 'E02006037',
        '7HS' => 'E02006037',
        '7HT' => 'E02006037',
        '7HU' => 'E02006037',
        '7HW' => 'E02006037',
        '7HX' => 'E02006037',
        '7HY' => 'E02006037',
        '7HZ' => 'E02006037',
        '7JA' => 'E02006036',
        '7JB' => 'E02006037',
        '7JD' => 'E02006036',
        '7JE' => 'E02006037',
        '7JF' => 'E02006036',
        '7JG' => 'E02006036',
        '7JH' => 'E02006036',
        '7JJ' => 'E02006036',
        '7JL' => 'E02006036',
        '7JN' => 'E02006036',
        '7JP' => 'E02006036',
        '7JQ' => 'E02006036',
        '7JR' => 'E02006036',
        '7JS' => 'E02006036',
        '7JT' => 'E02006037',
        '7JU' => 'E02006037',
        '7JW' => 'E02006036',
        '7JX' => 'E02006036',
        '7JY' => 'E02006037',
        '7JZ' => 'E02006037',
        '7LA' => 'E02006037',
        '7LB' => 'E02006037',
        '7LD' => 'E02006037',
        '7LE' => 'E02006037',
        '7LF' => 'E02006036',
        '7LG' => 'E02006036',
        '7LH' => 'E02006037',
        '7LJ' => 'E02006036',
        '7LL' => 'E02006036',
        '7LN' => 'E02006036',
        '7LP' => 'E02006036',
        '7LQ' => 'E02006037',
        '7LR' => 'E02006036',
        '7LS' => 'E02006036',
        '7LT' => 'E02006033',
        '7LU' => 'E02006036',
        '7LW' => 'E02006036',
        '7LX' => 'E02006036',
        '7LY' => 'E02006036',
        '7LZ' => 'E02006036',
        '7NA' => 'E02006036',
        '7NB' => 'E02006036',
        '7ND' => 'E02006036',
        '7NE' => 'E02006036',
        '7NF' => 'E02006036',
        '7NG' => 'E02006036',
        '7NH' => 'E02006036',
        '7NJ' => 'E02006036',
        '7NL' => 'E02006036',
        '7NN' => 'E02006036',
        '7NP' => 'E02006036',
        '7NQ' => 'E02006036',
        '7NR' => 'E02006036',
        '7NS' => 'E02006036',
        '7NT' => 'E02006036',
        '7NU' => 'E02006036',
        '7NW' => 'E02006037',
        '7NX' => 'E02006036',
        '7NY' => 'E02006036',
        '7NZ' => 'E02006036',
        '7PA' => 'E02006036',
        '7PB' => 'E02006036',
        '7PD' => 'E02006036',
        '7PE' => 'E02006036',
        '7PF' => 'E02006036',
        '7PG' => 'E02006036',
        '7PH' => 'E02006036',
        '7PJ' => 'E02006036',
        '7PL' => 'E02006036',
        '7PN' => 'E02006036',
        '7PP' => 'E02006036',
        '7PQ' => 'E02006036',
        '7PR' => 'E02006036',
        '7PS' => 'E02006036',
        '7PT' => 'E02006036',
        '7PU' => 'E02006036',
        '7PW' => 'E02006036',
        '7PX' => 'E02006036',
        '7PY' => 'E02006036',
        '7PZ' => 'E02006035',
        '7QA' => 'E02006035',
        '7QB' => 'E02006035',
        '7QD' => 'E02006035',
        '7QE' => 'E02006035',
        '7QF' => 'E02006035',
        '7QG' => 'E02006036',
        '7QH' => 'E02006036',
        '7QJ' => 'E02006036',
        '7QL' => 'E02006036',
        '7QN' => 'E02006036',
        '7QP' => 'E02006036',
        '7QQ' => 'E02006036',
        '7QR' => 'E02006036',
        '7QS' => 'E02006036',
        '7QT' => 'E02006036',
        '7QU' => 'E02006036',
        '7QW' => 'E02006036',
        '7QX' => 'E02006037',
        '7QY' => 'E02006036',
        '7QZ' => 'E02006036',
        '7RA' => 'E02006036',
        '7RB' => 'E02006037',
        '7RD' => 'E02006037',
        '7RE' => 'E02006036',
        '7RF' => 'E02006037',
        '7RG' => 'E02006037',
        '7RH' => 'E02006037',
        '7RJ' => 'E02006037',
        '7RL' => 'E02006037',
        '7RN' => 'E02006037',
        '7RP' => 'E02006037',
        '7RQ' => 'E02006037',
        '7RR' => 'E02006037',
        '7RS' => 'E02006037',
        '7RT' => 'E02006036',
        '7RU' => 'E02006036',
        '7RW' => 'E02006037',
        '7SA' => 'E02006037',
        '7SB' => 'E02006037',
        '7TA' => 'E02006036',
        '7TB' => 'E02006036',
        '7TD' => 'E02006036',
        '7TE' => 'E02006036',
        '7TF' => 'E02006036',
        '7TG' => 'E02006036',
        '7TH' => 'E02006035',
        '7TJ' => 'E02006035',
        '7TL' => 'E02006036',
        '7TN' => 'E02006036',
        '7TP' => 'E02006036',
        '7TQ' => 'E02006036',
        '7TR' => 'E02006036',
        '7TS' => 'E02006036',
        '7TT' => 'E02006036',
        '7TU' => 'E02006036',
        '7TW' => 'E02006035',
        '7TX' => 'E02006036',
        '7TY' => 'E02006036',
        '7TZ' => 'E02006035',
        '7UA' => 'E02006036',
        '7UB' => 'E02006036',
        '7WA' => 'E02006033',
        '7WB' => 'E02006033',
        '7WD' => 'E02006033',
        '7WE' => 'E02006033',
        '7WF' => 'E02006033',
        '7WG' => 'E02006033',
        '7WH' => 'E02006033',
        '7WJ' => 'E02006033',
        '7WL' => 'E02006033',
        '7WN' => 'E02006033',
        '7WP' => 'E02006033',
        '7WQ' => 'E02006033',
        '7WR' => 'E02006033',
        '7WS' => 'E02006033',
        '7WT' => 'E02006033',
        '7WU' => 'E02006036',
        '7WW' => 'E02006033',
        '7WX' => 'E02006036',
        '7WY' => 'E02006036',
        '7WZ' => 'E02006036',
        '7XA' => 'E02006033',
        '7XB' => 'E02006033',
        '7XD' => 'E02006033',
        '7XE' => 'E02006033',
        '7XF' => 'E02006033',
        '7ZZ' => 'E02006033',
        '8AA' => 'E02006034',
        '8AB' => 'E02006034',
        '8AD' => 'E02006034',
        '8AE' => 'E02006034',
        '8AF' => 'E02006034',
        '8AG' => 'E02006034',
        '8AH' => 'E02006034',
        '8AJ' => 'E02006034',
        '8AL' => 'E02006034',
        '8AN' => 'E02006034',
        '8AP' => 'E02006034',
        '8AQ' => 'E02006034',
        '8AR' => 'E02006034',
        '8AS' => 'E02006034',
        '8AT' => 'E02006034',
        '8AU' => 'E02006034',
        '8AW' => 'E02006034',
        '8AX' => 'E02006034',
        '8AY' => 'E02006034',
        '8AZ' => 'E02006034',
        '8BA' => 'E02006034',
        '8BB' => 'E02006034',
        '8BD' => 'E02006034',
        '8BE' => 'E02006033',
        '8BF' => 'E02006034',
        '8BG' => 'E02006033',
        '8BH' => 'E02006034',
        '8BJ' => 'E02006034',
        '8BL' => 'E02006033',
        '8BN' => 'E02006034',
        '8BP' => 'E02006028',
        '8BQ' => 'E02006033',
        '8BS' => 'E02006034',
        '8BT' => 'E02006028',
        '8BU' => 'E02006034',
        '8BW' => 'E02006028',
        '8BX' => 'E02006034',
        '8BY' => 'E02006034',
        '8BZ' => 'E02006034',
        '8DA' => 'E02006034',
        '8DB' => 'E02006034',
        '8DD' => 'E02006034',
        '8DE' => 'E02006033',
        '8DF' => 'E02006034',
        '8DG' => 'E02006034',
        '8DH' => 'E02006034',
        '8DJ' => 'E02006034',
        '8DL' => 'E02006034',
        '8DN' => 'E02006034',
        '8DP' => 'E02006034',
        '8DQ' => 'E02006034',
        '8DR' => 'E02006034',
        '8DS' => 'E02006034',
        '8DT' => 'E02006028',
        '8DU' => 'E02006034',
        '8DW' => 'E02006028',
        '8DY' => 'E02006028',
        '8DZ' => 'E02006028',
        '8EA' => 'E02006028',
        '8EB' => 'E02006028',
        '8ED' => 'E02006028',
        '8EE' => 'E02006028',
        '8EF' => 'E02006028',
        '8EG' => 'E02006028',
        '8EH' => 'E02006028',
        '8EJ' => 'E02006033',
        '8EL' => 'E02006028',
        '8EN' => 'E02006028',
        '8EP' => 'E02006028',
        '8EQ' => 'E02006028',
        '8ER' => 'E02006028',
        '8ES' => 'E02006028',
        '8ET' => 'E02006028',
        '8EU' => 'E02006028',
        '8EW' => 'E02006028',
        '8EX' => 'E02006028',
        '8EY' => 'E02006028',
        '8EZ' => 'E02006028',
        '8FD' => 'E02006033',
        '8FE' => 'E02006033',
        '8FG' => 'E02006033',
        '8FJ' => 'E02006033',
        '8FL' => 'E02006033',
        '8FP' => 'E02006028',
        '8FT' => 'E02006033',
        '8GA' => 'E02006028',
        '8GB' => 'E02006034',
        '8GD' => 'E02006034',
        '8GE' => 'E02006034',
        '8GF' => 'E02006034',
        '8GG' => 'E02006034',
        '8HA' => 'E02006028',
        '8HB' => 'E02006033',
        '8HD' => 'E02006033',
        '8HE' => 'E02006034',
        '8HF' => 'E02006028',
        '8HG' => 'E02006028',
        '8HH' => 'E02006028',
        '8HJ' => 'E02006028',
        '8HL' => 'E02006028',
        '8HN' => 'E02006028',
        '8HQ' => 'E02006033',
        '8HR' => 'E02006033',
        '8HS' => 'E02006028',
        '8HT' => 'E02006033',
        '8HU' => 'E02006037',
        '8HX' => 'E02006037',
        '8HY' => 'E02006037',
        '8HZ' => 'E02006037',
        '8JA' => 'E02006037',
        '8JB' => 'E02006037',
        '8JD' => 'E02006037',
        '8JE' => 'E02006037',
        '8JF' => 'E02006037',
        '8JG' => 'E02006033',
        '8JH' => 'E02006037',
        '8JJ' => 'E02006033',
        '8JL' => 'E02006033',
        '8JN' => 'E02006033',
        '8JP' => 'E02006033',
        '8JQ' => 'E02006037',
        '8JR' => 'E02006033',
        '8JS' => 'E02006033',
        '8JT' => 'E02006033',
        '8JU' => 'E02006033',
        '8JW' => 'E02006033',
        '8JX' => 'E02006033',
        '8JY' => 'E02006033',
        '8JZ' => 'E02006033',
        '8LA' => 'E02006033',
        '8LB' => 'E02006033',
        '8LE' => 'E02006033',
        '8LF' => 'E02006033',
        '8LG' => 'E02006033',
        '8LH' => 'E02006033',
        '8LJ' => 'E02006033',
        '8LL' => 'E02006033',
        '8LN' => 'E02006033',
        '8LP' => 'E02006033',
        '8LQ' => 'E02006033',
        '8LR' => 'E02006033',
        '8LS' => 'E02006033',
        '8LT' => 'E02006033',
        '8LU' => 'E02006037',
        '8LX' => 'E02006033',
        '8LY' => 'E02006033',
        '8LZ' => 'E02006033',
        '8NA' => 'E02006033',
        '8NB' => 'E02006033',
        '8ND' => 'E02006033',
        '8NE' => 'E02006033',
        '8NF' => 'E02006033',
        '8NG' => 'E02006033',
        '8NH' => 'E02006033',
        '8NJ' => 'E02006033',
        '8NL' => 'E02006033',
        '8NN' => 'E02006033',
        '8NP' => 'E02006033',
        '8NQ' => 'E02006033',
        '8NR' => 'E02006033',
        '8NS' => 'E02006033',
        '8NT' => 'E02006033',
        '8NU' => 'E02006033',
        '8NW' => 'E02006033',
        '8NX' => 'E02006033',
        '8NY' => 'E02006033',
        '8NZ' => 'E02006033',
        '8PA' => 'E02006033',
        '8PB' => 'E02006033',
        '8PD' => 'E02006033',
        '8PE' => 'E02006033',
        '8PF' => 'E02006033',
        '8PG' => 'E02006033',
        '8PH' => 'E02006033',
        '8PJ' => 'E02006033',
        '8PL' => 'E02006033',
        '8PN' => 'E02006033',
        '8PP' => 'E02006033',
        '8PQ' => 'E02006033',
        '8PR' => 'E02006033',
        '8PS' => 'E02006033',
        '8PT' => 'E02006033',
        '8PU' => 'E02006033',
        '8PW' => 'E02006033',
        '8PX' => 'E02006033',
        '8PY' => 'E02006033',
        '8PZ' => 'E02006033',
        '8QA' => 'E02006033',
        '8QB' => 'E02006033',
        '8QD' => 'E02006033',
        '8QE' => 'E02006033',
        '8QF' => 'E02006033',
        '8QG' => 'E02006033',
        '8QH' => 'E02006033',
        '8QJ' => 'E02006033',
        '8QL' => 'E02006033',
        '8QN' => 'E02006033',
        '8QP' => 'E02006033',
        '8QQ' => 'E02006033',
        '8QR' => 'E02006033',
        '8QS' => 'E02006033',
        '8QT' => 'E02006033',
        '8QU' => 'E02006033',
        '8QW' => 'E02006033',
        '8QX' => 'E02006033',
        '8QY' => 'E02006033',
        '8QZ' => 'E02006033',
        '8RA' => 'E02006033',
        '8RB' => 'E02006033',
        '8RD' => 'E02006033',
        '8RE' => 'E02006033',
        '8RF' => 'E02006033',
        '8RG' => 'E02006033',
        '8RH' => 'E02006037',
        '8RJ' => 'E02006033',
        '8RL' => 'E02006033',
        '8RN' => 'E02006037',
        '8RP' => 'E02006037',
        '8RQ' => 'E02006033',
        '8RR' => 'E02006037',
        '8RS' => 'E02006037',
        '8RT' => 'E02006033',
        '8RU' => 'E02006033',
        '8RW' => 'E02006037',
        '8RX' => 'E02006033',
        '8RY' => 'E02006037',
        '8RZ' => 'E02006033',
        '8SA' => 'E02006037',
        '8SB' => 'E02006037',
        '8SD' => 'E02006037',
        '8SE' => 'E02006037',
        '8SF' => 'E02006037',
        '8SG' => 'E02006037',
        '8SH' => 'E02006037',
        '8SJ' => 'E02006037',
        '8SL' => 'E02006034',
        '8SN' => 'E02006034',
        '8SP' => 'E02006033',
        '8SQ' => 'E02006037',
        '8SR' => 'E02006033',
        '8SS' => 'E02006033',
        '8ST' => 'E02006034',
        '8SU' => 'E02006034',
        '8SW' => 'E02006034',
        '8SX' => 'E02006034',
        '8SY' => 'E02006034',
        '8SZ' => 'E02006034',
        '8TA' => 'E02006034',
        '8TB' => 'E02006033',
        '8TD' => 'E02006034',
        '8TE' => 'E02006034',
        '8TF' => 'E02006034',
        '8TG' => 'E02006034',
        '8TH' => 'E02006033',
        '8TJ' => 'E02006033',
        '8TL' => 'E02006033',
        '8TN' => 'E02006033',
        '8TP' => 'E02006033',
        '8TQ' => 'E02006033',
        '8TR' => 'E02006033',
        '8TS' => 'E02006033',
        '8TT' => 'E02006034',
        '8TU' => 'E02006034',
        '8TW' => 'E02006033',
        '8UA' => 'E02006034',
        '8UB' => 'E02006034',
        '8UD' => 'E02006034',
        '8UE' => 'E02006034',
        '8UF' => 'E02006034',
        '8UG' => 'E02006034',
        '8UH' => 'E02006034',
        '8UJ' => 'E02006034',
        '8UL' => 'E02006034',
        '8UN' => 'E02006034',
        '8UP' => 'E02006034',
        '8UQ' => 'E02006034',
        '8UR' => 'E02006034',
        '8US' => 'E02006034',
        '8UT' => 'E02006034',
        '8UU' => 'E02006034',
        '8UW' => 'E02006034',
        '8UX' => 'E02006034',
        '8UY' => 'E02006034',
        '8UZ' => 'E02006034',
        '8WA' => 'E02006033',
        '8WB' => 'E02006033',
        '8WD' => 'E02006033',
        '8WE' => 'E02006033',
        '8WF' => 'E02006033',
        '8WG' => 'E02006033',
        '8WH' => 'E02006033',
        '8WJ' => 'E02006033',
        '8WL' => 'E02006033',
        '8WN' => 'E02006033',
        '8WP' => 'E02006033',
        '8WQ' => 'E02006033',
        '8WR' => 'E02006033',
        '8WS' => 'E02006033',
        '8WT' => 'E02006033',
        '8WU' => 'E02006033',
        '8WW' => 'E02006033',
        '8WX' => 'E02006033',
        '8WY' => 'E02006033',
        '8WZ' => 'E02006033',
        '8XA' => 'E02006034',
        '8XB' => 'E02006034',
        '8XD' => 'E02006034',
        '8XE' => 'E02006034',
        '8XF' => 'E02006034',
        '8XG' => 'E02006034',
        '8XH' => 'E02006033',
        '8XJ' => 'E02006034',
        '8XL' => 'E02006034',
        '8XN' => 'E02006034',
        '8XP' => 'E02006034',
        '8XQ' => 'E02006034',
        '8XR' => 'E02006033',
        '8XS' => 'E02006034',
        '8XT' => 'E02006034',
        '8XU' => 'E02006033',
        '8XW' => 'E02006034',
        '8XX' => 'E02006033',
        '8XY' => 'E02006033',
        '8XZ' => 'E02006033',
        '8YA' => 'E02006033',
        '8YB' => 'E02006033',
        '8YD' => 'E02006033',
        '8YE' => 'E02006033',
        '8YF' => 'E02006033',
        '8YG' => 'E02006033',
        '8YH' => 'E02006033',
        '8YJ' => 'E02006033',
        '8YL' => 'E02006033',
        '8YN' => 'E02006033',
        '8YP' => 'E02006033',
        '8YQ' => 'E02006033',
        '8YR' => 'E02006034',
        '8YS' => 'E02006033',
        '8YT' => 'E02006033',
        '8YU' => 'E02006033',
        '8YW' => 'E02006034',
        '8YX' => 'E02006033',
        '8YY' => 'E02006033',
        '8YZ' => 'E02006033',
        '8ZA' => 'E02006034',
        '8ZB' => 'E02006034',
        '8ZD' => 'E02006034',
        '8ZE' => 'E02006034',
        '8ZF' => 'E02006034',
        '8ZG' => 'E02006034',
        '8ZH' => 'E02006033',
        '8ZJ' => 'E02006033',
        '8ZL' => 'E02006033',
        '8ZN' => 'E02006033',
        '8ZP' => 'E02006033',
        '8ZQ' => 'E02006034',
        '8ZS' => 'E02006033',
        '8ZZ' => 'E02006033',
        '9AA' => 'E02006037',
        '9AB' => 'E02006034',
        '9AD' => 'E02006037',
        '9AE' => 'E02006037',
        '9AF' => 'E02006034',
        '9AG' => 'E02006037',
        '9AH' => 'E02006037',
        '9AJ' => 'E02006037',
        '9AL' => 'E02006037',
        '9AN' => 'E02006037',
        '9AP' => 'E02006037',
        '9AQ' => 'E02006037',
        '9AR' => 'E02006037',
        '9AS' => 'E02006037',
        '9AT' => 'E02006034',
        '9AU' => 'E02006034',
        '9AW' => 'E02006037',
        '9AX' => 'E02006034',
        '9AY' => 'E02006034',
        '9AZ' => 'E02006037',
        '9BA' => 'E02006034',
        '9BB' => 'E02006034',
        '9BD' => 'E02006034',
        '9BE' => 'E02006034',
        '9BF' => 'E02006037',
        '9BG' => 'E02006034',
        '9BH' => 'E02006034',
        '9BJ' => 'E02006037',
        '9BL' => 'E02006034',
        '9BN' => 'E02006034',
        '9BP' => 'E02006034',
        '9BQ' => 'E02006034',
        '9BS' => 'E02006034',
        '9BT' => 'E02006034',
        '9BU' => 'E02006034',
        '9BW' => 'E02006034',
        '9BX' => 'E02006034',
        '9BY' => 'E02006034',
        '9BZ' => 'E02006034',
        '9DA' => 'E02006037',
        '9DB' => 'E02006037',
        '9DD' => 'E02006037',
        '9DE' => 'E02006037',
        '9DF' => 'E02006037',
        '9DG' => 'E02006037',
        '9DH' => 'E02006037',
        '9DJ' => 'E02006037',
        '9DL' => 'E02006037',
        '9DN' => 'E02006037',
        '9DP' => 'E02006037',
        '9DQ' => 'E02006037',
        '9DR' => 'E02006037',
        '9DS' => 'E02006037',
        '9DT' => 'E02006034',
        '9DU' => 'E02006037',
        '9DW' => 'E02006037',
        '9DX' => 'E02006037',
        '9DY' => 'E02006034',
        '9DZ' => 'E02006037',
        '9EA' => 'E02006037',
        '9EB' => 'E02006037',
        '9ED' => 'E02006037',
        '9EE' => 'E02006037',
        '9EF' => 'E02006037',
        '9EG' => 'E02006037',
        '9EH' => 'E02006037',
        '9EJ' => 'E02006037',
        '9EL' => 'E02006037',
        '9EN' => 'E02006037',
        '9EP' => 'E02006037',
        '9EQ' => 'E02006037',
        '9ER' => 'E02006037',
        '9ES' => 'E02006037',
        '9ET' => 'E02006037',
        '9EU' => 'E02006037',
        '9EW' => 'E02006037',
        '9EX' => 'E02006037',
        '9EY' => 'E02006037',
        '9EZ' => 'E02006037',
        '9FA' => 'E02006034',
        '9FB' => 'E02006034',
        '9FD' => 'E02006034',
        '9FE' => 'E02006034',
        '9FF' => 'E02006034',
        '9FG' => 'E02006034',
        '9FH' => 'E02006034',
        '9FJ' => 'E02006034',
        '9FL' => 'E02006037',
        '9FN' => 'E02006037',
        '9FP' => 'E02006037',
        '9FQ' => 'E02006037',
        '9FR' => 'E02006037',
        '9FS' => 'E02006037',
        '9FT' => 'E02006037',
        '9FW' => 'E02006034',
        '9GA' => 'E02006037',
        '9GE' => 'E02006037',
        '9HA' => 'E02006037',
        '9HB' => 'E02006037',
        '9HD' => 'E02006037',
        '9HE' => 'E02006037',
        '9HF' => 'E02006037',
        '9HG' => 'E02006037',
        '9HH' => 'E02006037',
        '9HJ' => 'E02006037',
        '9HL' => 'E02006037',
        '9HN' => 'E02006038',
        '9HP' => 'E02006037',
        '9HQ' => 'E02006037',
        '9HR' => 'E02006037',
        '9HS' => 'E02006037',
        '9HT' => 'E02006037',
        '9HU' => 'E02006037',
        '9HW' => 'E02006037',
        '9HX' => 'E02006037',
        '9JA' => 'E02006036',
        '9JB' => 'E02006036',
        '9JD' => 'E02006036',
        '9JE' => 'E02006037',
        '9JF' => 'E02006037',
        '9JG' => 'E02006037',
        '9JH' => 'E02006036',
        '9JJ' => 'E02006037',
        '9JL' => 'E02006036',
        '9JN' => 'E02006036',
        '9JP' => 'E02006037',
        '9JQ' => 'E02006036',
        '9JR' => 'E02006037',
        '9JS' => 'E02006037',
        '9JT' => 'E02006037',
        '9JU' => 'E02006037',
        '9JW' => 'E02006037',
        '9JX' => 'E02006037',
        '9JZ' => 'E02006037',
        '9LA' => 'E02006037',
        '9LB' => 'E02006037',
        '9LD' => 'E02006037',
        '9LE' => 'E02006037',
        '9LF' => 'E02006037',
        '9LG' => 'E02006037',
        '9LH' => 'E02006037',
        '9LJ' => 'E02006037',
        '9LL' => 'E02006037',
        '9LN' => 'E02006037',
        '9LP' => 'E02006037',
        '9LQ' => 'E02006037',
        '9LR' => 'E02006037',
        '9LS' => 'E02006037',
        '9LT' => 'E02006037',
        '9LU' => 'E02006037',
        '9LW' => 'E02006037',
        '9LX' => 'E02006037',
        '9LY' => 'E02006037',
        '9LZ' => 'E02006037',
        '9NA' => 'E02006037',
        '9NB' => 'E02006037',
        '9NE' => 'E02006037',
        '9NF' => 'E02006037',
        '9NG' => 'E02006037',
        '9NH' => 'E02006037',
        '9NJ' => 'E02006037',
        '9NL' => 'E02006037',
        '9NN' => 'E02006037',
        '9NP' => 'E02006037',
        '9NQ' => 'E02006037',
        '9NR' => 'E02006037',
        '9NS' => 'E02006037',
        '9NT' => 'E02006037',
        '9NU' => 'E02006037',
        '9NW' => 'E02006037',
        '9NX' => 'E02006037',
        '9NY' => 'E02006037',
        '9NZ' => 'E02006037',
        '9PA' => 'E02006037',
        '9PB' => 'E02006037',
        '9PD' => 'E02006037',
        '9PE' => 'E02006037',
        '9PF' => 'E02006037',
        '9PG' => 'E02006037',
        '9PH' => 'E02006037',
        '9PJ' => 'E02006037',
        '9PL' => 'E02006038',
        '9PN' => 'E02006038',
        '9PQ' => 'E02006037',
        '9PS' => 'E02006037',
        '9PT' => 'E02006037',
        '9PU' => 'E02006037',
        '9QA' => 'E02006037',
        '9QB' => 'E02006037',
        '9QD' => 'E02006037',
        '9QE' => 'E02006037',
        '9QF' => 'E02006037',
        '9QG' => 'E02006037',
        '9QH' => 'E02006037',
        '9QJ' => 'E02006037',
        '9QL' => 'E02006037',
        '9QN' => 'E02006037',
        '9QP' => 'E02006037',
        '9QQ' => 'E02006037',
        '9QR' => 'E02006037',
        '9QS' => 'E02006037',
        '9QT' => 'E02006037',
        '9QW' => 'E02006037',
        '9RA' => 'E02006037',
        '9RB' => 'E02006034',
        '9RD' => 'E02006034',
        '9SR' => 'E02006037',
        '9SS' => 'E02006037',
        '9WA' => 'E02006033',
        '9WB' => 'E02006033',
        '9WD' => 'E02006033',
        '9WE' => 'E02006033',
        '9WF' => 'E02006033',
        '9WG' => 'E02006033',
        '9WH' => 'E02006033',
        '9WJ' => 'E02006033',
        '9WL' => 'E02006033',
        '9WN' => 'E02006037',
        '9WP' => 'E02006033',
        '9WQ' => 'E02006033',
        '9WR' => 'E02006033',
        '9WS' => 'E02006033',
        '9WU' => 'E02006033',
        '9WY' => 'E02006033',
        '9WZ' => 'E02006033',
        '9XA' => 'E02006033',
        '9YU' => 'E02006033',
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
