<?php

namespace CM\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\UsernameFormType as BaseType;

class LoginFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('name');
    }

    
//    public function getDefaultOptions(array $options) {
//        $options['csrf_protection'] = false;
//        return $options;
//    }


    public function getName()
    {
        return 'cm_user_login';
    }
}