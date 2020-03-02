<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet"/>
    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all"/>

    @yield('link')
    <!--[if IE 6]>
    <link href="default_ie6.css" rel="stylesheet" type="text/css"/><![endif]-->

</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="#">SimpleWork</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{Request::path() ===  'home' || '' ? 'current_page_item' : ''}} "><a href="/home" accesskey="1" title="">Homepage</a>
                </li>
                <li class="{{Request::path() ===  'products' ? 'current_page_item' : ''}}"><a href="/products"
                                                                                              accesskey="4" title="">Products</a>
                </li>
                <li class="{{Request::path() === 'product/create' ? 'current_page_item' : ''}}"><a href="{{ url('product/create') }}"
                                                                                                   accesskey="5"
                                                                                                   title="">Add
                        product</a>
                </li>
                @auth
                    <li class="{{Request::path() === 'logout' ? 'current_page_item' : ''}}"><a href="/logout"
                                                                                               accesskey="5" title="">Logout</a>
                    </li>
                @else
                    <li class="{{Request::path() === 'login' ? 'current_page_item' : ''}}"><a href="/login"
                                                                                              accesskey="5"
                                                                                              title="">Login</a>
                    </li>
                @endauth
                <li class="{{Request::path() === 'account' ? 'current_page_item' : ''}}"><a href="/account"
                                                                                          accesskey="5"
                                                                                          title="">Account</a>
                </li>
            </ul>
        </div>
    </div>
    @yield('header')
</div>
<div class="container" style="padding: 2px 16px">
    @yield('content')
</div>
<div id="copyright" class="container">
    <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotograph</a> | Design by <a
                href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
