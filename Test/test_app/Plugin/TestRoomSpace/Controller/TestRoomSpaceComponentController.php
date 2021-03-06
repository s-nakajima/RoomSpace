<?php
/**
 * RoomSpaceComponentテスト用Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * RoomSpaceComponentテスト用Controller
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\RoomSpace\Test\test_app\Plugin\TestRoomSpace\Controller
 */
class TestRoomSpaceComponentController extends AppController {

/**
 * 使用コンポーネント
 *
 * @var array
 */
	public $components = array(
		'RoomSpace.RoomSpace'
	);

/**
 * index
 *
 * @return void
 */
	public function index() {
		$this->autoRender = true;
	}

}
