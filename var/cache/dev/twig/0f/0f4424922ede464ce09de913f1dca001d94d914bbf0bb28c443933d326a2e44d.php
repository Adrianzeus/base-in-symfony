<?php

/* AvBundle:Default:index.html.twig */
class __TwigTemplate_57b9776c2663b205fe0cc3fdbef0f1e627cd364b0ca7b25739eb693d0948e0f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AvBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86964987348d5130940777d9b9d98531b2a2ab7a658a40d494d13818f8364195 = $this->env->getExtension("native_profiler");
        $__internal_86964987348d5130940777d9b9d98531b2a2ab7a658a40d494d13818f8364195->enter($__internal_86964987348d5130940777d9b9d98531b2a2ab7a658a40d494d13818f8364195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86964987348d5130940777d9b9d98531b2a2ab7a658a40d494d13818f8364195->leave($__internal_86964987348d5130940777d9b9d98531b2a2ab7a658a40d494d13818f8364195_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c64e2368afd2d195c9904059bd1d84b80aed572f989280639f7c0eb133de4107 = $this->env->getExtension("native_profiler");
        $__internal_c64e2368afd2d195c9904059bd1d84b80aed572f989280639f7c0eb133de4107->enter($__internal_c64e2368afd2d195c9904059bd1d84b80aed572f989280639f7c0eb133de4107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Hello World!
";
        
        $__internal_c64e2368afd2d195c9904059bd1d84b80aed572f989280639f7c0eb133de4107->leave($__internal_c64e2368afd2d195c9904059bd1d84b80aed572f989280639f7c0eb133de4107_prof);

    }

    public function getTemplateName()
    {
        return "AvBundle:Default:index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* Hello World!*/
/* {% endblock %}*/
/* */
/* */
/* */
