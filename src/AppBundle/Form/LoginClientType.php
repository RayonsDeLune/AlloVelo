<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;

/**
 * Description of LoginClientType
 *
 * @author Hélène 
 */
class LoginClientType extends AbstractType
{
     public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder->add("login", \Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add("motDePasse", \Symfony\Component\Form\Extension\Core\Type\PasswordType::class)
                ->add("submit", \Symfony\Component\Form\Extension\Core\Type\SubmitType::class);
    }

}
