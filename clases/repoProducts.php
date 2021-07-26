<?php

abstract class repoProducts {
	public abstract function getProductsByLine($line);
	public abstract function getExtraDataFromTheLines($id);
	public abstract function getGaleryImagesFromTheLines($id);
}

?>