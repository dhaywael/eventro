<?php

/* eventroEventroBundle:Default:index.html.twig */
class __TwigTemplate_0953deb051e1110cffa8122896f7f82e93dff500396f2c5b7b27a0fbdaff092d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("eventroEventroBundle::layout.html.twig", "eventroEventroBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Eventro - Welcome";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
<div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Welcome to Eventro
                </h1>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-check\"></i> Bootstrap v3.2.0</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href=\"#\" class=\"btn btn-default\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-gift\"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href=\"#\" class=\"btn btn-default\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4><i class=\"fa fa-fw fa-compass\"></i> Easy to Use</h4>
                    </div>
                    <div class=\"panel-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href=\"#\" class=\"btn btn-default\">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Portfolio Heading</h2>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-portfolio img-hover\" src=\"http://placehold.it/700x450\" alt=\"\">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Modern Business Features</h2>
            </div>
            <div class=\"col-md-6\">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.2.0</strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class=\"col-md-6\">
                <img class=\"img-responsive\" src=\"http://placehold.it/700x450\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class=\"col-md-4\">
                    <a class=\"btn btn-lg btn-default btn-block\" href=\"#\">Call to Action</a>
                </div>
            </div>
        </div>
    

    
";
    }

    public function getTemplateName()
    {
        return "eventroEventroBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  35 => 7,  29 => 3,  11 => 1,);
    }
}
