<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_32d4da79daa729ebde2fe038c57937cae8297191fd96b59569da52e5bdcee27d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b458127b74331b0eb17aedf340e3bd046faf26bd498acf0f0bf0c0d9257a2163 = $this->env->getExtension("native_profiler");
        $__internal_b458127b74331b0eb17aedf340e3bd046faf26bd498acf0f0bf0c0d9257a2163->enter($__internal_b458127b74331b0eb17aedf340e3bd046faf26bd498acf0f0bf0c0d9257a2163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b458127b74331b0eb17aedf340e3bd046faf26bd498acf0f0bf0c0d9257a2163->leave($__internal_b458127b74331b0eb17aedf340e3bd046faf26bd498acf0f0bf0c0d9257a2163_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d342c7d86c7542580019dbe73a1722d49f20eb961415cfcdfe851fc2b4454b0 = $this->env->getExtension("native_profiler");
        $__internal_2d342c7d86c7542580019dbe73a1722d49f20eb961415cfcdfe851fc2b4454b0->enter($__internal_2d342c7d86c7542580019dbe73a1722d49f20eb961415cfcdfe851fc2b4454b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2d342c7d86c7542580019dbe73a1722d49f20eb961415cfcdfe851fc2b4454b0->leave($__internal_2d342c7d86c7542580019dbe73a1722d49f20eb961415cfcdfe851fc2b4454b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
