<?php

/* PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig */
class __TwigTemplate_15ea2f2f68d8ea7b6bba2474177ddf2595d2f75948f3eab8e0a14c8b43647684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig", 25);
        $this->blocks = array(
            'addon_card' => array($this, 'block_addon_card'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_addon_card($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_notification_update.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig", 28)->display(array_merge($context, array("module" =>         // line 30
(isset($context["module"]) ? $context["module"] : null), "display_type" =>         // line 31
(isset($context["display_type"]) ? $context["display_type"] : null), "origin" => ((        // line 32
array_key_exists("origin", $context)) ? (_twig_default_filter((isset($context["origin"]) ? $context["origin"] : null), "none")) : ("none")))));
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 32,  34 => 31,  33 => 30,  31 => 28,  28 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig", "/home/lyricscl/meeta.online/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_notification_update.html.twig");
    }
}
