<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Trade items model.
 *
 * @package    block_stash
 * @copyright  2017 Adrian Greeve - adriangreeve.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_stash;
defined('MOODLE_INTERNAL') || die();

use lang_string;

/**
 * Trade items model class.
 *
 * @package    block_stash
 * @copyright  2017 Adrian Greeve - adriangreeve.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class tradeitems extends persistent {

    const TABLE = 'block_stash_trade_items';

    protected static function define_properties() {
        return [
            'tradeid' => [
                'type' => PARAM_INT,
            ],
            'itemid' => [
                'type' => PARAM_INT,
            ],
            'quantity' => [
                'type' => PARAM_INT,
                'default' => null,
                'null' => NULL_ALLOWED
            ],
            'gainloss' => [
                'type' => PARAM_BOOL,
                'default' => true,
            ],
        ];
    }

    /**
     * Get the trade ID.
     *
     * @return int
     */
    public function get_tradeid(): int {
        return $this->get('tradeid');
    }

    /**
     * Set the trade ID.
     *
     * @param int $tradeid
     * @return static
     */
    public function set_tradeid(int $tradeid): static {
        return $this->set('tradeid', $tradeid);
    }

    /**
     * Get the item ID.
     *
     * @return int
     */
    public function get_itemid(): int {
        return $this->get('itemid');
    }

    /**
     * Set the item ID.
     *
     * @param int $itemid
     * @return static
     */
    public function set_itemid(int $itemid): static {
        return $this->set('itemid', $itemid);
    }

    /**
     * Get the quantity.
     *
     * @return int|null
     */
    public function get_quantity(): ?int {
        return $this->get('quantity');
    }

    /**
     * Set the quantity.
     *
     * @param int|null $quantity
     * @return static
     */
    public function set_quantity(?int $quantity): static {
        return $this->set('quantity', $quantity);
    }

    /**
     * Get the gain/loss direction (true = gain, false = loss).
     *
     * @return bool
     */
    public function get_gainloss(): bool {
        return (bool) $this->get('gainloss');
    }

    /**
     * Set the gain/loss direction.
     *
     * @param bool $gainloss
     * @return static
     */
    public function set_gainloss(bool $gainloss): static {
        return $this->set('gainloss', $gainloss);
    }
}
