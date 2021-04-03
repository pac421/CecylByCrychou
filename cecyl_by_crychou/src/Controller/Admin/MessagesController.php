<?php
// src/Controller/Admin/MessagesController.php
namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MessagesController extends AbstractController
{
    /**
     * @Route("/messages", name="show_admin_messages")
     */
    public function show(): Response
    {
        return $this->render('admin/messages.html.twig');
    }

    /**
     * @Route("/get-all-messages", methods={"GET","POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function getAllMessages(Request $request): JsonResponse
    {
        $data = [];

        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $query = $em->createQuery(
                '
                SELECT M.id, M.name, M.email, M.message, M.createdAt
                FROM App\Entity\Message M
                WHERE M.deletedAt IS NULL
                ORDER BY M.createdAt ASC
                '
            );
            $data = $query->getArrayResult();

            foreach($data as $k => $v){
                $data[$k]['createdAt'] = $v['createdAt']->format('Y-m-d H:i:s');
                $data[$k]['actions'] = '<a data-toggle="tooltip" title="Voir" class="text-dark me-2" href="#"><i class="fas fa-eye"></i></a>';
                $data[$k]['actions'] .= '<a data-toggle="tooltip" title="Supprimer" class="text-dark" href="#"><i class="fas fa-trash"></i></a>';
            }
        }

        return new JsonResponse([
            'data' => $data
        ]);
    }
}