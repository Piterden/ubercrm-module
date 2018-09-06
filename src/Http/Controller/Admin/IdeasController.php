<?php namespace Defr\CrmModule\Http\Controller\Admin;

use Defr\CrmModule\Idea\Form\IdeaFormBuilder;
use Defr\CrmModule\Idea\Table\IdeaTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class IdeasController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param IdeaTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(IdeaTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param IdeaFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(IdeaFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param IdeaFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(IdeaFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
