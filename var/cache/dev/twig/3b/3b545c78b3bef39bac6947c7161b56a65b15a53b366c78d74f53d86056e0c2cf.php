<?php

/* base.html.twig */
class __TwigTemplate_870f5de3173239f6280ab7520de389d787ba65f501127aad949287b53d0cb98d extends Twig_Template
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
        $__internal_89f56a0155cf5d2e57fe8d6933f05ce78cd4fb7d2f1f529f2cb2cf76274dd403 = $this->env->getExtension("native_profiler");
        $__internal_89f56a0155cf5d2e57fe8d6933f05ce78cd4fb7d2f1f529f2cb2cf76274dd403->enter($__internal_89f56a0155cf5d2e57fe8d6933f05ce78cd4fb7d2f1f529f2cb2cf76274dd403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_89f56a0155cf5d2e57fe8d6933f05ce78cd4fb7d2f1f529f2cb2cf76274dd403->leave($__internal_89f56a0155cf5d2e57fe8d6933f05ce78cd4fb7d2f1f529f2cb2cf76274dd403_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fd91390a75743ed300c316e0920e2036dbbe3b82a33135cabbd348f48ad51a7 = $this->env->getExtension("native_profiler");
        $__internal_1fd91390a75743ed300c316e0920e2036dbbe3b82a33135cabbd348f48ad51a7->enter($__internal_1fd91390a75743ed300c316e0920e2036dbbe3b82a33135cabbd348f48ad51a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1fd91390a75743ed300c316e0920e2036dbbe3b82a33135cabbd348f48ad51a7->leave($__internal_1fd91390a75743ed300c316e0920e2036dbbe3b82a33135cabbd348f48ad51a7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ec31651892805593744391e1a49f4c304be3ba4c214e32bc752ffe9b5d41036 = $this->env->getExtension("native_profiler");
        $__internal_0ec31651892805593744391e1a49f4c304be3ba4c214e32bc752ffe9b5d41036->enter($__internal_0ec31651892805593744391e1a49f4c304be3ba4c214e32bc752ffe9b5d41036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ec31651892805593744391e1a49f4c304be3ba4c214e32bc752ffe9b5d41036->leave($__internal_0ec31651892805593744391e1a49f4c304be3ba4c214e32bc752ffe9b5d41036_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4927b2b4e16c33c7e03dac294d3266e09cdcc95ff4fd4e59f37b043fb2cf095c = $this->env->getExtension("native_profiler");
        $__internal_4927b2b4e16c33c7e03dac294d3266e09cdcc95ff4fd4e59f37b043fb2cf095c->enter($__internal_4927b2b4e16c33c7e03dac294d3266e09cdcc95ff4fd4e59f37b043fb2cf095c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4927b2b4e16c33c7e03dac294d3266e09cdcc95ff4fd4e59f37b043fb2cf095c->leave($__internal_4927b2b4e16c33c7e03dac294d3266e09cdcc95ff4fd4e59f37b043fb2cf095c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54996b9fcdb693e908147e8aac2db00f05d07866198d889766b744369be8324d = $this->env->getExtension("native_profiler");
        $__internal_54996b9fcdb693e908147e8aac2db00f05d07866198d889766b744369be8324d->enter($__internal_54996b9fcdb693e908147e8aac2db00f05d07866198d889766b744369be8324d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_54996b9fcdb693e908147e8aac2db00f05d07866198d889766b744369be8324d->leave($__internal_54996b9fcdb693e908147e8aac2db00f05d07866198d889766b744369be8324d_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
