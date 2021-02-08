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

/* home/index.html.twig */
class __TwigTemplate_c3342bdfd2053a262f190fac29839be6b15a8c449c25a86a43d812419b74188b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "AddressbookController! ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "     <!-- ===========================================================================-->
\t <nav class=\"bg-gray-100 pt-4 rounded-sm mx-auto border-b border-green-500\">
\t \t<div class=\" flex justify-center mx-auto list-reset flex boder-b border-green-500 \">
\t\t  <div class=\"-mb-px  border-b \">
\t\t    <a class=\"mx-auto bg-white inline-block  border-l border-t border-r  border-green-500 rounded-t py-2 px-4 text-blue-dark font-semibold\" 
\t\t    href=\"/\">
\t\t\tRegistration Form</a>
\t\t  </div>
\t\t  <div class=\"mr-1\">
\t\t    <a class=\"bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold\" 
\t\t    href=\"/addressbook\">
\t\t    Addressbook</a>
\t\t  </div>
\t
\t\t</div>
\t</nav>
<!-- ===========================================================================-->\t
<div class=\" shadow overflow-hidden sm:rounded-md bg-grey-100 min-h-screen flex flex-col\">
    <div class=\"container max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2\">
        <div class=\"bg-gray-100  px-6 py-8 rounded shadow-md text-black w-full\">
        \t<h1 class=\"mb-8 text-xl text-center text-gray-800 font-medium\">Registration From</h1>
\t   <form action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("do-upload");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<!-- ========================================================================= -->
\t\t<div class=\"mb-4\">
\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"firstName\">
\t\t\t\t\t\tFirst Name
\t\t\t</label>
\t\t\t<input 
                type=\"text\"
                id=\"firstname\" name=\"firstname\"
                class=\"block border border-gray-100 w-full p-4 rounded mb-4 
\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  block w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
                placeholder=\"First Name\"  required/>
\t\t </div>\t
\t\t<!-- ===============================================-->
\t\t<div class=\"mb-4\">
\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"lastName\">
\t\t\t\tLast Name
\t\t\t</label>
\t\t\t<input 
                type=\"text\"
                id=\"lastname\" name=\"lastname\"
                class=\"block border border-grey-light w-full p-4 rounded mb-4 
\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  block w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
                placeholder=\"Last Name\" required />
\t\t\t</div>
\t\t<!-- ========================================================================= -->
\t\t<div class=\"mb-4\">
\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"firstName\">
\t\t\t\tPhone Number
\t\t\t</label>
\t\t\t<input 
                type=\"text\"
                id=\"phonenumber\" name=\"phonenumber\"
                class=\"block border border-gray-100 w-full p-4 rounded mb-4 
\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  block w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
                placeholder=\"Phone number\"  required/>
\t\t </div>\t
\t\t\t\t
\t\t<!--=========================================================================-->
\t\t\t\t\t\t<div class=\"grid grid-cols-12 gap-2 mb-4\">
\t\t\t\t\t\t\t<div class=\"col-span-7 sm:col-span-7 \">
\t\t\t\t\t\t\t<label for=\"Zip\" class=\"px-1 block text-sm font-medium text-gray-700\">
\t\t\t\t\t\t\tStreet address 
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\t\tid=\"street\" name=\"street\" 
\t\t\t\t\t\t\tclass=\"mt-2 p-4 focus:ring-indigo-500 focus:border-green-500  block w-full 
\t\t\t\t\t\t\tshadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t\t placeholder=\"Street address \" required
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t \t<!--=========================================================================-->
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t<div class=\"col-span-5 sm:col-span-5 \">
\t\t\t\t\t\t\t<label for=\"hausnumber\" 
\t\t\t\t\t\t\tclass=\"px-1 block text-sm md:font-medium text-gray-700 line-height\">
\t\t\t\t\t\t\tHouse number
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input type=\"text\" 
\t\t\t\t\t\t\tname=\"housenumber\" id=\"housenumber\" 
\t\t\t\t\t\t\tautocomplete=\"postal-code\" 
\t\t\t\t\t\t\tclass=\"mt-2 p-4 focus:ring-indigo-500 focus:border-green-500  block w-full 
\t\t\t\t\t\t\tshadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t\t placeholder=\"Number\" required
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t\t</div>
\t\t\t\t\t<!--=========================================================================-->
\t\t\t\t\t<div class=\"grid grid-cols-12 gap-2 mb-4\">
\t\t\t\t\t\t<div class=\"col-span-4 sm:col-span-4 \">
\t\t\t\t\t\t<label for=\"postal_code\" 
\t\t\t\t\t\tclass=\"px-1 block text-sm font-medium text-gray-700\">Zip code</label>
\t\t\t\t\t\t<input 
\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\tname=\"postal_code\" id=\"postal_code\" 
\t\t\t\t\t\tautocomplete=\"postal-code\" 
\t\t\t\t\t\tclass=\"mt-2 p-4 focus:ring-indigo-500 focus:border-green-500  
\t\t\t\t\t\tblock w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t placeholder=\"Postal code\" 
\t\t\t\t\t\trequired />
\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"col-span-8 sm:col-span-8 \">
\t\t\t\t\t\t<label for=\"Zip\" class=\"px-1 block text-sm font-medium text-gray-700\">
\t\t\t\t\t\tCity
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input 
\t\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\t\tid=\"city\" name=\"city\"  
\t\t\t\t\t\t\tclass=\"mt-2 p-4 focus:ring-indigo-500 focus:border-green-500  
\t\t\t\t\t\t\tblock w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t\t placeholder=\"City \" 
\t\t\t\t\t\t\trequired 
\t\t\t\t\t\t/>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t <!--=========================================================================-->
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" 
\t\t\t\t\tfor=\"country\">
\t\t\t\t\t\tCountry
\t\t\t\t\t</label>
\t\t\t\t\t<input 
                        type=\"text\"
\t\t\t\t\t\tid=\"country\" name=\"country\"                        
                       class=\"block border border-grey-light w-full p-4 rounded mb-4 
\t\t\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  
\t\t\t\t\t\tblock w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
                        placeholder=\"Country \" required />
\t\t\t\t\t</div>
\t\t\t\t   \t<!--=========================================================================-->
\t\t\t\t\t
\t\t\t\t\t\t   <div class=\"mb-4\">
\t\t\t\t\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2\" for=\"Date\">
\t\t\t\t\t\t\t\tBirthday 
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t type=\"date\" placeholder=\" Birthday\"
\t\t\t\t\t\t\t  id=\"birthday\" name=\"birthday\"\t
\t\t\t\t\t\t\t  class=\"shadow appearance-none border rounded w-full  p-4 mb-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\"
\t\t\t\t\t\t\t    required />
\t\t\t\t\t\t</div>
\t\t\t\t\t<!--=========================================================================-->
\t\t\t  
                    <div class=\"mb-4\">
\t\t\t\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"email\">
\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t</label><input 
\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\tid=\"email\" name=\"email\"
\t\t\t\t\t\t\tclass=\"block border border-grey-light w-full p-4 rounded mb-4 
\t\t\t\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  
\t\t\t\t\t\t\tblock w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\tplaceholder=\"Email\" />

\t\t\t\t\t</div> 
\t\t\t\t\t<!--=========================================================================-->\t\t \t\t\t
\t\t\t\t\t \t
\t   \t<!-- ========================================================================= -->
\t\t\t <div class=\"mb-4 border border-gray-300 px-1 py-2\">
\t\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"email\">
\t\t\t\t\t\t\tPicture Upload
\t\t\t\t</label>
\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("upload"), "html", null, true);
        echo "\" />
\t\t        <div>
\t\t            <!-- <label for=\"myfile\">File to upload:</label> -->
\t\t            <input 
\t\t            type=\"file\" 
\t\t            name=\"myfile\" id=\"myfile\" 
\t\t            class=\"mb-2 border border-green-50 w-full\"
\t\t              >
\t\t        </div>

\t        </div>
       <!-- ========================================================================= -->
\t\t  <button type=\"submit\"
\t\t   class=\"w-full text-center py-4 rounded bg-green-400 
\t\t\t\t\t\ttext-white hover:bg-green-dark focus:outline-none my-1\"
\t\t\t\t\t\t>Add to Address book</button> 

\t\t<!-- ========================================================================= -->
\t\t 
  \t</form>

</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 172,  111 => 28,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AddressbookController! {% endblock %}
 

{% block body %}
     <!-- ===========================================================================-->
\t <nav class=\"bg-gray-100 pt-4 rounded-sm mx-auto border-b border-green-500\">
\t \t<div class=\" flex justify-center mx-auto list-reset flex boder-b border-green-500 \">
\t\t  <div class=\"-mb-px  border-b \">
\t\t    <a class=\"mx-auto bg-white inline-block  border-l border-t border-r  border-green-500 rounded-t py-2 px-4 text-blue-dark font-semibold\" 
\t\t    href=\"/\">
\t\t\tRegistration Form</a>
\t\t  </div>
\t\t  <div class=\"mr-1\">
\t\t    <a class=\"bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold\" 
\t\t    href=\"/addressbook\">
\t\t    Addressbook</a>
\t\t  </div>
\t
\t\t</div>
\t</nav>
<!-- ===========================================================================-->\t
<div class=\" shadow overflow-hidden sm:rounded-md bg-grey-100 min-h-screen flex flex-col\">
    <div class=\"container max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2\">
        <div class=\"bg-gray-100  px-6 py-8 rounded shadow-md text-black w-full\">
        \t<h1 class=\"mb-8 text-xl text-center text-gray-800 font-medium\">Registration From</h1>
\t   <form action=\"{{ path('do-upload') }}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<!-- ========================================================================= -->
\t\t<div class=\"mb-4\">
\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"firstName\">
\t\t\t\t\t\tFirst Name
\t\t\t</label>
\t\t\t<input 
                type=\"text\"
                id=\"firstname\" name=\"firstname\"
                class=\"block border border-gray-100 w-full p-4 rounded mb-4 
\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  block w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
                placeholder=\"First Name\"  required/>
\t\t </div>\t
\t\t<!-- ===============================================-->
\t\t<div class=\"mb-4\">
\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"lastName\">
\t\t\t\tLast Name
\t\t\t</label>
\t\t\t<input 
                type=\"text\"
                id=\"lastname\" name=\"lastname\"
                class=\"block border border-grey-light w-full p-4 rounded mb-4 
\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  block w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
                placeholder=\"Last Name\" required />
\t\t\t</div>
\t\t<!-- ========================================================================= -->
\t\t<div class=\"mb-4\">
\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"firstName\">
\t\t\t\tPhone Number
\t\t\t</label>
\t\t\t<input 
                type=\"text\"
                id=\"phonenumber\" name=\"phonenumber\"
                class=\"block border border-gray-100 w-full p-4 rounded mb-4 
\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  block w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
                placeholder=\"Phone number\"  required/>
\t\t </div>\t
\t\t\t\t
\t\t<!--=========================================================================-->
\t\t\t\t\t\t<div class=\"grid grid-cols-12 gap-2 mb-4\">
\t\t\t\t\t\t\t<div class=\"col-span-7 sm:col-span-7 \">
\t\t\t\t\t\t\t<label for=\"Zip\" class=\"px-1 block text-sm font-medium text-gray-700\">
\t\t\t\t\t\t\tStreet address 
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\t\tid=\"street\" name=\"street\" 
\t\t\t\t\t\t\tclass=\"mt-2 p-4 focus:ring-indigo-500 focus:border-green-500  block w-full 
\t\t\t\t\t\t\tshadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t\t placeholder=\"Street address \" required
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t \t<!--=========================================================================-->
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t<div class=\"col-span-5 sm:col-span-5 \">
\t\t\t\t\t\t\t<label for=\"hausnumber\" 
\t\t\t\t\t\t\tclass=\"px-1 block text-sm md:font-medium text-gray-700 line-height\">
\t\t\t\t\t\t\tHouse number
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input type=\"text\" 
\t\t\t\t\t\t\tname=\"housenumber\" id=\"housenumber\" 
\t\t\t\t\t\t\tautocomplete=\"postal-code\" 
\t\t\t\t\t\t\tclass=\"mt-2 p-4 focus:ring-indigo-500 focus:border-green-500  block w-full 
\t\t\t\t\t\t\tshadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t\t placeholder=\"Number\" required
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t\t</div>
\t\t\t\t\t<!--=========================================================================-->
\t\t\t\t\t<div class=\"grid grid-cols-12 gap-2 mb-4\">
\t\t\t\t\t\t<div class=\"col-span-4 sm:col-span-4 \">
\t\t\t\t\t\t<label for=\"postal_code\" 
\t\t\t\t\t\tclass=\"px-1 block text-sm font-medium text-gray-700\">Zip code</label>
\t\t\t\t\t\t<input 
\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\tname=\"postal_code\" id=\"postal_code\" 
\t\t\t\t\t\tautocomplete=\"postal-code\" 
\t\t\t\t\t\tclass=\"mt-2 p-4 focus:ring-indigo-500 focus:border-green-500  
\t\t\t\t\t\tblock w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t placeholder=\"Postal code\" 
\t\t\t\t\t\trequired />
\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"col-span-8 sm:col-span-8 \">
\t\t\t\t\t\t<label for=\"Zip\" class=\"px-1 block text-sm font-medium text-gray-700\">
\t\t\t\t\t\tCity
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input 
\t\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\t\tid=\"city\" name=\"city\"  
\t\t\t\t\t\t\tclass=\"mt-2 p-4 focus:ring-indigo-500 focus:border-green-500  
\t\t\t\t\t\t\tblock w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t\t placeholder=\"City \" 
\t\t\t\t\t\t\trequired 
\t\t\t\t\t\t/>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t <!--=========================================================================-->
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" 
\t\t\t\t\tfor=\"country\">
\t\t\t\t\t\tCountry
\t\t\t\t\t</label>
\t\t\t\t\t<input 
                        type=\"text\"
\t\t\t\t\t\tid=\"country\" name=\"country\"                        
                       class=\"block border border-grey-light w-full p-4 rounded mb-4 
\t\t\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  
\t\t\t\t\t\tblock w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
                        placeholder=\"Country \" required />
\t\t\t\t\t</div>
\t\t\t\t   \t<!--=========================================================================-->
\t\t\t\t\t
\t\t\t\t\t\t   <div class=\"mb-4\">
\t\t\t\t\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2\" for=\"Date\">
\t\t\t\t\t\t\t\tBirthday 
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t type=\"date\" placeholder=\" Birthday\"
\t\t\t\t\t\t\t  id=\"birthday\" name=\"birthday\"\t
\t\t\t\t\t\t\t  class=\"shadow appearance-none border rounded w-full  p-4 mb-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\"
\t\t\t\t\t\t\t    required />
\t\t\t\t\t\t</div>
\t\t\t\t\t<!--=========================================================================-->
\t\t\t  
                    <div class=\"mb-4\">
\t\t\t\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"email\">
\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t</label><input 
\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\tid=\"email\" name=\"email\"
\t\t\t\t\t\t\tclass=\"block border border-grey-light w-full p-4 rounded mb-4 
\t\t\t\t\t\t\tfocus:ring-indigo-500 focus:border-green-500  
\t\t\t\t\t\t\tblock w-full shadow-sm sm:text-sm border-green-100   rounded-md\"
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\tplaceholder=\"Email\" />

\t\t\t\t\t</div> 
\t\t\t\t\t<!--=========================================================================-->\t\t \t\t\t
\t\t\t\t\t \t
\t   \t<!-- ========================================================================= -->
\t\t\t <div class=\"mb-4 border border-gray-300 px-1 py-2\">
\t\t\t\t<label class=\"block text-gray-700 text-sm font-bold mb-2 px-1\" for=\"email\">
\t\t\t\t\t\t\tPicture Upload
\t\t\t\t</label>
\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('upload') }}\" />
\t\t        <div>
\t\t            <!-- <label for=\"myfile\">File to upload:</label> -->
\t\t            <input 
\t\t            type=\"file\" 
\t\t            name=\"myfile\" id=\"myfile\" 
\t\t            class=\"mb-2 border border-green-50 w-full\"
\t\t              >
\t\t        </div>

\t        </div>
       <!-- ========================================================================= -->
\t\t  <button type=\"submit\"
\t\t   class=\"w-full text-center py-4 rounded bg-green-400 
\t\t\t\t\t\ttext-white hover:bg-green-dark focus:outline-none my-1\"
\t\t\t\t\t\t>Add to Address book</button> 

\t\t<!-- ========================================================================= -->
\t\t 
  \t</form>

</div>
</div>
{% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\php\\addressbook\\upload\\templates\\home\\index.html.twig");
    }
}
