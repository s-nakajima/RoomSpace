<?php
/**
 * RoomSpace::createRoom()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsModelTestCase', 'NetCommons.TestSuite');

/**
 * RoomSpace::createRoom()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\RoomSpace\Test\Case\Model\RoomSpace
 */
class RoomSpaceCreateRoomTest extends NetCommonsModelTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
	);

/**
 * Plugin name
 *
 * @var string
 */
	public $plugin = 'room_space';

/**
 * Model name
 *
 * @var string
 */
	protected $_modelName = 'RoomSpace';

/**
 * Method name
 *
 * @var string
 */
	protected $_methodName = 'createRoom';

/**
 * createRoom()のテスト
 *
 * @return void
 */
	public function testCreateRoom() {
		$model = $this->_modelName;
		$methodName = $this->_methodName;

		//データ生成
		$data = array();

		//テスト実施
		$result = $this->$model->$methodName($data);

		//チェック
		$this->assertEquals(array('Room', 'RoomsLanguage'), array_keys($result));
		$this->assertTrue(Hash::get($result, 'Room.active'));
		$this->assertFalse(Hash::get($result, 'Room.need_approval'));
		$this->assertFalse(Hash::get($result, 'Room.default_participation'));
		$this->assertArrayHasKey('id', Hash::get($result, 'Room'));
		$this->assertCount(2, Hash::get($result, 'RoomsLanguage'));
		$this->assertEquals('1', Hash::get($result, 'RoomsLanguage.0.language_id'));
		$this->assertEquals('2', Hash::get($result, 'RoomsLanguage.1.language_id'));
	}

}
