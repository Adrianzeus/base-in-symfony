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
        $__internal_7cbe40ce0f34a2f3687060f52b638bbe1004497b1f260c551326710d9cda6010 = $this->env->getExtension("native_profiler");
        $__internal_7cbe40ce0f34a2f3687060f52b638bbe1004497b1f260c551326710d9cda6010->enter($__internal_7cbe40ce0f34a2f3687060f52b638bbe1004497b1f260c551326710d9cda6010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <script src=\"/resources/js/jquery-3.0.0.min.js\"></script>
        
    </head>
    <body>
    
    <div class=\"container\">
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </div>

    </body>
</html>
";
        
        $__internal_7cbe40ce0f34a2f3687060f52b638bbe1004497b1f260c551326710d9cda6010->leave($__internal_7cbe40ce0f34a2f3687060f52b638bbe1004497b1f260c551326710d9cda6010_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dac7855acc07f4ed20f93a70a966ff3f71f7be3ce2713ca6ed8fe5fde7bc09e = $this->env->getExtension("native_profiler");
        $__internal_9dac7855acc07f4ed20f93a70a966ff3f71f7be3ce2713ca6ed8fe5fde7bc09e->enter($__internal_9dac7855acc07f4ed20f93a70a966ff3f71f7be3ce2713ca6ed8fe5fde7bc09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9dac7855acc07f4ed20f93a70a966ff3f71f7be3ce2713ca6ed8fe5fde7bc09e->leave($__internal_9dac7855acc07f4ed20f93a70a966ff3f71f7be3ce2713ca6ed8fe5fde7bc09e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b820beb280c8b0f06dced239f964d6bb8da71e2a777e6945a20fcf9bc92cb64a = $this->env->getExtension("native_profiler");
        $__internal_b820beb280c8b0f06dced239f964d6bb8da71e2a777e6945a20fcf9bc92cb64a->enter($__internal_b820beb280c8b0f06dced239f964d6bb8da71e2a777e6945a20fcf9bc92cb64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b820beb280c8b0f06dced239f964d6bb8da71e2a777e6945a20fcf9bc92cb64a->leave($__internal_b820beb280c8b0f06dced239f964d6bb8da71e2a777e6945a20fcf9bc92cb64a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_7970904612621e7af274eaf5c94e0eb1a369bc7c05c86f29337a5fec8e8b8c30 = $this->env->getExtension("native_profiler");
        $__internal_7970904612621e7af274eaf5c94e0eb1a369bc7c05c86f29337a5fec8e8b8c30->enter($__internal_7970904612621e7af274eaf5c94e0eb1a369bc7c05c86f29337a5fec8e8b8c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7970904612621e7af274eaf5c94e0eb1a369bc7c05c86f29337a5fec8e8b8c30->leave($__internal_7970904612621e7af274eaf5c94e0eb1a369bc7c05c86f29337a5fec8e8b8c30_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c34a4d40a49f54d3ee26d83be66b346999cb9587d82a692bb0ca42de94047ee8 = $this->env->getExtension("native_profiler");
        $__internal_c34a4d40a49f54d3ee26d83be66b346999cb9587d82a692bb0ca42de94047ee8->enter($__internal_c34a4d40a49f54d3ee26d83be66b346999cb9587d82a692bb0ca42de94047ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c34a4d40a49f54d3ee26d83be66b346999cb9587d82a692bb0ca42de94047ee8->leave($__internal_c34a4d40a49f54d3ee26d83be66b346999cb9587d82a692bb0ca42de94047ee8_prof);

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
        return array (  101 => 17,  90 => 16,  79 => 6,  67 => 5,  56 => 18,  53 => 17,  51 => 16,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <!-- Bootstrap -->    */
/*          <link rel="stylesheet" type="text/css" href="/resources/bootstrap/css/bootstrap.css">*/
/*         <script src="/resources/js/jquery-3.0.0.min.js"></script>*/
/*         */
/*     </head>*/
/*     <body>*/
/*     */
/*     <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
