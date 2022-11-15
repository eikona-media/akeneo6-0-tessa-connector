<?php

namespace Eikona\Tessa\ReferenceDataAttributeBundle\Controller;

use Akeneo\Pim\Enrichment\Bundle\File\DefaultImageProviderInterface;
use Akeneo\Pim\Enrichment\Bundle\File\FileTypeGuesserInterface;
use Akeneo\Tool\Component\FileStorage\FilesystemProvider;
use Akeneo\Tool\Component\FileStorage\Repository\FileInfoRepositoryInterface;
use Eikona\Tessa\ConnectorBundle\Controller\MediaFileController;
use Liip\ImagineBundle\Controller\ImagineController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class FileController
{
    protected \Akeneo\Pim\Enrichment\Bundle\Controller\Ui\FileController $inner;
    protected MediaFileController $tessaMediaFileController;

    public function __construct(
        \Akeneo\Pim\Enrichment\Bundle\Controller\Ui\FileController $inner,
        MediaFileController $tessaMediaFileController,
    ) {
        $this->inner = $inner;
        $this->tessaMediaFileController = $tessaMediaFileController;
    }

    /**
     * @param Request $request
     * @param string  $filename
     * @param string  $filter
     *
     * @return RedirectResponse
     */
    public function showAction(Request $request, $filename, $filter = null)
    {
        $filename = urldecode($filename);

        if (str_starts_with($filename, 'tessa-')) {
            $assetId = str_replace('tessa-', '', $filename);
            return $this->tessaMediaFileController->previewAction($assetId);
        }

        return $this->inner->showAction($request, $filename, $filter);
    }
}
