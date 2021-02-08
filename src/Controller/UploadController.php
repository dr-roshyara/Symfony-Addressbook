<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;
use Gedmo\Sluggable\Util\Urlizer;
use App\Service\FileUploader;
use Psr\Log\LoggerInterface;
use App\Entity\Addressbook;
use DateTimeInterface;
use DateTime;
class UploadController extends AbstractController
{  
	/**
     * @Route("/doUpload", name="do-upload")
     * @param Request $request
     * @param string $uploadDir
     * @param FileUploader $uploader
     * @param LoggerInterface $logger
     * @return Response
     */
    public function index(Request $request, string $uploadDir,
                          FileUploader $uploader, LoggerInterface $logger): Response
    {
        $actrl =new AddressbookController();
        $token = $request->get("token");

        if (!$this->isCsrfTokenValid('upload', $token))
        {
            $logger->info("CSRF failure");

            return new Response("Operation not allowed",  Response::HTTP_BAD_REQUEST,
                ['content-type' => 'text/plain']);
        }
       
        $file 			= $request->files->get('myfile');
       
        // if (empty($file))
        // {
        //     return new Response("No file specified",
        //        Response::HTTP_UNPROCESSABLE_ENTITY, ['content-type' => 'text/plain']);
        // }
        $firstname 		=$this->check_input($request->get('firstname'));
        $lastname 		=$this->check_input($request->get('lastname'));
        $phonenumber	=$this->check_input($request->get('phonenumber'));
        $street 		=$this->check_input($request->get('street'));
        $housenumber	=$this->check_input($request->get('housenumber'));
        $postal_code 	=$this->check_input($request->get('postal_code'));
        $city			=$this->check_input($request->get('city'));
        $country		=$this->check_input($request->get('country'));
        $birthday		=$this->check_input($request->get('birthday'));
        //$birthday 	=strtotime('$birthday');  
        $email			=$this->check_input($request->get('email'));
		// $format 		= 'Y-m-d';
		// $date 		= date($format, $birthday);
        
        #upload file 
        // $filename = $file->getClientOriginalName();
        $newFilename ="";
        $uploadedFile 	=$request->files->get('myfile');
        if($uploadedFile){
				$destination 	=$this->getParameter('kernel.project_dir').'/public/uploads';
				$oriFilename	=pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
				$newFilename 	=Urlizer::urlize($oriFilename).'_'.uniqid().'.'. $uploadedFile->guessExtension();
        		$uploader->upload($destination, $file, $newFilename);

        }
        // clean up the file property as you won't need it anymore
       // $this->setFile(null);
		$user =[
			'firstname' 	=>$firstname,
            'lastname' 		=>$lastname,         
	        'phonenumber'	=>$phonenumber,	
	        'street' 		=> $street, 		
	        'housenumber' 	=>$housenumber, 
	        'zip' 			=>$postal_code,
	        'city' 			=>$city,
	        'country' 		=>$country,	
	        'birthday' 		=>$birthday,
	        'email' 		=>$email,
	        'picture'		=>$newFilename  
	     ];  
	   	$addressId=	$this->createAdress($user);
    
        return $this->render('upload/index.html.twig', [
            'controller_name' => 'UploadController',
             
	        ]); 
    }
	private function check_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	 public function createAdress($address): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $addressbook = new Addressbook();
        $addressbook->setFirstname($address['firstname']);
        $addressbook->setLastname($address['lastname']);
        $addressbook->setPhonenumber($address['phonenumber']);
        $addressbook->setStreet($address['street']);
        $addressbook->setHousenumber($address['housenumber']);
        $addressbook->setZip($address['zip']);
        $addressbook->setCity($address['city']);
        $addressbook->setCountry($address['country']);
        $addressbook->setEmail($address['email']);
        $addressbook->setBirthday(new DateTime($address['birthday']));		
        $addressbook->setPicture($address['picture']); 
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($addressbook);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$addressbook->getId());
    }
    public function setCreatedTs(\DateTimeInterface $created_ts): self
	{
	    $this->created_ts = $created_ts;

	    return $this;
	} 
	/***/
	public function UploadImageFile(Request $request){
		 /**@var UploadedFile $uploadedFile */
		$uploadedFile 	=$request->files->get('myfile');
		$destination 	=$this->getParameter('kernel.project_dir'.'/public/uploads');
		$oriFilename	=pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
		$newFilename 	=Urlizer::urlize($origFilename).'_'.uniqid().'_'. $uploadedFile->guessExtension();
		$uploadedFile->move(
			$destination,
			$newFilename
		);

	}
}
