<?php

/* ::base.html.twig */
class __TwigTemplate_61b2c876ac00505675a434d7cbf078567059d714387520951e6265a63819672f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<html ng-app=\"BimotorApp\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    ";
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
</head>
<body>
    ";
        // line 13
        $this->env->loadTemplate("::menu.html.twig")->display($context);
        // line 14
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "
    <script>
        var jsBaseParams = {
            'getUsersUrl': '";
        // line 24
        echo $this->env->getExtension('routing')->getPath("get_users");
        echo "',
            'loginUrl': '";
        // line 25
        echo $this->env->getExtension('routing')->getPath("login");
        echo "',
            'uploadDirUsers': '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["upload_dir_users"]) ? $context["upload_dir_users"] : $this->getContext($context, "upload_dir_users")), "html", null, true);
        echo "',
            'loginCheckUrl': '";
        // line 27
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "'
        }
    </script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/js/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/js/seed/lib/angular/angular-sanitize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/js/seed/js/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/js/seed/js/AppController.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/js/seed/js/LoginController.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/js/seed/js/services.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bimotormain/js/seed/js/directives.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "        <div class=\"container\" ng-controller=\"AppController\">
            <div class=\"row\">
                ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "            </div>
        </div>
    ";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 39,  149 => 17,  143 => 18,  141 => 17,  137 => 15,  134 => 14,  129 => 7,  123 => 5,  118 => 40,  116 => 39,  112 => 38,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  57 => 21,  54 => 14,  52 => 13,  46 => 10,  41 => 9,  39 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 2,);
    }
}
