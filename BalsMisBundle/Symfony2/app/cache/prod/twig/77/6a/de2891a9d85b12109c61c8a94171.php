<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_776ade2891a9d85b12109c61c8a94171 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_jsonencode_filter(array("error" => array("code" => $_status_code_, "message" => $_status_text_)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
