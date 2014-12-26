<?php

namespace Xoeoro\PictureCutBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Xoeoro\PictureCutBundle\Library\PictureCut;
use Symfony\Component\HttpFoundation\JsonResponse;

class WindowController extends Controller
{
	public function indexAction($mode) {
		return $this->render(sprintf('XoeoroPictureCutBundle:Window:%s.html.twig', strtolower($mode)));
	}
}