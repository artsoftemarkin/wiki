<?php

/* base.html.twig */
class __TwigTemplate_6b5bdab61a8c0269f1ca3616cb3ded459c496df169ffdbce68abed06d11008ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26b757a58794da15e63fcb9fb887715025dc7504bc73183f3209d74dad7e4168 = $this->env->getExtension("native_profiler");
        $__internal_26b757a58794da15e63fcb9fb887715025dc7504bc73183f3209d74dad7e4168->enter($__internal_26b757a58794da15e63fcb9fb887715025dc7504bc73183f3209d74dad7e4168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_26b757a58794da15e63fcb9fb887715025dc7504bc73183f3209d74dad7e4168->leave($__internal_26b757a58794da15e63fcb9fb887715025dc7504bc73183f3209d74dad7e4168_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d6afbc936510ddb2be2a7b3dcac7f02c2c5c717e75a37463ecb97a7f669c107 = $this->env->getExtension("native_profiler");
        $__internal_7d6afbc936510ddb2be2a7b3dcac7f02c2c5c717e75a37463ecb97a7f669c107->enter($__internal_7d6afbc936510ddb2be2a7b3dcac7f02c2c5c717e75a37463ecb97a7f669c107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d6afbc936510ddb2be2a7b3dcac7f02c2c5c717e75a37463ecb97a7f669c107->leave($__internal_7d6afbc936510ddb2be2a7b3dcac7f02c2c5c717e75a37463ecb97a7f669c107_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01db8b4d6d5d4ff7a43efe0a7880c8d10b73cd127945a721e0e0fcf48302b2f3 = $this->env->getExtension("native_profiler");
        $__internal_01db8b4d6d5d4ff7a43efe0a7880c8d10b73cd127945a721e0e0fcf48302b2f3->enter($__internal_01db8b4d6d5d4ff7a43efe0a7880c8d10b73cd127945a721e0e0fcf48302b2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_01db8b4d6d5d4ff7a43efe0a7880c8d10b73cd127945a721e0e0fcf48302b2f3->leave($__internal_01db8b4d6d5d4ff7a43efe0a7880c8d10b73cd127945a721e0e0fcf48302b2f3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a680dd9e0fe2f315cf77c4829e0bc7ac94cecbfa94d177e339193bb256c73b01 = $this->env->getExtension("native_profiler");
        $__internal_a680dd9e0fe2f315cf77c4829e0bc7ac94cecbfa94d177e339193bb256c73b01->enter($__internal_a680dd9e0fe2f315cf77c4829e0bc7ac94cecbfa94d177e339193bb256c73b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a680dd9e0fe2f315cf77c4829e0bc7ac94cecbfa94d177e339193bb256c73b01->leave($__internal_a680dd9e0fe2f315cf77c4829e0bc7ac94cecbfa94d177e339193bb256c73b01_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c6fea91a7c144760369ad3490c3481befa9fee7ebfbed7d40fb77c5dfca275d = $this->env->getExtension("native_profiler");
        $__internal_1c6fea91a7c144760369ad3490c3481befa9fee7ebfbed7d40fb77c5dfca275d->enter($__internal_1c6fea91a7c144760369ad3490c3481befa9fee7ebfbed7d40fb77c5dfca275d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1c6fea91a7c144760369ad3490c3481befa9fee7ebfbed7d40fb77c5dfca275d->leave($__internal_1c6fea91a7c144760369ad3490c3481befa9fee7ebfbed7d40fb77c5dfca275d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
