<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_23335037625d9417b0c68184127b9eb2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_jsonencode_filter($this->getAttribute($_exception_, "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
