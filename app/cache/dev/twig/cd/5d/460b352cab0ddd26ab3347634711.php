<?php

/* CoreTemplateBundle:Default:index.html.twig */
class __TwigTemplate_cd5d460b352cab0ddd26ab3347634711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreTemplateBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active"] = "todos";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo " <!-- Main hero unit for a primary marketing message or call to action -->
      <div class=\"row\" style=\" margin: 0px;\">
        <div class=\"span7\">
        \t<h1>Estamos trabajando!</h1>
        <p>Estamos construyendo una comunidad para que no sea tan difícil encontrar un sitio agradable y cercano para salir de fiesta!</p>
        </div>
        <div class=\"span3 pull-right\">
        
        <div class=\"row\">
        <div class=\"register span3 well pull-right well-hl\" style=\"margin-right: 20px\">
        \t<p class=\"title\">SÉ EL PRIMERO</p>
        \t<hr>
        \t<small>Registrate para recibir información.</h6>
        \t<form class=\"form\" ";
        // line 17
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"post\">
        \t\t\t<div class=\"controls\">
        \t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
        \t\t\t</div>
        \t\t\t<div class=\"controls\">
        \t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "username"));
        echo "
        \t\t\t</div>
        \t\t\t<div class=\"controls\">
        \t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "plainPassword"));
        echo "
        \t\t\t</div>

        \t\t\t<label class=\"control-label\" for=\"email\">
        \t\t\t\tFecha de Nacimiento
        \t\t\t</label>
        \t\t\t<div class=\"controls\">
        \t\t\t\t<select name=\"birthday_day\" id=\"birthday_day\" class=\"span1\"><option value=\"-1\">Día:</option><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option><option value=\"21\">21</option><option value=\"22\">22</option><option value=\"23\">23</option><option value=\"24\">24</option><option value=\"25\">25</option><option value=\"26\">26</option><option value=\"27\">27</option><option value=\"28\">28</option><option value=\"29\">29</option><option value=\"30\">30</option><option value=\"31\">31</option></select>
        \t\t\t\t
        \t\t\t\t<select name=\"birthday_month\" id=\"birthday_month\" class=\"span1\" style=\"width:90px\"><option value=\"-1\">Mes:</option><option value=\"1\">enero</option><option value=\"2\">febrero</option><option value=\"3\">marzo</option><option value=\"4\">abril</option><option value=\"5\">mayo</option><option value=\"6\">junio</option><option value=\"7\">julio</option><option value=\"8\">agosto</option><option value=\"9\">septiembre</option><option value=\"10\">octubre</option><option value=\"11\">noviembre</option><option value=\"12\">diciembre</option></select> 
        \t\t\t\t
        \t\t\t\t<select name=\"birthday_year\" id=\"birthday_year\" class=\"span1\"><option value=\"-1\">Año:</option><option value=\"2012\">2012</option><option value=\"2011\">2011</option><option value=\"2010\">2010</option><option value=\"2009\">2009</option><option value=\"2008\">2008</option><option value=\"2007\">2007</option><option value=\"2006\">2006</option><option value=\"2005\">2005</option><option value=\"2004\">2004</option><option value=\"2003\">2003</option><option value=\"2002\">2002</option><option value=\"2001\">2001</option><option value=\"2000\">2000</option><option value=\"1999\">1999</option><option value=\"1998\">1998</option><option value=\"1997\">1997</option><option value=\"1996\">1996</option><option value=\"1995\">1995</option><option value=\"1994\">1994</option><option value=\"1993\">1993</option><option value=\"1992\">1992</option><option value=\"1991\">1991</option><option value=\"1990\">1990</option><option value=\"1989\">1989</option><option value=\"1988\">1988</option><option value=\"1987\">1987</option><option value=\"1986\">1986</option><option value=\"1985\">1985</option><option value=\"1984\">1984</option><option value=\"1983\">1983</option><option value=\"1982\">1982</option><option value=\"1981\">1981</option><option value=\"1980\">1980</option><option value=\"1979\">1979</option><option value=\"1978\">1978</option><option value=\"1977\">1977</option><option value=\"1976\">1976</option><option value=\"1975\">1975</option><option value=\"1974\">1974</option><option value=\"1973\">1973</option><option value=\"1972\">1972</option><option value=\"1971\">1971</option><option value=\"1970\">1970</option><option value=\"1969\">1969</option><option value=\"1968\">1968</option><option value=\"1967\">1967</option><option value=\"1966\">1966</option><option value=\"1965\">1965</option><option value=\"1964\">1964</option><option value=\"1963\">1963</option><option value=\"1962\">1962</option><option value=\"1961\">1961</option><option value=\"1960\">1960</option><option value=\"1959\">1959</option><option value=\"1958\">1958</option><option value=\"1957\">1957</option><option value=\"1956\">1956</option><option value=\"1955\">1955</option><option value=\"1954\">1954</option><option value=\"1953\">1953</option><option value=\"1952\">1952</option><option value=\"1951\">1951</option><option value=\"1950\">1950</option><option value=\"1949\">1949</option><option value=\"1948\">1948</option><option value=\"1947\">1947</option><option value=\"1946\">1946</option><option value=\"1945\">1945</option><option value=\"1944\">1944</option><option value=\"1943\">1943</option><option value=\"1942\">1942</option><option value=\"1941\">1941</option><option value=\"1940\">1940</option><option value=\"1939\">1939</option><option value=\"1938\">1938</option><option value=\"1937\">1937</option><option value=\"1936\">1936</option><option value=\"1935\">1935</option><option value=\"1934\">1934</option><option value=\"1933\">1933</option><option value=\"1932\">1932</option><option value=\"1931\">1931</option><option value=\"1930\">1930</option><option value=\"1929\">1929</option><option value=\"1928\">1928</option><option value=\"1927\">1927</option><option value=\"1926\">1926</option><option value=\"1925\">1925</option><option value=\"1924\">1924</option><option value=\"1923\">1923</option><option value=\"1922\">1922</option><option value=\"1921\">1921</option><option value=\"1920\">1920</option><option value=\"1919\">1919</option><option value=\"1918\">1918</option><option value=\"1917\">1917</option><option value=\"1916\">1916</option><option value=\"1915\">1915</option><option value=\"1914\">1914</option><option value=\"1913\">1913</option><option value=\"1912\">1912</option><option value=\"1911\">1911</option><option value=\"1910\">1910</option><option value=\"1909\">1909</option><option value=\"1908\">1908</option><option value=\"1907\">1907</option><option value=\"1906\">1906</option><option value=\"1905\">1905</option></select>
        \t\t\t</div>
        \t\t\t

        \t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "

        \t\t
        \t\t\t<button type=\"submit\" class=\"btn btn-primary\">Registrarme!</button>
        \t\t\t";
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "login"), "method")) {
            // line 45
            echo "        \t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlash", array(0 => "login"), "method"), "html", null, true);
            echo "
        \t\t\t</div>
        \t\t\t";
        }
        // line 49
        echo "        \t\t
</form>
\t</div>
\t</div>
        </div>
      </div>
<br><br>
      <!-- Example row of columns -->
      <div class=\"row row-promo\">
        <div class=\"span3\">
          <h2>Eventos</h2>
           <p>Sigue los promotores que más te interesan, encuentra eventos relevantes y compártelos a través de tu red social favorita!</p>

        </div>
        <div class=\"span3\">
          <h2>Listas y Promociones</h2>
           <p>Accede a promociones exclusivas de nuestra plataforma.</p>

       </div>
        <div class=\"span3\">
          <h2>Contenidos</h2>
          <p>Descubre todo lo que sucedió en los eventos pasados y compártelo con tus amigos.</a></p>
        </div>
      </div>
      
      
";
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
