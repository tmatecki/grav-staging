<?php

/* error.html.twig */
class __TwigTemplate_2f239f4f1b4c4c33cdf3adf630f6e21692ea445dd2109f932d3acb0f0ffc4278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topbar($context, array $blocks = array())
    {
    }

    // line 4
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<div id=\"chapter\">
    \t<div id=\"body-inner\">
    \t\t<h1>Error ";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "code", array());
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t</p>
\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  47 => 9,  43 => 7,  40 => 6,  35 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block topbar %}{% endblock %}*/
/* {% block navigation %}{% endblock %}*/
/* */
/* {% block content %}*/
/* 	<div id="chapter">*/
/*     	<div id="body-inner">*/
/*     		<h1>Error {{ page.header.code }}</h1>*/
/* 			<p>*/
/* 				{{ page.content }}*/
/* 			</p>*/
/* 		</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
