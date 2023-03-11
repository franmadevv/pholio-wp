<?php

/* base.twig */
class __TwigTemplate_098b3429c27164f0de6cf1aa63f0a50cbbc2056aaa6039b36b4e9751fa6aadc1 extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wrap\">";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 3
        echo "</div>
";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "base.twig", "C:\\xampp\\htdocs\\Pholio\\wp-content\\plugins\\gallery-by-supsystic\\app\\templates\\base.twig");
    }
}
