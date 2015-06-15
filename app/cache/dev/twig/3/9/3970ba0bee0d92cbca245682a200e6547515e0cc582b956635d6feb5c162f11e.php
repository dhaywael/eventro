<?php

/* eventroEventroBundle:Event:index.html.twig */
class __TwigTemplate_3970ba0bee0d92cbca245682a200e6547515e0cc582b956635d6feb5c162f11e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("eventroEventroBundle::layout.html.twig", "eventroEventroBundle:Event:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eventroEventroBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>List des événements</h1>

        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "            <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "label", array()), "html", null, true);
            echo "</a></h3>
                <h4>";
            // line 15
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</h4>
                <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</p>
                <a class=\"btn btn-primary\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Lire la Suite</i></a>
            </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "       
    ";
    }

    public function getTemplateName()
    {
        return "eventroEventroBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  64 => 17,  60 => 16,  54 => 15,  48 => 14,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
