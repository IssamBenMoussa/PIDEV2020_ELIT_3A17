<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_73dedfe95dea80c2d7cf9a9c5b66c91fc1a6b673da6ce3f8b441a050876f13e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "

";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
 ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<div class=\"content-error\">
    <div class=\"hpanel\">
        <div class=\"panel-body\">
            <form action=\"#\" id=\"loginForm\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <label>Username</label>
                        <input class=\"form-control\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", [], "FOSUserBundle")]]);
        echo "
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>Password</label>
                        <input type=\"password\" class=\"form-control\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>Repeat Password</label>
                        <input type=\"password\" class=\"form-control\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>Email Address</label>
                        <input class=\"form-control\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                    </div> </div>
                <div class=\"text-center\">
                    <div>
                        <input class=\"btn btn-custon-four btn-primary\" type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  93 => 36,  86 => 32,  82 => 31,  73 => 25,  64 => 19,  56 => 14,  44 => 5,  40 => 4,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}


{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
 {{ form_widget(form) }}
<div class=\"content-error\">
    <div class=\"hpanel\">
        <div class=\"panel-body\">
            <form action=\"#\" id=\"loginForm\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <label>Username</label>
                        <input class=\"form-control\">
                        {{ form_widget(form.username, { 'attr': {'class': 'form-control', 'placeholder': 'username'|trans } }) }}
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>Password</label>
                        <input type=\"password\" class=\"form-control\">
                        {{ form_widget(form.plainPassword, { 'attr': {'class': 'form-control'} }) }}

                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>Repeat Password</label>
                        <input type=\"password\" class=\"form-control\">
                        {{ form_widget(form.plainPassword, { 'attr': {'class': 'form-control'} }) }}

                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>Email Address</label>
                        <input class=\"form-control\">
                        {{ form_widget(form.email, { 'attr': {'class': 'form-control' } }) }}
                        {{ form_rest(form) }}
                    </div> </div>
                <div class=\"text-center\">
                    <div>
                        <input class=\"btn btn-custon-four btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
                    </div>
                    {{ form_end(form) }}
                </div>", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\PIDEV2020_ELIT_3A17\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
