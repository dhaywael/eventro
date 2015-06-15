<?php

/* eventroEventroBundle:Event:show.html.twig */
class __TwigTemplate_b268b851a70058f32190a8f1cbe8a8be8719bda2256f34949107957cdc3c5156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("eventroEventroBundle::layout.html.twig", "eventroEventroBundle:Event:show.html.twig", 1);
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "label", array()), "html", null, true);
        echo "</h1>

 <div class=\"row\">

            <div class=\"col-md-8\">
                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img class=\"img-responsive\" src=\"http://placehold.it/750x500\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img class=\"img-responsive\" src=\"http://placehold.it/750x500\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img class=\"img-responsive\" src=\"http://placehold.it/750x500\" alt=\"\">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    </a>
                </div>
                <br>
                <h3>Description :</h3>
                <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</p>
            </div>

            <div class=\"col-md-4\">
                <h3>Evenement Details</h3>
                <ul>
                    <li>Date : ";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</li>
                    <li>Début : ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startTime", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</li>
                    <li>Fin : ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endTime", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</li>
                    
                </ul>
                 <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("events");
        echo "\">
                            Back to the list
                        </a>
                    </li>
                    ";
        // line 57
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 58
            echo "                    <li>
                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                            Edit
                        </a>
                    </li>
                    <li>";
            // line 63
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "</li>
                    ";
        }
        // line 65
        echo "                </ul>
                <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
                <div style=\"overflow:hidden;height:340px;width:350px;\">
                    <div id=\"gmap_canvas\" style=\"height:340px;width:350px;\"></div>
                    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                    <a class=\"google-map-code\" href=\"http://premium-wordpress-themes.org\" id=\"get-map-data\">http://premium-wordpress-themes.org</a></div><script type=\"text/javascript\"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById(\"gmap_canvas\"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:\"<b>The Breslin</b><br/>2880 Broadway<br/> New York\" });google.maps.event.addListener(marker, \"click\", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>

        </div>
";
    }

    public function getTemplateName()
    {
        return "eventroEventroBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 65,  115 => 63,  108 => 59,  105 => 58,  103 => 57,  96 => 53,  88 => 48,  84 => 47,  80 => 46,  71 => 40,  31 => 4,  28 => 3,  11 => 1,);
    }
}
