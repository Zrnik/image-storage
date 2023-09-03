<?php declare(strict_types = 1);

namespace Contributte\ImageStorage;


//phpcs:disable SlevomatCodingStandard.Classes.SuperfluousTraitNaming.SuperfluousSuffix

use Nette\Application\UI\Template;

trait ImageStoragePresenterTrait
{
	/** @var ImageStorage */
	public $imageStorage;

	public function injectImageStorage(ImageStorage $imageStorage): void
	{
		$this->imageStorage = $imageStorage;
	}

	public function createTemplate(): Template
	{
		$template = parent::createTemplate();

		$template->imageStorage = $this->imageStorage;

		return $template;
	}

}

// phpcs:enable
