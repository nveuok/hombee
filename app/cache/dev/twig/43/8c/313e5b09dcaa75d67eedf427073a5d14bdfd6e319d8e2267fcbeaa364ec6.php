<?php

/* BimotorMainBundle:Main:index.html.twig */
class __TwigTemplate_438c313e5b09dcaa75d67eedf427073a5d14bdfd6e319d8e2267fcbeaa364ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 6
        echo "
    <p show-html template=\"{{ template }}\"></p>
    ";
        echo "
";
    }

    public function getTemplateName()
    {
        return "BimotorMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  31 => 4,  28 => 3,);
    }
}
