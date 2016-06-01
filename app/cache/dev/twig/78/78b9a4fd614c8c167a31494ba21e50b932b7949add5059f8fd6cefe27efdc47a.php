<?php

/* default/page.html.twig */
class __TwigTemplate_f6ad39c23d80368b082b886e403ee68766f0effee8dc708e2d7caa706a46fd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c4c80acf3523523ef6e9182930530a28841e9aa7eaa506e9a3a6556cd0e7fae = $this->env->getExtension("native_profiler");
        $__internal_4c4c80acf3523523ef6e9182930530a28841e9aa7eaa506e9a3a6556cd0e7fae->enter($__internal_4c4c80acf3523523ef6e9182930530a28841e9aa7eaa506e9a3a6556cd0e7fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/page.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getName", array(), "method"), "html", null, true);
        echo "</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <a href=\"localhost/";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getName", array(), "method"), "html", null, true);
        echo "/add\">add</a>
        <a href=\"localhost/";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getName", array(), "method"), "html", null, true);
        echo "/edit\">edit</a>
        <a href=\"localhost/";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getName", array(), "method"), "html", null, true);
        echo "/delete\">delete</a>
        <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getName", array(), "method"), "html", null, true);
        echo "</p>
        <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getId", array(), "method"), "html", null, true);
        echo "</p>
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_4c4c80acf3523523ef6e9182930530a28841e9aa7eaa506e9a3a6556cd0e7fae->leave($__internal_4c4c80acf3523523ef6e9182930530a28841e9aa7eaa506e9a3a6556cd0e7fae_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71872d3a1443b02f44f963adfeba4c00f323c5b05cf8f8ab8e49e2581df1fad0 = $this->env->getExtension("native_profiler");
        $__internal_71872d3a1443b02f44f963adfeba4c00f323c5b05cf8f8ab8e49e2581df1fad0->enter($__internal_71872d3a1443b02f44f963adfeba4c00f323c5b05cf8f8ab8e49e2581df1fad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_71872d3a1443b02f44f963adfeba4c00f323c5b05cf8f8ab8e49e2581df1fad0->leave($__internal_71872d3a1443b02f44f963adfeba4c00f323c5b05cf8f8ab8e49e2581df1fad0_prof);

    }

    public function getTemplateName()
    {
        return "default/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  62 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  34 => 7,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{{ page.getName() }}</title>*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <a href="localhost/{{ page.getName() }}/add">add</a>*/
/*         <a href="localhost/{{ page.getName() }}/edit">edit</a>*/
/*         <a href="localhost/{{ page.getName() }}/delete">delete</a>*/
/*         <p>{{ page.getName() }}</p>*/
/*         <p>{{ page.getId() }}</p>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
