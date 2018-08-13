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
 * Workflow report versioning.
 *
 * @package   report_workflow
 * @copyright 2011 The Open University / Lancaster University Network Services Limited
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2018081300;
$plugin->requires  = 2017111300;
$plugin->component = 'report_workflow';
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = 'v1.5 for Moodle 3.4+';

$plugin->dependencies = array(
    'block_workflow' => 2018081300,
);

$plugin->outestssufficient = true;
