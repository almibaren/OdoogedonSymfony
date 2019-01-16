<?php

/* odoogedon/login.html.twig */
class __TwigTemplate_af9edeecef0bc55c387c755e61aef8cf9d6937c03f405715de9bce5da41c0fda extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("plantilla.html.twig", "odoogedon/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "plantilla.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "odoogedon/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "odoogedon/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "    <div id=\"contenedor\">
        <form id=\"formulario_login\">
            <div id=\"formulario_login_campos\">
                <fieldset>
                    <legend><h2>Iniciar Sesion</h2></legend>
                    <div id=\"formulario_login_campos_nombre_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_nombre\">Nombre:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_nombre\" name=\"\" type=\"text\" placeholder=\"Nombre\"/>
                    </div>
                    <div id=\"formulario_login_campos_apellido_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_apellido\">Primer Apellido:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_apellido\" name=\"\" type=\"text\" placeholder=\"Primer Apellido\"/>
                    </div>
                    <div id=\"formulario_login_campos_apellido2_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_apellido2\">Segundo Apellido:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_apellido2\" name=\"\" type=\"text\" placeholder=\"Segundo Apellido\"/>
                    </div>
                    <div id=\"formulario_login_campos_contra_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_contra\">Password:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_contra\" name=\"\" type=\"password\" placeholder=\"********\"/>
                    </div>
                    <div id=\"formulario_login_campos_contra2_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_contra2\">Repetir Password:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_contra2\" name=\"\" type=\"password\" placeholder=\"********\"/>
                    </div>
                    <div id=\"formulario_login_campos_boton_div\" class=\"formulario_login_campos_div\">
                        <button type=\"button\" class=\"formulario_login_input\">Entrar</button>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "odoogedon/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantilla.html.twig' %}

{% block title %}Login{% endblock %}

{% block contenido %}
    <div id=\"contenedor\">
        <form id=\"formulario_login\">
            <div id=\"formulario_login_campos\">
                <fieldset>
                    <legend><h2>Iniciar Sesion</h2></legend>
                    <div id=\"formulario_login_campos_nombre_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_nombre\">Nombre:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_nombre\" name=\"\" type=\"text\" placeholder=\"Nombre\"/>
                    </div>
                    <div id=\"formulario_login_campos_apellido_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_apellido\">Primer Apellido:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_apellido\" name=\"\" type=\"text\" placeholder=\"Primer Apellido\"/>
                    </div>
                    <div id=\"formulario_login_campos_apellido2_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_apellido2\">Segundo Apellido:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_apellido2\" name=\"\" type=\"text\" placeholder=\"Segundo Apellido\"/>
                    </div>
                    <div id=\"formulario_login_campos_contra_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_contra\">Password:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_contra\" name=\"\" type=\"password\" placeholder=\"********\"/>
                    </div>
                    <div id=\"formulario_login_campos_contra2_div\" class=\"formulario_login_campos_div\">
                        <label class=\"formulario_login_label\" for=\"formulario_login_campos_contra2\">Repetir Password:</label>
                        <input class=\"formulario_login_input\" id=\"formulario_login_campos_contra2\" name=\"\" type=\"password\" placeholder=\"********\"/>
                    </div>
                    <div id=\"formulario_login_campos_boton_div\" class=\"formulario_login_campos_div\">
                        <button type=\"button\" class=\"formulario_login_input\">Entrar</button>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
{% endblock %}
", "odoogedon/login.html.twig", "/home/almi/proyecto/OdoogedonSymfony/Odoogedon/templates/odoogedon/login.html.twig");
    }
}
