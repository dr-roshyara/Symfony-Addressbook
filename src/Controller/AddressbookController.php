<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile; 
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Addressbook;
use App\Repository\AddressbookRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
class AddressbookController extends AbstractController
{
    #[Route('/addressbook', name: 'addressbook')]
   
    public function index(  string $uploadDir): Response
    {
         $repository = $this->getDoctrine()->getRepository(Addressbook::class);
         $addresses = $repository->findAll();

        if (empty($addresses)) {
            return new Response("No data found", Response::HTTP_NOT_FOUND,
                ['content-type' => 'text/plain']);
        }
        
        header('Content-type:application/json;charset=utf-8');

        /**********************************************************/ 
         $serializer = $this->get('serializer');
   		 //$json = $serializer->serialize($entity, 'json');
    		$mdata = $serializer->normalize($addresses);
    		 // dd($mdata);

        return $this->render('addressbook/index.html.twig', 
        	[
            'controller_name' => 'AddressbookController',
            'upload_dir' =>$uploadDir,
             'addressbook'=>$mdata
        ]);
    }
   /**
     * @Route("/address", name="address")
     */
   public function show(int $id): Response
    {
        $product = $this->getDoctrine()
            ->getRepository(Addressbook::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return  $product->getName();

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }
    public function addressbook(): Response
    {
       $repository = $this->getDoctrine()->getRepository(Addressbook::class);

        $addressbook = $this->getDoctrine()
            ->getRepository(Addressbook::class)
            ->findAll();
        return $this->json($addressbook[0]->getFirstname());
 
    }
  
}
