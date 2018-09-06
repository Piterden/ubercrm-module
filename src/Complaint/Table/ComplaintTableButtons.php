<?php namespace Defr\CrmModule\Complaint\Table;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

class ComplaintTableButtons
{

    /**
     * Handle the table buttons
     *
     * @param  ComplaintTableBuilder  $builder  The builder
     */
    public function handle(ComplaintTableBuilder $builder)
    {
        $builder->setButtons([
            'edit' => [
                'href' => function (EntryInterface $entry) {
                    $slug = $entry->getStreamSlug();

                    if ($slug == 'complaints') {
                        $slug = '';
                    } else {
                        $slug = "{$slug}/";
                    }

                    return "/admin/crm/{$slug}edit/{$entry->getId()}";
                },
            ],
        ]);
    }

}
