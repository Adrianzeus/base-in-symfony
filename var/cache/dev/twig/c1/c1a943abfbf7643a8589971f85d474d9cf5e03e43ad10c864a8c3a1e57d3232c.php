<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f2bba1d81d2207c123e38d2c8d00474f4f60ba67b8786c8ab80496ee2cf193c9 extends Twig_Template
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
        $__internal_94e61a3af1856c646cc6afb0cd8f237a8e86dc362bef6a014b43e08915503392 = $this->env->getExtension("native_profiler");
        $__internal_94e61a3af1856c646cc6afb0cd8f237a8e86dc362bef6a014b43e08915503392->enter($__internal_94e61a3af1856c646cc6afb0cd8f237a8e86dc362bef6a014b43e08915503392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94e61a3af1856c646cc6afb0cd8f237a8e86dc362bef6a014b43e08915503392->leave($__internal_94e61a3af1856c646cc6afb0cd8f237a8e86dc362bef6a014b43e08915503392_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8ec95fd5a8b732a62f5f5f3694e4de65e03fde27508659f7bee0525eae7ea92 = $this->env->getExtension("native_profiler");
        $__internal_d8ec95fd5a8b732a62f5f5f3694e4de65e03fde27508659f7bee0525eae7ea92->enter($__internal_d8ec95fd5a8b732a62f5f5f3694e4de65e03fde27508659f7bee0525eae7ea92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d8ec95fd5a8b732a62f5f5f3694e4de65e03fde27508659f7bee0525eae7ea92->leave($__internal_d8ec95fd5a8b732a62f5f5f3694e4de65e03fde27508659f7bee0525eae7ea92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ee764f5e2d74366aec4dbb20cb2e0752ab705bca8ba029a15f0e6ce9372c39b = $this->env->getExtension("native_profiler");
        $__internal_7ee764f5e2d74366aec4dbb20cb2e0752ab705bca8ba029a15f0e6ce9372c39b->enter($__internal_7ee764f5e2d74366aec4dbb20cb2e0752ab705bca8ba029a15f0e6ce9372c39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ee764f5e2d74366aec4dbb20cb2e0752ab705bca8ba029a15f0e6ce9372c39b->leave($__internal_7ee764f5e2d74366aec4dbb20cb2e0752ab705bca8ba029a15f0e6ce9372c39b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_271174b5061222810c05bf494a355eaf559c43edcd13e3c1ed357f5b90af6325 = $this->env->getExtension("native_profiler");
        $__internal_271174b5061222810c05bf494a355eaf559c43edcd13e3c1ed357f5b90af6325->enter($__internal_271174b5061222810c05bf494a355eaf559c43edcd13e3c1ed357f5b90af6325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_271174b5061222810c05bf494a355eaf559c43edcd13e3c1ed357f5b90af6325->leave($__internal_271174b5061222810c05bf494a355eaf559c43edcd13e3c1ed357f5b90af6325_prof);

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
