<?php

/* base.html.twig */
class __TwigTemplate_0ba5179cb1653ca5072f7e852b54d3918d9d3269a7909644e4a1920960d39598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01f1591f2941f2eb44481652a2364e74be4088cbfa2e20728d66ed55c0c1de28 = $this->env->getExtension("native_profiler");
        $__internal_01f1591f2941f2eb44481652a2364e74be4088cbfa2e20728d66ed55c0c1de28->enter($__internal_01f1591f2941f2eb44481652a2364e74be4088cbfa2e20728d66ed55c0c1de28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_01f1591f2941f2eb44481652a2364e74be4088cbfa2e20728d66ed55c0c1de28->leave($__internal_01f1591f2941f2eb44481652a2364e74be4088cbfa2e20728d66ed55c0c1de28_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_46c33b81e05936677df984ceccb4c6eccd64c134ddd12594192b715392ed6942 = $this->env->getExtension("native_profiler");
        $__internal_46c33b81e05936677df984ceccb4c6eccd64c134ddd12594192b715392ed6942->enter($__internal_46c33b81e05936677df984ceccb4c6eccd64c134ddd12594192b715392ed6942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_46c33b81e05936677df984ceccb4c6eccd64c134ddd12594192b715392ed6942->leave($__internal_46c33b81e05936677df984ceccb4c6eccd64c134ddd12594192b715392ed6942_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be9e12857a15a210a5c9dada96c4e0e86aa5ad6f5d9fd351ee9829eec7342920 = $this->env->getExtension("native_profiler");
        $__internal_be9e12857a15a210a5c9dada96c4e0e86aa5ad6f5d9fd351ee9829eec7342920->enter($__internal_be9e12857a15a210a5c9dada96c4e0e86aa5ad6f5d9fd351ee9829eec7342920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_be9e12857a15a210a5c9dada96c4e0e86aa5ad6f5d9fd351ee9829eec7342920->leave($__internal_be9e12857a15a210a5c9dada96c4e0e86aa5ad6f5d9fd351ee9829eec7342920_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f31c19b56bed8784f6723e7fb2d29856a7bdf4358b47511f1b1b6bea0d8b7fab = $this->env->getExtension("native_profiler");
        $__internal_f31c19b56bed8784f6723e7fb2d29856a7bdf4358b47511f1b1b6bea0d8b7fab->enter($__internal_f31c19b56bed8784f6723e7fb2d29856a7bdf4358b47511f1b1b6bea0d8b7fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f31c19b56bed8784f6723e7fb2d29856a7bdf4358b47511f1b1b6bea0d8b7fab->leave($__internal_f31c19b56bed8784f6723e7fb2d29856a7bdf4358b47511f1b1b6bea0d8b7fab_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5b37716fcd7f1ec4cbb135b97b52741a4bc540fff7a54e2c51d0621b5485c62 = $this->env->getExtension("native_profiler");
        $__internal_b5b37716fcd7f1ec4cbb135b97b52741a4bc540fff7a54e2c51d0621b5485c62->enter($__internal_b5b37716fcd7f1ec4cbb135b97b52741a4bc540fff7a54e2c51d0621b5485c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b5b37716fcd7f1ec4cbb135b97b52741a4bc540fff7a54e2c51d0621b5485c62->leave($__internal_b5b37716fcd7f1ec4cbb135b97b52741a4bc540fff7a54e2c51d0621b5485c62_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
