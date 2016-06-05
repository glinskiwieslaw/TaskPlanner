<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18c8583627be271b520934a8b67e98578f52f8cceedf6a158abe81c24216ddd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5111c4be366e5db0e55a20415b4ebdc6b081e26888e3ef2f0be71834dd74cc65 = $this->env->getExtension("native_profiler");
        $__internal_5111c4be366e5db0e55a20415b4ebdc6b081e26888e3ef2f0be71834dd74cc65->enter($__internal_5111c4be366e5db0e55a20415b4ebdc6b081e26888e3ef2f0be71834dd74cc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5111c4be366e5db0e55a20415b4ebdc6b081e26888e3ef2f0be71834dd74cc65->leave($__internal_5111c4be366e5db0e55a20415b4ebdc6b081e26888e3ef2f0be71834dd74cc65_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bd7717b096661812fb57f75eb6bf4ac2b799e9b009b08d9099ca5b5ddac275e = $this->env->getExtension("native_profiler");
        $__internal_0bd7717b096661812fb57f75eb6bf4ac2b799e9b009b08d9099ca5b5ddac275e->enter($__internal_0bd7717b096661812fb57f75eb6bf4ac2b799e9b009b08d9099ca5b5ddac275e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0bd7717b096661812fb57f75eb6bf4ac2b799e9b009b08d9099ca5b5ddac275e->leave($__internal_0bd7717b096661812fb57f75eb6bf4ac2b799e9b009b08d9099ca5b5ddac275e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_37f6b6bb2ee4cf05f9bb8ff3d1f96ac8cf7b99469057aa34576b0da3ba7bfc79 = $this->env->getExtension("native_profiler");
        $__internal_37f6b6bb2ee4cf05f9bb8ff3d1f96ac8cf7b99469057aa34576b0da3ba7bfc79->enter($__internal_37f6b6bb2ee4cf05f9bb8ff3d1f96ac8cf7b99469057aa34576b0da3ba7bfc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_37f6b6bb2ee4cf05f9bb8ff3d1f96ac8cf7b99469057aa34576b0da3ba7bfc79->leave($__internal_37f6b6bb2ee4cf05f9bb8ff3d1f96ac8cf7b99469057aa34576b0da3ba7bfc79_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_592988081d8646d2e60bd89a9d8b9bc5310f8b3fb1f66282b04269f779ba1e1f = $this->env->getExtension("native_profiler");
        $__internal_592988081d8646d2e60bd89a9d8b9bc5310f8b3fb1f66282b04269f779ba1e1f->enter($__internal_592988081d8646d2e60bd89a9d8b9bc5310f8b3fb1f66282b04269f779ba1e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_592988081d8646d2e60bd89a9d8b9bc5310f8b3fb1f66282b04269f779ba1e1f->leave($__internal_592988081d8646d2e60bd89a9d8b9bc5310f8b3fb1f66282b04269f779ba1e1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
