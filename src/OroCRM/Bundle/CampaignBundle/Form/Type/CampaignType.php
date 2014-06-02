<?php

namespace OroCRM\Bundle\CampaignBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CampaignType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                'text',
                [
                    'label'    => 'orocrm.campaign.name.label',
                    'required' => true,
                ]
            )
            ->add(
                'code',
                'orocrm_campaign_code_type',
                [
                    'label'    => 'orocrm.campaign.code.label',
                    'required' => true,
                ]
            )
            ->add(
                'startDate',
                'oro_datetime',
                [
                    'label'    => 'orocrm.campaign.start_date.label',
                    'required' => false,
                ]
            )
            ->add(
                'endDate',
                'oro_datetime',
                [
                    'label'    => 'orocrm.campaign.end_date.label',
                    'required' => false,
                ]
            )->add(
                'description',
                'text',
                [
                    'label'    => 'orocrm.campaign.description.label',
                    'required' => false,
                ]
            )
            ->add(
                'budget',
                'oro_money',
                [
                    'label'    => 'orocrm.campaign.budget.label',
                    'required' => false,
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(['data_class' => 'OroCRM\Bundle\CampaignBundle\Entity\Campaign']);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'orocrm_campaign_form';
    }
}
