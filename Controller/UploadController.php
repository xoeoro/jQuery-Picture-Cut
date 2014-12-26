<?php

namespace Xoeoro\PictureCutBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Xoeoro\PictureCutBundle\Library\PictureCut;
use Symfony\Component\HttpFoundation\JsonResponse;

class UploadController extends Controller
{
	public function indexAction(){
		try {
			$pictureCut = $this->container->get('xoeoro.picturecut');

			if($pictureCut->upload()){
				return new JsonResponse($pictureCut->returnResult());
			} else {
				return new JsonResponse($pictureCut->return\Exceptions());
			}
		} catch (\Exception $e) {
			print $e->getMessage();
			exit();
		}
	}
}