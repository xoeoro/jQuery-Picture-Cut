<?php

namespace Xoeoro\PictureCutBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Xoeoro\PictureCutBundle\Library\PictureCut;
use Symfony\Component\HttpFoundation\JsonResponse;

class CropController extends Controller
{
	public function indexAction() {
		try {
			$pictureCut = $this->container->get('xoeoro.picturecut');

			if($pictureCut->crop()){
				return new JsonResponse($pictureCut->returnResult());
			} else {
				return new JsonResponse($pictureCut->returnExceptions()); //print exceptions if the upload fails
		  	}
		} catch (\Exception $e) {
			throw $e;
		}
	}
}