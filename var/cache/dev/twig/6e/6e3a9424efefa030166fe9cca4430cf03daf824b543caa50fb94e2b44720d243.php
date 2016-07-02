<?php

/* base.html.twig */
class __TwigTemplate_ca84b7d959ae01b91e77d83a4a0b58de72bdc43121e593167dce7dfd0698ee94 extends Twig_Template
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
        $__internal_bde714f6f8485202839fc84d6074f95340c44c34d4bc11d01052dcb0bc373776 = $this->env->getExtension("native_profiler");
        $__internal_bde714f6f8485202839fc84d6074f95340c44c34d4bc11d01052dcb0bc373776->enter($__internal_bde714f6f8485202839fc84d6074f95340c44c34d4bc11d01052dcb0bc373776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        <!-- Bootstrap -->    
         <link rel=\"stylesheet\" type=\"text/css\" href=\"/resources/bootstrap/css/bootstrap.css\">
        
    </head>
    <body>
    <div class=\"container\">
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </div>
    </body>
</html>
";
        
        $__internal_bde714f6f8485202839fc84d6074f95340c44c34d4bc11d01052dcb0bc373776->leave($__internal_bde714f6f8485202839fc84d6074f95340c44c34d4bc11d01052dcb0bc373776_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87468cdbc0ab3b340713031d183930d8cd7e7feb24730ade3b010b1050a9696e = $this->env->getExtension("native_profiler");
        $__internal_87468cdbc0ab3b340713031d183930d8cd7e7feb24730ade3b010b1050a9696e->enter($__internal_87468cdbc0ab3b340713031d183930d8cd7e7feb24730ade3b010b1050a9696e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87468cdbc0ab3b340713031d183930d8cd7e7feb24730ade3b010b1050a9696e->leave($__internal_87468cdbc0ab3b340713031d183930d8cd7e7feb24730ade3b010b1050a9696e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b03958506913cf09b55c192ddaccd90dc5c7b7e8c9aa2af6b58d6dd9fc731047 = $this->env->getExtension("native_profiler");
        $__internal_b03958506913cf09b55c192ddaccd90dc5c7b7e8c9aa2af6b58d6dd9fc731047->enter($__internal_b03958506913cf09b55c192ddaccd90dc5c7b7e8c9aa2af6b58d6dd9fc731047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b03958506913cf09b55c192ddaccd90dc5c7b7e8c9aa2af6b58d6dd9fc731047->leave($__internal_b03958506913cf09b55c192ddaccd90dc5c7b7e8c9aa2af6b58d6dd9fc731047_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_97a6ec1ab732a7bdee054acc1895c1a3ac00c6e31df5f5f1a52d66f42acb4bb8 = $this->env->getExtension("native_profiler");
        $__internal_97a6ec1ab732a7bdee054acc1895c1a3ac00c6e31df5f5f1a52d66f42acb4bb8->enter($__internal_97a6ec1ab732a7bdee054acc1895c1a3ac00c6e31df5f5f1a52d66f42acb4bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97a6ec1ab732a7bdee054acc1895c1a3ac00c6e31df5f5f1a52d66f42acb4bb8->leave($__internal_97a6ec1ab732a7bdee054acc1895c1a3ac00c6e31df5f5f1a52d66f42acb4bb8_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc5cbf777c243f047ca21934a8f661870b847233402407ff45fb6c10cf1f9ede = $this->env->getExtension("native_profiler");
        $__internal_dc5cbf777c243f047ca21934a8f661870b847233402407ff45fb6c10cf1f9ede->enter($__internal_dc5cbf777c243f047ca21934a8f661870b847233402407ff45fb6c10cf1f9ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc5cbf777c243f047ca21934a8f661870b847233402407ff45fb6c10cf1f9ede->leave($__internal_dc5cbf777c243f047ca21934a8f661870b847233402407ff45fb6c10cf1f9ede_prof);

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
        return array (  99 => 16,  88 => 15,  77 => 6,  65 => 5,  55 => 17,  52 => 16,  50 => 15,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*         <!-- Bootstrap -->    */
/*          <link rel="stylesheet" type="text/css" href="/resources/bootstrap/css/bootstrap.css">*/
/*         */
/*     </head>*/
/*     <body>*/
/*     <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </div>*/
/*     </body>*/
/* </html>*/
/* */
