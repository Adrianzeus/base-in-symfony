<?php

/* user/new.html.twig */
class __TwigTemplate_d359301f89f7fe0aea2275689a9e355c72a1c8c4699f7c60d042216f5cb17ed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_e79395f747e824edee91f186c80b87667aaca83e5e5f5ab9b253c8bb9d28bf31 = $this->env->getExtension("native_profiler");
        $__internal_e79395f747e824edee91f186c80b87667aaca83e5e5f5ab9b253c8bb9d28bf31->enter($__internal_e79395f747e824edee91f186c80b87667aaca83e5e5f5ab9b253c8bb9d28bf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e79395f747e824edee91f186c80b87667aaca83e5e5f5ab9b253c8bb9d28bf31->leave($__internal_e79395f747e824edee91f186c80b87667aaca83e5e5f5ab9b253c8bb9d28bf31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_029b86f82ee7dcfd4050e305485bcfa73416ec9603c0c2d5720fd6b5db2bae63 = $this->env->getExtension("native_profiler");
        $__internal_029b86f82ee7dcfd4050e305485bcfa73416ec9603c0c2d5720fd6b5db2bae63->enter($__internal_029b86f82ee7dcfd4050e305485bcfa73416ec9603c0c2d5720fd6b5db2bae63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userName", array()), 'widget');
        echo "

    
    ";
        // line 12
        echo "    <ul class=\"tags\" data-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresses", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">

    </ul>

        <input type=\"submit\" value=\"Create\" />
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>

    <script>

        var \$collectionHolder;

        // setup an \"add a tag\" link
        var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Add a tag</a>');
        var \$newLinkLi = \$('<li></li>').append(\$addTagLink);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder = \$('ul.tags');

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

            \$addTagLink.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm(\$collectionHolder, \$newLinkLi);
            });
        });

        function addTagForm(\$collectionHolder, \$newLinkLi) {
            // Get the data-prototype explained earlier
            var prototype = \$collectionHolder.data('prototype');

            // get the new index
            var index = \$collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            \$collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a tag\" link li
            var \$newFormLi = \$('<li></li>').append(newForm);
            \$newLinkLi.before(\$newFormLi);
        }




    </script>

";
        
        $__internal_029b86f82ee7dcfd4050e305485bcfa73416ec9603c0c2d5720fd6b5db2bae63->leave($__internal_029b86f82ee7dcfd4050e305485bcfa73416ec9603c0c2d5720fd6b5db2bae63_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  64 => 17,  55 => 12,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*     {{ form_widget(form.userName) }}*/
/* */
/*     */
/*     {#{{ form_widget(form.address.vars.prototype)|e('html_attr') }}#}*/
/*     <ul class="tags" data-prototype="{{ form_widget(form.addresses.vars.prototype)|e('html_attr') }}">*/
/* */
/*     </ul>*/
/* */
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <script>*/
/* */
/*         var $collectionHolder;*/
/* */
/*         // setup an "add a tag" link*/
/*         var $addTagLink = $('<a href="#" class="add_tag_link">Add a tag</a>');*/
/*         var $newLinkLi = $('<li></li>').append($addTagLink);*/
/* */
/*         jQuery(document).ready(function() {*/
/*             // Get the ul that holds the collection of tags*/
/*             $collectionHolder = $('ul.tags');*/
/* */
/*             // add the "add a tag" anchor and li to the tags ul*/
/*             $collectionHolder.append($newLinkLi);*/
/* */
/*             // count the current form inputs we have (e.g. 2), use that as the new*/
/*             // index when inserting a new item (e.g. 2)*/
/*             $collectionHolder.data('index', $collectionHolder.find(':input').length);*/
/* */
/*             $addTagLink.on('click', function(e) {*/
/*                 // prevent the link from creating a "#" on the URL*/
/*                 e.preventDefault();*/
/* */
/*                 // add a new tag form (see next code block)*/
/*                 addTagForm($collectionHolder, $newLinkLi);*/
/*             });*/
/*         });*/
/* */
/*         function addTagForm($collectionHolder, $newLinkLi) {*/
/*             // Get the data-prototype explained earlier*/
/*             var prototype = $collectionHolder.data('prototype');*/
/* */
/*             // get the new index*/
/*             var index = $collectionHolder.data('index');*/
/* */
/*             // Replace '__name__' in the prototype's HTML to*/
/*             // instead be a number based on how many items we have*/
/*             var newForm = prototype.replace(/__name__/g, index);*/
/* */
/*             // increase the index with one for the next item*/
/*             $collectionHolder.data('index', index + 1);*/
/* */
/*             // Display the form in the page in an li, before the "Add a tag" link li*/
/*             var $newFormLi = $('<li></li>').append(newForm);*/
/*             $newLinkLi.before($newFormLi);*/
/*         }*/
/* */
/* */
/* */
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
