<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_003db905284e213031bfba94aed6f86e3515f5e2fef2dd4100d5aa151dae152b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0db3b5caf1f1907365d830a53d7af1259ae69a8a7256853f361723524eecc4b0 = $this->env->getExtension("native_profiler");
        $__internal_0db3b5caf1f1907365d830a53d7af1259ae69a8a7256853f361723524eecc4b0->enter($__internal_0db3b5caf1f1907365d830a53d7af1259ae69a8a7256853f361723524eecc4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db3b5caf1f1907365d830a53d7af1259ae69a8a7256853f361723524eecc4b0->leave($__internal_0db3b5caf1f1907365d830a53d7af1259ae69a8a7256853f361723524eecc4b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08f6e2dea15e5659022cb88a5f38f4f3ede8adb99a7e9f4e3f6b8843ebd450ec = $this->env->getExtension("native_profiler");
        $__internal_08f6e2dea15e5659022cb88a5f38f4f3ede8adb99a7e9f4e3f6b8843ebd450ec->enter($__internal_08f6e2dea15e5659022cb88a5f38f4f3ede8adb99a7e9f4e3f6b8843ebd450ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08f6e2dea15e5659022cb88a5f38f4f3ede8adb99a7e9f4e3f6b8843ebd450ec->leave($__internal_08f6e2dea15e5659022cb88a5f38f4f3ede8adb99a7e9f4e3f6b8843ebd450ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6617f9786a4fa0cf742a3f850163a759a25f7a85daf3a36b8be1cacd9e8c3584 = $this->env->getExtension("native_profiler");
        $__internal_6617f9786a4fa0cf742a3f850163a759a25f7a85daf3a36b8be1cacd9e8c3584->enter($__internal_6617f9786a4fa0cf742a3f850163a759a25f7a85daf3a36b8be1cacd9e8c3584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6617f9786a4fa0cf742a3f850163a759a25f7a85daf3a36b8be1cacd9e8c3584->leave($__internal_6617f9786a4fa0cf742a3f850163a759a25f7a85daf3a36b8be1cacd9e8c3584_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cc87f4f9e39af42686f31432c7cd322d6254c187807df29a203351e1c66ebda = $this->env->getExtension("native_profiler");
        $__internal_3cc87f4f9e39af42686f31432c7cd322d6254c187807df29a203351e1c66ebda->enter($__internal_3cc87f4f9e39af42686f31432c7cd322d6254c187807df29a203351e1c66ebda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3cc87f4f9e39af42686f31432c7cd322d6254c187807df29a203351e1c66ebda->leave($__internal_3cc87f4f9e39af42686f31432c7cd322d6254c187807df29a203351e1c66ebda_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
