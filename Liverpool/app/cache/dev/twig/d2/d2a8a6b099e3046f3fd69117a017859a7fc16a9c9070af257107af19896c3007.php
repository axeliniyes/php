<?php

/* departamento/edit.html.twig */
class __TwigTemplate_bdc0de60dda36bfe391d05b1f30548b2412213b97d6e1add8d846d9381a17872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "departamento/edit.html.twig", 1);
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
        $__internal_afff2e8a0b257d29989d3d3632876b8ad30e096f3ce5680f01ffb1956385f5f1 = $this->env->getExtension("native_profiler");
        $__internal_afff2e8a0b257d29989d3d3632876b8ad30e096f3ce5680f01ffb1956385f5f1->enter($__internal_afff2e8a0b257d29989d3d3632876b8ad30e096f3ce5680f01ffb1956385f5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departamento/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afff2e8a0b257d29989d3d3632876b8ad30e096f3ce5680f01ffb1956385f5f1->leave($__internal_afff2e8a0b257d29989d3d3632876b8ad30e096f3ce5680f01ffb1956385f5f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a27910243909732da4ee07f99a88972ab6735e6017b8bcab10878696f42b042b = $this->env->getExtension("native_profiler");
        $__internal_a27910243909732da4ee07f99a88972ab6735e6017b8bcab10878696f42b042b->enter($__internal_a27910243909732da4ee07f99a88972ab6735e6017b8bcab10878696f42b042b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Departamento edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("departamento_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a27910243909732da4ee07f99a88972ab6735e6017b8bcab10878696f42b042b->leave($__internal_a27910243909732da4ee07f99a88972ab6735e6017b8bcab10878696f42b042b_prof);

    }

    public function getTemplateName()
    {
        return "departamento/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Departamento edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('departamento_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
