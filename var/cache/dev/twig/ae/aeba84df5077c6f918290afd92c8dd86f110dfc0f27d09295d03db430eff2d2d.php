<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_44c134d48ac7acc2903bd99365a22aaefec56dca836bae192086481a405fbcd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8144f6c3f8e88a3c6f9e57be066ac3fa8e7354d239b8de24327b9247e72db11f = $this->env->getExtension("native_profiler");
        $__internal_8144f6c3f8e88a3c6f9e57be066ac3fa8e7354d239b8de24327b9247e72db11f->enter($__internal_8144f6c3f8e88a3c6f9e57be066ac3fa8e7354d239b8de24327b9247e72db11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8144f6c3f8e88a3c6f9e57be066ac3fa8e7354d239b8de24327b9247e72db11f->leave($__internal_8144f6c3f8e88a3c6f9e57be066ac3fa8e7354d239b8de24327b9247e72db11f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2cc3e3dc4bf7cf19c1fc96cad574f8fbde900f6539ef23324830ec77512b9b10 = $this->env->getExtension("native_profiler");
        $__internal_2cc3e3dc4bf7cf19c1fc96cad574f8fbde900f6539ef23324830ec77512b9b10->enter($__internal_2cc3e3dc4bf7cf19c1fc96cad574f8fbde900f6539ef23324830ec77512b9b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2cc3e3dc4bf7cf19c1fc96cad574f8fbde900f6539ef23324830ec77512b9b10->leave($__internal_2cc3e3dc4bf7cf19c1fc96cad574f8fbde900f6539ef23324830ec77512b9b10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4dcb165eb08f8ffd5f5e65dc53ceb553435bd2c63663c15c73d6a72546a40a2 = $this->env->getExtension("native_profiler");
        $__internal_a4dcb165eb08f8ffd5f5e65dc53ceb553435bd2c63663c15c73d6a72546a40a2->enter($__internal_a4dcb165eb08f8ffd5f5e65dc53ceb553435bd2c63663c15c73d6a72546a40a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a4dcb165eb08f8ffd5f5e65dc53ceb553435bd2c63663c15c73d6a72546a40a2->leave($__internal_a4dcb165eb08f8ffd5f5e65dc53ceb553435bd2c63663c15c73d6a72546a40a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_626033796a0b1c6344a5b51adcdf52fdb8aef7fcb968756d39a55da608d301dc = $this->env->getExtension("native_profiler");
        $__internal_626033796a0b1c6344a5b51adcdf52fdb8aef7fcb968756d39a55da608d301dc->enter($__internal_626033796a0b1c6344a5b51adcdf52fdb8aef7fcb968756d39a55da608d301dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_626033796a0b1c6344a5b51adcdf52fdb8aef7fcb968756d39a55da608d301dc->leave($__internal_626033796a0b1c6344a5b51adcdf52fdb8aef7fcb968756d39a55da608d301dc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
