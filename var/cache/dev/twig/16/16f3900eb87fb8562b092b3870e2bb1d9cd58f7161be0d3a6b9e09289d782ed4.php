<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ad866bbb9523cfbbf62b6df5580ca719a5fa976d3490e1c4d426d4cd37121727 extends Twig_Template
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
        $__internal_d84b931b1b9d60e575eda0d817111ef6f8946b2f79b16210d3b1906494cd83e5 = $this->env->getExtension("native_profiler");
        $__internal_d84b931b1b9d60e575eda0d817111ef6f8946b2f79b16210d3b1906494cd83e5->enter($__internal_d84b931b1b9d60e575eda0d817111ef6f8946b2f79b16210d3b1906494cd83e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d84b931b1b9d60e575eda0d817111ef6f8946b2f79b16210d3b1906494cd83e5->leave($__internal_d84b931b1b9d60e575eda0d817111ef6f8946b2f79b16210d3b1906494cd83e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2793bb1b4b22e4a6c2bd7034e2d6946fb05506d198debd09c33d57593fd2e3b = $this->env->getExtension("native_profiler");
        $__internal_d2793bb1b4b22e4a6c2bd7034e2d6946fb05506d198debd09c33d57593fd2e3b->enter($__internal_d2793bb1b4b22e4a6c2bd7034e2d6946fb05506d198debd09c33d57593fd2e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d2793bb1b4b22e4a6c2bd7034e2d6946fb05506d198debd09c33d57593fd2e3b->leave($__internal_d2793bb1b4b22e4a6c2bd7034e2d6946fb05506d198debd09c33d57593fd2e3b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9a95973b9600da5ae2e01bf6bbdaba9aa77bad11bfd8ad06d4e1daa0b7e0051 = $this->env->getExtension("native_profiler");
        $__internal_d9a95973b9600da5ae2e01bf6bbdaba9aa77bad11bfd8ad06d4e1daa0b7e0051->enter($__internal_d9a95973b9600da5ae2e01bf6bbdaba9aa77bad11bfd8ad06d4e1daa0b7e0051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9a95973b9600da5ae2e01bf6bbdaba9aa77bad11bfd8ad06d4e1daa0b7e0051->leave($__internal_d9a95973b9600da5ae2e01bf6bbdaba9aa77bad11bfd8ad06d4e1daa0b7e0051_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66ea500940eaca7649f6e83a4a07ccb9d94ca21d4998d1c268a813e81c85e7a0 = $this->env->getExtension("native_profiler");
        $__internal_66ea500940eaca7649f6e83a4a07ccb9d94ca21d4998d1c268a813e81c85e7a0->enter($__internal_66ea500940eaca7649f6e83a4a07ccb9d94ca21d4998d1c268a813e81c85e7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66ea500940eaca7649f6e83a4a07ccb9d94ca21d4998d1c268a813e81c85e7a0->leave($__internal_66ea500940eaca7649f6e83a4a07ccb9d94ca21d4998d1c268a813e81c85e7a0_prof);

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
