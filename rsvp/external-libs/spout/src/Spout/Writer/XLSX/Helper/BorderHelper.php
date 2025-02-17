<?php

namespace Box\Spout\Writer\XLSX\Helper;

use Box\Spout\Writer\Style\Border;
use Box\Spout\Writer\Style\BorderPart;

class BorderHelper {

	public static $xlsxStyleMap = array(
		Border::STYLE_SOLID  => array(
			Border::WIDTH_THIN   => 'thin',
			Border::WIDTH_MEDIUM => 'medium',
			Border::WIDTH_THICK  => 'thick',
		),
		Border::STYLE_DOTTED => array(
			Border::WIDTH_THIN   => 'dotted',
			Border::WIDTH_MEDIUM => 'dotted',
			Border::WIDTH_THICK  => 'dotted',
		),
		Border::STYLE_DASHED => array(
			Border::WIDTH_THIN   => 'dashed',
			Border::WIDTH_MEDIUM => 'mediumDashed',
			Border::WIDTH_THICK  => 'mediumDashed',
		),
		Border::STYLE_DOUBLE => array(
			Border::WIDTH_THIN   => 'double',
			Border::WIDTH_MEDIUM => 'double',
			Border::WIDTH_THICK  => 'double',
		),
		Border::STYLE_NONE   => array(
			Border::WIDTH_THIN   => 'none',
			Border::WIDTH_MEDIUM => 'none',
			Border::WIDTH_THICK  => 'none',
		),
	);

	/**
	 * @param BorderPart $borderPart
	 * @return string
	 */
	public static function serializeBorderPart( BorderPart $borderPart ) {
		$borderStyle = self::getBorderStyle( $borderPart );

		$colorEl = $borderPart->getColor() ? sprintf( '<color rgb="%s"/>', $borderPart->getColor() ) : '';
		$partEl  = sprintf(
			'<%s style="%s">%s</%s>',
			$borderPart->getName(),
			$borderStyle,
			$colorEl,
			$borderPart->getName()
		);

		return $partEl . PHP_EOL;
	}

	/**
	 * Get the style definition from the style map
	 *
	 * @param BorderPart $borderPart
	 * @return string
	 */
	protected static function getBorderStyle( BorderPart $borderPart ) {
		return self::$xlsxStyleMap[ $borderPart->getStyle() ][ $borderPart->getWidth() ];
	}
}
