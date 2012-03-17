<?php

/* CoreTemplateBundle:Default:index.html.twig */
class __TwigTemplate_cd5d460b352cab0ddd26ab3347634711 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return "CoreTemplateBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "CoreTemplateBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
