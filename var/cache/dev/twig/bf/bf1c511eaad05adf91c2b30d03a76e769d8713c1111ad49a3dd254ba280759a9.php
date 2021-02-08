<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* addressbook/index.html.twig */
class __TwigTemplate_a0d9f9e23cdbc3e358a2b7c6a1b91edd115fddfbee9a0e62d7df41913b7c75b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addressbook/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addressbook/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "addressbook/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AddressbookController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <!-- ===========================================================================-->
\t <nav class=\"bg-gray-100 pt-4 rounded-sm mx-auto border-b border-green-500\">
\t \t<div class=\" flex justify-center mx-auto list-reset flex boder-b border-green-500 \">
\t\t  <div class=\"-mb-px \">
\t\t    <a 
\t\t    class=\"bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold\" \t\t    
\t\t    href=\"/\">
\t\t\tRegistration Form</a> 
\t\t  </div>
\t\t  <div class=\" -mb-px mr-1 border-b\">
\t\t    <a 
\t\t    class=\"mx-auto bg-white inline-block  border-l border-t border-r  border-green-500 rounded-t py-2 px-4 text-blue-dark font-semibold\" 
\t\t     href=\"/addressbook\">
\t\t    Addressbook</a> 
\t\t  </div>
\t
\t\t</div>
\t</nav> 
<!-- ===========================================================================-->\t

<div class=\"pt-2 px-2 shadow overflow-hidden sm:rounded-md bg-grey-100 flex flex-col\"> 
\t \t<h1 class=\"py-4 mx-auto text-xl text-center text-gray-900 font-semibold\">
\t \t Addressbook </h1> 
\t \t <p class=\"text-center text-sm leading-tight text-gray-500\"> You can filter the address based on the criteria written on the fields. For example if you want to filter the address book by name then just type the naeme in the name</p>
\t <div class=\"flex flex-col sm:flex-row sm:space-x-1 justify-center item-center py-2 \">
        <input class=\"w-full sm:w-48 border border-gray-300 p-2 border border-green-400 border-opacity-20\" type=\"text\" v-model=\"filterCriteria.name\" placeholder=\"Search by name\"/>
        <!-- next-->
        <input class=\"w-full sm:w-48 border border-gray-300 p-2 border border-green-400 border-opacity-20\" type=\"text\" v-model=\"filterCriteria.zip\" placeholder=\"Search by postal code\"/>
\t\t<!-- next-->
        <input class=\"w-full sm:w-48 border border-gray-300 p-2 border border-green-400 border-opacity-20\" type=\"text\" v-model=\"filterCriteria.city\" placeholder=\"Search by city\"/>              
\t </div>\t 
</div>  

  <addressbook  
  :zip  =\"filterCriteria.zip\" 
  :city =\"filterCriteria.city\" 
  :name =\"filterCriteria.name\" 
  v-bind:addresses=\"";
        // line 43
        echo twig_escape_filter($this->env, json_encode((isset($context["addressbook"]) || array_key_exists("addressbook", $context) ? $context["addressbook"] : (function () { throw new RuntimeError('Variable "addressbook" does not exist.', 43, $this->source); })())), "html", null, true);
        echo "\"
  > 

  </addressbook> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "addressbook/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AddressbookController!{% endblock %}

{% block body %}
  <!-- ===========================================================================-->
\t <nav class=\"bg-gray-100 pt-4 rounded-sm mx-auto border-b border-green-500\">
\t \t<div class=\" flex justify-center mx-auto list-reset flex boder-b border-green-500 \">
\t\t  <div class=\"-mb-px \">
\t\t    <a 
\t\t    class=\"bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold\" \t\t    
\t\t    href=\"/\">
\t\t\tRegistration Form</a> 
\t\t  </div>
\t\t  <div class=\" -mb-px mr-1 border-b\">
\t\t    <a 
\t\t    class=\"mx-auto bg-white inline-block  border-l border-t border-r  border-green-500 rounded-t py-2 px-4 text-blue-dark font-semibold\" 
\t\t     href=\"/addressbook\">
\t\t    Addressbook</a> 
\t\t  </div>
\t
\t\t</div>
\t</nav> 
<!-- ===========================================================================-->\t

<div class=\"pt-2 px-2 shadow overflow-hidden sm:rounded-md bg-grey-100 flex flex-col\"> 
\t \t<h1 class=\"py-4 mx-auto text-xl text-center text-gray-900 font-semibold\">
\t \t Addressbook </h1> 
\t \t <p class=\"text-center text-sm leading-tight text-gray-500\"> You can filter the address based on the criteria written on the fields. For example if you want to filter the address book by name then just type the naeme in the name</p>
\t <div class=\"flex flex-col sm:flex-row sm:space-x-1 justify-center item-center py-2 \">
        <input class=\"w-full sm:w-48 border border-gray-300 p-2 border border-green-400 border-opacity-20\" type=\"text\" v-model=\"filterCriteria.name\" placeholder=\"Search by name\"/>
        <!-- next-->
        <input class=\"w-full sm:w-48 border border-gray-300 p-2 border border-green-400 border-opacity-20\" type=\"text\" v-model=\"filterCriteria.zip\" placeholder=\"Search by postal code\"/>
\t\t<!-- next-->
        <input class=\"w-full sm:w-48 border border-gray-300 p-2 border border-green-400 border-opacity-20\" type=\"text\" v-model=\"filterCriteria.city\" placeholder=\"Search by city\"/>              
\t </div>\t 
</div>  

  <addressbook  
  :zip  =\"filterCriteria.zip\" 
  :city =\"filterCriteria.city\" 
  :name =\"filterCriteria.name\" 
  v-bind:addresses=\"{{ addressbook|json_encode  }}\"
  > 

  </addressbook> 
{% endblock %}
", "addressbook/index.html.twig", "C:\\xampp\\htdocs\\php\\addressbook\\upload\\templates\\addressbook\\index.html.twig");
    }
}
