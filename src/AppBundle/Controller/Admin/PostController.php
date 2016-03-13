<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class PostController extends Controller
{
    /**
     * @Route("/admin/posts", name="admin_posts")
     */
    public function postAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Post');

        $posts = $repository->findAll();

        $result = [];

        foreach ($posts as $_post)
        {
            array_push($result, $_post->toJson());

//            foreach ($_post->getComments() as $_comment)
//            {
////                var_dump($_comment);
//            }
        }

        return (new JsonResponse())->setData($result);

        return $this->render('default/index.html.twig', [
            'manage' => true
        ]);
    }


    public function postCommentVoteAction($slug, $id)
    {} // "post_user_comment_vote" [POST] /users/{slug}/comments/{id}/vote

    public function getCommentsAction($slug)
    {} // "get_user_comments"   [GET] /users/{slug}/comments

    public function getCommentAction($slug, $id)
    {} // "get_user_comment"    [GET] /users/{slug}/comments/{id}

    public function deleteCommentAction($slug, $id)
    {} // "delete_user_comment" [DELETE] /users/{slug}/comments/{id}

    public function newCommentsAction($slug)
    {} // "new_user_comments"   [GET] /users/{slug}/comments/new

    public function editCommentAction($slug, $id)
    {} // "edit_user_comment"   [GET] /users/{slug}/comments/{id}/edit

    public function removeCommentAction($slug, $id)
    {} // "remove_user_comment" [GET] /users/{slug}/comments/{id}/remove

}
