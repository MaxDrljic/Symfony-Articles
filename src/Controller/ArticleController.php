<?php
  namespace App\Controller;

  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


  class ArticleController extends Controller {
    # Instead of specifying routes in config/routes.yaml,
    # routes can be specified with Annotations in the controller
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() {
      // return new Response('<html><body>Hello</body></html>');

      return $this->render('articles/index.html.twig');
    }
  }