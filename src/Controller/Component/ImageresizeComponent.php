<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

/*
 *
 * CakePHP component for image resizing
 *
 * Author: Dzenan Causevic
 * Date: April 23, 2015
 * Link: https://github.com/dcausevic/imageresize
 *
 * This CakePHP helper was created based on code from
 * SimpleImage.php developed by Simon Travis
 * (See http://www.white-hat-web-design.co.uk/articles/php-image-resizing.php)
 *
 * It is used and redistributed based on terms of the GNU General Public License
 * as published by the Free Software Foundation. See the GNU General Public License
 * for more details: http://www.gnu.org/licenses/gpl.html
 *
 */
class ImageresizeComponent extends Component {
	var $image;
	var $image_type;
	public function load($filename) {
		$image_info = getimagesize ( $filename );
		$this->image_type = $image_info [2];
		if ($this->image_type == IMAGETYPE_JPEG) {
			
			$this->image = imagecreatefromjpeg ( $filename );
		} elseif ($this->image_type == IMAGETYPE_GIF) {
			
			$this->image = imagecreatefromgif ( $filename );
		} elseif ($this->image_type == IMAGETYPE_PNG) {
			$this->image = imagecreatefrompng ( $filename );
		}
	}
	function save($filename, $image_type = IMAGETYPE_JPEG, $compression = 75, $permissions = null) {
		if ($image_type == IMAGETYPE_JPEG) {
			imagejpeg ( $this->image, $filename, $compression );
		} elseif ($image_type == IMAGETYPE_GIF) {
			
			imagegif ( $this->image, $filename );
		} elseif ($image_type == IMAGETYPE_PNG) {
			
			imagepng ( $this->image, $filename );
		}
		if ($permissions != null) {
			
			chmod ( $filename, $permissions );
		}
	}
	function output($image_type = IMAGETYPE_JPEG) {
		if ($image_type == IMAGETYPE_JPEG) {
			imagejpeg ( $this->image );
		} elseif ($image_type == IMAGETYPE_GIF) {
			
			imagegif ( $this->image );
		} elseif ($image_type == IMAGETYPE_PNG) {
			
			imagepng ( $this->image );
		}
	}
	function getWidth() {
		return imagesx ( $this->image );
	}
	function getHeight() {
		return imagesy ( $this->image );
	}
	function resizeToHeight($height) {
		$ratio = $height / $this->getHeight ();
		$width = $this->getWidth () * $ratio;
		$this->resize ( $width, $height );
	}
	function resizeToWidth($width) {
		$ratio = $width / $this->getWidth ();
		$height = $this->getheight () * $ratio;
		$this->resize ( $width, $height );
	}
	function scale($scale) {
		$width = $this->getWidth () * $scale / 100;
		$height = $this->getheight () * $scale / 100;
		$this->resize ( $width, $height );
	}
	function resize($width, $height) {
		$new_image = imagecreatetruecolor ( $width, $height );
		imagecopyresampled ( $new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth (), $this->getHeight () );
		$this->image = $new_image;
	}
}
?>  
