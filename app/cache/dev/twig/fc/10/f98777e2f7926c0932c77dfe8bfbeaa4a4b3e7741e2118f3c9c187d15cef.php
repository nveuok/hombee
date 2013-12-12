<?php

/* BimotorMainBundle:User:new.html.twig */
class __TwigTemplate_fc10f98777e2f7926c0932c77dfe8bfbeaa4a4b3e7741e2118f3c9c187d15cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-md-offset-3 col-md-6 jumbotron\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create new user"), "html", null, true);
        echo "</h1>

        <div class=\"input-group \">
            <span class=\"input-group-addon\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("First name"), "html", null, true);
        echo "</span>
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"input-group \">
            <span class=\"input-group-addon\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last name"), "html", null, true);
        echo "</span>
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"input-group \">
            <span class=\"input-group-addon\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
        echo "</span>
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"input-group \"><span for=\"bimotor_mainbundle_user_password\" class=\"required\">Password</span>
        </div>
        <div class=\"input-group \">
        </div>
        <div class=\"input-group \">


        </div>
        ";
        // line 28
        echo "
        ";
        // line 30
        echo "
        ";
        // line 32
        echo "        ";
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        // line 36
        echo "        ";
        // line 37
        echo "
        <ul class=\"record_actions\">
            <li>
                <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
                    Back to the list
                </a>
            </li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BimotorMainBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  93 => 37,  91 => 36,  89 => 35,  87 => 34,  85 => 33,  83 => 32,  80 => 30,  77 => 28,  64 => 17,  60 => 16,  54 => 13,  50 => 12,  44 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
