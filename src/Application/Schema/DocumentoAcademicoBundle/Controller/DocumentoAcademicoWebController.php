<?php

namespace App\Application\Schema\DocumentoAcademicoBundle\Controller;

use App\Application\Schema\DocumentoAcademicoBundle\Entity\DocumentoAcademico;
use App\Application\Schema\DocumentoAcademicoBundle\Form\DocumentoAcademicoType;

use App\Application\Project\ContentBundle\Controller\Base\BaseWebController;
use App\Application\Project\ContentBundle\Attributes\Acl as ACL;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;


#[Route('/web/documentoAcademico', name: 'web_documentoAcademico_', methods: ['GET'])]
#[ACL\Web(enable: true, title: 'DocumentoAcademico', description: 'Permissões do modulo DocumentoAcademico')]
class DocumentoAcademicoWebController extends BaseWebController
{
    public function getBaseRouter(): string
    {
        return 'web_documentoAcademico_';
    }

    public function getRepository(): string
    {
        return DocumentoAcademico::class;
    }

    public function getBaseTemplate(): string
    {
        return "@ApplicationSchemaDocumentoAcademico/documentoAcademico/";
    }

    #[Route('', name: 'list', methods: ['GET'])]
    #[ACL\Web(enable: true, title: 'Listar', description: 'Lista DocumentoAcademico')]
    public function listAction(ManagerRegistry $doctrine, Request $request): Response
    {
        $this->validateAccess(actionName: 'listAction');

        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Listar DocumentoAcademico',
        ]);
    }

    #[Route('/create', name: 'create', methods: ['GET', 'POST'])]
    #[ACL\Web(enable: true, title: 'Criar', description: 'Cria DocumentoAcademico')]
    public function createAction(ManagerRegistry $doctrine, Request $request): Response
    {
        $this->validateAccess(actionName: 'createAction');

        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Criar DocumentoAcademico',
        ]);
    }

    #[Route('/{id}/show', name: 'show', methods: ['GET'])]
    #[ACL\Web(enable: true, title: 'Visualizar', description: 'Visualiza DocumentoAcademico')]
    public function showAction(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $this->validateAccess(actionName: 'showAction');


        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Visualizar DocumentoAcademico',
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    #[ACL\Web(enable: true, title: 'Editar', description: 'Edita DocumentoAcademico')]
    public function editAction(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $this->validateAccess(actionName: 'editAction');

        return $this->render($this->getBaseTemplate() . 'list.html.twig', [
            'title' => 'Editar DocumentoAcademico',
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['GET'])]
    #[ACL\Web(enable: true, title: 'Deletar', description: 'Deleta DocumentoAcademico')]
    public function deleteAction(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $this->validateAccess(actionName: 'deleteAction');

    }

}