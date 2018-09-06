<?php namespace Defr\CrmModule\Http\Controller\Admin;

use Defr\CrmModule\Complaint\Form\ComplaintFormBuilder;
use Defr\CrmModule\Complaint\Table\ComplaintTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ComplaintsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ComplaintTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ComplaintTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ComplaintFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ComplaintFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ComplaintFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ComplaintFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
