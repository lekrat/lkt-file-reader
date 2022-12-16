<?php
/**
 * Interface FSInterface
 *
 * @filesource   FSInterface.php
 * @created      06.03.2019
 * @package      chillerlan\Filereader
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2019 smiley
 * @license      MIT
 */

namespace chillerlan\Filereader;

interface FSInterface{

	public function __get(string $name);

	public function info():array;

	/**
	 * @return \chillerlan\Filereader\Directory|\chillerlan\Filereader\File
	 */
	public function rename(string $newname, bool $overwrite = true);

}
