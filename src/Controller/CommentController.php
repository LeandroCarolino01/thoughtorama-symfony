<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sension\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class CommentController extends Controller{
        /**
         * @Route("/")
         */
        public function index() {
//            return new Response('<html><body>Hello</body></body></html>');
            $comments = ['comment 1', 'comment 2'];
            return $this->render('comments/index.html.twig', array('comments' => $comments));

        }
    }