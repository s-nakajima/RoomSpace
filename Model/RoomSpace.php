<?php
/**
 * RoomSpace Model
 *
 * @property Space $Space
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('Space', 'Rooms.Model');

/**
 * RoomSpace Model
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\RoomSpace\Model
 */
class RoomSpace extends Space {

/**
 * Table name
 *
 * @var string
 */
	public $useTable = 'spaces';

}
