<?php

/* ::ajax_base.html.twig */
class __TwigTemplate_6e6ea155da6dda9351a03d1e94a10c2025ec5369c9b4e0405a98ad616b88b3f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::ajax_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  33 => 2,  30 => 1,  26 => 5,  23 => 4,  21 => 1,  150 => 40,  143 => 37,  140 => 36,  130 => 30,  126 => 29,  120 => 26,  115 => 24,  109 => 20,  92 => 17,  88 => 16,  78 => 15,  74 => 14,  67 => 13,  50 => 12,  45 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
