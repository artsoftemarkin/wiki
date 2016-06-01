<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b0b1686448066920d3adbad3eb9d19f7b27623b45997b67c0f0da49835b2a942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_547f72cd526103f4f0b58568215afb49411297354e44c3aee7081471dda1db29 = $this->env->getExtension("native_profiler");
        $__internal_547f72cd526103f4f0b58568215afb49411297354e44c3aee7081471dda1db29->enter($__internal_547f72cd526103f4f0b58568215afb49411297354e44c3aee7081471dda1db29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_547f72cd526103f4f0b58568215afb49411297354e44c3aee7081471dda1db29->leave($__internal_547f72cd526103f4f0b58568215afb49411297354e44c3aee7081471dda1db29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fdbca8be182d2b139258ad73189152b32aa35b98f862463a94983d6c447a01d2 = $this->env->getExtension("native_profiler");
        $__internal_fdbca8be182d2b139258ad73189152b32aa35b98f862463a94983d6c447a01d2->enter($__internal_fdbca8be182d2b139258ad73189152b32aa35b98f862463a94983d6c447a01d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fdbca8be182d2b139258ad73189152b32aa35b98f862463a94983d6c447a01d2->leave($__internal_fdbca8be182d2b139258ad73189152b32aa35b98f862463a94983d6c447a01d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a486a4c5f3857f42827e2d2b5ce4cdfd1aa402f4c3acd17b10cc87c02c5da3db = $this->env->getExtension("native_profiler");
        $__internal_a486a4c5f3857f42827e2d2b5ce4cdfd1aa402f4c3acd17b10cc87c02c5da3db->enter($__internal_a486a4c5f3857f42827e2d2b5ce4cdfd1aa402f4c3acd17b10cc87c02c5da3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a486a4c5f3857f42827e2d2b5ce4cdfd1aa402f4c3acd17b10cc87c02c5da3db->leave($__internal_a486a4c5f3857f42827e2d2b5ce4cdfd1aa402f4c3acd17b10cc87c02c5da3db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_51770247ee94f0d00fd46556016d3f7f349ef76bb1b3513070c6fa49b074249c = $this->env->getExtension("native_profiler");
        $__internal_51770247ee94f0d00fd46556016d3f7f349ef76bb1b3513070c6fa49b074249c->enter($__internal_51770247ee94f0d00fd46556016d3f7f349ef76bb1b3513070c6fa49b074249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_51770247ee94f0d00fd46556016d3f7f349ef76bb1b3513070c6fa49b074249c->leave($__internal_51770247ee94f0d00fd46556016d3f7f349ef76bb1b3513070c6fa49b074249c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
