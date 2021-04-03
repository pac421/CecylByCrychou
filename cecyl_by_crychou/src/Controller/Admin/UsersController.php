<?php
// src/Controller/Admin/UsersController.php
namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends AbstractController
{
    /**
     * @Route("/utilisateurs", name="show_admin_users")
     */
    public function show(): Response
    {
        return $this->render('admin/users.html.twig');
    }

    /**
     * @Route("/get-all-users", methods={"GET","POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function getAllUsers(Request $request): JsonResponse
    {
        $data = [];

        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $query = $em->createQuery(
                '
                SELECT U.id, U.firstname, U.lastname, U.email, U.createdAt
                FROM App\Entity\User U
                WHERE U.deletedAt IS NULL
                AND U.roles = \'["ROLE_USER"]\'
                ORDER BY U.createdAt ASC
                '
            );
            $data = $query->getArrayResult();

            foreach($data as $k => $v){
                $data[$k]['createdAt'] = $v['createdAt']->format('Y-m-d H:i:s');
                $data[$k]['actions'] = '<a data-toggle="tooltip" title="Voir" class="text-dark me-2" href="#"><i class="fas fa-eye"></i></a>';
                $data[$k]['actions'] .= '<a data-toggle="tooltip" title="Éditer" class="text-dark me-2" href="#"><i class="fas fa-pen"></i></a>';
                $data[$k]['actions'] .= '<a data-toggle="tooltip" title="Supprimer" class="text-dark" href="#"><i class="fas fa-trash"></i></a>';
            }
        }

        return new JsonResponse([
            'data' => $data
        ]);
    }
}