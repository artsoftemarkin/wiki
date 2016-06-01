<?php

/* default/addPage.html.twig */
class __TwigTemplate_44ed2222eca30fa0618b95d73b60c28fe7cbb8cf4fc3f50a0a03f2e79513f9b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_060c9f1085d2d5763a1df93b3dcbb1a224af0b7f56ed2feac3c06da85ea02bdb = $this->env->getExtension("native_profiler");
        $__internal_060c9f1085d2d5763a1df93b3dcbb1a224af0b7f56ed2feac3c06da85ea02bdb->enter($__internal_060c9f1085d2d5763a1df93b3dcbb1a224af0b7f56ed2feac3c06da85ea02bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/addPage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "html", null, true);
        echo "
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </body>
</html>
";
        
        $__internal_060c9f1085d2d5763a1df93b3dcbb1a224af0b7f56ed2feac3c06da85ea02bdb->leave($__internal_060c9f1085d2d5763a1df93b3dcbb1a224af0b7f56ed2feac3c06da85ea02bdb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0732452a6679c4eeb446a507a05e2509ae74664d0917240fc2db4569cb3e7f4 = $this->env->getExtension("native_profiler");
        $__internal_f0732452a6679c4eeb446a507a05e2509ae74664d0917240fc2db4569cb3e7f4->enter($__internal_f0732452a6679c4eeb446a507a05e2509ae74664d0917240fc2db4569cb3e7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f0732452a6679c4eeb446a507a05e2509ae74664d0917240fc2db4569cb3e7f4->leave($__internal_f0732452a6679c4eeb446a507a05e2509ae74664d0917240fc2db4569cb3e7f4_prof);

    }

    public function getTemplateName()
    {
        return "default/addPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 5,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {{ request }}*/
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         {{ form_end(form) }}*/
/*     </body>*/
/* </html>*/
/* */
