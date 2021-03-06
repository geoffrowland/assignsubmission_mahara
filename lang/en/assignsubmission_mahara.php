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
 * Strings for component 'assignsubmission_onlinetext', language 'en'
 *
 * @package   assignsubmission_onlinetext
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assign_submission_mahara_name'] = 'Assign Submission Mahara services';
$string['assign_submission_mahara_description'] = 'Mahara functions used in Mahara portfolio Assign Submission plugin.<br />Publishing this service on a Moodle site has no effect. Subscribe to this service if you want to be able to use assignments with {$a}.<br />';
$string['enabled'] = 'Mahara portfolio';
$string['enabled_help'] = "If enabled, students are able to submit Mahara pages for assessment in Moodle. The Mahara site must already be configured for mnet networking with this Moodle site.";
$string['emptysubmission'] = 'You have not chosen the page to submit.';
$string['errormnetrequest'] = 'Attempt to send mnet request resulted in error: {$a}';
$string['mahara'] = 'Mahara portfolio';
$string['needstobelocked'] = 'Draft submission either needs to be submitted for assessment by user or locked before view link will be available.';
$string['nomaharahostsfound'] = 'No mahara hosts found.';
$string['noviewscreated'] = 'No pages found.';
$string['pluginname'] = 'Mahara portfolio';
$string['selectmaharaview'] = 'Select one of your "{$a->name}" portfolio pages from this complete list, or <a href="{$a->jumpurl}">click here</a> to visit "{$a->name}" and create a page.';
$string['site'] = 'Site';
$string['site_help'] = 'This setting lets you select which Mahara site your students should submit their pages from.';
$string['outputforlog'] = '{$a->remotehostname}: {$a->viewtitle} (view id: {$a->viewid})';
$string['outputforlognew'] = 'New {$a} submission.';
$string['viewsaved'] = '<a href="{$a->jumpurl}">Click here</a> to view "{$a->viewtitle}" page in "{$a->name}" portfolio.';
