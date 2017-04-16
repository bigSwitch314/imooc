<?php

/* layout.html */
class __TwigTemplate_5f7793ca9366b8382062dd80f8446fc3229c353c632e2fd4cb51d01e0171bba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
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
        echo "<html>
<body>

<header>header</header>

<content>
    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "</content>

<footer>footer</footer>
</body>
</html>";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  38 => 7,  30 => 10,  28 => 7,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>

<header>header</header>

<content>
    {% block content %}

    {% endblock %}
</content>

<footer>footer</footer>
</body>
</html>", "layout.html", "/home/wwwroot/default/app/view/index/layout.html");
    }
}
