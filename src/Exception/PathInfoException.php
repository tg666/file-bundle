<?php

declare(strict_types=1);

namespace SixtyEightPublishers\FileStorage\Exception;

use Exception;
use SixtyEightPublishers;
use function sprintf;

final class PathInfoException extends Exception implements ExceptionInterface
{
	/**
	 * @param string $path
	 *
	 * @return \SixtyEightPublishers\FileStorage\Exception\PathInfoException
	 */
	public static function invalidPath(string $path): self
	{
		return new self(sprintf(
			'Given path "%s" is not valid path for %s',
			$path,
			SixtyEightPublishers\FileStorage\PathInfoInterface::class
		));
	}

	/**
	 * @param string $extension
	 *
	 * @return \SixtyEightPublishers\FileStorage\Exception\PathInfoException
	 */
	public static function unsupportedExtension(string $extension): self
	{
		return new self(sprintf(
			'File extension .%s is not supported.',
			$extension
		));
	}
}
