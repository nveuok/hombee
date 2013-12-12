<?php

/* BimotorMainBundle:Security:login.html.twig */
class __TwigTemplate_d892e7c040afcf204e18878500cc435afd303859247310c2bb710ca850aafaf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::ajax_base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::ajax_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div ng-controller=\"LoginController\" data-usernr=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))), "html", null, true);
        echo "\">
        <form novalidate>
            <div class=\"user-container center-block\">

                ";
        // line 9
        echo "                <div class=\"center\">
                    <div class=\"alert alert-danger field-title\" ng-hide=\"noUser\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select an user"), "html", null, true);
        echo " <span class=\"badge badge-green\">(";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))), "html", null, true);
        echo ")</span></div>
                    <div class=\"alert alert-success field-title\" ng-show=\"userSelected\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enter password"), "html", null, true);
        echo "</div>
                    <br/>
                    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["index"] => $context["user"]) {
            // line 14
            echo "                        <a href=\"#\" class=\"btn btn-info user-logo\" ng-click=\"selectUser(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo ")\" ng-show=\"users.user";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo ".visible\">
                            <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(((isset($context["upload_dir_users"]) ? $context["upload_dir_users"] : $this->getContext($context, "upload_dir_users")) . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image"))), "user"), "html", null, true);
            echo "\"/>
                            <input type=\"hidden\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "\" username=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "\" usernumber=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" ng-disabled=\"!users.user";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo ".visible\" ng-model=\"username\"/>
                        </a>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </div>

                ";
        // line 22
        echo "                <div class=\"input-group padding5\" ng-show=\"noUser\">
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-wrench\"></span></span>
                    <input type=\"password\" name=\"password\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "\" class=\"form-control\" ng-model=\"password\"/>
                    ";
        // line 26
        echo "                    <span class=\"input-group-btn\"><button ng-click=\"login()\" class=\"btn btn-primary form-control\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "</button></span>
                </div>
                <span class=\"label label-danger\" ng-show=\"error.password\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password incorrect!"), "html", null, true);
        echo "</span>

                ";
        // line 31
        echo "                <div ng-show=\"hideLoginButton\" class=\"login-buttons center\">
                    <button class=\"btn btn-info btn-sm\" ng-click=\"showAllUsers()\" ng-show=\"userSelected\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Change user"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BimotorMainBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  127 => 31,  122 => 28,  116 => 26,  112 => 24,  108 => 22,  104 => 19,  81 => 16,  77 => 15,  70 => 14,  53 => 13,  48 => 11,  42 => 10,  39 => 9,  31 => 4,  28 => 3,);
    }
}
