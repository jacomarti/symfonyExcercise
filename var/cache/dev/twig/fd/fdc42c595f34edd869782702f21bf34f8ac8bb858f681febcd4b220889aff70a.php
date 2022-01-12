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

/* send_postcard/index.html.twig */
class __TwigTemplate_a4214031dfcfcc7c91651cfb4fe22cc35827e92312da60cb5e801218fc5f002a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "send_postcard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "send_postcard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Invia una cartolina!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<script>
    function sendPostcard(){
        const postcardEndpoint = \"sendPostcard\";
        let form = new FormData(\$('#sendPostcard')[0]);
        const request = new Request(postcardEndpoint, {method:\"POST\", body:form});
        fetch(request).
            then(response => {
                if(response.status === 200) {
                    response.text().then(function (text){
                        \$(\"#resultSection\").html('<h1> Ecco il risultato:</h1>'+text);
                    });
                } else if (response.status === 500){
                    \$(\"#errorModal\").modal('show');
                }
            });
    };
</script>
<div class=\"container\">
    <div class=\"modal\" tabindex=\"-1\" id=\"errorModal\" data-toggle=\"modal\" data-target=\"#myModal\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\">Errore!</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body\">
            <p>Qualcosa è andato storto, riprovare!</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Chiudi</button>
          </div>
        </div>
      </div>
    </div>

    <h1>Invia la tua cartolina</h1>
    <form id=\"sendPostcard\">
      <div class=\"mb-3\">
        <label for=\"name\" class=\"form-label\">Nome</label>
        <input required type=\"text\" name=\"name\" id=\"name\" placeholder=\"Inserisci qui il nome del destinatario...\" class=\"form-control\">
      </div>
      <div class=\"mb-3\">
        <label for=\"email\" class=\"form-label\">E-mail</label>
        <input required type=\"email\" name=\"email\" id=\"email\" placeholder=\"Inserisci qui l'email del destinatario...\" class=\"form-control\">
      </div>
      <div class=\"mb-3\">
        <libel for=\"message\" class=\"form-label\">Messaggio</label>
        <textarea required name=\"message\" id=\"message\" class=\"form-control\">Inserisci qui il testo del messaggio...</textarea>
      </div>
      <div class=\"mb-3\">
        <label for=\"event\" class=\"form-label\">Evento</label>
        <select required class=\"form-select\" name=\"event\" id=\"event\">
          <option value=\"A\">Anno Nuovo</option>
          <option value=\"B\">Battesimo</option>
          <option value=\"C\">Compleanno</option>
        </select>
      </div>
      <div class=\"mb-3\">
        <button type=\"button\" onclick=\"sendPostcard()\" class=\"btn-primary form-control\">Invia</button>
      </div>
    </form>
    <div id=\"resultSection\">
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "send_postcard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Invia una cartolina!{% endblock %}

{% block body %}
<script>
    function sendPostcard(){
        const postcardEndpoint = \"sendPostcard\";
        let form = new FormData(\$('#sendPostcard')[0]);
        const request = new Request(postcardEndpoint, {method:\"POST\", body:form});
        fetch(request).
            then(response => {
                if(response.status === 200) {
                    response.text().then(function (text){
                        \$(\"#resultSection\").html('<h1> Ecco il risultato:</h1>'+text);
                    });
                } else if (response.status === 500){
                    \$(\"#errorModal\").modal('show');
                }
            });
    };
</script>
<div class=\"container\">
    <div class=\"modal\" tabindex=\"-1\" id=\"errorModal\" data-toggle=\"modal\" data-target=\"#myModal\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\">Errore!</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body\">
            <p>Qualcosa è andato storto, riprovare!</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Chiudi</button>
          </div>
        </div>
      </div>
    </div>

    <h1>Invia la tua cartolina</h1>
    <form id=\"sendPostcard\">
      <div class=\"mb-3\">
        <label for=\"name\" class=\"form-label\">Nome</label>
        <input required type=\"text\" name=\"name\" id=\"name\" placeholder=\"Inserisci qui il nome del destinatario...\" class=\"form-control\">
      </div>
      <div class=\"mb-3\">
        <label for=\"email\" class=\"form-label\">E-mail</label>
        <input required type=\"email\" name=\"email\" id=\"email\" placeholder=\"Inserisci qui l'email del destinatario...\" class=\"form-control\">
      </div>
      <div class=\"mb-3\">
        <libel for=\"message\" class=\"form-label\">Messaggio</label>
        <textarea required name=\"message\" id=\"message\" class=\"form-control\">Inserisci qui il testo del messaggio...</textarea>
      </div>
      <div class=\"mb-3\">
        <label for=\"event\" class=\"form-label\">Evento</label>
        <select required class=\"form-select\" name=\"event\" id=\"event\">
          <option value=\"A\">Anno Nuovo</option>
          <option value=\"B\">Battesimo</option>
          <option value=\"C\">Compleanno</option>
        </select>
      </div>
      <div class=\"mb-3\">
        <button type=\"button\" onclick=\"sendPostcard()\" class=\"btn-primary form-control\">Invia</button>
      </div>
    </form>
    <div id=\"resultSection\">
    </div>
  </div>
{% endblock %}
", "send_postcard/index.html.twig", "/home/user/Desktop/postcards/symfony/templates/send_postcard/index.html.twig");
    }
}
